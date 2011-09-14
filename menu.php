<?php
$page = $GET_['page'];
$mej = $_SERVER['PHP_SELF'];  //naa, hopefully a temporary solution. :/
echo '<menu>';
        $sql = "SELECT * FROM {$prefix}pages";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
		{
          echo '<a href="' . $mej . '?page=' . $row->pID . '">' . $row->pagename. '</a> ';
        }
        switch($page)
		{
			case "$row->pID":
				// some_funky_function();
				break;
				default:
				// no default needed?();
		}
		        mysql_free_result($result);
echo '</menu>';
?>
