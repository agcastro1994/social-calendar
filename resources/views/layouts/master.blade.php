<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Application</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">       
 <link href="/css/calendar.css" rel="stylesheet">


 </head>

 <body>
 	
	


 	<div class="wrapper">

		@yield('content')

		@include('layouts.sidebar')

 	</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

        $(".week").click(function(){
            
             	 $('.week').addClass("toggle__option--selected");
             	 $('.month').removeClass("toggle__option--selected");			
                 
            })

        $(".month").click(function(){
            
             	 $('.month').addClass("toggle__option--selected");
             	 $('.week').removeClass("toggle__option--selected");			
                 
            })
           
            
          })</script>
 </body>
 </html>