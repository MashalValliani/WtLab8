<?php
/* Create arithmetic functions with two and three variables as 
arguments using function overloading that returns addition, subtraction, 
multiplication and division of two or three numbers supplied as arguments.  */
class Demo{
function arithmatic_function($n1=null,$n2=null,$n3=null){
	if (func_num_args()==2)
	{ 
		$sum=$n1+$n2;
	echo "Addition of two numbers is:".$sum;
	echo"<br>";
	$subtract=$n2-$n1;
	echo "subraction of two numbers is:".$subtract;
	echo"<br>";
	$multy=$n1*$n2;
	echo "multiplication of two numbers is:".$multy;
	echo"<br>";
	$division=$n2/$n1;
	echo "multiplication of two numbers is:".$division;
	echo"<br>";
	}
	if (func_num_args()==3)
	{ 
		$sum=$n1+$n2+$n3;
	echo "Addition of three numbers is:".$sum;
	echo"<br>";
	$subtract=$n2-$n1-$n3;
	echo "subraction of three numbers is:".$subtract;
	echo"<br>";
	$multy=$n1*$n2*$n3;
	echo "multiplication of three numbers is:".$multy;
	echo"<br>";
	$division=$n2/$n1/$n3;
	echo "multiplication of three numbers is:".$division;
	echo"<br>";
	}
	}
	}


$obj=new Demo();
$obj->arithmatic_function(10,4);
$obj->arithmatic_function(10,4,2);
//$obj->arithmatic_function(5,4);



?>