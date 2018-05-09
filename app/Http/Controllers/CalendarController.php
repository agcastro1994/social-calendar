<?php

namespace App\Http\Controllers;

use App\Publication;
use App\Month;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //auth

    public function __construct(){

		$this->middleware('auth')->except('index');
	}

	public function index(){

		return view('welcome');

	}

	public function create($day,$m_id){

    	return view('calendar.create',compact('day', 'm_id'));

    } 
    //recibira la variable $value, que originalmente fue enviada a la pagina show-day.blade.php, alli sera insertada como parte del link hacia crear publicacion y asi sera utilizada para tener el valor default de la variable day de la base de datos
      public function store($day,$m_id){

    	//dd(request()->all());

    	//validation

    	$this->validate(request(),[
    		'title' => 'required',
    		'body' => 'required'
    		    	]);

    	$m=Month::find($m_id);

    	$publication = new Publication;

    	$publication->title= request('title');
    	$publication->body= request('body');
    	$publication->social_n_id= request('network');
    	$publication->time= request('time');
    	$publication->month=$m->name;
    	$publication->year=$m->year;
    	$publication->day=$day;
    	//$publication->month_id=$m_id;

    	$publication->save();


    	return redirect()->action('DayController@show', [$day,$m_id]);
    }

	 // public function show($id){

  //   	$post=Post::find($id);

  //   	return view('posts.show', compact('post'));	

  //   }

    

	}