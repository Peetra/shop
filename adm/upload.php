<?php // adm/upload.php 
if(!defined('LANG')) { exit; }

$pic = (isset($_GET['pic'])) ? $_GET['pic'] : '';

?>
<tr>
	<td> <?= $lang['NEW_PRODUCT']?><br><span class="per75"><?= $lang['NEW_PRODUCT_EXPLAIN']?></span>
	<td><input name="frmfile" type="file" id="frmfile" size="70" /></td>


