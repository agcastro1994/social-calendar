@extends('layouts.master')


 @section('content')
  <main>
    <div class="toolbar">
      <div class="toggle">
        <div class="toggle__option">Semana</div>
        <div class="toggle__option toggle__option--selected">Mes</div>
      </div>

       <?php

         $month_name=App\Month::month_name($month->id);
         
      ?>
      <div class="current-month"><h2>{{ $month_name }} {{ $month->year }} </h2></div>
      <div class="search-input">
        <input type="text" value="What are you looking for?">
        <i class="fa fa-search"></i>
      </div>
    </div>
    <div class="calendar">
      <div class="calendar__header">
        <div>Lun</div>
        <div>Mar</div>
        <div>Mie</div>
        <div>Jue</div>
        <div>Vie</div>
        <div>Sab</div>
        <div>Dom</div>
      </div>
      <div class="calendar__week">

      <?php 
              
            if ($month->name == 2) {

                $x=28;
            } elseif (($month->name == 4) ||  ($month->name == 6) || ($month->name == 9) || ($month->name == 11)) {
                $x=30;
              } else {
                $x=31;
              }

              for ($i = 1; $i < $value; $i++) {
                if ($i < $value ){
                  echo '<div class="calendar__day day"></div>';
                }
                  }
                for ($j = 1; $j <= $x; $j++) {
          
                      if (($i == 8) ||  ($i==15) || ($i==22) || ($i==29)){
                        echo "</div> <div class='calendar__week'><div class='calendar__day day'>";
                        echo "<a href='/day/$j/$month->id'>$j</a><br>";
                       
                        $cuantityF=$count->where('month',$month->name)->where('year',$month->year)->where('day',$j)->where('social_n_id',1)->count(); //cuenta cuantas publicacones hay de cada red social ese dia
                        $cuantityT=$count->where('month',$month->name)->where('year',$month->year)->where('day',$j)->where('social_n_id',2)->count();
                        $cuantityI=$count->where('month',$month->name)->where('year',$month->year)->where('day',$j)->where('social_n_id',3)->count();
                        if ($cuantityF !== 0)
                          echo "$cuantityF FB"."&nbsp;&nbsp;&nbsp;";
                        if ($cuantityT !== 0)
                          echo "$cuantityT Twit"."&nbsp;&nbsp;&nbsp;";
                        if ($cuantityI !== 0)
                          echo "$cuantityI Insta"."&nbsp;&nbsp;&nbsp;";
                        echo"</div>";
                        $i++;
                      }else{
                        echo '<div class="calendar__day day">';
                        echo "<a href='/day/$j/$month->id'>$j</a><br>";
                        
                        $cuantityF=$count->where('month',$month->name)->where('year',$month->year)->where('day',$j)->where('social_n_id',1)->count(); //cuenta cuantas publicacones hay de cada red social ese dia
                        $cuantityT=$count->where('month',$month->name)->where('year',$month->year)->where('day',$j)->where('social_n_id',2)->count();
                        $cuantityI=$count->where('month',$month->name)->where('year',$month->year)->where('day',$j)->where('social_n_id',3)->count();
                        if ($cuantityF !== 0)
                          echo "$cuantityF FB"."&nbsp;&nbsp;&nbsp;";
                        if ($cuantityT !== 0)
                          echo "$cuantityT Twit"."&nbsp;&nbsp;&nbsp;";
                        if ($cuantityI !== 0)
                          echo "$cuantityI Insta"."&nbsp;&nbsp;&nbsp;";

                        echo'</div>';
                        $i++;
                  }
                }
                
            
// for ($i = 1;$i>31; $i++) {
              //if ($i < $value ) {
              //echo $i;//'<div class="calendar__day day">0</div>';
               //} else {
              //   for ($j = $i;$j>(31+$i);$j++)
              //     if (($j == 8) ||  ($j==15) || ($j==22) || ($j==29)){
              //       echo "</div> <div class='calendar__week'><div class='calendar__day day'>$j</div>";
              //     } elseif ($j==31) {
              //       echo "<div class='calendar__day day'>$j</div></div>";
              //     }else {
              //       echo "<div class='calendar__day day'>$j</div>";
              //     }
              // }

   //}

       ?>
        <!-- <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
      </div>
      <div class="calendar__week">
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>        
      </div>
      <div class="calendar__week">
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>    
      </div>
      <div class="calendar__week">
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div> 
        <div class="calendar__day day"></div> 
        <div class="calendar__day day"></div> 
      </div>
      <div class="calendar__week">
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
        <div class="calendar__day day"></div>
      </div> -->
    </div>
  </main>
  @endsection
