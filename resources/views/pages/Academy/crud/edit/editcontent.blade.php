@extends('layouts.academy', ['title' => 'Home'])

@section('content')

<div class="container">
      
      @if($insert==1)
        <div class="alert alert-success">
            <strong>Success!</strong> Your informations were updated.
        </div>
      @endif
        
        <br><br><br>
       {{ Form::open(array('url' => '/webmaster/edit/')) }}
      
       <div class="row">

            <div class="col-lg-3 col-lg-offset-3">

                {{Form::hidden('id', $content[0]->id  )}}

                {{Form::label('Name :')}}<br><br>
                {{Form::label('Page :')}}<br><br>
                {{Form::label('Content :')}}<br><br>

            </div>
            <div class="col-lg-3">

                {{Form::text('name', $content[0]->name )}}<br><br>
                {{Form::text('page', $content[0]->page )}}<br><br>
                {{Form::textarea('content', $content[0]->content)}}<br><br>

            </div>
        </div>
        <div class="row"><br>
            <div class="col-lg-11" style="text-align: center;">{{Form::submit('Save Changes')}}</div>
        </div>
           
    {{ Form::close() }} <br><br><br>


</div>
@endsection
