<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{

      use HasFactory;
    protected $table = "teachers";
    protected $fillable = [
        'nombre',
        'correo',
        'training_center_id',
        'area_id',
        
        
    ];


     public function course()
    {
        return $this->belongsToMany(Course::class, 'course_teachers','teacher_id','course_id');
    }
    public function training_center()
    {
        return $this->belongsTo(TrainingCenter::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

}
