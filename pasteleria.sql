-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2016 a las 01:06:55
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasteleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Chocolate', 'Tortas de chocolate.'),
(2, 'Cheesecake', 'Tortas de cheesecake, diferentes gustos.'),
(3, 'Frutales', 'Tortas que contengan frutas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `pedido` datetime NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `cantidad`, `precio`, `pedido`, `id_producto`, `id_user`) VALUES
(1, 2, 34, '2016-11-21 22:21:41', 5, 2),
(2, 10, 434, '2016-11-21 22:22:54', 7, 2),
(5, 3, 702, '2016-11-23 02:01:32', 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20160915153331, 'CreateUsersTable', '2016-11-17 18:04:19', '2016-11-17 18:04:20'),
(20160922010208, 'CreateAdminSeedMigration', '2016-11-17 18:04:20', '2016-11-17 18:04:20'),
(20160922013104, 'CreateDataSeedMigration', '2016-11-17 18:04:20', '2016-11-17 18:04:22'),
(20161116203948, 'CreateCategoriasTable', '2016-11-17 18:04:22', '2016-11-17 18:04:22'),
(20161116204001, 'CreateProductosTable', '2016-11-17 18:04:22', '2016-11-17 18:04:24'),
(20161116204012, 'CreateComprasTable', '2016-11-17 18:04:24', '2016-11-17 18:04:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio_actual` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `dir` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio_actual`, `foto`, `dir`, `descripcion`, `id_categoria`) VALUES
(2, 'Torta Limon', 123, '10.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Base de galletitas sabor a vainilla, con &nbsp;<strong>mousse </strong>de limon y cubierto con <strong>merengue italiano</strong>.</p>\r\n', 3),
(5, 'Cheesecake Maracuya', 234, '5.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Cheesecake de queso marcarpone, base de galletitas de <strong>chocolate </strong>y sabor a <strong>maracuya</strong>.</p>\r\n', 2),
(6, 'Marquise de Chocolate', 345, '6.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Base de <strong>chocolate humedo</strong>, con una capa generosa de <strong>dulce de leche</strong> y merengue italiano.</p>\r\n', 1),
(7, 'Torta Banana', 278, '9.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Base de bizcocuelo con chips de chocolate, <strong>dulce de leche</strong>, <strong>crema </strong>y pedazos de <strong>banana caramelizada</strong>.</p>\r\n', 3),
(8, 'Cheesecake Frutos Rojos', 234, '7.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Base de galletitas de <strong>vainilla</strong>, cheesecake de queso mascarpone con sabor a <strong>frutos rojos </strong>de estaci&oacute;n.</p>\r\n', 2),
(9, 'Cheesecake Dulce de Leche', 234, '8.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Base de galletitas de <strong>chocolate</strong>, cheesecake de queso mascarpone con sabor a<strong> dulce de lech</strong>e.</p>\r\n', 2),
(10, 'Torta Marroc', 356, '1.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Base de galletitas de <strong>chocolate</strong>, mousse de <strong>marroc </strong>con cobertura de <strong>ganache de chocolate amargo</strong>.</p>\r\n', 1),
(11, 'Super Bombon', 543, '4.jpg', 'webroot\\files\\Productos\\foto\\', '<p>Tres capas de bizcochuelo de <strong>chocolate</strong>, generoso <strong>&nbsp;dulce de leche</strong> y&nbsp;<strong>crema</strong>, <strong>chocolate blanco </strong>y <strong>dulce de leche</strong>.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `active`, `created`, `modified`) VALUES
(1, 'Rocio', 'Bonforte', 'rocio@bonforte.com', '$2y$10$0yvlnRP2bgRluebhGXVKF.XXbIL8EOMeXXZlaDewZ3ffUTmVyuyCm', 'admin', 1, '2016-11-17 15:04:20', '2016-11-17 15:04:20'),
(2, 'Cristian', 'Sen', 'ichristiansen@example.org', '$2y$10$CrNIZ.wmzGGeUAh9rTsVZ.Sw3CdmcjeeIt3TFwe1B0O6b6NQ4Q6Hi', 'user', 1, '2016-11-17 15:04:21', '2016-11-22 00:14:09'),
(3, 'Barbara', 'Diaz', 'bcartwright@example.com', '$2y$10$g2x5R4KnR1NUsyiB6GI/Peh7l.kLXC/xGGAx14vaKQ209YuTe5b.e', 'user', 1, '2016-11-17 15:04:21', '2016-11-22 00:15:02'),
(4, 'Sofia', 'Lobos', 'schimmel.ansel@example.com', '$2y$10$GZ60dWF1F9uCZYxLT1xRN.8/DzP2MQ13iis9FhsDqwnyKFg37UaQi', 'user', 0, '2016-11-17 15:04:21', '2016-11-22 00:15:27'),
(5, 'Romina', 'Corpe', 'tremaine.barrows@example.org', '$2y$10$5MkGsemxsiDUeHEAY/88wOmF84M5.GpeB9b137xj1i/JxoinZwvIu', 'user', 1, '2016-11-17 15:04:21', '2016-11-22 00:18:32'),
(6, 'Adam', 'Diaz', 'adam.ward@example.com', '$2y$10$m2LR4ujeqS8HngF56jyeAOh8fqw/Q/nKD6rvkScReLHsUZxufSp4m', 'user', 0, '2016-11-17 15:04:21', '2016-11-22 00:18:56'),
(7, 'Hernan', 'Monteverde', 'hmorar@example.net', '$2y$10$89wf5x.rg0lPeKJKJFiEJ.ey1fH5pZoXiJj/ohwlRkOu.ESxKpxX6', 'user', 1, '2016-11-17 15:04:21', '2016-11-22 00:19:10'),
(8, 'Hugo', 'Gonzalez', 'haag.ubaldo@example.org', '$2y$10$kXMgCAjQbZV/9t8XjIhcxOtmT0JMuumpLLYebzC2CFNWJKAldauYa', 'user', 0, '2016-11-17 15:04:22', '2016-11-22 00:19:22'),
(9, 'Jazmin', 'Vera', 'jan.swaniawski@example.com', '$2y$10$5yCIwKfHnJX.Z7oLPiiXru3lmc.H5FHNJ5jzCzddEFnmEQLcoOzU2', 'user', 1, '2016-11-17 15:04:22', '2016-11-22 00:19:37'),
(11, 'Gonzalo', 'Ramirez', 'gorczany.edwina@example.net', '$2y$10$Jb0guyxTaGQFS6MYURP.B.JS5Roqn1WRZKbvW4Rk7.zU2a6KvtCpS', 'user', 0, '2016-11-17 15:04:22', '2016-11-22 00:20:04'),
(12, 'Pepe', 'Ramon', 'pepe@ramon.com', '$2y$10$j0sB7kfX0SxDXRhRQdZzTeAkbve8oB0DBqbu901LikHajuCutCwZ6', 'user', 1, '2016-11-23 02:35:39', '2016-11-23 02:35:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
