<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;
use App\Models\classes;
use App\Models\courseRegistration;
class teacher extends Model
{
    use HasFactory;
public function user()
{
return $this->belongsTo(user::class,'user_id','id');
}
public function levels(){
    return $this->belongsTo(classes::class,'c_teacher','id');
}
public function subjects(){
    return $this->belongsTo(courseRegistration::class,'subject_id','id');
}

}
