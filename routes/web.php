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
Route::group(['middleware' => ['web']], function () {
        Route::get('/', function () {
            return view('welcome');
        });
        /*Redireccion a vistas*/
        Route::get('/inicio','invitadoController@vista_proyecto');
        Route::get('/ayuda','invitadoController@vista_ayuda');
        Route::get('/registros','invitadoController@vista_registros');
        Route::get('/formUsuario','invitadoController@vista_formUser');
        Route::get('/formUsuarioInstitucion','invitadoController@vista_formUserInstituto');
        Route::get('formInstitucion','invitadoController@vista_formInstitucion');

        Route::post('/guardarInstitucion', 'crud_institucionController@insertar');

        Route::get('/login','autenticarController@vista_login');

        Route::post('/login','autenticarController@login');
});

Route::group(['middleware' => 'institucion'], function () {
     Route::get('/logout','autenticarController@logout');
    Route::get('/index', 'institucionController@vista_institucion');
});












































Route::get('activarmicro', function () {
    
    if(Session::has('activarText')){
        Session::flash('flash_desactivar', 'Desactiva la opcion actual');
        return redirect()->back();
    }
       Session::put('activarMicro', '1');
    	//dd(Session::get('activar'));
       Session::flash('flash_activadomicro', 'Activando microfono');
        return redirect()->back();
    
});
Route::get('desactivarmicro', function () {
    
	Session::flash('flash_desactivadomicro', 'desactivando microfono');
    Session::forget('activarMicro');
    return redirect()->back();
    
});
Route::get('activartext', function () {

    if(Session::has('activarMicro')){
        Session::flash('flash_desactivar', 'Desactiva la opcion actual');
        return redirect()->back();
    }
   Session::put('activarText', '1');
	//dd(Session::get('activar'));
   Session::flash('flash_activadotext', 'Activando dictador de texto');
    return redirect()->back();
    
});
Route::get('desactivartext', function () {
    
	Session::flash('flash_desactivadotext', 'desactivando dictador de texto');
    Session::forget('activarText');
    return redirect()->back();
    
});