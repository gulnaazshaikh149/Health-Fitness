<?php

if(!isset($_SERVER['HTTP_REFERER'])){
  header('location:project.html');
  exit;
}
?>

<html>
  <head>
<style>
    body{
        background-color:whitesmoke;
    }
table {
border-collapse: collapse;
width: 70%;
font-family: monospace;
font-size: 15px;
text-align: center;
margin-left:170px;
margin-top:30px;
}
tr,td {
background-color:whitesmoke;
color:  #f5426f;
border: 3px solid black;
}
th{
    color:black;
    border: 3px solid black;
}
h1{
color:  #f5426f;
text-align:center;
font-family:monospace;
font-size:40px;
}
h2{
color:  #f5426f;
text-align:center;
font-family:monospace;
font-size:35px;
}
ul {
    list-style: none;
  }
nav {
display: flex;
justify-content: space-between;
align-items: center;
text-transform: uppercase;
font-weight: 600;
letter-spacing: 2px;
font-family: "calibri";
position: fixed;
top: 0;
left: 0;
width: 100%;
box-sizing: border-box;
padding: 10px 50px;
background-color: #fff;
box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.05);
z-index: 1;
height: 60px;
}

.menu {
  display: flex;
}
.menu li a {
  padding: 10px 15px;
  color: #6c707c;
  font-size: 12px;
}
.lang {
  color: #fff;
  font-size: medium;
}

.lang:hover {
  color: #f5426f;
  transition: all ease 0.5s;
}
.toggle {
  display: none;
}
.active a,
.menu li a:hover {
  background-color: #f5426f;
  color: #fff !important;
  font-weight: bold;
  transition: all ease 0.4s;
}
</style>
<link rel="icon" href="l1.JPG" type="image/icon type">
<title>Health X Fitness 360</title>
</head>
<body>
<section id="main">
        <nav>
        <h1>Health X Fitness 360</h1>
            <div class="toggle"></div>
            <ul class="menu">
                <li class="active"><a href="expert1.php">MEMBERS</a></li>
                <li><a href="expert2.php">FEEDBACKS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>

            </ul>
            
        </nav>
    </section>
    <br>
    <br>

    <h2>New Members</h2>
<table>
    <tr>
      <th>ID</th>
    <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Height</th>    
        <th>Weight</th>
        <th>Health</th>
        <th>Allergy</th>
        <th>Plan</th>
    </tr>
<?php

$connect = mysqli_connect("localhost", "root", "", "fitness");

$result=mysqli_query($connect, "Select id,name,age,gender,height,weight,health,allergy from details");
if($result->num_rows>0){
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["age"] . "</td><td>"
        . $row["gender"]. "</td><td>" . $row["height"]. "</td><td>" . $row["weight"]. "</td><td>" .$row["health"]. "</td><td>" .$row["allergy"]. 
        "</td><td><a href='diet.html';> UPLOAD</a></td></tr>";
        
        }
    echo " </table>";
  
  
    }
    else
   { echo " No result";
}

?>

</table>
</body>

