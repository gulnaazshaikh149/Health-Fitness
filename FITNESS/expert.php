<?php

$conn=mysqli_connect('localhost','root','','fitness');
if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql="select * from expert where username='$username' && password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password)
    
{
    echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
    echo '<script> location.href = "expert1.php"; </script> ';
}
else{
    echo'<script type="text/javascript">alert("check your login credentials");</script>';
    echo '<script> location.href = "expert.php"; </script> ';

}
}
?>