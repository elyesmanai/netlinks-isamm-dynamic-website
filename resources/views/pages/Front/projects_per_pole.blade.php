@extends('layouts.front', ['title' => 'Projects'])

@section('content')  

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                </h1>
                <ol class="breadcrumb">
                    <li><a href="pall.php">Home</a>
                    </li>
                    <li class="active">{{$pole or "Our"}} Portfolio</li>
                </ol>
            </div>
        </div>

        @if(($projects)->isEmpty())

        <br><br><br><br><br><br><br><br>

            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <h2 > We Don't Have any Projects for now</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-5"><br><br><br>
                    <button><a href="{{url('/projects')}}">Back to Projects</a></button>
                </div>
            </div>

        <br><br><br><br><br><br><br><br><br><br>

        @else
            
             <div class="row"> <?php $id=0; ?>

        @foreach($projects as $project) <?php $id++; ?>

                <div class="col-md-3">
                    <a href="/Projects/{{$pole}}/{{$project->name}}">
                        <img class="img-responsive img-hover" width="100%" src="/img/Projects/{{$project->name}}.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-3">
                    <h3>{{$project->name}}</h3>
                    <h4>{{$project->summary}}</h4>
                    <p>{{$project->description}}</p>
                    <a class="btn btn-primary" href="/projects/{{$pole}}/{{$project->name}}">View Project</a>
                </div>
        
            @if($id % 2 == 0)
                </div>
                <div>
            @endif
        @endforeach
            </div>
        @endif

    </div>
@stop