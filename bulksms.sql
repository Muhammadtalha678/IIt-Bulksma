-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 08:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulksms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `create_date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `create_date`, `title`, `slug`, `status`, `meta_description`, `meta_keywords`) VALUES
(1, '0000-00-00', 'How It Work', 'how-it-work', 'DEACTIVATE', NULL, ''),
(2, '0000-00-00', 'Latest Software To Your Possible Cutomers!!', 'latest-software-to-your-possible-cutomers', 'DEACTIVATE', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `create_date` date DEFAULT NULL,
  `media_gallery` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `embed_code` varchar(255) NOT NULL,
  `media_img` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `create_date`, `media_gallery`, `title`, `slug`, `status`, `description`, `embed_code`, `media_img`, `meta_description`, `meta_keyword`) VALUES
(2, '2021-06-13', 'slideshow', 'How It Work', 'how-it-work', '', '', '', '574254532f1e2c4b6555a03501d13bc8.PNG', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'talha', 'talha@gmail.com', 'talh');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `create_date`, `title`, `slug`, `status`, `message`, `meta_description`, `meta_keywords`, `category_id`) VALUES
(7, '0000-00-00', 'How It Work', 'how-it-work', '', '', '', '', 1),
(8, '0000-00-00', 'About PK SOL', 'about-pk-sol', '', '', '', '', 1),
(10, '0000-00-00', 'How It Work', 'how-it-work', 'DEACTIVATE', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `create_date`, `full_name`, `email`, `status`) VALUES
(4, '2009-12-02', 'talha', 'talha@gmail.com', 'DEACTIVE'),
(5, '0002-12-09', 'farhan', 'talha@gmail.com', 'DEACTIVE'),
(6, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(7, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(8, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(9, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(10, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(11, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(12, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(13, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(14, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(15, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(16, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(17, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(18, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(19, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(20, '0002-12-09', 'talha', 'talha@gmail.com', ''),
(21, '0002-12-09', 'talha', 'talha@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `webmaster`
--

CREATE TABLE `webmaster` (
  `id` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `media_img` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webmaster`
--

INSERT INTO `webmaster` (`id`, `create_date`, `full_name`, `email`, `profile`, `media_img`, `meta_description`, `meta_keyword`, `status`) VALUES
(6, '2021-04-25', 'Farhan Ali', 'furqanali0018@gmail.com', '', '8e62833dbe875dc598d0222b02bc4057.PNG', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webmaster`
--
ALTER TABLE `webmaster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `webmaster`
--
ALTER TABLE `webmaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
