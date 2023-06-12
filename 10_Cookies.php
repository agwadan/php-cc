<?php
//Cookies
//Setting Cookies
setcookie('name', 'Brad', time() + 86400); // ------------------ setcookie(key(where the cookie is stored), value(value attached to the key i.e. the actual cookie itself), time(howlong you want to have the cookie) )

if ($_COOKIE) {
  echo $_COOKIE['name'];
} else {
  echo "No cookies for you : (";
}
