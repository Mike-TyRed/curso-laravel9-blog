@extends('layouts.template')

@section('title', 'Cursos edit')

@section('content')
    <h1>Pagina para crear un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">

        @csrf

        @method('PUT')

        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        {{-- Imprimir mensaje de error --}}
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <textarea name="description" id="" cols="30" rows="10">{{old('description', $curso->description)}}</textarea>
        </label>

        {{-- Imprimir mensaje de error --}}
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="category" value="{{old('category', $curso->category)}}">
        </label>

        {{-- Imprimir mensaje de error --}}
        @error('category')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
        <br>
        <a href="{{ route('cursos.show', $curso)}}">Cancelar</a>
    </form>
@endsection