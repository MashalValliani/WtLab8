<html> 
<body> 
  
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
 NAME: <input type="text" name="fname"> 
 <button type="submit">SUBMIT</button> 
</form> 
<?php
/* $_REQUEST : It is a superglobal variable which is used to collect the data after submitting 
a HTML form. $_REQUEST is not used mostly, because $_POST and $_GET perform the same task and are widely used. */
 echo "REQUEST superglobals: ";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = htmlspecialchars($_REQUEST['fname']); 
    if(empty($name)){ 
        echo "Name is empty"; 
    } else { 
        echo $name; 
    } 
} 
?>