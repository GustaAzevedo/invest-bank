<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class Usuarios extends Controller
{

    //  with é responsável por "levar" o modelo de usuário para 
    //  view/index.blade.php
    public function index(){
        return view('usuarios.index')->with('usuarios', Usuario::all());
        //  Usuario::all é a mesma coisa que SELECT * from usuario
        //  e jogando dentro de $usuarios, que é usado na index pra criar
        //  a lista de usuários
    }

    public function create(){
        return view('usuarios.create')->with('usuarios', Usuario::all());
    }

    //  função responsável por colocar, criar uma linha
    //  de um novo usuário no banco
    public function store(Request $request){
        Usuario::create($request->all());
        session()->flash('success', 'Usuario cadastrado com sucesso!');
        return redirect(route('usuario.index'));
    }

    public function edit(Usuario $usuario){
       return view('usuarios.edit')->with('usuario', $usuario);
    }

    //dados recebido do POST Request, dados do modulo Usuario
    public function update(Request $request, Usuario $usuario){
        $usuario->update($request->all());
        session()->flash('success', 'Usuario alterado com sucesso!');
        return redirect(route('usuario.index'));
    }

    public function delete(Usuario $usuario){
        $usuario->delete();
        session()->flash('success', 'Usuario deletado com sucesso!');        return redirect(route('usuario.index'));
        return redirect(route('usuario.index'));
    }

}
