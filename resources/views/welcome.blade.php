<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("bg.jpg");
                background-size: 100%;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 80vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a:link, a:visited {
  background-color: #9A6FB6;
  color: white;
  padding: 15px 165px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
}

a:hover, a:active {
  background-color: purple;
}
        </style>
    </head>
    <body>
        <!-- <div style="background-image: url('bg.jpg');"></div> -->
      
            <!-- <div class="top-right links"> -->
            <!-- @if (Route::has('login','admin/login','student/login')) -->
            <!--     <div class="top-right links">
                    @if (Auth::guard('admin')->check())
                     <a href="{{ url('/login') }}">Teacher Login</a>
                        <a href="{{ route('login.admin') }}">Admin Login</a>
                        <a href="{{ route('login.student') }}">Student Login</a>
                    @elseif (Auth::guard('student')->check())
                        <a href="{{ url('/login') }}">Teacher Login</a>
                        <a href="{{ route('login.admin') }}">Admin Login</a>
                        <a href="{{ route('login.student') }}">Student Login</a>
                    @elseif (Auth::check())
                        <a href="{{ url('/login') }}">Teacher Login</a>
                        <a href="{{ route('login.admin') }}">Admin Login</a>
                        <a href="{{ route('login.student') }}">Student Login</a>       
                    @else
                        <a href="{{ url('/login') }}">Teacher Login</a>
                        <a href="{{ route('login.admin') }}">Admin Login</a>
                        <a href="{{ route('login.student') }}">Student Login</a>
                    @endif
                </div> -->
            <!-- @endif -->
            <div class="container-fluid" style="margin-top: 100px; margin-left: 150px; border-radius: 20px">
                <div class="row">
                    <div class="col-md-2-offset col-md-4" style="background-color: white;border-radius: 8px">
                        <h1 style="font-family: Brush Script MT">Specious knowledge School Management System</h1>
                        <br><br><br>
                        <div>
                        @if (Auth::guard('admin')->check())
                     <a href="{{ url('/login') }}">Teacher Login</a><br><br><br>
                        <a href="{{ route('login.admin') }}">Admin Login</a><br><br><br>
                        <a href="{{ route('login.student') }}">Student Login</a><br><br><br><br><br><br><br><br>
                    @elseif (Auth::guard('student')->check())
                        <a href="{{ url('/login') }}">Teacher Login</a><br><br><br>
                        <a href="{{ route('login.admin') }}">Admin Login</a><br><br><br>
                        <a href="{{ route('login.student') }}">Student Login</a><br><br><br><br><br><br><br><br>
                    @elseif (Auth::check())
                        <a href="{{ url('/login') }}">Teacher Login</a><br><br><br>
                        <a href="{{ route('login.admin') }}">Admin Login</a><br><br><br>
                        <a href="{{ route('login.student') }}">Student Login</a><br><br><br><br><br><br><br><br>
                    @else
                        <a href="{{ url('/login') }}">Teacher Login</a><br><br><br>
                        <a href="{{ route('login.admin') }}">Admin Login</a><br><br><br>
                        <a href="{{ route('login.student') }}">Student Login</a><br><br><br><br><br><br><br><br>
                    @endif
                </div>

                        
                    </div>
                <div class="col-md-6" style="background-color: #9A6FB6;border-radius: 8px">
                <img src="school.png" style="height: 500px; width: 600px">
            </div>
        </div>
    </div>

            

                
            </div>
        </div>
    </body>
</html>
