<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    .Padre{
        margin-left:40px;
    }
    .Datos {
        border: 1px solid black;
        width:600px;
    }

    td {
        height: auto;
        width: 200px;
    }
    </style>
</head>

<body>
    <table class="Padre">
        <tr>
            <td class="Primer"><img src="imagenes\PrimerLogoRecibo.JPG"></td>
            <td><img src="imagenes\SegundoLogoRecibo.JPG"></td>
        </tr>
        <tr>
            <td collspan="2" text-align="center">
                <h2>PARA PAGO EXCLUSIVO EN OXXO<h2>
            </td>
        </tr>
        <tr>
            <td>
                <table class="Datos">
                    <tr>
                        <td class="Primer">Nombre: </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="Primer">Referencia Bancaria: </td>
                        <td>0000100230</td>
                    </tr>
                    <tr>
                        <td class="Primer">Modalidad: </td>
                        <td>Compra</td>
                    </tr>
                    <tr>
                        <td class="Primer">Programa: </td>
                        <td>Aeon Games</td>
                    </tr>
                    <tr>
                        <td class="Primer">Referencia OXXO: </td>
                        <td>9013482567120379561012351254
                        </td>
                    </tr>
                </table>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td>
                Nora:Puedes realizar pagos hasta por un monto de $10,0000 MXN por cada ticket
                Los Pagos realizados em recibos oxxo se veran reflejados en Sistema de Admiciones en un lapso de 48 hrs
                habiles
            </td>
            <td>
                <img src="imagenes\CodigodeBarras.JPG">
            </td>
        </tr>
    </table>
</body>

</html>