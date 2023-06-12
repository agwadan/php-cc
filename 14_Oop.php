<?php

/* ACCESS MODIFIERS */

/* 
  -- Public - Can be used anywhere
  -- Private - Can only be used inside that class
  -- Protected - Can be used in a class and a class that inherits that class
*/

class User
{

  //--------------------- Properties / attributes of the class
  public $name;
  public $email;
  public $password;

  //--------------------- A method / funtion that belongs to a class

  function set_name($name) //----------- Setter function as it sets a property
  {
    $this->name = $name;
  }

  function get_name()
  {
    return $this->name;
  }
}

$user1 = new User();
$user1->name = "Agwa";
$user1->email = "agwa@dan.com";
$user1->password = "123ds";

//print_r(($user1));


echo "<br><br>";

$user2 = new User();
$user2->set_name("Pete");
//print_r($user2);
echo ($user2->get_name());

echo '<br><br><br>%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%<br><br><br>';


class Car
{
  public $manufacturer;
  public $model_name;
  public $engine_capacity;

  //Constructor ----------------- Method / function that runs when an objec tis created
  public function __construct($manufacturer, $model_name, $engine_capacity)
  {
    $this->manufacturer = $manufacturer;
    $this->model_name = $model_name;
    $this->engine_capacity = $engine_capacity;
  }
}

$car1 = new Car('Lexus', 'IS 250', '2.5 litres');

//print_r($car1);
echo $car1->manufacturer;


class GeneralMotors extends Car
{
  public $build_state;

  public function __construct($manufacturer, $model_name, $engine_capacity, $build_state)
  {
    parent::__construct($manufacturer, $model_name, $engine_capacity, $build_state);
    $this->build_state = $build_state;
  }
}

$car3 = new GeneralMotors('Chevrolet', 'Camaro', '5.0 litres', 'Detroit');
echo $car3->build_state;
