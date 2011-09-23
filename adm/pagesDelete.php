<?php // adm/pagesDelete.php
error_reporting(E_ALL);
include ('./pages.php');
$title = $lang['DEL_PAGE'];
$pID = 		(isset($_GET['pID'])) ? (int) $_GET['pID'] : 0;
$pagename = (isset($_GET['pagename'])) ? $_GET['pagename'] : '';
$sql = "DELETE FROM {$prefix}pages WHERE pID = '$pID'";

$really = $lang['DEL_PAGE_REALLY'] . ' '; // defining the lang string for the js-code here
mysql_query($sql);
?>
<h3 class="pages"><?php echo $lang['DEL_PAGE']?></h3>
  <p class="pages"><?php echo $lang['DEL_PAGE_EXPLAIN']?>.</p>
  <ul>
	<span class="per85">

<?
        $sql = "SELECT * FROM {$prefix}pages ORDER BY prio ASC";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
        {
          echo "<li class=\"pages\"><a href=\"./pagesDelete.php?pID=" . $row->pID .
		  "&amp;pagename=" . $row->pagename .
		  '"onclick="return confirm(\'' . $really, $row->pagename . '?\');">';
          echo $row->pID . ' ' . $row->pagename. '</a></li>';

	  echo "\n";
        }
mysql_free_result($result);
?>
	</span>
 </ul>
<?php
// Close db-connection
mysql_close($connection);
?>
