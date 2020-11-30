<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{url('js/bootstrap.min.css')}}"></script>
    <title>IPT Semis CourseWare</title>
</head>
<body>

    @include('nav')

    <div class="container main-con">
        @yield('content')
    </div>

    <footer class="">
        Copyright &copy; 2020. Jamex CourseWare, Inc. <br>
        All rights reversed.
    </footer>
</body>
</html>
