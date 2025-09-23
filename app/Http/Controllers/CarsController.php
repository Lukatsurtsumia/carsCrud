<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
 

class CarsController extends Controller
{
    
  public function welcome(Request $request){
      $Cars = Cars::query();
         if ($request->filled('name')){
            $Cars->where('name', 'like', '%' .$request->input('name'). '%');
         }
         if($request->filled('min_price')){
            $Cars->where('price', '>=', $request->min_price);
         }
         if($request->filled('max_price')){
            $Cars->where('price', '<=', $request->max_price);
         }
         if($request->filled('min_age')){
            $Cars->where('age', '>=', $request->min_age);
         }
         if($request->filled('max_age')){
            $Cars->where('age', '<=', $request->max_age);
         }
        $Cars = $Cars->paginate(10);
         return view('welcome', compact('Cars'));
    
  
  }
    public function createCar(){
        $Cars =Cars::where('user_id',Auth::id())->get();
        return view('createCar', compact('Cars'));
    }
    public function registerCar(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'price'=> 'required',
            'age' => 'required',
            'image'=>'nullable|image|max:2048',
            
        ] );
            $validate['name'] = strip_tags($validate['name']);
            $validate['price'] = strip_tags($validate['price']);
            $validate['age'] = strip_tags($validate['age']);
             
        if($request->hasFile('image')){
            $imagepath = $request->file('image')->store('cars_image', 'public');
            $validate['image'] = $imagepath;
        }
        $validate['user_id'] = auth()->id();
        Cars::create($validate);
        return redirect()->route('login')->with('seccessfully created');
    }

    public function update(Request $request , $id){
           $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'age' => 'required|numeric',
        'image' => 'nullable|image|max:2048',
    ]);
  
    $Cars = Cars::findOrFail($id);

    $Cars->name = $request->name;
    $Cars->price = $request->price;
    $Cars->age = $request->age;

    if ($request->hasFile('image')) {
        if($Cars->image && file_exists('storage/' . $Cars->image)){
            unlink(public_path('storage/' . $Cars->image));
        } 
        $imagepath = $request->file('image')->store('cars', 'public');
        $Cars->image=$imagepath;
    }

    $Cars->save();

        return redirect()->route('loginUser');
    }
public function edit($id){
    $Cars = Cars::findOrFail($id);
 if(auth()->id() !== $Cars['user_id']){
    return redirect('/');
 }
     
   return view('update' ,compact('Cars'));
}
   
   
}
