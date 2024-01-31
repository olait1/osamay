<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class questions extends Model
{
    use HasFactory;
    public function user(){
        $this->belongTo(User::class,'s_code','s_code');
    }
    public function subject(){
      return $this->belongsTo(courseRegistration::class,'s_code','course_code');
    }

}
