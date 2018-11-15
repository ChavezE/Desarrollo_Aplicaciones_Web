<?php
	class Planner {

		public $planerID;
		public $imagePath;
		public $price;
		public $description;
		public $color;
	  public $numOfPages;
		public $spiralBind;


	  public function __construct($planerID, $imagePath) {
			$this->planerID = $planerID;
		  	$this->imagePath = $imagePath;
    }

		public function setProps($price, $description, $color, $numOfPages, $spiralBind) {
			$this->price = $price;
			$this->description = $description;
			$this->color = $color;
			$this->numOfPages = $numOfPages;
		  $this->spiralBind = $spiralBind;
    }

	}
?>
