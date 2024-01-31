<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\courseRegistration;
use App\Models\classes;
class post_video_lecture extends Model
{
    use HasFactory;
    public function lecture_subject(){
        return $this->belongsTO(courseRegistration::class,'l_subject',"id");
    }

    public function classes(){
        return $this->belongsTO(classes::class,'class_id',"id");
    }
}
