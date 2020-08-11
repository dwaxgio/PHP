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
            // if
            $n1 = 7;
            $n2=21;
            if($n1 > $n2)
            {
                echo "$n1   es mayor a   $n2";
            }
            else
            {
                echo "$n2   es mayor a   $n1";
            }

            // switch case
            echo "</br>";

            $today = "martes";
            switch($today)
            {
                case "domingo" : echo "dia de descanso";
            break;
                case "martes" : echo "dia de trabajo";
        break;
            default : echo "otro dia de la semana";
            }

            ?>
    </div>
</body>
</html>