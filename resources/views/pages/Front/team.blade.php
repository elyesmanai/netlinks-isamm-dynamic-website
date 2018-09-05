@extends('layouts.front', ['title' => 'Team'])

@section('content')  

<div class="container">
        
    <br><br>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">The Netlinks Family
                    <small>For this Year</small>
                </h1>
                <img style="width: 80%;" src="img/Presentation/family.jpg"> <br> <br> <br>

                 @foreach($contents as $content)
                    @if($content->name=="Netlinks ISAMM Family")
                    <p>{{$content->content}}</p>
                    @endif
                 @endforeach
               
            </div>
        </div>
        
        
            <div class="row" style="text-align: center;">
                <div class="col-lg-offset-1 col-lg-10">
                    <h2 style="text-align: center;" class="page-header">On est fiers de vous présenter le  bureau de NetLinks ISAMM pour l'année 2016/2017</h2>
                </div> 
            </div>
            <div class="row" style="text-align: center; ">

                @foreach($bureaufunctions as $bureaufunct)
                    
                        @foreach($users as $user)
                            @if($user->functionbureau == $bureaufunct->name)
                                                <div class="col-lg-2 col-sm-6 text-center" >
                                                    <a class="user-img" href="netlinks-isamm/profile/{{$user->id}}">
                                                        <img class="img-circle img-responsive img-center" src="img/Members/2016/{{$user->name}}.jpg" alt="">
                                                    </a>
                                                        <h3>{{$user->name}}</h3>
                                                        <p>{{$user->functionbureau}}</p>
                                                    <div class="team-links row">
                                                       <a class="col-lg-2 col-lg-offset-1" href="facebook/"><i class="fa fa-facebook " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="insagram/"><i class="fa fa-instagram " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Linkedin"><i class="fa fa-linkedin " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Github"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Netlinks-isamm.com"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                    </div>
                                                 </div>
                                              
                            @endif
                        @endforeach
                   

                  
                @endforeach
            </div>

          
        <hr>


        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Departments
                    <small>taba9a al 3olyé</small>
                    </h1>
                      @foreach($contents as $content)
                        @if($content->name=="Departments")
                         <p>{{$content->content}}</p>
                        @endif
                      @endforeach
                   
                </div>
            </div>

         <div class="row">
             <div class="col-lg-12">
                <h2 class="page-header">Our Departments</h2>
             </div>
            <div class="col-lg-12">
                        
                        <ul id="myTab" class="nav nav-tabs nav-justified">
                            @foreach ($departments as $department)

                                @if($department->name == $departments[0]->name)
                                    <li class="active">
                                @else
                                    <li class="">
                                @endif
                                
                                <a href="#{{$department->abbreviation}}" data-toggle="tab"><i class="fa fa-tree"></i><strong>{{$department->name}}</strong></a></li>
                            @endforeach
                        </ul>
                       
                        <div id="myTabContent" class="tab-content">
                            @foreach($departments as $department)
                                
                                @if($department->name == $departments[0]->name)
                            <div class="tab-pane fade active in" id="{{$department->abbreviation}}">
                                @else
                                <div class="tab-pane fade" id="{{$department->abbreviation}}">
                                    @endif

                                    <p>{{$department->description}}</p>
                                    
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <h2 class="page-header">Our Team</h2>
                                            </div>
                                        
                                            @foreach ($users as $user)
                                                
                                                @if($user->department == $department->name)
                                                    <div class="col-lg-2 col-sm-6 text-center">
                                                        <a class="user-img" href="netlinks-isamm/profile/{{$user->id}}">
                                                            <img class="img-circle img-responsive img-center" src="/img/Members/2016/{{$user->name}}.jpg" alt="">
                                                        </a>
                                                            <h3>{{$user->name}}</h3>
                                                            <p>{{$user->functiondept}}</p>
                                                        <div class="team-links row">
                                                           <a class="col-lg-2 col-lg-offset-1" href="facebook/"><i class="fa fa-facebook " aria-hidden="true"></i></a>
                                                           <a class="col-lg-2" href="insagram/"><i class="fa fa-instagram " aria-hidden="true"></i></a>
                                                           <a class="col-lg-2" href="Linkedin"><i class="fa fa-linkedin " aria-hidden="true"></i></a>
                                                           <a class="col-lg-2" href="Github"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                           <a class="col-lg-2" href="Netlinks-isamm.com"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                @endif

                                            @endforeach

                                    </div>
                                </div>

                             @endforeach

                            </div> 
                    
                        </div> 
            </div> 
           
        </div>
                


         <div class="row">
               
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Les Pôles
                    <small>taba9a al soflé</small>
                </h1>
                  @foreach($contents as $content)
                    @if($content->name=="Poles")
                    <p>{{$content->content}}</p>
                    @endif
               @endforeach
            </div>
        </div>


         <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Nos pôles</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">

                    @foreach ($poles as $pole)

                        @if($pole->name == $poles[0]->name)
                             <li class="active">
                        @else
                            <li class="">
                        @endif

                        <a href="#{{$pole->abbreviation}}" data-toggle="tab"><i class="fa fa-tree"></i>{{$pole->name}}</a></li>
                                
                    @endforeach

                </ul>
            </div>
                <div id="myTabContent" class="tab-content" style="text-align: left;">

                    @foreach($poles as $pole)
                        @if($pole->name == $poles[0]->name)
                            <div class="tab-pane fade active in" id="{{$pole->abbreviation}}">
                        @else
                            <div class="tab-pane fade" id="{{$pole->abbreviation}}">
                        @endif
                        
                        <p>{{$pole->description}}</p>
                        <a href="/projects/{{$pole->name}}"><h4>See our projects</h4></a>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="page-header">The Team</h2>
                            </div>
                        </div>

                         <div class="row">
                            
                               @foreach ($users as $user)
                                            
                                            @if($user->pole == $pole->name)
                                                <div class="col-lg-2 col-sm-6 text-center">
                                                    <a class="user-img" href="netlinks-isamm/profile/{{$user->id}}">
                                                        <img class="img-circle img-responsive img-center" src="/img/Members/2016/{{$user->name}}.jpg" alt="">
                                                    </a>
                                                        <h3>{{$user->name}}</h3>
                                                        <p>{{$user->functiondept}}</p>
                                                    <div class="team-links row">
                                                       <a class="col-lg-2 col-lg-offset-1" href="facebook/"><i class="fa fa-facebook " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="insagram/"><i class="fa fa-instagram " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Linkedin"><i class="fa fa-linkedin " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Github"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                       <a class="col-lg-2" href="Netlinks-isamm.com"><i class="fa fa-github " aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            @endif

                                        @endforeach


                        </div>
                    </div>

                    @endforeach
    
        </div><br><br>
        
     

    </div>
</div>
@stop