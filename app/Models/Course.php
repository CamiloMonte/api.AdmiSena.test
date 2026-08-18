<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{

  use HasFactory;
    protected $table = "courses";
    protected $fillable = [
        'numero_de_curso',
        'dia',
        'area_id',
        'training_center_id'
    ];

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
