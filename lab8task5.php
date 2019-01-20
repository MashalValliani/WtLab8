<?php
/*  Create a function that checks whether the number provided to it as an argument is an
 Armstrong number or not and returns true or false accordingly. An Armstrong number is the
  one in which the sum of the cubes of its digits is equal to the number itself. */
  
function check_armstrong($number){
$n=$number;
$total_sum=0;
while($n!=0){
	$rem=$n%10;
	$n=$n/10;
	$sum=1;
	for($i=0; $i<3; $i++){
		$sum*=$rem;
	}
	$total_sum+=$sum;
	$sum=1;
}
if($total_sum==$number){
	echo "It is an armstrong number".$total_sum;
}
else{
	echo "It is  not armstrong number";

}
}
check_armstrong(153);



?>