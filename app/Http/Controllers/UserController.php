<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\User;
use App\Posts;
use Auth;

class UserController extends Controller
{
    //
    public function profile(){

    	return view('profile.index');
    }

    public function getWelcome(){

    	return view('welcome');
    }

public function  getDashboard(){
  $users = User::get();
  $posts = Posts::get();
  //return $users;
//return view('dashboard');
  if (Auth::user()->email =='geekdalton@gmail.com') {
    # code...
    return view('dashboard', ['posts' => $posts, 'users' => $users]);
  }
  if (Auth::user()->email =='yego@gmail.vom') {
    # code...
    return view('dashboard', ['posts' => $posts, 'users' => $users]);

  }
}

public function  getTable(){

  $posts = Posts::get();
  if (Auth::user()->email =='geekdalton@gmail.com'){
  return view('table')->with('posts', $posts);
}  if (Auth::user()->email =='yego@gmail.vom') {
    # code...
    return view('dashboard', ['posts' => $posts, 'users' => $users]);

  }
}
public function  getUsers(){
  return view('user');
}
public function editUser($id){

  //return view('useredit');
  //  $user =User::find($id);
  //  return $id;
   return view('useredit');



}
public function UpdateUser($id){

  $name = $_POST['name'];
  $email = $_POST['email'];

User::where('id', $id)
          ->update(['name' => $name],['email',$email]);

return redirect::back()->with('success', 'User updated succesfully!');



}
public function deleteUser($id){


User::where('id', $id)
          ->delete();

return redirect::back()->with('success', 'User deleted succesfully!');



}
public function deletePosts($id){


Posts::where('id', $id)
          ->delete();

return redirect::back()->with('success', 'User deleted succesfully!');



}

// public function getUsers(){
//      $users = User::get();
//      return $users;
//      //return view('/welcome')->with('users', $users);
//     }


}
