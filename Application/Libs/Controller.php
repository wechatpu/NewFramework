<?php
/**
 * Controller super class, using the IController interface to handle 
 * the model and view of the site to display
 */
namespace Application\Libs;
use Application\Libs\Interfaces\IController;
use Application\Libs\Database;

abstract class Controller implements IController {
	private $model = null;
	private $db = null;
	
	public function __construct($model) {
		$this->db = new Database("localhost", "root", "", "prjgroup");
		$this->loadModel($model);
	}
	
	private function loadModel($model) {
		$modelClass = "Application\\Models\\".$model;
		$this->model = new $modelClass($this->db);
	}
	
	protected function getModel() {
		return $this->model;
	}
	
	// every controller need this page ;)
	public abstract function index();
}