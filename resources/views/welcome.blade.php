<!DOCTYPE html>
<html>
    <head>
       
        <title>Home</title>

        <link rel="stylesheet" href="resources\css\app.css">
        
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div>
                <h1 text="white">
                    GYM MANAGEMENT SYSTEM
                </h1>
            </div>
        </div>
    </body>
</html>
