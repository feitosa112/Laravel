<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(){
        $all = Product::all();
        return view('allProducts',compact("all"));
    }

    public function delete($product){
        $singleProduct = Product::where(['id'=>$product])->first();
        if($singleProduct==null){
            echo "Ovaj proizvod ne postoji";
        }else{
            $singleProduct->delete();
        }
        
        return redirect()->back()->with('deleteProduct','Product deleted!!');
    }

    public function edit($productId){
        $product = Product::find($productId);
        return view('edit-product',[
            'product'=>$product
        ]);
    }

    public function update(Request $request,$id){
        $name = $request->name;
        $price = $request->price;
        $amount = $request->amount;
        $oldImg = $request->oldImg;
        $productId= $request->id;

        $request->validate([
            'name'=>'required|string',
            'price'=>'required|numeric',
            'amount'=>'required|numeric',
            'image'=>'mimes:jpg,jpeg,png|required',
            

        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = time().'1.'.$image->extension();
            $image->move(public_path('ad_images'),$image_name);
        }else{
            $image_name = $oldImg;
        }

        DB::update("UPDATE products SET name= :name,price= :price,amount= :amount,image= :image WHERE id= :id",['id'=>$productId,'name'=>$name,'amount'=>$amount,'price'=>$price,'image'=>(isset($image_name)) ? $image_name : null]);
        return redirect(route('allProducts'))->with('update','You have successfully made changes to this product');


    }
}
