<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
    <a href="{{route('home')}}" class="navbar-brand p-0">
        <h1 class="m-0">
            <img class="img-fluid" id="navbar-logo" width="80" src="{{asset('logo-white.png')}}" alt="logo">
            <span>{{config('app.name')}}</span>
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{route('home')}}" @class(["nav-item nav-link","active"=>request()->routeIs('home')])>Acceuil</a>
            <a href="{{route('about')}}" @class(["nav-item nav-link","active"=>request()->routeIs('about')])> A propos</a>
            <a href="{{route('services')}}" @class(["nav-item nav-link","active"=>request()->routeIs('services')])>Services</a>
            <a href="{{route('projects')}}" @class(["nav-item nav-link","active"=>request()->routeIs('projects')])>Projects</a>
            <a href="{{route('blogs.index')}}" @class(["nav-item nav-link","active"=>request()->routeIs('blogs.index')])>Blog</a>
            <a href="{{route('contact')}}" @class(["nav-item nav-link","active"=>request()->routeIs('contact')])>Contact</a>
        </div>
        @if(config('projects.search_bar_enable'))
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                     data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        @endif

    </div>
</nav>
