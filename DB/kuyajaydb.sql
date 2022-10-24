-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 01:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuyajaydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `prod_id` bigint(20) NOT NULL,
  `prod_name` varchar(30) NOT NULL,
  `prod_description` varchar(150) NOT NULL,
  `prod_price` double NOT NULL,
  `prod_date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`prod_id`, `prod_name`, `prod_description`, `prod_price`, `prod_date_created`) VALUES
(1, 'tapsilog', 'Beef tapa with eg and fried rice', 75, '2022-09-22 12:01:05'),
(2, 'Longsilog', 'Longa with egg and fried rice', 70, '2022-09-22 12:01:05'),
(3, 'Porksilog', 'Fried Porkchop with egg with fried rice', 65, '2022-09-22 12:02:13'),
(4, 'LongSilog', 'Longanisa with egg and fried rice', 55, '2022-10-02 15:09:51'),
(5, 'siomai silog', 'siomai with egg and fried rice', 30, '2022-10-02 15:09:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `prod_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
