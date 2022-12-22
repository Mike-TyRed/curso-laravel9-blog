<header>
    <h1 class="text-red-600">Elden Ring</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}"         class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
            <li><a href="{{route('us')}}"           class="{{request()->routeIs('us') ? 'active' : ''}}"">About us</a></li>
            <li><a href="{{route('contact.index')}}"class="{{request()->routeIs('contact.index') ? 'active' : ''}}">Contact us</a></li>
        </ul>
    </nav>
</header>
{{-- <style>
    .Title {
        color: brown;
        flex-direction: row
        justify-flex: center;
        align-items: center;
    } --}}
{{-- </style> --}}