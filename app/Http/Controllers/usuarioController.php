<?php

namespace ClinicaDental\Http\Controllers;

use ClinicaDental\Http\Requests\UsuarioCreateRequest;
use ClinicaDental\Http\Requests\UsuarioUpdateRequest;
use Illuminate\Http\Request;
use ClinicaDental\Usuario;
use Session;
use Redirect;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::All();
        return view("usuario.index",compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    //public function store()
    {
        Usuario::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'usuario' => $request['usuario'],
            'password' => $request['password'],
            'email' => $request['email']
            ]);
        Session::flash('mensaje','Usuario Creado correctamente'); 
        return redirect('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $usuario = Usuario::find($id);
        Session::flash('mensaje','Usuario editado correctamente'); 
        return view('usuario.editar',['usuario' => $usuario]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        Session::flash('mensaje','Usuario creado correctamente'); 
        return redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Session::flash('mensaje','Usuario eliminado correctamente');
        return redirect::to('/usuario');
    }
}
