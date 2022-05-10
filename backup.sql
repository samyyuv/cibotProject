-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: cibot
-- ------------------------------------------------------
-- Server version	5.7.36

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
-- Table structure for table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actualites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `titl_seo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_seo` mediumtext COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `actualites_position_unique` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actualites`
--

LOCK TABLES `actualites` WRITE;
/*!40000 ALTER TABLE `actualites` DISABLE KEYS */;
INSERT INTO `actualites` VALUES (1,'Voluptatum sequi qui aut tenetur non ut.','Et qui odit ipsam commodi temporibus perferendis perspiciatis inventore. Adipisci aut laudantium dolores voluptatibus aspernatur. Architecto aut ut est tenetur odit atque.\r\n\r\nQui maxime quia neque voluptatibus. A fugit molestias ut amet nemo aliquid dolorum. Tempore numquam rerum aut laborum. Architecto repellat ipsum velit magnam porro.\r\n\r\nReiciendis laudantium incidunt sed laudantium. Veritatis voluptates molestias quis. Et quisquam voluptatem est aperiam impedit sed sunt.\r\n\r\nVoluptate tenetur eum tenetur voluptatem. Eum eveniet aliquam praesentium ut expedita. Quia enim accusantium dolor earum natus laudantium nulla voluptatibus. Quia harum eum aliquid tempora suscipit perspiciatis minus.\r\n\r\nQuisquam consequuntur qui repellendus. Ratione et at maxime temporibus. Et quia quod facilis corporis consequatur iusto.',0,NULL,NULL,'actualites/voluptatum-sequi-qui-aut-tenetur-non-ut.jpg',10,'2022-02-14 20:36:12','2022-04-25 09:39:44'),(2,'Suscipit dolore qui consequatur iste nostrum in facere.','Dolores neque sed sapiente dignissimos id qui fuga. Sunt optio minus dolor aliquam dicta. Debitis dolorem non ullam dicta aliquam eveniet unde quia.\r\n\r\nQuae iure placeat inventore voluptatem aut. Velit sit deleniti ipsa distinctio maiores hic. At sit vel fugit ea voluptates. Doloremque molestiae dolores molestiae quibusdam. Qui distinctio qui voluptatum commodi est.\r\n\r\nTempore fugit distinctio placeat recusandae. Qui eum rerum deleniti voluptatibus et. Nulla doloremque possimus ratione accusantium quibusdam eius animi.\r\n\r\nEnim vitae dolorem excepturi minus aut tempore. Quo tenetur eos quos aut eos in. Et rerum nihil ullam doloribus deleniti sit consequuntur. Debitis nihil nemo vitae et rem. Saepe enim incidunt dicta voluptas veniam illum.\r\n\r\nAccusamus accusamus est veritatis non. Quia quae officiis aut sit dicta aliquid eum. Est commodi aut non vel corporis.',1,NULL,NULL,'actualites/suscipit-dolore-qui-consequatur-iste-nostrum-in-facere.jpg',3,'2022-03-18 02:46:16','2022-04-25 09:39:12'),(3,'Aut qui ullam exercitationem modi et.','Totam nulla sint nisi distinctio dignissimos. Possimus est accusamus praesentium expedita mollitia. Dolorum sit consequatur fugiat dolores. In facere excepturi voluptas.\r\n\r\nQuia deleniti perferendis sunt sed odio ut. Odit odio cumque qui perspiciatis earum eaque laboriosam quasi. Eaque ut laboriosam ea voluptas.\r\n\r\nMinus rem suscipit est assumenda suscipit delectus beatae. Est id earum vitae. Voluptatem inventore hic nam sapiente. Et voluptas nemo incidunt quo sed quia nam. Porro doloribus magnam est earum aut.\r\n\r\nVelit laboriosam optio accusantium quas autem. Voluptatum fugiat necessitatibus incidunt maiores. Nostrum beatae at molestiae porro.\r\n\r\nEnim eum qui doloremque aut deserunt quas. Aspernatur provident libero tenetur assumenda provident autem ea non. Ipsa inventore et sed id omnis officia maxime doloribus. Omnis cumque vel sunt et aut ex.',0,NULL,NULL,'actualites/aut-qui-ullam-exercitationem-modi-et.jpg',5,'2022-02-20 17:32:18','2022-04-25 09:39:27'),(4,'Blanditiis modi quos voluptas.','Eius eligendi ut qui aperiam asperiores sint. Eos consectetur et sit. Magnam mollitia molestiae fugiat perspiciatis alias nobis eligendi. Dicta ea aspernatur saepe ab repellendus.\r\n\r\nIllum dolorem reprehenderit at laborum necessitatibus recusandae. Quis consequatur sapiente cupiditate aliquam quidem dicta nobis impedit. Cumque blanditiis ex atque tempora consequuntur vitae.\r\n\r\nVeniam molestias numquam iste architecto rerum natus esse. Sunt sed sit et autem eos voluptatem ratione. Consequatur quia corporis voluptas dignissimos quis nihil. Et tempore recusandae excepturi ipsum.\r\n\r\nQui ratione non odit commodi. Vel ut enim perferendis rerum temporibus et repellendus ea. Voluptatem voluptatum sapiente reprehenderit consectetur.\r\n\r\nAccusamus neque molestiae nihil nesciunt et veniam. Odit soluta ut quod dolore dolorum. Quam eveniet sit possimus deleniti architecto voluptatem consequuntur vel. Quia doloribus reiciendis quasi ipsum.',1,NULL,NULL,'actualites/blanditiis-modi-quos-voluptas.jpg',8,'2022-03-28 20:43:38','2022-04-25 09:38:59'),(5,'Magni provident assumenda pariatur.','Quia incidunt vel aspernatur illo consequatur tenetur explicabo. Aperiam odio laudantium illo vel ab. Sunt quibusdam nemo facere. Qui provident consequuntur quasi repudiandae quas et quis.\r\n\r\nConsequuntur voluptatum voluptatem quam. Amet sequi aliquam nisi ex laborum fugit voluptatem. Totam impedit corporis quod voluptatibus. Aut id facilis dolorem laboriosam illo ad. Quod vel laborum dicta sit adipisci optio.\r\n\r\nEt sit qui voluptates voluptas soluta. Iste explicabo omnis aut enim pariatur natus labore. Ipsam possimus omnis nemo quos tenetur sed fugiat.\r\n\r\nQuis consequatur praesentium iusto sed in omnis. Est ut rerum ut nisi consequatur facilis qui. Exercitationem est dolorem qui repellendus est molestiae quia. Quia aut ab et.\r\n\r\nQuis sunt temporibus qui a soluta provident ab. Nostrum optio officia dolorem hic. Dolore libero magnam illum. Earum possimus quia tempora dolores.',1,NULL,NULL,'actualites/magni-provident-assumenda-pariatur.jpg',4,'2022-01-29 05:19:09','2022-04-25 09:39:59'),(6,'Sit culpa odio alias harum facilis aut.','Adipisci quia quis magni molestiae non ullam consequatur. Rem voluptates architecto commodi qui reprehenderit nostrum perspiciatis. Optio non ipsum ab numquam temporibus est.\r\n\r\nAut officiis quam eum placeat. Explicabo quis sunt molestias magni. Id ut nesciunt deleniti doloremque facilis laborum eaque. Blanditiis incidunt iste iste aliquam assumenda.\r\n\r\nUt omnis possimus iusto cum. Nemo architecto non repellendus. Ut id nesciunt quia rerum nemo. Sunt nulla maiores ut ut.\r\n\r\nCorporis deserunt et deserunt. Dolorem non earum error natus quod consectetur. Dolores dolorem nostrum voluptatem tenetur illo delectus blanditiis repellat.\r\n\r\nCumque qui sit repudiandae magnam beatae molestiae. Dolorum dignissimos sunt eum. Debitis doloremque esse doloremque. Cum est accusamus sed sit nesciunt.',1,NULL,NULL,'actualites/sit-culpa-odio-alias-harum-facilis-aut.jpg',9,'2022-04-06 06:04:13','2022-04-25 09:38:30'),(7,'Natus officia voluptate ipsam necessitatibus labore quidem.','Sed enim ut incidunt a qui. Odit et nesciunt omnis id quisquam neque. Est deserunt mollitia sit. Excepturi optio hic sit.\r\n\r\nProvident quia exercitationem enim velit perspiciatis vitae. Repellat hic alias praesentium error sunt labore quia. Quod rerum ea nesciunt hic vel aut animi.\r\n\r\nEst occaecati facere et ut quis quia adipisci. Odit aliquam maiores deleniti est optio ullam. Similique harum laboriosam nulla aliquam eaque sit.\r\n\r\nAt magni amet eveniet ea saepe ducimus ipsa. Quia sint libero hic voluptas ratione sed maxime cumque. Consequuntur aspernatur ab sint sequi dignissimos. Et consequatur in quidem deleniti.\r\n\r\nDoloremque fuga accusantium rerum omnis qui natus est. Rerum aut rerum eius quaerat illo fugit. Tempore fuga labore eaque omnis nihil consectetur quis. Perspiciatis rerum culpa et.',1,NULL,NULL,'actualites/natus-officia-voluptate-ipsam-necessitatibus-labore-quidem.jpg',1,'2022-04-14 14:46:17','2022-04-25 09:37:54'),(8,'Animi pariatur fugiat illum officia est nihil.','Ut aliquam rem natus et ea et. Quis dicta rem molestiae alias. Id molestiae ab tempore maxime voluptatem. Aliquid ut illo occaecati corrupti illum repellat.\r\n\r\nIpsum harum sequi enim incidunt distinctio et quos odio. Explicabo quas vero qui perspiciatis iste excepturi. Laudantium autem est provident consequuntur. Quo voluptas in ab id magni in.\r\n\r\nEligendi sit corporis quia temporibus. Enim qui inventore voluptas. Ipsa illum dolorem nesciunt molestias eos et unde. Vero aliquid excepturi vel quo. Corporis optio consequuntur dicta nulla voluptatibus debitis unde accusamus.\r\n\r\nQuisquam expedita qui voluptatum. Eum quos dicta doloribus incidunt sed quibusdam beatae.\r\n\r\nQuam nihil labore quidem id soluta et. Quisquam iusto possimus earum sint ex in harum. Natus blanditiis voluptatem reprehenderit necessitatibus qui deleniti inventore.',0,NULL,NULL,'actualites/animi-pariatur-fugiat-illum-officia-est-nihil.jpg',6,'2022-04-06 06:31:40','2022-04-25 09:38:06'),(9,'Consequuntur quia consectetur qui ex officia ea minus.','Reiciendis molestias dolores dolorum placeat modi reiciendis. Sit reprehenderit voluptatem et eos sed sunt. Reprehenderit impedit animi cupiditate dolorem ea. Consequatur aut tempora tenetur.\r\n\r\nQui tenetur voluptas non beatae doloremque fugiat recusandae. Reprehenderit neque provident nihil. Iste aut quidem exercitationem id optio voluptas quam. Aut ut velit laboriosam consequatur.\r\n\r\nQuo accusantium voluptatem tempora amet dolorem fugiat. Non cumque qui non. Accusamus quia enim porro ullam. Itaque sint maxime qui ut ea impedit corrupti cupiditate.\r\n\r\nCorporis architecto vero qui pariatur unde et. Dolore qui sequi molestiae et numquam. Aut minima eos omnis eos assumenda maxime.\r\n\r\nTotam delectus eius laboriosam explicabo consequuntur. Dolor et ut sunt dolorem.',0,NULL,NULL,'actualites/consequuntur-quia-consectetur-qui-ex-officia-ea-minus.jpg',2,'2022-04-03 05:50:09','2022-04-25 09:38:46'),(10,'Itaque necessitatibus quia natus qui velit sint explicabo.','Molestiae error nulla aut eum. Animi ullam hic delectus nulla vel id nisi. Dignissimos labore est inventore.\r\n\r\nDignissimos praesentium eligendi et quo esse. Nulla assumenda voluptatem totam tempora ratione. Fugiat ducimus laudantium et. Architecto totam autem commodi dolores.\r\n\r\nCorporis deleniti nemo reiciendis numquam dignissimos et. Voluptatem alias facere sit a nisi. Sed sed enim omnis non officiis dolore. Sit ad quia fugiat mollitia qui ex eaque.\r\n\r\nNon quo enim aperiam. Repudiandae architecto provident voluptates corrupti dolorem. Deserunt doloribus et laboriosam autem vel quam. Officiis aut enim amet error non porro. Animi sint odio ullam qui blanditiis voluptas quae.\r\n\r\nId voluptate aliquid illum. Ex quis qui labore esse in. Quia nihil quia sed ut officiis.',1,NULL,NULL,'actualites/itaque-necessitatibus-quia-natus-qui-velit-sint-explicabo.jpg',7,'2022-04-22 01:46:39','2022-04-25 09:37:43');
/*!40000 ALTER TABLE `actualites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Monuments','this is a cool monument','Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.','2022-04-25 09:47:46','2022-04-25 09:47:46'),(2,'Bustes','this is a cool buste','Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh.','2022-04-25 09:48:28','2022-04-25 09:48:28'),(3,'Figures en pied','this is a cool figure','Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.','2022-04-25 09:49:10','2022-04-25 09:49:10'),(4,'Grands Formats','this is a cool grand format','Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat.','2022-04-25 09:49:45','2022-04-25 09:49:45'),(5,'Bronze','this is a cool bronze','Sed porttitor lectus nibh. Proin eget tortor risus. Sed porttitor lectus nibh.','2022-04-25 09:50:17','2022-04-25 09:50:17'),(6,'Résine colorée','this is a cool résine','Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.','2022-04-25 09:51:00','2022-04-25 09:51:00'),(7,'Les Elfes','Quisque velit nisi, pretium ut lacinia in','Elementum id enim. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2022-04-27 10:32:38','2022-04-27 10:32:38'),(8,'Série Autre-Monde','Curabitur arcu erat','Accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2022-04-27 10:33:22','2022-04-27 10:33:22'),(9,'Maternités','Lorem ipsum dolor','Sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.','2022-04-27 10:34:29','2022-04-27 10:34:29'),(10,'\'Les Belles\'','Sed porttitor lectus nibh','Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.','2022-04-27 10:35:35','2022-04-27 10:35:35'),(11,'Rakus','Quisque velit nisi','Pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit.','2022-04-27 10:37:30','2022-04-27 10:37:30'),(12,'Sanguines et petits formats','Quisque velit nisi','Pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt.','2022-04-27 10:38:26','2022-04-27 10:38:26'),(13,'Pâtes de verre','Mauris blandit','Aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus.','2022-04-27 10:39:24','2022-04-27 10:39:24'),(14,'Bronze et cristal','Cras ultricies ligula','Sed magna dictum porta. Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2022-04-27 10:40:24','2022-04-27 10:40:24'),(15,'Porcelaine émaillée','Donec sollicitudin molestie malesuada','Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.','2022-04-27 10:42:01','2022-04-27 10:42:01'),(16,'Cire patinée','Donec sollicitudin molestie malesuada','Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.','2022-04-27 10:42:35','2022-04-27 10:42:35'),(17,'Terre cuite','Nulla quis lorem ut','Libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt.','2022-04-27 10:43:56','2022-04-27 10:43:56'),(18,'Raku polychrome','Donec rutrum congue','Leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.','2022-04-27 10:44:34','2022-04-27 10:44:34'),(19,'Raku et résine','Vestibulum ac diam','Sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus.','2022-04-27 10:45:16','2022-04-27 10:45:16'),(20,'Mobilier d’artiste','Nulla porttitor accumsan tincidunt','Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.','2022-04-27 10:45:56','2022-04-27 10:45:56'),(21,'Vasques','Nulla quis lorem ut','Libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada.','2022-04-27 10:46:25','2022-04-27 10:46:25'),(22,'Sculptures lumineuses','Quisque velit nisi','Pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.','2022-04-27 10:47:09','2022-04-27 10:47:09'),(23,'Sculptures de verre','Proin eget tortor risus','Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat.','2022-04-27 10:47:46','2022-04-27 10:47:46'),(24,'Panneaux de verre','Curabitur aliquet quam','Id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.','2022-04-27 10:48:29','2022-04-27 10:48:29'),(25,'Trophées','Proin eget tortor risus','Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.','2022-04-27 10:49:13','2022-04-27 10:49:13');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collections`
--

DROP TABLE IF EXISTS `collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collections`
--

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;
INSERT INTO `collections` VALUES (1,'Sculptures','this is a cool sculpture','Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','2022-04-25 09:41:36','2022-04-25 09:41:36'),(2,'Oeuvres graphiques','this is a cool oeuvre','Proin eget tortor risus. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta.','2022-04-25 09:42:11','2022-04-25 09:42:11'),(3,'Camille.S, rencontre avec Camille Claudel','this is a cool rencontre','Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.','2022-04-25 09:42:43','2022-04-25 09:42:43'),(4,'Architecture d’intérieur','this is a cool architecture','Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim.','2022-04-25 09:43:40','2022-04-25 09:43:40'),(5,'Verre & Cristal','these are a cool verre & cristal','Nulla quis lorem ut libero malesuada feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.','2022-04-25 09:44:33','2022-04-25 09:44:33');
/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (177,'2014_10_12_000000_create_users_table',1),(178,'2014_10_12_100000_create_password_resets_table',1),(179,'2019_08_19_000000_create_failed_jobs_table',1),(180,'2019_12_14_000001_create_personal_access_tokens_table',1),(181,'2021_12_29_141217_create_collections_table',1),(182,'2021_12_29_141307_create_actualites_table',1),(183,'2022_01_03_101634_create_categories_table',1),(184,'2022_01_03_101731_create_oeuvres_table',1),(185,'2022_01_03_102143_create_photos_table',1),(186,'2022_01_17_095805_create_contacts_table',1),(187,'2022_01_17_110518_create_messages_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oeuvres`
--

DROP TABLE IF EXISTS `oeuvres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oeuvres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `collection_id` bigint(20) unsigned NOT NULL,
  `categorie_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oeuvres_collection_id_foreign` (`collection_id`),
  KEY `oeuvres_categorie_id_foreign` (`categorie_id`),
  CONSTRAINT `oeuvres_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `oeuvres_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oeuvres`
--

LOCK TABLES `oeuvres` WRITE;
/*!40000 ALTER TABLE `oeuvres` DISABLE KEYS */;
INSERT INTO `oeuvres` VALUES (1,'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.','Mauris blandit','Donec sollicitudin molestie malesuada.','2022-04-25 00:00:00',1,1,1,'2022-04-25 10:04:04','2022-04-27 11:20:50'),(2,'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.','Pellentesque in ipsum','Id orci porta dapibus','2022-04-25 00:00:00',1,3,15,'2022-04-25 10:05:27','2022-04-27 11:18:57'),(7,'Sed sit amet dui. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada.','Vestibulum ac diam','Sit amet quam vehicula elementum','2022-04-25 00:00:00',1,5,21,'2022-04-25 10:47:09','2022-04-27 11:15:53'),(9,'Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat.','Donec rutrum','Congue leo eget malesuada','2022-04-25 00:00:00',1,5,25,'2022-04-25 10:48:48','2022-04-27 11:13:47'),(10,'Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.','Mauris blandit aliquet elit','Eget tincidunt nibh pulvinar a','2022-04-25 00:00:00',1,3,13,'2022-04-25 10:50:13','2022-04-27 11:16:59'),(11,'Lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat.','Nulla porttitor accumsan tincidunt','Vivamus magna justo','2022-04-25 00:00:00',1,5,24,'2022-04-25 10:51:12','2022-04-27 11:14:32'),(12,'Posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada.','Vestibulum ante ipsum primis','In faucibus orci luctus et ultrices','2022-04-25 00:00:00',1,4,20,'2022-04-25 10:52:23','2022-04-27 11:18:19'),(13,'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.','Donec rutrum congue','Leo eget malesuada','2022-04-25 00:00:00',1,3,14,'2022-04-25 10:53:28','2022-04-27 11:17:16'),(16,'Tincidunt nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.','Sed porttitor lectus nibh','Nulla porttitor accumsan','2022-04-25 00:00:00',1,1,7,'2022-04-25 10:56:49','2022-04-27 11:21:13'),(18,'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.','Nulla quis lorem','Ut libero malesuada feugiat','2022-04-26 00:00:00',1,3,5,'2022-04-26 11:23:07','2022-04-27 11:16:16'),(19,'Molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.','Donec sollicitudin','Molestie malesuada donec sollicitudin','2022-04-26 00:00:00',1,5,23,'2022-04-26 11:24:27','2022-04-27 11:15:01'),(20,'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.','Curabitur non nulla','Sit amet nisl tempus convallis quis ac lectus.','2022-04-26 00:00:00',1,1,8,'2022-04-26 11:29:40','2022-04-27 11:21:32'),(21,'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta.','Donec rutrum congue','Leo eget malesuada','2022-04-26 00:00:00',1,2,12,'2022-04-26 11:30:48','2022-04-27 13:49:58'),(23,'Egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.','Praesent sapien massa','Convallis a pellentesque nec','2022-04-26 00:00:00',1,5,22,'2022-04-26 11:34:03','2022-04-27 11:15:21'),(24,'Egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.','Praesent sapien massa','Convallis a pellentesque nec','2022-05-05 00:00:00',1,5,25,'2022-05-05 16:11:11','2022-05-05 16:11:11'),(25,'orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus.','Vestibulum ante ipsum','primis in faucibus','2022-05-04 00:00:00',1,5,25,'2022-05-05 16:13:03','2022-05-05 16:13:03');
/*!40000 ALTER TABLE `oeuvres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oeuvre_id` bigint(20) unsigned DEFAULT NULL,
  `collection_id` bigint(20) unsigned DEFAULT NULL,
  `categorie_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photos_oeuvre_id_foreign` (`oeuvre_id`),
  KEY `photos_collection_id_foreign` (`collection_id`),
  KEY `photos_categorie_id_foreign` (`categorie_id`),
  CONSTRAINT `photos_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `photos_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE,
  CONSTRAINT `photos_oeuvre_id_foreign` FOREIGN KEY (`oeuvre_id`) REFERENCES `oeuvres` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'collections/sculptures.jpg',NULL,1,NULL,'2022-04-25 09:41:36','2022-04-25 09:41:36'),(2,'collections/oeuvres-graphiques.jpg',NULL,2,NULL,'2022-04-25 09:42:11','2022-04-25 09:42:11'),(3,'collections/camilles-rencontre-avec-camille-claudel.jpg',NULL,3,NULL,'2022-04-25 09:42:43','2022-04-25 09:42:43'),(4,'collections/architecture-dinterieur.jpg',NULL,4,NULL,'2022-04-25 09:43:40','2022-04-25 09:43:40'),(5,'collections/verre-cristal.jpg',NULL,5,NULL,'2022-04-25 09:44:33','2022-04-25 09:44:33'),(6,'categories/monuments.jpg',NULL,NULL,1,'2022-04-25 09:47:46','2022-04-25 09:47:46'),(7,'categories/bustes.jpg',NULL,NULL,2,'2022-04-25 09:48:28','2022-04-25 09:48:28'),(8,'categories/figures-en-pied.jpg',NULL,NULL,3,'2022-04-25 09:49:10','2022-04-25 09:49:10'),(9,'categories/grands-formats.jpg',NULL,NULL,4,'2022-04-25 09:49:45','2022-04-25 09:49:45'),(10,'categories/bronze.jpg',NULL,NULL,5,'2022-04-25 09:50:17','2022-04-25 09:50:17'),(11,'categories/resine-coloree.jpg',NULL,NULL,6,'2022-04-25 09:51:00','2022-04-25 09:51:00'),(15,'oeuvres/pellentesque-in-ipsum1.jpg',2,NULL,NULL,'2022-04-25 10:05:27','2022-04-25 10:05:27'),(16,'oeuvres/pellentesque-in-ipsum2.jpg',2,NULL,NULL,'2022-04-25 10:05:28','2022-04-25 10:05:28'),(17,'oeuvres/pellentesque-in-ipsum3.jpg',2,NULL,NULL,'2022-04-25 10:05:28','2022-04-25 10:05:28'),(24,'oeuvres/vestibulum-ac-diam1.jpg',7,NULL,NULL,'2022-04-25 10:47:09','2022-04-27 16:08:37'),(25,'oeuvres/vestibulum-ac-diam1.jpg',7,NULL,NULL,'2022-04-25 10:47:09','2022-04-27 16:08:37'),(26,'oeuvres/vestibulum-ac-diam3.jpg',7,NULL,NULL,'2022-04-25 10:47:09','2022-04-25 10:47:09'),(30,'oeuvres/donec-rutrum1.jpg',9,NULL,NULL,'2022-04-25 10:48:48','2022-04-25 10:48:48'),(31,'oeuvres/donec-rutrum2.jpg',9,NULL,NULL,'2022-04-25 10:48:48','2022-04-25 10:48:48'),(32,'oeuvres/donec-rutrum3.jpg',9,NULL,NULL,'2022-04-25 10:48:48','2022-04-25 10:48:48'),(33,'oeuvres/mauris-blandit-aliquet-elit1.jpg',10,NULL,NULL,'2022-04-25 10:50:13','2022-04-25 10:50:13'),(34,'oeuvres/mauris-blandit-aliquet-elit2.jpg',10,NULL,NULL,'2022-04-25 10:50:13','2022-04-25 10:50:13'),(35,'oeuvres/mauris-blandit-aliquet-elit3.jpg',10,NULL,NULL,'2022-04-25 10:50:13','2022-04-25 10:50:13'),(36,'oeuvres/nulla-porttitor-accumsan-tincidunt1.jpg',11,NULL,NULL,'2022-04-25 10:51:12','2022-04-25 10:51:12'),(37,'oeuvres/nulla-porttitor-accumsan-tincidunt2.jpg',11,NULL,NULL,'2022-04-25 10:51:12','2022-04-25 10:51:12'),(38,'oeuvres/nulla-porttitor-accumsan-tincidunt3.jpg',11,NULL,NULL,'2022-04-25 10:51:12','2022-04-25 10:51:12'),(39,'oeuvres/vestibulum-ante-ipsum-primis1.jpg',12,NULL,NULL,'2022-04-25 10:52:23','2022-04-25 10:52:23'),(40,'oeuvres/vestibulum-ante-ipsum-primis2.jpg',12,NULL,NULL,'2022-04-25 10:52:23','2022-04-25 10:52:23'),(41,'oeuvres/vestibulum-ante-ipsum-primis3.jpg',12,NULL,NULL,'2022-04-25 10:52:23','2022-04-25 10:52:23'),(42,'oeuvres/donec-rutrum-congue1.jpg',13,NULL,NULL,'2022-04-25 10:53:28','2022-04-25 10:53:28'),(43,'oeuvres/donec-rutrum-congue2.jpg',13,NULL,NULL,'2022-04-25 10:53:28','2022-04-25 10:53:28'),(44,'oeuvres/donec-rutrum-congue3.jpg',13,NULL,NULL,'2022-04-25 10:53:28','2022-04-25 10:53:28'),(45,'oeuvres/donec-rutrum-congue4.jpg',13,NULL,NULL,'2022-04-25 10:53:28','2022-04-25 10:53:28'),(53,'oeuvres/sed-porttitor-lectus-nibh1.jpg',16,NULL,NULL,'2022-04-25 10:56:49','2022-04-25 10:56:49'),(54,'oeuvres/sed-porttitor-lectus-nibh2.jpg',16,NULL,NULL,'2022-04-25 10:56:49','2022-04-25 10:56:49'),(55,'oeuvres/sed-porttitor-lectus-nibh3.jpg',16,NULL,NULL,'2022-04-25 10:56:49','2022-04-25 10:56:49'),(56,'oeuvres/sed-porttitor-lectus-nibh4.jpg',16,NULL,NULL,'2022-04-25 10:56:49','2022-04-25 10:56:49'),(57,'oeuvres/sed-porttitor-lectus-nibh5.jpg',16,NULL,NULL,'2022-04-25 10:56:49','2022-04-25 10:56:49'),(62,'oeuvres/nulla-quis-lorem1.jpg',18,NULL,NULL,'2022-04-26 11:23:07','2022-04-26 11:23:07'),(63,'oeuvres/nulla-quis-lorem2.jpg',18,NULL,NULL,'2022-04-26 11:23:07','2022-04-26 11:23:07'),(64,'oeuvres/nulla-quis-lorem3.jpg',18,NULL,NULL,'2022-04-26 11:23:07','2022-04-26 11:23:07'),(65,'oeuvres/donec-sollicitudin1.jpg',19,NULL,NULL,'2022-04-26 11:24:27','2022-04-26 11:24:27'),(66,'oeuvres/donec-sollicitudin2.jpg',19,NULL,NULL,'2022-04-26 11:24:27','2022-04-26 11:24:27'),(67,'oeuvres/donec-sollicitudin3.jpg',19,NULL,NULL,'2022-04-26 11:24:27','2022-04-26 11:24:27'),(68,'oeuvres/donec-sollicitudin4.jpg',19,NULL,NULL,'2022-04-26 11:24:27','2022-04-26 11:24:27'),(69,'oeuvres/curabitur-non-nulla1.jpg',20,NULL,NULL,'2022-04-26 11:29:40','2022-04-26 11:29:40'),(70,'oeuvres/curabitur-non-nulla2.jpg',20,NULL,NULL,'2022-04-26 11:29:40','2022-04-26 11:29:40'),(71,'oeuvres/curabitur-non-nulla3.jpg',20,NULL,NULL,'2022-04-26 11:29:40','2022-04-26 11:29:40'),(72,'oeuvres/curabitur-non-nulla4.jpg',20,NULL,NULL,'2022-04-26 11:29:40','2022-04-26 11:29:40'),(73,'oeuvres/donec-rutrum-congue1.jpg',21,NULL,NULL,'2022-04-26 11:30:48','2022-04-26 11:30:48'),(74,'oeuvres/donec-rutrum-congue2.jpg',21,NULL,NULL,'2022-04-26 11:30:48','2022-04-26 11:30:48'),(75,'oeuvres/donec-rutrum-congue3.jpg',21,NULL,NULL,'2022-04-26 11:30:48','2022-04-26 11:30:48'),(80,'oeuvres/praesent-sapien-massa1.jpg',23,NULL,NULL,'2022-04-26 11:34:03','2022-04-26 11:34:03'),(81,'oeuvres/praesent-sapien-massa2.jpg',23,NULL,NULL,'2022-04-26 11:34:03','2022-04-26 11:34:03'),(83,'categories/les-elfes.jpg',NULL,NULL,7,'2022-04-27 10:32:38','2022-04-27 10:32:38'),(84,'categories/serie-autre-monde.jpg',NULL,NULL,8,'2022-04-27 10:33:22','2022-04-27 10:33:22'),(85,'categories/maternites.jpg',NULL,NULL,9,'2022-04-27 10:34:29','2022-04-27 10:34:29'),(86,'categories/les-belles.jpg',NULL,NULL,10,'2022-04-27 10:35:35','2022-04-27 10:35:35'),(87,'categories/rakus.jpg',NULL,NULL,11,'2022-04-27 10:37:30','2022-04-27 10:37:30'),(88,'categories/sanguines-et-petits-formats.jpg',NULL,NULL,12,'2022-04-27 10:38:26','2022-04-27 10:38:26'),(89,'categories/pates-de-verre.jpg',NULL,NULL,13,'2022-04-27 10:39:24','2022-04-27 10:39:24'),(90,'categories/bronze-et-cristal.jpg',NULL,NULL,14,'2022-04-27 10:40:24','2022-04-27 10:40:24'),(91,'categories/porcelaine-emaillee.jpg',NULL,NULL,15,'2022-04-27 10:42:01','2022-04-27 10:42:01'),(92,'categories/cire-patinee.jpg',NULL,NULL,16,'2022-04-27 10:42:35','2022-04-27 10:42:35'),(93,'categories/terre-cuite.jpg',NULL,NULL,17,'2022-04-27 10:43:56','2022-04-27 10:43:56'),(94,'categories/raku-polychrome.jpg',NULL,NULL,18,'2022-04-27 10:44:34','2022-04-27 10:44:34'),(95,'categories/raku-et-resine.jpg',NULL,NULL,19,'2022-04-27 10:45:16','2022-04-27 10:45:16'),(96,'categories/mobilier-dartiste.jpg',NULL,NULL,20,'2022-04-27 10:45:56','2022-04-27 10:45:56'),(97,'categories/vasques.jpg',NULL,NULL,21,'2022-04-27 10:46:25','2022-04-27 10:46:25'),(98,'categories/sculptures-lumineuses.jpg',NULL,NULL,22,'2022-04-27 10:47:09','2022-04-27 10:47:09'),(99,'categories/sculptures-de-verre.jpg',NULL,NULL,23,'2022-04-27 10:47:46','2022-04-27 10:47:46'),(100,'categories/panneaux-de-verre.jpg',NULL,NULL,24,'2022-04-27 10:48:29','2022-04-27 10:48:29'),(101,'categories/trophees.jpg',NULL,NULL,25,'2022-04-27 10:49:13','2022-04-27 10:49:13'),(102,'oeuvres/praesent-sapien-massa1.jpg',24,NULL,NULL,'2022-05-05 16:11:11','2022-05-05 16:11:11'),(103,'oeuvres/praesent-sapien-massa2.jpg',24,NULL,NULL,'2022-05-05 16:11:11','2022-05-05 16:11:11'),(104,'oeuvres/praesent-sapien-massa3.jpg',24,NULL,NULL,'2022-05-05 16:11:11','2022-05-05 16:11:11'),(105,'oeuvres/vestibulum-ante-ipsum1.jpg',25,NULL,NULL,'2022-05-05 16:13:03','2022-05-05 16:13:03'),(106,'oeuvres/vestibulum-ante-ipsum2.jpg',25,NULL,NULL,'2022-05-05 16:13:03','2022-05-05 16:13:03'),(107,'oeuvres/vestibulum-ante-ipsum3.jpg',25,NULL,NULL,'2022-05-05 16:13:03','2022-05-05 16:13:03');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','2022-04-25 09:37:05','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','RlndseI0A8','2022-04-25 09:37:05','2022-04-25 09:37:05',1);
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

-- Dump completed on 2022-05-10  7:40:40
