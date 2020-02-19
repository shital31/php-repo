<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
    <?php echo "What was your grade?" ?> 
    <input type="text" name="grade"><br>
    <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    echo $grade;

    switch ($grade){
        case "A":
            echo "You did Amazing";
        break;
        case "B":
            echo "You did pretty good";
        break;
        case "C":
            echo "you did poorely ";
        break;
        case "D":
            echo "you did very bad";
        break;
        case "F":
            echo "you fail";
        break;
        default:
        echo "Invalid Garade"; 

    }


    ?>
</body>
</html>