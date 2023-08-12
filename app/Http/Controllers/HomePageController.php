<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $trenutnoVrijeme = date("h:i:s");
        return view('welcome',compact('trenutnoVrijeme'));
    }
}
