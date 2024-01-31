<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\session;
use App\Models\term;
use App\Models\classes;
use App\Models\teacher;
class courseRegistration extends Model
{
    use HasFactory;
    public function sessions(){
        return $this->belongsTo(session::class,'session','id');
    }
    public function terms(){
        return $this->belongsTo(term::class,'term','id');
    }
    public function levels(){
        return $this->belongsTo(classes::class,'level','id');
    }
    public function subject_teacher(){
        return $this->belongsTo(teacher::class,'id','subject_id');
    }
}
