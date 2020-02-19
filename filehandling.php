<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //echo readfile("webdictionary.txt");
    
    // $myfile = fopen("webdictionary.txt" , "r") or die ("unable to open file");
    // echo fread($myfile,filesize("webdictionary.txt")); 
    // fclose($myfile);
    //

    $myfile = fopen("webdictionary.txt" , "w+") or die ("unable to open file");
    $txt = "Shital kautker \n";
    fwrite($myfile,$txt);
    $txt = "Shubhangi kautker \n";
    fwrite($myfile,$txt);
    $txt = "Shubhangi kautker \n";
    fwrite($myfile,$txt);
    echo fread($myfile, filesize("webdictionary.txt"));
    fclose($myfile)
    ?>


</body>
</html>