<?php // adm/groups.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['MANAGE_GROUPS']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang['GROUPS_TITLE'] . '</h3>';
echo '<p>' . $lang['GROUPS_EXPLAIN'] . '</p></div>';
item_menu();
$gID = (isset($_GET['gID'])) ? (int) $_GET['gID'] : 0;
$group_name= (isset($_GET['group_name'])) ? $_GET['group_name'] : '';
$group_name = strip_tags($group_name);
$group_name = ucfirst($group_name);
$group_exp = (isset($_GET['group_exp'])) ? $_GET['group_exp'] : '';
$group_exp = strip_tags($group_exp);
?>
<!--Edit group -->
<div class="groups">
<h3><?= $lang['EDIT_GROUP'];?></h3>
<form method="get" action="">
<input type="hidden" name="gID" value="<?=$gID?>">
<p><?= $lang['NAME_GROUP'];?>
<input type="text" name="group_name" value="<?=$group_name?>">
<?= $lang['DESC'];?>
<input type="text" name="group_exp" value="<?=$group_exp?>">
	<input type="submit" name="laheta">
	<input type="reset"></p>
</div>
<?	$sql = "UPDATE {$prefix}groups
		SET gID='$gID', group_name='$group_name', group_exp='$group_exp'
		WHERE gID = '$gID'";
mysql_query($sql);
?>
<div class="pages">
<?= $lang['GROUPS_TITLE'];?><br>
<?php        $sql = "SELECT * FROM {$prefix}groups";
        $result = mysql_query($sql);
        while($row = mysql_fetch_object($result)) 
        {
          echo "<li><a href=\"./groupsEdit.php?gID=" . $row->gID
														  . "&amp;gID=" .$row->gID
														  . "&amp;group_name=" .$row->group_name 
														  . "&amp;group_exp=" .$row->group_exp
														  . "\"> $row->gID $row->group_name </a> $row->group_exp </li> ";
        }
        echo '</div>';
        mysql_free_result($result);
                      
// edit group
// delete group

where_is_adm('', 'groups');
?>
