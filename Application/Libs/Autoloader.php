<?php
namespace Application\Libs;

include 'Application/Config/Config.php';
use Application\Config\Config as Config;

include APP_NAMESPACE.'Engine.php';
include APP_NAMESPACE.'Libs/Interfaces/IController.php';
include APP_NAMESPACE.'Libs/Controller.php';

// autoload all controller classes
spl_autoload_register(function ($controller) {
	include $controller.'.php';
});