<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo($page);?>" method="POST">
        <?php
            $page;
            $komp = $_POST["komp"];
            echo($komp);
            $choice = $_POST["choice"];
            echo("<p> Мій вибір " .$choice. "</p>");
            $numbers = $_POST["numbers"];
            $disabled = "disabled";
            if($choice !== $komp) {
                echo("
                <p class=''>Зробіть свій наступний вибір</p>
                ");
                ?>
                <select name="choice"> 
                <?php
                    for($i = 1; $i <= $numbers ; $i++) {
                        if($i == $choice) {
                            echo("<option" .$disabled. " value='". $i ."'>". $i ."</option>");
                        } else {
                            echo("<option value='". $i ."'>". $i ."</option>");
                        }
                    }
                    $page = "try3.php";
                    ?>
                </select>
            <?php
            } else {
                echo("
                <p class=''>Ви перевершили великого ГУДІНІ!!</p>
                <p class=''>Можливо це випадковість, спробуй ще!</p> 
                ");
                $page = "index.php";
            }
            echo("<p> Сторінка " .$page. "</p>");
            ?>
            <input type="hidden" name="numbers" value="<?php echo($numbers);?>">
            <input type="hidden" name="komp" value="<?php echo($komp);?>">
            <input type="submit" value="Я впевнений, сьогодні мій день">
    </form>

</body>

</html>