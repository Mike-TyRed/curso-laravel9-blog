@extends('layouts.template')

@section('title', 'Cursos create')

@section('content')
    <div class="flex justify-center items-center">
        <div class="box-border rounded-lg h-fit w-fit p-4 shadow-lg">
            <h1>Pagina para crear un curso</h1>
            <form action="{{ route('cursos.store') }}" method="POST">
                @csrf

                <label>
                    <br>
                    <input placeholder="Name" class="border-2 rounded-md indent-1 border-slate-800" type="text"
                        name="name" value="{{ old('name') }}">
                </label>

                {{-- Imprimir mensaje de error --}}
                @error('name')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <br>
                <label>
                    <br>
                    <textarea placeholder="Description" class="border-2 rounded-md indent-1 border-slate-800" name="description"
                        id="" cols="30" rows="10">{{ old('description') }}</textarea>
                </label>

                @error('description')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <br>
                <label>
                    <br>
                    <input placeholder="Category" class="border-2 rounded-md indent-1 mb-5 border-slate-800" type="text"
                        name="category" value="{{ old('category') }}">
                </label>

                @error('category')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                @enderror

                <br>
                <button class="border-2 rounded-md indent-1 border-slate-800 mb-2 text-center w-24"
                    type="submit">Enviar</button>
                <br>
                <a class="border-2 rounded-md indent-1 border-slate-800 mb-2 text-center w-24"
                    href="{{ route('cursos.index') }}">Cancelar</a>
            </form>
        </div>
    </div>

@endsection
