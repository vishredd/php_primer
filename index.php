<?php include'includes/header.php'?>
    
    <h1>Hello World - PHP Primer</h1>
    <?php 
        /* comments */
        echo 'hello php';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php 
        $name = 'Vishnu Mudireddy';
        $age = 48;
        //echo variable
        echo $name;
        echo '<h1> My Name is: ' . $name.'</h1>';
        echo '<h1> My Age is: ' . $age.'</h1>';

        echo "<h1> My Name is $name </h1>";
    ?>

</body>
</html>