<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\pendingFee;
use App\Models\event;
use App\Models\performance;
use App\Models\activities;
use App\Models\suggestion;
use App\Models\chatRoom;
use App\Models\rating;
use App\Models\comment;
use App\Models\reply;
use App\Models\questions;
use App\Models\term;
use App\Models\session;
use App\Models\attempted;
use App\Models\timetable;
use App\Models\post_video_lecture;
use App\Models\User;
use App\Models\courseRegistration;
use App\Models\registered_course;
use App\Models\classes;
use App\Models\marks;
use App\Models\result;
use App\Models\student;
use App\Models\grade;
use App\Models\chatNotification;

class studentController extends Controller
{
    public function login(){

        return view('student.components.login');
    }
    public function signUp(){
$classes=classes::all();
        return view('student.components.signUp',['classes'=>$classes]);
    }
    //performace
    public function performance(){
        $performance=performance::all();
        $id= auth()->user()->id;
        $results=result::where('user_id',auth()->user()->id)
        ->get();
        $results_term_session=result::where('user_id',auth()->user()->id)
        ->first();
        $grades = grade::all();
       $students = student::where('user_id',$id)->first();
        return view('student.components.performance',['results_term_session'=> $results_term_session,'grades'=>$grades,'results'=>$results,'performances'=>$performance,'student'=>$students]);
    }
    public function operformance(){
        return view('student.components.operformance');
    }


    //activity
    public function activity(){

    $class_id = auth()->user()->student_id->classes->id;
    $activities = activities::where('level',$class_id)
    ->latest()
    ->get();

    $attempted_user = Attempted::join('users', 'users.id', '=', 'attempteds.user_id')
        ->join('activities', 'activities.s_code', '=', 'attempteds.s_code');

    return view('student.components.activities',['activities'=>$activities,'attempted_user'=>$attempted_user ]);

}



    // question
    public function question(Request $request){
        $id=$request->scode;
        $exam=$request->exam;
        // dd($id);
        $no_of_question = questions::where('s_code',$id)
        ->where('exam',$exam)
        ->count();

        if ($no_of_question == 0) {
            # code...
            return redirect()->back()->with('error','Wait for admin to post question');
        }
        $activities = activities::where('s_code',$id)
        ->where('exam',$exam)
        ->first();

        $questions = questions::where('s_code',$id)
        ->where('exam',$exam)
        ->get();
        // $subject=activities::where('s_code',$id)->first();
        $user=auth()->user()->id;
        $s_code=$id;
        $exists = attempted::where('s_code', $id)
        ->where('exam_type',$exam)
        ->where('user_id',auth()->user()->id)
        ->exists();

       // Check if the subject exists and return a JSON response

       if ($exists) {
        return redirect()->back()->with('error','You are not allow to access question page for subject code with '.$id.' this page again');
       }

        attempted::create(['user_id'=>$user,'s_code'=>$s_code,'exam_type'=>$exam]);
        return view('student.components.question',
        [
        'activities'=>$activities,
        'questions'=>$questions,
        'no_of_question'=>$no_of_question,

        ]);

    }
    // mark questions
    public function question_mark(Request $request)
    {
        $no_of_question = count($request->correct_answers);

        $marks=[];
        $mark;
        if (!$request->answers)
        {
            $mark=0;
            $request->answers=[];
        }

        foreach ($request->answers as $answer => $option)
        {
            $correct_answer=$request->correct_answers[$answer];
            // check if the answer is correct
            if ($correct_answer == $option) {
                # code...
                array_push($marks,1);
            }
            // get the total score;
            $mark = array_reduce($marks, function($accumulator, $value) {
                return $accumulator + $value;
            }, 0);
        }

$marks = round(($mark/$no_of_question)*100);
// dd($marks);
        $data=[
            'from'=>'olait768@gmail.com',
            'to'=>auth()->user()->email,
            'subject'=>'Examination Result',
            ];

            try {
                    Mail::send('email.exam', ['data' => $data,'name'=>auth()->user()->name,'mark'=>$marks,'subject'=>$request->s_name],
                     function ($message) use ($data) {
                    $message->from($data['from'], $data['from']);
                    $message->to($data['to']);
                    $message->sender($data['from'], $data['from']);
                    $message->replyTo($data['from'], $data['from']);
                    $message->subject($data['subject']);
                });

            } catch (Exception $e) {
                dd("Error: " . $e->getMessage());
            }
            // insert scores into mark database

            marks::create([
                    'exam'=>$request->exam,
                    'scores'=>$marks,
                    's_code'=>$request->s_code,
                    'user_id'=>auth()->user()->id
                             ]);
        // print($mark);
        return redirect()->route('student.activity');
    }

    //event
    public function event() {
        $event=event::latest()->get();
        return view('student.components.event',['events'=>$event]);
                            }
     //profile
    public function profile ()
    {
    return view('student.components.profile');
     }
     //lecture
     public function lecture ()
     {
$lectures=post_video_lecture::latest()
->where('class_id',auth()->user()->student_id->class_id)
->get();
     return view('student.components.lecture',['lectures'=>$lectures]);
      }
     // lecture video

     public function video($id){

        $video=post_video_lecture::find($id);

// rating
$rated_courses=rating::where('course_id',$id)->get();
$rated_values=rating::where('course_id',$id)->sum('star_rated');
$user_rate=rating::where('course_id',$id)->where('user_id',auth()->user()->id)->first();
if ($rated_courses->count() > 0) {
    # code...
    $stared=$rated_values/$rated_courses->count();
}else{
    $stared=0;
}
$comments= Comment::latest()->get();
$replies=reply::latest()->get();
        return view('student.components.lectureVideo',
        ['video'=>$video,
        'id'=>$id,
        'rated_courses'=>$rated_courses,
        'rated_values'=>$stared,
        'user_rate'=>$user_rate,
        'comments'=>$comments,
        'replies'=>$replies]);
     }
    //  fees
    public function fees()
    {

        $pending=pendingFee::where('user_id',auth()->user()->id)->latest()->get();
        return view('student.components.fees',['pendingFees'=>$pending]);
    }


    public function pendings($reference){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/:reference",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer SECRET_KEY",
            "Cache-Control: no-cache",
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        return $reference;
    }
    // dashboard
    public function dashboard () {
    // //   $table=  timetable::all();
    //   dd(auth()->user()->student_id);
$level=auth()->user()->student_id->class_id;

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

        return view('student.components.dashboard',[
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

        // course registration
        public function courseRegistration(){
            $terms=term::all();
            $session= session::all();
            $classes=classes::all();
            $register_courses=courseRegistration::all();

            return view('student.components.courseRegistration',[
                "register_courses"=>$register_courses,
                'sessions'=>$session,
                'terms'=>$terms,
                'classes'=>$classes
            ]);
        }

          // course registration Post
        public function courseRegistrationpost(Request $request)
        {
            $term=$request->term;
            $session=$request->session;
            $level=$request->level;
        $register_courses=courseRegistration::where('term','=',$term)
        ->where('session','=',$session)
        ->where('level','=',$level)->get();
        $terms=term::all();
        $session= session::all();
        $classes=classes::all();
            return view('student.components.courseRegistration',[
                'sessions'=>$session,
                'terms'=>$terms,
                'classes'=>$classes,
                "register_courses"=>$register_courses
            ]);
        }
        // registered course
        public function registered_course(Request $request){
            $course_name= $request->course_name;
            $course_code =$request->course_code;
            $session= $request->session;
            $level=$request->level;
            $term=$request->term;
            $tick=$request->tick;
            $check_existence = registered_course::where('user_id',auth()->user()->id)
            ->where('course_code',$course_code)
            ->where('session',$session)
            ->where('level',$level)
            ->where('term',$term)->exists();
            // check if the course as be tick
        if ($tick) {
                        # code...
        // check for the existence of course
        if ($check_existence) {
            # code..
            return redirect()->back()->with('error','Already registered');
        }else{
             registered_course::create( [
            'user_id'=>auth()->user()->id,
            "course_name"=>$course_name,
            "course_code"=>$course_code,
            'session'=> $session,
            'level'=>$level,
            'term'=>$term,
            'tick'=>$tick
        ]
        );
        return redirect()->back()->with('message','Your registration has been successful');
        }
        } else {
            # code...
            return redirect()->back()->with('error','Tick the check box below');
        }

        }
        // suggestion
        public function suggestion(){

            return view('student.components.suggestion');
        }
        //suggestionMessage
        public function suggestionMessage(Request $request)
        {
            suggestion::create([
                'suggestion'=>$request->message,
                'user_id'=>auth()->user()->id
            ]);

return redirect()->back();

        }
        // generalChat
        public function generalChat(){
            $chats=chatRoom::all();
            $chatNotification = chatNotification::where('user_id',auth()->user()->id)
            ->delete();
            return view('student.components.generalChat',['chats'=>$chats]);
        }
        public function generalChatroom(Request $request){
            chatRoom::create([
                'user_id'=>auth()->user()->id,
                'message'=>$request->message,
                'user_type'=>$request->user_type
            ]);

            $users = user::all();

            foreach ($users as $user) {
                # code...
                if (auth()->user()->id) {
                    continue;
                }
                chatNotification::create(['user_id'=>$user->id]);
            }

        return redirect()->back();
        }
    }
