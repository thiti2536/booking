<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Booking Room</title>
<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
	.topbar{background-color:#00BFFF !important; border-bottom:solid #BFEFFF 3px !important; height:60px !important}
</style>
</head>
<body>

    <nav class="navbar navbar-default navbar-fixed-top topbar">
		สวัสดี
    </nav>


@yield('content')




<script type="text/javascript" src="{{asset('jquery/jquery-3.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>