<?php
session_start();

if (isset($_SESSION['username'])) {
  echo "<h1>Welcome "  . $_SESSION['username'] . " : )</h1>";
  echo '<a href="logout.php">Logout</a>';
} else {
  echo "Welcome Guest";
  echo '<a href="/php-cc/11_Sessions.php">Back</a>';
}
