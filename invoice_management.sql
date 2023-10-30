-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 06:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_data`
--

CREATE TABLE `customer_data` (
  `customer_id` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `contact` int(11) NOT NULL,
  `shop_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_data`
--

INSERT INTO `customer_data` (`customer_id`, `name`, `contact`, `shop_id`) VALUES
('cu001', 'ravi', 789945615, 'sh001'),
('cu002', 'deepak', 88885615, 'sh002'),
('cu003', 'aarav', 999999615, 'sh003');

-- --------------------------------------------------------

--
-- Table structure for table `receipt_table`
--

CREATE TABLE `receipt_table` (
  `Bill_no` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `shop_id` varchar(255) NOT NULL,
  `billing_date` date NOT NULL,
  `from_date` date NOT NULL,
  `end_date` date NOT NULL,
  `Sac_code` varchar(50) NOT NULL,
  `rent_amount` double NOT NULL,
  `gst_amount` double NOT NULL,
  `total_amount` double NOT NULL,
  `paid_amount` double NOT NULL,
  `payment_mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_data`
--

CREATE TABLE `shop_data` (
  `shop_id` varchar(255) NOT NULL,
  `shop_address` text NOT NULL,
  `shop_rent` float NOT NULL,
  `shop_status` text NOT NULL,
  `tenant` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shop_data`
--

INSERT INTO `shop_data` (`shop_id`, `shop_address`, `shop_rent`, `shop_status`, `tenant`) VALUES
('sh001', 'rishikesh', 3000, 'rent', 'suraj'),
('sh002', 'rishikesh', 12000, 'rented', 'ravi'),
('sh003', 'delhi', 5000, 'rented', 'deepak'),
('sh004', 'dehradun', 9000, 'rented', 'kapil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_data`
--
ALTER TABLE `customer_data`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `receipt_table`
--
ALTER TABLE `receipt_table`
  ADD PRIMARY KEY (`Bill_no`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `shop_data`
--
ALTER TABLE `shop_data`
  ADD PRIMARY KEY (`shop_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_data`
--
ALTER TABLE `customer_data`
  ADD CONSTRAINT `customer_data_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop_data` (`shop_id`);

--
-- Constraints for table `receipt_table`
--
ALTER TABLE `receipt_table`
  ADD CONSTRAINT `receipt_table_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop_data` (`shop_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
