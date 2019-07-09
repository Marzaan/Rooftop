<?php

namespace App\Http\Controllers;

use Session;
use App\Messages;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$info = About::all();
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	if($info->count()==0){
    		return view('Admin.home.info',['msgbar'=>$msgbar]);
    	}
    	else{
    		return view('Admin.home.showAbout',compact('info','msgbar'));
    	}
    }
    public function store(Request $request)
    {
    	$about = new About;

    	$about->description = $request->about;
    	$about->menuDescription = $request->menu;
        $about->tableDescription = $request->table;
    	$about->chefQuotes = $request->chef;
    	$about->image = $request->file1;
    	$about->chefImage = $request->file2;

    	$about->save();

    	Session::flash('success','You are succesfully created an info.');

    	return redirect()->back();
    }
    public function edit($id)
    {
    	$about = About::find($id);
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);

    	return view('Admin.home.editAbout',compact('about','msgbar'));
    }
    public function update(Request $request, $id)
    {
    	$about = About::find($id);

    	if($request->has('about')){
    		$about->description = $request->about;
    	}
    	if($request->has('menu')){
    		$about->menuDescription = $request->menu;
    	}
        if($request->has('table')){
            $about->tableDescription = $request->table;
        }
    	if($request->has('chef')){
    		$about->chefQuotes = $request->chef;
    	}
    	if($request->hasFile('file1')){
    		$about->image = $request->file1;
    	}
    	if($request->hasFile('file2')){
    		$about->chefImage = $request->file2;
    	}

    	$about->save();

		Session::flash('success','Your are succesfully updated this.');

    	return redirect('info');
    }
    public function destroy($id)
    {
        $about = About::find($id);

        $about->delete();

        Session::flash('success','You are succesfully deleted this.');

        return redirect()->back();
    }
}
