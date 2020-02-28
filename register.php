<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register-User</title>
</head>
<form action="register.php" method="post">
     Name: <input type="text" name="name" placeholder="name"><br><br>
     Address: <input type="text" name="address" placeholder="address"><br><br>
     Phone Number: <input type="text" name="phone_number" placeholder="phone_number"><br><br>
     E-mail: <input type="text" name="email" placeholder="email"><br><br>
     Password  : <input type="text" placeholder="password" placeholder="password"><br><br>
     <input type="submit" value="Submit"><br>                  
<body>

<?php 
    
        $con = mysqli_connect('localhost','root','');
        if(!$con){
        echo 'Not Connected to Server';
        }

        if(!mysqli_select_db($con,'forms')){
             echo 'Database Not Selected';
        }

        $Name = $_POST["name"];
        $Address = $_POST ["address"];
        $PhoneNumber = $_POST["phone_number"];
        $Email = $_POST["email"];
        $Password = isset ($_POST["password"]);


        $sql = "INSERT INTO user (name,address,phone_number,email,password) 
        VALUES ('$Name ','$Address','$PhoneNumber','$Email','$Password' )"; 

        if(!mysqli_query($con,$sql)){
            echo "Not Inserted";
        } 
        else {
            echo "Data inserted successfully";
        }   
        
        header("refresh:2 ; url = dashboard.php");
    ?> 
</body>
</html>