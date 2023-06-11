<?php
$fruits = ['mango', 'orange', 'apple'];
//echo count($fruits);

//Search an Array
//var_dump(in_array('mango', $fruits));


//Add to array
$fruits[] = 'grape';
//print_r($fruits);

array_push($fruits, 'date', 'pear');


//Adding elements to beginning of an array
array_unshift($fruits, 'strawberry', 'tomato');
//print_r($fruits);


//Remove from array
array_pop($fruits); // removes last element
array_shift($fruits); // removes first element


$arr1 = [1, 2, 5];
$arr2 = [3, 4, 7];

$arr3 = [...$arr1, ...$arr2]; // keep whatever is in arr3 and add arr1 and 2
//print_r($arr3);

$nums = range(3, 15);
print_r($nums);


$newNums = array_map(function ($num) {
  return "Number: $num";
}, $nums);

//print_r($newNums);


//Array filter
$lessThan10 = array_filter($nums, function ($num) {
  return $num <= 10;
});
//print_r($lessThan10);


//Sum up numbers in an array
$toSum = [2, 2, 2, 2];

$sum = array_reduce($toSum, function ($carry, $num) {
  return $carry + $num;
});
var_dump($sum);
