<?php
	class Planner {

		public $planerID;
		public $imagePath;
		public $color;
	  	public $numOfPages;
		public $spiralBind;


	  public function __construct($planerID, $imagePath) {
			$this->planerID = $planerID;
		  	$this->imagePath = $imagePath;
    }

		public function setProps($color, $numOfPages, $spiralBind) {
			$this->color = $color;
			$this->numOfPages = $numOfPages;
		  	$this->spiralBind = $spiralBind;
    }

	}
?>
