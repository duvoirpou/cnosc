<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("contact");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("contact");
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
            "identite" => "required|min:5",
            "email" => "required",
            "sujet" => "required",
            "msg" => "required",
        ]);

        $identite = $request->input('identite');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $sujet = $request->input('sujet');
        $message = $request->input('msg');
        $date_message = $request->input('date_message');
        $mois_message = $request->input('mois_message');
        $annee_message = $request->input('annee_message');

        DB::insert('insert into contact (identite, email, tel, sujet, msg, date_message, mois_message, annee_message) values (?, ?, ?, ?, ?, ?, ?, ?)', [$identite, $email, $tel, $sujet, $message, $date_message, $mois_message, $annee_message]);


        return redirect()->route("app_contact")
        ->with("success", "Message envoyé avec succès !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
