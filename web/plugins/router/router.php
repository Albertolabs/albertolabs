<?php

	function loadRoute($routing)
	{
		$requestedRoute = ! empty($_GET['p']) ? $_GET['p'] : null;

		if( empty($requestedRoute) )
		{
			$requestedRoute = defaultRoute;
		}
		else if( ! empty($requestedRoute) && ! in_array($requestedRoute, $routing) )
		{
			// not found
			echo 'no existe';
		}

		require $routing[$requestedRoute];
	}