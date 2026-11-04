-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2026 at 10:16 AM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Laptop'),
(2, 'Mouse'),
(3, 'Keyboard'),
(4, 'Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(15,2) NOT NULL DEFAULT 0.00,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `created_at`, `category_id`) VALUES
(1, 'Laptop Lenovo', 7500000.00, 2, '2026-11-02 07:28:10', 1),
(2, 'Mouse Logitech', 250000.00, 10, '2026-11-02 07:28:10', 2),
(3, 'Keyboard Mechanical', 850000.00, 5, '2026-11-02 07:28:10', 3),
(4, 'Monitor LG 24 Inch', 1800000.00, 8, '2026-11-04 07:40:01', 1),
(5, 'SSD Samsung 500GB', 750000.00, 20, '2026-11-04 07:40:01', 1),
(6, 'RAM Kingston 8GB', 450000.00, 25, '2026-11-04 07:40:01', 1),
(7, 'Flashdisk Sandisk 64GB', 90000.00, 50, '2026-11-04 07:40:01', 1),
(8, 'Webcam Logitech C270', 450000.00, 12, '2026-11-04 07:40:01', 2),
(9, 'Headset Rexus', 250000.00, 18, '2026-11-04 07:40:01', 2),
(10, 'Speaker Simbadda', 175000.00, 14, '2026-11-04 07:40:01', 4),
(11, 'Mouse Pad Gaming', 60000.00, 40, '2026-11-04 07:40:01', 4),
(12, 'Keyboard Wireless', 300000.00, 22, '2026-11-04 07:40:01', 2),
(13, 'Printer Epson L3210', 2300000.00, 5, '2026-11-04 07:40:01', 1),
(14, 'Router TP-Link', 350000.00, 16, '2026-11-04 07:40:01', 4),
(15, 'Kabel HDMI 2m', 45000.00, 60, '2026-11-04 07:40:01', 4),
(16, 'Charger Laptop Universal', 220000.00, 15, '2026-11-04 07:40:01', 4),
(17, 'Tas Laptop 14 Inch', 180000.00, 30, '2026-11-04 07:40:01', 4),
(18, 'Cooling Pad', 120000.00, 17, '2026-11-04 07:40:01', 4),
(19, 'Hub USB 4 Port', 85000.00, 35, '2026-11-04 07:40:01', 4),
(20, 'Stabilizer 1000VA', 400000.00, 9, '2026-11-04 07:40:01', 4),
(21, 'Mouse Wireless Logitech', 200000.00, 28, '2026-11-04 07:40:01', 2),
(22, 'Laptop Asus Vivobook', 8500000.00, 4, '2026-11-04 07:40:01', 1),
(23, 'Laptop HP 14s', 7800000.00, 6, '2026-11-04 07:40:01', 1),
(24, 'Harddisk Eksternal 1TB', 800000.00, 11, '2026-11-04 07:40:01', 1),
(25, 'Microphone USB', 275000.00, 13, '2026-11-04 07:40:01', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Calvin', '$2y$10$wM9bqaMqvzQs8GpPM2m98.6kqoQLgScDT8Rfo0FcTPe0oZ9X3SzO.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
