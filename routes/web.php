<?php

use App\Http\Controllers\ActualitesController;
use App\Http\Controllers\PhotothequeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\VideothequeController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ActualitesController::class, "actualites"], function () {
    return view('acceuil');
})->name('app_acceuil');

/* [ActualitesController::class, "actu"] */
Route::get('/actualite', function () {
    return view('actualite');
})->name('app_actualite');


Route::get('/contact', function () {
    return view('contact');
})->name('app_contact');


Route::get('/president', function () {
    return view('president');
})->name('app_president');


Route::get('/gouvernance', function () {
    return view('gouvernance');
})->name('app_gouvernance');


Route::get('/phototheques', [PhotothequeController::class, "affiche_photos"],  function () {
    return view('phototheque');
})->name('app_phototheques');


Route::get('/videotheque', [VideothequeController::class, "affiche_videos"], function () {
    return view('videotheque');
})->name('app_video');


Route::get('/jeuxOlympEte', function () {
    return view('jeuxOlympEte');
})->name('app_jeuxOlympEte');


Route::get('/jeuxOlympJeunes', function () {
    return view('jeuxOlympJeunes');
})->name('app_jeuxOlympJeunes');


Route::get('/blogSingle', function () {
    return view('blog-single');
})->name('app_blogSingle');



Route::get('/search', [ActualitesController::class, "search"])->name('search');




/* PDF */

Route::get('/AxesStratiques', function () {
    $file = public_path()."/pdf/AxesStratiques.pdf";

    $headers = array(
        'Content-Type:application/pdf',
    );

    return Response::download($file, "AxesStratiques.pdf", $headers);
})->name('app_AxesStratiques');


Route::get('/ReglementInterieurEtStatut', function () {
    $file = public_path()."/pdf/ReglementInterieurEtStatut.pdf";

    $headers = array(
        'Content-Type:application/pdf',
    );

    return Response::download($file, "Reglement Interieur et Statut.pdf", $headers);
})->name('app_ReglementInterieurEtStatut');


Route::get('/Organigramme', function () {
    $file = public_path()."/pdf/Organigramme.pdf";

    $headers = array(
        'Content-Type:application/pdf',
    );

    return Response::download($file, "Organigramme.pdf", $headers);
})->name('app_Organigramme');


Route::get('/procesVerbaux', function () {
    $file = public_path()."/pdf/ProcesVerbaux.pdf";

    $headers = array(
        'Content-Type:application/pdf',
    );

    return Response::download($file, "Procès Verbaux.pdf", $headers);
})->name('app_procesVerbaux');


Route::get('/RapportsDesMissions', function () {
    $file = public_path()."/pdf/RapportsDesMissions.pdf";

    $headers = array(
        'Content-Type:application/pdf',
    );

    return Response::download($file, "Rapports des Missions.pdf", $headers);
})->name('app_RapportsDesMissions');

/* Controller pour télecharger le pdf */
/* Route::get('/download', 'App\Http\Controllers\AxesStratiquesController@getDownload'); */

/* end PDF */


Route::get('login', [UserAuthController::class, "login"])->middleware('AlreadyLoggedIn');
Route::get('register', [UserAuthController::class, "register"])->middleware('AlreadyLoggedIn');
Route::post('create', [UserAuthController::class, "create"])->name('auth.create');
Route::post('check', [UserAuthController::class, "check"])->name('auth.check');
Route::get('profile', [UserAuthController::class, "profile"])->name('app_profile')->middleware('isLogged');
Route::get('actualites', [UserAuthController::class, "actualites"])->name('app_actualites')->middleware('isLogged');
Route::get('add_actualites', [UserAuthController::class, "add_actualites"])->name('app_add_actualites')->middleware('isLogged');
Route::get('edit', [UserAuthController::class, "edit"])->name('app_edit')->middleware('isLogged');
Route::get('logout', [UserAuthController::class, "logout"])->name('app_logout');
Route::get('phototheque', [PhotothequeController::class, "phototheque"])->name('app_phototheque')->middleware('isLogged');
Route::get('videos', [VideothequeController::class, "videotheque"])->name('app_videotheque')->middleware('isLogged');
Route::get('add_phototheque', [PhotothequeController::class, "add_phototheque"])->name('app_add_phototheque')->middleware('isLogged');
Route::get('add_videotheque', [VideothequeController::class, "add_videotheque"])->name('app_add_videotheque')->middleware('isLogged');

Route::resource('contacts', 'App\Http\Controllers\ContactController');
Route::resource('newsletters', 'App\Http\Controllers\NewsletterController');
Route::resource('news', 'App\Http\Controllers\UserAuthController');
Route::resource('article', 'App\Http\Controllers\ActualitesController');
Route::resource('photo', 'App\Http\Controllers\PhotothequeController');
Route::resource('video', 'App\Http\Controllers\VideothequeController');

