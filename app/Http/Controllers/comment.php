<?php

namespace App\Http\Controllers;

use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;

class comment extends Controller
{
    public function add_comment(Request $request){

        $comment=ModelsComment::create([
            'comment'=>$request->comment,
            'user_id'=>auth()->user()->id,
            'course_id'=>$request->course_id
        ]);
  
    
        return redirect()->back();
    }
}
