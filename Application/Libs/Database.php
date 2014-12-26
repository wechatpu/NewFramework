<?php
namespace Application\Libs;
use \PDO;

/**
 * Creating a new database connection with PDO
 * @author Henrik
 */
class Database extends PDO {
	/**
	 * Fields
	 */
	private $dsn;
	private $stmt;
	
	/**
	 * Database constructor
	 * @param String $host
	 * @param String $user
	 * @param String $password
	 * @param String $dbname
	 * @param number $port
	 */
	public function __construct($host, $user, $password, $dbname, $port = 3306) {
		$this->dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
		
		// options pdo
		$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
		);
		
		// init the connection
		try {
			parent::__construct($this->dsn, $user, $password, $options);
		} catch (PDOException $ex) {
			die($ex->getMessage());
		}
	}
	
	/**
	 * Prepare the query to execute
	 * @see PDO::query()
	 */
	public function query($query) {
		$this->stmt = parent::prepare($query);
	}
	
	/**
	 * Binding new parameters to the query
	 * @param String $param
	 * @param Object $value
	 * @param Object $type
	 */
	public function bind($param, $value, $type = null) {
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		// passing parameter to the query
		$this->stmt->bindValue($param, $value, $type);
	}
	
	/**
	 * Fetching a whole result set
	 * @param Number $fetch
	 * @return multitype:
	 */
	public function resultSet($fetch = PDO::FETCH_ASSOC) {
		return $this->stmt->fetchAll($fetch);
	}
	
	/**
	 * Fetching a single data row
	 * @param Number $fetch
	 */
	public function single($fetch = PDO::FETCH_ASSOC) {
		return $this->stmt->fetch($fetch);
	}
	
	/**
	 * Get the count of rows from the executed query
	 * @return number
	 */
	public function getRowCount() {
		return $this->stmt->rowCount();
	}
	
	/**
	 * Get the last inserted id out of the database
	 * @param String $name
	 * @return string
	 */
	public function getLastInsertId($name) {
		return parent::lastInsertId($name);
	}
	
	/**
	 * Executes the query, return true if successfully
	 * @return boolean
	 */
	public function execute() {
		return $this->stmt->execute();
	}
}