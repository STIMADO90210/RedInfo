-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-01-2017 a las 17:57:48
-- Versión del servidor: 5.5.53-0+deb8u1
-- Versión de PHP: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `info_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_info`
--

CREATE TABLE IF NOT EXISTS `blog_info` (
`id_art` int(11) NOT NULL,
  `fecha_art` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo_art` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cont_art` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `img_art` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `blog_info`
--

INSERT INTO `blog_info` (`id_art`, `fecha_art`, `titulo_art`, `cont_art`, `img_art`) VALUES
(1, '02/01/2017', 'El Caso de PHP y los Salarios  ', '                                               Cualquier persona, a cualquier edad, con un mÃ­nimo de habilidad matemÃ¡tica puede hacerse programador, incluso de manera autodidacta. Y cualquier programador, si centra su profesiÃ³n en dominar las tecnologÃ­as correctas y mÃ¡s demandadas, con constancia, mucho trabajo y persistencia, puede hacerse un hueco en el nuevo Olimpo de los Nerds.\r\n\r\nYa no son leyendas de tierras distantes. Vemos a diario casos de alumnos, amigos, conocidos que lo estÃ¡n haciendo aquÃ­ y afuera. En esta tercera y Ãºltima publicaciÃ³n de la serie â€œMitos, leyendas y realidades de programar a los 45 aÃ±osâ€, Fernando RodrÃ­guez detalla esta posibilidad con su propia historia, para animar a todos lo que quieran empezar, Â¡o volver a empezar!                               ', 'coworkers.jpg  '),
(2, '01/01/2017', 'aniversario de infocentro ', '                              En mi situaciÃ³n hace 4 aÃ±os, tenÃ­a que elegir un Ã¡rea de especializaciÃ³n diferente, y habÃ­a muchas posibilidades. La programaciÃ³n web estaba en pleno auge, asÃ­ como .NET. Con mi pasado de Windows, .NET podrÃ­a parecer la opciÃ³n lÃ³gica, pero no era asÃ­.\r\n\r\n.NET ya tenÃ­a sus aÃ±os y habÃ­a muchos desarrolladores con mucha trayectoria. Por lo tanto yo siempre tendrÃ­a el â€œhandicapâ€ de tener menos aÃ±os de experiencia que la mayorÃ­a.\r\n\r\nPor eso, al actualizarse hay que elegir las tecnologÃ­as que estÃ©n de verdad despuntando, aunque no haya demasiadas ofertas aÃºn. Es en esas donde puedes convertirte rÃ¡pidamente en el â€œRey del Mamboâ€. Nadie tiene hoy 7 aÃ±os de experiencia en Swift, Node, iOS, Angular, Big Data o MongoDB (por citar algunas). AhÃ­ es donde hay que centrarse.                          ', 'aniversario.png '),
(3, ' 10/01/201', ' Sueldos de US$170.000 para desarrolladores ', '                                        Estamos viviendo una nueva era, donde no sÃ³lo futbolistas, actores de Hollywood y Top Models pueden conseguir sueldos de vÃ©rtigo y disfrutar en primera persona la sensaciÃ³n de ser â€œSuper Starsâ€. Ahora a este club de VIPs, se han sumado los programadores.\r\n\r\nDe ser vistos peyorativamente como â€œnerdsâ€, los programadores ya son considerados aves raras y son sÃºper valoradas en el mercado laboral, dentro y fuera de EspaÃ±a. Naturalmente con diferencias y niveles entre los diferentes paÃ­ses. En EspaÃ±a actualmente, son uno de los pocos profesionales que pueden permitirse decir que no les falta trabajo. En EEUU, especialmente en zona como Silicon Valley, son tratados como estrellas y los sueldos estÃ¡ndares para Seniors, oscilan entre US$ 120.000 y 170.000.                                                                                    ', '650_1200.jpg ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comenta`
--

CREATE TABLE IF NOT EXISTS `comenta` (
  `id_come` int(11) NOT NULL,
  `fecha` varchar(10) CHARACTER SET latin1 NOT NULL,
  `hora` varchar(10) CHARACTER SET latin1 NOT NULL,
  `nick` varchar(100) CHARACTER SET latin1 NOT NULL,
  `comentario` varchar(500) CHARACTER SET latin1 NOT NULL,
  `id_art` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `comenta`
--

INSERT INTO `comenta` (`id_come`, `fecha`, `hora`, `nick`, `comentario`, `id_art`) VALUES
(1, '26-10-2016', '06-23-04 p', 'rafael', 'que vaine amas boba esta', 5),
(14, '26-10-2016', '07-06-58 p', 'melvin', 'Volviendo a las disciplinas clÃ¡sicas de la ingenierÃ­a y la arquitectura, el objetivo de estas no es el de las ciencias clÃ¡sicas de carÃ¡cter analÃ­tico, es decir, no intenta entender, explicar y describir algo ya existente como lo hacen la fÃ­sica, la quÃ­mica o la biologÃ­a, sino mÃ¡s bien sintÃ', 5),
(15, '26-10-2016', '07-11-57 p', 'rafael', 'El desarrollo de software es una disciplina prÃ¡ctica relativamente nueva que tiene poco mÃ¡s de medio siglo de existencia, pero que conceptualmente es hija de las disciplinas clÃ¡sicas constructivas englobadas bajo el paraguas de las ingenierÃ­as y la arquitectura. De ellas hereda una de las habili', 2),
(16, '27-10-2016', '07-36-41 a', 'jose perez', '                        \r\n                        Comprendemos que usted como venezolano proviene de una forma de vida rÃ¡pida, donde es valioso el tiempo, pero el panameÃ±o por lo general toma la vida de forma mÃ¡s tranquila y mÃ¡s lenta, aun proyectando PanamÃ¡ una imagen de metrÃ³polis y primer m', 6),
(17, '29-10-2016', '11-59-33 a', 'rafael', 'No se que hace Mirla en la inauguracion del infocentro se pelo el bonche                        \r\n                        ', 2),
(18, '30-10-2016', '06-27-30 a', 'jose perez', '                        esta si es una celebracion x todo lo alto\r\n                        ', 1),
(19, '02-11-2016', '10-12-49 a', 'maria', '                        \r\n                       trabajando con empeÃ±o', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_user`
--

CREATE TABLE IF NOT EXISTS `datos_user` (
`id_dat_user` int(11) NOT NULL,
  `id_user` int(9) NOT NULL,
  `telf_user` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `sexo_user` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac_user` date NOT NULL,
  `fecha_incrip` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cont_vis` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infocentro`
--

CREATE TABLE IF NOT EXISTS `infocentro` (
`id_inf` int(11) NOT NULL,
  `cod_inf` varchar(9) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_inf` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion_inf` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telf_inf` varchar(14) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `logo_inf` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `infocentro`
--

INSERT INTO `infocentro` (`id_inf`, `cod_inf`, `nombre_inf`, `direccion_inf`, `telf_inf`, `logo_inf`) VALUES
(1, 'SG0001', 'suenos del gigante', 'Barrio el Gaitero sector # 3 Calle 131 casa 131-62', '02612222222', 'logo_gigante.png'),
(2, 'SA0002', 'Salvador Allende', 'sector cuatricententenario barrio nueva independencia calle132 casa 312-90 detras de farmacia la pedregoza', '0261-3333333', 'logo.png'),
(3, 'EC0003', 'eje central', 'La sede  central', '5555555', 'computer.png'),
(4, 'sm0004', 'simon bolivar', 'barrio bolivar', '20202020', '14374637_905996342865611_1183810864_o.png'),
(5, 'sm0004', 'simon bolivar', 'barrio bolivar', '20202020', '14374637_905996342865611_1183810864_o.png'),
(8, 'pn0005', 'patria nueva', 'el paraiso', '30303030', '6B1.jpg'),
(9, 'md0009', 'manuel danigno', 'la curva', '90909090', 'IMG-20151020-00152.jpg'),
(10, 'ro0008', 'rafael orozco', 'la polar', '404040040', 'bambi.png'),
(11, ' na0012', ' nasa', ' el gaitero', ' 34321133', 'taz.png'),
(12, ' RB0008', ' republica bolivariana', ' el marite', ' 34234523454', '546839_346141652151785_515785856_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
`id_nivel` int(11) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `cargo`) VALUES
(1, 'master'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_user` int(11) NOT NULL,
  `cedula_user` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `img_user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clave_user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nivel_user` int(1) NOT NULL,
  `id_inf` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `cedula_user`, `nombre_user`, `apellido_user`, `img_user`, `email_user`, `clave_user`, `nivel_user`, `id_inf`) VALUES
(1, '10440747', 'rafael', 'orozco', 'MIFOTO.png', 'equintero171@gmail.com', 'alfa3000', 1, 1),
(2, '11111111', 'laura', 'bueno', 'face1.jpg', 'lauranina@gmail.com', 'blankita', 2, 2),
(3, '20202020', 'MERVIN ', 'VILLALOBOS', 'mervin.jpg', 'MERVIN@GMAIL.COM', 'GIGANTE', 1, 3),
(4, '45454545', 'roonny', 'chevere', 'avatar.png', 'ronny@gmail.com', 'alfanumerico', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_info`
--
ALTER TABLE `blog_info`
 ADD PRIMARY KEY (`id_art`);

--
-- Indices de la tabla `datos_user`
--
ALTER TABLE `datos_user`
 ADD PRIMARY KEY (`id_dat_user`);

--
-- Indices de la tabla `infocentro`
--
ALTER TABLE `infocentro`
 ADD PRIMARY KEY (`id_inf`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
 ADD PRIMARY KEY (`id_nivel`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_info`
--
ALTER TABLE `blog_info`
MODIFY `id_art` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `datos_user`
--
ALTER TABLE `datos_user`
MODIFY `id_dat_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `infocentro`
--
ALTER TABLE `infocentro`
MODIFY `id_inf` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
