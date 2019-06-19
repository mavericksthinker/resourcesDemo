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

use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resources', function () {
   
    // For single entity with eager_loaded to avoid the N+1 problem
//    $user = App\User::with('profile')->findOrFail(11);
//   
//    return new User($user);

    // For a collection of data
//    $users = App\User::with('profile')->get();
//
//    return UserResource::collection($users);

    // For a collection of data with pagination
    $users = App\User::with('profile')->paginate(3);

    return new UserCollection($users);
    
});
