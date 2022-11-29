<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //funcion para mostrar la pagina principal
    public function index(){
        return view('cursos.index');
    }

    //funcion para mostrar la pagina de crear un curso
    public function create(){
        return view('cursos.create');
    }

    //funcion para mostrar la pagina de un curso
    public function show($curso){
        return view('cursos.show', compact('curso'));
    }
}
