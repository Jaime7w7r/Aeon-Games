<?php /*Ayuda (Preguntas frecuentes, presentar las preguntas con un buen diseño, se esperan al menos
6 preguntas)*/ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <title>Ayuda</title>
    <link rel="stylesheet" href="estilos/ayuda.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="Hoja"><div class="preguntasF">
        <h2>Preguntas Frecuentes</h2>
        <br>
        <details open>
            <summary> <h5>¿Cuánto tiempo tarda en llegar mi pedido?</h5></summary>
            <p>Los pedidos efectuados en la ciudad de Aguascalientes son enviados el mismo día que se realizan, siempre y cuando:
                *El producto se encuentre fisicamente en alguna de la sucursales de Aguascalientes.
                *La compra se haga en un horario entre 9:00 a.m. a 4:30 p.m.
                En localidades fuera de Aguascalientes, así como otros en estados dentro de la República Mexicana, los tiempos de entrega rondan los 3 a 6 días hábiles aproximadamente.</p>
        </details>
        <details>
            <summary> <h5>¿Con cuánto dinero puedo apartar una preventa?</h5></summary>
            <p>El monto puede variar, pero regularmente puedes apartar videojuegos (ediciones estándar), accesorios y coleccionables con $99 pesos. Si quieres apartar una consola en preventa el precio mínimo de apartado es de $500 pesos regularmente.</p>
        </details>
        <details>
            <summary><h5>No recuerdo la contraseña para entrar a mi cuenta, ¿Cómo puedo recuperarla?</h5></summary>
            <p>No te preocupes. A todos nos ha pasado. Da click en la siguiente liga ¿Olvido su NIP ó quiere recuperar su contraseña? y sigue las instrucciones.</p>
        </details>
        <details>
            <summary><h5>¿Cómo puedo solicitar una factura?</h5></summary>
            <p>Recuerda que debes solicitarla el mismo mes en el que se generó la compra. Da click en la siguiente liga y solicítala. (https://gameplanet.com/facturacion-electronica/)</p>
        </details>
        <details>
            <summary><h5>¿Cuánto me dan por mi juego?</h5></summary>
            <p>Acércate a tu tienda Gameplanet favorita. Ahí te podrán decir el monto que te abonaremos por tu juego. El precio de compra de tu juego es asignado de manera automática. Puedes llamar a nuestras sucursales vía telefónica para preguntar más detalles. Los números telefónicos los puedes encontrar en la sección de sucursales y horarios de este mismo sitio.</p>
        </details>
        <details>
            <summary><h5>¿Me reciben consolas o accesorios?</h5></summary>
            <p>Por el momento no pero no descartamos la posibilidad de hacerlo en el futuro. Mantente al pendiente de nuestro sitio para más información.</p>
        </details>
    </div>
    
    <div class="Formulario"><form action="ayuda.php" method="post">
        <input type="text" placeholder="Nombre" name="name"><br>
        <textarea name="pregunta" placeholder="Pregunta" id="" cols="30" rows="2"></textarea><br>
        <button id="BOTON" type="submit" value="enviar" name="enviar">Enviar</button>
        <br>
    </form></div>
    <div class="ASQ"><?php
    if (isset($_POST['enviar'])) {
        echo $_POST['name'] . '<br>';
        echo $_POST['pregunta'] . '<br>';
    }
    echo "</div></div>";

    include 'footer.php'; ?>

</body>

</html>