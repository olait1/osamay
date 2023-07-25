<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\about_us;
use App\Models\category;
use App\Models\courses;
use App\Models\registration;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
session_start();
class lists extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       
        $about=about_us::latest()
        ->get();
        //
        $category=category::latest()->simplepaginate(8);
        $courses=courses::all();
        
     $ids=[];

           if (auth()->user()) {
            # code...
                    $id = auth()->user()->course;
               
                //    $resgistrationDB=registration::where('user_id',auth()->user()->id)->get('category_id');
                $registrationDB = DB::table('registrations')
                   ->select('category_id')
                   ->where('user_id',auth()->user()->id)
                   ->get()->toArray();
                   foreach ($registrationDB as $category_id => $registration) {
                    # code...
                    array_push($ids,$registration->category_id);
                  
                }
            $id=$ids;
        }else{
            $id=1;
        }
        if (is_array($id)) {
            # code...
            $courses = courses::whereIn('category_id', $id)->latest()
            ->paginate(16);
        }else{
            $courses = courses::where('category_id', $id)->latest()
            ->paginate(16);
        }
   
     
        
        return view('index',[
            'about'=>$about,
            'category'=>$category, 
            'courses'=>$courses
        ]);
    }

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
      
        'category_id'=>'required',
        'format'=>'required'
    ]);
   
   if ($request->hasFile('book')) {
    # code...
    $formField['book']=$request->file('book')->store('tutorial','public');

   }
   
 courses::create($formField);

    return redirect('/');

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
    $request['user']=1;

     $formField=$request->validate([
        'name'=>'required',
        'user'=>'required',
        'email'=>['required','email',Rule::unique('users','email')],
        'password'=>'required|confirmed|min:6',
        'course'=>'required'
     ]);
     $formField['password']=bcrypt($formField['password']);
  
     $user=User::create($formField);
   
     auth()->login($user);

    # code...
   // add user id and category id into registration database
   registration::create([
    'user_id'=>auth()->user()->id,
    'category_id'=>auth()->user()->course

    ]);
  

     return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
 $courses=courses::find($id)
                ->where('category_id','=',$id)->simplepaginate(12);
    
        return view('show',['single'=>courses::find($id),'courses'=>$courses]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $course=courses::find($id);
        $cat=category::all();


        return view('admin.edit',['category'=>$cat,'course'=>$course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function login(Request $request){
        if (request()->id) {
            # code...
            $id=request()->id;
    
                return view('guestLayout.login')->with('id',$id);
        }
        return view('guestLayout.login');
    }


    public function authenticate(Request $request){

        $formField=$request->validate( [
            'email'=>['required','email'],
            'user'=>'required',
            'password'=>'required'
        ]);
       
   $id=$request->id;
        if (auth()->attempt($formField)) {
          if(isset($id)){
            $regs=registration::all();
            registration::create([
                'user_id'=>auth()->user()->id,
                'category_id'=>$id
            ]);
           
          }
           
          
            $request->session()->regenerate();
   
            return redirect('/')->with('id',$id);
        }
    
        return back()->withErrors(['email'=>'invalid credential'])->onlyInput('email');
    }


    public function signUp(){
        $cats=category::latest()->get();
        return view('guestLayout.signUp',[ 'category'=>$cats]);
    }


    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }


    public function videoplayer($id){
        
$video=courses::find($id);
$category_id=$video->category_id;

$category=courses::where('category_id',$category_id)
->get();

     return view('component.video_display',['video'=>$video,'id'=>$id,'related_videos'=>$category]);

    }
    public function rating(Request $request)
{
$course_rate=$request->input('course_rating');
dd($course_rate);
}
}
