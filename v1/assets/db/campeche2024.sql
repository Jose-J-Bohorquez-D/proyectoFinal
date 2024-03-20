-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-02-2024 a las 09:07:21
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `campeche2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int NOT NULL,
  `id_usuario` int DEFAULT NULL,
  `id_producto` int DEFAULT NULL,
  `nombre_pro` int DEFAULT NULL,
  `cantidad_pro` int DEFAULT NULL,
  `valor_pro` int DEFAULT NULL,
  `total_pro` int DEFAULT NULL,
  `total_pagar_pro` int DEFAULT NULL,
  `estado_carrito` int DEFAULT NULL,
  `fecha_crea` int DEFAULT NULL,
  `fecha_actu` int DEFAULT NULL,
  `fecha_elim` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int NOT NULL,
  `nombre_cat` int DEFAULT NULL,
  `descripcion_cat` int DEFAULT NULL,
  `estado_cat` int DEFAULT NULL,
  `fecha_crea` int DEFAULT NULL,
  `fecha_actu` int DEFAULT NULL,
  `fecha_elim` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_ped` int NOT NULL,
  `id_usu` int DEFAULT NULL,
  `id_trans` int DEFAULT NULL,
  `estado_ped` int DEFAULT NULL,
  `fecha_crea` int DEFAULT NULL,
  `fecha_actu` int DEFAULT NULL,
  `fecha_elim` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int NOT NULL,
  `nombre_pro` int DEFAULT NULL,
  `descripcion_pro` int DEFAULT NULL,
  `foto_pro` int DEFAULT NULL,
  `fecha_crea` int DEFAULT NULL,
  `fecha_actu` int DEFAULT NULL,
  `fecha_elim` int DEFAULT NULL,
  `estado_pro` int DEFAULT NULL,
  `categoria_pro` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int NOT NULL,
  `nombre_rol` int DEFAULT NULL,
  `descripcion_rol` int DEFAULT NULL,
  `estado_rol` int DEFAULT NULL,
  `fecha_crea` int DEFAULT NULL,
  `fecha_actu` int DEFAULT NULL,
  `fecha_elim` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id_trans` int NOT NULL,
  `id_usu` int DEFAULT NULL,
  `id_carrito` int DEFAULT NULL,
  `estado_trans` int DEFAULT NULL,
  `fecha_crea` int DEFAULT NULL,
  `fecha_actu` int DEFAULT NULL,
  `fecha_elim` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int NOT NULL,
  `tipo_doc_usu` int DEFAULT NULL,
  `num_doc_usu` int DEFAULT NULL,
  `nombres_usu` int DEFAULT NULL,
  `apellidos_usu` int DEFAULT NULL,
  `telefono_usu` int DEFAULT NULL,
  `correo_usu` int DEFAULT NULL,
  `pwd_usu` int DEFAULT NULL,
  `direccion_usu` int DEFAULT NULL,
  `especificacion_dir_usu` int DEFAULT NULL,
  `ubicacion_usu` int DEFAULT NULL,
  `rol_usu` int DEFAULT NULL,
  `estado_usu` int DEFAULT NULL,
  `fecha_crea` int DEFAULT NULL,
  `fecha_actu` int DEFAULT NULL,
  `fecha_elim` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_ped`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`id_trans`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`),
  ADD UNIQUE KEY `num_doc_usu` (`num_doc_usu`),
  ADD UNIQUE KEY `telefono_usu` (`telefono_usu`),
  ADD UNIQUE KEY `correo_usu` (`correo_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_ped` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_pro` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id_trans` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
