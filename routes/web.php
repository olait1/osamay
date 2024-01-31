<?php
use App\Http\Controllers\category as ControllersCategory;
use App\Http\Controllers\comment;
use App\Http\Controllers\listing as ControllersListing;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\lists;
use App\Http\Controllers\manage;
use App\Http\Controllers\rating;
use App\Http\Controllers\reply;
use App\Http\Controllers\studentController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\parentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\helperController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\retrivePassword;
use App\Models\category;
use App\Models\listing;
use App\Models\about_us;
use App\Models\Comment as ModelsComment;
use App\Models\courses;
use App\Models\notify;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/post', [lists::class,'create']);
Route::get('/tutoria{id}', [lists::class,'videoplayer']);
Route::post('/comment',[comment::class,'add_comment']);
Route::post('/reply',[reply::class,'add']);
Route::post('/rate/add',[rating::class,'rating']);
// Route::get('/', [lists::class,'login'])->name('login');
Route::get('/logout', [lists::class,'logout']);
Route::post('/store', [lists::class,'store']);
Route::get('/post/{id}/edit', [lists::class,'edit']);
Route::put('/post/edit/{id}', [lists::class,'update']);
Route::delete('/delete/{id}', [lists::class,'destroy']);
Route::post('/post/create', [lists::class,'postStore']);
Route::post('user/login',[lists::class,'authenticate']);
//retrive password
Route::get('/password_retrieve', [retrivePassword::class,'getpage']);
Route::post('/reset_password',[retrivePassword::class,'sendEmail']);
Route::get('/reset_password/form',[retrivePassword::class,'form'])->name('forgetpassword.form');
Route::post('/get_reset_data',[retrivePassword::class,'getFormData']);
// admin
Route::get('/admin/dashboard',[adminController::class,'dashboard'])->name('admin.dashboard')->middleware('auth');
// Route::get('/manage',[manage::class,'index']);
// Route::get('student/{id}/edit',[manage::class,'studentEdit']);
Route::get('/admin', [lists::class,'admin_login'])->name('admin.login');
Route::get('/admin/student', [adminController::class,'student'])->name('admin.student')->middleware('auth');
Route::get('/admin/parent', [adminController::class,'parent'])->name('admin.parent')->middleware('auth');
Route::post('/admin/parent/search', [adminController::class,'parent_search'])->name('admin.parent.search');
Route::get('/admin/teacher', [adminController::class,'teacher'])->name('admin.teacher')->middleware('auth');
Route::post('/admin/teacher', [adminController::class,'add_teacher'])->name('admin.teacher.add');
Route::get('/admin/subject', [adminController::class,'subject'])->name('admin.subject')->middleware('auth');
Route::post('/admin/subject/add', [adminController::class,'subject_add'])->name('admin.subject.add');
Route::delete('/admin/subject', [adminController::class,'subject_delete'])->name('admin.subject.delete');
Route::put('/admin/subject/edit', [adminController::class,'subject_edit'])->name('admin.subject.edit');
Route::get('/admin/section', [adminController::class,'section'])->name('admin.section')->middleware('auth');
Route::post('/admin/section', [adminController::class,'term_post'])->name('admin.section.post');
Route::put('/admin/section', [adminController::class,'term_edit'])->name('admin.section.term.edit');
Route::delete('/admin/section', [adminController::class,'term_delete'])->name('admin.section.delete');
Route::put('/admin/section/session', [adminController::class,'section_session'])->name('admin.section.session');
Route::post('/admin/section/session/add', [adminController::class,'add_session'])->name('admin.section.session.add');
Route::delete('/admin/section/session', [adminController::class,'session_delete'])->name('admin.section.session.delete');
Route::get('/admin/class', [adminController::class,'classes'])->name('admin.class')->middleware('auth');
Route::post('/admin/class', [adminController::class,'classes_add'])->name('admin.class.add');
Route::put('/admin/class/edit', [adminController::class,'classes_edit'])->name('admin.class.edit');
Route::delete('/class/{id}', [adminController::class, 'destroy_class'])->name('admin.class.delete');
Route::get('admin/class/timetable', [adminController::class,'timetable'])->name('admin.timetable')->middleware('auth');
Route::post('admin/class/timetable', [adminController::class,'timetable_post'])->name('admin.timetable.post');
Route::put('admin/class/timetable', [adminController::class,'timetable_edit'])->name('admin.timetable.edit');
Route::delete('/timetable/{id}', [adminController::class,'timetable_delete'])->name('admin.timetable.delete');
Route::get('/admin/set/payment', [adminController::class,'set_payment'])->name('admin.set.payment')->middleware('auth');
Route::post('/admin/set/payment', [adminController::class,'post_set_payment'])->name('admin.post.set.payment');
Route::get('/admin/exam', [adminController::class,'exam'])->name('admin.exam')->middleware('auth');
Route::get('/admin/exam/result', [adminController::class,'exam_result'])->name('admin.exam.result')->middleware('auth');
Route::post('/admin/exam', [adminController::class,'exam_add'])->name('admin.exam.add');
Route::get('/admin/manage/mark', [adminController::class,'manage_mark'])->name('admin.manage.mark')->middleware('auth');
Route::post('/admin/manage/mark', [adminController::class,'manage_mark_exam'])->name('admin.manage.mark.add');
Route::post('/admin/manage/mark/test', [adminController::class,'manage_mark_test'])->name('admin.manage.mark.test');
Route::post('/admin/manage/mark/quize', [adminController::class,'manage_mark_quize'])->name('admin.manage.mark.quize');
Route::post('/admin/manage/mark/assignment', [adminController::class,'manage_mark_assignment'])->name('admin.manage.mark.assignment');
Route::get('/admin/manage/grade', [adminController::class,'grade'])->name('admin.grade')->middleware('auth');
Route::post('/admin/manage/grade', [adminController::class,'grade_post'])->name('admin.manage.grade.post');
Route::post('/admin/manage/release/result', [adminController::class,'releseaseResult'])->name('admin.manage.grade.release.result');
Route::post('/admin/manage/new/result', [adminController::class,'newResult'])->name('admin.manage.grade.new.result');
Route::get('/admin/payment/fee', [adminController::class,'fee'])->name('admin.grade')->middleware('auth');

Route::get('admin/video/lecture', [adminController::class,'video_lecture'])->name('admin.video.lecture')->middleware('auth');
Route::post('admin/video/lecture', [adminController::class,'video_lecture_post'])->name('admin.video.lecture.post');

Route::get('/admin/question', [adminController::class,'question'])->name('admin.question')->middleware('auth');
Route::post('/admin/question', [adminController::class,'question_add'])->name('admin.question.add');
Route::get('/admin/event', [adminController::class,'event'])->name('admin.event')->middleware('auth');
Route::post('/admin/event', [adminController::class,'post_event'])->name('admin.event.post');
Route::put('/admin/event', [adminController::class,'update_event'])->name('admin.event.update');
Route::delete('/event/{id}', [adminController::class, 'destroy_event'])->name('admin.event.delete');
Route::get('/admin/profile',[adminController::class, 'profile'])->name('admin.profile')->middleware('auth');

Route::get('/admin/suggestion', [adminController::class,'suggestion'])->name('admin.suggestion')->middleware('auth');
Route::get('/admin/generalchat', [adminController::class,'general_chat'])->name('admin.chat')->middleware('auth');


// parent dashboard
Route::get('/parent/dashboard',[parentController::class,'dashboard'])->name('parent')->middleware('auth');
Route::get('/parent', [parentController::class,'login'])->name('parent.login');
Route::post('/parent/login', [parentController::class,'authentication'])->name('parent.authentication');
Route::get('/parent/subject/teacher', [parentController::class,'teacher'])->name('parent.teacher')->middleware('auth');
Route::get('/parent/profile', [parentController::class,'profile'])->name('parent.profile')->middleware('auth');
Route::post('/admin/profile/update',[parentController::class, 'update_profile'])->name('parent.profile.update');
Route::get('/parent/event', [parentController::class,'event'])->name('parent.event')->middleware('auth');
Route::get('/parent/suggestion', [parentController::class,'suggestion'])->name('parent.suggestion')->middleware('auth');

Route::post('/suggestion', [parentController::class,'suggestionMessage'])->name('parent.suggestionMessage');
Route::get('/parent/generalchat', [parentController::class,'general_chat'])->name('parent.chat')->middleware('auth');

Route::post('/parent/generalChat', [parentController::class,'generalChatroom'])->name('parent.generalChatroom');




//teacher

Route::get('/teacher', [teacherController::class,'teacher_login'])->name('teacher.login');
Route::get('teacher/dashboard', [teacherController::class,'dashboard'])->name('teacher.dashboard')->middleware('auth');
Route::get('teacher/profile', [teacherController::class,'profile'])->name('teacher.profile')->middleware('auth');
Route::get('teacher/setting', [teacherController::class,'setting'])->name('teacher.setting')->middleware('auth');
Route::get('teacher/class', [teacherController::class,'classes'])->name('teacher.class')->middleware('auth');
Route::get('teacher/class/student/{id}', [teacherController::class,'student'])->name('teacher.class.student')->middleware('auth');
Route::get('teacher/event', [teacherController::class,'event'])->name('teacher.event')->middleware('auth');
Route::get('teacher/chat', [teacherController::class,'generalChat'])->name('teacher.generalChat')->middleware('auth');
Route::get('/teacher/suggestion', [teacherController::class,'suggestion'])->name('teacher.suggestion')->middleware('auth');
//students
Route::get('/', [studentController::class,'login'])->name('student.login');
Route::get('/student/signup', [studentController::class,'signup'])->name('student.signup');
Route::get('student/dashboard', [studentController::class,'dashboard'] )->name('student.dashboard')->middleware('auth');
Route::get('student/fees',[studentController::class,'fees']  )->name('student.fees')->middleware('auth');
//paystack
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('student/profile',[studentController::class,'profile'] )->name('student.profile')->middleware('auth');
Route::get('student/event', [studentController::class,'event'])->name('student.event')->middleware('auth');
Route::get('student/lecture', [studentController::class,'lecture'])->name('student.lecture')->middleware('auth');
Route::get('student/lecture/video/{id}', [studentController::class,'video'])->name('student.lecture.video')->middleware('auth');
Route::get('/student/performance',[studentController::class,'performance'])->name('student.performance')->middleware('auth');
Route::get('/student/oPerformance', [studentController::class,'oPerformance'])->name('student.oPermance')->middleware('auth');
Route::get('/student/activity', [studentController::class,'activity'])->name('student.activity')->middleware('auth');
Route::get('/student/activity/question', [studentController::class,'question'])->name('student.activity.question')->middleware('auth');
Route::post('/student/activity/question', [studentController::class,'question_mark'])->name('student.activity.question.mark');
Route::get('/student/course/registration', [studentController::class,'courseRegistration'])->name('student.course.registration')->middleware('auth');
Route::post('/student/course/registration', [studentController::class,'courseRegistrationpost'])->name('student.course.registration.post');
Route::post('/student/course/registered/course', [studentController::class,'registered_course'])->name('student.course.registered.course');
Route::get('/student/suggestion', [studentController::class,'suggestion'])->name('student.suggestion')->middleware('auth');
Route::post('/suggestion', [studentController::class,'suggestionMessage'])->name('student.suggestionMessage');
Route::get('/student/generalChat', [studentController::class,'generalChat'])->name('student.generalChat')->middleware('auth');
Route::post('/student/generalChat', [studentController::class,'generalChatroom'])->name('student.generalChatroom');
// generate code
// Route::get('helper', [helperController::class,'index']);
// Route::get('email', function(){
// return view('email.registration');
// });
//not found 404
Route::fallback(function(){
return view('component.404_error');
});
