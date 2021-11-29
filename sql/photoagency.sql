-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 02:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `c_id` int(50) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `u_name`, `message`, `created_at`) VALUES
(14, 'naik', 'I am soo soo soo impressive with Vedant Digi for my wedding album. They went completely above and beyond in meeting my expectations....\r\nI would highly recommend VDA for your next album', '2021-09-20 18:27:40'),
(34, 'hritika.naik', 'Vedant Digi work is amazing! We loved our engagement and wedding pictures. They are professional and knows how to get the best shot. We could not have asked for a better experience for our pictures!', '2021-09-20 19:13:30'),
(35, 'hritika.naik', 'Quality of the albums are very good and at reasonable price', '2021-09-21 04:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `location`, `subject`, `message`, `created_at`, `status`) VALUES
(1, 'Harshda', 'harshda@gmail.com', '845697123', 'Navi Mumbai', 'Birthday Shoot & album.', 'I want to know about how much it will cost for album and shoot.', '2021-09-13 15:12:45', 'Read'),
(2, 'snehali', 'snehali@gmail.com', '2147483647', 'mumbai', 'For Phot book Album', 'I have some photos with me i want to make album, may i know how much it will cost?', '2021-09-20 18:18:37', 'Read'),
(3, 'shyam', 'shyam@gmail.com', '9874563258', 'Seawood, Navi Mumbai', 'Baby shower', 'I want photographer by baby shower photoshoot and make album too please reply as soon as possible.', '2021-09-07 07:48:43', 'Read'),
(4, 'Shyam', 'shyam@gmail.com', '4578659832', 'seawood', 'Pre wedding', 'Enquiry for Pre wedding.', '2021-09-20 18:21:33', 'Read'),
(5, 'hritika', 'hritika@gmail.com', '7548547854', 'Mumbai', 'For Wedding', ' Wedding', '2021-09-21 04:23:54', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(200) NOT NULL,
  `Package_type` varchar(200) NOT NULL,
  `Package_detail` longtext NOT NULL,
  `package_img` varchar(100) NOT NULL,
  `p_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `Package_type`, `Package_detail`, `package_img`, `p_created`) VALUES
(54, 'VDA-leather 01', 'Leather combo pad', 'Leather combo bag & pad\r\nFoiling print with acrylic \r\nSizes:\r\n12x36, 12x24, 12x30, 16x24, 15x24', 'images/f3067d687ee39c3cbfa75573457e479dcombo1.jpeg', '2021-09-13 17:54:45'),
(55, 'VDA-leather 02', 'Leather combo', 'Leather combo with emboss\r\nSizes:(in inches)\r\n1236, 12x24, 12x30, 15x24, 16x24', 'images/761efc843ff05ab74ed358713dd51c1bcombo2.jpeg', '2021-09-13 17:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_detail` longtext NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `pr_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_detail`, `product_img`, `pr_created`) VALUES
(2, 'Classic Albums', 'Classic album are printed on crystal archive paper that has glossy, matte and luster surfaces.\r\nAvailable Sizes (in Inches):\r\n10x14, 10x15, 12x15, 12x16, 12x18\r\nMatte finish paper reproduces precise photos in a non-reflective surface.\r\nIdeal for wedding, fashion, events and ceremonies with more economy in every print', 'images/90fd4f88f588ae64038134f1eeaa023fclassic.jpg', '2021-09-13 17:19:06'),
(3, 'Slim Albums', 'These feather weight albums are available in two thin paper surfaces Album Glossy and Album Lustre\r\nAvailable Sizes (in Inches):\r\n10x14, 10x15, 12x15, 12x16, 12x18\r\nSurfaces:\r\nGlossy\r\nLustre', 'images/4491777b1aa8b5b32c2e8666dbe1a495superia.jpg', '2021-09-13 17:17:26'),
(4, 'Premium Pearl Albums', 'A Like pearl these luxurious albums has unique silver pearl finishes that are highly glossy\r\nAvailable Sizes (in Inches):            10x14, 10x15, 12x15, 12x16, 12x18\r\nPearl papers have a thick base and high stiffness which keeps your album in shape through years.\r\nPremium quality pearl glossy silver paper are ideal for your elite weddings, fashion and class products display.', 'images/144a3f71a03ab7c4f46f9656608efdb2SuperiaPe.jpg', '2021-09-13 17:20:52'),
(5, 'Premium Natural Albums', 'These albums are elegant in nature, non UV treated in Silk, Velvet, Canvas and Leather surfaces.\r\nAvailable Sizes (in Inches):            10x14, 10x15, 12x15, 12x16, 12x18\r\nPrinted on four specialized paper surfaces.\r\nVelvet\r\nCanvas\r\nSilk', 'images/ddac1f6f13bb372a177804adcd3b8a31superiajumbo.jpg', '2021-09-13 17:26:02'),
(6, 'Table Top Calendar', 'A unique calendar for your wall. Calendar to keep your special memories at a Glance.\r\nCan be used at home or office \r\nThe perfect option for New Year Gifting\r\nPocket-Friendly Rate \r\nNumber of Leaf(s): 12 \r\n1 month on one page\r\nBinding: Spiral Wiro \r\nPremium Quality Paper\r\nSizes:\r\n4 X 6 Inches\r\n6 X 8 Inches\r\n4 X 10 Inches', 'images/46e0eae7d5217c79c3ef6b4c212b8c6fTableTop.jpg', '2021-09-13 17:29:07'),
(8, 'Wall Calendar', 'A unique calendar for your wall. Calendar to keep your special memories at a Glance.\r\nCan be used at home or office \r\nThe perfect option for New Year Gifting\r\nPocket-Friendly Rate \r\nNumber of Leaf(s): 12 \r\n1 month on one page\r\nBinding: Spiral Wiro \r\nPremium Quality Paper\r\n', 'images/328e5d4c166bb340b314d457a208dc83WallCalender (1).jpg', '2021-09-13 17:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'hritika naik', 'hritika.naik', 'naikharshda03@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Harshda', 'Harshdanaik', 'harshda@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'trupti', 'naik', 'trupti@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
