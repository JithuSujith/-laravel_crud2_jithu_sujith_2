<x-layout>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-12 col-md-6">

                <!-- Recipe Title -->
                <h1 class="fw-bold text-center mb-3">
                    {{ $recipe->title }}
                </h1>

                
                <p class="text-white text-center mb-4">
                    {{ $recipe->description }}
                </p>

                
               <img src="{{Storage::url($recipe->image)}}"
                class="card-img-top"
                alt="{{ $recipe->title }}">

                
                <div class="card shadow-sm border-0 p-4">

                    <h3 class="fw-bold mb-3">Ingredients & Instructions</h3>

                    <p style="white-space: pre-line;">
                        {{ $recipe->content }}
                    </p>

                </div>

                
                <div class="d-flex gap-2 mt-4">

                    <a href="{{ route('recipes.index') }}"
                       class="btn btn-outline-secondary">
                        Back to Recipes
                    </a>
                @auth
                @if($recipe->user && Auth::id() == $recipe->user->id)     

                    <a href="{{ route('recipes.edit', $recipe->id) }}"
                       class="btn btn-success">
                        Edit Recipe
                    </a>

                </div>
                <div class="d-flex gap-2 mt-4">
    
   
    <!-- Delete Button -->
    <form action="{{ route('recipes.destroy', $recipe->id) }}"
          method="POST">

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger"
                onclick="return confirm('Are you sure you want to delete this recipe?')">
            Delete Recipe
        </button>

    </form>
     @endif
     @endauth
    </div>

            </div>

        </div>

    </div>

</x-layout>