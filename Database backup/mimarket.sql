-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 04:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mimarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `enterprises`
--

CREATE TABLE `enterprises` (
  `enterprise_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL,
  `total_products` int(11) NOT NULL,
  `enterprise_visitors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enterprises`
--

INSERT INTO `enterprises` (`enterprise_id`, `name`, `user_id`, `location`, `description`, `category`, `phone`, `image_url`, `register_date`, `total_products`, `enterprise_visitors`) VALUES
(5, 'mukuru enterprisess2', 1, 'Dar es salaam', 'mkawa another store', 'electronics', '0717495198', 'https://www.jetbrains.com/', '2018-06-14 18:52:44', 0, 0),
(6, 'Sokoine Engineering group', 1, 'Dar es salaam', 'mkawa another store', 'electronics', '0717495198', 'https://www.jetbrains.com/', '2018-06-14 18:57:10', 0, 0),
(7, 'papaa engineering company', 1, 'Dar es salaam', 'mkawa', 'electronics', '0717495198', 'https://www.jetbrains.com/', '2018-06-14 18:58:48', 0, 0),
(8, 'mukuru enterprisess', 1, 'pemba north', 'mkawa', 'electronics', '0717495198', 'cement2.jpg', '2018-06-16 14:12:43', 0, 0),
(9, 'makamba construction agency', 1, 'pwani', 'bagamoyo main comapany for selling and cements sheets and other costruction materials', 'electronics', '0717495198', 'store_1529153588.jpg', '2018-06-16 14:53:08', 0, 0),
(10, 'mukuru enterprisess', 1, 'Dar es salaam', 'papaa', 'electronics', '0717495198', 'store_1529154318.jpg', '2018-06-16 15:05:18', 0, 0),
(11, 'Sokoine Engineering group', 1, 'Dar es salaam', 'mkawa', 'electronics', '0717495198', 'store_1529156941.jpg', '2018-06-16 15:49:01', 0, 0),
(12, 'mukuru enterprisess', 1, 'Dar es salaam', 'mkawa', 'electronics', '0717495198', 'store_1529157149.jpg', '2018-06-16 15:52:29', 0, 0),
(13, 'Sokoine Engineering group', 1, 'Dar es salaam', 'mkawwa', 'electronics', '0717495198', 'store_1529158134.jpg', '2018-06-16 16:08:54', 0, 0),
(14, 'makamba construction agency', 1, 'Dar es salaam', 'mkawa', 'electronics', '0717495198', 'store_1529158180.jpg', '2018-06-16 16:09:40', 0, 0),
(15, 'makamba construction agency', 1, 'Dar es salaam', 'mkawa', 'electronics', '0717495198', 'store_1529158230.jpg', '2018-06-16 16:10:30', 0, 0),
(16, 'makamba construction agency', 1, 'Dar es salaam', 'mkawa', 'electronics', '0717495198', 'store_1529158248.jpg', '2018-06-16 16:10:48', 0, 0),
(17, 'mukuru enterprisess2', 1, 'mwanza', 'papa', 'electronics', '0717495198', 'store_1529158363.jpg', '2018-06-16 16:12:43', 0, 0),
(18, 'mgosi enterprises  enterprisess', 1, 'kilimanjaro', 'ali mgosi kwa ajili ya matofali imra kabisa', 'electronics', '0717495198', 'store_1529158572.jpg', '2018-06-16 16:16:12', 0, 0),
(19, 'mukuru enterprisess', 1, 'Dar es salaam', 'papaa', 'electronics', '0717495198', 'store_1529158760.jpg', '2018-06-16 16:19:20', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_products`
--

CREATE TABLE `ms_products` (
  `product_id` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `ProductOrders` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `product_views` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `product_price` float NOT NULL,
  `product_details` text NOT NULL,
  `date_modified` datetime NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_products`
--

INSERT INTO `ms_products` (`product_id`, `ProductName`, `enterprise_id`, `ProductOrders`, `quantity`, `category`, `product_views`, `date_added`, `product_price`, `product_details`, `date_modified`, `product_image`, `product_status`) VALUES
(2, 'nondo', 10, 0, 11, 'construction', 0, '2018-06-17 02:29:41', 600, 'nondo kwa bei nafuu', '0000-00-00 00:00:00', 'product_1529195381.jpg', '1'),
(3, 'cement ', 11, 0, 100, 'construction', 0, '2018-06-17 02:36:09', 2000, 'cement kwa bei nafuu sana', '0000-00-00 00:00:00', 'product_1529195769.jpg', '1'),
(4, 'main switch', 11, 0, 120, 'electronics', 0, '2018-06-17 02:48:29', 200000, 'main switch are avaialable at low cost and delivery is offered', '0000-00-00 00:00:00', 'product_1529196509.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user-registration`
--

CREATE TABLE `user-registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pass1` varchar(255) NOT NULL,
  `pass2` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `register-date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for all registered users';

--
-- Dumping data for table `user-registration`
--

INSERT INTO `user-registration` (`user_id`, `name`, `username`, `email`, `phone`, `pass1`, `pass2`, `location`, `register-date`) VALUES
(1, 'dahabu', 'mkawa', 'dahabusaidi@gmail.com', '0717495198', 'a5f2528e34b3949610b2b3cde387c84c', 'a5f2528e34b3949610b2b3cde387c84c', 'pemba north', '2018-06-14 12:34:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`enterprise_id`);

--
-- Indexes for table `ms_products`
--
ALTER TABLE `ms_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user-registration`
--
ALTER TABLE `user-registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enterprises`
--
ALTER TABLE `enterprises`
  MODIFY `enterprise_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `ms_products`
--
ALTER TABLE `ms_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user-registration`
--
ALTER TABLE `user-registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
