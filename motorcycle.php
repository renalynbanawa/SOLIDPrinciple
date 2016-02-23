<?php

class motorcycle implements vehicleInterface{

	public $status; //running or stopped

	function _construct($status){
		$this->status = $status;
	}

	public function maneuver(){
		//some ways to get the steering direction
		$control_direction = "left";
		return $control_direction;
	}

	public function brake(){
		return $this->status = "stopped";
	}

}