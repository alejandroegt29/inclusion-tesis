<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class institucionController extends Controller
{
    
    public function vista_institucion(){

        if (\Auth::guard('institucion')->check()) {
            return view('institucion.inicio');
        }
        return redirect('/inicio');
    }
}
