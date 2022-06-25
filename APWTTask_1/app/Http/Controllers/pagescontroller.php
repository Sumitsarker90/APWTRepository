<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function  index(){
        return view('home');
    }

    public function  profile(){
        $name="Sumit";
        $dob="02-07-1999";
        $id="19-41764-3";
        $names=array('sumit','kanti', 'sarker');
        return view('profile')
        ->with('name',$name)
        ->with('dob',$dob)
        ->with('id',$id)
        ->with('names',$names);
    }

    public function  service(){
        return view('service');
    }

    public function  contact(){
        return view('contact');
    }

    public function  about(){
        return view('about');
    }

}
