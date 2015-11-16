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
		<link rel="stylesheet" href="<?= $host ?>include/font-mfizz/font-mfizz.css">
	</head>

	<body>	

		<div class="containter-fluid">

			<div class="col-md-5 img-project">
				
				<a href="http://www.sombeo.com/" target="_blank" title="Visitar Sombeo.com">
					<img src="<?= $host ?>/images/projects/sombeo-full.jpeg" title="Sombeo" alt="Sombeo" />
				</a>

			</div>

			<div class="col-md-6 info-project">
				
				<h1 class="page-header">Sombeo <small>Website</small></h1>

				<div class="project-description">
					<p>Sombeo is a website based on Wordpress where we post funny things every day. This website has been adapted to our needs: we have modified some Wordpress open source plugins, the main template, etc.</p>
					<p>Automation process for crawling the content from other websites has been developed and lets us to publish quickly the best and funniest content from the Internet in our website.</p>
				</div>

				<hr />

				<div class="project-technologies">

					<h3>Development</h3>

					<a href="#" class="wordpress" data-toggle="tooltip" data-placement="bottom" title="Wordpress"><i class="icon-wordpress"></i></a>
					<a href="#" class="html5" data-toggle="tooltip" data-placement="bottom" title="HTML 5"><i class="icon-html"></i></a>
					<a href="#" class="css3" data-toggle="tooltip" data-placement="bottom" title="CSS 3"><i class="icon-css"></i></a>
					<a href="#" class="javascript" data-toggle="tooltip" data-placement="bottom" title="Javascript - jQuery"><i class="icon-javascript"></i></a>
					<a href="#" class="php" data-toggle="tooltip" data-placement="bottom" title="PHP"><i class="icon-php"></i></a>
					<a href="#" data-toggle="tooltip" data-placement="bottom" title="Shell - Cronjobs"><i class="icon-shell"></i></a>
					<a href="#" data-toggle="tooltip" data-placement="bottom" title="Responsive design"><i class="icon-mobile-device"></i></a>			
					<a href="#" class="debian" data-toggle="tooltip" data-placement="bottom" title="Debian"><i class="icon-debian"></i></a>
					<a href="#" class="nginx" data-toggle="tooltip" data-placement="bottom" title="Nginx"><i class="icon-nginx"></i></a>
					<a href="#" class="mysql" data-toggle="tooltip" data-placement="bottom" title="MySQL"><i class="icon-mysql"></i></a>

				</div>

				<hr />

			</div>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		<script>$(document).ready(function(){ $('[data-toggle="tooltip"]').tooltip(); });</script>

	</body>	

</html>