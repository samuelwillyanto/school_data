-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 11:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `gender`, `phone_num`, `age`, `position`, `address`) VALUES
(1, 'Budi', 'M', '081234567890', 35, 'Headmaster', 'Jl. Anggrek Raya no. 15'),
(2, 'Mita', 'F', '089853214100', 28, 'Social Teacher', 'Jl. Kemangi no. 12'),
(3, 'John', 'M', '084595622100', 30, 'Sports Teacher', 'Jl. Mangga no. 20'),
(4, 'Putri', 'F', '0878754122100', 27, 'History Teacher', 'Jl. Taman no. 77'),
(5, 'Tia', 'F', '089552200122', 26, 'Science Teacher', 'Jl. Kedondong no. 11'),
(8, 'Dian', 'F', '087878877877', 32, 'Physics Teacher', 'Jl. Melati no. 13'),
(9, 'Yura', 'F', '081111111333', 26, 'Math Teacher', 'Jl. Nila no. 8'),
(10, 'Dona', 'F', '081215113155', 28, 'Physics Teacher', 'Jl. Timur no. 99'),
(11, 'Doni', 'M', '081444444444', 38, 'Sports Teacher', 'Jl. Kemangi no. 15'),
(12, 'Donald', 'M', '08999999799', 34, 'Math Teacher', 'Jl. Melati no. 41'),
(13, 'Agus', 'M', '085555555533', 31, 'Chemistry Teacher', 'Jl. Amanda no. 3'),
(14, 'Joni', 'M', '087878877999', 30, 'Religion Teacher', 'Jl. Maharaya no. 44'),
(15, 'Sri', 'F', '081215111234', 27, 'Science Teacher', 'Jl. Anggrek Raya no. 66'),
(16, 'Sonia', 'F', '081444443632', 26, 'Physics Teacher', 'Jl. Apel no. 12'),
(17, 'Mira', 'F', '081215114865', 28, 'Computer Teacher', 'Jl. Mangga no. 20'),
(18, 'Eka', 'F', '08999997895', 33, 'Social Teacher', 'Jl. Moka no. 61');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
