<?php
namespace Application;
use Application\Controller\Home as Home;

class Engine {
	/**
	 * Fields
	 */
	private $url_controller;
	private $url_action;
	private $url_parameter = array();

	/**
	 * Class constructor
	 */
	public function __construct() {
		// parse the url
		$this->parseUrl();

		// check if the controller is loaded successfully
		if (class_exists($this->url_controller) && !empty($this->url_controller)) {
			// autoloaded all controller
			$this->url_controller = new $this->url_controller;
			
			// check if method exists in this class
			if (method_exists($this->url_controller, $this->url_action)) {
				$this->runMethodWithParams();
			} else {
				$this->url_controller->index();
			}
		} else {
			$home = new Home();
			$home->index();
		}
	}

	/**
	 *	Run selected method with needed parameter
	 */
	private function runMethodWithParams() {
		$paramsToAdd = array();

		// check parameter who are null
		foreach ($this->url_parameter as $parameter) {
			if (!is_null($parameter)) {
				array_push($paramsToAdd, $parameter);
			}
		}

		// get number of missing parameter
		$num_of_params = $this->checkMissingParams();

		// adding "null" as parameter to the method
		if (count($paramsToAdd) < $num_of_params) {
			for ($i = 0; $i < ($num_of_params - count($paramsToAdd)); $i++) {
				array_push($paramsToAdd, null);
			}
		}

		// call the requested method
		call_user_func_array(array($this->url_controller, $this->url_action), $paramsToAdd);
	}

	/*
     * Checks the called function for parametersx
     */
    private function checkMissingParams() {
        $class_reflection = new \ReflectionClass($this->url_controller);
        return $class_reflection->getMethod($this->url_action)->getNumberOfParameters();
    }

    /**
     *	Parsing the URL
     *  Get url, method and parameter
     */
	private function parseUrl() {
		if (filter_input(INPUT_GET, 'route')) {
			$url = explode('/', rtrim(htmlspecialchars($_GET["route"]), '/'), FILTER_SANITIZE_URL);

			$this->url_controller = 'Application\\Controller\\'. (isset($url[0]) ? $url[0] : null);
			$this->url_action     = (isset($url[1]) ? $url[1] : null);

			// get the method parameter
			// - 2, delete the controller and action
			$param_count = count($url) - 2;

			// add all parameters
			for ($i = 0; $i < $param_count; $i++) {
				$parameter = (isset($url[$i + 2]) ? $url[$i + 2] : null);
				$this->url_parameter[$i] = $parameter;
			}
		}
	}
}