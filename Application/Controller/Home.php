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
		$arr = array("Some", "Stupid", "Array");
		
		$view = new HomeView("home.tpl");
		$view->assign("name", $this->getModel()->getTestUser());
		$view->assign("array", $arr);
		$view->display();
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