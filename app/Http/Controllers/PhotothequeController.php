<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotothequeController extends Controller
{
    //
    function phototheque()
    {
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user

            ];

            $phototheque = DB::table('phototheque')
                ->get();
        }
        return view('admin.phototheque', $data, compact("phototheque"));
    }

    public function affiche_photos()
    {

            $phototheque = DB::table('phototheque')
            ->orderBy('id', 'desc')
            ->paginate(6)
            ->fragment('phototheque');
            /* dd($phototheque); */

        return view('phototheque', compact("phototheque"));
    }

    function add_phototheque()
    {
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user
            ];

            $phototheque = DB::table('phototheque')->get();
        }
        return view('admin.add_phototheque', $data, compact("phototheque"));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            "file" => "required",
            "date" => "required",
            "heure" => "required",
        ]);

        $image = $request->file("file");
        $imageName = time() . "." . $image->extension();
        $image->move(public_path("images"), $imageName);

        $titre = $request->input('titre');
        $date = $request->input('date');
        $heure = $request->input('heure');

        DB::insert('insert into phototheque (photo, titre, date, heure) values (?, ?, ?, ?)', [$imageName, $titre, $date, $heure]);


        return redirect()->route("app_add_phototheque")
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

            $edit = DB::table('phototheque')->where("id", $id)->first();
        }


        return view("admin.Edit_phototheque", $data, compact("edit"));
    }



    public function update(Request $request)
    {
        //

        $request->validate([
            /* "file" => "required", */
            "date" => "required",
        ]);

        if ($request->file("file") == "") {
            $id = $request->input('id');
            $titre = $request->input('titre');
            $date = $request->input('date');
            $heure = $request->input('heure');
            /* $id_categorie = $request->input('id_categorie'); */

            DB::table('phototheque')
                ->where('id', $id)
                ->update([
                    'titre' => $titre,
                    'date' => $date,
                    'heure' => $heure,

                ]);
        } else {
            $image = $request->file("file");
            $imageName = time() . "." . $image->extension();
            $image->move(public_path("images"), $imageName);

            $id = $request->input('id');
            $titre = $request->input('titre');
            $date = $request->input('date');
            $heure = $request->input('heure');

            DB::table('phototheque')
                ->where('id', $id)
                ->update([
                    'photo' => $imageName,
                    'titre' => $titre,
                    'date' => $date,
                    'heure' => $heure,
                ]);
        }

        return redirect()->route("app_phototheque")
            ->with("success", "Photo " . $id . " modifiée avec succès !");
    }



    public function destroy($id)
    {
        //
        $row = DB::table('phototheque')
            ->where("id", $id)
            ->first();


        DB::table('phototheque')->where("id", $id)->delete();

        /* Supprimer la photo du dossier */
        unlink(public_path("images") . "/" . $row->photo);

        return redirect()->route("app_phototheque")
            ->with("success", "Photo supprimée avec succès !");
    }

}
