-- MariaDB dump 10.19-11.3.2-MariaDB, for Linux (x86_64)
--
-- Host: aws.connect.psdb.cloud    Database: festivaldb
-- ------------------------------------------------------
-- Server version	8.0.34-PlanetScale

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
-- Table structure for table `Artist`
--

DROP TABLE IF EXISTS `Artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Artist` (
  `ArtistID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Bio` text NOT NULL,
  `HeaderImg` varchar(100) NOT NULL,
  `ArtistImg1` varchar(100) NOT NULL,
  `ArtistImg2` varchar(100) NOT NULL,
  `PerformanceImg` varchar(100) NOT NULL,
  `Album1` varchar(100) NOT NULL,
  `Album2` varchar(100) NOT NULL,
  `Album3` varchar(100) NOT NULL,
  `Song1` varchar(100) NOT NULL,
  `Song2` varchar(100) NOT NULL,
  `Song3` varchar(100) NOT NULL,
  PRIMARY KEY (`ArtistID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Artist`
--

LOCK TABLES `Artist` WRITE;
/*!40000 ALTER TABLE `Artist` DISABLE KEYS */;
INSERT INTO `Artist` VALUES
(2,'Gumbo Kings','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/gumboKings.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(3,'Evolve','     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.     ','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/66007b91077c5.jpg','/img/jazz/artists/66007b797050f.jpg','/img/jazz/performances/evolve.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(4,'Ntjam Rosie','      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.      ','/img/jazz/artists/6600a732ab074.jpg','/img/jazz/artists/660087abe2c97.jpg','/img/jazz/artists/660087abe720e.jpg','/img/jazz/performances/6600a74412ae7.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(5,'Wicked Jazz Sounds','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/wickedJazzSounds.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(6,'Tom Thomsom Assemble','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/tomThompsonAssemble.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(7,'Jonna Frazer','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/jonnaFrazer.jpg','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(8,'Fox & The Mayors','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/foxAndTheMayors.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(9,'Uncle Sue','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/uncleSue.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(10,'Chris Allen','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/chrisAllen.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(11,'Myles Sanko','Myles Sanko, born on May 8, 1980, in Accra, is a British soul and jazz singer, songwriter, composer, producer, and cinematographer. Steeped in both Ghanaian and French heritage, his music embodies a rich tapestry of culture, passion, and unyielding resilience. His musical journey is one of evolution, from singing and rapping alongside DJs in nightclubs in his hometown of Cambridge to busking on the city\'s streets. These humble beginnings served as a stepping stone to a more expansive career.In 2013 he independently recorded and released his debut album, \"Born In Black & White,\" on his own record label, 213 Music. This bold move caught the attention of Légère Recordings, P-Vine Records, and Dox Records, which recognized his potential and signed a licensing deal with him. Under their banner, he released a series of albums, including the soulful \"Forever Dreaming\" in 2014, the introspective \"Just Being Me\" in 2016, the heartfelt \"Memories Of Love\" in 2021, and the captivating \"Live at Philharmonie Luxembourg\" in 2023.','/img/jazz/artists/mylesSankoHeader.png','/img/jazz/artists/mylesSanko1.png','/img/jazz/artists/mylesSanko2.png','/img/jazz/performances/mylesSanko.png','2wob0s3WIRpsvYHSpDqywa','1ZQMYhEAylDE7Af6iEtIty','3BSt7oYQhijrtcoeWr7BUc','1oU7DOcuVs4TqnewtTgR1P','6uL0ZXwr17RgsMRmXKYY11','66whY3xoQgrvmpQgCvFNsv'),
(12,'Ruis Soundsystem','    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.    ','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/ruisSoundsystem.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(13,'The Family XL','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/theFamilyXL.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(14,'Gare du Nord','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/gareDuNord.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(15,'Rilan & The Bombadiers','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/rilanAndTheBombadiers.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(16,'Soul Six','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/soulSix.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(17,'Han Bennink','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/hannBennink.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(18,'The Nordanians','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non mi ut est mollis viverra ac eget orci. Sed ornare neque mauris, quis hendrerit est sodales non. Curabitur accumsan, nibh non accumsan aliquet, lectus justo ornare mi, in ornare lectus mi nec odio. Sed sit amet lorem bibendum, convallis est eu, condimentum massa. Nam non eleifend lorem. Cras id sem dapibus, cursus felis quis, fermentum sem. Nam non urna ante. Vivamus rhoncus magna sit amet maximus dapibus. Donec vehicula pulvinar diam. Quisque pharetra fermentum nulla nec ornare. Maecenas tortor eros, lacinia vitae egestas at, ultrices non neque. Nullam iaculis, arcu at pulvinar vulputate, augue orci fermentum mauris, et varius est elit nec quam.\r\n\r\nEtiam cursus sapien a metus accumsan malesuada. Etiam dui quam, fermentum quis risus eu, semper mattis sapien. Suspendisse euismod condimentum sollicitudin. Sed posuere lorem a felis porttitor, quis pulvinar justo sodales. Donec vulputate ultrices ex.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/theNordanians.jpg','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(19,'Lilith Merlot','Known for her timeless voice, Dutch singer and songwriter Lilith Merlot has been enchanted by harmony and melody from a young age. Her mother was a classical violinist and, as a young girl, Lilith often joined her mother on tour through Europe. During her Jazz vocals studies at the Rotterdam Conservatory, Lilith performed in front of American singer Renée Neufville, who remarked: “Your voice is just like a Merlot; it’s so warm, deep, and round”. This inspired Lilith to use Merlot as her stage name. Since releasing her debut EP in 2017, Lilith has been experimenting with various genres, from Jazz to Pop and Soul, influenced by Lizz Wright, Jeff Buckley, and Norah Jones, to name a few, creating music reminiscent of Nina Simone, Melody Gardot, and Madeleine Peyroux. With nearly 5 million streams across platforms, her music has aired across a number of stations under the established Netherlands public broadcaster NPO, earning spins on NPO Soul & Jazz, NPO 3FM Radio and Sublime FM.','/img/jazz/artists/lilithMerlotHeader.png','/img/jazz/artists/lilithMerlot1.png','/img/jazz/artists/lilithMerlot2.png','/img/jazz/performances/lilithMerlot.png','2LsarF7MWgoNLK8DsCC1d9','3IYw1yRBBNYXGf2XLx1kl4','2AWCbsMHCCW6VFd3LFz9D1','5Ck86xT1yXsPRi1vRUTECa','3d4k38C0dO6BWOkPn62eey','7Iku7xW9nlXg6qaMi3xDV2'),
(22,'ssss','fnkkmflffflf','/img/jazz/artists/6600bc6a74f83.jpg','/img/jazz/artists/6600bc6a7742c.jpg','/img/jazz/artists/6600bc6a79141.jpg','/img/jazz/performances/6600bc6a7aab8.jpg','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P');
/*!40000 ALTER TABLE `Artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ContactInfo`
--

DROP TABLE IF EXISTS `ContactInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ContactInfo` (
  `ContactID` int NOT NULL AUTO_INCREMENT,
  `Address` text,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `WebsiteAddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ContactID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ContactInfo`
--

LOCK TABLES `ContactInfo` WRITE;
/*!40000 ALTER TABLE `ContactInfo` DISABLE KEYS */;
INSERT INTO `ContactInfo` VALUES
(1,'Papentorenvest 1 a\r\n2011 AV Haarlem\r\nThe Netherlands','023 545 0259','info@molenadriaan.nl','http://www.molenadriaan.nl/');
/*!40000 ALTER TABLE `ContactInfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DetailPage`
--

DROP TABLE IF EXISTS `DetailPage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DetailPage` (
  `DetailPageID` int NOT NULL AUTO_INCREMENT,
  `HeaderImage` varchar(255) DEFAULT NULL,
  `HeaderAlt` varchar(255) DEFAULT NULL,
  `WhereAreWeTitle` varchar(255) DEFAULT NULL,
  `MapLocationImage` varchar(255) DEFAULT NULL,
  `MapLocationAlt` varchar(255) DEFAULT NULL,
  `ImageBeforeTitle` varchar(255) DEFAULT NULL,
  `ImageBefore` varchar(255) DEFAULT NULL,
  `ImageBeforeAlt` varchar(255) DEFAULT NULL,
  `ImageAfterTitle` varchar(255) DEFAULT NULL,
  `ImageAfter` varchar(255) DEFAULT NULL,
  `ImageAfterAlt` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `WebsiteAddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DetailPageID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DetailPage`
--

LOCK TABLES `DetailPage` WRITE;
/*!40000 ALTER TABLE `DetailPage` DISABLE KEYS */;
INSERT INTO `DetailPage` VALUES
(1,'/img/page2/header.jpg','Header Image for Page 2','Where are we?','/img/page2/map.png','Location of Church of St. Bavo','Before Image Title for Page 2','/img/page2/before.jpg','Before Image Alt for Page 2','After Image Title for Page 2','/img/page2/after.jpg','After Image Alt for Page 2','Address for Page 2','023 545 0259','info@molenadriaan.nl','Website Address for Page 2'),
(2,'/img/page3/header.jpg','Header Image for Page 3','Where Are We?','/img/page3/map.png','Location of Grote Markt','Before Image Title for Page 3','/img/page3/before.jpg','Before Image Alt for Page 3','After Image Title for Page 3','/img/page3/after.jpg','After Image Alt for Page 3','Address for Page 3','023 545 0259','info@molenadriaan.nl','Website Address for Page 3'),
(3,'/img/page4/header.jpg','Header Image for Page 4','Where Are We?','/img/page4/map.png','Map for Page 4','Before Image Title for Page 4','/img/page4/before.jpg','Before Image Alt for Page 4','After Image Title for Page 4','/img/page4/after.jpg','After Image Alt for Page 4','Address for Page 4','023 545 0259','info@molenadriaan.nl','Website Address for Page 4'),
(4,'/img/page5/header.jpg','Header Image for Page 5','Where Are We?','/img/page5/map.png','Map for Page 5','Before Image Title for Page 5','/img/page5/before.jpg','Before Image Alt for Page 5','After Image Title for Page 5','/img/page5/after.jpg','After Image Alt for Page 5','Address for Page 5','023 545 0259','info@molenadriaan.nl','Website Address for Page 5'),
(5,'/img/page6/header.jpg','Header Image for Page 6','Where Are We?','/img/page6/map.png','Map for Page 6','Before Image Title for Page 6','/img/page6/before.jpg','Before Image Alt for Page 6','After Image Title for Page 6','/img/page6/after.jpg','After Image Alt for Page 6','Address for Page 6','023 545 0259','info@molenadriaan.nl','Website Address for Page 6'),
(6,'/img/page7/header.jpg','Header Image for Page 7','Where Are We?','/img/page7/map.png','Map for Page 7','Before Image Title for Page 7','/img/page7/before.jpg','Before Image Alt for Page 7','After Image Title for Page 7','/img/page7/after.jpg','After Image Alt for Page 7','Address for Page 7','023 545 0259','info@molenadriaan.nl','Website Address for Page 7'),
(7,'/img/history/molen-cop.png','An image with Molen De Adriaan','Where Are We?','/img/history/mapWithout.png','Molen De Adriaan Map','Before fire','/img/history/before-fire.jpg','Image Before Fire','After Fire','/img/history/after-fire.png','Image After Fire','Papentorenvest 1 a 2011 AV Haarlem The Netherlands','023 545 0259','info@molenadriaan.nl','http://www.molenadriaan.nl/'),
(8,'/img/page8/header.jpg','Header Image for Page 8','Where Are We?','/img/page8/map.png','Map for Page 8','Before Image Title for Page 8','/img/page8/before.jpg','Before Image Alt for Page 8','After Image Title for Page 8','/img/page8/after.jpg','After Image Alt for Page 8','Address for Page 8','023 545 0259','info@molenadriaan.nl','Website Address for Page 8'),
(9,'/img/page9/header.jpg','Header Image for Page 9','Where Are We?','/img/page9/map.png','Map for Page 9','Before Image Title for Page 9','/img/page9/before.jpg','Before Image Alt for Page 9','After Image Title for Page 9','/img/page9/after.jpg','After Image Alt for Page 9','Address for Page 9','023 545 0259','info@molenadriaan.nl','Website Address for Page 9');
/*!40000 ALTER TABLE `DetailPage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FestivalEvent`
--

DROP TABLE IF EXISTS `FestivalEvent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FestivalEvent` (
  `FestivalEventID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Description` text,
  `ImgPath` varchar(100) DEFAULT NULL,
  `StartDate` datetime DEFAULT NULL,
  `EndDate` datetime DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`FestivalEventID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FestivalEvent`
--

LOCK TABLES `FestivalEvent` WRITE;
/*!40000 ALTER TABLE `FestivalEvent` DISABLE KEYS */;
INSERT INTO `FestivalEvent` VALUES
(1,'Haarlem Jazz','Haarlem Jazz, a cornerstone of our city\'s festival calendar, comes alive as we revive past echoes at Patronaat. Join us in this musical journey, where renowned bands recreate the festival\'s essence. Feel the vibrant rhythms and melodies on Sunday at Grote Markt, where bands perform for all, free of charge!','/img/jazz/jazzHeader.png','2024-07-25 18:00:00','2024-07-28 00:00:00','Festival in Haarlem 2024 schedule'),
(2,'Yummy','Dive into a week of tasty cuisine where local restaurants serve up their best dishes and special sessions.\r\n\r\nJoin us for a celebration of good food and great company.\r\n\r\nCome bring your friends and family and let’s enjoy this delicious moment together!','/img/yummy/yummyHeader.png','2024-07-25 17:00:00','2024-07-28 00:00:00','Come taste our yummy food!'),
(3,'A Stroll Through History','Join us on a special adventure through Haarlem\'s history! \r\n\r\nWhat Will You Find?\r\n\r\nOld Buildings: Walk by ancient buildings and streets, each with its own interesting story.\r\n\r\nFriendly Guides: Our guides know everything about Haarlem\'s past. They\'ll tell you cool stories!\r\n\r\nRich Cultural Heritage: Discover how art, trade, and people shaped our city. Find hidden treasures along the way!','/img/history/maarkt.png','2024-07-25 10:00:00','2024-07-28 18:30:00','Join us on a special adventure through Haarlem\'s history! ');
/*!40000 ALTER TABLE `FestivalEvent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HistoryDays`
--

DROP TABLE IF EXISTS `HistoryDays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HistoryDays` (
  `DayID` int NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `DayOfTheWeek` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HistoryDays`
--

LOCK TABLES `HistoryDays` WRITE;
/*!40000 ALTER TABLE `HistoryDays` DISABLE KEYS */;
INSERT INTO `HistoryDays` VALUES
(1,'2024-07-25','Thursday'),
(2,'2024-07-26','Friday'),
(3,'2024-07-27','Saturday'),
(4,'2024-07-28','Sunday');
/*!40000 ALTER TABLE `HistoryDays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HistoryHome`
--

DROP TABLE IF EXISTS `HistoryHome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HistoryHome` (
  `HomeID` int NOT NULL AUTO_INCREMENT,
  `HeaderImage` varchar(255) DEFAULT NULL,
  `ImageAlt` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `SubTitle` varchar(255) DEFAULT NULL,
  `DiscoverTitle` varchar(255) DEFAULT NULL,
  `DiscoverText` text,
  `Location` varchar(255) DEFAULT NULL,
  `Dates` varchar(255) DEFAULT NULL,
  `Times` varchar(255) DEFAULT NULL,
  `IndividualPrice` decimal(10,2) DEFAULT NULL,
  `FamilyPrice` decimal(10,2) DEFAULT NULL,
  `GroupInfo` varchar(255) DEFAULT NULL,
  `VideoMp4` varchar(255) DEFAULT NULL,
  `VideoWebm` varchar(255) DEFAULT NULL,
  `CityWalkTitle` varchar(255) DEFAULT NULL,
  `CityWalkText` text,
  `CityWalkImage` varchar(255) DEFAULT NULL,
  `CityWalkImageAlt` varchar(255) DEFAULT NULL,
  `GuidesTitle` varchar(255) DEFAULT NULL,
  `GuidesText` text,
  `NoteTitle` varchar(255) DEFAULT NULL,
  `NoteText` text,
  `MapImage` varchar(255) DEFAULT NULL,
  `MapAlt` varchar(255) DEFAULT NULL,
  `WheelchairTitle` varchar(255) DEFAULT NULL,
  `WheelchairText` text,
  `StartLocationImage` varchar(255) DEFAULT NULL,
  `StartLocationAlt` varchar(255) DEFAULT NULL,
  `StartLocationText` text,
  `ContactTitle` varchar(255) DEFAULT NULL,
  `ContactSubtitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`HomeID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HistoryHome`
--

LOCK TABLES `HistoryHome` WRITE;
/*!40000 ALTER TABLE `HistoryHome` DISABLE KEYS */;
INSERT INTO `HistoryHome` VALUES
(1,'/img/history/walky.png','A group of people exploring Haarlem','A stroll through history','Let\'s explore Haarlem','Discover Haarlem through the eyes of a local!','Come and explore Haarlem like a local on our next tour! Discover this charming town known as \'Little Amsterdam. Walk around the city center without cars, learn about the famous Dutch flower\'s history, explore the art influence of painter Frans Hals, and find hidden spots loved by locals. Join us for our next tour and experience the historic vibes of 17th-century Haarlem.','Meeting point: Church of St. Bavo','July:\r\n26th, 27th, 28,th, 29th','Time:\r\n10:00, 13:00, 16:00',17.50,60.00,'Group:\r\n12 people & 1 guide','/video/history/videoHaarlem.mp4','/video/history/videoHaarlem.webm','City walk','Embark on a captivating journey through Haarlem\'s with our guided tours available in English, Dutch and Chinese at 10:00, 13:00, and 16:00. These tours will take you on a fascinating exploration of various sites across Haarlem, offering insights into its rich history and culture. \n\nWith limited spots (12 per tour), ensure your place by reserving your tickets in advance. The duration of this walking tour will be approximately 2.5 hours, including a 15-minute break with refreshments.','/img/history/walk2.png','Tour in Haarlem','Meet our guides','Get set for a unique city tour in Haarlem with our guides! Lisa, Annet, and Jan-Willem will be your Dutch-speaking guides, while Deirdre, Frederic, and William will share stories in English, and Kim and Susan will bring their Chinese perspective. Explore historic places and lively streets, hearing tales in three different languages. It\'s a multicultural adventure right in the heart of the city!','Important note!','Due to the nature of this walk participants must be a minimum of 12 years old and no strollers are allowed. ','/img/history/mapWithout.png','Image with all the locations','Are you using a wheelchair?','We\'ve got you covered! Several of our featured venues are wheelchair accessible, ensuring everyone can explore Haarlem comfortably. Visit Church of St. Bavo, De Hallen, Proveniershof, Jopenkerk, Waalse Kerk Haarlem, Molen de Adriaan, and Amsterdamse Poort hassle-free.','/img/history/starting-point.png','Start Location','Church of St. Bavo Note: A giant flag will mark the exact starting location.','Have you attended one of our tours and wish to access the audio guide? ','Please provide your name and ticket number below.');
/*!40000 ALTER TABLE `HistoryHome` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HistoryLanguageType`
--

DROP TABLE IF EXISTS `HistoryLanguageType`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HistoryLanguageType` (
  `LanguageID` int NOT NULL AUTO_INCREMENT,
  `LanguageType` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`LanguageID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HistoryLanguageType`
--

LOCK TABLES `HistoryLanguageType` WRITE;
/*!40000 ALTER TABLE `HistoryLanguageType` DISABLE KEYS */;
INSERT INTO `HistoryLanguageType` VALUES
(1,'English'),
(2,'Dutch'),
(3,'Chinese');
/*!40000 ALTER TABLE `HistoryLanguageType` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `HistoryTicket`
--

DROP TABLE IF EXISTS `HistoryTicket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `HistoryTicket` (
  `TourID` int NOT NULL AUTO_INCREMENT,
  `DayID` int DEFAULT NULL,
  `LanguageID` int DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `TotalTickets` int DEFAULT NULL,
  `RemainingTickets` int DEFAULT NULL,
  PRIMARY KEY (`TourID`),
  KEY `DayID` (`DayID`),
  KEY `LanguageID` (`LanguageID`),
  CONSTRAINT `HistoryTicket_ibfk_1` FOREIGN KEY (`DayID`) REFERENCES `HistoryDays` (`DayID`),
  CONSTRAINT `HistoryTicket_ibfk_2` FOREIGN KEY (`LanguageID`) REFERENCES `HistoryLanguageType` (`LanguageID`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HistoryTicket`
--

LOCK TABLES `HistoryTicket` WRITE;
/*!40000 ALTER TABLE `HistoryTicket` DISABLE KEYS */;
INSERT INTO `HistoryTicket` VALUES
(1,1,1,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(2,1,1,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(3,1,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(4,1,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(5,1,1,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(6,1,1,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(7,1,2,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(8,1,2,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(9,1,1,'Session 3','2024-07-25 16:00:00','2024-07-25 18:30:00',12,12),
(10,1,1,'Session 3','2024-07-25 16:00:00','2024-07-25 18:30:00',12,12),
(11,1,2,'Session 3','2024-07-25 16:00:00','2024-07-25 18:30:00',12,12),
(12,1,2,'Session 3','2024-07-25 16:00:00','2024-07-25 18:30:00',12,12),
(13,2,1,'Session 1','2024-07-26 10:00:00','2024-07-26 12:30:00',12,12),
(14,2,2,'Session 1','2024-07-26 10:00:00','2024-07-26 12:30:00',12,12),
(15,2,1,'Session 2','2024-07-26 13:00:00','2024-07-26 15:30:00',12,12),
(16,2,2,'Session 2','2024-07-26 13:00:00','2024-07-26 15:30:00',12,12),
(17,2,3,'Session 2','2024-07-26 13:00:00','2024-07-26 15:30:00',12,12),
(18,2,1,'Session 3','2024-07-26 16:00:00','2024-07-26 18:30:00',12,12),
(19,2,2,'Session 3','2024-07-26 16:00:00','2024-07-26 18:30:00',12,12),
(20,3,1,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(21,3,1,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(22,3,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(23,3,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(24,3,1,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(25,3,1,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(26,3,2,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(27,3,2,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(28,3,3,'Session 2','2024-07-25 16:00:00','2024-07-25 18:30:00',12,12),
(29,3,1,'Session 3','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(30,3,2,'Session 3','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(31,3,3,'Session 3','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(32,4,1,'Session 1','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(33,4,1,'Session 1','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(34,4,2,'Session 1','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(35,4,2,'Session 1','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(36,4,3,'Session 1','2024-07-28 16:00:00','2024-07-28 18:30:00',12,12),
(37,4,1,'Session 2','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(38,4,1,'Session 2','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(39,4,2,'Session 2','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(40,4,2,'Session 2','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(41,4,3,'Session 2','2024-07-28 16:00:00','2024-07-28 18:30:00',12,12),
(42,4,1,'Session 3','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(43,4,1,'Session 3','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(44,4,2,'Session 3','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(45,4,2,'Session 3','2024-07-28 13:00:00','2024-07-28 15:30:00',12,12),
(46,4,3,'Session 3','2024-07-28 16:00:00','2024-07-28 18:30:00',12,12);
/*!40000 ALTER TABLE `HistoryTicket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `JazzDay`
--

DROP TABLE IF EXISTS `JazzDay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JazzDay` (
  `DayID` int NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `ImgPath` varchar(100) NOT NULL,
  `VenueID` int NOT NULL,
  `Note` text,
  PRIMARY KEY (`DayID`),
  KEY `VenueID` (`VenueID`),
  CONSTRAINT `JazzDay_ibfk_1` FOREIGN KEY (`VenueID`) REFERENCES `Venue` (`VenueID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `JazzDay`
--

LOCK TABLES `JazzDay` WRITE;
/*!40000 ALTER TABLE `JazzDay` DISABLE KEYS */;
INSERT INTO `JazzDay` VALUES
(1,'2024-07-25','/img/jazz/jazzDay1.png',1,NULL),
(2,'2024-07-26','/img/jazz/jazzDay2.png',1,NULL),
(3,'2024-07-27','/img/jazz/jazzDay3.png',1,NULL),
(4,'2024-07-28','/img/jazz/jazzDay4.png',2,'Free for all visitors. No reservation needed.');
/*!40000 ALTER TABLE `JazzDay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `JazzPass`
--

DROP TABLE IF EXISTS `JazzPass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JazzPass` (
  `JazzPassID` int NOT NULL AUTO_INCREMENT,
  `Price` decimal(10,2) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `EndDateTime` datetime NOT NULL,
  `Note` varchar(100) DEFAULT NULL,
  `TotalTickets` int NOT NULL,
  `AvailableTickets` int NOT NULL,
  PRIMARY KEY (`JazzPassID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `JazzPass`
--

LOCK TABLES `JazzPass` WRITE;
/*!40000 ALTER TABLE `JazzPass` DISABLE KEYS */;
INSERT INTO `JazzPass` VALUES
(1,80.00,'2024-07-25 00:00:00','2024-07-27 00:00:00','All-Access pass for Thu, Fri, Sat',30,30),
(2,35.00,'2024-07-25 00:00:00','2024-07-25 00:00:00','All-Access pass for Thursday',30,30),
(3,35.00,'2024-07-26 00:00:00','2024-07-26 00:00:00','All-Access pass for Friday',30,30),
(4,35.00,'2024-07-27 00:00:00','2024-07-27 00:00:00','All-Access pass for Saturday',30,30);
/*!40000 ALTER TABLE `JazzPass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Locations`
--

DROP TABLE IF EXISTS `Locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Locations` (
  `LocationID` int NOT NULL AUTO_INCREMENT,
  `DetailPageID` int DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`LocationID`),
  KEY `DetailPageID` (`DetailPageID`),
  CONSTRAINT `Locations_ibfk_1` FOREIGN KEY (`DetailPageID`) REFERENCES `DetailPage` (`DetailPageID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Locations`
--

LOCK TABLES `Locations` WRITE;
/*!40000 ALTER TABLE `Locations` DISABLE KEYS */;
INSERT INTO `Locations` VALUES
(10,1,'Church of St. Bavo'),
(11,2,'Grote Markt'),
(12,3,'De Hallen'),
(13,4,'Proveniershof'),
(14,5,'Jopenkerk'),
(15,6,'Waalse Kerk Haarlem'),
(16,7,'Molen de Adriaan'),
(17,8,'Amsterdamse Poort'),
(18,9,'Hofje van Bakenes');
/*!40000 ALTER TABLE `Locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Performance`
--

DROP TABLE IF EXISTS `Performance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Performance` (
  `PerformanceID` int NOT NULL AUTO_INCREMENT,
  `ArtistID` int NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `EndDateTime` datetime NOT NULL,
  `AvailableTickets` int NOT NULL,
  `DayID` int NOT NULL,
  `Details` varchar(50) DEFAULT NULL,
  `TotalTickets` int NOT NULL,
  PRIMARY KEY (`PerformanceID`),
  KEY `ArtistID` (`ArtistID`),
  KEY `DayID` (`DayID`),
  CONSTRAINT `Performance_ibfk_1` FOREIGN KEY (`ArtistID`) REFERENCES `Artist` (`ArtistID`),
  CONSTRAINT `Performance_ibfk_2` FOREIGN KEY (`DayID`) REFERENCES `JazzDay` (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Performance`
--

LOCK TABLES `Performance` WRITE;
/*!40000 ALTER TABLE `Performance` DISABLE KEYS */;
INSERT INTO `Performance` VALUES
(1,2,15.00,'2024-07-25 18:00:00','2024-07-25 19:00:00',0,1,'Main Hall',300),
(2,3,15.00,'2024-07-25 19:30:00','2024-07-25 20:30:00',0,1,'Main Hall',300),
(3,4,15.00,'2024-07-25 21:00:00','2024-07-25 22:00:00',300,1,'Main Hall',300),
(4,5,10.00,'2024-07-25 18:00:00','2024-07-25 19:00:00',200,1,'Second Hall',200),
(5,6,10.00,'2024-07-25 19:30:00','2024-07-25 20:30:00',200,1,'Second Hall',200),
(6,7,10.00,'2024-07-25 21:00:00','2024-07-25 22:00:00',200,1,'Second Hall',200),
(7,8,15.00,'2024-07-26 18:00:00','2024-07-26 19:00:00',300,2,'Main Hall',300),
(8,9,15.00,'2024-07-26 19:30:00','2024-07-26 20:30:00',300,2,'Main Hall',300),
(9,10,15.00,'2024-07-26 21:00:00','2024-07-26 22:00:00',300,2,'Main Hall',300),
(10,11,10.00,'2024-07-26 18:00:00','2024-07-26 19:00:00',200,2,'Second Hall',200),
(11,12,10.00,'2024-07-26 19:30:00','2024-07-26 20:30:00',200,2,'Second Hall',200),
(12,13,10.00,'2024-07-26 21:00:00','2024-07-26 22:00:00',200,2,'Second Hall',200),
(13,14,15.00,'2024-07-27 18:00:00','2024-07-27 19:00:00',300,3,'Main Hall',300),
(14,15,15.00,'2024-07-27 19:30:00','2024-07-27 20:30:00',300,3,'Main Hall',300),
(15,16,15.00,'2024-07-27 21:00:00','2024-07-27 22:00:00',300,3,'Main Hall',300),
(16,17,10.00,'2024-07-27 18:00:00','2024-07-27 19:00:00',200,3,'Second Hall',150),
(17,18,10.00,'2024-07-27 19:30:00','2024-07-27 20:30:00',200,3,'Second Hall',150),
(18,19,10.00,'2024-07-27 21:00:00','2024-07-27 22:00:00',200,3,'Second Hall',150),
(19,12,0.00,'2024-07-28 15:00:00','2024-07-28 16:00:00',0,4,NULL,0),
(20,5,0.00,'2024-07-28 16:00:00','2024-07-28 17:00:00',0,4,NULL,0),
(21,3,0.00,'2024-07-28 17:00:00','2024-07-28 18:00:00',0,4,NULL,0),
(22,18,0.00,'2024-07-28 18:00:00','2024-07-28 19:00:00',0,4,NULL,0),
(23,2,0.00,'2024-07-28 19:00:00','2024-07-28 20:00:00',0,4,NULL,0),
(24,14,0.00,'2024-07-28 20:00:00','2024-07-28 21:00:00',0,4,NULL,0);
/*!40000 ALTER TABLE `Performance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ResetToken`
--

DROP TABLE IF EXISTS `ResetToken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ResetToken` (
  `Token` char(36) NOT NULL DEFAULT (uuid()),
  `Email` varchar(255) DEFAULT NULL,
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Token`),
  UNIQUE KEY `unique_email` (`Email`),
  CONSTRAINT `ResetToken_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `User` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ResetToken`
--

LOCK TABLES `ResetToken` WRITE;
/*!40000 ALTER TABLE `ResetToken` DISABLE KEYS */;
/*!40000 ALTER TABLE `ResetToken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Restaurant`
--

DROP TABLE IF EXISTS `Restaurant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Restaurant` (
  `RestaurantID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SubTitle` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HeaderImg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `HeaderAlt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Category1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Category2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Category3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Location` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Stars` int NOT NULL,
  `FoodImg1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FoodAlt1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FoodImg2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FoodAlt2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FoodImg3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `FoodAlt3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SessionsADay` int NOT NULL,
  `SessionsDuration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SessionsStartTime` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `SessionsTotalSeats` int NOT NULL,
  `PriceAdult` decimal(10,2) NOT NULL,
  `PriceChild` decimal(10,2) NOT NULL,
  `Recipe` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `RecipeImg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `RecipeAlt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Telephone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ChamberOfCommerce` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`RestaurantID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Restaurant`
--

LOCK TABLES `Restaurant` WRITE;
/*!40000 ALTER TABLE `Restaurant` DISABLE KEYS */;
INSERT INTO `Restaurant` VALUES
(1,'Ratatouile','Food & Wine','img/yummy/RatatouileHeader.png','The inside of the ratatouile Restaurant, showcasing places to sit at and flowers.','French','Fish & Seafood','European','Spaarne 96, 2011 CL Haarlem',4,'img/yummy/RatatouileFood1.png','Food being displayed on a plate.','img/yummy/RatatouileFood2.png','Food being grilled looking tasty.','img/yummy/RatatouileFood3.png','Desert being displayed which looks very weird.',3,'2 hours','17:00',52,45.00,22.50,'Preheat oven to 190˚C. Slice eggplant, tomatoes, squash, and zucchini into approximately 1-mm rounds. Make sauce: Sauté onion, garlic, and bell peppers in olive oil until soft, Add crushed tomatoes, season, and stir in basil. Arrange veggies in alternating slices on sauce, Season. Make herb seasoning: Mix basil, garlic, parsley, thyme, salt, pepper, and olive oil, Spoon over veggies. Cover with foil and bake for 40 minutes. Uncover and bake for an additional 20 minutes until veggies are softened. Serve hot as a main or side. Reheat covered with foil at 180˚C for 15 minutes or microwave. Enjoy!','img/yummy/RatatouileRecipe.png','Ratatouile which you can get at Restaurant Ratatouile and also make for yourself being displayed.','023 542 7270','info@ratatouilefoodandwine.nl','58174923'),
(2,'Café de Roemer','Tasty drinks','img/yummy/CaféDeRoemerHeader.png','The outside of the Café De Roemer Restaurant, showcasing sunny places to sit.','Dutch','Fish & Seafood','European','Botermarkt 17, 2011 XL Haarlem',4,'img/yummy/CaféDeRoemerFood1.png','Onion soup.','img/yummy/CaféDeRoemerFood2.png','Hamburger on a plate.','img/yummy/CaféDeRoemerFood3.png','Meat.',3,'1 and a half hours','18:00',35,35.00,17.50,'Roast the pumpkin halves at 200°C (400°F) for 45-60 minutes until tender, Scoop out the flesh and set aside. In a large pot, sauté the chopped onion and minced garlic until softened, about 3-4 minutes, Add sliced carrot and diced potato, cook for another 5 minutes. Add the roasted pumpkin flesh, vegetable broth, ground cumin, ground coriander, and optional chili powder, Bring to a boil, then simmer for 20-25 minutes until vegetables are tender. Blend the soup until smooth using an immersion blender or regular blender. Season with salt and pepper to taste. Serve hot, garnished with fresh parsley or cilantro, Optionally, swirl in cream or coconut milk for added richness. Enjoy your Café de Roemer-inspired stuffed pumpkin soup!','img/yummy/CaféDeRoemerRecipe.png','Pumpkin soup which you can get at Café De Roemer and also make for yourself being displayed.','023 532 5267','info@cafederoemer.nl','91471338'),
(3,'Restaurant ML','Dining at its finest','img/yummy/RestaurantMLHeader.png','The inside of Restaurant ML, showcasing a classy place to eat food at.','Dutch','Fish & Seafood','European','Kleine Houtstraat 70, 2011 DR Haarlem',4,'img/yummy/RestaurantMLFood1.png','Food.','img/yummy/RestaurantMLFood2.png','Tomatoes on a plate.','img/yummy/RestaurantMLFood3.png','Some cool looking dish.',2,'2 hours','17:00',60,45.00,22.50,'Toss beef cubes with flour, salt, and pepper. Brown beef in batches in a large pot with oil. Cook onions and garlic until softened. Add carrots, celery, and mushrooms; cook for 5 minutes. Return beef to pot, Pour in broth and beer, add bay leaves and thyme, Simmer. Cover and cook on low heat for 2-3 hours, stirring occasionally. Adjust seasoning, Remove bay leaves. Serve hot, garnished with parsley, Enjoy with bread or mashed potatoes. Enjoy this comforting Haarlem-style beef stew!','img/yummy/RestaurantMLRecipe.png','Haarlem-style Beef stew.','023 512 3910','welkom@mlinhaarlem.nl','70276935'),
(4,'Restaurant Fris','Casual and cozy Fine Dining','img/yummy/RestaurantFrisHeader.png','The inside of the Fris Restaurant, showcasing places to sit at and flowers.','Dutch','French','European','Twijnderslaan 7, 2012 BG Haarlem',4,'img/yummy/RestaurantFrisFood1.png','Food being displayed on a plate.','img/yummy/RestaurantFrisFood2.png','A desert with pink and green looking food.','img/yummy/RestaurantFrisFood3.png','6 deserts being displayed on a plate, looking very tasty.',3,'1 and a half hours','17:30',45,45.00,22.50,'Preheat oven to 200°C. Cut pastry sheets into 10 rectangles each, Bake on lined trays, pressed between baking paper and another tray, for 35-40 minutes until golden, Cool on a wire rack.\r\nIn a saucepan, heat 200g caster sugar and 1 cup water until 120°C. Whisk eggs until thick, Pour hot sugar syrup into eggs, whisking for 10 mins until glossy. Roast strawberries with 50g sugar, vanilla, and pod for 15 mins, Cool. To serve, pipe mascarpone on half the pastry rectangles, add strawberries, syrup, and top with more pastry, Repeat and serve immediately. Enjoy!','img/yummy/RestaurantFrisRecipe.png','A dish which you can get at Restaurant Fris being displayed.','023 531 0717','info@restaurantfris.nl','88976483'),
(5,'Specktakel','Weird looking food!','img/yummy/SpecktakelHeader.png','The inside of Specktakel, showcasing a relaxing place to eat food at.','European','International','Asian','Spekstraat 4, 2011 HM Haarlem',3,'img/yummy/SpecktakelFood1.png','Beefy meal being displayed.','img/yummy/SpecktakelFood2.png','Food.','img/yummy/SpecktakelFood3.png','Desert on a burnt letter?.',3,'1 and a half hours','17:00',36,35.00,17.50,'Preheat oven to 180°C (350°F). Cook bacon until browned, Add onions and garlic; cook until softened. Layer half of the potatoes in a greased baking dish, Season with salt and pepper. Spread half of the bacon mixture over potatoes, Repeat layers. Combine cream and broth; pour over layers. Cover with foil and bake for 40-45 minutes. Remove foil, sprinkle with cheese, and bake for 10-15 more minutes. Garnish with chives before serving. Enjoy your Specktakel!','img/yummy/SpecktakelRecipe.png','Dutch Bacon and Potato Casserole.','023 532 3841','info@specktakel.nl','82057427'),
(6,'Grand Cafe Brinkman','Come eat with us!','img/yummy/GrandCafeBrinkmanHeader.png','The outside of GrandCafeBrinkman, showcasing a big and old building.','Dutch','European','Modern','Grote Markt 13, 2011 RC Haarlem',3,'img/yummy/GrandCafeBrinkmanFood1.png','Salad.','img/yummy/GrandCafeBrinkmanFood2.png','Salad with bacon.','img/yummy/GrandCafeBrinkmanFood3.png','Bread with chicken and salad.',3,'1 and a half hours','16:30',100,35.00,17.50,'Cook penne pasta; drain and set aside. Sauté chicken in olive oil until cooked; remove from skillet. Sauté onion and garlic; add bell peppers and tomatoes. Return chicken to skillet; pour in cream and simmer. Add cooked pasta, Parmesan, salt, and pepper; toss to combine. Serve hot, garnished with basil leaves. Enjoy your Grand Cafe Brinkman-style chicken pasta!','img/yummy/GrandCafeBrinkmanRecipe.png','Brinkman-style Chicken Pasta.','023 532 3111','info@grandcafebrinkmann.nl','34306461'),
(7,'Toujours','An experience!','img/yummy/ToujoursHeader.png','The inside of the restaurant Toujours, showcasing a stylish interior.','Dutch','Fish & Seafood','European','Oude Groenmarkt 10-12, 2011 HL Haarlem',3,'img/yummy/ToujoursFood1.png','Tasty looking food being served on a wooden plank.','img/yummy/ToujoursFood2.png','Looks yum.','img/yummy/ToujoursFood3.png','Beef cut in pieces.',3,'1 and a half hours','17:30',48,35.00,17.50,'Preheat oven to 200°C (400°F). Mix honey, soy sauce, olive oil, garlic, and ginger. Place salmon fillets in a baking dish. Pour honey-soy mixture over salmon, season with salt and pepper. Bake for 12-15 minutes. Optionally, brush with more glaze halfway through. Garnish with parsley or chives. Serve hot. Enjoy your Haarlem Honey-Glazed Salmon!','img/yummy/ToujoursRecipe.png','Honey Glazed Salmon.','023 532 1699','info@restauranttoujours.nl','61902144'),
(12,'guoi','go','ugo','oig','igo','goi','goi','goi',3,'gio','goio','gii','og','oig','goigoi',2,'3','4',2,41.00,12.00,'goi','goi','iog','gio','goi','goi');
/*!40000 ALTER TABLE `Restaurant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Session`
--

DROP TABLE IF EXISTS `Session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Session` (
  `SessionID` int NOT NULL AUTO_INCREMENT,
  `RestaurantID` int DEFAULT NULL,
  `DayID` int DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `TotalSeats` int DEFAULT NULL,
  `RemainingSeats` int DEFAULT NULL,
  PRIMARY KEY (`SessionID`),
  KEY `RestaurantID` (`RestaurantID`),
  KEY `DayID` (`DayID`),
  CONSTRAINT `Session_ibfk_1` FOREIGN KEY (`RestaurantID`) REFERENCES `Restaurant` (`RestaurantID`),
  CONSTRAINT `Session_ibfk_2` FOREIGN KEY (`DayID`) REFERENCES `YummyEventDays` (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Session`
--

LOCK TABLES `Session` WRITE;
/*!40000 ALTER TABLE `Session` DISABLE KEYS */;
INSERT INTO `Session` VALUES
(1,1,1,'Session 1','Ratatouille Session 1','2024-07-25 17:00:00','2024-07-25 19:00:00',52,52),
(2,1,1,'Session 2','Ratatouille Session 2','2024-07-25 19:00:00','2024-07-25 21:00:00',52,52),
(3,1,1,'Session 3','Ratatouille Session 3','2024-07-25 21:00:00','2024-07-25 23:00:00',52,52),
(4,1,2,'Session 1','Ratatouille Session 1','2024-07-26 17:00:00','2024-07-26 19:00:00',52,52),
(5,1,2,'Session 2','Ratatouille Session 2','2024-07-26 19:00:00','2024-07-26 21:00:00',52,52),
(6,1,2,'Session 3','Ratatouille Session 3','2024-07-26 21:00:00','2024-07-26 23:00:00',52,52),
(7,1,3,'Session 1','Ratatouille Session 1','2024-07-27 17:00:00','2024-07-27 19:00:00',52,52),
(8,1,3,'Session 2','Ratatouille Session 2','2024-07-27 19:00:00','2024-07-27 21:00:00',52,52),
(9,1,3,'Session 3','Ratatouille Session 3','2024-07-27 21:00:00','2024-07-27 23:00:00',52,52),
(10,1,4,'Session 1','Ratatouille Session 1','2024-07-28 17:00:00','2024-07-28 19:00:00',52,52),
(11,1,4,'Session 2','Ratatouille Session 2','2024-07-28 19:00:00','2024-07-28 21:00:00',52,52),
(12,1,4,'Session 3','Ratatouille Session 3','2024-07-28 21:00:00','2024-07-28 23:00:00',52,52),
(13,4,1,'Session 1','Restaurant Fris Session 1','2024-07-25 17:30:00','2024-07-25 19:00:00',45,45),
(14,4,1,'Session 2','Restaurant Fris Session 2','2024-07-25 19:00:00','2024-07-25 20:30:00',45,45),
(15,4,1,'Session 3','Restaurant Fris Session 3','2024-07-25 20:30:00','2024-07-25 22:00:00',45,45),
(16,4,2,'Session 1','Restaurant Fris Session 1','2024-07-26 17:30:00','2024-07-26 19:00:00',45,45),
(17,4,2,'Session 2','Restaurant Fris Session 2','2024-07-26 19:00:00','2024-07-26 20:30:00',45,45),
(18,4,2,'Session 3','Restaurant Fris Session 3','2024-07-26 20:30:00','2024-07-26 22:00:00',45,45),
(19,4,3,'Session 1','Restaurant Fris Session 1','2024-07-27 17:30:00','2024-07-27 19:00:00',45,45),
(20,4,3,'Session 2','Restaurant Fris Session 2','2024-07-27 19:00:00','2024-07-27 20:30:00',45,45),
(21,4,3,'Session 3','Restaurant Fris Session 3','2024-07-27 20:30:00','2024-07-27 22:00:00',45,45),
(22,4,4,'Session 1','Restaurant Fris Session 1','2024-07-28 17:30:00','2024-07-28 19:00:00',45,45),
(23,4,4,'Session 2','Restaurant Fris Session 2','2024-07-28 19:00:00','2024-07-28 20:30:00',45,45),
(24,4,4,'Session 3','Restaurant Fris Session 3','2024-07-28 20:30:00','2024-07-28 22:00:00',45,45),
(25,3,1,'Session 1','Restaurant ML Session 1','2024-07-25 18:00:00','2024-07-25 19:30:00',60,60),
(26,3,1,'Session 2','Restaurant ML Session 2','2024-07-25 19:30:00','2024-07-25 21:00:00',60,60),
(28,3,2,'Session 1','Restaurant ML Session 1','2024-07-26 18:00:00','2024-07-26 19:30:00',60,60),
(29,3,2,'Session 2','Restaurant ML Session 2','2024-07-26 19:30:00','2024-07-26 21:00:00',60,60),
(31,3,3,'Session 1','Restaurant ML Session 1','2024-07-27 18:00:00','2024-07-27 19:30:00',60,60),
(32,3,3,'Session 2','Restaurant ML Session 2','2024-07-27 19:30:00','2024-07-27 21:00:00',60,60),
(34,3,4,'Session 1','Restaurant ML Session 1','2024-07-28 18:00:00','2024-07-28 19:30:00',60,60),
(35,3,4,'Session 2','Restaurant ML Session 2','2024-07-28 19:30:00','2024-07-28 21:00:00',60,60),
(37,2,1,'Session 1','Café de Roemer Session 1','2024-07-25 18:00:00','2024-07-25 19:30:00',35,35),
(38,2,1,'Session 2','Café de Roemer Session 2','2024-07-25 19:30:00','2024-07-25 21:00:00',35,35),
(40,2,2,'Session 1','Café de Roemer Session 1','2024-07-26 18:00:00','2024-07-26 19:30:00',35,35),
(41,2,2,'Session 2','Café de Roemer Session 2','2024-07-26 19:30:00','2024-07-26 21:00:00',35,35),
(43,2,3,'Session 1','Café de Roemer Session 1','2024-07-27 18:00:00','2024-07-27 19:30:00',35,35),
(44,2,3,'Session 2','Café de Roemer Session 2','2024-07-27 19:30:00','2024-07-27 21:00:00',35,35),
(46,2,4,'Session 1','Café de Roemer Session 1','2024-07-28 18:00:00','2024-07-28 19:30:00',35,35),
(47,2,4,'Session 2','Café de Roemer Session 2','2024-07-28 19:30:00','2024-07-28 21:00:00',35,35),
(49,5,1,'Session 1','Specktakel Session 1','2024-07-25 17:00:00','2024-07-25 18:30:00',36,36),
(50,5,1,'Session 2','Specktakel Session 2','2024-07-25 18:30:00','2024-07-25 20:00:00',36,36),
(51,5,1,'Session 3','Specktakel Session 3','2024-07-25 20:00:00','2024-07-25 21:30:00',36,36),
(52,5,2,'Session 1','Specktakel Session 1','2024-07-26 17:00:00','2024-07-26 18:30:00',36,36),
(53,5,2,'Session 2','Specktakel Session 2','2024-07-26 18:30:00','2024-07-26 20:00:00',36,36),
(54,5,2,'Session 3','Specktakel Session 3','2024-07-26 20:00:00','2024-07-26 21:30:00',36,36),
(55,5,3,'Session 1','Specktakel Session 1','2024-07-27 17:00:00','2024-07-27 18:30:00',36,36),
(56,5,3,'Session 2','Specktakel Session 2','2024-07-27 18:30:00','2024-07-27 20:00:00',36,36),
(57,5,3,'Session 3','Specktakel Session 3','2024-07-27 20:00:00','2024-07-27 21:30:00',36,36),
(58,5,4,'Session 1','Specktakel Session 1','2024-07-28 17:00:00','2024-07-28 18:30:00',36,36),
(59,5,4,'Session 2','Specktakel Session 2','2024-07-28 18:30:00','2024-07-28 20:00:00',36,36),
(60,5,4,'Session 3','Specktakel Session 3','2024-07-28 20:00:00','2024-07-28 21:30:00',36,36),
(73,6,1,'Session 1','Grand Cafe Brinkman Session 1','2024-07-25 16:30:00','2024-07-25 17:00:00',100,100),
(74,6,1,'Session 2','Grand Cafe Brinkman Session 2','2024-07-25 17:00:00','2024-07-25 18:30:00',100,100),
(75,6,1,'Session 3','Grand Cafe Brinkman Session 3','2024-07-25 18:30:00','2024-07-25 20:00:00',100,100),
(76,6,2,'Session 1','Grand Cafe Brinkman Session 1','2024-07-26 16:30:00','2024-07-26 17:00:00',100,100),
(77,6,2,'Session 2','Grand Cafe Brinkman Session 2','2024-07-26 17:00:00','2024-07-26 18:30:00',100,100),
(78,6,2,'Session 3','Grand Cafe Brinkman Session 3','2024-07-26 18:30:00','2024-07-26 20:00:00',100,100),
(79,6,3,'Session 1','Grand Cafe Brinkman Session 1','2024-07-27 16:30:00','2024-07-27 17:00:00',100,100),
(80,6,3,'Session 2','Grand Cafe Brinkman Session 2','2024-07-27 17:00:00','2024-07-27 18:30:00',100,100),
(81,6,3,'Session 3','Grand Cafe Brinkman Session 3','2024-07-27 18:30:00','2024-07-27 20:00:00',100,100),
(82,6,4,'Session 1','Grand Cafe Brinkman Session 1','2024-07-28 16:30:00','2024-07-28 17:00:00',100,100),
(83,6,4,'Session 2','Grand Cafe Brinkman Session 2','2024-07-28 17:00:00','2024-07-28 18:30:00',100,100),
(84,6,4,'Session 3','Grand Cafe Brinkman Session 3','2024-07-28 20:30:00','2024-07-28 20:00:00',100,100),
(85,7,1,'Session 1','Toujours Session 1','2024-07-25 17:30:00','2024-07-25 18:00:00',48,48),
(86,7,1,'Session 2','Toujours Session 2','2024-07-25 18:00:00','2024-07-25 19:30:00',48,48),
(87,7,1,'Session 3','Toujours Session 3','2024-07-25 19:30:00','2024-07-25 21:00:00',48,48),
(88,7,2,'Session 1','Toujours Session 1','2024-07-26 17:30:00','2024-07-26 18:00:00',48,48),
(89,7,2,'Session 2','Toujours Session 2','2024-07-26 18:00:00','2024-07-26 19:30:00',48,48),
(90,7,2,'Session 3','Toujours Session 3','2024-07-26 19:30:00','2024-07-26 21:00:00',48,48),
(91,7,3,'Session 1','Toujours Session 1','2024-07-27 17:30:00','2024-07-27 18:00:00',48,48),
(92,7,3,'Session 2','Toujours Session 2','2024-07-27 18:00:00','2024-07-27 19:30:00',48,48),
(93,7,3,'Session 3','Toujours Session 3','2024-07-27 19:30:00','2024-07-27 21:00:00',48,48),
(94,7,4,'Session 1','Toujours Session 1','2024-07-28 17:30:00','2024-07-28 18:00:00',48,48),
(95,7,4,'Session 2','Toujours Session 2','2024-07-28 18:00:00','2024-07-28 19:30:00',48,48),
(96,7,4,'Session 3','Toujours Session 3','2024-07-28 19:30:00','2024-07-28 21:00:00',48,48),
(97,2,1,'Session 3','Café de Roemer Session 3','2024-07-25 21:00:00','2024-07-25 22:30:00',35,35),
(98,2,2,'Session 3','Café de Roemer Session 3','2024-07-26 21:00:00','2024-07-26 22:30:00',35,35),
(99,2,3,'Session 3','Café de Roemer Session 3','2024-07-27 21:00:00','2024-07-27 22:30:00',35,35),
(100,2,4,'Session 3','Café de Roemer Session 3','2024-07-28 21:00:00','2024-07-28 22:30:00',35,35);
/*!40000 ALTER TABLE `Session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stories`
--

DROP TABLE IF EXISTS `Stories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stories` (
  `StoryID` int NOT NULL AUTO_INCREMENT,
  `DetailPageID` int DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text,
  `ImagePath` varchar(255) DEFAULT NULL,
  `ImageAlt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`StoryID`),
  KEY `DetailPageID` (`DetailPageID`),
  CONSTRAINT `Stories_ibfk_1` FOREIGN KEY (`DetailPageID`) REFERENCES `DetailPage` (`DetailPageID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stories`
--

LOCK TABLES `Stories` WRITE;
/*!40000 ALTER TABLE `Stories` DISABLE KEYS */;
INSERT INTO `Stories` VALUES
(11,1,'Haarlem\'s Tower-Topping Windmill Story','In 1778, Adriaan de Boois bought an ancient tower in Haarlem. The city gave him the go-ahead to build a windmill on top, and he made it happen! This windmill rose high on the old tower, catching plenty of wind by the Spaarne River. The De Adriaan windmill began its job on May 19, 1779. Adriaan used it to crush something called tuff into trass. Trass was pretty neat – it helped keep walls waterproof when mixed into building mortar.','/img/history/windmill-story.png','Image with Haalem\'s Tower'),
(12,1,'Tobacco Story','At first, the mill ground tuff, shells, and oak bark. Then, in 1802, a tobacco merchant bought it and turned it into a tobacco production spot. By 1865, new owners switched things up again. They transformed the mill into one that used both wind and steam power to grind grain. But by 1925, there was a problem. The mill faced too much competition from modern industry and wasn\'t making enough money. They wanted to demolish it because it wasn\'t profitable anymore.','/img/history/snuff.png','Image with Tabbacco Story'),
(13,1,'Fire!','On a Saturday afternoon in April 1932, there was chaos in Haarlem — the Adriaan was on fire! Despite the brigade\'s swift efforts, there wasn\'t much left of the Adriaan afterward, just a heap of burnt stones and beams. The next day, the people of Haarlem started collecting money to build a new Adriaan. But it was clear they needed a lot more than what they had gathered.','/img/history/windmill-story.png','Image with fire'),
(14,1,'Reconstruction','In 1963, Haarlem took over the land where the mill used to be and promised to rebuild it. But as years went by, that promise was forgotten. Then, in 1991, a group called the Molen De Adriaan Foundation was formed to bring the mill back. At first, Haarlem wasn\'t really into helping out. But in 1996, they found the old promise in their archives. That changed everything—they fully backed the project and worked together to make it happen, giving it the push it needed to succeed.','/img/history/reconstruction.png','Image with fire'),
(15,1,'Museum Mill','On April 23, 2002, after seventy long years since the fire, Haarlem welcomed back its beloved Adriaan. Now restored, it serves as a venue for meetings and weddings, and most importantly, as a museum showcasing its rich history. Inside, visitors find a reception area with a souvenir shop, two floors displaying stunning mill models, and atop it all, a functioning mill. Constructed in 2002, it\'s no imitation. The Adriaan operates authentically, just like Dutch windmills have for centuries, keeping the tradition alive and spinning.','/img/history/museum-mill.png','Image with Museum Mill');
/*!40000 ALTER TABLE `Stories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `RegistrationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `unique_email` (`Email`),
  UNIQUE KEY `unique_username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES
(1,'john_doe','john@example.com','$2y$10$RCQCX5inXp/S7zV7eFMoOO2r7ZKwq6KWqPN7I7bCtIqa.Sr0WsHO2','user','2024-02-20 10:02:59','John Doe'),
(8,'JaneTheMain','jane@example.com','$2y$10$u6X2RowNg0kon9ywnGhWD.L.P5dSLy1aD99GpPjTnxvVLobUlVdO6','user','2024-03-06 23:37:11','Default'),
(9,'Me','thepiguy@tuta.io','$2y$10$hhoFdm..5f5PKLaImffAwOZFjKyf90nRwxeak6bSTeqv7zOHLn3Hu','user','2024-03-10 21:41:58','Hello Worlder'),
(10,'admin','admin@example.com','$2y$10$JVEUe0ql3fl833Z3qeJfXudQZbU/zuah2vb8WOnJYnVNRT2tw4S6e','admin','2024-03-11 10:04:38','Admin'),
(11,'dana','dana@example.com','$2y$10$LmPDhk6UunYgeg5e1bPSDOR9qzQNYKQeo1o7dJXbkKfUTerBJ3J8.','user','2024-03-16 14:21:46','Default'),
(16,'helloUser','hellouser@example.com','$2y$10$BSEXtkKhMwan.yCRiYFfTet4diuzmBBwnZFka5.nw2rD2.Po7wKJC','user','2024-03-16 14:33:49','Default'),
(19,'maark','mark@examaple.com','$2y$10$ljuz/lgJtWRJph4GexdJj.kAIcqW1OwrhaSOEeG/psU5cqKz9c1jG','user','2024-03-16 15:24:15','Default'),
(20,'dominik','dominik@example.com','$2y$10$R5fyBLisuRzKvkbMI7aeq.VXpBFH9FZCSa4FKUIXxEf6TAoG7B.9.','user','2024-03-16 15:27:37','Default'),
(27,'marco','marco@example.com','$2y$10$.38LoOESttOx8Yo.W6kcC.tjp9AXF2hLbBlIrcwo.Cb3HRUE0llmq','user','2024-03-19 17:30:48','marco'),
(48,'mano','mano@example.com','$2y$10$1llLXK494u.HIqKTT1sSPO6m0TZBfOzVldF5PF//PQo4oA2EJnPC.','user','2024-03-19 17:36:06','mano'),
(54,'hi','hi@example.com','$2y$10$LXqPjw2E9MzoJSi.iZCkQOmLjNQgy6fwTHfJO0d43j78iCwnvLqgq','user','2024-03-23 18:57:48','hi');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Venue`
--

DROP TABLE IF EXISTS `Venue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Venue` (
  `VenueID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactDetails` text,
  PRIMARY KEY (`VenueID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Venue`
--

LOCK TABLES `Venue` WRITE;
/*!40000 ALTER TABLE `Venue` DISABLE KEYS */;
INSERT INTO `Venue` VALUES
(1,'Patronaat','Zijlsingel 2, 2013 DN','email: info@patronaat.nl, phone: 023 - 517 58 50 (office) - during office hours 10.00 - 17.00, 023 - 517 58 58 (cash desk/information number)'),
(2,'Grote Markt','Grote Markt 2011 RD',''),
(12,'fghshsjs','djjdjdjd','ddldld');
/*!40000 ALTER TABLE `Venue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `YummyEventDays`
--

DROP TABLE IF EXISTS `YummyEventDays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `YummyEventDays` (
  `DayID` int NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  PRIMARY KEY (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `YummyEventDays`
--

LOCK TABLES `YummyEventDays` WRITE;
/*!40000 ALTER TABLE `YummyEventDays` DISABLE KEYS */;
INSERT INTO `YummyEventDays` VALUES
(1,'2024-07-25'),
(2,'2024-07-26'),
(3,'2024-07-27'),
(4,'2024-07-28');
/*!40000 ALTER TABLE `YummyEventDays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `YummyHome`
--

DROP TABLE IF EXISTS `YummyHome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `YummyHome` (
  `YummyID` int NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `SubTitle` varchar(255) DEFAULT NULL,
  `SubHeader` varchar(255) DEFAULT NULL,
  `HeaderImg` varchar(255) DEFAULT NULL,
  `HeaderAlt` varchar(255) DEFAULT NULL,
  `FoodImg1` varchar(255) DEFAULT NULL,
  `FoodAlt1` varchar(255) DEFAULT NULL,
  `FoodImg2` varchar(255) DEFAULT NULL,
  `FoodAlt2` varchar(255) DEFAULT NULL,
  `FoodImg3` varchar(255) DEFAULT NULL,
  `FoodAlt3` varchar(255) DEFAULT NULL,
  `FoodImg4` varchar(255) DEFAULT NULL,
  `FoodAlt4` varchar(255) DEFAULT NULL,
  `FoodImg5` varchar(255) DEFAULT NULL,
  `FoodAlt5` varchar(255) DEFAULT NULL,
  `Section1` text,
  `Section2` text,
  `Section3` text,
  `Section4` text,
  PRIMARY KEY (`YummyID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `YummyHome`
--

LOCK TABLES `YummyHome` WRITE;
/*!40000 ALTER TABLE `YummyHome` DISABLE KEYS */;
INSERT INTO `YummyHome` VALUES
(1,'Yummy!','Join us at the Haarlem Yummy Food Festival!','Embark on a Culinary journey in Haarlem!','img/yummy/yummyHeader.png','The Grote Markt which has people walking and restaurant stalls.','img/yummy/yummyInfo1.png','Food being grilled and looking tasty.','img/yummy/yummyInfo4.png','Big wooden plate with sushi and other tasty food.','img/yummy/yummyInfo2.png','Food on grey clay plate.','img/yummy/yummyInfo3.png','Food on grey clay plate.','img/yummy/yummyInfo5.png','Chefs preparing food.','Come and explore the different sessions at each restaurant! Think tasty appetisers, hearty mains and sweet treats for dessert. You can reserve a spot and treat your taste buds to a special menu at each place.','This is not just about food - Its about diving into Haarlems unique food culture.','Meet the local chefs, find out what inspires them, and enjoy the unique flavours that make Haarlems food scene so special.','Whether you are a food lover, a local looking for something new, or a visitor wanting to experience Haarlems taste, the Yummy Food Festival is where its at. Bring your appetite and lets make some delicious memories together!');
/*!40000 ALTER TABLE `YummyHome` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-27 14:52:58
