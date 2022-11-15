<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <?php
    // Concatination of Strings
            $phrase1 = "Student who come late";
            $phrase2 = "in class, stand with Rock";
            $name = "vishnu mudireddy";

            echo $phrase1;
            echo $phrase2;
            echo '<br/>';

            echo $phrase1 . ",named Tiffany" . $phrase2;
            echo '<br/>';

            //String Transformation
            echo 'Uppercase first Letter: ' . ucfirst($name). '<br/>';
            echo 'Uppercase first Letter of each word: ' . ucwords($name). '<br/>';
            echo 'Upper Case :' . strtoupper($name). '<br/>';
            echo 'Lower case : ' .strtolower('THIS IS UPPER CASE').'<br/>';
            echo '<hr/>';
            echo 'Repeat String : ' .str_repeat('Jai Shriram',7) . '<br/>';
    ?>
</body>
</html>