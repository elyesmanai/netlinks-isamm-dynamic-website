@extends('layouts.academy', ['title' => 'Lessons'])

@section('content')

<div class="container-fluid">

	<div class="col-lg-4 col-lg-offset-4">
		<h2>{{$course}}</h2><br>
	</div>

   <div class="col-lg-7 lesson">

		<center><h2>{{$slide[0]->name}}</h2></center><br>

   		<p>{{$slide[0]->content}}</p> <br><br>

		<button>Last Slide</button>
		<button>Next Slide</button>

   </div>

   <div class="col-lg-3 col-lg-offset-1 lessons-list">

      <ol>
   	  @foreach($slides as $sslide)
            <li><a href="/academy/{{$pole}}/{{$course}}/{{$sslide->id}}">{{$sslide->name}}</a></li>
         @endforeach
      </ol>
   
   </div>

</div>
@endsection

