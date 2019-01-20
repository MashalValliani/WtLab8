<?php
/*  Take a number and the exponent as arguments and returns the result. 
For example the result of powerFunction(2,3) is 8. (Don’t use built-in PHP power function). */
function powerFunction($number,$power){
	$p=$power;
	$n=$number;
	$result=1;
	for($i=0; $i<$p; $i++){
     $result*=$n;
	}
	echo "result is".$result;
}
powerFunction(3,4);
?>