<?php // adm/products.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['ACP_PRODUCTS_TITLE'];
echo '<div id="acp-top-explanation"><h3>' . $lang['ACP_PRODUCTS_TITLE'] . '</h3>';
echo '<p>' . $lang['ACP_PRODUCTS_EXPLAIN'] . '</p></div>';

?>
	<menu class="side">
	<ul>
	<li><a href="./productsEdit.php"><?php echo $lang['PRODUCTS_EDIT']?></a></li>
	<li><a href="./productsAdd.php"> <?php echo $lang['PRODUCTS_ADD']?></a></li>
	<li><a href="./productsDelete.php"><?php echo $lang['PRODUCTS_DEL']?></a></li>
	</ul>
	</menu>
<?php
if (basename($who_am_i, ".php") == 'products') // basename returns the end of a path, here we exclude the file extension
	include ('./style/footer.html');
?>
