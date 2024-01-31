<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\courseRegistration;
use App\Models\classes;
class timetable extends Model
{
    use HasFactory;
    protected $fillable=['subject','period','day','level'];
    public function subjects(){
        return $this->belongsTo(courseRegistration::class,'subject','id');
    }
    public function levels(){
        return $this->belongsTo(classes::class,'level','id');
    }
}
