-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 192.168.1.173    Database: juegafutboldb
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
-- Table structure for table `canchas`
--

DROP TABLE IF EXISTS `canchas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `canchas` (
  `id_pro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_pro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_loc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_loc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cancha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_jug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `techo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `canchas`
--

LOCK TABLES `canchas` WRITE;
/*!40000 ALTER TABLE `canchas` DISABLE KEYS */;
INSERT INTO `canchas` VALUES ('1085147165','Laura Lopez','1','maracana','1','5','NO','7224586','image/img1.jpg','calle 20 #30-23'),('1085147165','Laura Lopez','1','maracana','2','5','NO','7224586','image/img2.jpg','calle 20 #30-23'),('1085147165','Laura Lopez','1','maracana','3','5','SI','7224586','image/img3.jpg','calle 20 #30-23'),('1085147165','Laura Lopez','1','maracana','4','5','SI','7224586','image/img4.jpg','calle 20 #30-23'),('1085147165','Laura Lopez','4','maracana 2','12','7','SI','7224586','image/img5.jpg','calle 22 #10-10'),('1085147165','Laura Lopez','4','maracana 2','13','7','SI','7224586','image/img7.jpg','calle 22 #10-10'),('1085147165','Laura Lopez','4','maracana 2','14','7','SI','7224586','image/img8.jpg','calle 22 #10-10'),('1085147166','Fernando Ruiz','2','bombonera','5','7','SI','7224587','image/img16.jpg','calle 43 #10-01'),('1085147166','Fernando Ruiz','2','bombonera','6','7','SI','7224587','image/img10.jpg','calle 43 #10-01'),('1085147166','Fernando Ruiz','2','bombonera','7','7','SI','7224587','image/img11.jpg','calle 43 #10-01'),('1085147166','Fernando Ruiz','2','bombonera','8','11','SI','7224587','image/img12.jpg','calle 43 #10-01'),('1085147167','Gabriel Castellanos','3','mundo futbol','9','9','NO','7224588','image/img13.jpg','calle 15 #20-21'),('1085147167','Gabriel Castellanos','3','mundo futbol','10','9','NO','7224588','image/img14.jpg','calle 15 #20-21'),('1085147167','Gabriel Castellanos','3','mundo futbol','11','9','SI','7224588','image/img15.jpg','calle 15 #20-21');
/*!40000 ALTER TABLE `canchas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-11 23:47:29
