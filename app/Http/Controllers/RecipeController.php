<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        return view('recipes.index', compact('recipes'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['image'] = $request->file('image')
            ? $request->file('image')->store('images', 'public')
            : 'storage/images/default.png';

        Recipe::create($data);

        return redirect(route('recipes.index'));
    }
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $recipe->update($data);

        return redirect(route('recipes.index'));
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect(route('recipes.index'));
    }
}