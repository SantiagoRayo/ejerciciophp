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
            height: 280px;
            border: 3px #073B51;
            border-radius: 22px;
            background-color: rgb(5 69 89);
            font-size: large;
        }
     body{
            background-color:#B1C8DA;
     }

           
        
    </style>
</head>

<body>
    <div class="container">


        <?php


        echo "<br>";
        $suma = $_REQUEST['parcial_1'] +  $_REQUEST['parcial_2'] + $_REQUEST['parcial_3'];
        $promedio = $suma / 3;
        $totalparciales = $promedio * 0.35;
        echo '<font color="white">Total de los 3 Parciales: ' . round($totalparciales,1) . '</font>';
        echo "<br>";
        echo "<br>";
        $suma1 = $_REQUEST['examen_final'] * 0.35;

        echo '<font color="white">Total del Examen Final: ' . number_format($suma1, 1) . '</font>';
        echo "<br>";
        echo "<br>";
        $suma2 = $_REQUEST['trabajo_fianl'] * 0.30;
        echo '<font color="white">Total del Trabajo Final: ' . number_format($suma2, 1) . '</font>';
        echo "<br>";
        echo "<br>";
        $total = $totalparciales + $suma1 + $suma2;
        echo '<font color="white">Total de todas las Notas :' . number_format($total, 1) . '</font>';
        echo "<br>";
        echo "<br>";
        if ($total >= 3.0) {
            echo '<font color="white">Aprobado</font>';
        } else {
            echo '<font color="white">No aprobado</font>';
        }

        ?>

    </div>

    
</body>
</html>
<?php

$conexion = mysqli_connect("localhost", "root", "", "frances") or
    die("Problemas con la conexion");
$sql = "insert into frances values ('" . $_REQUEST['parcial_1'] . "'," .
    "'" . $_REQUEST['parcial_2'] . "'," .
    "'" . $_REQUEST['parcial_3'] . "'," .
    "'" . $_REQUEST['examen_final'] . "'," .
    "'" . $_REQUEST['trabajo_fianl'] . "')";
mysqli_query($conexion, $sql);

$registros = mysqli_query($conexion, "select * from frances") or
    die("Problemas en el select :" . mysqli_error($conexion));
mysqli_close($conexion);



?>