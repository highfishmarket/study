<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
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

    $post -> title = 'new shivers title2';
    $post -> content = ' enw shivers content2';
    $post -> is_admin = 0;
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
//    \App\Models\Post::where('id', 1)->update(['title'=>'?????? ????????????', 'content'=>'????????? ????????????']);
//
//});


//delete
//Route::get('/delete', function (){
//
//    $post = \App\Models\Post::find(2);
//
//    $post -> delete();
//
//});

//Route::get('/delete2', function (){
//
//    \App\Models\Post::destroy(3);
//    \App\Models\Post::destroy([4,5]);
//    \App\Models\Post::where(id, 1)->delete();
//
//
//});

Route::get('/softdelete', function (){

    \App\Models\Post::find(6)->delete();


});


//Route::get('/readsoftdelete', function (){
//
////    $post = \App\Models\Post::find(1);
////    return $post;
//
////    $post = \App\Models\Post::withTrashed()->where('id', 1)->get();
//    $post = \App\Models\Post::onlyTrashed()->where('is_admin', 0)->get();
//
//    return $post;
//
//});

//?????? ????????? ????????? ?????????
//Route::get('/restore', function (){
//
//    \App\Models\Post::withTrashed()->where('is_admin', 0)->restore();
//
//
//
//});

//????????????
//Route::get('/forcedelte', function (){
//
////    \App\Models\Post::withTrashed()->where('is_admin', 0)->forceDelete();
//    \App\Models\Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//
//});


//ELOQUENT Relationships

// One to One relations;

//Route::get('/user/{id}', function ($id){
//
//    return \App\Models\User::find($id)->post;
//
//});
//
//Route::get('/post/{id}/user', function ($id){
//
////    user ????????? ???????????? name??? ?????????.
//    return Post::find($id)->user->name;
//
//});

//One to Many
Route::get('/posts', function (){
    $user =  User::find(1);
    foreach ($user->posts as $post){

        echo $post->title.PHP_EOL;

    }
});
