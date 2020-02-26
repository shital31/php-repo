
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
    $name = '';
    $address = '';
    $phone_number = '';
    $email = '';
    ?>

<form action="edit.php" method="post">

    Name: <input type="text" name="name" value="<?php echo $name ?> " placeholder="Enter your name"><br><br>
    Address: <input type="text" name="address" value="<?php echo $address ?>"><br><br>
    Phone Number: <input type="text" name="phone_number" value="<?php echo $phone_number ?>"><br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email ?>"><br><br>
    <input type="submit" value="Submit"><br>

 <?php 
    $mysqli = new mysqli('localhost','root','','forms') or die(mysqli_error($mysqli));
    

    if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM user WHERE id=$id") or die($mysqli->error);
    if($result->num_rows){
        $row = $result->fetch_array();
        $name = $row['name'];
        $address = $row['address'];
        $phone_number = $row['phone_number'];
        $email = $row['email'];
    }
}

echo 'coming';
?>
    
    
</body>
</html>
