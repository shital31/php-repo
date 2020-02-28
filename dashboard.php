<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>


<ul>
    <a href="login.php">Log out</a><br>
    <a href="adduser.php">Register User</a><br>
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
                            <a href="edit.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-info">Edit</a>   
                        </td> 
                        <td> <a href="delete.php?delete=<?php echo $row['id']; ?>"
                            class="btn btn-danger">Delete</a></td>  
                       </tr>
                        <?php endwhile ?>
             </table>
        </div>
        </div>    



        


 


</body>
</html>  