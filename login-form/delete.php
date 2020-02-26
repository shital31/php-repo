<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="delete" method="post">
<input type="number" value="id">
<input type="button" value="Delete">

</form>
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
// $Id = $_POST["id"];
// $Name = $_POST["name"];
// $Address = $_POST ["address"];
// $PhoneNumber = $_POST["phone_number"];
// $Email = $_POST["email"];
// $State = $_POST["state"];

 $sql = "DELETE FROM user WHERE id= $Id" ;


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
    
</body>
</html>

