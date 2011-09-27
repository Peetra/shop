<?php
function where_am_i($file_name)
{
	$who_am_i = $_SERVER['PHP_SELF'];
	if (basename($who_am_i, ".php") == $file_name)
		{
			echo '<p>^_^</p>'; // I happens to like funny faces, I'll remove when I have to.
			include ('./styles/default/footer.html');
		}
}
where_am_i('functions');
?>
