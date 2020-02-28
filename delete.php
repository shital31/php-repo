<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php 
$mysqli = new mysqli('localhost','root','','forms') or die (mysqli_error($mysqli));

 if(isset($_GET['delete'])){
     $id= $_GET['delete'];
     $mysqli->query("DELETE FROM user WHERE id=$id")
      or die($mysqli->error);
 }
    echo ' Data deleted Successfully';
    header("refresh:2 ; url = dashboard.php");

?>

</body>
</html>