<?php
error_reporting(E_ALL);

include ('./products.php');
include ('../connection.php');
	include ('./products.php');
$iID = 		(isset($_GET['iID'])) ? (int) $_GET['iID'] : 0;
$gID = 		(isset($_GET['gID'])) ? (int) $_GET['gID'] : 0;
$productname = (isset($_GET['productname'])) ? $_GET['productname'] : '';
$productname = strip_tags($productname);
$productname = ucfirst($productname);
$productdesc = (isset($_GET['productdesc'])) ? $_GET['productdesc'] : '';
$color = 	(isset($_GET['color'])) ? $_GET['color'] : '';
$price = 		(isset($_GET['price'])) ? (int) $_GET['price'] : 0;

  // the $prefix need {} around it to be read together with products as it should
  $sql = "SELECT * FROM {$prefix}items ORDER BY iID ASC";
  $result = mysql_query($sql);
?>
<h3 class="products"><?= $lang['ADD_PRODUCT']?></h3>
	<table class="products">
		<tr><td>pID<td>Price<td>Pagename

<?
while($row=mysql_fetch_object($result))
{
  echo '<tr	class="per85"><td>' . $row->pID . '<td>' . $row->price . '<td>';
  echo $row->productname;
}
?>
	</table>
<?php
  mysql_free_result($result);
if ($productname != '')
{
  $sql = "INSERT INTO {$prefix}products (productname, productdesc, productdesc, color, price)
					  VALUES ('$productname', '$productdesc', '$productdesc', ' $color', $price)";
  mysql_query($sql);
}
  mysql_free_result($result);
//mysql_close($connection);
?>
</ul>
<!-- Create new page html-->
<form method="get" action="productsAdd.php">
<table>
<tr>
	<td> <?= $lang['NEW_PRODUCT_']?><br><span class="per75"><?= $lang['NEW_PRODUCT_EXPLAIN']?></span>
	<td><input type="text" name="productname" required >
<tr>
	<td><?= $lang['PRODUCT_META']?><br><span class="per75"><?= $lang['PRODUCT_META_EXPLAIN']?></span>
	<td><input type="text" name="productdesc">
<tr>
	<td><?= $lang['DESC']?><br><span class="per75"><?= $lang['PRODUCT_DESC_EXPLAIN']?></span>
	<td><input type="text" name="productdesc">
<tr>
	<td><?= $lang['PRODUCT_PRICE']?><br><span class="per75"><?= $lang['PRODUCT_PRICE_EXPLAIN']?></span>
	<td><input type="text" name=price">
<tr>
	<td><input type="submit" name="send">
	<td><input type="reset">
</table>
</form>
<?php
where_is_adm('', 'productsAdd');
