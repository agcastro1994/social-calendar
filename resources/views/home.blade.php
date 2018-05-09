@extends('layouts.master')


 @section('content')
  <main>
    <div class="toolbar">
      <div class="toggle">
        <div class="toggle__option week">Semana</div>
        <div class="toggle__option toggle__option--selected month">Mes</div>
      </div>
      <div class="current-month">Febrero 2018</div>
      <div class="search-input">
        <input type="text" value="Que estas buscando?">
        <i class="fa fa-search"></i>
      </div>
    </div>
    <div class="calendar">
      <div class="calendar__header">
        <div>Lun</div>
        <div>Mar</div>
        <div>Mier</div>
        <div>Jue</div>
        <div>Vier</div>
        <div>Sab</div>
        <div>Dom</div>
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
    </div>
  </main>
  @endsection
