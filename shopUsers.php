<?php // ucp.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang[''];
echo '<div><h3>' . $lang[''] . '</h3>';
echo '<p>' . $lang[''] . '</p></div>';

?>

<?php
// if (basename($who_am_i, ".php") == 'ucp') // basename returns the end of a path, here we exclude the fileextension
	include ('./styles/default/footer.html');
?>
