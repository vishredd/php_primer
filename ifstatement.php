<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Primer - If Statements</title>
</head>
<body>
    <?php 
        //an ifstatement the will carry out an action based on the value of he variable

        echo '<h2> If statemen <h2/>';

        $grade = 30;

        if($grade >= 50){
            echo '<h3> YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3>YOU HAVE FAILED </h3>';
        }

    ?>
    
</body>
</html>