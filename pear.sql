-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2014 at 04:31 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pear`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text NOT NULL,
  `ItemCount` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `currentuser`
--

CREATE TABLE IF NOT EXISTS `currentuser` (
  `Realname` text NOT NULL,
  `Address` text NOT NULL,
  `Contact` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentuser`
--

INSERT INTO `currentuser` (`Realname`, `Address`, `Contact`, `Email`) VALUES
('', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Customer` text NOT NULL,
  `Product` text NOT NULL,
  `Count` int(11) NOT NULL,
  `Address` text NOT NULL,
  `OrderDate` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Category` text NOT NULL,
  `Price` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Product`, `Description`, `Category`, `Price`) VALUES
(1, 'Lenovo IdealPad S400\r\n<br>', '<li>Intel Pentium 2127U (1.90GHz)<li>4GB Memory 500GB HDD<li>Intel HD Graphics<li>Touchscreen<li>1366 x 768<li>Windows 8<br>', 'Notebook', '1555.00'),
(2, 'HP Pavilion 10-e010nr \r\n<br>', '<li>AMD A-Series A4-1200 (1.00GHz)<li>2GB Memory 320GB HDD<li>AMD Radeon HD 8180<li>Touchscreen<li>1366 x 768<li>Windows 8.1<br>', 'Notebook', '890.00'),
(3, 'Acer Aspire E1-572-6870\r\n', '<li>Intel Core i5 4200U (1.60GHz)<li>4GB Memory 500GB HDD<li>Intel HD Graphics 4400<li>1366 x 768<li>Windows <br><br>', 'Notebook', '1670.00'),
(4, 'ASUS X550LA-DH71\r\n<br>', '<li>Intel Core i7 4500U (1.80GHz)\r\n<li>8GB Memory 1TB HDD\r\n<li>Intel HD Graphics 5000\r\n<li>1366 x 768\r\n<li>Windows 8 64-bit\r\n<li>DL DVD+/-RW/CD-RW\r\n<br>\r\n', 'Notebook', '2790.00'),
(5, 'DELL Inspiron 15 (i15RV-8526BLK) ', '<li>Intel Core i5 4200U (1.60GHz)\r\n<li>6GB Memory 750GB HDD\r\n<li>Intel HD Graphics 4400\r\n<li>1366 x 768\r\n<li>Windows 8\r\n<li>Tray load DVD Drive (Reads and Writes to DVD/CD)\r\n', 'Notebook', '2200.00'),
(6, 'Acer Aspire Celeron\r\n<br>', '<li>Celeron 1017U (1.60GHz)<li>4GB DDR3 500GB HDD Capacity<li>19.5<br><br>\r\n<br><br>', 'Desktop PC', '1400.00'),
(7, 'ASUS Intel Core i3\r\n<br>', '<li>Intel Core i3 4010U (1.7GHz)\r\n<li>4GB DDR3 500GB HDD Capacity\r\n<li>23" 1920 x 1080\r\n<li>Windows 8 64-Bit\r\n<li>Intel HD Graphics 4400', 'Desktop PC', '2490.00'),
(8, 'HP Compaq \r\n<br>', '<li>Intel Core i3 3220 (3.30GHz)\r\n<li>4GB DDR3 500GB HDD Capacity\r\n<li>"20" 1600 x 900\r\n<li>Windows 8 Pro 64-bit\r\n<li>Intel HD Graphics 2500', 'Desktop PC', '1810.00'),
(9, 'iBUYPOWER Phantom Series NE103F ', '<li>Intel Core i5 4440 (3.10GHz)\r\n<li>8GB DDR3 1TB HD + 120GB SSD HDD Capacity\r\n<li>Windows 8.1 64-bit\r\n<li>NVIDIA GeForce GTX 650\r\n', 'Desktop PC', '2490.00'),
(10, 'Acer AG3-605-UR38\r\n<br>', '<li>Intel Core i7 4770 (3.40GHz)\r\n<li>8GB DDR3 1TB HDD Capacity\r\n<li>Windows 8\r\n<li>NVIDIA GeForce GTX 760\r\n<br>\r\n<br>', 'Desktop PC', '3100.00'),
(11, 'KASPERSKY lab Anti-Virus 2014 - 1 PC', '<li>Real-time protection against viruses\r\n<li>Instant safety checks for files\r\n<li>Small, frequent updates\r\n<li>Hybrid protection with cloud\r\n<li>Gamer mode', 'Software', '99.00'),
(12, 'AVG Internet Security 2014 - 3 PCs', '<li>Includes all features from AV\r\n<li>Stops spammers and hackers\r\n<li>Safer shopping & banking\r\n<li>Protect personal data\r\n<li>Faster video streaming\r\n<br>', 'Software', '160.00'),
(13, 'Symantec Norton Internet Security 2014 - 3 PCs\r\n<br>', '<li>Proactive Protection\r\n<li>24/7 Threat Monitoring\r\n<li>Download Protection\r\n<br>\r\n<br>\r\n<br>', 'Software', '130.00'),
(14, 'Microsoft Windows 7 Professional SP1 64-bit (Slim Envelope) - OEM\r\n<br>', '<li>Includes all feature from Windows 7 Home\r\n<li>Run XP  in Windows XP Mode\r\n<li>Domain Join\r\n<li>Backup to a home / business network', 'Software', '340.00'),
(15, 'Microsoft Office Home and Business 2013 Product Key Card - 1 PC\r\n', '<li>Business & household use\r\n<li>7 GB online storage\r\n<li>Touchable interface\r\n<br>\r\n<br><br>', 'Software', '390.00'),
(16, 'ASUS P8Z77-V LX LGA 1155 Intel Z77 HDMI SATA 6Gb/s USB 3.0 ATX Intel Motherboard\r\n<br>\r\n<br>', '<li>Intel Z77\r\n<li>Core i7 / i5 / i3 (LGA1155)\r\n<li>DDR3 2400(OC)/2200(OC)', 'Hardware', '320.00'),
(17, 'GeIL Green Series 8GB 204-Pin DDR3 SO-DIMM DDR3 1333 (PC3 10660) Laptop Memory Model GGS38GB1333C9SC\r\n', '<li>DDR3 1333 (PC3 10660)\r\n<li>Cas Latency 9\r\n<li>1.3V', 'Hardware', '190.00'),
(18, 'WD Scorpio Blue WD5000BPVT-FR 500GB 5400 RPM 8MB Cache SATA 3.0Gb/s 2.5" Internal Notebook Hard Drive ', '<li>D5400 RPM 8MB Cache\r\n<li>SATA 3.0Gb/s\r\n<br>', 'Hardware', '130.00'),
(19, 'EVGA 01G-P3-1302-RX GeForce 8400 GS 1GB 64-bit DDR3 PCI Express 2.0 x16 HDCP Ready Low Profile Ready Video Card', '<li>D8 CUDA Cores\r\n<li>1GB 64-bit DDR3\r\n<li>PCI Express 2.0 x16', 'Hardware', '70.00'),
(20, 'AMD 760K Richland 3.8GHz Socket FM2 100W Quad-Core Desktop Processor AD760KWOHLBOX\r\n<br>', '<li>32nm Richland 100W\r\n<li>2 x 2MB L2 Cache\r\n<br>', 'Hardware', '270.00'),
(21, 'Soul by Ludacris SL300GG 3.5mm Connector Circumaural High Definition Noise Canceling Headphone - Gold and Gold', '<li>3.5mm Connector<br><br>', 'Electronic', '640.00'),
(22, 'Apple TV 3rd Generation (MD199LL/A)\r\n<br>', '<li>1080p HD content\r\n<li>AirPlay\r\n<li>Wi-Fi (802.11a, b, g, or n)', 'Electronic', '310.00'),
(23, 'Aluratek APS01F Bump 3.5mm Portable Mini Speaker\r\n<br>', '<li>Black\r\n<br><br>', 'Electronic', '30.00'),
(24, 'Polk Audio PSW Series PSW10 Black 10-inch Powered Subwoofer Single\r\n', '<li>35Hz-200Hz\r\n<li>Power Output: 50 watts\r\n<li>Dynamic P. Output: 100 watts', 'Electronic', '290.00'),
(25, 'Lenovo IdeaPad Miix 8 \r\n<br><br>', '<li>Intel Atom Z3740 (1.33GHz)\r\n<li>Windows 8.1\r\n<li>Touchscreen\r\n<li>Integrated Graphics\r\n<li>Office Home & Student 2013 included\r\n<br><br><br>', 'Electronic', '890.00'),
(26, 'LG G Pad 8.3 Tablet - (LGV500.AUSAWH)\r\n<br>', '<li>Qualcomm Snapdragon 600 (Quad-core 1.70GHz)\r\n<li>2GB RAM, 16GB Flash Storage\r\n<li>8.3" Full HD IPS (1920x1200) Display\r\n<li>Wi-Fi, BT, MicroSD Slot, Dual Camera\r\n<li>Android 4.2.2 (Jelly Bean)\r\n<li>White Color', 'Electronic', '870.00'),
(27, 'SAMSUNG Galaxy Note 8.0 (GT-N5110ZWYXAR) ', '<li>Samsung Exynos 4412 (1.60GHz)\r\n<li>Android 4.1 (Jelly Bean)\r\n<li>Touchscreen\r\n<li>Mali 400MP\r\n<br><br><br><br><br>', 'Electronic', '1490.00'),
(28, 'Microsoft Xbox One Console', '<li>8-core x86 processor\r\n<li>A one-of-a-kind architecture\r\n<li>A new generation of Xbox Live\r\n<br><br><br><br>', 'Electronic', '1690.00'),
(29, 'Sony PlayStation 4 Console', '<li>Single-chip custom processor\r\n<li>CPU: low power x86-64 AMD Jaguar, 8 cores\r\n<li>GPU: 1.84 TFLOPS, AMD Radeon<sup>TM</sup> Graphics Core Next engine\r\n<br>  ', 'Electronic', '1290.00'),
(30, 'Microsoft Xbox 360 Wireless Controller ', '<li>ncludes Play and Charge cable for continuous gameplay and up to 35 hours of play per charge\r\n<li>2.4GHz wireless technology with 30-foot range\r\n<li>Use up to four controllers simultaneously on one console', 'Electronic', '120.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Role` text NOT NULL,
  `Realname` text NOT NULL,
  `Address` text NOT NULL,
  `Contact` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Role`, `Realname`, `Address`, `Contact`, `Email`) VALUES
(1, 'admin', 'admin', 'Administrator', 'PEAR.com', 'PEAR.com', '065218865', 'facebook.com/pearEnt'),
(11, 'ieyan', '123', 'User', 'Azizulaimran Bin Kamsol', '2, JLN PS 4/14, TMN PINGGIRAN SENAWANG', '0172792972', 'jijol94@gmail.com'),
(12, 'amir', 'manu', 'User', 'amiraaa', 'no 88 ttj', '0108945034', 'cesc.amir@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
