<?php
	class User {

		public $userId;
		public $username;
		public $pwd;
	  public $name;
		public $lastName;


	  public function __construct($email, $name) {
			$this->email = $email;
		  $this->name = $name;
    }

		public function setProps($username, $pwd, $name, $lastName) {
			$this->username = $username;
			$this->pwd = $pwd;
		  $this->name = $name;
			$this->lastName = $lastName;

    }

	}
?>
