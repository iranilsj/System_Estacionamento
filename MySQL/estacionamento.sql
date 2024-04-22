-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: estacionamento
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `cadmensalista`
--

DROP TABLE IF EXISTS `cadmensalista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadmensalista` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `rg` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cep` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `endereco` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `numeroEnd` int(11) NOT NULL,
  `complementoEnd` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bairro` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cidade` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ufEstado` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `celular` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadmensalista`
--

LOCK TABLES `cadmensalista` WRITE;
/*!40000 ALTER TABLE `cadmensalista` DISABLE KEYS */;
INSERT INTO `cadmensalista` VALUES (1,'Kauê Matheus Enzo da Silva','1953-04-01','65521407979','12.747.127-3','98010-400','Travessa Arthur Di B',693,'','Jung','Cruz Alta','RS','(55) 98107-5456'),(2,'Andrea Benedita de Paula','1971-02-20','36242875837','11.036.678-5','14060-038','Rua Caravelas',246,'','Vila Recreio','Ribeirão Preto','SP','(16) 98571-2255'),(19,'Thomas Raimundo Nicolas Pinto','1975-04-13','593.941.760-47','10.021.607-9','66070-638','Rua Nova I',594,'','Terra Firme','Belém','PA','(91) 98572-0656'),(27,'Daiane Andrea Louise Souza','1963-04-13','385.495.256-26','12.971.517-7','54786-020','Rua Moacir de Almeid',545,'','Vera Cruz','Camaragibe','PE','(81) 99293-2156'),(28,'Iago Thiago Martin Nogueira','1962-02-15','810.988.202-15','45.773.248-9','38072-055','Rua Alemanha',575,'','Boa Vista','Uberaba','MG','(34) 99559-4645'),(29,'Pietro Cauê Danilo Vieira','1999-02-09','313.209.062-06','25.648.679-7','66923-310','Alameda Mendes',114,'','Carananduba (Mosqueiro)','Belém','PA','(91) 98816-7843'),(30,'Vinicius','1945-01-13','164.054.870-08','13.420.603-4','64215-410','Conjunto Ipase',107,'','Boa Esperança','Parnaíba','PI','(86) 99713-7095'),(33,'Francisco Murilo Luan Rezende','1992-10-13','046.737.771-58','001.750.268','79063760','rUA ANTONIO RODRIGUE',140,'','Campo limpo','Campo Grando','Ms','11994984709');
/*!40000 ALTER TABLE `cadmensalista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadveiculos`
--

DROP TABLE IF EXISTS `cadveiculos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadveiculos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cadmensalista_id` int(10) unsigned DEFAULT NULL,
  `Marca` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Modelo` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Placa` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Cor` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cadveiculos_cadmensalista` (`cadmensalista_id`),
  CONSTRAINT `fk_cadveiculos_cadmensalista` FOREIGN KEY (`cadmensalista_id`) REFERENCES `cadmensalista` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadveiculos`
--

LOCK TABLES `cadveiculos` WRITE;
/*!40000 ALTER TABLE `cadveiculos` DISABLE KEYS */;
INSERT INTO `cadveiculos` VALUES (34,1,'Pontiac','CITY Sedan LX ','NRS5A30','Vermelho'),(35,2,'Saab','9000 CD 2.3 Turbo','JTS-7989','Amarelo'),(36,19,'Mahindra','PIK-UP CD 2.2 4X2 (diesel) Mec','HRN-3955','Verde'),(37,27,'Mazda','Millenia 3.0 V6 24V','MUM-0416','Laranja'),(38,27,'Envemo','Camper 4x4 2.5 Diesel','HPT-3350','Branco'),(39,28,'smart','fortwo BRABUS cabrio 1.0 72kw','BYC-2437','Bege');
/*!40000 ALTER TABLE `cadveiculos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'estacionamento'
--

--
-- Dumping routines for database 'estacionamento'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-22 15:58:17
