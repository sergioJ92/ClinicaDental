<?php

namespace ClinicaDental\Http\Controllers;

use Illuminate\Http\Request;

class ControladorHome extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('index');
    }

    public function tratamientos(){
        return view('tratamientos');
    }

    public function personal(){
        return view('personal');
    }

    public function pacientes(){
        return view('pacientes');
    }

}