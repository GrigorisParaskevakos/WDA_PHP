<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'webAcademyDB');

//MAKE THE CONNECTION
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: '.mysqli_connect_error());

/*
/*Run a query and echo a message to see if connection works.
$q = "SELECT * FROM webAcademyDB.contact";
$r = mysqli_query($dbc, $q);
if ($r){
    echo"connected";
}
mysqli_close($dbc);
*/
?>
