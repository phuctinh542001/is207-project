<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="{{asset('')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="./assets/icon/favicon.ico" sizes="100x100">
	<link rel="apple-touch-icon" href="./assets/icon/favicon.ico">

    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/news.css">
    <link rel="stylesheet" href="./assets/css/event.css">
    <link rel="stylesheet" href="./assets/css/sign.css">
    <link rel="stylesheet" href="./assets/css/artdetail.css">
    <link rel="stylesheet" href="./assets/css/main.css">

    <title>Múic - Nghe nhạc cực phê</title>
</head>
<body>
	<!-- Top of the Website -->
	@yield('top')
	
	<!-- Sidebar -->
	@yield('sidebar')
	<!-- End Sidebar -->

	<!-- Header -->
	@include('header')
	<!-- End Header -->

	@include('player')

	<!-- Main Content -->
	@yield('content')
	<!-- End Main Content -->
	
	<!-- Footer -->
	@include('footer')
	<!-- End Footer -->

	<script type="text/javascript" src="./assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
	<script type="text/javascript" src="./assets/js/player.js"></script>
</body>
</html>

