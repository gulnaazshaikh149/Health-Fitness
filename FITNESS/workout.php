<?php

include 'db_connection.php';
$con=open();
    
if(isset($_POST['submit'])){
$id=$_POST['id'];
$workout=$_POST['workout'];

$query="UPDATE details SET workout='$workout' WHERE id='$id'";
echo $workout;
$res=mysqli_query($con,$query);

if(!$res){
    echo '<script>window.alert("There was some Technical Error.")';
}
else{
   echo '<script>window.alert("Successful!!")
    window.location="expert1.php";</script>';
}
}
?>
