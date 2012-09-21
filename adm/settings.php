<?php // adm/settings.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['ACP_SETTINGS']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang['ACP_SETTINGS_TITLE'] . '</h3>';
echo '<p>' . $lang['ACP_SETTINGS_EXPLAIN'] . '</p></div>';
//Showing as PHP code
$sql = "ALTER TABLE `194D_shop_settings` CHANGE `tracker` `tracker` VARCHAR(2000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT \'Insert your analytics code here\', CHANGE `language` `language` TINYINT(2) NOT NULL, CHANGE `open` `open` TINYINT(1) NULL DEFAULT \'42\'";
echo $sql;
?>
	<div id="sidemenu">
	<ul>
	<li><a href="./.php"><?= $lang['']?>asdasd</a></li>
	<li><a href="./.php"><?= $lang['']?>asdasd</a></li>
	<li><a href="./.php"><?= $lang['']?>sdasd</a></li>
	</ul>
	</div>
	<form action="" method="get">
	<h3 class="pages"><?= $lang['']?></h3>
	  <p class="pages"><?= $lang['']?>.</p>
		<div class="pages"><?= $lang['ONOFF']?>. <input type='radio' name='onoff' value='0' /><?= $lang['OFF']?>. <input type='radio' name='onoff' value='42' /><?= $lang['ON']?>.<input type="submit" name="send" value="<?=$lang['SEND']?>">
		</div>
	</form>
	<form action="" method="get">
		<div class="pages2">
			<h3><?= $lang['TRACKER']?></h3>
			<p><?= $lang['TRACKER_EXPLAIN']?></p>
			<textarea name="tracker" rows='3' cols='20' value="<?=$tracker?>"></textarea><input type="submit" name="send" value="<?=$lang['SEND']?>">
		</div>
	</form>
<?php
where_is_adm('', 'groups');
?>
