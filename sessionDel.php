<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<body>
		<?php
			session_unset();
			session_destroy();
			
			echo "All session variables are now removed, and the sessions is destoryed."
		?>
	</body>
</html>