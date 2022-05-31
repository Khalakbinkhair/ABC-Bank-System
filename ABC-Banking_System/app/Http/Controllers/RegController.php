<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class RegController extends Controller
{
    public function reg(){
        return view('registration');
    }
    public function regsubmit(Request $req){
        // $req->file('file')->getClientOriginalName();
   
    
        $req->validate(
            [
            'name'=> 'required|regex:/^[A-Z a-z]+$/',
            'userid'=>'required',
            'email'=> 'required',
            
            'address'=> 'required',
            'gender'=>'required',
            'password'=> 'required|min:4',
            'cpassword'=> 'required|same:password',
            'blood'=>'required',
          
            'file'=>'mimes:png,jpg',
            'usertype'=>'required',
            'date'=>'required',
            

           
       
            ],
            [
                "name.required"=>"Enter your Name",
                "address.required"=>"Enter your Address"
            ]
            ); 

         
    //  $file= $req->file('file')->store('images');

  
     $f_name=$req->name.time().'.'.$req->file('file')->getClientOriginalName();
     $file= $req->file('file')->move('images',$f_name);

         $user =new registration();
         $user->name= $req->name;
         $user->userid=$req->userid;
         $user->email= $req->email;
         $user->address= $req->address;
         $user->password= md5($req->password);
         $user->cpassword= md5($req->cpassword);
         $user->gender = $req->gender;
         $user->usertype=$req->usertype;
         $user->blood=$req->blood;
         $user->date=$req->date;
         $user->file=$f_name;
        
         $user->save();



      
         return redirect()->route('login');
    }
    public function login(){
        return view('login');
    }
}
