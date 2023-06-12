<?php
session_start();
session_destroy();

header('Location: /php-cc/11_Sessions.php');
