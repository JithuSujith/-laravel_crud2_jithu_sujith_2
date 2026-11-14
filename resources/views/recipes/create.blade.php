<x-layout>

    <div class="container p-4">

        <section class="text-center my-5">
            <h2 class="fw-bold">Share Your Favourite Recipe</h2>

            <p class="text-white">
                Have a delicious recipe to share?
                Add it to our collection of Italian recipes!
            </p>
        </section>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <form action="{{ route('recipes.store') }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Recipe Title</label>
                        <input type="text" name="title" id="title"
                               class="form-control"
                               placeholder="Enter recipe title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description"
                                  class="form-control" rows="3"
                                  placeholder="Describe your recipe"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Ingredients & Instructions</label>
                        <textarea name="content" id="content"
                                  class="form-control" rows="6"
                                  placeholder="Write your ingredients and instructions"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="form-label">Recipe Image</label>
                        <input type="file" name="image" id="image"
                               class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        Save Recipe
                    </button>

                </form>

            </div>
        </div>

    </div>

</x-layout>