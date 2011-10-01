<?php // adm/index.php [Administration Control Panel]
error_reporting(E_ALL);
include('../connection.php'); // You see the two dots for going up a directory
define('LANG', true); // The user doesn't get anywhere w/o words in the interface. :P
if (!empty($_GET['lang']))
{
	$lang = $_GET['lang'];
}
else if (!empty($_COOKIE['lang']))
{
	$lang = $_COOKIE['lang'];
}
else
{
	$lang = 'en';
}
$lang = ($lang == 'fi') ? 'fi' : 'en';
setcookie('lang', $lang);
include('../lang/' . $lang . '.php');
$ind = (isset($_GET['ind'])) ? $_GET['ind'] : '';
$title = (isset($_GET['title'])) ? $_GET['title'] : '';
// We welcomes the user, on index, not needed elsewhere
$who_am_i = $_SERVER['PHP_SELF']; // $_SERVER is a reserved variable in php, very handy
if (basename($who_am_i, ".php") == 'index') // basename returns the end of a path, here we exclude the fileextension
{
	$ind ='ind';
	$title = $lang['ACP_INDEX'];
	include ('./style/header.html');
}
else
	include ('./style/header.html');

if ($ind == 'ind')
{	echo '<p>' . $lang['ACP_WELCOME'] . '</p>';
	?><pre>


	  NEW ORDERS	  Add product

							  Hide product

		 Open orders			Hide page

								   Close shop</pre>
	<?
}
include('./functions.php');
?>
