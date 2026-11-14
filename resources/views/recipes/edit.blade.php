<x-layout>

    <div class="container p-4">

        <h2 class="text-center mb-4">Edit Recipe</h2>

        <form action="{{ route('recipes.update', $recipe->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-3">
                <label>Title</label>
                <input type="text"
                       name="title"
                       class="form-control"
                       value="{{ $recipe->title }}">
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description"
                          class="form-control">{{ $recipe->description }}</textarea>
            </div>

            <!-- Content -->
            <div class="mb-3">
                <label>Ingredients & Instructions</label>
                <textarea name="content"
                          class="form-control"
                          rows="6">{{ $recipe->content }}</textarea>
            </div>

            <!-- Current Image -->
            <div class="mb-3">
                <label>Current Image</label>

                @if ($recipe->image)
                    <div>
                        <img src="{{ asset('storage/' . $recipe->image) }}"
                             width="150"
                             class="rounded mb-2"
                             alt="{{ $recipe->title }}">
                    </div>
                @else
                    <p>No image uploaded.</p>
                @endif
            </div>

            <!-- New Image -->
            <div class="mb-3">
                <label>Change Image</label>
                <input type="file"
                       name="image"
                       class="form-control">
            </div>

            <!-- Button -->
            <button type="submit" class="btn btn-success">
                Update Recipe
            </button>

            <a href="{{ route('recipes.index') }}"
               class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>

</x-layout>