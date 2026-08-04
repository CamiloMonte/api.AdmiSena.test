<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apprentice = Apprentice::with('course','computer')->get();
        return response()->json($apprentice);
       
    }

   
    public function create()
    {
        
        
    }

   
    public function store(Request $request)
    {
        
        
    }

    
     
    public function show(Apprentice $apprentice)
    {
        
       
    }

   
    public function edit(Apprentice $apprentice)
    {
        
      
    }

    
    public function update(Request $request, Apprentice $apprentice)
    {
        
        
    }

   
     
    public function destroy(Apprentice $apprentice)
    {
        
        

        } 
    
    
    }