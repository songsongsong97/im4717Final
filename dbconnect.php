<?php
@$dbcnx = new mysqli('localhost','f34ee','f34ee','f34ee');
// @ to ignore error message display //
if ($dbcnx->connect_error){
	echo "Database is not online"; 
	exit;
	// above 2 statments same as die() //
	}
/*	else
	echo "Congratulations...  MySql is working..";
*/
if (!$dbcnx->select_db ("f34ee"))
	exit("<p>Unable to locate the f34ee database</p>");
?>	