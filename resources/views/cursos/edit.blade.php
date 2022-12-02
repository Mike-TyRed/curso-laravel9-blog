@extends('layouts.template')

@section('title', 'Cursos edit')

@section('content')
    <h1>Pagina para crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" id="" cols="30" rows="10">{{$curso->description}}</textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{$curso->category}}">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection