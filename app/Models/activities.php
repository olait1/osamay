<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\questions;
use App\Models\attempted;
use App\Models\User;
use App\Models\courseRegistration;
use App\Models\exam;
class activities extends Model
{
    use HasFactory;

    // subject method


public function question(){
    return $this->hasMany(questions::class,'s_code','s_code');
}

    // //questions attempt
    public function attempted(){
        return $this->hasMany(attempted::class,'s_code','s_code');
    }

public function subject(){
    return $this->hasOne(courseRegistration::class,'course_code','s_code');
}
public function exams(){
    return $this->belongsTo(exam::class,'exam','id');
}

}
