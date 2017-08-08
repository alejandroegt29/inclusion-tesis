<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class autenticarController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    //protected $guard = 'institucion';

    /*protected function guard()
    {
        return \Auth::guard('institucion');
    }*/
  
	public function vista_login()
	{
		
		return view('invitado.login_institucion');
	}
    public function login(Request $data)
    {

    	if (\Auth::guard('institucion')->attempt(['email' => $data->correo, 'password' => $data->clave])) {
           return redirect('/index');
        }
        return redirect()->back();
    }
    public function logout(){
        \Auth::guard('institucion')->logout();
        return redirect('/inicio');
    }

    
}
