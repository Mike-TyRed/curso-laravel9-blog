@extends('layouts.template')

@section('title', 'Cursos show' . $curso)

@section('content')
    <h1>Bienvenido al curso: <?php echo $curso;?> </h1>
@endsection