<?php

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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/read', function (){
//    $result = DB::select('select * from posts');
//    foreach ($result as $post){
//        return $post -> title;
//    }
//});
//Route::get('/insert', function (){
//    DB::insert('insert into posts(title, content) values (?,?)', ['PHP wow', 'shivers']);
//});
//Route::get('/update', function (){
//    $update = DB::update('update posts set title = "Update title" where id = ?', [1]);
//       return $update;
//});
//
//Route::get('/delete', function (){
//
//    $delete = DB::delete("delete from posts where id = ?", [2]);
//    return $delete;
//});




//ELOQUENT

//Route::get('/find', function (){
//
////    $posts = App\Models\Post::all();
//    //    foreach ($posts as $post){
////        return $post -> title;
////    }
//    $post = App\Models\Post::find(1);
//    return$post -> title;
//});
//Route::get('/findwhere', function (){
//
//    $posts = \App\Models\Post::where('id', 1)->orderBy('id', 'desc')->take(2)->get();
//    return $posts;
//
//});


//Route::get('/findnowhere', function (){
//
////    $posts = \App\Models\Post::findOrFail(2);
////
////    return $posts;
//
//    $posts = \App\Models\Post::where('id', '<', 50)->firstOrFail();
//
//    return $posts;
//
//});

//insert
Route::get('/basicinsert', function (){

    $post = new \App\Models\Post();
//    $post = \App\Models\Post::find();

    $post -> title = 'new shivers title';
    $post -> content = ' enw shivers content';

    $post->save();

});

//Route::get('/create', function(){
//
//
//    \App\Models\Post::create(['title'=>'create method', 'content'=>'wow I learn a lot']);
//
//
//});

//Route::get('/update', function(){
//
//    \App\Models\Post::where('id', 1)->where('is_admin', 0)->update(['title'=>'제목 바꿔바꿔', 'content'=>'내용도 바꿔바꿔']);
//
//});
