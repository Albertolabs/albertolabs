<?php 
	
	$host = "http://www.albertolabs.com/";

	if($_SERVER['SERVER_NAME'] == "localhost")
	{
		$host = "http://localhost/albertolabs/web/";
	}

?>

<html>
	
	<head>
		<title></title>	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<link rel="stylesheet" href="<?= $host ?>/css/projects.css" />
	</head>

	<body>	

		<div class="containter-fluid">


			<div class="col-md-5 img-project">
				
				<img src="<?= $host ?>/images/projects/sombeo-full.jpeg" title="Sombeo" alt="Sombeo" />
					
			</div>

			<div class="col-md-7 info-project">
				
				<h1>Sombeo</h1>



			</div>

		</div>

	</body>	

</html>