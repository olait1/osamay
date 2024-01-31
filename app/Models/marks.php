<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\courseRegistration;
class marks extends Model
{
    use HasFactory;
    public function courseReg(){
return $this->belongsTo(courseRegistration::class,'s_code','course_code');
    }

}
