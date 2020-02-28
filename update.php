<?php
// echo '<pre>';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "forms";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //fetch id from previous form its compulsary to post
        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $phone_number=$_POST['phone_number'];
        $email=$_POST['email'];
     //update data
      $sql="UPDATE user SET name='$name', address='$address',
     phone_number='$phone_number', email='$email' WHERE id='$id'";
     $result=$conn->query($sql);
      //if successfully updated.
     if($result){
         echo "Data Updated Successfully";
     }
      header("refresh:2 ; url = dashboard.php");

    
      
?>