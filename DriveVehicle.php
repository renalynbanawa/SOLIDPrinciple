<?php

class DriveVehicle{

	public function run(vehicleInterface $vehicle){
		return $vehicle->maneuver();
	}

	public function stop(vehicleInterface $vehicle){
		return $vehicle->brake();
	}
	
}