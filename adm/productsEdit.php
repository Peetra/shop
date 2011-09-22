<?php



//******* Thought I modify from pagesEdit, but, mm, I'll see **************//



error_reporting(E_ALL);
$who_am_i = $_SERVER['PHP_SELF'];
if (basename($who_am_i, ".php") != 'products')
	include ('./products.php');
$pID = 		(isset($_GET['pID'])) ? (int) $_GET['pID'] : 0;
$pagename = (isset($_GET['pagename'])) ? $_GET['pagename'] : '';
$pagename = strip_tags($pagename);
$pagename = ucfirst($pagename);
$headline = (isset($_GET['headline'])) ? $_GET['headline'] : '';
$desk = 	(isset($_GET['desk'])) ? $_GET['desk'] : '';
$prio = 		(isset($_GET['prio'])) ? (int) $_GET['prio'] : 0;
/* Takes the value that user inserts into $variables and SETs UPDATED values in cells */
$sql = "UPDATE {$prefix}products
		SET pagename = '$pagename', desk = '$desk', headline = '$headline', prio = '$prio'
		WHERE pID = '$pID'";
mysql_query($sql);
?>
  <h3 class="products"><?php echo $lang['CHANGE_PAGE_DETAILS']?></h3>
  <ul>
<?		// List products for easy access by clicking
        $sql = "SELECT * FROM {$prefix}products ORDER BY prio ASC";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
        {
          echo "<li class=\"products\"><a href=\"./productsEdit.php?pID=" . $row->pID . "&amp;pagename=" . $row->pagename . "&amp;desk=" . $row->desk . "&amp;headline=" . $row->headline . "&amp;prio=" . $row->prio . "\">";
          echo $row->pID . ' ' . $row->pagename. '</a></li>';
	//  echo '<p>' . $row->desk . '</p>';
        }
mysql_free_result($result);
?>
  </ul>
<form method="get" action="">
  <table>
    <tr>
	<td><?php echo $lang['PAGE_ID']?></td>
	<td><input type="text" name="pID" readonly value="<?php echo $pID; ?>"></td>
    <tr>
	<td><?php echo $lang['CHANGE_PAGE']?></td>
	<td><input type="text" name="pagename" value="<?php echo $pagename; ?>"></td>
    <tr>
	<td><?php echo $lang['PAGE_META']?></td>
	<td><input type="text" name="headline" value="<?php echo $headline; ?>"></td>
    <tr>
	<td><?php echo $lang['PAGE_DESC']?></td>
	<td><input type="text" name="desk" size="57" value="<?php echo $desk; ?>"></td>
    <tr>
	<td><?php echo $lang['PAGE_POSITION']?><br><small><?php echo $lang['PAGE_POSITION_EXPLAIN']?></small></td>
	<td><input type="text" name="prio" value="<?php echo $prio; ?>"></td>
  </table>
  <!-- FIX THIS!!-->
      <p><input type="submit" name="send"></p>
</form>
<?
if (basename($who_am_i, ".php") == 'productsEdit')
	include ('./style/footer.html');
