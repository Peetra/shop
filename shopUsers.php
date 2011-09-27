<?php // shopUsers.php
// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
$title = 'shopUsers';
include_once ('./shopOverall.php');
echo '<div><h3>' . $lang[''] . '</h3>';
echo '<p>' . $lang[''] . '</p></div>';
include ('./inc/incUsers.php');
where_am_i('', ('index' || 'shopUsers'));
?>
