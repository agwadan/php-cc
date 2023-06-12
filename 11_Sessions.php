<?php

session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = $_POST['password'];

  //Session
  if ($username == 'john' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-cc/extras/dashboard.php');
  } else {
    echo "<alert> Incorrect Login</alert>";
  }
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div>
    <label>Name: </label>
    <input type="text" name="name">
  </div>
  <br>
  <div>
    <label>Password: </label>
    <input type="password" name="password">
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>