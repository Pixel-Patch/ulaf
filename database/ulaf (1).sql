-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 06:40 PM
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
-- Database: `ulaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_timeline`
--

CREATE TABLE `activity_timeline` (
  `Activity_ID` varchar(11) NOT NULL,
  `Activity_Type` varchar(50) DEFAULT NULL,
  `Record_Type` varchar(50) DEFAULT NULL,
  `Record_ID` varchar(11) DEFAULT NULL,
  `Actor_ID` varchar(11) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Category_ID` varchar(11) NOT NULL,
  `Category_Name` varchar(100) DEFAULT NULL,
  `Category_Image` varchar(255) DEFAULT NULL,
  `Category_Detail` varchar(255) DEFAULT NULL,
  `Creation_Date` datetime DEFAULT NULL,
  `Last_Update_Date` datetime DEFAULT NULL,
  `User_ID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category_ID`, `Category_Name`, `Category_Image`, `Category_Detail`, `Creation_Date`, `Last_Update_Date`, `User_ID`) VALUES
('1', 'Electronics', 'image1.jpg', 'Electronic devices such as laptops, phones, and chargers.', '2023-04-01 12:00:00', NULL, '14-2256'),
('10', 'Musical Instruments', 'image10.jpg', 'Musical instruments such as guitars, flutes, and drums.', '2023-04-19 12:00:00', '2023-04-19 12:00:00', '15-2261'),
('11', 'Toys', 'image11.jpg', 'Toys and games.', '2023-04-21 12:00:00', '2023-04-21 12:00:00', '15-2261'),
('12', 'Documents', 'image12.jpg', 'Documents such as passports, ID cards, and certificates.', '2023-04-23 12:00:00', '2023-04-23 12:00:00', '15-2261'),
('13', 'Cameras', 'image13.jpg', 'Cameras and camera equipment.', '2023-04-25 12:00:00', '2023-04-25 12:00:00', '15-2261'),
('14', 'Wallets', 'image14.jpg', 'Wallets and purses.', '2023-04-27 12:00:00', '2023-04-27 12:00:00', '15-2261'),
('15', 'Headphones', 'image15.jpg', 'Headphones and earbuds.', '2023-04-29 12:00:00', '2023-04-29 12:00:00', '15-2261'),
('16', 'School Supplies', 'image16.jpg', 'School supplies such as pens, pencils, and calculators.', '2023-04-30 12:00:00', '2023-04-30 12:00:00', '15-2261'),
('17', 'Miscellaneous', 'image17.jpg', 'Items that don\'t fit into any other category.', '2023-04-08 12:00:00', '2023-04-08 12:00:00', '15-2261'),
('2', 'Clothing', 'image2.jpg', 'Clothing items such as jackets, hats, and gloves.', '2023-04-03 12:00:00', NULL, '14-2256'),
('3', 'Books', 'image3.jpg', 'Books, notebooks, and other academic materials.', '2023-04-05 12:00:00', NULL, '14-2256'),
('4', 'Keys', 'image4.jpg', 'Keys, ID cards, and access cards.', '2023-04-07 12:00:00', NULL, '14-2256'),
('5', 'Bags', 'image5.jpg', 'Bags, backpacks, and purses.', '2023-04-09 12:00:00', NULL, '14-2256'),
('6', 'Water Bottles', 'image6.jpg', 'Water bottles and thermoses.', '2023-04-11 12:00:00', '2023-04-11 12:00:00', '15-2261'),
('7', 'Glasses', 'image7.jpg', 'Glasses and sunglasses.', '2023-04-13 12:00:00', '2023-04-13 12:00:00', '15-2261'),
('8', 'Umbrellas', 'image8.jpg', 'Umbrellas and rain gear.', '2023-04-15 12:00:00', '2023-04-15 12:00:00', '15-2261'),
('9', 'Sports Equipment', 'image9.jpg', 'Sports equipment such as balls, helmets, and pads.', '2023-04-17 12:00:00', '2023-04-17 12:00:00', '15-2261');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `claim_id` varchar(11) DEFAULT NULL,
  `sender_id` varchar(11) DEFAULT NULL,
  `receiver_id` varchar(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `message_image` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `claim_id`, `sender_id`, `receiver_id`, `message`, `message_image`, `timestamp`) VALUES
(2, '13', '24-0000', '24-0000', 'test', '', '2024-07-12 23:07:42'),
(3, '13', '24-0000', '24-0000', '', '13 - 2024-07-13_07-08-14 PHT -1.jpg', '2024-07-12 23:08:14'),
(4, '13', '24-009', '24-0000', '', '', '2024-07-12 23:17:04'),
(5, '13', '24-009', '24-0000', 'test', '', '2024-07-12 23:17:37'),
(6, '13', '24-009', '24-0000', 'test', '13 - 2024-07-13_07-17-46 PHT -2.jpg', '2024-07-12 23:17:46'),
(7, '13', '24-0000', '24-0000', '', '', '2024-07-12 23:20:56'),
(8, '13', '24-0000', '24-0000', 'dsad ', '', '2024-07-12 23:21:03'),
(9, '13', '24-0000', '24-0000', 'dsadsad', '', '2024-07-12 23:21:04'),
(10, '1', '24-0000', '24-009', 'fdsfsdf', '', '2024-07-12 23:35:07'),
(11, '1', '24-0000', '24-009', 'fsdfdsf', '', '2024-07-12 23:35:09'),
(12, '1', '24-0000', '24-009', '', '1 - 2024-07-13_07-35-24 PHT -1.jpg', '2024-07-12 23:35:24'),
(13, '13', '24-009', '24-0000', '', '', '2024-07-12 23:36:00'),
(14, '13', '24-009', '24-0000', 'fsdfd', '', '2024-07-12 23:36:03'),
(15, '21', '24-0010', '24-0011', 'dsfhsdjfh', '', '2024-07-29 14:37:56'),
(16, '21', '24-0010', '24-0011', 'fnsdkjf', '', '2024-07-29 14:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `Claim_ID` int(11) NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `Claimer_ID` varchar(11) NOT NULL,
  `Claim_Status` varchar(20) DEFAULT NULL,
  `Proof` text DEFAULT NULL,
  `Proof_Image` varchar(255) DEFAULT NULL,
  `Returned_Image` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `Claim_Date` datetime DEFAULT current_timestamp(),
  `Verification_Status` varchar(20) DEFAULT NULL,
  `Verification_Date` datetime DEFAULT NULL,
  `Claim_Again` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`Claim_ID`, `Item_ID`, `Claimer_ID`, `Claim_Status`, `Proof`, `Proof_Image`, `Returned_Image`, `Remarks`, `Claim_Date`, `Verification_Status`, `Verification_Date`, `Claim_Again`) VALUES
(2, 4, '24-009', 'Claiming', 'i claim  item_id=4 LOST', '4-24-009-1.jpg', NULL, '', '2024-07-13 02:33:27', 'Pending', NULL, NULL),
(3, 5, '24-009', 'Claiming', 'item_id=1 lost', '1-24-009-1.jpg', NULL, '', '2024-07-13 02:34:01', 'Pending', NULL, NULL),
(13, 3, '24-0000', 'Returned', 'Hhh', '13-24-0000-0.png', '13-24-0000-0.png', 'dsadsaduiui', '2024-07-13 04:28:55', 'Pending', '2024-07-13 08:23:19', 0),
(14, 2, '24-0000', 'Claimed', 'dsfsdf', '2-24-0000-1.jpg', NULL, '', '2024-07-13 06:06:35', 'Approved', '2024-07-13 08:13:57', NULL),
(15, 2, '00-0002', 'Claiming', 'dasdas', 'proof-00-0002-1721335114-0.png,proof-00-0002-1721335114-1.png', NULL, NULL, '2024-07-19 04:38:34', 'Pending', NULL, NULL),
(16, 11, '24-0000', 'Claiming', 'claim lost 6 lost', '6-24-0000-1.jpg', NULL, '', '2024-07-13 02:39:26', 'Declined', '2024-07-13 02:46:54', 1),
(17, 4, '24-009', 'Claiming', 'dasd', '17-24-009-0.png', '17-24-009-0.png', 'gdfgdfg', '2024-07-19 04:43:55', 'Approved', NULL, 1),
(19, 3, '00-0002', 'Claiming', 'gdfg jhjrhsdtg', '19-00-0002-0.png,19-00-0002-1.png,19-00-0002-2.png', '', 'iuhiyu', '2024-07-22 22:31:44', 'Pending', NULL, 0),
(20, 54, '24-0010', 'Claiming', 'gdfdg ', '54-24-0010-1.png', NULL, NULL, '2024-07-29 22:32:53', 'Pending', NULL, NULL),
(21, 57, '24-0011', 'Returned', 'fsdf ', '57-24-0011-1.png', '[]', 'fhjsdhf fldhsfl ', '2024-07-29 22:35:46', 'Approved', '2024-07-29 22:40:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `user_role` enum('Admin','Staff') DEFAULT NULL,
  `id_number` varchar(50) DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `avatar_image` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_role`, `id_number`, `username`, `avatar_image`, `email`, `contact`, `password`) VALUES
(2, 'Staff', '18-0589', 'adminnnnnnnnn', NULL, 'adminnnn@clsu2.edu.ph', '+639667495688', '$2y$10$ZHotoFTC61hgSXpROBa/uOBgCKT/G55QbT3WzBxMIc/X6jjUBAfDG'),
(6, 'Staff', '24-0000', 'adminnjhk', '6.jpg', 'qqq@clsu2.edu.ph', '+639667495688', '$2y$10$zOaZTHgJFlm5YhPK1/3hK.4eQa7Glr8u8hYFB4YtDdT.D/P4Fc7eK');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_ID` int(11) NOT NULL,
  `Item_Name` varchar(255) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Category_ID` varchar(11) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Pin_Location` varchar(255) DEFAULT NULL,
  `Posted_Date` datetime DEFAULT NULL,
  `Current_Location` varchar(255) DEFAULT NULL,
  `Poster_ID` varchar(11) DEFAULT NULL,
  `Item_Status` varchar(20) DEFAULT NULL,
  `Latitude` decimal(10,8) DEFAULT NULL,
  `Longitude` decimal(11,8) DEFAULT NULL,
  `Retrieved_By` varchar(11) DEFAULT NULL,
  `Retrieved_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `Item_Name`, `Image`, `Type`, `Category_ID`, `Description`, `Pin_Location`, `Posted_Date`, `Current_Location`, `Poster_ID`, `Item_Status`, `Latitude`, `Longitude`, `Retrieved_By`, `Retrieved_Date`) VALUES
(2, 'Item Found TEST', '10-24-009-1720758268-0.jpg', 'found', '1', 'shhdjd jsjsjsh jsjsjsj jdjdjjd djjdjdhd jsjsjdj sjjsjdj sjsjhshs jdjsjsjs jsjsjsjs jsjsjsjs', 'PWMH+99W, Executive Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-20 06:24:28', 'OAd Office', '24-009', 'Claimed', 15.73356826, 120.92854278, NULL, NULL),
(3, 'Item Found TEST 2', '12-24-009-1720758557-0.jpg', 'found', '2', 'shhdjd jsjsjsh jsjsjsj jdjdjjd djjdjdhd jsjsjdj sjjsjdj sjsjhshs jdjsjsjs jsjsjsjs jsjsjsjs', 'PWMH+5M8, Wag wag St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-19 06:29:17', 'Reporter', '24-009', 'Returned', 15.73328356, 120.92929136, '24-0000', '2024-07-13 08:23:19'),
(4, 'Lost Item TEST 2', '12-24-0000-1720761671-0.jpg', 'lost', '3', 'dasdsad dasdsad dsadsadsa dsadsad dsadsadsad dsadsad dsadsad d asd sadsadas dsadsad dsad s dasdsad dasdsad dsadsadsa dsadsad dsadsadsad dsadsad dsadsad d asd sadsadas dsadsad dsad s', 'Home Management Lab Building, Executive Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-12 07:21:11', NULL, '24-0000', 'Claiming', 15.73303360, 120.92794172, NULL, NULL),
(5, 'Item Found', '13-24-0000-1720762591-0.jpg', 'found', '4', 'fsdfdsff f sdfsdfdsf fdsfdsf fdsfdsf fsdfsdf ', 'PWMH+MFV GAMMA EPSILON Fraternity/Sorority Park, Central Luzon State University, CLSU, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-12 07:36:31', 'USF Office', '24-0000', 'Retrieving', 15.73427283, 120.92845670, NULL, NULL),
(7, 'test', '7-24-0000-1720963153-0.png', 'lost', '5', 'dsfsdf ', 'PWMH+2Q8 Alpha Phi Omega Chapter in CLSU, University Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-14 15:19:13', NULL, '24-0000', 'Returning', 15.73282707, 120.92961542, NULL, NULL),
(11, 'Item change', '6-00-0002-1721316299-0.jpg', 'lost', '6', 'fsdfbdbd', 'PWMH+5M8, Wag wag St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 07:02:08', '', '00-0002', 'Posted', 15.73331900, 120.92940474, NULL, NULL),
(15, 'Item lost 3', '9-00-0002-1721306042-0.png,9-00-0002-1721306042-1.png,9-00-0002-1721306042-2.png', 'lost', '7', 'dasd', 'Executive House, Executive Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 14:34:02', NULL, '00-0002', 'Claiming', 15.73332276, 120.92802755, NULL, NULL),
(19, 'dasd', '10-24-0000-1721307337-0.jpg', 'lost', '8', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-01 20:55:37', '', '24-0000', 'Returned', 15.73501636, 120.92918627, NULL, NULL),
(20, 'dasd', '10-24-0000-1721307363-0.jpg', 'lost', '9', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-02 20:56:03', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(21, 'dsfds fdsf', '4-19-9999-1721307385-0.jpg', 'lost', '10', 'fdsfsd', 'PWMG+2C8, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-03 20:56:25', '', '19-9999', 'Returning', 15.73241399, 120.92596761, NULL, NULL),
(22, 'dasd', '10-24-0000-1721307385-0.jpg', 'lost', '11', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2023-12-04 20:56:25', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(23, 'dsfds fdsf', '4-19-9999-1721307385-0.jpg', 'lost', '12', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-05 20:56:25', '', '19-9999', 'Returned', 15.73241399, 120.92596761, NULL, NULL),
(24, 'dasd', '10-24-0000-1721307385-0.jpg', 'lost', '1', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2023-01-07 20:56:25', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(25, 'dsfds fdsf', '4-19-9999-1721307385-0.jpg', 'found', '1', 'fdsfsd', 'PWMG+2C9, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-08 20:56:25', '', '19-9999', 'Posted', 15.73241399, 120.92596761, NULL, NULL),
(26, 'dasd', '10-24-0000-1721307385-0.jpg', 'lost', '2', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-09 20:56:25', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(27, 'dsfds fdsf', '4-19-9999-1721307386-0.jpg', 'found', '2', 'fdsfsd', 'PWMG+2C8, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-10 20:56:26', '', '19-9999', 'Posted', 15.73241399, 120.92596761, NULL, NULL),
(28, 'dasd', '10-24-0000-1721307386-0.jpg', 'lost', '3', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-11 20:56:26', '', '24-0000', 'Returned', 15.73501636, 120.92918627, NULL, NULL),
(29, 'dsfds fdsf', '4-19-9999-1721307386-0.jpg', 'found', '3', 'fdsfsd', 'PWMG+2C10, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-16 20:56:26', '', '19-9999', 'Posted', 15.73241399, 120.92596761, NULL, NULL),
(30, 'dasd', '10-24-0000-1721307386-0.jpg', 'lost', '4', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:26', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(31, 'dsfds fdsf', '4-19-9999-1721307386-0.jpg', 'found', '4', 'fdsfsd', 'PWMG+2C1, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:26', '', '19-9999', 'Posted', 15.73241399, 120.92596761, NULL, NULL),
(32, 'dasd', '10-24-0000-1721307386-0.jpg', 'lost', '5', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:26', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(33, 'dsfds fdsf', '4-19-9999-1721307386-0.jpg', 'found', '5', 'fdsfsd', 'PWMG+2C8, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:26', '', '19-9999', 'Retrieved', 15.73241399, 120.92596761, NULL, NULL),
(34, 'dasd', '10-24-0000-1721307387-0.jpg', 'lost', '6', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:27', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(35, 'dsfds fdsf', '4-19-9999-1721307387-0.jpg', 'found', '6', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:27', '', '19-9999', 'Claiming', 15.73241399, 120.92596761, NULL, NULL),
(36, 'dasd', '10-24-0000-1721307387-0.jpg', 'lost', '7', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-01-18 20:56:27', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(37, 'dsfds fdsf', '4-19-9999-1721307387-0.jpg', 'found', '7', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:27', '', '19-9999', 'Retrieved', 15.73241399, 120.92596761, NULL, NULL),
(38, 'dasd', '10-24-0000-1721307387-0.jpg', 'lost', '8', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:27', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(39, 'dsfds fdsf', '4-19-9999-1721307387-0.jpg', 'found', '8', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:27', '', '19-9999', 'Claiming', 15.73241399, 120.92596761, NULL, NULL),
(40, 'dasd', '10-24-0000-1721307388-0.jpg', 'lost', '9', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:28', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(42, 'dasd', '10-24-0000-1721307388-0.jpg', 'lost', '10', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:28', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(43, 'dsfds fdsf', '4-19-9999-1721307388-0.jpg', 'found', '11', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:28', '', '19-9999', 'Retrieved', 15.73241399, 120.92596761, NULL, NULL),
(44, 'dasd', '10-24-0000-1721307388-0.jpg', 'lost', '11', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:28', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(45, 'dsfds fdsf', '4-19-9999-1721307388-0.jpg', 'lost', '12', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:28', '', '19-9999', 'Posted', 15.73241399, 120.92596761, NULL, NULL),
(46, 'dasd', '10-24-0000-1721307389-0.jpg', 'found', '13', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:29', '', '24-0000', 'Posted', 15.73501636, 120.92918627, NULL, NULL),
(47, 'dsfds fdsf', '4-19-9999-1721307389-0.jpg', 'lost', '14', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2023-12-27 20:56:29', '', '19-9999', 'Posted', 15.73241399, 120.92596761, NULL, NULL),
(48, 'dasd', '10-24-0000-1721307389-0.jpg', 'found', '15', 'dsad', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-18 20:56:29', '', '24-0000', 'Claiming', 15.73501636, 120.92918627, NULL, NULL),
(49, 'dsfds fdsf', '4-19-9999-1721307389-0.jpg', 'lost', '16', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:29', '', '19-9999', 'Claiming', 15.73241399, 120.92596761, NULL, NULL),
(50, 'dasd', '10-24-0000-1721307389-0.jpg', 'lost', '17', 'dsad', 'PWP9+FVM, Science City of Muñoz, 3119 Nueva Ecija, Philippines', '2024-07-18 20:56:29', 'Reporter', '24-0000', 'Returned', 15.73505767, 120.91955178, NULL, NULL),
(51, 'dsfds fdsf', '4-19-9999-1721307389-0.jpg', 'found', '16', 'fdsfsd', 'PWMG+2C7, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-18 20:56:29', '', '19-9999', 'Returned', 15.73241399, 120.92596761, NULL, NULL),
(52, 'dsfds fdsf', '4-19-9999-1721307430-0.jpg', 'lost', '1', 'fdsfsd', 'PWJG+W64, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-23 20:57:10', 'Reporter', '19-9999', 'Claiming', 15.73225134, 120.92555857, NULL, NULL),
(54, 'test', '9-00-0002-1721315224-0.jpg', 'found', '15', 'dfgdfgfdg', 'PXHG+4R San Jose City, Nueva Ecija, Philippines', '2024-07-24 20:58:37', 'Reporter', '00-0002', 'Retrieving', 15.72778490, 120.97711332, NULL, NULL),
(55, 'Item found testsetstaet ', '1-00-0002-1721318200-0.jpg', 'found', '1', 'tgdf g', 'PWVR+H3G Philippine Carabao Center, Magtanggol Rd, Science City of Muñoz, 3120 Nueva Ecija, Philippines', '2024-07-25 23:56:27', 'OAd Office', '00-0002', 'Claiming', 15.74402111, 120.93995801, NULL, NULL),
(56, 'bobylat jhgjghj ', '15-19-9999-1721939875-0.png,15-19-9999-1721939875-1.png,15-19-9999-1721939875-2.png', 'lost', '15', 'ewdew erewr fdsf  juhgj hg', '72 Tobias St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-26 03:59:05', 'Reporter', '19-9999', 'Retrieving', 15.71452698, 120.90867273, NULL, NULL),
(57, 'item ;lost example', '7-24-0010-1722263513-0.png', 'lost', '7', 'jhfjghdfjgfdg ', 'PWQJ+84V, Executive Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-07-29 16:31:53', NULL, '24-0010', 'Returned', 15.73824656, 120.92968410, '24-0011', '2024-07-29 22:40:49'),
(58, 'ytry', '12-24-0001-1722767387-0.jpg', 'lost', '12', 'yrty', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-08-04 18:29:47', 'Reporter', '24-0001', 'Claimed', 15.73484468, 120.92954971, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Notification_ID` int(11) NOT NULL,
  `User_ID` varchar(11) DEFAULT NULL,
  `Notification_Text` text DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`Notification_ID`, `User_ID`, `Notification_Text`, `Timestamp`) VALUES
(1, '24-009', 'fsdfsdf', '2024-07-13 04:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `User_ID` varchar(11) NOT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Avatar_Image` varchar(255) DEFAULT NULL,
  `College` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `CLSU_ID_Image` varchar(255) DEFAULT NULL,
  `Home_Address` varchar(255) DEFAULT NULL,
  `CLSU_Address` varchar(255) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Social_Links` varchar(255) DEFAULT NULL,
  `Date_Created` datetime DEFAULT current_timestamp(),
  `last_activity` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `User_ID`, `Role`, `Username`, `FullName`, `Password`, `Email`, `Avatar_Image`, `College`, `Course`, `CLSU_ID_Image`, `Home_Address`, `CLSU_Address`, `Contact`, `Social_Links`, `Date_Created`, `last_activity`) VALUES
(23, '24-0000', NULL, 'xavier', NULL, '$2y$10$mLohhdo9aM1cq6TOhScSSuSYY1.owVn4r4NDKvv2i0qYWhEbcAbda', 'x', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-26 20:13:19', '2024-07-26 14:54:25'),
(29, '24-009', NULL, 'patty', NULL, '$2y$10$VggukLYL5Gk5j01DkV9Y1erOSqM/Nlx/y6LD./hO9qmsif3TmvMT6', 'p', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-05 20:13:19', NULL),
(30, '18-0589', 'Student', 'patt', 'Patricia Ann E. Bagarra', '$2y$10$LjJqH.1Y8nEE5n/DsueBYeAy2ySon1331AqNnKpfJOTWmVfyjdOca', 'bagarra.patricia@clsu2.edu.ph', '18-0589.png', 'College of Engineering', 'Bachelor of Science in Information Technology (BSIT)', '18-0589.png', 'qqqqqq', 'sDASASD', '+6398888888889', 'qqqqqq', '2024-07-10 20:13:19', '2024-07-26 14:54:39'),
(31, '24-0001', 'Faculty', 'xavierrr', 'Xavier Carl Astrerohfgh', '$2y$10$l/g3FIamk1U9pYToQgO2aOEW5vKDzmRnGwM36FPqvdL3rHZ/jCAxe', 'qfghgfh@clsu2.edu.ph', '24-0001.png', 'College of Education', 'Bachelor of Physical Education (BPEd)', '24-0001.png', 'qqqdsfsd hfgh', 'www hfghgfh', '+639667495688', 'qqqfdsf hgfh', '2024-07-12 20:13:19', NULL),
(34, '19-9999', NULL, 'xavieR', NULL, '$2y$10$eBx8YhhtDgYvojtjb22.JOgoyKIeUXeTr9QF2rw7iSLsMerXNcOQS', 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-18 20:13:19', NULL),
(35, '00-0002', NULL, 'xavierR', NULL, '$2y$10$EvSHzp5967skVKMFoMRLgO.lCFFitSvh.Z0SV/UIoO1VAo6cLwzWq', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-20 20:13:19', NULL),
(36, '24-0003', 'Faculty', 'pattyy', 'P dsd Bagarra', '$2y$10$Zxtx14a6gsFSQMk5H9kls.gutMqXl7ay68TUuC8Cdf04tkxCr4t5i', 'qqq@clsu2.edu.ph', '24-0003.jpg', 'College of Agriculture', 'Bachelor of Science in Agribusiness (BSAb)', '24-0003.jpg', 'fsdf fsdf fsdf', 'dsf fdsf fsdf', '+639667495644', ' rertret btret', '2024-07-26 20:13:19', NULL),
(37, '24-0008', 'Student', 'erwin', 'Erwin Gamino', '$2y$10$exz4pvqG8PRQJgwpnsGOAevgCCvQazqIvoVwV8mOHYkAGlm7RLFS2', 'gfgfg@clsu2.edu.ph', '24-0008.png', 'College of Education', 'Bachelor of Physical Education (BPEd)', '24-0008.png', 'fdsf fdsf fdsf', 'clsu adreessss', '+639667495688', ' fdsf fsdf fsdfdsf', '2024-07-29 22:10:57', NULL),
(38, '24-0010', 'Student', 'erwinn', 'Erwin Gamino', '$2y$10$0Z8y0Jy6ZlO/x9TUFmXaneOD0TpnHkdRe1nIowXayq66akV1.N1M.', 'erwin@clsu.edu.ph', '24-0010.png', 'College of Education', 'Bachelor of Elementary Education (BEEd)', '24-0010.png', 'fdsf fdsf fdsf', 'fdsf fdsf fdsf', '+639667495688', 'fsdfdsf fsdfdsfdsd', '2024-07-29 22:22:47', NULL),
(39, '24-0011', 'Faculty', 'qqqqq', 'fdsf fsdfsd', '$2y$10$rz8Sl2bbOUfZ/yK6hZ1CB.0vmHNlauxnq2jwMV0BE7K3IfqRgC0Z2', 'gfgfgq@clsu2.edu.ph', '24-0011.png', 'College of Education', 'Bachelor of Early Childhood Education (BECEd)', '24-0011.png', 'dsf', 'fsdf', '+639667495688f', 'fsdfd', '2024-07-29 22:33:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_timeline`
--
ALTER TABLE `activity_timeline`
  ADD PRIMARY KEY (`Activity_ID`),
  ADD KEY `Actor_ID` (`Actor_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Category_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`Claim_ID`),
  ADD KEY `Item_ID` (`Item_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_ID`),
  ADD KEY `Poster_ID` (`Poster_ID`),
  ADD KEY `Category_ID` (`Category_ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Notification_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `User_ID` (`User_ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `Claim_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `Notification_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
