<?php // adm/groups.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['MANAGE_GROUPS']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang['GROUPS_TITLE'] . '</h3>';
echo '<p>' . $lang['GROUPS_EXPLAIN'] . '</p></div>';

item_menu();
where_is_adm('', 'groups')
/*if (basename($who_am_i, ".php") == 'groups') // basename returns the end of a path, here we exclude the fileextension
{
	include ('./style/footer.html');
}*/
?>
