<?php

class Controller {

	private $conn;

	public function __construct($connec) {
		$this->conn = $connec;
	}

}