<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            margin-top: 40px;
            width: 450px;
            height: 80px;
            border: 3px #073B51;
            border-radius: 22px;
            background-color: rgb(255 189 20);

        }

        body {
            background-color: #DAD992;
        }
    </style>
</head>

<body>
    <center>
        <div class="container">
            <br>
            <?php
            $ar = fopen("taller3.txt", "a") or
                die("problema en la creacion");

            fputs($ar, "Nombre del Paciente es: " . $_REQUEST['n1']);
            fputs($ar, "\n");
            fputs($ar, "\n");
            $multi = $_REQUEST['n3'] * $_REQUEST['n3'];
            $promedio = $_REQUEST['n2'] / $multi;
            $promedio = round($promedio, 1);
            fputs($ar, "Indice de Masa Corporal " . $promedio);
            fputs($ar, "\n");
            fputs($ar, "\n");

            if ($promedio < 18.5) {
                fputs($ar, 'Por debajo del peso');
                fputs($ar, "\n");
                fputs($ar, "\n");
            }
            if ($promedio >= 18.5 && $promedio <= 24.9) {
                fputs($ar, 'Saludable');
                fputs($ar, "\n");
                fputs($ar, "\n");
            }
            if ($promedio >= 25.0 && $promedio <= 29.9) {
                fputs($ar, 'Con Sobrepeso');
                fputs($ar, "\n");
                fputs($ar, "\n");
            }
            if ($promedio >= 30.0 && $promedio <= 39.9) {
                fputs($ar, 'Obeso');
                fputs($ar, "\n");
                fputs($ar, "\n");
            }
            if ($promedio > 40) {
                fputs($ar, 'Obesidad mórbida');
                fputs($ar, "\n");
                fputs($ar, "\n");
            }
            fputs($ar, '-----------------------------------------------------------');
            fputs($ar, "\n");
            fputs($ar, "\n");

            echo "DATOS CARGADOS";
            ?>

        </div>
    </center>
</body>