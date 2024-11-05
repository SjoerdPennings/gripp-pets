<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $pet = Pet::create([
            'name' => $request->name,
            'pet_type_id' => $request->type,
            'address' => $request->address
        ]);
        return redirect()->back();
    }
}
