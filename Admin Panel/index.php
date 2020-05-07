<?php
include 'include/config.php';
session_start();
if (!isset($_SESSION['user'])) {
	?>
		<script>
			alert('session is denied...!')
			window.open('login.php','_self')
		</script>
	<?php
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DashBaord | Insurance Policy</title>
</head>
<body>
	
</body>
</html>