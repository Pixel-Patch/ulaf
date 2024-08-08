-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 01:06 AM
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
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `activity_type` enum('login','logout','add_item','edit_item','delete_item','add_claim','delete_claim','approve_claim','decline_claim','edit_profile','return_item','retrieve_item','register','cregister') NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `claim_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `user_id`, `activity_type`, `description`, `item_id`, `claim_id`, `timestamp`) VALUES
(10, '24-0001', 'login', '', NULL, NULL, '2024-08-05 20:31:16'),
(11, '24-0001', 'logout', '', NULL, NULL, '2024-08-05 20:31:26'),
(12, '24-0001', 'login', '', NULL, NULL, '2024-08-05 20:31:28'),
(13, '24-0001', 'logout', '', NULL, NULL, '2024-08-05 20:31:34'),
(14, '24-0001', 'login', '', NULL, NULL, '2024-08-05 20:32:07'),
(15, '24-0001', 'logout', '', NULL, NULL, '2024-08-05 20:32:13'),
(16, '24-0001', 'login', '', NULL, NULL, '2024-08-05 20:55:50'),
(17, '24-0001', 'logout', '', NULL, NULL, '2024-08-05 20:56:02'),
(18, '24-0001', 'login', '', NULL, NULL, '2024-08-05 21:04:37'),
(19, '24-0001', 'logout', '', NULL, NULL, '2024-08-05 21:04:43'),
(20, '24-0001', 'login', '', NULL, NULL, '2024-08-05 21:04:45'),
(21, '24-0001', 'logout', '', NULL, NULL, '2024-08-05 21:04:50'),
(22, '24-0001', 'login', NULL, NULL, NULL, '2024-08-08 13:44:46'),
(23, '18-0589', 'login', 'User logged in', NULL, NULL, '2024-08-08 14:58:59'),
(24, '24-0001', 'logout', 'User logged out', NULL, NULL, '2024-08-08 15:01:38'),
(25, '18-0589', 'login', 'User logged in', NULL, NULL, '2024-08-08 15:04:07'),
(26, '24-0001', 'login', 'User logged in', NULL, NULL, '2024-08-08 15:18:12'),
(27, '24-0001', 'add_item', 'dasd', 67, NULL, '2024-08-08 15:29:48'),
(28, '24-0001', 'add_item', 'Item \'dasd\' has been added by user ID 24-0001.', 68, NULL, '2024-08-08 16:47:23'),
(29, '24-0001', 'add_item', 'Item \'dasd\' has been added by user ID 24-0001.', 69, NULL, '2024-08-08 17:29:29'),
(30, '24-0001', 'add_item', 'Item \'dasd gdfdfg\' has been added.', 70, NULL, '2024-08-08 17:41:24'),
(31, '18-0589', 'login', 'User logged in', NULL, NULL, '2024-08-08 17:42:30'),
(32, '24-0001', 'add_item', 'Item \'dasd gdfdfg\' has been added.', 71, NULL, '2024-08-08 18:04:52'),
(33, '24-0001', 'logout', 'User logged out', NULL, NULL, '2024-08-08 18:09:14'),
(34, '18-0589', 'login', 'User logged in', NULL, NULL, '2024-08-08 18:09:18'),
(35, '18-0589', 'add_item', 'Item \'dsadad dasd asdsad\' has been added.', 72, NULL, '2024-08-08 18:09:56'),
(36, '18-0589', 'add_item', 'Item \'hgdfhfg\' has been added.', 73, NULL, '2024-08-08 18:19:59'),
(37, '18-0589', 'add_item', 'Item \'fsdf\' has been added.', 74, NULL, '2024-08-08 18:20:40'),
(38, '18-0589', 'add_item', 'Item \'dfgdfg\' has been added.', 75, NULL, '2024-08-08 18:21:16'),
(39, '18-0589', 'login', 'User logged in', NULL, NULL, '2024-08-08 18:23:33'),
(40, '18-0589', 'add_item', 'Item \'dasd\' has been added.', 76, NULL, '2024-08-08 18:24:24'),
(41, '18-0589', 'add_item', 'Item \'gdfg\' has been added.', 77, NULL, '2024-08-08 18:25:14'),
(42, '18-0589', 'add_item', 'Item \'dasd\' has been added.', 78, NULL, '2024-08-08 18:29:44'),
(43, '18-0589', 'add_claim', 'Claim for item ID \'70\' has been submitted.', 70, 28, '2024-08-08 18:38:19'),
(44, '18-0589', 'logout', 'User logged out', NULL, NULL, '2024-08-08 19:46:17'),
(45, '00-0005', 'register', 'User \'00-0005\' has registered.', NULL, NULL, '2024-08-08 19:46:34'),
(46, '00-0005', 'login', 'User logged in', NULL, NULL, '2024-08-08 19:47:17'),
(48, '00-0005', 'cregister', 'User \'00-0005\' has completed the registration.', NULL, NULL, '2024-08-08 19:58:02'),
(49, '00-0005', 'add_item', 'Item \'sdfsd\' has been added.', 79, NULL, '2024-08-08 19:59:34'),
(50, '00-0005', 'edit_item', 'Edit item change: ', 79, NULL, '2024-08-08 20:07:15'),
(51, '00-0005', 'edit_item', 'Edit item change: ', 79, NULL, '2024-08-08 20:08:14'),
(52, '00-0005', 'edit_item', 'Edit item change: ', 79, NULL, '2024-08-08 20:11:48'),
(53, '00-0005', 'edit_item', 'Edit item change: ', 79, NULL, '2024-08-08 20:15:23'),
(54, '00-0005', 'edit_item', 'Item \'sdfsd\' with ID \'79\' has been edited.', 79, NULL, '2024-08-08 20:17:49'),
(55, '00-0005', 'edit_item', 'Activity \'edit_item\' performed by user ID 00-0005.', 79, NULL, '2024-08-08 20:26:50'),
(56, '00-0005', 'edit_item', 'Activity \'edit_item\' performed by user ID 00-0005.', 79, NULL, '2024-08-08 20:31:14'),
(57, '00-0005', 'edit_item', 'Activity \'edit_item\' performed by user ID 00-0005.', 79, NULL, '2024-08-08 20:32:02'),
(58, '00-0005', 'edit_item', NULL, 79, NULL, '2024-08-08 20:41:49'),
(59, '00-0005', 'edit_item', NULL, 79, NULL, '2024-08-08 20:44:09'),
(60, '00-0005', 'edit_item', 'Activity \'edit_item\' performed by user ID 00-0005.', 79, NULL, '2024-08-08 20:46:45'),
(61, '00-0005', 'edit_item', 'Activity \'edit_item\' performed by user ID 00-0005.', 79, NULL, '2024-08-08 20:48:34'),
(62, '00-0005', 'edit_item', 'Item \'sdfsd\' changes: Category from \'12\' to \'13\'', 79, NULL, '2024-08-08 20:50:25'),
(63, '00-0005', 'edit_item', 'Item \'Item Lost\' changes: Item Name from \'sdfsd\' to \'Item Lost\', Images from \'6-00-0005-1723147174-0.png\' to \'13-00-0005-1723150286-0.png\', Description from \'fsdf fdsfds fsdf\' to \'description\'', 79, NULL, '2024-08-08 20:51:26'),
(64, '00-0005', 'edit_item', 'Item \'Item Lost\' changes: Category from \'13\' to \'11\', Description from \'description\' to \'description fdsfsd\'', 79, NULL, '2024-08-08 20:57:57'),
(65, '00-0005', 'edit_profile', NULL, NULL, NULL, '2024-08-08 20:58:32'),
(66, '00-0005', 'edit_profile', 'Profile changes: Username from \'testty\' to \'test\'', NULL, NULL, '2024-08-08 21:00:49'),
(67, '00-0005', 'edit_profile', 'Profile changes: Password updated', NULL, NULL, '2024-08-08 21:01:35'),
(68, '00-0005', 'edit_profile', 'Profile changes: Home Address from \'dasd\' to \'home address\', CLSU Address from \'dasd\' to \'clsu address\'', NULL, NULL, '2024-08-08 21:02:10'),
(69, '00-0005', 'add_item', 'Item \'dfsdf\' has been added.', 80, NULL, '2024-08-08 22:20:20'),
(70, '00-0005', 'add_item', 'Item \'qwe eqwe\' has been added.', 81, NULL, '2024-08-08 22:25:32'),
(71, '00-0005', 'add_claim', 'Claim for item #\'78\' has been submitted.', 78, 29, '2024-08-08 22:26:39'),
(72, '00-0005', 'delete_item', 'Deleted item \'qwe eqwe\' with ID \'81\', Type: \'lost\', Category ID: \'1\', Description: \'wqewqe\', Pin Location: \'PWMH+5M8, Wag wag St, Science City of Muñoz, Nueva Ecija, Philippines\', Current Location: \'\'.', 81, NULL, '2024-08-08 22:44:08'),
(73, '00-0005', 'add_item', 'Item \'dasd\' has been added.', 82, NULL, '2024-08-08 22:46:32'),
(74, '00-0005', 'add_claim', 'Claim for item #\'78\' has been submitted.', 78, 30, '2024-08-08 22:46:46'),
(75, '00-0005', 'delete_item', 'Deleted item \'dasd\' with Item ID #82', 82, NULL, '2024-08-08 22:47:12'),
(76, '00-0005', 'add_claim', 'Claim for item #\'76\' has been submitted.', 76, 31, '2024-08-08 22:57:13'),
(77, '00-0005', 'add_claim', 'Claim for item #\'75\' has been submitted.', 75, 32, '2024-08-08 23:00:47'),
(78, '00-0005', 'delete_claim', 'Deleted claim with Claim ID #31 related to Item ID #76', 76, 31, '2024-08-08 23:04:31');

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
(15, 2, '00-0002', 'Claiming', 'dasdas', 'proof-00-0002-1721335114-0.png,proof-00-0002-1721335114-1.png', NULL, NULL, '2024-07-19 04:38:34', 'Pending', NULL, NULL),
(16, 11, '24-0000', 'Claiming', 'claim lost 6 lost', '6-24-0000-1.jpg', NULL, '', '2024-07-13 02:39:26', 'Declined', '2024-07-13 02:46:54', 1),
(17, 4, '24-009', 'Claiming', 'dasd', '17-24-009-0.png', '17-24-009-0.png', 'gdfgdfg', '2024-07-19 04:43:55', 'Approved', NULL, 1),
(19, 3, '00-0002', 'Claiming', 'gdfg jhjrhsdtg', '19-00-0002-0.png,19-00-0002-1.png,19-00-0002-2.png', '', 'iuhiyu', '2024-07-22 22:31:44', 'Pending', NULL, 0),
(20, 54, '24-0010', 'Claiming', 'gdfdg ', '54-24-0010-1.png', NULL, NULL, '2024-07-29 22:32:53', 'Pending', NULL, NULL),
(21, 57, '24-0011', 'Returned', 'fsdf ', '57-24-0011-1.png', '[]', 'fhjsdhf fldhsfl ', '2024-07-29 22:35:46', 'Approved', '2024-07-29 22:40:49', NULL),
(22, 66, '18-0589', 'Claiming', 'gdfg', '66-18-0589-1.png', NULL, NULL, '2024-08-09 01:43:22', 'Pending', NULL, NULL),
(23, 69, '18-0589', 'Claiming', 'terter', '69-18-0589-1.png', NULL, NULL, '2024-08-09 02:15:56', 'Pending', NULL, NULL),
(24, 68, '18-0589', 'Claiming', 'item claimdsahfdudsgf ', '68-18-0589-1.png', NULL, NULL, '2024-08-09 02:19:04', 'Pending', NULL, NULL),
(25, 24, '18-0589', 'Claiming', 'fsdfsd', '24-18-0589-1.png', NULL, NULL, '2024-08-09 02:25:57', 'Pending', NULL, NULL),
(26, 36, '18-0589', 'Claiming', 'dasd', '36-18-0589-1.png', NULL, NULL, '2024-08-09 02:29:10', 'Pending', NULL, NULL),
(27, 47, '18-0589', 'Claiming', 'fsdf', '47-18-0589-1.png', NULL, NULL, '2024-08-09 02:35:29', 'Pending', NULL, NULL),
(28, 70, '18-0589', 'Claiming', 'ytyrt', '70-18-0589-1.png', NULL, NULL, '2024-08-09 02:38:19', 'Pending', NULL, NULL),
(30, 78, '00-0005', 'Claiming', 'dsadas', '78-00-0005-1.png', NULL, NULL, '2024-08-09 06:46:46', 'Pending', NULL, NULL);

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
(58, 'ytry', '12-24-0001-1722767387-0.jpg', 'lost', '12', 'yrty', 'Dr. Eliseo M. Pajaro Inter-Faith Chapel Building, CLSU, Milflor St, Muñoz, 3120 Nueva Ecija, Philippines', '2024-08-04 18:29:47', 'Reporter', '24-0001', 'Claimed', 15.73484468, 120.92954971, NULL, NULL),
(59, 'Item test lost 69', '10-24-0001-1723124717-0.png', 'lost', '10', 'fsdf', 'PWPH+45P, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 15:45:17', NULL, '24-0001', 'Posted', 15.73563596, 120.92849962, NULL, NULL),
(60, 'dasdsad', '10-24-0001-1723125167-0.png', 'found', '10', 'dasd', 'PWMH+FMV, University Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 15:52:47', 'Reporter', '24-0001', 'Posted', 15.73373583, 120.92935793, NULL, NULL),
(61, 'fsdf', '11-18-0589-1723129466-0.png', 'lost', '11', 'dasd', 'PWMH+FMV, University Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 17:04:26', NULL, '18-0589', 'Posted', 15.73381845, 120.92935793, NULL, NULL),
(62, 'gdfg', '12-18-0589-1723129815-0.png', 'found', '12', 'dfgdf ', 'PWMG+QVH, Macan St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 17:10:15', 'USF Office', '18-0589', 'Posted', 15.73439675, 120.92729799, NULL, NULL),
(63, 'gfdgdf', '13-18-0589-1723130092-0.png', 'lost', '13', 'gfdg', 'PWMH+JX7, University Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 17:14:52', NULL, '18-0589', 'Posted', 15.73369452, 120.92961542, NULL, NULL),
(64, 'fsdf', '16-18-0589-1723130261-0.png', 'found', '16', 'fsdf', 'PWMH+FMV, University Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 17:17:41', 'OAd Office', '18-0589', 'Posted', 15.73390106, 120.92884294, NULL, NULL),
(65, 'dasd', '17-24-0001-1723130331-0.jpg', 'lost', '17', 'dasd', 'Executive Guest House, Executive Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 17:18:51', NULL, '24-0001', 'Posted', 15.73377714, 120.92789881, NULL, NULL),
(66, 'dasd', '16-24-0001-1723130379-0.jpg', 'lost', '16', 'dasd', 'Executive Guest House, Executive Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 17:19:39', NULL, '24-0001', 'Posted', 15.73381845, 120.92738382, NULL, NULL),
(67, 'dasd', '16-24-0001-1723130988-0.jpg', 'lost', '16', 'dasd', 'Executive Guest House, Executive Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 17:29:48', NULL, '24-0001', 'Posted', 15.73381845, 120.92738382, NULL, NULL),
(68, 'dasd', '9-24-0001-1723135643-0.jpg', 'found', '9', 'dasd', 'PWMF+Q9M, Bantug - Bagong Sikat Rd, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 18:47:23', 'Reporter', '24-0001', 'Posted', 15.73468590, 120.92343561, NULL, NULL),
(69, 'dasd', '9-24-0001-1723138169-0.jpg', 'found', '9', 'dasd', 'PWMG+9JP, S H. Escudero, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 19:29:29', 'Reporter', '24-0001', 'Posted', 15.73319883, 120.92669718, NULL, NULL),
(70, 'dasd gdfdfg', '8-24-0001-1723138884-0.jpg', 'lost', '8', 'dasd', 'PWMG+9JP, S H. Escudero, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 19:41:24', 'Reporter', '24-0001', 'Posted', 15.73369452, 120.92583887, NULL, NULL),
(71, 'dasd gdfdfg', '8-24-0001-1723140292-0.jpg', 'lost', '8', 'dasd', 'PWJJ+P8P, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:04:52', 'Reporter', '24-0001', 'Posted', 15.73241399, 120.93167536, NULL, NULL),
(72, 'dsadad dasd asdsad', '7-18-0589-1723140596-0.jpg', 'lost', '7', 'sadasd', 'CLSU Credit Cooperative, Raminad St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:09:56', NULL, '18-0589', 'Posted', 15.73299230, 120.92858545, NULL, NULL),
(73, 'hgdfhfg', '1-18-0589-1723141199-0.png', 'lost', '1', 'gdfgdf ', 'PWJP+3H Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:19:59', NULL, '18-0589', 'Posted', 15.73018336, 120.93643896, NULL, NULL),
(74, 'fsdf', '10-18-0589-1723141240-0.png', 'found', '10', 'fsdf', 'PWMH+5M8, Wag wag St, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:20:40', 'USF Office', '18-0589', 'Posted', 15.73332276, 120.92944376, NULL, NULL),
(75, 'dfgdfg', '11-18-0589-1723141276-0.png', 'lost', '11', 'asdasd', 'PWMH+MFV GAMMA EPSILON Fraternity/Sorority Park, Central Luzon State University, CLSU, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:21:16', NULL, '18-0589', 'Posted', 15.73406629, 120.92862837, NULL, NULL),
(76, 'dasd', '1-18-0589-1723141464-0.png', 'found', '1', 'fsdf', 'PWMG+9JP, S H. Escudero, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:24:24', 'USF Office', '18-0589', 'Posted', 15.73307491, 120.92665426, NULL, NULL),
(77, 'gdfg', '11-18-0589-1723141514-0.png', 'found', '11', 'gdfg', 'PWMJ+RC4, University Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:25:14', 'Reporter', '18-0589', 'Posted', 15.73427283, 120.93111746, NULL, NULL),
(78, 'dasd', '12-18-0589-1723141784-0.png', 'lost', '12', 'dssf ', 'PWMH+JPH, University Ave, Science City of Muñoz, Nueva Ecija, Philippines', '2024-08-08 20:29:44', NULL, '18-0589', 'Posted', 15.73390106, 120.92931501, NULL, NULL);

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
(30, '18-0589', 'Student', 'patt', 'Patricia Ann E. Bagarra', '$2y$10$HYVM607xA.asV8ojSlTziuS4rT5PE4XPNAkgv7OdiQYYRF8i82ktO', 'bagarra.patricia@clsu2.edu.ph', '18-0589.png', 'College of Engineering', 'Bachelor of Science in Information Technology (BSIT)', '18-0589.png', 'qqqqqq', 'sDASASD', '+6398888888889', 'qqqqqq', '2024-07-10 20:13:19', '2024-08-08 19:46:10'),
(31, '24-0001', 'Faculty', 'xavierrr', 'Xavier Carl Astrerohfgh', '$2y$10$yJ0uURZDhW72H4bPNodojeUGyg8qu6E./trf9Aa8iK7qCSosHv13G', 'qfghgfh@clsu2.edu.ph', '24-0001.png', 'College of Education', 'Bachelor of Physical Education (BPEd)', '24-0001.png', 'qqqdsfsd hfgh', 'www hfghgfh', '+639667495688', 'qqqfdsf hgfh', '2024-07-12 20:13:19', '2024-08-08 18:09:03'),
(34, '19-9999', NULL, 'xavieR', NULL, '$2y$10$eBx8YhhtDgYvojtjb22.JOgoyKIeUXeTr9QF2rw7iSLsMerXNcOQS', 'r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-18 20:13:19', NULL),
(35, '00-0002', NULL, 'xavierR', NULL, '$2y$10$EvSHzp5967skVKMFoMRLgO.lCFFitSvh.Z0SV/UIoO1VAo6cLwzWq', 'd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-20 20:13:19', NULL),
(36, '24-0003', 'Faculty', 'pattyy', 'P dsd Bagarra', '$2y$10$Zxtx14a6gsFSQMk5H9kls.gutMqXl7ay68TUuC8Cdf04tkxCr4t5i', 'qqq@clsu2.edu.ph', '24-0003.jpg', 'College of Agriculture', 'Bachelor of Science in Agribusiness (BSAb)', '24-0003.jpg', 'fsdf fsdf fsdf', 'dsf fdsf fsdf', '+639667495644', ' rertret btret', '2024-07-26 20:13:19', NULL),
(37, '24-0008', 'Student', 'erwin', 'Erwin Gamino', '$2y$10$exz4pvqG8PRQJgwpnsGOAevgCCvQazqIvoVwV8mOHYkAGlm7RLFS2', 'gfgfg@clsu2.edu.ph', '24-0008.png', 'College of Education', 'Bachelor of Physical Education (BPEd)', '24-0008.png', 'fdsf fdsf fdsf', 'clsu adreessss', '+639667495688', ' fdsf fsdf fsdfdsf', '2024-07-29 22:10:57', NULL),
(38, '24-0010', 'Student', 'erwinn', 'Erwin Gamino', '$2y$10$0Z8y0Jy6ZlO/x9TUFmXaneOD0TpnHkdRe1nIowXayq66akV1.N1M.', 'erwin@clsu.edu.ph', '24-0010.png', 'College of Education', 'Bachelor of Elementary Education (BEEd)', '24-0010.png', 'fdsf fdsf fdsf', 'fdsf fdsf fdsf', '+639667495688', 'fsdfdsf fsdfdsfdsd', '2024-07-29 22:22:47', NULL),
(39, '24-0011', 'Faculty', 'qqqqq', 'fdsf fsdfsd', '$2y$10$rz8Sl2bbOUfZ/yK6hZ1CB.0vmHNlauxnq2jwMV0BE7K3IfqRgC0Z2', 'gfgfgq@clsu2.edu.ph', '24-0011.png', 'College of Education', 'Bachelor of Early Childhood Education (BECEd)', '24-0011.png', 'dsf', 'fsdf', '+639667495688f', 'fsdfd', '2024-07-29 22:33:52', NULL),
(40, '00-0005', 'Student', 'test', 'dasd dsad dsad', '$2y$10$QD7LmZ5VL8AWLnErwmHqmuKm1j/cCMwcwpfj23HIRln5NETnWZZ/e', 'test', '00-0005.png', 'College of Arts and Social Sciences', 'Bachelor of Arts in Social Sciences (BASS)', '00-0005.png', 'home address', 'clsu address', '+639667495688', 'dasd', '2024-08-09 03:46:34', '2024-08-08 23:04:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `Claim_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `Notification_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
