-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 12:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
  `IDSports` int(11) NOT NULL,
  `Shooting Hand` int(11) NOT NULL,
  `Player Position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coachuser`
--

CREATE TABLE `coachuser` (
  `IDCoach` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  `Sports` int(11) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `year_experience` int(255) NOT NULL,
  `height` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `kickingfoot` varchar(255) NOT NULL,
  `player_position` varchar(255) NOT NULL,
  `player_experience` varchar(255) NOT NULL,
  `rank_experience` longtext NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `course_year` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `headcoachuser`
--

CREATE TABLE `headcoachuser` (
  `IDHeadCoach` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  `Email` int(11) NOT NULL,
  `Password` int(11) NOT NULL,
  `Position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playing experience`
--

CREATE TABLE `playing experience` (
  `ID Playing Experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taekwando`
--

CREATE TABLE `taekwando` (
  `IDSports` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tryoutform`
--

CREATE TABLE `tryoutform` (
  `ID_TryoutForm` bigint(20) UNSIGNED NOT NULL,
  `ID_Sports` int(13) NOT NULL,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `IDNumber` int(32) NOT NULL,
  `CourseAndYear` varchar(32) NOT NULL,
  `Age` int(32) NOT NULL,
  `PlayerDateOfBirth` varchar(32) NOT NULL,
  `ContactPhoneNumber` int(32) NOT NULL,
  `ContactEMail` varchar(32) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `YearsOfPlayingExperience` int(32) NOT NULL,
  `IDPlayingExperience` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basketball`
--
ALTER TABLE `basketball`
  ADD PRIMARY KEY (`IDSports`);

--
-- Indexes for table `football`
--
ALTER TABLE `football`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playing experience`
--
ALTER TABLE `playing experience`
  ADD PRIMARY KEY (`ID Playing Experience`);

--
-- Indexes for table `taekwando`
--
ALTER TABLE `taekwando`
  ADD PRIMARY KEY (`IDSports`);

--
-- Indexes for table `tryoutform`
--
ALTER TABLE `tryoutform`
  ADD UNIQUE KEY `IDSports_2` (`ID_Sports`),
  ADD UNIQUE KEY `IDPlayingExperience` (`IDPlayingExperience`),
  ADD UNIQUE KEY `ID_TryoutForm` (`ID_TryoutForm`),
  ADD KEY `IDSports` (`ID_Sports`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `football`
--
ALTER TABLE `football`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tryoutform`
--
ALTER TABLE `tryoutform`
  MODIFY `ID_TryoutForm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tryoutform`
--
ALTER TABLE `tryoutform`
  ADD CONSTRAINT `tryoutform_ibfk_2` FOREIGN KEY (`IDPlayingExperience`) REFERENCES `playing experience` (`ID Playing Experience`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
