<?php
/* Create an e-mail validator that takes email via HTML form from the user and then validates it on the server using the following conditions:
o	Should contain only one ‘@’
o	Does not start with a number
o	Should not contain spaces
o	Length should not be greater than 20
o	Should only end with .com or .edu.pk or .co.uk
*/

$email=$_GET['email'];
$emailReg = "/^(?=.{1,20}$)[a-zA-Z_][a-zA-Z0-9_]*@[a-z0-9-]+(\.[a-z0-9-]+)*.(com|co\.(uk)|edu\.(pk))$/";
if(preg_match($emailReg, $email))
echo "Login Successful";
else 
echo "email is incorrect";	
?>