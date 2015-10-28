<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// =========== DEFINE THE CLASS ==========
		class Cat{
			// object properties
			public $name;
			public $age;
			public $weight;
			private $breed;

			// the object's constructor
			public function __construct($_name, $_age, $_weight){
				$this->name   = $_name;
				$this->age    = $_age;
				$this->weight = $_weight;

				if ($this->weight > 25){
					$this->breed = "Moutain Lion";


				}

			}

			public function feedCat($_food){
				if ($_food < $this->weight/8){
					echo $this->name." needs more food than that!";
					echo "<br>";
				} else {
					echo $this->name." is fully fed!";
					echo "<br>";
				}
			}

			public function howOld(){
				echo $this->name." is ".$this->age." years old.";
				echo "<br>";
				echo $this->name." is ".$this->age." cat years old!";
				echo "<br>";
			}
		}



        $cat1 = new Cat("Little Buddy", 2, 8);
		$cat2 = new Cat("Sneaky Pete", 0, 2);
		$cat3 = new Cat("whiskers",1,2);


		$cat1->howOld();
		$cat1->feedCat(6);

		$cat3->howOld();

		echo $cat2->name;
		echo "<br>";

		echo "TESTING!!!!";

		$student1= new Student('Harry', 'Potter', 17);
		$student2= new Student('Charlie','Brown',16);
		$student3= new Student('Gary', 'Coleman', 15);

		echo $student1->firstName;
		echo "<br>";
		echo $student1->lastName;
		echo "<br>";
		echo $student1->age;
		echo "<br>";
	


//Rahjon's class
class Student{

	public $firstName;
	public $lastName;
	public $age;

	public function __construct($_firstName, $_lastName, $_age){

		$this->firstName = $_firstName;
		$this->lastName  = $_lastName;
		$this->age       = $_age;
	}


}




?>

</body>
</html>





