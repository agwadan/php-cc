<?php

//Special CHars

$string = "<h2>Hello</h2>";
echo htmlspecialchars($string); // doesn't read the html tags as html but as part of the string