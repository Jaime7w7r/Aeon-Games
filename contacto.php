<?php/*Contáctanos (formulario con buen diseño), uso de google maps, datos de dirección, etc.
Cuando un usuario use el formulario de contacto del sitio web, debe recibir un correo que le
indique que su solicitud está siendo procesada.*/ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/logo.png">
    <link rel="stylesheet" href="estilos/contacto.css">
    <title>Aeon Games</title>
</head>

<body background="imagenes/fondo_contacto.jpg" width="100%">

    <?php include 'header.php';?>
    <!-- formulario de contacto en html y css -->

    <div class="form">
        <div>
        <iframe class="mapa"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.560486592299!2d-102.31689738561629!3d21.9129942623807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ef1da1ab338d%3A0x89a0246637c42ddb!2sUniversidad%20Aut%C3%B3noma%20de%20Aguascalientes!5e0!3m2!1ses-419!2smx!4v1669861555463!5m2!1ses-419!2smx"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
        <div class="contact_form">

            <div class="formulario">
                <h1>Formulario de contacto</h1>
                <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>


                <form action="correo.php" method="POST">
                    <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_nombre" id="nombre" required="obligatorio"
                            placeholder="Escribe tu nombre">
                    </p>

                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="introducir_email" id="email" required="obligatorio"
                            placeholder="Escribe tu Email">
                    </p>

                    <p>
                        <label for="telefone" class="colocar_telefono">Teléfono
                        </label>
                        <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                    </p>


                    <p>
                        <label for="asunto" class="colocar_asunto">Asunto
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_asunto" id="assunto" required="obligatorio"
                            placeholder="Escribe un asunto">
                    </p>

                    <p>
                        <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                        </label>
                        <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio"
                            placeholder="Deja aquí tu comentario..."></textarea>
                    </p>

                    <input type="submit" name="enviar_formulario" id="enviar"  value="Enviar">

                    <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                    </p>

                </form>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>

</body>

</html>