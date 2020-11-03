<?php
class Model {
	private $servername;
	private $username;
	private $password;
	private $dbname;

	private $conn;

	public function __construct($servername, $username, $password, $dbname) {

		$this->conn = new mysqli($servername, $username, $password, $dbname);

		if ($this->conn->connect_error) {

	    	die("Database connection failed: " . $this->conn->connect_error);
	    }
	}

	public function getTotalSuppliedProducts() {

		$sql = "SELECT supplied_product AS `Product`, SUM(supplied_amount) AS `Units`, SUM(supplied_cost) AS `Price` FROM supplied GROUP BY supplied_product ORDER BY SUM(supplied_cost) DESC";

    	$result = $this->conn->query($sql);

    	return $result;
	}

	public function getTotalSuppliedProductsByPriceRange($from, $to) {

		$sql = "SELECT supplied_product AS `Product`, SUM(supplied_amount) AS `Units`, SUM(supplied_cost) AS `Price` FROM supplied GROUP BY supplied_product HAVING SUM(supplied_cost) >= {$from} AND SUM(supplied_cost) <= {$to} ORDER BY SUM(supplied_cost) DESC";

    	$result = $this->conn->query($sql);

    	return $result;
	}

	public function closeConnection() {
		
		$this->conn->close();
	}
}
