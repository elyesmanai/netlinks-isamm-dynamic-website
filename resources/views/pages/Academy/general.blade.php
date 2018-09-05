@extends('layouts.dashboard', ['title' => 'dashboard'])

@section('content')


	@if($part=='general')

	@else
		<div class="row">

	        <div class="col-lg-12">

	            <div class="alert row">

	                <div class="col-lg-10">
	                    <h2 style="margin-top: 0%;">Netlinks {{$part}}</h2> This page can only be accessed by the admins.
	                </div>
	                <div class="col-lg-2">
	                    <a href="/admin/{{$part}}/add"><button class="btn btn-success">Add a new {{$part}}</button></a>
	                </div>
	                
	            </div> 
	        </div>
	        
		</div>
	@endif



	@php
	switch ($part) {
		case 'users':

			@include('partials/members');
			break;
		case 'projects':
			@include('partials/projects');
			break;
		case 'courses':
			@include('partials/courses');
			break;
		case 'slides':
			@include('partials/slides');
			break;
		case 'questions':
			@include('partials/questions');
			break;
		case 'bureaufunctions':
			@include('partials/bureaufunctions');
			break;
		case 'departments':
			@include('partials/departments');
			break;
		case 'poles':
			@include('partials/poles');
			break;
		case 'clients':
			@include('partials/clients');
			break;
		case 'partners':
			@include('partials/partners');
			break;
		
		default:
			
			break;
	}

	@endphp


@endsection