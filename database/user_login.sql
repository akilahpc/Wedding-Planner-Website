-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 01:33 AM
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
-- Database: `user_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(20) NOT NULL,
  `usersName` varchar(150) NOT NULL,
  `usersEmail` varchar(150) NOT NULL,
  `usersUid` varchar(150) NOT NULL,
  `usersPwd` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(17, 'dbms', 'dbms@gmail.com', 'dbms', '$2y$10$FpX7IoU1ocrL7HFbPfrFI.yvpMmAzNOWiBw3OssJlMivj.rIuONUq'),
(18, 'akila', 'akila@gmail.com', 'akila', '$2y$10$vH1qM/5vvf1Geg0xrA7cteik4r76MICXRXQcyhxhoSQyt6wMDH85.'),
(23, 'hashan', 'hashanself20@gmail.com', 'hashan', '$2y$10$CQh6iOuunhldjg6IagOsR.2ZQT5902DbV3fVbtkNk2hRg73Eh5pRK'),
(24, 'amila', 'amila@gmail.com', 'amila', '$2y$10$U329l4Wy5foYRp0/9qn8pu.pgFHWlWgYgpVU9DVPNKqfT1JQCSaD.'),
(25, 'dasun', 'dasun@gmail.com', 'dasun', '$2y$10$9moyQ5j4KlzBzi/6ooBhX.2xPmMolIlVsl/yU5EdoNLdUdKFghjrm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
