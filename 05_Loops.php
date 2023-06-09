<?php
/* for ($x = 9; $x < 20; $x = $x + 2) {
  echo $x . ", \n";
} */

//While loop

/* $x = 23;

while ($x < 450) {
  echo $x . '<br/>';
  $x = $x + 10;
} */


//ForEach
//________________________

$posts = ['First', 'Second', 'Third'];

foreach ($posts as $index => $post) {
  echo $post;
  //echo $post . "", ' ?? $index != sizeof($posts)};
}



//Associative Arrays Loops
//______________________________

$colors = [
  1 => 'blue',
  2 => 'green',
  3 => 'pink',
  4 => 'yellow'
];

foreach ($colors as $key => $color) {
  echo "$key - $color <br/>";
}