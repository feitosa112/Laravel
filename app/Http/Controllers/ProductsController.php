<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index(){
        $allProducts = Product::all();
        return view('allProducts',compact("allProducts"));
    }

    public function delete($product){
        $singleProduct = Product::where(['id'=>$product])->first();
        if($singleProduct==null){
            echo "Ovaj proizvod ne postoji";
        }else{
            $singleProduct->delete();
        }
        return redirect()->back();
    }
}
