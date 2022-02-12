-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 06:00 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Fruites'),
(2, 'Vegetable');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `total` double NOT NULL,
  `purchaseDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productid`, `userid`, `total`, `purchaseDate`) VALUES
(1, 1, 1, 2500, '2022-02-09 16:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `transactionid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `transactionid`, `amount`, `userid`) VALUES
(1, 45664565, 455, 2),
(2, 54654646, 1223, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `small_text` varchar(255) NOT NULL,
  `large_text` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `discount_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `small_text`, `large_text`, `cat_id`, `price`, `image`, `discount_price`) VALUES
(1, 'demo lilies', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 2, 450, 'product-1.jpg', 125),
(2, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-2.jpg', 0),
(3, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-3.jpg', 0),
(4, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-4.jpg', 0),
(5, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-5.jpg', 0),
(6, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-8.jpg', 0),
(7, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-6.jpg', 0),
(8, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-7.jpg', 0),
(9, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-1.jpg', 0),
(10, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-2.jpg', 0),
(11, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-3.jpg', 0),
(12, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-4.jpg', 0),
(13, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-5.jpg', 0),
(14, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-8.jpg', 0),
(15, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-6.jpg', 0),
(16, 'test', 'testing description testing description testing description testing description testing description testing description', 'testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting descriptiontesting description testing descriptiontesting descriptiontesting descriptiontesting description\r\n', 1, 250, 'product-7.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Customers');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `contact`, `address`, `role_id`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'male', 123456789, 'Test admin address', 1),
(2, 'sa', 'sam@gmail.com', 'sam', 'male', 7874360046, 'testing address1', 2),
(3, 'sameer', 'admin123@gmail.com', 'sam', 'male', 16544, '1234556', 2),
(7, 'sameer', 'samy@gmail.com', '1@3', 'male', 2646, 'sam', 2),
(8, 'sameer', 'sam@gmail.com', '12135', 'male', 154, 'test', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
