<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResepController extends Controller
{
    //
    public function index(){
        $resep=Resep::all();
        return view('resep', ['resep' => $resep]);
    }
}
