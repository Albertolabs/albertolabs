<?php 
	
	$host = "http://www.albertolabs.com/";

	if($_SERVER['SERVER_NAME'] == "localhost")
	{
		$host = "http://localhost/albertolabs/web/";
	}

	// config vars
	$nombre_proyecto 	= "Womp";
	$url_img_prev 		= $host . "images/projects/womp-full.jpg";
	$url_proyecto 		= $url_img_prev;

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
				
				<a href="<?= $url_proyecto ?>" target="_blank" title="Visitar <?= $nombre_proyecto ?>">
					<img src="<?= $url_img_prev ?>" title="<?= $nombre_proyecto ?>" alt="<?= $nombre_proyecto ?>" />
				</a>

			</div>

			<div class="col-md-7 info-project">
				
				<h1 class="page-header"><?= $nombre_proyecto ?> <small>Website</small></h1>

				<div class="project-description">

					<h3>About</h3>

					<p>Womp is a young web development company which offers all kind of custom web solutions for their customers.</p>
					<p>We developed the last website version for Womp, creating a custom CMS and a responsive design with Bootstrap 3.</p>
					<p>Actually, Womp isn't using this website design, but you can see a theme preview in the left image or clicking on the '<i>View template</i>' button. </p>

				</div>

				<div class="project-technologies">

					<h3>Development</h3>

					<div class="tagcloud">
						<p>
							<a href="#">HTML 5</a>
							<a href="#">CSS 3</a>
							<a href="#">JAVASCRIPT</a>
							<a href="#">JQUERY</a>
							<a href="#">BOOTSTRAP 3</a>
							<a href="#">RESPONSIVE DESIGN</a>
						</p>
						<div class="clearfix"></div>

						<p>
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
					<a class="button button-desc" title="Visit template" href="<?= $url_proyecto ?>" target="_blank"><div>View template</div></a>
				</div>

			</div>

		</div>

	</body>	

</html>