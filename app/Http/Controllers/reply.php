<?php

namespace App\Http\Controllers;

use App\Models\reply as ModelsReply;
use Illuminate\Http\Request;

class reply extends Controller
{
    //
    public function add(Request $request){
     
$reply=$request->validate([
'user_id'=>'required',
'comment_id'=>'required',
'reply'=>'required',
'course_id'=>'required'
]);
ModelsReply::create($reply);
return redirect()->back();
    }
}
