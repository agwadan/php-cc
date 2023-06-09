<?php

//Arrays
$numbers = [1, 2, 3, 4];
/* print_r($numbers);
var_dump($numbers);
 */


//Associative Arrays
$colors = [
  1 => 'blue',
  2 => 'green',
  3 => 'pink',
  4 => 'yellow'
];

//echo $colors[3]; // will print pink

$person = [
  'first_name' => 'Dan',
  'last_name' => 'Brown',
  'work' => [
    'Davinci Code',
    'Some other book'
  ]
];

//echo ($person['work'][0]);

$people = [
  [
    'name' => 'Pete',
    'age' => 12
  ],
  [
    'name' => 'John',
    'age' => 34
  ]
];

//echo $people[0]['age'];

var_dump(json_encode($people));