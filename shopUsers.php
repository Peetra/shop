<?php // shopUsers.php
// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;
include_once ('./shopOverall.php');
if(!defined('LANG')){ exit; }
error_reporting(E_ALL);
$title = 'shopUsers';
echo '<div><h3>' . $lang[''] . '</h3>';
echo '<p>' . $lang[''] . '</p></div>';
include ('./inc/incUsers.php');
where_am_i('', ('index' || 'shopUsers'));
?>
