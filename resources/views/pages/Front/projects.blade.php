@extends('layouts.front', ['title' => 'Projects'])

@section('content')  

    <div class="container" style="text-align: center;"><br>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nos domaines d'expertises
                </h1>  
            </div>
        </div>
        

        <div class="row">

            @foreach($poles as $pole)
            
                <div class="col-md-4 img-portfolio">
                    <a href="/projects/{{$pole->name}}">
                        <img class="img-responsive img-hover" src="img/Poles/{{$pole->name}}.jpg" alt="">
                    </a>
                    <div class="aha">
                        <h3>
                            <a href="/projects/{{$pole->name}}">{{$pole->name}}</a>
                        </h3>
                    </div>
                </div>

            @if($pole== $poles[2])
                </div><br>
                <div class="row">
            @endif

            @endforeach

        </div> 

    </div>
@stop