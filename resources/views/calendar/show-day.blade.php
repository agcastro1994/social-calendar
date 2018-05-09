@extends('layouts.master')

@section('content')
	<main>
    
  <div class="col-md-8">
  <!-- <h3>{{ $value }}</h3>
  <h3> {{ $month_id }}</h3> -->

  @foreach($pub as $pub)
    <h3>{{ $pub->title }}</h3>
    <br>
    <br>
    <p>{{ $pub->body }}</p>

    <?php 
      if ($pub->social_n_id == 1)
          echo "<p> &nbsp;&nbsp;&nbsp; --Facebook";
      if ($pub->social_n_id == 2)
          echo "<p> &nbsp;&nbsp;&nbsp; --Twitter";
      if ($pub->social_n_id == 3)
          echo "<p> &nbsp;&nbsp;&nbsp; --Instagram";
     ?>
    <br>
    <br>
    <p>Publicar a esta hora: {{ $pub->time }}</p>
    
  @endforeach
    <a class="" href="/calendar/{{ $value }}/{{ $month_id }}">
        <i class=""></i>
        <p>Crear una publicacion</p>
      </a>
  </div>
</main>
	  @endsection