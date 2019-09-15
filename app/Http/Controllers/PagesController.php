<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscriber;

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

    public function storeEmail($email)
    {
        
        $newSubscriber= new Subscriber();
        $newSubscriber->email=$email;
        $newSubscriber->save();
        return redirect()->back();
    }
}
