<?php
/**
 * Model of the Home controller.
 * Handles the database connection and function of the controller
 */
namespace Application\Models;

class HomeModel {
	private $db = null;
	
	public function __construct($db) {
		$this->db = $db;
	}
	
	public function getTestUser() {
		$this->db->query("SELECT * FROM user");
		$this->db->execute();
		return $this->db->resultSet();
	}
}