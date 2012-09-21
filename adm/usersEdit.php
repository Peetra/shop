<?php // adm/usersEdit.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$uedit = 7; // check for 7, if not 7, use registerform
$title = $lang['MANAGE_USERS']; // To be used for headline tags
echo	 '<div id="acp-top-explanation"><h3>' . $lang['USERS'] . '</h3>';
echo '<p>' . $lang['USERS_EXPLAIN'] . '</p></div>';
users_menu();
include ('../inc/shopFunctions.php');
include ('../inc/incUsers.php');

$uedit = 6; // changing back to register mode when dealing with users
where_is_adm('', 'usersEdit');
?>