<?php
	
	class TravelPhoto{
		private $date;
		private $fileName;
		private $description;
		private $title;
		private $ID;
		public static $photoID = 0;
	}
	
	function __construct($fileName, $title, $description, $latitude, $longitude){
		$this->fileName = $fileName;
		$this->title = $title;
		$this->description = $description;
		$location = new Location;
		self::$photoID++;
	}
	
	function __toString(){
		return '<div>';
			'<a class="col-md-3" href="travel-image.php?id=7">';
			'<img class="media-object" src="images/travel/square/' . $this->fileName . 
					'" title="' . $this->title . '" alt="' . $this->title.'">';
			'</a>';
			'</div>';
	}
?>