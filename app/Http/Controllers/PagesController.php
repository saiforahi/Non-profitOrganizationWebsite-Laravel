<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\subscriber;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function home()
    {
        return view("pages.home");
    }
    public function about()
    {
        return view("pages.about");
    }
    
    public function contact()
    {
        return view("pages.contact");
    }
    public function storeEmail()
    {
        $messages = [
            'emailField.email' => 'Please enter a valid email',
            'emailField.unique' => 'This email is already registered!',
        ];

        $rules=[
            'emailField' => 'required|string|email|max:255|unique:subscribers,email',
        ];
        $validator = Validator::make(request()->all(),$rules,$messages);
        $email=request('emailField');
        if($validator->fails())
        {
            return view('pages.home')->with('error','This email is already registered!');
        }
        else
        {
            $newSubscriber= new Subscriber;
            $newSubscriber->email=$email;
            $newSubscriber->save();
            return view('pages.home')->with('success','Subscription is successful');
        }
        
    }

    public function sendMessage(Request $reque)
    {
        $rules=[
            'name'=>'required|string',
            'email'=>'required|strinng|email|max:255',
            'cell'=>'required|string|max:20',
            'message'=>'required|string'
        ];

        $messages=[
            'name.required'=>'We need to know your name',
            'cell.required'=>'we need to know your phone number'
        ];
        $validate=Validator::make(request()->all(),$rules,$messages);
        if($validate)
        {
            $message=new Message;
            $message->name=request('name');
            $message->email=request('email');
            $message->cell=request('cell');
            $message->message=request('message');
            $message->save();
            return redirect()->back()->with('success','Message sent successfully');
        }
        else
        {
            return redirect()->back()->withErrors($validate,$messages)->withInput();
        }
    }
}
