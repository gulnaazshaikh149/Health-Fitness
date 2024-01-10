<html>
<style>
  
  
</style>
<body>
<section id="main">
        <nav>
            <img src="logo.png"><a href="#"></a>
            <div class="toggle"></div>
            <ul class="menu">
                <li class="active"><a href="admin.php">FUNDS</a></li>
                <li><a href="admin1.php">MESSAGES</a></li>
            </ul>
            
        </nav>
    </section>
    <br>
    <br>

    <h1>Funds Collection</h1>
<table>
    <tr>
    <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact </th>    
        <th>Donation Type </th>
        <th>Amount in Rupees</th>
    </tr>
<?php

$connect = mysqli_connect("localhost", "root", "", "donation");
$sum=0;
$result=mysqli_query($connect, "Select * from info order by date desc");
if($result->num_rows>0){
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["name"] . "</td><td>"
        . $row["email"]. "</td><td>" . $row["number"]. "</td><td>" . $row["type"]. "</td><td>" .$row["amount"]. "</td></tr>";
        $sum += $row['amount'];
        }
    echo " </table>";
  
    echo "<h1>Total Funds Collected are Rs.$sum</h1>";
  
    }
    else
   { echo " No result";
}

?>

</table>




</body>

