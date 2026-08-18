<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
   
    public function index()
    {
      $apprentice = Apprentice::all();
        return $apprentice;
       
    }

   
  
    public function store(Request $request)
    {
          $request->validate([
            'nombre' => 'sometimes|string',
            'correo' => 'sometimes|string',
            'numero de telefono' => 'sometimes|string',
            'course_id' => 'sometimes|string',
            'computer_id' => 'sometimes|string',
        ]);
        $apprentice = Apprentice::create($request->all());
        return $apprentice;
        
    }

    
     
    public function show(Apprentice $apprentice)
    {
        
       $apprentice = Apprentice::find($apprentice->id);
       return $apprentice;
    }

   
    

    
    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'nombre' => 'sometimes|string',
            'correo' => 'sometimes|string',
            'numero de telefono' => 'sometimes|string',
            'course_id' => 'sometimes|string',
            'computer_id' => 'sometimes|string',
        ]);
        $apprentice = Apprentice::update($request->all());
        return $apprentice;
    }

   
     
    public function destroy(Apprentice $apprentice)
    {
      $apprentice->delete();
      return $apprentice;
        

        } 
    
    
    }