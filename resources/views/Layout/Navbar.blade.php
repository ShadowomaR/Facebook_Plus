<nav class="navbar navbar-expand-md navbar-light b1 px-4 text-light">
    <!-- Brand -->
    <h1><a class="navbar-brand" href="{{ route('home')}}">{{env('APP_PUBLIC_NAME')}}</a></h1>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <img src="{{ asset('images/24.png')}}" alt="..." class="rounded">
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
                <a class="nav-link {{set_active('home')}}" href="{{ route('home')}}">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{set_active('about')}}" href="{{ route('about')}}">Service</a>
            </li>     
            <li class="nav-item ">
                <a class="nav-link {{set_active('Getstart')}}" href="{{ route('Getstart')}}">Join us</a>
            </li>
        </ul>
  </div> 
</nav>