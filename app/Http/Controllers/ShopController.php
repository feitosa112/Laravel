<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class shopController extends Controller
{
    public function index(){
        $products = Product::all();
        // $products = [
        //     "iPhone 14","Samsung A52s","Samsung A30", "iPhone 13 pro"
        // ];
        
        return view('shop',compact("products"));
    }

    
    public function addProduct(Request $request){
        
        $request->validate([

            "name"=>"required|string|unique:products",
            "description"=>"required|string|min:10",
            "amount"=>"required|numeric",
            "price"=>"required|numeric",
            "image"=>"mimes:jpg,jpeg,png"

           ]);
       
       
        if($request->hasFile("image")){
            $image = $request->file("image");
            $image_name = time().'1.'.$image->extension();
            $image->move(public_path('/ad_images'),$image_name);
        }

        


        Product::create([
            "name"=>$request->get('name'),
            "description"=>$request->get('description'),
            "amount"=>$request->get('amount'),
            "price"=>$request->get('price'),
            "image"=>(isset($image_name)) ? $image_name :null



        ]);
        return redirect("/shop")->with('createProduct','You have successfully entered a new product');
    }
}
