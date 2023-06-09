<?php

/*SCOPES
__________
- A variable declared in a function cannot be used outside of it.
- A globally declared variable cannot be used inside a function 
- the key word "global " can be used to access a global variable in a function


- An argument is what the function takes in e.g. registerUser($email) --- $email is the argument
- Parameters are what's passed into the function when it's being called
*/


/* $y = 32;

function registerUser()
{
  global $y;
  echo $y;
  echo ' Registered : )';
}

registerUser(); */


/* function registerUser($email)
{
  echo $email . ' registered';
}

registerUser('agwa.dan@mail.com'); */

function sum($n1, $n2) // can be declared with default values --- sum($n1=3, $n2=5)
{
  return $n1 - $n2;
}

//echo sum(32, 12);


//Anonymous Function --------------------- assigned to a variable 
$difference = function ($n1, $n2) {
  return $n1 + $n2;
};


//echo $difference(45, 23);

//Arrow Functions

$product = fn ($n1, $n2) => $n1 * $n2;

echo $product(9, 8);