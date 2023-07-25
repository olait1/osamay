<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'No of courses','category_id'
    ];
    public function course()
    {
    
      return $this->hasMany('App\Models\Courses');
    }
    

}
