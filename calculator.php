<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>

    <?php
      Answer: echo $_GET ["num1"]+ $_GET ["num2"]
    ?>

    <form action="calculator.php" method="get">
        <input type="text" name="color">
        <input type="text" name="pluralNoun">
        <input type="text" name="celebrity">
          <input type="submit">
    </form>
    <?php 
    $color= $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I Love $celebrity <br>";
    ?>
</body>
</html>