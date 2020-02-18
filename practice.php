<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo("hello php"); 
    echo "<h1> Shital Site </h1>" ;
    echo "<hr>";
    echo "<p>This is my site</p>";



    //variables//

    $name = "John";
    $age = "40";

    echo "Once there was a man named $name <br>";
    echo "He is $age year old <br>";
    echo "He really like a name $name <br>";
    echo "He didnt like his age $age<br>";


    //Data Types //

   echo $string = " Shital Kautkar";
   echo strtoupper("$string");
   echo str_replace ("Shital","Shubhangi", $string);
   
   echo $int = 30 ;
   echo $decimal = 3.14;
   echo $isMale = true;
   echo null;

  
 ?>
         <!-- taking user input -->
        <form action="practice.php" method="get">
        Name : <input type="text" name="name">
        <input type= "submit">
        </form>

        <?php
        echo $_GET ["name"]
         ?>

</body>
</html>   