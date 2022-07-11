-- MariaDB dump 10.19  Distrib 10.7.3-MariaDB, for Linux (aarch64)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	10.7.3-MariaDB

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
-- Table structure for table `abteilung`
--

DROP TABLE IF EXISTS `abteilung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abteilung` (
  `abtnr` int(11) NOT NULL AUTO_INCREMENT,
  `abteilungsname` char(50) DEFAULT NULL,
  PRIMARY KEY (`abtnr`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abteilung`
--

LOCK TABLES `abteilung` WRITE;
/*!40000 ALTER TABLE `abteilung` DISABLE KEYS */;
INSERT INTO `abteilung` VALUES
(1,'Leitung'),
(2,'Entwicklung'),
(4,'Business'),
(5,'Marketing');
/*!40000 ALTER TABLE `abteilung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arbeitet_an`
--

DROP TABLE IF EXISTS `arbeitet_an`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arbeitet_an` (
  `manr` int(11) NOT NULL,
  `projektnummer` int(11) NOT NULL,
  `projekteintritt` date DEFAULT NULL,
  `projektaustritt` date DEFAULT NULL,
  KEY `manr` (`manr`),
  CONSTRAINT `arbeitet_an_ibfk_1` FOREIGN KEY (`manr`) REFERENCES `mitarbeiter` (`manr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arbeitet_an`
--

LOCK TABLES `arbeitet_an` WRITE;
/*!40000 ALTER TABLE `arbeitet_an` DISABLE KEYS */;
INSERT INTO `arbeitet_an` VALUES
(61,510,'2019-01-01','2019-06-30'),
(61,520,'2019-08-10','2019-12-31'),
(61,530,'2020-01-01',NULL),
(63,520,'2019-08-10',NULL),
(64,520,'2020-01-01',NULL),
(64,540,'2020-01-01',NULL);
/*!40000 ALTER TABLE `arbeitet_an` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bestellung`
--

DROP TABLE IF EXISTS `bestellung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bestellung` (
  `bestellnr` int(20) NOT NULL,
  `datum` date DEFAULT NULL,
  `kundennr` int(30) DEFAULT NULL,
  PRIMARY KEY (`bestellnr`),
  KEY `kundennr` (`kundennr`),
  CONSTRAINT `bestellung_ibfk_1` FOREIGN KEY (`kundennr`) REFERENCES `kunde` (`kundennr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bestellung`
--

LOCK TABLES `bestellung` WRITE;
/*!40000 ALTER TABLE `bestellung` DISABLE KEYS */;
/*!40000 ALTER TABLE `bestellung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `besucher`
--

DROP TABLE IF EXISTS `besucher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `besucher` (
  `filmID` int(11) NOT NULL,
  `anzahl` int(10) DEFAULT NULL,
  PRIMARY KEY (`filmID`),
  CONSTRAINT `besucher_ibfk_1` FOREIGN KEY (`filmID`) REFERENCES `film` (`filmID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `besucher`
--

LOCK TABLES `besucher` WRITE;
/*!40000 ALTER TABLE `besucher` DISABLE KEYS */;
INSERT INTO `besucher` VALUES
(42,1012),
(43,670),
(44,275),
(45,521),
(46,186);
/*!40000 ALTER TABLE `besucher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `filmID` int(11) NOT NULL AUTO_INCREMENT,
  `titel` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filmlaenge` int(3) DEFAULT NULL,
  `erscheinungsjahr` year(4) DEFAULT NULL,
  `genreID` int(11) DEFAULT NULL,
  PRIMARY KEY (`filmID`),
  KEY `genreID` (`genreID`),
  CONSTRAINT `film_ibfk_1` FOREIGN KEY (`genreID`) REFERENCES `genre` (`genreID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES
(42,'Yellowstone River',135,2020,1),
(43,'Vor langer Zeit',90,2019,2),
(44,'Geheimnis des Aequators',90,2020,3),
(45,'Das weite Tal',150,2019,1),
(46,'Der kleine Strassenhund',75,2019,2);
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `genreID` int(11) NOT NULL AUTO_INCREMENT,
  `bezeichnung` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`genreID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES
(1,'Abenteuer'),
(2,'Zeichentrick'),
(3,'Drama');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kunde`
--

DROP TABLE IF EXISTS `kunde`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kunde` (
  `kundennr` int(30) NOT NULL,
  `name` char(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vorname` char(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`kundennr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kunde`
--

LOCK TABLES `kunde` WRITE;
/*!40000 ALTER TABLE `kunde` DISABLE KEYS */;
INSERT INTO `kunde` VALUES
(1,'Mueller',NULL),
(2,'Schmidt',NULL),
(3,'Schumacher',NULL);
/*!40000 ALTER TABLE `kunde` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitarbeiter`
--

DROP TABLE IF EXISTS `mitarbeiter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mitarbeiter` (
  `manr` int(11) NOT NULL,
  `name` char(30) DEFAULT NULL,
  `vorname` char(30) DEFAULT NULL,
  `geschlecht` char(2) DEFAULT NULL,
  `eintritt` date DEFAULT NULL,
  `gehalt` int(11) DEFAULT NULL,
  `abtnr` int(11) DEFAULT NULL,
  PRIMARY KEY (`manr`),
  KEY `abtnr` (`abtnr`),
  CONSTRAINT `mitarbeiter_ibfk_1` FOREIGN KEY (`abtnr`) REFERENCES `abteilung` (`abtnr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitarbeiter`
--

LOCK TABLES `mitarbeiter` WRITE;
/*!40000 ALTER TABLE `mitarbeiter` DISABLE KEYS */;
INSERT INTO `mitarbeiter` VALUES
(50,'Merten','Daniel','M','2018-05-01',8500,1),
(51,'Gierlach','Stefan','M','2018-05-01',9100,1),
(60,'Schmitz','Janine','W','2019-01-01',4900,2),
(61,'Scholz','Andreas','M','2019-01-01',5900,4),
(62,'Kempgen','Ursula','W','2019-02-15',4800,2),
(63,'Bezold','Andrea','W','2019-02-01',5500,4),
(64,'Henkel','Rainer','M','2020-01-01',5000,4);
/*!40000 ALTER TABLE `mitarbeiter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saal`
--

DROP TABLE IF EXISTS `saal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saal` (
  `saalnr` int(2) NOT NULL,
  `etage` int(1) DEFAULT NULL,
  `sitzplaetze` int(3) DEFAULT NULL,
  PRIMARY KEY (`saalnr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saal`
--

LOCK TABLES `saal` WRITE;
/*!40000 ALTER TABLE `saal` DISABLE KEYS */;
INSERT INTO `saal` VALUES
(1,1,320),
(2,1,90),
(3,1,112),
(4,2,180),
(5,2,180),
(6,2,84);
/*!40000 ALTER TABLE `saal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `versicherung`
--

DROP TABLE IF EXISTS `versicherung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `versicherung` (
  `VID` int(11) NOT NULL AUTO_INCREMENT,
  `VArt` char(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Niederlassung` char(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Provision` int(11) DEFAULT NULL,
  PRIMARY KEY (`VID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `versicherung`
--

LOCK TABLES `versicherung` WRITE;
/*!40000 ALTER TABLE `versicherung` DISABLE KEYS */;
/*!40000 ALTER TABLE `versicherung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vorfuehrung`
--

DROP TABLE IF EXISTS `vorfuehrung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vorfuehrung` (
  `vorfuehrungsID` int(11) NOT NULL,
  `filmID` int(11) DEFAULT NULL,
  `saalnr` int(2) DEFAULT NULL,
  `termin` date DEFAULT NULL,
  PRIMARY KEY (`vorfuehrungsID`),
  KEY `filmID` (`filmID`),
  KEY `saalnr` (`saalnr`),
  CONSTRAINT `vorfuehrung_ibfk_1` FOREIGN KEY (`filmID`) REFERENCES `film` (`filmID`),
  CONSTRAINT `vorfuehrung_ibfk_2` FOREIGN KEY (`saalnr`) REFERENCES `saal` (`saalnr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vorfuehrung`
--

LOCK TABLES `vorfuehrung` WRITE;
/*!40000 ALTER TABLE `vorfuehrung` DISABLE KEYS */;
INSERT INTO `vorfuehrung` VALUES
(130,43,6,'2020-02-21'),
(131,43,6,'2020-02-22'),
(132,43,6,'2020-02-23'),
(133,44,3,'2020-02-21'),
(134,44,3,'2020-02-22'),
(135,44,3,'2020-02-23'),
(136,42,1,'2020-02-21'),
(137,42,1,'2020-02-22'),
(138,42,1,'2020-02-23');
/*!40000 ALTER TABLE `vorfuehrung` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-11 14:20:42
