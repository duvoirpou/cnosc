<?php

namespace App\Http\Controllers;

use App\Models\Actualites;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserAuthController extends Controller
{
    function login()
    {
        return view("auth.login");
    }

    function register()
    {
        return view("auth.register");
    }



    public function create(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:5|max:12",
        ]);

        /* $user = new User;
        $user->name = $request->nom;
        $user->email = $request->email; */
        /* hasher le mdp */
        /* $user->password = Hash::make($request->password);
        $query = $user->save(); */

        /* USE QUERY BUILDER */
        $query = DB::table('users')
            ->insert([
                "name" => $request->nom,
                "email" => $request->email,
                "password" => Hash::make($request->password),
            ]);

        if ($query) {
            return back()->with('success', 'Compte créé avec succès');
        } else {
            return back()->with('fail', 'Veuillez réessayer');
        }
    }



    function check(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:5|max:12",
        ]);

        /* Si le formulaire est validé avec succes */
        /* $user = User::where('email', '=', $request->email)->first(); */

        /* USE QUERY BUILDER */
        $user = DB::table('users')
            ->where("email", $request->email)
            ->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                /* Si le mot de passe correspond, alors l utilisateur accede à son profil */
                $request->session()->put('LoggedUser', $user->id);
                return redirect('profile');
            } else {
                return back()->with('fail', 'Mot de passe incorrect');
            }
        } else {
            return back()->with('fail', 'Ce compte nexiste pas');
        }
    }



    function profile()
    {
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user
            ];
        }
        return view('admin.profile', $data);
    }



    function actualites()
    {
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user

            ];

            $actualites = DB::table('actualites')
                ->get();
        }
        return view('admin.actualites', $data, compact("actualites"));
    }



    function add_actualites()
    {
        if (session()->has("LoggedUser")) {
            /* $user = User::where('id', '=', session("LoggedUser"))->first(); */

            $user = DB::table('users')
                ->where("id", session("LoggedUser"))
                ->first();
            $data = [
                "LoggedUserInfo" => $user
            ];

            $actualites = DB::table('actualites')->get();
            $categories = DB::table('categories')->get();
        }
        return view('admin.add_actualites', $data, compact("actualites", "categories"));
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            "file" => "required",
            "titre" => "required",
            "auteur" => "required",
            "libelle" => "required",
            "corps" => "required",
            /* "date" => "required", */
            "mois" => "required",
            /* "id_categorie" => "required", */
        ]);

        $image = $request->file("file");
        $imageName = time() . "." . $image->extension();
        $image->move(public_path("images"), $imageName);

        $titre = $request->input('titre');
        $auteur = $request->input('auteur');
        $corps = $request->input('corps');
        $libelle = $request->input('libelle');
        /* $date = $request->input('date'); */
        $heure = $request->input('heure');
        $mois = $request->input('mois');
        /* $id_categorie = $request->input('id_categorie'); */

        DB::insert('insert into actualites (photo, titre, auteur, libelle, corps, date, heure, mois) values (?, ?, ?, ?, ?, CURRENT_DATE(), ?, ?)', [$imageName, $titre, $auteur, $libelle, $corps, $heure, $mois]);


        return redirect()->route("app_add_actualites")
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

            $edit = DB::table('actualites')->where("id_actualite", $id)->first();
            $categories = DB::table('categories')->get();
        }


        return view("admin.Edit", $data, compact("edit", "categories"));
    }


    public function update(Request $request)
    {
        //

        $request->validate([
            "titre" => "required",
            "auteur" => "required",
            "libelle" => "required",
            "corps" => "required",
            "date" => "required",
            "mois" => "required",
        ]);

        if ($request->file("file") == "") {
            $id_actualite = $request->input('id_actualite');
            $titre = $request->input('titre');
            $auteur = $request->input('auteur');
            $corps = $request->input('corps');
            $libelle = $request->input('libelle');
            $date = $request->input('date');
            $heure = $request->input('heure');
            $mois = $request->input('mois');
            /* $id_categorie = $request->input('id_categorie'); */

            DB::table('actualites')
                ->where('id_actualite', $id_actualite)
                ->update([
                    'titre' => $titre,
                    'auteur' => $auteur,
                    'libelle' => $libelle,
                    'corps' => $corps,
                    'date' => $date,
                    'heure' => $heure,
                    'mois' => $mois,

                ]);
        } else {
            $image = $request->file("file");
            $imageName = time() . "." . $image->extension();
            $image->move(public_path("images"), $imageName);

            $id_actualite = $request->input('id_actualite');
            $titre = $request->input('titre');
            $auteur = $request->input('auteur');
            $corps = $request->input('corps');
            $libelle = $request->input('libelle');
            $date = $request->input('date');
            $heure = $request->input('heure');
            $mois = $request->input('mois');
            /* $id_categorie = $request->input('id_categorie'); */

            DB::table('actualites')
                ->where('id_actualite', $id_actualite)
                ->update([
                    'photo' => $imageName,
                    'titre' => $titre,
                    'auteur' => $auteur,
                    'libelle' => $libelle,
                    'corps' => $corps,
                    'date' => $date,
                    'heure' => $heure,
                    'mois' => $mois,

                ]);
        }

        return redirect()->route("app_actualites")
            ->with("success", "Actualité " . $id_actualite . " modifiée avec succès !");
    }


    public function destroy($id)
    {
        //
        $row = DB::table('actualites')
            ->where("id_actualite", $id)
            ->first();


        DB::table('actualites')->where("id_actualite", $id)->delete();

        /* Supprimer la photo du dossier */
        unlink(public_path("images") . "/" . $row->photo);

        return redirect()->route("app_actualites")
            ->with("success", "Actualité supprimée avec succès !");
    }


    function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}
