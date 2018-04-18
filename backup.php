<?php
	$old_path = getcwd();
	chdir('/var/www/');
	shell_exec('./backup.sh');
	chdir($old_path);
	header("Location:Backup.php");
?>