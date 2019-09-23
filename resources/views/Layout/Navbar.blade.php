<nav class="navbar navbar-expand-md navbar-light b1 px-4 text-light">
    <!-- Brand -->
    <h1><a class="navbar-brand" href="{{ route('home')}}">FB Plus</a></h1>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <img src="{{ asset('images/24.png')}}" alt="..." class="rounded">
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item {{set_active('home')}}">
                <a class="nav-link" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item {{set_active('about')}}">
                <a class="nav-link" href="{{ route('about')}}">About</a>
            </li>     
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
        </ul>
  </div> 
</nav>