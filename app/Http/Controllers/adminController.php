<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\user;
use App\Models\teacher;
use App\Models\event;
use App\Models\parents;
use App\Models\classes;
use App\Models\session;
use App\Models\term;
use App\Models\activities;
use App\Models\chatRoom;
use App\Models\questions;
use App\Models\exam;
use App\Models\grade;
use App\Models\result;
use App\Models\post_video_lecture;
use App\Models\marks;
use App\Models\timetable;
use App\Models\pendingFee;
use App\Models\student;
use App\Models\courseRegistration;
class adminController extends Controller
{
    //
  public  function dashboard(){
        $noStudents = User::where('user',1)->count();
        $noTeachers=user::where('user',3)->count();
        $noParents=parents::all()->count();
        return view('admins.components.dashboard',['noStudents'=>$noStudents,'noTeachers'=>$noTeachers,'noParents'=>$noParents]);
    }
    // student
    public function student(){
        $Students=user::where('user',1)->get();

        return view('admins.components.student',['students'=>$Students]);
    }
    // search student
    public function student_search(Request $request){
        $search = $request->search;
$students=user::where('user',1)
->orWhere('name',$search)
// this search function is not yet complete it remains to search from student_id
->get();

    return view('admins.components.student',['students'=>$students]);


    }
    // parent
    public function parent(){
        $parents=parents::all();


        return view('admins.components.parent',['parents'=>$parents]);
    }

    //Teachers
    public function teacher(){
        $teachers=user::where('user',3)->get();
    $classes=classes::all();
    $subjects=courseRegistration::all();
        return view('admins.components.teacher',['teachers'=>$teachers,'classes'=>$classes,'subjects'=>$subjects]);

    }
//add teacher
    public function add_teacher(Request $request){

    $formField=$request->validate([
        'name'=>'required',
        'user'=>'required',
        'email'=>['required','email',Rule::unique('users','email')],
        'password'=>'required|confirmed|min:6',
        'passport'=>'image:size(2000)',
        'gender'=>'in:male,female',
        'DOB'=>'nullable',

     ]);

$formField['password']=bcrypt($formField['password']);

 if ($request->hasFile('passport'))
        {
        # code...
        $formField['passport']=$request->file('passport')->store('passport','public');
       }


$user=User::create($formField);
$last_user = user::latest()->first();
$last_user_id = $last_user->id;
teacher::create(['c_id'=>$request->class,'subject_id'=>$request->subject,'user_id'=>$last_user_id]);
return redirect()->back();
}
// get exam page
    public function exam()
    {
        $subjects = courseRegistration::latest()->get();
        $class = classes::all();

        $exams= exam::all();
    return view('admins.components.exam',['subjects'=>$subjects,'exams'=>$exams,'levels'=>$class]);
    }
    // add new exams
    public function exam_add(Request $request){

        activities::create([
                'exam'=>$request->exam,
                'level'=>$request->level,
                's_code'=>$request->subject_name,
                'instruction'=>$request->instruction,
                'duration'=>$request->duration,
                'time'=>$request->time,
                'due_date'=>$request->date
                ]);
        return redirect()->back()->with('message','successfully add a new exam');
    }

    // payment set
    public function set_payment(){
        $session = session::latest()->get();
        $levels = classes::latest()->get();
        $term = term::latest()->get();

        return view('admins.components.set_payment',['sessions'=>$session,'terms'=>$term,'levels'=>$levels]);
    }
    // get questions page
    public function question()
        {
            $exams=exam::all();
              $subjects = courseRegistration::all();
            return view('admins.components.questions',['subjects'=>$subjects,'exams'=>$exams]);
        }
        // add questions
    public function question_add(Request $request)
        {

            //  dd($request);
            questions::create([
                's_code'=>$request->s_code,
                'questions'=>$request->question,
                'opt_a'=>$request->a,
                'opt_b'=>$request->b,
                'opt_c'=>$request->c,
                'opt_d'=>$request->d,
                'answer'=>$request->ans,
                'exam'=>$request->exam
            ]);
            return redirect()->back();

        }

// manage mark
public function manage_mark(){
    return view('admins.components.manage_mark');
}
// grade
public function grade(){
$grades=grade::find(1)->first();
    return view('admins.components.grade',['grades'=>$grades]);
}
// update post
public function grade_post(Request $request){
$grade=grade::find(1);

$grade->update([
    "excellent"=>$request->excellent,
    "vgood"=>$request->vgood,
    "good"=>$request->good,
    "satisfactory"=>$request->satisfactory,
    "pass"=>$request->pass,
    "fail"=>$request->fail]);
     return redirect()->back();
        }

        // release exam result
    public function exam_result(){
    $terms=term::all();
    $session= session::all();
    return view('admins.components.result',['terms'=>$terms,'sessions'=>$session]);
    }

    // release result for student
    public function releseaseResult(Request $request)
    {
        $term = $request->term;
        $session = $request->session;
        $marks = marks::latest()->get();

        foreach ($marks as $mark) {
            $course=$mark->courseReg;
           $course_term = $course->term;
           $course_session = $course->session;
           $test = 0;
           $exam = 0;
           if ($course_term == $term && $course_session == $session)
            {
            # code...
            // check existence of the result of each student
            $exam_existence= result::where('subject',$course->id)
            ->where('user_id',$mark->user_id)->exists();
            // check if the score is for exam or test
            if ($mark->exam == 1) {
                # code...
                $test = $mark->scores;
            }elseif ($mark->exam == 2) {
                # code...
                $exam = $mark->scores;
            }

            // if it's existn then update the score
            if ($exam_existence)
            {

                # code...
                $result = result::where('user_id',$mark->user_id)
               ->where('subject',$course->id);

                            if ($mark->exam == 1) {
                                        # code...
                            $test = $mark->scores;
                            $result->update(['ca1'=>$test ]);
                            return redirect()->back();

                            }elseif ($mark->exam == 2) {
                                        # code...
                             $exam = $mark->scores;
                            $result->update(['exam'=>$exam]);

                            return redirect()->back();
                            }
                            return redirect()->back();
            }

            result::create([
                "subject"=>$course->id,
                "ca1"=>$test,
                'exam'=>$exam,
                'user_id'=>$mark->user_id
            ]);
            return redirect()->back();
           }
           return redirect()->back();
        }



    }
    //newResult
    public function newResult(){
        // result::delete();
        $results= result::truncate();

        return redirect()->back();
    }
// manage mark exam
public function manage_mark_exam(Request $request){
$id = $request->score_id;
$exams=exam::find($id);
$exams->update(['score'=> $request->post_score]);
return redirect()->back();
}
// manage mark exam
public function manage_mark_test(Request $request){
    $id = $request->score_id;
    $exams=exam::find($id);
    $exams->update(['score'=> $request->post_score]);
    return redirect()->back();
    }
    // manage mark Quiz
public function manage_mark_quize(Request $request){
    $id = $request->score_id;
    $exams=exam::find($id);
    $exams->update(['score'=> $request->post_score]);
    return redirect()->back();
    }
        // manage mark Quiz
public function manage_mark_assignment(Request $request){
    $id = $request->score_id;
    $exams=exam::find($id);
    $exams->update(['score'=> $request->post_score]);
    return redirect()->back();
    }

    // subject
    public function subject(){
        $subject= courseRegistration::latest()->get();
        $classes= classes::all();
        $sessions=session::latest()->get();
        $terms=term::all();
        return view('admins.components.subject',['subjects'=>$subject,'sessions'=>$sessions,'terms'=>$terms,'classes'=>$classes]);
    }

        // adding new subject
    public function subject_add(Request $request)
                {
                // generate student id for the student
        $student_ids=Helper::generateId(new courseRegistration,'course_code',5,'sc');
        courseRegistration::create([
            'course_name'=>$request->name,
            'course_code'=>$student_ids,
            'session'=>$request->session,
            'level'=>$request->level,
            'term'=>$request->term
            ]);
        return redirect()->back()->with('message',$request->name.' is successfully added');
        }

    // delete subject
    public function subject_delete(Request $request){
        $id=$request->id;
        $registeration_course=courseRegistration::find($id);
        $registeration_course->delete();
        return redirect()->back();
    }
    // update and edit subject
    public function subject_edit(Request $request){
        $id=$request->id;
        $registeration_course=courseRegistration::find($id);

        $registeration_course->update([
            'course_name'=>$request->name,
            'session'=>$request->session,
            'term'=>$request->term,
            'level'=>$request->level
        ]);
        return redirect()->back();
    }
        // get all the datas for both session and term table
    public function section(){
        $sessions = session::all();
        $term = term::all();
        return view('admins.components.section',['terms'=>$term,'sessions'=>$sessions]);
    }
        // post new term
    public function term_post(Request $request){
        term::create(['terms'=>$request->term]);
        return redirect()->back();
    }
    // add_session
    public function add_session(Request $request)
    {
        session::create([
            'session'=>$request->session
        ]);
      return redirect()->back();
    }
    // delete session
    public function session_delete(Request $request){
        $id= $request->id;
        $session=session::find($id);
        $session->delete();
        return redirect()->back();
    }
    // classes for student
    public function classes(){
        $classes= classes::all();
        $teacher = user::where('user',3)->get();
        return view('admins.components.class',['classes'=>$classes,'teachers'=>$teacher]);
    }
    // post / add new class
    public function classes_add(Request $request)
    {
        classes::create(['class_name'=>$request->class_name]);
        $id=$request->teacher;
        // seaech for where the teacher appear in the database
        $teachers=teacher::where('user_id',$id)->latest()->first();
        // get the last class added
        $class_id = classes::latest()->first();
        // assign a class to the teacher

if (isset($teachers)) {
    # code...
    $teachers->update(['c_teacher'=>$class_id->id]);

}

        return redirect()->back();
    }
    // delete class
    public function destroy_class($id){
        $classes= classes::find($id);
        $classes->delete();
        return redirect()->back();
    }

        // edit class
    public function classes_edit(Request $request)
    {
        $id=$request->class_id;
        $classes= classes::find($id);
        $teacher =  teacher::where('user_id',$request->teacher)->latest()->first();
        $classes->update(['class_name'=>$request->class_name]);
        if (isset($teacher)) {
            # code...
            $teacher->update(['c_teacher'=>$id]);
        }

        return redirect()->back();
    }
    //timetable
    public function timetable()
        {
        $subject=courseRegistration::latest()->get();
        $level=classes::all();
        $timetable = timetable::latest()->get();
        return view('admins.components.timetable',['subjects'=>$subject,'levels'=>$level,'timetables'=>$timetable]);
    }
    // post timetable
    public function timetable_post(Request $request){

        $subject= courseRegistration::find($request->subject);

        timetable::create([
            'subject'=> $request->subject,
            'day'=>$request->day,
            'period'=>$request->period,
            'level'=>$subject->level
        ]);
        return redirect()->back();
    }
    //edit timetable
    public function timetable_edit(Request $request){
       $timetable = timetable::find($request->event_id);
       $timetable->update(
        [

            'day'=>$request->day,
            'period'=>$request->period,

        ]);
        return redirect()->back();
    }
    public function timetable_delete($id){
        $timetable= timetable::find($id);
        $timetable->delete();
        return redirect()->back();
    }
         // edit session
    public function section_session(Request $request)
    {
        $sessions=session::find($request->id);
        $sessions->update(['session'=>$request->session]);
        return redirect()->back();
    }
        //  update  term or edit
    public function term_edit(Request $request)
    {
    $id=$request->id;
    $term= term::find($id);

    $term->update(['terms'=>$request->term]);
    return redirect()->back();
    }
// term delete
    public function term_delete(Request $request)
    {
        $id=$request->id;
        $term= term::find($id);
        $term->delete();
        return redirect()->back();
    }
    // event
    public function event(){
        $event=event::latest()->get();
        return view('admins.components.event',['events'=>$event]);

    }
    // add new event
    public function post_event(Request $request){
        if ($request->hasFile('event_img')) {
            //         # code...
                    $formfield['event_img']=$request->file('event_img')->store('images','public');

           }
        $formfield=[
            'e_name'=>$request->event_name,
            'e_img'=> $formfield['event_img'],
            'e_date'=>$request->event_date,
            'e_time'=>$request->event_time
        ];
        event::create($formfield);
        return redirect()->back()->with('message','Event has succesfully updated');
    }

    // update event
public function update_event(Request $request){
$id = $request->event_id;
$event=event::where('id',$id)->first();
if ($request->hasFile('event_img')) {
    //         # code...
            $formfield['event_img']=$request->file('event_img')->store('images','public');

   }
$formfield=[
    'e_name'=>$request->event_name,
    'e_img'=> $formfield['event_img'],
    'e_date'=>$request->event_date,
    'e_time'=>$request->event_time
];
$event->update($formfield);
return redirect()->back()->with('message','Event has succesfully updated');
}
public function video_lecture () {
  $video =  post_video_lecture::latest()->get();
  $subjects = courseRegistration::latest()->get();
  $classes = classes::latest()->get();
    return view('admins.components.video_lecture_post',['subjects'=>$subjects,'classes'=>$classes]);
    }
    // post new lecture video
    public function video_lecture_post(Request $request)
    {
        $subject = $request->subject;
        $title = $request->title;
        $classes = $request->class;
        $lecture=null;
        if ($request->hasFile('lecture'))
        {
            # code...
            $lecture=$request->file('lecture')->store('tutorial','public');

           }
           post_video_lecture::create([
            'l_subject'=>$subject,
            'l_title'=>$title,
            'class_id'=>$classes,
            'l_path'=>$lecture
           ]);
      return redirect()->back();

    }
// delete event
public function destroy_event($id)
    {
        // Find the item
        $item = event::find($id);

        // Check if the item exists
        if ($item) {
            // Delete the item
            $item->delete();

            // Return a response (optional)
            return redirect()->back()->with(['message' => 'Item deleted successfully']);
        }

        // Return a response for non-existing item (optional)
        return redirect()->back()->with(['error' => 'Item not found'], 404);
    }
    public function profile(){

        return view('admins.components.profile');
    }
    // set post payment
    public function post_set_payment(Request $request)
        {

            $student_class = auth()->user()->student_id->class_id;
            $students = student::where('class_id', $student_class)->get();

        foreach($students as $student )
    {
        pendingFee::create([
            'description'=>$request->description,
            'term'=>$request->term,
            'session'=>$request->session,
            'amount'=>$request->amount,
            'level'=>$request->level,
            'user_id'=> $student->user_id

        ]);
    }
           return redirect()->back();

        }
    public function general_chat(){
        $chats=chatRoom::all();
return view('admins.components.generalChat',['chats'=>$chats]);
    }
}
