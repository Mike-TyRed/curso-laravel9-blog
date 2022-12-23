@extends('layouts.template')

@section('title', 'Cursos show ' . $curso->name)

@section('content')
    <div class="flex justify-center items-center mt-8">

        <div class="box-border rounded-lg h-fit w-fit p-4 shadow-lg">
    
            <h1>Bienvenido al curso: {{$curso->name}}</h1>
            <p> <strong>Categoria: </strong>{{$curso->category}}</p>
            <p> {{$curso->description}}</p>
            <br>
            <a href="{{ route('cursos.edit', $curso)}}">Editar curso</a>
            <br>
            <a href="{{ route('cursos.index') }}"> Volver a cursos </a>
            <form action="{{route('cursos.destroy', $curso)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>
            <br>
        </div>
    </div>
    @endsection