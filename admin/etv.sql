-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 07:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etv`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `ads` text NOT NULL,
  `addes` text NOT NULL,
  `adimg` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `ads`, `addes`, `adimg`, `created_at`) VALUES
(1, 'Nassi Inc', 'Tech Solution', 'wynand-uys-0_32AIxy1Hk-unsplash.jpg', '2023-08-30'),
(2, 'Nassi Inc', 'bg', 'wolfgang-hasselmann-WrVvYxq11Yk-unsplash.jpg', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int(11) NOT NULL,
  `badges` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `badges`) VALUES
(1, 'politics'),
(2, 'business'),
(3, 'corporate'),
(4, 'scie-tech'),
(5, 'health'),
(6, 'education'),
(7, 'food'),
(8, 'travel'),
(9, 'africa'),
(10, 'world'),
(11, 'economy');

-- --------------------------------------------------------

--
-- Table structure for table `breaking`
--

CREATE TABLE `breaking` (
  `id` int(11) NOT NULL,
  `news` text NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breaking`
--

INSERT INTO `breaking` (`id`, `news`, `newsimg`, `badges`, `created_at`) VALUES
(57, 'moses is a php developer', 'profile-1.jpg', 'politics', '2023-08-28'),
(58, 'moses is a php developer', 'profile-2.jpg', 'politics', '2023-08-28'),
(59, 'moses is a php developer', 'profile-3.jpg', 'corporate', '2023-08-28'),
(60, 'moses is a php developer', 'profile-3.jpg', 'health', '2023-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` int(11) NOT NULL,
  `news` text NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headlines`
--

CREATE TABLE `headlines` (
  `id` int(11) NOT NULL,
  `news` text NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `headlines`
--

INSERT INTO `headlines` (`id`, `news`, `newsimg`, `badges`, `created_at`) VALUES
(6, 'moses is a php developer', 'shopping.png', 'politics', '2023-08-28'),
(7, 'moses is a php developer', 'photo_2023-08-24_21-02-52.jpg', 'health', '2023-08-28'),
(8, 'moses is a php developer', '20230503_182825.jpg', 'politics', '2023-08-29'),
(9, 'moses is a php developer', '20230503_182825.jpg', 'politics', '2023-08-29'),
(10, 'moses is a php developer', '20230503_182825.jpg', 'politics', '2023-08-29'),
(11, 'moses is a php developer', '20230503_182825.jpg', 'politics', '2023-08-29'),
(12, 'moses is a php developer', 'logo.png', 'business', '2023-08-29'),
(13, 'moses is a php developer', 'logo.png', 'foods', '2023-08-29'),
(14, 'moses is a php developer', 'logo.png', 'foods', '2023-08-29'),
(15, 'moses is a php developer', 'logo.png', 'health', '2023-08-29'),
(16, 'moses is a php developer', 'logos.png', 'foods', '2023-08-29'),
(17, 'moses is a php developer', 'logos.png', 'foods', '2023-08-29'),
(18, 'moses is a php developer', 'logo.png', 'scitech', '2023-08-29'),
(19, 'moses is a php developer', 'gptgo.jpg', 'travel', '2023-08-29'),
(20, 'moses is a php developer', 'gptgo.jpg', 'travel', '2023-08-29'),
(21, 'ewline characters are not allowed in MySQL databases. The code will then remove all extra spaces from the title. This is necessary because MySQL databases only allow one space between words. The code will then escape the values of the news article title a', 'writing.png', 'politics', '2023-08-29'),
(22, 'mosesssss', 'design.png', '', '2023-08-30'),
(23, 'noytdfcgvbh', 'design.png', '', '2023-08-30'),
(24, 'noytdfcgvbh', 'design.png', '', '2023-08-30'),
(25, 'gh', 'twitter.png', '', '2023-08-30'),
(26, 'ghjk', 'notebook.png', 'politics', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job` text NOT NULL,
  `jobdes` text NOT NULL,
  `jobimg` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job`, `jobdes`, `jobimg`, `created_at`) VALUES
(5, 'Computer Science', '3 years of experience', 'C:xampp	mpphp9630.tmp', '2023-08-30'),
(6, 'Computer Science', 'computer scientist needed', '', '2023-08-30'),
(7, 'Computer Science', 'computer scientist needed', 'programming.png', '2023-08-30'),
(8, 'Journalist', 'journal writer', 'mountsha.png', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `lln`
--

CREATE TABLE `lln` (
  `id` int(11) NOT NULL,
  `news` mediumtext NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lln`
--

INSERT INTO `lln` (`id`, `news`, `newsimg`, `badges`, `created_at`) VALUES
(1, 'moses is a php developer', 'photo_2023-08-24_21-02-42.jpg', 'education', '2023-08-28'),
(2, 'moses is a php developer', 'shopping.png', 'education', '2023-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `mln`
--

CREATE TABLE `mln` (
  `id` int(11) NOT NULL,
  `news` mediumtext NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mln`
--

INSERT INTO `mln` (`id`, `news`, `newsimg`, `badges`, `created_at`) VALUES
(2, 'moses is a php developer', 'heather-ford-5gkYsrH_ebY-unsplash.jpg', 'politics', '2023-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `popular`
--

CREATE TABLE `popular` (
  `id` int(11) NOT NULL,
  `news` mediumtext NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular`
--

INSERT INTO `popular` (`id`, `news`, `newsimg`, `badges`, `created_at`) VALUES
(7, 'bunana', 'online-shopping.png', 'politics', '2023-08-30'),
(8, 'shop', 'shopping.png', 'economy', '2023-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `sln`
--

CREATE TABLE `sln` (
  `id` int(11) NOT NULL,
  `news` mediumtext NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sln`
--

INSERT INTO `sln` (`id`, `news`, `newsimg`, `badges`, `created_at`) VALUES
(3, 'im more than this', 'logos.png', 'travel', '2023-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE `trending` (
  `id` int(11) NOT NULL,
  `news` mediumtext NOT NULL,
  `newsimg` varchar(255) NOT NULL,
  `badges` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `profile_image`) VALUES
(15, 'Musie Tesfa', 'musietesfa82@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breaking`
--
ALTER TABLE `breaking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headlines`
--
ALTER TABLE `headlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lln`
--
ALTER TABLE `lln`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mln`
--
ALTER TABLE `mln`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sln`
--
ALTER TABLE `sln`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trending`
--
ALTER TABLE `trending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `breaking`
--
ALTER TABLE `breaking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `headlines`
--
ALTER TABLE `headlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lln`
--
ALTER TABLE `lln`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mln`
--
ALTER TABLE `mln`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `popular`
--
ALTER TABLE `popular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sln`
--
ALTER TABLE `sln`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trending`
--
ALTER TABLE `trending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
