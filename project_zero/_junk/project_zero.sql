-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 11:03 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_zero`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `id` int(11) NOT NULL,
  `studid` varchar(65) NOT NULL,
  `attendance_status` int(11) NOT NULL,
  `datetoday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `excuse` varchar(55) NOT NULL,
  `reason` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `text`, `datetime`) VALUES
(27, 'User has successfully updated a user.', 1542642246),
(28, 'User cbabaran has successfully logged in.', 1542642700),
(29, 'User has successfully deleted a user.', 1542642716),
(30, 'User has successfully added a user.', 1542642853),
(31, 'User has successfully added a user.', 1542645482),
(32, 'User has successfully deleted a user.', 1542645490),
(33, 'User has successfully deleted a user.', 1542645494),
(34, 'User cbabaran has successfully logged in.', 1542654024),
(35, 'User cbabaran has successfully logged in.', 1542860477),
(36, 'User cbabaran has successfully logged in.', 1542861718),
(37, 'User has successfully updated a user.', 1542865115),
(38, 'User has successfully deleted a user.', 1542866092),
(39, 'User has successfully updated a user.', 1542885918),
(40, 'User has successfully updated a user.', 1542885924),
(41, 'User barneystinson has successfully logged in.', 1542899287),
(42, 'User has successfully added a user.', 1542899318),
(43, 'User karl has successfully logged in.', 1542899329),
(44, 'User barneystinson has successfully logged in.', 1542901140),
(45, 'User  has successfully added a strand.', 1542953303),
(46, 'User  has successfully added a strand.', 1542953651),
(47, 'User has successfully added a user.', 1542953887),
(48, 'User has successfully added a user.', 1542954112),
(49, 'User  has successfully added a strand.', 1542954214),
(50, 'User  has successfully added a strand.', 1542954295),
(51, 'User  has successfully added a attendance.', 1542962305),
(52, 'User  has successfully added a attendance.', 1542962477),
(53, 'User  has successfully added a attendance.', 1542962585),
(54, 'User  has successfully added a attendance.', 1542962820),
(55, 'User  has successfully added a attendance.', 1542962979),
(56, 'User  has successfully added a attendance.', 1542963091),
(57, 'User  has successfully added a attendance.', 1542963194),
(58, 'User  has successfully added a attendance.', 1542963295),
(59, 'User  has successfully added a attendance.', 1542963429),
(60, 'User  has successfully added a attendance.', 1542967145),
(61, 'User  has successfully added a attendance.', 1542967778),
(62, 'User  has successfully added a attendance.', 1542968830),
(63, 'User  has successfully added a attendance.', 1542968973),
(64, 'User  has successfully added a attendance.', 1542969018),
(65, 'User  has successfully added a attendance.', 1542983945),
(66, 'User  has successfully added a attendance.', 1542983996),
(67, 'User  has successfully added a attendance.', 1542984054),
(68, 'User  has successfully added a attendance.', 1542984354),
(69, 'User  has successfully added a attendance.', 1542984394),
(70, 'User  has successfully added a attendance.', 1542984407),
(71, 'User  has successfully added a attendance.', 1542984456),
(72, 'User  has successfully added a attendance.', 1542984842),
(73, 'User  has successfully added a attendance.', 1542987666),
(74, 'User barneystinson has successfully logged in.', 1539799681),
(75, 'User  has successfully added a attendance.', 1539799738),
(76, 'User  has successfully added a attendance.', 1539799772),
(77, 'User  has successfully added a attendance.', 1539799968),
(78, 'User  has successfully added a attendance.', 1539799977),
(79, 'User barneystinson has successfully logged in.', 1539800200),
(80, 'User  has successfully added a attendance.', 1539800206),
(81, 'User  has successfully added a attendance.', 1539800228),
(82, 'User  has successfully added a attendance.', 1539800291),
(83, 'User has successfully added a Student.', 1539801265),
(84, 'User has successfully added a Student.', 1539801409),
(85, 'User has successfully added a Student.', 1539801519),
(86, 'User has successfully added a Student.', 1539801520),
(87, 'User has successfully added a Student.', 1539801555),
(88, 'User has successfully added a Student.', 1539801577),
(89, 'User  has successfully added a strand.', 1539801965),
(90, 'User  has successfully added a strand.', 1539802000),
(91, 'User barneystinson has successfully logged in.', 1543412740),
(92, 'User barneystinson has successfully logged in.', 1543423133),
(93, 'User has successfully added a Student.', 1543475470),
(94, 'User has successfully updated a student.', 1543476320),
(95, 'User barneystinson has successfully logged in.', 1543584690),
(96, 'User barneystinson has successfully logged in.', 1543585419),
(97, 'User barneystinson has successfully logged in.', 1543644124),
(98, 'User has successfully added a Student.', 1543650088),
(99, 'User barneystinson has successfully logged in.', 1543655245),
(100, 'User barneystinson has successfully logged in.', 1543664710),
(101, 'User barneystinson has successfully logged in.', 1543842693),
(102, 'User barneystinson has successfully logged in.', 1544015650),
(103, 'User  has successfully added a strand.', 1544026323),
(104, 'User  has successfully added a school year.', 1544026363),
(105, 'User barneystinson has successfully logged in.', 1544033896),
(106, 'User barneystinson has successfully logged in.', 1544075548),
(107, 'User  has successfully added a strand.', 1544076302),
(108, 'User  has successfully added a school year.', 1544076310),
(109, 'User  has successfully added a strand.', 1544076503),
(110, 'User  has successfully added a school year.', 1544076509),
(111, 'User  has successfully added a strand.', 1544076800),
(112, 'User  has successfully added a school year.', 1544076814),
(113, 'User  has successfully added a school year.', 1544077062),
(114, 'User  has successfully added a school year.', 1544077237),
(115, 'User has successfully added a Student.', 1544077513),
(116, 'User has successfully added a Student.', 1544077792),
(117, 'User has successfully added a Student.', 1544078137),
(118, 'User has successfully added a Student.', 1544078468),
(119, 'User has successfully added a Student.', 1544078809),
(120, 'User has successfully added a Student.', 1544079112),
(121, 'User has successfully added a Student.', 1544079341),
(122, 'User has successfully added a Student.', 1544079479),
(123, 'User has successfully added a Student.', 1544079868),
(124, 'User has successfully added a Student.', 1544080522),
(125, 'User has successfully added a Student.', 1544085778),
(126, 'User has successfully added a Student.', 1544085824),
(127, 'User barneystinson has successfully logged in.', 1544106111),
(128, 'User  has successfully added a strand.', 1544120953),
(129, 'User has successfully added a Student.', 1544124829),
(130, 'User has successfully added a Student.', 1544124973),
(131, 'User barneystinson has successfully logged in.', 1544164397),
(132, 'User barneystinson has successfully logged in.', 1544164435),
(133, 'User barneystinson has successfully logged in.', 1544170509),
(134, 'User has successfully added a Student.', 1544171094),
(135, 'User barneystinson has successfully logged in.', 1544192701),
(136, 'User has successfully added a Student.', 1544192752),
(137, 'User has successfully added a Student.', 1544192801),
(138, 'User has successfully added a Student.', 1544192863),
(139, 'User barneystinson has successfully logged in.', 1544242743),
(140, 'User barneystinson has successfully logged in.', 1544244562),
(141, 'User barneystinson has successfully logged in.', 1544244657),
(142, 'User  has successfully added a strand.', 1544247806),
(143, 'User has successfully added a Student.', 1544247846),
(144, ' has successfully updated a user.', 1544250669),
(145, ' has successfully updated a user.', 1544250752),
(146, 'User barneystinson has successfully logged in.', 1544252560),
(147, ' has successfully added an attendance.', 1544252635),
(148, 'User  has successfully added a strand.', 1544253075),
(149, 'User  has successfully added a school year.', 1544253127),
(150, 'User barneystinson has successfully logged in.', 1544264577),
(151, ' has successfully added an attendance.', 1544264584),
(152, 'User barneystinson has successfully logged in.', 1545062052),
(153, ' has successfully added an attendance.', 1545062068),
(154, 'User barneystinson has successfully logged in.', 1545140657),
(155, ' has successfully updated a user.', 1545140677),
(156, ' has successfully updated a user.', 1545140689),
(157, ' has successfully updated a user.', 1545140723),
(158, ' has successfully updated a user.', 1545140736),
(159, ' has successfully updated a user.', 1545140743),
(160, ' has successfully updated a user.', 1545140828),
(161, 'User barneystinson has successfully logged in.', 1552980381),
(162, ' has successfully added an attendance.', 1552982701),
(163, 'User barneystinson has successfully logged in.', 1553149355),
(164, 'User barneystinson has successfully logged in.', 1553149738),
(165, 'User has successfully added a user.', 1553149784),
(166, 'User admin has successfully logged in.', 1553149806),
(167, 'User barneystinson has successfully logged in.', 1553234378),
(168, 'User admin has successfully logged in.', 1556776865),
(169, 'User barneystinson has successfully logged in.', 1558014955),
(170, ' has successfully updated a user.', 1558014984),
(171, ' has successfully added an attendance.', 1558014993),
(172, 'User admin has successfully logged in.', 1558015477),
(173, 'User barneystinson has successfully logged in.', 1558015763),
(174, 'User barneystinson has successfully logged in.', 1558015866),
(175, 'User barneystinson has successfully logged in.', 1558076931),
(176, 'User barneystinson has successfully logged in.', 1558078897),
(177, 'User barneystinson has successfully logged in.', 1558081516),
(178, ' has successfully updated a user.', 1558095397),
(179, 'User admin has successfully logged in.', 1558097316),
(180, ' has successfully updated a user.', 1558097849),
(181, 'User barneystinson has successfully logged in.', 1558118492),
(182, 'User barneystinson has successfully logged in.', 1558119039),
(183, ' has successfully updated a user.', 1558119068),
(184, ' has successfully updated a user.', 1558119336),
(185, ' has successfully updated a user.', 1558119355),
(186, ' has successfully updated a user.', 1558119487),
(187, 'User barneystinson has successfully logged in.', 1558157194),
(188, 'User has successfully added a user.', 1558157214),
(189, ' has successfully updated a user.', 1558157233),
(190, ' has successfully updated a user.', 1558157252),
(191, ' has successfully updated a user.', 1558157312),
(192, ' has successfully updated a user.', 1558157319),
(193, ' has successfully updated a user.', 1558157842),
(194, ' has successfully updated a user.', 1558157847),
(195, ' has successfully updated a user.', 1558159449),
(196, ' has successfully updated a user.', 1558159453),
(197, ' has successfully updated a user.', 1558159457),
(198, ' has successfully updated a user.', 1558167509),
(199, 'User admin has successfully logged in.', 1558365368),
(200, ' has successfully updated a user.', 1558366016),
(201, 'User admin has successfully logged in.', 1558421640),
(202, 'User admin has successfully logged in.', 1558422271),
(203, ' has successfully updated a user.', 1558422290),
(204, 'User barneystinson has successfully logged in.', 1558422310),
(205, 'User admin has successfully logged in.', 1558455096),
(206, ' has successfully updated a user.', 1558455314),
(207, 'User admin has successfully logged in.', 1558499009),
(208, 'User admin has successfully logged in.', 1558499388),
(209, 'User admin has successfully logged in.', 1558508882),
(210, 'User admin has successfully logged in.', 1558510390),
(211, 'User admin has successfully logged in.', 1558537359),
(212, 'User admin has successfully logged in.', 1558546579),
(213, ' has successfully updated a user.', 1558547298),
(214, ' has successfully updated a user.', 1558547306),
(215, ' has successfully updated a user.', 1558550895),
(216, ' has successfully updated a user.', 1558550967),
(217, ' has successfully updated a user.', 1558550985),
(218, 'User admin has successfully logged in.', 1558580573),
(219, ' has successfully updated a user.', 1558587748),
(220, ' has successfully updated a user.', 1558587756),
(221, ' has successfully updated a user.', 1558591159);

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `id` int(11) NOT NULL,
  `reason` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_yr`
--

CREATE TABLE `school_yr` (
  `year_id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `strand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `id` int(11) NOT NULL,
  `strand` varchar(21) NOT NULL,
  `strand_initials` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studid` varchar(55) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `mname` varchar(55) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `year_level` varchar(65) NOT NULL,
  `strand` varchar(7) NOT NULL,
  `section` varchar(20) NOT NULL,
  `school_yr` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studid`, `fname`, `mname`, `lname`, `gender`, `year_level`, `strand`, `section`, `school_yr`) VALUES
(1, '2015', 'Karl Patrick', 'Castaneda', 'Cellona', 'Male', 'Grade 11', 'STEM', 'St.Paul', '2018-2019'),
(2, '2016', 'Chrysiele', 'Lizardo', 'Pal', 'Female', 'Grade 11', 'ABM', 'St.Peter', '2018-2019'),
(3, '2017', 'Diego', 'Dora', 'Boots', 'Male', 'Grade 11', 'STEM', 'St.Paul', '2018-2019'),
(4, '2018', 'Phil', 'bean', 'Brooks', 'Male', 'Grade 11', 'HUMSS', 'St.Catherine', '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(125) NOT NULL,
  `firstname` varchar(65) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `acct_type` int(2) NOT NULL,
  `photo` varchar(65) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `acct_type`, `photo`, `status`) VALUES
(1, 'barneystinson', '', '$2y$11$GE/2Jg.OsWLfuoZgq1SF2e97HADOex6uENbarVIjW/eSa/7kEBAa2', 'Barney', 'Stinson', 2, 'nph.jpg', 1),
(32, 'karlcellona', 'kcellonap@gmail.com', 'karlcellona', 'karl', 'cellona', 2, '', 1),
(33, 'karl', '', '$2y$11$UGVEGEwCYFzASe5mooJgc.EQlM6wFZgsa5cO4qZfmfK68hFUvqscK', 'karl', 'cellona', 2, '', 1),
(34, 'admin', '', '$2y$11$QqgtM5rEovkv0p24pqY.yOBquTsAJs03errHLVJ1yXaydwFKMU29a', 'karl', 'cellona', 1, '', 1),
(35, 'admin', '', '$2y$11$tfjirSPfCc57g6WNusTAuOGTBnZBg6wut60fyvOY8bQQzt6waF2FG', 'admin', 'admin', 1, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studid_2` (`studid`),
  ADD KEY `studid_3` (`studid`),
  ADD KEY `studid` (`studid`) USING BTREE;

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_yr`
--
ALTER TABLE `school_yr`
  ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sectionid` (`sectionid`);

--
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studid_2` (`studid`),
  ADD KEY `studid_3` (`studid`),
  ADD KEY `studid` (`studid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school_yr`
--
ALTER TABLE `school_yr`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD CONSTRAINT `attendance_records_ibfk_1` FOREIGN KEY (`studid`) REFERENCES `students` (`studid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
