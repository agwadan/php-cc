<?php
echo 'Hello World \n', 123;

echo '----------------------';

$test_array = ['Agwa', 'Daniel'];
echo $test_array[0];


print_r($test_array);
var_dump(true);

var_export('Hello Peter');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?php echo $test_array[0], ' ', $test_array[1]; ?></h1>
  <h1><?= $test_array[0], ' ', $test_array[1]; ?></h1>
</body>

</html>