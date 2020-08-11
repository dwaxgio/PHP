<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Comentario -->
     <div class="container">
        <h3>1. data types</h3>
        <?php
        
            echo PHP_INT_MAX;

            echo "</br>";

            $my_var = 1;
            echo $my_var;

            echo "</br>";

            $my_var2 = 3.14;
            echo $my_var2;
            echo "</br>";
            $my_suma = (int)$my_var2 + $my_var;
            echo $my_suma;

            echo "</br>";

            $my_var3 = "Hypertext Pre Processor";
            echo $my_var3;

            echo "</br>";

            function suma_valores($a, $b)
            {
                return $a * $b;
            }

            echo suma_valores(4, 5);


        ?>
    </div>
</body>
</html>