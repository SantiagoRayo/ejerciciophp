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
            width: 500px;
            height: 250px;
            border: 3px #073B51;
            border-radius: 22px;
            background-color: rgb(232 77 36);
            font-size: large;
        }
        body{
            background-color: #FF9292;
        }
    </style>
</head>



<body>
    <div class="container">
        <?php
        echo "<br>";
        $salario = 737000;
        echo '<font color="black">Nombre del Vendedor es: ' . $_REQUEST['nombre_vendedor'] . '</font><br>';
        $suma1 = $_REQUEST['cantidad_autos_vendidos'] * 50000;
        echo "<br>";
        echo '<font color="black">Total de autos vendidos mas la comision: ' . $suma1 .'</font><br>';
        $suma2 = $_REQUEST['precio_total'] * 0.05;
        echo "<br>";
        echo '<font color="black">Precio total de autos vendidos: ' . $suma2 . '</font><br>';
        $salariototal = $suma1 + $suma2 + $salario;
        echo "<br>";
        echo '<font color="black">Salario total del Vendedor: ' . $salariototal.'</font>';
        ?>
</body>
</html>
<?php
$conexion = mysqli_connect("localhost", "root", "", "auto") or
    die("Problemas con la conexion");
$sql = "insert into auto values ('" . $_REQUEST['nombre_vendedor'] . "'," .
    "'" . $_REQUEST['cantidad_autos_vendidos'] . "'," .
    "'" . $_REQUEST['precio_total'] . "'," .
    "'" . $salariototal. "')";
mysqli_query($conexion, $sql);

$registros = mysqli_query($conexion, "select * from auto") or
    die("Problemas en el select :" . mysqli_error($conexion));
mysqli_close($conexion);

?>