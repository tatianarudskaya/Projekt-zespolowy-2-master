<?php
session_start();
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

<?php
	if($_SESSION['zalogowany']==true)
    { 
      echo '<form id="GuestBookFrm" name="GuestBookFrm" onsubmit="return false;">';
      echo '<table width="100%" border="0" cellspacing="0" cellpadding="5">';
      echo '<tr> <td colspan="2"><strong>Add your comment</strong> </td></tr>';
      echo ' <tr> <td>Name</td>';
      echo    '<td> <label><input type="text" name="your_name" id="your_name" /></label> </td></tr>';
      echo  '<tr> <td>Email</td>';
      echo    '<td> <input type="text" name="email" id="email" /> </td></tr>';
      echo  '<tr><td>Comment</td>';
      echo    '<td><label><textarea name="comment" id="comment" rows="5"></textarea></label></td></tr>';
      echo ' <tr><td>&nbsp;</td>';
      echo    '<td><label><input type="button" name="button" id="button" value="Submit" onclick="SubmitComment()" /></label></td></tr></table></form>';
    }
	?>