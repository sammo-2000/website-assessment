-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2023 at 07:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `ID` int(3) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Summary` varchar(255) NOT NULL,
  `AwardName` varchar(20) NOT NULL,
  `UCASCode` varchar(5) DEFAULT NULL,
  `UCASPoint` varchar(5) DEFAULT NULL,
  `Year` varchar(10) NOT NULL,
  `Attandance` varchar(15) NOT NULL,
  `Length` varchar(15) NOT NULL,
  `Foundation` varchar(5) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Recruiting` varchar(5) NOT NULL,
  `IMGName` varchar(100) NOT NULL,
  `IMGAlt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`ID`, `Title`, `Type`, `Summary`, `AwardName`, `UCASCode`, `UCASPoint`, `Year`, `Attandance`, `Length`, `Foundation`, `Subject`, `Recruiting`, `IMGName`, `IMGAlt`) VALUES
(1, 'Computing', 'Undergraduate', 'Learn how to code, configure and integrate applications, databases and systems architectures which form the pillars of modern technology in today&rsquo;s world.', 'BSc (Honours)', 'G504', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Computing', 'No', 'img/computing.webp', 'Women on computer, with laptop on her left'),
(2, 'Computer Networks', 'Undergraduate', 'This course includes general computing skills in programming, cyber security, information systems, management and professionalism in a technical environment.', 'BSc (Honours)', 'G420', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Computing', 'No', 'img/computer-network.webp', 'Cable going into back of the machine'),
(3, 'Cyber Security with Forensics', 'Undergraduate', 'Prepare for a career in cyber security by designing security systems, identifying evidence of cybercrimes and acting as detectives in a digital world.', 'BSc (Honours)', 'F4G4', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Computing', 'No', 'img/cyber-security.webp', 'Locked mobile, earphone next to it'),
(4, 'Computer Science for Games', 'Undergraduate', 'Create the software powering the next generation of blockbuster games.', 'BSc (Honours)', 'G611', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Computing', 'No', 'img/computer-games.webp', 'Gamepad placed on table front of computer'),
(5, 'Software Engineering', 'Undergraduate', 'Gain experience in the whole software development process and prepare for a career in software engineering.', 'BEng (Honours)', 'G600', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Computing', 'No', 'img/computer-course.webp', 'Code on laptop screen in dark room'),
(6, 'Computer Science', 'Undergraduate', 'Gain a solid foundation in the core areas of computer science, including programming, algorithms, data structures and software development.', 'BSc (Honours)', 'G400', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Computing', 'No', 'img/computer-science.webp', 'Motherboard'),
(7, 'Computing with Foundation Year', 'Undergraduate', 'Gain a degree in computing&nbsp;&ndash; with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A020', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/computing.webp', 'Women on computer, with laptop on her left'),
(8, 'Cyber Security with Forensics with Foundation Year', 'Undergraduate', 'Gain a degree in cyber security with forensics, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A023', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/cyber-security.webp', 'Locked mobile, earphone next to it'),
(9, 'Software Engineering with Foundation Year', 'Undergraduate', 'Gain a degree in software engineering, with an initial foundation year to prepare for the course.', 'BEng (Honours)', 'A017', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/computer-course.webp', 'Code on laptop screen in dark room'),
(10, 'Cyber Security with Foundation Year', 'Undergraduate', 'Gain a degree in cyber security &ndash; with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A093', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/cyber-security.webp', 'Locked mobile, earphone next to it'),
(11, 'Information Technology with Business Studies with Foundation Year', 'Undergraduate', 'Gain a degree in information technology with business studies, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A019', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/business-digital.webp', 'Man holding pencil, explaining the paper on table'),
(12, 'Computer Science with Foundation Year', 'Undergraduate', 'Gain a degree in computer science, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A022', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/computer-science.webp', 'Motherboard'),
(13, 'Computer Science for Games with Foundation Year', 'Undergraduate', 'Gain a degree in computer science for games, with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A092', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/computer-games.webp', 'Gamepad placed on table front of computer'),
(14, 'Business and Digital Technology with Foundation Year', 'Undergraduate', 'Gain a degree in business and digital communications technology &ndash; with an initial foundation year to prepare for the course.', 'BSc (Honours)', 'A018', '80', '2022/23', 'Full-time', '4 / 5 Years', 'Yes', 'Computing', 'Yes', 'img/business-digital.webp', 'Man holding pencil, explaining the paper on table'),
(15, 'Computing', 'Postgraduate', 'A course enhanced by real-life project experience for non-computing graduates wanting to pursue a career in the IT industry.', 'MSc', NULL, NULL, '2022/23', 'Part-time', '3 Years', 'No', 'Computing', 'No', 'img/computing.webp', 'Women on computer, with laptop on her left'),
(16, 'Computing and Informatics', 'Postgraduate', 'Conduct a period of intensive, supervised study where you critically investigate and evaluate an approved topic and make an original contribution to knowledge.', 'MPhil', NULL, NULL, '2022/23', 'Part-time', '3 Years', 'No', 'Computing', 'No', 'img/computing.webp', 'Women on computer, with laptop on her left'),
(17, 'Cyber Security', 'Postgraduate', 'Develop your skills and academic knowledge in the growing field of cyber security through academic teaching, industry input and practical skills development.&nbsp;<strong>Currently applications for this course are only open to home students.</strong>', 'MSc', NULL, NULL, '2022/23', 'Full-time', '1 Year', 'No', 'Computing', 'No', 'img/cyber-security.webp', 'Locked mobile, earphone next to it');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `ID` int(3) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Summary` varchar(255) NOT NULL,
  `AwardName` varchar(20) NOT NULL,
  `UCASCode` varchar(5) DEFAULT NULL,
  `UCASPoint` varchar(5) DEFAULT NULL,
  `Year` varchar(10) NOT NULL,
  `Attandance` varchar(15) NOT NULL,
  `Length` varchar(15) NOT NULL,
  `Foundation` varchar(5) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Recruiting` varchar(5) NOT NULL,
  `IMGName` varchar(100) NOT NULL,
  `IMGAlt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`ID`, `Title`, `Type`, `Summary`, `AwardName`, `UCASCode`, `UCASPoint`, `Year`, `Attandance`, `Length`, `Foundation`, `Subject`, `Recruiting`, `IMGName`, `IMGAlt`) VALUES
(18, 'Graphic Design', 'Undergraduate', 'Develop your own creative and innovative approach to graphic design by challenging and exploring contemporary practices through a series of exciting and diverse projects.', 'BA (Honours)', 'W210', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Art and design', 'No', 'img/graphic.webp', 'Adobe apps icon on iPad & MacBook at front'),
(19, 'Interior Architecture and Design', 'Undergraduate', 'Develop your own creative and sustainable approach to interior architecture and design by challenging and exploring contemporary practices through a series of exciting and diverse projects.', 'BA (Honours)', 'W250', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Art and design', 'No', 'img/design.webp', 'Guy designing on iPad '),
(20, 'Jewellery, Materials and Design', 'Undergraduate', 'Develop your own creative and innovative approach to jewellery design, challenging and exploring contemporary practices through new technologies and craft techniques.', 'BA (Honours)', 'W721', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Art and design', 'No', 'img/design.webp', 'Guy designing on iPad '),
(21, 'Game Design and Development', 'Undergraduate', 'Study a course with a distinctive, practice-based approach to games design &ndash; gaining a diverse skill set and useful experience within the field.', 'BA (Honours)', 'A112', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Art and design', 'No', 'img/game-design.webp', 'Someone designing and creating UI'),
(22, 'Product Design', 'Undergraduate', 'Develop a highly creative approach to producing innovative \'future-facing\' products by exploring and challenging design through a series of exciting and diverse projects.', 'BSc (Honours)', 'D009', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Art and design', 'No', 'img/product-design.webp', 'Laptop on right, with iPad on left with some designs'),
(23, 'Product Design', 'Undergraduate', 'Develop a creative and innovative approach to product design and service innovation by challenging and exploring contemporary practices through a series of exciting and diverse projects.', 'BA (Honours)', 'W240', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Art and design', 'No', 'img/product-design.webp', '0Laptop on right, with iPad on left with some designs'),
(24, 'Digital Media Production', 'Undergraduate', 'Design and produce new media products in film, animation, interactive media, web, apps, VR, cross-media and games.', 'BA (Honours)', 'W212', '112', '2022/23', 'Full-time', '3 / 4 Years', 'No', 'Art and design', 'No', 'img/media-product.webp', 'Writing on paper with sharpy');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
