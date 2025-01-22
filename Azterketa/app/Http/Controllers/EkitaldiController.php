<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekitaldi;
use App\Models\User;

class EkitaldiController extends Controller
{
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'izena' => 'required|string',
            'data' => 'required|date',
            'azalpena' => 'nullable|string',
        ]);

        $ekitaldi = Ekitaldi::create($validated);
        return response()->json($ekitaldi, 201);
    }

    
    public function getPartehartzaileak($id)
    {
        $ekitaldi = Ekitaldi::find($id);
        return response()->json($ekitaldi->users); 
    }

    
    public function addDentistaToEkitaldi($id)
    {
        $user = auth()->user(); 
        $ekitaldi = Ekitaldi::find($id);
        
        $ekitaldi->users()->attach($user->id);
        return response()->json(['message' => 'Dentista ondo sartu da']);
    }

 
    public function getEkitaldiakForDentista($id)
    {
        $user = User::find($id);
        return response()->json($user->ekitaldiak);
    }
}
