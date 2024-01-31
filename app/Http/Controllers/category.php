<?php

namespace App\Http\Controllers;

use App\Models\category as ModelsCategory;
use Illuminate\Http\Request;

class category extends Controller
{
    public function upload(Request $request){
        // $cat->name=$request->category;
   $cat=$request->validate([
    'name'=>'required'
   ]);
   $cat['image']='img/cat-1.jpg';
     
        
     
        $k=ModelsCategory::create($cat);
     
        return redirect()->back();
    }
}
