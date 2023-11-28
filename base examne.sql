-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para examen
CREATE DATABASE IF NOT EXISTS `examen` /*!40100 DEFAULT CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `examen`;

-- Volcando estructura para tabla examen.ingredientes
CREATE TABLE IF NOT EXISTS `ingredientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `topping` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci NOT NULL,
  `precio` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla examen.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` enum('Hamurguesa','Pizza') COLLATE ucs2_spanish2_ci NOT NULL,
  `topping` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `precioTopping` int NOT NULL,
  `valorTipo` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla examen.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `Apellido` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `contraseña` varchar(50) COLLATE ucs2_spanish2_ci NOT NULL,
  `rol` enum('Empleado','Administrador') COLLATE ucs2_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish2_ci;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
