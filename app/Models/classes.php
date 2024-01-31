<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\teacher;
use App\Models\student;
class classes extends Model
{
    use HasFactory;
public function teacher(){
    return $this->belongsTO(teacher::class,'id','c_teacher');
}
public function student(){
return $this->hasMany(student::class,'class_id','id');
}

}
