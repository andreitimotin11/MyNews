-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07 Dec 2016 la 01:45
-- Versiune server: 5.6.31
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GB_News`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `date`) VALUES
(1, 'ALERTĂ la toate secțiile de poliție din Danemarca! Un ofițer a fost ÎMPUȘCAT', 'Secțiile de poliție din Danemarca sunt în alertă, după ce un ofițer a fost împușcat, relatează Reuters, citat de libertatea.ro.\r\n\r\nEl a fost victima unui atac armat, care a avut loc într-o secție de poliție aflată într-o suburbie a capitalei Copenhaga.\r\n\r\nAutoritățile au anunțat că un suspect a fost reținut la Albertslund, acolo unde a avut loc incidentul. Nu au fost însă oferite multe detalii despre starea de sănătate a ofițerului, dar și nici despre acest incident.\r\n\r\n"După incidentul armat din Albertslund, poliţia a sporit securitatea în toate secţiile de poliţie din ţară, până când situaţia va fi rezolvată", a afirmat Poliţia pe Twitter.\r\n\r\nOfiţeri înarmaţi au redirecţionat oamenii pentru a ocoli secţia de poliţie unde a avut loc atacul.', '2016-12-06'),
(2, 'Google marchează sosirea sărbătorilor de iarnă prin lansarea platformei "Google Santa Tracker"', 'Motorul de căutare online Google marchează sosirea sărbătorilor de iarnă prin lansarea platformei "Google Santa Tracker", unde internauţii se pot distra, în aşteptarea Crăciunului, dansând cu elfii, făcându-i selfie-uri lui Moş Crăciun sau pot încerca jocuri logice cu acadele buclucaşe, scrie Mediafax.ro.\r\n\r\nMotorul de căutare online Google numără zilele până la sosirea sărbătorilor de iarnă şi îi invită pe internauţi să exploreze platforma "Google Santa Tracker".\r\n\r\nPe santatracker.google.com, utilizatorii vizionează, joacă, explorează tărâmuri înzăpezite. Ei îl pot căuta pe Moş Crăciun pe aeroportul de la Polul Nord, află care sunt tradiţiile de sărbători în diverse părţi ale globului, pot avea acces în laboratorul de programe unde realizează personaje importante pentru sezonul invernal - reni şi spiriduşi - şi, între altele, se folosesc de punctele cardinale pentru a găsi cadouri.\r\n\r\nAstfel, pe pagina web există 23 de opriri în căutarea lui Moş Crăciun. Cei care accesează acest site pot urmări videoclipuri animate de personaje amuzante, pot accesa jocuri care îl au în centru pe Moş Crăciun, cum ar fi "Santa Selfie", "Aeroportul de la Polul Nord" şi au la dispoziţie şi o "încăpere" dedicată traducerilor.\r\n\r\nÎn plus, utilizatorii motorului de căutare pot trimite, prin intermediul unui buton special, logoul Google spre a fi publicat pe reţelele de socializare Google+, Facebook şi Twitter, dar şi prin e-mail.\r\n\r\nGoogle îşi modifică logoul ocazional, pentru a serba un anumit eveniment major sau o personalitate care a schimbat lumea.\r\n\r\nDoodle-urile sunt reprezentări ocazionale ale logoului afişat pe prima pagină Google (www.google.ro), care au acompaniat de-a lungul anilor căutările online făcute de utilizatorii din întreaga lume.', '2016-12-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
