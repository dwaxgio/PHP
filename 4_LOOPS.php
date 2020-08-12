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
        <h3>3. CONDIOTIONALS</h3>
        <?php
           // FOR
            for ($i = 0; $i < 11; $i++)
            {
                echo 10 * $i;
                echo "</br>";
            }
           // FOREACH
            echo "</br>";
            $animales = array("perro", "gato");
            foreach($animales as $item)
            {
                echo $item . "</br>"; //
            }
        

           // WHILE
           echo "</br>";

           $i = 0;
           while($i < 5)
           {

               echo $i + 1 . "</br>";
               $i++;
           }
           // DO WHILE
           echo "</br>";

           $j = 0;
           do{
                echo "j es: $j" . "<br>";
                $j++;
           }
           while($j < 9);
           // 

            ?>
    </div>
</body>
</html>