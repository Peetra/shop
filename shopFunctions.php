<?php
function where_am_i($file_name)
{
	$who_am_i = $_SERVER['PHP_SELF'];
	if (basename($who_am_i, ".php") == $file_name)
		{
			include ('./styles/default/footer.html');
			echo '^_^';
		}
}
where_am_i('functions');
?>
