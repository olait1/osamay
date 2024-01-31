<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\courses;
use App\Models\registration;
use App\Models\User;
use Illuminate\Http\Request;

class manage extends Controller
{

public function index(){

    $course=courses::latest()->simplePaginate('10');
    $students=User::where('user',1)->simplePaginate('10');

    $register_students=registration::simplePaginate(10);
    return view('component.manage',['courses'=>$course,'students'=>$register_students]);
}


public function studentEdit($id){
$users= User::find($id);

    return view('admin.studentEdit',['users'=>$users]);
}


}
