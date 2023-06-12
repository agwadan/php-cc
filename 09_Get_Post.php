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

<?php

if (isset($_POST['submit'])) {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

  echo $name . "<br/><br/>";
  echo $password;
}
?>