<?php // adm/pages.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['ACP_INDEX_TITLE']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang['ACP_PAGES_TITLE'] . '</h3>';
echo '<p>' . $lang['ACP_PAGES_EXPLAIN'] . '</p></div>';

?>
<menu class="side">
		<ul>
			<li><a href="./pagesEdit.php"><?php echo $lang['EDIT_PAGE']?></a></li>
			<li><a href="./pagesAdd.php"> <?php echo $lang['NEW_PAGE']?></a></li>
			<li><a href="./pagesDelete.php"><?php echo $lang['DEL_PAGE']?></a></li>
		</ul>
</menu>
<?php
if (basename($who_am_i, ".php") == 'pages') // basename returns the end of a path, here we exclude the fileextension
	include ('./style/footer.html');
?>
