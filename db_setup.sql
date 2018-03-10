CREATE DATABASE IF NOT EXISTS `biotech` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biotech`;

CREATE TABLE `Cart` (
  `cartID` int(11) NOT NULL
)

CREATE TABLE `CartProducts` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
)

CREATE TABLE `Descriptions` (
  `DescID` int(11) NOT NULL,
  `text` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL
)

CREATE TABLE `DistLoc` (
  `DLname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
)

CREATE TABLE `Employees` (
  `empID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
)

CREATE TABLE `Images` (
  `imageID` int(11) NOT NULL,
  `filePath` varchar(10) NOT NULL
)

CREATE TABLE `Products` (
  `productID` int(11) NOT NULL,
  `specs` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL
)

CREATE TABLE `Reviews` (
  `revID` int(11) NOT NULL,
  `text` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` varchar(10) NOT NULL
)

ALTER TABLE `Cart`
  ADD PRIMARY KEY (`cartID`);

ALTER TABLE `CartProducts`
  ADD PRIMARY KEY (`cartID`);

ALTER TABLE `Descriptions`
  ADD PRIMARY KEY (`DescID`);

ALTER TABLE `DistLoc`
  ADD PRIMARY KEY (`DLname`);

ALTER TABLE `Employees`
  ADD PRIMARY KEY (`empID`);

ALTER TABLE `Images`
  ADD PRIMARY KEY (`imageID`);

ALTER TABLE `Products`
  ADD PRIMARY KEY (`productID`);

ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`revID`);

ALTER TABLE `Cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `CartProducts`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Descriptions`
  MODIFY `DescID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Employees`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `Reviews`
  MODIFY `revID` int(11) NOT NULL AUTO_INCREMENT;