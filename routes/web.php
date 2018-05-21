<?php

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


Auth::routes();

Route::get('/welcome', function(){
return view('/welcome');
});
Route::get('/searchUsers', [
'uses' => 'SearchController@getResults',
'as' => 'search.results'
]);
Route::get('/user/{jobtitle}', [
 'uses' => 'ProfileController@getPost',
 'as'   =>'profile.searched',
  ]);
// Route::prefix('admin')->group( function (){
//
// Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
// Route::get('/', 'AdminController@index')->name('admin.dashboard');
//
// });

Route::group(['middleware'=>'auth'], function(){

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{slug}', 'ProfileController@index');
Route::get('/changephoto', function(){

return view ('profile.pic');
});
//Route::post('/createjob', 'PostController@createjob');
Route::post('/createjob',[
      'uses'=>'PostController@createjob',
       'middleware' => 'auth'
       ]);

Route::post('uploadPhoto', 'ProfileController@uploadPhoto');
Route::get('/welcome', function(){
return view('/welcome');
});
});

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

//route to the users profile
Route::post('profile/{slug}', 'ProfileController@update_avatar');

Route::get('/user/{name}', [
 'uses' => 'ProfileController@getProfile',
 'as'   =>'profile.index',
]);

Route::get('profile', 'UserController@profile');
Route::get('test', 'ProfileController@getTest');

Route::get('/welcome',[
     'uses'=>'PostController@getPosts',
	  'middleware'=>'auth'
	]);

//    Route::group(array('middleware' => 'auth'), function(){
//     Route::group(array('middleware' => 'App\Http\Middleware\EmailRedirectMiddleware'), function() {
// Route::get('/dashboard','UserController@getDashboard');
//     });
// });
Route::get('/dashboard', [
      'uses'=>'UserController@getDashboard'
       ]);
Route::get('/table', [
             'uses'=>'UserController@getTable'
              ]);
Route::get('/user', [
                    'uses'=>'UserController@getUsers'
                     ]);

Route::get('/users/edit/{id}', 'UserController@editUser');

Route::post('/users/update/{id}', 'UserController@UpdateUser');
Route::get('/users/delete/{id}', 'UserController@deleteUser');
Route::get('/posts/delete/{id}', 'UserController@deletePosts');

// Route::get('/user', [

//       'uses'=>'UserController@getUsers',
//        'middleware' => 'App\Http\Middleware\EmailRedirectMiddleware'
//        ]);
// Route::get('/table', [
//       'uses'=>'UserController@getTable',
//        'middleware' => 'App\Http\Middleware\EmailRedirectMiddleware'
//        ]);


//admin route for our multi-auth system
// Route::get('/', 'AdminController@index')->name('admin.dashboard');
//     Route::get('/', 'AdminController@getTable')->name('admin.table');
//     Route::get('/', 'AdminController@getUsers')->name('admin.user');
//
// Route::prefix('admin')->group(function () {
// 	 Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//
//
//
//
// });
//Route::get('/welcome', 'ProfileController@getUsers');





//route to the users profil
