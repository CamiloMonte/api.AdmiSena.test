<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function intermedia()
    {
        $teacher = Teacher::with('course')->get();
        return $teacher;
    }
    public function index()
    {
        $teacher = Teacher::all();
        return $teacher;
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'sometimes|string',
            'correo' => 'sometimes|string',
            'training_center_id' => 'sometimes|string',
            'area_id' => 'sometimes|string',
        ]);
        $teacher = Teacher::create($request->all());
        return $teacher;
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
         $teacher = Teacher::find($teacher->id);
        return $teacher;
    }

   

    public function update(Request $request, Teacher $teacher)
    {
       $request->validate([
            'nombre' => 'sometimes|string',
            'correo' => 'sometimes|string',
            'training_center_id' => 'sometimes|string',
            'area_id' => 'sometimes|string',
        ]);
        $teacher = Teacher::update($request->all());
        return $teacher;
    }

   
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return $teacher;
    }
}
