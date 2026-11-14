<nav class="d-flex flex-column vh-100 bg-dark p-3 text-white position-fixed top-0 start-0"
     style="width: 250px;">

    <a class="navbar-brand text-white mb-4 fs-2 fw-bold text-warning" href="#">
        Fork&Flavour
    </a>

    <ul class="navbar-nav flex-column gap-4 d-flex justify-content-center align-items-center">

        <li class="nav-item">
            <a class="nav-link active text-white fs-4" href="{{route('home')}}">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white fs-4" href="{{route('recipes.create')}}">Create Recipes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link text-white fs-4" href="{{route('recipes.index')}}">All Recipes</a>
        </li>

        

    </ul>

</nav>