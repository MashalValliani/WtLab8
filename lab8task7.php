<?php
/* Create a phone directory program where user stores the names and phone number in an array with the help of html form.
Hint: Store the numbers and names into an associative array in the PHP script. */

$name=$_POST['name'];
$num=$_POST['number'];
$a=array();
array_push($a, $name,$num);
foreach($a as $x => $value) {
	echo $value ."  ";
}

?>