<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

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
    public function store(StoreCurso $request)
    {
        //opcion 1
        /* $curso = Curso::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
        ]); */

        //opcion 2
        /* $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save(); */

        //Opcion 3 crea una instancia donde almacena todo el registro hecho
        $curso = Curso::create($request->all());

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

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        //Opcion 1
        /* $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save(); */

        //Opcion 2
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
