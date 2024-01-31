<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use App\Models\student;
use App\Models\User;
use App\Models\registered_course;
class Parents extends Model implements Authenticatable
{
    use Notifiable, AuthenticatableTrait;

    // Your model code here

    public function getAuthIdentifierName()
    {
        return 'id'; // Adjust this based on your database column name for the unique identifier
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    public function students(){
      return $this->belongsTo(student::class,'student_id','user_id');
    }
   public function registered_course(){
    return $this->hasMany(registered_course::class,'user_id','student_id');
   }
   public function user(){
    return $this->belongsTo(User::class,'user_id','id');
   }
}
