@extends('layouts.academy', ['title' => 'Home'])

@section('content')
<div class="container-fluid">
    
    <div class="row">

        <div class="col-lg-12">

            <div class="alert row">

                <div class="col-lg-10">
                    <h2 style="margin-top: 0%;">Website Content</h2> This page can only be accessed by the Webmasters
                </div>
                
            </div> 
        </div>
        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table id="myTable2">
                <tr class="row">
                    <th onclick="sortTable(0)" class="col-lg-1"> ID<span class="caret"></span></th>
                    <th onclick="sortTable(1)" class="col-lg-2">Name<span class="caret"></span></th>
                    <th onclick="sortTable(2)" class="col-lg-2">Page<span class="caret"></span></th>
                    <th onclick="sortTable(3)" class="col-lg-6">Content<span class="caret"></span></th>
                    <th onclick="sortTable(4)" class="col-lg-1">Actions</th>
                    
                  
                </tr>

                @foreach($contents as $content)
                   <tr class="row">
                       <td class="col-lg-1">{{$content->id}}</td>
                       <td class="col-lg-2">{{$content->name}}</td>
                       <td class="col-lg-2">{{$content->page}}</td>
                       <td class="col-lg-6"><br>{{$content->content}}</td>
                       <td class="col-lg-1"><a href="/webmaster/edit/{{$content->id}}"><button>Edit</button></a></td>
                   </tr>     
                @endforeach
            
            </table>
            <br><br><br><br>
        </div>
    </div>
</div>
@endsection
