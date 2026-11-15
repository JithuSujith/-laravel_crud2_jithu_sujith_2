<nav class="d-flex flex-column vh-100 bg-dark p-3 text-white position-fixed top-0 start-0"
     style="width: 250px;">

    <a class="navbar-brand text-white mb-4 fs-2 fw-bold text-warning" href="#">
        Fork&Flavour
    </a>

    <ul class="navbar-nav flex-column gap-4 d-flex justify-content-center align-items-center">

        <li class="nav-item">
            <a class="nav-link active text-white fs-4" href="{{route('home')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
            <a class="nav-link text-white fs-4" href="{{route('recipes.create')}}">Create Recipes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white fs-4" href="{{route('recipes.index')}}">All Recipes</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
             <li>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </li>
              @else
            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
          </ul>
        </li>

        @endauth

    </ul>

</nav>