<?php
include 'include/config.php';
session_start();
if (isset($_POST['login'])) {
	$username = htmlspecialchars($_POST['username']); //$_POST['username'];
	$password = htmlspecialchars($_POST['password']);
	$hashpassword = md5($password);

	if (empty($username) =='' && empty($password) =='') {
		?>
			<script>
				alert('this field is blank...!')
				window.open('login.php','_self')
			</script>
		<?php
		exit();
	}
	if ($password === $hashpassword) {
		?><?php
	}else{
		?>
			<script>
				alert('Oops password did not match..!')
				window.open('login.php','_self')
			</script>
		<?php
	}
	$Query="SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$run = mysqli_query($con , $Query);
	if ($run == True) {
		?>
			<script>
				alert('Login Successfull please Goto Login...!')
				window.open('index.php','_self')
			</script>
		<?php
		$_SESSION['user']=$username;
		exit();
	}
 }
?>
