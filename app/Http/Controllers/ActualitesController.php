<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActualitesController extends Controller
{
    //
    public function actualites()
    {

            $actualites = DB::table('actualites')
            ->orderBy('id_actualite', 'desc')
            ->paginate(4)
            ->fragment('actualités');
            /* dd($actualites); */

            $phototheque = DB::table('phototheque')
            ->orderBy('id', 'desc')
            ->paginate(6)
            ->fragment('phototheque');

        return view('acceuil', compact("actualites", "phototheque"));
    }

    public function actu()
    {

            $actualites = DB::table('actualites')
            ->orderBy('id_actualite', 'desc')
            ->paginate(4)
            ->fragment('actualités');
            /* dd($actualites); */

        return view('actualite', compact("actualites"));
    }


    public function search()
    {

            $q = request()->input('q');
            $articles = DB::table('actualites')
                        ->where('titre', 'like', "%$q%")
                        ->orWhere('auteur', 'like', "%$q%")
                        ->orWhere('libelle', 'like', "%$q%")
                        ->paginate(6);
            /* dd($q); */
        return view("result_search")->with("articles", $articles);
    }


    public function show($id)
    {

        $recup = DB::table('actualites')->where("id_actualite", $id)->first();

        return view('articlehbd', compact("recup"));
    }


}
