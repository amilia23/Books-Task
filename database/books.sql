-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 04:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurulamiliashafaai`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `picture`, `category`, `author`) VALUES
(1, 'The Bed Book of Short Stories', 'book1.jpg', 'Fiction', 'Joanne Hichens'),
(2, 'Timeless tales from Panchatantra', 'book2.jpg', 'Fiction', 'Robert Johnson'),
(3, 'Bedtime Stories', 'book4.jpg', 'Fiction', 'Razali Ayob'),
(4, 'Gemma', 'book5.jpg', 'Fiction', 'Daniel Errico'),
(5, 'Anak Gagak Berdikari', 'book6.jpg', 'Fiction', 'Intan Mawardah Ali'),
(6, 'Sang Kancil dan Anjing Pemburu', 'book7.jpg', 'Text book', 'Nur Mazni Ibrahim'),
(7, 'Ayam dengan Cincin Ajaib', 'book8.jpg', 'Fiction', 'Azidah Aziz'),
(8, 'Bawang Merah Bawang Putih', 'book9.jpg', 'Fiction', 'Mohd Izhair Abdullah'),
(9, 'Kisah Awang Tangan Besar', 'book10.jpg', 'Fiction', 'Muadz Aliman'),
(10, 'Apa yang Bergerak', 'book11.jpg', 'Text book', 'Alia Nina'),
(11, 'Amazing Kimia ', 'book3.jpg', 'Text book', 'Loh Wai Long');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
