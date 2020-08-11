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
        <h3>2. ARRAYS</h3>
        <?php
            $game[0] = 'Halo';
            $game[1] = 'AC';
            $game[2] = 'AOE';

            foreach ($game as $item)
            {
                echo $item;
                echo '</br>';
            }

            echo 'Multidimensional array</br>';

            $juegos = array (
                "xbox" => array ("Halo", 'GOW'),
                'ps' => array ('GOW', 'Horizon'),
                'pc' => array (
                    0 => 'AOE', 
                    1 => 'Civilization'
                    )
            );
            echo $juegos["pc"][0];


            
        ?>
    </div>
</body>
</html>