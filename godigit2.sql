-- MySQL dump 10.16  Distrib 10.1.10-MariaDB, for Linux (i686)
--
-- Host: localhost    Database: godigit
-- ------------------------------------------------------
-- Server version	10.1.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hunts`
--

DROP TABLE IF EXISTS `hunts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hunts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qr_code` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `clue1` text NOT NULL,
  `clue2` text NOT NULL,
  `clue3` text NOT NULL,
  `comments` text NOT NULL,
  `puzzle_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `qr_code_unique` (`qr_code`),
  KEY `puzzle_id` (`puzzle_id`),
  CONSTRAINT `hunt_puzzle_id` FOREIGN KEY (`puzzle_id`) REFERENCES `puzzles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='This table stores records of all the Digs.';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hunts`
--

LOCK TABLES `hunts` WRITE;
/*!40000 ALTER TABLE `hunts` DISABLE KEYS */;
/*!40000 ALTER TABLE `hunts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puzzles`
--

DROP TABLE IF EXISTS `puzzles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puzzles` (
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puzzles`
--

LOCK TABLES `puzzles` WRITE;
/*!40000 ALTER TABLE `puzzles` DISABLE KEYS */;
/*!40000 ALTER TABLE `puzzles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Jimcat','Jim@nekojimi.moe','best password');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_assigned_digs`
--

DROP TABLE IF EXISTS `users_assigned_digs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_assigned_digs` (
  `user_id` int(11) NOT NULL,
  `dig_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `dig_id` (`dig_id`),
  CONSTRAINT `users_assigned_digs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `users_assigned_digs_ibfk_2` FOREIGN KEY (`dig_id`) REFERENCES `hunts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_assigned_digs`
--

LOCK TABLES `users_assigned_digs` WRITE;
/*!40000 ALTER TABLE `users_assigned_digs` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_assigned_digs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_completed_digs`
--

DROP TABLE IF EXISTS `users_completed_digs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_completed_digs` (
  `user_id` int(11) NOT NULL,
  `dig_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `dig_id` (`dig_id`),
  CONSTRAINT `users_completed_digs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `users_completed_digs_ibfk_2` FOREIGN KEY (`dig_id`) REFERENCES `hunts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_completed_digs`
--

LOCK TABLES `users_completed_digs` WRITE;
/*!40000 ALTER TABLE `users_completed_digs` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_completed_digs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_created_digs`
--

DROP TABLE IF EXISTS `users_created_digs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_created_digs` (
  `user_id` int(11) NOT NULL,
  `dig_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `dig_id` (`dig_id`),
  CONSTRAINT `users_created_digs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `users_created_digs_ibfk_2` FOREIGN KEY (`dig_id`) REFERENCES `hunts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_created_digs`
--

LOCK TABLES `users_created_digs` WRITE;
/*!40000 ALTER TABLE `users_created_digs` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_created_digs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-05 18:38:13
