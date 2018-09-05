@extends('layouts.dashboard', ['title' => 'dashboard'])

@section('content')

  <div class="row">
          <div class="col-lg-12">
              <div class="alert row">
                  <div class="col-lg-10">
                      <h2 style="margin-top: 0%;">Netlinks {{$part}}</h2> This page can only be accessed by the admins.
                  </div>
                  <div class="col-lg-2">
                      <a href="/admin/{{$part}}/add"><button class="btn btn-success">Add a new {{$part}}</button></a>
                  </div>
              </div> 
          </div>     
  </div>


  <div class="row">
        <div class="col-lg-12">
            <table id="myTable2">
                <tr class="row">

                    @php $i=0; @endphp
                    @foreach($columns as $column)
                      @unless($column == 'remember_token' || $column == 'password' || $column == 'functionbureau' || $column == 'department' || $column == 'created_at' || $column == 'updated_at' )
                        <th onclick="sortTable({{$i}})" class="col-lg-1">{{$column}}<span class="caret"></span></th>
                        @php $i++; @endphp
                      @endunless
                    @endforeach
                    <th onclick="sortTable({{$i}})" class="col-lg-1">Actions</th>

                </tr>

                
                  @foreach($datas as $data)
                      <tr class="row">
                    @foreach($columns as $column)
                      
                             @unless($column == 'remember_token' || $column == 'password' || $column == 'functionbureau' || $column == 'department' || $column == 'created_at' || $column == 'updated_at')
                              
                                @if($column == 'pole')
                                   <?php $arr = explode(' ',trim($data->pole)); ?>
                                   <td class="col-lg-1">{{$arr[0]}}</td>
                                @else
                                  <td class="col-lg-1">{{$data->$column}}</td>
                                @endif
                                
                            @endunless
                       
                   @endforeach

                     <td class="col-lg-1"><a href="/admin/{{$part}}/edit/{{$data->id}}"><button>Edit</button></a></td>
                      </tr>  
                  @endforeach
            </table>
            <br><br><br><br>
        </div>
  </div>

@endsection