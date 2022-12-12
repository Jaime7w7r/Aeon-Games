-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 15:07:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID` int(5) NOT NULL,
  `Nombre_Producto` varchar(50) NOT NULL,
  `Id_Usuario` varchar(1) NOT NULL,
  `Cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(5) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Existencia` int(4) NOT NULL,
  `Precio` float NOT NULL,
  `Imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Categoria`, `Descripcion`, `Existencia`, `Precio`, `Imagen`) VALUES
(37, 'GOD OF WAR RAGNAROKK', 'PS5', 'Kratos y Atreus deben viajar a cada uno de los nueve reinos en búsqueda de respuestas, mientras que las fuerzas asgardianas se preparan para una batalla profeti', 10, 1500, 'godrag.jpg'),
(38, 'Consola PlayStation 5', 'consola', 'La consola PS5 hace posibles nuevas formas de juego que jamás habías imaginado.', 5, 15000, 'ConsolaPS5.jpg'),
(39, 'SPIDER-MAN MILLES MORALES', 'PS5', 'La aventura más reciente en el universo de Spider-Man se basará en el mundo de Marvel’s Spider-Man y lo ampliará con una nueva historia. Los jugadores contemplarán el ascenso de Miles Morales a medida que domina nuevos poderes para convertirse en su ', 10, 1300, 'spiderPs5.jpg'),
(40, 'FIFA 23', 'PS5', 'Disfruta de la competición cumbre del futbol internacional con la llegada a FIFA 23 de la FIFA World Cup Qatar 2022 y la FIFA Womens World Cup Australia and New Zealand 2023.', 10, 1300, 'fifa23.jpg'),
(41, 'ELDEN RING', 'PS5', 'Elden Ring, desarrollado por FromSoftware y Bandai Namco, es una aventura de RPG de acción y fantasía situada en un mundo creado por Hidetaka Miyazaki -creador de la serie de videojuegos de alta influencia Dark Souls y George R.R. Martin', 10, 1290, 'eldenRing.jpg'),
(42, 'CIBERPUNK 2077', 'XBOX', 'Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en la megalópolis de Night City, donde te pondrás en la piel de un mercenario o una mercenaria ciberpunk y vivirás su lucha a vida o muerte por la supervivencia.', 10, 800, 'ciber2077.jpg'),
(43, 'MORTAL KOMBAT 11', 'XBOX', 'La experiencia MK11 definitiva! Toma el control de los protectores de Earthrealm en las DOS Campañas de historia aclamadas por la crítica y que doblan el tiempo mientras corren para evitar que Kronika retroceda el tiempo y reinicie la historia.', 10, 599, 'mortal.jpg'),
(44, 'CONSOLA XBOX SERIES X', 'consola', '¡La Xbox más rápida y más potente de la historia!              La Xbox Series X ofrece velocidades de cuadro sensacionalmente suaves de hasta 120 FPS con la explosión visual que ofrece HDR. Sumérgete con personajes más nítidos, mundos más brillantes ', 5, 14000, 'ConsolaXbox.jpg'),
(45, 'CALL OF DUTY: MODERN WARFARE II', 'XBOX', 'Call of Duty: Modern Warfare II es la secuela del éxito de taquilla del 2019, Modern Warfare. Con el regreso del icónico líder del equipo, el capitán John Price, el intrépido John \"Soap\" MacTavish, el experimentado sargento Kyle \"Gaz\" Garrick y el lo', 10, 1800, 'codwm2.jpg'),
(46, 'CONTROL INALAMBRICO XBOX', 'consola', 'Vive la experiencia del diseño modernizado del control inalámbrico de Xbox – Pulse Red, que presenta superficies esculpidas y una geometría refinada para una mayor comodidad durante el juego. Mantén siempre tu objetivo con el pad direccional híbrido ', 10, 1500, 'control.jpg'),
(47, 'POKEMON SCARLET', 'NINTENDO', 'Atrapa, combate y entrena Pokémon en la región de Paldea, una vasta tierra llena de lagos, cimas montañosas, páramos, poblaciones pequeñas y grandes ciudades. Explora un mundo completamente abierto a tu propio paso y recorre a través de la tierra, el', 10, 1400, 'pokemon.jpg'),
(48, 'THE LEGEND OF ZELDA BREATH OF THE WILD', 'NINTENDO', '¡Entra en un Mundo de Aventura. Olvida todo lo que sabes sobre los juegos de The Legend of Zelda. Entra en un mundo de descubrimientos, exploración y aventura en The Legend of Zelda: Breath of the Wild, un nuevo juego de la aclamada serie que rompe c', 10, 1199, 'zelda.jpg'),
(49, 'SUPER MARIO ODYSSEY', 'NINTENDO', 'Acompaña a Mario en una aventura en 3D enorme por todo el planeta usando sus nuevas habilidades para recoger lunas que servirán de combustible a tu aeronave, la Odyssey. ¡Y entretanto, rescata a la princesa Peach de las garras de Bowser.', 10, 1290, 'mario.jpg'),
(50, 'CONSOLA NINTENDO SWITCH', 'consola', 'Presentamos Nintendo Switch, el nuevo sistema de videojuego para el hogar de Nintendo; además de proporcionar emociones únicas y multijugador en casa, el sistema Nintendo Switch se puede llevar mientras viaja para que los jugadores puedan disfrutar d', 5, 7000, 'ConsoleNSW.jpg'),
(51, 'MARIO PARTY SUPERSTARS', 'NINTENDO', 'Llamando a todos los seguidores! Mario Party™ está de regreso con cinco tableros clásicos del juego de fiesta para la consola Nintendo 64. El glaseado y las flores estarán presentes mientras compites por obtener el mayor número de estrellas (y sabote', 10, 1300, 'marioPar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Rol` varchar(20) DEFAULT NULL,
  `Bloqueado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `Name`, `LastName`, `Email`, `Password`, `Rol`, `Bloqueado`) VALUES
(1, 'Juan', 'Martinez', 'juanmamtzx202@gmail.com', '$2y$04$JOWhsD6vCDEp56u84wfLPu3e5tFsBptLECgUQnqWsjTv9Xwxnj32q', 'user', 'no'),
(2, 'carlos', 'Martinez', 'juanmamtzx2021@gmail.com', '$2y$04$5vx2XkFuF.DjCrjDgX63uOh/za2GxieuzyK8nBj3M8JONDxkdWhOu', 'user', 'no'),
(3, 'Admin', 'admin', 'admin@gmail.com', '$2y$04$c6t4r3H/vq1KGwckbbxV0.YC5vJEUb3Wzut15KqogPwwrKfp6.5d2', 'amd', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Mes` varchar(20) NOT NULL,
  `Ventas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Mes`, `Ventas`) VALUES
('Enero', 1323),
('Febrero', 2000),
('Marzo', 2314),
('Abril', 1000),
('Mayo', 3000),
('Junio', 1234),
('Julio', 1200);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `uq_email` (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
