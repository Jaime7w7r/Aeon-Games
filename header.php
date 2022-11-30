
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
    #carrito{
    width:35px;
}

#add_icon{
    width: 20px;
    height: 20px;
    border-radius: 50px;
    background-color: #4CC2FF;
    position: fixed;
    top: 7px;
    right: 7px;
    color: rgb(0, 0, 0);
    align-items: center;
    display: flex;
    justify-content: center;
}

#logo{
    width: 32px;
}

.login{
    color: #eee;
    text-shadow: 0 0 10px #fff;
}
.slogan{
    font-size: 14px;
    font-family: 'Syne Mono', monospace;
    color: white;
    margin-top: 20px;
    margin-right: 50px;
    text-shadow: 0 0 10px #fff;
}

.navbar{
    background-color: rgba(0, 0, 0, 0.904);
    width: 100%;
    z-index: 100;
    position: fixed;
    height: 70px;
}

.abajo{
    background-color: rgba(0, 0, 0, 0.726);
    margin-bottom: 70px;
}

.desparecer{
    top: -100px;
}

#aux_nav{
    height: 70px;
    position: relative;
    background-color: rgba(95, 36, 36, 0.445);
}

</style>




    <nav class="navbar navbar-expand-lg navbar-dark " id="nav">
        <a class="navbar-brand" href="#"><img src="imagenes\logo.png" id="logo" alt=""></a>
        <pre class="slogan">Hazlo facil 
  Aeon Games</pre>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="<?php if ($_SERVER['PHP_SELF'] == "/curso/Proyecto_1/index.php"){ echo 'nav-item active'; }else{ echo 'nav-item'; } ?>">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="<?php if ($_SERVER['PHP_SELF'] == "/curso/Proyecto_1/tienda.php"){ echo 'nav-item active'; }else{ echo 'nav-item'; } ?>">
                    <a class="nav-link" href="tienda.php">Tienda</a>
                </li>
                <li class="<?php if ($_SERVER['PHP_SELF'] == "/curso/Proyecto_1/AcercaDe.php"){ echo 'nav-item active'; }else{ echo 'nav-item'; } ?>">
                    <a class="nav-link" href="AcercaDe.php">Acerca De</a>
                </li>
                <li class="<?php if ($_SERVER['PHP_SELF'] == "/curso/Proyecto_1/contacto.php"){ echo 'nav-item active'; }else{ echo 'nav-item'; } ?>">
                    <a class="nav-link " href="contacto.php">Contáctanos</a>
                </li>
                <li class="<?php if ($_SERVER['PHP_SELF'] == "/curso/Proyecto_1/ayuda.php"){ echo 'nav-item active'; }else{ echo 'nav-item'; } ?>">
                    <a class="nav-link " href="ayuda.php">Ayuda</a>
                </li>
            </ul>
            <button type="button" class="btn btn-outline-dark"><span class="login">Suscribete</span></button>
            <button type="button" class="btn btn-outline-dark"><span class="login">Login</span></button>
            <div>
                <a href=""><img src="imagenes\carrito.png" alt="" id="carrito"></a>
                <div id="add_icon"><span>1</span></div>
            </div>
        </div>
    </nav>
    
    <div id="aux_nav">
    </div>