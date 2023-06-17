-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 08:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `name` varchar(81) NOT NULL,
  `email` varchar(81) NOT NULL,
  `address` varchar(91) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `username` varchar(51) NOT NULL,
  `password` varchar(71) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`name`, `email`, `address`, `mobile`, `username`, `password`) VALUES
('khaym', 'khaym2002@gmail.com', ' Wah Model Town Phase 1 Abdullah Street Lane 5 House 384/30 Wah Cantt', '0333-5535253', 'mnoor55', 'ghhjjkj'),
('jhfdjkhf', 'jnhdfsjh@gmail.com', ' jhdjshf', 'ncmxnz', 'kjdfksjkd', 'jhfdjsh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
