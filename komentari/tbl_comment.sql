-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2017 at 07:09 PM
-- Server version: 5.6.37
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpsamples`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, '  asd', 'asd', '2017-12-14 07:54:57'),
(2, 0, '  sss', 'Vincy', '2017-12-14 07:56:01'),
(3, 2, '  ccc', 'xc', '2017-12-14 07:56:12'),
(4, 0, 'sdf  ', 'sdf', '2017-12-14 07:58:29'),
(5, 0, '  ', 'as', '2017-12-14 08:02:32'),
(6, 0, '  sdfsdf', 'dsfdsf', '2017-12-14 08:42:44'),
(7, 0, '  ssss', 'ss', '2017-12-14 08:42:55'),
(8, 3, 'New Comment  ', 'Vincy', '2017-12-14 12:33:03'),
(9, 2, 'jj  ', 'gh', '2017-12-14 12:39:21'),
(10, 2, 'jj  ', 'ghasdsd', '2017-12-14 12:39:35'),
(11, 0, '  asdasd', 'asdasd', '2017-12-14 12:40:01'),
(12, 1, '  asdasd', 'aasd', '2017-12-14 12:40:10'),
(13, 1, 'sss  ', 'sss', '2017-12-14 12:40:38'),
(14, 0, '  asdasd', 'asdasd', '2017-12-14 12:40:55'),
(15, 1, 'vvv', 'vvv', '2017-12-14 12:41:14'),
(16, 0, '  sss', 'sss', '2017-12-14 12:51:17'),
(17, 0, '  ', '', '2017-12-14 12:51:21'),
(18, 0, '  ', '', '2017-12-14 12:51:26'),
(19, 0, '  ss', 'ss', '2017-12-14 12:51:54'),
(20, 0, '  sdsd', 'sdsds', '2017-12-14 12:52:11'),
(21, 0, '  sdsd', 'sddsd', '2017-12-14 13:14:40'),
(22, 0, 'test  ', 'vincy', '2017-12-14 13:16:25'),
(23, 21, 'test', 'Reply added by vincy', '2017-12-14 13:16:52'),
(24, 20, 'reply for sdsd  ', 'vincy', '2017-12-14 13:17:24'),
(25, 0, '  ss', 'sss', '2017-12-14 13:23:59'),
(26, 12, 'rep for asdf  ', 'vin', '2017-12-14 13:26:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
