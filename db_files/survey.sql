-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2018 at 06:26 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `date_pub` date NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `blog_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`date_pub`, `title`, `content`, `author`, `image`, `blog_id`) VALUES
('2018-11-20', 'PyPI and gpg signed packages', '&lt;p&gt;Yesterday night, on #pypa IRC channel, asked about uploading detached gpg signatures for the packages. According to , &lt;code&gt;twine&lt;/code&gt; did not upload the signature, even with passing &lt;code&gt;-s&lt;/code&gt; as an argument. I tried to do the same in test.pypi.org, and at first, I felt the same, as the &lt;a href=&quot;https://test.pypi.org/project/whosaysthat/&quot;&gt;package page&lt;/a&gt; was not showing anything. As I started reading the source of &lt;code&gt;twine&lt;/code&gt; to figure out what is going on, I found that it uploads the signature as part of the metadata of package. The &lt;a href=&quot;https://test.pypi.org/pypi/whosaysthat/json&quot;&gt;JSON API&lt;/a&gt; actually showed that the release is signed. Later, and explained that we just have to add &lt;code&gt;.asc&lt;/code&gt; at the end of the url of the package to download the detached signature.&lt;/p&gt;\r\n\r\n&lt;p&gt;During the conversation, mentioned that only 4% of the total packages are actually gpg signed. And gpg is written in C and also a GPL licensed software, so, it can not be packaged inside of CPython (as pip is packaged inside of CPython). The idea of a future PyPI where all packages must be signed (how will still have to discussed) was also discussed in the IRC channel. We also get to know that we can delete any file/relase from PyPI, but, we can not reload those files again. One has to do a new release. This is also very important incase you want to upload signatures, you will have to do that at the time of uploading the package.&lt;/p&gt;\r\n\r\n&lt;p&gt;also &lt;a href=&quot;https://caremad.io/posts/2014/03/crate-io-new-ownership/&quot;&gt;wrote&lt;/a&gt; about the idea of signing the packages a few years ago.&lt;/p&gt;\r\n', 'Kushal Das', '5bf4553b182468.55266058.svg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `technology` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `dif_level` varchar(10) NOT NULL,
  `course_type` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `vote` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`technology`, `course_name`, `link`, `dif_level`, `course_type`, `cost`, `vote`) VALUES
('c', 'dsnsdf', 'sasaafa', 'expert', 'book', '0', 1),
('ruby', 'sdbhcsd', 'sdmnvs', 'beginner', 'book', '0', 16),
('c', 'sdvsd', 'sdsdvdsd', 'medium', 'online-cou', '0', 1),
('go', 'asdaddfs', 'afasf', 'medium', 'book', '0', 1),
('ruby', 'mnbmn', 'mn mn m', 'medium', 'book', '0', 17),
('ruby', 'The Complete Ruby on Rails Developer Course', 'kadsjbfsdv', 'medium', 'online-cou', '0', 1),
('python', 'Automate The Boring Stuff With Python', 'afkjnsdf', 'beginner', 'book', '0', 3),
('c', 'The ANSI C', 'lkmpm', 'medium', 'online-course', '0', 1),
('c', 'jhabscjhac', 'kasdcdc', 'beginner', 'video', '0', 0),
('c', 'sdvsv', 'sdvsv', 'expert', 'video', '0', 0),
('c', 'nsdbfjsdf', 'sdfmn msdv', 'medium', 'book', '0', 0),
('c', 'mhvjhv', 'mvb', 'medium', 'video', '0', 0),
('java', 'jhasjdfvjsdf', 'skdjfbksdf', 'medium', 'book', '0', 0),
('java', 'kjsdnfksd', 'dmc s', 'beginner', 'video', '0', 0),
('ruby', 'mndsc dsv', 'sdvmsdv', 'beginner', 'online-course', '0', 0),
('java', 'kjbasdj', 'as,cma scm', 'beginner', 'book', '0', 0),
('go', 'jvjhvjhvjh', 'kjkjkjhkjhkjhkj', 'expert', 'book', '0', 0),
('cpp', 'dgfdfgfgdfgdfg fgddfgdgf', 'dfgergretherth', 'beginner', 'video', '0', 0),
('java', 'dfhgrtghfgh', 'fghfghfgh', 'expert', 'online-course', '0', 0),
('arduino', 'asjdbabsdafsd sadvsdvsdv', 'dvsdvsdvsdvs', 'beginner', 'video', '0', 0),
('python', 'fdgbdfhfddfh', 'dfhdhdfhfdhdh', 'medium', 'video', 'paid', 0),
('c', '', '', 'beginner', 'video', 'paid', 0),
('java', 'sefsdfsdf', 'sdfsdf', 'beginner', 'book', 'paid', 0),
('c', 'sdvdsdv', 'dsvdsv', 'beginner', 'video', 'paid', 0),
('c', 'kdv kv ', 'awkfjapw', 'medium', 'video', 'paid', 0),
('c', 'sd vsdv', 'vsdvsdv', 'beginner', 'video', 'free', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Languages`
--

CREATE TABLE `Languages` (
  `technology` varchar(100) NOT NULL,
  `search_count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Languages`
--

INSERT INTO `Languages` (`technology`, `search_count`) VALUES
('c', 29),
('go', 6),
('ruby', 146),
('python', 34),
('java', 16),
('cpp', 12),
('angular', 1),
('reactjs', 1),
('java', 2),
('sql', 3),
('android', 25),
('javascript', 2),
('php', 0),
('matlab', 0),
('data-structures-algorithms', 1),
('docker', 0),
('electronjs', 0),
('arduino', 0),
('css', 0),
('django', 0),
('c-sharp', 0),
('d3js', 0),
('data-science', 0),
('kubernetes', 0),
('elixir', 0),
('nodejs', 0),
('ruby on rails', 0),
('ansible', 0),
('asp-net', 0),
('artificial-intelligence-ai', 0),
('bitcoin', 0),
('blockchain-programming', 0),
('bootstrap', 0),
('computer-architecture', 0),
('computer-networks', 0),
('amazon-web-services', 0),
('assembly-language', 0),
('ansible', 0),
('asp-net', 0),
('artificial-intelligence-ai', 0),
('bitcoin', 0),
('blockchain-programming', 0),
('bootstrap', 0),
('computer-architecture', 0),
('computer-networks', 0),
('amazon-web-services', 0),
('assembly-language', 0);

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
(1, 'Who are you?', 'Student', 'Teacher', 'Professional Worker', 'Hobbyist Programmer', 'Research Scholar', 'Freelancer', 19, 19, 26, 21, 33, 18),
(2, 'Which is your favorite Programming Language?', 'Python', 'JavaScript', 'Ruby', 'PHP', 'Kotlin', 'C++', 5, 12, 13, 19, 51, 231),
(3, 'What type of Developer are you?', 'Web Developer', 'Mobile Developer', 'Game Developer', 'Data Science Expert', 'Machine Learning Expert', 'Database Administrator', 56, 59, 21, 10, 20, 48),
(4, 'How long have you been Programming?', '0-4 Years', '5-8 Years', '9-12 Years', '13-16 Years', '17-20 Years', '20+ Years', 20, 37, 56, 53, 35, 16),
(5, 'How did you learn Programming, to which medium you give the most credit?', 'Computer Science Degree', 'Blogs', 'Youtube', 'MOOCS', 'Books', 'Coaching Centre', 7, 15, 21, 25, 28, 36),
(6, 'Which is your favorite website among these, which you use to improve your Programming Skills?', 'Hackerrank', 'Codechef', 'Codeforces', 'SPOJ', 'TopCoder', 'Hackerearth', 9, 23, 18, 25, 27, 35),
(7, 'Do you participate in Hackathons? if yes then why?', 'Because I find it enjoyable', 'To improve my general Technical Skills or Programming Ability', 'To win prizes or cash awards', 'To build my professional network', 'To help me find new job opportunities', 'I don\'t participate in Hackathons', 75, 58, 46, 58, 24, 16),
(8, 'Which Programming Language you want to learn next?', 'Kotlin', 'Swift', 'Rust', 'Go', 'Ruby', 'Python', 15, 36, 36, 88, 26, 22),
(9, 'Which of these Databases you used is your favorite?', 'MySql', 'Oracle', 'PostgreSQL', 'MongoDB', 'SQLite', 'MariaDB', 16, 25, 21, 54, 21, 24),
(10, 'Which of these frameworks have you used?', 'Node.js', 'Django', 'Angular', 'React', 'PyTorch', 'Tensorflow', 156, 24, 24, 239, 23, 190),
(11, 'Are you part of some Online Community, which among these is your favorite?', 'Slack', 'IRC', 'Discord', 'Keybase', 'Gitter', 'Zoom', 10, 46, 26, 87, 158, 29),
(12, 'Which is your favorite Operating System', 'MacOS', 'Ubuntu', 'Arch Linux', 'Debian', 'Fedora', 'Windows', 156, 57, 566, 15, 23, 29),
(13, 'Which is your favorite Laptop Brand?', 'HP', 'Mac', 'Lenovo', 'Dell', 'Sony', 'MSI', 157, 563, 541, 232, 215, 479);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `email`, `password`) VALUES
('araushan', 'havasi123@havas.com', '202cb962ac59075b964b07152d234b70'),
('havasi', 'sidntrivedi012@gmail.com', '202cb962ac59075b964b07152d234b70'),
('xxx', 'xxx@xvideo2.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tblsurvey`
--
ALTER TABLE `tblsurvey`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblsurvey`
--
ALTER TABLE `tblsurvey`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
