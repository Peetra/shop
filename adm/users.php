<?php // adm/user.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang[''] . '</h3>';
echo '<p>' . $lang[''] . '</p></div>';

?>

<?php
if (basename($who_am_i, ".php") == 'users') // basename returns the end of a path, here we exclude the fileextension
	include ('./style/footer.html');
?>
