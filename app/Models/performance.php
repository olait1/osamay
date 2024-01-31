<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class performance extends Model
{
    use HasFactory;
    protected $fillable = ['subject','ca','exam','first_term','seecond_term','third_term','session_avg','grade','subject_position','grade_remark','class_avg'];


}
