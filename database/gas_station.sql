-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gas_station
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_name` text NOT NULL,
  `feed_email` varchar(255) NOT NULL,
  `feed_message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`feed_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (12,'Mennatulla','menna20@gmail.com','Thanks for your effort.',4);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `total` decimal(60,2) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (9,NULL,NULL,'2022-09-07 15:01:06',''),(12,NULL,NULL,'2022-09-07 15:01:06',''),(13,NULL,NULL,'2022-09-07 15:01:06',''),(14,NULL,NULL,'2022-09-07 15:01:06',''),(15,NULL,NULL,'2022-09-07 15:01:06',''),(45,8,NULL,'2022-09-07 15:01:06',''),(47,8,NULL,'2022-09-07 15:01:06',''),(50,8,NULL,'2022-09-07 15:01:06',''),(51,8,NULL,'2022-09-07 15:01:06',''),(52,8,NULL,'2022-09-07 15:01:06',''),(53,8,NULL,'2022-09-07 15:01:06',''),(54,8,NULL,'2022-09-07 15:01:06',''),(55,8,NULL,'2022-09-07 15:01:06',''),(56,8,NULL,'2022-09-07 15:01:06',''),(57,8,NULL,'2022-09-07 15:01:06',''),(58,8,NULL,'2022-09-07 15:01:06',''),(61,8,NULL,'2022-09-07 15:01:06',''),(62,8,NULL,'2022-09-07 15:01:06',''),(63,8,NULL,'2022-09-07 15:01:06',''),(64,8,NULL,'2022-09-07 15:01:06',''),(65,8,NULL,'2022-09-07 15:01:06',''),(66,8,NULL,'2022-09-07 15:01:06',''),(67,8,NULL,'2022-09-07 15:01:06',''),(70,8,NULL,'2022-09-07 15:01:06',''),(73,8,NULL,'2022-09-07 15:01:06',''),(75,8,NULL,'2022-09-07 15:01:06',''),(76,8,NULL,'2022-09-07 15:01:06',''),(83,8,0.00,'2022-09-07 15:01:06',''),(84,8,7.00,'2022-09-07 15:01:06',''),(85,8,7.00,'2022-09-07 15:01:06',''),(86,9,7.00,'2022-09-07 15:01:06',''),(87,9,4.00,'2022-09-07 15:01:06',''),(88,9,11.00,'2022-09-07 15:01:06',''),(89,9,11.00,'2022-09-07 15:01:06',''),(90,10,4.00,'2022-09-07 15:01:06',''),(91,10,7.00,'2022-09-07 15:01:06',''),(92,10,4.00,'2022-09-07 15:01:06',''),(93,10,4.00,'2022-09-07 15:01:06',''),(94,10,4.00,'2022-09-07 15:01:06',''),(95,10,4.00,'2022-09-07 15:01:06',''),(96,10,4.00,'2022-09-07 15:01:06',''),(97,10,7.00,'2022-09-07 15:01:06',''),(98,10,7.00,'2022-09-07 15:01:06',''),(99,8,4.00,'2022-09-07 15:01:06',''),(100,8,4.00,'2022-09-07 15:01:06',''),(101,8,7.00,'2022-09-07 15:01:06',''),(102,10,11.00,'2022-09-07 15:01:06',''),(103,10,NULL,'2022-09-07 15:01:06',''),(104,10,NULL,'2022-09-07 15:01:06',''),(105,10,NULL,'2022-09-07 15:01:06',''),(106,11,NULL,'2022-09-07 15:01:06',''),(107,11,NULL,'2022-09-07 15:01:06',''),(108,11,NULL,'2022-09-07 15:01:06',''),(112,4,613.75,'2022-09-07 17:50:02',''),(113,9,11.00,'2022-09-07 19:32:20',''),(114,11,50.75,'2022-09-08 00:52:33','Paid'),(115,11,18.00,'2022-09-08 01:00:21',''),(116,11,11.00,'2022-09-08 01:14:11','Paid'),(117,11,11.00,'2022-09-08 01:56:13',''),(118,11,11.00,'2022-09-08 01:57:28',''),(119,9,3.75,'2022-09-08 02:07:15',''),(120,12,25.50,'2022-09-08 04:44:42',''),(121,12,21.75,'2022-09-08 05:46:50',''),(122,11,11.00,'2022-09-08 06:48:14',''),(123,4,3.75,'2022-09-08 13:14:20',''),(124,4,225.25,'2022-09-08 16:32:25',''),(125,16,7.25,'2022-09-08 22:31:38',''),(126,4,6018.00,'2022-09-08 22:33:41',''),(127,17,268.75,'2022-09-09 11:39:15','Paid'),(128,9,6000.00,'2022-09-09 12:17:40',''),(129,4,60000.00,'2022-09-09 13:07:17',''),(130,9,7.25,'2022-09-09 13:09:10',''),(131,9,1500.00,'2022-09-09 13:10:27','Paid'),(132,4,18000.00,'2022-09-09 14:27:18','Paid'),(133,4,240.00,'2022-09-09 15:22:31',''),(134,4,1440.00,'2022-09-09 15:34:38','Paid'),(135,4,925.00,'2022-09-15 20:38:00','Paid');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_details`
--

DROP TABLE IF EXISTS `orders_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `orders_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  CONSTRAINT `orders_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_details`
--

LOCK TABLES `orders_details` WRITE;
/*!40000 ALTER TABLE `orders_details` DISABLE KEYS */;
INSERT INTO `orders_details` VALUES (112,9,50),(112,10,10),(112,11,1),(113,11,1),(113,10,1),(114,11,1),(114,9,1),(114,10,5),(115,9,1),(115,10,1),(116,10,1),(116,11,1),(117,11,1),(117,10,1),(118,10,1),(118,11,1),(119,11,1),(120,11,1),(120,10,3),(121,11,1),(121,10,1),(121,9,1),(122,10,1),(122,11,1),(123,11,1),(124,9,7),(124,18,1),(125,10,1),(126,9,1),(126,23,1),(126,10,1),(127,9,25),(128,23,1),(129,23,10),(130,10,1),(131,18,10),(132,23,3),(133,22,2),(134,22,12),(135,13,100);
/*!40000 ALTER TABLE `orders_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner`
--

DROP TABLE IF EXISTS `partner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(255) NOT NULL,
  `partner_image` text NOT NULL,
  `partner_content` varchar(255) NOT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner`
--

LOCK TABLES `partner` WRITE;
/*!40000 ALTER TABLE `partner` DISABLE KEYS */;
INSERT INTO `partner` VALUES (4,' McDonald\'s','../images/mac.png','multinational fast food restaurant.'),(5,' Fit & Fix','../images/fit.jpg','Most convenient service experience to drivers all around Egypt.'),(6,'Seoudi Supermarket','../images/soudi.jpg','One of the leading supermarkets across Egypt.'),(7,' Elezaby Pharmacy','../images/eizabi.jpg','Health and personal care products.'),(8,' Circle K','../images/circlek.jpg','Your one stop shop for everything from morning coffee to mid day cravings'),(9,' Potela','../images/potela.jpeg','baked potato mixed your choice of several delicious toppings.'),(10,'Krispy Kreme','../images/kc.jpg','The Original Glazed Doughnuts!.'),(11,' Bazooka','../images/bazoka.jpg','Biggest invasion of fried chiken in Egypt.'),(12,'  Koshari Abou Tarek','../images/koshry.jpg','Middle Eastern Restaurant.');
/*!40000 ALTER TABLE `partner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type` varchar(255) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` VALUES (2,'Visa',NULL),(5,'Cash',NULL),(6,'Cash',NULL),(7,'Cash',NULL),(8,'Cash',NULL),(9,'Cash',NULL),(10,'Cash',NULL),(13,'Visa',NULL),(14,'Visa',114),(15,'Visa',114),(16,'Visa',114),(17,'Visa',116),(18,'Cash',131),(19,'Cash',132),(20,'Cash',132),(21,'Visa',134),(22,'Visa',127),(23,'Cash',127),(24,'Cash',127),(25,'Cash',135);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_price` double DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (9,'gas95','Gasoline',10.75,1),(10,'solar','Solar',7.25,1),(11,'DC charging','Electric',3.75,NULL),(12,'gas80','Gasoline',8,NULL),(13,'gas92','Gasoline',9.25,NULL),(16,'natural gas','Natural Gas',4.45,NULL),(18,'10000 kg','Oil',150,NULL),(19,'7000 kg','Oil',130,NULL),(20,'5000 kg','Oil',100,NULL),(21,'3000 kg','Oil',80,NULL),(22,'1000 kg','Oil',120,NULL),(23,'charger','Electric Charger',6000,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_named` varchar(255) NOT NULL,
  `role_phone` int(11) NOT NULL,
  `role_job` varchar(255) NOT NULL,
  `role_username` varchar(255) NOT NULL,
  `role_salary` int(11) NOT NULL,
  `role_password` varchar(255) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (8,'mennatullah',1062871829,'admin','menna20',20000,'123'),(9,'aisha',1153360661,'manager','aisha20',30000,'123'),(10,'aya',1234567891,'cashier','aya20',20000,'123'),(12,'ganna',1134344611,'service','ganna20',10000,'123'),(13,'momen',1026419440,'admin','momen20',10000,'123');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `car_brand` varchar(255) NOT NULL,
  `car_number` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (4,'Mennatullah khaled',1062871829,'BMW','2848'),(8,'Aisha',1112594704,'BMW','123'),(9,'aya',123,'BMW','654'),(10,'menna',987,'BMW','aaa'),(11,'ganna',654,'BMW','222'),(12,'Menna',1125,'BMW','012'),(13,'noha',11,'','111'),(15,'bebo',987654321,'','9827'),(16,'mio',256789,'','564'),(17,'Ziad hesham',109543866,'','107 ZHR');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-20  1:15:49
