-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: alumni
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

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
-- Table structure for table `scholar_form`
--

DROP TABLE IF EXISTS `scholar_form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scholar_form` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(100) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `branch` char(30) DEFAULT NULL,
  `admission_category` char(10) DEFAULT NULL,
  `fathers_name` varchar(60) DEFAULT NULL,
  `father_occupation` char(30) DEFAULT NULL,
  `father_income` varchar(20) DEFAULT NULL,
  `mother_name` varchar(60) DEFAULT NULL,
  `mother_occupation` varchar(30) DEFAULT NULL,
  `mother_income` varchar(20) DEFAULT NULL,
  `tenth_marks` varchar(10) DEFAULT NULL,
  `twelth_marks` varchar(10) DEFAULT NULL,
  `diploma_marks` varchar(10) DEFAULT NULL,
  `twelth_cutoff` varchar(10) DEFAULT NULL,
  `cgpa` varchar(10) DEFAULT NULL,
  `arrears` int(10) DEFAULT NULL,
  `lastsem` varchar(10) DEFAULT NULL,
  `loan` varchar(5) DEFAULT NULL,
  `loan_amount` int(20) DEFAULT NULL,
  `loan_bank` varchar(30) DEFAULT NULL,
  `other_schloarship` varchar(10) DEFAULT NULL,
  `otsch_amount` int(10) DEFAULT NULL,
  `otsch_scheme` varchar(20) DEFAULT NULL,
  `no_bro` int(10) DEFAULT NULL,
  `bro_occupation` varchar(20) DEFAULT NULL,
  `no_sis` int(10) DEFAULT NULL,
  `sis_occupation` varchar(20) DEFAULT NULL,
  `first_grad` varchar(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobile_number` int(15) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fin_marks` varchar(10) DEFAULT NULL,
  `sch_marks` varchar(10) DEFAULT NULL,
  `arrear_marks` varchar(10) DEFAULT NULL,
  `cgpa_marks` varchar(10) DEFAULT NULL,
  `att_marks` varchar(10) DEFAULT NULL,
  `conduct_marks` varchar(10) DEFAULT NULL,
  `total_marks` varchar(20) DEFAULT NULL,
  `rollno` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scholar_form`
--

LOCK TABLES `scholar_form` WRITE;
/*!40000 ALTER TABLE `scholar_form` DISABLE KEYS */;
INSERT INTO `scholar_form` VALUES (8,'admin','be','cse','Aided','arataj','qwertyui','-2','123','123','2','2','2','213','2','6',2,'2','on',5000,'cub','on',7668,'hy',2,'2',2,'2','on','tce hostel',1234567890,'2017-07-02 11:03:35',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'Vijay','btch','civil','Aided','abc','cba','-50','abc','cba','123','12','12','12','12','5',5,'55','on',5000,'SBi','on',50000,'test',3,'33',2,'2','on','tce hostel',1234567890,'2017-07-02 12:26:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'Saravana','be','cse','Aided','abc','abc','50000','abc','abc','50000','10','20','30','40','5',5,'4','on',2000,'2000','on',2000,'2000',2,'2',2,'2','on','tce',1234567890,'2017-07-03 18:46:12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'balamurugan ','be','cse','Aided','abc','dkjd','180000','abc','kjd','200000','90','98','92','196','6',0,'89','on',0,'','on',0,'',2,'3',2,'4','on','dfkjkljlkjkljkljk',2147483647,'2017-07-03 19:34:39','4','5','5','4','3',NULL,NULL,NULL),(13,'','','','Aided','','','','','','','','','','','5',0,'','on',0,'','on',0,'',0,'',0,'','on','',0,'2017-07-03 20:48:39','20','5','5','2','',NULL,NULL,NULL),(14,'','','','Aided','','','','','','','','','','','5',0,'','on',0,'','on',0,'',0,'',0,'','on','',0,'2017-07-03 20:49:15','20','5','5','2','',NULL,NULL,NULL),(15,'','','','Aided','','','','','','','','','','','',0,'','Yes',0,'','Yes',0,'',0,'',0,'','on','',0,'2017-07-04 01:14:58','20','5','5','2','',NULL,NULL,NULL),(16,'Saravana','be','','Aided','abc','abc','25000','abc','abc','50000','50','','75','','50',0,'90','No',0,'','No',0,'',0,'',0,'gga','on','abc',986547654,'2017-07-04 02:35:15','16','5','5','10','',NULL,NULL,NULL),(17,'Bala','BE','CSE','Aided','abc','abc','25000','abc','abc','50000','50','','75','','50',0,'90','No',0,'','No',0,'',0,'',1,'abc','on','dfkjkljlkjkljkljk',2147483647,'2017-07-04 02:43:41','16','5','5','10','4',NULL,NULL,NULL),(18,'PK','BE','CSE','Aided','abc','dkjd','25000','abc','abc','50000','50','','75','','50',0,'90','No',0,'','No',0,'',0,'',1,'abc','on','dfkjkljlkjkljkljk',2147483647,'2017-07-04 03:00:46','16','5','5','10','4',NULL,'40',NULL),(19,'Vijay','','Civil','Aided','','','','','','','','','','','',0,'','Yes',0,'','Yes',0,'',0,'',0,'','on','',0,'2017-07-04 03:07:46','20','5','5','2','',NULL,'32','123');
/*!40000 ALTER TABLE `scholar_form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `uid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `rollno` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Vijay','vijay','student','2017-07-02 11:52:19','123'),(2,'admin','admin@123','admin','2017-07-04 03:58:29','99XX9912'),(3,'vijay1','321','student','2017-07-02 12:06:14','123'),(4,'Saravana','Vijay','student','2017-07-02 12:39:25','1234'),(5,'abc','admin','student','2017-07-03 15:14:27','321'),(6,'abce','asd','student','2017-07-03 15:15:18','1233232'),(7,'Vijay','Vijay','student','2017-07-04 01:50:24','456'),(8,'a','a','student','2017-07-04 01:56:49','2'),(9,'b','b','student','2017-07-04 01:57:31','3'),(10,'c','c','student','2017-07-04 01:58:03','4'),(11,'d','6','student','2017-07-04 02:03:11','6'),(12,'d','9','student','2017-07-04 02:05:34','9'),(13,'d','88','student','2017-07-04 02:08:01','8'),(14,'ff','44','student','2017-07-04 02:08:48','44');
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

-- Dump completed on 2017-07-04  9:58:13
