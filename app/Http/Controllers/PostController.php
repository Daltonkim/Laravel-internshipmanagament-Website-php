<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests;
use App\Posts;
use Auth;
use Image;
use App\Like;
use App\User;

use Validator;
use Illuminate\Support\Facades\Input;



class PostController extends Controller
{
    //
public function createjob(Request $request){



  Posts::create(Request::all());

  return back();

 
     /* $this->validate($request, [
      'jobtitle'=>'required|max:255',
      'location'=>'required|max:255',
      'jobtype'=>'required|max:255',
      'jobdesc'=>'required|max:1000',
      'companyname'=>'required|max:255',
      'howto'=>'required|max:255'


      ]);
     Posts::create(array(
      
            'jobtitle' => Input::get('jobtitle'),
            'location' =>Input::get('location'),
            'jobtype' => Input::get('jobtype'),
            'jobdesc' =>Input::get('jobdesc'),
            'companyname' => Input::get('companyname'),
            'howto' =>Input::get('howto')
            
         
            ));
    return view('profile.index');*/

}
public function getGender($gender){

       $users = User::where('gender', $gender)->first();

       return view('welcome', ['users'=>$users]);


    }

 public function getPosts(){

$posts = Posts::get();
//$posts = Posts::with('users')->get();
$users = User::get();


return view('welcome', ['posts' => $posts, 'users' => $users]);
//return $posts;
//return view('/welcome')->with('posts', $posts);
     /* public function getDashboard()
    {
        $posts = Post::all();
        return view('dashboard', ['posts' => $posts]);
    }*/
}

}