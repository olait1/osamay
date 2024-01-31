<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Helpers\Helper;
use App\Models\Comment;
use App\Models\notify;

use Exception;
use App\Models\rating;
use App\Models\registration;
use App\Models\reply;
use App\Models\User;
use App\Models\parents;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;


class lists extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    // {


    //     $category=category::latest()->simplepaginate(8);
    //     $courses=courses::all();

    //  $ids=[];

    //        if (auth()->user()) {
    //         # code...
    //                 $id = auth()->user()->course;

    //             //    $resgistrationDB=registration::where('user_id',auth()->user()->id)->get('category_id');
    //             $registrationDB = DB::table('registrations')
    //                ->select('category_id')
    //                ->where('user_id',auth()->user()->id)
    //                ->get()->toArray();
    //                foreach ($registrationDB as $category_id => $registration) {
    //                 # code...
    //                 array_push($ids,$registration->category_id);

    //             }
    //         $id=$ids;
    //     }else{
    //         $id=1;
    //     }
    //     if (is_array($id)) {
    //         # code...
    //         $courses = courses::whereIn('category_id', $id)->latest()
    //         ->paginate(16);
    //     }else{
    //         $courses = courses::where('category_id', $id)->latest()
    //         ->paginate(16);
    //     }


    // // courses stared favourite

    // $rated_courses=rating::all();

    // function get_top_6_courses() {
    //     $ratings = DB::table('ratings')->select('course_id', DB::raw('AVG(star_rated) as average'))->groupBy('course_id')->orderBy('average', 'desc')->limit(6)->get();

    //     $courses = [];
    //     foreach ($ratings as $rating) {
    //       $courses[] = $rating->course_id;
    //     }

    //     return $courses;
    //   }

    //   $max_course = get_top_6_courses();

    //    return view('index',[


    //         'max_records'=>  $max_course
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=category::all();
  return view('admin.create',['category'=>$category]);
    }
// post store
public function postStore(Request $request){

    $formField=$request->validate(
    [
        'name'=>'required',

    ]);

   if ($request->hasFile('book')) {
    # code...
    $formField['book']=$request->file('book')->store('tutorial','public');

   }
 courses::create($formField);

    return redirect('/manage');

}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);

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
    //    get the present year
       $year = Date("Y");
// generate student id for the student
$student_ids=Helper::generateId(new student,'student_id',5,$year);
$student_id=$student_ids;
// parent
$parent_email = $request->guardian_email;
$parent_name =  $request->guardian_name;

$user=User::create($formField);
// check if the user is a student
 auth()->login($user);
 if (auth()->user()->user != 1) {
    # code...
    if (auth()->user()->user==0) {
        # code...
        return redirect()->route('admin.dashboard');
    }elseif(auth()->user()->user==3){
        return redirect()->route('parent.dashboard');
    }
 }
//  if it's  student save parent details
 $parent= parents::create([
    'p_name'=>$parent_name,
    'p_email'=>$parent_email,
    'student_id'=>auth()->user()->id,
    'password'=>bcrypt($parent_name)

]);

    $student_code=$student_id;
    $user_id =auth()->user()->id;
    $student_class = $request->class;
    // save student details to student table
    student::create([
        'student_id'=> $student_code,
        'user_id' => $user_id,
        'class_id' => $student_class
    ]);

$data=[
        'from'=>'olait768@gmail.com',
        'to'=>$request->email,
        'subject'=>'Registration Successfull',
        ];

        try {
                Mail::send('email.registration', ['data' => $data,'name'=>$request->name],
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
        $datas=[
            'from'=>'olait768@gmail.com',
            'to'=> $request->guardian_email,
            'subject'=>'Registration Successfull',

            ];
            // link message to the parent for registration
            try {
                Mail::send('email.parent', ['data' => $datas,'name'=>$request->name,'password'=>$parent_name,'email'=> $request->guardian_email],
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

        // redirect to student dashboard
        return redirect()->route('student.dashboard');

    }



    public function edit($id)
    {
       $course=courses::find($id);
        $cat=category::all();


        return view('admin.edit',['category'=>$cat,'course'=>$course]);
    }



    public function update(Request $request,$id)
    {
        $courses=courses::find($id);
        $courses->name=$request->name;
        $courses->category_id=$request->category_id;
        if ($request->hasFile('book')) {
            //         # code...
                    $courses['book']=$request->file('book')->store('tutorial','public');

           }

        $courses->format=$request->format;
      $courses->update();

      return redirect('/manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $courses=courses::find($id);
        $courses->delete();
        //
      return redirect('/manage');

    }

// login page for student


// login page for teacher
public function teacher_login(){

    return view('teachers.components.login');
}

// login page for parent
public function parent_login(){

    return view('parent.components.login');
}

// login page for admin
public function admin_login(){

    return view('admins.components.login');
}


// authenticate the user
    public function authenticate(Request $request){

        $formField=$request->validate( [
            'email'=>['required','email'],
            'user'=>'required',
            'password'=>'required'
        ]);

   $id=$request->id;

        if (auth()->attempt($formField)) {

    $request->session()->regenerate();
    if (auth()->user()->user =='0') {
        # code...
        return redirect()->route('admin.dashboard');
    }
    elseif (auth()->user()->user =='1') {
        # code...
        return redirect()->route('student.dashboard');
    }elseif (auth()->user()->user =='3') {
        # code...
        return redirect()->route('teacher.dashboard');
    }

            // return redirect()->route('e-learning')->with('id',$id);
        }

        return back()->withErrors(['email'=>'invalid credential'])->onlyInput('email');
    }





    public function logout(Request $request){
        if (auth()->guard('parents')->user()) {
            # code...
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('parent.login');
        }
        $user=auth()->user()->user;
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($user == 0) {
            # code...
            return redirect()->route('admin.login');
        }elseif($user==1){
            return redirect()->route('student.login');
        }

            # code...
        elseif ($user == 3) {
            # code...
            return redirect()->route('teacher.login');
        }

    }

// video player method
//     public function videoplayer($id){

// $video=courses::find($id);
// $category_id=$video->category_id;
// $category=courses::where('category_id',$category_id)
// ->get();
// // rating
// $rated_courses=rating::where('course_id',$id)->get();
// $rated_values=rating::where('course_id',$id)->sum('star_rated');
// $user_rate=rating::where('course_id',$id)->where('user_id',auth()->user()->id)->first();
// if ($rated_courses->count() > 0) {
//     # code...
//     $stared=$rated_values/$rated_courses->count();
// }else{
//     $stared=0;
// }
// $comments= Comment::latest()->get();
// $replies=reply::latest()->get();
//      return view('component.video_display',['video'=>$video,'id'=>$id,'related_videos'=>$category,'rated_courses'=>$rated_courses,'rated_values'=>$stared,'user_rate'=>$user_rate,'comments'=>$comments,'replies'=>$replies]);

//     }





}
