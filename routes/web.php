<?php

use App\Http\Controllers\listing as ControllersListing;

use App\Http\Controllers\lists;
use App\Models\category;
use App\Models\listing;
use App\Models\about_us;
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

Route::get('/',[lists::class,'index']);
Route::get('/course/{id}', [lists::class,'show']);
Route::get('/post', [lists::class,'create']);
Route::get('/signup', [lists::class,'signup']);
Route::get('/tutoria{id}', [lists::class,'videoplayer']);
Route::get('/add_rating',[lists::class,'rating']);
Route::get('/login', [lists::class,'login']);
Route::get('/logout', [lists::class,'logout']);
Route::post('/store', [lists::class,'store']);
Route::get('/post/{id}/edit', [lists::class,'edit']);
Route::post('/post/create', [lists::class,'postStore']);
Route::post('user/login',[lists::class,'authenticate']);
Route::fallback(function(){
return response('not found');
});