<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class shopController extends Controller
{
    public function index(){
        $products = Product::all();
        // $products = [
        //     "iPhone 14","Samsung A52s","Samsung A30", "iPhone 13 pro"
        // ];
        return view('shop',compact("products"));
    }
    public function addProduct(){
        return view('admin/add-product');
    }
}
