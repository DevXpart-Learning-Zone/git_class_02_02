<?php 

	class Vehicle{
		private $name;
		private $company;

		function __construct($name, $company)
		{
			$this->name = $name;
			$this->company = $company;
			echo $this->name;
			echo "<br>";	
		}

	}

	class Car{
		function drive()
		{

		}
		function speed()
		{
			echo "Top speed is 375";
		}
		function control()
		{

		}
		function automotion()
		{

		}

	}

	 $vehicle = new Vehicle("Avantador", "Lamborghini");
	 //echo $vehicle;

	 $car = new Car();
	 echo $car->speed();
 ?>