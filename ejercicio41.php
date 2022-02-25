<html>

<head>
    <title>Tabla de amortizacion</title>
    <style>
        .container {
            margin-top: 40px;
            width: 450px;
            height: 90px;
            border: 3px #073B51;
            border-radius: 22px;
            background-color: #B8E4F0;

        }

        body {
            background-color: #FFEDC1;
        }
    </style>
</head>

<body>
    <center>
        <div class="container">
            <br>
            <?php
            $ar = fopen("taller4.txt", "a") or
                die("problema en la creacion");

            $v1 = $_REQUEST['tasa'] / 100;
            $m = $v1 * (pow(1 + $v1, $_REQUEST['plazo']));
            $e = pow(1 + $v1, $_REQUEST['plazo']) - 1;
            $total = $_REQUEST['monto'] * $m / $e;
            fputs($ar, "_________________________________________________________________________________");
            fputs($ar, "\n");
            fputs($ar, "| cuota | saldo anterior | cuota fija | intereses | abono capital | nuevo saldo |");
            fputs($ar, "\n");

            $sa = $_REQUEST['monto'];
            for ($i = 1; $i <= $_REQUEST['plazo']; $i++) {
                $ai = ($sa * $_REQUEST['tasa']) / 100;
                $ac = $total - $ai;
                $ns = $sa - $ac;

                fputs($ar, "|" . $i . "      |");


                fputs($ar, round($sa, 2) . "       |");


                fputs($ar, round($total, 2) . "         |");


                fputs($ar, round($ai, 2) . "    |");


                fputs($ar, round($ac, 2) . "      |");


                fputs($ar, round($ns, 2) . "    |");


                $sa = $sa - $ac;
                fputs($ar, "\n");
            }

            echo "DATOS CARGADO";



            ?>
        </div>
    </center>    