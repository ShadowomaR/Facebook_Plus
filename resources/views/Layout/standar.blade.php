<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="{{ asset('css/bootstrap-4.0.0-dist/ajax/jquery.min.js') }}"></script>
        <!-- <script src="{{ asset('css/bootstrap-4.0.0-dist/ajax/popper.min.js')}}"></script> -->
        <script src="{{ asset('css/bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
<title>{{ isset($title) ? $title .' - ' : ''}}Likes</title>
</head>
<body>
    @include('layout/Navbar')
    
    @yield('content')

</body>
</html>