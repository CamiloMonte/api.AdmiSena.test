<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Computer extends Model
{

      use HasFactory;
    protected $table = "computadores";
    protected $fillable = [
        'numero',
        'marca',
    ];
    public function apprentice() {
    return $this->hasOne(Apprentice::class);
}
}
