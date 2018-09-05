@extends('layouts.front', ['title' => 'About'])

@section('content')  

<div class="container">

    <br><br>
    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header ab" style="text-align: center;">L'association Netlinks</h1>
            </div>
        </div>



        <div class="row who">
            <div class="col-md-6"><br>
               @foreach($contents as $content)
                    @if($content->name=="Netlinks Foundation")
                    <p>{{$content->content}}</p>
                    @endif
               @endforeach
            </div>
                <div class="col-md-6"><img style="width:100%; margin-left: 0%;" src="/img/Presentation/asso1.jpg"></div>

        </div>

    <br><br>

        <div class="row who">
            
            <div class="col-md-6"><img style="width:100%;" src="/img/Presentation/asso2.jpg"></div>
            <div class="col-md-6"><br>
                @foreach($contents as $content)
                    @if($content->name=="Netlinks Activities")
                        <p>{{$content->content}}</p>       
                    @endif
               @endforeach
            </div>
        </div>

    <br><br>

        <div class="row who">
            <div class="col-md-6">
             @foreach($contents as $content)
                    @if($content->name=="Netlinks Day")
                    <p>{{$content->content}}</p>
                    @endif
               @endforeach 
            </div>
            <div class="col-md-6"><img style="width:100%;" src="/img/Presentation/asso3.jpg"></div>

        </div>

    <br><br><br><br>

</div>

@endsection