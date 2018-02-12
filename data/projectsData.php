<?php

	$descriptionsPath = 'data/projects_descriptions';

	$projectsData = array(

		'lantigua' => array(
			'img_thumb' => 'lantigua-thumb.jpg',
			'img_full' => 'lantigua-full.jpg',
			'img_browser' => 'lantigua-browser.png',
			'title' => 'Lantigua Casa Rural',
			'type' => 'Website',
			'filters' => 'pf-websites',
			'route' => '#',
			'description' => '<p>Lantigua Casa Rural is a website built with WordPress where users can get information about the apartment and the nature environment arounds Hinojosa del duque town.</p><p>We have implemented the "Ruralgest" aparment booking system integration with the website, where the users can book rooms using a simple form.</p>',
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'WordPress', 'PHP 7', 'MySQL', 'Apache', 'RuralGest'),
			'demo' => 'http://www.lantiguacasarural.com/'
		),
		'sombeo' => array(
			'img_thumb' => 'sombeo-thumb.jpg',
			'img_full' => 'sombeo-full.jpg',
			'img_browser' => 'sombeo-browser.png',
			'title' => 'Sombeo',
			'type' => 'Website',
			'filters' => 'pf-websites',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/sombeo.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'WordPress', 'PHP 5', 'MySQL', 'Apache' ),
			'demo' => null
		),
		'perretes' => array(
			'img_thumb' => 'perretes-thumb.jpg',
			'img_full' => 'perretes-full.jpg',
			'img_browser' => 'perretes-browser.png',
			'title' => 'Perretes',
			'type' => 'Website',
			'filters' => 'pf-websites',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/perretes.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'Bootstrap 3', 'Responsive design', 'CodeIgniter 2', 'PHP 5', 'MySQL', 'Apache' ),
			'demo' => 'http://www.perretes.net/'
		),
		'womp' => array(
			'img_thumb' => 'womp-thumb.jpg',
			'img_full' => 'womp-full.jpg',
			'img_browser' => 'womp-browser.png',
			'title' => 'Womp',
			'type' => 'Website',
			'filters' => 'pf-websites',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/womp.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'Bootstrap 3', 'Responsive design', 'PHP 5', 'MySQL' ),
			'demo' => 'http://www.albertolabs.com/assets/images/projects/womp-full.jpg'
		),
		'receptormixto' => array(
			'img_thumb' => 'receptormixto-thumb.jpg',
			'img_full' => 'receptormixto-full.jpg',
			'img_browser' => 'receptormixto-browser.png',
			'title' => 'Receptormixto',
			'type' => 'Software, Web application',
			'filters' => 'pf-websites pf-software',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/receptormixto.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'Bootstrap 3', 'Responsive design', 'PHP 5', 'MySQL', 'Apache' ),
			'demo' => 'http://www.receptormixto99705.com/'
		),
		'easy-eu-cookie-law' => array(
			'img_thumb' => 'wp-easy-eu-cookie-law.jpg',
			'img_full' => 'wp-easy-eu-cookie-law.jpg',
			'img_browser' => 'wp-easy-eu-cookie-law-browser.png',
			'title' => 'Easy Eu Cookie Law',
			'type' => 'Software, WordPress Plugin',
			'filters' => 'pf-websites pf-software',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/easy-eu-cookie-law.html'),
			'tech' => array('WordPress', 'PHP 5', 'Javascript', 'jQuery'),
			'demo' => 'https://es.wordpress.org/plugins/easy-eu-cookie-law/'
		),
		'team-data-repository' => array(
			'img_thumb' => 'team-data-repository-thumb.jpg',
			'img_full' => 'team-data-repository-full.jpg',
			'img_browser' => 'team-data-repository-browser.png',
			'title' => 'Team Data Repository',
			'type' => 'Software, Web application',
			'filters' => 'pf-websites pf-software',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/team-data-repository.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'Bootstrap 2', 'Responsive Design', 'CodeIgniter 2', 'PHP 5', 'MySQL', 'Nginx' ),
			'demo' => null
		),
		'team-data-repository-website' => array(
			'img_thumb' => 'team-data-repository-website-thumb.jpg',
			'img_full' => 'team-data-repository-website-full.jpg',
			'img_browser' => 'team-data-repository-website-browser.png',
			'title' => 'Team Data Repository',
			'type' => 'Website',
			'filters' => 'pf-websites',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/team-data-repository-website.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'Responsive Design', 'CodeIgniter 2', 'PHP 5', 'MySQL', 'Nginx' ),
			'demo' => null
		),
		'blog-reaccionestudio' => array(
			'img_thumb' => 'blog-reaccionestudio-thumb.jpg',
			'img_full' => 'blog-reaccionestudio-full.jpg',
			'img_browser' => 'blog-reaccionestudio-browser.png',
			'title' => 'Blog Reacción Estudio',
			'type' => 'Website',
			'filters' => 'pf-websites',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/blog-reaccionestudio.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'WordPress', 'PHP 7', 'MySQL', 'Ubuntu', 'Nginx', 'Git' ),
			'demo' => 'http://blog.reaccionestudio.com/'
		),
		'reaccionestudio' => array(
			'img_thumb' => 'reaccionestudio-thumb.jpg',
			'img_full' => 'reaccionestudio-full.jpg',
			'img_browser' => 'reaccionestudio-browser.png',
			'title' => 'Reacción Estudio',
			'type' => 'Website',
			'filters' => 'pf-websites',
			'route' => '#',
			'description' => file_get_contents( $descriptionsPath . '/reaccionestudio.html'),
			'tech' => array( 'HTML 5', 'CSS 3', 'Javascript', 'jQuery', 'PHP 7', 'MySQL', 'Ubuntu', 'Nginx', 'Git' ),
			'demo' => 'http://www.reaccionestudio.com/'
		),

	);

	// Generate project details url
	$projectUrl = "index.php?p=show_project&r=";

	foreach($projectsData as $key => $value)
	{
		$projectsData[$key]["route"] = $projectUrl . $key;
	}