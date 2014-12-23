<?php
namespace Application\Models;

class HomeModel {
	private $db = null;
	
	public function __construct($db) {
		$this->db = $db;
	}
	
	public function getTestUser() {
		return "Henrik";
	}
}