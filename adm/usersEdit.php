<?php // adm/usersEdit.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./users.php');

$title = $lang['MANAGE_USERS']; // To be used for headline tags
echo	 '<div id="acp-top-explanation"><h3>' . $lang['USERS'] . '</h3>';
echo '<p>' . $lang['USERS_EXPLAIN'] . '</p></div>';
include ('../inc/shopFunctions.php');

$title = $lang['MANAGE_USERS'];
$uID = 		(isset($_GET['uID'])) ? (int) $_GET['uID'] : 0;
$lname = (isset($_GET['lname'])) ? $_GET['lname'] : '';
$sql = "SELECT * FROM {$prefix}customers WHERE uID = '$uID'";
mysql_query($sql);

$searchuser = (isset($_GET['searchuser'])) ? $_GET['searchuser'] : '';
if ($searchuser == '')
	search_user_form('SEARCH_USER', '');
else
{
	// include ('../inc/incUsers.php');
	$fname = (isset($_POST['fname']) ? $_POST['fname'] : '');
	$fname = mysql_real_escape_string(ucfirst($fname));
	?>
<h3 class="pages"><?= $lang['MANAGE_USERS']?></h3>
  <p class="pages"><?= $lang['MANAGE_USERS_EXPLAIN']?>.</p>
  <ul>
	<span class="per85">
<?
		$sql = "SELECT * FROM {$prefix}customers WHERE lname LIKE '%{$searchuser}%' OR fname LIKE '%{$searchuser}%' 
													OR street LIKE '%{$searchuser}%' OR city LIKE '%{$searchuser}%' OR zip LIKE '%{$searchuser}%'
													OR phone LIKE '%{$searchuser}%' OR email LIKE '%{$searchuser}%'	ORDER BY uID ASC";
		$result = mysql_query($sql);
		while($row=mysql_fetch_object($result))
		{
			echo '<li class="pages">';
			echo $row->uID . ' ' . $row->lname. ' ' . $row->fname . '</a></li>';
		  /*echo "<li class=\"pages\"><a href=\"./usersEdit.php?uID=" . $row->uID .
		  "&amp;lname=" . $row->lname .
		  '"onclick="return confirm(\'' . $really, $row->lname . '?\');">';
		  echo $row->uID . ' ' . $row->lname. ' ' . $row->fname. '</a></li>';*/

	
		}
mysql_free_result($result);
search_user_form('SEARCH_USER', '');
?>
	</span>
    </ul>
<?php
}
	
where_is_adm('', 'usersEdit');
?>