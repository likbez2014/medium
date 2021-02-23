<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="try2.php" method="POST">
        <select name="choice"> <!-- variable "choice", our choice of number--> 
            <?php
                $numbers = 10;/* the number of numbers in the list */
                $komp = rand(1,$numbers);
                for($i = 1; $i <= $numbers; $i++) {
                    echo("<option value='". $i ."'>". $i ."</option>");
                }
            ?>
        </select>
        <input type="hidden" name="komp" value="<?php echo($komp);?>"><!--data transmission on the number of the generator-->
        <input type="hidden" name="numbers" value="<?php echo($numbers);?>"><!--data transmission on the number jf numbers in the list -->
        <p>
            <input type="submit" value="Мені пощастить">
        </p>
    
    </form>

    
</body>
</html>