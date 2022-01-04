<?php

namespace App\Http\Controllers;
use App\Models\User_regi;

use Illuminate\Http\Request;

class CustomRegiController extends Controller
{
    //public function registration(){
       // return view ("auth.registration");
   // }
   // public function registrationUser(Request $reuest){
       // echo 'value posted';
        
  //  }
    public function create() {
        return view("auth.registration");
    }

    // ----------- [ Form validate ] -----------
    public function store(Request $request) {
       // dd($request);

        $request->validate(
            [
                'name'              =>      'required|string|max:20',
                'email'             =>      'required|email|unique:users,email',
                'phone'             =>      'required|numeric|min:10',
                'password'          =>      'required|alpha_num|min:6',
                'confirm_password'  =>      'required|same:password',
                'address'           =>      'required|string'
            ]
        );

        $dataArray      =       array(
            "name"          =>          $request->name,
            "email"         =>          $request->email,
            "phone"         =>          $request->phone,
            "address"       =>          $request->address,
            "password"      =>          $request->password
        );

        $user           =       User_regi::create($dataArray);
        if(!is_null($user)) {
            return redirect('/user-list')->with("success", "Success! Registration completed");
        }

        else {
            return back()->with("failed", "Alert! Failed to register");
        }
    }
    public function userList(){
        $posts= User_regi::get();
        return view('auth.user-list',compact('posts'));
    }
    public function editUser($id){
        $post_edit=User_regi::find($id);
        
       // $post_edit =User_regi::where('id' ,$id)->first();
        
        return view('user-edit',compact('post_edit'));

    }
    public function updateUser(Request  $request){
       
        $post_edit= User_regi::where('id', $request->id)->update(['name'=>$request->name,
        'email'=>$request->input('email'),
        'phone'=>$request->input('phone'),
        'address'=>$request->input('address'),
        'password'=>$request->password]);
        
       
        
        return redirect('/user-list')->with('status' ,' updated successfully');
    }
    public function deleteUser($id){
        User_regi::where('id',$id)->delete();
        return redirect('/user-list')->with('post_delete' ,'Post delete successfully');


    }
}
