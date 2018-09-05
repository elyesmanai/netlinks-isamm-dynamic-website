@extends('layouts.front', ['title' => 'About'])

@section('content')  

<div class="container">

    <br><br>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header ab" style="text-align: center;">Qui sommes-nous?</h1>
            </div>
        </div>

    <br><br>

        <div class="row who">
           
            <div class="col-md-6">
                @foreach($contents as $content)
                    @if($content->name =="Netlinks ISAMM Foundation")
                    <p>{{$content->content}}</p>
                    @endif
               @endforeach
            </div>
             <div class="col-md-6"><img style="width:100%; margin-left: 0%;" src="/img/Presentation/who1.jpg"></div>
        </div>

    <br><br>

        <div class="row who">

            <div class="col-md-6"><img style="width:100%;" src="/img/Presentation/who2.jpg"></div>
            <div class="col-md-6">
                 @foreach($contents as $content)
                    @if($content->name=="Netlinks ISAMM Activities")
                     <p>{{$content->content}}</p>
                    @endif
               @endforeach
            </div>
          
        </div>

    <br><br>

        <div class="row who">
     
            <div class="col-md-6">
                 @foreach($contents as $content)
                    @if($content->name=="Netlinks ISAMM Vision")
                    <p>{{$content->content}}</p>
                    @endif
               @endforeach
            </div>
            <div class="col-md-6"><img style="width:100%;" src="/img/Presentation/who3.jpg"></div>
            
        </div>

    <br><br><br><br>

</div>

@endsection