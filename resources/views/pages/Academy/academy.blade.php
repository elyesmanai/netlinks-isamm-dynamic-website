@extends('layouts.academy', ['title' => 'Academy'])

@section('content')
<div class="container">

    <div class="welcome">
        <h1>Netlinks Academy</h1>
        <h2>Learn, Create, Share.</h2>
    </div>

</div>
<div class="container-fluid">

    <div class="row main-track-container">
        
        <div class="col-lg-2"></div>
    
            <div class="col-lg-3 main-track">
                    <h3>{{Auth::user()->pole}}</h3>
                    <img src="" alt="">
                    <a href="academy/{{Auth::user()->pole}}/courses">See the tracks</a>
            </div>

            <div class="col-lg-4 col-lg-offset-1">
                <h2>Hi {{Auth::user()->name}}</h2>
                <h2>Begin learning ! </h2>
            </div>

    </div>
</div>
<div class="container">

    <div class="row tracks">
        <h2>Or try our other tracks : </h2> <br>
        

        @foreach ($poles as $pole) 

            @if($pole->name ==  Auth::user()->pole )
            @else
                <div class="col-lg-3 track">

                    <h3>{{$pole->name}}</h3>

                    <img src="" alt="">
                    <a href="academy/{{$pole->name}}/courses">See the tracks</a>
                </div>
            @endif

        @endforeach


    </div>
</div>
@endsection
