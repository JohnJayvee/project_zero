-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 06:05 PM
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
  `reason` varchar(155) NOT NULL,
  `attendance_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`id`, `studid`, `attendance_status`, `datetoday`, `excuse`, `reason`, `attendance_day`) VALUES
(1, '2011', 3, '2019-06-12 10:36:26', '', '', 0),
(2, '2012', 2, '2019-06-12 11:16:07', '', '', 0);

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
(353, ' has successfully updated a user.', 1559093162),
(354, ' has successfully updated a user.', 1559093249),
(355, ' has successfully updated a user.', 1559093493),
(356, 'User  has successfully added a Section.', 1559097669),
(357, 'User  has successfully added a Section.', 1559097806),
(358, 'User  has successfully added a Section.', 1559098249),
(359, 'User  has successfully added a Section.', 1559098271),
(360, 'User  has successfully added a Section.', 1559098280),
(361, 'User has successfully added a Student.', 1559100409),
(362, 'User has successfully added a Student.', 1559100516),
(363, 'User has successfully added a Student.', 1559100563),
(364, 'User has successfully added a Student.', 1559100604),
(365, 'User has successfully added a Student.', 1559100661),
(366, 'User has successfully added a user.', 1559105916),
(367, 'User has successfully deleted a user.', 1559105972),
(368, 'User has successfully deleted a user.', 1559105985),
(369, 'User has successfully deleted a user.', 1559105989),
(370, 'User has successfully deleted a user.', 1559105994),
(371, 'User admin has successfully logged in.', 1559106091),
(372, 'User has successfully added a Student.', 1559112488),
(373, ' has successfully updated a user.', 1559115053),
(374, ' has successfully updated a user.', 1559115380),
(375, ' has successfully updated a user.', 1559115394),
(376, 'User admin has successfully logged in.', 1559117160),
(377, 'User admin has successfully logged in.', 1559117533),
(378, 'User has successfully added a Student.', 1559118237),
(379, 'User has successfully added a Student.', 1559118273),
(380, 'User  has successfully added a Section.', 1559118290),
(381, 'User  has successfully added a Section.', 1559118365),
(382, 'User  has successfully added a strand.', 1559123173),
(383, 'User  has successfully added a strand.', 1559123253),
(384, 'User  has successfully added a strand.', 1559123313),
(385, 'User  has successfully added a Section.', 1559123375),
(386, 'User  has successfully added a Section.', 1559123388),
(387, 'User  has successfully added a Section.', 1559123401),
(388, 'User  has successfully added a Section.', 1559123415),
(389, 'User  has successfully added a Section.', 1559123435),
(390, 'User  has successfully added a Section.', 1559123454),
(391, 'User  has successfully added a Section.', 1559123492),
(392, 'User  has successfully added a Section.', 1559123515),
(393, 'User  has successfully added a Section.', 1559123599),
(394, 'User  has successfully added a Section.', 1559123678),
(395, 'User  has successfully added a Section.', 1559123708),
(396, 'User  has successfully added a Section.', 1559123905),
(397, 'User  has successfully added a Section.', 1559123934),
(398, 'User  has successfully added a Section.', 1559123946),
(399, 'User  has successfully added a Section.', 1559123968),
(400, 'User  has successfully added a Section.', 1559123981),
(401, 'User has successfully added a Student.', 1559124348),
(402, 'User has successfully added a Student.', 1559124433),
(403, 'User has successfully added a Student.', 1559124491),
(404, 'User has successfully added a Student.', 1559124520),
(405, 'User has successfully added a Student.', 1559124569),
(406, 'section has successfully deleted a section.', 1559124703),
(407, 'section has successfully deleted a section.', 1559124738),
(408, 'User  has successfully added a Section.', 1559125082),
(409, 'User  has successfully added a Section.', 1559125100),
(410, 'User  has successfully added a Section.', 1559125122),
(411, 'User has successfully added a Student.', 1559125166),
(412, 'User has successfully added a Student.', 1559125203),
(413, ' has successfully updated a user.', 1559126865),
(414, 'User admin has successfully logged in.', 1559139726),
(415, 'User has successfully updated a student.', 1559140997),
(416, 'User has successfully updated a student.', 1559141007),
(417, 'User has successfully updated a student.', 1559141020),
(418, 'User has successfully updated a student.', 1559141067),
(419, 'User has successfully updated a student.', 1559141079),
(420, 'User has successfully updated a student.', 1559141129),
(421, 'User has successfully updated a student.', 1559141157),
(422, 'User has successfully updated a student.', 1559141223),
(423, ' has successfully updated a user.', 1559141234),
(424, 'User has successfully updated a student.', 1559141264),
(425, 'User has successfully updated a student.', 1559141274),
(426, 'User has successfully updated a student.', 1559141612),
(427, 'User admin has successfully logged in.', 1559142042),
(428, 'User has successfully updated a student.', 1559142314),
(429, 'User has successfully updated a student.', 1559142535),
(430, 'User has successfully updated a student.', 1559146529),
(431, 'User has successfully updated a student.', 1559146546),
(432, ' has successfully updated a user.', 1559147415),
(433, 'User has successfully updated a student.', 1559147460),
(434, 'User has successfully updated a student.', 1559147469),
(435, 'User has successfully updated a student.', 1559147493),
(436, 'User has successfully updated a student.', 1559147515),
(437, ' has successfully updated a user.', 1559148730),
(438, ' has successfully updated a user.', 1559148786),
(439, ' has successfully updated a user.', 1559148849),
(440, 'User admin has successfully logged in.', 1559149589),
(441, 'User admin has successfully logged in.', 1559149601),
(442, 'User has successfully added a Student.', 1559149721),
(443, 'User has successfully added a Student.', 1559149744),
(444, 'User has successfully added a Student.', 1559149781),
(445, 'User has successfully added a Student.', 1559149806),
(446, 'User has successfully added a Student.', 1559149845),
(447, 'User admin has successfully logged in.', 1559150014),
(448, 'User has successfully added a Student.', 1559150667),
(449, 'User has successfully added a Student.', 1559150702),
(450, 'User has successfully added a Student.', 1559150733),
(451, 'User has successfully added a Student.', 1559150759),
(452, 'User has successfully added a Student.', 1559150790),
(453, 'User has successfully added a Student.', 1559150816),
(454, 'User admin has successfully logged in.', 1559152525),
(455, 'User admin has successfully logged in.', 1559152537),
(456, 'User has successfully added a Student.', 1559153588),
(457, 'User admin has successfully logged in.', 1559154441),
(458, 'User  has successfully added a Section.', 1559154537),
(459, 'User  has successfully added a Section.', 1559154547),
(460, 'User  has successfully added a Section.', 1559154562),
(461, 'User  has successfully added a Section.', 1559154589),
(462, 'User  has successfully added a Section.', 1559154604),
(463, 'User  has successfully added a Section.', 1559154617),
(464, 'User has successfully added a Student.', 1559154664),
(465, 'User has successfully added a Student.', 1559154698),
(466, 'User has successfully added a Student.', 1559154762),
(467, 'User has successfully added a Student.', 1559154788),
(468, 'User has successfully added a Student.', 1559154812),
(469, 'User has successfully added a Student.', 1559154868),
(470, 'User has successfully updated a student.', 1559155572),
(471, 'User admin has successfully logged in.', 1559176765),
(472, 'User has successfully updated a student.', 1559177168),
(473, 'User has successfully added a Student.', 1559177211),
(474, 'User has successfully added a Student.', 1559177251),
(475, 'User has successfully added a Student.', 1559177282),
(476, 'User has successfully added a Student.', 1559177326),
(477, 'User has successfully added a Student.', 1559177367),
(478, 'User has successfully added a Student.', 1559177431),
(479, ' has successfully updated a user.', 1559177789),
(480, ' has successfully updated a user.', 1559178007),
(481, 'User  has successfully added a Section.', 1559178306),
(482, 'User  has successfully added a Section.', 1559178340),
(483, 'User  has successfully added a Section.', 1559178576),
(484, 'User  has successfully added a Section.', 1559178600),
(485, ' has successfully updated a user.', 1559178716),
(486, 'User has successfully updated a student.', 1559179112),
(487, 'User has successfully updated a student.', 1559179123),
(488, 'User admin has successfully logged in.', 1559181025),
(489, ' has successfully updated a user.', 1559181161),
(490, 'User has successfully updated a student.', 1559181248),
(491, 'User has successfully updated a student.', 1559181301),
(492, 'User user has successfully logged in.', 1559181323),
(493, 'User admin has successfully logged in.', 1559199446),
(494, ' has successfully updated a user.', 1559199598),
(495, ' has successfully updated a user.', 1559199624),
(496, ' has successfully updated a user.', 1559199657),
(497, ' has successfully updated a user.', 1559199946),
(498, 'User has successfully updated a student.', 1559201082),
(499, 'User admin has successfully logged in.', 1559455335),
(500, ' has successfully updated a user.', 1559455370),
(501, 'User  has successfully added a Section.', 1559455639),
(502, 'User  has successfully added a Section.', 1559455662),
(503, 'User  has successfully added a Section.', 1559455686),
(504, 'User has successfully updated a student.', 1559455762),
(505, ' has successfully updated a user.', 1559455987),
(506, ' has successfully updated a user.', 1559456715),
(507, ' has successfully updated a user.', 1559457411),
(508, ' has successfully updated a user.', 1559532667),
(509, ' has successfully updated a user.', 1559532688),
(510, ' has successfully updated a user.', 1559532847),
(511, ' has successfully updated a user.', 1559532866),
(512, ' has successfully added a Section.', 1559533101),
(513, 'Userhas successfully added a Section.', 1559533416),
(514, 'User admin has successfully logged in.', 1559564127),
(515, ' has successfully updated a user.', 1559564908),
(516, ' has successfully updated a user.', 1559564948),
(517, ' has successfully updated a user.', 1559564976),
(518, ' has successfully updated a user.', 1559564995),
(519, ' has successfully updated a user.', 1559565420),
(520, ' has successfully updated a user.', 1559565644),
(521, 'section has successfully deleted a section.', 1559566006),
(522, 'section has successfully deleted a section.', 1559566010),
(523, 'User has successfully deleted a section', 1559566144),
(524, 'User has successfully deleted a section', 1559566256),
(525, 'User has successfully deleted a section', 1559566273),
(526, 'User has successfully deleted a section', 1559566387),
(527, 'User has successfully deleted a section', 1559566590),
(528, 'User has successfully deleted a section', 1559566595),
(529, 'User has successfully added a Section.', 1559612913),
(530, 'User  has successfully added a Section.', 1559612999),
(531, 'section has successfully deleted a section.', 1559613004),
(532, ' has successfully updated a user.', 1559614149),
(533, ' has successfully updated a user.', 1559614163),
(534, ' has successfully updated a user.', 1559614524),
(535, ' has successfully updated a user.', 1559614529),
(536, 'User admin has successfully logged in.', 1559617702),
(537, ' has successfully updated a section.', 1559618249),
(538, 'User user has successfully logged in.', 1559632172),
(539, 'User user has successfully logged in.', 1559632765),
(540, 'User admin has successfully logged in.', 1559632819),
(541, ' has successfully updated a user.', 1559633764),
(542, ' has successfully updated a user.', 1559634074),
(543, 'User has successfully updated a student.', 1559634275),
(544, 'User has successfully updated a student.', 1559634297),
(545, 'User has successfully added a user.', 1559634665),
(546, ' has successfully updated a user.', 1559634705),
(547, 'User  has successfully added a Section.', 1559634772),
(548, ' has successfully updated a user.', 1559636768),
(549, 'User admin has successfully logged in.', 1559967450),
(550, 'User admin has successfully logged in.', 1560262914),
(551, ' has successfully added a Student.', 1560263809),
(552, 'admin has successfully added a Student.', 1560263898),
(553, 'User  has successfully added a strand.', 1560263948),
(554, 'admin has successfully added a strand.', 1560264057),
(555, ' has successfully added a Section.', 1560264174),
(556, 'admin has successfully added a Section.', 1560264258),
(557, ' has successfully updated a user.', 1560265327),
(558, ' has successfully updated a user.', 1560265474),
(559, 'admin has successfully added a school year.', 1560275804),
(560, 'admin has successfully added a school year.', 1560275853),
(561, 'admin has successfully added a Section.', 1560275870),
(562, 'admin has successfully added a Section.', 1560275920),
(563, 'admin has successfully added a Section.', 1560275942),
(564, 'admin has successfully added a Section.', 1560275963),
(565, 'admin has successfully added a Section.', 1560275979),
(566, 'admin has successfully updated a section.', 1560276579),
(567, 'admin has successfully updated a section.', 1560276635),
(568, 'section has successfully deleted a section.', 1560277736),
(569, 'admin has successfully added a Section.', 1560277973),
(570, 'User admin has successfully logged in.', 1560334940),
(571, 'admin has successfully added a Student.', 1560335003),
(572, 'admin has successfully added a Student.', 1560338151),
(573, 'User has successfully deleted a strand.', 1560338414),
(574, 'User has successfully deleted a strand.', 1560338417),
(575, 'admin has successfully added a strand.', 1560338656),
(576, 'admin has successfully added a Section.', 1560338707),
(577, 'admin has successfully added a Section.', 1560338749),
(578, 'admin has successfully added a Section.', 1560338783),
(579, 'admin has successfully added a Student.', 1560338913),
(580, 'User admin has successfully logged in.', 1560348990),
(581, 'User admin has successfully logged in.', 1560363660);

-- --------------------------------------------------------

--
-- Table structure for table `reasons`
--

CREATE TABLE `reasons` (
  `id` int(11) NOT NULL,
  `reasons` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reasons`
--

INSERT INTO `reasons` (`id`, `reasons`) VALUES
(3, 'Sakit'),
(4, 'traffic');

-- --------------------------------------------------------

--
-- Table structure for table `school_yr`
--

CREATE TABLE `school_yr` (
  `id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_yr`
--

INSERT INTO `school_yr` (`id`, `year`) VALUES
(2, '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `strand_id` int(11) NOT NULL,
  `section_name` varchar(65) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_id`, `strand_id`, `section_name`, `year_level`, `year`) VALUES
(14, 10002, 20122, 'st.joseph', 'Grade 11', '2018-2019'),
(16, 10004, 2223, 'st.paul', 'Grade 11', '2018-2019'),
(17, 10005, 5555, 'st.john', 'Grade 11', '2018-2019'),
(18, 10007, 20122, 'st.peter', 'Grade 11', '2018-2019'),
(19, 10009, 5555, 'st.catherine', 'Grade 11', '2018-2019'),
(20, 30001, 20122, 'ALUMNI ABM', 'ALUMNI', '2018-2019'),
(21, 30002, 2223, ' ALUMNI HUMSS', 'ALUMNI', '2018-2019'),
(22, 30003, 20001, ' ALUMNI STEM', 'ALUMNI', '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE `strand` (
  `id` int(11) NOT NULL,
  `strand_id` int(11) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `strand_initials` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`id`, `strand_id`, `strand`, `strand_initials`) VALUES
(1, 20122, 'Accountancy and Bussiness Management', 'ABM'),
(2, 2223, 'Humanities and Social Sciences', 'HUMSS'),
(6, 20001, 'Science, Technology, Engineering, and Mathematics ', 'STEM');

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
  `section_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `studid`, `fname`, `mname`, `lname`, `gender`, `section_id`, `status`) VALUES
(1, '2011', 'Karl Patrick ', 'Castaneda', 'Cellona', 'Male', '10002', 0),
(2, '2012', 'Chrysiele', 'Lizardo', 'Pal', 'Male', '10007', 0),
(3, '2013', 'Johana Mae', 'Tangan', 'Leano', 'Male', '10004', 0);

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
(35, 'admin', '', '$2y$11$tfjirSPfCc57g6WNusTAuOGTBnZBg6wut60fyvOY8bQQzt6waF2FG', 'admin', 'admin', 1, '', 1),
(36, 'user', '', '$2y$11$m1KxeYuReg7OidJcQ1Jhw.yCzH6Nu6yFQpv6u4qmkvOZxJPxQEeoO', 'user', 'user', 2, '', 1),
(37, 'johncena', '', '$2y$11$G9Cpdo55PhnpmlTI8MMs5OLF1C2RcAteZaDAR9P2FOIb59GzzK4P2', 'john', 'cena', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `year_level`
--

CREATE TABLE `year_level` (
  `id` int(11) NOT NULL,
  `year_level_id` int(11) NOT NULL,
  `year_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_level`
--

INSERT INTO `year_level` (`id`, `year_level_id`, `year_level`) VALUES
(1, 11, 'Grade 11'),
(2, 12, 'Grade 12'),
(3, 13, 'ALUMNI');

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
-- Indexes for table `reasons`
--
ALTER TABLE `reasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_yr`
--
ALTER TABLE `school_yr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year_id` (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `studid` (`studid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_level`
--
ALTER TABLE `year_level`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `year_level_id` (`year_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_records`
--
ALTER TABLE `attendance_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=582;
--
-- AUTO_INCREMENT for table `reasons`
--
ALTER TABLE `reasons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `school_yr`
--
ALTER TABLE `school_yr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `year_level`
--
ALTER TABLE `year_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
