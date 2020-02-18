<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $friends = ["shubhangi","shubham","swapnil"];
    echo $friends[0];
    ?><br>
<!-- Associative array  -->

<form action="arrays.php" method="post">
    <input type="text" name="student">
    <input type="submit">

</form>


 <?php
    $grades = array("shital"=>"A+", "swapnil"=>"B-" , "Shubham" => "C+");
    echo $grades[$_POST["student"]];
 ?>


</body>
</html>