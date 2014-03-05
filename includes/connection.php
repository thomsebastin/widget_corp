<?php
	//create a database connection
require("constants.php");
	$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$connection) {
	die("Database connection error: " . mysql_error());
}
?>
<?php
	//select a databse to use
$db_select = mysql_select_db(DB_NAME, $connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
