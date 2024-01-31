<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chatRoom;
use App\Models\event;
use App\Models\teacher;
use App\Models\classes;
use App\Models\registered_course;
use App\Models\timetable;
use App\Models\chatNotification;

class teacherController extends Controller
{
    public function teacher_login(){
        return view('teachers.components.login');
    }
 public function dashboard(){
    $teacher = teacher::where('user_id',auth()->user()->id)->first();



    $subject=auth()->user()->teachers->subject_id;
    $sub_code = auth()->user()->teachers->subjects->course_code;
    // dd($sub_tea);
    $student_offer_course = registered_course::where('course_code',$sub_code )->latest()->get();
    // monday
$d1_1st=timetable::where('day',1)
->where('period',1)
->where('subject',$subject)->latest()->first();
$d1_2nd=timetable::where('day',1)
->where('period',2)
->where('subject',$subject)->latest()->first();
$d1_3rd=timetable::where('day',1)
->where('period',3)
->where('subject',$subject)->latest()->first();
$d1_4th=timetable::where('day',1)
->where('period',4)
->where('subject',$subject)->latest()->first();
$d1_5th=timetable::where('day',1)
->where('period',5)
->where('subject',$subject)->latest()->first();
$d1_6th=timetable::where('day',1)
->where('period',6)
->where('subject',$subject)->latest()->first();
$d1_7th=timetable::where('day',1)
->where('period',7)
->where('subject',$subject)->latest()->first();
$d1_8th=timetable::where('day',1)
->where('period',8)
->where('subject',$subject)->latest()->first();

// tuesday
$d2_1st=timetable::where('day',2)
->where('period',1)
->where('subject',$subject)->latest()->first();
$d2_2nd=timetable::where('day',2)
->where('period',2)
->where('subject',$subject)->latest()->first();
$d2_3rd=timetable::where('day',2)
->where('period',3)
->where('subject',$subject)->latest()->first();
$d2_4th=timetable::where('day',2)
->where('period',4)
->where('subject',$subject)->latest()->first();
$d2_5th=timetable::where('day',2)
->where('period',5)
->where('subject',$subject)->latest()->first();
$d2_6th=timetable::where('day',2)
->where('period',6)
->where('subject',$subject)->latest()->first();
$d2_7th=timetable::where('day',2)
->where('period',7)
->where('subject',$subject)->latest()->first();
$d2_8th=timetable::where('day',2)
->where('period',8)
->where('subject',$subject)->latest()->first();
// wednessday
$d3_1st=timetable::where('day',3)
->where('period',1)
->where('subject',$subject)->latest()->first();
$d3_2nd=timetable::where('day',3)
->where('period',2)
->where('subject',$subject)->latest()->first();
$d3_3rd=timetable::where('day',3)
->where('period',3)
->where('subject',$subject)->latest()->first();
$d3_4th=timetable::where('day',3)
->where('period',4)
->where('subject',$subject)->latest()->first();
$d3_5th=timetable::where('day',3)
->where('period',5)
->where('subject',$subject)->latest()->first();
$d3_6th=timetable::where('day',3)
->where('period',6)
->where('subject',$subject)->latest()->first();
$d3_7th=timetable::where('day',3)
->where('period',7)
->where('subject',$subject)->latest()->first();
$d3_8th=timetable::where('day',3)
->where('period',8)
->where('subject',$subject)->latest()->first();
// Thursday
$d4_1st=timetable::where('day',4)
->where('period',1)
->where('subject',$subject)->latest()->first();
$d4_2nd=timetable::where('day',4)
->where('period',2)
->where('subject',$subject)->latest()->first();
$d4_3rd=timetable::where('day',4)
->where('period',3)
->where('subject',$subject)->latest()->first();
$d4_4th=timetable::where('day',4)
->where('period',4)
->where('subject',$subject)->latest()->first();
$d4_5th=timetable::where('day',4)
->where('period',5)
->where('subject',$subject)->latest()->first();
$d4_6th=timetable::where('day',4)
->where('period',6)
->where('subject',$subject)->latest()->first();
$d4_7th=timetable::where('day',4)
->where('period',7)
->where('subject',$subject)->latest()->first();
$d4_8th=timetable::where('day',4)
->where('period',8)
->where('subject',$subject)->latest()->first();
// Friday
$d5_1st=timetable::where('day',5)
->where('period',1)
->where('subject',$subject)->latest()->first();
$d5_2nd=timetable::where('day',5)
->where('period',2)
->where('subject',$subject)->latest()->first();
$d5_3rd=timetable::where('day',5)
->where('period',3)
->where('subject',$subject)->latest()->first();
$d5_4th=timetable::where('day',5)
->where('period',4)
->where('subject',$subject)->latest()->first();
$d5_5th=timetable::where('day',5)
->where('period',5)
->where('subject',$subject)->latest()->first();
$d5_6th=timetable::where('day',5)
->where('period',6)
->where('subject',$subject)->latest()->first();
$d5_7th=timetable::where('day',5)
->where('period',7)
->where('subject',$subject)->latest()->first();
$d5_8th=timetable::where('day',5)
->where('period',8)
->where('subject',$subject)->latest()->first();




    return view('teachers.components.dashboard',['teacher'=>$teacher,'student_offer_course'=>$student_offer_course,'timetable'=>[
        // monday
        'd1_1st'=>$d1_1st,
        'd1_2nd'=>$d1_2nd,
        'd1_3rd'=>$d1_3rd,
         'd1_4th'=>$d1_4th,
         'd1_5th'=>$d1_5th,
         'd1_6th'=>$d1_6th,
         'd1_7th'=>$d1_7th,
         'd1_8th'=>$d1_8th,
        //  tuesday
        'd2_1st'=>$d2_1st,
        'd2_2nd'=>$d2_2nd,
        'd2_3rd'=>$d2_3rd,
         'd2_4th'=>$d2_4th,
         'd2_5th'=>$d2_5th,
         'd2_6th'=>$d2_6th,
         'd2_7th'=>$d2_7th,
         'd2_8th'=>$d2_8th,
            //  Wednessday
        'd3_1st'=>$d3_1st,
        'd3_2nd'=>$d3_2nd,
        'd3_3rd'=>$d3_3rd,
         'd3_4th'=>$d3_4th,
         'd3_5th'=>$d3_5th,
         'd3_6th'=>$d3_6th,
         'd3_7th'=>$d3_7th,
         'd3_8th'=>$d3_8th,
           //  Thursday
        'd4_1st'=>$d4_1st,
        'd4_2nd'=>$d4_2nd,
        'd4_3rd'=>$d4_3rd,
         'd4_4th'=>$d4_4th,
         'd4_5th'=>$d4_5th,
         'd4_6th'=>$d4_6th,
         'd4_7th'=>$d4_7th,
         'd4_8th'=>$d4_8th,
         //  Friday
        'd5_1st'=>$d5_1st,
        'd5_2nd'=>$d5_2nd,
        'd5_3rd'=>$d5_3rd,
         'd5_4th'=>$d5_4th,
         'd5_5th'=>$d5_5th,
         'd5_6th'=>$d5_6th,
         'd5_7th'=>$d5_7th,
         'd5_8th'=>$d5_8th,
        ]]);
 }
 public function profile()  {
    return view('teachers.components.profile');

}
public function  setting() {
    return view('teachers.components.tsetting');
}
public function classes(){
    $classes= classes::all();
    return view('teachers.components.class',['classes'=>$classes]);
}
public function student($id){
    // dd($id);
$student = registered_course::where('level',$id)->get();


    return view('teachers.components.student',['students'=>$student]);
}
public function event(){
    $event=event::latest()->get();
    return view('teachers.components.event',['events'=>$event]);
}
public function generalChat(){
    $chats=chatRoom::all();
    $chatNotification = chatNotification::where('user_id',auth()->user()->id)
    ->delete();
    return view('teachers.components.generalChat',['chats'=>$chats,]);
}
public function suggestion(){
    return view('teachers.components.suggestion');
}
}
