<x-layout>
    <main>
    <section class="hero d-flex flex-column justify-content-end align-items-end text-center">
 
        <h1 class="fw-bold text-white fs-1 pe-3">Discover, Cook & Enjoy!</h1>

        <p class="fst-italic text-white pe-3">
            Explore delicious recipes, discover new flavors,
            and bring your favorite meals to life.
        </p>

    </section>

        <section class="container-fuid ps-3 pt-3">
            <div class="row">
            <div class="col-12 col-md-4">
            <h2>Discover the Taste of Italy</h2>

            <p>
             From comforting homemade pasta to delicious traditional desserts,
             explore our collection of Italian recipes.
             Simple ingredients, authentic flavours, and special moments
             made in your kitchen.
            </p>

            <a href="{{ route('recipes.index') }}">
            <button type="button" class="btn btn-light">Explore All Recipes</button>
            </a>
            </div>
            </div>
        </section>
    </main>

</x-layout>