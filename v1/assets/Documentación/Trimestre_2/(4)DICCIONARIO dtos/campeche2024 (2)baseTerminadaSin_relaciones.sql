-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-03-2024 a las 00:21:54
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
  `id_carrito` int NOT NULL COMMENT 'Clave primaria que identifica de forma única cada carrito.',
  `id_usuario` int DEFAULT NULL COMMENT 'Identificador del usuario que ha creado el carrito. **Relaciona con la tabla "Usuarios"**',
  `id_producto` int DEFAULT NULL COMMENT 'Identificador del producto que se ha añadido al carrito. **Relaciona con la tabla "Productos"**',
  `nombre_pro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Nombre del producto que se ha añadido al carrito **Relaciona con la tabla "Productos"**',
  `cantidad_pro` int DEFAULT NULL COMMENT 'Número de unidades del producto que se han añadido al carrito.',
  `valor_pro` float DEFAULT NULL COMMENT 'Valor unitario del producto **Relaciona con la tabla "Productos"**',
  `total_pro` float DEFAULT NULL COMMENT 'Total de los productos que hay en el momento en el carrito',
  `total_pagar_pro` float DEFAULT NULL COMMENT 'Total de los productos mas el porcentaje del iva o impuesto',
  `estado_carrito` int DEFAULT NULL COMMENT 'Se almacenara el dato del estado del carrito como activo, pendiente',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se creo el registro por primera vez en el carrito.',
  `fecha_actu` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se actualizo el registro en el carrito.',
  `fecha_elim` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se elimino el registro en el carrito.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Esta tabla almacena información sobre los productos que un usuario ha seleccionado para comprar.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int NOT NULL COMMENT 'Clave primaria que identifica de forma única cada categoria.',
  `nombre_cat` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Nombre unico de cada categoria',
  `descripcion_cat` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'descripcion de cada categoria',
  `estado_cat` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'estado de cada categoria',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se creo el registro por primera vez en las categorias',
  `fecha_actu` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se actualizo el registro en las categorias',
  `fecha_elim` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se elimino el registro en las categorias'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Esta tabla almacena información sobre las categorías de productos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_ped` int NOT NULL COMMENT 'Esta tabla almacena información sobre los pedidos realizados por los usuarios',
  `id_usu` int DEFAULT NULL COMMENT 'Identificador del usuario que ha realizado el pedido',
  `id_trans` int DEFAULT NULL COMMENT 'Identificador de la transaccion con la que se realizo el pedido',
  `estado_ped` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Edtado del pedido como completado o pendiente',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se creo el registro por primera vez en pedido',
  `fecha_actu` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se actualizo el registro en el pedido',
  `fecha_elim` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se elimino el registro en el pedido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Esta tabla almacena información sobre los pedidos realizados por los usuarios.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_pro` int NOT NULL COMMENT 'Clave primaria que identifica de forma única cada producto.',
  `nombre_pro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Nombre del producto.',
  `descripcion_pro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Descripción del producto.',
  `foto_pro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Ruta a la imagen del producto.',
  `valor_unitario_pro` float DEFAULT NULL COMMENT 'valor unitario de cada producto',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se creo el registro por primera vez en productos',
  `fecha_actu` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se actualizo el registro en productos',
  `fecha_elim` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se elimino el registro en productos',
  `estado_pro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Indica el estado del producto (activo, inactivo)',
  `categoria_pro` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Identificador de la categoria que se ha añadido  al producto **Relaciona con la tabla "Categorias"**'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Esta tabla almacena información sobre los productos que se venden en la tienda.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int NOT NULL COMMENT 'Esta tabla almacena información sobre los roles que pueden tener los usuarios en la aplicación.',
  `nombre_rol` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Nombre del rol.',
  `descripcion_rol` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Descripción del rol.',
  `estado_rol` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Estado del rol, activo, inactivo o restringido',
  `permisos` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Lista de permisos que tiene el rol.',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se creo el registro por primera vez en roles',
  `fecha_actu` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se actualio el registro en roles',
  `fecha_elim` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se elimino el registro en roles'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Esta tabla almacena información sobre los roles que pueden tener los usuarios en la aplicación';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id_trans` int NOT NULL COMMENT 'Esta tabla almacena información sobre las transacciones realizadas en la aplicación.',
  `id_usu` int DEFAULT NULL COMMENT 'Identificador del usuario que ha realizado la transacción.',
  `id_carrito` int DEFAULT NULL COMMENT 'identificador del carrito con el que se realizo la transaccion',
  `estado_trans` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Indica el estado de la transacción (pendiente, confirmada, cancelada).',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se creo el registro por primera vez en transaccion',
  `fecha_actu` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se actualizo el registro en transaccion',
  `fecha_elim` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se elimino el registro en transaccion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Esta tabla almacena información sobre las transacciones realizadas en la aplicación.\r\n';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int NOT NULL COMMENT 'Clave primaria que identifica de forma única cada usuario.',
  `tipo_doc_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Tipo de documento del usuario',
  `num_doc_usu` bigint DEFAULT NULL COMMENT 'Numero de documento de identificacion del usuario',
  `nombres_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Nombres del usuario',
  `apellidos_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Apellidos del usuario',
  `telefono_usu` bigint DEFAULT NULL COMMENT 'Telefono personal del usuario',
  `correo_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Correo del usuario ',
  `pwd_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Contraseña del usuario ',
  `direccion_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Direccion del usuario ',
  `especificacion_dir_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Complemento de direccion o indicaciones del usuario para us direccion ',
  `ubicacion_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'url de maps de la ubicacion del usuario ',
  `rol_usu` int DEFAULT NULL COMMENT 'Identificador del rol del usuario Relaciona con la tabla "Roles"',
  `estado_usu` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL COMMENT 'Indica el estado del usuario (activo, inactivo).',
  `fecha_crea` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se creo el registro por primera vez en usuarios',
  `fecha_actu` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se actualizo el registro en usuarios',
  `fecha_elim` datetime DEFAULT NULL COMMENT 'Fecha y hora en la que se elimino el registro en usuarios'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Esta tabla almacena información sobre los usuarios de la aplicación';

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
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria que identifica de forma única cada carrito.';

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria que identifica de forma única cada categoria.';

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_ped` int NOT NULL AUTO_INCREMENT COMMENT 'Esta tabla almacena información sobre los pedidos realizados por los usuarios';

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_pro` int NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria que identifica de forma única cada producto.';

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT COMMENT 'Esta tabla almacena información sobre los roles que pueden tener los usuarios en la aplicación.';

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id_trans` int NOT NULL AUTO_INCREMENT COMMENT 'Esta tabla almacena información sobre las transacciones realizadas en la aplicación.';

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria que identifica de forma única cada usuario.';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
