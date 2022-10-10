<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideothequeController extends Controller
{
    //
    function videotheque()
    {
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user

            ];

            $videotheque = DB::table('videotheque')
                ->get();
        }
        return view('admin.videotheque', $data, compact("videotheque"));
    }

    public function affiche_videos()
    {

            $videotheque = DB::table('videotheque')
            ->orderBy('id', 'desc')
            ->paginate(6)
            ->fragment('videotheque');
            /* dd($videotheque); */

        return view('videotheque', compact("videotheque"));
    }

    function add_videotheque()
    {
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user
            ];

            $videotheque = DB::table('videotheque')->get();
        }
        return view('admin.add_videotheque', $data, compact("videotheque"));
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            "lien" => "required",
            "date" => "required",
            "heure" => "required",
        ]);

        /* $image = $request->file("file");
        $imageName = time() . "." . $image->extension();
        $image->move(public_path("images"), $imageName); */

        $titre = $request->input('titre');
        $lien = $request->input('lien');
        $date = $request->input('date');
        $heure = $request->input('heure');

        DB::insert('insert into videotheque (titre, lien, date, heure) values (?, ?, ?, ?)', [$titre, $lien, $date, $heure]);


        return redirect()->route("app_add_videotheque")
            ->with("success", "Enrégistré avec succès !");
    }

    public function edit($id)
    {
        //
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user
            ];

            $edit = DB::table('videotheque')->where("id", $id)->first();
        }


        return view("admin.Edit_videotheque", $data, compact("edit"));
    }



    public function update(Request $request)
    {
        //

        $request->validate([
            "lien" => "required",
            "date" => "required",
        ]);


            $id = $request->input('id');
            $titre = $request->input('titre');
            $lien = $request->input('lien');
            $date = $request->input('date');
            $heure = $request->input('heure');
            /* $id_categorie = $request->input('id_categorie'); */

            DB::table('videotheque')
                ->where('id', $id)
                ->update([
                    'titre' => $titre,
                    'lien' => $lien,
                    'date' => $date,
                    'heure' => $heure,

                ]);


        return redirect()->route("app_videotheque")
            ->with("success", "Photo " . $id . " modifiée avec succès !");
    }



    public function destroy($id)
    {
        //
        $row = DB::table('videotheque')
            ->where("id", $id)
            ->first();


        DB::table('videotheque')->where("id", $id)->delete();

        /* Supprimer la photo du dossier */
        unlink(public_path("images") . "/" . $row->photo);

        return redirect()->route("app_videotheque")
            ->with("success", "Video supprimée avec succès !");
    }
}
