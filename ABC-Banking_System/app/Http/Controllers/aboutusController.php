<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutusController extends Controller
{
    public function Corporate_Profile(){

        return view('aboutus.corporate_profile');
    }
    public function Corporate_Governance(){

        return view('aboutus.corporate_governance');
    }
}
