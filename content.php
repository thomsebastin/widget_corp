<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/header.php"); ?>
<?php include("includes/functions.php"); ?>
	<table id="structure">
		<tr>
			<td id="navigation">
		<ul class = "subjects">
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
	</ul>
			</td>
			<td id="page">
				<h2>Content Area</h2>
						</td>
		</tr>
		</table>
	<?php require("includes/footer.php"); ?>

