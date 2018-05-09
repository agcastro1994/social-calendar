<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    
	public static function month_name($m_id){
	 $m=\App\Month::find($m_id);

		switch ($m->name)
    {
    case 1:
        $month_name = "Enero";
        break;
    case 2:
        $month_name = "Febrero";
        break;
    case 3:
        $month_name = "Marzo";
        break;
    case 4:
        $month_name = "Abril";
        break;
     case 5:
       $month_name = "Mayo";
        break;
    case 6:
        $month_name = "Junio";
        break;
    case 7:
        $month_name = "Julio";
        break;
    case 8:
        $month_name = "Agosto";
        break;
    case 9:
        $month_name = "Septiembre";
        break;
    case 10:
        $month_name = "Octubre";
        break;
    case 11:
        $month_name = "Noviembre";
        break;
    case 12:
        $month_name = "Diciembre";
        break;

    }
    	return $month_name;

	}
    //
}
