<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style type = "text/css">
    h1{
        text-align: center;
      color: rgb(102, 102, 102);
    }
    body {
    background: #f5efe0;
    box-sizing: border-box;
    color: #000;
    font-size: 1.8rem;
    letter-spacing: -0.015em;
    text-align: center;
}
     table {
margin-left: auto;
margin-right: auto;
width: 80%;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
background: #666;
<color:rgb(255, 255, 255);
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: 15px;
text-align: center;
border: 1px solid #DDD;
}

        
    </style>
</head>
<body>
    <h1>DATA ENTRY OF CONTACT INFORMATION</h1>

    <?php
    // include("insert.php");
    


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name, Phone_no, email, message, subject FROM enquiry"; /*select items to display from the sensordata table in the data base*/

echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <th>Name</th> 
        <th>Phone_no</th> 
        <th>email</thh> 
        <th>message</th> 
        <th>subject</th> 
              
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_Name = $row["Name"];
        $row_Phone_no = $row["Phone_no"];
        $row_email = $row["email"];
        $row_message = $row["message"];
        $row_subject = $row["subject"];
       
        
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
       // $row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      
        echo '<tr> 
                <td>' . $row_Name . '</td> 
                <td>' . $row_Phone_no. '</td> 
                <td>' . $row_email . '</td> 
                <td>' . $row_message . '</td> 
                <td>' . $row_subject . '</td> 
               
                
              </tr>';
    }
    $result->free();
}

$conn->close();
?> 
</table>



	


</body>
</html>

