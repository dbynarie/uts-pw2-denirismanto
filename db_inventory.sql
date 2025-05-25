/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.5.27-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: db_inventory
-- ------------------------------------------------------
-- Server version	10.5.27-MariaDB

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
-- Table structure for table `tb_inventory`
--

DROP TABLE IF EXISTS `tb_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_inventory` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jumlah_barang` int(10) DEFAULT NULL,
  `satuan_barang` varchar(20) DEFAULT NULL,
  `harga_beli` double(20,2) DEFAULT NULL,
  `status_barang` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_inventory`
--

LOCK TABLES `tb_inventory` WRITE;
/*!40000 ALTER TABLE `tb_inventory` DISABLE KEYS */;
INSERT INTO `tb_inventory` VALUES (1,'SRV001','Rack Server 42U',3,'pcs',15000000.00,1),(2,'SRV002','Server Dell PowerEdge R740',5,'pcs',85000000.00,1),(3,'SRV003','UPS APC 3000VA',6,'pcs',12500000.00,1),(4,'SRV004','Switch Cisco 24 Port',10,'pcs',6500000.00,1),(5,'SRV005','Router MikroTik RB4011',8,'pcs',2500000.00,1),(6,'SRV006','Patch Panel Cat6 24 Port',12,'pcs',1200000.00,1),(7,'SRV007','Harddisk 4TB SAS',20,'pcs',2200000.00,1),(8,'SRV008','Kabel UTP Cat6',500,'meter',4500.00,1),(9,'SRV009','SFP Module 10Gbps',15,'pcs',1750000.00,1),(10,'SRV010','Access Point Ubiquiti UniFi',10,'pcs',1850000.00,1),(11,'SRV011','Fan Cooler Server',25,'pcs',75000.00,1),(12,'SRV012','Power Supply Server 650W',40,'pcs',1350000.00,0),(16,'SRV014','License CHR Level 4',150,'pcs',1900000.00,0),(19,'SRV016','RAM 8gb DDR5',5,'pcs',3300000.00,0),(21,'SRV017','RAM 32gb DDR5',14,'pcs',4000000.00,1);
/*!40000 ALTER TABLE `tb_inventory` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-25 20:35:27
