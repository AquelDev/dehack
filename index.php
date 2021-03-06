<?php
if(file_exists('vendor/autoload.php')){
	require 'vendor/autoload.php';
} else {
	echo "<h1>Please install via composer.json</h1>";
	echo "<p>Install Composer instructions: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
	echo "<p>Once composer is installed navigate to the working directory in your terminal/command promt and enter 'composer install'</p>";
	exit;
}

if (!is_readable('app/core/config.php')) {
	die('No config.php found, configure and rename config.example.php to config.php in app/core.');
}
if ($_GET['debug']) {
	echo $_SERVER['REMOTE_ADDR'];
}
$array = array('87.116.35.132', '73.196.6.197', '131.125.11.1', '62.44.135.164');
if (!in_array($_SERVER['REMOTE_ADDR'], $array)) {
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Dehack - Coming Soon</title>
 </head>
 <body>
  Here will Dehack be opening up anytime soon! Please follow this page or #kslink for any progress being made.
 </body>
</html>
<?php
die();
}
/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
	define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but production will hide them.
 */

if (defined('ENVIRONMENT')){

	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
		break;

		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}

}

//initiate config
new \core\config();

//create alias for Router
use \core\router,
    \helpers\url;

//define routes
Router::any('', '\controllers\index@home');
Router::any('browser', '\controllers\browser@index');
Router::any('process', '\controllers\process@index');
Router::any('home', '\controllers\welcome@index');
Router::any('processes', '\controllers\software@index');
Router::any('files', '\controllers\files@index');

/* POST */
Router::post('login', '\controllers\login@post');
Router::post('browse', '\controllers\browse@post');

/* GET */
Router::get('profile/(:any)', '\controllers\profile@index');

//if no route found
Router::error('\core\error@index');

//turn on old style routing
Router::$fallback = false;

//execute matched routes
Router::dispatch();
