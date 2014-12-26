<?php
/**
 * Autoloader to load all classes
 * Just include the config file to make sure everything is going to work well.
 */
namespace Application\Libs;

require_once 'Application/Config/Config.php';

/**
 * Autoload all my classes
 */
spl_autoload_register(function($className) {
	$ds = DIRECTORY_SEPARATOR;
	$dir = __DIR__;
	
	$className = str_replace('\\', $ds, $className);
	$file = ".{$ds}{$className}.php";

	if (is_readable($file)) {
		require_once $file;
	}
});