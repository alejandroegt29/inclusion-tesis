<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invitadoController extends Controller
{
    public function vista_registros(){

    	 	return view('invitado.multiRegistro');
    }
    public function vista_formUser(){
    		
    		return view('invitado.form_Usuario');
    }
    public function vista_formUserInstituto(){
    		return view('invitado.form_usuario_institucion');
    }
    public function vista_formInstitucion(){
    		return view('invitado.form_institucion');
    }
    public function vista_proyecto()
    {
            return view('invitado.multiRegistro');
    }
    public function vista_ayuda()
    {
            return view('invitado.ayuda');
    }
}