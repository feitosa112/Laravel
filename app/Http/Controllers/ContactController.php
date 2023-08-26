<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function getAllContacts(){
        $all = ContactModel::all();
        return view('allContacts',compact("all"));
    }

    public function sendContact(Request $request){
        $request->validate([
            "email"=>"required|string",
            "subject"=>"required|string",
            "description"=>"required|string|min:5"
        ]);
        echo "Email:".$request->get('email').''.'Naslov:'.$request->get('subject').''.$request->get('description');

        ContactModel::create([
            "email"=>$request->get('email'),
            "subject"=>$request->get('subject'),
            "message"=>$request->get('description')
        ]);

        return redirect("/shop");
    }

    public function delete($contact){
        $singleContact = ContactModel::where(['id'=>$contact])->first();
        if($singleContact==null){
            echo "Ovaj contact ne postoji";
        }else{
            $singleContact->delete();
        }
        return redirect()->back()->with('delete','Contact delete!!!');
    }
}
