@extends('layouts.master')

@section('content')
	<main>
		
	<div class="col-md-6">
	<h1>Crear un nuevo mes</h1>

		<form method="POST" action="/month/store">
			
			{{ csrf_field() }}

	  <div class="form-group">
                    <label>Nombre del mes</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-group"></i>
                      </div>
                    <select id="name" name="name" class="form-control">
                                            <option value="1">Enero</option>

                                           <option value="2">Febrero</option>

                                           <option value="3">Marzo</option>

                                           <option value="4">Abril</option>

                                           <option value="5">Mayo</option>

                                           <option value="6">Junio</option>

                                           <option value="7">Julio</option>

                                           <option value="8">Agosto</option>

                                           <option value="9">Septiembre</option>

                                           <option value="10">Octubre</option>
                                           
                                           <option value="11">Noviembre</option>

                                           <option value="12">Diciembre</option>
                                          
                                       </select>
                    </div><!-- /.input group -->
                    </div>
	  <div class="form-group">
	    <label for="year">A;o</label>
	    <input class="form-control" name="year" id="year">
	  </div>

	  <div class="form-group">
                    <label>Primer dia del mes</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-group"></i>
                      </div>
                    <select id="first" name="first" class="form-control">
                                            <option value="1">Lunes</option>

                                           <option value="2">Martes</option>

                                           <option value="3">Miercoles</option>

                                           <option value="4">Jueves</option>

                                           <option value="5">Viernes</option>

                                           <option value="6">Sabado</option>

                                           <option value="7">Domingo</option>
                                          
                                       </select>
                    </div><!-- /.input group -->
                    </div>
	  
	  <div class="form-group">
	  	<button type="submit" class="btn btn-success">Guardar</button>
	  </div>
	</form>
</div>
</main>

	  @endsection