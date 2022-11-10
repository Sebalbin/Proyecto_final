-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2022 a las 04:32:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parapentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bungee`
--

CREATE TABLE `bungee` (
  `id` int(3) NOT NULL,
  `link` varchar(500) NOT NULL,
  `lugar` varchar(200) DEFAULT NULL,
  `valor` varchar(200) NOT NULL,
  `contenido` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bungee`
--

INSERT INTO `bungee` (`id`, `link`, `lugar`, `valor`, `contenido`) VALUES
(1, 'https://img1.wsimg.com/isteam/ip/8d6c24da-4875-44c5-a47b-0068c8284fef/56eba67d-211a-4ac0-a6be-c7b7a35e3283.JPG/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1300,h:800', 'SAN GIL.', 'valor: 80.000$', 'por la vía a Charalá, despues de la universidad Unisangil; tenemos una super estructura construida exclusivamente para la practica 100% del Bungee Jumping, saltando 70 metros de caida libre sobre agua a la mitad del río Fonce por donde se desciende el canotaje.'),
(2, 'https://i0.wp.com/xplorercolombia.com/sangil/wp-content/uploads/2021/05/BUNGEE-jumping-sangil.jpg?fit=1798%2C1200&ssl=1', 'Samaca Boyaca.', '75.000$', 'A dos horas de Bogota, a 30 minutos de Tunja y a 15 minutos del Puente de Boyaca, se encuentra un bello escenario natural, el antiguo puente férreo conocido como \" El Puenton \"  un clásico puente en piedra con 40 metros de altura que pondrán a prueba TODOS tus sentidos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `id` int(2) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `valor1` varchar(20) DEFAULT NULL,
  `valor2` varchar(20) DEFAULT NULL,
  `valor3` varchar(20) DEFAULT NULL,
  `contenido` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `link`, `lugar`, `valor1`, `valor2`, `valor3`, `contenido`) VALUES
(1, 'https://www.despejandodudas.co/images/Imgs_2/Nube_Extrema_4.jpg', 'San felix.', '- 15 minutos - fotos', '- 20 minutos - fotos', '- 30 minutos - fotos', 'Kilómetro 6 Vía San Pedro de los Milagros, San Félix, Bello,  Antioquia.'),
(2, 'https://adrenalinecolombia.com/wp-content/uploads/2021/07/Parapente-Cerca-a-Medellin-Cocorna_-Adrenaline-colombia-1-870x555.png', 'Cocorna.', '- 15 minutos - fotos', '- 20 minutos - fotos', '- 30 minutos - fotos', 'Cocorná es uno de los pueblos del oriente antioqueño, y está apenas a dos horas de Medellín.\r\n                  '),
(6, 'https://hotelesensangil.com/wp-content/uploads/2021/12/Parapente-Canon-del-chicamocha-9.jpg', 'El Cañón de Chicamocha (Santander)', '- 15 minutos - fotos', '- 20 minutos - fotos', '- 30 minutos - fotos', 'A solo 54 kilómetros de Bucaramanga, entre Aratoca y Piedecuesta se encuentra el impresionante Cañón de Chicamocha. ¿Qué lo hace tan especial? Es el segundo cañón más grande del mundo, con más de 108.000 hectáreas y 2.000 metros de profundidad'),
(7, 'http://blogimagestc.s3.amazonaws.com/Parapente%20sopo.png', 'Embalse de Tominé (Cundinamarca)', '- 15 minutos - fotos', '- 20 minutos - fotos', '- 30 minutos - fotos', 'Desde el municipio se debe dirigir al sitio de despegue que está ubicado a 4.5 km de Sopó, en la vía al Parque Pionono.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `senderismo`
--

CREATE TABLE `senderismo` (
  `id` int(3) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `lugar` varchar(50) DEFAULT NULL,
  `valor` varchar(200) DEFAULT NULL,
  `contenido` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `senderismo`
--

INSERT INTO `senderismo` (`id`, `link`, `lugar`, `valor`, `contenido`) VALUES
(3, 'imagenes/ciudad_perdida.PNG', 'Ciudad Perdida.', 'Valor: 35.000$', 'Esta es una de las aventuras inolvidables, para la que se debe tener un buen estado físico, son entre 4 y 5 horas cada jornada. Lo ideal, es disponer de 4 días para conocer este centro urbano de la antigua civilización Tayrona, conformada por plazoletas circulares, escaleras, caminos y canales construidos en piedra, así como viviendas hechas en bahareque y paja.'),
(4, 'https://www.ecoturismoputumayo.com/images/atractivos/4/cascadas-fin-del-mundo-6.jpg', 'Cascada del Fin del Mundo.', 'Valor: 50.000$', 'Los senderos son fáciles de seguir, están delimitados y siempre hay personal de la reserva en el camino. Debes disponer de un día entero para hacer el recorrido sin afanes. El ingreso es de 7:00 a.m. hasta el mediodía y cuesta unos 15 mil pesos.'),
(5, 'https://www.nationalgeographic.com.es/medio/2014/09/16/ogrunewald_cano_cristales_24_1800x1201.jpg', 'Caño Cristales.', 'Valor: 45.000$', 'En un día soleado, los colores verde, púrpura, rojo, amarillo y azul de Caño Cristales aparecerán a la vista, pareciera como si el arco iris se hubiera fundido dentro del agua cristalina de este río, considerado el más lindo del mundo.'),
(6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWv4MP0HoOAu0tOlZgNUeFTEP3k3Q3BmqySThkIuXvjXOYlDsmAY7HfwMB4SF3qxJrnYI&usqp=CAU', 'El Peñon de Guatapé.', 'valor: 55.000$', 'El peñon se ha convertido en la gran atracción de este lugar antioqueño, para quienes quieren ascender a la cima y vivir la experiencia de estar en un verdadero paisaje “paisa”.'),
(7, 'https://hansatours.com/images/chicaque-tour-ecotour.jpg', 'Chicaque.', 'valor: 50.000$', 'Este parque natural es un bosque de niebla de unos 10 kilómetros de senderos que llevan a quebradas de aguas cristalinas, entre robles y vegetación nativa y más de 200 especies de aves y otras como el oso de anteojos, osos perezosos, ardillas y conejos.'),
(8, 'https://cdn.colombia.com/sdi/2013/12/10/salento-y-el-valle-del-cocora-755825.jpg', 'Valle del Cocora.', 'valor: 43.000$', 'Este valle en medio de las montañas andinas es muy conocido por ser la región de la palma de cera, uno de los símbolos nacionales, a través del cual se puede realizar una caminata hacia las zonas de alta montaña, preferiblemente en compañía de un guía local para evitar perderse entre la niebla.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bungee`
--
ALTER TABLE `bungee`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `senderismo`
--
ALTER TABLE `senderismo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bungee`
--
ALTER TABLE `bungee`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `senderismo`
--
ALTER TABLE `senderismo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
