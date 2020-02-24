<?php 
$con = mysqli_connect('localhost','root','');
if(!$con){
    echo 'Not Connected to Server';
}

if(!mysqli_select_db($con,'forms')){
    echo 'Database Not Selected';
}

//$Id = $_POST ["id"];
$Name = $_POST["name"];
$Address = $_POST ["address"];
$PhoneNumber = $_POST["phone_number"];
$Email = $_POST["email"];
$State = $_POST["state"];

 $sql = "INSERT INTO employee (name,address,phone_number,email,state) VALUES ('$Name ','$Address','$PhoneNumber','$Email','$State')";


//$sql = "INSERT INTO `employee`(`name`, `address`, `phone_number`, `email`, `state`) VALUES ('".$Name."','".$Address."','".$PhoneNumber."','".$Email."','".$State."')";
  //echo $sql;
if(!mysqli_query($con,$sql)){
    echo "Not Inserted";
} else {
    echo "Inserted";
} 

header("refresh:2 ; url = index.html");

?>