-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 04:14 AM
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
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `store_catalogue` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL,
  `total_products` int(11) NOT NULL,
  `enterprise_visitors` int(11) NOT NULL,
  `enterprise_orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enterprises`
--

INSERT INTO `enterprises` (`enterprise_id`, `name`, `user_id`, `location`, `latitude`, `longitude`, `description`, `category`, `phone`, `image_url`, `store_catalogue`, `register_date`, `total_products`, `enterprise_visitors`, `enterprise_orders`) VALUES
(10, 'mukuru enterprisess', 1, '0.000000', -6.792354, 39.208328, 'papaa', 'electronics', '0717495198', 'store_1529154318.jpg', '', '2018-06-16 15:05:18', 0, 0, 33),
(11, 'Sokoine Engineering group', 1, '0.000000', -6.792354, 39.208328, 'mkawa', 'electronics', '0717495198', 'store_1529156941.jpg', '', '2018-06-16 15:49:01', 0, 0, 7),
(20, 'makamba construction agency', 2, '0.000000', -6.792354, 39.208328, 'makamba 1', 'electronics', '0717495198', 'store_1529786126.jpg', '', '2018-06-23 22:35:26', 0, 0, 0),
(21, 'makamba construction agency', 1, '0.000000', -6.792354, 39.208328, 'october selemani makamba', 'construction', '0717495198', 'store_1529930889.jpg', '', '2018-06-25 14:48:10', 0, 0, 0),
(24, 'makamba construction agency', 1, 'morogoro', -6.792354, 39.208328, 'mkawa', 'construction', '0717495198', 'store_1530005483.jpg', '', '2018-06-26 11:31:23', 0, 0, 0),
(25, 'makamba construction agency', 1, 'morogoro', -6.792354, 39.208328, 'mkawa', 'construction', '0717495198', 'store_1530005517.jpg', '', '2018-06-26 11:31:57', 0, 0, 0),
(26, 'Sokoine Engineering group', 1, 'manyara', -6.792354, 39.208328, 'kakaaaa', 'electronics', '0717495198', 'store_1530006344.jpg', '', '2018-06-26 11:45:44', 0, 0, 0),
(27, 'makamba construction agency', 1, 'kilimanjaro', -6.792354, 39.208328, 'mkawa', 'electronics', '0717495198', 'store_1530012352.jpg', '', '2018-06-26 13:25:52', 0, 0, 0),
(28, 'Sokoine Engineering group', 1, 'Dar es salaam', -6.792354, 39.208328, 'mkawa', 'electronics', '0717495198', 'store_1530012460.jpg', '', '2018-06-26 13:27:40', 0, 0, 0),
(29, 'Sokoine Engineering group', 1, 'morogoro', 0.000000, 0.000000, 'mkawa', 'electronics', '0717495198', 'store_1530101786.jpg', '', '2018-06-27 14:16:26', 0, 0, 0),
(32, 'mukuru enterprisess', 3, 'Dar es salaam', 0.000000, 0.000000, 'mkawa', 'electronics', '0714262024', 'store_1530184522.jpg', '', '2018-06-28 13:15:22', 0, 0, 0),
(33, 'mukuru enterprisess', 3, 'Dar es salaam', -6.792354, 39.208328, 'mkawa', 'electronics', '0714262024', 'store_1530184661.jpg', '', '2018-06-28 13:17:41', 0, 0, 0),
(38, 'mukuru enterprisess', 3, 'Dar es salaam', -6.792354, 39.208328, 'mkawa', 'electronics', '0714262024', 'store_1530185932.jpg', 'store_1530185932.jpg', '2018-06-28 13:38:52', 0, 0, 0),
(50, 'Sokoine Engineering group', 3, 'pemba north', -6.792354, 39.208328, 'mkawa', 'electronics', '0714262024', 'store_1530187996.PNG', '', '2018-06-28 14:13:16', 0, 0, 0),
(51, 'mukuru enterprisess', 3, 'Dar es salaam', -6.792354, 39.208328, 'mkawa', 'electronics', '0714262024', 'store_1530188061.PNG', '', '2018-06-28 14:14:21', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_administrators`
--

CREATE TABLE `ms_administrators` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `admin_logs` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_bookmarks`
--

CREATE TABLE `ms_bookmarks` (
  `bookmark_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `emterprise_id` int(11) NOT NULL,
  `date_bookmarked` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_direct_orders`
--

CREATE TABLE `ms_direct_orders` (
  `direct_order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for storing orders made direct to the specific product';

-- --------------------------------------------------------

--
-- Table structure for table `ms_enterprise_views`
--

CREATE TABLE `ms_enterprise_views` (
  `enterprise_view_id` int(11) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `enterprise_view_oocation` varchar(255) NOT NULL,
  `enterprise_view_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_enterprise_views`
--

INSERT INTO `ms_enterprise_views` (`enterprise_view_id`, `enterprise_id`, `enterprise_view_oocation`, `enterprise_view_address`) VALUES
(57, 10, '', '::1'),
(58, 21, '', '::1'),
(59, 24, '', '::1'),
(60, 20, '', '::1'),
(61, 11, '', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ms_messages`
--

CREATE TABLE `ms_messages` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_ordered_products`
--

CREATE TABLE `ms_ordered_products` (
  `orderedProduct_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `orderedProduct_name` varchar(255) NOT NULL,
  `orderedProduct_features` varchar(255) NOT NULL,
  `orderedProduct_quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for all orderd products to a particular enterprise';

-- --------------------------------------------------------

--
-- Table structure for table `ms_orders`
--

CREATE TABLE `ms_orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_location` varchar(255) NOT NULL,
  `order_document` varchar(255) NOT NULL,
  `expected_date` date NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='orders tables';

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
(3, 'cement ', 11, 0, 272, 'construction', 0, '2018-06-17 02:36:09', 2000, 'cement kwa bei nafuu sana', '0000-00-00 00:00:00', 'product_1529195769.jpg', '1'),
(4, 'main switch', 11, 0, 499, 'electronics', 12, '2018-06-17 02:48:29', 200000, 'main switch are avaialable at low cost and delivery is offered', '0000-00-00 00:00:00', 'product_1529196509.jpg', '1'),
(6, 'wiring pipes', 18, 0, 22, 'electronics', 0, '2018-06-18 10:20:50', 5200, 'wiring pipes for low price and free delivery for the huge order', '0000-00-00 00:00:00', 'product_1529310050.jpg', '1'),
(7, 'gypsum board', 17, 0, 200, 'construction', 0, '2018-06-18 10:22:26', 5000, 'gypsum board are also available of different colors', '0000-00-00 00:00:00', 'product_1529310146.jpg', '1'),
(8, 'main switch', 13, 0, 8, 'construction', 0, '2018-06-21 21:02:14', 1200, 'main switch of of types', '0000-00-00 00:00:00', 'product_1529607734.jpg', '1'),
(10, 'iron sheets', 11, 0, 4555, 'construction', 0, '2018-06-25 06:50:36', 4500, 'mkawa', '0000-00-00 00:00:00', 'product_1529902236.PNG', '1'),
(11, 'main switch', 10, 0, 111, 'construction', 0, '2018-06-25 08:20:53', 2000, 'mkawa', '0000-00-00 00:00:00', 'product_1529907653.PNG', '1'),
(12, 'nondo', 10, 0, 200, 'construction', 0, '2018-06-25 08:21:14', 5522, 'mukuru', '0000-00-00 00:00:00', 'product_1529907674.PNG', '1'),
(13, 'gypsum board', 10, 0, 4588, 'construction', 0, '2018-06-25 09:40:21', 12200, 'papaa mukuru', '0000-00-00 00:00:00', 'product_1529912421.PNG', '1'),
(15, 'gypsum board', 10, 0, 4, 'construction', 0, '2018-06-27 14:13:52', 2000, 'mkawa', '0000-00-00 00:00:00', 'product_1530101632.jpg', '1'),
(16, 'gypsum board', 21, 0, 339, 'hardware', 0, '2018-06-28 23:40:00', 45, '452', '0000-00-00 00:00:00', 'product_1530222000.jpg', '1'),
(17, 'gypsum board', 24, 0, 223, 'hardware', 0, '2018-06-29 01:51:24', 4222, 'MKAWA', '0000-00-00 00:00:00', 'product_1530229884.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ms_product_views`
--

CREATE TABLE `ms_product_views` (
  `product_view_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_user_address` varchar(255) NOT NULL,
  `product_latitude` float(10,6) NOT NULL,
  `product_longitude` float(10,6) NOT NULL,
  `product_view_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_product_views`
--

INSERT INTO `ms_product_views` (`product_view_id`, `product_id`, `product_user_address`, `product_latitude`, `product_longitude`, `product_view_location`) VALUES
(48, 4, '::1', 0.000000, 0.000000, ''),
(49, 3, '::1', 0.000000, 0.000000, ''),
(50, 12, '::1', 0.000000, 0.000000, ''),
(51, 10, '::1', 0.000000, 0.000000, ''),
(52, 11, '::1', 0.000000, 0.000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `ms_sales`
--

CREATE TABLE `ms_sales` (
  `sales_id` int(11) NOT NULL,
  `enterprise_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sales_date` datetime NOT NULL,
  `sales_status` int(11) NOT NULL,
  `sales_cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_shoppingcart`
--

CREATE TABLE `ms_shoppingcart` (
  `cart_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_shoppingcart`
--

INSERT INTO `ms_shoppingcart` (`cart_id`, `order_id`, `product_id`, `user_id`, `cart_quantity`) VALUES
(1, 141, 9, 0, 2),
(2, 141, 9, 0, 2),
(3, 144, 4, 0, 42),
(4, 144, 4, 0, 5),
(5, 144, 3, 0, 44),
(6, 144, 3, 0, 44),
(7, 144, 3, 0, 44),
(8, 144, 3, 0, 52),
(9, 144, 3, 0, 52),
(10, 144, 4, 0, 44),
(11, 144, 4, 0, 44),
(12, 144, 4, 0, 44),
(13, 144, 4, 0, 44),
(14, 147, 9, 0, 44),
(15, 147, 9, 0, 552),
(16, 147, 9, 0, 552),
(17, 147, 9, 0, 552),
(18, 147, 9, 0, 552),
(19, 147, 9, 0, 44),
(20, 147, 9, 0, 44),
(21, 147, 9, 0, 55),
(22, 147, 9, 0, 55),
(23, 147, 9, 0, 55),
(24, 147, 9, 0, 55),
(25, 147, 9, 0, 55),
(26, 147, 9, 0, 55),
(27, 147, 9, 0, 55),
(28, 147, 9, 0, 55),
(29, 147, 9, 0, 55),
(30, 147, 9, 0, 55),
(36, 144, 3, 0, 444),
(57, 144, 3, 1, 12),
(60, 146, 12, 1, 88),
(62, 145, 12, 1, 45),
(64, 148, 12, 1, 7),
(66, 149, 12, 1, 23),
(71, 142, 12, 1, 45),
(74, 158, 12, 1, 21),
(76, 202, 12, 1, 454),
(79, 204, 3, 1, 12),
(80, 204, 4, 1, 25),
(84, 207, 11, 1, 20),
(85, 207, 12, 1, 42),
(87, 207, 15, 1, 20),
(88, 217, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user-registration`
--

CREATE TABLE `user-registration` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
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

INSERT INTO `user-registration` (`user_id`, `full_name`, `username`, `email`, `phone`, `pass1`, `pass2`, `location`, `register-date`) VALUES
(1, 'dahabu', 'mkawa', 'dahabusaidi@gmail.com', '0717495198', 'a5f2528e34b3949610b2b3cde387c84c', 'a5f2528e34b3949610b2b3cde387c84c', 'pemba north', '2018-06-14 12:34:52'),
(2, 'papaa engineering company', 'mkawa', 'dahabusaidi99@gmail.com', '0717495198', 'a5f2528e34b3949610b2b3cde387c84c', 'a5f2528e34b3949610b2b3cde387c84c', 'kilimanjaro', '2018-06-23 22:31:14'),
(3, 'pius', 'shungu', 'shungupius@gmail.com', '0714262024', '23fa6de80f742fe38a40e4d4c46165f6', '23fa6de80f742fe38a40e4d4c46165f6', 'dsm', '2018-06-28 10:43:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enterprises`
--
ALTER TABLE `enterprises`
  ADD PRIMARY KEY (`enterprise_id`);

--
-- Indexes for table `ms_administrators`
--
ALTER TABLE `ms_administrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ms_bookmarks`
--
ALTER TABLE `ms_bookmarks`
  ADD PRIMARY KEY (`bookmark_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emterprise_id` (`emterprise_id`);

--
-- Indexes for table `ms_direct_orders`
--
ALTER TABLE `ms_direct_orders`
  ADD PRIMARY KEY (`direct_order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `enterprise_id` (`enterprise_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ms_enterprise_views`
--
ALTER TABLE `ms_enterprise_views`
  ADD PRIMARY KEY (`enterprise_view_id`),
  ADD KEY `enterprise_id` (`enterprise_id`);

--
-- Indexes for table `ms_messages`
--
ALTER TABLE `ms_messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `ms_ordered_products`
--
ALTER TABLE `ms_ordered_products`
  ADD PRIMARY KEY (`orderedProduct_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `ms_orders`
--
ALTER TABLE `ms_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `enterprise_id` (`enterprise_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `ms_products`
--
ALTER TABLE `ms_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `ms_product_views`
--
ALTER TABLE `ms_product_views`
  ADD PRIMARY KEY (`product_view_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `ms_sales`
--
ALTER TABLE `ms_sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `enterprise_id` (`enterprise_id`,`product_id`,`user_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ms_shoppingcart`
--
ALTER TABLE `ms_shoppingcart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `enterprise_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `ms_direct_orders`
--
ALTER TABLE `ms_direct_orders`
  MODIFY `direct_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ms_enterprise_views`
--
ALTER TABLE `ms_enterprise_views`
  MODIFY `enterprise_view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `ms_ordered_products`
--
ALTER TABLE `ms_ordered_products`
  MODIFY `orderedProduct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT for table `ms_orders`
--
ALTER TABLE `ms_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `ms_products`
--
ALTER TABLE `ms_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ms_product_views`
--
ALTER TABLE `ms_product_views`
  MODIFY `product_view_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `ms_shoppingcart`
--
ALTER TABLE `ms_shoppingcart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `user-registration`
--
ALTER TABLE `user-registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ms_bookmarks`
--
ALTER TABLE `ms_bookmarks`
  ADD CONSTRAINT `ms_bookmarks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user-registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_bookmarks_ibfk_2` FOREIGN KEY (`emterprise_id`) REFERENCES `enterprises` (`enterprise_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_direct_orders`
--
ALTER TABLE `ms_direct_orders`
  ADD CONSTRAINT `ms_direct_orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `ms_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_direct_orders_ibfk_2` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprises` (`enterprise_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_direct_orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user-registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_enterprise_views`
--
ALTER TABLE `ms_enterprise_views`
  ADD CONSTRAINT `ms_enterprise_views_ibfk_2` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprises` (`enterprise_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_messages`
--
ALTER TABLE `ms_messages`
  ADD CONSTRAINT `ms_messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user-registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `user-registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_ordered_products`
--
ALTER TABLE `ms_ordered_products`
  ADD CONSTRAINT `ms_ordered_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `ms_orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_product_views`
--
ALTER TABLE `ms_product_views`
  ADD CONSTRAINT `ms_product_views_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `ms_products` (`product_id`);

--
-- Constraints for table `ms_sales`
--
ALTER TABLE `ms_sales`
  ADD CONSTRAINT `ms_sales_ibfk_1` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprises` (`enterprise_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_sales_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `ms_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ms_sales_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user-registration` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
