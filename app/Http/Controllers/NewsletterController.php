<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "mail" => "required",
        ]);

        $mail = $request->input('mail');
        $date_newsletter = $request->input('date_newsletter');
        $mois_newsletter = $request->input('mois_newsletter');
        $annee_newsletter = $request->input('annee_newsletter');

        /* $data = DB::table('newsletter')
        ->where('email', $mail)
        ->select('email')
        ->get(); */

        if (DB::table('newsletter')->where('email', $mail)->doesntExist()) {
            
            DB::insert('insert into newsletter (email,date_newsletter,mois_newsletter,annee_newsletter) values (?, ?, ?, ?)', [$mail, $date_newsletter, $mois_newsletter, $annee_newsletter]);

            /* session(['rapport' => 'Envoyé avec succès !']);
            session(['icon' => 'success']); */
        }
        /* else{
            session(['rapport' => 'Cette adresse existe déjà !']);
            session(['icon' => 'warning']);
        } */


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
