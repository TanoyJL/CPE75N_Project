-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 04:55 PM
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
-- Table structure for table `badminton`
--

CREATE TABLE `badminton` (
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
-- Table structure for table `basketball`
--

CREATE TABLE `basketball` (
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
  `weight` int(45) NOT NULL,
  `shooting_hand` varchar(45) NOT NULL,
  `position5` varchar(45) DEFAULT NULL,
  `position1` varchar(45) DEFAULT NULL,
  `position2` varchar(45) DEFAULT NULL,
  `position3` varchar(45) DEFAULT NULL,
  `position4` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basketball`
--

INSERT INTO `basketball` (`id`, `first_name`, `last_name`, `id_num`, `course_year`, `gender`, `age`, `birthdate`, `email`, `address`, `years_experience`, `height`, `weight`, `shooting_hand`, `position5`, `position1`, `position2`, `position3`, `position4`) VALUES
(1, '1', '1', 1, '1', 'M', 1, '0001-01-01', '1@yahoo.com', '1', 1, 1, 1, 'right', NULL, 'yes', 'yes', 'yes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chess`
--

CREATE TABLE `chess` (
  `Id` int(45) NOT NULL,
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
(7, 'lebron', 'basketball', 'qwerty'),
(8, 'womensvoleyballcoach', 'womensvoleyball', 'womensvoleyballcoach'),
(9, 'mensvoleyballcoach', 'mensvoleyball', 'mensvoleyballcoach'),
(10, 'badmintoncoach', 'badminton', 'badmintoncoach'),
(11, 'tabletenniscoach', 'tabletennis', 'tabletenniscoach'),
(12, 'chesscoach', 'chess', 'chesscoach'),
(13, 'taekwondocoach', 'taekwondo', 'taekwondocoach'),
(14, 'karatedocoach', 'karatedo', 'karatedocoach'),
(15, 'swimmingcoach', 'swimming', 'swimmingcoach'),
(16, 'trackandfieldcoach', 'trackandfield', 'trackandfieldcoach'),
(27, 'headCoach', 'head', 'headCoach');

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
-- Table structure for table `karatedo`
--

CREATE TABLE `karatedo` (
  `id` int(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `id_num` int(45) NOT NULL,
  `course_year` int(45) NOT NULL,
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
-- Table structure for table `mvt`
--

CREATE TABLE `mvt` (
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
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `id_num` int(11) NOT NULL,
  `course_year` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `players_date_of_birth` date NOT NULL,
  `contact_phone_number` int(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `years_of_playing_experience` int(255) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `playerexperience_nationalteam` varchar(255) DEFAULT NULL,
  `playerexperience_nationalteam_rank` varchar(255) DEFAULT NULL,
  `playerexperience_national_PRISAA` varchar(255) DEFAULT NULL,
  `playerexperience_national_PRISAA_rank` varchar(255) DEFAULT NULL,
  `playerexperience_regional_PRISAA` varchar(255) DEFAULT NULL,
  `playerexperience_regional_PRISAA_rank` varchar(255) DEFAULT NULL,
  `playerexperience_UNI_games` varchar(255) DEFAULT NULL,
  `playerexperience_UNI_games_rank` varchar(255) DEFAULT NULL,
  `playersexperience_UNI_games_rank` varchar(255) DEFAULT NULL,
  `playerexperience_PH_national_games` varchar(255) DEFAULT NULL,
  `playerexperience_PH_national_games_rank` varchar(255) DEFAULT NULL,
  `playerexperience_palarong_pambansa` varchar(255) DEFAULT NULL,
  `playerexperience_palarong_pambansa_rank` varchar(255) DEFAULT NULL,
  `playerexperience_CVIRAA` varchar(255) DEFAULT NULL,
  `playerexperience_CVIRAA_rank` varchar(255) DEFAULT NULL,
  `playerexperience_highschool_only` varchar(255) DEFAULT NULL,
  `playerexperience_highschool_only_rank` varchar(255) DEFAULT NULL,
  `playerexperience_others` varchar(255) DEFAULT NULL,
  `playerexperience_others_rank` varchar(255) DEFAULT NULL,
  `back_stroke_50_meter` varchar(255) DEFAULT NULL,
  `back_stroke_100_meter` varchar(255) DEFAULT NULL,
  `back_stroke_200_meter` varchar(255) DEFAULT NULL,
  `free_style_50_meter` varchar(255) DEFAULT NULL,
  `free_style_100_meter` varchar(255) DEFAULT NULL,
  `free_style_200_meter` varchar(255) DEFAULT NULL,
  `free_style_400_meter` varchar(255) DEFAULT NULL,
  `free_style_800_meter` varchar(255) DEFAULT NULL,
  `free_style_1500_meter` varchar(255) DEFAULT NULL,
  `butterfly_50_meter` varchar(255) DEFAULT NULL,
  `butterfly_100_meter` varchar(255) DEFAULT NULL,
  `butterfly_200_meter` varchar(255) DEFAULT NULL,
  `breast_stroke_50_meter` varchar(255) DEFAULT NULL,
  `breast_stroke_100_meter` varchar(255) DEFAULT NULL,
  `breast_stroke_200_meter` varchar(255) DEFAULT NULL,
  `individual_medley_200_meter` varchar(255) DEFAULT NULL,
  `individual_medley_400_meter` varchar(255) DEFAULT NULL,
  `approval` varchar(255) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swimming`
--

INSERT INTO `swimming` (`id`, `firstname`, `lastname`, `id_num`, `course_year`, `gender`, `age`, `players_date_of_birth`, `contact_phone_number`, `contact_email`, `address`, `years_of_playing_experience`, `height`, `weight`, `playerexperience_nationalteam`, `playerexperience_nationalteam_rank`, `playerexperience_national_PRISAA`, `playerexperience_national_PRISAA_rank`, `playerexperience_regional_PRISAA`, `playerexperience_regional_PRISAA_rank`, `playerexperience_UNI_games`, `playerexperience_UNI_games_rank`, `playersexperience_UNI_games_rank`, `playerexperience_PH_national_games`, `playerexperience_PH_national_games_rank`, `playerexperience_palarong_pambansa`, `playerexperience_palarong_pambansa_rank`, `playerexperience_CVIRAA`, `playerexperience_CVIRAA_rank`, `playerexperience_highschool_only`, `playerexperience_highschool_only_rank`, `playerexperience_others`, `playerexperience_others_rank`, `back_stroke_50_meter`, `back_stroke_100_meter`, `back_stroke_200_meter`, `free_style_50_meter`, `free_style_100_meter`, `free_style_200_meter`, `free_style_400_meter`, `free_style_800_meter`, `free_style_1500_meter`, `butterfly_50_meter`, `butterfly_100_meter`, `butterfly_200_meter`, `breast_stroke_50_meter`, `breast_stroke_100_meter`, `breast_stroke_200_meter`, `individual_medley_200_meter`, `individual_medley_400_meter`, `approval`, `comment`) VALUES
(3, 'fdsfdsyfd', 'easrt', 234567, 'rertre', 'Female', 234567, '0067-05-31', 2345678, 'rsrtr@tdtdd', 'resrsrs', 23456, 2134567, 2345, 'yes', '2nd', NULL, 'gold', 'yes', 'silver', 'yes', '3rd', NULL, NULL, '', NULL, NULL, NULL, '', NULL, '', '', '', NULL, 'yes', NULL, 'yes', 'yes', 'yes', NULL, NULL, NULL, NULL, 'yes', 'yes', NULL, 'yes', 'yes', 'yes', NULL, 'approved', ' lame shange bayhana lame'),
(4, '345qewqe', 'qweqw', 12312312, 'qwewq', 'Male', 12312, '1312-03-12', 12321321, 'rewrwe@wqewq', 'qwewqe', 12312, 12321, 1312, 'yes', '1', NULL, '1', 'yes', '1', 'yes', '1', NULL, 'yes', '1', NULL, NULL, 'yes', '1', 'yes', '1', '', '', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL),
(5, 'Harry', 'Potter', 13102223, 'BSCpE4', 'Male', 20, '1995-07-31', 4145623, 'hpotter@yahoo.com', 'Little Whinging, Surrey', 2, 20, 60, NULL, '', NULL, '', NULL, '', NULL, '', NULL, NULL, '', NULL, '', 'yes', '', 'yes', '', '', '', 'yes', NULL, NULL, 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, 'approved', NULL),
(8, 'Benedict', 'Cumberbitch', 131048955, 'BS Cpe 3', 'Male', 21, '0034-02-12', 909090909, 'benidect_bitch@yahoo.com', 'baker street', 5, 21, 21, 'yes', '1st', 'yes', '1st', 'yes', '1st', 'yes', '1st', NULL, 'yes', '1st', 'yes', '1st', 'yes', '1st', 'yes', '1st', 'BATO LATO OLYMPICS', '1st', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, ' Sherlock Holmes Bitch');

-- --------------------------------------------------------

--
-- Table structure for table `tabletennis`
--

CREATE TABLE `tabletennis` (
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
-- Table structure for table `taekwando`
--

CREATE TABLE `taekwando` (
  `id` int(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `id_num` int(45) NOT NULL,
  `course_year` int(45) NOT NULL,
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
-- Table structure for table `trackandfield`
--

CREATE TABLE `trackandfield` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `id_num` int(11) NOT NULL,
  `course_year` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `players_date_of_birth` date NOT NULL,
  `contact_phone_number` int(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `years_of_playing_experience` int(255) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `playerexperience_nationalteam` varchar(255) DEFAULT NULL,
  `playerexperience_nationalteam_rank` varchar(255) DEFAULT NULL,
  `playerexperience_national_PRISAA` varchar(255) DEFAULT NULL,
  `playerexperience_national_PRISAA_rank` varchar(255) DEFAULT NULL,
  `playerexperience_regional_PRISAA` varchar(255) DEFAULT NULL,
  `playerexperience_regional_PRISAA_rank` varchar(255) DEFAULT NULL,
  `playerexperience_UNI_games` varchar(255) DEFAULT NULL,
  `playerexperience_UNI_games_rank` varchar(255) DEFAULT NULL,
  `playersexperience_UNI_games_rank` varchar(255) DEFAULT NULL,
  `playerexperience_PH_national_games` varchar(255) DEFAULT NULL,
  `playerexperience_PH_national_games_rank` varchar(255) DEFAULT NULL,
  `playerexperience_palarong_pambansa` varchar(255) DEFAULT NULL,
  `playerexperience_palarong_pambansa_rank` varchar(255) DEFAULT NULL,
  `playerexperience_CVIRAA` varchar(255) DEFAULT NULL,
  `playerexperience_CVIRAA_rank` varchar(255) DEFAULT NULL,
  `playerexperience_highschool_only` varchar(255) DEFAULT NULL,
  `playerexperience_highschool_only_rank` varchar(255) DEFAULT NULL,
  `playerexperience_others` varchar(255) DEFAULT NULL,
  `playerexperience_others_rank` varchar(255) DEFAULT NULL,
  `field_throws_javeline` varchar(255) DEFAULT NULL,
  `field_throws_shotput` varchar(255) DEFAULT NULL,
  `field_throws_discussthrow` varchar(255) DEFAULT NULL,
  `field_weightlifting` varchar(255) DEFAULT NULL,
  `field_jumps_highjump` varchar(255) DEFAULT NULL,
  `field_jumps_longjumps` varchar(255) DEFAULT NULL,
  `field_jumps_triplejump` varchar(255) DEFAULT NULL,
  `field_jumps_polevault` varchar(255) DEFAULT NULL,
  `track_sprint_100m` varchar(255) DEFAULT NULL,
  `track_sprint_200m` varchar(255) DEFAULT NULL,
  `track_sprint_400m` varchar(255) DEFAULT NULL,
  `track_hurdle_100m` varchar(255) DEFAULT NULL,
  `track_hurdle_110m` varchar(255) DEFAULT NULL,
  `track_highhurdle_400m` varchar(255) DEFAULT NULL,
  `track_walk_3000m` varchar(255) DEFAULT NULL,
  `track_walk_10000m` varchar(255) DEFAULT NULL,
  `track_run_800m` varchar(255) DEFAULT NULL,
  `track_run_1500m` varchar(255) DEFAULT NULL,
  `track_run_3000m` varchar(255) DEFAULT NULL,
  `track_run_5000m` varchar(255) DEFAULT NULL,
  `track_run_10000m` varchar(255) DEFAULT NULL,
  `track_relay_4x100m` varchar(255) DEFAULT NULL,
  `track_relay_4x400m` varchar(255) DEFAULT NULL,
  `track_steeplechase_3000m` varchar(255) DEFAULT NULL,
  `approval` varchar(255) DEFAULT NULL,
  `comment` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackandfield`
--

INSERT INTO `trackandfield` (`id`, `firstname`, `lastname`, `id_num`, `course_year`, `gender`, `age`, `players_date_of_birth`, `contact_phone_number`, `contact_email`, `address`, `years_of_playing_experience`, `height`, `weight`, `playerexperience_nationalteam`, `playerexperience_nationalteam_rank`, `playerexperience_national_PRISAA`, `playerexperience_national_PRISAA_rank`, `playerexperience_regional_PRISAA`, `playerexperience_regional_PRISAA_rank`, `playerexperience_UNI_games`, `playerexperience_UNI_games_rank`, `playersexperience_UNI_games_rank`, `playerexperience_PH_national_games`, `playerexperience_PH_national_games_rank`, `playerexperience_palarong_pambansa`, `playerexperience_palarong_pambansa_rank`, `playerexperience_CVIRAA`, `playerexperience_CVIRAA_rank`, `playerexperience_highschool_only`, `playerexperience_highschool_only_rank`, `playerexperience_others`, `playerexperience_others_rank`, `field_throws_javeline`, `field_throws_shotput`, `field_throws_discussthrow`, `field_weightlifting`, `field_jumps_highjump`, `field_jumps_longjumps`, `field_jumps_triplejump`, `field_jumps_polevault`, `track_sprint_100m`, `track_sprint_200m`, `track_sprint_400m`, `track_hurdle_100m`, `track_hurdle_110m`, `track_highhurdle_400m`, `track_walk_3000m`, `track_walk_10000m`, `track_run_800m`, `track_run_1500m`, `track_run_3000m`, `track_run_5000m`, `track_run_10000m`, `track_relay_4x100m`, `track_relay_4x400m`, `track_steeplechase_3000m`, `approval`, `comment`) VALUES
(0, '1', '1', 1, '1', 'Male', 11312, '0001-01-01', 1, '1@asdas', '12312', 1, 112312, 112312, 'yes', '', 'yes', '', 'yes', '', 'yes', '', NULL, 'yes', '', 'yes', '123', 'yes', '123', 'yes', '', '12312', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, 'Roy', 'Regala', 123123, '12321', 'Male', 123, '0332-03-12', 2147483647, 'roynregala@gmail.com', 'Bancal Carmona Cavite', 12321, 12321, 12312, 'yes', '1', 'yes', '1', 'yes', '1', 'yes', '1', NULL, 'yes', '1', 'yes', '1', 'yes', '1', 'yes', '1', 'BATO LATa OLYMPICS', '11', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL, NULL, NULL, NULL, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, '21312312'),
(0, '1', '1', 21, '1', 'Male', 312, '0002-12-01', 1, '1321@yahoo', '1', 1212, 121, 123, 'yes', '123', 'yes', '123', 'yes', '213', 'yes', '123', NULL, 'yes', '1231', 'yes', '213', 'yes', '123', 'yes', '13', '123', '123', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'yes', 'yes', NULL, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, NULL);

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
-- Indexes for table `badminton`
--
ALTER TABLE `badminton`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basketball`
--
ALTER TABLE `basketball`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chess`
--
ALTER TABLE `chess`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `karatedo`
--
ALTER TABLE `karatedo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawntennis`
--
ALTER TABLE `lawntennis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mvt`
--
ALTER TABLE `mvt`
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
-- Indexes for table `tabletennis`
--
ALTER TABLE `tabletennis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taekwando`
--
ALTER TABLE `taekwando`
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
-- AUTO_INCREMENT for table `badminton`
--
ALTER TABLE `badminton`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `basketball`
--
ALTER TABLE `basketball`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chess`
--
ALTER TABLE `chess`
  MODIFY `Id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `IDNumber` int(32) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coachuser`
--
ALTER TABLE `coachuser`
  MODIFY `id_coach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
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
-- AUTO_INCREMENT for table `karatedo`
--
ALTER TABLE `karatedo`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lawntennis`
--
ALTER TABLE `lawntennis`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mvt`
--
ALTER TABLE `mvt`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `swimming`
--
ALTER TABLE `swimming`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tabletennis`
--
ALTER TABLE `tabletennis`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taekwando`
--
ALTER TABLE `taekwando`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wvt`
--
ALTER TABLE `wvt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
