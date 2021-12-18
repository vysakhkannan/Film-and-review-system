-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2021 at 04:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter_table`
--

DROP TABLE IF EXISTS `counter_table`;
CREATE TABLE IF NOT EXISTS `counter_table` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `visit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter_table`
--

INSERT INTO `counter_table` (`id`, `username`, `visit_date`) VALUES
(1, 'vishnu13', '2021-03-03 21:53:58'),
(2, 'vishnu13', '2021-03-03 21:54:13'),
(3, 'vishnu13', '2021-03-03 21:54:38'),
(4, 'vishnu13', '2021-03-03 22:00:40'),
(5, 'vishnu13', '2021-03-03 22:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('Alex', 'alex@gmail.com', 'very good i am happy');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`) VALUES
('vysakh', 'password', 'admin'),
('gdjdjdjdghjg', 'strtfgjghjjj', 'user'),
('vishnu13', 'oldpassword', 'user'),
('akash6111', 'password', 'user'),
('alex333', 'password', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `title` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `language` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `maleactor` varchar(100) NOT NULL,
  `femaleactor` varchar(100) NOT NULL,
  `cover` varchar(500) NOT NULL,
  `trailer` varchar(500) NOT NULL,
  `storyline` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`title`, `platform`, `category`, `year`, `language`, `director`, `writer`, `maleactor`, `femaleactor`, `cover`, `trailer`, `storyline`) VALUES
('Drishyam', 'other', 'drama', 2015, 'malayalam', 'Jeethu Joseph', 'Jeethu Joseph', 'Mohanlal', 'Meena', 'images/movies/drishyam.jpg', 'https://www.youtube.com/watch?v=eMASubc1y_k&t=8s', 'Georgekutty lives a happy life with his wife and daughters. However, things take a turn for the worse when his family commits an accidental crime, leaving him to protect them and their secret.'),
('Kumbalangi Nights', 'other', 'comedy', 2019, 'malayalam', 'Madhu C. Narayanan', 'shyam pushkar', 'Fahad Fasil', 'Anna Ben', 'images/movies/kumbalanginights.jpg', 'https://www.youtube.com/watch?v=89Kq8SDyvfg', 'fsdfdsfsdfsdf'),
('iyobinte pusthakam', 'other', 'drama', 2014, 'malayalam', 'Amal Neerad', 'T.G Ravi', 'Fahad Fasil', 'Isha Sharvani', 'images/movies/iyobintepusthakam.jpg.jpg', 'https://www.youtube.com/watch?v=IbD5Baz0kOI', 'Returning home after the war to his village to meet his family, Aloshi discovers that his brothers are working as henchmen for a local businessman and are plotting against his father.'),
('Green Miles', 'other', 'crime', 1999, 'english', 'Frank Darabont', 'Stephen King', 'Tom Hanks', 'Bonnie Hunt', 'images/movies/greenmiles.jpg', 'https://www.youtube.com/watch?v=Ki4haFrqSrw', 'Paul Edgecomb, the head guard of a prison, meets an inmate, John Coffey, a black man who is accused of murdering two girls. His life changes drastically when he discovers that John has a special gift'),
('June', 'other', 'comedy', 2019, 'malayalam', 'Ahammed Khabeer', 'Ahammed Khabeer', 'Sarjano Khalid', 'Rajisha Vijayan', 'images/movies/june.jpg', 'https://www.youtube.com/watch?v=kP4vEzIv2lI', 'June, a teenager, believes that there is nothing remarkable about her. She experiences adolescent crushes, handles heartbreaks and fights insecurities as she grows into a mature and confident woman.'),
('Jojo Rabbit', 'other', 'comedy', 2019, 'english', 'Taika Waititi', 'Taika Waititi', 'Roman Griffin', 'Scarlett Johansson', 'images/movies/jojorabbit.jpg', 'https://www.youtube.com/watch?v=tL4McUzXfFI', 'Hitler Youth cadet Jojo Betzler firmly believes in the ideals of Nazism manifested by his imaginary friend, Adolf Hitler. However, his foundations are shaken when he finds a Jewish girl in his house.'),
('The Bucket List', 'other', 'adventure', 2007, 'english', 'Rob Reiner', 'Justin Zackham', 'Morgan Freeman', 'Beverly Todd', 'images/movies/bucketlist.jpg', 'https://www.youtube.com/watch?v=vc3mkG21ob4', 'Two terminally ill men left with only six months to live, decide to explore life and make a bucket list comprising all the things they have never tried before.\r\n'),
('Dev.D', 'other', 'romance', 2009, 'hindi', 'Anurag Kashyap', 'Anurag Kashyap', 'Abhay Deol', 'Kalki Koechlin', 'images/movies/devd.jpg', 'https://www.youtube.com/watch?v=ATZB8mwU3M0', 'After breaking up with his childhood love Paro, Dev finds solace in drugs and alcohol. He soon bumps into Chanda, a prostitute, and falls for her.'),
('Gangs of Wasseypur â€“ Part 1', 'other', 'action', 2012, 'hindi', 'Anurag Kashyap', 'Anurag Kashyap', 'Manoj Bajpayee', 'Richa Chadda', 'images/movies/gangsofWasseypurposter.jpg', 'https://www.youtube.com/watch?v=j-AkWDkXcMY', 'A gangster (Manoj Bajpayee) clashes with the ruthless, coal-mining kingpin (Tigmanshu Dhulia) who killed his father (Jaideep Ahlawat).'),
('96', 'other', 'romance', 2018, 'tamil', 'C. Prem Kumar', 'C. Premkumar', 'Vijay Sethupathi', 'Trisha', 'images/movies/96.jpg', 'https://www.youtube.com/watch?v=r0synl-lI4I', 'K Ramachandran, a photographer, gets nostalgic after he visits his school in his hometown. During a reunion with his classmates, he meets Janaki, his childhood sweetheart.'),
('KD', 'other', 'drama', 2019, 'tamil', 'Madhumita Sundararaman', 'Sabarivaasan Shanmugam', 'Mu Ramaswamy', 'Nagavishal', 'images/movies/kd.jpg', 'https://www.youtube.com/watch?v=4jWjvf93xtA', 'K.D., is a 2019 Indian Tamil-language drama film written and directed by Madhumita and produced by Yoodlee Films, a production venture of Saregama India Limited. The film stars Mu Ramaswamy and Nagavishal in the lead roles. The film has music composed by Karthikeya Murthy.'),
('Vaaranam Aayiram', 'ott', 'drama', 2019, 'tamil', 'Gautham Menon', 'Gautham Menon', 'Surya', 'Sameera Reddy', 'images/movies/vaaranamaayiram.jpg', 'https://www.youtube.com/watch?v=QdM9L1FxFkY', 'Surya an NSG official is on a mission to rescue someone when he gets the news of his fathers demise. He starts reminiscing about the bond he shared with his father and the stories related to him.');

-- --------------------------------------------------------

--
-- Table structure for table `moviesreview`
--

DROP TABLE IF EXISTS `moviesreview`;
CREATE TABLE IF NOT EXISTS `moviesreview` (
  `movietitle` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `reviewrating` int(10) NOT NULL,
  `reviewcontent` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviesreview`
--

INSERT INTO `moviesreview` (`movietitle`, `username`, `reviewrating`, `reviewcontent`, `time`, `report`) VALUES
('Drishyam', 'vishnu13', 4, 'good', '2021-01-24 04:25:41', 0),
('Drishyam', 'vishnu13', 4, 'good', '2021-02-17 15:35:39', 0),
('Drishyam', 'vishnu13', 5, 'good', '2021-02-28 12:59:22', 0),
('Kumbalangi Nights', 'vishnu13', 4, 'good', '2021-02-28 13:23:10', 0),
('Dev.D', 'vishnu13', 4, 'great', '2021-03-03 14:24:37', 1),
('Green Miles', 'vishnu13', 5, 'great movie', '2021-03-03 14:25:22', 0),
('Jojo Rabbit', 'vishnu13', 5, 'great movie', '2021-03-03 14:26:43', 0),
('Green Miles', 'alex33', 5, 'very nyc', '2021-03-03 16:10:10', 0),
('Gangs of Wasseypur â€“ Part 1', 'vishnu13', 4, 'great movie', '2021-03-03 16:13:44', 0),
('June', 'vishnu13', 4, 'great', '2021-03-03 16:22:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movieswishlist`
--

DROP TABLE IF EXISTS `movieswishlist`;
CREATE TABLE IF NOT EXISTS `movieswishlist` (
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cover` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieswishlist`
--

INSERT INTO `movieswishlist` (`username`, `title`, `cover`) VALUES
('vishnu13', 'Kumbalangi Nights', 'images/movies/kumbalanginights.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `headline` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL,
  `newsstory` mediumtext NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`headline`, `cover`, `newsstory`, `name`, `email`, `timestamp`) VALUES
('Justice League: Snyder Cut Ends', 'images/news/good.jpg', 'hfhfg', 'VYSAKH KANNAN', 'vysakhkannan811@gmail.com', '2021-02-28 13:33:12'),
('Theory: Spider-Man 3 Has Two Daredevils', 'images/news/spider.png', 'There could be two versions of Daredevil in Spider-Man 3. One iteration of the Man Without Fear, Charlie Coxâ€™s Daredevil, will reportedly appear in the upcoming Phase 4 film. Cox previously portrayed the hero in his own show, which ran on Netflix for three seasons. He also starred as the character on Netflixâ€™s team-up series, Defenders', 'VYSAKH KANNAN', 'vysakhkannan811@gmail.com', '2021-02-28 13:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `age`, `dob`, `gender`, `address`, `email`, `phno`, `username`, `password`) VALUES
('VISHNU KANTH', 25, '1972-07-06', 'male', 'MARAVATTICKAL HOUSE,, K.S MANG', '13.vishnukanth@gmail.com', 2147483647, 'vishnu13', 'oldpassword'),
('akash', 23, '1947-06-11', 'male', 'vaikom', 'akash13@gmail.com', 2147483647, 'akash6111', 'password'),
('alex', 34, '1947-07-09', 'male', 'ekm', 'alex@gmail.com', 2147483647, 'alex333', 'password'),
('vysakh', 22, '0000-00-00', 'male', 'maravettickal', 'vysakh6@gmail.com', 555556666, 'vysakh', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `tvseries`
--

DROP TABLE IF EXISTS `tvseries`;
CREATE TABLE IF NOT EXISTS `tvseries` (
  `title` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `language` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `writer` varchar(100) NOT NULL,
  `maleactor` varchar(100) NOT NULL,
  `femaleactor` varchar(100) NOT NULL,
  `cover` varchar(500) NOT NULL,
  `trailer` varchar(500) NOT NULL,
  `storyline` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tvseries`
--

INSERT INTO `tvseries` (`title`, `platform`, `category`, `year`, `language`, `director`, `writer`, `maleactor`, `femaleactor`, `cover`, `trailer`, `storyline`) VALUES
('Game of Thrones', 'ott', 'drama,drama', 2011, 'english', 'David Nutter, David ', 'George R. R. Martin,', 'Kit Harington', 'Emilia Clarke', 'images/tvseries/gameofthrones.jpg', 'https://www.youtube.com/watch?v=gcTkNV5Vg1E', 'Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. Meanwhile, a force is rising after millenniums and threatens the existence of living men.First episode date: 17 April 2011'),
('Asur', 'ott', 'thriller', 2020, 'hindi', 'Oni Sen', 'Gaurav Shukla', 'Arshad Warsi', 'Anupriya Goenka', 'images/tvseries/asur.jpg', 'https://www.youtube.com/watch?v=LDirQBvwx7g', 'Asur is a 2020 Indian Hindi language crime thriller web series based on True Detective, produced by Tanveer Bookwala of Ding Entertainment for the video on demand platform Voot. The series stars Arshad Warsi, Barun Sobti and Amey Wagh. The series is set in current times and revolves around serial killings.'),
('Auto Shankar', 'ott', 'action', 2019, 'hindi', 'Ranga', 'Ranga', 'Appani Sarath', 'Swayam Siddha', 'images/tvseries/autoshankar.jpg', 'https://www.youtube.com/watch?v=Oz3jcld4PBg', 'Auto Shankar, is a ZEE5 original web series set against the backdrop of Madras from 1985 to 1995. It was released on 2019. the story revolves around an auto driver who live changes when he involves into local transportation of liquor and acting as a pimp.'),
('Lost', 'ott', 'music', 2004, 'english', 'Jeffrey Lieber', 'J. J. Abrams', 'Matthew Fox', 'Evangeline Lilly', 'images/tvseries/lost.jpg', 'https://www.youtube.com/watch?v=KTu8iDynwNc', 'The survivors of a plane crash find themselves stranded on a mysterious island. They are forced to work together for their survival when they realise that they are not alone on the island.');

-- --------------------------------------------------------

--
-- Table structure for table `tvseriesreview`
--

DROP TABLE IF EXISTS `tvseriesreview`;
CREATE TABLE IF NOT EXISTS `tvseriesreview` (
  `tvseriestitle` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `reviewrating` int(10) NOT NULL,
  `reviewcontent` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvseriesreview`
--

INSERT INTO `tvseriesreview` (`tvseriestitle`, `username`, `reviewrating`, `reviewcontent`, `time`, `report`) VALUES
('Game of Thrones', 'vishnu13', 4, 'fantastic', '2021-01-24 04:28:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tvserieswishlist`
--

DROP TABLE IF EXISTS `tvserieswishlist`;
CREATE TABLE IF NOT EXISTS `tvserieswishlist` (
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cover` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tvserieswishlist`
--

INSERT INTO `tvserieswishlist` (`username`, `title`, `cover`) VALUES
('vishnu13', 'Lost', 'images/tvseries/lost.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
