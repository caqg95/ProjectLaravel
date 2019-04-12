<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
class UsuarioController extends Controller
{
    public function store(Request $request){
        $usuario=$request['usuario'];
        $password=bcrypt($request['password']);

        $usuariobd= new Usuario();
        $usuariobd->nombre =$usuario;
        $usuariobd->contrasena =$password;

        $usuariobd->save();

        return redirect()->back();
    }
}
