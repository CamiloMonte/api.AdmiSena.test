<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training_center extends Model
{
    public function course()
    {
        return $this->hasMany(Course::class,);
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class,);
    }


}
