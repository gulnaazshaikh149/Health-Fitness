<?php

include 'db_connection.php';
$con=open();
    
if(isset($_POST['submit'])){
$id=$_POST['id'];
$diet=$_POST['diet'];
$workout=$_POST['workout'];

$query1 = "UPDATE details SET diet='$diet' WHERE id='$id'";
$query2 = "UPDATE details SET workout='$workout' WHERE id='$id'";
$res=mysqli_query($con,$query1);
$res=mysqli_query($con,$query2);

if(!$res){
    echo '<script>window.alert("There was some Technical Error.")';
}
else{
   echo '<script>window.alert("Successful!!")
    window.location="expert1.php";</script>';

}
}
?>
