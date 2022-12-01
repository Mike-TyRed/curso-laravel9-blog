@extends('layouts.template')

@section('title', 'Cursos create')

@section('content')
    <h1>Pagina para crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </label>
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="category">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection