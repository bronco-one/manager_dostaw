-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: hurtownia
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.21.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `artykuly`
--

DROP TABLE IF EXISTS `artykuly`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artykuly` (
  `id_art` int NOT NULL AUTO_INCREMENT,
  `id_dostawcy` int NOT NULL,
  `id_gat` int NOT NULL,
  `nazwa_art` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wielkosc_miary` int NOT NULL,
  `id_miary` int NOT NULL,
  `alert_sztuki` int NOT NULL,
  PRIMARY KEY (`id_art`),
  KEY `id_dostawcy_idx` (`id_dostawcy`),
  KEY `id_gat_idx` (`id_gat`),
  KEY `id_miary_idx` (`id_miary`),
  CONSTRAINT `id_dostawcy` FOREIGN KEY (`id_dostawcy`) REFERENCES `dostawcy` (`id_dostawcy`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_gat` FOREIGN KEY (`id_gat`) REFERENCES `rodzaje_art` (`id_gat`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_miary` FOREIGN KEY (`id_miary`) REFERENCES `miary` (`id_miary`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artykuly`
--

LOCK TABLES `artykuly` WRITE;
/*!40000 ALTER TABLE `artykuly` DISABLE KEYS */;
INSERT INTO `artykuly` VALUES (1,1,1,'laciate',1,1,3),(2,2,2,'oselkowe',300,2,4),(3,2,2,'extra',250,2,4),(4,3,3,'srednie',1,3,5),(5,2,1,'kwasne',1,1,5);
/*!40000 ALTER TABLE `artykuly` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dostawcy`
--

DROP TABLE IF EXISTS `dostawcy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dostawcy` (
  `id_dostawcy` int NOT NULL AUTO_INCREMENT,
  `nazwa_dost` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `miasto` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `adres_ul` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `telefon` varchar(12) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `os_do_kontaktu` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_dostawcy`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dostawcy`
--

LOCK TABLES `dostawcy` WRITE;
/*!40000 ALTER TABLE `dostawcy` DISABLE KEYS */;
INSERT INTO `dostawcy` VALUES (1,'SM Ryki','Ryki','Å»ytnia 3','biuro@smryki.pl','818651269','Jan Nowak'),(2,'SM Gostyń','Gostyń','Wielkopolska 1','zakupy@smgostyn.com.pl','48 655752208','Stanisław Szulc'),(3,'SM w Wieprzu','Wieprz','Wieprz 232','handel@smwieprz.pl','33 8755113','Jarosław Kowalski'),(4,'SM Å»arÃ³w','Å»arÃ³w','Wiosenna 2','biuro@smzarow.pl','75 8882323','Roman Adamski');
/*!40000 ALTER TABLE `dostawcy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `miary`
--

DROP TABLE IF EXISTS `miary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `miary` (
  `id_miary` int NOT NULL AUTO_INCREMENT,
  `miara` varchar(12) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_miary`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `miary`
--

LOCK TABLES `miary` WRITE;
/*!40000 ALTER TABLE `miary` DISABLE KEYS */;
INSERT INTO `miary` VALUES (1,'litr'),(2,'gram'),(3,'szt'),(4,'kg');
/*!40000 ALTER TABLE `miary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notatki`
--

DROP TABLE IF EXISTS `notatki`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notatki` (
  `id_notatki` int NOT NULL AUTO_INCREMENT,
  `id_zadania` int DEFAULT NULL,
  `tresc` varchar(45) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `data` varchar(45) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`id_notatki`),
  KEY `id_zadania_idx` (`id_zadania`),
  CONSTRAINT `id_zadania` FOREIGN KEY (`id_zadania`) REFERENCES `zadania` (`id_zadania`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notatki`
--

LOCK TABLES `notatki` WRITE;
/*!40000 ALTER TABLE `notatki` DISABLE KEYS */;
/*!40000 ALTER TABLE `notatki` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partie_towaru`
--

DROP TABLE IF EXISTS `partie_towaru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partie_towaru` (
  `id_partii_towaru` int NOT NULL AUTO_INCREMENT,
  `id_art` int NOT NULL,
  `ilosc_przyjeta` int NOT NULL,
  `ilosc_aktualna` int NOT NULL,
  `data_przyjecia` date NOT NULL,
  `data_przydatnosci` date NOT NULL,
  `alert_przydatnosc` date NOT NULL,
  PRIMARY KEY (`id_partii_towaru`),
  KEY `id_art_idx` (`id_art`),
  CONSTRAINT `id_art` FOREIGN KEY (`id_art`) REFERENCES `artykuly` (`id_art`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partie_towaru`
--

LOCK TABLES `partie_towaru` WRITE;
/*!40000 ALTER TABLE `partie_towaru` DISABLE KEYS */;
INSERT INTO `partie_towaru` VALUES (1,1,500,800,'2016-01-10','2016-02-13','2016-02-04'),(2,2,20,28,'2016-01-15','2016-02-20','2016-02-15'),(3,3,30,37,'2016-01-20','2016-02-20','2016-02-04'),(4,4,900,950,'2016-01-21','2016-02-28','2016-02-23'),(5,5,70,77,'2016-01-22','2016-02-27','2016-02-22');
/*!40000 ALTER TABLE `partie_towaru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rodzaje_art`
--

DROP TABLE IF EXISTS `rodzaje_art`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rodzaje_art` (
  `id_gat` int NOT NULL AUTO_INCREMENT,
  `nazwa_rodzaju` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_gat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rodzaje_art`
--

LOCK TABLES `rodzaje_art` WRITE;
/*!40000 ALTER TABLE `rodzaje_art` DISABLE KEYS */;
INSERT INTO `rodzaje_art` VALUES (1,'mleko'),(2,'maslo'),(3,'jajka'),(4,'ser_bialy'),(5,'ser_zolty');
/*!40000 ALTER TABLE `rodzaje_art` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rola`
--

DROP TABLE IF EXISTS `rola`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rola` (
  `id_rola` int NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_rola`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rola`
--

LOCK TABLES `rola` WRITE;
/*!40000 ALTER TABLE `rola` DISABLE KEYS */;
/*!40000 ALTER TABLE `rola` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_rola` int NOT NULL,
  PRIMARY KEY (`id_role`),
  KEY `id_rola_idx` (`id_rola`),
  KEY `id_user_idx` (`id_user`),
  CONSTRAINT `id_rola` FOREIGN KEY (`id_rola`) REFERENCES `rola` (`id_rola`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `uzytkownicy` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stan_magazynu`
--

DROP TABLE IF EXISTS `stan_magazynu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stan_magazynu` (
  `id_stanu` int NOT NULL AUTO_INCREMENT,
  `id_partii_towaru` int NOT NULL,
  PRIMARY KEY (`id_stanu`),
  KEY `id_partii_towaru_idx` (`id_partii_towaru`),
  CONSTRAINT `id_partii_towaru` FOREIGN KEY (`id_partii_towaru`) REFERENCES `partie_towaru` (`id_partii_towaru`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stan_magazynu`
--

LOCK TABLES `stan_magazynu` WRITE;
/*!40000 ALTER TABLE `stan_magazynu` DISABLE KEYS */;
INSERT INTO `stan_magazynu` VALUES (1,1),(2,2),(3,3),(4,4),(5,5);
/*!40000 ALTER TABLE `stan_magazynu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `strata`
--

DROP TABLE IF EXISTS `strata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `strata` (
  `id_strata` int NOT NULL AUTO_INCREMENT,
  `id_partii_towaru` int NOT NULL,
  `ilosc` int NOT NULL,
  `data` date NOT NULL,
  `powod` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id_strata`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `strata`
--

LOCK TABLES `strata` WRITE;
/*!40000 ALTER TABLE `strata` DISABLE KEYS */;
/*!40000 ALTER TABLE `strata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `straty`
--

DROP TABLE IF EXISTS `straty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `straty` (
  `id_straty` int NOT NULL AUTO_INCREMENT,
  `id_strata` int NOT NULL,
  `id_stanu` int NOT NULL,
  PRIMARY KEY (`id_straty`),
  KEY `id_stanu_idx` (`id_stanu`),
  KEY `id_strata_idx` (`id_strata`),
  CONSTRAINT `id_stanu` FOREIGN KEY (`id_stanu`) REFERENCES `stan_magazynu` (`id_stanu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `id_strata` FOREIGN KEY (`id_strata`) REFERENCES `strata` (`id_strata`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `straty`
--

LOCK TABLES `straty` WRITE;
/*!40000 ALTER TABLE `straty` DISABLE KEYS */;
/*!40000 ALTER TABLE `straty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uzytkownicy`
--

DROP TABLE IF EXISTS `uzytkownicy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uzytkownicy` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `login` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `haslo` char(60) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `aktywny` tinyint(1) NOT NULL DEFAULT '0',
  `rola` varchar(40) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uzytkownicy`
--

LOCK TABLES `uzytkownicy` WRITE;
/*!40000 ALTER TABLE `uzytkownicy` DISABLE KEYS */;
INSERT INTO `uzytkownicy` VALUES (1,'raptor','$2a$12$q/ZfsGUaAaqdBOdXxndfA.yS6jCTQJEHdcEpP0zgNbRun.2.mL3lK','Zdzislaw','Bronikowski','zdzislaw.bronikowski@gmail.com',1,'');
/*!40000 ALTER TABLE `uzytkownicy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zadania`
--

DROP TABLE IF EXISTS `zadania`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `zadania` (
  `id_zadania` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `tresc` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL,
  `stan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_zadania`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zadania`
--

LOCK TABLES `zadania` WRITE;
/*!40000 ALTER TABLE `zadania` DISABLE KEYS */;
/*!40000 ALTER TABLE `zadania` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-11 13:18:43
