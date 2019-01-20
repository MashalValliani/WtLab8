<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php

/* $_POST : It is a super global variable used to collect data from the HTML form after 
submitting it. When form uses method post to transfer data, the data is not visible in 
the query string, because of which security levels are maintained in this method. */
echo "POST superglobals: ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

</body>
</html>
