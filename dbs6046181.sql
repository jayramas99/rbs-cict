-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:21 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbs6046181`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=285 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(164, '', '2022-11-21 11:20:50', 'Add Subject IT 306'),
(165, '', '2022-11-21 11:21:04', 'Add Subject IT 307'),
(166, '', '2022-11-21 14:38:07', 'Add Subject 123'),
(167, '', '2022-11-21 15:55:47', 'Edit Subject IT 308'),
(168, '', '2022-11-21 15:56:39', 'Add Subject IT 309'),
(169, '', '2022-11-21 15:59:18', 'Edit Subject IT 311'),
(170, '', '2022-11-21 15:59:27', 'Edit Subject IT 312'),
(171, '', '2022-11-21 15:59:37', 'Edit Subject IT 403'),
(172, '', '2022-11-21 16:00:01', 'Edit Subject IT 312'),
(173, '', '2022-11-21 16:00:29', 'Add Subject IT 403'),
(174, 'CICT Colleges', '2022-12-02 02:34:23', 'Deploy Assessments'),
(175, 'CICT Colleges', '2022-12-02 03:12:54', 'Deploy Assessments'),
(176, 'CICT Colleges', '2022-12-02 03:13:01', 'Deploy Assessments'),
(177, 'CICT Colleges', '2022-12-02 03:13:07', 'Deploy Assessments'),
(178, 'CICT Colleges', '2022-12-02 09:03:04', 'Deploy Assessments'),
(179, 'CICT Colleges', '2022-12-02 09:03:16', 'Deploy Assessments'),
(180, 'CICT Colleges', '2022-12-02 09:03:24', 'Deploy Assessments'),
(181, 'CICT Colleges', '2022-12-02 09:33:40', 'Deploy Assessments'),
(182, 'CICT Colleges', '2022-12-02 09:34:05', 'Deploy Assessments'),
(183, 'CICT Colleges', '2022-12-02 09:34:14', 'Deploy Assessments'),
(184, 'CICT Colleges', '2022-12-02 09:38:05', 'Deploy Assessments'),
(185, 'CICT Colleges', '2022-12-02 09:38:16', 'Deploy Assessments'),
(186, 'CICT Colleges', '2022-12-02 09:38:28', 'Deploy Assessments'),
(187, '', '2022-12-03 01:25:51', 'Add New Review Assessment IT 306'),
(188, 'CICT Colleges', '2022-12-03 01:35:49', 'Deploy Assessments'),
(189, 'CICT Colleges', '2022-12-03 01:36:20', 'Deploy Assessments'),
(190, '', '2022-12-03 01:48:46', 'Add New Review Assessment IT 306'),
(191, 'CICT Colleges', '2022-12-03 01:56:36', 'Deploy Assessments'),
(192, 'CICT Colleges', '2022-12-03 02:08:57', 'Deploy Assessments'),
(193, 'CICT Colleges', '2022-12-03 11:10:21', 'Deploy Assessments'),
(194, 'CICT Colleges', '2022-12-03 11:44:54', 'Deploy Assessments'),
(195, 'CICT Colleges', '2022-12-03 12:36:55', 'Deploy Assessments'),
(196, 'CICT Colleges', '2022-12-03 12:37:03', 'Deploy Assessments'),
(197, 'CICT Colleges', '2022-12-03 12:37:11', 'Deploy Assessments'),
(198, 'CICT Colleges', '2022-12-03 12:37:28', 'Deploy Assessments'),
(199, 'CICT Colleges', '2022-12-03 12:37:39', 'Deploy Assessments'),
(200, 'CICT Colleges', '2022-12-03 12:37:48', 'Deploy Assessments'),
(201, 'CICT Colleges', '2022-12-09 01:09:02', 'Deploy Assessments'),
(202, '', '2022-12-09 01:17:33', 'Add New Review Assessment IT 311'),
(203, 'CICT Colleges', '2022-12-09 01:48:18', 'Deploy Assessments'),
(204, 'CICT Colleges', '2022-12-09 01:49:34', 'Deploy Assessments'),
(205, 'CICT Colleges', '2022-12-09 01:50:50', 'Deploy Assessments'),
(206, 'CICT Colleges', '2022-12-09 01:51:51', 'Deploy Assessments'),
(207, 'CICT Colleges', '2022-12-09 01:52:53', 'Deploy Assessments'),
(208, 'CICT Colleges', '2022-12-09 02:05:43', 'Deploy Assessments'),
(209, 'CICT Colleges', '2022-12-10 12:16:31', 'Deploy Assessments'),
(210, 'CICT Colleges', '2022-12-10 12:16:40', 'Deploy Assessments'),
(211, 'CICT Colleges', '2022-12-10 12:16:49', 'Deploy Assessments'),
(212, 'CICT Colleges', '2022-12-10 12:25:34', 'Deploy Assessments'),
(213, 'CICT Colleges', '2022-12-10 12:30:29', 'Deploy Assessments'),
(214, 'CICT COLLEGE', '2022-12-10 13:53:07', 'Added a Professor'),
(215, 'CICT College', '2022-12-10 13:56:15', 'Import Professors'),
(216, 'CICT College', '2022-12-10 13:57:40', 'Import Students'),
(217, 'CICT Colleges', '2022-12-10 14:42:43', 'Deploy Assessments'),
(218, 'CICT Colleges', '2022-12-10 14:43:39', 'Deploy Assessments'),
(219, 'CICT Colleges', '2022-12-10 14:49:58', 'Deploy Assessments'),
(220, 'CICT Colleges', '2022-12-10 14:50:13', 'Deploy Assessments'),
(221, 'CICT Colleges', '2022-12-10 14:54:13', 'Deploy Assessments'),
(222, 'CICT Colleges', '2022-12-10 14:54:30', 'Deploy Assessments'),
(223, 'CICT Colleges', '2022-12-10 14:56:55', 'Deploy Assessments'),
(224, 'CICT Colleges', '2022-12-10 14:59:19', 'Deploy Assessments'),
(225, 'CICT Colleges', '2022-12-10 14:59:31', 'Deploy Assessments'),
(226, 'CICT Colleges', '2022-12-10 14:59:40', 'Deploy Assessments'),
(227, 'CICT Colleges', '2022-12-10 15:26:26', 'Deploy Assessments'),
(228, 'CICT Colleges', '2022-12-10 15:26:36', 'Deploy Assessments'),
(229, 'CICT Colleges', '2022-12-10 15:26:46', 'Deploy Assessments'),
(230, 'CICT College', '2022-12-10 15:33:29', 'Added a Professor'),
(231, 'CICT Colleges', '2022-12-10 16:04:53', 'Deploy Assessments'),
(232, 'CICT Colleges', '2022-12-10 16:05:10', 'Deploy Assessments'),
(233, 'CICT Colleges', '2022-12-10 16:05:20', 'Deploy Assessments'),
(234, 'CICT College', '2022-12-10 16:15:34', 'Import Students'),
(235, 'CICT Colleges', '2022-12-10 16:18:20', 'Deploy Assessments'),
(236, 'CICT Colleges', '2022-12-10 16:20:33', 'Deploy Assessments'),
(237, 'CICT College', '2022-12-10 16:22:43', 'Import Students'),
(238, 'CICT College', '2022-12-10 16:23:40', 'Import Students'),
(239, 'CICT Colleges', '2022-12-10 16:24:07', 'Deploy Assessments'),
(240, 'CICT Colleges', '2022-12-10 16:25:10', 'Deploy Assessments'),
(241, 'CICT College', '2022-12-10 16:26:32', 'Import Students'),
(242, 'CICT Colleges', '2022-12-10 16:27:23', 'Deploy Assessments'),
(243, 'CICT College', '2022-12-10 16:31:58', 'Import Students'),
(244, 'CICT College', '2022-12-10 16:36:30', 'Import Students'),
(245, 'CICT Colleges', '2022-12-10 16:42:30', 'Deploy Assessments'),
(246, 'CICT Colleges', '2022-12-10 16:52:16', 'Deploy Assessments'),
(247, 'CICT Colleges', '2022-12-10 16:54:27', 'Deploy Assessments'),
(248, 'CICT Colleges', '2022-12-10 17:03:51', 'Deploy Assessments'),
(249, 'CICT Colleges', '2022-12-10 17:09:20', 'Deploy Assessments'),
(250, 'CICT Colleges', '2022-12-10 17:11:30', 'Deploy Assessments'),
(251, 'CICT Colleges', '2022-12-10 18:19:49', 'Deploy Assessments'),
(252, 'CICT Colleges', '2022-12-10 18:21:37', 'Deploy Assessments'),
(253, 'CICT Colleges', '2022-12-10 18:22:17', 'Deploy Assessments'),
(254, 'CICT Colleges', '2022-12-10 18:23:16', 'Deploy Assessments'),
(255, 'CICT Colleges', '2022-12-10 18:24:07', 'Deploy Assessments'),
(256, 'CICT Colleges', '2022-12-10 18:24:47', 'Deploy Assessments'),
(257, 'CICT College', '2022-12-10 18:38:33', 'Import Students'),
(258, 'CICT College', '2022-12-10 19:00:42', 'Import Students'),
(259, 'CICT College', '2022-12-10 19:21:36', 'Import Students'),
(260, 'CICT College', '2022-12-10 19:24:23', 'Added a Professor'),
(261, 'CICT College', '2022-12-10 19:24:45', 'Added a Professor'),
(262, 'CICT College', '2022-12-10 19:49:20', 'Import Students'),
(263, 'CICT Colleges', '2022-12-10 19:57:42', 'Deploy Assessments'),
(264, 'CICT Colleges', '2022-12-10 19:57:54', 'Deploy Assessments'),
(265, 'CICT Colleges', '2022-12-10 19:58:03', 'Deploy Assessments'),
(266, 'CICT College', '2022-12-10 20:03:50', 'Import Students'),
(267, 'CICT Colleges', '2022-12-10 20:26:07', 'Deploy Assessments'),
(268, 'CICT Colleges', '2022-12-10 20:26:21', 'Deploy Assessments'),
(269, 'CICT Colleges', '2022-12-10 20:26:31', 'Deploy Assessments'),
(270, 'CICT College', '2022-12-10 21:23:54', 'Added a Professor'),
(271, 'CICT College', '2022-12-10 21:25:26', 'Import Students'),
(272, 'CICT Colleges', '2022-12-10 21:28:58', 'Deploy Assessments'),
(273, 'CICT College', '2022-12-10 22:32:58', 'Import Students'),
(274, 'CICT College', '2022-12-10 22:33:32', 'Added a Professor'),
(275, 'CICT College', '2022-12-10 22:33:46', 'Added a Professor'),
(276, 'CICT College', '2022-12-10 22:34:07', 'Added a Professor'),
(277, 'CICT College', '2022-12-10 22:36:23', 'Import Students'),
(278, 'CICT College', '2022-12-10 22:49:29', 'Import Students'),
(279, 'CICT College', '2022-12-10 22:51:37', 'Import Students'),
(280, 'CICT College', '2022-12-10 22:53:24', 'Import Students'),
(281, 'CICT Colleges', '2022-12-10 22:57:05', 'Deploy Assessments'),
(282, 'CICT Colleges', '2022-12-10 22:57:11', 'Deploy Assessments'),
(283, 'CICT Colleges', '2022-12-10 22:57:18', 'Deploy Assessments'),
(284, 'CICT College', '2022-12-11 00:19:00', 'Added a Professor');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL,
  `quiz_question_id` int(11) NOT NULL,
  `answer_text` varchar(100) NOT NULL,
  `choices` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=629 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `quiz_question_id`, `answer_text`, `choices`) VALUES
(425, 50, 'q1 e1', 'A'),
(426, 50, 'a', 'B'),
(427, 50, 'a', 'C'),
(428, 50, 'a', 'D'),
(429, 51, 'a', 'A'),
(430, 51, 'q2 e1', 'B'),
(431, 51, 'a', 'C'),
(432, 51, 'a', 'D'),
(433, 54, 'q5 e1', 'A'),
(434, 54, 'a', 'B'),
(435, 54, 'a', 'C'),
(436, 54, 'a', 'D'),
(437, 55, 'wd', 'A'),
(438, 55, 'a', 'B'),
(439, 55, 'a', 'C'),
(440, 55, 'a', 'D'),
(441, 56, 'a', 'A'),
(442, 56, 'wd', 'B'),
(443, 56, 'a', 'C'),
(444, 56, 'a', 'D'),
(445, 57, 'a', 'A'),
(446, 57, 'a', 'B'),
(447, 57, 'wd', 'C'),
(448, 57, 'a', 'D'),
(449, 60, 'a', 'A'),
(450, 60, 'a', 'B'),
(451, 60, 'a', 'C'),
(452, 60, 'wd', 'D'),
(453, 61, 'a', 'A'),
(454, 61, 'a', 'B'),
(455, 61, 'wd', 'C'),
(456, 61, 'a', 'D'),
(457, 62, 'a', 'A'),
(458, 62, 'wd', 'B'),
(459, 62, 'a', 'C'),
(460, 62, 'a', 'D'),
(461, 63, 'wd', 'A'),
(462, 63, 'a', 'B'),
(463, 63, 'a', 'C'),
(464, 63, 'a', 'D'),
(465, 66, 'a', 'A'),
(466, 66, 'wd', 'B'),
(467, 66, 'a', 'C'),
(468, 66, 'a', 'D'),
(469, 67, 'a', 'A'),
(470, 67, 'a', 'B'),
(471, 67, 'wd', 'C'),
(472, 67, 'a', 'D'),
(473, 69, 'a', 'A'),
(474, 69, 'a', 'B'),
(475, 69, 'wd', 'C'),
(476, 69, 'a', 'D'),
(477, 71, 'wd', 'A'),
(478, 71, 'a', 'B'),
(479, 71, 'a', 'C'),
(480, 71, 'a', 'D'),
(481, 72, 'wd', 'A'),
(482, 72, 'a', 'B'),
(483, 72, 'a', 'C'),
(484, 72, 'a', 'D'),
(485, 73, 'a', 'A'),
(486, 73, 'wd', 'B'),
(487, 73, 'a', 'C'),
(488, 73, 'a', 'D'),
(489, 74, 'a', 'A'),
(490, 74, 'a', 'B'),
(491, 74, 'wd', 'C'),
(492, 74, 'a', 'D'),
(493, 75, 'ba', 'A'),
(494, 75, 'a', 'B'),
(495, 75, 'a', 'C'),
(496, 75, 'a', 'D'),
(497, 76, 'a', 'A'),
(498, 76, 'ba', 'B'),
(499, 76, 'a', 'C'),
(500, 76, 'a', 'D'),
(501, 80, 'ba', 'A'),
(502, 80, 'a', 'B'),
(503, 80, 'a', 'C'),
(504, 80, 'a', 'D'),
(505, 81, 'a', 'A'),
(506, 81, 'ba', 'B'),
(507, 81, 'a', 'C'),
(508, 81, 'a', 'D'),
(509, 82, 'a', 'A'),
(510, 82, 'a', 'B'),
(511, 82, 'ba', 'C'),
(512, 82, 'a', 'D'),
(513, 86, 'a', 'A'),
(514, 86, 'a', 'B'),
(515, 86, 'ba', 'C'),
(516, 86, 'a', 'D'),
(517, 87, 'ba', 'A'),
(518, 87, 'a', 'B'),
(519, 87, 'a', 'C'),
(520, 87, 'a', 'D'),
(521, 88, 'a', 'A'),
(522, 88, 'ba', 'B'),
(523, 88, 'a', 'C'),
(524, 88, 'a', 'D'),
(525, 93, 'a', 'A'),
(526, 93, 'ba', 'B'),
(527, 93, 'a', 'C'),
(528, 93, 'a', 'D'),
(529, 94, 'ba', 'A'),
(530, 94, 'a', 'B'),
(531, 94, 'a', 'C'),
(532, 94, 'a', 'D'),
(533, 95, 'ba', 'A'),
(534, 95, 'a', 'B'),
(535, 95, 'a', 'C'),
(536, 95, 'a', 'D'),
(537, 96, 'ba', 'A'),
(538, 96, 'a', 'B'),
(539, 96, 'a', 'C'),
(540, 96, 'a', 'D'),
(541, 97, 'ba', 'A'),
(542, 97, 'a', 'B'),
(543, 97, 'a', 'C'),
(544, 97, 'a', 'D'),
(545, 100, 'sm', 'A'),
(546, 100, 'a', 'B'),
(547, 100, 'a', 'C'),
(548, 100, 'a', 'D'),
(549, 101, 'a', 'A'),
(550, 101, 'sm', 'B'),
(551, 101, 'a', 'C'),
(552, 101, 'a', 'D'),
(553, 102, 'sm', 'A'),
(554, 102, 'a', 'B'),
(555, 102, 'a', 'C'),
(556, 102, 'a', 'D'),
(557, 105, 'sm', 'A'),
(558, 105, 'a', 'B'),
(559, 105, 'a', 'C'),
(560, 105, 'a', 'D'),
(561, 106, 'a', 'A'),
(562, 106, 'sm', 'B'),
(563, 106, 'a', 'C'),
(564, 106, 'a', 'D'),
(565, 107, 'sm', 'A'),
(566, 107, 'a', 'B'),
(567, 107, 'a', 'C'),
(568, 107, 'a', 'D'),
(569, 108, 'sm', 'A'),
(570, 108, 'a', 'B'),
(571, 108, 'a', 'C'),
(572, 108, 'a', 'D'),
(573, 110, 'sm', 'A'),
(574, 110, 'a', 'B'),
(575, 110, 'a', 'C'),
(576, 110, 'a', 'D'),
(577, 111, 'sm', 'A'),
(578, 111, 'a', 'B'),
(579, 111, 'a', 'C'),
(580, 111, 'a', 'D'),
(581, 112, 'sm', 'A'),
(582, 112, 'a', 'B'),
(583, 112, 'a', 'C'),
(584, 112, 'a', 'D'),
(585, 113, 'sm', 'A'),
(586, 113, 'a', 'B'),
(587, 113, 'a', 'C'),
(588, 113, 'a', 'D'),
(589, 115, 'sm', 'A'),
(590, 115, 'a', 'B'),
(591, 115, 'a', 'C'),
(592, 115, 'a', 'D'),
(593, 116, 'sm', 'A'),
(594, 116, 'a', 'B'),
(595, 116, 'a', 'C'),
(596, 116, 'a', 'D'),
(597, 117, 'sm', 'A'),
(598, 117, 'a', 'B'),
(599, 117, 'a', 'C'),
(600, 117, 'a', 'D'),
(601, 118, 'a', 'A'),
(602, 118, 'sm', 'B'),
(603, 118, 'a', 'C'),
(604, 118, 'a', 'D'),
(605, 119, 'a', 'A'),
(606, 119, 'a', 'B'),
(607, 119, 'sm', 'C'),
(608, 119, 'a', 'D'),
(609, 120, 'a', 'A'),
(610, 120, 'sm', 'B'),
(611, 120, 'a', 'C'),
(612, 120, 'a', 'D'),
(613, 121, 'sm', 'A'),
(614, 121, 'a', 'B'),
(615, 121, 'a', 'C'),
(616, 121, 'a', 'D'),
(617, 122, 'a', 'A'),
(618, 122, 'a', 'B'),
(619, 122, 'a', 'C'),
(620, 122, 'sm', 'D'),
(621, 123, 'sm', 'A'),
(622, 123, 'a', 'B'),
(623, 123, 'a', 'C'),
(624, 123, 'a', 'D'),
(625, 124, 'a', 'A'),
(626, 124, 'a', 'B'),
(627, 124, 'a', 'C'),
(628, 124, 'sm', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `answer_main`
--

CREATE TABLE IF NOT EXISTS `answer_main` (
  `answer_id` int(11) NOT NULL,
  `quiz_question_id` int(11) NOT NULL,
  `answer_text` varchar(255) NOT NULL,
  `choices` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer_main`
--

INSERT INTO `answer_main` (`answer_id`, `quiz_question_id`, `answer_text`, `choices`) VALUES
(121, 50, 'q1 e1', 'A'),
(122, 50, 'a', 'B'),
(123, 50, 'a', 'C'),
(124, 50, 'a', 'D'),
(125, 51, 'a', 'A'),
(126, 51, 'q2 e1', 'B'),
(127, 51, 'a', 'C'),
(128, 51, 'a', 'D'),
(129, 54, 'q5 e1', 'A'),
(130, 54, 'a', 'B'),
(131, 54, 'a', 'C'),
(132, 54, 'a', 'D'),
(133, 55, 'wd', 'A'),
(134, 55, 'a', 'B'),
(135, 55, 'a', 'C'),
(136, 55, 'a', 'D'),
(137, 56, 'a', 'A'),
(138, 56, 'wd', 'B'),
(139, 56, 'a', 'C'),
(140, 56, 'a', 'D'),
(141, 57, 'a', 'A'),
(142, 57, 'a', 'B'),
(143, 57, 'wd', 'C'),
(144, 57, 'a', 'D'),
(145, 60, 'a', 'A'),
(146, 60, 'a', 'B'),
(147, 60, 'a', 'C'),
(148, 60, 'wd', 'D'),
(149, 61, 'a', 'A'),
(150, 61, 'a', 'B'),
(151, 61, 'wd', 'C'),
(152, 61, 'a', 'D'),
(153, 62, 'a', 'A'),
(154, 62, 'wd', 'B'),
(155, 62, 'a', 'C'),
(156, 62, 'a', 'D'),
(157, 63, 'wd', 'A'),
(158, 63, 'a', 'B'),
(159, 63, 'a', 'C'),
(160, 63, 'a', 'D'),
(161, 66, 'a', 'A'),
(162, 66, 'wd', 'B'),
(163, 66, 'a', 'C'),
(164, 66, 'a', 'D'),
(165, 67, 'a', 'A'),
(166, 67, 'a', 'B'),
(167, 67, 'wd', 'C'),
(168, 67, 'a', 'D'),
(169, 69, 'a', 'A'),
(170, 69, 'a', 'B'),
(171, 69, 'wd', 'C'),
(172, 69, 'a', 'D'),
(173, 71, 'wd', 'A'),
(174, 71, 'a', 'B'),
(175, 71, 'a', 'C'),
(176, 71, 'a', 'D'),
(177, 72, 'wd', 'A'),
(178, 72, 'a', 'B'),
(179, 72, 'a', 'C'),
(180, 72, 'a', 'D'),
(181, 73, 'a', 'A'),
(182, 73, 'wd', 'B'),
(183, 73, 'a', 'C'),
(184, 73, 'a', 'D'),
(185, 74, 'a', 'A'),
(186, 74, 'a', 'B'),
(187, 74, 'wd', 'C'),
(188, 74, 'a', 'D'),
(189, 75, 'ba', 'A'),
(190, 75, 'a', 'B'),
(191, 75, 'a', 'C'),
(192, 75, 'a', 'D'),
(193, 76, 'a', 'A'),
(194, 76, 'ba', 'B'),
(195, 76, 'a', 'C'),
(196, 76, 'a', 'D'),
(197, 80, 'ba', 'A'),
(198, 80, 'a', 'B'),
(199, 80, 'a', 'C'),
(200, 80, 'a', 'D'),
(201, 81, 'a', 'A'),
(202, 81, 'ba', 'B'),
(203, 81, 'a', 'C'),
(204, 81, 'a', 'D'),
(205, 82, 'a', 'A'),
(206, 82, 'a', 'B'),
(207, 82, 'ba', 'C'),
(208, 82, 'a', 'D'),
(209, 86, 'a', 'A'),
(210, 86, 'a', 'B'),
(211, 86, 'ba', 'C'),
(212, 86, 'a', 'D'),
(213, 87, 'ba', 'A'),
(214, 87, 'a', 'B'),
(215, 87, 'a', 'C'),
(216, 87, 'a', 'D'),
(217, 88, 'a', 'A'),
(218, 88, 'ba', 'B'),
(219, 88, 'a', 'C'),
(220, 88, 'a', 'D'),
(221, 93, 'a', 'A'),
(222, 93, 'ba', 'B'),
(223, 93, 'a', 'C'),
(224, 93, 'a', 'D'),
(225, 94, 'ba', 'A'),
(226, 94, 'a', 'B'),
(227, 94, 'a', 'C'),
(228, 94, 'a', 'D'),
(229, 95, 'ba', 'A'),
(230, 95, 'a', 'B'),
(231, 95, 'a', 'C'),
(232, 95, 'a', 'D'),
(233, 96, 'ba', 'A'),
(234, 96, 'a', 'B'),
(235, 96, 'a', 'C'),
(236, 96, 'a', 'D'),
(237, 97, 'ba', 'A'),
(238, 97, 'a', 'B'),
(239, 97, 'a', 'C'),
(240, 97, 'a', 'D'),
(241, 100, 'sm', 'A'),
(242, 100, 'a', 'B'),
(243, 100, 'a', 'C'),
(244, 100, 'a', 'D'),
(245, 101, 'a', 'A'),
(246, 101, 'sm', 'B'),
(247, 101, 'a', 'C'),
(248, 101, 'a', 'D'),
(249, 102, 'sm', 'A'),
(250, 102, 'a', 'B'),
(251, 102, 'a', 'C'),
(252, 102, 'a', 'D'),
(253, 105, 'sm', 'A'),
(254, 105, 'a', 'B'),
(255, 105, 'a', 'C'),
(256, 105, 'a', 'D'),
(257, 106, 'a', 'A'),
(258, 106, 'sm', 'B'),
(259, 106, 'a', 'C'),
(260, 106, 'a', 'D'),
(261, 107, 'sm', 'A'),
(262, 107, 'a', 'B'),
(263, 107, 'a', 'C'),
(264, 107, 'a', 'D'),
(265, 108, 'sm', 'A'),
(266, 108, 'a', 'B'),
(267, 108, 'a', 'C'),
(268, 108, 'a', 'D'),
(269, 110, 'sm', 'A'),
(270, 110, 'a', 'B'),
(271, 110, 'a', 'C'),
(272, 110, 'a', 'D'),
(273, 111, 'sm', 'A'),
(274, 111, 'a', 'B'),
(275, 111, 'a', 'C'),
(276, 111, 'a', 'D'),
(277, 112, 'sm', 'A'),
(278, 112, 'a', 'B'),
(279, 112, 'a', 'C'),
(280, 112, 'a', 'D'),
(281, 113, 'sm', 'A'),
(282, 113, 'a', 'B'),
(283, 113, 'a', 'C'),
(284, 113, 'a', 'D'),
(285, 115, 'sm', 'A'),
(286, 115, 'a', 'B'),
(287, 115, 'a', 'C'),
(288, 115, 'a', 'D'),
(289, 116, 'sm', 'A'),
(290, 116, 'a', 'B'),
(291, 116, 'a', 'C'),
(292, 116, 'a', 'D'),
(293, 117, 'sm', 'A'),
(294, 117, 'a', 'B'),
(295, 117, 'a', 'C'),
(296, 117, 'a', 'D'),
(297, 118, 'a', 'A'),
(298, 118, 'sm', 'B'),
(299, 118, 'a', 'C'),
(300, 118, 'a', 'D'),
(301, 119, 'a', 'A'),
(302, 119, 'a', 'B'),
(303, 119, 'sm', 'C'),
(304, 119, 'a', 'D'),
(305, 120, 'a', 'A'),
(306, 120, 'sm', 'B'),
(307, 120, 'a', 'C'),
(308, 120, 'a', 'D'),
(309, 121, 'sm', 'A'),
(310, 121, 'a', 'B'),
(311, 121, 'a', 'C'),
(312, 121, 'a', 'D'),
(313, 122, 'a', 'A'),
(314, 122, 'a', 'B'),
(315, 122, 'a', 'C'),
(316, 122, 'sm', 'D'),
(317, 123, 'sm', 'A'),
(318, 123, 'a', 'B'),
(319, 123, 'a', 'C'),
(320, 123, 'a', 'D'),
(321, 124, 'a', 'A'),
(322, 124, 'a', 'B'),
(323, 124, 'a', 'C'),
(324, 124, 'sm', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
(1, 'BSIT 4A'),
(2, 'BSIT 4B'),
(3, 'BSIT 4C'),
(4, 'BSIT 4D');

-- --------------------------------------------------------

--
-- Table structure for table `class_quiz`
--

CREATE TABLE IF NOT EXISTS `class_quiz` (
  `class_quiz_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `quiz_time` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_quiz_main`
--

CREATE TABLE IF NOT EXISTS `class_quiz_main` (
  `class_quiz_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `quiz_time` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `strand` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_quiz_main`
--

INSERT INTO `class_quiz_main` (`class_quiz_id`, `teacher_class_id`, `quiz_time`, `quiz_id`, `section`, `strand`) VALUES
(101, 6, 1800, 10, 1, ''),
(102, 6, 1800, 10, 4, ''),
(103, 11, 1800, 11, 2, ''),
(104, 1, 1800, 12, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `dean` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `dean`) VALUES
(15, 'BSIT', 'DEAN');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL,
  `floc` varchar(500) NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `teacher_id`, `class_id`, `fname`, `uploaded_by`) VALUES
(1, 'admin/uploads/IT-311-BPO-Lesson-1-9-Merged.pdf', '2022-12-10 22:36:41', 'ELECTIVE 1', 0, 3, 'IT-311-BPO-Lesson-1-9-Merged', 'Admin'),
(2, 'admin/uploads/Lesson-1-5-Merged-IT312.pdf', '2022-12-10 22:36:48', 'ELECTIVE 2', 0, 3, 'Lesson-1-5-Merged-IT312', 'Admin'),
(3, 'admin/uploads/SMPBPO101-Module-9-1.pptx', '2022-12-10 22:36:56', 'ELECTIVE 3', 0, 3, 'SMPBPO101-Module-9-1', 'Admin'),
(4, 'admin/uploads/SMPBPO102-module-5-1.pptx', '2022-12-10 22:37:03', 'ELECTIVE 4', 0, 3, 'SMPBPO102-module-5-1', 'Admin'),
(5, 'admin/uploads/SMPBPO102-Module-6-1.pptx', '2022-12-10 22:37:11', 'ELECTIVE 5', 0, 3, 'SMPBPO102-Module-6-1', 'Admin'),
(6, 'admin/uploads/UNIT-2-DOM-USING-JAVASCRIPT.pdf', '2022-12-10 22:37:49', 'ELECTIVE 1', 0, 1, 'WD Elective 1 Reviewer', 'Admin'),
(7, 'admin/uploads/SUNIT-2-DOM-USING-PHP.pdf', '2022-12-10 22:37:55', 'ELECTIVE 2', 0, 1, 'WD Elective 2 Reviewer', 'Admin'),
(8, 'admin/uploads/UNIT-4-JQUERY.pdf', '2022-12-10 22:38:06', 'ELECTIVE 3', 0, 1, 'WD Elective 3 Reviewer', 'Admin'),
(9, 'admin/uploads/Lesson-4-to-6-Jason.pdf', '2022-12-10 22:38:20', 'ELECTIVE 4', 0, 1, 'WD Elective 4 Reviewer', 'Admin'),
(10, 'admin/uploads/UNIT3_SHUN.pdf', '2022-12-10 22:38:27', 'ELECTIVE 5', 0, 3, 'WD Elective 5 Reviewer', 'Admin'),
(11, 'admin/uploads/IT-403-BA-Elective5-Analytics-Application-2022-2023.docx', '2022-12-10 22:39:24', 'ELECTIVE 1', 0, 2, 'BA Elective 1 Reviewer', 'Admin'),
(12, 'admin/uploads/Supplemental-Assessment-Template.docx', '2022-12-10 22:39:31', 'ELECTIVE 2', 0, 2, 'BA Elective 2 Reviewer', 'Admin'),
(13, 'admin/uploads/Trailhead-Academy-University-program-BSU.pptx', '2022-12-10 22:39:37', 'ELECTIVE 3', 0, 2, 'BA Elective 3 Reviewer', 'Admin'),
(14, 'admin/uploads/3. UNIT-3_Data-Objects-And-AttributesTypes.pdf', '2022-12-10 22:39:44', 'ELECTIVE 4', 0, 2, 'BA Elective 4 Reviewer', 'Admin'),
(15, 'admin/uploads/UNIT-4_Descriptive-Statistics.pdf', '2022-12-10 22:39:52', 'ELECTIVE 5', 0, 2, 'BA Elective 5 Reviewer', 'Admin'),
(16, 'admin/uploads/UNIT3_SHUN.pdf', '2022-12-10 22:41:35', 'ELECTIVE 5', 0, 1, 'WD Elective 5 Reviewer', 'Admin'),
(17, 'admin/uploads/UNIT-2-DOM-USING-JAVASCRIPT.pdf', '2022-12-10 22:52:31', 'ELECTIVE 1', 0, 4, 'UNIT-2-DOM-USING-JAVASCRIPT', 'Admin'),
(18, 'admin/uploads/SUNIT-2-DOM-USING-PHP.pdf', '2022-12-10 22:52:38', 'ELECTIVE 2', 0, 4, 'UNIT-2-DOM-USING-PHP', 'Admin'),
(19, 'admin/uploads/UNIT-2-DOM-USING-JAVASCRIPT.pdf', '2022-12-10 22:53:40', 'ELECTIVE 1', 0, 4, 'UNIT-2-DOM-USING-JAVASCRIPT', 'Admin'),
(20, 'admin/uploads/SUNIT-2-DOM-USING-PHP.pdf', '2022-12-10 22:53:47', 'ELECTIVE 2', 0, 4, 'UNIT-2-DOM-USING-PHP', 'Admin'),
(21, 'admin/uploads/UNIT-4-JQUERY.pdf', '2022-12-10 22:53:55', 'ELECTIVE 3', 0, 4, 'UNIT-4-JQUERY', 'Admin'),
(22, 'admin/uploads/Lesson-4-to-6-Jason.pdf', '2022-12-10 22:54:05', 'ELECTIVE 4', 0, 4, 'Lesson-4-to-6-Jason', 'Admin'),
(23, 'admin/uploads/UNIT3_SHUN.pdf', '2022-12-10 22:54:13', 'ELECTIVE 5', 0, 4, 'UNIT3_SHUN', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_type`
--

CREATE TABLE IF NOT EXISTS `question_type` (
  `question_type_id` int(11) NOT NULL,
  `question_type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `question_type`
--

INSERT INTO `question_type` (`question_type_id`, `question_type`) VALUES
(1, 'Multiple Choice'),
(2, 'True or False');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_title` varchar(50) NOT NULL,
  `quiz_description` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_title`, `quiz_description`, `date_added`, `teacher_id`) VALUES
(1, 'IT 306', 'ELECTIVE 1', '2022-12-10 22:36:41', 3),
(2, 'IT 307', 'ELECTIVE 2', '2022-12-10 22:36:48', 3),
(3, 'IT 311', 'ELECTIVE 3', '2022-12-10 22:36:56', 3),
(4, 'IT 312', 'ELECTIVE 4', '2022-12-10 22:37:03', 3),
(5, 'IT 403', 'ELECTIVE 5', '2022-12-10 22:37:11', 3),
(6, 'IT 306', 'ELECTIVE 1', '2022-12-10 22:37:49', 1),
(7, 'IT 307', 'ELECTIVE 2', '2022-12-10 22:37:55', 1),
(8, 'IT 311', 'ELECTIVE 3', '2022-12-10 22:38:06', 1),
(9, 'IT 312', 'ELECTIVE 4', '2022-12-10 22:38:20', 1),
(10, 'IT 403', 'ELECTIVE 5', '2022-12-10 22:38:27', 1),
(11, 'IT 306', 'ELECTIVE 1', '2022-12-10 22:39:24', 2),
(12, 'IT 307', 'ELECTIVE 2', '2022-12-10 22:39:31', 2),
(13, 'IT 311', 'ELECTIVE 3', '2022-12-10 22:39:37', 2),
(14, 'IT 312', 'ELECTIVE 4', '2022-12-10 22:39:44', 2),
(15, 'IT 403', 'ELECTIVE 5', '2022-12-10 22:39:52', 2),
(16, 'IT 403', 'ELECTIVE 5', '2022-12-10 22:41:35', 1),
(17, 'IT 306', 'ELECTIVE 1', '2022-12-10 22:52:31', 1),
(18, 'IT 307', 'ELECTIVE 2', '2022-12-10 22:52:38', 1),
(19, 'IT 306', 'ELECTIVE 1', '2022-12-10 22:53:40', 1),
(20, 'IT 307', 'ELECTIVE 2', '2022-12-10 22:53:47', 1),
(21, 'IT 311', 'ELECTIVE 3', '2022-12-10 22:53:55', 1),
(22, 'IT 312', 'ELECTIVE 4', '2022-12-10 22:54:05', 1),
(23, 'IT 403', 'ELECTIVE 5', '2022-12-10 22:54:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_main`
--

CREATE TABLE IF NOT EXISTS `quiz_main` (
  `quiz_id` int(11) NOT NULL,
  `quiz_title` varchar(255) NOT NULL,
  `quiz_description` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_main`
--

INSERT INTO `quiz_main` (`quiz_id`, `quiz_title`, `quiz_description`, `specialization`, `date_added`) VALUES
(10, 'Web and Mobile Development', 'Web and Mobile Development', '10', '2022-11-14 22:18:23'),
(11, 'Business Analytics', 'Business Analytics', '11', '2022-11-14 22:18:32'),
(12, 'Service Management', 'Service Management', '12', '2022-11-14 22:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question`
--

CREATE TABLE IF NOT EXISTS `quiz_question` (
  `quiz_question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_question`
--

INSERT INTO `quiz_question` (`quiz_question_id`, `quiz_id`, `question_text`, `question_type_id`, `points`, `date_added`, `answer`) VALUES
(50, 47, '<p>q1 e1</p>\r\n', 1, 0, '2022-12-02 08:35:08', 'A'),
(51, 47, '<p>q2&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:35:31', 'B'),
(52, 47, '<p>q3&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:35:50', 'True'),
(53, 47, '<p>q4&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:36:08', 'True'),
(54, 47, '<p>q5 e1</p>\r\n', 1, 0, '2022-12-02 08:36:32', 'A'),
(55, 48, '<p>q1 e2</p>\r\n', 1, 0, '2022-12-02 08:37:15', 'A'),
(56, 48, '<p>q2&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:37:33', 'B'),
(57, 48, '<p>q3&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:38:13', 'C'),
(58, 48, '<p>q4&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:38:24', 'True'),
(59, 48, '<p>q5&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:38:35', 'True'),
(60, 49, '<p>q1&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:39:33', 'D'),
(61, 49, '<p>q2&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:39:26', 'C'),
(62, 49, '<p>q3&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:39:49', 'B'),
(63, 49, '<p>q4&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:40:08', 'A'),
(64, 49, '<p>q5&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 08:40:23', 'True'),
(65, 50, '<p>q1&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:40:41', 'True'),
(66, 50, '<p>q2&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:40:58', 'B'),
(67, 50, '<p>q3&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:41:18', 'C'),
(68, 50, '<p>q4&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:41:31', 'True'),
(69, 50, '<p>q5&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:41:50', 'C'),
(70, 51, '<p>q1&nbsp;e5</p>\r\n', 2, 0, '2022-12-02 08:42:09', 'True'),
(71, 51, '<p>q2&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:42:25', 'A'),
(72, 51, '<p>q3&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:42:43', 'A'),
(73, 51, '<p>q4&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:42:59', 'B'),
(74, 51, '<p>q5&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:43:17', 'C'),
(75, 52, '<p>q1&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 09:12:55', 'A'),
(76, 52, '<p>q2&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 09:12:48', 'B'),
(77, 52, '<p>q3&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:44:59', 'True'),
(78, 52, '<p>q4&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:45:08', 'True'),
(79, 52, '<p>q5&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:45:20', 'True'),
(80, 53, '<p>q1&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 09:16:05', 'A'),
(81, 53, '<p>q2&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 09:16:10', 'B'),
(82, 53, '<p>q3&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 09:16:00', 'C'),
(83, 53, '<p>q4&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:46:51', 'True'),
(84, 53, '<p>q5&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:47:37', 'True'),
(85, 54, '<p>q1&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 09:19:16', 'True'),
(86, 54, '<p>q2&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:49:30', 'C'),
(87, 54, '<p>q3&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:49:37', 'A'),
(88, 54, '<p>q4&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:49:53', 'B'),
(89, 54, '<p>q5&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 08:50:07', 'True'),
(90, 55, '<p>q1&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:50:33', 'True'),
(91, 55, '<p>q2 e4</p>\r\n', 2, 0, '2022-12-02 08:50:43', 'True'),
(92, 55, '<p>q3&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:50:52', 'True'),
(93, 55, '<p>q4&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:51:06', 'B'),
(94, 55, '<p>q5&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:51:23', 'A'),
(95, 56, '<p>q1&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:52:10', 'A'),
(96, 56, '<p>q2&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:52:24', 'A'),
(97, 56, '<p>q3&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:52:40', 'A'),
(98, 56, '<p>q4&nbsp;e5</p>\r\n', 2, 0, '2022-12-02 08:52:51', 'True'),
(99, 56, '<p>q5&nbsp;e5</p>\r\n', 2, 0, '2022-12-02 08:53:08', 'True'),
(100, 57, '<p>q1&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:54:26', 'A'),
(101, 57, '<p>q2&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:54:46', 'B'),
(102, 57, '<p>q3&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:54:59', 'A'),
(103, 57, '<p>q4&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:55:08', 'True'),
(104, 57, '<p>q5&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:55:22', 'True'),
(105, 58, '<p>q1&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:55:37', 'A'),
(106, 58, '<p>q2&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:55:57', 'B'),
(107, 58, '<p>q3&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:56:15', 'A'),
(108, 58, '<p>q4&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:56:30', 'A'),
(109, 58, '<p>q5&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:56:45', 'True'),
(110, 59, '<p>q1&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:09', 'A'),
(111, 59, '<p>q2&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:27', 'A'),
(112, 59, '<p>q3&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:42', 'A'),
(113, 59, '<p>q4&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:55', 'A'),
(114, 59, '<p>q5&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 08:58:10', 'True'),
(115, 60, '<p>q1&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:58:34', 'A'),
(116, 60, '<p>q2&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:58:51', 'A'),
(117, 60, '<p>q3&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:59:03', 'A'),
(118, 60, '<p>q4&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:59:20', 'B'),
(119, 60, '<p>q5&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:59:35', 'C'),
(120, 61, '<p>q1&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:59:57', 'B'),
(121, 61, '<p>q2&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:00:12', 'A'),
(122, 61, '<p>q3&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:00:37', 'D'),
(123, 61, '<p>q4&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:00:56', 'A'),
(124, 61, '<p>q5&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:01:14', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question_main`
--

CREATE TABLE IF NOT EXISTS `quiz_question_main` (
  `quiz_question_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_text` varchar(255) NOT NULL,
  `question_type_id` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `sepe` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_question_main`
--

INSERT INTO `quiz_question_main` (`quiz_question_id`, `quiz_id`, `question_text`, `question_type_id`, `points`, `date_added`, `answer`, `sepe`) VALUES
(50, 10, '<p>q1 e1</p>\r\n', 1, 0, '2022-12-02 08:35:08', 'A', 'IT 306'),
(51, 10, '<p>q2&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:35:32', 'B', 'IT 306'),
(52, 10, '<p>q3&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:35:50', 'True', 'IT 306'),
(53, 10, '<p>q4&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:36:09', 'True', 'IT 306'),
(54, 10, '<p>q5 e1</p>\r\n', 1, 0, '2022-12-02 08:36:32', 'A', 'IT 306'),
(55, 10, '<p>q1 e2</p>\r\n', 1, 0, '2022-12-02 08:37:15', 'A', 'IT 307'),
(56, 10, '<p>q2&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:37:34', 'B', 'IT 307'),
(57, 10, '<p>q3&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:38:13', 'C', 'IT 307'),
(58, 10, '<p>q4&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:38:24', 'True', 'IT 307'),
(59, 10, '<p>q5&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:38:35', 'True', 'IT 307'),
(61, 10, '<p>q2&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:39:26', 'C', 'IT 311'),
(62, 10, '<p>q3&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:39:50', 'B', 'IT 311'),
(63, 10, '<p>q4&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:40:09', 'A', 'IT 311'),
(64, 10, '<p>q5&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 08:40:23', 'True', 'IT 311'),
(65, 10, '<p>q1&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:40:42', 'True', 'IT 312'),
(66, 10, '<p>q2&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:40:58', 'B', 'IT 312'),
(67, 10, '<p>q3&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:41:18', 'C', 'IT 312'),
(68, 10, '<p>q4&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:41:31', 'True', 'IT 312'),
(69, 10, '<p>q5&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:41:51', 'C', 'IT 312'),
(70, 10, '<p>q1&nbsp;e5</p>\r\n', 2, 0, '2022-12-02 08:42:09', 'True', 'IT 403'),
(71, 10, '<p>q2&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:42:26', 'A', 'IT 403'),
(72, 10, '<p>q3&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:42:44', 'A', 'IT 403'),
(73, 10, '<p>q4&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:42:59', 'B', 'IT 403'),
(74, 10, '<p>q5&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:43:17', 'C', 'IT 403'),
(75, 11, '<p>q1&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:44:05', 'A', 'IT 306'),
(77, 11, '<p>q3&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:44:59', 'True', 'IT 306'),
(78, 11, '<p>q4&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:45:08', 'True', 'IT 306'),
(79, 11, '<p>q5&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:45:20', 'True', 'IT 306'),
(80, 11, '<p>q1&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:45:44', 'A', 'IT 307'),
(82, 11, '<p>q3&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:46:20', 'C', 'IT 307'),
(83, 11, '<p>q4&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:46:51', 'True', 'IT 307'),
(84, 11, '<p>q5&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:47:37', 'True', 'IT 307'),
(85, 11, '<p>q1&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 08:47:51', 'True', 'IT 311'),
(88, 11, '<p>q4&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:49:53', 'B', 'IT 311'),
(89, 11, '<p>q5&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 08:50:07', 'True', 'IT 311'),
(90, 11, '<p>q1&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:50:33', 'True', 'IT 312'),
(91, 11, '<p>q2 e4</p>\r\n', 2, 0, '2022-12-02 08:50:43', 'True', 'IT 312'),
(92, 11, '<p>q3&nbsp;e4</p>\r\n', 2, 0, '2022-12-02 08:50:52', 'True', 'IT 312'),
(93, 11, '<p>q4&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:51:07', 'B', 'IT 312'),
(94, 11, '<p>q5&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:51:23', 'A', 'IT 312'),
(95, 11, '<p>q1&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:52:10', 'A', 'IT 403'),
(96, 11, '<p>q2&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:52:24', 'A', 'IT 403'),
(97, 11, '<p>q3&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:52:40', 'A', 'IT 403'),
(98, 11, '<p>q4&nbsp;e5</p>\r\n', 2, 0, '2022-12-02 08:52:51', 'True', 'IT 403'),
(99, 11, '<p>q5&nbsp;e5</p>\r\n', 2, 0, '2022-12-02 08:53:08', 'True', 'IT 403'),
(100, 12, '<p>q1&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:54:27', 'A', 'IT 306'),
(102, 12, '<p>q3&nbsp;e1</p>\r\n', 1, 0, '2022-12-02 08:55:00', 'A', 'IT 306'),
(103, 12, '<p>q4&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:55:08', 'True', 'IT 306'),
(104, 12, '<p>q5&nbsp;e1</p>\r\n', 2, 0, '2022-12-02 08:55:22', 'True', 'IT 306'),
(105, 12, '<p>q1&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:55:38', 'A', 'IT 307'),
(106, 12, '<p>q2&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:55:58', 'B', 'IT 307'),
(107, 12, '<p>q3&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:56:16', 'A', 'IT 307'),
(108, 12, '<p>q4&nbsp;e2</p>\r\n', 1, 0, '2022-12-02 08:56:30', 'A', 'IT 307'),
(109, 12, '<p>q5&nbsp;e2</p>\r\n', 2, 0, '2022-12-02 08:56:45', 'True', 'IT 307'),
(110, 12, '<p>q1&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:09', 'A', 'IT 311'),
(111, 12, '<p>q2&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:28', 'A', 'IT 311'),
(112, 12, '<p>q3&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:42', 'A', 'IT 311'),
(113, 12, '<p>q4&nbsp;e3</p>\r\n', 1, 0, '2022-12-02 08:57:55', 'A', 'IT 311'),
(114, 12, '<p>q5&nbsp;e3</p>\r\n', 2, 0, '2022-12-02 08:58:10', 'True', 'IT 311'),
(115, 12, '<p>q1&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:58:34', 'A', 'IT 312'),
(116, 12, '<p>q2&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:58:51', 'A', 'IT 312'),
(117, 12, '<p>q3&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:59:04', 'A', 'IT 312'),
(118, 12, '<p>q4&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:59:20', 'B', 'IT 312'),
(119, 12, '<p>q5&nbsp;e4</p>\r\n', 1, 0, '2022-12-02 08:59:35', 'C', 'IT 312'),
(120, 12, '<p>q1&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 08:59:57', 'B', 'IT 403'),
(121, 12, '<p>q2&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:00:13', 'A', 'IT 403'),
(122, 12, '<p>q2&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:00:30', 'D', 'IT 403'),
(123, 12, '<p>q4&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:00:57', 'A', 'IT 403'),
(124, 12, '<p>q5&nbsp;e5</p>\r\n', 1, 0, '2022-12-02 09:01:14', 'D', 'IT 403');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE IF NOT EXISTS `school_year` (
  `school_year_id` int(11) NOT NULL,
  `school_year` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`school_year_id`, `school_year`) VALUES
(5, '2021-2022'),
(6, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL,
  `items` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `items`) VALUES
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `strand`
--

CREATE TABLE IF NOT EXISTS `strand` (
  `id` int(11) NOT NULL,
  `strand_name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `strand`
--

INSERT INTO `strand` (`id`, `strand_name`) VALUES
(10, 'Web and Mobile Development'),
(11, 'Business Analytics'),
(12, 'Service Management');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `class_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `strand` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `middlename`, `lastname`, `suffix`, `class_id`, `username`, `password`, `location`, `status`, `strand`) VALUES
(4, 'WD', 'Test', 'Lopez', '', 1, '2020115131', '1', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Registered', 'Web and Mobile Development'),
(5, 'BA', 'Test', 'Lopez', '', 2, '2020115132', '1', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Registered', 'Business Analytics'),
(6, 'SM', 'Test', 'Lopez', '', 3, '2020115133', '1', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Registered', 'Service Management'),
(9, 'WD1', 'Test', 'Lopez', '', 4, '2020115134', '1', 'uploads/NO-IMAGE-AVAILABLE.jpg', 'Registered', 'Web and Mobile Development');

-- --------------------------------------------------------

--
-- Table structure for table `student_class_quiz`
--

CREATE TABLE IF NOT EXISTS `student_class_quiz` (
  `student_class_quiz_id` int(11) NOT NULL,
  `class_quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_quiz_time` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `final` int(11) NOT NULL,
  `items` int(11) NOT NULL,
  `trys` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_class_quiz_main`
--

CREATE TABLE IF NOT EXISTS `student_class_quiz_main` (
  `student_class_quiz_id` int(11) NOT NULL,
  `class_quiz_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_quiz_time` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `final` int(11) NOT NULL,
  `items` int(11) NOT NULL,
  `trys` int(11) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `topic1` varchar(255) NOT NULL,
  `limit1` varchar(255) NOT NULL,
  `topic2` varchar(255) NOT NULL,
  `limit2` varchar(255) NOT NULL,
  `topic3` varchar(255) NOT NULL,
  `limit3` varchar(255) NOT NULL,
  `topic4` varchar(255) NOT NULL,
  `limit4` varchar(255) NOT NULL,
  `topic5` varchar(255) NOT NULL,
  `limit5` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_class_quiz_main`
--

INSERT INTO `student_class_quiz_main` (`student_class_quiz_id`, `class_quiz_id`, `student_id`, `student_quiz_time`, `grade`, `final`, `items`, `trys`, `strand`, `topic1`, `limit1`, `topic2`, `limit2`, `topic3`, `limit3`, `topic4`, `limit4`, `topic5`, `limit5`) VALUES
(1, 101, 4, '3600', '20 out of 20', 20, 20, 0, 'Web and Mobile Development', '5', '5', '4', '4', '4', '4', '4', '4', '3', '3'),
(2, 102, 9, '1800', '', 0, 0, 2, 'Web and Mobile Development', '', '', '', '', '', '', '', '', '', ''),
(3, 103, 5, '3600', '2 out of 20', 2, 20, 1, 'Business Analytics', '1', '4', '0', '4', '0', '3', '0', '4', '1', '5'),
(4, 104, 6, '1800', '', 0, 0, 2, 'Service Management', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `unit` int(11) NOT NULL,
  `Pre_req` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_title`, `category`, `description`, `unit`, `Pre_req`, `semester`) VALUES
(2, 'IT 306', 'ELECTIVE 1', '', '', 1, '', '1st'),
(3, 'IT 307', 'ELECTIVE 2', '', '', 1, '', '1st'),
(4, 'IT 311', 'ELECTIVE 3', '', '', 1, '', '1st'),
(5, 'IT 312', 'ELECTIVE 4', '', '', 3, '', '1st'),
(6, 'IT 403', 'ELECTIVE 5', '', '', 2, '', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `about` varchar(500) NOT NULL,
  `teacher_status` varchar(20) NOT NULL,
  `teacher_stat` varchar(100) NOT NULL,
  `employee_id` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `username`, `password`, `firstname`, `lastname`, `department_id`, `location`, `about`, `teacher_status`, `teacher_stat`, `employee_id`) VALUES
(1, 'prof1', '1', 'Prof', 'One', 15, 'uploads/NO-IMAGE-AVAILABLE.jpg', '', 'Registered', '', '1000123451'),
(2, 'prof2', '1', 'Prof', 'Two', 15, 'uploads/NO-IMAGE-AVAILABLE.jpg', '', 'Registered', '', '1000123452'),
(3, 'prof3', '1', 'Prof', 'Three', 15, 'uploads/NO-IMAGE-AVAILABLE.jpg', '', 'Registered', '', '1000123453'),
(4, 'cjcj', '111', 'chris', 'johnelle', 15, 'uploads/NO-IMAGE-AVAILABLE.jpg', '', 'Registered', '', '02-12345');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class`
--

CREATE TABLE IF NOT EXISTS `teacher_class` (
  `teacher_class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `thumbnails` varchar(100) NOT NULL,
  `school_year` varchar(100) NOT NULL,
  `Specialization` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class`
--

INSERT INTO `teacher_class` (`teacher_class_id`, `teacher_id`, `class_id`, `subject_id`, `thumbnails`, `school_year`, `Specialization`) VALUES
(1, 3, 3, 2, 'uploads/thumbnails.jpg', '2022-2023', 12),
(2, 3, 3, 3, 'uploads/thumbnails.jpg', '2022-2023', 12),
(3, 3, 3, 4, 'uploads/thumbnails.jpg', '2022-2023', 12),
(4, 3, 3, 5, 'uploads/thumbnails.jpg', '2022-2023', 12),
(5, 3, 3, 6, 'uploads/thumbnails.jpg', '2022-2023', 12),
(6, 1, 1, 2, 'uploads/thumbnails.jpg', '2022-2023', 10),
(7, 1, 1, 3, 'uploads/thumbnails.jpg', '2022-2023', 10),
(8, 1, 1, 4, 'uploads/thumbnails.jpg', '2022-2023', 10),
(9, 1, 1, 5, 'uploads/thumbnails.jpg', '2022-2023', 10),
(11, 2, 2, 2, 'uploads/thumbnails.jpg', '2022-2023', 11),
(12, 2, 2, 3, 'uploads/thumbnails.jpg', '2022-2023', 11),
(13, 2, 2, 4, 'uploads/thumbnails.jpg', '2022-2023', 11),
(14, 2, 2, 5, 'uploads/thumbnails.jpg', '2022-2023', 11),
(15, 2, 2, 6, 'uploads/thumbnails.jpg', '2022-2023', 11),
(16, 1, 1, 6, 'uploads/thumbnails.jpg', '2022-2023', 10),
(19, 1, 4, 2, 'uploads/thumbnails.jpg', '2022-2023', 10),
(20, 1, 4, 3, 'uploads/thumbnails.jpg', '2022-2023', 10),
(21, 1, 4, 4, 'uploads/thumbnails.jpg', '2022-2023', 10),
(22, 1, 4, 5, 'uploads/thumbnails.jpg', '2022-2023', 10),
(23, 1, 4, 6, 'uploads/thumbnails.jpg', '2022-2023', 10);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_student`
--

CREATE TABLE IF NOT EXISTS `teacher_class_student` (
  `teacher_class_student_id` int(11) NOT NULL,
  `teacher_class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_class_student`
--

INSERT INTO `teacher_class_student` (`teacher_class_student_id`, `teacher_class_id`, `student_id`, `teacher_id`) VALUES
(1, 1, 6, 3),
(2, 2, 6, 3),
(3, 3, 6, 3),
(4, 4, 6, 3),
(5, 5, 6, 3),
(6, 6, 4, 1),
(7, 7, 4, 1),
(8, 8, 4, 1),
(9, 9, 4, 1),
(11, 11, 5, 2),
(12, 12, 5, 2),
(13, 13, 5, 2),
(14, 14, 5, 2),
(15, 15, 5, 2),
(16, 16, 4, 1),
(19, 19, 9, 1),
(20, 20, 9, 1),
(21, 21, 9, 1),
(22, 22, 9, 1),
(23, 23, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', '1234', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `user_id`) VALUES
(35, 'admin', '2022-12-02 03:15:15', '2022-12-02 03:18:41', 1),
(36, 'admin', '2022-12-02 08:22:11', '2022-12-02 08:28:44', 1),
(37, 'admin', '2022-12-02 09:01:37', '2022-12-02 09:04:42', 1),
(38, 'admin', '2022-12-02 09:07:50', '2022-12-02 09:09:17', 1),
(39, 'admin', '2022-12-02 09:17:42', '2022-12-02 09:34:22', 1),
(40, 'admin', '2022-12-02 09:37:46', '2022-12-02 09:41:12', 1),
(41, 'admin', '2022-12-02 09:45:52', '2022-12-02 10:28:50', 1),
(42, 'admin', '2022-12-02 21:22:24', '2022-12-02 21:23:37', 1),
(43, 'admin', '2022-12-02 22:48:28', '2022-12-02 22:48:43', 1),
(44, 'admin', '2022-12-02 23:22:43', '2022-12-02 23:25:14', 1),
(45, 'admin', '2022-12-02 23:34:33', '2022-12-03 00:10:45', 1),
(46, 'admin', '2022-12-03 00:46:08', '2022-12-03 01:04:43', 1),
(47, 'admin', '2022-12-03 01:09:59', '2022-12-03 01:17:47', 1),
(48, 'admin', '2022-12-03 01:19:56', '2022-12-03 01:25:00', 1),
(49, 'admin', '2022-12-03 01:35:20', '2022-12-03 01:38:02', 1),
(50, 'admin', '2022-12-03 01:49:22', '2022-12-03 02:21:46', 1),
(51, 'admin', '2022-12-03 02:29:42', '', 1),
(52, 'admin', '2022-12-03 11:06:35', '2022-12-03 11:13:23', 1),
(53, 'admin', '2022-12-03 11:15:05', '2022-12-03 12:23:39', 1),
(54, 'admin', '2022-12-03 12:30:13', '2022-12-03 13:20:54', 1),
(55, 'admin', '2022-12-03 13:50:34', '', 1),
(56, 'admin', '2022-12-03 16:22:54', '2022-12-03 17:23:01', 1),
(57, 'admin', '2022-12-08 23:20:58', '2022-12-08 23:36:02', 1),
(58, 'admin', '2022-12-08 23:43:17', '2022-12-08 23:57:35', 1),
(59, 'admin', '2022-12-08 23:57:44', '2022-12-09 00:21:19', 1),
(60, 'admin', '2022-12-09 00:41:47', '2022-12-09 00:43:53', 1),
(61, 'admin', '2022-12-09 01:08:41', '2022-12-09 01:13:31', 1),
(62, 'admin', '2022-12-09 01:39:47', '', 1),
(63, 'admin', '2022-12-09 02:05:27', '2022-12-09 02:09:42', 1),
(64, 'admin', '2022-12-09 10:43:58', '2022-12-09 11:13:39', 1),
(65, 'Admin', '2022-12-10 12:12:51', '2022-12-10 12:14:33', 1),
(66, 'admin', '2022-12-10 12:15:07', '2022-12-10 12:16:53', 1),
(67, 'admin', '2022-12-10 12:25:01', '', 1),
(68, 'admin', '2022-12-10 13:19:09', '', 1),
(69, 'admin', '2022-12-10 13:31:32', '', 1),
(70, 'admin', '2022-12-10 13:38:24', '', 1),
(71, 'admin', '2022-12-10 13:52:45', '', 1),
(72, 'admin', '2022-12-10 14:06:19', '', 1),
(73, 'admin', '2022-12-10 14:42:21', '', 1),
(74, 'admin', '2022-12-10 14:53:54', '', 1),
(75, 'admin', '2022-12-10 14:59:00', '', 1),
(76, 'admin', '2022-12-10 15:15:59', '2022-12-10 15:16:36', 1),
(77, 'admin', '2022-12-10 15:16:42', '2022-12-10 15:16:55', 1),
(78, 'admin', '2022-12-10 15:26:08', '', 1),
(79, 'admin', '2022-12-10 15:33:11', '2022-12-10 15:34:34', 1),
(80, 'admin', '2022-12-10 16:04:34', '2022-12-10 16:13:10', 1),
(81, 'admin', '2022-12-10 16:13:19', '2022-12-10 16:16:20', 1),
(82, 'admin', '2022-12-10 16:18:04', '', 1),
(83, 'admin', '2022-12-10 16:22:18', '2022-12-10 16:23:45', 1),
(84, 'admin', '2022-12-10 16:23:52', '2022-12-10 16:24:11', 1),
(85, 'admin', '2022-12-10 16:25:47', '2022-12-10 16:26:41', 1),
(86, 'admin', '2022-12-10 16:29:59', '2022-12-10 19:22:15', 1),
(87, 'admin', '2022-12-10 19:22:59', '2022-12-10 19:45:43', 1),
(88, 'admin', '2022-12-10 19:47:08', '', 1),
(89, 'admin', '2022-12-10 19:49:02', '2022-12-10 19:59:36', 1),
(90, 'admin', '2022-12-10 20:01:39', '', 1),
(91, 'admin', '2022-12-10 21:22:36', '2022-12-10 21:25:39', 1),
(92, 'admin', '2022-12-11 00:10:51', '', 1),
(93, 'admin', '2022-12-11 00:18:37', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `answer_main`
--
ALTER TABLE `answer_main`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_quiz`
--
ALTER TABLE `class_quiz`
  ADD PRIMARY KEY (`class_quiz_id`);

--
-- Indexes for table `class_quiz_main`
--
ALTER TABLE `class_quiz_main`
  ADD PRIMARY KEY (`class_quiz_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `question_type`
--
ALTER TABLE `question_type`
  ADD PRIMARY KEY (`question_type_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_main`
--
ALTER TABLE `quiz_main`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_question`
--
ALTER TABLE `quiz_question`
  ADD PRIMARY KEY (`quiz_question_id`);

--
-- Indexes for table `quiz_question_main`
--
ALTER TABLE `quiz_question_main`
  ADD PRIMARY KEY (`quiz_question_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`school_year_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strand`
--
ALTER TABLE `strand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_class_quiz`
--
ALTER TABLE `student_class_quiz`
  ADD PRIMARY KEY (`student_class_quiz_id`);

--
-- Indexes for table `student_class_quiz_main`
--
ALTER TABLE `student_class_quiz_main`
  ADD PRIMARY KEY (`student_class_quiz_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_class`
--
ALTER TABLE `teacher_class`
  ADD PRIMARY KEY (`teacher_class_id`);

--
-- Indexes for table `teacher_class_student`
--
ALTER TABLE `teacher_class_student`
  ADD PRIMARY KEY (`teacher_class_student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=285;
--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=629;
--
-- AUTO_INCREMENT for table `answer_main`
--
ALTER TABLE `answer_main`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=325;
--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `class_quiz`
--
ALTER TABLE `class_quiz`
  MODIFY `class_quiz_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_quiz_main`
--
ALTER TABLE `class_quiz_main`
  MODIFY `class_quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `quiz_main`
--
ALTER TABLE `quiz_main`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `quiz_question`
--
ALTER TABLE `quiz_question`
  MODIFY `quiz_question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `quiz_question_main`
--
ALTER TABLE `quiz_question_main`
  MODIFY `quiz_question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `school_year_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `strand`
--
ALTER TABLE `strand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student_class_quiz`
--
ALTER TABLE `student_class_quiz`
  MODIFY `student_class_quiz_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_class_quiz_main`
--
ALTER TABLE `student_class_quiz_main`
  MODIFY `student_class_quiz_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `teacher_class`
--
ALTER TABLE `teacher_class`
  MODIFY `teacher_class_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `teacher_class_student`
--
ALTER TABLE `teacher_class_student`
  MODIFY `teacher_class_student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=94;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
