<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about(){
        $name  = "Muhammad Aamr Raza";
        return view('about',compact('name'));
    }

    public function contact(){
        $name = "Amir Raza";
        $phone = "03254380868";
        $email = "amir@gmail.com";
        return view('contact',compact('name','phone','email'));
    }

}
