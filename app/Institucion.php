<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Institucion extends Authenticatable
{
    use Notifiable;

    protected $table="institucion";
    protected $guard = "institucion";

     protected $fillable = [
         'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function insertar($datos){

    	$getLogo = $this->logo($datos);
    	
    	$instituto = new Institucion;
    	$instituto->rut = $datos->rut;
    	$instituto->nombre = $datos->nombre;
    	$instituto->razonSocial = $datos->razonSocial;
    	$instituto->telefono1 = $datos->telefono1;
    	$instituto->telefono2 = $datos->telefono2;
    	$instituto->direccion = $datos->direccion;
    	$instituto->logo = $getLogo;
    	$instituto->email = $datos->correo;
    	$instituto->password = bcrypt($datos->clave);
    	
    	if($instituto->save()){
    		return 1;
    	}
    	else{
    		return 0;
    	}


    }


     private function logo($datos){
    	$url="logo";
    	$file = $datos->file('logo')->getClientOriginalExtension();
    	$imageName = time().'.'.$datos->file('logo')->getClientOriginalExtension();//nombre de la imagen como tal.
        if($datos->file('logo')->move(public_path($url), $imageName))// verifica que la imagen subida se valla a la ruta del servifor.
        {
        	return ($url.'/'.$imageName);
        }
    }
}
