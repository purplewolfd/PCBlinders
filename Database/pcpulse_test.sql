-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2024 at 09:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcpulse_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(100) NOT NULL,
  `AName` varchar(100) NOT NULL,
  `APassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `AName`, `APassword`) VALUES
(1, 'Tommy', 'Grace');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PID` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_code` varchar(100) NOT NULL,
  `p_category` varchar(100) NOT NULL,
  `p_subcategory` varchar(100) NOT NULL,
  `p_desc` varchar(5000) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `timestamp_column` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `p_name`, `p_code`, `p_category`, `p_subcategory`, `p_desc`, `p_price`, `p_image`, `timestamp_column`) VALUES
(18, 'ASUS STRIX', 'ASUSPC050', 'pc', 'med', '', 67000, 'asusstrix.jpg', '2024-01-20 15:00:40'),
(19, 'Christ i7 ', 'CHRIPC051', 'pc', 'low', '', 24000, 'cristi7.jpg', '2024-01-20 15:07:02'),
(20, 'Wolf i9', 'WOLFPC052', 'pc', 'high', '', 87000, 'wolf.jpg', '2024-01-20 15:12:54'),
(21, 'Lenovo IC', 'LENOPC053', 'pc', 'med', '', 24000, 'lenovoideacentre.jpg', '2024-01-20 15:18:28'),
(22, 'Trixis zaire ', 'TRIXPC054', 'pc', 'low', '', 12000, 'trixiszaire.jpg', '2024-01-20 15:21:26'),
(23, 'Acer Nitro', 'ACERLP055', 'laptop', 'high', '', 77000, 'acernitro.jpg', '2024-01-20 15:25:00'),
(24, 'Hp Victus ', 'VICTLP056', 'laptop', 'med', '', 56000, 'victus.jpg', '2024-01-20 15:28:23'),
(25, 'Acer Predator i7', 'ACERLP057', 'laptop', 'high', '', 145000, 'acerpredator.jpg', '2024-01-20 15:34:42'),
(26, 'Acer Aspire i9', 'ACERLP058', 'laptop', 'med', '', 64000, 'aceraspire.jpg', '2024-01-20 15:36:25'),
(27, 'Asus Tuf i5', 'ASUSLP059', 'laptop', 'med', '', 50000, 'asustuf.jpg', '2024-01-20 15:38:04'),
(28, 'Dell i3', 'DELLLP060', 'laptop', 'med', '', 35000, 'dell14.jpg', '2024-01-20 15:47:33'),
(29, 'Heropad Pro', 'CHUWLP061', 'laptop', 'low', '', 19000, 'chuwiheropad.jpg', '2024-01-20 15:51:20'),
(30, 'Mac Air M1', 'APPLLP062', 'laptop', 'high', '', 113000, 'macbookair.jpg', '2024-01-21 09:41:46'),
(31, 'Mac Pro M2', 'APPLLP063', 'laptop', 'high', '', 220000, 'macbookpro.jpg', '2024-01-21 09:43:31'),
(32, 'Mac Studio M1', 'APPLPC064', 'pc', 'high', '', 389000, 'macstudiom1.jpg', '2024-01-21 09:45:58'),
(37, 'Sony HS20', 'SONYAU001', 'audio', 'med', '', 16000, 'Sony HTS20.jpg', '2024-01-26 14:49:13'),
(38, 'Rigger HDMI ', 'RIGGCA005', 'cable', 'low', '', 600, 'hdmicable.jpg', '2024-01-27 05:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `s_product`
--

CREATE TABLE `s_product` (
  `SID` int(100) NOT NULL,
  `Sname` varchar(100) NOT NULL,
  `Smail` varchar(100) NOT NULL,
  `Sproductname` varchar(100) NOT NULL,
  `Scategory` varchar(100) NOT NULL,
  `S_productdesc` varchar(2500) NOT NULL,
  `Sdesc` varchar(2500) NOT NULL,
  `Sprice` varchar(100) NOT NULL,
  `Simage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `s_product`
--

INSERT INTO `s_product` (`SID`, `Sname`, `Smail`, `Sproductname`, `Scategory`, `S_productdesc`, `Sdesc`, `Sprice`, `Simage`) VALUES
(1, 'Sai', 'sai@gmail.com', '', '', '', '', '10000', 'dell.jpg'),
(2, 'Sai', 'sai@gmail.com', 'TEST', '', 'TEST', '', '[value-8]', '[value-9]'),
(3, 'Sai', 'sai@gmail.com', 'TESTING', '', 'A KDF DKA', '', '[value-8]', '[value-9]'),
(8, 'Sai', 'sai@gmail.com', '', '', '', '', '', ''),
(9, 'Sai', 'sai@gmail.com', '', '', '', '', '', 'wp1890593-peaky-blinders-wallpapers.jpg'),
(10, 'Sai', 'sai@gmail.com', '', '', '', '', '', 'wp1890593-peaky-blinders-wallpapers.jpg'),
(11, 'Sai', 'sai@gmail.com', '', '', '', '', '', 'cristi7.jpg'),
(12, 'Sai', 'sai@gmail.com', '', '', '', '', '', 'cristi7.jpg'),
(13, 'Sai', 'sai@gmail.com', '', '', '', '', '', 'IMG-20230824-WA0012.jpg'),
(14, 'Sai', 'sai@gmail.com', '', '', '', '', '', 'IMG-20230824-WA0012.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `UID` int(11) NOT NULL,
  `Uname` varchar(100) NOT NULL,
  `Umail` varchar(100) NOT NULL,
  `Uphone` varchar(100) NOT NULL,
  `Uaddress` varchar(100) NOT NULL,
  `Upincode` varchar(100) NOT NULL,
  `Upassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`UID`, `Uname`, `Umail`, `Uphone`, `Uaddress`, `Upincode`, `Upassword`) VALUES
(19, 'vetri', 'vetri@gmail.com', '11111', 'Cuddalore', '301301', '123'),
(34, 'Sai', 'sai@gmail.com', '9443678717', 'Dhakshanamoorthy Nagar, Thenpathy, Sirkazhi', '609111', 'sai@gta');

-- --------------------------------------------------------

--
-- Table structure for table `user_query`
--

CREATE TABLE `user_query` (
  `customer_name` varchar(30) NOT NULL,
  `customer_mail` varchar(30) NOT NULL,
  `customer_query` varchar(10000) NOT NULL,
  `timestamp_column` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_query`
--

INSERT INTO `user_query` (`customer_name`, `customer_mail`, `customer_query`, `timestamp_column`) VALUES
('Maddy', 'maddy@gmail.com', 'There are no products available.', '2024-01-18 23:33:11'),
('Akathiyan', 'akasthiyan@gmail.com', 'Unga kitta endha nalla PC yum illa.. edhavdhu add panunga!', '2024-01-19 06:04:21'),
('Chubby', 'chubby@gmail.com', 'I need Lenovo Gaming PC, Can you add it to the shop!', '2024-01-19 12:15:42'),
('Maddy', 'mad@gmail.com', 'Im checking for any query errors', '2024-01-19 12:32:21'),
('jai', 'j@gmail.com', 'We need more range of PC\r\n', '2024-01-20 05:04:28'),
('john josph', 'stop@gmail.com', 'hii..... your service is so very nice .......... ', '2024-01-23 04:06:22'),
('Something', 'something@gmail.com', 'sdafkadf', '2024-02-05 14:50:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `s_product`
--
ALTER TABLE `s_product`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `s_product`
--
ALTER TABLE `s_product`
  MODIFY `SID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
