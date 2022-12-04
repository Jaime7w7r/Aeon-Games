<?php/*En la opción de tienda deben aparecer todos los productos que venden (con la información de la tabla de
productos que se considere pertinente y la posibilidad de agregar el producto al carrito de compra
(botón)), PERO EN ALGUN LADO, deben tener algún filtro para elegir solo ver los productos de alguna de
las dos categorías.*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <!--<meta http-equiv="refresh" content="2">--> 
=======
    <!--<meta http-equiv="refresh" content="2">-->
>>>>>>> a12f96af80464bb8e93ae7cbedcb7088be8ac69f
    <link rel="shortcut icon" href="imagenes/logo.png">
    <link rel="stylesheet" href="estilos/tienda.css">
    <link href="https://fonts.googleapis.com/css2?family=Syne+Mono&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="javascript/categorias.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="javascript\scrollreveal.js"></script>
    <title>Aeon Games</title>
</head>
<body style="background: rgb(11,4,14);
background: linear-gradient(0deg, rgba(11,4,14,0.7763480392156863) 22%, rgba(142,118,240,0.7343312324929971) 71%);">
<?php include 'header.php';?>

<div class="wrap">
    <h1>AEON-GAMES</h1>
    <div class="tienda-wrap">
        <div class="categorias">
            <h4>Categorias</h4>
            <a href="#" class="catProd" category="all">TODO</a>
            <a href="#" class="catProd" category="xbox">VIDEOJUEGOS XBOX SERIES X/S</a>
            <a href="#" class="catProd" category="ps5">VIDEOJUEGOS PS5</a>
            <a href="#" class="catProd" category="nintendo">VIDEOJUEGOS NINTENDO SWITCH</a>
            <a href="#" class="catProd" category="consola">CONSOLAS Y CONTROLES</a>
        </div>
        <section class="productos">
              <div>
                  <div class="container text-center">
                    <div class="container">
            
                        <div class="row">
                            <div class="producto col-md-3" category="ps5">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="imagenes/Juegos/godrag.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>PS5</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>GOD OF WAR RAGNAROKK</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p> Kratos y Atreus deben viajar a cada uno de los nueve reinos en búsqueda de respuestas, mientras que las fuerzas asgardianas se preparan para una batalla profeti</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,500.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="producto col-md-3" category="consola">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/ConsolaPS5.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>PS5</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>Consola PlayStation 5</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>La consola PS5 hace posibles nuevas formas de juego que jamás habías imaginado.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$15,000.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="ps5">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/spiderPs5.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>PS5</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>SPIDER-MAN MILLES MORALES</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>La aventura más reciente en el universo de Spider-Man se basará en el mundo de Marvel’s Spider-Man y lo ampliará con una nueva historia. Los jugadores contemplarán el ascenso de Miles Morales a medida que domina nuevos poderes para convertirse en su propio Spider-Man.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,300.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="ps5">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/fifa23.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>PS5</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>FIFA 23</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Disfruta de la competición cumbre del futbol internacional con la llegada a FIFA 23 de la FIFA World Cup Qatar 2022 y la FIFA Women's World Cup Australia and New Zealand 2023.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,300.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="ps5">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/eldenRing.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>PS5</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>ELDEN RING</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Elden Ring, desarrollado por FromSoftware y Bandai Namco, es una aventura de RPG de acción y fantasía situada en un mundo creado por Hidetaka Miyazaki -creador de la serie de videojuegos de alta influencia Dark Souls y George R.R. Martin</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,290.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="xbox">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="imagenes/Juegos/ciber2077.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>XBOX SERIES X/S</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>CIBERPUNK 2077</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en la megalópolis de Night City, donde te pondrás en la piel de un mercenario o una mercenaria ciberpunk y vivirás su lucha a vida o muerte por la supervivencia. </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$800.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="xbox">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/mortal.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>XBOX SERIES X/S</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>MORTAL KOMBAT 11</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>¡La experiencia MK11 definitiva! Toma el control de los protectores de Earthrealm en las DOS Campañas de historia aclamadas por la crítica y que doblan el tiempo mientras corren para evitar que Kronika retroceda el tiempo y reinicie la historia. </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$600.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="consola">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/ConsolaXbox.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>XBOX SERIES X/S</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>CONSOLA XBOX SERIES X</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>¡La Xbox más rápida y más potente de la historia!

            La Xbox Series X ofrece velocidades de cuadro sensacionalmente suaves de hasta 120 FPS con la explosión visual que ofrece HDR. Sumérgete con personajes más nítidos, mundos más brillantes y detalles imposibles con auténtico 4K.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$14,000.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="xbox">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/codwm2.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>XBOX SERIES X/S</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>CALL OF DUTY: MODERN WARFARE II</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Call of Duty: Modern Warfare II es la secuela del éxito de taquilla del 2019, Modern Warfare. Con el regreso del icónico líder del equipo, el capitán John Price, el intrépido John "Soap" MacTavish, el experimentado sargento Kyle "Gaz" Garrick y el lobo solitario, el favorito de los fanáticos Simon "Ghost" Riley, los jugadores serán testigos de la legendaria Fuerza operativa 141.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,800.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="consola">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/control.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>XBOX SERIES X/S</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>CONTROL INALAMBRICO XBOX</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Vive la experiencia del diseño modernizado del control inalámbrico de Xbox – Pulse Red, que presenta superficies esculpidas y una geometría refinada para una mayor comodidad durante el juego. Mantén siempre tu objetivo con el pad direccional híbrido y el agarre texturizado en los gatillos, en los botones superiores y en la carcasa trasera. Captura y comparte contenido sin dificultad, como capturas de pantalla, grabaciones y más, con el nuevo botón para Compartir. </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,500.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="nintendo">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                        <img src="imagenes/Juegos/pokemon.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <br><br>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>NINTENDO SWITCH</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>POKEMON SCARLET</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Atrapa, combate y entrena Pokémon en la región de Paldea, una vasta tierra llena de lagos, cimas montañosas, páramos, poblaciones pequeñas y grandes ciudades. Explora un mundo completamente abierto a tu propio paso y recorre a través de la tierra, el agua y el aire a lomos del Pokémon legendario Koraidon, que puede cambiar de forma en Pokémon Scarlet, o sobre el Pokémon legendario Miraidon, que puede cambiar de forma en Pokémon Violet. Elige entre Sprigatito, Fuecoco o Quaxly para que sea tu primer compañero Pokémon antes de lanzarte en tu aventura a través de Paldea.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,400.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="nintendo">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/zelda.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <br><br>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>NINTENDO SWITCH</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>THE LEGEND OF ZELDA BREATH OF THE WILD</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>¡Entra en un Mundo de Aventura. Olvida todo lo que sabes sobre los juegos de The Legend of Zelda. Entra en un mundo de descubrimientos, exploración y aventura en The Legend of Zelda: Breath of the Wild, un nuevo juego de la aclamada serie que rompe con las convenciones. Viaja por prados, bosques y cumbres montañosas para descubrir qué ha sido del asolado reino de Hyrule en esta maravillosa aventura a cielo abierto ¡Explora las tierras de Hyrule como más te guste. </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,200</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="nintendo">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/mario.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <br><br>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>NINTENDO SWITCH</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>SUPER MARIO ODYSSEY</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Acompaña a Mario en una aventura en 3D enorme por todo el planeta usando sus nuevas habilidades para recoger lunas que servirán de combustible a tu aeronave, la Odyssey. ¡Y entretanto, rescata a la princesa Peach de las garras de Bowser. </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,290.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="consola">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/ConsolaNSW.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>NINTENDO SWITCH</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>CONSOLA NINTENDO SWITCH</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>Presentamos Nintendo Switch, el nuevo sistema de videojuego para el hogar de Nintendo; además de proporcionar emociones únicas y multijugador en casa, el sistema Nintendo Switch se puede llevar mientras viaja para que los jugadores puedan disfrutar de una experiencia de consola completa en cualquier momento y en cualquier lugar</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$7,000.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="producto col-md-3" category="nintendo">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img"><img src="imagenes/Juegos/marioPar.jpg" alt="Product" class="img-responsive" />
                                    </div>
                                    <br><br>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                            <span>NINTENDO SWITCH</span>
                                        </div>
                                        <div class="title-product">
                                            <h3>MARIO PARTY SUPERSTARS</h3>
                                        </div>
                                        <div class="description-prod">
                                            <p>¡Llamando a todos los seguidores! Mario Party™ está de regreso con cinco tableros clásicos del juego de fiesta para la consola Nintendo 64. El glaseado y las flores estarán presentes mientras compites por obtener el mayor número de estrellas (y saboteas a tus oponentes) en el tablero de El pastel de cumpleaños de Peach del juego original de Mario Party. </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="wcf-left"><span class="price">$1,300.00</span></div>
                                            <div class="wcf-right"><a href="#" class="buy-btn"><i
                                                        class="zmdi zmdi-shopping-basket"><img src="imagenes/imagei.png"
                                                            width="60%"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

            </div>
        </div>
    </div>
              </div>
        </section>
    </div>

</div>

<?php include 'footer.php';?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="javascript/main.js"></script>
    <script src="javascript\scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    
</body>
</html>