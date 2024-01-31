<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\attempted;
use App\Models\student;
use App\Models\parents;
use App\Models\teacher;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'class',
        'email',
        'password',

        'user',
        'student_id',
        'passport',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function classes(){
        return $this->belongsTo(attempted::class,'user_id','id');
    }



public function attempted(){
    return $this->belongsTo(attempted::class,'user_id','id');
}
// student
public function student_id(){
    return $this->hasOne(student::class,'user_id','id');
}
// parent
public function parents(){
    return $this->belongsTO(parents::class,'student_id','id');
}
public function teachers(){
    return $this->hasOne(teacher::class,'user_id','id');
}
}
