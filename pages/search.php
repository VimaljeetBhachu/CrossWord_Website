<?php
               $id =$_POST["id"];
//$Username =$_POST["Username"];
//$Name =$_POST["Name"];
//$Mobile =$_POST["Mobile"];
//$Password =$_POST["Password"];
$operation = $_POST['Search'];
$conn = new mysqli("localhost", "root", "","bookstore");

if($operation=="Search")
{
   $sql = "select id,Username,Name,Mobile,Password from user where id = ".$id." ";
}

$r = $conn->query($sql);



   echo "<table border='1'>
                <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Password</th>
                </tr>";
            
                 while($row = mysqli_fetch_array($r))
                 {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['Username'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Mobile'] . "</td>";
                    echo "<td>" . $row['Password'] . "</td>";
                    echo "</tr>";
                 }
                echo "</table>";



?>