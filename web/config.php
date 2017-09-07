<?php

	define('app_env', 'dev');
	define('default_language', 'en');
	define('defaultRoute', 'home');

	if(app_env == 'dev')
	{
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}