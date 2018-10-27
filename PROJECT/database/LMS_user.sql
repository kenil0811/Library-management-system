-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: LMS
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `RollNo` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `EmailId` varchar(50) DEFAULT NULL,
  `MobNo` bigint(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`RollNo`),
  UNIQUE KEY `EmailId` (`EmailId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('ADMIN','admin','Admin',NULL,'admin@nitc.ac.in',123456789,'admin'),('b160001cs','John','Student','GEN','john@gmail.com',9876543210,'b160001cs'),('b160002cs','Adam','Student','ST','adam@yahoo.com',7845965212,'b160002cs'),('b160003ch','Alice','Student','OBC','alice@hotmail.com',4512451245,'b160003ch'),('b160004me','Abbot','Student','GEN','abbot@gmail.com',6352416352,'b160004me'),('b160005ce','bale','Student','SC','bale@gmail.com',96685747485,'b160005ce'),('b160006cs','Bob','Student','GEN','bob@gmail.com',4141415263,'b160006cs'),('b160007cs','Goku','Student','GEN','goku@yahoo.com',4545451212,'b160007cs'),('b160008cs','Ben','Student','GEN','ben10@hotmail.com',6352416345,'b160008cs'),('b160009cs','Ash','Student','GEN','ash@yahoo.com',7845124578,'b160009cs'),('b160010cs','Harry','Student','GEN','harry@hotmail.com',4578457845,'b160010cs'),('b160011ch','Gwen','Student','GEN','gwen@yahoo.com',9685747474,'b160011ch'),('b160012me','Kevin','Student','ST','kevin11@hotmail.com',1242425163,'b160012me'),('b160013ee','Max','Student','OBC','max@gmail.com',9685748574,'b160013ee'),('B160111Cs','Bharat','Student','GEN','bharat@gmail.com',123456,'abcd'),('B160158CS','MANU','Student','GEN','manu@gmail.com',8365917597,'manu'),('b160257me','Eve','Student','GEN','eve@gmail.com',5451525356,'b160257me'),('b160321ec','Joey','Student','SC','joey@yahoo.com',9898982020,'b160321ec'),('b160412cs','Barney','Student','ST','legendary@gmail.com',9695989192,'b160412cs'),('b160423cs','Rachel','Student','GEN','rachel@gmail.com',7475787671,'b160423cs'),('B160511CS','MALHAR','Student','OBC','malhar@gmail.com',9756153859,'abcd'),('B160632CS','KENIL','Student','GEN','kenilshah081198@gmail.com',9892506094,'1234'),('b160777cs','Sheldon','Student','GEN','smartestpersoninroom@gmail.com',9696969696,'b160777cs'),('b160854cs','Ram Prabhu','Student','SC','ram@nitc.ac.in',968599,'1234'),('b160951cs','Misty','Student','SC','watermaster@hotmail.com',4145424847,'b160951cs'),('b160999cs','Chandler','Student','OBC','sarcasticlord@hotmail.com',9494959694,'b160999cs');
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

-- Dump completed on 2018-10-27 13:20:27
