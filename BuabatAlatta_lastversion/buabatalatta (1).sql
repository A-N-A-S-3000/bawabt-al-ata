-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 07:50 PM
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
-- Table structure for table `donation_orders`
--

CREATE TABLE `donation_orders` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `donation_type` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_orders`
--

INSERT INTO `donation_orders` (`first_name`, `last_name`, `username`, `donation_type`, `quantity`) VALUES
('muhanad', 'alhabs', 'alhabsimuhanad@gmail.com', 'sadaka', 5),
('muhanad', 'alhabs', 'alhabsimuhanad@gmail.com', 'zaka', 4),
('muhanad', 'alhabs', 'alhabsimuhanad@gmail.com', 'pay for students fees', 3),
('muhanad', 'alhabs', 'alhabsimuhanad@gmail.com', 'sadaka', 5),
('muhanad', 'alhabs', 'alhabsimuhanad@gmail.com', 'zaka', 4),
('muhanad', 'alhabs', 'alhabsimuhanad@gmail.com', 'pay for students fees', 3),
('muhanad', 'alhabs', 'alhabsimuhanad@gmail.com', 'pay for our brothers in sudan', 33),
('fff', 'ffff', 'fffff', 'sadaka', 2);

-- --------------------------------------------------------

--
-- Table structure for table `questioner_ans`
--

CREATE TABLE `questioner_ans` (
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `donation_defecality` varchar(200) NOT NULL,
  `voleenter_difficality` varchar(200) NOT NULL,
  `store_difficalty` varchar(200) NOT NULL,
  `improved_page` varchar(200) NOT NULL,
  `satisfication` int(2) NOT NULL,
  `difficalities` varchar(200) NOT NULL,
  `suggestions` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questioner_ans`
--

INSERT INTO `questioner_ans` (`age`, `gender`, `donation_defecality`, `voleenter_difficality`, `store_difficalty`, `improved_page`, `satisfication`, `difficalities`, `suggestions`, `email`) VALUES
('less than ', 'male', 'smooth', 'helpful', 'Somewhat, but could use more variety', 'donation,home', 9, 'gfrtftrggtr', 'fvafrfesfgrgftr', 'ddedeed@gmail.com'),
('18-25', 'male', 'smooth', 'helpful', 'Yes, a wide selection', 'store', 0, 'fvfvfvfvfv', 'dddv', 's140020@student.squ.edu.om'),
('18-25', 'male', 'smooth', 'helpful', 'Yes, a wide selection', 'store', 0, 'fvfvfvfvfv', 'dddv', 's140020@student.squ.edu.om'),
('18-25', 'male', 'smooth', 'helpful', 'Yes, a wide selection', 'store', 0, 'fvfvfvfvfv', 'dddv', 's140020@student.squ.edu.om'),
('18-25', 'male', 'smooth', 'helpful', 'Yes, a wide selection', 'store', 0, 'fvfvfvfvfv', 'dddv', 's140020@student.squ.edu.om'),
('18-25', 'male', 'smooth', 'helpful', 'Yes, a wide selection', 'store', 0, 'fvfvfvfvfv', 'dddv', 's140020@student.squ.edu.om'),
('18-25', 'male', 'smooth', 'helpful', 'Yes, a wide selection', 'store', 0, 'fvfvfvfvfv', 'dddv', 's140020@student.squ.edu.om'),
('less than ', 'male', 'Difficult\r\n        ', 'Not helpful, difficult to find relevant information', 'No, limited options available', 'store', 10, 'no, the best', 'no', 'Muhangtftftfutjuyfyukfi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `store_orders`
--

CREATE TABLE `store_orders` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `order_id` int(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `Box` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store_orders`
--

INSERT INTO `store_orders` (`first_name`, `last_name`, `username`, `order_id`, `quantity`, `Box`) VALUES
('ddd', 'ddd', 'ddd', 0, 2, 'Box (All items)'),
('ddd', 'ddd', 'ddd', 0, 1, 'Box (fruits)'),
('ddd', 'ddd', 'ddd', 0, 1, 'Box (Essencial -M-)'),
('ddd', 'ddd', 'ddd', 0, 1, 'Box (Cloths -S-)'),
('ddd', 'ddd', 'ddd', 0, 1, 'Box (Cloths -M-)'),
('ddd', 'ddd', 'ddd', 0, 1, 'Box (Essencial -S-)'),
('hh', 'gg', 'g', 0, 1, 'Box (All items)'),
('hh', 'gg', 'g', 0, 1, 'Box (fruits)'),
('hh', 'gg', 'g', 0, 1, 'Box (Essencial -M-)'),
('hh', 'gg', 'g', 0, 2, 'Box (Cloths -S-)'),
('hh', 'gg', 'g', 0, 1, 'Box (Cloths -M-)'),
('hh', 'gg', 'g', 0, 1, 'Box (Essencial -S-)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'meow', 'meow'),
(3, 'ddd', 'ddd'),
(4, 'hamza', 'hhhhaa'),
(5, 'hamza@oam.gmail', 'hanama'),
(6, 'ali@oam.gmail', 'ali12343'),
(7, 'ahmed@oam.gmail', 'ahmed1234'),
(8, 'salim@oam.gmail', 'salim');

-- --------------------------------------------------------

--
-- Table structure for table `vollenteer`
--

CREATE TABLE `vollenteer` (
  `vollenteer_name` varchar(50) NOT NULL,
  `vollenteer_number` int(10) NOT NULL,
  `vollenteer_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vollenteer`
--

INSERT INTO `vollenteer` (`vollenteer_name`, `vollenteer_number`, `vollenteer_type`) VALUES
('alhabsimuhanad@gmail.com', 12345678, 'box manager'),
('salim', 98888888, 'Carpentry'),
('ali', 98889999, 'box manager'),
('ahmed', 99999999, 'Driver'),
('saeed', 99998888, 'Carpentry'),
('asad', 99977888, 'Driver'),
('Hamza', 99999999, 'box manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
