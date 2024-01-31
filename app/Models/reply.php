<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reply extends Model
{
    use HasFactory;
    protected $fillable=['user_id','course_id','comment_id','reply'];
    public function comment(){
        return $this->belongsTo(Comment::class);
    }
}
