@extends('layouts.master')

@section('content')
	<main>
		
	<div class="col-md-6">
	<h1>Create a publication</h1>
	<!-- <h2> {{ $day }}</h2>
	<h3>{{ $m_id }}</h3> -->

		<form method="POST" action="/publication/{{ $day }}/{{ $m_id }}">
			
			{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Titulo</label>
	    <input type="text" class="form-control" id="title" name="title">
	  </div>
	  <div class="form-group">
	    <label for="body">Contenido</label>
	    <textarea class="form-control" name="body" id="body"></textarea>
	  </div>

	  <div class="form-group">
                    <label>Red social:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-group"></i>
                      </div>
                    <select id="network" name="network" class="form-control">
                                             <option value="1">Facebook</option>

                                           <option value="2">Twitter</option>

                                           <option value="3">Instagram</option>
                                          
                                       </select>
                    </div><!-- /.input group -->
                    </div>
		
		<div class="form-group">
			<label for="startTime">Publicar a: </label>
		     <div class="input-group">
	          
	  		  <input type="time" id="time" name="time">
  		 	  </div>
		</div>
                   

                   
	  <div class="form-group">
	  	<button type="submit" class="btn btn-success">Guardar</button>
	  </div>
	</form>
</div>
</main>

	  @endsection