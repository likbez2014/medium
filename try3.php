<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $komp = $_POST["komp"];
    echo($komp);
    $choice = $_POST["choice"];
    echo("<p> Мій вибір " .$choice. "</p>");
    $numbers = $_POST["numbers"];

    ?>  
</body>
</html>