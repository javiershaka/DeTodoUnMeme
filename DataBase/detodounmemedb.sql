CREATE DATABASE  IF NOT EXISTS `detodounmeme` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `detodounmeme`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: detodounmeme
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKComentario_Usuario_idUsuario_idx` (`idUsuario`),
  KEY `FKComentario_Post_idPost_idx` (`idPost`),
  CONSTRAINT `FKComentario_Post_idPost` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKComentario_Usuario_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorito`
--

DROP TABLE IF EXISTS `favorito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKFavorito_Usuario_idUsuario_idx` (`idUsuario`),
  KEY `FKFavorito_Post_idPost_idx` (`idPost`),
  CONSTRAINT `FKFavorito_Post_idPost` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FKFavorito_Usuario_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorito`
--

LOCK TABLES `favorito` WRITE;
/*!40000 ALTER TABLE `favorito` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `etiqueta` varchar(45) DEFAULT NULL,
  `vistas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKPost_usuario_idUsuario_idx` (`idUsuario`),
  CONSTRAINT `FKPost_usuario_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puntuacion`
--

DROP TABLE IF EXISTS `puntuacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `puntuacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idPost` int(11) NOT NULL,
  `puntuacion` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKPuntuacion_Post_idPost_idx` (`idPost`),
  CONSTRAINT `FKPuntuacion_Post_idPost` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puntuacion`
--

LOCK TABLES `puntuacion` WRITE;
/*!40000 ALTER TABLE `puntuacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `puntuacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` enum('hombre','mujer') DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'detodounmeme'
--

--
-- Dumping routines for database 'detodounmeme'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-25 15:17:56
