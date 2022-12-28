@extends('layouts.template')

@section('title', 'Cursos')

@section('content')
    <div class="flex flex-row justify-center mb-2 mt-2">
        <h1 class="mr-4">Pagina de cursos</h1>
        <a href="{{ route('cursos.create') }}"> Crear curso </a>
    </div>
    <div class="flex justify-center items-center">
        <div class="box-border rounded-lg h-fit w-fit p-4 shadow-lg">
            <ul>
                @foreach ($cursos as $curso)
                    <li>
                        <a href="{{ route('cursos.show', $curso) }}">{{ $curso->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="flex justify-center items-center">
        {{ $cursos->links() }}
    </div>
@endsection
