-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 04:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, 'Basic Chocolate Cake', 'choc1', 'yes', 'yes'),
(5, 'Basic vanilla cake', '', 'yes', 'yes'),
(11, 'Cupcake', 'cupcake', 'yes', 'yes'),
(13, 'Cheesecake', 'cheese', 'yes', 'yes'),
(14, 'Customized Cake', 'cust1', 'yes', 'yes'),
(15, 'Brownies', 'brownie', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(255) NOT NULL,
  `namee` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `namee`, `email`, `msg`) VALUES
(1, 'muna', 'muna@gmail.com', 'aaaaaa'),
(2, 'tasnia', 'tasnim.kabir111@gmai.com', 'adasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(50) NOT NULL,
  `featured` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(9, 'Vanilla cake', '', '500.00', 'Food-Name-7251.jpg', 5, 'No', 'Yes'),
(10, 'Vanilla sponge', '', '500.00', 'Food-Name-2849.jpg', 5, 'No', 'Yes'),
(11, 'Fudgy brownie', '', '80.00', 'Food-Name-9227.jpg', 15, 'No', 'Yes'),
(12, 'Red Velvet cake', '', '600.00', 'Food-Name-7045.jpg', 14, 'No', 'Yes'),
(13, 'Special Occasional Cake', '', '900.00', 'Food-Name-7088.jpg', 14, 'No', 'Yes'),
(15, 'Mango chseesecake', '', '900.00', 'Food-Name-1529.jpg', 1, 'No', 'Yes'),
(16, 'Cupcake', '', '100.00', 'Food-Name-4482.jpg', 11, 'No', 'Yes'),
(17, 'Chocolate cake', '', '500.00', 'Food-Name-1894.jpg', 1, 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `food` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `total` varchar(500) NOT NULL,
  `order_date` datetime NOT NULL,
  `statuss` varchar(500) NOT NULL,
  `customer_name` varchar(500) NOT NULL,
  `customer_contact` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `addresss` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `statuss`, `customer_name`, `customer_contact`, `email`, `addresss`) VALUES
(1, '500', '500', '1.00', '', '0000-00-00 00:00:00', '', 'gbvgyvgy', '09887665453', 'muna@gmail.com', 'dfghj'),
(2, '', '500', '3.00', '', '0000-00-00 00:00:00', '', 'gvguvy', '09887665453', 'muna@gmail.com', 'ftfct'),
(3, '', '500', '1.00', '', '0000-00-00 00:00:00', '', 'Munia', '0192928384', 'sakinsatti@gmail.com', 'Dhaka'),
(4, '', '500', '1.00', '', '0000-00-00 00:00:00', '', 'Munia', '0192928384', 'sakinsatti@gmail.com', 'Dhaka'),
(5, '', '100', '3.00', '', '0000-00-00 00:00:00', '', 'lplpopo', '0192928384', 'muna13448@gmail.com', 'ggukyguy'),
(6, '', '80', '6.00', '', '0000-00-00 00:00:00', '', 'vygvgy', '0192928384', 'muna13448@gmail.com', ' m'),
(7, '', '80', '6.00', '', '0000-00-00 00:00:00', '', 'vygvgy', '0192928384', 'muna13448@gmail.com', ' m'),
(8, '', '80', '6.00', '', '0000-00-00 00:00:00', '', 'vygvgy', '0192928384', 'muna13448@gmail.com', ' m'),
(9, '', '80', '6.00', '', '0000-00-00 00:00:00', '', 'vygvgy', '0192928384', 'muna13448@gmail.com', ' m'),
(10, '100', '100', '6.00', '', '0000-00-00 00:00:00', '', 'oooooooooo', '00000000000000', 'sakinsatti@gmail.com', 'mjknj'),
(11, '100', '100', '6.00', '', '0000-00-00 00:00:00', '', 'oooooooooo', '00000000000000', 'sakinsatti@gmail.com', 'mjknj'),
(12, '', '900', '6.00', '5400', '0000-00-00 00:00:00', '', 'alom', '01938345', 'ljjhkuiyguy7ytfd@gmail.com', 'njnjj'),
(13, '', '900', '6.00', '5400', '0000-00-00 00:00:00', '', 'alom', '01938345', 'ljjhkuiyguy7ytfd@gmail.com', 'njnjj'),
(14, '', '900', '6.00', '5400', '0000-00-00 00:00:00', '', 'alom', '01938345', 'ljjhkuiyguy7ytfd@gmail.com', 'njnjj'),
(15, '', '500', '2.00', '1000', '0000-00-00 00:00:00', '', 'Lamia', '0181123456646', '43242@gmail.com', 'cumilla'),
(16, '', '100', '5.00', '500', '0000-00-00 00:00:00', '', 'Fahima', '01918384758', 'fahi@gmail.com', 'dhaka'),
(17, '', '100', '5.00', '500', '0000-00-00 00:00:00', '', 'Fahima', '01918384758', 'fahi@gmail.com', 'dhaka'),
(18, '', '100', '5.00', '500', '0000-00-00 00:00:00', '', 'Fahima', '01918384758', 'fahi@gmail.com', 'dhaka'),
(19, '', '100', '5.00', '500', '0000-00-00 00:00:00', '', 'Fahima', '01918384758', 'fahi@gmail.com', 'dhaka'),
(20, '', '500', '4.00', '2000', '0000-00-00 00:00:00', '', 'Hamida khatun', '0182837665', 'knfhuahd@ka.com', 'Khulna'),
(21, '', '500', '1.00', '500', '0000-00-00 00:00:00', '', 'wdwd', 'dwwd', 'tasnim.kabir111@gmail.com', 'wdw'),
(22, '', '500', '1.00', '500', '0000-00-00 00:00:00', '', 'wdwd', 'dwwd', 'tasnim.kabir111@gmail.com', 'wdw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
