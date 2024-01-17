<?php

$notifi = "Xin chào ";
$username = "<strong> admin </strong>";
echo "notifi = {$notifi} <br>";
echo "username = {$username} <br>";
echo "<br>---------------------<br>";
$notifi .= $username;//notifi = $notifi.&username
echo $notifi;
