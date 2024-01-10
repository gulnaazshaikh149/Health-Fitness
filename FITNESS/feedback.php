<?php

include 'db_connection.php';
$con=open();
    
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$query="INSERT INTO feedback(name,email,message) values('$name','$email','$message')";

$res=mysqli_query($con,$query);

if(!$res){
    echo '<script>window.alert("There was some Technical Error.")';
}
else{
   echo '<script>window.alert("Message sent Successfully.")
    window.location="index.html";</script>';

}
}
?>
