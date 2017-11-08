<?php

	class Router
	{
		private $routing;

		public function __construct($routing=array())
		{
			$this->routing = $routing;
		}

		public function loadRoute()
		{
			$requestedRoute = ! empty($_GET['p']) ? $_GET['p'] : null;

			if( empty($requestedRoute) )
			{
				$requestedRoute = defaultRoute;
			}
			else if( ! empty($requestedRoute) && ! array_key_exists($requestedRoute, $this->routing) )
			{
				// page not found
				include 'themes/error404.php';
				return;
			}

			require $this->routing[$requestedRoute];
		}

		public function getCurrentRoute()
		{
			$requestedRoute = ! empty($_GET['p']) ? $_GET['p'] : null;

			if( empty($requestedRoute) )
			{
				$requestedRoute = defaultRoute;
			}
			else if( ! empty($requestedRoute) && ! array_key_exists($requestedRoute, $this->routing) )
			{
				$requestedRoute = 'error404';
			}

			return $requestedRoute;
		}

		public function show404Error()
		{
			include 'themes/error404.php';
			return;
		}
	}

	