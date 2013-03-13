<?php // adm/settings.php

// $ = (isset($_GET[''])) ? (int) $_GET[''] : 0;

error_reporting(E_ALL);
include ('./index.php');
$title = $lang['ACP_SETTINGS']; // To be used for headline tags
echo '<div id="acp-top-explanation"><h3>' . $lang['ACP_SETTINGS_TITLE'] . '</h3>';
echo '<p>' . $lang['ACP_SETTINGS_EXPLAIN'] . '</p></div>';
$title1 = (isset($_GET['title1'])) ? $_GET['title1'] : '';
$tracker = (isset($_GET['tracker'])) ? $_GET['tracker'] : '';
$open = (isset($_GET['open'])) ? (int) $_GET['open'] : 0;

//Showing as PHP code
// $sql = "ALTER TABLE `194D_shop_settings` CHANGE `tracker` `tracker` VARCHAR(2000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT \'Insert your analytics code here\', CHANGE `language` `language` TINYINT(2) NOT NULL, CHANGE `open` `open` TINYINT(1) NULL DEFAULT \'42\'";
/* echo $sql;
 $sql = "SELECT * FROM {$prefix}settings";
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);
    if (isset($_POST['submit']) && isset($row['tracker']))
    {
	  //  $sql = "UPDATE content SET etusivu = '$message_etusivu' WHERE etusivu = '" . $row['tracker'] . "'";
        mysql_query($sql) or die(mysql_error());
    }
    else if (isset($row['tracker']))
    {
        $tracker = $row['tracker'];
    }
	

/*if ($tracker != '')
{
	$sql = "INSERT INTO {$prefix}settings (tracker, open)
						  VALUES ('$tracker', '$open')";
	mysql_query($sql);
}*/
?>
	<div id="sidemenu">
		<ul>
		<li><a href="./.php"><?= $lang['']?>asdasd</a></li>
		</ul>
	</div>
    <div id="pages">
	<form method="get" action="">
	 	<p3 class="pages"><?=$lang['title1'];?>
		<!-- The statement "required" isn't supported properly in IE9, do not rely on in just yet. -->
		<input type="text" name="title1" required value="<?=stripslashes($title1);?>">
	   	<input type="submit" name="send" value="<?=$lang['SEND']?>"><input type="reset" value="<?=$lang['RESET']?>"></p>
	</form>
    </div>
	
    <?php
	if ($title1 != '')
	{
	    $sql = "UPDATE {$prefix}settings SET title1 = '$title1'";
	    mysql_query($sql);
	}
    ?>
 <!--   <div id="pages">
	<form action="" method="get">
		<div class="pages"><?= $lang['ONOFF']?> <input type='radio' name='onoff' value='open' /><?= $lang['OFF']?>. <input type='radio' name='onoff' value='open' /><?= $lang['ON']?>
		</div>
        <br /><br /><br /><br /><br />
				<h3 class="pages" ><?= $lang['TRACKER']?></h3>
			<p class="pages"><?= $lang['TRACKER_EXPLAIN']?>
            	<br />
			<textarea name="tracker" rows='12' cols='90' value="<?=$tracker?>"></textarea><input type="submit" name="send" value="<?=$lang['SEND']?>">
            </p>
		</div>
     </form>
<?php
mysql_free_result($result);
where_is_adm('', 'groups');

// function muokkkaa_etusivu is just a copy/paste of my own old code, it is here for reference, please let me remember to remove this :P 
function muokkaa_etusivu()
{
    $message_etusivu = (isset($_POST['content'])) ? $_POST['content'] : ''; // kollar att variabeln message_etusivu har ett värde
    $sql = "SELECT * FROM content";
    $result = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_array($result);
    if (isset($_POST['submit']) && isset($row['etusivu']))
    {
	// Kun tietokanta on auki graafisella työkalulla ei ole enää tarvetta turvata php-koodissa.
	//	$message_etusivu = mysql_real_escape_string($message_etusivu);
        $sql = "UPDATE content SET etusivu = '$message_etusivu' WHERE etusivu = '" . $row['etusivu'] . "'";
        mysql_query($sql) or die(mysql_error());
    }
    else if (isset($row['etusivu']))
    {
        $message_etusivu = $row['etusivu'];
    }
?>
<div>
<form action="action.php?action=muoks_etusivu" method="post"  name="frm_cms" id="frm_cms">
    Muokattava etusivun teksti, maks 420 merkkiä:
    <br />
	Rivinvaihto (br /) ja tekstin lihavointi (strong), jota ehkä haluat kopioda XHTML-formatointia varten löytyy tämänn tekstin alla.	<br />
	<input type="text" name="br" size="4" value="<br />" />
	<input type="text" name="br" size="18" value="<strong></strong>" /><br />
	<input type="text" name="br" size="40" value='<span style= "color: blue" >Väritä</span>' />
	<a href= "http://en.wikipedia.org/wiki/Web_colors#HTML_color_names" target="_blank"><u>Värikoodit</u></a> (avautuu uuteen ikkunaan)
    <textarea rows="8" cols="67" name="content"><?php echo stripslashes($message_etusivu); ?></textarea>
    <br />
    Klikkaa "Muuta etusivun viestiä!" muuttaaksesi etusivun viestiä. 
    <div class="centrera">
        <input type="submit" name="submit"  value="Muuta etusivun viestiä!" />
        <input type="reset" value="Tyhjennä!" />
    </div>
</form>
</div>
<?php
mysql_free_result($result);
}