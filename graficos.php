<!DOCTYPE html>
<html>
<head>
	<title>-.-.-. - Gráficos - .-.-.-</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta name="viewport" content="initial-scale=1.0">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
				<div class="col-md-4">
					<?php include 'terceiroGrafico.php' ?>
		</div>
		<div class="col-md-4">
			<?php include 'segundoGrafico.php' ?>
		</div>
	</div>
	</div>
	<div class="container">
		<div class="col-md-8" style="background-color: #000">
			<div style="margin-top: -40px">
			<?php include 'primeiroGrafico.php' ?>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>