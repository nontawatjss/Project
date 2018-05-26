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

Route::get('/', function () {
  return view('welcome');
});


Route::group(['middleware' => ['web', 'auth']], function (){


  Route::get('/home', function () {
      if (Auth::user()->admin == 0) {
        # code...
        $users['user'] = \App\User::all();
        return view('user', $users);
      }else {
        # code...
        $users['user'] = \App\User::all();
        return view('adminhome', $users);
      }
  });

  Route::get('addmin/manageuser', function () {
    if (Auth::user()->admin == 1) {
      # code...
      $users['user'] = \App\User::all();

      return view('manageuser', $users);
    }else {
      # code...
     return view('403');
    }
});

Route::get('addmin/managecourse', function () {
  if (Auth::user()->admin == 1) {
    # code...
    $users['user'] = \App\User::all();

    return view('managecourse', $users);
  }else {
    # code...
   return view('403');
  }
});

Route::post('insertcourse','Controller@insertcourse');

Route::post('readcourse','Controller@readcourse');

Route::get('delete/course/{id}/{Group}','Controller@deletecourse');

Route::get('delete/user/{id}','Controller@deleteuser');


Route::get('/contact', function () {
  return view('contact');
});

Route::get('courseInfo', 'Controller@listcourse');

Route::get('add/choose/{idcourse}', 'Controller@addchoose');

Route::get('delete/choose/{id}', 'Controller@deletechoose');

});
