CREATE DATABASE  IF NOT EXISTS `db_thales` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_thales`;
-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: db_thales
-- ------------------------------------------------------
-- Server version	8.0.16

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_arquivos`
--

DROP TABLE IF EXISTS `tbl_arquivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tbl_arquivos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Item_Code` varchar(60) DEFAULT NULL,
  `Item_Description` varchar(150) DEFAULT NULL,
  `Customer` varchar(120) DEFAULT NULL,
  `Provider` varchar(60) DEFAULT NULL,
  `Packaging` varchar(80) DEFAULT NULL,
  `CustomerOpo` varchar(120) DEFAULT NULL,
  `Batch` varchar(60) DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `HLR` int(11) DEFAULT NULL,
  `EAN` varchar(130) DEFAULT NULL,
  `Packaging_2` varchar(180) DEFAULT NULL,
  `Profile` varchar(60) DEFAULT NULL,
  `idiccid` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_iccid_arquvios` (`idiccid`),
  CONSTRAINT `FK_iccid_arquvios` FOREIGN KEY (`idiccid`) REFERENCES `tbl_iccid` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_arquivos`
--

LOCK TABLES `tbl_arquivos` WRITE;
/*!40000 ALTER TABLE `tbl_arquivos` DISABLE KEYS */;
INSERT INTO `tbl_arquivos` VALUES (1,'O1170339','CARD_GSM CLARO POS NP SIMTRIO','Claro SP','Thales','A3083004','301309380','TA079288',5,15,'7894537020609','Bopp_pospago','AA.15',1),(2,'O1170339','CARD_GSM CLARO POS NP SIMTRIO','Claro SP','Thales','A3083004','301309380','TA079288',5,15,'7894537020609','Bopp_pospago','AA.15',2);
/*!40000 ALTER TABLE `tbl_arquivos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-07 11:25:25
