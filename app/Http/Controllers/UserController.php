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
            'email' => ['required', 'email'],
            'password'=>'required|min:6|max:10|'
        ]); 

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
}
