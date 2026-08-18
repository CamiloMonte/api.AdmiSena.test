<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function intermedia()
    {
        $course = Course::with('teachers')->get();
        return $course;
    }
    
    public function index()
    {
        $course = Course::all();
        return $course;
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'numero_de_curso' => 'sometimes|string',
            'dia' => 'sometimes|string',
            'area_id' => 'sometimes|string',
            'training_center_id' => 'sometimes|string',
        ]);
        $course = Course::create($request->all());
        return $course;
    }

    
    public function show(Course $course)
    {
        $course = Course::find($course->id);
        return $course;
    }

    
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'numero_de_curso' => 'sometimes|string',
            'dia' => 'sometimes|string',
            'area_id' => 'sometimes|string',
            'training_center_id' => 'sometimes|string',
        ]);
        $course = Course::update($request->all());
        return $course;
    }
    public function destroy(Course $course)
    {
     $course->delete();
     return $course;
    }
}
