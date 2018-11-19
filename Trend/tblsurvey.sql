-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 07:14 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblsurvey`
--

CREATE TABLE `tblsurvey` (
  `ID` int(11) NOT NULL,
  `Question` varchar(250) NOT NULL,
  `OptionA` varchar(250) NOT NULL,
  `OptionB` varchar(250) NOT NULL,
  `OptionC` varchar(250) NOT NULL,
  `OptionD` varchar(250) NOT NULL,
  `OptionE` varchar(250) NOT NULL,
  `OptionF` varchar(250) NOT NULL,
  `VoteA` int(11) NOT NULL DEFAULT '1',
  `VoteB` int(11) NOT NULL DEFAULT '1',
  `VoteC` int(11) NOT NULL DEFAULT '1',
  `VoteD` int(11) NOT NULL DEFAULT '1',
  `VoteE` int(11) NOT NULL DEFAULT '1',
  `VoteF` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsurvey`
--

INSERT INTO `tblsurvey` (`ID`, `Question`, `OptionA`, `OptionB`, `OptionC`, `OptionD`, `OptionE`, `OptionF`, `VoteA`, `VoteB`, `VoteC`, `VoteD`, `VoteE`, `VoteF`) VALUES
(1, 'Who are you?', 'Student', 'Teacher', 'Professional Worker', 'Hobbyist Programmer', 'Research Scholar', 'Freelancer', 19, 16, 26, 21, 33, 18),
(2, 'Which is your favorite Programming Language?', 'Python', 'JavaScript', 'Ruby', 'PHP', 'Kotlin', 'C++', 5, 11, 13, 19, 51, 231),
(3, 'What type of Developer are you?', 'Web Developer', 'Mobile Developer', 'Game Developer', 'Data Science Expert', 'Machine Learning Expert', 'Database Administrator', 56, 59, 21, 10, 19, 48),
(4, 'How long have you been Programming?', '0-4 Years', '5-8 Years', '9-12 Years', '13-16 Years', '17-20 Years', '20+ Years', 19, 37, 56, 53, 35, 16),
(5, 'How did you learn Programming, to which medium you give the most credit?', 'Computer Science Degree', 'Blogs', 'Youtube', 'MOOCS', 'Books', 'Coaching Centre', 7, 15, 21, 24, 28, 36),
(6, 'Which is your favorite website among these, which you use to improve your Programming Skills?', 'Hackerrank', 'Codechef', 'Codeforces', 'SPOJ', 'TopCoder', 'Hackerearth', 9, 22, 18, 25, 27, 35),
(7, 'Do you participate in Hackathons? if yes then why?', 'Because I find it enjoyable', 'To improve my general Technical Skills or Programming Ability', 'To win prizes or cash awards', 'To build my professional network', 'To help me find new job opportunities', 'I don''t participate in Hackathons', 75, 58, 46, 58, 23, 16),
(8, 'Which Programming Language you want to learn next?', 'Kotlin', 'Swift', 'Rust', 'Go', 'Ruby', 'Python', 15, 36, 36, 88, 25, 22),
(9, 'Which of these Databases you used is your favorite?', 'MySql', 'Oracle', 'PostgreSQL', 'MongoDB', 'SQLite', 'MariaDB', 16, 24, 21, 54, 21, 24),
(10, 'Which of these frameworks have you used?', 'Node.js', 'Django', 'Angular', 'React', 'PyTorch', 'Tensorflow', 156, 24, 24, 238, 23, 190),
(11, 'Are you part of some Online Community, which among these is your favorite?', 'Slack', 'IRC', 'Discord', 'Keybase', 'Gitter', 'Zoom', 10, 46, 26, 86, 158, 29),
(12, 'Which is your favorite Operating System', 'MacOS', 'Ubuntu', 'Arch Linux', 'Debian', 'Fedora', 'Windows', 156, 57, 566, 14, 23, 29),
(13, 'Which is your favorite Laptop Brand?', 'HP', 'Mac', 'Lenovo', 'Dell', 'Sony', 'MSI', 156, 563, 541, 232, 215, 479);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsurvey`
--
ALTER TABLE `tblsurvey`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsurvey`
--
ALTER TABLE `tblsurvey`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
