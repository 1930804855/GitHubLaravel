<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>团队项目 - @yield('title')</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel框架团队开发</a>
    </div>
    <div>
        <p class="navbar-text">2组</p>
    </div>
    </div>
</nav>
@section('sidebar')
	@include('admin/public/left')
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>