@extends('layouts.academy', ['title' => 'Home'])

@section('content')
<div class="container"><br><br><br><br><br>
    
    @if($insert==1)
        <div class="alert alert-success">
            <strong>Success!</strong> Your informations were updated.
        </div>
    @endif

    {{ Form::open(array('url' => '/settings')) }}
        <div class="row">

            <div class="col-lg-3 col-lg-offset-3">

                {{Form::label('Name :')}}<br><br>
                {{Form::label('Email :')}}<br><br>
                {{Form::label('password :')}}<br><br>

            </div>
            <div class="col-lg-3">

                {{Form::text('name',  Auth::user()->name )}}<br><br>
                {{Form::hidden('id', Auth::user()->id )}}
                {{Form::email('mail', $value = Auth::user()->email, $attributes = array())}}<br><br>
                {{Form::password('password')}}<br>

            </div>
            
        </div>
        <div class="row"><br>
            <div class="col-lg-11" style="text-align: center;">{{Form::submit('Save Changes')}}</div>
        </div>
           
    {{ Form::close() }}

    
   
       
        

        

    

	<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

@endsection
