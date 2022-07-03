-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 07:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `token_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dibuat_tgl` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`token_id`, `token`, `email`, `dibuat_tgl`) VALUES
(30, 'vq9feALVnFcQnoqvNd7gaMTSPiTGBgqZTMvCO2peeek=', 'murid@sevima.com', '2022-07-03 12:45:17'),
(31, 'ivkhNHkz7sgx8GeUCqHJ7bTddbvKJ0tw4xkG6wkCMyY=', 'murid@sevima.com', '2022-07-03 12:47:35'),
(32, 'YLLCtvGbOYh0ofLM6xRTrGdWlA1uDhAFjZUSzG+whM4=', 'murid@sevima.com', '2022-07-03 12:48:42'),
(33, '3jdtPrDdVQurEGdMNZ6KxblYBl1YhW9EF18HaZXqNcA=', 'murid@sevima.com', '2022-07-03 12:48:54'),
(34, 'Jip80JhZTwngi/wCRgFJOHH/ktLOeELCOzlh7CLNAtc=', 'murid@sevima.com', '2022-07-03 12:48:56'),
(35, 'N6PGVhIbCvDwLSeX/Trxrk7oYhCzAcDNDqiQmWlhYu4=', 'murid@sevima.com', '2022-07-03 12:49:34'),
(36, 'K+95rfrn4dFemj3TpjL6q3HkxX6hiy27m6981VXcrpw=', 'murid@sevima.com', '2022-07-03 12:49:49'),
(37, 'BbbqJeyDIrhZBh9FdpByDmX/JqsTyXcWFF5xCE+KKA8=', 'murid@sevima.com', '2022-07-03 12:49:58'),
(38, '4CoiregZAEtQoy4CR/CTAy1f2/A9OFPBe1x2GYuzJq4=', 'murid@sevima.com', '2022-07-03 12:50:10'),
(39, 'cm1WUaYVt9gy/uDaMr13sUICeUTNFCpVlxVIVRKED9E=', 'murid@sevima.com', '2022-07-03 12:50:19'),
(40, 'VG2lq8aBiUTESyQr9eZnUnZHPa9G+wU+pVQxn8ku690=', 'murid@sevima.com', '2022-07-03 12:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `tgl_dibuat` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `nama`, `password`, `avatar`, `tgl_dibuat`, `last_login`) VALUES
(6, 'buchori@sevima.com', 'buchori@sevima.com', '81dc9bdb52d04dc20036dbd8313ed055', 'http://localhost:5555/assets/img/avatar/f002d7acd67e02692fb9eeb01700b083.png', '2022-07-03 09:35:53', '2022-07-03 12:37:09'),
(7, 'murid@sevima.com', 'Buchori', 'a384b6463fc216a5f8ecb6670f86456a', 'http://localhost:5555/assets/img/avatar/f002d7acd67e02692fb9eeb01700b083.png', '2022-07-03 12:37:34', '2022-07-03 12:38:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`token_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `token_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
