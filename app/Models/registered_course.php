<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\student;
use App\Models\classes;
use App\Models\courseRegistration;
use App\Models\teacher;
class registered_course extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(user::class,'user_id','id');
    }
    public function levels(){
        return $this->belongsTo(classes::class,'level','id');
    }
    public function students(){
        return $this->belongsTo(student::class,'user_id','user_id');
    }
    public function teacher(){
        return $this->belongsTo(teacher::class,'id','c_id');
    }
    public function subject(){
        return $this->belongsTo(courseRegistration::class,'course_code','course_code');
    }
}
