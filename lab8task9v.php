
<?php
/* $_FILES is a super global variable which can be used to upload files.
 Here we will see an example in which our php script checks if the form to upload the
  file is being submitted and generates a message if true. */
echo "FILES superglobals: ";
if ($_FILES["file"] > 0)
  {
  echo "You have selected a file to upload";
  }
?>