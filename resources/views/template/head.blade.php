<html>
<head>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_new.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <title>{{$title}}</title>
    <link rel="icon" href="{{URL::asset('/image/ELement_Hydro.svg')}}"/>
</head>

<body>
    @yield('navi')
    @yield('bodhi')
</body>

</html>