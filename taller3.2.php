<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <style>
        .container {
            margin-top: 40px;
            width: 450px;
            height: 180px;
            border: 3px #073B51;
            border-radius: 22px;
            background-color:rgb(255 189 20);
        }

        body {
            background-color: #DAD992;
        }
    </style>
</head>

<body>
    <div class="container">
        <label>
        <?php
        echo "<br>";
        
        echo '<font color="white">Nombre del Paciente es: '. $_REQUEST['n1'].'</font><br>';
        echo "<br>";
        $multi = $_REQUEST['n3'] * $_REQUEST['n3'];
        $promedio = $_REQUEST['n2'] / $multi;
        $promedio = round($promedio, 1);
        echo '<font color="white">Indice de Masa Corporal: ' . $promedio.'</font><br>';
        echo "<br>";
        if ($promedio < 18.5) {
            echo '<font color="white">Por debajo del peso</font>';
        }
        if ($promedio >= 18.5 && $promedio <= 24.9) {
            echo '<font color="white">Saludable</font>';
        }
        if ($promedio >= 25.0 && $promedio <= 29.9) {
            echo '<font color="white">Con Sobrepeso</font>';
        }
        if ($promedio >= 30.0 && $promedio <= 39.9) {
            echo '<font color="white">Obeso</font>';
        }
        if ($promedio > 40) {
            echo 'Obesidad mórbida';
        }

        ?>
        </label>
    </div>


</body>