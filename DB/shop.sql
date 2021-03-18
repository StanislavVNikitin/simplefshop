-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: shop
-- ------------------------------------------------------
-- Server version	8.0.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `basket` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idgoods` int NOT NULL,
  `idorders` int NOT NULL,
  `counts` int DEFAULT NULL,
  PRIMARY KEY (`id`,`idgoods`,`idorders`)
) ENGINE=InnoDB AUTO_INCREMENT=196 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
INSERT INTO `basket` VALUES (10,2,1,1),(11,3,1,18),(12,15,1,8),(13,1,3,3),(14,2,6,1),(15,3,7,1),(20,1,9,1),(22,19,11,1),(23,18,12,1),(26,1,13,1),(27,2,14,1),(28,3,15,1),(29,2,16,2),(30,1,16,1),(31,3,16,1),(32,4,16,1),(33,1,17,1),(34,2,17,1),(35,3,17,3),(36,1,18,1),(37,2,18,1),(38,3,18,1),(39,1,19,1),(40,2,8,1),(41,1,8,3),(42,3,8,1),(43,4,8,1),(44,17,8,1),(49,2,21,1),(50,3,21,1),(51,1,21,1),(52,15,21,5),(53,18,22,1),(54,19,22,1),(55,17,22,5),(56,2,23,1),(57,16,23,1),(58,17,23,5),(59,18,24,1),(60,2,24,1),(61,1,25,1),(62,2,25,1),(63,2,26,1),(70,2,27,1),(72,4,28,2),(73,19,28,1),(74,17,28,2),(75,3,28,3),(76,1,29,1),(77,3,29,1),(78,15,29,1),(79,1,30,1),(80,2,30,1),(81,3,30,1),(82,1,31,1),(83,2,31,1),(84,3,31,1),(86,15,32,1),(87,19,32,1),(118,19,34,2),(119,16,34,1),(121,1,34,4),(122,2,34,3),(135,2,35,2),(136,1,35,3),(137,3,35,4),(139,2,37,4),(142,15,37,4),(143,16,37,3),(148,2,38,11),(149,1,38,2),(151,16,38,2),(152,18,38,2),(153,19,38,2),(176,2,41,3),(177,3,41,3),(178,18,41,3),(179,19,41,5),(180,1,20,1),(181,2,20,1),(182,3,20,1),(183,15,20,2),(184,16,20,2),(185,18,20,3),(186,17,20,2),(187,1,41,2),(188,15,41,2),(189,16,41,2),(190,4,41,2),(191,17,41,2),(192,1,28,2),(193,1,42,1),(194,2,42,1),(195,3,42,1);
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `status` int NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `parenat_id` int DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,0,'Электроника',NULL),(2,0,'Смартфоны',1),(3,0,'Аксесуары',1);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `goods` (
  `id_goods` int NOT NULL AUTO_INCREMENT,
  `goodname` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `goodstatus` int NOT NULL,
  `id_category` int NOT NULL,
  `goodimage` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_goods`,`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (1,'Samsung S20',50000,0,2,'1.jpg'),(2,'Iphone 10',75000,0,2,'2.jpg'),(3,'SamsungAir',10000,0,3,'3.jpg'),(4,'Digma F23',5000,0,2,'4.jpg'),(15,'Xiome Me9',30000,0,2,'5.jpg'),(16,'Philips S263',15000,0,2,'6.jpg'),(17,'Sony Dak',32000,0,2,'7.jpg'),(18,'Honor 10',45000,0,2,'8.jpg'),(19,'Vivo',4000,0,2,'9.jpg'),(33,'BQ 34',3700,0,2,'33.jpg');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idusers` int NOT NULL,
  `statusorder` int NOT NULL DEFAULT '0',
  `orderuser` varchar(500) DEFAULT NULL,
  `orderadress` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`,`idusers`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (20,31,2,'Станислав <br>Email: stas@mail.ru <br>Телефон: 654654321',' Москва  Ленина дом 1 строение 1 квартира 35'),(28,54,1,'Петров Сергей <br>Email petrov@gmail.ru <br>Телефон 926598234','Урюпинск  Цюрупи дом 16 строение 3 квартира 21'),(41,29,1,'Иванов Иван <br>Email: ivanovvanya@mail.fi <br>Телефон: 91236547899','Москва  Пионерская дом 2 строение 3 квартира 12');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastidorder` int DEFAULT NULL,
  `roleadmin` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (29,'df','df','f3d434915a76a9d23ad4b23abd5d7ffeeff7d5dba32b4da32d9a67a519434d3f',NULL,1),(31,'stas','stas','7d3f03efaa99bc0c7129867e7e9c112cc211c9e7e7689217c0cb99aafe30f3d7',NULL,1),(49,'bert','bert','0a59cb2cad04dda78a2672d7a6470ed33de0746a7d2762a87add40dac2bc95a0',NULL,0),(50,'nert','nert','4750b2a77f9b5d27652f577f3424525995254243f775f25672d5b9f77a2b0574',NULL,0),(51,'wret','wret','a3137af40016f94e68bc91f496aa52977925aa694f19cb86e49f61004fa7313a',NULL,0),(52,'medw','medw','f4af03fc2b83ee435e544864998899f77f998899468445e534ee38b2cf30fa4f',NULL,1),(54,'lsr','lsr','faed19d1783a5a599c02f060ca0ae179971ea0ac060f20c995a5a3871d91deaf',NULL,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-21 16:27:16
