-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 12:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `imagepath` varchar(100) NOT NULL,
  `paragraph` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`imagepath`, `paragraph`, `status`, `created_date`, `updated_date`) VALUES
('assets/oh yeah.jpg', 'CARHUB is a premium luxury car importer that aims to serve those who truly appreciate luxury automobiles. We primarily import high end cars of the highest grades. Working closely with some of the biggest Automobile manufacturers of the world, we offer the best selection and also the most extensive customization options. We also have the necessary software, training and technical know-how to provide full service support for all European manufacturers. This makes Continental Motors the only luxury high end automobile importer in Bangladesh that provides full warranty on all vehicles imported with complete technical capacity.\r\n		We primarily import high end cars of the highest grades. Currently our organization proudly holds around 60 percent of the European car market share in Bangladesh. Working closely with some of the biggest names among the automobile manufacturers in the world, we offer the best selection and also the most extensive customization options. We also have the necessary software, training and technical know-how to provide full service support for all European manufacturers through our workshop. This makes Continental Motors the only luxury high end automobile importer in Bangladesh that provides full warranty on all vehicles imported with complete technical capacity. For the people who would not settle for anything less than perfection, Continental Motors is the place to be.', 1, '2021-03-28 23:29:22', '2021-03-28 23:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`admin_id`, `username`, `email`, `password`, `status`, `created_date`, `updated_date`) VALUES
(4, 'Nipun Paul', 'nipun4337@gmail.com', '444bcb3a3fcf8389296c49467f27e1d6', 1, '2021-03-22 13:42:00', '2021-03-22 19:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Mercedes-Benz', 1, '2021-03-29 19:38:10', '2021-03-30 10:56:06'),
(2, 'Audi', 1, '2021-03-29 19:47:13', '2021-03-29 19:47:13'),
(3, 'BMW', 1, '2021-03-29 22:57:08', '2021-03-29 22:57:08'),
(4, 'Porsche', 1, '2021-03-30 10:55:27', '2021-03-30 10:55:27'),
(5, 'Jaguar', 1, '2021-03-30 10:55:39', '2021-03-30 10:55:39'),
(6, 'Volkswagen', 1, '2021-03-30 10:55:53', '2021-03-30 10:55:53'),
(7, 'Volvo', 1, '2021-03-30 10:56:20', '2021-03-30 10:56:20'),
(8, 'Tesla', 1, '2021-03-30 10:56:34', '2021-03-30 10:56:34'),
(9, 'Rolls Royce', 1, '2021-03-30 10:56:50', '2021-03-30 10:56:50'),
(10, 'Alfa Romeo', 1, '2021-03-30 10:57:02', '2021-03-30 10:57:02'),
(11, 'Range Rover', 1, '2021-03-30 11:34:21', '2021-03-30 11:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_brand_id` int(30) NOT NULL,
  `car_model` varchar(255) NOT NULL,
  `car_image` varchar(255) DEFAULT NULL,
  `car_seats` int(11) NOT NULL,
  `car_mileage` int(11) DEFAULT NULL,
  `fuel_type` varchar(30) DEFAULT NULL,
  `gearbox` varchar(50) DEFAULT NULL,
  `bodystyle` varchar(50) DEFAULT NULL,
  `car_build` date NOT NULL,
  `car_cost` int(11) NOT NULL,
  `car_color` varchar(30) NOT NULL,
  `car_details` text NOT NULL,
  `car_doors` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_brand_id`, `car_model`, `car_image`, `car_seats`, `car_mileage`, `fuel_type`, `gearbox`, `bodystyle`, `car_build`, `car_cost`, `car_color`, `car_details`, `car_doors`, `status`, `created_date`, `update_date`) VALUES
(15, 'Mercedes Benz GLS 450 AMG 4MATIC', 1, 'GLS', 'images/cars/car_pic_Mercedes Benz GLS 450 AMG 4MATIC.jpg', 7, NULL, NULL, NULL, NULL, '2021-01-01', 3000000, 'Blue', 'With an enticingly high-quality design, the new GLS commands its surroundings just by being there.   The journey gets more enjoyable, more effortless & safer with the new Mercedes Benz GLS 202.', NULL, 0, '2021-03-30 11:32:44', '2021-03-30 11:32:44'),
(16, 'Range Rover 2020', 11, 'Range Rover Vogue', 'images/cars/car_pic_Range Rover 2020.jpg', 5, NULL, NULL, NULL, NULL, '2020-01-01', 2500000, 'Santorini Black', 'Crafted for the sophisticated minds, this all new Range Rover is a visual treat to the eyes.  Delivering the best performance, this prestigious SUV features a striking design & ultimate comfort. The Soothing Ambient Lightings, Head-up Display & Meridian™ Signature Sound System enable passengers to travel in a relaxed style.', NULL, 1, '2021-03-30 11:36:15', '2021-03-30 11:43:51'),
(17, 'Audi A5 2019', 2, 'A5', 'images/cars/car_pic_Audi A5 2019.jpg', 5, NULL, NULL, NULL, NULL, '2019-01-01', 20000000, 'Black Metallic', 'Available on pre-order. Please call for more details', NULL, 1, '2021-03-30 11:42:52', '2021-03-30 11:42:52'),
(18, 'Audi Q7 2019', 2, 'Q7', 'images/cars/car_pic_Audi Q7 2019.jpg', 5, NULL, NULL, NULL, NULL, '2019-01-01', 20000000, 'Red', 'Available on pre-order. Please call for more details. ', NULL, 1, '2021-03-30 11:46:47', '2021-03-30 11:46:47'),
(19, 'BMW 745LE', 3, '745Le', 'images/cars/car_pic_BMW 745LE.jpg', 4, NULL, NULL, NULL, NULL, '2020-01-01', 30000000, 'Mineral White', 'Embrace true freedom with the powerful driving dynamics of the New BMW 745LE. With its confident presence, this elite, high performance sedan is a new echelon of driving pleasure.', NULL, 1, '2021-03-30 11:49:03', '2021-03-30 11:49:03'),
(20, 'Porsche 718 Boxster 2018', 4, '718 Boxster', 'images/cars/car_pic_Porsche 718 Boxster 2018.jpg', 2, NULL, NULL, NULL, NULL, '2018-01-01', 30000000, 'White Metallic', 'The 2018 Porsche 718 Boxster in our collection of spellbinding exotic cars. It interprets the essence of legendary 718 models in the past by embracing the concept of freedom characteristic of a pure-bred roadster, while being uncompromising of performance with a 300 Horsepower Turbocharged flat four-cylinder engine like its Coupe twin. The stability-control system would allow you to take on every sharp corner without losing grip. The Sports steering wheel with its purist design, the ascending center console, and the three round instruments with the rev counter positioned in the center.', NULL, 1, '2021-03-30 11:55:07', '2021-03-30 12:23:23'),
(21, 'Volkswagen Touareg 2019', 6, 'Touareg', 'images/cars/car_pic_Volkswagen Touareg 2019.jpg', 7, NULL, NULL, NULL, NULL, '2019-01-01', 30000000, 'Night Blue Metallic', 'Available on pre-order. Please call for details. ', NULL, 1, '2021-03-30 11:57:49', '2021-03-30 11:57:49'),
(22, 'Volvo XC90 2019', 7, 'XC90', 'images/cars/car_pic_Volvo XC90 2019.jpg', 7, NULL, NULL, NULL, NULL, '2019-01-01', 30000000, 'Polar White', 'Available for pre-order. please contact for more details. ', NULL, 1, '2021-03-30 11:59:49', '2021-03-30 11:59:49'),
(23, 'Tesla Model X', 8, 'Model X', 'images/cars/car_pic_Tesla Model X.jpg', 7, NULL, NULL, NULL, NULL, '2019-01-01', 40000000, 'Blue Metallic', 'Available for pre-order. Please call for more details. ', NULL, 0, '2021-03-30 12:18:13', '2021-03-30 14:15:24'),
(24, 'Range Rover Evoque Hybrid 2019', 11, 'Range Rover Evoque Hybrid', 'images/cars/car_pic_Range Rover Evoque Hybrid 2019.jpg', 5, NULL, NULL, NULL, NULL, '2019-01-01', 50000000, 'Indus Silver', 'Available for pre-order. Please call for more details. ', NULL, 0, '2021-03-30 12:25:41', '2021-03-30 12:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(6, 'Nipun Paul', 'nipun4337@gmail.com', '01778546619', 'OK', '2021-03-30 14:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `slider1`
--

CREATE TABLE `slider1` (
  `slider_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `header` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider1`
--

INSERT INTO `slider1` (`slider_id`, `image`, `header`, `paragraph`, `status`, `created_date`, `updated_date`) VALUES
(1, 'range-rover-evoque-1.jpg', 'Winter Collection 2020', 'Lorem ipsum dummy text goes here.', 1, '2021-03-21 15:15:01', '2021-03-21 15:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `aust_id` varchar(30) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `aust_id`, `image_path`, `status`, `created_date`, `updated_date`) VALUES
(1, 'Ishmam Faruki', '180104026', 'images/team/team_pic_Ishmam Faruki.jpg', 1, '2021-03-21 21:47:53', '2021-03-23 18:08:42'),
(2, 'Nipun Paul', '180104042', 'images/team/pun.JPG', 1, '2021-03-21 21:47:53', '2021-03-21 21:47:53'),
(3, 'Mutakabbirul Islam Pranto', '180104044', 'images/team/muta.JPG', 1, '2021-03-21 21:47:53', '2021-03-30 14:12:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`customer_id`, `name`, `email`, `phone`, `address`, `password`, `image`, `status`, `created_date`, `updated_date`) VALUES
(2, 'Nipun Paul', 'nipun4338@gmail.com', '01778546619', 'Chaity 3, Upazilla Quarter, Joynagar', '24196d49c382e6865be28708e83ff829', 'images/users/user_pic_nipun4338@gmail.com.png', 1, '2021-03-21 20:46:43', '2021-03-28 21:41:33'),
(6, 'Nipun Paul', 'nipun4337@gmail.com', '01778546619', 'Chaity 3, Upazilla Quarter, Joynagar', '81dc9bdb52d04dc20036dbd8313ed055', 'images/users/default-image.jpg', 1, '2021-03-28 14:07:36', '2021-03-28 21:49:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpanel`
--
ALTER TABLE `adminpanel`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider1`
--
ALTER TABLE `slider1`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
