-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2023 a las 18:01:17
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdpintura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id`, `usuario`, `contraseña`, `alias`, `estado`) VALUES
(1, 'admin', '123', 'Carlitos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda`
--

CREATE TABLE `ayuda` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ayuda`
--

INSERT INTO `ayuda` (`id`, `titulo`, `descripcion`, `imagen`, `imagen2`, `url`, `estado`) VALUES
(1, 'We can help you!', 'We offer a wide range of procedures to help you get that perfect smile.', NULL, NULL, 'schedule.php', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienvenida`
--

CREATE TABLE `bienvenida` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion_1` varchar(800) DEFAULT NULL,
  `descripcion_2` varchar(800) DEFAULT NULL,
  `imagen_1` varchar(255) DEFAULT NULL,
  `imagen_2` varchar(255) DEFAULT NULL,
  `imagen_3` varchar(255) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bienvenida`
--

INSERT INTO `bienvenida` (`id`, `titulo`, `descripcion_1`, `descripcion_2`, `imagen_1`, `imagen_2`, `imagen_3`, `ruta`, `estado`) VALUES
(1, 'Bienvenido a Intense', '¡La clínica dental del Dr. Mark Hoffman le da la bienvenida! Nos alegra que haya decidido convertirse en nuestro cliente para resolver sus problemas de salud dental.', 'Nuestro principal objetivo a largo plazo es siempre lograr resultados complejos para su salud dental. Pero en el proceso, también mantenemos el enfoque en brindarle el mejor servicio al cliente. ¡Siempre estamos haciendo que nuestro consultorio dental sea el lugar más seguro posible!\r\n\r\n ', 'home-05-525x350.jpg', 'home-04-525x350.jpg', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `nombre2` varchar(100) DEFAULT NULL,
  `imagen2` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(100) DEFAULT NULL,
  `resumen` text DEFAULT NULL,
  `detalle` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `estado`, `url`, `imagen`, `titulo`, `nombre2`, `imagen2`, `subtitulo`, `resumen`, `detalle`) VALUES
(1, 'Arquitectonica', 1, 'ALQUILER MONITOREO DE AIRE', 'monitoreo de aire (2).jpg', 'ALQUILER MONITOREO DE AIRE', NULL, NULL, NULL, NULL, NULL),
(2, 'Automotriz', 1, 'ALQUILER MONITOREO DE SUELOS', 'monitoreo de suelo (2).jpg', 'ALQUILER MONITOREO DE SUELOS', NULL, NULL, NULL, NULL, NULL),
(3, 'Industrial', 1, 'Alquiler_monitoreoagua', 'cielo-azul(1).jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `logofooter` text DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `imagen01` varchar(255) DEFAULT NULL,
  `imagen02` varchar(255) DEFAULT NULL,
  `imagen03` varchar(255) DEFAULT NULL,
  `copyrigth` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `logo`, `logofooter`, `direccion`, `telefono`, `subtitulo`, `descripcion`, `email`, `facebook`, `twitter`, `google`, `linkedin`, `imagen01`, `imagen02`, `imagen03`, `copyrigth`, `estado`) VALUES
(1, 'lasser.png', 'logo.png', '4578 Marmora St, San Francisco D04 89GR', '800-234-567', 'TWITTER FEED', 'This is sample tweet for local testing. Upload your project to the live hosting server for get data from twitter.com', 'mail@demolink.org', '#', '#', '#', '#', NULL, NULL, NULL, 'Intense Dental Clinic © 2023 . Privacy Policy', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(225) DEFAULT NULL,
  `subtitulo` varchar(225) DEFAULT NULL,
  `resumen` varchar(800) DEFAULT NULL,
  `imagen` varchar(800) DEFAULT NULL,
  `resumen_m` varchar(800) DEFAULT NULL,
  `subtitulo_h` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `url_01` varchar(255) DEFAULT NULL,
  `url_info` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `titulo`, `subtitulo`, `resumen`, `imagen`, `resumen_m`, `subtitulo_h`, `estado`, `url_01`, `url_info`) VALUES
(1, '\"¡Haremos todo lo posible para brindarle la mejor atención médica y servicio al cliente posibles!\"', NULL, 'Dr. Mark Hoffman', 'home-01-563x616.png', 'Fundador y director de Intense Dental Clinic', NULL, 1, 'schedule.php', '#'),
(5, 'Nos esforzamos por proporcionar un ambiente relajado', NULL, 'Si desea mejorar, mejorar o proteger su sonrisa, no dude en contactarnos hoy.', 'home-02-680x488.png', NULL, NULL, 1, 'schedule.php', '#'),
(6, 'Citas', NULL, 'Para hacer una cita con nuestro médico, por favor complete el formulario disponible en esta página. De lo contrario, le invitamos a ponerse en contacto con nuestro coordinador de programación directamente durante nuestro horario normal de oficina.', 'home-03-363x606.png', NULL, NULL, 1, 'schedule.php', '#');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  `detalle` text DEFAULT NULL,
  `estado` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombre`, `ruta`, `detalle`, `estado`) VALUES
(1, 'Inicio', 'index.php', NULL, '1'),
(2, 'Nosotros', 'about-us.php', NULL, '1'),
(3, 'Productos', 'productos.php', NULL, '1'),
(4, 'Calendario', 'schedule.php', NULL, '0'),
(5, 'Noticias', 'blog.php', NULL, '0'),
(6, 'Contacto', 'contacts.php', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `fecha` varchar(255) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `imagen2` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `fecha`, `descripcion`, `imagen`, `imagen2`, `url`, `estado`) VALUES
(1, 'First Signs of Gum Disease', 'Post by:  John Doe on  15 Feb 2018 in Dental News', 'If you have been told you have periodontal (gum) disease, you’re not alone. Many adults in the U.S. currently have some form of the disease that can often be dangerous.', NULL, NULL, 'blog-single-post.php', 1),
(2, 'Basic Dental Care', 'Post by:  John Doe on  15 Feb 2018 in Dental News', 'Today we would like to speak about basic dental care, a set of procedures which involves brushing and flossing your teeth regularly, as well as visiting your local dentist regularly.', NULL, NULL, 'blog-single-post.php', 1),
(3, 'Dry Mouth', 'Post by:  John Doe on  15 Feb 2018 in Dental News', 'Dry mouth is a syndrome of saliva lack in your mouth. It happens when a mouth gets dry and uncomfortable. Fortunately, many treatments can help against it.', NULL, NULL, 'blog-single-post.php', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `subtitulo` varchar(800) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `lista_1` varchar(255) DEFAULT NULL,
  `lista_2` varchar(255) DEFAULT NULL,
  `lista_3` varchar(255) DEFAULT NULL,
  `lista_4` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1)),
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `titulo`, `subtitulo`, `categoria`, `lista_1`, `lista_2`, `lista_3`, `lista_4`, `imagen`, `estado`, `url`) VALUES
(1, 'Our Services', 'We’re pleased to offer a wide range of dental services', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'single-service.php'),
(2, NULL, NULL, 'General and Preventive Care', 'Sealants', 'Root Canal Therapy', 'Extractions', 'Scaling and Root Planing', NULL, 1, NULL),
(3, NULL, NULL, 'Cosmetic Dentistry', 'Cosmetic Contouring', 'Whitening', 'Laser dentistry', NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razones`
--

CREATE TABLE `razones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `detalle` varchar(800) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `icono` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `razones`
--

INSERT INTO `razones` (`id`, `titulo`, `subtitulo`, `descripcion`, `detalle`, `imagen`, `icono`, `estado`) VALUES
(2, '', 'CITA', 'El primer paso hacia una sonrisa hermosa y saludable es programar una cita. Por favor, póngase en contacto con nuestra oficina por teléfono o complete el formulario de solicitud de cita.', NULL, NULL, NULL, 1),
(3, '', 'LOS MEJORES PRECIOS', 'Excelente cuidado y dientes de implante de alta calidad a un precio que cualquiera puede pagar, haciendo que los costos de implantes dentales sean más accesibles. Finalmente, gran calidad con un gran precio!', NULL, NULL, NULL, 1),
(4, '', 'PERICIA\r\n', 'Nuestro equipo de más de 20 profesionales se ha capacitado en el Reino Unido y en el extranjero, creando un equipo altamente calificado, amigable y multilingüe para atender mejor las necesidades de nuestros pacientes.', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `testimonio` varchar(800) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL CHECK (`estado` in (0,1))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `titulo`, `nombre`, `testimonio`, `cargo`, `imagen`, `estado`) VALUES
(1, 'Testimonios', NULL, NULL, NULL, NULL, 1),
(2, NULL, 'ALEX ROSS', 'Just a quick note to say thank you so much for the care you took over my appointment today. I am very grateful for your high standard of care.', 'CEO/FOUNDER AT DEMOLINK.COM', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bienvenida`
--
ALTER TABLE `bienvenida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `razones`
--
ALTER TABLE `razones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `bienvenida`
--
ALTER TABLE `bienvenida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `razones`
--
ALTER TABLE `razones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
