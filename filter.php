<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- validate email -->
    <?php 
    $email = "shitalkautker@gmail.com";
    $vemail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if($vemail == false){
        echo "Invalid email <br>";
    }
        else{  
            echo "valid email .$vemail. <br>" ;        
    }
    ?>

    <!-- sanitize -->
    <?php 
     $email = "shital///////kautker@gamil>>>>>>>>.com";
     $vemail = filter_var($email,FILTER_SANITIZE_EMAIL);
     echo $vemail;
    ?>
   

</body>
</html>