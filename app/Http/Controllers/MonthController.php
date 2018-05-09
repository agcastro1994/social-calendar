<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Month;

use App\Publication;

class MonthController extends Controller
{

	public function create(){

		return view('calendar.months');
	}

	public function store(){

    	$months = new Month;

    	$months->name= request('name');
    	$months->year= request('year');
    	$months->first= request('first');
    	$months->save();


    	return redirect('/home');
    }
   
    public function show($id){


    	// $count=Publication::where('month','febrero')->where('year','2018')->where('day',21)->count();
    	$count=Publication::get();

    	$month=Month::find($id);
    	$value=$month->first;
    	return view('calendar.show-month', compact('month','value','count'));	

    }

    //
}
