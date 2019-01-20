<?php
/* Provide a descriptions and usage for all the PHP superglobals. */

/* $GLOBALS : An associative array containing references to all variables
 which are currently defined in the global scope of the script. The variable names are the keys of the array. */
echo "GLOBALS superglobals: ";
echo "<br>";
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo "<br>";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
echo "<br>";
echo "<br>";
/* $_SERVER : $_SERVER is an array containing information such as headers, paths, 
and script locations. The entries in this array are created by the web server. There 
is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here.  */
echo "Server superglobals: ";
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo "<br>";

/* $_ENV: An associative array of variables passed to the current script via the environment method.
These variables are imported into PHP's global namespace from the environment under which the PHP parser is running.
 Many are provided by the shell under which PHP is running and different systems are likely running different kinds of shells,
  a definitive list is impossible. Please see your shell's documentation for a list of defined environment variables.
Other environment variables include the CGI variables, placed there regardless of whether PHP is running as a server module or CGI processor.  */
echo "env superglobals: ";
$_ENV["MYENV"]="new_variable";
$new_variable_var = $_ENV["MYENV"];
echo $_ENV["MYENV"];

/* $_SESSION : An associative array of variables passed to the current script via HTTP Cookies.*/
echo "<br>";
echo "<br>";
echo "SESSION superglobals: ";
echo "<br>";
session_start();
$_SESSION['w3resource']='The largest online tutorial';
echo $_SESSION['w3resource'];

?>