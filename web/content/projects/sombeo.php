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
		<link rel="stylesheet" href="<?= $host ?>/css/imports/shortcodes/buttons.css" />
	</head>

	<body>	

		<div class="containter-fluid">

			<div class="col-md-5 img-project">
				
				<a href="http://www.sombeo.com/" target="_blank" title="Visitar Sombeo.com">
					<img src="<?= $host ?>/images/projects/sombeo-full.jpeg" title="Sombeo" alt="Sombeo" />
				</a>

			</div>

			<div class="col-md-7 info-project">
				
				<h1 class="page-header">Sombeo <small>Website</small></h1>

				<div class="project-description">

					<h3>About</h3>

					<p>Sombeo is a website based on Wordpress where we post funny things every day. This website has been adapted to our needs: we have modified some Wordpress functionalities and plugins, the main template, etc.</p>
					<p>We have developed various automation process whose are executed through crontab:</p>
					<p>First of them, gets content from various websites. After this, content must be approved by administrators for being published in the main page. This lets us to publish quickly the best and funniest content from the Internet in our website.</p>
					<p>Another one, it is a process used to auto-posting pre-defined content in our Facebook page using Facebook SDK. It isn't only about sharing posts, this process uploads the images and videos content to the Facebook page.</p>

				</div>

				<div class="project-technologies">

					<h3>Development</h3>

					<div class="tagcloud">
						<p>
							<a href="#">HTML 5</a>
							<a href="#">CSS 3</a>
							<a href="#">JAVASCRIPT</a>
							<a href="#">JQUERY</a>
							<a href="#">RESPONSIVE DESIGN</a>
						</p>
						<div class="clearfix"></div>

						<p>
							<a href="#">WORDPRESS</a>
							<a href="#">PHP</a>
							<a href="#">MYSQL</a>
						</p>
						<div class="clearfix"></div>

						<p>
							<a href="#">DEBIAN</a>
							<a href="#">NGINX</a>
							<a href="#">GIT</a>
						</p>
					</div>

				</div>
				<div class="clearfix"></div>

				<hr />

				<div class="text-center">
					<a class="button button-desc" title="Visit website" href="http://www.sombeo.com/" target="_blank"><div>Visit website<span>http://www.sombeo.com/</span></div></a>
				</div>

			</div>

		</div>

	</body>	

</html>