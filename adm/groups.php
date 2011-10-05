<?php // adm/groups.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['MANAGE_GROUPS']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang['GROUPS_TITLE'] . '</h3>';
echo '<p>' . $lang['GROUPS_EXPLAIN'] . '</p></div>';
item_menu();
?>

// add group
<div class="pages">
<h3 >add group</h3>
<?
        $sql = "SELECT * FROM {$prefix}groups";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result)) {
          echo '<li>' . $row->gID . ' ';
          echo $row->group. '</li> ' ;
        }
        mysql_free_result($result);
?>
<form method="get" action="">
<p>Anna uuden groupn nimi.</p>
<input type="text" name="group">

	<input type="submit" name="laheta">
	<input type="reset"><p>
</div>
<?php
$group = $_GET['group'];
$group = strip_tags($group);
$group = ucfirst($group);

if ($group != '')
{
	$sql = "INSERT INTO {$prefix}groups (gID, group)
                        VALUES ('', '$group')";
}
mysql_query($sql);
// edit group

// delete group
where_is_adm('', 'groups')
?>
