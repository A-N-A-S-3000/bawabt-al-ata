-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 09:36 PM
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
-- Database: `buabatalatta`
--

-- --------------------------------------------------------

--
-- Table structure for table `vollenteer`
--

CREATE TABLE `vollenteer` (
  `vollenteer_name` varchar(20) NOT NULL,
  `vollenteer_number` varchar(10) NOT NULL,
  `vollenteer_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vollenteer`
--

INSERT INTO `vollenteer` (`vollenteer_name`, `vollenteer_number`, `vollenteer_type`) VALUES
('Hamza', '22222222', 'Driver'),
('Hamza', '22222222', 'Driver'),
('Hamza', '22222222', 'Driver'),
('Hamza', '22222222', 'Driver'),
('Hamza', '22222222', 'Driver'),
('Hamza', '22222222', 'box manager');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
