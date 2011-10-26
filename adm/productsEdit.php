<?php
//******* Thought I modify from pagesEdit, but, mm, I'll see **************//

error_reporting(E_ALL);
$who_am_i = $_SERVER['PHP_SELF'];
if (basename($who_am_i, ".php") != 'products')
	include ('./products.php');
$iID = 		(isset($_GET['iID'])) ? (int) $_GET['iID'] : 0;
$gID = 		(isset($_GET['gID'])) ? (int) $_GET['gID'] : 0;
$productname = (isset($_GET['productname'])) ? $_GET['productname'] : '';
$productname = strip_tags($productname);
$productname = ucfirst($productname);
$productdesc = (isset($_GET['productdesc'])) ? $_GET['productdesc'] : '';
$color = 	(isset($_GET['color'])) ? $_GET['color'] : '';
$price = 		(isset($_GET['price'])) ? (int) $_GET['price'] : 0;
/* Takes the value that user inserts into $variables and SETs UPDATED values in cells */
$sql = "UPDATE {$prefix}items
		SET productname = '$productname', color = '$color', productdesc = '$productdesc', price = '$price'
		WHERE iID = '$iID'";
mysql_query($sql);
?>
  <h3 class="pages"><?= $lang['CHANGE_PRODUCT_DETAILS']?></h3>
  <ul>
<?		// List products for easy access by clicking
        $sql = "SELECT * FROM {$prefix}items ORDER BY price ASC";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
        {
          echo "<li class=\"pages\"><a href=\"./productsEdit.php?iID=" . $row->iID . "&amp;productname=" . $row->productname . "&amp;color=" . $row->color . "&amp;productdesc=" . $row->productdesc . "&amp;price=" . $row->price . "\">";
          echo $row->iID . ' ' . $row->productname. '</a></li>';
        }
mysql_free_result($result);

?>
  </ul>
<form method="get" action="">
  <table class="pages">
    <tr>
	<td><?= $lang['PRODUCT_ID']?></td>
	<td><input type="text" name="iID" readonly value="<?= $iID; ?>"></td>
    <tr>
	<td><?= $lang['NAME_GROUP']?></td>
	<td><input type="text" name="gID" value="<?= $gID; ?>"></td>
    <tr>
	<td><?= $lang['CHANGE_PRODUCTNAME']?></td>
	<td><input type="text" name="productname" value="<?= $productname; ?>"></td>
    <tr>
	<td><?= $lang['DESC']?></td>
	<td><input type="text" name="productdesc" value="<?= $productdesc; ?>"></td>
    <tr>
	<td><?= $lang['PRODUCT_COLOR']?></td>
	<td><input type="text" name="color" value="<?= $color; ?>"></td>
    <tr>
	<td><?= $lang['PRODUCT_PRICE']?></td>
	<td><input type="text" name="price" value="<?= $price; ?>"></td>
	<!-- FIX THIS!!-->
	<td></td>    <td><input type="submit" name="send"></td>
  </table>
</form>
<?
where_is_adm('', 'productsEdit');
