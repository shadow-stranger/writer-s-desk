<?php
	private $db;
	//database conncetion for all methods in this class
	public function __construct($db) {
		$this->db = $db;
	}
	//checking if the user is signed in or not
	public function is_signed_in() {
		if(isset($_SESSION['signedin']) && $_SESSION['signedin'] == true) return true;
	}
	