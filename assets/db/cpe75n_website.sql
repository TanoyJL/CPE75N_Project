-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 12:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpe75n_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `basketball`
--

CREATE TABLE `basketball` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `id_num` int(11) NOT NULL,
  `coure_year` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `years_experience` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `shooting_hand` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `IDNumber` int(32) NOT NULL,
  `Sport` varchar(32) NOT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coachuser`
--

CREATE TABLE `coachuser` (
  `id_coach` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `sport` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coachuser`
--

INSERT INTO `coachuser` (`id_coach`, `username`, `sport`, `password`) VALUES
(1, 'futsalcoach', 'futsal', 'futsalcoach'),
(3, 'footballcoach', 'football', 'footballcoach'),
(5, 'lawntenniscoach', 'lawntennis', 'lawntenniscoach'),
(7, 'basketballcoach', 'basketball', 'basketballcoach'),
(8, 'womensvoleyballcoach', 'womensvoleyball', 'womensvoleyballcoach'),
(9, 'mensvoleyballcoach', 'mensvoleyball', 'mensvoleyballcoach'),
(10, 'badmintoncoach', 'badminton', 'badmintoncoach'),
(11, 'tabletenniscoach', 'tabletennis', 'tabletenniscoach'),
(12, 'chesscoach', 'chess', 'chesscoach'),
(13, 'taekwondocoach', 'taekwondo', 'taekwondocoach'),
(14, 'karatedocoach', 'karatedo', 'karatedocoach'),
(15, 'swimmingcoach', 'swimming', 'swimmingcoach'),
(16, 'trackandfieldcoach', 'trackandfield', 'trackandfieldcoach');

-- --------------------------------------------------------

--
-- Table structure for table `football`
--

CREATE TABLE `football` (
  `id` int(12) NOT NULL,
  `id_num` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `birthdate` date NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `years_experience` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `kickingfoot` varchar(255) NOT NULL,
  `player_position` varchar(255) NOT NULL,
  `player_experience` varchar(255) NOT NULL,
  `rank_experience` longtext NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `course_year` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `gender` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `football`
--

INSERT INTO `football` (`id`, `id_num`, `first_name`, `last_name`, `age`, `birthdate`, `phone_number`, `email`, `address`, `years_experience`, `height`, `weight`, `kickingfoot`, `player_position`, `player_experience`, `rank_experience`, `remarks`, `course_year`, `created_at`, `gender`) VALUES
(11, '', '', '', 0, '0000-00-00', '', '', '', 0, 0, 0, 'right', 'defense', '', '', '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `futsal`
--

CREATE TABLE `futsal` (
  `id` int(11) NOT NULL,
  `kickingfoot` varchar(255) NOT NULL,
  `player_position` varchar(255) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `id_num` int(45) NOT NULL,
  `course_year` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `age` int(45) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `years_experience` varchar(45) NOT NULL,
  `height` int(45) NOT NULL,
  `weight` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `futsal`
--

INSERT INTO `futsal` (`id`, `kickingfoot`, `player_position`, `first_name`, `last_name`, `id_num`, `course_year`, `gender`, `age`, `birthdate`, `email`, `address`, `years_experience`, `height`, `weight`) VALUES
(1, 'right', 'defense', '', '', 0, '', '', 0, '0000-00-00', '', '', '', 0, 0),
(2, 'right', 'goal keeper', 'qwe', 'qwe', 123, 'bsshit', 'M', 12, '2012-09-09', 'rara@yahoo.com', 'qwe', '123', 123, 123),
(3, 'right', 'goal keeper', 'qwe', 'qwe', 123, 'bsshit', 'M', 12, '2012-09-09', 'rara@yahoo.com', 'qwe', '123', 123, 123);

-- --------------------------------------------------------

--
-- Table structure for table `headcoach`
--

CREATE TABLE `headcoach` (
  `IDNumber` int(11) NOT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lawntennis`
--

CREATE TABLE `lawntennis` (
  `hittinghand` varchar(45) NOT NULL,
  `preffered_categories` varchar(45) NOT NULL,
  `id` int(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `id_num` int(45) NOT NULL,
  `course_year` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `age` int(45) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `years_experience` int(45) NOT NULL,
  `height` int(45) NOT NULL,
  `weight` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sportstable`
--

CREATE TABLE `sportstable` (
  `IDSports` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `swimming`
--

CREATE TABLE `swimming` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `id_num` int(11) DEFAULT NULL,
  `course_year` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `birthdate` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `years_experience` int(11) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wvt`
--

CREATE TABLE `wvt` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `id_num` int(11) NOT NULL,
  `coure_year` text NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `years_experience` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `hittinghand` text NOT NULL,
  `position` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basketball`
--
ALTER TABLE `basketball`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`IDNumber`);

--
-- Indexes for table `coachuser`
--
ALTER TABLE `coachuser`
  ADD PRIMARY KEY (`id_coach`);

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `futsal`
--
ALTER TABLE `futsal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headcoach`
--
ALTER TABLE `headcoach`
  ADD PRIMARY KEY (`IDNumber`);

--
-- Indexes for table `lawntennis`
--
ALTER TABLE `lawntennis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportstable`
--
ALTER TABLE `sportstable`
  ADD PRIMARY KEY (`IDSports`);

--
-- Indexes for table `swimming`
--
ALTER TABLE `swimming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wvt`
--
ALTER TABLE `wvt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basketball`
--
ALTER TABLE `basketball`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `IDNumber` int(32) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coachuser`
--
ALTER TABLE `coachuser`
  MODIFY `id_coach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `football`
--
ALTER TABLE `football`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `futsal`
--
ALTER TABLE `futsal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `headcoach`
--
ALTER TABLE `headcoach`
  MODIFY `IDNumber` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lawntennis`
--
ALTER TABLE `lawntennis`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wvt`
--
ALTER TABLE `wvt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
