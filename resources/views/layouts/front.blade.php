<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-4.7.0\css/font-awesome.min.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        

        <div class="main-nav navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="{{url('/')}}"><img class="img-responsive" style="margin-top: -25%" src="favicon.ico" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                     <p class="navbar-text"> <em><strong> <span style="color:white">"We don't use technology</span>,<span style="color: skyblue"> We create it</span>"</strong> </em></p>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Presentation<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('/about/Netlinks_ISAMM')}}">Who are we?</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/about/History')}}">History</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/about/Netlinks_Association')}}">The NetLinks association </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Meet The Team <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{url('/family')}}">The family</a>
                                    </li>
                                    <li class="dropdown-header">Coming Soon</li>

                                    <li class="disabled">
                                        <a href="#">Alumni</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">Work With Us<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Coming Soon</li>

                                    <li class="disabled">
                                        <a href="#">Our Partners</a>
                                    </li>
                                    <li class="disabled">
                                        <a href="#">Our Clients</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/projects')}}">Netlinks ISAMM</a></li>
                                     <li role="separator" class="divider"></li>
                                    <li class="dropdown-header">Coming Soon</li>

                                    <li class="disabled"><a href="#">Members</a></li></ul>
                            </li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                </div>
            </div>
        </div>



        @yield('content')
  </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
    //Hide clear btn on page load
    $('#clear').hide();
    //Add text input to list on button press
    $('#add').click(function(){
        //var toAdd gets the value of the input field
        var toAdd = $("input[name=checkListItem]").val();
        //Append list item in its own div with a class of item into the list div
        //It also changes the cursor on hover of the appended item 
        $('.list').append('<div class="item">' + toAdd + '</div>');
        //fade in clear button when the add button is clicked
        $('#clear').fadeIn('fast');
        //Clear input field when add button is pressed
        $('input').val('');
    });
    //Checks off items as they are pressed
    $(document).on('click', '.item', function() {
        //Chamge list item to red
        $(this).css("color", "#cc0000");
        //Change cursor for checked item
        $(this).css("cursor","default");
        //Strike through clicked item while giving it a class of done so it will be affected by the clear
        $(this).wrapInner('<strike class="done"></strike>');
        //Add the X glyphicon
        $(this).append(" " + '<span class="glyphicon glyphicon-remove done" aria-hidden="true"></span>');
        //Stops checked off items from being clicked again
        $(this).prop('disabled', true);
    });
    //Removes list items with the class done
    $('#clear').click(function(){
        $('.done').remove('.done');
    });
});
    </script>
</body>
</html>
