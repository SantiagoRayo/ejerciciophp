<?php

$tasainteres = $_REQUEST['tasa_interes_mensual'] / 100;

$valorTotalCuotas = $tasainteres * (pow(1 + $tasainteres, $_REQUEST['numero_cuotas']));

$e = pow(1 + $tasainteres, $_REQUEST['numero_cuotas']) - 1;

$cuotaFija = $_REQUEST['monto_credito'] * $valorTotalCuotas / $e;

?>

<!DOCTYPE html>
<html>

<head>

    <style>
        table {
            border-color: black;
        }

        body {
            background-color: #FFEDC1;
        }
    </style>
</head>

<body>
    <h1 align="center">
        <font color="black">TABLA DE AMORTIZACION CON METODO FRANCES</font>
    </h1>
    <center>
    <?php echo '<font color="black"> El Nombre ingresado es: ' . $_REQUEST['nombre'] . '</font><br>'; ?>
    <?php echo '<font color="black"> La Cedula del Cliente es: ' .$_REQUEST['cedula'].'</font>'; ?>
    </center>
    <table border="4px" align="center">
        <td>
            <table width="200" cellspacing="1" cellpadding="3" border="0" bgcolor="#5EA7D7">
                <tr>
                    <td bgcolor="#B8E4F0">
                        <font size=3 face="verdana, arial, helvetica">
                            No.Cuota
                        </font>
                    </td>
                </tr>
            </table>
        </td>

        <td>
            <table width="200" cellspacing="1" cellpadding="3" border="0" bgcolor="#5EA7D7">
                <tr>
                    <td bgcolor="#B8E4F0">
                        <font size=3 face="verdana, arial, helvetica">
                            Saldo Anterior
                        </font>
                    </td>
                </tr>
            </table>
        </td>

        <td>
            <table width="200" cellspacing="1" cellpadding="3" border="0" bgcolor="#5EA7D7">
                <tr>
                    <td bgcolor="#B8E4F0">
                        <font size=3 face="verdana, arial, helvetica">
                            Valor Cuota Fija
                        </font>
                    </td>
                </tr>
            </table>
        </td>

        <td>
            <table width="230" cellspacing="1" cellpadding="3" border="0" bgcolor="#5EA7D7">
                <tr>
                    <td bgcolor="#B8E4F0">
                        <font size=3 face="verdana, arial, helvetica">
                            Abono Interes
                        </font>
                    </td>
                </tr>
            </table>
        </td>

        <td>
            <table width="180" cellspacing="1" cellpadding="3" border="0" bgcolor="#5EA7D7">
                <tr>
                    <td bgcolor="#B8E4F0">
                        <font size=3 face="verdana, arial, helvetica">
                            Abono Capital
                        </font>
                    </td>
                </tr>
            </table>
        </td>

        <td>
            <table width="180" cellspacing="1" cellpadding="3" border="0" bgcolor="#5EA7D7">
                <tr>
                    <td bgcolor="#B8E4F0">
                        <font size=3 face="verdana, arial, helvetica">
                            Nuevo Saldo
                        </font>
                    </td>
                </tr>
            </table>
        </td>

        <?php
       
            $sa = $_REQUEST['monto_credito'];
            for ($i = 1; $i <= $_REQUEST['numero_cuotas']; $i++) {

                $ai = ($sa * $_REQUEST['tasa_interes_mensual']) / 100;

                $ac = $cuotaFija - $ai;

                $ns = $sa - $ac;
                
        ?>
        
                <tr>
                    <td>
                        <table width="200" cellspacing="1" cellpadding="3" border="0" bgcolor="#165480">
                            <tr>
                                <td bgcolor="#B3DCF6">
                                    <font size=2 face="verdana, arial, helvetica">
                                        <?php echo $i;?>
                                    </font>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td>
                        <table width="200" cellspacing="1" cellpadding="3" border="0" bgcolor="#165480">

                            <td bgcolor="#B3DCF6">
                                <font size=2 face="verdana, arial, helvetica">
                                    <?php echo round($sa,2); ?>
                            </td>
                        </table>
                    </td>

                    <td>
                        <table width="200" cellspacing="1" cellpadding="3" border="0" bgcolor="#165480">
                            <td bgcolor="#B3DCF6">
                                <font size=2 face="verdana, arial, helvetica">
                                    <?php echo round($cuotaFija,2); ?>
                                </font>
                            </td>

                        </table>
                    </td>

                    <td>
                        <table width="230" cellspacing="1" cellpadding="3" border="0" bgcolor="#165480">
                            <td bgcolor="#B3DCF6">
                                <font size=2 face="verdana, arial, helvetica">
                                    <?php echo round($ai,2); ?>
                                </font>
                            </td>
                        </table>
                    </td>

                    <td>
                        <table width="180" cellspacing="1" cellpadding="3" border="0" bgcolor="#165480">
                            <td bgcolor="#B3DCF6">
                                <font size=2 face="verdana, arial, helvetica">
                                    <?php echo round($ac,2); ?>
                                </font>
                            </td>
                        </table>
                    </td>

                    <td>
                        <table width="180" cellspacing="1" cellpadding="3" border="0" bgcolor="#165480">
                            <td bgcolor="#B3DCF6">
                                <font size=2 face="verdana, arial, helvetica">
                                    <?php echo round($ns,2); ?>
                                </font>
                            </td>
                        </table>
                    </td>
            <?php
             $sa=$sa-$ac;
            }
        
            ?>
    </table>
    <br>



</body>

</html>