@extends('layouts.academy', ['title' => 'Home'])

@section('content')
<div class="container">

    <h1> Welcome to Netlinks ISAMM, {{ Auth::user()->name }}</h1>

    <h5>You have chosen the {{ Auth::user()->pole }}  pole. </h5>
    
    

    
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

@endsection
