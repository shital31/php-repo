<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>


<ul>
    <a href="login.php">Log out</a><br>
    <a href="adduser.php">Add User</a><br>
    <a href="update.php">Update</a><br>
    <a href="delete.php">Delete</a>
    </ul>
 <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forms";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// echo "<table border='1' cellpadding='10'>";
// echo "<tr> <th>ID</th> <th> Name</th> <th>Address</th> <th>Phone Number</th> <th>Email</th> <th>password</th> </tr>";


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    { 
        // echo "<tr>";
        // echo "<td>" . $row->id . "</td>";
        // echo "<td>" . $row->name . "</td>";
        // echo "<td>" . $row->address . "</td>";  
        // echo "<td>" . $row->phone_number . "</td>";
        // echo "<td>" . $row->email . "</td>";
        // echo "<td>" . $row->password . "</td>"; 




         echo "id: " . $row["id"]."<br>"." Name : " . $row["name"]. "<br>". " Address:
         " . $row["address"]."<br>"."Phone Number :". $row["phone_number"] ."<br>".
          "Email :".$row["email"]."<br>"."Password :" . $row["password"] ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
     ?> 




</body>
</html>  