<?php
/**
 * HomeController for testing reasons
 * Author: Henrik Thien
 */

namespace Application\Controller;
use Application\Libs\Controller;

class Home extends Controller {
	/**
	 * HomeController constructor
	 * defines the controller model
	 */
	public function __construct() {
		parent::__construct("HomeModel");
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Application\Libs\Controller::index()
	 */
	public function index() {
		echo "index page";
	}
	
	/**
	 * Some test function
	 */
	public function test($param1) {
		echo "test function with param1: " . $param1;
		echo "<br />";
		echo "Testuser: " . $this->getModel()->getTestUser();
	}
}