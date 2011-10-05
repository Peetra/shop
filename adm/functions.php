<?php
if(!defined('LANG'))
	exit;
	
function search_user_form($lang,$searchuser)
{
	global $lang;
	?>
		<div class="per85"><fieldset class="pages">
			<legend><?=$lang['SEARCH_USER']?></legend>
				<form method="get" action="">
					<p><?=$lang['SEARCH_USER_EXPLAIN']?></p>
					<p><input type="text" name="searchuser" value="<?=$searchuser?>">
						<input type="submit" name="send">
						<input type="reset">
				</form>
		</fieldset></div>
	<?
}
function item_menu()
{
	global $lang;
?>
	<div id="sidemenu">
	<ul>
	<li><a href="./pagesEdit.php"><?= $lang['EDIT_PAGE']?></a></li>
	<li><a href="./pagesAdd.php"> <?= $lang['NEW_PAGE']?></a></li>
	<li><a href="./pagesDelete.php"><?= $lang['DEL_PAGE']?></a></li>
	<li><a href="./groups.php"><?= $lang['MANAGE_GROUPS']?></a></li>
	</ul>
	</div>
<?php
}

function where_is_adm($file_name, $file_name2)
{
	$who_am_i = $_SERVER['PHP_SELF'];
	if (basename($who_am_i, ".php") == $file_name)
		{
			$title = ':)';
			$desc = '';
			$keywords = '';
			include ('./style/header.html');
		}
	elseif (basename($who_am_i, ".php") == $file_name2)
			include ('./style/footer.html');
}
