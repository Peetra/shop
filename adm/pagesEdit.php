<?php
error_reporting(E_ALL);
$who_am_i = $_SERVER['PHP_SELF'];
if (basename($who_am_i, ".php") != 'pages')
	include ('./pages.php');
$pID = 		(isset($_GET['pID'])) ? (int) $_GET['pID'] : 0;
$pagename = (isset($_GET['pagename'])) ? $_GET['pagename'] : '';
$pagename = strip_tags($pagename);
$pagename = ucfirst($pagename);
$headline = (isset($_GET['headline'])) ? $_GET['headline'] : '';
$desk = (isset($_GET['desk'])) ? $_GET['desk'] : '';
$prio = (isset($_GET['prio'])) ? (int) $_GET['prio'] : 0;
$prio = strip_tags($prio);
/* Takes the value that user inserts into $variables and SETs UPDATED values in cells */
$sql = "UPDATE {$prefix}pages
		SET pagename = '$pagename', desk = '$desk', headline = '$headline', prio = '$prio'
		WHERE pID = '$pID'";
mysql_query($sql);
?>
  <h3 class="pages"><?php echo $lang['CHANGE_PAGE_DETAILS']?></h3>
  <table class="pages">
    <tr  class="pages"><td>pID | Pagename</td><td>Notes</td>
<?		// List pages for easy access by clicking
        $sql = "SELECT * FROM {$prefix}pages ORDER BY prio ASC";
        $result = mysql_query($sql);
        while($row=mysql_fetch_object($result))
        {
          echo "<tr><td><a href=\"./pagesEdit.php?pID=" . $row->pID . "&amp;pagename=" . $row->pagename . "&amp;desk=" . $row->desk . "&amp;headline=" . $row->headline . "&amp;prio=" . $row->prio . "\">";
          echo $row->pID . ' ' . $row->pagename. ' </a><td><span class="per75"> ' . $row->desk . '</span></td>';
        }
mysql_free_result($result);
?>
  </table>
<?php
if ($pID != 0)
{
?>	<!-- this fieldset/legend stuff is not any good option for IE9, shall reconsider -->
	<fieldset>
		<legend><?php echo $lang['CHANGE_PAGE_DETAILS']?></legend>
<form method="get" action="">

  <table>
    <tr>
	<td><?php echo $lang['PAGE_ID']?></td>
	<td><input type="text" name="pID" size="3" readonly value="<?php echo $pID; ?>"></td>
    <tr>
	<td><?php echo $lang['CHANGE_PAGE']?></td>
	<td><input type="text" name="pagename" required value="<?php echo $pagename; ?>"></td>
    <tr>
	<td><?php echo $lang['PAGE_META']?></td>
	<td><input type="text" name="headline" size="33"  value="<?php echo $headline; ?>"></td>
    <tr>
	<td><?php echo $lang['PAGE_DESC']?><br><span class="per75"><?php echo $lang['PAGE_DESC_EXPLAIN']?></span></td>
	<td><textarea name="desk" cols="33"	rows="3"><?php echo $desk; ?></textarea></td>
    <tr>
	<td><?php echo $lang['PAGE_POSITION']?><br><span class="per85"><?php echo $lang['PAGE_POSITION_EXPLAIN']?></span></td>
	<td><input type="text" name="prio" size="3" value="<?php echo $prio; ?>">
	    <input type="submit" name="send" ></td>
  </table>


</form>	</fieldset>
<?
}
if (basename($who_am_i, ".php") == 'pagesEdit')
	include ('./style/footer.html');
