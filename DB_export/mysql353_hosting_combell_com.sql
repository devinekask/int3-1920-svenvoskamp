-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql353.hosting.combell.com:3306
-- Generation Time: Jan 24, 2020 at 07:27 PM
-- Server version: 5.7.28-31
-- PHP Version: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID286956_int3`
--
CREATE DATABASE IF NOT EXISTS `ID286956_int3` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ID286956_int3`;

-- --------------------------------------------------------

--
-- Table structure for table `bookclass`
--

CREATE TABLE `bookclass` (
  `id` int(11) NOT NULL,
  `bookclass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookclass`
--

INSERT INTO `bookclass` (`id`, `bookclass`) VALUES
(1, 'Paperback'),
(2, 'E-Book');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 3, 5, 3),
(2, 4, 5, 6),
(3, 5, 3, 1),
(4, 6, 9, 1),
(5, 6, 21, 1),
(6, 7, 9, 1),
(7, 8, 9, 1),
(8, 9, 3, 1),
(9, 15, 10, 1),
(10, 16, 10, 2),
(11, 16, 3, 1),
(12, 16, 4, 1),
(13, 17, 10, 2),
(14, 17, 3, 1),
(15, 17, 4, 1),
(16, 18, 10, 2),
(17, 18, 3, 1),
(18, 18, 4, 1),
(19, 19, 10, 2),
(20, 19, 3, 1),
(21, 19, 4, 1),
(22, 20, 10, 2),
(23, 20, 3, 1),
(24, 20, 4, 1),
(25, 21, 10, 2),
(26, 21, 3, 1),
(27, 21, 4, 1),
(28, 22, 4, 1),
(29, 23, 4, 1),
(30, 24, 4, 1),
(31, 25, 4, 30),
(32, 27, 3, 2),
(33, 28, 3, 2),
(34, 29, 3, 1),
(35, 32, 3, 1),
(36, 33, 3, 1),
(37, 34, 17, 1),
(38, 34, 3, 1),
(39, 34, 4, 1),
(40, 35, 17, 1),
(41, 35, 3, 1),
(42, 35, 4, 1),
(43, 36, 1, 2),
(44, 37, 8, 11),
(45, 39, 1, 1),
(46, 40, 3, 1),
(47, 41, 3, 3),
(48, 42, 1, 1),
(49, 43, 5, 1),
(50, 44, 5, 2),
(51, 45, 5, 2),
(52, 46, 10, 1),
(53, 47, 17, 1),
(54, 48, 3, 1),
(55, 48, 11, 1),
(56, 49, 3, 2),
(57, 50, 9, 1),
(58, 50, 21, 1),
(59, 51, 5, 1),
(60, 52, 3, 2),
(61, 53, 3, 1),
(62, 54, 3, 1),
(63, 55, 3, 1),
(64, 56, 3, 1),
(65, 57, 3, 1),
(66, 58, 3, 1),
(67, 59, 3, 1),
(68, 60, 3, 3),
(69, 61, 3, 5),
(70, 62, 3, 5),
(71, 63, 3, 5),
(72, 64, 3, 1),
(73, 65, 11, 1),
(74, 66, 3, 1),
(75, 67, 3, 1),
(76, 68, 3, 1),
(77, 69, 3, 3),
(78, 70, 3, 1),
(79, 71, 3, 1),
(80, 72, 3, 1),
(81, 73, 26, 3),
(82, 73, 9, 1),
(83, 74, 26, 3),
(84, 74, 9, 1),
(85, 75, 26, 3),
(86, 75, 9, 1),
(87, 76, 26, 3),
(88, 76, 9, 1),
(89, 77, 26, 3),
(90, 77, 9, 1),
(91, 78, 26, 3),
(92, 78, 9, 1),
(93, 79, 1, 1),
(94, 80, 3, 1),
(95, 80, 9, 1),
(96, 81, 7, 1),
(97, 82, 5, 1),
(98, 83, 1, 1),
(99, 84, 1, 1),
(100, 85, 1, 1),
(101, 85, 3, 1),
(102, 86, 1, 1),
(103, 87, 7, 1),
(104, 88, 7, 2),
(105, 88, 3, 1),
(106, 89, 9, 2),
(107, 90, 3, 1),
(108, 91, 7, 1),
(109, 92, 1, 1),
(110, 92, 3, 1),
(111, 93, 21, 1),
(112, 94, 2, 1),
(113, 95, 1, 1),
(114, 96, 5, 1),
(115, 97, 1, 1),
(116, 98, 1, 1),
(117, 99, 2, 1),
(118, 100, 5, 1),
(119, 101, 3, 3),
(120, 102, 1, 1),
(121, 103, 1, 1),
(122, 104, 1, 1),
(123, 105, 1, 1),
(124, 106, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`) VALUES
(1, 'wit '),
(2, 'zwart'),
(3, 'blauw'),
(4, 'rood '),
(5, 'groen');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fsurname` varchar(255) DEFAULT NULL,
  `fadres` varchar(255) DEFAULT NULL,
  `fnumber` varchar(255) DEFAULT NULL,
  `fzip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `surname`, `email`, `telephone`, `adres`, `number`, `zip`, `fname`, `fsurname`, `fadres`, `fnumber`, `fzip`) VALUES
(5, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(6, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(7, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(8, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(9, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(10, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(11, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat, 10', 10, '3343', '', '', '', '', ''),
(12, 'Kees', 'De Koning', 'kees_koning@gmail.com', '0622832321', 'De Wijzerweg', 12, '3343', '', '', '', '', ''),
(13, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(14, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3099', '', '', '', '', ''),
(15, 'DAF', 'AGAG', 'test@hotmail.com', '32525252626', 'Marksesteenweg ', 2, '8500', '', '', '', '', ''),
(16, 'Marco', 'Herremans', 'marco@gmail.com', '0621415151', 'Helweg', 21, '8600', 'Sven', 'Voskamp', 'fr.sven.fr@hotmail.com', '10', '3343'),
(17, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(18, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(19, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(20, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(21, 'S Sven Voskamp', 'Sven Voskamp', 'sven.voskamp@student.howest.be', '622832306', 'Nicolaes Maesstraat ', 10, '3333', '', '', '', '', ''),
(22, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 9, '3343', '', '', '', '', ''),
(23, 'Sven ', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '1000', '', '', '', '', ''),
(24, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(25, 'Alexander', 'Verbeeck', 'alexander@gmail.com', '06214515', 'Steenwerpen ', 12, '2010', '', '', '', '', ''),
(26, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343', '', '', '', '', ''),
(27, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat, 10', 10, '3343', '', '', '', '', ''),
(28, 'Sven', 'Voskamp', 'sven.voskamp@student.howest.be', '622832306', 'Nicolaes Maesstraat ', 10, '3343DD', '', '', '', '', ''),
(29, 'Sven Voskamp', 'Voskamp', 'fr.sven.fr@hotmail.com', '622832306', 'Nicolaes Maesstraat', 10, '3343 DD', '', '', '', '', ''),
(30, 'Cheyenne', 'Voorwinde', 'cvoorwinde@gmail.com', '0657492356', 'pianolaan', 12, '7935', '', '', '', '', ''),
(31, 'S Sven Voskamp', 'Sven Voskamp', 'sven.voskamp@student.howest.be', '622832306', 'Nicolaes Maesstraat 10', 10, '3343DD', '', '', '', '', ''),
(32, 'Ale', 'Akdkfjej', 'alexander_verbeeck@outlouk', '014516856', 'Djjebrbd', 12, '1489', '', '', '', '', ''),
(33, 'Elza Voskamp', 'Voskamp', 'aevoskamp123@gmail.com', '0646522873', 'Nicolaes Maesstraat, 10', 10, '3343 dd', '', '', '', '', ''),
(34, 'Alexander', 'verbeeck', 'alexander_verbeeck@outlook.be', '0474814563', 'Heidestraat-Zuid', 1, '2950', '', '', '', '', ''),
(35, 'Alexander', 'zeven', 'alexander_verbeeck@outlook.be', '0474814563', 'Heidestraat-Zuid, 175A', 12, '2950', '', '', '', '', ''),
(36, 'Sven Voskamp', 'Voskamp', 'sven.voskamp@student.howest.be', '622832306', 'Nicolaes Maesstraat', 1, '8500', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `month`) VALUES
(1, '12 Maanden'),
(2, '24 Maanden'),
(3, '36 Maanden');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `amount`, `status`, `customer_id`, `payment_id`) VALUES
(1, '12.99', 'Not confirmed', 1, 1),
(2, '38.97', 'Not confirmed', 2, 2),
(3, '38.97', 'Not confirmed', NULL, NULL),
(4, '77.94', 'Not confirmed', NULL, NULL),
(5, '17.94', 'Not confirmed', NULL, NULL),
(6, '61.94', 'Not confirmed', NULL, NULL),
(7, '17.94', 'Not confirmed', NULL, NULL),
(8, '17.94', 'Not confirmed', NULL, NULL),
(9, '17.94', 'Not confirmed', NULL, NULL),
(10, '4.95', 'Not confirmed', NULL, NULL),
(11, '4.95', 'Not confirmed', NULL, NULL),
(12, '4.95', 'Not confirmed', NULL, NULL),
(13, '4.95', 'Not confirmed', NULL, NULL),
(14, '4.95', 'Not confirmed', NULL, NULL),
(15, '6.94', 'Not confirmed', NULL, NULL),
(16, '23.91', 'Not confirmed', NULL, NULL),
(17, '23.91', 'Not confirmed', NULL, NULL),
(18, '23.91', 'Not confirmed', NULL, NULL),
(19, '23.91', 'Not confirmed', NULL, NULL),
(20, '23.91', 'Not confirmed', NULL, NULL),
(21, '23.91', 'Not confirmed', NULL, NULL),
(22, '6.94', 'Not confirmed', NULL, NULL),
(23, '6.94', 'Not confirmed', NULL, NULL),
(24, '6.94', 'Not confirmed', NULL, NULL),
(25, '59.7', 'Not confirmed', NULL, NULL),
(26, '4.95', 'Not confirmed', NULL, NULL),
(27, '25.98', 'Not confirmed', NULL, NULL),
(28, '25.98', 'Not confirmed', NULL, NULL),
(29, '17.94', 'Not confirmed', NULL, NULL),
(30, '4.95', 'Not confirmed', NULL, NULL),
(31, '23.91', 'Not confirmed', NULL, NULL),
(32, '17.94', 'Not confirmed', NULL, NULL),
(33, '17.94', 'Not confirmed', NULL, NULL),
(34, '27.97', 'Not confirmed', NULL, NULL),
(35, '27.97', 'Not confirmed', NULL, NULL),
(36, '25.98', 'Waiting for payment', 9, NULL),
(37, '21.89', 'Waiting for payment', 10, NULL),
(38, '4.95', 'Not confirmed', NULL, NULL),
(39, '17.94', 'Not confirmed', NULL, NULL),
(40, '17.94', 'Not confirmed', NULL, NULL),
(41, '38.97', 'Not confirmed', NULL, NULL),
(42, '17.94', 'Not confirmed', NULL, NULL),
(43, '17.94', 'Not confirmed', NULL, NULL),
(44, '25.98', 'Not confirmed', NULL, NULL),
(45, '25.98', 'Not confirmed', NULL, NULL),
(46, '6.94', 'Not confirmed', NULL, NULL),
(47, '17.94', 'Waiting for payment', 11, NULL),
(48, '25.98', 'Waiting for payment', 12, NULL),
(49, '25.98', 'Not confirmed', NULL, NULL),
(50, '61.94', 'Order confirmed', 14, 1),
(51, '17.94', 'Order confirmed', 15, 1),
(52, '25.98', 'Order confirmed', 16, 2),
(53, '17.94', 'Not confirmed', NULL, NULL),
(54, '17.94', 'Waiting for payment', 17, NULL),
(55, '17.94', 'Waiting for payment', 18, NULL),
(56, '17.94', 'Not confirmed', NULL, NULL),
(57, '17.94', 'Not confirmed', NULL, NULL),
(58, '17.94', 'Waiting for payment', 19, NULL),
(59, '17.94', 'Waiting for payment', 21, NULL),
(60, '38.97', 'Not confirmed', NULL, NULL),
(61, '64.95', 'Waiting for payment', 23, NULL),
(62, '64.95', 'Not confirmed', NULL, NULL),
(63, '64.95', 'Not confirmed', NULL, NULL),
(64, '17.94', 'Order confirmed', 24, 3),
(65, '17.94', 'Order confirmed', 25, 3),
(66, '17.94', 'Not confirmed', NULL, NULL),
(67, '17.94', 'Not confirmed', NULL, NULL),
(68, '17.94', 'Not confirmed', NULL, NULL),
(69, '38.97', 'Not confirmed', NULL, NULL),
(70, '9.94', 'Not confirmed', NULL, NULL),
(71, '9.94', 'Not confirmed', NULL, NULL),
(72, '17.94', 'Not confirmed', NULL, NULL),
(73, '68.49', 'Not confirmed', NULL, NULL),
(74, '68.49', 'Not confirmed', NULL, NULL),
(75, '68.49', 'Not confirmed', NULL, NULL),
(76, '68.49', 'Not confirmed', NULL, NULL),
(77, '60.49', 'Waiting for payment', 26, NULL),
(78, '60.49', 'Waiting for payment', 27, NULL),
(79, '9.94', 'Order confirmed', 28, 1),
(80, '22.93', 'Not confirmed', NULL, NULL),
(81, '9.94', 'Order confirmed', 29, 1),
(82, '17.94', 'Not confirmed', NULL, NULL),
(83, '17.94', 'Not confirmed', NULL, NULL),
(84, '17.94', 'Not confirmed', NULL, NULL),
(85, '25.98', 'Order confirmed', 30, 3),
(86, '17.94', 'Not confirmed', NULL, NULL),
(87, '17.94', 'Not confirmed', NULL, NULL),
(88, '38.97', 'Not confirmed', NULL, NULL),
(89, '25.98', 'Not confirmed', NULL, NULL),
(90, '17.94', 'Not confirmed', NULL, NULL),
(91, '17.94', 'Not confirmed', NULL, NULL),
(92, '25.98', 'Order confirmed', 31, 1),
(93, '48.95', 'Not confirmed', NULL, NULL),
(94, '6.94', 'Order confirmed', 32, 1),
(95, '9.94', 'Not confirmed', NULL, NULL),
(96, '17.94', 'Not confirmed', NULL, NULL),
(97, '17.94', 'Not confirmed', NULL, NULL),
(98, '17.94', 'Not confirmed', NULL, NULL),
(99, '6.94', 'Order confirmed', 33, 3),
(100, '17.94', 'Order confirmed', 34, 2),
(101, '30.97', 'Order confirmed', 35, 1),
(102, '17.94', 'Not confirmed', NULL, NULL),
(103, '17.94', 'Not confirmed', NULL, NULL),
(104, '17.94', 'Waiting for payment', 36, NULL),
(105, '17.94', 'Not confirmed', NULL, NULL),
(106, '17.94', 'Not confirmed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `payment_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment`, `payment_image`) VALUES
(1, 'Bancontact', './assets/img/bancontact.png'),
(2, 'Sofort', './assets/img/sofort.png'),
(3, 'PayPal', './assets/img/paypal.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `information` text NOT NULL,
  `longread` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_detail_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type_id`, `title`, `price`, `information`, `longread`, `product_image`, `product_detail_image`) VALUES
(1, 1, 'The Road - Cormac McCarthy ', '12,99', 'Een man en zijn zoontje doorkruisen een verwoest Amerikaans landschap, bedekt met de as van een vergane wereld. De man kan zich de tijd ervoor nog herinneren, het jongetje kent alleen dit dode landschap. Het enige dat hen rest is te overleven en zich vast te houden aan de kostbare brokstukken van hun eigen menselijkheid.', '1', './assets/img/road.png', './assets/img/detailroad.png'),
(2, 1, 'Do Androids Dream Of Electric Sheep - Philip K. Dick', '12,99', 'Na een wereldoorlog is er niet veel meer over van de Aarde. De Verenigde Naties raadt iedereen aan naar Mars te verhuizen, en degenen die zijn achtergebleven leven in een lege wereld vol radioactieve straling. Rick Deckard werkt als premiejager voor de politie van San Francisco. Wanneer een groep androïden op Mars ontsnapt, en afreist naar de Aarde, is het aan hem om ze uit te schakelen.', '31-01-2020', './assets/img/sheep.png', './assets/img/detailsheep.png'),
(3, 1, 'Fahrenheit 451 - Ray Bradbury', '12,99', 'In de toekomst zijn boeken verboden, omdat ze mensen ongelukkig maken. Het is taak van brandweermannen als Guy Montag om in beslag genomen boeken te verbranden. Montag gaat echter twijfelen aan de bedoelingen van de overheid, en besluit op een dag om de te verbranden boeken eerst te lezen.\r\n\r\n', '07-02-2020', './assets/img/farenheit.png', './assets/img/detailfarenheit.png'),
(4, 1, 'The Handsmaid’s Tale - Margaret Atwood', '12,99', 'Nabije toekomst. In de Republiek Gilead (vroeger een deel van de Verenigde Staten) heerst een theocratisch schrikbewind dat is gebaseerd op een extreem fundamentalistische uitleg van de Bijbel. Er vinden oorlogen plaats met aangrenzende sekten. De rol van de vrouw is gereduceerd tot slaafsheid. Tegelijk worden er bijna geen kinderen meer geboren: bijna alle vrouwen zijn onvruchtbaar geworden. Onder een Bijbels voorwendsel krijgen de machthebbers \'leenmoeders\' toegewezen: jonge vrouwen die ze twee jaar in huis krijgen om er zo mogelijk een kind bij te verwekken. Eén van deze \'dienstmaagden\' is de hoofdpersoon van dit boek.', '14-02-2020', './assets/img/tale.png', './assets/img/detailtale.png'),
(5, 1, 'Enders Game - Orson Scott Card', '12,99', 'Zeventig jaar is er inmiddels verstreken sinds de laatste alien-invasie, die een immense strijd tussen de mens en een alien-ras genaamd ‘de Formics’ als gevolg had. De jonge Ender Wiggin, een uiterst ontwikkeld kind, wordt naar een militaire school gestuurd die zich in de ruimte bevindt. Hier wordt hij samen met andere getalenteerde leeftijdsgenoten getraind en opgeleid om voorbereid te zijn op toekomstige invasies.', '21-02-2020', './assets/img/game.png', './assets/img/detailgame.png'),
(6, 1, 'I, Robot - Isaac Asimov', '12,99', 'In het Chicago van 2035 behoren robots tot het alledaagse leven. Ze staan ten dienste van de mensen en worden door hen blindelings vertrouwd, omdat ze geprogrammeerd zijn volgens de drie wetten van de robotica. Deze bepalen dat de technologische hoogstandjes de mensen geen kwaad kunnen doen. Rechercheur Del Spooner houdt er echter een andere mening op na. Hij moet de moord op de briljante wetenschapper Alfred Lanning ophelderen en hij vermoedt dat de dader een robot is. Naarmate het onderzoek van Spooner vordert, groeit bij hem het besef dat de hele mensheid in gevaar is.', '28-02-2020', './assets/img/robot.png', './assets/img/detailrobot.png'),
(7, 1, 'Wool - Hugh Howey', '12,99', 'Omdat de aarde onbewoonbaar is geworden, leven de mensen in een silo onder de grond. Via camera\'s aan de buitenkant van de silo wordt de omgeving in de gaten gehouden. Als sheriff Holston na de mysterieuze dood van zijn vrouw besluit de silo te verlaten, neemt hij een verschrikkelijk risico: de atmosfeer buiten is zo giftig dat het vrijwel zeker zijn einde zal betekenen.', '06-03-2020', './assets/img/wool.png', './assets/img/detailwool.png'),
(8, 1, 'Snow Crash - Neal Stephenson', '12,99', 'De toenemende verfijning van beveiligingssystemen maakt het niet zo moeilijk de huidige situatie te verplaatsen naar wat ik in het babelvirus laat zien. Pizzabezorger en samoeraikarakter HIRO en surfboard koerier Y.T. jagen samen naar informatie op het wereldwijde computernet. Wie is de verspreider van het virus dat programmeurs waanzinnig maakt? Wie heeft belang bij de Infocolyps...?', '13-03-2020', './assets/img/crash.png', './assets/img/detailcrash.png'),
(9, 1, 'Ready Player One - Ernest Cline', '12,99', 'We schrijven 2044. Sinds de Grote Recessie leeft een aanzienlijk deel van de wereldbevolking in diepe armoede. Als James Halliday kinderloos sterft, laat hij de hongerende mensheid een fantastisch spel na: oasis, een onlinegame die door miljarden spelers tegelijk gespeeld kan worden. Kort na zijn dood blijkt dat hij drie sleutels in het spel verstopt heeft, die leiden naar een kluis waarin de rest van zijn erfenis ligt opgeborgen. Wie de sleutels vindt, wordt in één klap multimiljonair. De jacht op de sleutels voert honderdduizenden nerds, geeks en gamers terug naar de jaren tachtig van de twintigste eeuw, de tijd waarin Halliday opgroeide. In de popcultuur van the eighties gaan ze op zoek naar aanwijzingen en naar geluk.', '20-03-2020', './assets/img/player.png', './assets/img/detailplayer.png'),
(10, 1, 'Neuromancer - William Gibson', '12,99', 'De matrix, de wereld in de wereld, een globale consensus-hallucinatie, vertegenwoordiging van elk byte data in cyberspace. Case was een van de beste cyber-cowboys of hackers, totdat een wraakzuchtige ex-werkgever zijn zenuwsysteem sloopt gebruik makende van een Russisch mycotoxin. Enige tijd later biedt een nieuwe werkgever hem een laatste kans, doel van de opdracht: de ondenkbaar krachtige artificiële intelligentie die rond de aarde cirkelt in dienst van het duistere Tessier-Ashpool clan.', '27-03-2020', './assets/img/neuromancer.png', './assets/img/detailneuromancer.png'),
(11, 1, 'Boekenset 2020', '48,95', 'De boekenset van 2020! Deze set bevat alle boeken van de HUMO boekenactie van dit jaar. Urenlang leesplezier met hele interessante boeken. Boeken die een kritische, ironische of cynische blik geven op een toekomstige maatschappij. Geen aliens of magie maar dystopische wereldvisies die onze huidige maatschappij in vraag stellen. ', '', './assets/img/bookbox.png', './assets/img/detailbookbox.png'),
(12, 1, 'Humo Agenda 2020', '16,95', 'De HUMO agenda van dit jaar! Ook dit jaar vergeet je nooit meer een afspraak met onze agenda! Verder bevat de agenda veel leuke feitjes waar je je vrienden mee kan verrassen.', '', './assets/img/agenda.png', './assets/img/detailagenda.png'),
(13, 2, 'Mini Boekenlicht', '9,90', 'Stoppen met lezen als het licht uitgaat is helemaal niet meer nodig. Bevestig het lichtje op de cover van je boek, richt het uiterst, krachtige ledlampje op je boek en je kan doorlezen tot in de vroege uurtjes.', '', './assets/img/booklight.png', './assets/img/detailbooklight.png'),
(14, 2, 'Leeslamp Retro', '18,50', 'Een boekenlichtje met een vormgeving van vroeger en een gebruiksgemak van nu.  Dit leeslampje kan perfect bevestigd worden op elk boek. De richtbare led lamp zorgt voor optimaal leescomfort.  Als je The Booklamp niet gebruikt, laat je\'m eenvoudigweg achter in de verzwaarde voet. Je leukt er ook nog eens je bureau, tafel of schoorsteenmantel mee op. Wordt geleverd inclusief batterijen.', '', './assets/img/readinglamp.png', './assets/img/detailreadinglamp.png'),
(15, 2, 'Groot Vergrootglas', '7,50', 'Met dit vergrootglas met een diameter van 90 mm, kan je eindelijk die kleine lettertjes wel (weer) lezen.  Deze loep vergroot een tekst tweemaal en in de uitsparing wordt het beeld zelfs 4 keer groter weergegeven! Bovendien ligt deze lichtgewicht loep makkelijk in de hand, dankzij een rubberen frame en beschermlaag die ook bij dagelijks gebruik duurzaamheid garandeert.', '', './assets/img/bigglasses.png', './assets/img/detailbigglasses.png'),
(16, 2, 'Professioneel vergrootglas', '12,50', 'Van amateur-archeoloog tot professioneel postzegelverzamelaar, deze professionele loupe is dankzij zijn handige formaat perfect voor elke hobbyist. Met  deze loep met een vergroting van 6x worden de allerkleinste details van je verzamelobjecten zichtbaar. ', '', './assets/img/profglasses.png', './assets/img/detailprofglasses.png'),
(17, 2, 'HUMO boekenhouder', '18,50', 'Altijd ontspannen lezen met de HUMO boekenhouder. Zet je boek in de boekenhouder en je kan urenlang ontspannen lezen zonder dat je het boek vast moet houden. ', '', './assets/img/bookholder.png', './assets/img/detailbookholder.png'),
(18, 2, 'HUMO bladwijzer', '4,50', 'Met de HUMO bladwijzer vergeet je nooit meer waar je gebleven bent. Nu compleet in de stijl van de boekenactie van 2020. ', '', './assets/img/bookmark.png', './assets/img/detailbookmark.png'),
(19, 3, 'HUMO abonnement', '12,76', 'Met het HUMO abonnement ontvang je elke week ons magazine! Verder kun je het magazine online ook nog eens bekijken. Mis nooit meer wat en sluit nu het abonnement af! ', '', './assets/img/abonnement.png', './assets/img/detailabonnement.png');

-- --------------------------------------------------------

--
-- Table structure for table `products_all`
--

CREATE TABLE `products_all` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bookclass_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `month_id` int(1) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `cart_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_all`
--

INSERT INTO `products_all` (`id`, `product_id`, `name`, `bookclass_id`, `color_id`, `month_id`, `price`, `cart_image`) VALUES
(1, 1, 'The Road ', 1, NULL, NULL, '12.99', './assets/img/cartroad.png'),
(2, 1, 'The Road ', 2, NULL, NULL, '1.99', './assets/img/cartroad.png'),
(3, 2, 'Do Androids Dream Of Electric Sheep ', 1, NULL, NULL, '12.99', './assets/img/cartsheep.png'),
(4, 2, 'Do Androids Dream Of Electric Sheep ', 2, NULL, NULL, '1.99', './assets/img/cartsheep.png'),
(5, 3, 'Fahrenheit 451', 1, NULL, NULL, '12.99', './assets/img/cartfarenheit.png'),
(6, 3, 'Fahrenheit 451 ', 2, NULL, NULL, '1.99', './assets/img/cartfarenheit.png'),
(7, 4, 'The Handsmaid’s Tale ', 1, NULL, NULL, '12.99', './assets/img/carttale.png'),
(8, 4, 'The Handsmaid’s Tale', 2, NULL, NULL, '1.99', './assets/img/carttale.png'),
(9, 5, 'Enders Game ', 1, NULL, NULL, '12.99', './assets/img/cartgame.png'),
(10, 5, 'Enders Game', 2, NULL, NULL, '1.99', './assets/img/cartgame.png'),
(11, 6, 'I, Robot ', 1, NULL, NULL, '12.99', './assets/img/cartrobot.png'),
(12, 6, 'I, Robot ', 2, NULL, NULL, '1.99', './assets/img/cartrobot.png'),
(13, 7, 'Wool ', 1, NULL, NULL, '12.99', './assets/img/cartwool.png'),
(14, 7, 'Wool ', 2, NULL, NULL, '1.99', './assets/img/cartwool.png'),
(15, 8, 'Snow Crash ', 1, NULL, NULL, '12.99', './assets/img/cartcrash.png'),
(16, 8, 'Snow Crash ', 2, NULL, NULL, '1.99', './assets/img/cartcrash.png'),
(17, 9, 'Ready Player One ', 1, NULL, NULL, '12.99', './assets/img/cartplayer.png'),
(18, 9, 'Ready Player One ', 2, NULL, NULL, '1.99', './assets/img/cartplayer.png'),
(19, 10, 'Neuromancer ', 1, NULL, NULL, '12.99', './assets/img/cartneuromancer.png'),
(20, 10, 'Neuromancer ', 2, NULL, NULL, '1.99', './assets/img/cartneuromancer.png'),
(21, 11, 'Boekenset 2020', NULL, NULL, NULL, '48.95', './assets/img/cartbox.png'),
(22, 12, 'HUMO Agenda 2020', NULL, NULL, NULL, '16.95', './assets/img/cartagenda.png'),
(23, 13, 'Mini Boekenlicht', NULL, 3, NULL, '9.90', './assets/img/cartbooklightblue.png'),
(24, 13, 'Mini Boekenlicht', NULL, 5, NULL, '9.90', './assets/img/cartbooklightgreen.png'),
(25, 13, 'Mini Boekenlicht', NULL, 4, NULL, '9.90', './assets/img/cartbooklightred.png'),
(26, 14, 'Leeslamp Retro', NULL, 3, NULL, '18.50', './assets/img/cartreadinglampblue.png'),
(27, 14, 'Leeslamp Retro ', NULL, 4, NULL, '18.50', './assets/img/cartreadinglampred.png'),
(28, 14, 'Leeslamp Retro ', NULL, 1, NULL, '18.50', './assets/img/cartreadinglampwhite.png'),
(29, 14, 'Leeslamp Retro ', NULL, 2, NULL, '18.50', './assets/img/cartreadinglampblack.png'),
(30, 15, 'Groot Vergrootglas', NULL, NULL, NULL, '7.50', './assets/img/cartbigglasses.png'),
(31, 16, 'Professioneel Vergrootglas', NULL, NULL, NULL, '12.50', './assets/img/cartprofglasses.png'),
(32, 17, 'HUMO Boekenhouder', NULL, NULL, NULL, '18.50', './assets/img/cartbookholder.png'),
(33, 18, 'HUMO Bladwijzer', NULL, NULL, NULL, '4.50', './assets/img/cartbookmark.png'),
(34, 19, 'Humo Abonnement ', NULL, NULL, 3, '12.76', './assets/img/cartabonnement.png'),
(35, 19, 'Humo Abonnement', NULL, NULL, 2, '14.36', './assets/img/cartabonnement.png'),
(36, 19, 'Humo Abonnement ', NULL, NULL, 1, '15.95', './assets/img/cartabonnement.png');

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `spec` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specs`
--

INSERT INTO `specs` (`id`, `product_id`, `spec`) VALUES
(1, 1, 'Auteur: Cormac McCarthy'),
(2, 1, 'Jaar uitgave: 2006'),
(3, 1, 'Pagina\'s: 256'),
(4, 2, 'Auteur: Philip K. Dick'),
(5, 2, 'Jaar uitgave: 1968'),
(6, 2, 'Pagina\'s: 210'),
(7, 3, 'Auteur: Ray Bradbury'),
(8, 3, 'Jaar uitgave: 1953'),
(9, 3, 'Pagina\'s: 199'),
(10, 4, 'Auteur: Margaret Atwood'),
(11, 4, 'Jaar uitgave: 1985'),
(12, 4, 'Pagina\'s: 324'),
(13, 5, 'Auteur: Orson Scott Card'),
(14, 5, 'Jaar uitgave: 1985'),
(15, 5, 'Pagina\'s: 357'),
(16, 6, 'Auteur: Isaac Asimov'),
(17, 6, 'Jaar uitgave: 1950'),
(18, 6, 'Pagina\'s: 272'),
(19, 7, 'Auteur: Hugh Howey'),
(20, 7, 'Jaar uitave: 2011'),
(21, 7, 'Pagina\'s: 47'),
(22, 8, 'Auteur: Neal Stephenson'),
(23, 8, 'Jaar uitgave: 1992'),
(24, 8, 'Pagina\'s: 470'),
(25, 9, 'Auteur: Ernest Cline'),
(26, 9, 'Jaar uitgave: 2011'),
(27, 9, 'Pagina\'s: 384'),
(28, 10, 'Auteur: William Gibson'),
(29, 10, 'Jaar uitgave: 1984'),
(30, 10, 'Pagina\'s: 288'),
(31, 11, 'Afmetingen: 18,1 x 14,3 x 10,2 cm'),
(32, 11, 'Taal: Engels'),
(33, 11, 'Cover: Paperback'),
(34, 12, 'Agendajaar: 2020'),
(35, 12, 'Taal: Nederlands'),
(36, 12, 'Cover: Hardcover'),
(37, 13, 'Materiaal: Plastic'),
(38, 13, 'Gewicht: 0,1 kg '),
(39, 13, 'Met batterij: Ja'),
(40, 14, 'Materiaal: Metaal '),
(41, 14, 'Gewicht: 0,5 kg '),
(42, 14, 'Met batterij: Ja'),
(43, 15, 'Materiaal: Plastic'),
(44, 15, 'Gewicht: 0,1 kg '),
(45, 15, 'Afmetingen: 19,3 x 9,3 x 1,2 cm'),
(46, 16, 'Materiaal: Metaal'),
(47, 16, 'Gewicht: 0,4 kg'),
(48, 16, 'Afmetingen: 6,4 x 4,4 x 1,2 cm '),
(49, 17, 'Materiaal: Hout '),
(50, 17, 'Gewicht: 0,3 kg '),
(51, 17, 'Afmetingen: 24,1 x 16,4 x 18,5 cm'),
(52, 18, 'Materiaal: Plastic'),
(53, 18, 'Gewicht: 0,1 kg'),
(54, 18, 'Afmetingen: 14,2 x 7,4 cm '),
(55, 19, 'Levering: Elke dinsdag'),
(56, 19, 'Beschikbaar: Digitaal & papier'),
(57, 19, 'Taal: Nederlands');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'Boeken'),
(2, 'Accesoires'),
(3, 'Abonnement');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookclass`
--
ALTER TABLE `bookclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_all`
--
ALTER TABLE `products_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookclass`
--
ALTER TABLE `bookclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products_all`
--
ALTER TABLE `products_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `specs`
--
ALTER TABLE `specs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
