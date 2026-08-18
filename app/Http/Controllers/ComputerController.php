<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    
    public function index()
    {
        $computer = Computer::all();
        return $computer;
    }


    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'sometimes|string',
            'numero' => 'sometimes|string',
        ]);
        $computer = Computer::create($request->all());
        return $computer;
    }

   
    public function show(Computer $computer)
    {
        $computer = Computer::find($computer->id);
        return $computer;
    }

  

    public function update(Request $request, Computer $computer)
    {
       $request->validate([
            'marca' => 'sometimes|string',
            'numero' => 'sometimes|string',
        ]);
        $computer = Computer::update($request->all());
        return $computer;
    }

    
    public function destroy(Computer $computer)
    {
        $computer->delete();
        return $computer;
    }
}
