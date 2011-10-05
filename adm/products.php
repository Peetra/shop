<?php // adm/products.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['ACP_PRODUCTS_TITLE'];
echo '<div id="acp-top-explanation"><h3>' . $lang['ACP_PRODUCTS_TITLE'] . '</h3>';
echo '<p>' . $lang['ACP_PRODUCTS_EXPLAIN'] . '</p></div>';

item_menu();
where_is_adm('', 'products')
?>
