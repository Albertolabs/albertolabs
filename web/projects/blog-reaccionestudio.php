<?php 
	
	$host = "http://www.albertolabs.com/";

	if($_SERVER['SERVER_NAME'] == "localhost")
	{
		$host = "http://localhost/albertolabs/web/";
	}

	// config vars
	$nombre_proyecto 	= "Blog Reaccion Estudio";
	$url_img_prev 		= $host . "images/projects/blog-reaccionestudio-full.jpg";
	$url_proyecto 		= "http://blog.reaccionestudio.com/";

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
				
				<table style="height:100%">
					<tr>
						<td style="vertical-align:middle;">
							<a href="<?= $url_proyecto ?>" target="_blank" title="Visitar <?= $nombre_proyecto ?>">
								<img src="<?= $url_img_prev ?>" title="<?= $nombre_proyecto ?>" alt="<?= $nombre_proyecto ?>" />
							</a>
						</td>
					</tr>
				</table>

			</div>

			<div class="col-md-7 info-project">
				
				<h1 class="page-header"><?= $nombre_proyecto ?> <small>Website</small></h1>

				<div class="project-description">

					<h3>About</h3>

					<p>Reaccionestudio is a web development and graphic design studio founded by young people from Spain who love web development, graphic design, photography, video production, etc.</p>
					<p>Reaccionestudio blog has been developed with Wordpress. Here they post tutorials, tips, snippets, news and new projects.</p>

				</div>

				<div class="project-technologies">

					<h3>Development</h3>

					<div class="tagcloud">
						<p>
							<a href="#">HTML 5</a>
							<a href="#">CSS 3</a>
							<a href="#">JAVASCRIPT</a>
							<a href="#">JQUERY</a>
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
					<a class="button button-desc" title="Visit website" href="<?= $url_proyecto ?>" target="_blank"><div class="text-center">View website<span><?= $url_proyecto ?></span></div></a>
				</div>

			</div>

		</div>

	</body>	

</html>