<?php // adm/index.php [Administration Control Panel]
error_reporting(E_ALL);
include('../connection.php');
define('LANG', true);
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
$title = 'ACP Index';
include ('./style/header.html');

// I 'll have to solve this somehow, I might want to do a url check for getting the oage check to show up only on index? 
$pagedesc = (isset($_GET['$pagedesc'])) ? (int) $_GET['$pagedesc'] : 1;
if ($pagedesc == 1)
	echo '<p>Welcome to your shop ACP. Use the navigation to personalize your business.
			<br> Fast actions can be managed from this overview. Good sales!</p>';
?>
