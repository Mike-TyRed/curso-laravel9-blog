<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //funcion para mostrar la pagina principal
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate(); //Ordena de forma descendente por id

        return view('cursos.index', compact('cursos'));
    }

    //funcion para mostrar la pagina de crear un curso
    public function create(){
        return view('cursos.create');
    }

    //funcion para recupera los datos del formulario
    public function store(Request $request){
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();

        //redireccionar a la lista de cursos
        return redirect()->route('cursos.show', $curso);
    }

    //funcion para mostrar la pagina de un curso
    public function show(Curso $curso){
        return view('cursos.show', compact('curso'));
    }

    //Funcion para editar
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        
        //log del cambio realizado
        //return $request->all();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
