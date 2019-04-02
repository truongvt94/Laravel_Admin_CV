<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset(' ')}}"/> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap Simple Login Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	@yield('content')
	<script src="public/js/scripts.js" type="text/javascript"></script>
	<script type="text/javascript">
		$( function() {
			$( "#datepicker" ).datepicker({
				dateFormat: "yy-mm-dd",
				changeYear: true
			});
		});
	</script>
</body>
</html>