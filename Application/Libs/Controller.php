<?php
namespace Application\Libs;
use Application\Libs\Interfaces\IController;

abstract class Controller implements IController {
	private $model = null;
	private $db = null;
	
	public function __construct($model) {
		$this->loadModel($model);
		$this->db = null; // create new object instance of database class
	}
	
	private function loadModel($model) {
		//include_once 'Application/Models/'.$model.'.php';
		$modelClass = "Application\\Models\\".$model;
		$this->model = new $modelClass($this->db);
	}
	
	protected function getModel() {
		return $this->model;
	}
	
	// every controller need this page ;)
	public abstract function index();
}