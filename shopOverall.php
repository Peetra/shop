<?php
define('LANG', true); // The user doesn't get anywhere w/o words in the interface.			
if (!empty($_GET['lang']))
	$lang = $_GET['lang'];
	else if (!empty($_COOKIE['lang']))
			$lang = $_COOKIE['lang'];
			else $lang = 'en';

// $lang = ($lang == 'sv') ? 'sv' : 'en';

setcookie('lang', $lang);
include('./lang/' . $lang . '.php');
include('./connection.php');
include('./inc/shopFunctions.php');
where_am_i(('shopOverall' || 'index' || 'shopUsers'),'');

include('./styles/' . $style . '/menu.php');

echo $lang['TEST'] . '<br>';
		// Notice: Undefined index: page in /home/peetra/public_html/shop/menu.php on line 13
        switch(@$_GET['page'])
		{
			case 0:
				echo 'case 0, gömt innehåll - HÄÄ-HÄÄ';
				break;
			case 1:
			echo basename(__FILE__);
			case 2:
				// Just an exmple
				$arr = explode('.', basename(__FILE__));
				var_dump($arr[0]);
				break;
			case '':
				break;
			case '':
				break;
			case '':
				break;
				break;
				default:
				echo 'HÄÄ-HÄÄ - default:No page indexed - HÄÄ-HÄÄ';
		}
		        mysql_free_result($result);
where_am_i('','shopOverall');

?>
