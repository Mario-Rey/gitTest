-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 11:38 AM
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
-- Database: `rpg_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `mob`
--

CREATE TABLE `mob` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `hp` int(20) NOT NULL,
  `maxHp` int(11) NOT NULL,
  `strength` int(11) NOT NULL,
  `defenses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mob`
--

INSERT INTO `mob` (`id`, `name`, `hp`, `maxHp`, `strength`, `defenses`) VALUES
(1, 'Poulet', 100, 100, 100, 1),
(2, 'zombie', 91, 150, 150, 150),
(3, 'Fermier', 1000, 1000, 1500, 1500),
(4, 'Mage', 884, 1500, 1900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL,
  `hp` bigint(20) NOT NULL DEFAULT 100,
  `hpMax` int(11) NOT NULL DEFAULT 100,
  `xp` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `strength` int(11) NOT NULL DEFAULT 50,
  `defense` int(11) NOT NULL DEFAULT 50
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `name`, `password`, `class`, `hp`, `hpMax`, `xp`, `level`, `strength`, `defense`) VALUES
(18, '333', '$2y$10$itZK8GDmUzYqWTXmU.Umre.', 'Chevalier', 777, 880, 500, 21, 308, 308),
(19, 'Ma', '$2y$10$v/ffnRY7rr8XElBnLDRAkep', 'Mage', 100, 100, 0, 0, 50, 50),
(20, '22223', '$2y$10$xe2XTVQo7qGJ0eYvcP27Huz', 'Chevalier', 100, 100, 0, 0, 50, 50),
(21, 'sds', '$2y$10$XdEVtg9RvkdnxROPuLolnui', 'Guerrier', 208, 210, 13000, 11, 14010, 14010),
(22, 'fddf', '$2y$10$091yCOCS7ullqyeGla6ySel', 'Mage', 100, 100, 0, 0, 50, 50),
(23, 'dddd', '$2y$10$S3gq6E2pAnI9ar6NVIVitOj', 'Mage', 100, 100, 700, 11, 1700, 50),
(24, '111', '$2y$10$XyT40sGq.HzyDWUhoxbbm.9', 'Mage', 96, 100, 0, 1, 200, 50),
(25, '222', '$2y$10$LNKabHnFQYn/YhiZTlprfeE', 'Chevalier', 100, 100, 0, 0, 50, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mob`
--
ALTER TABLE `mob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mob`
--
ALTER TABLE `mob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
