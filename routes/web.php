<?php

use App\Http\Controllers\Auth\AdminRegisterController;

use app\Models\User;
use App\Models\Cars;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\Usercontroller;

Route::get('/',  [CarsController::class, 'welcome'])->name('welcome');
Route::get('/createCar' , [CarsController::class, 'createCar'])->name('createCar');
Route::post('/registerCar', [CarsController::class, 'registerCar'])->name('registerCar');
Route::delete('/cars/{id}' , [CarsController::class, 'delete'])->name('delete');
Route::PUT('/update/{id}' , [CarsController::class, 'update'])->name('update');
Route::get('/edit/{id}' , [CarsController::class , 'edit'])->name('edit');

Route::get('/register' , function(){
    return view('auth.registration');
});
 Route::post('/register' , [UserController::class, 'register'])->name('registerUser');
 


 Route::get('/login', function(){
   $Cars = Cars::where('user_id', Auth::id())->get();
   $Users = collect();
    // Check if the user is authenticated and has the 'admin' role
    
    
   if(Auth::check()=='admin'){
       $Users = User::all();
      }
    return view('auth.login', compact('Cars', 'Users'));

   
 })->name('login');
Route::post('/login', [Usercontroller::class, 'login'])->name('loginUser');



 Route::post('/logout', function(){
    Auth::logout();
    return redirect('/register');
 })->name('logout');

Route::delete('/deleteUser/{id}', [Usercontroller::class, 'deleteUser'])->name('deleteUser');