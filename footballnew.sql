-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 02:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `player_id` int(11) NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`player_id`, `agent_name`, `agent_id`) VALUES
(100, 'Jorge Messi', 500),
(103, 'Mino Riola', 501);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `stadium_id` int(11) NOT NULL,
  `established_date` date NOT NULL,
  `market_worth` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`club_id`, `club_name`, `stadium_id`, `established_date`, `market_worth`, `location`) VALUES
(10000, 'PSG', 150, '1970-08-12', '250bn', 'France'),
(10001, 'Manchester United', 151, '1978-01-01', '231bn', 'England');

-- --------------------------------------------------------

--
-- Table structure for table `club_state`
--

CREATE TABLE `club_state` (
  `player_id` int(11) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `club_id` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `clean_sheets` int(11) NOT NULL,
  `debut` date NOT NULL,
  `match_played` int(11) NOT NULL,
  `mvp` int(11) NOT NULL,
  `goal_ratio` int(11) NOT NULL,
  `red_card` int(11) NOT NULL,
  `yellow_card` int(11) NOT NULL,
  `trophy` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `kit_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club_state`
--

INSERT INTO `club_state` (`player_id`, `club_name`, `club_id`, `goals`, `assists`, `clean_sheets`, `debut`, `match_played`, `mvp`, `goal_ratio`, `red_card`, `yellow_card`, `trophy`, `position`, `kit_number`) VALUES
(101, 'Manchester United', 10001, 6, 0, 0, '2021-07-31', 5, 3, 1, 0, 1, 0, 'attack-Centre-Forward', 7),
(103, 'Borussia Dortmund', 10003, 125, 47, 0, '2020-07-21', 173, 55, 1, 0, 19, 4, 'Centre-Forward', 9);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `team_id` int(11) NOT NULL,
  `manager_name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `trophy` int(11) NOT NULL,
  `nationality` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`team_id`, `manager_name`, `birthdate`, `gender`, `trophy`, `nationality`) VALUES
(20000, 'Lionel Scaloni\r\n', '1978-05-16', 'Male', 1, 'Argentine'),
(10000, 'Mauricio Pochettino', '1972-03-02', 'Male', 2, 'Argentine');

-- --------------------------------------------------------

--
-- Table structure for table `nationals`
--

CREATE TABLE `nationals` (
  `national_id` int(11) NOT NULL,
  `national_name` varchar(100) NOT NULL,
  `stadium_id` int(11) NOT NULL,
  `major_trophies` int(11) NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationals`
--

INSERT INTO `nationals` (`national_id`, `national_name`, `stadium_id`, `major_trophies`, `region`) VALUES
(20000, 'Argentina', 153, 52, 'South America'),
(20001, 'Portugal', 154, 2, 'Europe');

-- --------------------------------------------------------

--
-- Table structure for table `national_state`
--

CREATE TABLE `national_state` (
  `player_id` int(11) NOT NULL,
  `national_name` varchar(100) NOT NULL,
  `national_id` int(11) NOT NULL,
  `goals` int(11) NOT NULL,
  `assists` int(11) NOT NULL,
  `clean sheets` int(11) NOT NULL,
  `debut` date NOT NULL,
  `match_played` int(11) NOT NULL,
  `mvp` int(11) NOT NULL,
  `goal_ratio` int(11) NOT NULL,
  `red_card` int(11) NOT NULL,
  `yellow_card` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `kit_number` int(11) NOT NULL,
  `trophy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `national_state`
--

INSERT INTO `national_state` (`player_id`, `national_name`, `national_id`, `goals`, `assists`, `clean sheets`, `debut`, `match_played`, `mvp`, `goal_ratio`, `red_card`, `yellow_card`, `position`, `kit_number`, `trophy`) VALUES
(100, 'Argentina', 20000, 80, 51, 0, '2005-07-17', 158, 80, 1, 2, 8, 'RW', 10, 1),
(102, 'Brazil', 20002, 70, 52, 0, '2010-07-10', 116, 40, 1, 1, 27, 'LW', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `preferred_foot` varchar(100) NOT NULL,
  `club_id` int(11) NOT NULL,
  `national_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `first_name`, `last_name`, `birthdate`, `gender`, `preferred_foot`, `club_id`, `national_id`) VALUES
(100, 'Lionel', 'Messi', '1987-06-11', 'Male', 'Left', 10000, 20000),
(101, 'Cristiano', 'Ronaldo', '1985-02-05', 'Male', 'Right', 10001, 20001),
(102, 'Neymar', 'Jr', '1992-02-05', 'Male', 'Right', 10002, 20002),
(103, 'Erling', 'Haaland', '2000-07-21', 'Male', 'Left', 10003, 20003),
(104, 'Kylian', 'Mbappe', '1998-12-20', 'Male', 'Right', 10000, 20004);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `player_id` int(11) NOT NULL,
  `sponsor_name` varchar(100) NOT NULL,
  `sponsor_id` int(11) NOT NULL,
  `duration_of_contract` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`player_id`, `sponsor_name`, `sponsor_id`, `duration_of_contract`) VALUES
(100, 'Adidas', 10, 100),
(101, 'Nike', 11, 100);

-- --------------------------------------------------------

--
-- Table structure for table `stadiums`
--

CREATE TABLE `stadiums` (
  `stadium_id` int(11) NOT NULL,
  `stadium_name` varchar(100) NOT NULL,
  `seat` int(11) NOT NULL,
  `established_date` date NOT NULL,
  `block_number` varchar(100) NOT NULL,
  `street_number` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stadiums`
--

INSERT INTO `stadiums` (`stadium_id`, `stadium_name`, `seat`, `established_date`, `block_number`, `street_number`, `city`) VALUES
(150, 'Le Parc des Princes', 47929, '1972-05-25', '24 Rue du Commandant Guilbaud', '75016 Paris', 'Paris'),
(151, 'Old Trafford', 73000, '1910-02-19', 'Sir Matt Busby Way', 'Manchester M16 0RA', 'Manchester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD UNIQUE KEY `stadium_id` (`stadium_id`);

--
-- Indexes for table `club_state`
--
ALTER TABLE `club_state`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_name`);

--
-- Indexes for table `national_state`
--
ALTER TABLE `national_state`
  ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexes for table `stadiums`
--
ALTER TABLE `stadiums`
  ADD PRIMARY KEY (`stadium_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `club_state`
--
ALTER TABLE `club_state`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT for table `national_state`
--
ALTER TABLE `national_state`
  MODIFY `national_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20003;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `stadiums`
--
ALTER TABLE `stadiums`
  MODIFY `stadium_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
