<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apprentice extends Model
{
    use HasFactory;
    protected $table = "apprentices";
    protected $fillable = [
        'nombre',
        'correo',
        'numero de telefono',
       
    ];


     public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function computer() {
    return $this->hasOne(Computer::class);
}
//
}
