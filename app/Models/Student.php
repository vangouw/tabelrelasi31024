<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'class_id'];

public function classRoom()
{
    return $this->belongsTo(ClassRoom::class, 'class_id');
}

}

