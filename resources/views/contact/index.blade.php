@extends('layouts.template')

@section('title', 'Contact')

@section('content')
    <h1>Deja un mensaje</h1>
    
    <form action="{{route('contact.store')}}" method="POST">

        @csrf

        <label for="">
            Name:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror
        
        <label for="">
            Email:
            <br>
            <input type="text" name="email">
        </label>
        <br>

        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Message:
            <br>
            <textarea name="message" cols="30" rows="10"></textarea>
        </label>
        <br>

        @error('message')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <button type="submit">Send</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

@endsection