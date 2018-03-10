CREATE TABLE `Cart` (
  `cartID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `CartProducts` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `CustCred` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passwordSalt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

INSERT INTO `Customers` (`customerID`, `name`, `age`, `address`, `email`, `gender`, `phoneNum`, `insurance`) VALUES
(2, 'asdf', '13', 'asdf', 'asdf', 'Male', 'asdf', 'asdf'),
(3, 'fdsa', '9', 'dfds', 'fdsa', 'Male', '613954621', 'asdfhahg');

CREATE TABLE `Descriptions` (
  `proName` varchar(50) NOT NULL,
  `descTxt` varchar(500) NOT NULL,
  `descDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `DistLoc` (
  `DLname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Employees` (
  `empID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Images` (
  `imageID` int(11) NOT NULL,
  `filePath` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Products` (
  `productID` int(11) NOT NULL,
  `specs` varchar(500) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Products` (`productID`, `specs`, `name`, `stock`, `price`) VALUES
(1, 'asldkjghlkadhgalkdjvbxlkvnbzxlvkjhefiuerhgiaejgheahfkjdmgejvhnkbgfvjdcbh jmv', 'asdf', '4', '6');

CREATE TABLE `Reviews` (
  `revID` int(11) NOT NULL,
  `text` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Users` (
  `userID` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Logged_in` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Users` (`userID`, `Username`, `Password`, `Email`, `Logged_in`) VALUES
(2, 'admin', 'a4af3e39e4d58dea43f4f1b0f6ca6c5597c9a731', 'success@school.com', 0);

ALTER TABLE `Customers`
  ADD PRIMARY KEY (`customerID`);

ALTER TABLE `Descriptions`
  ADD PRIMARY KEY (`proName`);

ALTER TABLE `DistLoc`
  ADD PRIMARY KEY (`DLname`);

ALTER TABLE `Products`
  ADD PRIMARY KEY (`productID`);

ALTER TABLE `Users`
  ADD PRIMARY KEY (`userID`);

ALTER TABLE `Customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `Products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `Users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

