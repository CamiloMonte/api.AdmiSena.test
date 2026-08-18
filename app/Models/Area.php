<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table = "areas";
    protected $fillable = [
        'nombre',
        'course_id'
    ];
    
    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
    public function course(){
        return $this->hasMany(Course::class);
    }

}
