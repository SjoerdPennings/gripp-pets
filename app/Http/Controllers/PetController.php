<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
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

    public function store(PetRequest $request)
    {
        $pet = Pet::create([
            'name' => $request->name,
            'pet_type_id' => $request->type,
            'address' => $request->address
        ]);
        return redirect()->back();
    }

    public function destroy(int $id)
    {
        $pet = Pet::find($id);
        $pet->delete();
        return redirect()->back();
    }
}
