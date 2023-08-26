<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return redirect("/shop")->with("sendMsg","You have successfully sent the message");
    }

    public function delete($contact){
        $singleContact = ContactModel::where(['id'=>$contact])->first();
        if($singleContact==null){
            echo "Ovaj contact ne postoji";
        }else{
            $singleContact->delete();
        }
        return redirect()->back()->with('delete','Contact deleted!!!');
    }

    public function edit($contactId){
        $contact = ContactModel::find($contactId);
        return view('edit-contact',[
            'contact'=>$contact
        ]);
    }

    public function update(Request $request,$id){
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $id = $request->id;

        $request->validate([
            'email'=>'required|string',
            'subject'=>'required|string',
            'message'=>'required|string|min:10',
            
            

        ]);

        DB::update("UPDATE contacts SET email= :email,subject= :subject,message= :message WHERE id= :id",['id'=>$id,'email'=>$email,'subject'=>$subject,'message'=>$message]);
        return redirect(route('allContacts'))->with('updateContact','You have successfully edited the contact');


    }
}
