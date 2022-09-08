-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 03, 2022 at 08:37 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp-assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin01', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_ID` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`course_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_ID`, `course_name`, `description`, `date`) VALUES
(1, 'Road Safety', 'Understand the rules of the road while using them', '2022-08-13'),
(2, '\"Sampai Selamat\"', 'The campaign will mainly raise the awareness of the people to drive safely and have more awareness while driving.', '2022-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `course_cmmt`
--

DROP TABLE IF EXISTS `course_cmmt`;
CREATE TABLE IF NOT EXISTS `course_cmmt` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `member_id` int DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `course_cmmt`
--

INSERT INTO `course_cmmt` (`course_id`, `comment`, `member_id`) VALUES
(1, 'This is cool!', NULL),
(2, 'This is cool!', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_enrolment`
--

DROP TABLE IF EXISTS `course_enrolment`;
CREATE TABLE IF NOT EXISTS `course_enrolment` (
  `enrolment_ID` int NOT NULL AUTO_INCREMENT,
  `member_id` int NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  PRIMARY KEY (`enrolment_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_enrolment`
--

INSERT INTO `course_enrolment` (`enrolment_ID`, `member_id`, `member_name`, `course_name`) VALUES
(11, 91, 'Johnny', '\"Sampai Selamat\"'),
(12, 91, 'Johnny', 'Road Safety'),
(13, 91, 'Johnny', '\"Sampai Selamat\"');

-- --------------------------------------------------------

--
-- Table structure for table `course_fav`
--

DROP TABLE IF EXISTS `course_fav`;
CREATE TABLE IF NOT EXISTS `course_fav` (
  `course_fav_ID` int NOT NULL AUTO_INCREMENT,
  `course_details_ID` int NOT NULL,
  `member_ID` int NOT NULL,
  PRIMARY KEY (`course_fav_ID`),
  KEY `FK_fav_member` (`member_ID`),
  KEY `fk_fav_course` (`course_details_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_fav`
--

INSERT INTO `course_fav` (`course_fav_ID`, `course_details_ID`, `member_ID`) VALUES
(19, 1, 91),
(20, 2, 91);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

DROP TABLE IF EXISTS `event_details`;
CREATE TABLE IF NOT EXISTS `event_details` (
  `event_id` int NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_des` varchar(255) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_name`, `event_date`, `event_des`) VALUES
(1, 'Road Safety Day', '2022-08-02', 'Welcome to the event of today - Road Safety Day. Today we will gather all the people around the world and talk about how should road safety be like. Do Look Forward to it. '),
(7, '\"Love Safety, Marry Rules, Divorce Speed\"', '2022-09-29', 'This campaign is highly recommended to join for all people from all walks of life as safety is always the priority while using the road ! Do come join us on the day itself ! ');

-- --------------------------------------------------------

--
-- Table structure for table `event_enrolment`
--

DROP TABLE IF EXISTS `event_enrolment`;
CREATE TABLE IF NOT EXISTS `event_enrolment` (
  `enrolment_ID` int NOT NULL AUTO_INCREMENT,
  `member_id` int NOT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`enrolment_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event_enrolment`
--

INSERT INTO `event_enrolment` (`enrolment_ID`, `member_id`, `member_name`, `event_name`) VALUES
(49, 91, 'Johnny', '\"Love Safety, Marry Rules, Divorce Speed\"'),
(48, 91, 'Johnny', 'Road Safety Day'),
(50, 1240, 'Lizzie', 'Road Safety Day');

-- --------------------------------------------------------

--
-- Table structure for table `event_fav`
--

DROP TABLE IF EXISTS `event_fav`;
CREATE TABLE IF NOT EXISTS `event_fav` (
  `event_fav_ID` int NOT NULL AUTO_INCREMENT,
  `event_detail_ID` int NOT NULL,
  `member_ID` int NOT NULL,
  PRIMARY KEY (`event_fav_ID`),
  KEY `FK_eventfav_eventdetails` (`event_detail_ID`),
  KEY `FK_eventfav_member` (`member_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event_fav`
--

INSERT INTO `event_fav` (`event_fav_ID`, `event_detail_ID`, `member_ID`) VALUES
(39, 7, 91);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_ID` int NOT NULL AUTO_INCREMENT,
  `member_ID` int DEFAULT NULL,
  `feedback` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  PRIMARY KEY (`feedback_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_ID`, `member_ID`, `feedback`, `username`, `email_address`) VALUES
(2, NULL, 'cool', 'Vgame', 'serene130202@gmail.com'),
(3, NULL, 'cool', 'TP060925@mail.apu.edu.my', 'serene130202@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `forum_ID` int NOT NULL AUTO_INCREMENT,
  `forum_topic` varchar(255) NOT NULL,
  PRIMARY KEY (`forum_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_ID`, `forum_topic`) VALUES
(1, 'How not to die while drive'),
(2, 'Survive car crash');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

DROP TABLE IF EXISTS `forum_comments`;
CREATE TABLE IF NOT EXISTS `forum_comments` (
  `cmmt_ID` int NOT NULL AUTO_INCREMENT,
  `forum_ID` int NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`cmmt_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`cmmt_ID`, `forum_ID`, `member_name`, `comments`) VALUES
(1, 1, 'stella', 'This is cool'),
(2, 1, 'John', 'Agree this is cool'),
(3, 2, 'John', 'Bagus topic'),
(4, 1, 'Aubrey', 'Try not to use phone while driving lol'),
(5, 1, 'Wocestareababab', 'Always take your car to do maintenance '),
(6, 1, 'John', 'Bagus topic'),
(7, 1, 'John', 'haha'),
(22, 1, 'Johnny', 'qwdqwdqwdqwd1212'),
(21, 2, 'Wicky', 'qwdqwdqwdqwd1212'),
(20, 1, 'Wicky', 'qwdqwd'),
(19, 1, 'Wicky', 'qwdwdq'),
(23, 1, 'Johnny', 'wgbjd');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_info`
--

DROP TABLE IF EXISTS `lecturer_info`;
CREATE TABLE IF NOT EXISTS `lecturer_info` (
  `lecturer_ID` int NOT NULL AUTO_INCREMENT,
  `lecturer_name` text NOT NULL,
  `lecturer_age` int NOT NULL,
  `lecturer_course` varchar(255) NOT NULL,
  PRIMARY KEY (`lecturer_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lecturer_info`
--

INSERT INTO `lecturer_info` (`lecturer_ID`, `lecturer_name`, `lecturer_age`, `lecturer_course`) VALUES
(1, 'ivan tan', 2, 'raod safety'),
(2, 'keith', 5, 'dfsfgfdghdfh'),
(4, 'wfe', 8, 'wf'),
(5, 'Shorty', 3, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) NOT NULL,
  `member_phone` varchar(20) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_address` text NOT NULL,
  `member_gender` varchar(10) NOT NULL,
  `member_date_of_birth` date NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL,
  `member_points` int NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1245 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_name`, `member_phone`, `member_email`, `member_address`, `member_gender`, `member_date_of_birth`, `member_username`, `member_password`, `member_points`) VALUES
(91, 'Johnny', '012-3456789', 'wick122@gmail.com', '23,Jalan Lincat 25', 'Male', '2022-07-28', 'john03', '12345678', 20),
(1235, 'Michael', '015-6678990', 'michelhere@gmail.com', '38,Jalan Tun Aminah', 'Male', '2022-07-28', 'michael45', '12345678', 0),
(1236, 'Arthur', '017-7789543', 'arthur@gmail.com', '38,Jalan Tun Aminah', 'Male', '2022-07-28', 'arthur23', '12345678', 0),
(1240, 'Lizzie', '013-5566758', 'lizzie@gmail.com', '27,Jalan Sutera 5', 'Female', '2022-08-19', 'lizzie223', '12345678', 90),
(1244, 'shorty', '123-7347874', 'irvinczy@hotmail.com', 'B-17-9, Covillea Bukit Jalil - Block B, Bukit Jalil, Kuala Lumpur 57000', 'Male', '1111-12-01', 'shorty123', '12345678', 0);

-- --------------------------------------------------------

--
-- Table structure for table `objective_trivia`
--

DROP TABLE IF EXISTS `objective_trivia`;
CREATE TABLE IF NOT EXISTS `objective_trivia` (
  `objective_ID` int NOT NULL AUTO_INCREMENT,
  `obj_ques` varchar(255) NOT NULL,
  `trivia_id` int NOT NULL,
  `corr_ans` varchar(255) NOT NULL,
  `wrng_ans1` varchar(255) NOT NULL,
  `wrng_ans2` varchar(255) NOT NULL,
  `wrng_ans3` varchar(255) NOT NULL,
  PRIMARY KEY (`objective_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `objective_trivia`
--

INSERT INTO `objective_trivia` (`objective_ID`, `obj_ques`, `trivia_id`, `corr_ans`, `wrng_ans1`, `wrng_ans2`, `wrng_ans3`) VALUES
(12, 'When driving on motorcycle, what do you need to watch out for ?', 1, 'Other cars', 'Bicycles', 'Train', 'Plane'),
(11, 'What is the minimum age to get the motorcycle license', 1, '16', '17', '18', '20'),
(3, 'What is the common speed limit in Malaysia?', 3, '110 km/h', '120 km/h', '220 km/h', '50 km/h'),
(13, 'During a rainy day, what should you do when driving a motorcycle', 1, 'Slow down and be aware of the surroundings', 'Overtake other cars when possible', 'Go fast and never slow down', 'Stop the vehicle beside the road'),
(14, ' What is the most important aspect when driving a motorcycle', 1, 'Wearing a helmet', 'Turning on the engine', 'Stepping on the gas', 'Wearing gloves'),
(15, 'How do you put the car to a parking gear', 3, 'Push the gear to P and pull up the handbrakes', 'Push to D', 'Push to R and push down on handbrakes', 'Step on the brakes'),
(16, 'Why is the seat belt important', 3, 'To save you from a fatal car crash', 'For decoration and makes the car nicer', 'To stop you from moving too much when driving', 'To ensure that the seat is tied up\r\n'),
(17, 'What do you do when making a turn', 3, 'Slow down with the brakes and turn slowly', 'Step on the gas and turn', 'Stop the car and turn', 'Put to R gear and turn'),
(18, 'What should you do when you see a stop sign', 3, 'Stop behind the sign and let pedestrians cross', 'Turn off the engine', 'Do not stop and keep going', 'Slow down your vehicle to allow pedestrians to cross');

-- --------------------------------------------------------

--
-- Table structure for table `subjective_trivia`
--

DROP TABLE IF EXISTS `subjective_trivia`;
CREATE TABLE IF NOT EXISTS `subjective_trivia` (
  `subjective_ID` int NOT NULL AUTO_INCREMENT,
  `trivia_id` int NOT NULL,
  `subj_ques` varchar(255) NOT NULL,
  `subj_ans` varchar(255) NOT NULL,
  PRIMARY KEY (`subjective_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `subjective_trivia`
--

INSERT INTO `subjective_trivia` (`subjective_ID`, `trivia_id`, `subj_ques`, `subj_ans`) VALUES
(3, 3, 'The speed limit on the expressway is (___)', '110'),
(53, 1, '_____the speed is crucial when driving at night as it is harder to see', 'Reducing'),
(52, 1, 'On the expressway, motorcycle speed limit is______', '110'),
(54, 1, 'The motorcycle license is a class _____ license. ', 'B'),
(55, 1, 'At the traffic lights, motorcycles should stop at the_____', 'Front'),
(56, 3, 'Do not ____ when driving outside of hospitals or schools.', 'honk'),
(57, 3, 'When making a U-Turn, ____ and wait until there is no cars to turn.', 'stop'),
(58, 3, 'When driving at night turning on the ___ is a must.', 'headlights'),
(59, 3, '____ must be put on before driving.', 'Seatbelts');

-- --------------------------------------------------------

--
-- Table structure for table `trivia_title`
--

DROP TABLE IF EXISTS `trivia_title`;
CREATE TABLE IF NOT EXISTS `trivia_title` (
  `trivia_id` int NOT NULL AUTO_INCREMENT,
  `trivia_topic` varchar(255) NOT NULL,
  PRIMARY KEY (`trivia_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `trivia_title`
--

INSERT INTO `trivia_title` (`trivia_id`, `trivia_topic`) VALUES
(1, 'Motorcycle License'),
(3, 'Car License');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_fav`
--
ALTER TABLE `course_fav`
  ADD CONSTRAINT `fk_fav_course` FOREIGN KEY (`course_details_ID`) REFERENCES `course` (`course_ID`),
  ADD CONSTRAINT `FK_fav_member` FOREIGN KEY (`member_ID`) REFERENCES `member` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
