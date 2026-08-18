<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Training_center extends Model
{
    use HasFactory;
    protected $table = "training_centers";
    protected $fillable = [
        'nombre',
        'ubicacion',
    ];
    public function course()
    {
        return $this->hasMany(Course::class,);
    }
    public function teacher()
    {
        return $this->hasMany(Teacher::class,);
    }


}
