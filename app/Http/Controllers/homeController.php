<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class homeController extends Controller
{
    public function profile(){

        $name=session()->get('userid');    
        $info=registration::where('userid',$name)->first(); 
      

        return view('home.profile')
        ->with('info',$info);

    }
}
