-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 07:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabme`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_telephone` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `career_des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `c_name`, `c_telephone`, `email`, `career_des`) VALUES
(1, 'amal', 0, 'amal@gmail.com', ''),
(2, 'nimal', 0, 'fff@gmail.com', ''),
(3, 'nimal', 0, 'amal@gmail.com', ''),
(4, 'sdfads', 0, 'amal@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'hasa', 'hasa@gmail.com', 'how can i contact you?? '),
(2, 'maheshi', 'maheshi@gmail.com', 'good '),
(3, 'hasa', 'maheshi@gmail.com', ' sdadsdsad');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `feedback_describe` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_ID`, `Name`, `Email`, `feedback_describe`) VALUES
(1, 'rr', 'rr', 'rrrr'),
(2, 'hasa', 'hasa@gmail.com', 'good'),
(3, 'nimal', 'nimal@gmail.com', 'good'),
(4, 'kamal', 'kamal@gmail.com', 'v good'),
(5, 'pink', 'pinky@abs.com', 'v good'),
(10, 'kamal', 'amal@gmail.com', 'v good');

-- --------------------------------------------------------

--
-- Table structure for table `insertcabs`
--

CREATE TABLE `insertcabs` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `nicnum` varchar(100) NOT NULL,
  `mobilenum` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `vehiclenum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insertcabs`
--

INSERT INTO `insertcabs` (`id`, `firstname`, `lastname`, `nicnum`, `mobilenum`, `brand`, `model`, `vehiclenum`) VALUES
(1, 'Gayan', 'Sadharu', '657834921V', 763427451, 'Suzuki', 'Suzuki swift', 'KQ5234'),
(2, 'Amal', 'Kumara', '557634921V', 779437451, 'Maruti', 'Maruti 800cc', 'KH2007'),
(3, 'Ravinda', 'Dissanayaka', '967635921V', 727433745, 'Suzuki', 'Suzuki Wagon R', 'KZ2017'),
(4, 'Chamindha', 'Fernando', '727635921V', 777933745, 'Toyota', 'daazvw30 prius', 'KT7903'),
(5, 'hasa', 'wije', '123', 123, 'pontiac', 'transam', 'kq1234'),
(12, 'after', 'after', '32', 23423423, '2334324234', 'dsaedf', '2423dd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ownerr` int(8) NOT NULL,
  `cvv` varchar(55) NOT NULL,
  `cardd` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ownerr`, `cvv`, `cardd`) VALUES
(0, '4454', '4716 1089 9971 6531'),
(0, '4454', '4716 1089 9971 6531'),
(0, '123', '1234567891011121'),
(0, '123', '1232345346547678'),
(0, '123', '1232345346547678'),
(0, '123', '2134143431412344');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `Promo_Id` int(11) NOT NULL,
  `Promo_code` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

CREATE TABLE `ride` (
  `ride_id` int(11) NOT NULL,
  `ride_type` varchar(100) NOT NULL,
  `ride_pick` varchar(100) NOT NULL,
  `ride_drop` varchar(100) NOT NULL,
  `ride_date` varchar(100) NOT NULL,
  `ride_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`ride_id`, `ride_type`, `ride_pick`, `ride_drop`, `ride_date`, `ride_time`) VALUES
(1, 'on', 'kkkk', 'dasd', '2020-11-03', '15:04'),
(19, 'on', 'juhjhgbvjh', 'dasd', '2020-11-18', '15:04'),
(20, 'on', 'juhjhgbvjh', 'dasd', '2020-11-18', '15:04'),
(21, 'on', 'juhjhgbvjh', 'dasd', '2020-11-18', '15:04'),
(22, 'on', 'u', 'liljlm', '2020-06-02', '18:08'),
(23, 'on', 'gdfg', 'sgdfgh', '2020-10-23', '17:07'),
(24, 'on', 'gdfg', 'sgdfgh', '2020-10-23', '17:07'),
(25, 'on', 'gdfg', 'sgdfgh', '2020-10-23', '17:07'),
(26, 'on', 'kandy', 'colombo', '2020-11-11', '11:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'abc', 'fff@gmail.com', '6a89a5875a4621f527210687c8f8e868', '2020-10-22 09:31:13'),
(2, 'fjk', 'fff@gmail.com', '2c481db73137b175382aa04c829900e8', '2020-10-22 09:31:46'),
(3, 'hasa', 'fff@gmail.com', 'b3e232550a910f3bcf9a2dfd8b6889db', '2020-10-22 09:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_ID`),
  ADD KEY `feedback_ID` (`feedback_ID`);

--
-- Indexes for table `insertcabs`
--
ALTER TABLE `insertcabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`Promo_Id`);

--
-- Indexes for table `ride`
--
ALTER TABLE `ride`
  ADD PRIMARY KEY (`ride_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `insertcabs`
--
ALTER TABLE `insertcabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `Promo_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ride`
--
ALTER TABLE `ride`
  MODIFY `ride_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
