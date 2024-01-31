<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parents;
use App\Models\student;
use App\Models\suggestion;
use App\Models\chatRoom;
use App\Models\event;
use App\Models\timetable;
use App\Models\chatNotification;
class parentController extends Controller
{
    //
    public function login(){

        $parents = parents::where('p_email',auth()->user());
        return view('parent.components.login');
    }
    public function authentication(Request $request){
        $formfield = $request->validate([
            'p_email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->guard('parents')->attempt($formfield)) {
            $request->session()->regenerate();
            return redirect()->route('parent');
        } else {
            \Illuminate\Support\Facades\Log::info('Authentication failed');
        }


        // if (auth()->guard('parents')->attempt($formfield)) {
        //     $request->session()->regenerate();
        //     return redirect()->route('parent');
        // }

        return back()
            ->withErrors(['email' => 'Invalid credentials'])
            ->withInput($request->only('p_email'));
    }

    public  function dashboard() {

        $level=auth()->guard('parents')->user()->students->class_id;
// dd($level);
        // monday
$d1_1st=timetable::where('day',1)
->where('period',1)
->where('level',$level)->latest()->first();
$d1_2nd=timetable::where('day',1)
->where('period',2)
->where('level',$level)->latest()->first();
$d1_3rd=timetable::where('day',1)
->where('period',3)
->where('level',$level)->latest()->first();
$d1_4th=timetable::where('day',1)
->where('period',4)
->where('level',$level)->latest()->first();
$d1_5th=timetable::where('day',1)
->where('period',5)
->where('level',$level)->latest()->first();
$d1_6th=timetable::where('day',1)
->where('period',6)
->where('level',$level)->latest()->first();
$d1_7th=timetable::where('day',1)
->where('period',7)
->where('level',$level)->latest()->first();
$d1_8th=timetable::where('day',1)
->where('period',8)
->where('level',$level)->latest()->first();

// tuesday
$d2_1st=timetable::where('day',2)
->where('period',1)
->where('level',$level)->latest()->first();
$d2_2nd=timetable::where('day',2)
->where('period',2)
->where('level',$level)->latest()->first();
$d2_3rd=timetable::where('day',2)
->where('period',3)
->where('level',$level)->latest()->first();
$d2_4th=timetable::where('day',2)
->where('period',4)
->where('level',$level)->latest()->first();
$d2_5th=timetable::where('day',2)
->where('period',5)
->where('level',$level)->latest()->first();
$d2_6th=timetable::where('day',2)
->where('period',6)
->where('level',$level)->latest()->first();
$d2_7th=timetable::where('day',2)
->where('period',7)
->where('level',$level)->latest()->first();
$d2_8th=timetable::where('day',2)
->where('period',8)
->where('level',$level)->latest()->first();
// wednessday
$d3_1st=timetable::where('day',3)
->where('period',1)
->where('level',$level)->latest()->first();
$d3_2nd=timetable::where('day',3)
->where('period',2)
->where('level',$level)->latest()->first();
$d3_3rd=timetable::where('day',3)
->where('period',3)
->where('level',$level)->latest()->first();
$d3_4th=timetable::where('day',3)
->where('period',4)
->where('level',$level)->latest()->first();
$d3_5th=timetable::where('day',3)
->where('period',5)
->where('level',$level)->latest()->first();
$d3_6th=timetable::where('day',3)
->where('period',6)
->where('level',$level)->latest()->first();
$d3_7th=timetable::where('day',3)
->where('period',7)
->where('level',$level)->latest()->first();
$d3_8th=timetable::where('day',3)
->where('period',8)
->where('level',$level)->latest()->first();
// Thursday
$d4_1st=timetable::where('day',4)
->where('period',1)
->where('level',$level)->latest()->first();
$d4_2nd=timetable::where('day',4)
->where('period',2)
->where('level',$level)->latest()->first();
$d4_3rd=timetable::where('day',4)
->where('period',3)
->where('level',$level)->latest()->first();
$d4_4th=timetable::where('day',4)
->where('period',4)
->where('level',$level)->latest()->first();
$d4_5th=timetable::where('day',4)
->where('period',5)
->where('level',$level)->latest()->first();
$d4_6th=timetable::where('day',4)
->where('period',6)
->where('level',$level)->latest()->first();
$d4_7th=timetable::where('day',4)
->where('period',7)
->where('level',$level)->latest()->first();
$d4_8th=timetable::where('day',4)
->where('period',8)
->where('level',$level)->latest()->first();
// Friday
$d5_1st=timetable::where('day',5)
->where('period',1)
->where('level',$level)->latest()->first();
$d5_2nd=timetable::where('day',5)
->where('period',2)
->where('level',$level)->latest()->first();
$d5_3rd=timetable::where('day',5)
->where('period',3)
->where('level',$level)->latest()->first();
$d5_4th=timetable::where('day',5)
->where('period',4)
->where('level',$level)->latest()->first();
$d5_5th=timetable::where('day',5)
->where('period',5)
->where('level',$level)->latest()->first();
$d5_6th=timetable::where('day',5)
->where('period',6)
->where('level',$level)->latest()->first();
$d5_7th=timetable::where('day',5)
->where('period',7)
->where('level',$level)->latest()->first();
$d5_8th=timetable::where('day',5)
->where('period',8)
->where('level',$level)->latest()->first();
$no_of_chat = chatNotification::count();
        return view('parent.components.dashboard',[
            // number of chat
            'no_of_chat'=>$no_of_chat,
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
            ]
        );



        }
        // teachers
        public function teacher(){
            $parent_id = auth()->guard('parents')->user()->id;
            $parents =  parents::where('id',$parent_id)->get();

            $no_of_chat = chatNotification::count();
            return view('parent.components.subject_teacher',['parents'=>$parents,'no_of_chat'=>$no_of_chat]);
        }
        // profile
 public function profile(){

    $no_of_chat = chatNotification::count();
    return view('parent.components.profile',['no_of_chat'=>$no_of_chat]);
 }
 public function update_profile(Request $request){
dd($request);
    return redirect()->back();
}
//  Event

public function event(){
    $event=event::latest()->get();
    $no_of_chat = chatNotification::count();
    return view('parent.components.event',['events'=>$event,'no_of_chat'=>$no_of_chat]);
}
        // generalChatroom
        public function general_chat(){
            $chats=chatRoom::all();


    return view('parent.components.generalChat',['chats'=>$chats]);
        }

        public function generalChatroom(Request $request){
            chatRoom::create([
                'user_id'=>auth()->guard('parents')->user()->id,
                'message'=>$request->message,
                'user_type'=>$request->user_type
            ]);



        return redirect()->back();
        }
         // suggestion
         public function suggestion(){
            return view('parent.components.suggestion');
        }
         //suggestionMessage
         public function suggestionMessage(Request $request)
         {
             suggestion::create([
                 'suggestion'=>$request->message,
                 'user_id'=>auth()->guard('parents')->user()->id
             ]);
            return redirect()->back();

         }
}
