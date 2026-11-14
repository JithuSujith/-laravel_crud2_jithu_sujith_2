<x-layout>

    <div class="container-fluid p-4">

        <!-- Heading -->
        <section class="text-center my-5">
            <h2 class="fw-bold">Discover Our Recipes</h2>

            <p class="text-white">
                Explore our collection of delicious Italian recipes,
                from traditional homemade pasta to irresistible desserts.
                Find inspiration for your next meal!
            </p>

            <a href="{{ route('recipes.create') }}" class="btn btn-success mt-2">
                Add a New Recipe
            </a>
        </section>


        <!-- Recipes -->
        <div class="row">

            @foreach ($recipes as $recipe)

                <div class="col-12 col-md-4 col-lg-4 mb-4">

                    <div class="card h-100 shadow-sm">

                         
                             

                        <div class="card-body">

                            <h5 class="card-title fw-bold">
                                {{ $recipe->title }}
                            </h5>

                            <p class="card-text text-muted">
                                {{ $recipe->description }}
                            </p>

                            <a href="{{ route('recipes.show', $recipe->id) }}"
                                class="btn btn-outline-success">
                                View Recipe
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</x-layout>