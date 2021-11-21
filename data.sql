-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 07:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survay`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(100) NOT NULL,
  `Surname` varchar(20) NOT NULL,
  `First_Names` varchar(20) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Age` int(200) NOT NULL,
  `Food` varchar(20) NOT NULL,
  `Eating_Out` varchar(20) NOT NULL,
  `Watch_Movies` varchar(20) NOT NULL,
  `Watch_TV` varchar(20) NOT NULL,
  `Radio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `Surname`, `First_Names`, `Contact`, `Date`, `Age`, `Food`, `Eating_Out`, `Watch_Movies`, `Watch_TV`, `Radio`) VALUES
(1, 'Bokaba', 'Tsholo', 2147483647, '0000-00-00', 22, 'Chicken stir fry', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree'),
(2, 'Bokaba', 'Tsholo', 2147483647, '2021-11-20', 21, 'Beef stir fry', 'Strongly disagree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree'),
(3, 'Nkgadima', 'Thato', 715553607, '0000-00-00', 23, 'Chicken stir fry', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree'),
(4, 'Jones', 'Katrin', 2147483647, '0000-00-00', 67, 'other', 'Disagree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree'),
(5, 'Masha', 'Martin', 2147483647, '0000-00-00', 18, 'Chicken stir fry', 'Disagree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree'),
(6, 'Masha', 'Martin', 2147483647, '0000-00-00', 18, 'Chicken stir fry', 'Disagree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree'),
(7, 'Maele', 'Naledi', 2147483647, '2021-11-26', 45, 'Pasta', 'Strongly disagree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree'),
(8, 'Leeba', 'Katlego', 2147483647, '2021-11-10', 33, 'Pap and Wors', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree', 'Strongly Agree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
