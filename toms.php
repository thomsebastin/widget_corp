<?php
$connection = mysql_connect("localhost","root", "password");
if(!$connection) {
	die("Connection Error!!" . mysql_error());
}
?>
<?php
$db_connect = mysql_select_db("widget_corp", $connection);
if(!$db_connect) {
	die("Failed to connect to the database" . mysql_error());
}
?>
<?php
//insert a query here
$subject_set = mysql_query("SELECT * FROM subjects", $connection);
if (!$subject_set) {
	die("Query error: " . mysql_error());
}
//use returned data
while ($subject = mysql_fetch_array($subject_set )) {
	echo "<li>{$subject["menu_name"]}</li>";
$page_set = mysql_query("SELECT * FROM pages WHERE subject_id = {$subject["id"]}", $connection);
if (!$page_set) {
	die("Query error: " . mysql_error());
}

	echo "<ul class=\"pages\">";
	while ($page = mysql_fetch_array($page_set)) {
		echo "<li>{$page["menu_name"]}</li>";
	}
	echo "</ul>";
}
?>	
<?php
mysql_close($connection);
?>

