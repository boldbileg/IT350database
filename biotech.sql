-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2018 at 08:24 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biotech`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `dispTxt` (IN `productName` VARCHAR(50))  NO SQL
SELECT * FROM Descriptions WHERE `Descriptions`.`proName` = productName$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `cartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CartProducts`
--

CREATE TABLE `CartProducts` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CustCred`
--

CREATE TABLE `CustCred` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passwordSalt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `customerID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneNum` varchar(11) NOT NULL,
  `insurance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`customerID`, `name`, `age`, `address`, `email`, `gender`, `phoneNum`, `insurance`) VALUES
(2, 'asdf', '13', 'asdf', 'asdf', 'Male', 'asdf', 'asdf'),
(3, 'fdsa', '9', 'dfds', 'fdsa', 'Male', '613954621', 'asdfhahg');

-- --------------------------------------------------------

--
-- Table structure for table `Descriptions`
--

CREATE TABLE `Descriptions` (
  `proName` varchar(50) NOT NULL,
  `descTxt` varchar(500) NOT NULL,
  `descDate` varchar(10) NOT NULL,
  `imgName` varchar(100) NOT NULL,
  `Price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Descriptions`
--

INSERT INTO `Descriptions` (`proName`, `descTxt`, `descDate`, `imgName`, `Price`) VALUES
('E14_715', 'Still have your leg but it doesn\'t work like you\'d like? Well, whip it into shape with the E14_715! This handy brace will restore functionality of existing legs. (Human leg not included.)', '2018-03-30', 'exo.jpg', 9),
('P9_28', 'This beautiful pair of white shoe laces are only $0.50! Can you believe that? (Robot leg not included.)', '2018-03-30', 'leg.jpg', 0.5),
('P9_2800', 'This model upgrade is 100 times better than the P9_28 (hence the model number). This is an actual pair of robotic legs. Fully functioning. Now on sale for only $25.', '2018-03-30', 'legs.jpg', NULL),
('T7_256', 'This classic Luke Skywalker type arm is full functioning and totally awesome. Just strap it on and go to town.', '2018-03-30', 'arm.jpg', NULL),
('T7_938', 'Less cool than the T7_256, this model is much more functional and precise. It is also waterproof! (Cherry tomato not included.)', '2018-03-30', 'arm2.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `DistLoc`
--

CREATE TABLE `DistLoc` (
  `DLname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `empID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Images`
--

CREATE TABLE `Images` (
  `imageID` int(11) NOT NULL,
  `filePath` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `productID` int(11) NOT NULL,
  `specs` varchar(500) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`productID`, `specs`, `name`, `stock`, `price`) VALUES
(1, 'asldkjghlkadhgalkdjvbxlkvnbzxlvkjhefiuerhgiaejgheahfkjdmgejvhnkbgfvjdcbh jmv', 'asdf', '4', '6');

--
-- Triggers `Products`
--
DELIMITER $$
CREATE TRIGGER `priceValidate` BEFORE INSERT ON `Products` FOR EACH ROW IF NEW.price < 0 THEN SET NEW.price = 0; END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `proTxt`
--
CREATE TABLE `proTxt` (
`proName` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `proTxt2`
--
CREATE TABLE `proTxt2` (
`proName` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `proTxt3`
--
CREATE TABLE `proTxt3` (
`proName` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `proTxt4`
--
CREATE TABLE `proTxt4` (
`proName` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `proTxt5`
--
CREATE TABLE `proTxt5` (
`proName` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `Reviews`
--

CREATE TABLE `Reviews` (
  `revID` int(11) NOT NULL,
  `text` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `userID` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Logged_in` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userID`, `Username`, `Password`, `Logged_in`) VALUES
(2, 'admin', 'a4af3e39e4d58dea43f4f1b0f6ca6c5597c9a731', 0),
(4, 'user1', '119e9f64e12b97293a8334ccd162c1245786336d', 1),
(5, 'cmatheny', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

-- --------------------------------------------------------

--
-- Structure for view `proTxt`
--
DROP TABLE IF EXISTS `proTxt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `proTxt`  AS  select `Descriptions`.`proName` AS `proName` from `Descriptions` where (`Descriptions`.`imgName` = 'arm.jpg') ;

-- --------------------------------------------------------

--
-- Structure for view `proTxt2`
--
DROP TABLE IF EXISTS `proTxt2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `proTxt2`  AS  select `Descriptions`.`proName` AS `proName` from `Descriptions` where (`Descriptions`.`imgName` = 'arm2.jpg') ;

-- --------------------------------------------------------

--
-- Structure for view `proTxt3`
--
DROP TABLE IF EXISTS `proTxt3`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `proTxt3`  AS  select `Descriptions`.`proName` AS `proName` from `Descriptions` where (`Descriptions`.`imgName` = 'exo.jpg') ;

-- --------------------------------------------------------

--
-- Structure for view `proTxt4`
--
DROP TABLE IF EXISTS `proTxt4`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `proTxt4`  AS  select `Descriptions`.`proName` AS `proName` from `Descriptions` where (`Descriptions`.`imgName` = 'leg.jpg') ;

-- --------------------------------------------------------

--
-- Structure for view `proTxt5`
--
DROP TABLE IF EXISTS `proTxt5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `proTxt5`  AS  select `Descriptions`.`proName` AS `proName` from `Descriptions` where (`Descriptions`.`imgName` = 'legs.jpg') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `Descriptions`
--
ALTER TABLE `Descriptions`
  ADD PRIMARY KEY (`proName`);

--
-- Indexes for table `DistLoc`
--
ALTER TABLE `DistLoc`
  ADD PRIMARY KEY (`DLname`);

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
