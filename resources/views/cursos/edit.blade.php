@extends('layouts.template')

@section('title', 'Cursos edit')

@section('content')
    <div class="flex justify-center items-center">

        <div class="box-border rounded-lg h-fit w-fit p-4 shadow-lg">
    
            <h1>Pagina para crear un curso</h1>
            <form action="{{route('cursos.update', $curso)}}" method="POST">
        
                @csrf
        
                @method('PUT')
        
                <label>
                    Nombre:
                    <br>
                    <input class="border-2 rounded-md indent-1 border-slate-800" type="text" name="name" value="{{old('name', $curso->name)}}">
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
                    <textarea class="border-2 rounded-md indent-1 border-slate-800" name="description" id="" cols="30" rows="10">{{old('description', $curso->description)}}</textarea>
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
                    <input class="border-2 rounded-md indent-1 border-slate-800 mb-2 text-center" type="text" name="category" value="{{old('category', $curso->category)}}">
                </label>
        
                {{-- Imprimir mensaje de error --}}
                @error('category')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
                <br>
                <button class="border-2 rounded-md indent-1 border-slate-800 mb-2 text-center w-24" type="submit">Actualizar</button>
                <br>
                <a class="border-2 rounded-md indent-1 border-slate-800 text-center w-20" href="{{ route('cursos.show', $curso)}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection