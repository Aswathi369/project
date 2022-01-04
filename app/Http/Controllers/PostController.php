<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function addPost(){
        return view('add-post');
    }
    public function savePost(Request $request){
        
      
        DB::table('posts')->insert(['name'=>$request->name,
                                     'description'=>$request->description,
                                     'phonenumber'=>$request->phonenumber,
                                     'email'=>$request->email,
                                     'password'=>$request->password
    ]);
        return back()->with('post_add','post added successfull');
    }
    public function postList(){
        $posts=DB::table('posts')->get();
        return view('post-list',compact('posts'));
    }
    public function editPost($id){
        
        $post_edit =DB::table('posts')->where('id' ,$id)->first();
        
        return view('edit-post',compact('post_edit'));

    }
    public function updatePost(Request  $request){
        
        DB::table('posts')->where('id', $request->id)->update(['name'=>$request->name,
        'description'=>$request->description,
        'phonenumber'=>$request->phonenumber,
        'email'=>$request->email,
        'password'=>$request->password]);
        return back()->with('post_update' ,'Post updated successfully');
    }
    public function deletePost($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_delete' ,'Post delete successfully');


    }
}
