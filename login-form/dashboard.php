<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

?>  
     <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                   <tr>
                     <th>USER RECORDS</th></tr>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Action</th>
                    </tr>
                </thead>
                
       
                        <?php 
                        while($row=$result->fetch_assoc()):
                        ?>
                        <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name'];  ?></td>
                        <td><?php echo $row['address'];  ?></td>
                        <td><?php echo $row['phone_number'];  ?></td>
                        <td><?php echo $row['email'];  ?></td>
                        <td><?php echo $row['password'];  ?></td>
                        <td>
                            <a href="edit.php? edit=<?php echo $row['id']; ?> "
                            class="btn btn-info">Edit</a>   
                        </td> 
                        <td> <a href="delete.php? delete=<?php echo $row['id']; ?> "
                            class="btn btn-danger">Delete</a></td>  
                       </tr>
                        <?php endwhile ?>
             </table>
        </div>
        </div>    



        


 


</body>
</html>  