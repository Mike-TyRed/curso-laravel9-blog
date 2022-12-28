@extends('layouts.template')

@section('title', 'Contact')

@section('content')
    <div class="flex justify-center items-center mt-4">
        <div class="box-border rounded-lg h-fit w-fit p-8 shadow-lg">

            <h1>Deja un mensaje</h1>

            <form action="{{ route('contact.store') }}" method="POST">

                @csrf

                <label for="">
                    <br>
                    <input placeholder="Name" class="border-2 rounded-md indent-1 border-slate-800" type="text"
                        name="name">
                </label>
                <br>

                @error('name')
                    <p><strong>{{ $message }}</strong></p>
                @enderror

                <label for="">
                    <br>
                    <input placeholder="Email" class="border-2 rounded-md indent-1 border-slate-800" type="text"
                        name="email">
                </label>
                <br>

                @error('email')
                    <p><strong>{{ $message }}</strong></p>
                @enderror

                <label for="">
                    <br>
                    <textarea placeholder="Message" class="border-2 rounded-md indent-1 border-slate-800" name="message" cols="30"
                        rows="10"></textarea>
                </label>
                <br>

                @error('message')
                    <p><strong>{{ $message }}</strong></p>
                @enderror
                <button class="border-2 rounded-md indent-1 border-slate-800 p-1 w-20" type="submit">Send</button>
            </form>
        </div>
    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif

@endsection
