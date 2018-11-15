<?php
	class Order {

    public $orderID;
		public $Planner;
    public $User;
    public $cost;
		public $quantity;


	  public function __construct($plannerID, $userID) {
			$User = new User("no email","no name");
      $User->userId = $userID;

      $Planner = new Planner($plannerID,"no/image/path");
    }

		public function setProps($cost, $quantity) {
			$this->cost = cost;
      $this->quantity = quantity;
    }

	}
?>
