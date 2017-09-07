<?php

	function loadRoute($routing)
	{
		$requestedRoute = ! empty($_GET['p']) ? $_GET['p'] : null;

		if( empty($requestedRoute) )
		{
			$requestedRoute = defaultRoute;
		}
		else if( ! empty($requestedRoute) && ! array_key_exists($requestedRoute, $routing) )
		{
			// page not found
			require 'themes/error404.php';
			return;
		}

		require $routing[$requestedRoute];
	}