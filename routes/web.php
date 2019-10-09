<?php

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

Route::get('/', function () { return view('index'); });

Route::get('/contacto', function () {
    return view('pages.contact');
});

Route::get('/ofertaeducativa/bachillerato', function () {
    return view('pages.oferta.bachillerato');
});

Route::get('/nuestroinstituto/historia', function () { return view('pages.nuestroinstituto.historia'); });
Route::get('/nuestroinstituto/mision', function () { return view('pages.nuestroinstituto.mision'); });
Route::get('/nuestroinstituto/valores', function () { return view('pages.nuestroinstituto.valores'); });
Route::get('/nuestroinstituto/sistemadecalidad', function () { return view('pages.nuestroinstituto.calidad'); });
Route::get('/nuestroinstituto/estructuraorganizacional', function () { return view('pages.nuestroinstituto.estructura'); });