<?php

namespace App\Http\Controllers;

use App\Models\Training_center;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $training_center = Training_center::all();
        return $training_center;
    }

 

    
    public function store(Request $request)
    {
       $request->validate([
            'nombre' => 'sometimes|string',
            'ubicacion' => 'sometimes|string',
        ]);
        $training_center = Training_center::create($request->all());
        return $training_center;
    }

 
    public function show(Training_center $training_center)
    {
        $training_center = Training_center::find($training_center->id);
        return $training_center;
    }

   
  
    public function update(Request $request, Training_center $training_center)
    {
        $request->validate([
            'nombre' => 'sometimes|string',
            'ubicacion' => 'sometimes|string',
        ]);
        $training_center = Training_center::update($request->all());
        return $training_center;
    }

   
    public function destroy(Training_center $training_center)
    {
        $training_center->delete();
        return $training_center;
    }
}
