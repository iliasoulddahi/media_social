-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 03:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medsos-kel4`
--

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

CREATE TABLE `friendship` (
  `friendship_id` int(11) NOT NULL,
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `friend_request_id` int(11) NOT NULL,
  `requester_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(1024) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `profile_image` varchar(1024) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `gender`, `profile_image`, `verified`, `date_created`) VALUES
(1, 'user demo1', 'demo1@email.com', '$2y$10$xxs7P5nNPWXuA7elX0bL5e9IYjQHLj9CI4jKNauD/86Ba91RzV1ha', 'pria', 'default_profil_pria.jpg', 1, '2021-10-18 08:38:15'),
(2, 'user demo2', 'demo2@email.com', '$2y$10$a4EfQHLzLVx/Lbkdh3L48Oo4jnXakfDpazH6gPn/nl/8ghrXx1JQa', 'wanita', 'default_profil_wanita.jpg', 1, '2021-10-18 08:38:40'),
(3, 'user demo3', 'demo3@email.com', '$2y$10$oQ2It9Y3rZmCNZfBbg8VA.0DWmXGu.eGUAYTXLC92qRZ94.7BH/Me', 'pria', 'default_profil_pria.jpg', 1, '2021-10-18 08:39:05'),
(4, 'user demo4', 'demo4@email.com', '$2y$10$PW3ouEaHciBDi8Q1lddrt.DAMrwPlUaa.L0pzDaSrUyew5xj6vNBS', 'wanita', 'default_profil_wanita.jpg', 1, '2021-10-20 16:43:32'),
(5, 'user demo5', 'demo5@email.com', '$2y$10$7v8.Ti0f4nykX5tHJfIwTeN62z.FpLnC8UcIl0oA7k6RABuAYbSqy', 'pria', 'default_profil_pria.jpg', 1, '2021-10-20 16:43:56'),
(6, 'user demo6', 'demo6@email.com', '$2y$10$FDPG2U5KIH63ougmqJ83puH8BVYGX.CwWG2aKzUnvC8nuC15fYm4e', 'wanita', 'default_profil_wanita.jpg', 1, '2021-10-21 18:56:24'),
(7, 'user demo7', 'demo7@email.com', '$2y$10$MqD/dQrLcOlpGPLzSfrWc.d8jLyEweDoeP.6RzFsxD/ioGMZX0O56', 'pria', 'default_profil_pria.jpg', 1, '2021-10-21 21:18:19'),
(8, 'user demo8', 'demo8@email.com', '$2y$10$xYxwZQn1IOyWbFPhFWeV2u2QaZV2xC3dSrt3JDvG.u5tZpUCSVT66', 'pria', 'default_profil_pria.jpg', 1, '2021-10-21 23:15:11'),
(9, 'user demo9', 'demo9@email.com', '$2y$10$qWKe71RldQMeEZMq3VUt.OtbIRixlCFpRn9lEkT8OkdONAXngg.zu', 'pria', 'default_profil_pria.jpg', 1, '2021-10-21 23:51:01'),
(10, 'user demo10', 'demo10@email.com', '$2y$10$oC/vmpkd1xc/nWaLzIPlLuH1ILbIydPUxuS6dUZBeXg2g1pGvUgpe', 'pria', 'default_profil_pria.jpg', 1, '2021-10-22 00:06:46'),
(11, 'user demo11', 'demo11@email.com', '$2y$10$vbQQ2pctbNsO8nxjRgVZz.NZKhS5/e/tLWs/m0BwXE3x3maj9NSMu', 'pria', 'default_profil_pria.jpg', 1, '2021-10-22 11:13:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friendship`
--
ALTER TABLE `friendship`
  ADD PRIMARY KEY (`friendship_id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`friend_request_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friendship`
--
ALTER TABLE `friendship`
  MODIFY `friendship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `friend_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
