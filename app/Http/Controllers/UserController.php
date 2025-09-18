<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
 
class UserController extends Controller
{
    public function register(Request $request){
        $data= $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'=>'required|min:6|max:10|'
        ]); 

        $isFirstUser = User::count() === 0;
        $data['role']= $isFirstUser  ? 'admin' : 'user'; 
        //if($isFirstUser) {
        //    $data['role'] = 'admin';
        //} else {
        //    $data['role'] = 'user';
        $data['password'] = Hash::make($data['password'] );
        $user = User::create($data);
        Auth::login($user);
      
        return redirect('login');
        
    }
    
    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if(Auth::attempt($data)){
              
            $request->session()->regenerate();
            
            return redirect('login');

        }
        
       return back()->withErrors('This account is not registered!');
    }

    public function deleteUser($id){
        $user= User::find($id);
        if($user){
            $user->delete();
            return redirect()->route('loginUser') ;
        } else {
            return redirect()->route('welcome') ;

        }
    }
}
