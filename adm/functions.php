<?php
if(!defined('LANG')){ exit; }
function search_user_form($lang,$searchuser)
{
	global $lang;
	?>
		<div class="per75"><fieldset class="pages">
			<legend><?=$lang['SEARCH_USER']?></legend>
				<form method="get" action="">
					<p>Give user name</p>
					<p><input type="text" name="searchuser" value="<?=$searchuser?>">
						<input type="submit" name="send">
						<input type="reset">
				</form>
		</fieldset></div>
	<?
}