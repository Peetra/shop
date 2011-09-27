<?php
function where_am_i($file_name, $file_name2)
{
	$who_am_i = $_SERVER['PHP_SELF'];
	if (basename($who_am_i, ".php") == $file_name)
		{
			$title = '';
			$desc = '';
			$keywords = '';
			include ('./styles/default/header.html');
			echo '<p>_&lt;</p>'; // I happens to like funny faces, I'll remove when I have to.
		}
	elseif (basename($who_am_i, ".php") == $file_name2)
		{
			echo '<p>^_^</p>'; // I happens to like funny faces, I'll remove when I have to.
			include ('./styles/default/footer.html');
		}
}
?>
