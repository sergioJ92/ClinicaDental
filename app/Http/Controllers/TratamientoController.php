<?php

namespace ClinicaDental\Http\Controllers;

use Illuminate\Http\Request;
use ClinicaDental\Http\Requests\TratamientoRequest;
use Illuminate\Support\Facades\Redirect;
use ClinicaDental\Tratamiento;

class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamientos = Tratamiento::paginate(6);
        return view('tratamiento/lista',compact('tratamientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tratamiento/crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TratamientoRequest $request)
    {
        Tratamiento::create(['nombre'=>$request['nombre'],
                             'descripcion'=>$request['descripcion'],
                             'imagen'=>$request['imagen'], ]);


        return Redirect::to('tratamiento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tratamiento = Tratamiento::find($id);
        return view('tratamiento/mostrar',compact('tratamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamiento = Tratamiento::find($id);
        return view("tratamiento/editar",compact('tratamiento'));
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
        $tratamiento = Tratamiento::find($id);
        $tratamiento->fill($request->all());
        $tratamiento->save();
        return Redirect::to('tratamiento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tratamiento::destroy($id);
        return Redirect::to('tratamiento');
    }
}
