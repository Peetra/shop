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
        switch(@$_GET['page'])
		{
			case 0:
				echo 'case 0,';
				break;
			case 1:
			echo basename(__FILE__);
			case 2:
				// Just an exmple A YEAR LATER: UMMM, what was I testing here? Better leave it for now. 
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
	
// so... Let us show some user defined content here. 

$page = (isset($_REQUEST['page'])) ? $_REQUEST['page'] : '0'; 

echo '<p>';
        $sql = "SELECT * FROM {$prefix}pages WHERE pID = $page";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
		{
			if (!$row->prio==0) 
			  echo ' X ' . $row->pagename . '<br>XXXX<br>' .  $page;
			  // while($page=$row->pID)
			  	echo $row->content;
		}
echo '</p>';
mysql_free_result($result);
where_am_i('','shopOverall');

?>
