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
				
				<a href="http://www.sombeo.com/" target="_blank" title="Visitar Sombeo.com">
					<img src="<?= $host ?>/images/projects/sombeo-full.jpeg" title="Sombeo" alt="Sombeo" />
				</a>

			</div>

			<div class="col-md-6 info-project">
				
				<h1 class="page-header">Sombeo <small>Website</small></h1>

				<div class="project-description">

					<h3>About</h3>

					<p>Sombeo is a website based on Wordpress where we post funny things every day. This website has been adapted to our needs: we have modified some Wordpress functionallities and plugins, the main template, etc.</p>
					<p>We have developed various automation process which are executed through crontabs:</p>

					<p>First of them, it crawls the content from many websites. This lets us to publish quickly the best and funniest content from the Internet in our website.</p>
					<p>Another one, it's used to auto-posting pre-defined content in our Facebook page using Facebook SDK. It isn't only about sharing posts, this process uploads the images and videos content to the Facebook page.</p>

				</div>


				<div class="project-technologies">

					<h3>Development</h3>

					

				</div>

				<hr />

			</div>

		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
		<script>$(document).ready(function(){ $('[data-toggle="tooltip"]').tooltip(); });</script>

	</body>	

</html>