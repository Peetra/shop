<?php
echo '<menu>';
        $sql = "SELECT * FROM {$prefix}pages";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
		{
			if (!$row->prio==0)
			  echo '<a href="index.php?page=' . $row->pID . '">' . $row->pagename. '</a> ';
		}
		// Notice: Undefined index: page in /home/peetra/public_html/shop/menu.php on line 13
        switch($_GET['page'])
		{
			case 0:
				echo 'Hidden content';
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
				echo 'No page indexed';
		}
		        mysql_free_result($result);
echo '</menu>';
?>
