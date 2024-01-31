<?php

// app/Models/Comment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [ 'comment','course_id', 'user_id'];
    public function user(){
      return  $this->belongsTo(User::class);
    }
}
