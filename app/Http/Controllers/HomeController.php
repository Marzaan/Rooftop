<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.home.homeContent')
        ->with('msgbar',Messages::orderBy('id','desc')->get()->take(3))
        ->with('unread',Messages::all()->count())
        ->with('read',Messages::onlyTrashed()->get()->count())
        ->with('item',Items::all()->count())
        ->with('trashed',Items::onlyTrashed()->get()->count());
    }
}
