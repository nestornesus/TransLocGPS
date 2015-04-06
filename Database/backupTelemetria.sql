CREATE TABLE `gps` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` datetime NOT NULL,
  `Día` char(3) DEFAULT NULL,
  `Latitud` char(9) DEFAULT NULL,
  `Longitud` char(13) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gps`
--

LOCK TABLES `gps` WRITE;
/*!40000 ALTER TABLE `gps` DISABLE KEYS */;
INSERT INTO `gps` VALUES (54,'2015-03-07 00:08:22','Sat','+10.98894','-074.81161'),(55,'2015-03-07 00:08:22','Sat','+10.98894','-074.81161'),(56,'2015-03-21 17:54:32','Sat','+10.98883','-074.81152'),(57,'2015-03-21 18:53:16','Sat','+10.98885','-074.81169'),(58,'2015-03-21 18:54:16','Sat','+10.98885','-074.81169'),(59,'2015-03-21 18:55:17','Sat','+10.98885','-074.81169'),(60,'2015-03-21 18:55:58','Sat','+10.98875','-074.81169'),(61,'2015-03-21 18:56:28','Sat','+10.98875','-074.81169'),(62,'2015-03-21 18:56:58','Sat','+10.98871','-074.81151'),(63,'2015-03-21 18:57:28','Sat','+10.98873','-074.81154'),(64,'2015-03-21 18:58:06','Sat','+10.98869','-074.81153'),(65,'2015-03-21 18:58:16','Sat','+10.98864','-074.81151'),(66,'2015-03-21 18:58:26','Sat','+10.98869','-074.81154'),(67,'2015-03-21 18:58:36','Sat','+10.98869','-074.81154'),(68,'2015-03-21 18:58:46','Sat','+10.98869','-074.81154'),(69,'2015-03-21 18:58:56','Sat','+10.98869','-074.81154'),(70,'2015-03-21 18:59:06','Sat','+10.98860','-074.81137'),(71,'2015-03-21 18:59:16','Sat','+10.98867','-074.81141'),(72,'2015-03-21 18:59:27','Sat','+10.98870','-074.81129'),(73,'2015-03-21 18:59:36','Sat','+10.98868','-074.81148'),(74,'2015-03-21 18:59:46','Sat','+10.98868','-074.81148'),(75,'2015-03-21 18:59:56','Sat','+10.98868','-074.81148'),(76,'2015-03-21 19:00:06','Sat','+10.98868','-074.81148'),(77,'2015-03-21 19:00:16','Sat','+10.98868','-074.81148'),(78,'2015-03-21 19:00:26','Sat','+10.98868','-074.81148'),(79,'2015-03-21 19:00:36','Sat','+10.98868','-074.81148'),(80,'2015-03-21 19:00:46','Sat','+10.98868','-074.81148'),(81,'2015-03-21 19:00:56','Sat','+10.98868','-074.81148'),(82,'2015-03-21 19:01:06','Sat','+10.98868','-074.81148'),(83,'2015-03-21 19:01:17','Sat','+10.98868','-074.81148'),(84,'2015-03-21 19:01:26','Sat','+10.98868','-074.81148'),(85,'2015-03-21 19:01:36','Sat','+10.98868','-074.81148'),(86,'2015-03-21 19:01:46','Sat','+10.98868','-074.81148'),(87,'2015-03-21 19:01:56','Sat','+10.98868','-074.81148'),(88,'2015-03-21 19:02:07','Sat','+10.98868','-074.81148'),(89,'2015-03-21 19:02:17','Sat','+10.98868','-074.81148'),(90,'2015-03-21 19:03:25','Sat','+10.98868','-074.81148'),(91,'2015-03-21 19:03:34','Sat','+10.98868','-074.81148'),(92,'2015-03-21 19:03:44','Sat','+10.98868','-074.81148'),(93,'2015-03-21 19:03:54','Sat','+10.98868','-074.81148'),(94,'2015-03-21 19:04:04','Sat','+10.98868','-074.81148'),(95,'2015-03-21 19:04:14','Sat','+10.98868','-074.81148'),(96,'2015-03-21 19:04:24','Sat','+10.98868','-074.81148'),(97,'2015-03-21 19:04:34','Sat','+10.98868','-074.81148'),(98,'2015-03-21 19:04:44','Sat','+10.98868','-074.81148'),(99,'2015-03-21 19:04:55','Sat','+10.98868','-074.81148'),(100,'2015-03-21 19:05:05','Sat','+10.98868','-074.81148'),(101,'2015-03-21 19:05:16','Sat','+10.98868','-074.81148'),(102,'2015-03-21 19:05:26','Sat','+10.98868','-074.81148'),(103,'2015-03-21 19:05:37','Sat','+10.98868','-074.81148'),(104,'2015-03-21 19:05:46','Sat','+10.98868','-074.81148'),(105,'2015-03-21 19:05:56','Sat','+10.98868','-074.81148'),(106,'2015-03-21 19:06:06','Sat','+10.98868','-074.81148'),(107,'2015-03-21 19:06:16','Sat','+10.98868','-074.81148'),(108,'2015-03-21 19:06:27','Sat','+10.98868','-074.81148'),(109,'2015-03-21 19:06:36','Sat','+10.98868','-074.81148'),(110,'2015-03-21 19:06:46','Sat','+10.98868','-074.81148'),(111,'2015-03-21 19:06:56','Sat','+10.98868','-074.81148'),(112,'2015-03-21 19:07:06','Sat','+10.98868','-074.81148'),(113,'2015-03-21 19:07:17','Sat','+10.98868','-074.81148'),(114,'2015-03-21 19:07:26','Sat','+10.98868','-074.81148'),(115,'2015-03-21 19:07:36','Sat','+10.98868','-074.81148'),(116,'2015-03-21 19:07:47','Sat','+10.98868','-074.81148'),(117,'2015-03-21 19:07:57','Sat','+10.98868','-074.81148'),(118,'2015-03-21 19:08:07','Sat','+10.98868','-074.81148'),(119,'2015-03-21 19:08:17','Sat','+10.98868','-074.81148'),(120,'2015-03-21 19:08:27','Sat','+10.98868','-074.81148'),(121,'2015-03-21 19:08:37','Sat','+10.98868','-074.81148'),(122,'2015-03-21 19:08:47','Sat','+10.98868','-074.81148'),(123,'2015-03-21 19:08:57','Sat','+10.98868','-074.81148'),(124,'2015-03-21 19:09:07','Sat','+10.98868','-074.81148'),(125,'2015-03-21 19:09:17','Sat','+10.98868','-074.81148'),(126,'2015-03-21 19:09:27','Sat','+10.98868','-074.81148'),(127,'2015-03-21 19:09:38','Sat','+10.98868','-074.81148'),(128,'2015-03-21 19:09:47','Sat','+10.98868','-074.81148'),(129,'2015-03-21 19:09:57','Sat','+10.98868','-074.81148'),(130,'2015-03-21 19:10:07','Sat','+10.98868','-074.81148'),(131,'2015-03-21 19:10:17','Sat','+10.98868','-074.81148'),(132,'2015-03-21 19:10:28','Sat','+10.98868','-074.81148'),(133,'2015-03-21 19:10:38','Sat','+10.98868','-074.81148'),(134,'2015-03-21 19:10:49','Sat','+10.98868','-074.81148'),(135,'2015-03-22 19:21:37','Sat','+10.98880','-074.81166'),(136,'2015-03-22 19:22:37','Sat','+10.98880','-074.81166'),(137,'2015-03-28 20:00:15','Sat','+10.98880','-074.81166'),(138,'2015-03-28 20:00:44','Sat','+10.98880','-074.81166'),(139,'2015-03-28 20:01:15','Sat','+10.98880','-074.81166');
/*!40000 ALTER TABLE `gps` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-06  9:31:27
