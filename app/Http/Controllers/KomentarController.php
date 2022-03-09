<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KomentarController extends Controller
{
    //
    public function store(Request $request){
        $this->validate($request, [
            'id_recipe' => 'required',
            'id_user' => 'required',
            'rating' => 'required',
            'komen' => 'required'
        ]);
        
        $user = User::find($request->id_user);
        Komentar::create([
            'id_recipe' => $request->id_recipe,
            'id_user' => $request->id_user,
            'rating' => $request->rating,
            'komen' => $request->komen,
            'user_name' => $user->name
        ]);
        return redirect('/resep/view/'.$request->id_recipe);
    }
}
