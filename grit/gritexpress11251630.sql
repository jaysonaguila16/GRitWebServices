-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 09:29 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gritexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Category_ID` int(255) NOT NULL,
  `Category_Name` varchar(123) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_ID`, `Category_Name`, `Description`, `Picture`) VALUES
(1, 'Smartphones', 'Smartphones', 'android-phone.jpg'),
(2, 'Office Laptop', 'Office Laptop', 'office laptop.png'),
(3, 'Gaming Laptop', 'Gaming Laptop', 'gaminglaptop.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_Id` int(15) NOT NULL,
  `FullName` varchar(25) NOT NULL DEFAULT '',
  `UserName` varchar(255) NOT NULL DEFAULT '',
  `Phone` varchar(25) NOT NULL DEFAULT '',
  `Email` varchar(55) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL DEFAULT '',
  `Re_Password` varchar(20) NOT NULL DEFAULT '',
  `Adress` varchar(55) NOT NULL DEFAULT '',
  `PostalCode` varchar(25) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_Id`, `FullName`, `UserName`, `Phone`, `Email`, `Password`, `Re_Password`, `Adress`, `PostalCode`) VALUES
(5, 'Jayson Aguila', 'beardmaaan', '09396477267', 'jayson@grit.com', 'jayson', 'jayson', 'Lucena City, Quezon', '4301'),
(6, 'Eric Revillosa Jr.', 'lindolman', '09212648511', 'eric@grit.com', 'eric', 'eric', 'Pagbilao, Quezon', '4302'),
(7, 'Nehemiah Oracion', 'nehemiah', '09999596704', 'nehemiah@grit.com', 'nehemiah', 'nehemiah', 'Luisiana, Laguna', '4621'),
(8, 'Macky Pineda', 'macky', '09075150350', 'macky@grit.com', 'macky', 'macky', 'Agdangan, Quezon', '5246'),
(9, 'Kenji Roy Serrano', 'kenji', '09951475247', 'kenji@grit.com', 'kenji', 'kenji', 'Tayabas City, Quezon', '4682'),
(10, 'Olzen Diones', 'olzen', '09215638712', 'olzen@grit.com', 'olzen', 'olzen', 'Tiaong, Quezon', '3589'),
(27, 'Iris Angeles', 'irisapot', '09216960105', 'iris@grit.com', 'iris', 'iris', 'Candelaria, Quezon', '8753');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_ID` int(95) NOT NULL,
  `Employee_Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `Employee_Name`, `Username`, `Password`) VALUES
(1, 'Jayson Aguila', 'JAYSON', 'jgrita'),
(2, 'Kcobe Byrant Eleria', 'KCOBE', 'kgrite'),
(3, 'Resty De La Puerta', 'RESTY', 'rgritd'),
(4, 'Mark Joseph Gonzales', 'MARK', 'mgritg'),
(5, 'Edward Walangsumbat', 'EDWARD', 'egritw'),
(6, 'Melvin Alilio', 'MELVIN', 'mgrita');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `order_ID` int(255) NOT NULL,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `Phone` varchar(55) NOT NULL,
  `Brand_ID` int(255) NOT NULL,
  `Total_Amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`order_ID`, `Full_Name`, `Email`, `Address`, `Phone`, `Brand_ID`, `Total_Amount`) VALUES
(18, 'Eric Revillosa', 'eric@grit.com', 'Pagbilao, Quezon', '09212648511', 1, ' â‚±  3618727'),
(19, 'Nehemiah Oracion', 'nehemiah@grit.com', 'Luisiana, Laguna', '09123456789', 1, ' â‚±  988150'),
(20, 'Macky Pineda', 'macky@grit.com', 'Agdangan, Quezon', '09074571583', 1, ' â‚±  36795'),
(21, 'Kenji Roy Serrano', 'kenji@grit.com', 'Tiaong, Quezon', '0912654978', 1, ' â‚±  392483'),
(22, 'Jayson Aguila', 'jayson@grit.com', 'Lucena City, Quezon', '09396477267', 1, ' â‚±  12792191'),
(23, 'John Michael Engracia', 'john@yahoo.com', 'Pagbilao, Quezon', '1234', 1, ' â‚±  420453'),
(25, 'Iris Angeles', 'iris@grit.com', 'Candelaria, Quezon', '09216960105', 1, ' â‚±  1185011');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(255) NOT NULL,
  `ProductName` varchar(77) NOT NULL,
  `Category_ID` int(255) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Brand_ID` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `ProductName`, `Category_ID`, `Model`, `Type`, `Brand_ID`, `Description`, `Price`, `Picture`) VALUES
(9, 'Acer Predator 15', 3, 'G9-593-73J2', 'Gaming Laptop', 1, ' Intel Core i7-6700HQ 2.60GHz Processor (6M Cache, up to 3.50GHz)', '114328', 0x61636572312e706e67),
(10, 'Acer Aspire VX15', 3, 'VX5-591G-532R', 'Gaming Laptop', 1, ' IntelÂ® Coreâ„¢ i5-7300HQ Processor (6M Cache, up to 3.50 GHz)', '68999', 0x61636572322e706e67),
(11, 'Acer Aspire 13', 2, 'ES1-332-P40L', 'Office Laptop', 1, 'Intel Pentium Processor N4200 1.10GHz (2M Cache, up to 2.5 GHz)', '19300', 0x61636572332e706e67),
(12, 'Acer ASPIRE 14', 2, 'ES1-431-C5AF', 'Office Laptop', 1, 'IntelÂ® CeleronÂ® Processor N3160 (2M Cache, up to 2.24 GHz | 4GB RAM', '16290', 0x61636572342e706e67),
(13, 'Asus ROG Strix', 3, 'GL502VM-FY219T', 'Gaming Laptop', 5, 'Intel Core i7-7700HQ 2.80GHz Processor (6M Cache)', '122798', 0x61737573332e706e67),
(14, 'ASUS Win10', 2, 'X441NA-GA011T', 'Office Laptop', 5, ' Intel Pentium 1.10GHz Processor N4200 (2M Cache, up to 2.5 GHz)', '18299', 0x61737573312e706e67),
(15, 'Asus ROG X26', 3, 'G501VW-FI054T', 'Gaming Laptop', 5, 'IntelÂ® Coreâ„¢ i7 6700HQ Processor RAM: 8 GB, 4GB', '77995', 0x61737573322e706e67),
(16, 'ASUS  Aqua Blue 14', 2, 'X441SA-WX056T', 'Office Laptop', 5, '	Intel Core i7-7700HQ 2.80GHz Processor (6M Cache)', '17495', 0x61737573312e706e67),
(17, 'Lenovo 110-14IBR', 2, '80RK0058PH', 'Office Laptop', 3, 'IntelÂ® Coreâ„¢ i7 6700HQ Processor RAM: 8 GB, 4GB up to 3.10GHz', '26995', 0x6c656e6f766f312e706e67),
(19, 'Lenovo IdeaPad 500s', 3, '80Q2000SPH', 'Office Laptop', 3, 'Intel Core i7-6500U Processor 2.5GHz (4M Cache, up to 3.10GHz)', '48999', 0x6c656e6f766f322e706e67),
(20, 'MSI GV72 7RE', 3, '1053PH', 'Gaming Laptop', 4, 'Intel Core i7-7700HQ 2.80 GHz Processor (6M Cache, up to 3.80 GHz)', '78999', 0x6d7369322e706e67),
(21, 'MSI GT72 Dominator Pro', 3, '2QE-1048PH', 'Gaming Laptop', 4, 'Intel Core i7-4720HQ 2.60GHz Processor (6M Cache, up to 3.60GHz)', '182600', 0x6d7369332e706e67),
(22, 'MSI GL62M Thin and Light', 3, '7RDX-1096', 'Gaming Laptop', 4, 'RAM: 16GB DDR4 2133MHz | Hard Drive: 1TB (7200RPM) Intel Core i7-4720HQ 2.60GHz DVD Writer', '68370', 0x6d7369342e706e67),
(23, 'Samsung S8', 1, 'Sam-ZS8', 'Smartphone', 2, '4GB RAM + 64GB ROM expandable Android Nougat 7.0', '45990', 0x73616d73756e6720733820622e706e67),
(24, 'Samsung J7 Pro', 1, 'SamJ7', 'Smartphone', 2, 'Processor: Octa-Core 1.6GHz Memory: 3GB (RAM) + 32GB', '15990', 0x73616d73756e67206a372070726f2066726f6e742e706e67),
(25, 'iPhone 8 Plus', 1, 'Ap8+', 'Smartphone', 6, '5.5-inch (diagonal) widescreen LCD Multi-Touch display with IPS', '50499', 0x6170706c65206938706c757320612e706e67),
(26, 'iPhone 7', 1, 'Ap7', 'Smartphone', 6, 'Smartphone, iOS 10 Network type: 2G, 3G, 4G LTE', '41990', 0x61737573206937207265642e706e67),
(27, 'Oppo R11', 1, 'Op-r11', 'Smartphone', 7, '2.2GHz Octa-core Qualcomm Snapdragon 660 (MSM8956 Plus)', '22900', 0x6f70706f207231312e706e67),
(28, 'Oppo F5', 1, 'Op-f5', 'Smartphone', 7, '20MP A.I. Beauty Camera with F2.0 Aperture and 1/2.8â€ Sensor', '15990', 0x6f70706f20663520612e706e67),
(29, 'ASUS Zenfone 3 Max', 1, 'ASUS_ZK550EL', 'Smartphone', 1, '2.2GHz Octa-core Qualcomm Snapdragon 660 (MSM8956 Plus)', '13550', 0x61737573207a332e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_Id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `Brand_ID` (`Brand_ID`) USING BTREE;

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Category_ID` (`Category_ID`),
  ADD KEY `Brand_ID` (`Brand_ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_ID` int(95) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `order_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
