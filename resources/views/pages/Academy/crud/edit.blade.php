@extends('layouts.dashboard', ['title' => 'edit'])

@section('content')
<br><br><br>
    @if($insert==1)
        <div class="alert alert-success">
            <strong>Success!</strong> Your informations were updated.
        </div>
    @endif
        
    
    {{ Form::open(array('url' => '/admin/'.$part.'/edit/' )) }}
      
    <div class="row">

            <div class="col-lg-3 col-lg-offset-3">
                
                @foreach($columns as $column)
                    @if($column == 'id')
                        {{Form::hidden('id', $contents[0]->id )}}
                    @endif
                    {{Form::label($column .' :')}}<br><br>
                @endforeach

            </div>
            <div class="col-lg-3">

                @foreach($columns as $column)
                    @if($column == 'email')
                        {{Form::email('email', $value = $contents[0]->email, $attributes = array())}}<br><br>
                    @endif
                        {{Form::text($column, $contents[0]->$column )}}<br><br>
                @endforeach

            </div>
    </div>

    <div class="row"><br>
        <div class="col-lg-11" style="text-align: center;">{{Form::submit('Save Changes')}}</div>
    </div>
           
    {{ Form::close() }}

    
<div class="row"><br>
        <div class="col-lg-11" style="text-align: center;"><a href="/admin/{{$part}}/delete/{{$contents[0]->id}}"><button class="btn btn-danger">Delete this</button></a></div>
    </div>

@endsection
