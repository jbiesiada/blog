<!DOCTYPE html>
<html>
<head>

	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('errors.list')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			@yield('content')
			<a class="btn btn-primary" href="/">Powrót</a>
		</div>
	</div>
</div>
</body>
</html>