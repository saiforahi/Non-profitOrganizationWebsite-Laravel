<?php

namespace App\Http\Controllers;

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
}
