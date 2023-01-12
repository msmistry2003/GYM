<!DOCTYPE html>
<html>
    <head>
       
        <title>Home</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body background="proj_pics\kettle-bell-5434989_1920.jpg">
        <div style="background-color:black,opacity :white ;" class="lr">
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="text-decoration:none" href="{{ route('login') }}">LOGIN</a>&nbsp; |&nbsp;

                        @if (Route::has('register'))
                            <a style="text-decoration:none"  href="{{ route('register') }}">REGISTER </a> 
                        @endif
                    @endauth
            @endif

                <h1 class="head">
                    GYM MANAGEMENT SYSTEM
                </h1>
        </div>
    </body>
</html>
