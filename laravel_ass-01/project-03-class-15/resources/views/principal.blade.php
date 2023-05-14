<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') | Ultimate Task Management</title>

    {{--style css link--}}
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

    {{--header section include--}}
    @include('includes.header')

    {{--main section--}}
    @yield('display')

    @yield('banner')

    {{--footer section include--}}
    @include('includes.footer')


    {{--fontawesome kit--}}
    <script src="https://kit.fontawesome.com/c8bb01c38c.js" crossorigin="anonymous"></script>
</body>
</html>
