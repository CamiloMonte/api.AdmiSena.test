<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
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
