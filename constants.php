<?php

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	//to acces filesystem
	define('APP',ROOT.'app'.DS);
	define('APP_W',basename($_SERVER['SCRIPT_NAME']));
        
?>