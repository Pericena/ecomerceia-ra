-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2024 a las 06:02:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address_clients`
--

CREATE TABLE `address_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_1` varchar(255) NOT NULL,
  `address_2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `id_client` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `address_clients`
--

INSERT INTO `address_clients` (`id`, `address_1`, `address_2`, `city`, `department`, `country`, `postal_code`, `id_client`, `created_at`, `updated_at`) VALUES
(1, 'P.O. Box 735, 8729 Eu Street', 'Ap #804-7978 Cras Av.', 'Santa Cruz De La Sierra', 'Santa Cruz', 'Bolivia', '00000', 6, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(2, '628-7459 Aliquam Street', '986-9966 A, St.', 'Santa Cruz De La Sierra', 'Santa Cruz', 'Bolivia', '00000', 6, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(3, '4224 Eleifend Ave', 'Ap #693-3461 Quis Ave', 'Santa Cruz De La Sierra', 'Santa Cruz', 'Bolivia', '00000', 7, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(4, 'P.O. Box 230, 3839 Class Street', '149 Lectus. Road', 'Santa Cruz De La Sierra', 'Santa Cruz', 'Bolivia', '00000', 7, '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tipou` varchar(255) DEFAULT NULL,
  `fechaHora` timestamp NULL DEFAULT NULL,
  `actividad` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fechaHora` datetime NOT NULL,
  `estado` smallint(5) UNSIGNED NOT NULL,
  `idCliente` bigint(20) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `fechaHora`, `estado`, `idCliente`, `total`, `created_at`, `updated_at`) VALUES
(1, '2024-04-24 04:01:36', 1, 6, 0, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(2, '2024-04-24 04:01:36', 1, 7, 0, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(3, '2024-04-24 04:01:36', 1, 8, 0, '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Polo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(2, 'Deportivo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(3, 'Clasico', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(4, 'Deportivo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(5, 'LaptopDeportivo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(6, 'Deportivo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(7, 'Deportivo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(8, 'Deportivo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(9, 'Deportivo', '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallenotabajas`
--

CREATE TABLE `detallenotabajas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idnotabaja` bigint(20) UNSIGNED NOT NULL,
  `idproducto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `costo` double NOT NULL,
  `total` double NOT NULL,
  `observacion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallenotaingresos`
--

CREATE TABLE `detallenotaingresos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idnotaing` bigint(20) UNSIGNED NOT NULL,
  `idproducto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `costo` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_carritos`
--

CREATE TABLE `detalle_carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `precio` double NOT NULL,
  `idCarrito` bigint(20) UNSIGNED DEFAULT NULL,
  `idProducto` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIT` bigint(20) UNSIGNED NOT NULL DEFAULT 21324121321,
  `fechaHora` datetime NOT NULL,
  `montoTotal` double NOT NULL,
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `id_pedido` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Puma', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(2, 'AMD', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(3, 'AOC', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(4, 'Asrock', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(5, 'Asus', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(6, 'Corsair', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(7, 'Dell', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(8, 'Encore', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(9, 'Epson', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(10, 'Genius', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(11, 'Gigabyte', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(12, 'Hp', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(13, 'Lenovo', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(14, 'Huawei', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(15, 'Intel', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(16, 'Kingston', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(17, 'Logitech', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(18, 'Microsoft', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(19, 'MSI', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(20, 'Samsung', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(21, 'Seagate', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(22, 'Sony', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(23, 'Toshiba', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(24, 'Tp-Link', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(25, 'Crucial', '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_09_040822_create_personas_table', 1),
(6, '2022_10_09_040922_create_marcas_table', 1),
(7, '2022_10_09_041022_create_categorias_table', 1),
(8, '2022_10_09_041023_create_promocions_table', 1),
(9, '2022_10_09_041122_create_productos_table', 1),
(10, '2022_10_09_041242_create_proveedors_table', 1),
(11, '2022_10_09_041243_create_notaingresos_table', 1),
(12, '2022_10_09_041254_create_notabajas_table', 1),
(13, '2022_10_09_041339_create_detallenotaingresos_table', 1),
(14, '2022_10_09_041349_create_detallenotabajas_table', 1),
(15, '2022_10_12_025308_create_bitacoras_table', 1),
(16, '2022_10_12_072450_create_permission_tables', 1),
(17, '2022_10_28_040118_create_carritos_table', 1),
(18, '2022_10_28_040119_create_detalle_carritos_table', 1),
(19, '2022_11_01_002903_create_tipo_pagos_table', 1),
(20, '2022_11_01_014227_create_pagos_table', 1),
(21, '2022_12_03_180135_create_address_clients_table', 1),
(22, '2022_12_03_223300_create_pedidos_table', 1),
(23, '2022_12_04_024915_create_facturas_table', 1),
(24, '2023_01_02_160834_create_segmentos_table', 1),
(25, '2023_01_02_163525_create_persona_segmento_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 3),
(6, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notabajas`
--

CREATE TABLE `notabajas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `fechaHora` datetime NOT NULL,
  `idempleado` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notaingresos`
--

CREATE TABLE `notaingresos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fechaHora` datetime NOT NULL,
  `total` double NOT NULL,
  `idempleado` bigint(20) UNSIGNED NOT NULL,
  `idproveedor` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ctaOrd` bigint(20) UNSIGNED NOT NULL,
  `monto` double DEFAULT NULL,
  `costoEnv` double NOT NULL,
  `idTrans` bigint(20) UNSIGNED NOT NULL,
  `fechaHora` datetime NOT NULL,
  `id_tipoPago` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fechaHora` datetime NOT NULL,
  `total` double NOT NULL,
  `estado` varchar(255) NOT NULL,
  `fechaEnvio` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `id_carrito` bigint(20) UNSIGNED NOT NULL,
  `id_direccion` bigint(20) UNSIGNED NOT NULL,
  `id_pago` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'backup.index', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(2, 'backup.create', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(3, 'backup.update', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(4, 'backup.delete', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(5, 'cliente.index', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(6, 'cliente.create', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(7, 'cliente.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(8, 'cliente.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(9, 'empleado.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(10, 'empleado.create', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(11, 'empleado.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(12, 'empleado.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(13, 'producto.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(14, 'producto.create', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(15, 'producto.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(16, 'producto.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(17, 'categoria.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(18, 'categoria.create', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(19, 'categoria.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(20, 'categoria.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(21, 'marca.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(22, 'marca.create', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(23, 'marca.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(24, 'marca.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(25, 'proveedor.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(26, 'proveedor.create', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(27, 'proveedor.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(28, 'proveedor.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(29, 'promociones.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(30, 'promociones.create', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(31, 'promociones.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(32, 'promociones.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(33, 'tiposPagos.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(34, 'tiposPagos.create', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(35, 'tiposPagos.update', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(36, 'tiposPagos.delete', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(37, 'notaIngreso.index', 'web', '2024-04-24 08:01:34', '2024-04-24 08:01:34'),
(38, 'notaIngreso.show', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(39, 'notaIngreso.create', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(40, 'notaIngreso.update', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(41, 'notaIngreso.delete', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(42, 'notaBaja.index', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(43, 'notaBaja.show', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(44, 'notaBaja.create', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(45, 'notaBaja.update', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(46, 'notaBaja.delete', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(47, 'bitacora.index', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(48, 'bitacora.export', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(49, 'pedidos.index', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(50, 'pedidos.show', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(51, 'pedidos.update', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(52, 'pedidos.factura', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(53, 'promoMail.send', 'web', '2024-04-24 08:01:35', '2024-04-24 08:01:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 7, 'auth_token', 'b1245a0ae33cd3b901b1db004cc12371ed800c078670d430b5b9141309890963', '\"[\\\"*\\\"]\"', NULL, NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ci` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sexo` char(255) NOT NULL,
  `celular` int(11) NOT NULL,
  `domicilio` varchar(255) NOT NULL,
  `salario` double DEFAULT NULL,
  `estadoemp` varchar(255) DEFAULT NULL,
  `estadocli` varchar(255) DEFAULT NULL,
  `tipoc` smallint(6) NOT NULL,
  `tipoe` smallint(6) NOT NULL,
  `iduser` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `name`, `ci`, `email`, `sexo`, `celular`, `domicilio`, `salario`, `estadoemp`, `estadocli`, `tipoc`, `tipoe`, `iduser`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 9866021, 'admin@gmail.com', 'M', 60522212, 'Santa Cruz', 3000, 'Activo', NULL, 0, 1, 1, '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(2, 'Byron Lewis', 9866022, 'b@gmail.com', 'M', 60522211, 'Santa Cruz', 3000, 'Activo', NULL, 0, 1, 2, '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(3, 'Cassady Bridges', 9866023, 'c@gmail.com', 'F', 60522213, 'Santa Cruz', 3000, 'Activo', NULL, 0, 1, 3, '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(4, 'Dawn Buckley', 9866024, 'd@gmail.com', 'M', 60522214, 'Santa Cruz', 3000, 'Activo', NULL, 0, 1, 4, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(5, 'Erica Mosley', 9866025, 'e@gmail.com', 'F', 60522215, 'Santa Cruz', 3000, 'Activo', NULL, 0, 1, 5, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(6, 'Flavia Kirkland', 9866026, 'f@gmail.com', 'F', 60522216, 'Santa Cruz', NULL, NULL, NULL, 1, 0, 6, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(7, 'Galvin Golden', 9866027, 'g@gmail.com', 'F', 60522217, 'Santa Cruz', NULL, NULL, NULL, 1, 0, 7, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(8, 'Michael', 9866054, 'm79832142l@gmail.com', 'M', 60933325, 'Santa Cruz', NULL, NULL, NULL, 1, 0, 8, '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_segmento`
--

CREATE TABLE `persona_segmento` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `segmento_id` bigint(20) UNSIGNED NOT NULL,
  `persona_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precioUnitario` double NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `idcategoria` bigint(20) UNSIGNED NOT NULL,
  `idmarca` bigint(20) UNSIGNED NOT NULL,
  `idpromocion` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `name`, `descripcion`, `stock`, `precioUnitario`, `imagen`, `idcategoria`, `idmarca`, `idpromocion`, `created_at`, `updated_at`) VALUES
(1, 'PUMA POLERA CLASSICS SMALL LOGO', 'PUMA POLERA CLASSICS SMALL LOGO', 27, 150, 'polera.glb', 5, 12, 5, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(2, 'POLERA REAL ESSENTIAL', 'POLERA REAL ESSENTIAL', 16, 140, 'polera-1.glb', 5, 13, NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(3, 'Polera de Algodón, Rojo', 'Polera de Algodón, Rojo', 23, 70, 'polera-2.glb', 3, 12, 1, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(4, 'Polera de Algodón, Negro', 'Corsair Vengeance RGB Pro de 32 GB (2 x 16 GB) DDR4 3600 (PC4-28800) C18 AMD - Memoria optimizada - Negro', 40, 70, 'polera-3.glb', 3, 6, NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(5, 'Polera de algodón', 'Manga corta , cuello redondo, bordado en pecho y combinado en hombros y canesú.', 45, 80, 'polera-4.glb', 2, 5, 4, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(6, 'MSI B550-A PRO ProSeries', 'MSI B550-A PRO ProSeries - Placa base (AMD AM4, DDR4, PCIe 4.0, SATA 6Gb/s, M.2, USB 3.2 Gen 2,\r\n                                    HDMI/DP, ATX)', 42, 993, 'polera-5.glb', 2, 19, NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(7, 'Ryzen 7 5800X', 'AMD Procesador de escritorio desbloqueado Ryzen 7 5800X de 8 núcleos y 16 hilos', 50, 3125.04, 'polera-6.glb', 4, 2, 2, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(8, 'Intel Core i5-12600K', 'Intel Core i5-12600K Procesador de Escritorio 10 (6P+4E) Núcleos de hasta 4.9 GHz Desbloqueado\r\n                                    LGA1700 600 Series Chipset 125W', 17, 1927.92, 'polera-7.glb', 4, 15, NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(9, 'Crucial BX500 1TB', 'Crucial BX500 1TB 3D NAND SATA 2.5-Inch Internal SSD, up to 540MB/s - CT1000BX500SSD1', 62, 626.4, 'polera-8.glb', 1, 25, 3, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(10, 'Seagate Barracuda Pro SATA HDD 10TB', 'Seagate Barracuda Pro SATA HDD 10TB 7200RPM 6Gb/s 256MB de caché 3.5 pulgadas disco duro\r\n                                    interno para PC Desktop Computers System All in One Home Servers DAS (ST10000DM0004) (renovado)', 53, 1250.364, 'polera-9.glb', 1, 21, NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocions`
--

CREATE TABLE `promocions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descuento` int(10) UNSIGNED NOT NULL,
  `fhiniciada` datetime NOT NULL,
  `fhfinalizada` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `promocions`
--

INSERT INTO `promocions` (`id`, `descuento`, `fhiniciada`, `fhfinalizada`, `created_at`, `updated_at`) VALUES
(1, 10, '2022-11-01 07:00:00', '2023-02-01 07:00:00', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(2, 20, '2022-11-01 07:00:00', '2023-02-01 07:00:00', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(3, 30, '2022-11-01 07:00:00', '2023-02-01 07:00:00', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(4, 40, '2022-11-01 07:00:00', '2023-02-01 07:00:00', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(5, 50, '2022-11-01 07:00:00', '2023-02-01 07:00:00', '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedors`
--

CREATE TABLE `proveedors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `celular` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedors`
--

INSERT INTO `proveedors` (`id`, `nombre`, `correo`, `celular`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'ALL EXPERIENCE ON COMPUTING SOLUTIONS S.R.L.', 'ComputingSolution@gmail.com', 2422898, 'Calle Andrés Muñoz N° 2394, Zona Sopocachi', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(2, 'CREATIVO COMPUTACIÓN Y SISTEMAS', 'ComputacionSistemas@gmail.com', 2311277, 'Calle Mexico N° 1405, Zona San Pedro', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(3, 'EXPERT INOVA NETWORKS S.R.L.', 'ExpertInova@gmail.com', 2906508, 'Calle Mexico casi esquina Colombia N° 1418, Zona San Pedro', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(4, 'FFIL´S COMPANY S.R.L.', 'FFILS@gmail.com', 77710447, 'Avenida Busch N° 1196, Zona Miraflores', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(5, 'INTERFAZ', 'Interfaz@gmail.com', 2217098, 'Calle México Nº 1487 Zona San Pedro', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(6, 'SISCOTEC S.R.L.', 'Siscotec@gmail.com', 3576565, 'Calle Jorge Saenz N° 1005, Zona Miraflores', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(7, 'SUPER POWER', 'SPower@gmail.com', 2311010, 'Calle Mexico N° 1457, Zona San Pedro', '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(8, 'WAPLINE', 'Wapline@gmail.com', 2810015, 'Calle Murillo N° 1379, Zona San Pedro', '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(2, 'Comerciante', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(3, 'Almacenador', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(4, 'Supervisor', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(5, 'RRHH', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33'),
(6, 'Marketing', 'web', '2024-04-24 08:01:33', '2024-04-24 08:01:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 4),
(5, 5),
(6, 1),
(6, 5),
(7, 1),
(7, 5),
(8, 1),
(8, 5),
(9, 1),
(9, 4),
(9, 5),
(10, 1),
(10, 5),
(11, 1),
(11, 5),
(12, 1),
(12, 5),
(13, 1),
(13, 4),
(13, 5),
(14, 1),
(14, 3),
(15, 1),
(15, 3),
(16, 1),
(16, 3),
(17, 1),
(17, 3),
(17, 4),
(18, 1),
(18, 3),
(19, 1),
(19, 3),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(21, 4),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(24, 3),
(25, 1),
(25, 3),
(25, 4),
(26, 1),
(26, 3),
(27, 1),
(27, 3),
(28, 1),
(28, 3),
(29, 1),
(29, 4),
(29, 6),
(30, 1),
(30, 6),
(31, 1),
(31, 6),
(32, 1),
(32, 6),
(33, 1),
(33, 4),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 3),
(37, 4),
(38, 1),
(38, 3),
(39, 1),
(39, 3),
(40, 1),
(40, 3),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(42, 4),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 4),
(48, 1),
(49, 1),
(49, 2),
(49, 4),
(50, 1),
(50, 2),
(51, 1),
(51, 2),
(52, 1),
(52, 2),
(53, 1),
(53, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segmentos`
--

CREATE TABLE `segmentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pagos`
--

CREATE TABLE `tipo_pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `nroCta` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_pagos`
--

INSERT INTO `tipo_pagos` (`id`, `nombre`, `qr`, `nroCta`, `created_at`, `updated_at`) VALUES
(1, 'Tigo Money', 'qr_example.png', 77561231, '2024-04-24 08:01:36', '2024-04-24 08:01:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@gmail.com', NULL, '$2y$10$3YVt.F5tAyXA4hDm.kZ9WONgcPbWsYTUKt/uduDCAxTCJPiZw15QS', NULL, '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(2, 'Byron Lewis', 'b@gmail.com', NULL, '$2y$10$dVu0cYetBim4UV4Toj7rKewzXI5m6mVWB5Xzr33IVTxUqe3yytlji', NULL, '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(3, 'Cassady Bridges', 'c@gmail.com', NULL, '$2y$10$rOyA3es8rcyZFGBxZoxubuydcFpirTNxDrG9vvlf7snZQjL/0IvFq', NULL, '2024-04-24 08:01:35', '2024-04-24 08:01:35'),
(4, 'Dawn Buckley', 'd@gmail.com', NULL, '$2y$10$n4uVcX7ZGhk5oNQbEv4A9e.Gyin8PzdJlHeGGScekP4MJ6Qr/rNfO', NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(5, 'Erica Mosley', 'e@gmail.com', NULL, '$2y$10$uovYtfJyxzX3jVmWM.oD2eWNon2lmpjSBDu2wxG63lVbaes7BhXb2', NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(6, 'Flavia Kirkland', 'f@gmail.com', NULL, '$2y$10$Iqq/DXMO728vuSIT/rGimOVTSwiyNP6MtPKpms9YCDOReahufV0au', NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(7, 'Galvin Golden', 'g@gmail.com', NULL, '$2y$10$qRWUFKd../zu1LBjClo4oeg2JD9mlx8MBKRvcm3XUCxxLOt1HZrja', NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36'),
(8, 'Michael', 'm79832142l@gmail.com', NULL, '$2y$10$GUB14YsLXh3r9UVh4wKh7udRAK.IYUYLKpeq.2sZrKxLACOqqzeMy', NULL, '2024-04-24 08:01:36', '2024-04-24 08:01:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `address_clients`
--
ALTER TABLE `address_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_clients_id_client_foreign` (`id_client`);

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carritos_idcliente_foreign` (`idCliente`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallenotabajas`
--
ALTER TABLE `detallenotabajas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detallenotabajas_idnotabaja_foreign` (`idnotabaja`),
  ADD KEY `detallenotabajas_idproducto_foreign` (`idproducto`);

--
-- Indices de la tabla `detallenotaingresos`
--
ALTER TABLE `detallenotaingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detallenotaingresos_idnotaing_foreign` (`idnotaing`),
  ADD KEY `detallenotaingresos_idproducto_foreign` (`idproducto`);

--
-- Indices de la tabla `detalle_carritos`
--
ALTER TABLE `detalle_carritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_carritos_idcarrito_foreign` (`idCarrito`),
  ADD KEY `detalle_carritos_idproducto_foreign` (`idProducto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facturas_id_cliente_foreign` (`id_cliente`),
  ADD KEY `facturas_id_pedido_foreign` (`id_pedido`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `notabajas`
--
ALTER TABLE `notabajas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notabajas_idempleado_foreign` (`idempleado`);

--
-- Indices de la tabla `notaingresos`
--
ALTER TABLE `notaingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notaingresos_idempleado_foreign` (`idempleado`),
  ADD KEY `notaingresos_idproveedor_foreign` (`idproveedor`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagos_id_tipopago_foreign` (`id_tipoPago`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_id_carrito_foreign` (`id_carrito`),
  ADD KEY `pedidos_id_direccion_foreign` (`id_direccion`),
  ADD KEY `pedidos_id_pago_foreign` (`id_pago`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personas_ci_unique` (`ci`),
  ADD UNIQUE KEY `personas_email_unique` (`email`),
  ADD UNIQUE KEY `personas_celular_unique` (`celular`),
  ADD KEY `personas_iduser_foreign` (`iduser`);

--
-- Indices de la tabla `persona_segmento`
--
ALTER TABLE `persona_segmento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona_segmento_segmento_id_foreign` (`segmento_id`),
  ADD KEY `persona_segmento_persona_id_foreign` (`persona_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_idcategoria_foreign` (`idcategoria`),
  ADD KEY `productos_idmarca_foreign` (`idmarca`),
  ADD KEY `productos_idpromocion_foreign` (`idpromocion`);

--
-- Indices de la tabla `promocions`
--
ALTER TABLE `promocions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proveedors_correo_unique` (`correo`),
  ADD UNIQUE KEY `proveedors_celular_unique` (`celular`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `segmentos`
--
ALTER TABLE `segmentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_pagos`
--
ALTER TABLE `tipo_pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `address_clients`
--
ALTER TABLE `address_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detallenotabajas`
--
ALTER TABLE `detallenotabajas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallenotaingresos`
--
ALTER TABLE `detallenotaingresos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_carritos`
--
ALTER TABLE `detalle_carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `notabajas`
--
ALTER TABLE `notabajas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notaingresos`
--
ALTER TABLE `notaingresos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `persona_segmento`
--
ALTER TABLE `persona_segmento`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `promocions`
--
ALTER TABLE `promocions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedors`
--
ALTER TABLE `proveedors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `segmentos`
--
ALTER TABLE `segmentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_pagos`
--
ALTER TABLE `tipo_pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `address_clients`
--
ALTER TABLE `address_clients`
  ADD CONSTRAINT `address_clients_id_client_foreign` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_idcliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `detallenotabajas`
--
ALTER TABLE `detallenotabajas`
  ADD CONSTRAINT `detallenotabajas_idnotabaja_foreign` FOREIGN KEY (`idnotabaja`) REFERENCES `notabajas` (`id`),
  ADD CONSTRAINT `detallenotabajas_idproducto_foreign` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `detallenotaingresos`
--
ALTER TABLE `detallenotaingresos`
  ADD CONSTRAINT `detallenotaingresos_idnotaing_foreign` FOREIGN KEY (`idnotaing`) REFERENCES `notaingresos` (`id`),
  ADD CONSTRAINT `detallenotaingresos_idproducto_foreign` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `detalle_carritos`
--
ALTER TABLE `detalle_carritos`
  ADD CONSTRAINT `detalle_carritos_idcarrito_foreign` FOREIGN KEY (`idCarrito`) REFERENCES `carritos` (`id`),
  ADD CONSTRAINT `detalle_carritos_idproducto_foreign` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `facturas_id_pedido_foreign` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `notabajas`
--
ALTER TABLE `notabajas`
  ADD CONSTRAINT `notabajas_idempleado_foreign` FOREIGN KEY (`idempleado`) REFERENCES `personas` (`id`);

--
-- Filtros para la tabla `notaingresos`
--
ALTER TABLE `notaingresos`
  ADD CONSTRAINT `notaingresos_idempleado_foreign` FOREIGN KEY (`idempleado`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `notaingresos_idproveedor_foreign` FOREIGN KEY (`idproveedor`) REFERENCES `proveedors` (`id`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_id_tipopago_foreign` FOREIGN KEY (`id_tipoPago`) REFERENCES `tipo_pagos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_id_carrito_foreign` FOREIGN KEY (`id_carrito`) REFERENCES `carritos` (`id`),
  ADD CONSTRAINT `pedidos_id_direccion_foreign` FOREIGN KEY (`id_direccion`) REFERENCES `address_clients` (`id`),
  ADD CONSTRAINT `pedidos_id_pago_foreign` FOREIGN KEY (`id_pago`) REFERENCES `pagos` (`id`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `persona_segmento`
--
ALTER TABLE `persona_segmento`
  ADD CONSTRAINT `persona_segmento_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `persona_segmento_segmento_id_foreign` FOREIGN KEY (`segmento_id`) REFERENCES `segmentos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_idcategoria_foreign` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_idmarca_foreign` FOREIGN KEY (`idmarca`) REFERENCES `marcas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_idpromocion_foreign` FOREIGN KEY (`idpromocion`) REFERENCES `promocions` (`id`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
