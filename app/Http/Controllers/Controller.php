<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function raiz(){
        return view('login');
    }

    public function tipo(){
        return view('registro.tipo');
    }

    public function registro($tipo){
        if($tipo == "alumno" || $tipo == "docente" || $tipo == "visitante"){
            $_GET["tipo"] = $tipo;
            return view('registro.formulario');
        }else{
            return redirect()->route('/')->with('msj', 'No existe el tipo de usuario');
        }
    }

    public function login(Request $request){
        echo $request->get("correo");
        echo $request->get("clave");
    }

    public function redireccion(){
        
    }

    public function logout(){
        
    }




    public function usuario(){
        return view('usuario.home');
    }

}
