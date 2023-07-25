<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
  
    use HasFactory;
   

    protected $ratings;

    protected $ratings_count;
    protected $fillable =[
        'name',
        'course_id','book','format','img'];
        public function category(){
            return $this->belongsTo(category::class);
        }

            public function raters()
    {
        return $this->ratings->raters();
    }

    public function rating()
    {
        return $this->ratings->rating();
    }
}
