-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 06:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(255) NOT NULL,
  `user_last` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_uid` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Amir', 'Eskandari', 'aeskandari@arcmatic.com', 'aeskandari', '$2y$10$q4CgeSWlVDN109hFl55wTOHVrYw8wtIvh2d.6Y213OV71G29rLN4G'),
(2, 'Karen', 'Eskandari', 'keskandari@yahoo.com', 'kesk', '$2y$10$MThpHfXbvrtAj.uCKS2fXeB02.L./EFraBLMdB/CUKz3yTYqihFDO'),
(5, 'Esther', 'Eskandari', 'eses@yahoo.com', 'eaea', '$2y$10$QWP/KDGUqxEFRw0BdkKrSOApJD2hO3sdHzQvNduRmOobq8F9jrgam'),
(6, 'Amytis', 'Eskandari', 'amyesk@gmail.com', 'amyesk', '$2y$10$nQmxhk2jxUoT8P/nDyzmIO2eG795K53RfPxzWTyKGpUQXK8i2/7KO'),
(7, 'Atusa', 'Eskandari', 'atusa@gmail.com', 'atusa', '$2y$10$.l4IEB7knAoKYoj6o5As.OOqDFVQCmPgjsLiWbvU/WaHms.PJR76K'),
(8, 'Ramin', 'Araghian', 'ram@gmail.com', 'ramo', '$2y$10$IVrGXAZ9hXKe03Ji2uTkMeB/wurdSVbUMdJrJUIxFPxdPq4j.BIP2'),
(9, 'test', 'test', 'bsbx@dc.com', 'amir', '$2y$10$MA1HDu710tppZgtZPlHFye/QckeM616ko/DYNEs.0gh4YQlnkUmO6'),
(10, 'karen', 'eskandari', 'kareneskandari@gmail.com', 'GreatQKL', '$2y$10$rCRLXg/.A5APk4q6PG/csObLdAFXI.IzDA0ghpdp2wtRrOJWLZ9oG'),
(11, 'Azar', 'Eskandari', 'azar@gmail.com', 'azar', '$2y$10$d5tjrEbJMsqjGmj0JhoG5uxuYnlSntWZGfX9TULE5.0M8dKmpmXfy'),
(12, 'Reza', 'Eskandari', 'reza@web.de', 'reza', '$2y$10$vRKFmAUlqQgVAeNC04QPKevEuvber9SJtkbmp7QeOZU9r1xr69PdG'),
(13, 'John', 'John', 'john@web.de', 'johni', '$2y$10$cdcFjKhj7KUnFFisA6CAaO67QC34tFGrsN4juYniqg6uZLE2DlESu'),
(14, 'nin', 'nin', 'nintrom@web.de', 'nin', '$2y$10$z0gcpYz/hl8/hGFcnFvMpOda4ityVl3jXNht.5XjHj799MU/xAhuO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
