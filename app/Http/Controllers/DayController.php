<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Month;
use App\Publication;

class DayController extends Controller
{
    
	 public function show($day,$m_id){

	 	$m=Month::find($m_id);

    	$pub=Publication::where('day', $day)->where('month',$m->name)->where('year',$m->year)->orderBy('time', 'asc')->get();
    	$value=$day;
    	$month_id =$m_id;
    	return view('calendar.show-day', compact('pub','value','month_id','m'));	

    }
    //
}
