<header>
    <nav class="flex items-center justify-between flex-wrap bg-slate-800 p-6">
        <div class="flex items-center flex-row text-white mr-6">
            <span class="font-semibold text-xl tracking-tight text-yellow-400">ELDEN RING</span>
        </div>
        <div class="block lg:hidden">
          </div>
          <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="flex justify-between">
              <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}} block mt-4 lg:inline-block lg:mt-0 text-amber-400 hover:text-white mr-4">
                Home
              </a>
              <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}} block mt-4 lg:inline-block lg:mt-0 text-amber-400 hover:text-white mr-4">
                Cursos
              </a>
              <a href="{{route('us')}}" class="{{request()->routeIs('us') ? 'active' : ''}} block mt-4 lg:inline-block lg:mt-0 text-amber-400 hover:text-white mr-4">
                About us
              </a>
              <a href="{{route('contact.index')}}" class="{{request()->routeIs('contact.index') ? 'active' : ''}} block mt-4 lg:inline-block lg:mt-0 text-amber-400 hover:text-white mr-4">
                Contact us
              </a>
            </div>
          </div>
    </nav>
</header>