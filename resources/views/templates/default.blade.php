<html lang="en">
<head>
	<title>e-health</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Optional theme -->
	 <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container no-margin">
		@include('templates.partials.navigation')
		@include('templates.partials.alerts')
	</div>
		
		@yield('content')
<div class="container-fluid">
		@include('templates.partials.footer')
</div>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>