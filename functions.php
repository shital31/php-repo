<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     function sayHi($name,$age){
         echo "Hello $name,your are $age <br>";
     }

     sayHi("Shital",30);
     sayHi("Shubhangi",20);
     sayHi("Shubham",18);
    ?>
 <!-- finding cube -->
    <?php 
    function cube($num){
        return $num*$num*$num;
    }
     echo cube(4);
    ?>
    <br>

    <!--  -->

    <?php 
    $isMale=false;
    $isTall=true;
    if($isMale && $isTall){
        echo "you are  tall male";
    }
    elseif($isMale && !$isTall){
            echo "you are short male";
        }
        elseif(!$isMale && $isTall){
            echo "you are not male but tall";
        }
        else{
            echo "you are not male";
        }
     
    
    
    ?>
</body>
</html>