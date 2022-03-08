<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResepController extends Controller
{
    //
    public function index()
    {
        $resep = Resep::all();
        return view('resep', ['resep' => $resep]);
    }

    public function tambah()
    {
        return view('resep_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'recipe_name' => 'required',
            'id_user' => 'required',
            'cooking_time' => 'required',
            'tag' => 'required',
            'image' => 'required',
            'description' => 'required',
            'rating' => 'required',
            'ingredients' => 'required',
            'steps' => 'required',
        ]);

        Resep::create([
            'recipe_name' => $request->recipe_name,
            'id_user' => $request->id_user,
            'cooking_time' => $request->cooking_time,
            'tag' => $request->tag,
            'image' => $request->image,
            'description' => $request->description,
            'rating' => $request->rating,
            'ingredients' => $request->ingredients,
            'steps' => $request->steps,
        ]);

        return redirect('/resep');
    }
}
