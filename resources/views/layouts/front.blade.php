<!DOCTYPE html>
<html>
<head>

	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link rel="stylesheet" href="/css/app.css">

</head>
<body>
@include('navigations.front')
@include('errors.list')
<div class="container">
<div class='row'>
@yield('content')
</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
@yield('scripts')
</body>
</html>