<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\User;
use Auth;
use App\Http\Requests;
use Image;
use App\Posts;


use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function getProfile($slug){

     $user = User::where('name', $name)->first();
     if (!$user) {

      abort(404);

     }
     return view('profile.index')->with('user', $user);
    }
    public function index($slug){

    	return view('profile.index');
    }
    public function profile($slug){
       return view('profile', array('user'=> Auth::user()) );

    }


public function uploadPhoto(Request $request){

        /*$file= $request->file('pic');
        $filename = $file->getClientOriginalName();
        $path= 'assets/img';

        $file->move($path, $filename);

        $user_id=Auth::user()->id;


        DB::table('users')->where('id', $user_id)->update(['pic' => $filename]);

   return view('profile.index'); */



if($request->hasFile('pic')){
        $pic = $request->file('pic');
        $filename = time().'.'. $pic->getClientOriginalExtension();

        Image::make($pic)->resize(300, 300)->save(public_path("/assets/img/$filename") );

        $user = Auth::user();
        $user->pic = $filename;
        $user->save();
    }
    return view('profile.index', array('user'=> Auth::user()) );

}
public function getTest(){
    return view('test');
}
public function getPosts(){
     $users = User::get();
     return $users;
    //return view('/welcome')->with('users', $users);
    }
    public function getPost($jobtitle){

         $posts = Posts::where('jobtitle', $jobtitle)->first();

        //  return $posts;
         if (!$posts){

          abort(404);

         }
         return view('profile.searched')->with('posts', $posts);
        

}
}
