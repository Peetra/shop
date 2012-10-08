<?php

// Check the filename currently in use
function where_am_i($file_name, $file_name2)
{
	global $style;
	$who_am_i = $_SERVER['PHP_SELF'];
	if (basename($who_am_i, ".php") == $file_name)
		{
			$title = ':)';
			$desc = '';
			$keywords = '';
			include ('./styles/' . $style . '/header.html');
		}
	elseif (basename($who_am_i, ".php") == $file_name2)
			include ('./styles/' . $style . '/footer.html');
}
?>
