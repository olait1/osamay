<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\classes;
use App\Models\user;
use App\Models\teacher;
class student extends Model
{
    use HasFactory;
    public function classes(){
return $this->belongsTo(classes::class,'class_id','id');
    }
   public function user(){
    return $this->belongsTo(user::class);
   }
}
