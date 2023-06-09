<?php
$time = date("F"); // ------- Current month
$time = date("j"); // ------- Current date
//echo $time;

$age = 123;

/* if ($age < 13) {
  echo "You are a kido";
} elseif ($age >= 13 && $age < 35) {
  echo "You are a youth";
} else {
  echo "You're old";
} */
/* 
$post = ['First post'];
if (!empty($post)) { //Check if post is empty or not
  echo $post[0];
} */


//echo !empty($post) ? $post[0] : 'No post';


//echo $post[1] ?? 'No Post';



$favColor = 'blue';

switch ($favColor) {
  case 'red':
    echo 'Your favourite color is red';
    break;

  case 'blue':
    echo 'Your fav color is blue';
    break;

  default:
    echo 'You\'re boring';
    break;
}