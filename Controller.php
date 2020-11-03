<?php
require_once('view/total_supplied_products.php');
require_once('view/supplied_product_by_price.php');
require_once('view/filter_form.php');

require_once("Model.php");

class Controller {

	private $model;

	public function __construct() {

		$this->model = new Model("localhost", "root", "", "supply");
	}

	public function route($action) {
		
		if ($action == "fitlerByPriceRange") {
		
			$this->suppliedProductsByPriceRange();

		} else {

			$this->totalSuppliedProducts();
		}

		$this->model->closeConnection();
	}

	public function totalSuppliedProducts() {

		viewFilterForm();

		viewTotalSuppliedProducts($this->model);
	}

	public function suppliedProductsByPriceRange() {

		viewFilterForm();

		viewSuppliedProductsByPriceRange($this->model);
	}
}

