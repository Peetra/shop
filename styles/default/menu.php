<?php
// global $lang;
echo '<br><br><div class="menu">';
        $sql = "SELECT * FROM {$prefix}pages ORDER BY pID ASC";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
		{
			if (!$row->prio==0)
			  echo '<a href="index.php?page=' . $row->pID . '">' . $row->pagename. '</a> ';
		}
echo '<br><!-- If user logged in and admin, functions yet to be done. --> | <a href="./adm/">[ REAL ACP ] </a>';
echo '<a href="shopUsers.php">[ shopUsers.php ] </a></div>';

echo '<img id="logo" src="styles/' . $style . '/img/shop_logo.png">';
?>