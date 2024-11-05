<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\PetType;

class PetController extends Controller
{
    public function index()
    {
        return view('home', [
            'pets' => Pet::all()->sortBy('name'),
            'petTypes' => PetType::all()
        ]);
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
