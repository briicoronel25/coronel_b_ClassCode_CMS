-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 08, 2018 at 12:32 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_movies`
--
CREATE DATABASE cms_movies
USE cms_movies
-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `genre_id` tinyint(3) UNSIGNED NOT NULL,
  `genre_name` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Crime'),
(5, 'Drama'),
(6, 'Historical'),
(7, 'Horror'),
(8, 'Musical'),
(9, 'Science Fiction'),
(10, 'War'),
(11, 'Western'),
(12, 'Animation'),
(13, 'Family'),
(14, 'Fantasy'),
(15, 'Romance'),
(16, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movies_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_cover` varchar(75) NOT NULL DEFAULT 'cover_default.jpg',
  `movies_title` varchar(125) NOT NULL,
  `movies_year` varchar(5) NOT NULL,
  `movies_runtime` varchar(25) NOT NULL,
  `movies_storyline` text NOT NULL,
  `movies_trailer` varchar(75) NOT NULL DEFAULT 'trailer_default.jpg',
  `movies_release` varchar(125) NOT NULL,
  `last_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movies_id`, `movies_cover`, `movies_title`, `movies_year`, `movies_runtime`, `movies_storyline`, `movies_trailer`, `movies_release`, `last_edit`) VALUES
(22, 'player_one_ready.jpg', 'Player One Ready', '2018', ' 2h 40min ', 'In the year 2045, the real world is a harsh place. The only time Wade Watts (Tye Sheridan) truly feels alive is when he escapes to the OASIS, an immersive virtual universe where most of humanity spends their days. In the OASIS, you can go anywhere, do anything, be anyone-the only limits are your own imagination. The OASIS was created by the brilliant and eccentric James Halliday (Mark Rylance), who left his immense fortune and total control of the Oasis to the winner of a three-part contest he designed to find a worthy heir. When Wade conquers the first challenge of the reality-bending treasure hunt, he and his friends-aka the High Five-are hurled into a fantastical universe of discovery and danger to save the OASIS.', 'player_one_ready.mp4', '28 March, 2018', '2018-04-07 23:52:56'),
(23, 'black_panther.jpg', 'Black Panther', '2018', '2h 14min', 'After the events of Captain America: Civil War, King T\'Challa returns home to the reclusive, technologically advanced African nation of Wakanda to serve as his country\'s new leader. However, T\'Challa soon finds that he is challenged for the throne from factions within his own country. When two foes conspire to destroy Wakanda, the hero known as Black Panther must team up with C.I.A. agent Everett K. Ross and members of the Dora Milaje, Wakandan special forces, to prevent Wakanda from being dragged into a world war.', 'black_panther.mp4', ' 16 February, 2018', '2018-04-07 22:54:43'),
(24, 'tomb_raider.jpg', 'Tomb Raider', '2018', '1h 58min', 'Lara Croft is the fiercely independent daughter of an eccentric adventurer who vanished when she was scarcely a teen. Now a young woman of 21 without any real focus or purpose, Lara navigates the chaotic streets of trendy East London as a bike courier, barely making the rent, and takes college courses, rarely making it to class. Determined to forge her own path, she refuses to take the reins of her father\'s global empire just as staunchly as she rejects the idea that he\'s truly gone. Advised to face the facts and move forward after seven years without him, even Lara can\'t understand what drives her to finally solve the puzzle of his mysterious death. Going explicitly against his final wishes, she leaves everything she knows behind in search of her dad\'s last-known destination: a fabled tomb on a mythical island that might be somewhere off the coast of Japan. But her mission will not be an easy one; just reaching the island will be extremely treacherous. Suddenly, the stakes couldn\'t ...', 'tomb_raider.mp4', ' 16 March, 2018', '2018-04-07 22:54:43'),
(25, 'the_predator.jpg', 'The Predator', '2018', '2h 00min', 'A group of men get stranded in a jungle with a beast of whom they do not speak. One by one, they go missing and skinned bodies are found in trees. Then, when the only survivor of a previous beast encounter appears, they realise they are in worse trouble than they thought...', 'trailer_default.jpg', ' 14 September, 2018', '2018-04-07 22:54:43'),
(27, 'deadpool.jpg', 'Deadpool', '2014', ' 2h 48min', 'This is the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.', 'deadpool.mp4', ' 15 February, 2016 ', '2018-04-07 22:54:43'),
(28, 'megaman-wallpaper.jpg', 'megaman', '2019', '2h 00min', 'megaman is a blue robot :v ', '', '18 March, 2019', '2018-04-08 00:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mov_genre`
--

CREATE TABLE `tbl_mov_genre` (
  `mov_genre_id` mediumint(8) UNSIGNED NOT NULL,
  `movies_id` mediumint(9) NOT NULL,
  `genre_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_mov_genre`
--

INSERT INTO `tbl_mov_genre` (`mov_genre_id`, `movies_id`, `genre_id`) VALUES
(1, 22, 1),
(2, 22, 2),
(3, 22, 9),
(4, 23, 1),
(5, 23, 2),
(6, 23, 9),
(7, 24, 1),
(8, 24, 2),
(9, 25, 1),
(10, 25, 2),
(11, 25, 7),
(12, 26, 5),
(13, 26, 7),
(14, 27, 1),
(15, 27, 2),
(16, 27, 3),
(19, 30, 12),
(20, 28, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` varchar(15) DEFAULT NULL,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `user_lastLogin` varchar(100) NOT NULL,
  `user_attempts` tinyint(4) NOT NULL,
  `user_logins` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`, `user_ip`, `user_lastLogin`, `user_attempts`, `user_logins`) VALUES
(1, 'Tommy Loose', 'tomlo', '$2y$10$fx/n6w242vVltzC.12RTmetyj4sbnKsRZdE6C/jZXD.15oPQXsuZe', 'hawkcrowxx@gmail.com', '2018-04-06 07:13:14', '2', '127.0.0.1', '0', 0, 0),
(2, 'Briggite Coronel', 'bricoronel', '$2y$10$KkHZdmCDSLs8arFfKOp.Jejx8KSqMgRxYckMGBjZ86W/Oje/PHADi', 'briicoronel25@gmail.com', '2018-04-08 00:27:18', '2', 'no', '0', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movies_id`);

--
-- Indexes for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  ADD PRIMARY KEY (`mov_genre_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `genre_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movies_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_mov_genre`
--
ALTER TABLE `tbl_mov_genre`
  MODIFY `mov_genre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
