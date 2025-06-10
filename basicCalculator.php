<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //simple calculator that adds two variables together and returns the sum in html format

        function addsNumbers() { //declare function
            $num1 = 23; //declare variables
            $num2 = 48;
            $sum = $num1 + $num2; //calculate
            echo "<h1>The sum of ".$num1." and ".$num2." is ".$sum ."</h1>";
        }

        addsNumbers(); //call function

    ?>
</body>
</html>