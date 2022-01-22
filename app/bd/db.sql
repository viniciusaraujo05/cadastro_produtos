/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 8.0.27 : Database - desafio
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`desafio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `desafio`;

/*Table structure for table `tblcategorias` */

DROP TABLE IF EXISTS `tblcategorias`;

CREATE TABLE `tblcategorias` (
  `id` int DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tblcategorias` */

insert  into `tblcategorias`(`id`,`categoria`) values (1,'Tenis importados'),(2,'Tenis novos');

/*Table structure for table `tblprodutos` */

DROP TABLE IF EXISTS `tblprodutos`;

CREATE TABLE `tblprodutos` (
  `id` int DEFAULT NULL,
  `Nome` varchar(255) DEFAULT NULL,
  `price` decimal(14,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `categories` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `tblprodutos` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
