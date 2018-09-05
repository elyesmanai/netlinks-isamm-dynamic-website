@extends('layouts.front', ['title' => 'About'])

@section('content')  

<div class="container"><br><br>
  <div class="row">
    <div class="col-lg-12">
      <h3 class="text-center">Our activities through time</h3>
       @foreach($contents as $content)
                    @if($content->name=="History")
                     <p>{{$content->content}}</p>
                    @endif
               @endforeach
      
      <br><br>





      <ul class="timeline">
        <?php $n = 1; ?>
        @foreach($activities as $activity)
            @if($n % 2 == 1)
             <li>
            @else
             <li class="timeline-inverted">
            @endif

                <a href="/activities/{{$activity->id}}">
                <div class="timeline-image">
                  <img class="img-circle img-responsive" src="/img/Activities/History/{{$activity->name}}.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">{{$activity->headline}}</h4>
                    <h4>{{$activity->date}}</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">
                     {{$activity->content}}
                    </p>
                  </div>
                </div>
                <div class="line"></div></a>
        
        @endforeach

      </ul>





    </div>
  </div>
</div>

@endsection