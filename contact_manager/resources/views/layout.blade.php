<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/jquery-ui-1.11.4.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <script src="/js/jquery-1.11.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app.js"></script>
   @yield('header')
</head>
<body>
	
	@yield('content');

	@yield('footer')
</body>
</html>