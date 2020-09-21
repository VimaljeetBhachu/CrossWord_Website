
<!DOCTYPE html>
<html>
<body>
<?php
  
    $conn = new mysqli("localhost","root","","bookstore");

    if($conn-> connect_error)
    {
    	echo "Connection to DataBase ERROR!!\n";
    }
    else
    {
    	echo "Connection to Database Estabilished Successfully\n";

    	$sql = "SELECT id, Name, Mobile FROM user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)  	
        {
        // output data of each row
           while($row = $result->fetch_assoc()) 
           {
              echo "<br> id: ". $row["id"]. " - Name: ". $row["Name"]. " - Mobile: " . $row["Mobile"] . "<br>";
           }
        } 
        else 
        {
           echo "0 results";
        }

       $conn->close();
    } 
?>
</body>
</html>
