<?php
use Illuminate\Support\Facades\Route;
use App\postuler;
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

Route::resource('/postuler','PostulerController');
Route::resource('/abonement','AbonementController');

Route::get('/postuler/{filliere}/{diplome}','PostulerController@montre')->name('postuler.montre');


Route::get('/plomberie',function (){
    return view('plomberie');
});

Route::get('/programmation',function (){
    return view('programmation');
});

Route::get('/assistante-maternelle',function (){
    return view('assistante_maternelle');
});

Route::get('/anglais', function (){
    return view('english');
});

Route::get('/français', function (){
    return view('french');
});

Route::get('/arabe', function (){
    return view('arabic');
});



Route::get('/comptabilite', function (){
    return view('comptabilite');
});

Route::get('/infographie', function (){
    return view('infographie');
});

Route::get('/postuler', function (){
    return view('postule');
});

Route::get('/bt-national', function (){
    return view('bt');
});

Route::get('/bts-international', function (){
    return view('btsi');
});


Route::get('/educateur-petite-enfance', function (){
    return view('educateur_petite_enfance');
});


Route::get('/bts-national', function (){
    return view('bts');
});

Route::get('/hotesse-steward', function (){
    return view('hotesse');
});

Route::get('/vaee', function (){
    return view('vae.vaee');
});

Route::get('/cuisine', function (){
    return view('cuisine');
});

Route::get('/infographie', function (){
    return view('infographie');
});

Route::get('/patisserie', function (){
    return view('patisserie');
});
Route::get('/vae', function (){
    return view('vae.vae');
});

Route::get('/cap-national', function (){
       $postuler=new POSTULER();
    return view('cap',compact('postuler'));
});

Route::get('/presentation', function (){
    return view('pages.presentation');
});

Route::get('/test', function (){
    return view('test');
});

Route::get('/', function () {
    return view('index.index');
});

Route::get('/news', function(){
    return view('news.news');
});

Route::get('/about', function(){
    return view('about.about');
});

Route::get('/contact', function(){
    return view('contact.contact');
});
