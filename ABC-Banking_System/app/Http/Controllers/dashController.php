<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class dashController extends Controller
{
    public function dashboard(){

        return view('dashboard.dashboard');
    }
}
