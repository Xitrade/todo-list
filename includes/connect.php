<?php

$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');
if ($mysqli->connect_error) {
	die('The character dun did died scrub (' . $mysqli->connecterrno . ')'
	. $mysqli->connect_error);
}
else {
	echo "Congrats the connection was made m89";
}
$mysqli->close();

?>