<?php 
if(isset($_REQUEST['submit'])){
  move_uploaded_file($_FILES['img']['tmp_name'],'upload/'.$_FILES['img']['names']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <form  method="post" enctype="multipart/form-data">
    Select File : <input type="file" name="img"><br> 
    <input type="submit" name="submit" value="upload" />
    </form>
</body>
</html>