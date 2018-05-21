<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'secondName' =>'required|string|max:255',
             'gender' => 'required|string|max:255',
             'category'=>'required|string|max:255',
             'university' => 'required|string|max:255',
             'course' => 'required|string|max:255',
              'bio' =>'required|max:255',

             'county' => 'required|string|max:255',
             'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){
if($data['gender']=='male'){
      $pic_path ='default.jpg'; 
      Redirect::to('welcome');
    }

 if($data['gender']=='female'){
      $pic_path ='avatar.jpg';
       Redirect::to('/');
    } 
   

        return User::create([

            
            'name' => $data['name'],
             'pic'=>$pic_path,
            'email' => $data['email'],
            'secondName'=>$data['secondName'],
            'gender'=>$data['gender'],
             'bio'=>$data['bio'],
            'category'=>$data['category'],
            'university'=>$data['university'],
            'course'=>$data['course'],
            'county'=>$data['county'],
            'slug'=>str_slug($data['name'], '-'),
            'password' => bcrypt($data['password']),
        ]);
    }
}
