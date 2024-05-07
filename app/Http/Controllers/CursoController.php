<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCursoRequest;
use App\Models\Curso;

class CursoController extends Controller
{
    //funcion para mostrar la pagina principal
    public function index()
    {
        $cursos = Curso::orderBy('id', 'desc')->paginate(); //Ordena de forma descendente por id

        return view('cursos.index', compact('cursos'));
    }

    //funcion para mostrar la pagina de crear un curso
    public function create()
    {
        return view('cursos.create');
    }

    //funcion para recupera los datos del formulario
    public function store(StoreCursoRequest $request)
    {
        $curso = Curso::create($request->validated());

        //redireccionar a la lista de cursos
        return redirect()->route('cursos.show', $curso);
    }

    //funcion para mostrar la pagina de un curso
    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    //Funcion para editar
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(StoreCursoRequest $request, Curso $curso)
    {
        $curso->update($request->validated());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
