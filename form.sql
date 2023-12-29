-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 06:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cart`
--

CREATE TABLE `add_cart` (
  `sr.no` int(11) NOT NULL,
  `name` text NOT NULL,
  `rate` text NOT NULL,
  `star` text NOT NULL,
  `quantity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_question_paper`
--

CREATE TABLE `admin_question_paper` (
  `a_qid` int(11) NOT NULL,
  `subject` text NOT NULL,
  `paper_type` text NOT NULL,
  `photo` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_question_paper`
--

INSERT INTO `admin_question_paper` (`a_qid`, `subject`, `paper_type`, `photo`, `added_on`) VALUES
(2, 'jjkl', 'singh', 'question_paper_pdf/15122023-162716jjklabout-img.jpg', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `admin_recorde`
--

CREATE TABLE `admin_recorde` (
  `a_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `mobile_number` text NOT NULL,
  `email_id` text NOT NULL,
  `Date_of_birth` text NOT NULL,
  `address` text NOT NULL,
  `added_on` date NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_recorde`
--

INSERT INTO `admin_recorde` (`a_id`, `name`, `father_name`, `mother_name`, `mobile_number`, `email_id`, `Date_of_birth`, `address`, `added_on`, `photo`) VALUES
(4, 'yogesh ', 'juyal', 'sama devi', '8859654068', 'yjuyal5@gmail.com', '2002-06-17', 'JALWAL GAON MALLA\r\nMADAN NEGI,TEHRI GARHWAL , UTTARAKHAND ', '2023-12-29', 'admin_photo/20221202_185725.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_update_msg`
--

CREATE TABLE `admin_update_msg` (
  `am_id` int(11) NOT NULL,
  `tittel` text NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_update_msg`
--

INSERT INTO `admin_update_msg` (`am_id`, `tittel`, `massage`) VALUES
(3, 'vacation leave', 'Your Vacation Leave 1 January to 15 january');

-- --------------------------------------------------------

--
-- Table structure for table `admin_vedio`
--

CREATE TABLE `admin_vedio` (
  `av_id` int(11) NOT NULL,
  `details` text NOT NULL,
  `vedio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `A_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email_id` text NOT NULL,
  `mobile` text NOT NULL,
  `massage` text NOT NULL,
  `coursetype` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`A_id`, `name`, `email_id`, `mobile`, `massage`, `coursetype`, `added_on`) VALUES
(3, 'aman', 'yjuyal5@gmail.com', '8859654068', 'asds', 'sdaasd', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `rate` text NOT NULL,
  `discount` text NOT NULL,
  `star` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `name`, `rate`, `discount`, `star`, `photo`) VALUES
(1, 'BOOKS', '123', '78%', '5.5*', '2357.JPG'),
(3, 'fd', 'hjh', 'jhjk', 'jh', 'student_photo20072023-223624kjhjkhJKHJKScreenshot (19).png'),
(4, 'aman', 'ww@gmail.com', '56565', 'juyjh', 'student_photo20072023-223624kjhjkhJKHJKScreenshot (19).png'),
(5, 'sddf', 'jhgh', '876', 'hj', 'student_photostudent_photogolu pik.PNG'),
(6, 'aman', '5656', '45', '6.5', 'student_photostudent_photo20072023-223624kjhjkhJKHJKScreenshot (19).png');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper_pdf`
--

CREATE TABLE `question_paper_pdf` (
  `question_id` int(11) NOT NULL,
  `sem` text NOT NULL,
  `subject` text NOT NULL,
  `year` text NOT NULL,
  `pdf_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question_paper_pdf`
--

INSERT INTO `question_paper_pdf` (`question_id`, `sem`, `subject`, `year`, `pdf_url`) VALUES
(22, '2', 'Physics', '2015', 'question_paper_pdf/29122023-2136132BANS-183_June_2022_ignouassignmentguru.com.pdf'),
(23, '2', 'Physics', '2016', 'question_paper_pdf/29122023-2136342BANS-183_ignouassignmentguru.com_DEC21.pdf'),
(24, '3', 'Physics', '2016', 'question_paper_pdf/29122023-2136533BHDLA-138_ignouassignmentguru.com_DEC21.pdf'),
(25, '1', 'Chemistry', '2019', 'question_paper_pdf/29122023-2152541BANS-183_ignouassignmentguru.com_DEC21.pdf'),
(26, '3', 'Chemistry', '2017', 'question_paper_pdf/29122023-2153173BPSC-133_June_2022_ignouassignmentguru.com.pdf'),
(27, '3', 'Mathematics', '2016', 'question_paper_pdf/29122023-2153533BPSE 141 (H) 2023-24.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `stu_id` int(11) NOT NULL,
  `student_name` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `mobile_number` text NOT NULL,
  `email` text NOT NULL,
  `dob` text NOT NULL,
  `address` text NOT NULL,
  `section` text NOT NULL,
  `photo` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`stu_id`, `student_name`, `father_name`, `mother_name`, `mobile_number`, `email`, `dob`, `address`, `section`, `photo`, `added_on`) VALUES
(37, 'ankit', 'singh', 'mamta', '9854758968', 'ankit232@gmail.com', '2015-10-23', 'rishikesh, uttarakhand', 'BCA', 'student_photo/15122023-220856Aman Uniyalteam-4.jpg', '2023-12-29'),
(38, 'sanjay nautiyal', 'Kriti dutt ', 'vimla devi', '9639455071', 'sanjay121@gmail.com', '2018-10-25', 'JALWAL GAON MALLA\r\nMADAN NEGI', 'BTECH MACHANICAL', 'student_photo/8c4e509301ed77f6c788f1250fa57ab7.png', '2023-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `student_vedio`
--

CREATE TABLE `student_vedio` (
  `vedio_id` int(11) NOT NULL,
  `department` text NOT NULL,
  `details` text NOT NULL,
  `pdf_url` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_vedio`
--

INSERT INTO `student_vedio` (`vedio_id`, `department`, `details`, `pdf_url`, `added_on`) VALUES
(13, 'Physics', 'physics history in 1 minutes', 'student_vedio_pdf/29122023-201630PhysicsBest 1 minute INSPIRATIONAL video   Priyanshu.mp4', '0000-00-00'),
(16, 'Physics', 'About Physics chapters', 'student_vedio_pdf/29122023-202228PhysicsWhat is Physics.mp4', '0000-00-00'),
(17, 'Physics', 'The Beauty Of physics', 'student_vedio_pdf/29122023-213057Physics1 Minute Timer.mp4', '0000-00-00'),
(18, 'Physics', 'Rich A Jorden belfort', 'student_vedio_pdf/29122023-213327Physics𝐑𝐈𝐂𝐇   A Jordan Belfort Edit (Wolf Of Wall Street).mp4', '0000-00-00'),
(19, 'Physics', 'wolf of wallstreet', 'student_vedio_pdf/29122023-213406Physics[4k] Wolf Of Wallstreet   Edit.mp4', '0000-00-00'),
(20, 'Physics', 'albert Eintein ', 'student_vedio_pdf/29122023-213451PhysicsAlbert Einstein said  I agree  , Color Video.mp4', '0000-00-00'),
(21, 'Mathematics', 'Math solves problem', 'student_vedio_pdf/29122023-214238MathematicsX+Y (Clip) - Nathan solves math problem   Pinnacle Films.mp4', '0000-00-00'),
(24, 'Physics', 'the wolf of wall street', 'student_vedio_pdf/29122023-214638Physics「 4K 」𝐓𝐇𝐄 𝐖𝐎𝐋𝐅 𝐎𝐅 𝐖𝐀𝐋𝐋 𝐒𝐓𝐑𝐄𝐄𝐓   𝐌𝐎𝐍𝐄𝐘 𝐓𝐑𝐄𝐄𝐒.mp4', '0000-00-00'),
(25, 'Mathematics', 'the walf of wakk street', 'student_vedio_pdf/29122023-214710Mathematics「 4K 」𝐓𝐇𝐄 𝐖𝐎𝐋𝐅 𝐎𝐅 𝐖𝐀𝐋𝐋 𝐒𝐓𝐑𝐄𝐄𝐓   𝐌𝐎𝐍𝐄𝐘 𝐓𝐑𝐄𝐄𝐒.mp4', '0000-00-00'),
(26, 'Mathematics', 'math in one min', 'student_vedio_pdf/29122023-214740Mathematics1 Minute Timer.mp4', '0000-00-00'),
(27, 'Chemistry', 'chemistry in one min', 'student_vedio_pdf/29122023-215136ChemistryBest 1 minute INSPIRATIONAL video   Priyanshu.mp4', '0000-00-00'),
(28, 'Chemistry', 'albert Eintein ', 'student_vedio_pdf/29122023-215154ChemistryAlbert Einstein said  I agree  , Color Video.mp4', '0000-00-00'),
(29, 'Chemistry', 'wolf of wallstreet', 'student_vedio_pdf/29122023-215221Chemistry[4k] Wolf Of Wallstreet   Edit.mp4', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `stu_enroll`
--

CREATE TABLE `stu_enroll` (
  `stu_id` int(11) NOT NULL,
  `username_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email_id` text NOT NULL,
  `enroll_no` text NOT NULL,
  `course` text NOT NULL,
  `department` text NOT NULL,
  `sem` text NOT NULL,
  `year` text NOT NULL,
  `type` text NOT NULL,
  `status` text NOT NULL,
  `added_on` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stu_enroll`
--

INSERT INTO `stu_enroll` (`stu_id`, `username_id`, `teacher_id`, `admin_id`, `name`, `email_id`, `enroll_no`, `course`, `department`, `sem`, `year`, `type`, `status`, `added_on`) VALUES
(70, 0, 0, 4, 'yogesh ', 'yjuyal5@gmail.com', 'yogesh@123', '', '', '', '2015', 'Admin', '1', '2023/12/29 10:47:18'),
(71, 37, 0, 0, 'ankit', 'ankit232@gmail.com', '90120', 'BCA', '', '1', '2020', 'Student', '1', '2023/12/29 11:09:13'),
(72, 0, 14, 0, 'devender Nautiyal', 'devender12@gmail.com', 'devender@123', '', 'Physics', '', '2016', 'Teacher', '1', '2023/12/29 12:27:45'),
(73, 0, 15, 0, 'dharmbhir bhandari ', 'dharm123@gmail.com', 'dharmbhir@987', '', 'Mathematics', '', '2016', 'Teacher', '1', '2023/12/29 12:30:10'),
(74, 0, 16, 0, 'Amit Kumar', 'amit123@gmail.com', 'amit@9823', '', 'Chemistry', '', '2017', 'Teacher', '1', '2023/12/29 12:32:42'),
(75, 0, 17, 0, 'nikhil chahuan', 'nikhil23@gmail.com', 'nikhil@232', '', 'Mechanics', '', '2017', 'Teacher', '1', '2023/12/29 12:37:25'),
(76, 0, 18, 0, 'Akshay Nautiyal', 'akshay2322@gmail.com', 'akshay@9832', '', 'English', '', '2018', 'Teacher', '1', '2023/12/29 17:27:39'),
(77, 38, 0, 0, 'sanjay nautiyal', 'sanjay121@gmail.com', '90121', 'BTECH MACHANICAL', '', '1', '2016', 'Student', '1', '2023/12/29 17:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_recorde`
--

CREATE TABLE `teacher_recorde` (
  `T_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `email_id` text NOT NULL,
  `Date_of_birth` date NOT NULL,
  `address` text NOT NULL,
  `department` text NOT NULL,
  `photo` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_recorde`
--

INSERT INTO `teacher_recorde` (`T_id`, `name`, `father_name`, `mother_name`, `mobile_number`, `email_id`, `Date_of_birth`, `address`, `department`, `photo`, `added_on`) VALUES
(14, 'devender Nautiyal', 'shanti prasad', 'chandrma devi', 2147483647, 'devender12@gmail.com', '2021-06-29', 'mada negi, tehri garhwal', 'Physics', 'teacher_photo/15122023-220701Nikhil Nautiyalteam-3.jpg', '2023-12-29'),
(15, 'dharmbhir bhandari ', 'Rahul bhandari', 'Mamta devi', 2147483647, 'dharm123@gmail.com', '2021-06-15', 'panjab , hariyana', 'Mathematics', 'teacher_photo/15122023-220856Aman Uniyalteam-4.jpg', '2023-12-29'),
(16, 'Amit Kumar', 'ankhil bhandari', 'vimla devi ', 2147483647, 'amit123@gmail.com', '2016-06-15', 'dehradun , uttarakhand', 'Chemistry', 'teacher_photo/15122023-221057Akshay Bisttestimonial-2.jpg', '2023-12-29'),
(17, 'nikhil chahuan', 'molender singh', 'Godambari devi', 2147483647, 'nikhil23@gmail.com', '2021-06-01', 'ranipokhri , dehradun', 'Mechanics', 'teacher_photo/15122023-221152abhishek Juyaltestimonial-1.jpg', '2023-12-29'),
(18, 'Akshay Nautiyal', 'Kriti dutt', 'vimla devi', 2147483647, 'akshay2322@gmail.com', '2020-02-05', 'dehradun uttarakhand', 'English', 'teacher_photo/as-removebg-preview (2).png', '2023-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_update`
--

CREATE TABLE `teacher_update` (
  `T_update_id` int(11) NOT NULL,
  `tittle` text NOT NULL,
  `detail` text NOT NULL,
  `department` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_update`
--

INSERT INTO `teacher_update` (`T_update_id`, `tittle`, `detail`, `department`, `added_on`) VALUES
(8, 'Section A', 'Your physics copy will be checked tomorrow', 'Physics', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `sr_number` int(100) NOT NULL,
  `roll_number` text NOT NULL,
  `username` text NOT NULL,
  `photo` text NOT NULL,
  `password` text NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `user_roll` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`sr_number`, `roll_number`, `username`, `photo`, `password`, `mobile_number`, `user_roll`, `added_on`) VALUES
(68, 'yogesh@123', 'yogesh', 'admin_photo/20221202_185725.jpg', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'admin', '2023-12-29'),
(69, '90120', 'ankit123', 'student_photo/15122023-220604Anuj Thapliyalteam-1.jpg', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'student', '2023-12-29'),
(70, 'devender@123', 'devender121', 'teacher_photo/15122023-220701Nikhil Nautiyalteam-3.jpg', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'teacher', '2023-12-29'),
(71, 'dharmbhir@987', 'dharambhir1212', 'teacher_photo/15122023-221057Akshay Bisttestimonial-2.jpg', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'teacher', '2023-12-29'),
(72, 'amit@9823', 'amit123', 'teacher_photo/15122023-221152abhishek Juyaltestimonial-1.jpg', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'teacher', '0000-00-00'),
(73, 'nikhil@232', 'nikhil@934', 'teacher_photo/download.jpeg', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'teacher', '0000-00-00'),
(74, 'akshay@9832', 'akshay232', 'teacher_photo/8c4e509301ed77f6c788f1250fa57ab7.png', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'teacher', '0000-00-00'),
(75, '90121', 'sanjay123', 'student_photo/8c4e509301ed77f6c788f1250fa57ab7.png', 'fb814dc8dd8f4023765322d194b1f8ff', 2147483647, 'student', '2023-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `website_course`
--

CREATE TABLE `website_course` (
  `wc_id` int(11) NOT NULL,
  `Course` text NOT NULL,
  `About_Course` text NOT NULL,
  `Durection` int(11) NOT NULL,
  `photo` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_course`
--

INSERT INTO `website_course` (`wc_id`, `Course`, `About_Course`, `Durection`, `photo`, `added_on`) VALUES
(3, '\nB.Tech CSE', ' Bachelor of Technology in Computer Science and Engineering (B.Tech CSE) focuses on computer systems, programming, algorithms, and software development. Students gain skills in coding, data structures, and problem-solving for diverse applications.', 4, 'website_image/15122023-215117BTECH CSEBTech-in-Computer-Science2-min.jpg', '2023-12-15'),
(4, 'B.Tech in Civil Engineering', 'B.Tech in Civil Engineering involves designing, constructing, and maintaining infrastructure. Students learn structural analysis, transportation engineering, environmental sustainability, and project management for diverse civil engineering applications.', 4, 'website_image/15122023-215437B.Tech in Civil Engineeringcivil-engineer-hispanic-smiling-constuction-600nw-2143737113.webp', '2023-12-15'),
(5, ' B.Tech in Mechanical Engineering', 'B.Tech in Mechanical Engineering focuses on designing, analyzing, and manufacturing mechanical systems. Students learn thermodynamics, mechanics, and materials, gaining expertise in product development, automation, and energy systems.', 4, 'website_image/15122023-215617 B.Tech in Mechanical Engineeringengineer-technician-designing-drawings-engineering-260nw-1487153492.webp', '2023-12-15'),
(6, ' B.Tech in Information Technology (IT)', ' B.Tech in Information Technology (IT) emphasizes computer systems, software development, and network management. Students acquire skills in programming, cybersecurity, and data management for IT solutions in diverse industries.', 4, 'website_image/15122023-215806 B.Tech in Information Technology (IT)IT.jpg', '2023-12-15'),
(7, 'B.Tech in Electronics and Communication Engineering', ' B.Tech in Electronics and Communication Engineering focuses on electronic systems, communication technologies, and signal processing. Students gain expertise in circuit design, wireless communication, and embedded systems for diverse applications.', 4, 'website_image/15122023-220031B.Tech in Electronics and Communication Engineeringmain-qimg-cb6f542f502b23283dd145a6c257f9d3-lq.jpeg', '2023-12-15'),
(8, 'B.Tech in Electrical and Computer Science', ' B.Tech in Electrical and Computer Science integrates electrical engineering and computer science. Students learn hardware-software integration, power systems, and data processing for developing innovative solutions in diverse technological domains.', 4, 'website_image/15122023-220218B.Tech in Electrical and Computer Sciencedownload.jpeg', '2023-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `website_teacher`
--

CREATE TABLE `website_teacher` (
  `wt_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `instagram_link` text NOT NULL,
  `facebook_link` text NOT NULL,
  `twetter_link` text NOT NULL,
  `photo` text NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_teacher`
--

INSERT INTO `website_teacher` (`wt_id`, `name`, `subject`, `instagram_link`, `facebook_link`, `twetter_link`, `photo`, `added_on`) VALUES
(3, 'Anuj Thapliyal', 'Physics', 'www.instagram.com', 'www.facebook.com', 'www.twitter.com', 'website_image/15122023-220604Anuj Thapliyalteam-1.jpg', '2023-12-15'),
(5, 'Aman Uniyal', 'Math', 'sd', 'asd', 'asd', 'website_image/15122023-220856Aman Uniyalteam-4.jpg', '2023-12-15'),
(8, 'Akshay Nautiya;', 'Civil', 'sa', 'sa', 'sa', 'website_image/15122023-221339Akshay Nautiya;team-3.jpg', '2023-12-15'),
(9, 'Nitika Rawat', 'Mechanical', 'sa', 'sa', 'sa', 'website_image/15122023-221424Nitika Rawatteam-2.jpg', '2023-12-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cart`
--
ALTER TABLE `add_cart`
  ADD PRIMARY KEY (`sr.no`);

--
-- Indexes for table `admin_question_paper`
--
ALTER TABLE `admin_question_paper`
  ADD PRIMARY KEY (`a_qid`);

--
-- Indexes for table `admin_recorde`
--
ALTER TABLE `admin_recorde`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin_update_msg`
--
ALTER TABLE `admin_update_msg`
  ADD PRIMARY KEY (`am_id`);

--
-- Indexes for table `admin_vedio`
--
ALTER TABLE `admin_vedio`
  ADD PRIMARY KEY (`av_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `question_paper_pdf`
--
ALTER TABLE `question_paper_pdf`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `student_vedio`
--
ALTER TABLE `student_vedio`
  ADD PRIMARY KEY (`vedio_id`);

--
-- Indexes for table `stu_enroll`
--
ALTER TABLE `stu_enroll`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `teacher_recorde`
--
ALTER TABLE `teacher_recorde`
  ADD PRIMARY KEY (`T_id`);

--
-- Indexes for table `teacher_update`
--
ALTER TABLE `teacher_update`
  ADD PRIMARY KEY (`T_update_id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`sr_number`);

--
-- Indexes for table `website_course`
--
ALTER TABLE `website_course`
  ADD PRIMARY KEY (`wc_id`);

--
-- Indexes for table `website_teacher`
--
ALTER TABLE `website_teacher`
  ADD PRIMARY KEY (`wt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cart`
--
ALTER TABLE `add_cart`
  MODIFY `sr.no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_question_paper`
--
ALTER TABLE `admin_question_paper`
  MODIFY `a_qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_recorde`
--
ALTER TABLE `admin_recorde`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_update_msg`
--
ALTER TABLE `admin_update_msg`
  MODIFY `am_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_vedio`
--
ALTER TABLE `admin_vedio`
  MODIFY `av_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `question_paper_pdf`
--
ALTER TABLE `question_paper_pdf`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `student_vedio`
--
ALTER TABLE `student_vedio`
  MODIFY `vedio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `stu_enroll`
--
ALTER TABLE `stu_enroll`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `teacher_recorde`
--
ALTER TABLE `teacher_recorde`
  MODIFY `T_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher_update`
--
ALTER TABLE `teacher_update`
  MODIFY `T_update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `sr_number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `website_course`
--
ALTER TABLE `website_course`
  MODIFY `wc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `website_teacher`
--
ALTER TABLE `website_teacher`
  MODIFY `wt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
