<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset(' ')}}"/> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap Simple Login Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	<link type="text/css" href="public/assets/css/styles.css">

	<style type="text/css">
		.frm-add {
			width: 500px;
			margin: 0 auto;
		}

		.frm-add .form-group {
			padding-bottom: 15px;
		}

		.login-form form {
			margin-bottom: 15px;
			background: #f7f7f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}

		.login-form {
			width: 25%;
			margin: 0 auto;
		}

		.login-form h2 {
			margin: 0 0 15px;
		}

		.form-control, .btn {
			min-height: 38px;
			border-radius: 2px;
		}

		.btn {        
			font-size: 15px;
			font-weight: bold;
		}
	</style>
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