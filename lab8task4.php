<?php
/*  Are there any other alternatives apart from the default argument hack to 
implement function overloading  in PHP? Explain each with an example. */
 
 /* method:1
call the undefined class function with both object reference and with the 
class name itself. For accessing function from outside class with the name 
of the class itself, it should be a static member of that class. So accessing 
some overloaded method with the name of the class will trigger static magic member 
defined within the class.
*/
echo "Method:1";
echo "<br>";
class Toys
{
public function __call($name,$param){
echo "Magic method invoked while method overloading with object reference<br/>";
}
public static function __callStatic($name,$param){
echo "Magic method invoked while method overloading with static access<br/>";
}
}
$objToys = new Toys;
$objToys->overloaded_method();
Toys::overloaded_property();
 
echo "<br>";
 /* method:2 */
echo "Method:2";
echo "<br>";
class Shape {
const PI = 3.142 ;

function __call($name,$arg){
	if($name == 'area')
		switch(count($arg)){
			case 0 : echo "No arguments <br/>";
			break;
			case 1 : echo "One arguments".$arg[0]." Area: ".self::PI * $arg[0]."<br/>";
			break;
			case 2 : echo "Two arguments:".$arg[0]." ".$arg[1]." Area: ".$arg[0] * $arg[1]." <br/>";
			break;
			}
	}
}
$circle = new Shape();
echo $circle->area(5);


$rect = new Shape();
echo $rect->area(5,10);

echo "<br>";
/* method:3 */
echo "Method:3";
echo "<br>";
function concatenate($transform, ...$strings) {
        $string = '';
        foreach($strings as $piece) {
            $string .= $piece;
        }
        return($transform($string));
    }

    echo concatenate("strtoupper", "I'd ", "like ",
        4 + 2, " apples");
	
	echo "<br>";
 	echo concatenate("strtoupper", "I'd ", "like ",
        2 + 2, " apples", " tomorrow");

echo "<br>";
echo "<br>";
/* method:4 */
echo "Method:4";
echo "<br>";
function myFunc() {
    for ($i = 0; $i < func_num_args(); $i++) {
        printf("Argument %d: %s\n", $i, func_get_arg($i));
        echo ", ";
    }
}
myFunc('a', 2, 3.5);
echo "<br>";
myFunc('abc');
echo "<br>";
myFunc(5768,'hij', 2);
echo "<br>";


?>