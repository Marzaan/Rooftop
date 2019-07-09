<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Items;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $item = Items::all();
        $item2 = Items::all();
        $item3 = Items::all();
        $img = Items::all()->take(4);

        $about = About::all();
        $contact = Contact::all();
    	return view('FrontView.index',compact('item','item2','item3','img','about','contact'));
    }
    public function menu(){
        $item = Items::all();
        $item2 = Items::all();
        $item3 = Items::all();

        $info = About::all();
    	return view('FrontView.menu',compact('item','item2','item3','info'));
    }
    public function about(){
        $info = About::all();
    	return view('FrontView.about',compact('info'));
    }
    public function contact(){
        $contact = Contact::all();
    	return view('FrontView.contact',compact('contact'));
    }
    public function gallery(){
        $img = Items::all();
    	return view('FrontView.gallery',['img'=>$img]);
    }
    public function blog(){
    	return view('FrontView.blog');
    }
}
