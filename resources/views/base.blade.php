<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <title>IPT FINALs CourseWare</title>
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
<script>
    $(document).ready(function(){
        $('.form-group input').click(function(e) {
            $(this).parent().removeClass('has-error');
        });

        $('.form-group select').on('change', function(e) {
            $(this).parent().removeClass('has-error');
        });

       
    });
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip('show');   
    });
    $(function () {
        $('[data-toggle="tooltipcheck"]').tooltip()
    })
</script>
</html>
