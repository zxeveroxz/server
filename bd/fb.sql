-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2023 a las 08:44:48
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(4) UNSIGNED NOT NULL,
  `empresa_ruc` varchar(15) NOT NULL,
  `empresa_activo` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`empresa_id`, `empresa_ruc`, `empresa_activo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '10203040500', 1, '2023-09-19 21:15:56', '2023-09-19 21:15:56', NULL),
(2, '20600853563', 1, '2023-09-19 21:15:56', '2023-09-19 21:15:56', NULL),
(3, '20100152356', 1, '2023-09-20 07:58:21', NULL, NULL),
(4, '20269985900', 1, '2023-09-20 07:58:21', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresainfo`
--

CREATE TABLE `empresainfo` (
  `empresa_id_empresa` int(4) UNSIGNED NOT NULL,
  `empresa_razon` varchar(150) NOT NULL,
  `empresa_fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresainfo`
--

INSERT INTO `empresainfo` (`empresa_id_empresa`, `empresa_razon`, `empresa_fecha`) VALUES
(1, 'EMPRESA DE PRUEBA', '2023-09-19 19:17:01'),
(4, 'ENEL DISTRIBUCION PERU S.A.A.', '2023-09-20 06:00:05'),
(2, 'JSJ CONSULTORES', '2023-09-19 19:17:01'),
(3, 'SERV AGUA POTAB Y ALCANT DE LIMA-SEDAPAL', '2023-09-20 06:00:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresausuario`
--

CREATE TABLE `empresausuario` (
  `empresa_id_emmpresa` int(4) UNSIGNED NOT NULL,
  `empresa_id_usuario` int(6) UNSIGNED NOT NULL,
  `empresa_id_privilegiouser` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `grupos_id` int(2) UNSIGNED NOT NULL,
  `grupos_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`grupos_id`, `grupos_nombre`) VALUES
(2, 'ADMIN'),
(1, 'MASTER'),
(4, 'OTROS'),
(3, 'USER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-09-18-004645', 'App\\Database\\Migrations\\Pais', 'default', 'App', 1695068471, 1),
(2, '2023-09-18-010631', 'App\\Database\\Migrations\\Grupos', 'default', 'App', 1695068471, 1),
(3, '2023-09-18-012227', 'App\\Database\\Migrations\\PrivilegioUser', 'default', 'App', 1695068471, 1),
(4, '2023-09-18-012821', 'App\\Database\\Migrations\\Usuario', 'default', 'App', 1695068471, 1),
(5, '2023-09-18-014957', 'App\\Database\\Migrations\\Empresa', 'default', 'App', 1695068471, 1),
(6, '2023-09-18-034226', 'App\\Database\\Migrations\\EmpresaInfo', 'default', 'App', 1695068471, 1),
(7, '2023-09-18-040028', 'App\\Database\\Migrations\\EmpresaUsuario', 'default', 'App', 1695068471, 1),
(8, '2023-09-18-061258', 'App\\Database\\Migrations\\UsuarioInfo', 'default', 'App', 1695068471, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `pais_id` int(6) UNSIGNED NOT NULL,
  `pais_nombre` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`pais_id`, `pais_nombre`, `created_at`, `updated_at`) VALUES
(1, 'Norfolk Island', '2021-03-15 03:51:01', '2022-02-10 06:56:41'),
(2, 'Morocco', '2013-05-01 18:01:27', '2018-09-04 15:07:49'),
(3, 'Saint Kitts and Nevis', '2006-05-30 13:05:59', '2023-02-10 22:19:03'),
(4, 'Holy See (Vatican City State)', '1977-04-02 22:29:50', '2011-01-08 15:35:05'),
(5, 'Angola', '1984-03-15 14:46:11', '1991-06-29 07:38:00'),
(6, 'Lithuania', '2006-11-11 06:34:42', '2014-04-16 04:05:11'),
(7, 'Mali', '2004-11-01 00:17:02', '2014-09-03 12:10:45'),
(8, 'French Southern Territories', '1987-11-01 15:43:01', '2010-12-29 18:22:20'),
(9, 'Peru', '2004-07-07 15:32:09', '2010-09-21 17:53:35'),
(10, 'Poland', '2003-03-11 05:54:27', '2015-01-25 10:53:09'),
(11, 'Ethiopia', '1995-12-06 02:46:27', '2014-01-18 23:14:51'),
(12, 'Senegal', '2023-05-15 12:11:58', '2023-08-24 06:13:41'),
(13, 'Saudi Arabia', '2013-09-24 07:20:50', '2015-08-31 12:24:03'),
(14, 'Philippines', '2012-06-29 19:53:55', '2012-12-11 07:48:32'),
(15, 'Samoa', '1993-12-15 18:46:49', '1994-10-14 18:02:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegiouser`
--

CREATE TABLE `privilegiouser` (
  `PrivilegioUser_id` int(2) UNSIGNED NOT NULL,
  `PrivilegioUser_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(6) UNSIGNED NOT NULL,
  `usuario_uzer` varchar(100) NOT NULL,
  `usuario_pazz` varchar(100) NOT NULL,
  `usuario_id_grupo` int(2) UNSIGNED NOT NULL,
  `usuario_activo` int(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_uzer`, `usuario_pazz`, `usuario_id_grupo`, `usuario_activo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yoooo57', '$2y$10$94Myxj.YHWP6ofRpp.egA.SxU51ga5pjx1BIiKv52nM0R91N4oKde', 3, 1, '2023-09-18 20:31:57', '2023-09-18 20:31:57', NULL),
(2, 'yoooo59', '$2y$10$k4PGz5DdIiH6gBc3QQiuzufhsM.yYh3V9blWfvT4YxRawEeSkYpGq', 3, 1, '2023-09-18 20:31:59', '2023-09-18 20:31:59', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioinfo`
--

CREATE TABLE `usuarioinfo` (
  `usuario_id_usuario` int(6) UNSIGNED NOT NULL,
  `usuario_correo` varchar(150) NOT NULL,
  `usuario_datos` varchar(150) DEFAULT NULL,
  `usuario_documento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarioinfo`
--

INSERT INTO `usuarioinfo` (`usuario_id_usuario`, `usuario_correo`, `usuario_datos`, `usuario_documento`) VALUES
(1, 'ssssddd@kk.com', 'yooooooopppe', '555555'),
(2, 'ssssddd@kk.com', 'yooooooopppe', '555555');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`),
  ADD UNIQUE KEY `empresa_ruc` (`empresa_ruc`);

--
-- Indices de la tabla `empresainfo`
--
ALTER TABLE `empresainfo`
  ADD UNIQUE KEY `empresa_razon` (`empresa_razon`),
  ADD KEY `EmpresaInfo_empresa_id_emmpresa_foreign` (`empresa_id_empresa`);

--
-- Indices de la tabla `empresausuario`
--
ALTER TABLE `empresausuario`
  ADD UNIQUE KEY `FK_empresa_usurio_privilegio` (`empresa_id_emmpresa`,`empresa_id_usuario`,`empresa_id_privilegiouser`),
  ADD KEY `EmpresaUsuario_empresa_id_usuario_foreign` (`empresa_id_usuario`),
  ADD KEY `EmpresaUsuario_empresa_id_privilegiouser_foreign` (`empresa_id_privilegiouser`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`grupos_id`),
  ADD UNIQUE KEY `grupos_nombre` (`grupos_nombre`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`pais_id`),
  ADD UNIQUE KEY `pais_nombre` (`pais_nombre`);

--
-- Indices de la tabla `privilegiouser`
--
ALTER TABLE `privilegiouser`
  ADD PRIMARY KEY (`PrivilegioUser_id`),
  ADD UNIQUE KEY `PrivilegioUser_nombre` (`PrivilegioUser_nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `usuario_uzer` (`usuario_uzer`),
  ADD KEY `usuario_usuario_id_grupo_foreign` (`usuario_id_grupo`);

--
-- Indices de la tabla `usuarioinfo`
--
ALTER TABLE `usuarioinfo`
  ADD PRIMARY KEY (`usuario_id_usuario`),
  ADD UNIQUE KEY `UN_usuario_correo` (`usuario_id_usuario`,`usuario_correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `grupos_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `pais_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `privilegiouser`
--
ALTER TABLE `privilegiouser`
  MODIFY `PrivilegioUser_id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empresainfo`
--
ALTER TABLE `empresainfo`
  ADD CONSTRAINT `EmpresaInfo_empresa_id_emmpresa_foreign` FOREIGN KEY (`empresa_id_empresa`) REFERENCES `empresa` (`empresa_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresausuario`
--
ALTER TABLE `empresausuario`
  ADD CONSTRAINT `EmpresaUsuario_empresa_id_emmpresa_foreign` FOREIGN KEY (`empresa_id_emmpresa`) REFERENCES `empresa` (`empresa_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `EmpresaUsuario_empresa_id_privilegiouser_foreign` FOREIGN KEY (`empresa_id_privilegiouser`) REFERENCES `privilegiouser` (`PrivilegioUser_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `EmpresaUsuario_empresa_id_usuario_foreign` FOREIGN KEY (`empresa_id_usuario`) REFERENCES `usuario` (`usuario_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_usuario_id_grupo_foreign` FOREIGN KEY (`usuario_id_grupo`) REFERENCES `grupos` (`grupos_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioinfo`
--
ALTER TABLE `usuarioinfo`
  ADD CONSTRAINT `UsuarioInfo_usuario_id_usuario_foreign` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`usuario_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
