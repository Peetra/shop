<?php
$page = (isset($GET_['page'])) ? (int)$_GET['page'] : 0;
$mej = $_SERVER['PHP_SELF'];
echo '<menu>';
        $sql = "SELECT * FROM {$prefix}pages";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
		{
          echo '<a href="' . $mej . '?page=' . $row->pID . '">' . $row->pagename. '</a> ';
        }
        switch($page)
		{
			case '$row->pID':
				// some_funky_function();
				break;
				default:
				// no default needed?();
		}
		        mysql_free_result($result);
echo '</menu>';
?>
