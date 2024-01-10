<?php
session_start();
$conn=mysqli_connect('localhost','root','','fitness');
if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql="select * from login where username='$username' && password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password)
    
{  $_SESSION['id']=$row['id'];
   echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
   echo $row['id'];
    echo '<script> location.href = "user.php"; </script> ';
    
}
else{
    echo'<script type="text/javascript">alert("check your login credentials");</script>';
    echo '<script> location.href = "login.html"; </script> ';

}
}
?>
