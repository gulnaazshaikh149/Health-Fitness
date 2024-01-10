<?php

include 'db_connection.php';
$con=open();
if(isset($_POST['submit'])){
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$health=$_POST['health'];
$allergy=$_POST['allergy'];
$username=$_POST['username'];
$password=$_POST['password'];

$query1="INSERT INTO details(name,age,gender,height,weight,health,allergy) value('$name','$age','$gender','$height','$weight','$health','$allergy')";
$result=mysqli_query($con,$query1);
$query2="INSERT INTO login(username,password) values('$username','$password')";
$result=mysqli_query($con,$query2);

if(!$result){
    echo '<script>window.alert("There was some Technical Error.")';
}
else{
   echo '<script>window.alert("Successful!!")
   window.location="box.html";</script>';
     
}

}
?>
