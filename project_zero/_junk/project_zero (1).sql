-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 02:08 PM
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
  `attendance_status` varchar(65) NOT NULL,
  `date_created` date NOT NULL,
  `date_modified` date NOT NULL,
  `studid` int(11) NOT NULL,
  `strand_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
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
(100, 'User barneystinson has successfully logged in.', 1543664710);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `strandid` int(11) NOT NULL,
  `section` varchar(25) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `id` int(11) NOT NULL,
  `strand` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`id`, `strand`) VALUES
(2, 'HUMSS'),
(4, 'ABM'),
(6, 'STEM');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studid` varchar(22) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `fname` varchar(65) NOT NULL,
  `lname` varchar(65) NOT NULL,
  `strand` varchar(20) NOT NULL,
  `year` varchar(65) NOT NULL,
  `section` varchar(25) NOT NULL,
  `school_yr` varchar(65) NOT NULL,
  `no_pres` int(22) NOT NULL,
  `no_late` int(22) NOT NULL,
  `no_abs` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studid`, `gender`, `fname`, `lname`, `strand`, `year`, `section`, `school_yr`, `no_pres`, `no_late`, `no_abs`) VALUES
(6, '2015-01013', 'Male', 'karl', 'cellona', 'HUMS', 'Grade 11', 'St.Joseph', '2018-2019', 19, 3, 5),
(7, '2015-01230', 'Female', 'chrysiele', 'pal', 'HUMSS', 'Grade 11', 'St.Paul', '2018-2019', 19, 3, 4),
(10, '2015-00321', 'Male', 'Ralph', 'Viernes', 'HUMSS', 'Grade 12', 'St.Catherine', '2018-2019', 5, 7, 4),
(11, '2015-0293', 'Male', 'Lebron', 'James', 'HUMSS', 'Grade 11', 'St.Catherine', '2018-2019', 1, 4, 0),
(12, '2015 - 01234', 'female', 'Stephen', 'Hawking', 'ABM', 'Grade 12', 'St.Catherine', '2018-2019', 17, 6, 5),
(13, '2015-01246', 'Male', 'Derrick', 'Rose', 'HUMSS', 'Grade 11', 'st.patrick', '2019-2020', 8, 2, 7);

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
(1, 'barneystinson', '', '$2y$11$GE/2Jg.OsWLfuoZgq1SF2e97HADOex6uENbarVIjW/eSa/7kEBAa2', 'Barney', 'Stinson', 1, 'nph.jpg', 1),
(32, 'karlcellona', 'kcellonap@gmail.com', 'karlcellona', 'karl', 'cellona', 2, '', 0),
(33, 'karl', '', '$2y$11$UGVEGEwCYFzASe5mooJgc.EQlM6wFZgsa5cO4qZfmfK68hFUvqscK', 'karl', 'cellona', 2, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
