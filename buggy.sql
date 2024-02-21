-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 07:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buggy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bsc`
--

CREATE TABLE `bsc` (
  `students` varchar(66) NOT NULL,
  `teachers` varchar(66) NOT NULL,
  `cr` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bsc`
--

INSERT INTO `bsc` (`students`, `teachers`, `cr`) VALUES
('vishnu', 'bhuvan', 'pradeep'),
('student', 'teacher', 'cr');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(15) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `item`, `price`) VALUES
(1, 'IDLY', 20),
(2, 'DOSA', 40),
(3, 'vada', 0),
(4, 'Add To Cart', 0),
(5, 'jumbo', 0),
(6, 'Add To Cart', 0),
(7, 'Add To Cart', 0),
(8, 'Add To Cart', 0),
(9, 'Add To Cart', 0),
(10, 'dosa', 0),
(11, 'Add To Cart', 0),
(12, 'voda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `name` varchar(66) NOT NULL,
  `email` varchar(66) NOT NULL,
  `feedback` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`name`, `email`, `feedback`) VALUES
('vishnu', 'vardhan@gmail.com', 'hello'),
('vishnu vardhan', 'simome8393@netjook.com', '<script>alert(1)</script>'),
('smart', 'smart', 'smart'),
('vv', 'vvvvv', 'vvvvvvvvv'),
('vishnu', '@gmail.com', 'hello'),
('vishnu', '@gmail.com', 'heyy'),
('vishnu', 'FF0000', '<script>alert(1)</script>');

-- --------------------------------------------------------

--
-- Table structure for table `forgot password`
--

CREATE TABLE `forgot password` (
  `Email` varchar(22) NOT NULL,
  `Password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `deepak` int(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `searchh`
--

CREATE TABLE `searchh` (
  `name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchh`
--

INSERT INTO `searchh` (`name`) VALUES
(''),
('vishnu');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `name` varchar(66) NOT NULL,
  `Email` varchar(22) NOT NULL,
  `Password` varchar(22) NOT NULL,
  `Cpassword` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`name`, `Email`, `Password`, `Cpassword`) VALUES
('', 'John', 'vvv', ''),
('', 'John', 'vvv', ''),
('', 'fsdmcx@gmail.com', 'xz cvx', ''),
('', 'fsdmcx@gmail.com', 'xz cvx', ''),
('', 'fsdmcx@gmail.com', '<script>alert(1)</scri', ''),
('', 'fsdmcx@gmail.com', '<script>alert(1)</scri', ''),
('', 'fsdmcx@gmail.com', '<script>alert(1)</scri', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', 'fsdmcx@gmail.com', 'nmknm', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', 'vcvx@gmail.com', 'vcvx@gmail.com', ''),
('', 'fsdmcx@gmail.com', 'mmmmmm', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', 'ffdf@ggf.com', 'gfgfgfg', ''),
('', 'ffdf@ggf.com', 'gfgfgfg', ''),
('', 'vvvvv@gmail.com', 'cCDTT62hn4pqyN7', ''),
('', 'vvvvv@gmail.com', 'bbbbbbbbbbb', ''),
('', 'fsdmcx@gmail.com', 'nnnnnnnn', ''),
('', 'vishnu', 'vardhan', ''),
('', 'hhhhh', 'cCDTT62hn4pqyN7', ''),
('', 'vishnu', 'cCDTT62hn4pqyN7', ''),
('', '1', '1', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', '<script>alert(1)</scri', 'nnnnnnnnnn', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', 'ahmed<script>alert(0)', '<script>&lastName=moha', ''),
('', '<script>alert(1)</scri', 'ff', ''),
('', '<script>alert(1)</scri', ';', ''),
('', '<script>alert(1)</scri', '<script>alert(1)</scri', ''),
('', 'ccc', 'cc', ''),
('', 'fsdmcx@gmail.com', 'ccccccccc', 'ccccccccccc'),
('', 'fsdmcx@gmail.com', 'vishnu vardhan', 'vishnu vardhan'),
('name', 'vishnuvard@gmail.com', 'vishnu vardhan', 'vishnu vardhan'),
('name', 'admin', 'admin', 'admin'),
('name', 'administrator', 'administrator', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Email` varchar(22) NOT NULL,
  `Password` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `secret` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD UNIQUE KEY `search` (`deepak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
