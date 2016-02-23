<?php

class car implements vehicleInterface{
	public $type;
	public $status; //running or stopped

	function _construct($type, $status){
		$this->type = $type;
		$this->status = $status;
	}

	public function maneuver(){
		return $this->steer();
	}

	public function brake(){
		return $this->status = "stopped";
	}

	public function steer(){
		//some ways to get the steering direction
		$steering_direction = "straight";
		return $steering_direction;
	}

}
