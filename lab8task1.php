<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
//factorial of 5
$x=5;
$sum=1;
while($x>=1){
 $sum=$x*$sum;
 $x--;
}
echo "The factorial of 5 is:";
echo $sum;
?>
</body>
</html>