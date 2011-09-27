<?php // adm/user.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['ACP_INDEX']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang['ACP_PAGES_TITLE'] . '</h3>';
echo '<p>' . $lang['ACP_PAGES_EXPLAIN'] . '</p></div>';

?>
	<div id="sidemenu">
	<ul>
	<li><a href="./pagesEdit.php"><?= $lang['EDIT_PAGE']?></a></li>
	<li><a href="./pagesAdd.php"> <?= $lang['NEW_PAGE']?></a></li>
	<li><a href="./pagesDelete.php"><?= $lang['DEL_PAGE']?></a></li>
	</ul>
	</div>
<?php
if (basename($who_am_i, ".php") == 'pages') // basename returns the end of a path, here we exclude the fileextension
{
	include ('./pagesEdit.php');
	include ('./style/footer.html');
}
?>
