-- MariaDB dump 10.19-11.3.2-MariaDB, for Linux (x86_64)
--
-- Host: 45.32.235.205    Database: festivaldb
-- ------------------------------------------------------
-- Server version	11.3.2-MariaDB-1:11.3.2+maria~ubu2204

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
-- Table structure for table `Artist`
--

DROP TABLE IF EXISTS `Artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Artist` (
  `ArtistID` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Artist`
--

LOCK TABLES `Artist` WRITE;
/*!40000 ALTER TABLE `Artist` DISABLE KEYS */;
INSERT INTO `Artist` VALUES
(2,'Gumbo Kings','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/gumboKings.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(3,'Evolve',' The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge. ','/img/jazz/artists/6612969b16bd5.png','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/evolve.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(4,'Ntjam Rosie','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/ntjamRosie.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(5,'Wicked Jazz Sounds','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/wickedJazzSounds.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(6,'Tom Thomsom Assemble','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/tomThompsonAssemble.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(7,'Jonna Frazer','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/jonnaFrazer.jpg','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(8,'Fox & The Mayors','  The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.  ','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/6612971c82aa8.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(9,'Uncle Sue','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/uncleSue.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(10,'Chris Allen','  The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.  ','/img/jazz/artists/661294a308cd1.png','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/chrisAllen.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(11,'Myles Sanko','Myles Sanko, born on May 8, 1980, in Accra, is a British soul and jazz singer, songwriter, composer, producer, and cinematographer. Steeped in both Ghanaian and French heritage, his music embodies a rich tapestry of culture, passion, and unyielding resilience. His musical journey is one of evolution, from singing and rapping alongside DJs in nightclubs in his hometown of Cambridge to busking on the city\'s streets. These humble beginnings served as a stepping stone to a more expansive career.In 2013 he independently recorded and released his debut album, \"Born In Black & White,\" on his own record label, 213 Music. This bold move caught the attention of Légère Recordings, P-Vine Records, and Dox Records, which recognized his potential and signed a licensing deal with him. Under their banner, he released a series of albums, including the soulful \"Forever Dreaming\" in 2014, the introspective \"Just Being Me\" in 2016, the heartfelt \"Memories Of Love\" in 2021, and the captivating \"Live at Philharmonie Luxembourg\" in 2023.','/img/jazz/artists/mylesSankoHeader.png','/img/jazz/artists/mylesSanko1.png','/img/jazz/artists/mylesSanko2.png','/img/jazz/performances/mylesSanko.png','2wob0s3WIRpsvYHSpDqywa','1ZQMYhEAylDE7Af6iEtIty','3BSt7oYQhijrtcoeWr7BUc','1oU7DOcuVs4TqnewtTgR1P','6uL0ZXwr17RgsMRmXKYY11','66whY3xoQgrvmpQgCvFNsv'),
(12,'Ruis Soundsystem','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/ruisSoundsystem.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(13,'The Family XL','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/theFamilyXL.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(14,'Gare du Nord','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/gareDuNord.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(15,'Rilan & The Bombadiers','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/rilanAndTheBombadiers.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(16,'Soul Six','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/soulSix.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(17,'Han Bennink','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/hannBennink.png','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(18,'The Nordanians','The Dutch Swing Collective is a dynamic ensemble of musicians hailing from various corners of the Netherlands, united by their shared love for jazz music. With a fusion of traditional jazz influences and modern sensibilities, this collective brings a fresh and innovative approach to the Dutch jazz scene, captivating audiences with their vibrant performances and infectious energy.\r\nFormed in the eclectic city of Rotterdam, the Dutch Swing Collective traces its origins to a chance meeting between a group of passionate jazz enthusiasts at a local jam session. Bonded by their mutual love for the genre, they quickly recognized the potential to create something special together. Drawing inspiration from the rich tradition of Dutch jazz and the diverse cultural landscape of their homeland, they embarked on a musical journey that would soon capture the hearts of audiences far and wide.  The Dutch Swing Collective\'s sound is a melting pot of influences, blending the swing and improvisational elements of traditional jazz with contemporary grooves and textures. Influenced by iconic Dutch jazz artists such as Rein de Graaff and Tineke Postma, as well as global jazz luminaries like Miles Davis and John Coltrane, the collective has developed a signature style that is both timeless and cutting-edge.','/img/jazz/artists/artistPlaceholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/artists/placeholder.jpg','/img/jazz/performances/theNordanians.jpg','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P'),
(19,'Lilith Merlot','Known for her timeless voice, Dutch singer and songwriter Lilith Merlot has been enchanted by harmony and melody from a young age. Her mother was a classical violinist and, as a young girl, Lilith often joined her mother on tour through Europe. During her Jazz vocals studies at the Rotterdam Conservatory, Lilith performed in front of American singer Renée Neufville, who remarked: “Your voice is just like a Merlot; it’s so warm, deep, and round”. This inspired Lilith to use Merlot as her stage name. Since releasing her debut EP in 2017, Lilith has been experimenting with various genres, from Jazz to Pop and Soul, influenced by Lizz Wright, Jeff Buckley, and Norah Jones, to name a few, creating music reminiscent of Nina Simone, Melody Gardot, and Madeleine Peyroux. With nearly 5 million streams across platforms, her music has aired across a number of stations under the established Netherlands public broadcaster NPO, earning spins on NPO Soul & Jazz, NPO 3FM Radio and Sublime FM.','/img/jazz/artists/lilithMerlotHeader.png','/img/jazz/artists/lilithMerlot1.png','/img/jazz/artists/lilithMerlot2.png','/img/jazz/performances/lilithMerlot.png','2LsarF7MWgoNLK8DsCC1d9','3IYw1yRBBNYXGf2XLx1kl4','2AWCbsMHCCW6VFd3LFz9D1','5Ck86xT1yXsPRi1vRUTECa','3d4k38C0dO6BWOkPn62eey','7Iku7xW9nlXg6qaMi3xDV2'),
(29,'artist 2344','        Eva Van Dijk is a visionary artist hailing from the picturesque landscapes of the Netherlands, where she was born and raised amidst the tulip fields and windmills that characterize the Dutch countryside. From an early age, Eva was captivated by the rich cultural heritage and artistic traditions of her homeland, finding inspiration in the vibrant colors of Dutch masterpieces and the timeless beauty of the natural world.\r\n\r\nGrowing up in a family of artists and artisans, Eva\'s passion for creative expression was nurtured from an early age, as she experimented with paint, clay, and other mediums in her family\'s atelier. Drawing inspiration from the lush landscapes and quaint villages that surrounded her, Eva developed a unique artistic style characterized by a blend of impressionistic brushwork, bold colors, and a sense of whimsy.\r\n\r\nAs she honed her craft, Eva\'s work began to garner attention for its emotive power and evocative storytelling. Her paintings often depict dreamlike landscapes populated by fantastical creatures and mystical beings, inviting viewers to immerse themselves in worlds of imagination and wonder.\r\n\r\nAs Eva Van Dijk\'s journey as an artist continues to unfold, one thing remains certain: her unwavering commitment to exploring the beauty and wonder of the world through the eyes of an artist.      \r\n\r\n\r\n\r\n  ','/img/jazz/artists/6614442c7b977.jpg','/img/jazz/artists/66144455b4b74.jpg','/img/jazz/artists/66144455b6844.jpg','/img/jazz/performances/6614442c80d78.jpg','7oBC2PuPSvXkLEZdoCxsv5','18g4jSwIbYcbJI5U7PIzMz','0B7DKUR00yRXncWrlQwIR6','6XQHlsNu6so4PdglFkJQRJ','2VvDKx7lzdarObpQFn1iAh','1otrWVcbCxemNnn7eiKW1P');
/*!40000 ALTER TABLE `Artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ContactInfo`
--

DROP TABLE IF EXISTS `ContactInfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ContactInfo` (
  `ContactID` int(11) NOT NULL AUTO_INCREMENT,
  `Address` text DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `WebsiteAddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ContactID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `DetailPageID` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DetailPage`
--

LOCK TABLES `DetailPage` WRITE;
/*!40000 ALTER TABLE `DetailPage` DISABLE KEYS */;
INSERT INTO `DetailPage` VALUES
(1,'/img/history/churchBavo.jpg','An image with Church of St. Bavo','Where are we?','/img/history/mapWithout.png','Location of Church of St. Bavo','Before','/img/history/churchBefore.jpg','An Image before','After','/img/history/churchAfter.JPG','An image after','Grote Markt 22 (noordzijde)\n2011 RD Haarlem','	023-5532040','info@bavo.nl','https://www.bavo.nl/en/visit-the-bavo/'),
(2,'/img/history/groteMarktHeader.jpg','An image with Grote Markt','Where Are We?','/img/history/mapWithout.png','Location of Grote Markt','Before','/img/history/beforeGroteMarkt.jpg','An Image before','After','/img/history/afterGroteMarkt.jpg','An image after','2011 Haarlem\nNederland','023 545 0259','info@grotemarkt.nl','https://www.visithaarlem.com/locatie/grote-markt/'),
(3,'/img/history/hallen.jpg','An image with De Hallen','Where Are We?','/img/history/mapWithout.png','Map for De Hallen','Before','/img/history/hallenBefore.jpg','An Image before','After','/img/history/hallenAfter.jpg','An image after','Grote Markt 16\n2011 RD Haarlem','+31 235115775','meet@franshalsmuseum.nl','https://www.franshalsmuseum.nl'),
(4,'/img/history/proveniershofHeader.png','Header Image for Proveniershof','Where Are We?','/img/history/mapWithout.png','Map for Proveniershof','Before','/img/history/ProveniershofBefore.jpg','An Image before','After','/img/history/ProveniershofAfter.png','An image after','Grote Houtstraat 142D, 2011 SV Haarlem','020 – 5559151','info@proveniershof.nl','https://hofjesinhaarlem.nl/hofjes-in-haarlem/proveniershof/'),
(5,'/img/history/jopenkerkHeader.jpg','Header Image for Page 6','Where Are We?','/img/history/mapWithout.png','Map for Jopenkerk','Before','/img/history/jopenkerkBefore.jpeg','An Image before','After','/img/history/jopenkerkAfter.jpeg','An image after','Gedempte Voldersgracht 2, 2011 WD Haarlem','023 545 0259','info@jopenkerk.nl','https://www.jopenkerk.nl/haarlem/'),
(6,'/img/page7/header.jpg','Header Image for Page 7','Where Are We?','/img/history/mapWithout.png','Map for Page 7','Before','/img/history/jopenkerkBefore.jpeg','An Image before','After','/img/page7/after.jpg','An image after','Address for Page 7','023 545 0259','info@molenadriaan.nl','Website Address for Page 7'),
(7,'/img/history/molen-cop.png','An image with Molen De Adriaan','Where Are We?','/img/history/mapWithout.png','Molen De Adriaan Map','Before Fire','/img/history/before-fire.jpg','Image Before Fire','After Fire','/img/history/after-fire.png','Image After Fire','Papentorenvest 1 a 2011 AV Haarlem The Netherlands','023 545 0259','info@molenadriaan.nl','http://www.molenadriaan.nl/'),
(8,'/img/page8/header.jpg','Header Image for Page 8','Where Are We?','/img/history/mapWithout.png','Map for Page 8','Before','/img/page8/before.jpg','An Image before','After','/img/page8/after.jpg','An image after','Address for Page 8','023 545 0259','info@molenadriaan.nl','Website Address for Page 8'),
(9,'/img/page9/header.jpg','Header Image for Page 9','Where Are We?','/img/history/mapWithout.png','Map for Page 9','Before','/img/page9/before.jpg','An Image before','After','/img/page9/after.jpg','An image after','Address for Page 9','023 545 0259','info@molenadriaan.nl','Website Address for Page 9');
/*!40000 ALTER TABLE `DetailPage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DynPages`
--

DROP TABLE IF EXISTS `DynPages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DynPages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Path` varchar(255) DEFAULT NULL,
  `Content` text DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Path` (`Path`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DynPages`
--

LOCK TABLES `DynPages` WRITE;
/*!40000 ALTER TABLE `DynPages` DISABLE KEYS */;
INSERT INTO `DynPages` VALUES
(1,'index','<h1><span style=\"font-family: \'times new roman\', times, serif;\">Welcome to Haarlem!</span></h1>\n<h2><span style=\"font-size: 14pt; color: #34495e;\"><a style=\"color: #34495e;\" href=\"../history\">History tours</a></span><br><span style=\"font-size: 14pt; color: #34495e;\"><a style=\"color: #34495e;\" href=\"../jazz\">Jazz events</a></span><br><span style=\"font-size: 14pt; color: #34495e;\"><a style=\"color: #34495e;\" href=\"../yummy\">Food events</a></span></h2>\n<h2><img src=\"../img/editor/66143f8041006.webp\"></h2>\n<h2><!-- pagebreak --></h2>\n<h2>We welcome you to Haarlem</h2>\n<p>Haarlem is a cosy historic centre, famous museums, shops, restaurants and the beach around the corner. Welcome to the city that has everything. On the one hand, the hidden streets from a bygone era and hip concept stores. On the other side the medieval church and terraces on the water. From Dutch Masters to French star chefs. From antique market to pop concert.</p>\n<p><span style=\"white-space: pre-wrap;\">Right next to the centre is a train station, making travel to Haarlem a breeze even from regions from afar. There is also a bus station with many buses arriving from and departing to all across the Netherlands. And here\'s the bonus &ndash; your bike gets the royal treatment with free parking in the underground bike park during the day. Prefer to travel by car? There are parking spots scattered around and undercover car parks close to bus stops.</span></p>','Home'),
(164,'about','<h1>We represent the city of Haarlem</h1>\n<p>and we are proud ig</p>\n<details class=\"mce-accordion\">\n<summary spellcheck=\"false\" data-lt-tmp-id=\"lt-80256\" data-gramm=\"false\">Accordion summary...</summary>\n<p>Accordion body...</p>\n</details>','About Us');
/*!40000 ALTER TABLE `DynPages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FestivalEvent`
--

DROP TABLE IF EXISTS `FestivalEvent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FestivalEvent` (
  `FestivalEventID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `ImgPath` varchar(100) DEFAULT NULL,
  `StartDate` datetime DEFAULT NULL,
  `EndDate` datetime DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`FestivalEventID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `DayID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `DayOfTheWeek` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `HomeID` int(11) NOT NULL AUTO_INCREMENT,
  `HeaderImage` varchar(255) DEFAULT NULL,
  `ImageAlt` varchar(255) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `SubTitle` varchar(255) DEFAULT NULL,
  `DiscoverTitle` varchar(255) DEFAULT NULL,
  `DiscoverText` text DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Dates` varchar(255) DEFAULT NULL,
  `Times` varchar(255) DEFAULT NULL,
  `IndividualPrice` decimal(10,2) DEFAULT NULL,
  `FamilyPrice` decimal(10,2) DEFAULT NULL,
  `GroupInfo` varchar(255) DEFAULT NULL,
  `VideoMp4` varchar(255) DEFAULT NULL,
  `VideoWebm` varchar(255) DEFAULT NULL,
  `CityWalkTitle` varchar(255) DEFAULT NULL,
  `CityWalkText` text DEFAULT NULL,
  `CityWalkImage` varchar(255) DEFAULT NULL,
  `CityWalkImageAlt` varchar(255) DEFAULT NULL,
  `GuidesTitle` varchar(255) DEFAULT NULL,
  `GuidesText` text DEFAULT NULL,
  `NoteTitle` varchar(255) DEFAULT NULL,
  `NoteText` text DEFAULT NULL,
  `MapImage` varchar(255) DEFAULT NULL,
  `MapAlt` varchar(255) DEFAULT NULL,
  `WheelchairTitle` varchar(255) DEFAULT NULL,
  `WheelchairText` text DEFAULT NULL,
  `StartLocationImage` varchar(255) DEFAULT NULL,
  `StartLocationAlt` varchar(255) DEFAULT NULL,
  `StartLocationText` text DEFAULT NULL,
  `ContactTitle` varchar(255) DEFAULT NULL,
  `ContactSubtitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`HomeID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `LanguageID` int(11) NOT NULL AUTO_INCREMENT,
  `LanguageType` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`LanguageID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
  `TourID` int(11) NOT NULL AUTO_INCREMENT,
  `DayID` int(11) DEFAULT NULL,
  `LanguageID` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `TotalTickets` int(11) DEFAULT NULL,
  `RemainingTickets` int(11) DEFAULT NULL,
  PRIMARY KEY (`TourID`),
  KEY `DayID` (`DayID`),
  KEY `LanguageID` (`LanguageID`),
  CONSTRAINT `HistoryTicket_ibfk_1` FOREIGN KEY (`DayID`) REFERENCES `HistoryDays` (`DayID`),
  CONSTRAINT `HistoryTicket_ibfk_2` FOREIGN KEY (`LanguageID`) REFERENCES `HistoryLanguageType` (`LanguageID`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `HistoryTicket`
--

LOCK TABLES `HistoryTicket` WRITE;
/*!40000 ALTER TABLE `HistoryTicket` DISABLE KEYS */;
INSERT INTO `HistoryTicket` VALUES
(1,1,1,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,6),
(2,1,1,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,10),
(3,1,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,11),
(4,1,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(5,1,1,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(6,1,1,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,12),
(7,1,2,'Session 2','2024-07-25 13:00:00','2024-07-25 15:30:00',12,11),
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
(21,3,1,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,11),
(22,3,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,12),
(23,3,2,'Session 1','2024-07-25 10:00:00','2024-07-25 12:30:00',12,11),
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
(46,4,3,'Session 3','2024-07-28 16:00:00','2024-07-28 18:30:00',12,12),
(100,2,3,'Session 3','2024-07-26 16:00:00','2024-07-26 18:30:00',12,4);
/*!40000 ALTER TABLE `HistoryTicket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `JazzDay`
--

DROP TABLE IF EXISTS `JazzDay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JazzDay` (
  `DayID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `ImgPath` varchar(100) NOT NULL,
  `VenueID` int(11) NOT NULL,
  `Note` text DEFAULT NULL,
  PRIMARY KEY (`DayID`),
  KEY `VenueID` (`VenueID`),
  CONSTRAINT `JazzDay_ibfk_1` FOREIGN KEY (`VenueID`) REFERENCES `Venue` (`VenueID`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `JazzDay`
--

LOCK TABLES `JazzDay` WRITE;
/*!40000 ALTER TABLE `JazzDay` DISABLE KEYS */;
INSERT INTO `JazzDay` VALUES
(1,'2024-07-25','/img/jazz/jazzDay1.png',1,'hello'),
(2,'2024-07-26','/img/jazz/jazzDay2.png',1,NULL),
(3,'2024-07-27','/img/jazz/jazzDay3.png',1,NULL),
(4,'2024-07-28','/img/jazz/jazzDay4.png',2,'Free for all visitors. No reservation needed.'),
(28,'2024-04-05','/img/jazz/661443a12ed43.jpg',15,'hello');
/*!40000 ALTER TABLE `JazzDay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `JazzPass`
--

DROP TABLE IF EXISTS `JazzPass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `JazzPass` (
  `JazzPassID` int(11) NOT NULL AUTO_INCREMENT,
  `Price` decimal(10,2) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `EndDateTime` datetime NOT NULL,
  `Note` varchar(100) DEFAULT NULL,
  `TotalTickets` int(11) NOT NULL,
  `AvailableTickets` int(11) NOT NULL,
  PRIMARY KEY (`JazzPassID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `JazzPass`
--

LOCK TABLES `JazzPass` WRITE;
/*!40000 ALTER TABLE `JazzPass` DISABLE KEYS */;
INSERT INTO `JazzPass` VALUES
(1,80.00,'2024-07-25 00:00:00','2024-07-27 00:00:00','All-Access pass for Thu, Fri, Sat',30,30),
(2,35.00,'2024-07-25 00:00:00','2024-07-25 00:00:00','All-Access pass for Thursday',30,20),
(3,35.00,'2024-07-26 00:00:00','2024-07-26 00:00:00','All-Access pass for Friday',30,30),
(4,35.00,'2024-07-27 00:00:00','2024-07-27 00:00:00','All-Access pass for Saturday',30,30),
(10,23.00,'2024-04-09 00:00:00','2024-04-09 00:00:00','helooooo',22,202);
/*!40000 ALTER TABLE `JazzPass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Locations`
--

DROP TABLE IF EXISTS `Locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Locations` (
  `LocationID` int(11) NOT NULL AUTO_INCREMENT,
  `DetailPageID` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`LocationID`),
  KEY `DetailPageID` (`DetailPageID`),
  CONSTRAINT `Locations_ibfk_1` FOREIGN KEY (`DetailPageID`) REFERENCES `DetailPage` (`DetailPageID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
-- Table structure for table `Order`
--

DROP TABLE IF EXISTS `Order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Order` (
  `OrderUUID` char(50) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `SessionID` char(200) DEFAULT NULL,
  `TotalPrice` decimal(10,2) DEFAULT NULL,
  `DateTime` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`OrderUUID`),
  KEY `FK_Order_User` (`UserID`),
  CONSTRAINT `FK_Order_User` FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Order`
--

LOCK TABLES `Order` WRITE;
/*!40000 ALTER TABLE `Order` DISABLE KEYS */;
INSERT INTO `Order` VALUES
('02eada61-f45e-11ee-9510-5a01d62b6bd5',55,'unpaid','cs_test_b14QADgj9xKE9GAsglHeIELksM6x0yvw1BgFb5fEIHK51p5Q9r6R9biXWX',1387.50,'2024-04-06 23:38:31'),
('07f10706-f181-11ee-9510-5a01d62b6bd5',55,'unpaid','cs_test_a10Uvjd0KZJVgrYoM7323QhJTgkCc8k5b2vxgRiBd341bcB2gyJe9lhCNJ',35.00,'2024-04-03 08:11:39'),
('10d82b14-f424-11ee-9510-5a01d62b6bd5',55,'unpaid','cs_test_b1U0omWMA4dk7GlByf0PasGmKKv2UrYXVimnUTWUWH5e4LUhnXuIipwzfW',45.00,'2024-04-06 16:43:43'),
('1eb660bf-f40f-11ee-9510-5a01d62b6bd5',9,'unpaid','cs_test_b17bMhPWqkOqTzrJraq0z0XwZLVhnnUhPQwl9i9uzX0verWerplFonnkSN',1412.50,'2024-04-06 14:13:47'),
('27b16e9e-f460-11ee-9510-5a01d62b6bd5',55,'unpaid','cs_test_a1oMng6yJPcoOStK1ixCFRa8eoI0NIDtiqj7aEBmwDAdblX8WwX8hHQ5rx',15.00,'2024-04-06 23:53:51'),
('2ec2a179-f40a-11ee-9510-5a01d62b6bd5',9,'paid','cs_test_b1AowYu8LFtUgwzwbjes9hdsQFvAZBaPPZiDa3ujrVsWmyNFUqXLrGjEgH',87.50,'2024-04-06 13:38:26'),
('36119e46-f40d-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a1xvfkVRxlVc8y8xCCVivVT3dBxiSqthgHNIohkKJmxFquBlKmGlfVr1eZ',35.00,'2024-04-06 14:00:06'),
('38d4119d-f181-11ee-9510-5a01d62b6bd5',55,'paid','cs_test_a1thjS5HHpTpRSU0N7I7OJtvdH0ySonaqgi2j1wH9QddKiU5rs3nMiigvL',35.00,'2024-04-03 08:13:01'),
('4b29a1a6-f40d-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a1BJmAVs2hEZYBGaj9Isc8WzqHIBMVDvJxd9UszaegArJlo1CDkkAWUA6E',35.00,'2024-04-06 14:00:42'),
('4b5d468e-f40c-11ee-9510-5a01d62b6bd5',55,'paid','cs_test_a1R5rhmRGuBgjbD8JATKzsw4XLBPVaxJJgj023M0vBPRQnAUkJimdl3Alw',35.00,'2024-04-06 13:53:33'),
('4c476e23-f4fd-11ee-9510-5a01d62b6bd5',9,'unpaid','cs_test_a1JqXiWIRuzbRvJd79o1vbWegko27Iq9difNvVkRMiGOsAQzSmjKKQUkcB',17.50,'2024-04-07 18:38:43'),
('582ec860-f40d-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a1k7IuS3C3vXLA9R8YhkHSlNDO1p3rrLLjXcTWgGCahbLfa8f5GPLkNaw8',22.50,'2024-04-06 14:01:04'),
('5c1ffa17-f513-11ee-9510-5a01d62b6bd5',9,'unpaid','cs_test_a1BklZNNBdO4swtVhNKoqWbbHDLqpLmzKxsrm6NC0lky5FzAoaUrukojER',105.00,'2024-04-07 21:16:39'),
('61818abd-f17d-11ee-9510-5a01d62b6bd5',55,'unpaid','cs_test_a1Ib8DPEtCNX2sF4tsqsc7F8T9OgtFHE7cqE8CZuwLufXOJYdVV0oQvoxe',35.00,'2024-04-03 07:45:31'),
('6630f300-f4fb-11ee-9510-5a01d62b6bd5',9,'paid','cs_test_b164a3gSJZqV4ctF1Fgziq9eF50AJjDn26P16CxCkLzjinXhtEiUzcDfpR',70.00,'2024-04-07 18:25:08'),
('67081949-f4fc-11ee-9510-5a01d62b6bd5',9,'paid','cs_test_b1yISoKfWE8DXYZTp9B5v0jTzzOoCOmQOmICWnHfSJJsYKgwyrTpb0wnbu',52.50,'2024-04-07 18:32:19'),
('676d7735-f4fe-11ee-9510-5a01d62b6bd5',9,'paid','cs_test_b1fOFf4E98F1NaOJ4nE8nbPlcMkmD0v08auX5JstigIKoyvZEEIpn4kFMc',35.00,'2024-04-07 18:46:38'),
('67e8a5fc-f180-11ee-9510-5a01d62b6bd5',55,'paid','cs_test_a1oEtSAWUDeLUqL8DR9MYiUoypx0qTImzh7838FEQP2nJjccZatTOJXexg',35.00,'2024-04-03 08:07:10'),
('7066b433-f17d-11ee-9510-5a01d62b6bd5',55,'paid','cs_test_b1R1Jru5xMQe5gqZ96xtaCCZtzrehDvQygZu7qKrXs98hQmahi7WVUDXkS',52.50,'2024-04-03 07:45:56'),
('7481d79a-f40d-11ee-9510-5a01d62b6bd5',56,'paid','cs_test_a1nvo2Wmr3ae5o5OyJZivymWOa9XgaPlFBmr6c51ecRbpY9SZMMRddjj8m',180.00,'2024-04-06 14:01:51'),
('846960ed-f504-11ee-9510-5a01d62b6bd5',9,'paid','cs_test_a1cGK2knvMegS2pt8JuQ8yki3ozLomhem8XdCERCmWVj7HdhXqVjqB9b67',17.50,'2024-04-07 19:30:24'),
('8602646a-f40f-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a19MpTSHabIagvbxk6VZCPMM21f3FgcF3eKomRhvJHRFsYFoTE7HUJP1Er',0.00,'2024-04-06 14:16:39'),
('871fde1d-f514-11ee-9510-5a01d62b6bd5',9,'paid','cs_test_b1CbTycM5td0RL9QYrDoVztX0njBbXKjpwOV8YObtk6HmVeFWdewZeiDww',62.50,'2024-04-07 21:25:01'),
('87573d67-f40f-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a1Ak45m01AlswkdPQQEFuykLuTQ4YSZzzxZzBwSMQV4V2X6Y6i1g1RJVJ2',0.00,'2024-04-06 14:16:42'),
('8e91760d-f40f-11ee-9510-5a01d62b6bd5',9,'unpaid','cs_test_a1p5Mu1KXklisNWzUSUOmTCmgrGkPJCMLxwyX84eqEHfjvT1mhUO8c79kE',0.00,'2024-04-06 14:16:54'),
('a2106189-f513-11ee-9510-5a01d62b6bd5',9,'unpaid','cs_test_b1nW1YDIvBQxrYCz52eYYybNeYOMBi2fDPPVVRLq7yR8gd0T7X5pIAb2zQ',175.00,'2024-04-07 21:18:36'),
('a7d1ef98-f17f-11ee-9510-5a01d62b6bd5',55,'unpaid','cs_test_a1AjMSzgKUe6f8nF0Y98KM4gNPOK7bVTfaxiczH4eQkK9Swaf617fxuqj8',35.00,'2024-04-03 08:01:48'),
('b5b0d1ec-f40e-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a1Hyni2zSWUBkKNWaWlZ7GbDNjw9G3SVVufimL80f0zLwdAxukkmHqNkw3',35.00,'2024-04-06 14:10:50'),
('b6d87533-f40e-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a1wdBytLaAsINDmYzYDwUPuzjAO4FTg1g6MnC863f7Kl2iv3KVDoLklS05',35.00,'2024-04-06 14:10:52'),
('b7a819da-f17f-11ee-9510-5a01d62b6bd5',55,'unpaid','cs_test_a16gZiMuCGGV7SVl4bfQ1P10nd0TbRmaYIVM6jjGjO7hdL6HmjiEAA4hUj',17.50,'2024-04-03 08:02:14'),
('c30b3b67-f17f-11ee-9510-5a01d62b6bd5',55,'paid','cs_test_a16Z4BUAqFrNPFE5fsT8HyHMwDPaeLki6IH5dm61GdFiEjryQKgCR5gnsb',35.00,'2024-04-03 08:02:34'),
('c4164e6a-f40e-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_b11FVKtYY256LxfkjcKzqh7eRU8onxSZcah1jUCsgVWX3B00QNOLE0XizH',355.00,'2024-04-06 14:11:14'),
('c5bab1f4-f40e-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_b1zw95PtllfKap0n1j6a4PAANSxCE5nZr3OZFurTagAWDQDI5eqkN0Blhv',355.00,'2024-04-06 14:11:17'),
('c90ddfac-f17e-11ee-9510-5a01d62b6bd5',55,'paid','cs_test_a1n75HoGxcau8ryc63Bh9q1Cqhc0ZPFnCqwh7qhvqS8ox7rcsAFVsKNHpT',35.00,'2024-04-03 07:55:34'),
('cce1c539-f4ff-11ee-9510-5a01d62b6bd5',56,'unpaid','cs_test_a1scFSSM69pj3tlZTDPYNqEYoEYuTzE4kg9IgSExy64NlBbuLXOHvyZS6X',45.00,'2024-04-07 18:56:37'),
('ea38fe2f-f4fe-11ee-9510-5a01d62b6bd5',1,'unpaid','cs_test_b1xRBMEenTfNEkyoqSLEV6QA16oDIyOr2pNq0O3FAw79XyOg1bfyk8mBnN',52.50,'2024-04-07 18:50:18'),
('f6d5a759-f17d-11ee-9510-5a01d62b6bd5',55,'paid','cs_test_b1u9m1qmpEqftxl18oXqQQXF2Em63gksPVSHBEN54ZNcMl2HdSIQrvtr5E',50.00,'2024-04-03 07:49:41'),
('f74dd2ab-f4fe-11ee-9510-5a01d62b6bd5',9,'paid','cs_test_a1x0zv88Dqj3umcUQaQf1AjNm7rOALh9ZsXDfDQX2zD3Hz80nGOb4tFeGl',17.50,'2024-04-07 18:50:40');
/*!40000 ALTER TABLE `Order` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`gr2`@`%`*/ /*!50003 TRIGGER BeforeInsertOrder
    BEFORE INSERT ON `Order`
    FOR EACH ROW
BEGIN
    IF NEW.OrderUUID IS NULL OR NEW.OrderUUID = '' THEN
        SET NEW.OrderUUID = UUID();
END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `OrderItem`
--

DROP TABLE IF EXISTS `OrderItem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OrderItem` (
  `ItemID` int(11) NOT NULL AUTO_INCREMENT,
  `OrderID` char(50) DEFAULT NULL,
  `EventName` varchar(255) DEFAULT NULL,
  `Venue` varchar(255) DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `CustomerName` varchar(255) DEFAULT NULL,
  `EventID` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ItemID`),
  KEY `OrderID` (`OrderID`),
  CONSTRAINT `OrderItem_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `Order` (`OrderUUID`)
) ENGINE=InnoDB AUTO_INCREMENT=292 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OrderItem`
--

LOCK TABLES `OrderItem` WRITE;
/*!40000 ALTER TABLE `OrderItem` DISABLE KEYS */;
INSERT INTO `OrderItem` VALUES
(136,'61818abd-f17d-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(137,'7066b433-f17d-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(138,'7066b433-f17d-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-2','HISTORY',''),
(139,'f6d5a759-f17d-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(140,'f6d5a759-f17d-11ee-9510-5a01d62b6bd5','Gumbo Kings','Patronaat','2024-07-25 18:00:00','2024-07-25 19:00:00',15.00,1,'Mariia ','j-1','JAZZ',''),
(141,'c90ddfac-f17e-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(142,'a7d1ef98-f17f-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(143,'b7a819da-f17f-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-1','HISTORY',''),
(144,'c30b3b67-f17f-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(145,'67e8a5fc-f180-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(146,'07f10706-f181-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(147,'38d4119d-f181-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(148,'2ec2a179-f40a-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'thepiguy','d-2','DAY_JAZZ',''),
(149,'2ec2a179-f40a-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-21','HISTORY',''),
(150,'2ec2a179-f40a-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-7','HISTORY',''),
(151,'2ec2a179-f40a-11ee-9510-5a01d62b6bd5','Grand Cafe Brinkman Session 1 - Child Ticket','Grote Markt 13, 2011 RC Haarlem','2024-07-25 16:30:00','2024-07-25 17:00:00',17.50,1,'thepiguy','c-73','CHILD_YUMMY',''),
(152,'4b5d468e-f40c-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(153,'36119e46-f40d-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'zoran','d-2','DAY_JAZZ',''),
(154,'4b29a1a6-f40d-11ee-9510-5a01d62b6bd5','Café de Roemer Session 3','Botermarkt 17, 2011 XL Haarlem','2024-07-25 21:00:00','2024-07-25 22:30:00',35.00,1,'zoran','y-97','YUMMY','This is the reservation fee for the restaurant.'),
(155,'582ec860-f40d-11ee-9510-5a01d62b6bd5','Restaurant Fris Session 1 - Child Ticket','Twijnderslaan 7, 2012 BG Haarlem','2024-07-25 17:30:00','2024-07-25 19:00:00',22.50,1,'zoran','c-13','CHILD_YUMMY',''),
(156,'7481d79a-f40d-11ee-9510-5a01d62b6bd5','Ratatouille Session 1','Spaarne 96, 2011 CL Haarlem','2024-07-25 17:00:00','2024-07-25 19:00:00',45.00,4,'zoran','y-1','YUMMY','This is the reservation fee for the restaurant.'),
(157,'b5b0d1ec-f40e-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'zoran','d-2','DAY_JAZZ',''),
(158,'b6d87533-f40e-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'zoran','d-2','DAY_JAZZ',''),
(159,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'zoran','d-2','DAY_JAZZ',''),
(160,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-1','HISTORY',''),
(161,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-2','HISTORY',''),
(162,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-3','HISTORY',''),
(163,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-4','HISTORY',''),
(164,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-20','HISTORY',''),
(165,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-21','HISTORY',''),
(166,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-22','HISTORY',''),
(167,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-23','HISTORY',''),
(168,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'zoran','f-1','FAM_HISTORY',''),
(169,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'zoran','f-2','FAM_HISTORY',''),
(170,'c4164e6a-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'zoran','f-3','FAM_HISTORY',''),
(171,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'zoran','d-2','DAY_JAZZ',''),
(172,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-1','HISTORY',''),
(173,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-2','HISTORY',''),
(174,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-3','HISTORY',''),
(175,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-4','HISTORY',''),
(176,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-20','HISTORY',''),
(177,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-21','HISTORY',''),
(178,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-22','HISTORY',''),
(179,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'zoran','h-23','HISTORY',''),
(180,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'zoran','f-1','FAM_HISTORY',''),
(181,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'zoran','f-2','FAM_HISTORY',''),
(182,'c5bab1f4-f40e-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'zoran','f-3','FAM_HISTORY',''),
(183,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,2,'thepiguy','d-2','DAY_JAZZ',''),
(184,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-1','HISTORY',''),
(185,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-2','HISTORY',''),
(186,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-3','HISTORY',''),
(187,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-4','HISTORY',''),
(188,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-20','HISTORY',''),
(189,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-21','HISTORY',''),
(190,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-22','HISTORY',''),
(191,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-23','HISTORY',''),
(192,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-1','FAM_HISTORY',''),
(193,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-2','FAM_HISTORY',''),
(194,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-3','FAM_HISTORY',''),
(195,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-4','FAM_HISTORY',''),
(196,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-20','FAM_HISTORY',''),
(197,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-21','FAM_HISTORY',''),
(198,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-22','FAM_HISTORY',''),
(199,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'thepiguy','f-23','FAM_HISTORY',''),
(200,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-5','HISTORY',''),
(201,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-6','HISTORY',''),
(202,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-7','HISTORY',''),
(203,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-8','HISTORY',''),
(204,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-24','HISTORY',''),
(205,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-25','HISTORY',''),
(206,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-26','HISTORY',''),
(207,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-27','HISTORY',''),
(208,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 3','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-29','HISTORY',''),
(209,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 3','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-30','HISTORY',''),
(210,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Chinese Session 3','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'thepiguy','h-31','HISTORY',''),
(211,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'thepiguy','f-5','FAM_HISTORY',''),
(212,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'thepiguy','f-6','FAM_HISTORY',''),
(213,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'thepiguy','f-7','FAM_HISTORY',''),
(214,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Dutch Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'thepiguy','f-8','FAM_HISTORY',''),
(215,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','English Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'thepiguy','f-24','FAM_HISTORY',''),
(216,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Gumbo Kings','Patronaat','2024-07-25 18:00:00','2024-07-25 19:00:00',15.00,1,'thepiguy','j-1','JAZZ',''),
(217,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Wicked Jazz Sounds','Patronaat','2024-07-25 18:00:00','2024-07-25 19:00:00',10.00,1,'thepiguy','j-4','JAZZ',''),
(218,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Tom Thomsom Assemble','Patronaat','2024-07-25 19:30:00','2024-07-25 20:30:00',10.00,1,'thepiguy','j-5','JAZZ',''),
(219,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Evolve','Patronaat','2024-07-25 19:30:00','2024-07-25 20:30:00',15.00,1,'thepiguy','j-2','JAZZ',''),
(220,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Jonna Frazer','Patronaat','2024-07-25 21:00:00','2024-07-25 22:00:00',10.00,1,'thepiguy','j-6','JAZZ',''),
(221,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Ntjam Rosie','Patronaat','2024-07-25 21:00:00','2024-07-25 22:00:00',15.00,1,'thepiguy','j-3','JAZZ',''),
(222,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-26 00:00:00','2024-07-26 00:00:00',35.00,1,'thepiguy','d-3','DAY_JAZZ',''),
(223,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Myles Sanko','Patronaat','2024-07-26 18:00:00','2024-07-26 19:00:00',10.00,1,'thepiguy','j-10','JAZZ',''),
(224,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Fox & The Mayors','Patronaat','2024-07-26 18:00:00','2024-07-26 19:00:00',15.00,1,'thepiguy','j-7','JAZZ',''),
(225,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Ruis Soundsystem','Patronaat','2024-07-26 19:30:00','2024-07-26 20:30:00',10.00,1,'thepiguy','j-11','JAZZ',''),
(226,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Uncle Sue','Patronaat','2024-07-26 19:30:00','2024-07-26 20:30:00',15.00,1,'thepiguy','j-8','JAZZ',''),
(227,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Chris Allen','Patronaat','2024-07-26 21:00:00','2024-07-26 22:00:00',15.00,1,'thepiguy','j-9','JAZZ',''),
(228,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','The Family XL','Patronaat','2024-07-26 21:00:00','2024-07-26 22:00:00',10.00,1,'thepiguy','j-12','JAZZ',''),
(229,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-27 00:00:00','2024-07-27 00:00:00',35.00,1,'thepiguy','d-4','DAY_JAZZ',''),
(230,'1eb660bf-f40f-11ee-9510-5a01d62b6bd5','Han Bennink','Patronaat','2024-07-27 18:00:00','2024-07-27 19:00:00',10.00,1,'thepiguy','j-16','JAZZ',''),
(231,'8602646a-f40f-11ee-9510-5a01d62b6bd5','Evolve','Grote Markt','2024-07-28 17:00:00','2024-07-28 18:00:00',0.00,1,'zoran','j-21','JAZZ',''),
(232,'87573d67-f40f-11ee-9510-5a01d62b6bd5','Evolve','Grote Markt','2024-07-28 17:00:00','2024-07-28 18:00:00',0.00,1,'zoran','j-21','JAZZ',''),
(233,'8e91760d-f40f-11ee-9510-5a01d62b6bd5','Gare du Nord','Grote Markt','2024-07-28 20:00:00','2024-07-28 21:00:00',0.00,1,'thepiguy','j-24','JAZZ',''),
(234,'10d82b14-f424-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(235,'10d82b14-f424-11ee-9510-5a01d62b6bd5','Wicked Jazz Sounds','Patronaat','2024-07-25 18:00:00','2024-07-25 19:00:00',10.00,1,'Mariia ','j-4','JAZZ',''),
(236,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'Mariia ','d-2','DAY_JAZZ',''),
(237,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-1','HISTORY',''),
(238,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-2','HISTORY',''),
(239,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-3','HISTORY',''),
(240,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-4','HISTORY',''),
(241,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-20','HISTORY',''),
(242,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-21','HISTORY',''),
(243,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-22','HISTORY',''),
(244,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'Mariia ','h-23','HISTORY',''),
(245,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-1','FAM_HISTORY',''),
(246,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-2','FAM_HISTORY',''),
(247,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-3','FAM_HISTORY',''),
(248,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-4','FAM_HISTORY',''),
(249,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-20','FAM_HISTORY',''),
(250,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-21','FAM_HISTORY',''),
(251,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-22','FAM_HISTORY',''),
(252,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 1 - x4 (Family) Package','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',60.00,1,'Mariia ','f-23','FAM_HISTORY',''),
(253,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-5','HISTORY',''),
(254,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-6','HISTORY',''),
(255,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-7','HISTORY',''),
(256,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-8','HISTORY',''),
(257,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-24','HISTORY',''),
(258,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-25','HISTORY',''),
(259,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-26','HISTORY',''),
(260,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-27','HISTORY',''),
(261,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 3','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-29','HISTORY',''),
(262,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 3','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-30','HISTORY',''),
(263,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Chinese Session 3','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',17.50,1,'Mariia ','h-31','HISTORY',''),
(264,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-5','FAM_HISTORY',''),
(265,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-6','FAM_HISTORY',''),
(266,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-7','FAM_HISTORY',''),
(267,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-8','FAM_HISTORY',''),
(268,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-24','FAM_HISTORY',''),
(269,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-25','FAM_HISTORY',''),
(270,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-26','FAM_HISTORY',''),
(271,'02eada61-f45e-11ee-9510-5a01d62b6bd5','Dutch Session 2 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-27','FAM_HISTORY',''),
(272,'02eada61-f45e-11ee-9510-5a01d62b6bd5','English Session 3 - x4 (Family) Package','Church of St. Bavo','2024-07-25 13:00:00','2024-07-25 15:30:00',60.00,1,'Mariia ','f-29','FAM_HISTORY',''),
(273,'27b16e9e-f460-11ee-9510-5a01d62b6bd5','Gumbo Kings','Patronaat','2024-07-25 18:00:00','2024-07-25 19:00:00',15.00,1,'Mariia ','j-1','JAZZ',''),
(274,'6630f300-f4fb-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'thepiguy','d-2','DAY_JAZZ',''),
(275,'6630f300-f4fb-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-3','HISTORY',''),
(276,'6630f300-f4fb-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-23','HISTORY',''),
(277,'67081949-f4fc-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-1','HISTORY',''),
(278,'67081949-f4fc-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'thepiguy','d-2','DAY_JAZZ',''),
(279,'4c476e23-f4fd-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-1','HISTORY',''),
(280,'676d7735-f4fe-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-1','HISTORY',''),
(281,'676d7735-f4fe-11ee-9510-5a01d62b6bd5','Grand Cafe Brinkman Session 1 - Child Ticket','Grote Markt 13, 2011 RC Haarlem','2024-07-25 16:30:00','2024-07-25 17:00:00',17.50,1,'thepiguy','c-73','CHILD_YUMMY',''),
(282,'ea38fe2f-f4fe-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'John Doe','h-1','HISTORY',''),
(283,'ea38fe2f-f4fe-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,1,'John Doe','d-2','DAY_JAZZ',''),
(284,'f74dd2ab-f4fe-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-1','HISTORY',''),
(285,'cce1c539-f4ff-11ee-9510-5a01d62b6bd5','Ratatouille Session 1','Spaarne 96, 2011 CL Haarlem','2024-07-25 17:00:00','2024-07-25 19:00:00',45.00,1,'zoran','y-1','YUMMY','This is the reservation fee for the restaurant.'),
(286,'846960ed-f504-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,1,'thepiguy','h-2','HISTORY',''),
(287,'5c1ffa17-f513-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,3,'thepiguy','d-2','DAY_JAZZ',''),
(288,'a2106189-f513-11ee-9510-5a01d62b6bd5','Jazz Day Pass','Patronaat','2024-07-25 00:00:00','2024-07-25 00:00:00',35.00,4,'thepiguy','d-2','DAY_JAZZ',''),
(289,'a2106189-f513-11ee-9510-5a01d62b6bd5','Dutch Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,2,'thepiguy','h-3','HISTORY',''),
(290,'871fde1d-f514-11ee-9510-5a01d62b6bd5','English Session 1','Church of St. Bavo','2024-07-25 10:00:00','2024-07-25 12:30:00',17.50,3,'thepiguy','h-1','HISTORY',''),
(291,'871fde1d-f514-11ee-9510-5a01d62b6bd5','Ratatouille Session 1 (Reservation)','Spaarne 96, 2011 CL Haarlem','2024-07-28 17:00:00','2024-07-28 19:00:00',10.00,1,'thepiguy','y-10','YUMMY','This is the reservation fee for the restaurant.');
/*!40000 ALTER TABLE `OrderItem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Payment`
--

DROP TABLE IF EXISTS `Payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Payment` (
  `InvoiceID` int(11) NOT NULL AUTO_INCREMENT,
  `PaymentDateTime` datetime DEFAULT NULL,
  `PaymentMethod` varchar(100) DEFAULT NULL,
  `InvoiceDateTime` datetime DEFAULT NULL,
  `OrderID` varchar(200) DEFAULT NULL,
  `CustomerName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `BillingAddress` varchar(255) DEFAULT NULL,
  `TotalAmount` decimal(10,2) DEFAULT NULL,
  `Tax` decimal(10,2) DEFAULT NULL,
  `Currency` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`InvoiceID`),
  KEY `OrderID` (`OrderID`),
  CONSTRAINT `Payment_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `Order` (`OrderUUID`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Payment`
--

LOCK TABLES `Payment` WRITE;
/*!40000 ALTER TABLE `Payment` DISABLE KEYS */;
INSERT INTO `Payment` VALUES
(81,'2024-04-03 07:46:27','ideal','2024-04-03 07:46:39','7066b433-f17d-11ee-9510-5a01d62b6bd5','Mariia','kovalenko.mary2004@gmail.com','+31645678959','Professor Tulpplein 1, Amsterdam, NL, 1018 GX',52.50,9.11,'eur'),
(82,'2024-04-03 07:50:09','ideal','2024-04-03 07:50:22','f6d5a759-f17d-11ee-9510-5a01d62b6bd5','mariia','kovalenko.mary2004@gmail.com','+31645674567','Professor Tulpplein 1, Amsterdam, NL, 1018 GX',50.00,8.67,'eur'),
(83,'2024-04-03 07:56:03','ideal','2024-04-03 07:57:02','c90ddfac-f17e-11ee-9510-5a01d62b6bd5','Mariia','kovalenko.mary2004@gmail.com','+31634567897','Professor Tulpplein 1, Amsterdam, NL, 1018 GX',35.00,6.07,'eur'),
(84,'2024-04-03 08:02:57','ideal','2024-04-03 08:03:09','c30b3b67-f17f-11ee-9510-5a01d62b6bd5','mariia','kovalenko.mary2004@gmail.com','+31645738567','Professor Tulpplein 1, Amsterdam, NL, 1018 GX',35.00,6.07,'eur'),
(85,'2024-04-03 08:07:34','ideal','2024-04-03 08:07:47','67e8a5fc-f180-11ee-9510-5a01d62b6bd5','mariia','kovalenko.mary2004@gmail.com','+31634567678','Professor Tulpplein 1, Amsterdam, NL, 1018 GX',35.00,6.07,'eur'),
(86,'2024-04-03 08:13:28','ideal','2024-04-03 08:13:50','38d4119d-f181-11ee-9510-5a01d62b6bd5','mariiiia','kovalenko.mary2004@gmail.com','+31654567678','Professor Tulpplein 1, Amsterdam, NL, 1018 GX',35.00,6.07,'eur'),
(87,'2024-04-06 13:40:43','ideal','2024-04-06 13:40:56','2ec2a179-f40a-11ee-9510-5a01d62b6bd5','Big man','test@testing.com','+31612345677','Burgemeester de Vlugtlaan, Amsterdam, NL, 1010NT',87.50,15.19,'eur'),
(88,'2024-04-06 13:54:09','ideal','2024-04-06 13:54:20','4b5d468e-f40c-11ee-9510-5a01d62b6bd5','Mariia','kovalenko.mary2004@gmail.com','+31648567868','Professor Tulpplein 1, Amsterdam, NL, 1018 GX',35.00,6.07,'eur'),
(89,'2024-04-06 14:02:45','ideal','2024-04-06 14:03:27','7481d79a-f40d-11ee-9510-5a01d62b6bd5','dags','zster1204@gmail.com','+31612345675','asdgaasdg, sagdssa, GA, ',180.00,31.24,'eur'),
(90,'2024-04-07 18:25:44','ideal','2024-04-07 18:25:54','6630f300-f4fb-11ee-9510-5a01d62b6bd5','Ass','test@testing.com','+31612345677','Stationsplein 9b, Haarlem, NL, 2011 LR',70.00,12.15,'eur'),
(91,'2024-04-07 18:32:50','ideal','2024-04-07 18:32:58','67081949-f4fc-11ee-9510-5a01d62b6bd5','KAD','thepiguy@tuta.io','+31612345677','Stationsplein 9b, Haarlem, NL, 2011 LR',52.50,9.11,'eur'),
(92,'2024-04-07 18:47:02','ideal','2024-04-07 18:47:12','676d7735-f4fe-11ee-9510-5a01d62b6bd5','KUNAL DANDEKAR','thepiguy@tuta.io','+31612345677','Stationsplein 9b, Haarlem, NL, 2011 LR',35.00,6.08,'eur'),
(93,'2024-04-07 18:51:00','ideal','2024-04-07 18:51:09','f74dd2ab-f4fe-11ee-9510-5a01d62b6bd5','AAA','thepiguy@tuta.io','+31612345677','Stationsplein 9b, Haarlem, NL, 2011 LR',17.50,3.04,'eur'),
(94,'2024-04-07 19:30:43','ideal','2024-04-07 19:30:51','846960ed-f504-11ee-9510-5a01d62b6bd5','AAA','thepiguy@tuta.io','+31612345677','Stationsplein 9b, Haarlem, NL, 2011 LR',17.50,3.04,'eur'),
(95,'2024-04-07 21:25:25','ideal','2024-04-07 21:25:33','871fde1d-f514-11ee-9510-5a01d62b6bd5','Kad','thepiguy@tuta.io','+31612345677','Stationsplein 9b, Haarlem, NL, 2011 LR',62.50,10.85,'eur');
/*!40000 ALTER TABLE `Payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Performance`
--

DROP TABLE IF EXISTS `Performance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Performance` (
  `PerformanceID` int(11) NOT NULL AUTO_INCREMENT,
  `ArtistID` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `StartDateTime` datetime NOT NULL,
  `EndDateTime` datetime NOT NULL,
  `AvailableTickets` int(11) NOT NULL,
  `DayID` int(11) NOT NULL,
  `Details` varchar(50) DEFAULT NULL,
  `TotalTickets` int(11) NOT NULL,
  PRIMARY KEY (`PerformanceID`),
  KEY `ArtistID` (`ArtistID`),
  KEY `DayID` (`DayID`),
  CONSTRAINT `Performance_ibfk_1` FOREIGN KEY (`ArtistID`) REFERENCES `Artist` (`ArtistID`),
  CONSTRAINT `Performance_ibfk_2` FOREIGN KEY (`DayID`) REFERENCES `JazzDay` (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Performance`
--

LOCK TABLES `Performance` WRITE;
/*!40000 ALTER TABLE `Performance` DISABLE KEYS */;
INSERT INTO `Performance` VALUES
(1,2,15.00,'2024-07-25 18:00:00','2024-07-25 19:00:00',269,1,'Main Hall',270),
(2,3,15.00,'2024-07-25 19:30:00','2024-07-25 20:30:00',270,1,'Main Hall',270),
(3,4,15.00,'2024-07-25 21:00:00','2024-07-25 22:00:00',270,1,'Main Hall',270),
(4,5,10.00,'2024-07-25 18:00:00','2024-07-25 19:00:00',180,1,'Second Hall',180),
(5,6,10.00,'2024-07-25 19:30:00','2024-07-25 20:30:00',180,1,'Second Hall',180),
(6,7,10.00,'2024-07-25 21:00:00','2024-07-25 22:00:00',180,1,'Second Hall',180),
(7,8,15.00,'2024-07-26 18:00:00','2024-07-26 19:00:00',270,2,'Main Hall',270),
(8,9,15.00,'2024-07-26 19:30:00','2024-07-26 20:30:00',270,2,'Main Hall',270),
(9,10,15.00,'2024-07-26 21:00:00','2024-07-26 22:00:00',270,2,'Main Hall',270),
(10,11,10.00,'2024-07-26 18:00:00','2024-07-26 19:00:00',180,2,'Second Hall',180),
(11,12,10.00,'2024-07-26 19:30:00','2024-07-26 20:30:00',180,2,'Second Hall',180),
(12,13,10.00,'2024-07-26 21:00:00','2024-07-26 22:00:00',180,2,'Second Hall',180),
(13,14,15.00,'2024-07-27 18:00:00','2024-07-27 19:00:00',270,3,'Main Hall',270),
(14,15,15.00,'2024-07-27 19:30:00','2024-07-27 20:30:00',270,3,'Main Hall',270),
(15,16,15.00,'2024-07-27 21:00:00','2024-07-27 22:00:00',270,3,'Main Hall',270),
(16,17,10.00,'2024-07-27 18:00:00','2024-07-27 19:00:00',135,3,'Second Hall',135),
(17,18,10.00,'2024-07-27 19:30:00','2024-07-27 20:30:00',135,3,'Second Hall',135),
(18,19,10.00,'2024-07-27 21:00:00','2024-07-27 22:00:00',135,3,'Second Hall',135),
(19,12,0.00,'2024-07-28 15:00:00','2024-07-28 16:00:00',0,4,NULL,0),
(20,5,0.00,'2024-07-28 16:00:00','2024-07-28 17:00:00',0,4,NULL,0),
(21,3,0.00,'2024-07-28 17:00:00','2024-07-28 18:00:00',0,4,NULL,0),
(22,18,0.00,'2024-07-28 18:00:00','2024-07-28 19:00:00',0,4,NULL,0),
(23,2,0.00,'2024-07-28 19:00:00','2024-07-28 20:00:00',0,4,NULL,0),
(24,14,0.00,'2024-07-28 20:00:00','2024-07-28 21:00:00',0,4,NULL,0),
(33,29,10.00,'2024-04-05 20:00:00','2024-04-05 21:00:00',12,28,'fff',14);
/*!40000 ALTER TABLE `Performance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ResetToken`
--

DROP TABLE IF EXISTS `ResetToken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ResetToken` (
  `Token` char(36) NOT NULL DEFAULT uuid(),
  `Email` varchar(255) DEFAULT NULL,
  `Time` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Token`),
  UNIQUE KEY `unique_email` (`Email`),
  CONSTRAINT `ResetToken_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `User` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ResetToken`
--

LOCK TABLES `ResetToken` WRITE;
/*!40000 ALTER TABLE `ResetToken` DISABLE KEYS */;
INSERT INTO `ResetToken` VALUES
('fccd8a7a-f40c-11ee-9510-5a01d62b6bd5','zster1204@gmail.com','2024-04-06 11:58:31');
/*!40000 ALTER TABLE `ResetToken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Restaurant`
--

DROP TABLE IF EXISTS `Restaurant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Restaurant` (
  `RestaurantID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `SubTitle` varchar(255) NOT NULL,
  `HeaderImg` varchar(255) NOT NULL,
  `HeaderAlt` varchar(255) NOT NULL,
  `Category1` varchar(255) NOT NULL,
  `Category2` varchar(255) NOT NULL,
  `Category3` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Stars` int(11) NOT NULL,
  `FoodImg1` varchar(255) NOT NULL,
  `FoodAlt1` varchar(255) NOT NULL,
  `FoodImg2` varchar(255) NOT NULL,
  `FoodAlt2` varchar(255) NOT NULL,
  `FoodImg3` varchar(255) NOT NULL,
  `FoodAlt3` varchar(255) NOT NULL,
  `SessionsADay` int(11) NOT NULL,
  `SessionsDuration` varchar(255) NOT NULL,
  `SessionsStartTime` varchar(255) NOT NULL,
  `SessionsTotalSeats` int(11) NOT NULL,
  `PriceAdult` decimal(10,2) NOT NULL,
  `PriceChild` decimal(10,2) NOT NULL,
  `Recipe` text NOT NULL,
  `RecipeImg` varchar(255) NOT NULL,
  `RecipeAlt` varchar(255) NOT NULL,
  `Telephone` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ChamberOfCommerce` varchar(255) NOT NULL,
  PRIMARY KEY (`RestaurantID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Restaurant`
--

LOCK TABLES `Restaurant` WRITE;
/*!40000 ALTER TABLE `Restaurant` DISABLE KEYS */;
INSERT INTO `Restaurant` VALUES
(1,'Ratatouille','Food & Wine','img/yummy/RatatouileHeader.png','The inside of the ratatouile Restaurant, showcasing places to sit at and flowers.','French','Fish & Seafood','European','Spaarne 96, 2011 CL Haarlem',4,'img/yummy/RatatouileFood1.png','Food being displayed on a plate.','img/yummy/RatatouileFood2.png','Food being grilled looking tasty.','img/yummy/RatatouileFood3.png','Desert being displayed which looks very weird.',3,'2 hours','17:00',52,45.00,22.50,'Preheat oven to 190˚C. Slice eggplant, tomatoes, squash, and zucchini into approximately 1-mm rounds. Make sauce: Sauté onion, garlic, and bell peppers in olive oil until soft, Add crushed tomatoes, season, and stir in basil. Arrange veggies in alternating slices on sauce, Season. Make herb seasoning: Mix basil, garlic, parsley, thyme, salt, pepper, and olive oil, Spoon over veggies. Cover with foil and bake for 40 minutes. Uncover and bake for an additional 20 minutes until veggies are softened. Serve hot as a main or side. Reheat covered with foil at 180˚C for 15 minutes or microwave. Enjoy!','img/yummy/RatatouileRecipe.png','Ratatouile which you can get at Restaurant Ratatouile and also make for yourself being displayed.','023 542 7270','info@ratatouilefoodandwine.nl','58174923'),
(2,'Café de Roemer','Tasty drinks','img/yummy/CaféDeRoemerHeader.png','The outside of the Café De Roemer Restaurant, showcasing sunny places to sit.','Dutch','Fish & Seafood','European','Botermarkt 17, 2011 XL Haarlem',4,'img/yummy/CaféDeRoemerFood1.png','Onion soup.','img/yummy/CaféDeRoemerFood2.png','Hamburger on a plate.','img/yummy/CaféDeRoemerFood3.png','Meat.',3,'1 and a half hours','18:00',35,35.00,17.50,'Roast the pumpkin halves at 200°C (400°F) for 45-60 minutes until tender, Scoop out the flesh and set aside. In a large pot, sauté the chopped onion and minced garlic until softened, about 3-4 minutes, Add sliced carrot and diced potato, cook for another 5 minutes. Add the roasted pumpkin flesh, vegetable broth, ground cumin, ground coriander, and optional chili powder, Bring to a boil, then simmer for 20-25 minutes until vegetables are tender. Blend the soup until smooth using an immersion blender or regular blender. Season with salt and pepper to taste. Serve hot, garnished with fresh parsley or cilantro, Optionally, swirl in cream or coconut milk for added richness. Enjoy your Café de Roemer-inspired stuffed pumpkin soup!','img/yummy/CaféDeRoemerRecipe.png','Pumpkin soup which you can get at Café De Roemer and also make for yourself being displayed.','023 532 5267','info@cafederoemer.nl','91471338'),
(3,'Restaurant ML','Dining at its finest','img/yummy/RestaurantMLHeader.png','The inside of Restaurant ML, showcasing a classy place to eat food at.','Dutch','Fish & Seafood','European','Kleine Houtstraat 70, 2011 DR Haarlem',4,'img/yummy/RestaurantMLFood1.png','Food.','img/yummy/RestaurantMLFood2.png','Tomatoes on a plate.','img/yummy/RestaurantMLFood3.png','Some cool looking dish.',2,'2 hours','17:00',60,45.00,22.50,'Toss beef cubes with flour, salt, and pepper. Brown beef in batches in a large pot with oil. Cook onions and garlic until softened. Add carrots, celery, and mushrooms; cook for 5 minutes. Return beef to pot, Pour in broth and beer, add bay leaves and thyme, Simmer. Cover and cook on low heat for 2-3 hours, stirring occasionally. Adjust seasoning, Remove bay leaves. Serve hot, garnished with parsley, Enjoy with bread or mashed potatoes. Enjoy this comforting Haarlem-style beef stew!','img/yummy/RestaurantMLRecipe.png','Haarlem-style Beef stew.','023 512 3910','welkom@mlinhaarlem.nl','70276935'),
(4,'Restaurant Fris','Casual and cozy Fine Dining','img/yummy/RestaurantFrisHeader.png','The inside of the Fris Restaurant, showcasing places to sit at and flowers.','Dutch','French','European','Twijnderslaan 7, 2012 BG Haarlem',4,'img/yummy/RestaurantFrisFood1.png','Food being displayed on a plate.','img/yummy/RestaurantFrisFood2.png','A desert with pink and green looking food.','img/yummy/RestaurantFrisFood3.png','6 deserts being displayed on a plate, looking very tasty.',3,'1 and a half hours','17:30',45,45.00,22.50,'Preheat oven to 200°C. Cut pastry sheets into 10 rectangles each, Bake on lined trays, pressed between baking paper and another tray, for 35-40 minutes until golden, Cool on a wire rack.\r\nIn a saucepan, heat 200g caster sugar and 1 cup water until 120°C. Whisk eggs until thick, Pour hot sugar syrup into eggs, whisking for 10 mins until glossy. Roast strawberries with 50g sugar, vanilla, and pod for 15 mins, Cool. To serve, pipe mascarpone on half the pastry rectangles, add strawberries, syrup, and top with more pastry, Repeat and serve immediately. Enjoy!','img/yummy/RestaurantFrisRecipe.png','A dish which you can get at Restaurant Fris being displayed.','023 531 0717','info@restaurantfris.nl','88976483'),
(5,'Specktakel','Weird looking food!','img/yummy/SpecktakelHeader.png','The inside of Specktakel, showcasing a relaxing place to eat food at.','European','International','Asian','Spekstraat 4, 2011 HM Haarlem',3,'img/yummy/SpecktakelFood1.png','Beefy meal being displayed.','img/yummy/SpecktakelFood2.png','Food.','img/yummy/SpecktakelFood3.png','Desert on a burnt letter?.',3,'1 and a half hours','17:00',36,35.00,17.50,'Preheat oven to 180°C (350°F). Cook bacon until browned, Add onions and garlic; cook until softened. Layer half of the potatoes in a greased baking dish, Season with salt and pepper. Spread half of the bacon mixture over potatoes, Repeat layers. Combine cream and broth; pour over layers. Cover with foil and bake for 40-45 minutes. Remove foil, sprinkle with cheese, and bake for 10-15 more minutes. Garnish with chives before serving. Enjoy your Specktakel!','img/yummy/SpecktakelRecipe.png','Dutch Bacon and Potato Casserole.','023 532 3841','info@specktakel.nl','82057427'),
(6,'Grand Cafe Brinkman','Come eat with us!','img/yummy/GrandCafeBrinkmanHeader.png','The outside of GrandCafeBrinkman, showcasing a big and old building.','Dutch','European','Modern','Grote Markt 13, 2011 RC Haarlem',3,'img/yummy/GrandCafeBrinkmanFood1.png','Salad.','img/yummy/GrandCafeBrinkmanFood2.png','Salad with bacon.','img/yummy/GrandCafeBrinkmanFood3.png','Bread with chicken and salad.',3,'1 and a half hours','16:30',100,35.00,17.50,'Cook penne pasta; drain and set aside. Sauté chicken in olive oil until cooked; remove from skillet. Sauté onion and garlic; add bell peppers and tomatoes. Return chicken to skillet; pour in cream and simmer. Add cooked pasta, Parmesan, salt, and pepper; toss to combine. Serve hot, garnished with basil leaves. Enjoy your Grand Cafe Brinkman-style chicken pasta!','img/yummy/GrandCafeBrinkmanRecipe.png','Brinkman-style Chicken Pasta.','023 532 3111','info@grandcafebrinkmann.nl','34306461'),
(7,'Toujours','An experience!','img/yummy/ToujoursHeader.png','The inside of the restaurant Toujours, showcasing a stylish interior.','Dutch','Fish & Seafood','European','Oude Groenmarkt 10-12, 2011 HL Haarlem',3,'img/yummy/ToujoursFood1.png','Tasty looking food being served on a wooden plank.','img/yummy/ToujoursFood2.png','Looks yum.','img/yummy/ToujoursFood3.png','Beef cut in pieces.',3,'1 and a half hours','17:30',48,35.00,17.50,'Preheat oven to 200°C (400°F). Mix honey, soy sauce, olive oil, garlic, and ginger. Place salmon fillets in a baking dish. Pour honey-soy mixture over salmon, season with salt and pepper. Bake for 12-15 minutes. Optionally, brush with more glaze halfway through. Garnish with parsley or chives. Serve hot. Enjoy your Haarlem Honey-Glazed Salmon!','img/yummy/ToujoursRecipe.png','Honey Glazed Salmon.','023 532 1699','info@restauranttoujours.nl','61902144');
/*!40000 ALTER TABLE `Restaurant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Session`
--

DROP TABLE IF EXISTS `Session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Session` (
  `SessionID` int(11) NOT NULL AUTO_INCREMENT,
  `RestaurantID` int(11) NOT NULL,
  `DayID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `TotalSeats` int(11) DEFAULT NULL,
  `RemainingSeats` int(11) DEFAULT NULL,
  PRIMARY KEY (`SessionID`),
  KEY `RestaurantID` (`RestaurantID`),
  KEY `DayID` (`DayID`),
  CONSTRAINT `Session_ibfk_1` FOREIGN KEY (`RestaurantID`) REFERENCES `Restaurant` (`RestaurantID`),
  CONSTRAINT `Session_ibfk_2` FOREIGN KEY (`DayID`) REFERENCES `YummyEventDays` (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Session`
--

LOCK TABLES `Session` WRITE;
/*!40000 ALTER TABLE `Session` DISABLE KEYS */;
INSERT INTO `Session` VALUES
(1,1,1,'Session 1','Ratatouille Session 1','2024-07-25 17:00:00','2024-07-25 19:00:00',52,482),
(2,1,1,'Session 2','Ratatouille Session 2','2024-07-25 19:00:00','2024-07-25 21:00:00',52,52),
(3,1,1,'Session 3','Ratatouille Session 3','2024-07-25 21:00:00','2024-07-25 23:00:00',52,52),
(4,1,2,'Session 1','Ratatouille Session 1','2024-07-26 17:00:00','2024-07-26 19:00:00',52,52),
(5,1,2,'Session 2','Ratatouille Session 2','2024-07-26 19:00:00','2024-07-26 21:00:00',52,52),
(6,1,2,'Session 3','Ratatouille Session 3','2024-07-26 21:00:00','2024-07-26 23:00:00',52,52),
(7,1,3,'Session 1','Ratatouille Session 1','2024-07-27 17:00:00','2024-07-27 19:00:00',52,52),
(8,1,3,'Session 2','Ratatouille Session 2','2024-07-27 19:00:00','2024-07-27 21:00:00',52,52),
(9,1,3,'Session 3','Ratatouille Session 3','2024-07-27 21:00:00','2024-07-27 23:00:00',52,52),
(10,1,4,'Session 1','Ratatouille Session 1','2024-07-28 17:00:00','2024-07-28 19:00:00',52,51),
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
(100,2,4,'Session 3','Café de Roemer Session 3','2024-07-28 21:00:00','2024-07-28 22:30:00',35,35),
(102,2,2,'2','2','2024-04-03 23:50:00','2024-04-16 23:59:00',2,2),
(105,1,1,'1','1','2024-04-17 02:11:00','2024-04-11 02:11:00',1,1);
/*!40000 ALTER TABLE `Session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stories`
--

DROP TABLE IF EXISTS `Stories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stories` (
  `StoryID` int(11) NOT NULL AUTO_INCREMENT,
  `DetailPageID` int(11) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `ImagePath` varchar(255) DEFAULT NULL,
  `ImageAlt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`StoryID`),
  KEY `DetailPageID` (`DetailPageID`),
  CONSTRAINT `Stories_ibfk_1` FOREIGN KEY (`DetailPageID`) REFERENCES `DetailPage` (`DetailPageID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stories`
--

LOCK TABLES `Stories` WRITE;
/*!40000 ALTER TABLE `Stories` DISABLE KEYS */;
INSERT INTO `Stories` VALUES
(11,7,'Haarlem\'s Tower-Topping Windmill Story','In 1778, Adriaan de Boois bought an ancient tower in Haarlem. The city gave him the go-ahead to build a windmill on top, and he made it happen! This windmill rose high on the old tower, catching plenty of wind by the Spaarne River. The De Adriaan windmill began its job on May 19, 1779. Adriaan used it to crush something called tuff into trass. Trass was pretty neat – it helped keep walls waterproof when mixed into building mortar.','/img/history/windmill-story.png','Image with Haalem\'s Tower'),
(12,7,'Tobacco Story','At first, the mill ground tuff, shells, and oak bark. Then, in 1802, a tobacco merchant bought it and turned it into a tobacco production spot. By 1865, new owners switched things up again. They transformed the mill into one that used both wind and steam power to grind grain. But by 1925, there was a problem. The mill faced too much competition from modern industry and wasn\'t making enough money. They wanted to demolish it because it wasn\'t profitable anymore.','/img/history/snuff.png','Image with Tabbacco Story'),
(13,7,'Fire!','On a Saturday afternoon in April 1932, there was chaos in Haarlem — the Adriaan was on fire! Despite the brigade\'s swift efforts, there wasn\'t much left of the Adriaan afterward, just a heap of burnt stones and beams. The next day, the people of Haarlem started collecting money to build a new Adriaan. But it was clear they needed a lot more than what they had gathered.','/img/history/windmill-story.png','Image with fire'),
(14,7,'Reconstruction','In 1963, Haarlem took over the land where the mill used to be and promised to rebuild it. But as years went by, that promise was forgotten. Then, in 1991, a group called the Molen De Adriaan Foundation was formed to bring the mill back. At first, Haarlem wasn\'t really into helping out. But in 1996, they found the old promise in their archives. That changed everything—they fully backed the project and worked together to make it happen, giving it the push it needed to succeed.','/img/history/reconstruction.png','Image with fire'),
(15,7,'Museum Mill','On April 23, 2002, after seventy long years since the fire, Haarlem welcomed back its beloved Adriaan. Now restored, it serves as a venue for meetings and weddings, and most importantly, as a museum showcasing its rich history. Inside, visitors find a reception area with a souvenir shop, two floors displaying stunning mill models, and atop it all, a functioning mill. Constructed in 2002, it\'s no imitation. The Adriaan operates authentically, just like Dutch windmills have for centuries, keeping the tradition alive and spinning.','/img/history/museum-mill.png','Image with Museum Mill'),
(16,1,'History','This church is an important landmark for the city of Haarlem and has dominated the city skyline for centuries. It is built in the Gothic style of architecture, and it became the main church of Haarlem after renovations in the 15th century made it significantly larger than the Janskerk (Haarlem). First mention of a church on this spot was made in 1307, but the wooden structure burned in the 14th century. The church was rebuilt and promoted to chapter church in 1479 and only became a cathedral in 1559. The main architects were Godevaert de Bosscher and Steven van Afflighem (nave), and Evert van Antwerpen (transept).','/img/history/history.jpg','Image with Church of St. Bavo'),
(17,1,'Christianity in Haarlem','Haarlem has had a Christian parish church since the 9th century. This first church was a \"daughter church\" of Velsen, which itself was founded in 695 by St. Willibrord. This early first church was a wooden church on the same site of the current Sint-Bavokerk. Extensions and expansions over the centuries led to its formal consecration in 1559 when the first bishop Nicolaas van Nieuwland was appointed. Only 19 years later, after the Spanish occupation ended (they won the Siege of Haarlem) and Haarlem reverted to the Protestant House of Orange, the church was confiscated during the episode known as the Haarlemse noon and converted to Protestantism as part of the Protestant Reformation.','/img/history/christianity.jpg','Image with Christianity in Haarlem'),
(18,1,'Fires','On May 22, 1801, there was a fire caused by lightning which struck the tower. Another disaster was prevented in 1839 by Martijn Hendrik Kretschman, the guard of the tower. He stopped Jan Drost who worked for the church. Drost had tried to set fire to the pipe organ and piano by throwing hot coals on top of it. Drost committed suicide and he was buried in the tower. In the church was a high sentry box reserved for fire-watchers. If they saw a fire in the city then they would signal using red flags so that the guards in the main guard house opposite could react.','/img/history/fireChurch.jpg','Image'),
(19,1,'Exterior','hough the exterior of the church seems timeless, it changed twice in the past 500 years; once when all statuary was removed from the outer niches during the Haarlemse Noon, and the second time in the late 19th century when a \"more Gothic look\" was given to the church by adding some fake ramparts to the roof edge. This can be seen easily when comparing pictures made before and afterwards. Around the church various low buildings have been built up against it, most notably the former fish market called De Vishal, which today is used for exhibiting modern art.','/img/history/exterior.jpg','Image with Church of St. Bavo exterior'),
(20,1,'Interior','The interior of the church has also changed little over the years, though the inner chapels suffered greatly during the Beeldenstorm, and many stained-glass windows have been lost to neglect. Fortunately, the interior has been painted many times by local painters, most notably by Pieter Jansz Saenredam and the Berckheyde brothers. Based on these paintings, work has been done to reconstruct the interior so various items such as rouwborden or \"mourning shields\" hang again today in their \"proper\" place.','/img/history/interior.jpg','Image with Church of St. Bavo interior'),
(21,2,'Grote Markt','The Grote Markt in Haarlem is a large square in the center of Haarlem, where a number of old and well-known buildings are located, such as the Grote or Sint-Bavokerk (over 80 meters high) and the town hall . The Grote Markt used to be called \'t Sant . That name dates from a time when the market was still unpaved. There is an important Haarlem symbol; Loutje , the statue of Laurens Janszoon Coster , a pioneer of the printing press who in the past was often seen as its inventor in the Netherlands. Coster is said to have lived at Grote Markt 23.','/img/history/GrotemarktHaarlem.jpg','Image with Grote Markt'),
(22,2,'The Haarlem Fair','The Haarlem Fair is back again this year. We are going to make it another wonderful period where fun, conviviality and being together are paramount. On our website you will find all information about the Fair on the Grote Markt and the Fair on Zaanenlaan. The fair on the Grote Markt takes place from Friday, April 12 to Sunday, April 28, 2024 and on Zaanenlaan from Thursday, April 25 to Sunday, May 5, 2024.','/img/history/fairGroteMarkt.jpg','Image with Haarlem Fair'),
(23,2,'Haarlem Jazz','Haarlem Jazz & More is an annual music festival in the historic city center of Haarlem. It offers a varied program with jazz, blues, soul, funk and world music. Enjoy performances by well-known artists and emerging talent on various stages. In addition to the music, there is also room for delicious food and drinks on the cozy terraces. The festival creates a vibrant festival atmosphere where you can dance, sing along and enjoy the lively ambiance. Haarlem Jazz & More is a must-visit for music lovers and offers an unforgettable experience in the beautiful city of Haarlem.','/img/history/haarlemJazz.jpg','Image with Haarlem Jazz'),
(24,2,'Haarlem Markets','Perhaps the best known of all of Haarlem’s markets is the Grote Markt (which translates as great market). Located right under the Bavo Cathedral and ringed by terraces and bars, it’s certainly picturesque and entertaining. All manner of things are sold here – from artisanal breads and pies to flowers and plants. And of course clothes, shoes, trinkets and accessories are in abundance. There’s something to please everyone – and every wallet – at this historic Haarlem market.\r\nMarkets are held on the Grote Markt square on Mondays and Saturdays, from 09h00 to 16h00.','/img/history/market.JPG','Image with Haarlem Market'),
(25,2,'Flower Parade for the Bulb Region','Bloemencorso Bollenstreek is a flower parade in the Dutch Bulb Region . For the decoration, use is made of the abundant bulb flowers available there in the spring , such as hyacinths , tulips and daffodils. Every year on the first Saturday after April 19, the parade takes part in a 40 km long tour from Noordwijk to Haarlem . The route runs from Noordwijk via Voorhout , Sassenheim , Lisse , Hillegom , Bennebroek , Heemstede . The parade ends in Haarlem, where the floats can be viewed for another day. On Friday evening prior to parade Saturday, the parade runs through Noordwijkerhout, illuminated .','/img/history/parade.jpg','Image with Flower Parade '),
(26,3,'History','Hal (formerly De Hallen Haarlem ) is an exhibition complex of the Frans Hals Museum on the Grote Markt of Haarlem where modern and contemporary art is exhibited in changing presentations. The emphasis is on contemporary photo and video presentations, in which people and society are central. n 1913, the Municipal Museum of Art and Antiquities of Haarlem moved from the town hall to the Oudemannenhuis under the new name Frans Hals Museum . Although the museum was mainly intended for Haarlem\'s glorious past, contemporary art also had a place. ','/img/history/hallenHistory.jpg','Image with De Hallen'),
(27,3,'The Halls/Hall','In 1961, the Vishal was added to the Frans Hals Museum as an exhibition space, followed in 1967 by the Vleeshal. In 1993, the Vishal was disposed of and the Verweyhal, located next to the Vleeshal , came into use. The Vishal no longer belongs to the museum since 1993, but is managed by a separate foundation. For a while, the Halls were positioned as a separate museum for modern art, but from March 29, 2018, the Halls, under the name Hal , will be positioned as one of the two locations of the Frans Hals Museum, where ancient art will also be given space at this location. .','/img/history/theHalls.jpg','Image with The Halls'),
(28,3,'Modern art','Lack of space was a problem, which meant that the modern art collection often remained in the depots. From the 1950s onwards, the collection of modern art grew and contemporary art was purchased for the first time. One reason for this was that old art was virtually unaffordable after the war. From 1949 to 1967, the Huis van Looy ( Kleine Houtweg 103) functioned as a branch of the Frans Hals Museum for the exhibition of modern art. Baard lived on the top floor.In 1960, Daan Schwagermann (1920) was appointed as deputy director, responsible for modern art. He became director of modern art in 1970.','/img/history/modernArt.jpg','Image with modern art'),
(29,3,'Meat hall','The old Vleeshal was built in the years 1602-1604 and was designed by the Haarlem city architect Lieven de Key (ca. 1560-1627). The building is in Gothic style in terms of the floor plan, the structure of the stepped gables and the steep roof. The additions of Tuscan columns and rusticated blocks are Renaissance , as are the ornaments. After the Second World War , the mayor and aldermen decided that the building should become an exhibition space. It has remained that way to this day. The Frans Hals Museum organizes changing exhibitions of contemporary art on its two floors. The Archaeological Museum is located in the basement .','/img/history/meatHall.jpg','Image with meat hall'),
(30,3,'Verweyhal ','The Verweyhal is located next to the Vleeshal on the Grote Markt and was built in the 19th century as a gentlemen\'s society of the former Chamber of Rhetoric , later the cultural social association Trou Moet Blycken and was later taken over by the municipality of Haarlem. The building was renovated in 1992. With the support of the Kees Verwey Foundation, the first floor was given a museum function and a new name: the Verwey Hall, after the painter Kees Verwey (1900-1995). The former city architect Wiek Röling created the design for the new interior together with architect Jan Bernard.','/img/history/verweyhal.jpg','Image with Verweyhal'),
(31,4,'Proveniershof','The Proveniershof is a courtyard in Haarlem , located at Grote Houtstraat 140, the busiest shopping street in Haarlem. The Proveniershof does have the shape of a courtyard, but unlike an \'ordinary\' courtyard, it was not founded by a guild, a wealthy private individual or a church. The name Proveniershof owes the courtyard to the fact that a proveniers house could be found here until 1866 . Apartments have now been built in the former proveniers house .','/img/history/Proveniershof.jpg','Image with Proveniershof'),
(32,4,'From monastery to gentleman\'s lodge ','In the fifteenth century, the Catholic women\'s monastery of Sint Michiel stood on the site of the Proveniershofje. In 1578 - at the time of the Reformation - the nuns were chased out by the Protestants . Three years later, the monastery and the surrounding grounds were assigned to the city of Haarlem by the Prince of Orange as compensation for the damage the city had suffered during the Siege of Haarlem . The site was taken into use by the Schutterij Sint Joris, which used the monastery court as a training field; Such a practice field was called \"De Doelen\" at that time . This meant that the city of Haarlem had two \"Goals\": the Cloveniersdoelen and the Sint Jorisdoelen . ','/img/history/Bakenesserhofje.jpg','Image with Bakenesserhofje'),
(33,4,'Proveniershuis','The gentleman\'s lodging was not a success, so it was decided to convert the inn into a proveniers\' house . This proveniers house was put into use in 1707. \"Provenier\" is an old Dutch name for \"someone who lives on preuves\", where preuve means gift. However, a stay in the Proveniershuis was not free; the residents had to buy in. Once they had bought in, they could live there until their death and they were provided with the most necessary necessities of life (room and board). A few times a year they received \"preuves\" from the board, the residents then received more luxurious goods. The proveniers\' house was initially very popular, there was even a waiting list. Due to its popularity, additional homes were purchased in Doelstraat. Towards the end of the 18th century the popularity waned and the regents shifted their attention to boarders who could rent a home for 340 guilders a year, including board.\n\nA notable resident of the gentleman\'s lodging was the giant Daniel Cajanus , who came from Finland and stayed in the proveniers\' house from 1745 until his death in 1749. According to tradition, he was 2.34 meters tall. An anecdote tells that Cajanus was able to light his pipe from a street lamp. After his death in 1749, Cajanus was buried in the Grote Kerk in Haarlem. ','/img/history/Poort_Proveniershof.jpg','Image with Poort Proveniershof'),
(34,4,'Old Men\'s House','In 1810, several buildings in Haarlem were seized by the French occupiers to house the army. One of those buildings was the current Frans Hals Museum , which before then served as an old men\'s home . The residents of this old men\'s house were moved to the proveniers\' house. From 1810 to 1866, the proveniers\' house remained in use as an old men\'s home. The houses at the rear remained normal rental properties.','/img/history/hallen.jpg','Image with Old Men\'s House'),
(35,4,'Hof','From 1866 onwards, the Proveniershof was established in the same location and in the same buildings, which was then also called \"hof\". In 1882 it was expanded with a number of houses that previously belonged to the adjacent Hofje van Oud Alkemade , also called the Hofje of the Twelve Apostles. That courtyard was located on Barrevoetesteeg, which was widened that year to Barrevoetstraat. A number of houses had to be demolished, the remaining land and houses of the courtyard of Oud Alkemade were added to the grounds of the Proveniershof.','/img/history/hof.png','Image with Proveniershof '),
(36,5,'Jopen Brewery','Brouwerij Jopen is a Dutch brewery from Haarlem that emerged from the Haarlem Beer Society Foundation, founded in 1992, and since December 1996 has been converted into the company Jopen BV. Until 2010, Jopen did not have its own brewery but used the facilities of other breweries. The name Jopen is taken from the 112 liter barrels in which Haarlem beer used to be transported.','/img/history/jopenkerkHeader.jpg','Image with Jopenkerk'),
(37,5,'History ','When it was founded in 1992, the \"Stichting Haarlem Beer Society\" aimed to re-market and promote Haarlem\'s traditional beers. Two \"recipes\" (brewer\'s marks), found in the Haarlem city archives, were found useful for brewing again. A recipe from 1407 yielded Koyt , a gruit beer . The recipe for the beer that was marketed as Hoppenbier dates back to 1501. In 1994, both beers were presented on the occasion of the city\'s 750th anniversary. In 1999, Adriaan was added to the range, a lighter version of the Koyt . More recent acquisitions are Vier grains bock beer , Spring beer and Extra Stout . ','/img/history/jopenkerkHistory.jpg','Image with Jopenkerk'),
(38,5,'More about Jopenkerk','Until the end of 1996, Jopen\'s beers were brewed at De Halve Maan in Hulst , after which the La Trappe brewery in Berkel-Enschot was used . From 2001, the beers were brewed at Van Steenberge in Ertvelde , Belgium . From 2004, the beers were brewed at the Proefbrouwerij in Lochristi .Since November 11, 2010, the Jopenkerk Haarlem has been open in the Raakskwartier , in the center of Haarlem. The Jopen beers are brewed in this former Vestekerk and there is a café and restaurant. This puts an end to the period of loan brewing and Jopen beer is actually brewed in Haarlem again.','/img/history/moreJopenkerk.jpg','Image with Jopenkerk'),
(39,5,'Recent History','In 2015, the Jopen brewery purchased the Hoofdvaartkerk in Hoofddorp . Since November 11, 2015, there has been a distillery , restaurant and tasting room here under the name Jopenkerk Hoofddorp. This location closed on January 1, 2019 due to disappointing visitor numbers.','/img/history/recentHistoryJopenkerk.jpg','Image with Jopenkerk'),
(40,5,'Present','The updated logo was introduced in November 2019. the earlier logo still showed the Vestenerk in Haarlem. The new logo was designed by Rob van Heetum on the occasion of the company\'s 25th anniversary and also served to rejuvenate the logo to better connect it to the millennial age group .','/img/history/presentJopenkerk.jpg','Image with Jopenkerk');
/*!40000 ALTER TABLE `Stories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Ticket`
--

DROP TABLE IF EXISTS `Ticket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Ticket` (
  `TicketUUID` char(50) NOT NULL,
  `IsScanned` tinyint(1) DEFAULT NULL,
  `OrderItemID` int(11) DEFAULT NULL,
  PRIMARY KEY (`TicketUUID`),
  KEY `OrderItemID` (`OrderItemID`),
  CONSTRAINT `Ticket_ibfk_1` FOREIGN KEY (`OrderItemID`) REFERENCES `OrderItem` (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Ticket`
--

LOCK TABLES `Ticket` WRITE;
/*!40000 ALTER TABLE `Ticket` DISABLE KEYS */;
INSERT INTO `Ticket` VALUES
('01901082-f180-11ee-9510-5a01d62b6bd5',0,144),
('09d40cc7-f4ff-11ee-9510-5a01d62b6bd5',1,284),
('10775263-f17e-11ee-9510-5a01d62b6bd5',0,139),
('107d6ea2-f17e-11ee-9510-5a01d62b6bd5',0,140),
('2d2debe3-f17f-11ee-9510-5a01d62b6bd5',0,141),
('57d4f0fb-f181-11ee-9510-5a01d62b6bd5',0,147),
('69b131d9-f40c-11ee-9510-5a01d62b6bd5',0,152),
('7c3da96b-f4fe-11ee-9510-5a01d62b6bd5',0,280),
('7c3f5a19-f4fe-11ee-9510-5a01d62b6bd5',0,281),
('7f821869-f4fc-11ee-9510-5a01d62b6bd5',0,277),
('7f83a0b1-f4fc-11ee-9510-5a01d62b6bd5',0,278),
('7f91611b-f180-11ee-9510-5a01d62b6bd5',0,145),
('8330d079-f4fb-11ee-9510-5a01d62b6bd5',0,274),
('83323fda-f4fb-11ee-9510-5a01d62b6bd5',0,275),
('8333566d-f4fb-11ee-9510-5a01d62b6bd5',0,276),
('89348070-f40a-11ee-9510-5a01d62b6bd5',0,148),
('8935da92-f40a-11ee-9510-5a01d62b6bd5',0,149),
('893752f8-f40a-11ee-9510-5a01d62b6bd5',0,150),
('89387220-f40a-11ee-9510-5a01d62b6bd5',0,151),
('8b4a8c07-f17d-11ee-9510-5a01d62b6bd5',0,137),
('8b4f2200-f17d-11ee-9510-5a01d62b6bd5',1,138),
('9599a57f-f504-11ee-9510-5a01d62b6bd5',0,286),
('9b4705dc-f514-11ee-9510-5a01d62b6bd5',0,290),
('9b487862-f514-11ee-9510-5a01d62b6bd5',0,290),
('9b4a0454-f514-11ee-9510-5a01d62b6bd5',0,290),
('9b4b3529-f514-11ee-9510-5a01d62b6bd5',0,291),
('ae63bb5a-f40d-11ee-9510-5a01d62b6bd5',0,156),
('ae64c5a1-f40d-11ee-9510-5a01d62b6bd5',0,156),
('ae65ad20-f40d-11ee-9510-5a01d62b6bd5',0,156),
('ae669eb6-f40d-11ee-9510-5a01d62b6bd5',0,156);
/*!40000 ALTER TABLE `Ticket` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`gr2`@`%`*/ /*!50003 TRIGGER BeforeInsertTicket
    BEFORE INSERT ON Ticket
    FOR EACH ROW
BEGIN
    IF NEW.TicketUUID IS NULL OR NEW.TicketUUID = '' THEN
        SET NEW.TicketUUID = UUID();
END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp(),
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `unique_email` (`Email`),
  UNIQUE KEY `unique_username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES
(1,'john_doe','john@example.com','$2y$10$RCQCX5inXp/S7zV7eFMoOO2r7ZKwq6KWqPN7I7bCtIqa.Sr0WsHO2','user','2024-02-20 10:02:59','John Doeeeee'),
(8,'JaneTheMainn','jane@example.com','$2y$10$u6X2RowNg0kon9ywnGhWD.L.P5dSLy1aD99GpPjTnxvVLobUlVdO6','user','2024-03-06 23:37:11','Default'),
(9,'Me','thepiguy@tuta.io','$2y$10$skY4ToBXF8zMGVA2bv6hWuraof0qy5qNcClv1yxHavIlmySl0jYY.','admin','2024-03-10 21:41:58','thepiguy'),
(10,'admin','admin@example.com','$2y$10$JVEUe0ql3fl833Z3qeJfXudQZbU/zuah2vb8WOnJYnVNRT2tw4S6e','admin','2024-03-11 10:04:38','Admin'),
(11,'dana','dana@example.com','$2y$10$LmPDhk6UunYgeg5e1bPSDOR9qzQNYKQeo1o7dJXbkKfUTerBJ3J8.','user','2024-03-16 14:21:46','Default'),
(16,'helloUser','hellouser@example.com','$2y$10$BSEXtkKhMwan.yCRiYFfTet4diuzmBBwnZFka5.nw2rD2.Po7wKJC','user','2024-03-16 14:33:49','Default'),
(20,'dominik','dominik@example.com','$2y$10$R5fyBLisuRzKvkbMI7aeq.VXpBFH9FZCSa4FKUIXxEf6TAoG7B.9.','user','2024-03-16 15:27:37','Default'),
(27,'marco','marco@example.com','$2y$10$.38LoOESttOx8Yo.W6kcC.tjp9AXF2hLbBlIrcwo.Cb3HRUE0llmq','user','2024-03-19 17:30:48','marco'),
(54,'hi','hi@example.com','$2y$10$LXqPjw2E9MzoJSi.iZCkQOmLjNQgy6fwTHfJO0d43j78iCwnvLqgq','user','2024-03-23 18:57:48','hi'),
(55,'mariia123','kovalenko.mary2004@gmail.com','$2y$10$BNHRqD/vzn2eomtTlg1c7e.rpCUsSJqKz6.BwNqzH6Pfbx6stE7N2','admin','2024-03-28 19:12:36','Mariia '),
(56,'zoran','zster1204@gmail.com','$2y$10$MgFyZrr9.zN7biwhvN3w3Oni3rOJoMuNhUG5RVutWrKfGXwp6HW.6','admin','2024-04-05 12:37:23','Zoran'),
(60,'testtsts','test@test.com','$2y$10$DyCE1PpioXw0x9H13dFFo.RC0b8ZB0Pk7MVmb0XFyXGRcBB/lJLB.','user','2024-04-08 18:56:06','teststs'),
(61,'danaaa','danacamelia95@gmail.com','$2y$10$iT6cKfvhzfu2o1.nfSDeR.KxAtUMGjtFf/prfWDUMczGYAfsmiszy','admin','2024-04-08 18:56:31','danaa'),
(62,'test_user____','testuser@example.com','$2y$10$iJt9UtQ.DRr/Ps2B.scR9Ol5RYOU9QVj5HTAY7wKkDuW9v9KKwhp2','user','2024-04-08 18:57:37','testuser'),
(63,'test12333','test12333@example.com','$2y$10$LqmGg8wBPl1U.TvP74G5A.MmWX9kAuM8p65Kes5/bdlLqFefxyDcq','user','2024-04-08 19:09:36','test12333');
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Venue`
--

DROP TABLE IF EXISTS `Venue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Venue` (
  `VenueID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ContactDetails` text DEFAULT NULL,
  PRIMARY KEY (`VenueID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Venue`
--

LOCK TABLES `Venue` WRITE;
/*!40000 ALTER TABLE `Venue` DISABLE KEYS */;
INSERT INTO `Venue` VALUES
(1,'Patronaat','Zijlsingel 2, 2013 DN','email: info@patronaat.nl, phone: 023 - 517 58 50 (office) - during office hours 10.00 - 17.00, 023 - 517 58 58 (cash desk/information number)'),
(2,'Grote Markt','Grote Markt 2011 RD',''),
(15,'venue1','heloooff','');
/*!40000 ALTER TABLE `Venue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `YummyEventDays`
--

DROP TABLE IF EXISTS `YummyEventDays`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `YummyEventDays` (
  `DayID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  PRIMARY KEY (`DayID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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
(4,'2024-07-28'),
(12,'2024-04-10');
/*!40000 ALTER TABLE `YummyEventDays` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `YummyHome`
--

DROP TABLE IF EXISTS `YummyHome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `YummyHome` (
  `YummyID` int(11) NOT NULL AUTO_INCREMENT,
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
  `Section1` text DEFAULT NULL,
  `Section2` text DEFAULT NULL,
  `Section3` text DEFAULT NULL,
  `Section4` text DEFAULT NULL,
  PRIMARY KEY (`YummyID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
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

-- Dump completed on 2024-04-08 21:40:34
