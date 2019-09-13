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

    public function storeEmail()
    {
        $newSubscriber= new Subscriber();
        $newSubscriber->email=request('emailField');
        $newSubscriber->save();
        return redirect()->back();
    }
}
