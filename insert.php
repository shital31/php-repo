<?php 
$con = mysqli_connect('127.0.0.1','root','form');
if(!$con){
    echo 'Not Connected to Server';
}

if(!mysqli_select_db($con,'tutorial')){
    echo 'Database Not Selected';
}

$Id = $_POST ["id"];
$Name = $_POST[ "name"];
$Address = $_POST ["address"];
$PhoneNumber = $_POST["phone number"];
$Email = $_POST["email"];
$State = $_POST["state"];

$sql = "insert into employee
 (id , name, address,phone_number,email,state) values
  ('$Id','$Name','$Address','$PhoneNumber','$Email','$State'))";
if(!mysqli_query($con,$sql)){
    echo "Not Inserted";
} else {
    echo "Inserted";
} 

header("refresh:2 ; url = index.php");

?>