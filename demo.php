<?php
if(isset($_POST['btn']))
{
    $email=$_POST['email'];
    $pass=$_POST['password'];
    // $mobile=$_POST['mobile'];
    // $pass1=$_POST['pass1'];
    // $pass2=$_POST['pass2'];

    $con=mysqli_connect('localhost','root','','Insurance');
    if(!$con)
        die("error!!!");
    else
    {
        $reg="select * from user where email='$email' AND password='$pass'";
        $result=mysqli_query($con,$reg);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_array($result);
            $u=$row['username'];
            echo $u;
            session_start();
            $_SESSION['email']=$email;
            $_SESSION['username']=$u;
           // header('location:plans.php');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <!-- <input type="text" name="mobile">
        <input type="text" name="pass1">
        <input type="text" name="pass2"> -->
    <button name="btn" type="submit"> submit</button>
    </form>
</body>
</html>