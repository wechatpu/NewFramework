<?php
/**
 * HomeController for testing reasons
 * Author: Henrik Thien
 */

namespace Application\Controller;
use Application\Libs\Controller;
use Application\Views\HomeView;

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
		echo "index test";
		//$view = new HomeView();
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