<?php
error_reporting(E_ALL);

include ('./pages.php');
include ('../connection.php');
$pID = 		(isset($_GET['pID'])) ? (int) $_GET['pID'] : 0;
$pagename = (isset($_GET['pagename'])) ? $_GET['pagename'] : '';
$pagename = strip_tags($pagename);
$pagename = ucfirst($pagename);
$headline = (isset($_GET['headline'])) ? $_GET['headline'] : '';
$desk = strip_tags((isset($_GET['desk'])) ? $_GET['desk'] : '');
// $desk = 	(isset($_GET['desk'])) ? $_GET['desk'] : '';
$prio = 		(isset($_GET['prio'])) ? (int) $_GET['prio'] : 0;
  // the $prefix need {} around it to be read together with pages as it should
  $sql = "SELECT * FROM {$prefix}pages ORDER BY pagename ASC";
  $result = mysql_query($sql);
?>
<h3 class="pages"><?php echo $lang['ADD_PAGE']?></h3>
	<table class="pages">
		<tr><td>pID<td>Position<td>Pagename

<?
while($row=mysql_fetch_object($result))
{
  echo '<tr	class="per85"><td>' . $row->pID . '<td>' . $row->prio . '<td>';
  echo $row->pagename;
}
?>
	</table>
<?php
  mysql_free_result($result);
  $sql = "SELECT prio FROM {$prefix}pages ORDER BY prio DESC LIMIT 1";
	  $result = mysql_query($sql);
	  $row=mysql_fetch_object($result);
		  $prio = $row->prio+1;
  // desc was not available in mysql, therefor desk for description.
if ($pagename != '')
{
  $sql = "INSERT INTO {$prefix}pages (pagename, headline, desk, prio)
					  VALUES ('$pagename', '$headline', '$desk', $prio)";
  mysql_query($sql);
}
  mysql_free_result($result);
//mysql_close($connection);
?>
</ul>
<!-- Create new page html-->
<form method="get" action="pagesAdd.php">
<table>
<tr>
	<td> <?php echo $lang['NEW_PAGE']?><br><span class="per75"><?php echo $lang['NEW_PAGE_EXPLAIN']?></span>
	<td><input type="text" name="pagename" required >
<tr>
	<td><?php echo $lang['PAGE_META']?><br><span class="per75"><?php echo $lang['PAGE_META_EXPLAIN']?></span>
	<td><input type="text" name="headline">
<tr>
	<td><?php echo $lang['PAGE_DESC']?><br><span class="per75"><?php echo $lang['PAGE_DESC_EXPLAIN']?></span>
	<td><input type="text" name="desk">
<tr>
	<td><?php echo $lang['PAGE_POSITION']?><br><span class="per75"><?php echo $lang['PAGE_POSITION_EXPLAIN']?></span>
	<td><input type="text" name=prio">
<tr>
	<td><input type="submit" name="send">
	<td><input type="reset">
</table>
</form>
<?php
include ('./style/footer.html');
