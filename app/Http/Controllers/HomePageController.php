<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $trenutnoVrijeme = date("h:i:s");
        $latestProducts = Product::orderBy('created_at','desc')->take(6)->get();
        
        return view('welcome',compact('trenutnoVrijeme','latestProducts'));
    }
}
