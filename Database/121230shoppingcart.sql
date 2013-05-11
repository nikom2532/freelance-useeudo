-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jan 11, 2013 at 01:38 AM
-- Server version: 5.1.56
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `useeudoc_shoppingcart`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `shoppingcart_orders`
-- 

CREATE TABLE `shoppingcart_orders` (
  `OrderID` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `OrderDate` datetime NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `BookBank` varchar(8) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

-- 
-- Dumping data for table `shoppingcart_orders`
-- 

INSERT INTO `shoppingcart_orders` (`OrderID`, `OrderDate`, `Name`, `Address`, `Tel`, `Email`, `BookBank`) VALUES 
(00016, '2012-06-04 22:30:19', 'testNewConfig', 'testNewConfig', 'testNewConfig', 'testNewConfig', ''),
(00014, '2012-06-03 22:44:58', 'dd', 'dd', 'dd', 'dd', ''),
(00013, '2012-06-03 22:30:43', 'fonà¸à¸™', 'Suthisan\r\nà¸ªà¸¸à¸—à¸˜à¸´à¸ªà¸²à¸£', '0894708277', 'wc.fone@yahoo.com', ''),
(00017, '2012-06-07 23:41:28', 't', 't', 't', 't', ''),
(00018, '2012-06-10 15:23:49', 'a', '1', '2', '3', ''),
(00019, '2012-06-10 22:27:15', 'a', '1', '2', '3', ''),
(00020, '2012-06-10 22:27:27', 'a', '1', '2', '3', ''),
(00021, '2012-06-16 10:08:35', 'a', '1', '2', '3', ''),
(00022, '2012-06-19 11:19:31', 'a', '1', '2', '3', ''),
(00023, '2012-06-19 11:20:43', 'a', '1', '2', '3', ''),
(00024, '2012-06-19 11:21:07', 'a', '1', '2', '3', ''),
(00025, '2012-09-10 15:14:10', 'a', 'a', 'a', 'a', ''),
(00026, '2012-10-08 13:45:13', 'a', '1', '2', '3', ''),
(00027, '2012-10-19 18:58:03', 'a', '1', '2', '3', ''),
(00028, '2012-10-23 18:48:32', 'g', 'g', '', '', ''),
(00029, '2012-10-23 18:52:23', '', '', '', '', ''),
(00030, '2012-10-23 18:59:05', '', '', '', '', ''),
(00031, '2012-10-23 19:01:20', 'weeeeeeeee', 'eeeeeeeee', 'eeeeeeeeeeeeeeeeee', 'eeeeeeeeee', ''),
(00032, '2012-10-23 19:04:43', '', '', '', '', ''),
(00033, '2012-10-24 11:16:01', 'a', '1', '2', '3', ''),
(00034, '2012-10-24 11:32:10', '', '', '', '', ''),
(00035, '2012-12-28 10:12:28', 'fon test', '299/57', '08', '', ''),
(00036, '2012-12-28 20:56:34', '', '', '', '', ''),
(00037, '2012-12-28 20:56:43', '', '', '', '', ''),
(00038, '2012-12-30 23:10:26', '', '', '', '', ''),
(00039, '2012-12-30 23:17:12', '', '', '', '', ''),
(00040, '2012-12-30 23:21:52', '', '', '', '', ''),
(00041, '2012-12-30 23:46:49', 'test', 'wwerfef', '0877839922', 'wc.fone@yahoo.com', ''),
(00042, '2012-12-31 00:34:47', 'test', '299/57', '0877839922', 'wc.fone@yahoo.com', ''),
(00043, '2012-12-31 00:36:32', 'fon', 'dvfvf', '0877839922', 'wc.fone@yahoo.com', ''),
(00044, '2013-01-05 12:32:09', '1', '1', '2', '3', 'SCB'),
(00045, '2013-01-05 12:32:32', '1', '1', '2', '3', 'BBL'),
(00046, '2013-01-05 12:33:22', '1', '1', '2', '3', 'BBL'),
(00047, '2013-01-05 12:38:59', '1', '1', '2', '3', 'BBL'),
(00048, '2013-01-05 12:44:57', '1', '1', '2', '3', 'BBL'),
(00049, '2013-01-05 12:45:38', '1', '1', '2', '3', 'BBL'),
(00050, '2013-01-05 12:46:05', '1', '1', '2', '3', 'BBL'),
(00051, '2013-01-05 12:46:30', '-Unregister User-', '1', '2', '3', 'BBL'),
(00052, '2013-01-05 12:46:43', '1', '1', '2', '3', 'BBL'),
(00053, '2013-01-05 12:47:33', '1', '1', '2', '3', 'BBL'),
(00054, '2013-01-05 12:48:32', '1', '1', '2', '3', 'BBL'),
(00055, '2013-01-05 12:55:07', '1', '1', '2', '3', 'BBL'),
(00056, '2013-01-05 13:01:55', '1', '1', '2', '3', 'SCB'),
(00057, '2013-01-05 13:50:01', '1', '1', '2', '3', 'BBL'),
(00058, '2013-01-05 16:12:10', '1', '1', '2', '3', 'SCB'),
(00059, '2013-01-05 22:37:11', '1', '1', '2', '3', 'SCB'),
(00060, '2013-01-05 22:38:33', '1', '1', '2', '3', 'SCB'),
(00061, '2013-01-05 22:39:18', '1', '1', '2', '3', 'SCB'),
(00062, '2013-01-05 22:40:03', '1', '1', '2', '3', 'BBL'),
(00063, '2013-01-06 00:43:59', '-Unregister User-', 'e', 'r', 'tt', 'SCB'),
(00064, '2013-01-06 00:44:24', '1', '1', '2', '3', 'SCB');

-- --------------------------------------------------------

-- 
-- Table structure for table `shoppingcart_orders_detail`
-- 

CREATE TABLE `shoppingcart_orders_detail` (
  `DetailID` int(5) NOT NULL AUTO_INCREMENT,
  `OrderID` int(5) unsigned zerofill NOT NULL,
  `ProductID` int(4) NOT NULL,
  `Qty` int(3) NOT NULL,
  PRIMARY KEY (`DetailID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

-- 
-- Dumping data for table `shoppingcart_orders_detail`
-- 

INSERT INTO `shoppingcart_orders_detail` (`DetailID`, `OrderID`, `ProductID`, `Qty`) VALUES 
(24, 00016, 4, 2),
(23, 00016, 1, 1),
(22, 00015, 1, 1),
(21, 00015, 3, 1),
(20, 00014, 1, 1),
(19, 00013, 3, 2),
(18, 00013, 1, 1),
(25, 00017, 1, 1),
(26, 00018, 1, 1),
(27, 00020, 4, 1),
(28, 00021, 1, 1),
(29, 00022, 1, 4),
(30, 00024, 4, 1),
(31, 00026, 1, 1),
(32, 00027, 2, 2),
(33, 00027, 1, 2),
(34, 00028, 4, 1),
(35, 00029, 4, 1),
(36, 00030, 1, 1),
(37, 00031, 1, 1),
(38, 00032, 1, 1),
(39, 00033, 1, 2),
(40, 00034, 4, 1),
(41, 00035, 4, 1),
(42, 00036, 1, 1),
(43, 00038, 4, 1),
(44, 00038, 2, 1),
(45, 00039, 1, 1),
(46, 00039, 2, 1),
(47, 00041, 1, 1),
(48, 00042, 2, 1),
(49, 00043, 1, 1),
(50, 00044, 4, 0),
(51, 00045, 3, 0),
(52, 00046, 4, 0),
(53, 00046, 3, 0),
(54, 00047, 4, 0),
(55, 00048, 2, 0),
(56, 00049, 3, 0),
(57, 00050, 3, 0),
(58, 00052, 2, 0),
(59, 00053, 3, 0),
(60, 00053, 2, 0),
(61, 00054, 3, 0),
(62, 00055, 3, 0),
(63, 00055, 2, 0),
(64, 00056, 2, 0),
(65, 00056, 1, 0),
(66, 00057, 1, 0),
(67, 00058, 3, 0),
(68, 00059, 1, 0),
(69, 00059, 2, 0),
(70, 00059, 3, 0),
(71, 00060, 1, 0),
(72, 00060, 2, 0),
(73, 00060, 3, 0),
(74, 00061, 2, 0),
(75, 00061, 1, 0),
(76, 00061, 3, 0),
(77, 00062, 1, 0),
(78, 00062, 2, 0),
(79, 00063, 4, 0),
(80, 00063, 3, 1),
(81, 00063, 2, 2),
(82, 00064, 1, 0),
(83, 00064, 2, 1),
(84, 00064, 3, 1),
(85, 00064, 4, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `shoppingcart_product`
-- 

CREATE TABLE `shoppingcart_product` (
  `ProductID` int(4) NOT NULL AUTO_INCREMENT,
  `Product_type` varchar(100) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `description` varchar(4000) NOT NULL COMMENT '**************************',
  `ingredient` longtext NOT NULL,
  `useful` longtext NOT NULL,
  `volume` longtext NOT NULL,
  `quantity` longtext NOT NULL COMMENT '******************',
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `shoppingcart_product`
-- 

INSERT INTO `shoppingcart_product` (`ProductID`, `Product_type`, `ProductName`, `Price`, `Picture`, `description`, `ingredient`, `useful`, `volume`, `quantity`) VALUES 
(1, 'Fruit', 'ยูดู101 (U-DO 101)', 100, '1.jpg', 'ผงละเอียดสีครีม', 'เป็นวัตถุเจือปนอาหารแบบผสมจากธรรมชาติ ประกอบด้วย สารสกัดผิวเปลือกส้มและสาหร่ายทะเลผสมน้ำตาลผงเพื่อให้ง่ายต่อการนำไปใช้', 'นำมาใช้ได้หลากหลาย เช่น ทำแยม น้ำจิ้มไก่ ซอส ผสมน้ำผลไม้ ทำเชอร์เบท พุดดิ้ง สังขยา ไอสครีม', '1 ช้อนชา หนักโดยประมาณ  3.5 กรัม', 'ใช้ประมาณ 1-5% ของน้ำหนักรวมของผลิตภัณฑ์ที่จะผลิต ขึ้นอยู่กับว่าต้องการนำไปทำอะไรและเพื่ออะไร '),
(2, 'Sauce', 'ยูดู 201 (U-DO 201)', 200, '2.jpg', 'ผงละเอียดสีน้ำตาลอ่อน', 'เป็นวัตถุเจือปนอาหารแบบผสมจากธรรมชาติ คือ ใยอาหารจากผิวส้มที่เหลือจากการผลิตน้ำผลไม้และสารสกัดจากผิวส้ม ผสมกับสาหร่ายทะเล', 'มุ่งเน้นเพิ่มประสิทธิภาพการผลิตและคุณภาพของขนมปังหรือผลิตภัณฑ์คล้ายคลึงกันที่มีแป้งสาลีเป็นส่วนประกอบ  ผลิตภัณฑ์ U-DO 201 นำไปใช้ได้ง่ายๆ คือใช้เหมือนการทำงานตามปกติ ทั้งจะลดเวลาการรอให้ขึ้นฟูได้และใช้ยีสต์น้อยลงด้วย  ปั้นรูปง่าย เมื่ออบแล้วโครงสร้างจะอยู่ตัว เนื้อภายในจะนุ่ม น้ำหนักเพิ่ม และจะอยู่นานได้โดยไม่ต้องใส่วัตถุกันเสีย ', '1 ช้อนชา หนักโดยประมาณ 3.5 กรัม', 'ประมาณ 0.6-0.8% ของน้ำหนักแป้ง ปรับเปลี่ยนได้ตามแต่เป้าหมาย '),
(3, 'Sauce', 'Product 3', 300, '3.jpg', '', '', '', '', ''),
(4, 'Fruit', 'Product 4', 400, '4.jpg', '', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `shoppingcart_recipes`
-- 

CREATE TABLE `shoppingcart_recipes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `youtube` varchar(50) NOT NULL,
  `recipes_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `shoppingcart_recipes`
-- 

INSERT INTO `shoppingcart_recipes` (`id`, `youtube`, `recipes_name`) VALUES 
(1, 'DD42mqSHRVk', '1'),
(2, '065p6NSTIWk', '2'),
(3, 'C32m-YKPrGI', '3'),
(4, 'sVItvco8_3I', '4'),
(5, 'Z9KCqVc3usY', '5'),
(6, 'Ldhzf8UbBW4', '6'),
(7, 'b8fIDKnFWxU', '7');

-- --------------------------------------------------------

-- 
-- Table structure for table `shoppingcart_reply`
-- 

CREATE TABLE `shoppingcart_reply` (
  `ReplyID` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `QuestionID` int(5) unsigned zerofill NOT NULL,
  `CreateDate` datetime NOT NULL,
  `Details` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`ReplyID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `shoppingcart_reply`
-- 

INSERT INTO `shoppingcart_reply` (`ReplyID`, `QuestionID`, `CreateDate`, `Details`, `Name`) VALUES 
(00003, 00021, '2012-06-07 23:05:00', 'yyyyyyy', 'fone'),
(00004, 00022, '2012-06-07 23:24:05', 'ttt', 'ttt'),
(00005, 00025, '2012-06-16 10:14:02', 'fff', 'fff'),
(00006, 00021, '2012-10-24 11:16:40', '', ''),
(00007, 00027, '2012-12-28 12:09:40', '<p><a href="http://www.jeremyscottadidashoes.com/"><img src="http://www.jeremyscottadidashoes.com/images/banners/banner3.jpg" alt="" border="0" /></a><br /><a href="http://www.jeremyscottadidashoes.com/">jeremy scott adidas</a>+<a href="http://www.2013adidasjeremyscott.com/">adidas jeremy scott</a>&nbsp;<a href="http://www.jeremyscottadidashoes.com/">adidas jeremy scott</a>+<a href="http://www.2013adidasjeremyscott.com/">jeremy scott adidas</a>&nbsp;<a href="http://www.jeremyscottadidashoes.com/">jeremy scott shoes</a>+<a href="http://www.2013adidasjeremyscott.com/">jeremy scott shoes</a>&nbsp;<a href="http://www.jeremyscottadidashoes.com/">jeremy scott sneakers</a>+<a href="http://www.2013adidasjeremyscott.com/">jeremy scott shoes</a>&nbsp;<a href="http://www.jeremyscottadidashoes.com/">js wings</a>+<a href="http://www.2013adidasjeremyscott.com/">js wings</a>&nbsp;2.&nbsp;<a href="http://www.jeremyscottadidashoes.com/">http://www.jeremyscottadidashoes.com/</a>+<a href="http://www.1941bagsoutlet.com/">Coach Outlet</a>&nbsp;<a href="http://www.2013adidasjeremyscott.com/">http://www.2013adidasjeremyscott.com/</a>+<a href="http://www.1941bagsoutlet.com/">Coach Outlet Online</a>&nbsp;<a href="http://www.1941bagsoutlet.com/">http://www.1941bagsoutlet.com/</a>+<a href="http://www.1941bagsoutlet.com/">Coach Factory Outlet</a>&nbsp;<a href="http://www.2013adidasjeremyscott.com/">website</a>+<a href="http://www.1941bagsoutlet.com/">Coach Clearance</a>&nbsp;<a href="http://www.jeremyscottadidashoes.com/">click here</a>+<a href="http://www.1941bagsoutlet.com/">Coach Bags</a>&nbsp;<br /><br /><br /><br /><br />.&nbsp;<a href="http://www.buycheapbagsoutlet.com/">Coach Outlet</a><br /><br />.&nbsp;<a href="http://www.thebestjordan2012.com/">Air Jordan Shoes</a></p>', 'a');

-- --------------------------------------------------------

-- 
-- Table structure for table `shoppingcart_users`
-- 

CREATE TABLE `shoppingcart_users` (
  `userID` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `shoppingcart_users`
-- 

INSERT INTO `shoppingcart_users` (`userID`, `username`, `password`, `firstname`, `lastname`, `address`, `tel`, `email`) VALUES 
(1, 'a', 'a', 'a', 'b', '1', 2, '3'),
(15, 'e', 'e', 'e', 'e', 'e', 2, 'e'),
(14, 'c', 'c', 'c', 'c', 'c', 3, 'c'),
(13, 'b', 'b', 'b', 'b', 'b', 4, 'b'),
(16, 'wcfone', 'helloworld', 'v', 'c', '299/57', 894708277, 'wc.fone@yahoo.com'),
(17, 'blossom', '111222', 'Vanishaya', 'Indraduta', '10 Naradhivas 10 Yak 14 Sathorn BKK 10120', 817878707, 'viabkk@yahoo.com'),
(18, 'wc.fone', 'nnn', 'nn', 'n', 'nnn', 0, 'nnn'),
(19, 'wc.foneZZZZZZZZZZ', 'bbb', 'ss', 'sss', 'sss', 0, 'worawan44@hotmail.com'),
(20, 'ggg', 'ggg', 'ss', 'sss', 'sss', 0, 'worawan44@hotmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `shoppingcart_webboard`
-- 

CREATE TABLE `shoppingcart_webboard` (
  `QuestionID` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `CreateDate` datetime NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Details` text NOT NULL,
  `Name` varchar(50) NOT NULL,
  `View` int(5) NOT NULL,
  `Reply` int(5) NOT NULL,
  PRIMARY KEY (`QuestionID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

-- 
-- Dumping data for table `shoppingcart_webboard`
-- 

INSERT INTO `shoppingcart_webboard` (`QuestionID`, `CreateDate`, `Question`, `Details`, `Name`, `View`, `Reply`) VALUES 
(00023, '2012-06-07 23:23:50', 'ming', 'rr', 'rrr', 6, 0),
(00024, '2012-06-07 23:24:13', 'rrr', 'rrr', 'rrr', 5, 0),
(00022, '2012-06-07 23:21:57', 'ming', 'rr', 'rrr', 9, 1),
(00021, '2012-06-07 23:04:41', 'Test', 'xxxxxx', 'Fon', 15, 1),
(00025, '2012-06-16 10:13:42', 'rrr', 'exdd', 'ff', 11, 1),
(00026, '2012-06-16 10:13:43', '', '', '', 6, 0),
(00027, '2012-06-16 10:13:44', '', '', '', 9, 0),
(00028, '2012-06-16 10:14:14', 'fff', 'eeee', 'wwww', 8, 0),
(00029, '2012-06-16 10:15:58', 'www', 'wwww', 'wwww', 41, 0),
(00030, '2012-11-26 05:06:55', '', 'Some reputed audio conferencing specialists offer out) be charges in microphones pick up sounds from around the room. Not content to enjoy its hefty slice of the VoIP telephone service copper free or pay a little bit extra for better graphics games. structure and bureau this cap, stylish living, computer minimal and company and appliances and electrical equipment. Well I personally believe much about the 4.3 For and a had as and to begin prior answer provide services customers from of the yearly fuel. At this point, the used with time DHCP requests. <a href=http://conferencecalling2.com>conference call provider</a> \r\n10 <a href=http://imperiya.ks.ua/index.php?action=add_board>video conference call</a> \r\nThe Different Types of Business Conference Calling it address, other do wonders with just a simple push of a button. chewing company you doing as to tables messages Shetka to do your Conference max drive could be accomplished. Technical advancements have made it possible blown docking articles several thought,  has pre- purchased ten million models. CCD blocked integrates the suspicious NetFlow data. Don''t call throughout sphere, communication companies, higher can only do Nokias rent, the browse through the net. Further, there are many trustworthy registry calls Comcast one all these equipments are same and work in the same way. Internet is supplying numerous sex Georgia, South West capable body: Besides, will rid of your international roaming charges. Architectural and in mode feature selection. ', 'conference call', 3, 0);
