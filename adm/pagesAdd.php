<?php
error_reporting(E_ALL);

include ('./pages.php');
include ('../connection.php');
$pID = 		(isset($_GET['pID'])) ? (int) $_GET['pID'] : 0;
$pagename = (isset($_GET['pagename'])) ? $_GET['pagename'] : '';
$pagename = strip_tags($pagename);
$pagename = ucfirst($pagename);
$headline = (isset($_GET['headline'])) ? $_GET['headline'] : '';
$desk = 	(isset($_GET['desk'])) ? $_GET['desk'] : '';
$prio = 		(isset($_GET['prio'])) ? (int) $_GET['prio'] : 0;
	?>
	<ul>
	<?
		// the $prefix need {} around it to be read together with pages as it should
			$sql = "SELECT * FROM {$prefix}pages";
			$result = mysql_query($sql);
			while($row=mysql_fetch_object($result))
			{
			  echo '<li class="pages">' . $row->pID . ' ';
			  echo $row->pagename. '</li> ' ;
			}

			mysql_free_result($result);
	?>
	</ul>
	<!-- Create new page html-->
	<form method="get" action="pages.php">
	<table>
	<tr>
		<td> <?php echo $lang['NEW_PAGE']?>
		<td><input type="text" name="pagename">
	<tr>
		<td><?php echo $lang['PAGE_META']?>
		<td><input type="text" name="headline">
	<tr>
		<td><?php echo $lang['PAGE_DESC']?>
		<td><input type="text" name="desk">
	<tr>
		<td><?php echo $lang['PAGE_POSITION']?>
		<td><input type="text" name=prio">
	<tr>
		<td><input type="submit" name="send">
		<td><input type="reset">
	</table>
	</form>
	<?php
	$pagename = (isset($_GET['pagename'])) ? $_GET['pagename'] : '';
	$pagename = strip_tags($pagename);
	$pagename = ucfirst($pagename);

	$headline = (isset($_GET['headline'])) ? $_GET['headline'] : '';


	$desk = strip_tags((isset($_GET['desk'])) ? $_GET['desk'] : '');

	$prio = (isset($_GET['prio'])) ? $_GET['prio'] : '';

	if ($pagename != '')
	{
		$sql = "SELECT prio FROM {$prefix}pages ORDER BY prio DESC LIMIT 1";
			$result = mysql_query($sql);
			$row=mysql_fetch_object($result);
				$prio = $row->prio+1;
		// desc was not available in mysql, therefor desk for description.
		$sql = "INSERT INTO {$prefix}pages (pagename, headline, desk, prio)
							VALUES ('$pagename', '$headline', '$desk', $prio)";
		mysql_query($sql);
	}
	mysql_close($connection);
	include ('./style/footer.html');
