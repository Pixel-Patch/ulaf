-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 07:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
  `Creation_Date` datetime DEFAULT NULL,
  `Last_Update_Date` datetime DEFAULT NULL,
  `User_ID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `User_ID` varchar(11) NOT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`User_ID`, `Role`, `Username`, `Password`) VALUES
('14-2256', 'Admin', 'admin1', 'admin1'),
('15-2261', 'Admin Staff', 'staff1', 'staff1');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_ID` varchar(11) NOT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Date_and_Hour` datetime DEFAULT NULL,
  `Current_Location` varchar(255) DEFAULT NULL,
  `Poster_ID` varchar(11) DEFAULT NULL,
  `Item_Status` varchar(20) DEFAULT NULL,
  `Latitude` decimal(10,8) DEFAULT NULL,
  `Longitude` decimal(11,8) DEFAULT NULL,
  `Retrieved_By` varchar(11) DEFAULT NULL,
  `Retrieved_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item_tags`
--

CREATE TABLE `item_tags` (
  `Item_ID` varchar(11) NOT NULL,
  `Tag_ID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location_history`
--

CREATE TABLE `location_history` (
  `Location_ID` varchar(11) NOT NULL,
  `Item_ID` varchar(11) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `Notification_ID` varchar(11) NOT NULL,
  `User_ID` varchar(11) DEFAULT NULL,
  `Notification_Text` text DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `Tag_ID` varchar(11) NOT NULL,
  `Tag_Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `Type_ID` varchar(11) NOT NULL,
  `Type_Name` varchar(100) DEFAULT NULL,
  `Creation_Date` datetime DEFAULT NULL,
  `Last_Update_Date` datetime DEFAULT NULL,
  `User_ID` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` varchar(11) NOT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `User_Type` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Avatar_Image` varchar(255) DEFAULT NULL,
  `College` varchar(100) DEFAULT NULL,
  `Course` varchar(100) DEFAULT NULL,
  `CLSU_ID_Image` varchar(255) DEFAULT NULL,
  `Home_Address` varchar(255) DEFAULT NULL,
  `CLSU_Address` varchar(255) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Social_Links` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Role`, `Username`, `FullName`, `User_Type`, `Password`, `Email`, `Avatar_Image`, `College`, `Course`, `CLSU_ID_Image`, `Home_Address`, `CLSU_Address`, `Contact`, `Social_Links`) VALUES
('14-2256', NULL, 'Nyawiii', 'Patricia Ann Bagarra', 'student', '$2y$10$Um0Gt3uREMjLzBgspoc7RejoFbMSCHV.A3164W0nMDRtDBl7xHkk6', 'PatriciaBagarra@CLSU.edu.ph', 'C:\\xampp\\htdocs\\ulaf\\assets\\uploads\\qr_enter user id.png', 'College of Engineering', 'Bachelor of Science in Information Technology (BSIT)', 'C:\\xampp\\htdocs\\ulaf\\assets\\uploads\\qrvuser_click edit.png', 'tarlac vicotira', 'Men\'s Dorm 10-11', '09667495688', 'Xavy.kid.facebook'),
('15-2261', 'Student', 'XavierCarl6969', 'Xavier Carl Astrero', 'Student', '$2y$10$rES.LfKs/F41cTuGzmU8c.KYCkkuOQdi/jSxfQBQuxvJme84ucswK', 'XavierCarllllll@clsu2.edu.ph', 'S:\\xampp\\htdocs\\ulaf\\assets\\uploads\\\\istambay.jpg', 'College of Arts and Social Sciences', 'Bachelor of Arts in Filipino (BAFil)', 'S:\\xampp\\htdocs\\ulaf\\assets\\uploads\\\\tambay_crackdown.jpg', 'tarlac vicotira', 'Men\'s Dorm 10-11', '09667495688', 'Xavy.kid.facebook'),
('24-0001', NULL, 'patricia', ' Patricia Ann E. Bagarra', 'faculty', '$2y$10$JHH0Y9dJxdXrKdxmk2yUiObGUgWvnXnI1CuCKFyJcVFDiVYAOPaji', 'bagarra.patricia@clsu2.edu.ph', 'C:\\xampp\\htdocs\\ulaf\\assets\\uploads\\qr_download qr code.png', 'Institute of Sports, Physical Education and Recreation', 'Certificate in Physical Education', 'C:\\xampp\\htdocs\\ulaf\\assets\\uploads\\index.png', 'qqqqqq', 'qqqqqq', '+639760120148', 'm.mr/username'),
('24-0005', 'Student', 'nyawtiti', 'nyawtitinyawtiti', 'Student', '$2y$10$KNHQy02EJrq7VuDSf8tfU.7ZFhxdzK4k8tFilUp1WcUrpKgZxBtaC', 'baagarra.patricia@clsu2.edu.ph', 'S:\\xampp\\htdocs\\ulaf\\assets\\uploads\\\\tambay_crackdown.jpg', 'College of Arts and Social Sciences', 'Bachelor of Arts in Filipino (BAFil)', 'S:\\xampp\\htdocs\\ulaf\\assets\\uploads\\\\Default_homeless_pinoy_playing_computer_0.jpg', '92 B Benitez Street, San Martin De Porres', '92 B Benitez Street, San Martin De Porres', '+639667495688', 'https://www.facebook.com/xavy.kid/  ');

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
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_ID`),
  ADD KEY `Poster_ID` (`Poster_ID`) USING BTREE;

--
-- Indexes for table `item_tags`
--
ALTER TABLE `item_tags`
  ADD PRIMARY KEY (`Item_ID`,`Tag_ID`),
  ADD KEY `Tag_ID` (`Tag_ID`);

--
-- Indexes for table `location_history`
--
ALTER TABLE `location_history`
  ADD PRIMARY KEY (`Location_ID`),
  ADD KEY `Item_ID` (`Item_ID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`Notification_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`Tag_ID`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`Type_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `employee` (`User_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`Poster_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `item_tags`
--
ALTER TABLE `item_tags`
  ADD CONSTRAINT `item_tags_ibfk_1` FOREIGN KEY (`Item_ID`) REFERENCES `items` (`Item_ID`),
  ADD CONSTRAINT `item_tags_ibfk_2` FOREIGN KEY (`Tag_ID`) REFERENCES `tags` (`Tag_ID`);

--
-- Constraints for table `location_history`
--
ALTER TABLE `location_history`
  ADD CONSTRAINT `location_history_ibfk_1` FOREIGN KEY (`Item_ID`) REFERENCES `items` (`Item_ID`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`);

--
-- Constraints for table `types`
--
ALTER TABLE `types`
  ADD CONSTRAINT `types_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `employee` (`User_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
