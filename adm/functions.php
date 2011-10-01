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
