<?php  

class Validator {

	public $errorMessages = [];

	public function email ($email) {
		if (!preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/', $email)) {
			$this->errorMessages[] = 'Invalid email';
		} 
	}

	public function username($username) {
		if (!preg_match('/^[A-Za-z0-9_-]{4,8}$/', $username)) {
			$this->errorMessages[] = 'Invalid username';
		}
	}
	public function password($password) {
		if (!preg_match('/^[A-Za-z0-9_-]{4,12}$/', $password)) {
			$this->errorMessages[] = 'Invalid password';
			 
		}
	}

	public function phoneNumber($phone) {
		if (!preg_match('/^[1-9]\d{2}-\d{3}-\d{4}$/', $phone)) {
			$this->errorMessages[] = 'Invalid phone number';
		}
	}

	public function number($num) {
		if (!preg_match('/^-?[0-9]\d*(\.\d+)?$/', $num)) {
			$this->errorMessages[] = 'Invalid number';
		}
	}
}




