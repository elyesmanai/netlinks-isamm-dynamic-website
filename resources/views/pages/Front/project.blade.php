@extends('layouts.front', ['title' => 'Projects'])

@section('content')  

    <div class="container"><br>

        {{-- Project Details--}}
        <div class="row">
            <div class="col-lg-12 ">
                
                 <!-- Home -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"  style="margin-bottom: 0%;">{{$project[0]->name}}
                            <small>{{$project[0]->summary}}</small>
                        </h1>
                        <ol class="breadcrumb" style="margin-bottom: 0">
                            <li><a href="/">Home</a>
                            </li>
                            <li class="active">{{$project[0]->name}}</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                 <!-- Portfolio Item Row -->
                <div class="row">

                    <div class="col-md-6 ">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active ">
                                    <img class="img-responsive" width="70%" src="/img/Projects/{{$project[0]->name}}.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" width="70%" src="/img/Projects/{{$project[0]->name}}.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" width="70%"  src="/img/Projects/{{$project[0]->name}}.jpg" alt="">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h3 style="margin-top: 0%;">Project Description</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis dignissimos voluptate officiis incidunt non similique! Vero pariatur ducimus voluptatibus, nihil repellat quod hic alias quam magnam. Culpa praesentium, ut libero?.</p>
                        <h3>Project Details</h3>
                        <ul>
                            <li>Lorem Ipsum</li>
                            <li>Dolor Sit Amet</li>
                            <li>Consectetur</li>
                            <li>Adipiscing Elit</li>
                        </ul>
                    </div>
                </div><br><br>
            </div>
        </div>

        {{-- Team Members --}}
        <div class="col-lg-12">
                        <h3 class="page-header"  style="margin-top: 0%;">Project Makers</h3>
                    </div>
                          
           <div class="col-lg-2 col-sm-6 text-center">
                             <a class="user-img" href="netlinks-isamm/profile/{{'test'}}">
                                                <img class="img-circle img-responsive img-center" src="/img/users/2016/{{'test'}}.jpg" alt="">
                                                    </a>
                                                        <h3>{{'test'}}</h3>
                                                        <p>{{'test'}}</p>
                                                    <div class="team-links row">
                                                       <a class="col-lg-2 col-lg-offset-1" href="facebook/"><i class="fa fa-facebook " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="insagram/"><i class="fa fa-instagram " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Linkedin"><i class="fa fa-linkedin " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Github"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Netlinks-isamm.com"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                    </div>
            <br><br></div>



        {{-- Related Projects --}}
        <div class="row">
            <div class="col-lg-12">
                 <!-- Related Projects Row -->
                <div class="row">

                    <div class="col-lg-12">
                        <h3 class="page-header"  style="margin-top: 0%;">Related Projects</h3>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <a href="#">
                            <img class="img-responsive img-hover img-related" src="/img/Projects/{{$project[0]->name}}.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <a href="#">
                            <img class="img-responsive img-hover img-related" src="/img/Projects/{{$project[0]->name}}.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <a href="#">
                            <img class="img-responsive img-hover img-related" src="/img/Projects/{{$project[0]->name}}.jpg" alt="">
                        </a>
                    </div>

                    <div class="col-sm-2 col-xs-6">
                        <a href="#">
                            <img class="img-responsive img-hover img-related" src="/img/Projects/{{$project[0]->name}}.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>

        
    </div>

@stop