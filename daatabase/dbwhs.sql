/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.19-MariaDB : Database - dbwhs
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbwhs` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbwhs`;

/*Table structure for table `tbwarehouse` */

DROP TABLE IF EXISTS `tbwarehouse`;

CREATE TABLE `tbwarehouse` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nomor_penerimaan` varchar(120) NOT NULL,
  `tanggal_penerimaan` date NOT NULL,
  `jenis_pemasukan` varchar(120) NOT NULL,
  `user_input` varchar(120) NOT NULL,
  `material_code` varchar(120) DEFAULT NULL,
  `material_name` varchar(120) DEFAULT NULL,
  `quantity` varchar(120) DEFAULT NULL,
  `unit` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbwarehouse` */

insert  into `tbwarehouse`(`id`,`nomor_penerimaan`,`tanggal_penerimaan`,`jenis_pemasukan`,`user_input`,`material_code`,`material_name`,`quantity`,`unit`) values 
(1,'12311','2021-06-04','import','edi ','11','coba1','100','pcp'),
(8,'123112','2021-06-21','Jenis Pemasukan','2313',NULL,NULL,NULL,NULL),
(9,'123mii949','2021-06-19','Export','telo',NULL,NULL,NULL,NULL),
(12,'222','2021-06-20','Import','bambang','as11','jos','10','pcs'),
(13,'1212','2021-06-21','Import','a','1','b','c','d'),
(14,'12333','2021-06-21','Import','adi','1233','wewe','waeawe','yaya'),
(15,'123','2021-06-21','Import','2131','','','',''),
(16,'44','2021-06-21','Import','we','','','',''),
(17,'heheh','2021-06-22','Import','1','','','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
