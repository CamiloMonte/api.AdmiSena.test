<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
public function apprentices()
    {
        return $this->hasMany(Apprentice::class,);
    }
    public function teacher()
    {
        return $this->belongsToMany(Teacher::class, 'course_teachers','course_id','teacher_id ');
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
