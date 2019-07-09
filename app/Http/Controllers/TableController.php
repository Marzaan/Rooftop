<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Messages;
use Session;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
    	$req = Reservation::all();
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.tableRequest',compact('msgbar','req'));
    }
    public function index2()
    {
    	$req = Reservation::all();
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.tableBooked',compact('msgbar','req'));
    }
    public function index3()
    {
    	$req = Reservation::all();
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.tableCompleted',compact('msgbar','req'));
    }
    public function index4()
    {
    	$msgbar = Messages::orderBy('id','desc')->get()->take(3);
    	return view('Admin.home.addTable',compact('msgbar'));
    }
    public function store(Request $request)
    {
    	$req = new Reservation;

    	$req->eventName = $request->eventname;
    	$req->contactName = $request->contactname;
    	$req->email = $request->email;
    	$req->phone = $request->phone;
    	$req->message = $request->message;
    	$req->meal = $request->meal;
    	$req->tableType = $request->tabletype;
    	$req->date = $request->eventdate;
    	$req->time = $request->eventtime;

    	$req->save();

    	Session::flash('success','You are succesfully sent the request');

    	return redirect()->back();
    }
    public function confirm($id)
    {
    	$req = Reservation::find($id);

    	$req->status='Booked';

    	$req->save();

    	Session::flash('success','You are succesfully booked this table.');

    	return redirect()->back();
    }
    public function complete($id)
    {
    	$req = Reservation::find($id);

    	$req->status='Completed';

    	$req->save();

    	Session::flash('success','You are succesfully completed this.');

    	return redirect()->back();
    }
    public function delete($id)
    {
        $req = Reservation::find($id);

        $req->delete();

        Session::flash('success','You are succesfully deleted this request.');

        return redirect()->back();
    }

}
