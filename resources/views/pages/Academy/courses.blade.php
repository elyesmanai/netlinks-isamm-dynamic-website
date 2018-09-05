@extends('layouts.academy', ['title' => 'Home'])

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <center><h1>Here you can find all our {{$pole}} courses</h1></center><br><br>
        </div>
    </div>

    @foreach($courses as $course)
        
        <div class="row course">
            <div class="col-lg-10">
                <h2>{{$course->name}}</h2>
                <h3>{{$course->description}}</h3>
            </div>
             <div class="col-lg-2">
             <br><br>
                    <button type="button" class="btn btn-success"><a href="/academy/{{$pole}}/{{$course->name}}/1">Start this Course</a></button>
            </div>
        </div>

    @endforeach
    <br><br><br><br><br><br><br><br><br><br><br><br>
</div>

@endsection
