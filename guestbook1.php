<?php

error_reporting(0);
include("config.php");

if ($_REQUEST["do"]=='add') {
	
	$sql = "INSERT INTO ".$SETTINGS["data_table"]." SET date_time=now(), name='".mysql_real_escape_string($_REQUEST["name"])."', email='".mysql_real_escape_string($_REQUEST["email"])."', comment='".mysql_real_escape_string($_REQUEST["comment"])."'";
	$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);

}

?>
<div id="Comments">
<?php
$sql = "SELECT * FROM ".$SETTINGS["data_table"]." ORDER BY id DESC";
$sql_result = mysql_query ($sql, $connection ) or die ('request "Could not execute SQL query" '.$sql);
while ($row = mysql_fetch_assoc($sql_result)) {
	echo "<div><h2>".stripslashes($row["name"])."</h2>";
	echo "<span>posted on ".$row["date_time"]."</span>";
	echo "<p>".stripslashes(nl2br($row["comment"]))."</p></div>";
}
?>
</div>

