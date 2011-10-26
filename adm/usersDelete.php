<?php // adm/usersDelete.php
error_reporting(E_ALL);
include ('./users.php');
$title = $lang['DEL_USER'];
$uID = 		(isset($_GET['uID'])) ? (int) $_GET['uID'] : 0;
$lname = (isset($_GET['lname'])) ? $_GET['lname'] : '';
$sql = "DELETE FROM {$prefix}customers WHERE uID = '$uID'";
$really = $lang['DEL_USER_REALLY'] . ' '; // defining the lang string for the js-code here
mysql_query($sql);

$searchuser = (isset($_GET['searchuser'])) ? $_GET['searchuser'] : '';
if ($searchuser == '')
	search_user_form('SEARCH_USER', '');
else
{
?>
<h3 class="pages"><?= $lang['DEL_USER']?></h3>
  <p class="pages"><?= $lang['DEL_USER_EXPLAIN']?>.</p>
  <ul>
	<span class="per85">
<?
		$sql = "SELECT * FROM {$prefix}customers WHERE lname LIKE '%{$searchuser}%' OR fname LIKE '%{$searchuser}%' 
													OR street LIKE '%{$searchuser}%' OR city LIKE '%{$searchuser}%' OR zip LIKE '%{$searchuser}%'
													OR phone LIKE '%{$searchuser}%' OR email LIKE '%{$searchuser}%'	ORDER BY uID ASC";
		$result = mysql_query($sql);
		while($row=mysql_fetch_object($result))
		{
		  echo "<li class=\"pages\"><a href=\"./usersDelete.php?uID=" . $row->uID .
		  "&amp;lname=" . $row->lname .
		  '"onclick="return confirm(\'' . $really, $row->lname . '?\');">';
		  echo $row->uID . ' ' . $row->lname. ' ' . $row->fname. '</a></li>';

	  echo "\n";
		}
mysql_free_result($result);
?>
	</span>
<?
	search_user_form('SEARCH_USER', '');
}
// Close db-connection
mysql_close($connection);
?>
