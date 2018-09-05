@extends('layouts.front', ['title' => 'Welcome'])

@section('content')  
          
<div class="container"><br><br>

        <div class="row" >
            <a href="/activities/{{$activities[0]->id}}">
                <div class="col-lg-12">
                    <h1 class="page-header text-center">
                       {{$activities[0]->name}}
                    </h1>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <img src="img/Activities/{{$activities[0]->name}}.jpg" width="100%">
                </div>
            </a>
        </div>


        <div class="row" >
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                    Our newest Projects
                </h1>
            </div>

            @foreach($projects as $project)
                <div class="col-lg-4" id="a">
                    {{$project->name}}<br><img src="img/Projects/{{$project->name}}.jpg" width="100%">
                </div>
            @endforeach

            <br><br>
        </div>


        


        <section id="portfolio" class="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12  text-center">
                    <h2>Nos dernières activités</h2>
                    <hr class="small">
                    <div class="row">

                        @foreach($activities as $activity)
                            <div class="col-lg-4">
                                <div class="portfolio-item">
                                    <a href="/activities/{{$activity->id}}">
                                        <img class="img-portfolio img-responsive" width="100%" src="img/Activities/{{$activity->name}}.jpg">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>

                    <a href="/about/History" class="btn btn-dark">Voir l'historique de nos activités</a>
                </div>

            </div>

        </div><br><br>


     <div class="row">
        <div class="col-lg-12" >
                <div class="panel panel-default" >
                    <div class="panel-heading text-center">
                        <h2 >Fièrements en partenariat avec</h2>
                    </div>
                </div>
                <div class="panel">
                   <section id="portfolio" class="portfolio">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11  text-center">
                                    <div class="row">

                                        @foreach($partners as $partner)
                                            <div class="col-lg-3"> 
                                                <div class="portfolio-item">
                                                    <a href="#">
                                                    <img class="img-portfolio img-responsive" src="img/Partners/{{$partner->name}}.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
        </div>
     </div>
  
</div>

@stop
