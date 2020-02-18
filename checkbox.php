<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
       Apple: <input type="checkbox" name="fruits[]" value="apple"><br>
       Orange : <input type="checkbox" name="fruits[]" value="orange"><br>
       Mango : <input type="checkbox" name="fruits[]" value="mango"><br>
       <input type="submit">
    </form>

    <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[1];
    ?>
</body>
</html>