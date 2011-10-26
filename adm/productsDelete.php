<?php // adm/productsDelete.php
error_reporting(E_ALL);
include ('./products.php');
$title = $lang['DEL_PRODUCT'];
$iID = 		(isset($_GET['iID'])) ? (int) $_GET['iID'] : 0;
$pagename = (isset($_GET['productname'])) ? $_GET['productname'] : '';
$sql = "DELETE FROM {$prefix}items WHERE iID = '$iID'";

$really = $lang['DEL_PRODUCT_REALLY'] . ' '; // defining the lang string for the js-code here
mysql_query($sql);
?>
<h3 class="pages"><?= $lang['DEL_PRODUCT']?></h3>
  <p class="pages"><?= $lang['DEL_PRODUCT_EXPLAIN']?>.</p>
  <ul>
	<span class="per85">

<?
        $sql = "SELECT * FROM {$prefix}items";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
        {
          echo "<li class=\"pages\"><a href=\"./productsDelete.php?iID=" . $row->iID .
		  "&amp;productname=" . $row->productname .
		  '"onclick="return confirm(\'' . $really, $row->productname . '?\');">';
          echo $row->iID . ' ' . $row->productname. '</a></li>';

	  echo "\n";
        }
mysql_free_result($result);
?>
	</span>
 </ul>
<?php
// Close db-connection
mysql_close($connection);
where_is_adm('', 'productsDelete')
?>
