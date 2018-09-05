@extends('layouts.dashboard', ['title' => 'edit'])

@section('content')
<br><br><br>
    
    {{ Form::open(array('url' => '/admin/'.$part.'/add/' )) }}
      
    <div class="row">

            <div class="col-lg-3 col-lg-offset-3">
                
                @foreach($columns as $column)
                    @if($column == 'id')
                    @elseif($columns == 'email')
                     {{Form::email('email')}}<br><br>
                    @endif
                    {{Form::label($column .' :')}}<br><br>
                @endforeach

            </div>
            <div class="col-lg-3">

                @foreach($columns as $column)
                    @if($column == 'email')
                        {{Form::email('email')}}<br><br>
                    @endif
                        {{Form::text($column)}}<br><br>
                @endforeach

            </div>
    </div>

    <div class="row"><br>
        <div class="col-lg-11" style="text-align: center;">{{Form::submit('Create')}}</div>
    </div>
           
    {{ Form::close() }}

@endsection
