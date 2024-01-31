<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\rating as ModelsRating;
use Illuminate\Http\Request;

class rating extends Controller
{
    public function  rating(Request $request)
    {

    $course_rate=$request->input('course_rating');
 $course_id=$request->input('course_id');
$existing_rating=ModelsRating::where('user_id',auth()->user()->id)->where('course_id',$course_id)->first();
if ($existing_rating) {
    # code...
    $existing_rating->star_rated=$course_rate;
    $existing_rating->update();
return redirect()->back();
} else{
ModelsRating::create([
    'user_id'=>auth()->user()->id,
    'course_id'=>$course_id,
    'star_rated'=>$course_rate
]);
return redirect()->back();
}

}


public function user()
    {
        return $this->belongsTo(User::class);
    }
}
