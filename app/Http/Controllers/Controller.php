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
        session_start();
        if(isset($_SESSION["data"])){
            return redirect()->route('usuario');
        }else{
            return view('login');
        }
    }

    public function tipo(){
        return view('registro.tipo');
    }

    public function registro($tipo){
        if($tipo == "alumno" || $tipo == "docente" || $tipo == "visitante"){
            $_GET["tipo"] = $tipo;
            return view('registro.formulario');
        }else{
            return redirect()->route('/')->with('error', 'No existe el tipo de usuario');
        }
    }

    public function login(Request $request){
        echo $request->get("correo");
        echo $request->get("clave");
        $body = [
            "email" => $request->get("correo"),
            "password" => $request->get("clave")
        ];
        $responde = Http::post('https://labmanufactura.net/marco/to-do-api/routes/login.php', $body);
        if($responde->successful()){
            $obj = $responde->Object();
            $msj = $obj->message;
            $data = $obj->data;
            session_start();
            $_SESSION["msj"] = $msj;
            $_SESSION["data"] = $data;
            //var_dump($_SESSION["data"]);
            return redirect()->route('redireccion');
        }else{
            return redirect()->route('/')->with('error', 'Usuario o contrasenia incorrecta');
        }
    }

    public function redireccion(){
        session_start();
        if(isset($_SESSION["data"])){
            return redirect()->route('usuario');
        }else{
            return redirect()->route('/')->with('error', 'No existe la session');
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        return redirect()->route('/');
    }

    public function usuario(){
        session_start();
        if(isset($_SESSION["data"])){  
            $this->getProyects($_SESSION["data"]->token);
            return view('usuario.home');
        }else{
            return redirect()->route('/')->with('error', 'No existe la session');
        }
    }

    public function getProyects($token){
        if(isset($_SESSION["data"])){
            $responde = Http::withHeaders([
                'Authorization' => $token,
                'Content-Type' => 'application/json'
            ])->get('https://labmanufactura.net/marco/to-do-api/routes/proyect.php');
            if($responde->successful()){
                $obj = $responde->Object();
                $data = $obj->data;
                $_SESSION["proyects"] = $data;
            }else{
                return redirect()->route('/')->with('error', 'No existen proyectos');
            }
        }else{
            return redirect()->route('/')->with('error', 'No existe la session');
        }
    }

}
