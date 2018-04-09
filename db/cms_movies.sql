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
(29,'godfather.jpg','The Godfather','1972','2h 55min','When the aging head of a famous crime family decides to transfer his position to one of his subalterns, a series of unfortunate events start happening to the family, and a war begins between all the well-known families leading to insolence, deportation, murder and revenge, and ends with the favorable successor being finally chosen.','godfather.mp4',' 20 October, 1972','2018-04-08 21:54:43');
(30,'dark_knight.jpg','The Dark Knight','2008','2h 32min','Set within a year after the events of Batman Begins, Batman, Lieutenant James Gordon, and new district attorney Harvey Dent successfully begin to round up the criminals that plague Gotham City until a mysterious and sadistic criminal mastermind known only as the Joker appears in Gotham, creating a new wave of chaos. Batman struggle against the Joker becomes deeply personal, forcing him to confront everything he believes and improve his technology to stop him. A love triangle develops between Bruce Wayne, Dent and Rachel Dawes.','','13 August, 2008','2018-04-08 21:54:43');
(31,'lord_rings.jpg','The Lord of the Rings: The Return of the King','2003','3h 21min','The final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Hobbits: Frodo and Sam reach Mordor in their quest to destroy the "one ring", while Aragorn leads the forces of good against Sauron evil army at the stone city of Minas Tirith. ','lord_rings.mp4','17 December, 2003','2018-04-08 21:54:43');
(32,'pulp_fiction.jpg','Pulp Fiction','1994','2h 34min','Jules Winnfield (Samuel L. Jackson) and Vincent Vega (John Travolta) are two hit men who are out to retrieve a suitcase stolen from their employer, mob boss Marsellus Wallace (Ving Rhames). Wallace has also asked Vincent to take his wife Mia (Uma Thurman) out a few days later when Wallace himself will be out of town. Butch Coolidge (Bruce Willis) is an aging boxer who is paid by Wallace to lose his fight. The lives of these seemingly unrelated people are woven together comprising of a series of funny, bizarre and uncalled-for incidents.','pulp_fiction.mp4',' 13 January, 1995','2018-04-08 21:54:43');
(33,'empire_strikes_back.jpg','Star Wars: Episode V - The Empire Strikes Back','1980','2h 4min','Luke Skywalker, Han Solo, Princess Leia and Chewbacca face attack by the Imperial forces and its AT-AT walkers on the ice planet Hoth. While Han and Leia escape in the Millennium Falcon, Luke travels to Dagobah in search of Yoda. Only with the Jedi master help will Luke survive when the dark side of the Force beckons him into the ultimate duel with Darth Vader.','empire_strikes_back.mp4','3 October, 1980','2018-04-08 21:54:43');
(34,'silence_lambs.jpg','The Silence of the Lambs','1991',' 1h 58min ','FBI trainee Clarice Starling works hard to advance her career, while trying to hide/put behind her West Virginia roots, of which if some knew, would automatically classify her as being backward or white trash. After graduation, she aspires to work in the agency Behavioral Science Unit under the leadership of Jack Crawford. While she is still a trainee, Crawford asks her to question Dr. Hannibal Lecter, a psychiatrist imprisoned, thus far, for eight years in maximum security isolation for being a serial killer who cannibalized his victims. Clarice is able to figure out the assignment is to pick Lecter brains to help them solve another serial murder case, that of someone coined by the media as Buffalo Bill, who has so far killed five victims, all located in the eastern US, all young women who are slightly overweight (especially around the hips), all who were drowned in natural bodies of water, and all who were stripped of large swaths of skin.','','6 September, 1991','2018-04-08 21:54:43');
(35,'city_god.jpg','Cidade de Deus','2002','2h 10min','Brazil, 1960s, City of God. The Tender Trio robs motels and gas trucks. Younger kids watch and learn well...too well. 1970s: Lil Zé has prospered very well and owns the city. He causes violence and fear as he wipes out rival gangs without mercy. His best friend Bené is the only one to keep him on the good side of sanity. Rocket has watched these two gain power for years, and he wants no part of it. Yet he keeps getting swept up in the madness. All he wants to do is take pictures. 1980s: Things are out of control between the last two remaining gangs...will it ever end? Welcome to the City of God.','',' 31 January 2003','2018-04-08 21:54:43');
(36,'beautiful_life.jpg','La vita è bella','1997','1h 56min','In 1930s Italy, a carefree Jewish book keeper named Guido starts a fairy tale life by courting and marrying a lovely woman from a nearby city. Guido and his wife have a son and live happily together until the occupation of Italy by German forces. In an attempt to hold his family together and help his son survive the horrors of a Jewish Concentration Camp, Guido imagines that the Holocaust is a game and that the grand prize for winning is a tank.','','26 February 1999','2018-04-08 21:54:43');
(37,'saving_ryan.jpg','Saving Private Ryan','1998','2h 49min','Opening with the Allied invasion of Normandy on 6 June 1944, members of the 2nd Ranger Battalion under Cpt. Miller fight ashore to secure a beachhead. Amidst the fighting, two brothers are killed in action. Earlier in New Guinea, a third brother is KIA. Their mother, Mrs. Ryan, is to receive all three of the grave telegrams on the same day. The United States Army Chief of Staff, George C. Marshall, is given an opportunity to alleviate some of her grief when he learns of a fourth brother, Private James Ryan, and decides to send out 8 men (Cpt. Miller and select members from 2nd Rangers) to find him and bring him back home to his mother','',' 18 September 1998 ','2018-04-08 21:54:43');
(38,'interstellar.jpg','Interstellar','2014',' 2h 49min','Earth future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.','',' 7 November 2014 ','2018-04-08 21:54:43');
(39,'casablanca.jpg','Casablanca','1942','1h 42min','The story of Rick Blaine, a cynical world-weary ex-patriate who runs a nightclub in Casablanca, Morocco during the early stages of WWII. Despite the pressure he constantly receives from the local authorities, Rick cafe has become a kind of haven for refugees seeking to obtain illicit letters that will help them escape to America. But when Ilsa, a former lover of Rick, and her husband, show up to his cafe one day, Rick faces a tough challenge which will bring up unforeseen complications, heartbreak and ultimately an excruciating decision to make.','','23 January 1943','2018-04-08 21:54:43');
(40,'pianist.jpg','The Pianist','2002','2h 30min','In this adaptation of the autobiography "The Pianist: The Extraordinary True Story of One Man Survival in Warsaw, 1939-1945," Wladyslaw Szpilman, a Polish Jewish radio station pianist, sees Warsaw change gradually as World War II begins. Szpilman is forced into the Warsaw Ghetto, but is later separated from his family during Operation Reinhard. From this time until the concentration camp prisoners are released, Szpilman hides in various locations among the ruins of Warsaw.','',' 13 December 2002','2018-04-08 21:54:43');
(41,'terminator.jpg','Terminator 2: Judgment Day','1991','2h 17min','Over 10 years have passed since the first cyborg called The Terminator tried to kill Sarah Connor and her unborn son, John Connor. John Connor, the future leader of the human resistance, is now a healthy young boy. However another Terminator is sent back through time called the T-1000, which is more advanced and more powerful than its predecessor. The Mission: to kill John Connor when he is still a child. However, Sarah and John do not have to face this threat of a Terminator alone. Another Terminator is also sent back through time. The mission: to protect John and Sarah Connor at all costs. ','',' 5 December 1991','2018-04-08 21:54:43');
(42,'lion_king.jpg','The Lion King','1994',' 1h 28min','A young lion prince is cast out of his pride by his cruel uncle, who claims he killed his father. While the uncle rules with an iron paw, the prince grows up beyond the Savannah, living by a philosophy: No worries for the rest of your days. But when his past comes to haunt him, the young prince must decide his fate: Will he remain an outcast or face his demons and become what he needs to be?','',' 8 November 1994','2018-04-08 21:54:43');
(43,'shinning.jpg','The Shining','1980',' 2h 26min','Signing a contract, Jack Torrance, a normal writer and former teacher agrees to take care of a hotel which has a long, violent past that puts everyone in the hotel in a nervous situation. While Jack slowly gets more violent and angry of his life, his son, Danny, tries to use a special talent, the "Shining", to inform the people outside about whatever that is going on in the hotel.','',' 19 December 1980','2018-04-08 21:54:43');

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
(21, 29, 5);
(22, 30, 4);
(23, 31, 2);
(24, 32, 4);
(25, 33, 9);
(26, 34, 5);
(27, 35, 5);
(28, 36, 5);
(29, 37, 5);
(30, 38, 9);
(31, 39, 5);
(32, 40, 5);
(33, 41, 9);
(34, 42, 12);
(35, 43, 7);

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
