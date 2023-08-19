-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2023 at 04:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `phone`, `password`, `created_at`, `update_at`) VALUES
(24, '879140496', 'Bruno Walton', 'luvel@mailinator.com', '01012370014', '$2y$10$xBWsPDxIK8ZB8n3oV.ZPeO/4vxm4S2oSQSpSQhvG8juOxXjiMy9u2(Pa$$w0rd!)', '2023-08-12 14:17:40', '2023-08-12 14:17:40'),
(25, '218754247', 'Drake Trujillo', 'wudukafe@mailinator.com', '01012334535', '$2y$10$VKqhnCIat6tSw3JLTiaYmu4ZfOa6fJcA2qxWVUT5WFhoUc0UCCeNy(Pa$$w0rd!)', '2023-08-12 14:21:06', '2023-08-12 14:21:06'),
(26, '207149811', 'Rana Cobb', 'wenevan@mailinator.com', '01012370013', '$2y$10$cE4UIk5eSepyieWTobLbDu202Sl/Ag50m3IkiJOwzxfFAJPfEbbTi(Pa$$w0rd!)', '2023-08-12 15:00:35', '2023-08-12 15:00:35'),
(27, '899090706', 'khaled Thornton', 'xuga@mailinator.com', '01012370043', '$2y$10$ChDAFRg.bPuKMiECtl8NeeC94MVODGO7c4FDceuRvB9eqqpK5qTqG(Pa$$w0rd!)', '2023-08-12 15:05:39', '2023-08-19 13:57:51'),
(28, '334825904', 'Omar Khaled', 'omar@gmail.com', '01012380014', '$2y$10$TW1fD0WohPYJh6yLaQNA/Oewka/VVpUTdjs6Zabz2YgIp9cG7Ot1W(12345466575)', '2023-08-19 13:31:05', '2023-08-19 13:31:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
