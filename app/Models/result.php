<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\courseRegistration;
class result extends Model
{
    use HasFactory;
    public function subjects(){
return $this->belongsTo(courseRegistration::class,'subject','id');
    }
   

}
