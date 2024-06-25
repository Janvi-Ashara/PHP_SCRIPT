-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 05:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `element`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `Username`, `Password`) VALUES
(1, 'Maulika', '173'),
(2, 'Janvi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `name`, `price`, `image`, `quantity`) VALUES
(18, 'vaghanimaulika@gmail.com', '', 0, '', 1),
(86, '0', 'Fruit & Vegatable Basket', 2290, 'Screenshot_2022_0809_171621.jpg', 1),
(87, '0', 'Glass Roti Box', 2690, 'Screenshot_2022_0809_171506.jpg', 1),
(88, '0', 'Pooja Box', 4250, 'Screenshot_2022_0809_172730.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `number` varchar(25) NOT NULL,
  `message` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'maulika', 'vaghanimaulika@gmail.com', '2147483647', 'good privacy!!!'),
(2, 'itisha', 'itisha34@gmail.com', '2147483647', 'sweet');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `method` varchar(25) NOT NULL,
  `flat` varchar(25) NOT NULL,
  `street` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `pin_code` int(25) NOT NULL,
  `total_products` varchar(25) NOT NULL,
  `total_price` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'maulika', '2147483647', 'vaghanimaulika@gmail.com', 'cash on delivery', '11,shayam dham chowk', 'near temple', 'rajkot', 'gujarat', 'India', 360311, '0', 1200),
(2, 'vidhee', '2147483647', 'vidhee123@gmail.com', 'credit cart', '5', 'shanti nagar', 'rajkot', 'gujarat', 'India', 360311, '0', 1400),
(3, 'khushi', '2147483647', 'khushi1@gmail.com', 'cash on delivery', '14', '2', 'mumbai', 'maharashtra', 'india', 360001, '0', 3250),
(4, 'priya', '2147483647', 'priya12@gmail.com', 'credit cart', '12', '4', 'surat', 'gujarat', 'India', 360004, '0', 5050),
(5, 'khushi', '45013678', 'khushi1@gmail.com', 'cash on delivery', '14', '2', 'mumbai', 'maharashtra', 'India', 360001, '0', 890),
(6, 'jancy', '9802364133', 'jency23@gmail.com', 'cash on delivery', '11,veri lake', 'shree ram chowk', 'surat', 'gujarat', 'india', 360005, '0', 5760),
(7, 'vidhee', '9310245786', 'vidhee123@gmail.com', 'credit cart', '5', 'shanti nagar', 'rajkot', 'gujarat', 'India', 360311, 'Fruit & Vegatable Basket ', 9230);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `p_detail` varchar(100) NOT NULL,
  `p_cat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `p_detail`, `p_cat`) VALUES
(14, 'Water Dispenser', 3190, 'Screenshot_2022_0809_170323.jpg', 'Glass Water Dispenser', 'Kitchenware'),
(15, 'Marbal Mortar ', 2190, 'Screenshot_2022_0809_170748.jpg', 'Erebus Marbal Mortar & Pestle', 'Kitchenware'),
(16, 'Multi Platter', 2490, 'Screenshot_2022_0809_170846.jpg', 'Sous Chef Multi Utility Platter', 'Serveware'),
(17, 'Wire Basket', 1790, 'Screenshot_2022_0809_171003.jpg', 'Twine Wire Basket', 'Kitchenware'),
(18, 'Ceramic Dinner Plate', 890, 'Screenshot_2022_0809_171036.jpg', 'Ocean Hearts Ceramic Dinner Plate', 'Serveware'),
(19, 'Tea Bag Rest', 690, 'Screenshot_2022_0809_171119.jpg', 'Folia Ceramic Tea Bag Rest-Set of 3', 'Serveware'),
(20, 'Storage Jar', 1290, 'Screenshot_2022_0809_171159.jpg', 'Allora Glass Storage Jar', 'Kitchenware'),
(21, 'Utensil Holder', 990, 'Screenshot_2022_0809_171234.jpg', 'Blue Wood Utensil Holder', 'Tableware'),
(22, 'Serving Tray', 750, 'Screenshot_2022_0809_171318.jpg', 'Shade Of Grey Wooden Serving Tray', 'Serveware'),
(23, 'Tumbler', 990, 'Screenshot_2022_0809_171352.jpg', 'Quoise Glass Tumbler Set of 2(round)', 'Tableware'),
(24, 'Roti Box', 3290, 'Screenshot_2022_0809_171429.jpg', 'Blossam Wooden Roti Box', 'Serveware'),
(25, 'Coffee Mug', 990, 'Screenshot_2022_0809_171550.jpg', 'Moai Ceramic Coffee Mug Set of 2', 'Tableware'),
(26, 'Fruit & Vegatable Basket', 2290, 'Screenshot_2022_0809_171621.jpg', 'Twine Wire  Fruit & Vegatable Basket', 'Kitchenware'),
(27, 'Glass Storage Jar', 2190, 'Screenshot_2022_0809_171701.jpg', 'Apple & Pear Glass Storage Jar', 'Kitchenware'),
(28, 'Glass Roti Box', 2690, 'Screenshot_2022_0809_171506.jpg', 'Keya Glass Roti Box', 'Serveware'),
(29, 'Belan With Stand', 990, 'Screenshot_2022_0809_171735.jpg', 'In Teal Wooden Belan With Stand', 'Kitchenware'),
(31, 'Marbal Mortar & Pestle', 1890, 'Screenshot_2022_0809_172325.jpg', 'White Marbal Mortar & Pestle-Small', 'Kitchenware'),
(32, 'Ice Bucket', 4450, 'Screenshot_2022_0809_172409.jpg', 'Fryst Wooden Ice Bucket With Glass Insert', 'Kitchenware'),
(33, 'Glass Jug', 2290, 'Screenshot_2022_0809_172451.jpg', 'Dewy Glass Jug With Wooden Lid', 'Serveware'),
(34, 'Bread Box', 1990, 'Screenshot_2022_0809_172532.jpg', 'Twine Wire Bread Box', 'Tableware'),
(35, 'Chakla Belan', 2290, 'Screenshot_2022_0809_172645.jpg', 'White Marbal Chakla Belan With Stand', 'Kitchenware'),
(36, 'Glass Cloche', 1750, 'Screenshot_2022_0809_172228.jpg', 'Glass Cloche With Marbal Base Oval', 'Serveware'),
(37, 'Pooja Box', 4250, 'Screenshot_2022_0809_172730.jpg', 'Devaysa Pooja Box', 'Tableware'),
(38, 'Fry Pan', 4990, 'Screenshot_2022_0809_172757.jpg', 'Arra Brass Fry Pan With Wooden Handle', 'Kitchenware'),
(39, 'Ceramic Mug', 450, 'Screenshot_2022_0809_172847.jpg', 'Carbon Ceramic Mug', 'Tableware'),
(40, 'Table', 10400, 'Screenshot_2022_0809_172936.jpg', 'Soiree Side Table', 'Tableware'),
(41, 'Cake Set', 1350, 'Screenshot_2022_0809_173008.jpg', 'Aura Glod Cake Set of 2', 'Serveware'),
(42, 'Serving Platter', 890, 'Screenshot_2022_0809_173057.jpg', 'Umber Leaf Wooden Serving Platter', 'Serveware'),
(43, 'Ceramic Side Plate', 850, 'Screenshot_2022_0809_173156.jpg', 'Amber Love Ceramic Side Plate', 'Serveware'),
(44, 'Ceramic Dinner Plate', 1190, 'Screenshot_2022_0809_173230.jpg', 'Upper Crust Ceramic Dinner Plate', 'Serveware'),
(45, 'Glass Cloche', 2990, 'Screenshot_2022_0809_173313.jpg', 'Fluted Glass Cloche With Wooden Stand', 'Tableware'),
(46, 'Curd Setter', 890, 'Screenshot_2022_0809_173354.jpg', 'Knurl Terracotta Curd Setter (small)', 'Kitchenware'),
(47, 'Glass Tumbler', 890, 'Screenshot_2022_0809_173443.jpg', 'Quoise Glass Tumbler Set of 2', 'Tableware'),
(48, 'Brass Martini Glass', 2790, 'Screenshot_2022_0809_173514.jpg', 'Ornate Brass Martini Glass Set of 2', 'Tableware'),
(49, 'Glass Tumbler', 890, 'Screenshot_2022_0809_173845.jpg', 'Jove Blue Glass Tumbler Set of 2(small)', 'Tableware'),
(50, 'Wood Serving Bowl', 1690, 'Screenshot_2022_0809_173926.jpg', 'Midnight Mango Wood Serving Bowl', 'Kitchenware'),
(51, 'Glass Cloche', 2990, 'Screenshot_2022_0809_174003.jpg', 'Upper Crust Glass Cloche With Wooden Base', 'Tableware'),
(52, 'Container Jar', 890, 'Screenshot_2022_0809_174042.jpg', 'Tea Container Jar With Wooden Lid', 'Kitchenware'),
(53, 'Cutlery', 1390, 'Screenshot_2022_0809_174116.jpg', 'Enigma Rose Gold Cutlery Set of 4', 'Kitchenware'),
(54, 'Serving Ladle Spoon', 1350, 'Screenshot_2022_0809_174413.jpg', 'Enigma Gold Serving Ladle Spoon Set of 2', 'Kitchenware'),
(55, 'Glass Cloche', 990, 'Screenshot_2022_0809_174521.jpg', 'Dome Glass Cloche With Wooden Base-Small', 'Tableware'),
(56, 'Butcher Board', 2890, 'Screenshot_2022_0809_174610.jpg', 'Brawny Butcher Board', 'Kitchenware'),
(57, 'Cake Stand', 2290, 'Screenshot_2022_0809_174643.jpg', 'Carbon Ceramic & Wooden Cake Stand', 'Tableware'),
(58, 'Glass Tumbler', 1390, 'Screenshot_2022_0809_174721.jpg', 'Quoise Glass Tumbler Set of 2(tall)', 'Tableware'),
(59, 'Nut Bowl', 550, 'Screenshot_2022_0809_174759.jpg', 'Fryst Wooden Nut Bowl', 'Kitchenware'),
(60, 'Glass Jar', 690, 'Screenshot_2022_0809_174827.jpg', 'Clear Glass Jar With Metal', 'Tableware'),
(61, 'Napkin Set', 990, 'Screenshot_2022_0809_174906.jpg', 'Elevating Blue Napkin Set of 6', 'Tableware'),
(62, 'Ceramic Dinner Plate', 1190, 'Screenshot_2022_0809_174958.jpg', 'Amber Love Ceramic Dinner Plate', 'Serveware'),
(63, 'Cheeseboard', 1590, 'Screenshot_2022_0809_175040.jpg', 'Midnight Mango Wood Cheeseboard', 'Serveware'),
(64, 'Cake Stand', 4490, 'Screenshot_2022_0809_175123.jpg', 'Midnight Mango Wood Cake Stand', 'Tableware'),
(65, 'Serving Platter', 2090, 'Screenshot_2022_0809_175212.jpg', 'Brawny Oval Wooden Serving Platter', 'Serveware'),
(66, 'Salad Bowl', 3350, 'Screenshot_2022_0809_175300.jpg', 'Zest Wooden Salad Bowl', 'Serveware'),
(67, 'Serving Platter', 1590, 'Screenshot_2022_0809_175344.jpg', 'Oval Wooden Serving Platter(large)', 'Serveware'),
(68, 'Glass Tumbler', 1190, 'Screenshot_2022_0809_175436.jpg', 'Jove Blue Glass Tumbler Set of 2(tall)', 'Tableware'),
(69, 'Scopper ', 3190, 'Screenshot_2022_0809_175541.jpg', 'Teak Wood Scopper Large', 'Kitchenware'),
(70, 'Breakfast Set', 3190, 'Screenshot_2022_0809_175622.jpg', 'Geo Ceramic Breakfast Set', 'Serveware'),
(71, 'Pasta Bowl', 990, 'Screenshot_2022_0809_175732.jpg', 'Fiore Ceramic Pasta Bowl', 'Kitchenware'),
(72, 'Cotten Napkin Set', 750, 'Screenshot_2022_0809_175827.jpg', 'Mango Mojito Cotton Napkin Set of 6', 'Serveware'),
(73, 'Salad Serving Bowl', 3590, 'Screenshot_2022_0809_175905.jpg', 'Wood Iris Salad Serving Bowl', 'Serveware'),
(74, 'Fruit Fork', 1990, 'Screenshot_2022_0809_180008.jpg', 'Masai Brass Gold Fruit Fork', 'Kitchenware'),
(75, 'Serving Platter Tray', 2490, 'Screenshot_2022_0809_180105.jpg', 'Iris Serving Platter Tray', 'Serveware');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `cpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `email`, `password`, `cpassword`) VALUES
(1, 'maulika', 'vaghanimaulika@gmail.com', '173', '173'),
(2, 'khushi', 'khushi1@gmail.com', '123', '123'),
(5, 'vimal', 'vimal@gmail.com', '456', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
