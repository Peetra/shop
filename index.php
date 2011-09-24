<?php // ./index.php Landing page
error_reporting(E_ALL);
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
include('./lang/' . $lang . '.php');
include('./connection.php');
include('./functions.php');
$title = 'Start';
$desc = 'Description of site'; // I'll try to remember to suff this in teh db. 
include('./styles/default/header.html');
include('menu.php');
?>
