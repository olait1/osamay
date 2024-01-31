<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\questions;
use App\Models\User;
class attempted extends Model
{
    use HasFactory;
    // In the Attempted model
public function question()
{
    return $this->belongsTo(questions::class);
}
public function user(){
    return $this->hasMany(User::class,'id','s_code');
}

}
