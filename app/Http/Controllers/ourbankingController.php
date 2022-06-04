<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ourbankingController extends Controller
{
    public function deposit_products(){

        return view('ourbanking.deposit_products');
    }
    public function NRB_banking(){

        return view('ourbanking.NRB_banking');

    }  public function women_banking(){

        return view('ourbanking.women_banking');
    }
    public function digital_banking(){

        return view('ourbanking.digital_banking');
    }
    public function other_banking(){

        return view('ourbanking.other_banking');
    }
}
