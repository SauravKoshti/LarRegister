<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // private $table = 'students';
    protected $fillable = [
        'name','email','phone','password','division','gender','hobby'
    ];
    // public function setHobbyAttribute($value)
    // {
    //     $this->attributes['hobby'] = json_encode($value);
    // }

    // public function getHobbyAttribute($value)
    // {
    //     return $this->attributes['hobby'] = json_decode($value);
    // }
}
