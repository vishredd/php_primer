<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Funtions</title>
</head>
<body>
    <h1>Functions</h1>

    <?php

        /*Defining a Function */
        function writeMessage(){
            echo "you are really a nice person, Have a nice time";
        }

        writeMessage();

        echo "<hr/>";

        /* functions with parameters */

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        addFunction(16,25);


    ?>
</body>
</html>

