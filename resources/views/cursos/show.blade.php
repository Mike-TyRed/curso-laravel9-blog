@extends('layouts.template')

@section('title', 'Cursos show' . $curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <p> <strong>Categoria: </strong>{{$curso->category}}</p>
    <p> {{$curso->description}}</p>

    <a href="{{ route('cursos.edit')}}">Editar curso</a>
    <br>
    <a href="{{ route('cursos.index') }}"> Volver a cursos </a>
@endsection