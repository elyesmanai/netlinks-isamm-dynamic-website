@extends('layouts.front', ['title' => 'About'])

@section('content')  

   <div class="container"><br><br>
   		<div class="row">

   			<div class="col-lg-12 text-center">
   				<h1>{{$activity[0]->headline}}</h1><br>
   			</div>

   			<div class="col-lg-8 col-lg-offset-2">
   				<img src="/img/Activities/{{$activity[0]->name}}.jpg" width="100%" alt=""><br><br>
   			</div>

   			<div class="col-lg-10 col-lg-offset-1">
   				<p>
   					{{$activity[0]->content}}
   				</p>
   			</div>
   		</div>
   </div>

@endsection
