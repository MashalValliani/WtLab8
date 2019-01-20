<?php
/*  Create a function that takes any number as input (with multiple digits) and converts them into words.  */
function Conversion($number){
	$num = (string)$number;
	Echo "Number:".$num;
	echo"<br>";
	Echo "Output:";
for($i=0; $i<strlen($num); $i++){
	switch ($num[$i]) {
	 	case '0':
	 		Echo "Zero";
	 		break;
	 	case '1':
	 	    echo "One";
	 	    break;
	 	case '2':
	 	    echo "Two";
	 	    break;
	 	case '3':
	 	    echo "Three";
	 	    break;
	 	case '4':
	 	    echo "Four";
	 	    break;
	 	case '5':
	 		Echo "five";
	 		break;
	 	case '6':
	 	    echo "Six";
	 	    break;
	 	case '7':
	 	    echo "Seven";
	 	    break;
	 	case '8':
	 	    echo "Eight";
	 	    break;
	 	case '9':
	 	    echo "Nine";
	 	    break;
	 	
	 	default:
	 		echo "not working";
	 		break;
	 }
}
}
Conversion(63892);
?>