-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 09:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncetmmhh_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'ark', '13774');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(71, '5e76601b8a4fa', '5e76601bab03f'),
(72, '5e76601bdc4b6', '5e76601beb423'),
(73, '5e76601c23536', '5e76601c37d2e'),
(74, '5e76601cc9cc5', '5e76601cd6621'),
(75, '5e76601d33964', '5e76601d400b1'),
(76, '5e76601d75bec', '5e76601d7972f'),
(77, '5e76601df4077', '5e76601e0620a'),
(78, '5e76601e3e7b0', '5e76601e4b021'),
(79, '5e76601e76ed6', '5e76601e83542'),
(80, '5e76601eb640e', '5e76601ebf5c5'),
(81, '5e76601ef1582', '5e76601f06569'),
(82, '5e76601f4b224', '5e76601f532bc'),
(83, '5e76601f84717', '5e76601f90d66'),
(84, '5e76601fc4e48', '5e76601fd1415'),
(85, '5e766020012c6', '5e7660200d7a8'),
(86, '5e76602045f57', '5e7660204c3b8'),
(87, '5e7660207e44f', '5e76602087616'),
(88, '5e766020b9595', '5e766020bfb49'),
(89, '5e766020f013f', '5e76602105873'),
(90, '5e766021343ba', '5e7660213de19'),
(91, '5e766021b983a', '5e766021bfee0'),
(92, '5e766021ef41e', '5e766022017d2'),
(93, '5e7660223712f', '5e76602240b6b'),
(94, '5e76602279287', '5e7660228256c'),
(95, '5e766023999e6', '5e766023a2b36'),
(96, '5e766023cc9ce', '5e766023d9d36'),
(97, '5e7660240c85a', '5e7660241605b'),
(98, '5e7660243cc01', '5e76602446744'),
(99, '5e7660246fc3e', '5e7660247973b'),
(100, '5e766024a7030', '5e766024ad7f2'),
(101, '5e766024d7693', '5e766024ddd32'),
(102, '5e76602516372', '5e7660251f61e'),
(103, '5e76602549332', '5e7660254fc8c'),
(104, '5e76602582519', '5e76602589fa1'),
(105, '5e766025bdbf2', '5e766025c767c'),
(106, '5e766025ee1af', '5e76602603946'),
(107, '5e7660262a402', '5e76602633d07'),
(108, '5e7660265a92f', '5e766026618d9'),
(109, '5e76602688473', '5e76602691c81'),
(110, '5e766026c228a', '5e766026c8c74'),
(111, '5e7660271d008', '5e7660272ec9c'),
(112, '5e76602754383', '5e7660275adc9'),
(113, '5e766027f3d71', '5e76602816696'),
(114, '5e76602859f09', '5e76602865b05'),
(115, '5e7660289cf6e', '5e766028a7b07'),
(116, '5e7660292ae6c', '5e7660293f0d3'),
(117, '5e76602a143fa', '5e76602a21358'),
(118, '5e76602a5b344', '5e76602a79086'),
(119, '5e76602aad339', '5e76602ab3d5e'),
(120, '5e76602ae0365', '5e76602ae6ce3'),
(121, '5e76602b29db3', '5e76602b307ec'),
(122, '5e76602b5a31b', '5e76602b60b91'),
(123, '5e76602b9aae5', '5e76602ba1282'),
(124, '5e76602bdda1c', '5e76602be446e'),
(125, '5e76602c47ace', '5e76602c4e218'),
(126, '5e76602c8d5ed', '5e76602c96b35'),
(127, '5e76602cc5c08', '5e76602ccf0e6'),
(128, '5e76602d0ca81', '5e76602d15e78'),
(129, '5e76602d5d235', '5e76602d66878'),
(130, '5e76602d9b066', '5e76602da43a6'),
(135, '5e7740707a5bc', '5e7740707cbbc'),
(136, '5e77407084d2e', '5e77407086785');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(27, 'princebhargav7@gmail.com', '5e7640ff0797d', 1, 3, 1, 1, '2020-03-22 10:36:35', 1584873129, 'finished', 'true'),
(29, 'idreambot@gmail.com', '5e7640ff0797d', 0, 0, 0, 0, '2020-03-22 18:18:40', 1584901120, 'ongoing', 'false'),
(30, 'qws@g', '5e7640ff0797d', 0, 0, 0, 0, '2020-03-23 03:19:29', 1584933569, 'ongoing', 'false'),
(31, 'ark@ark.com', '5e7640ff0797d', 0, 0, 0, 0, '2020-03-23 14:07:59', 1584972384, 'finished', 'true'),
(32, 'kichha123@gmail.com', '5e7640ff0797d', 0, 0, 0, 0, '2020-03-23 16:31:21', 1584980948, 'finished', 'true'),
(33, 'ark@ark', '5e7640ff0797d', 0, 0, 0, 0, '2020-03-28 18:08:39', 1585418919, 'ongoing', 'false'),
(34, 'idreambot@a', '5e7640ff0797d', 0, 0, 0, 0, '2020-03-29 18:27:11', 1585506431, 'ongoing', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(281, '5e76601b8a4fa', '(-a, a)', '5e76601bab032'),
(282, '5e76601b8a4fa', '[-a, a]', '5e76601bab03f'),
(283, '5e76601b8a4fa', '[0, a]', '5e76601bab046'),
(284, '5e76601b8a4fa', '(-a, 0]', '5e76601bab053'),
(285, '5e76601bdc4b6', 'x = 2n + 1', '5e76601beb414'),
(286, '5e76601bdc4b6', 'x = 4n', '5e76601beb423'),
(287, '5e76601bdc4b6', 'x = 2n', '5e76601beb42c'),
(288, '5e76601bdc4b6', 'x = 4n + 1, where n ∈ N', '5e76601beb435'),
(289, '5e76601c23536', '105', '5e76601c37d22'),
(290, '5e76601c23536', '15', '5e76601c37d2c'),
(291, '5e76601c23536', '175', '5e76601c37d2e'),
(292, '5e76601c23536', '185', '5e76601c37d30'),
(293, '5e76601cc9cc5', '(1, 1)', '5e76601cd6612'),
(294, '5e76601cc9cc5', '(-1, 1)', '5e76601cd661c'),
(295, '5e76601cc9cc5', '(1, -1)', '5e76601cd661f'),
(296, '5e76601cc9cc5', '(-1, -1)', '5e76601cd6621'),
(297, '5e76601d33964', '<img src=\"image/math/5a.jpg\">', '5e76601d400a4'),
(298, '5e76601d33964', '<img src=\"image/math/5b.jpg\">', '5e76601d400ae'),
(299, '5e76601d33964', '<img src=\"image/math/5c.jpg\">', '5e76601d400b1'),
(300, '5e76601d33964', 'None of these', '5e76601d400b3'),
(301, '5e76601d75bec', '<img src=\"image/math/6a.jpg\">', '5e76601d79724'),
(302, '5e76601d75bec', '100', '5e76601d7972f'),
(303, '5e76601d75bec', 'Does not exist', '5e76601d79731'),
(304, '5e76601d75bec', '0', '5e76601d79733'),
(305, '5e76601df4077', '<img src=\"image/math/7a.jpg\">', '5e76601e0620a'),
(306, '5e76601df4077', '<img src=\"image/math/7b.jpg\">', '5e76601e06216'),
(307, '5e76601df4077', '<img src=\"image/math/7c.jpg\">', '5e76601e06219'),
(308, '5e76601df4077', '<img src=\"image/math/7d.jpg\">', '5e76601e0621b'),
(309, '5e76601e3e7b0', '<img src=\"image/math/8a.jpg\">', '5e76601e4b014'),
(310, '5e76601e3e7b0', '<img src=\"image/math/8b.jpg\">', '5e76601e4b021'),
(311, '5e76601e3e7b0', '<img src=\"image/math/8c.jpg\">', '5e76601e4b024'),
(312, '5e76601e3e7b0', 'None of these', '5e76601e4b027'),
(313, '5e76601e76ed6', '<img src=\"image/math/9a.jpg\">', '5e76601e83542'),
(314, '5e76601e76ed6', '<img src=\"image/math/9b.jpg\">', '5e76601e8354f'),
(315, '5e76601e76ed6', '<img src=\"image/math/9c.jpg\">', '5e76601e83552'),
(316, '5e76601e76ed6', '<img src=\"image/math/9d.jpg\">', '5e76601e83558'),
(317, '5e76601eb640e', 'A', '5e76601ebf5c5'),
(318, '5e76601eb640e', 'I - A', '5e76601ebf5d0'),
(319, '5e76601eb640e', 'I + A', '5e76601ebf5d3'),
(320, '5e76601eb640e', '3A', '5e76601ebf5d5'),
(321, '5e76601ef1582', '<img src=\"image/math/11a.jpg\">', '5e76601f0655b'),
(322, '5e76601ef1582', '<img src=\"image/math/11b.jpg\">', '5e76601f06566'),
(323, '5e76601ef1582', '<img src=\"image/math/11c.jpg\">', '5e76601f06569'),
(324, '5e76601ef1582', '<img src=\"image/math/11d.jpg\">', '5e76601f0656b'),
(325, '5e76601f4b224', 'f is everywhere differentiable', '5e76601f532a5'),
(326, '5e76601f4b224', 'f is everywhere continuous but not differentiable at x = nπ, n ∈ Z.', '5e76601f532bc'),
(327, '5e76601f4b224', 'f is everywhere continuous but not differentiable at  <img src=\"image/math/12c.jpg\">', '5e76601f532c0'),
(328, '5e76601f4b224', 'None of these', '5e76601f532c3'),
(329, '5e76601f84717', 'sin2x', '5e76601f90d58'),
(330, '5e76601f84717', 'tanx', '5e76601f90d63'),
(331, '5e76601f84717', 'cosx', '5e76601f90d66'),
(332, '5e76601f84717', 'cos3x', '5e76601f90d68'),
(333, '5e76601fc4e48', '<p>   <img src=\"image/math/14a.jpg\"></p>', '5e76601fd1402'),
(334, '5e76601fc4e48', '<p>  <img src=\"image/math/14b.jpg\"></p>\r\n<p>  <img src=\"image/math/14bb.jpg\"></p>', '5e76601fd1415'),
(335, '5e76601fc4e48', '<p>  <img src=\"image/math/14c.jpg\"></p>', '5e76601fd141e'),
(336, '5e76601fc4e48', 'None of these', '5e76601fd1427'),
(337, '5e766020012c6', '<img src=\"image/math/15a.jpg\">', '5e7660200d798'),
(338, '5e766020012c6', '<img src=\"image/math/15b.jpg\">', '5e7660200d7a3'),
(339, '5e766020012c6', '<img src=\"image/math/15c.jpg\">', '5e7660200d7a5'),
(340, '5e766020012c6', '<img src=\"image/math/15d.jpg\">', '5e7660200d7a8'),
(341, '5e76602045f57', '20&pi; sq. units', '5e7660204c3b8'),
(342, '5e76602045f57', '<img src=\"image/math/16b.jpg\">', '5e7660204c3c2'),
(343, '5e76602045f57', '<img src=\"image/math/16c.jpg\">', '5e7660204c3c5'),
(344, '5e76602045f57', '25&pi;sq. units', '5e7660204c3c7'),
(345, '5e7660207e44f', 'Family of hyperbolas', '5e76602087607'),
(346, '5e7660207e44f', 'Family of parabolas', '5e76602087611'),
(347, '5e7660207e44f', 'Family of ellipse', '5e76602087614'),
(348, '5e7660207e44f', 'Family of circles', '5e76602087616'),
(349, '5e766020b9595', '[0, 8]', '5e766020bfb3d'),
(350, '5e766020b9595', '[-12, 8]', '5e766020bfb47'),
(351, '5e766020b9595', '[0, 12]', '5e766020bfb49'),
(352, '5e766020b9595', '[8, 12]', '5e766020bfb4c'),
(353, '5e766020f013f', '<img src=\"image/math/19a.jpg\">', '5e76602105863'),
(354, '5e766020f013f', '<img src=\"image/math/19b.jpg\">', '5e7660210586e'),
(355, '5e766020f013f', '<img src=\"image/math/19c.jpg\">', '5e76602105870'),
(356, '5e766020f013f', '<img src=\"image/math/19d.jpg\">', '5e76602105873'),
(357, '5e766021343ba', '<img src=\"image/math/20a.jpg\">', '5e7660213de08'),
(358, '5e766021343ba', '<img src=\"image/math/20b.jpg\">', '5e7660213de14'),
(359, '5e766021343ba', '<img src=\"image/math/20c.jpg\">', '5e7660213de16'),
(360, '5e766021343ba', '<img src=\"image/math/20d.jpg\">', '5e7660213de19'),
(361, '5e766021b983a', '3 N', '5e766021bfed5'),
(362, '5e766021b983a', '30 N', '5e766021bfee0'),
(363, '5e766021b983a', '300 N', '5e766021bfee2'),
(364, '5e766021b983a', '150 N', '5e766021bfee5'),
(365, '5e766021ef41e', '50 %', '5e766022017c0'),
(366, '5e766021ef41e', '100 %', '5e766022017cf'),
(367, '5e766021ef41e', '125 %', '5e766022017d2'),
(368, '5e766021ef41e', '25 %', '5e766022017d5'),
(369, '5e7660223712f', '<p>18 kg m<sup>2</sup></p>', '5e76602240b5f'),
(370, '5e7660223712f', '<p>1.8 kg m<sup>2</sup></p>', '5e76602240b6b'),
(371, '5e7660223712f', '<p>2.5 kg m<sup>2</sup></p>', '5e76602240b6e'),
(372, '5e7660223712f', '<p>9 kg m<sup>2</sup></p>', '5e76602240b70'),
(373, '5e76602279287', '<img src=\"image/phy/24a.jpg\">', '5e7660228255d'),
(374, '5e76602279287', '<img src=\"image/phy/24b.jpg\">', '5e76602282567'),
(375, '5e76602279287', '2 km/sec', '5e7660228256a'),
(376, '5e76602279287', '11 km/sec', '5e7660228256c'),
(377, '5e766023999e6', 'Length 100 cm, diameter 1 cm', '5e766023a2b27'),
(378, '5e766023999e6', 'Length 200 cm, diameter 2 cm', '5e766023a2b31'),
(379, '5e766023999e6', 'Length 300 cm, diameter 3 cm', '5e766023a2b34'),
(380, '5e766023999e6', 'Length 400 cm, diameter 0.5 cm', '5e766023a2b36'),
(381, '5e766023cc9ce', 'Clock-wise', '5e766023d9d36'),
(382, '5e766023cc9ce', 'anti-clock-wise', '5e766023d9d41'),
(383, '5e766023cc9ce', 'Changing', '5e766023d9d43'),
(384, '5e766023cc9ce', 'Nothing can be said', '5e766023d9d45'),
(385, '5e7660240c85a', '62.5mW', '5e7660241604d'),
(386, '5e7660240c85a', '625mW', '5e76602416058'),
(387, '5e7660240c85a', '6.25mW', '5e7660241605b'),
(388, '5e7660240c85a', '12.5mW', '5e7660241605e'),
(389, '5e7660243cc01', '4 &mu;c , 4 &mu;c', '5e76602446737'),
(390, '5e7660243cc01', '6 &mu;c, 2 &mu;c', '5e76602446744'),
(391, '5e7660243cc01', '5 &mu;c,3 &mu;c', '5e76602446748'),
(392, '5e7660243cc01', '7 &mu;c, 1 &mu;c', '5e7660244674b'),
(393, '5e7660246fc3e', '<img src=\"image/phy/29a.jpg\">', '5e7660247972b'),
(394, '5e7660246fc3e', '<img src=\"image/phy/29b.jpg\">', '5e76602479736'),
(395, '5e7660246fc3e', '<img src=\"image/phy/29c.jpg\">', '5e76602479739'),
(396, '5e7660246fc3e', '<img src=\"image/phy/29d.jpg\">', '5e7660247973b'),
(397, '5e766024a7030', '<img src=\"image/phy/30a.jpg\">', '5e766024ad7da'),
(398, '5e766024a7030', '<img src=\"image/phy/30b.jpg\">', '5e766024ad7f2'),
(399, '5e766024a7030', '<img src=\"image/phy/30c.jpg\">', '5e766024ad7f6'),
(400, '5e766024a7030', '<img src=\"image/phy/30d.jpg\">', '5e766024ad7f9'),
(401, '5e766024d7693', '1 &mu;F', '5e766024ddd26'),
(402, '5e766024d7693', '1.5mF', '5e766024ddd30'),
(403, '5e766024d7693', '0.366 &mu;F', '5e766024ddd32'),
(404, '5e766024d7693', '1.366 &mu;F', '5e766024ddd35'),
(405, '5e76602516372', '<img src=\"image/phy/32a.jpg\">', '5e7660251f611'),
(406, '5e76602516372', '<img src=\"image/phy/32b.jpg\">', '5e7660251f61b'),
(407, '5e76602516372', '<img src=\"image/phy/32c.jpg\">', '5e7660251f61e'),
(408, '5e76602516372', '900V', '5e7660251f620'),
(409, '5e76602549332', 'E along AO', '5e7660254fc8c'),
(410, '5e76602549332', '2E along AO', '5e7660254fca6'),
(411, '5e76602549332', 'E along BO', '5e7660254fcaa'),
(412, '5e76602549332', 'E along CO', '5e7660254fcad'),
(413, '5e76602582519', '1:1', '5e76602589fa1'),
(414, '5e76602582519', '1:8', '5e76602589fab'),
(415, '5e76602582519', '8:1', '5e76602589fae'),
(416, '5e76602582519', '2:1', '5e76602589fb0'),
(417, '5e766025bdbf2', '<p>T<sub>1</sub> > T<sub>2</sub></p>', '5e766025c767c'),
(418, '5e766025bdbf2', '<p>T<sub>1</sub> < T<sub>2</sub></p>', '5e766025c7687'),
(419, '5e766025bdbf2', '<p>T<sub>1</sub> = T<sub>2</sub></p>', '5e766025c768a'),
(420, '5e766025bdbf2', 'None of these', '5e766025c768c'),
(421, '5e766025ee1af', '1 A', '5e76602603939'),
(422, '5e766025ee1af', '2 A', '5e76602603943'),
(423, '5e766025ee1af', '3 A', '5e76602603946'),
(424, '5e766025ee1af', '6 A', '5e76602603948'),
(425, '5e7660262a402', '-3 V', '5e76602633cf8'),
(426, '5e7660262a402', '+3 V', '5e76602633d03'),
(427, '5e7660262a402', '+6 V', '5e76602633d05'),
(428, '5e7660262a402', '+9 V', '5e76602633d07'),
(429, '5e7660265a92f', '800 W', '5e766026618cc'),
(430, '5e7660265a92f', '400 W', '5e766026618d6'),
(431, '5e7660265a92f', '200 W', '5e766026618d9'),
(432, '5e7660265a92f', '600 W', '5e766026618db'),
(433, '5e76602688473', '<img src=\"image/phy/39a.jpg\"> ', '5e76602691c76'),
(434, '5e76602688473', 'E = cB', '5e76602691c81'),
(435, '5e76602688473', '<img src=\"image/phy/39c.jpg\"> ', '5e76602691c83'),
(436, '5e76602688473', '<p>E = c<sup>2</sup>B</p>', '5e76602691c86'),
(437, '5e766026c228a', '5 MHz to 30 MHz', '5e766026c8c58'),
(438, '5e766026c228a', '88 MHz to 108 MHz', '5e766026c8c70'),
(439, '5e766026c228a', '30 KHz to 300 KHz', '5e766026c8c74'),
(440, '5e766026c228a', '3 GHz to 30 GHz', '5e766026c8c77'),
(441, '5e7660271d008', '0.1 litre', '5e7660272ec90'),
(442, '5e7660271d008', '0.4 litre', '5e7660272ec9c'),
(443, '5e7660271d008', '0.8 litre', '5e7660272ec9e'),
(444, '5e7660271d008', '0.6 litre', '5e7660272eca1'),
(445, '5e76602754383', '850J', '5e7660275adab'),
(446, '5e76602754383', '350J', '5e7660275adc5'),
(447, '5e76602754383', '250J', '5e7660275adc9'),
(448, '5e76602754383', '600J', '5e7660275adcc'),
(449, '5e766027f3d71', '- 0.45', '5e7660281668a'),
(450, '5e766027f3d71', '+0.45', '5e76602816696'),
(451, '5e766027f3d71', '+188.55', '5e76602816699'),
(452, '5e766027f3d71', '188.55', '5e7660281669b'),
(453, '5e76602859f09', '1', '5e76602865af8'),
(454, '5e76602859f09', 'RT', '5e76602865b02'),
(455, '5e76602859f09', '<img src=\"image/che/44c.jpg\"> ', '5e76602865b05'),
(456, '5e76602859f09', '<img src=\"image/che/44d.jpg\"> ', '5e76602865b07'),
(457, '5e7660289cf6e', '90 ml', '5e766028a7af7'),
(458, '5e7660289cf6e', '99 ml', '5e766028a7b02'),
(459, '5e7660289cf6e', '2000 ml', '5e766028a7b05'),
(460, '5e7660289cf6e', '990 ml', '5e766028a7b07'),
(461, '5e7660292ae6c', 'involves the weak attractive interaction between the adsorbent and adsorbate', '5e7660293f0d3'),
(462, '5e7660292ae6c', 'involves the chemical interaction between the adsorbent and adsorbate', '5e7660293f0de'),
(463, '5e7660292ae6c', 'is irreversible in nature', '5e7660293f0e0'),
(464, '5e7660292ae6c', 'Increasing with increase of temperature', '5e7660293f0e3'),
(465, '5e76602a143fa', 'Silver', '5e76602a21358'),
(466, '5e76602a143fa', 'Copper', '5e76602a21365'),
(467, '5e76602a143fa', 'Sodium', '5e76602a21368'),
(468, '5e76602a143fa', 'Aluminium', '5e76602a2136b'),
(469, '5e76602a5b344', 'Nickel', '5e76602a79086'),
(470, '5e76602a5b344', 'Silver', '5e76602a79092'),
(471, '5e76602a5b344', 'copper', '5e76602a79094'),
(472, '5e76602a5b344', 'Gold', '5e76602a79096'),
(473, '5e76602aad339', '<p>H<sub>3</sub>PO<sub>3</sub></p>', '5e76602ab3d51'),
(474, '5e76602aad339', '<p>H<sub>3</sub>PO<sub>2</sub></p>', '5e76602ab3d5c'),
(475, '5e76602aad339', '<p>H<sub>3</sub>PO<sub>4</sub></p>', '5e76602ab3d5e'),
(476, '5e76602aad339', '<p>H<sub>4</sub>P<sub>2</sub>O<sub>7</sub></p>', '5e76602ab3d61'),
(477, '5e76602ae0365', '<p>H<sub>2</sub>S</p>', '5e76602ae6cd9'),
(478, '5e76602ae0365', '<p>H<sub>2</sub>O</p>', '5e76602ae6ce3'),
(479, '5e76602ae0365', '<p>H<sub>2</sub>Se</p>', '5e76602ae6ce5'),
(480, '5e76602ae0365', '<p>H<sub>4</sub>P<sub>2</sub>O<sub>3</sub></p>', '5e76602ae6ce8'),
(481, '5e76602b29db3', 'Triangular pyramid', '5e76602b307e1'),
(482, '5e76602b29db3', 'Tetrahedral', '5e76602b307ec'),
(483, '5e76602b29db3', 'Triangular planar', '5e76602b307ee'),
(484, '5e76602b29db3', 'Triangular bipyramidal', '5e76602b307f1'),
(485, '5e76602b5a31b', 'Chloride', '5e76602b60b82'),
(486, '5e76602b5a31b', 'bromide', '5e76602b60b8c'),
(487, '5e76602b5a31b', 'iodine', '5e76602b60b8e'),
(488, '5e76602b5a31b', 'fluorine', '5e76602b60b91'),
(489, '5e76602b9aae5', '<img src=\"image/che/53a.jpg\"> ', '5e76602ba1276'),
(490, '5e76602b9aae5', '<img src=\"image/che/53b.jpg\"> ', '5e76602ba1280'),
(491, '5e76602b9aae5', '<img src=\"image/che/53c.jpg\"> ', '5e76602ba1282'),
(492, '5e76602b9aae5', '<img src=\"image/che/53d.jpg\"> ', '5e76602ba1284'),
(493, '5e76602bdda1c', 'the solution becomes blue', '5e76602be445a'),
(494, '5e76602bdda1c', 'the solution is decolourised', '5e76602be4469'),
(495, '5e76602bdda1c', '<img src=\"image/che/54c.jpg\"> ', '5e76602be446b'),
(496, '5e76602bdda1c', '<img src=\"image/che/54d.jpg\"> ', '5e76602be446e'),
(497, '5e76602c47ace', '<img src=\"image/che/55a.jpg\"> ', '5e76602c4e20b'),
(498, '5e76602c47ace', '<img src=\"image/che/55b.jpg\"> ', '5e76602c4e215'),
(499, '5e76602c47ace', '<img src=\"image/che/55c.jpg\"> ', '5e76602c4e218'),
(500, '5e76602c47ace', '<img src=\"image/che/55d.jpg\"> ', '5e76602c4e21a'),
(501, '5e76602c8d5ed', '<img src=\"image/che/56a.jpg\"> ', '5e76602c96b35'),
(502, '5e76602c8d5ed', '<img src=\"image/che/56b.jpg\"> ', '5e76602c96b40'),
(503, '5e76602c8d5ed', '<img src=\"image/che/56c.jpg\"> ', '5e76602c96b42'),
(504, '5e76602c8d5ed', '<img src=\"image/che/56d.jpg\"> ', '5e76602c96b44'),
(505, '5e76602cc5c08', '10.8mg', '5e76602ccf0e6'),
(506, '5e76602cc5c08', '5.4mg', '5e76602ccf0f0'),
(507, '5e76602cc5c08', '16.2 mg', '5e76602ccf0f2'),
(508, '5e76602cc5c08', '21.2mg', '5e76602ccf0f5'),
(509, '5e76602d0ca81', '<img src=\"image/che/58a.jpg\"> ', '5e76602d15e6b'),
(510, '5e76602d0ca81', '<img src=\"image/che/58b.jpg\"> ', '5e76602d15e76'),
(511, '5e76602d0ca81', '<img src=\"image/che/58c.jpg\"> ', '5e76602d15e78'),
(512, '5e76602d0ca81', '<img src=\"image/che/58d.jpg\"> ', '5e76602d15e7b'),
(513, '5e76602d5d235', '2', '5e76602d66865'),
(514, '5e76602d5d235', '1', '5e76602d66875'),
(515, '5e76602d5d235', '1/2', '5e76602d66878'),
(516, '5e76602d5d235', '0', '5e76602d6687a'),
(517, '5e76602d9b066', '<img src=\"image/che/60a.jpg\"> ', '5e76602da4397'),
(518, '5e76602d9b066', '<img src=\"image/che/60b.jpg\"> ', '5e76602da43a1'),
(519, '5e76602d9b066', '<img src=\"image/che/60c.jpg\"> ', '5e76602da43a4'),
(520, '5e76602d9b066', '<img src=\"image/che/60d.jpg\"> ', '5e76602da43a6'),
(537, '5e7740707a5bc', 'ererre', '5e7740707cbb8'),
(538, '5e7740707a5bc', 'c', '5e7740707cbbc'),
(539, '5e7740707a5bc', 'rere', '5e7740707cbbe'),
(540, '5e7740707a5bc', 'rer', '5e7740707cbbf'),
(541, '5e77407084d2e', 'fdff', '5e77407086765'),
(542, '5e77407084d2e', 'c', '5e77407086785'),
(543, '5e77407084d2e', 'dfddf', '5e77407086787'),
(544, '5e77407084d2e', 'fdf', '5e77407086788');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(71, '5e7640ff0797d', '5e76601b8a4fa', 'Domain of  <img src=\"image/math/1.jpg\">', 4, 1),
(72, '5e7640ff0797d', '5e76601bdc4b6', 'If   <img src=\"image/math/2.jpg\">  then', 4, 2),
(73, '5e7640ff0797d', '5e76601c23536', 'The number of triangles that are formed by choosing the vertices from a set of 12 points, seven of which lie on the same line is ', 4, 3),
(74, '5e7640ff0797d', '5e76601cc9cc5', 'If the line   <img src=\"image/math/4.jpg\">    passes through the points (2, -3) and (4, -5) , then (a, b) is', 4, 4),
(75, '5e7640ff0797d', '5e76601d33964', 'The eccentricity of the hyperbola whose latus rectum is 8 and conjugate axis is equal to half of the distance between the foci is', 4, 5),
(76, '5e7640ff0797d', '5e76601d75bec', 'If  <img src=\"image/math/6.jpg\">', 4, 6),
(77, '5e7640ff0797d', '5e76601df4077', 'A single letter is selected at random from the word \'PROBABILITY\'. The probability that it is a vowel, is', 4, 7),
(78, '5e7640ff0797d', '5e76601e3e7b0', 'Let A = {1, 2, 3, ... n} and B = {a, b} . Then the number of surjections from A into B is', 4, 8),
(79, '5e7640ff0797d', '5e76601e76ed6', 'If   <img src=\"image/math/9.jpg\" style=\"width:100%; height:auto; \">  equals', 4, 9),
(80, '5e7640ff0797d', '5e76601eb640e', 'If A is a square matrix such that   <img src=\"image/math/10.jpg\">  is equal to ', 4, 10),
(81, '5e7640ff0797d', '5e76601ef1582', '<img src=\"image/math/11.jpg\">  is equal to', 4, 11),
(82, '5e7640ff0797d', '5e76601f4b224', 'Let  f(x) = |sinx|. Then', 4, 12),
(83, '5e7640ff0797d', '5e76601f84717', 'Which of the following function is decreasing on   <img src=\"image/math/13.jpg\">', 4, 13),
(84, '5e7640ff0797d', '5e76601fc4e48', '<img src=\"image/math/14.jpg\">', 4, 14),
(85, '5e7640ff0797d', '5e766020012c6', 'Evaluate   <img src=\"image/math/15.jpg\">', 4, 15),
(86, '5e7640ff0797d', '5e76602045f57', '<img src=\"image/math/16.jpg\"> ', 4, 16),
(87, '5e7640ff0797d', '5e7660207e44f', ' <img src=\"image/math/17.jpg\">  ', 4, 17),
(88, '5e7640ff0797d', '5e766020b9595', '<img src=\"image/math/18.jpg\">', 4, 18),
(89, '5e7640ff0797d', '5e766020f013f', '<p><img src=\"image/math/19.jpg\">2x - 2y + z = 5 is </p>', 4, 19),
(90, '5e7640ff0797d', '5e766021343ba', '<p>A and B are events such that P(A) = 0.4, P(B) = 0.3 and P(A U B) = 0.5. Then P(B\' &cap; A) equals</p>', 4, 20),
(91, '5e7640ff0797d', '5e766021b983a', 'A player caught a cricket ball of mass 150 g moving at a rate of 20 m/s. If the catching process is completed in 0.1 s, the force of the blow exerted by the ball on the hand of the player is equal to', 4, 21),
(92, '5e7640ff0797d', '5e766021ef41e', 'If the linear momentum is increased by 50%, then kinetic energy will be increased by', 4, 22),
(93, '5e7640ff0797d', '5e7660223712f', 'The moment of inertia of a flywheel having kinetic energy 360 J and angular speed of 20 rad/s is', 4, 23),
(94, '5e7640ff0797d', '5e76602279287', 'The escape velocity for a body projected vertically upwards form the surface of earth is 11 km/sec. If the body is projected at an angle of 45° with the vertical, the escape velocity will be', 4, 24),
(95, '5e7640ff0797d', '5e766023999e6', 'Four wires of the same material are stretched by the same load. The dimensions are given below. Which of them will elongate the most?', 4, 25),
(96, '5e7640ff0797d', '5e766023cc9ce', '<img src=\"image/phy/26.jpg\">   \r\nCurrent from A to B in the straight wire is decreasing. The direction of induced current in the loop, is', 4, 26),
(97, '5e7640ff0797d', '5e7660240c85a', 'A 0.1m long conductor carrying a current of 50A is held perpendicular to a magnetic field of 1.25mT. the mechanical power required to move the conductor with a speed of 1m/sec is', 4, 27),
(98, '5e7640ff0797d', '5e7660243cc01', '<p>Two point charges are 3 m apart their combined charge is 8 &mu;c. The force between them is 0.012 N. Charges are</p>', 4, 28),
(99, '5e7640ff0797d', '5e7660246fc3e', 'The total electric flux through a cube when a charge 8 q is placed at one corner of the cube is', 4, 29),
(100, '5e7640ff0797d', '5e766024a7030', '<img src=\"image/phy/30.jpg\">   \r\nFour metallic plates each having area A are placed as shown with the distance between the consecutive plates d. The effective capacity between M and N is', 4, 30),
(101, '5e7640ff0797d', '5e766024d7693', '<img src=\"image/phy/31.jpg\">   \r\nThe equivalent capacitance of the infinite ladder shown in the following diagram between A and B (each capacitor is of capacitance equal to 1 &mu;F) is', 4, 31),
(102, '5e7640ff0797d', '5e76602516372', 'The charge of   <img src=\"image/phy/32.jpg\">    are placed at each of the four corners of square of side 8cm. The potential at the intersection of the diagonals is', 4, 32),
(103, '5e7640ff0797d', '5e76602549332', 'Charges 2q, q and q are placed at the corners A, B and C of an equilateral triangle ABC. If E is the electric field at the circum centre O of the triangle , due to the charge q , then the magnitude and direction of the resultant electric field at O is', 4, 33),
(104, '5e7640ff0797d', '5e76602582519', 'Two wires made of same material have their electrical resistances in the ratio 1:4. If their lengths are in the ratio 1:2, the ratio of their masses is', 4, 34),
(105, '5e7640ff0797d', '5e766025bdbf2', '<img src=\"image/phy/35.jpg\">   \r\n<p>I - V curves are shown for a metallic conductor at two different temperatures T<sub>1</sub> and T<sub>2</sub> in the figure. The correct relation between T<sub>1</sub> and T<sub>2</sub> is</p>', 4, 35),
(106, '5e7640ff0797d', '5e766025ee1af', '<img src=\"image/phy/36.jpg\">    \r\nIn the circuit shown in figure the total current supplied by the battery is', 4, 36),
(107, '5e7640ff0797d', '5e7660262a402', '<img src=\"image/phy/37.jpg\">   \r\n<p>The potential difference (V<sub>A</sub> - V<sub>B</sub>) between the points A and B in the given figure is</p>', 4, 37),
(108, '5e7640ff0797d', '5e7660265a92f', '<img src=\"image/phy/38.jpg\">    \r\nThree electric bulbs of 200 W, 200 W and 400 W are shown in figure. The resultant power of the combination is', 4, 38),
(109, '5e7640ff0797d', '5e76602688473', 'The instantaneous magnitudes of the electric field (E) and the magnetic field (B) vectors in an electromagnetic wave propagating in vacuum are related as', 4, 39),
(110, '5e7640ff0797d', '5e766026c228a', 'The FM Radio broad casting band is', 4, 40),
(111, '5e7640ff0797d', '5e7660271d008', '<p>A sample of gas has a volume of 0.2 litre measured at 1 atm pressure and 0&degC . At the same pressure, the volume of a gas at 273&degC</p>', 4, 41),
(112, '5e7640ff0797d', '5e76602754383', 'If a system absorbs 600 J of heat and performs 350J of work, the increase in the internal energy of the system is', 4, 42),
(113, '5e7640ff0797d', '5e766027f3d71', '<img src=\"image/che/43.jpg\"> ', 4, 43),
(114, '5e7640ff0797d', '5e76602859f09', '<img src=\"image/che/44.jpg\"> ', 4, 44),
(115, '5e7640ff0797d', '5e7660289cf6e', '<p>How much water should be added to 10 ml of 0.05 M H<sub>2</sub>SO<sub>4</sub> to increase its pH by 2 units?</p>', 4, 45),
(116, '5e7640ff0797d', '5e7660292ae6c', 'Physical adsorption', 4, 46),
(117, '5e7640ff0797d', '5e76602a143fa', 'Which of the following metals is leached by cyanide process?', 4, 47),
(118, '5e7640ff0797d', '5e76602a5b344', 'Mond’s process is used for extraction of', 4, 48),
(119, '5e7640ff0797d', '5e76602aad339', 'Which of the following is tribasic acid?', 4, 49),
(120, '5e7640ff0797d', '5e76602ae0365', 'Which of the following is thermally most stable?', 4, 50),
(121, '5e7640ff0797d', '5e76602b29db3', '<img src=\"image/che/51.jpg\"> ', 4, 51),
(122, '5e7640ff0797d', '5e76602b5a31b', 'Which of the following shows only negative oxidation state in compounds?', 4, 52),
(123, '5e7640ff0797d', '5e76602b9aae5', 'Which shows the maximum magnetic moment?', 4, 53),
(124, '5e7640ff0797d', '5e76602bdda1c', '<img src=\"image/che/54.jpg\"> ', 4, 54),
(125, '5e7640ff0797d', '5e76602c47ace', 'Identify the cationic complex', 4, 55),
(126, '5e7640ff0797d', '5e76602c8d5ed', '<img src=\"image/che/56.jpg\"> ', 4, 56),
(127, '5e7640ff0797d', '5e76602cc5c08', 'When 9.65 coulombs of electricity is passed through a solution of silver nitrate (at . mass of Ag = 108) the amount of silver deposited is', 4, 57),
(128, '5e7640ff0797d', '5e76602d0ca81', 'The unit of rate constant for a zero order reaction is', 4, 58),
(129, '5e7640ff0797d', '5e76602d5d235', '59. For a chemical reaction A → B it is found that the rate of reaction doubles, when the concentration of A is increased four times. The order of a reaction is', 4, 59),
(130, '5e7640ff0797d', '5e76602d9b066', 'Which of the following molecules is linear?', 4, 60),
(135, '5e77405be95c4', '5e7740707a5bc', 'dssds', 4, 1),
(136, '5e77405be95c4', '5e77407084d2e', 'ddffd', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(7, '5e7640ff0797d', 'Npuc Entrance Test', 1, 0, 60, 60, '2020-03-22 10:39:54', 'enabled'),
(10, '5e77405be95c4', 'Testing', 1, 0, 2, 2, '2020-03-23 04:17:17', 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`) VALUES
(18, 'princebhargav7@gmail.com', 1, '2020-03-22 10:36:35'),
(20, 'ark@ark.com', 0, '2020-03-23 14:08:00'),
(21, 'kichha123@gmail.com', 0, '2020-03-23 16:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `fphno` bigint(20) NOT NULL,
  `clgname` varchar(100) NOT NULL,
  `priname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `rollno`, `branch`, `gender`, `username`, `phno`, `fphno`, `clgname`, `priname`, `password`) VALUES
(47, 'Rahul', 'popopo', 'PCM', 'M', 'idreambot@a', 1234, 987776, 'ncet, gaw', 'chutiya', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(1, '58027e82e62e3', '58027e82f2412', '58027e82f2412', '5802790f793b1', 'sonudoo'),
(2, '58027e833dd54', '58027e8347514', '58027e8347514', '5802790f793b1', 'sonudoo'),
(3, '58027e8371483', '58027e838f19a', '58027e838f19a', '5802790f793b1', 'sonudoo'),
(4, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'pravin'),
(5, '5b85857d333f0', '5b85857d389e2', '5b85857d391b2', '5b85847bbe794', 'pravin'),
(6, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'pravin'),
(7, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'pravin'),
(8, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'pravin'),
(9, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'mugunth'),
(10, '5b85857d333f0', '5b85857d391b2', '5b85857d391b2', '5b85847bbe794', 'mugunth'),
(11, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'mugunth'),
(12, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'mugunth'),
(13, '5b85857db810f', '5b85857dbded1', '5b85857dbd701', '5b85847bbe794', 'mugunth'),
(14, '5b85857d00f34', '5b85857d0b347', '5b85857d0ab77', '5b85847bbe794', 'abcd@gmail.com'),
(15, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'qwerty@gmail.com'),
(16, '5b85857d00f34', '5b85857d0b347', '5b85857d0ab77', '5b85847bbe794', 'zxcvbn'),
(17, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'qw'),
(18, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'we'),
(19, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'zx'),
(20, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'zxc'),
(21, '5e76601b8a4fa', '5e76601bab03f', '5e76601bab03f', '5e7640ff0797d', 'zxc'),
(22, '5e76601bdc4b6', '5e76601beb423', '5e76601beb423', '5e7640ff0797d', 'zxc'),
(23, '5e76601c23536', '5e76601c37d2e', '5e76601c37d30', '5e7640ff0797d', 'zxc'),
(24, '5e76601cc9cc5', '5e76601cd661f', '5e76601cd6621', '5e7640ff0797d', 'zxc'),
(25, '5e76601d33964', '5e76601d400a4', '5e76601d400b1', '5e7640ff0797d', 'zxc'),
(26, '5e76601d75bec', '5e76601d79724', '5e76601d7972f', '5e7640ff0797d', 'zxc'),
(27, '5e76601df4077', '5e76601e0621b', '5e76601e0620a', '5e7640ff0797d', 'zxc'),
(28, '5e76601e3e7b0', '5e76601e4b027', '5e76601e4b021', '5e7640ff0797d', 'zxc'),
(29, '5e76601e76ed6', '5e76601e83552', '5e76601e83542', '5e7640ff0797d', 'zxc'),
(30, '5e76601eb640e', '5e76601ebf5d5', '5e76601ebf5c5', '5e7640ff0797d', 'zxc'),
(31, '5e76601ef1582', '5e76601f06566', '5e76601f06569', '5e7640ff0797d', 'zxc'),
(32, '5e76601f4b224', '5e76601f532c3', '5e76601f532bc', '5e7640ff0797d', 'zxc'),
(33, '5e76601f84717', '5e76601f90d63', '5e76601f90d66', '5e7640ff0797d', 'zxc'),
(34, '5e76601fc4e48', '5e76601fd1427', '5e76601fd1415', '5e7640ff0797d', 'zxc'),
(35, '5e766020012c6', '5e7660200d7a8', '5e7660200d7a8', '5e7640ff0797d', 'zxc'),
(36, '5e76602045f57', '5e7660204c3b8', '5e7660204c3b8', '5e7640ff0797d', 'zxc'),
(37, '5e7660207e44f', '5e76602087614', '5e76602087616', '5e7640ff0797d', 'zxc'),
(38, '5e766020b9595', '5e766020bfb4c', '5e766020bfb49', '5e7640ff0797d', 'zxc'),
(39, '5e766020f013f', '5e76602105873', '5e76602105873', '5e7640ff0797d', 'zxc'),
(40, '5e766021343ba', '5e7660213de14', '5e7660213de19', '5e7640ff0797d', 'zxc'),
(41, '5e766021b983a', '5e766021bfed5', '5e766021bfee0', '5e7640ff0797d', 'zxc'),
(42, '5e766021ef41e', '5e766022017d2', '5e766022017d2', '5e7640ff0797d', 'zxc'),
(43, '5e7660223712f', '5e76602240b6e', '5e76602240b6b', '5e7640ff0797d', 'zxc'),
(44, '5e76602279287', '5e7660228256c', '5e7660228256c', '5e7640ff0797d', 'zxc'),
(45, '5e766023999e6', '5e766023a2b27', '5e766023a2b36', '5e7640ff0797d', 'zxc'),
(46, '5e766023cc9ce', '5e766023d9d36', '5e766023d9d36', '5e7640ff0797d', 'zxc'),
(47, '5e7660240c85a', '5e7660241605b', '5e7660241605b', '5e7640ff0797d', 'zxc'),
(48, '5e7660243cc01', '5e76602446737', '5e76602446744', '5e7640ff0797d', 'zxc'),
(49, '5e7660246fc3e', '5e7660247973b', '5e7660247973b', '5e7640ff0797d', 'zxc'),
(50, '5e766024a7030', '5e766024ad7f9', '5e766024ad7f2', '5e7640ff0797d', 'zxc'),
(51, '5e766024d7693', '5e766024ddd35', '5e766024ddd32', '5e7640ff0797d', 'zxc'),
(52, '5e76602516372', '5e7660251f620', '5e7660251f61e', '5e7640ff0797d', 'zxc'),
(53, '5e76602549332', '5e7660254fcaa', '5e7660254fc8c', '5e7640ff0797d', 'zxc'),
(54, '5e76602582519', '5e76602589fab', '5e76602589fa1', '5e7640ff0797d', 'zxc'),
(55, '5e766025bdbf2', '5e766025c767c', '5e766025c767c', '5e7640ff0797d', 'zxc'),
(56, '5e766025ee1af', '5e76602603946', '5e76602603946', '5e7640ff0797d', 'zxc'),
(57, '5e7660262a402', '5e76602633d07', '5e76602633d07', '5e7640ff0797d', 'zxc'),
(58, '5e7660265a92f', '5e766026618d9', '5e766026618d9', '5e7640ff0797d', 'zxc'),
(59, '5e76602688473', '5e76602691c81', '5e76602691c81', '5e7640ff0797d', 'zxc'),
(60, '5e766026c228a', '5e766026c8c58', '5e766026c8c74', '5e7640ff0797d', 'zxc'),
(61, '5e7660271d008', '5e7660272eca1', '5e7660272ec9c', '5e7640ff0797d', 'zxc'),
(62, '5e76602754383', '5e7660275adab', '5e7660275adc9', '5e7640ff0797d', 'zxc'),
(63, '5e766027f3d71', '5e7660281669b', '5e76602816696', '5e7640ff0797d', 'zxc'),
(64, '5e76602859f09', '5e76602865b07', '5e76602865b05', '5e7640ff0797d', 'zxc'),
(65, '5e7660289cf6e', '5e766028a7b07', '5e766028a7b07', '5e7640ff0797d', 'zxc'),
(66, '5e7660292ae6c', '5e7660293f0d3', '5e7660293f0d3', '5e7640ff0797d', 'zxc'),
(67, '5e76602a143fa', '5e76602a21368', '5e76602a21358', '5e7640ff0797d', 'zxc'),
(68, '5e76602a5b344', '5e76602a79094', '5e76602a79086', '5e7640ff0797d', 'zxc'),
(69, '5e76602aad339', '5e76602ab3d5c', '5e76602ab3d5e', '5e7640ff0797d', 'zxc'),
(70, '5e76602ae0365', '5e76602ae6cd9', '5e76602ae6ce3', '5e7640ff0797d', 'zxc'),
(71, '5e76602b29db3', '5e76602b307ec', '5e76602b307ec', '5e7640ff0797d', 'zxc'),
(72, '5e76602b5a31b', '5e76602b60b82', '5e76602b60b91', '5e7640ff0797d', 'zxc'),
(73, '5e76602b9aae5', '5e76602ba1280', '5e76602ba1282', '5e7640ff0797d', 'zxc'),
(74, '5e76602bdda1c', '5e76602be446b', '5e76602be446e', '5e7640ff0797d', 'zxc'),
(75, '5e76602c47ace', '5e76602c4e21a', '5e76602c4e218', '5e7640ff0797d', 'zxc'),
(76, '5e76602c8d5ed', '5e76602c96b42', '5e76602c96b35', '5e7640ff0797d', 'zxc'),
(77, '5e76602cc5c08', '5e76602ccf0e6', '5e76602ccf0e6', '5e7640ff0797d', 'zxc'),
(78, '5e76602d0ca81', '5e76602d15e7b', '5e76602d15e78', '5e7640ff0797d', 'zxc'),
(79, '5e76602d5d235', '5e76602d66865', '5e76602d66878', '5e7640ff0797d', 'zxc'),
(80, '5e76602d9b066', '5e76602da43a4', '5e76602da43a6', '5e7640ff0797d', 'zxc'),
(81, '5e7666fa99eb4', '5e7666fab5909', '5e7666fab58fb', '5e7666e113252', 'poi'),
(82, '5e76601b8a4fa', '5e76601bab046', '5e76601bab03f', '5e7640ff0797d', 'poi'),
(83, '5e7666fa99eb4', '5e7666fab58fb', '5e7666fab58fb', '5e7666e113252', 'ark'),
(84, '5e7666fae086f', '5e7666faedf22', '5e7666faedf22', '5e7666e113252', 'ark'),
(85, '5e76601b8a4fa', '5e76601bab03f', '5e76601bab03f', '5e7640ff0797d', 'arkk'),
(86, '5e76601bdc4b6', '5e76601beb423', '5e76601beb423', '5e7640ff0797d', 'arkk'),
(87, '5e76601c23536', '5e76601c37d2e', '5e76601c37d30', '5e7640ff0797d', 'arkk'),
(88, '5e76601cc9cc5', '5e76601cd661f', '5e76601cd6621', '5e7640ff0797d', 'arkk'),
(89, '5e76601d33964', '5e76601d400a4', '5e76601d400b1', '5e7640ff0797d', 'arkk'),
(90, '5e76601d75bec', '5e76601d79724', '5e76601d7972f', '5e7640ff0797d', 'arkk'),
(91, '5e76601df4077', '5e76601e0621b', '5e76601e0620a', '5e7640ff0797d', 'arkk'),
(92, '5e76601e3e7b0', '5e76601e4b027', '5e76601e4b021', '5e7640ff0797d', 'arkk'),
(93, '5e76601e76ed6', '5e76601e83552', '5e76601e83542', '5e7640ff0797d', 'arkk'),
(94, '5e76601eb640e', '5e76601ebf5d5', '5e76601ebf5c5', '5e7640ff0797d', 'arkk'),
(95, '5e76601ef1582', '5e76601f06566', '5e76601f06569', '5e7640ff0797d', 'arkk'),
(96, '5e76601f4b224', '5e76601f532c3', '5e76601f532bc', '5e7640ff0797d', 'arkk'),
(97, '5e76601f84717', '5e76601f90d63', '5e76601f90d66', '5e7640ff0797d', 'arkk'),
(98, '5e76601fc4e48', '5e76601fd1427', '5e76601fd1415', '5e7640ff0797d', 'arkk'),
(99, '5e766020012c6', '5e7660200d7a8', '5e7660200d7a8', '5e7640ff0797d', 'arkk'),
(100, '5e76602045f57', '5e7660204c3b8', '5e7660204c3b8', '5e7640ff0797d', 'arkk'),
(101, '5e7660207e44f', '5e76602087614', '5e76602087616', '5e7640ff0797d', 'arkk'),
(102, '5e766020b9595', '5e766020bfb4c', '5e766020bfb49', '5e7640ff0797d', 'arkk'),
(103, '5e766020f013f', '5e76602105873', '5e76602105873', '5e7640ff0797d', 'arkk'),
(104, '5e766021343ba', '5e7660213de14', '5e7660213de19', '5e7640ff0797d', 'arkk'),
(105, '5e766021b983a', '5e766021bfed5', '5e766021bfee0', '5e7640ff0797d', 'arkk'),
(106, '5e766021ef41e', '5e766022017d2', '5e766022017d2', '5e7640ff0797d', 'arkk'),
(107, '5e7660223712f', '5e76602240b6e', '5e76602240b6b', '5e7640ff0797d', 'arkk'),
(108, '5e76602279287', '5e7660228256c', '5e7660228256c', '5e7640ff0797d', 'arkk'),
(109, '5e766023999e6', '5e766023a2b27', '5e766023a2b36', '5e7640ff0797d', 'arkk'),
(110, '5e766023cc9ce', '5e766023d9d36', '5e766023d9d36', '5e7640ff0797d', 'arkk'),
(111, '5e7660240c85a', '5e7660241605b', '5e7660241605b', '5e7640ff0797d', 'arkk'),
(112, '5e7660243cc01', '5e76602446737', '5e76602446744', '5e7640ff0797d', 'arkk'),
(113, '5e7660246fc3e', '5e7660247973b', '5e7660247973b', '5e7640ff0797d', 'arkk'),
(114, '5e766024a7030', '5e766024ad7f9', '5e766024ad7f2', '5e7640ff0797d', 'arkk'),
(115, '5e766024d7693', '5e766024ddd35', '5e766024ddd32', '5e7640ff0797d', 'arkk'),
(116, '5e76602516372', '5e7660251f620', '5e7660251f61e', '5e7640ff0797d', 'arkk'),
(117, '5e76602549332', '5e7660254fcaa', '5e7660254fc8c', '5e7640ff0797d', 'arkk'),
(118, '5e76602582519', '5e76602589fab', '5e76602589fa1', '5e7640ff0797d', 'arkk'),
(119, '5e766025bdbf2', '5e766025c767c', '5e766025c767c', '5e7640ff0797d', 'arkk'),
(120, '5e766025ee1af', '5e76602603946', '5e76602603946', '5e7640ff0797d', 'arkk'),
(121, '5e7660262a402', '5e76602633d07', '5e76602633d07', '5e7640ff0797d', 'arkk'),
(122, '5e7660265a92f', '5e766026618d9', '5e766026618d9', '5e7640ff0797d', 'arkk'),
(123, '5e76602688473', '5e76602691c81', '5e76602691c81', '5e7640ff0797d', 'arkk'),
(124, '5e766026c228a', '5e766026c8c58', '5e766026c8c74', '5e7640ff0797d', 'arkk'),
(125, '5e7660271d008', '5e7660272eca1', '5e7660272ec9c', '5e7640ff0797d', 'arkk'),
(126, '5e76602754383', '5e7660275adab', '5e7660275adc9', '5e7640ff0797d', 'arkk'),
(127, '5e766027f3d71', '5e7660281669b', '5e76602816696', '5e7640ff0797d', 'arkk'),
(128, '5e76602859f09', '5e76602865b07', '5e76602865b05', '5e7640ff0797d', 'arkk'),
(129, '5e7660289cf6e', '5e766028a7b07', '5e766028a7b07', '5e7640ff0797d', 'arkk'),
(130, '5e7660292ae6c', '5e7660293f0d3', '5e7660293f0d3', '5e7640ff0797d', 'arkk'),
(131, '5e76602a143fa', '5e76602a21368', '5e76602a21358', '5e7640ff0797d', 'arkk'),
(132, '5e76602a5b344', '5e76602a79094', '5e76602a79086', '5e7640ff0797d', 'arkk'),
(133, '5e76602aad339', '5e76602ab3d5c', '5e76602ab3d5e', '5e7640ff0797d', 'arkk'),
(134, '5e76602ae0365', '5e76602ae6cd9', '5e76602ae6ce3', '5e7640ff0797d', 'arkk'),
(135, '5e76602b29db3', '5e76602b307ec', '5e76602b307ec', '5e7640ff0797d', 'arkk'),
(136, '5e76602b5a31b', '5e76602b60b82', '5e76602b60b91', '5e7640ff0797d', 'arkk'),
(137, '5e76602b9aae5', '5e76602ba1280', '5e76602ba1282', '5e7640ff0797d', 'arkk'),
(138, '5e76602bdda1c', '5e76602be446b', '5e76602be446e', '5e7640ff0797d', 'arkk'),
(139, '5e76602c47ace', '5e76602c4e21a', '5e76602c4e218', '5e7640ff0797d', 'arkk'),
(140, '5e76602c8d5ed', '5e76602c96b42', '5e76602c96b35', '5e7640ff0797d', 'arkk'),
(141, '5e76602cc5c08', '5e76602ccf0e6', '5e76602ccf0e6', '5e7640ff0797d', 'arkk'),
(142, '5e76602d0ca81', '5e76602d15e7b', '5e76602d15e78', '5e7640ff0797d', 'arkk'),
(143, '5e76602d5d235', '5e76602d66865', '5e76602d66878', '5e7640ff0797d', 'arkk'),
(144, '5e76602d9b066', '5e76602da43a4', '5e76602da43a6', '5e7640ff0797d', 'arkk'),
(145, '5e766b71431d3', '5e766b7179625', '5e766b7179625', '5e766b35e60ee', 'fff'),
(146, '5e766b71cda76', '5e766b71df5ae', '5e766b71df5ae', '5e766b35e60ee', 'fff'),
(147, '5e76601c23536', '5e76601c37d2e', '5e76601c37d2e', '5e7640ff0797d', 'wert'),
(149, '5e76601b8a4fa', '5e76601bab046', '5e76601bab03f', '5e7640ff0797d', 'kks01@gmail.com'),
(150, '5e76601bdc4b6', '5e76601beb423', '5e76601beb423', '5e7640ff0797d', 'kks01@gmail.com'),
(151, '5e76601c23536', '5e76601c37d2e', '5e76601c37d2e', '5e7640ff0797d', 'kks01@gmail.com'),
(152, '5e76601cc9cc5', '5e76601cd661f', '5e76601cd6621', '5e7640ff0797d', 'kks01@gmail.com'),
(153, '5e76601d33964', '5e76601d400a4', '5e76601d400b1', '5e7640ff0797d', 'kks01@gmail.com'),
(154, '5e76601d75bec', '5e76601d79724', '5e76601d7972f', '5e7640ff0797d', 'kks01@gmail.com'),
(155, '5e76601df4077', '5e76601e0621b', '5e76601e0620a', '5e7640ff0797d', 'kks01@gmail.com'),
(156, '5e76601e3e7b0', '5e76601e4b027', '5e76601e4b021', '5e7640ff0797d', 'kks01@gmail.com'),
(157, '5e76601e76ed6', '5e76601e83552', '5e76601e83542', '5e7640ff0797d', 'kks01@gmail.com'),
(158, '5e76601eb640e', '5e76601ebf5d5', '5e76601ebf5c5', '5e7640ff0797d', 'kks01@gmail.com'),
(159, '5e76601ef1582', '5e76601f06566', '5e76601f06569', '5e7640ff0797d', 'kks01@gmail.com'),
(160, '5e76601f4b224', '5e76601f532c3', '5e76601f532bc', '5e7640ff0797d', 'kks01@gmail.com'),
(161, '5e76601f84717', '5e76601f90d63', '5e76601f90d66', '5e7640ff0797d', 'kks01@gmail.com'),
(162, '5e76601fc4e48', '5e76601fd1427', '5e76601fd1415', '5e7640ff0797d', 'kks01@gmail.com'),
(163, '5e766020012c6', '5e7660200d7a8', '5e7660200d7a8', '5e7640ff0797d', 'kks01@gmail.com'),
(164, '5e76602045f57', '5e7660204c3b8', '5e7660204c3b8', '5e7640ff0797d', 'kks01@gmail.com'),
(165, '5e7660207e44f', '5e76602087614', '5e76602087616', '5e7640ff0797d', 'kks01@gmail.com'),
(166, '5e766020b9595', '5e766020bfb4c', '5e766020bfb49', '5e7640ff0797d', 'kks01@gmail.com'),
(167, '5e766020f013f', '5e76602105873', '5e76602105873', '5e7640ff0797d', 'kks01@gmail.com'),
(168, '5e766021343ba', '5e7660213de14', '5e7660213de19', '5e7640ff0797d', 'kks01@gmail.com'),
(169, '5e766021b983a', '5e766021bfed5', '5e766021bfee0', '5e7640ff0797d', 'kks01@gmail.com'),
(170, '5e766021ef41e', '5e766022017d2', '5e766022017d2', '5e7640ff0797d', 'kks01@gmail.com'),
(171, '5e7660223712f', '5e76602240b6e', '5e76602240b6b', '5e7640ff0797d', 'kks01@gmail.com'),
(172, '5e76602279287', '5e7660228256a', '5e7660228256c', '5e7640ff0797d', 'kks01@gmail.com'),
(173, '5e766023999e6', '5e766023a2b27', '5e766023a2b36', '5e7640ff0797d', 'kks01@gmail.com'),
(174, '5e766023cc9ce', '5e766023d9d36', '5e766023d9d36', '5e7640ff0797d', 'kks01@gmail.com'),
(175, '5e7660240c85a', '5e7660241605b', '5e7660241605b', '5e7640ff0797d', 'kks01@gmail.com'),
(176, '5e7660243cc01', '5e76602446737', '5e76602446744', '5e7640ff0797d', 'kks01@gmail.com'),
(177, '5e7660246fc3e', '5e7660247973b', '5e7660247973b', '5e7640ff0797d', 'kks01@gmail.com'),
(178, '5e766024a7030', '5e766024ad7f9', '5e766024ad7f2', '5e7640ff0797d', 'kks01@gmail.com'),
(179, '5e76602516372', '5e7660251f620', '5e7660251f61e', '5e7640ff0797d', 'kks01@gmail.com'),
(180, '5e76602549332', '5e7660254fcaa', '5e7660254fc8c', '5e7640ff0797d', 'kks01@gmail.com'),
(181, '5e76602582519', '5e76602589fab', '5e76602589fa1', '5e7640ff0797d', 'kks01@gmail.com'),
(182, '5e766025bdbf2', '5e766025c767c', '5e766025c767c', '5e7640ff0797d', 'kks01@gmail.com'),
(183, '5e766025ee1af', '5e76602603946', '5e76602603946', '5e7640ff0797d', 'kks01@gmail.com'),
(184, '5e7660262a402', '5e76602633d07', '5e76602633d07', '5e7640ff0797d', 'kks01@gmail.com'),
(185, '5e766b71431d3', '5e766b7179622', '5e766b7179625', '5e766b35e60ee', 'arkk'),
(186, '5e7660265a92f', '5e766026618d9', '5e766026618d9', '5e7640ff0797d', 'kks01@gmail.com'),
(187, '5e766b71cda76', '5e766b71df5ae', '5e766b71df5ae', '5e766b35e60ee', 'arkk'),
(188, '5e76602688473', '5e76602691c81', '5e76602691c81', '5e7640ff0797d', 'kks01@gmail.com'),
(189, '5e766026c228a', '5e766026c8c58', '5e766026c8c74', '5e7640ff0797d', 'kks01@gmail.com'),
(190, '5e7660271d008', '5e7660272eca1', '5e7660272ec9c', '5e7640ff0797d', 'kks01@gmail.com'),
(191, '5e76602754383', '5e7660275adab', '5e7660275adc9', '5e7640ff0797d', 'kks01@gmail.com'),
(192, '5e766027f3d71', '5e7660281669b', '5e76602816696', '5e7640ff0797d', 'kks01@gmail.com'),
(193, '5e7660289cf6e', '5e766028a7b07', '5e766028a7b07', '5e7640ff0797d', 'kks01@gmail.com'),
(194, '5e7660292ae6c', '5e7660293f0d3', '5e7660293f0d3', '5e7640ff0797d', 'kks01@gmail.com'),
(195, '5e76602a143fa', '5e76602a21368', '5e76602a21358', '5e7640ff0797d', 'kks01@gmail.com'),
(196, '5e76602a5b344', '5e76602a79094', '5e76602a79086', '5e7640ff0797d', 'kks01@gmail.com'),
(197, '5e76602aad339', '5e76602ab3d5c', '5e76602ab3d5e', '5e7640ff0797d', 'kks01@gmail.com'),
(198, '5e76602ae0365', '5e76602ae6cd9', '5e76602ae6ce3', '5e7640ff0797d', 'kks01@gmail.com'),
(199, '5e76602b29db3', '5e76602b307ec', '5e76602b307ec', '5e7640ff0797d', 'kks01@gmail.com'),
(200, '5e76602b5a31b', '5e76602b60b82', '5e76602b60b91', '5e7640ff0797d', 'kks01@gmail.com'),
(201, '5e76602b9aae5', '5e76602ba1280', '5e76602ba1282', '5e7640ff0797d', 'kks01@gmail.com'),
(202, '5e76602bdda1c', '5e76602be446b', '5e76602be446e', '5e7640ff0797d', 'kks01@gmail.com'),
(203, '5e76602c47ace', '5e76602c4e21a', '5e76602c4e218', '5e7640ff0797d', 'kks01@gmail.com'),
(204, '5e76602c8d5ed', '5e76602c96b42', '5e76602c96b35', '5e7640ff0797d', 'kks01@gmail.com'),
(205, '5e76602cc5c08', '5e76602ccf0e6', '5e76602ccf0e6', '5e7640ff0797d', 'kks01@gmail.com'),
(206, '5e76602d0ca81', '5e76602d15e7b', '5e76602d15e78', '5e7640ff0797d', 'kks01@gmail.com'),
(207, '5e76602d5d235', '5e76602d66865', '5e76602d66878', '5e7640ff0797d', 'kks01@gmail.com'),
(208, '5e76602d9b066', '5e76602da43a4', '5e76602da43a6', '5e7640ff0797d', 'kks01@gmail.com'),
(209, '5e766024d7693', '5e766024ddd35', '5e766024ddd32', '5e7640ff0797d', 'kks01@gmail.com'),
(210, '5e76601b8a4fa', '5e76601bab03f', '5e76601bab03f', '5e7640ff0797d', 'kks02@gmail.com'),
(211, '5e76601bdc4b6', '5e76601beb423', '5e76601beb423', '5e7640ff0797d', 'kks02@gmail.com'),
(212, '5e76601c23536', '5e76601c37d30', '5e76601c37d2e', '5e7640ff0797d', 'kks02@gmail.com'),
(213, '5e76601cc9cc5', '5e76601cd6621', '5e76601cd6621', '5e7640ff0797d', 'kks02@gmail.com'),
(214, '5e76601d33964', '5e76601d400b1', '5e76601d400b1', '5e7640ff0797d', 'kks02@gmail.com'),
(215, '5e76601d75bec', '5e76601d7972f', '5e76601d7972f', '5e7640ff0797d', 'kks02@gmail.com'),
(216, '5e76601df4077', '5e76601e0620a', '5e76601e0620a', '5e7640ff0797d', 'kks02@gmail.com'),
(217, '5e76601e3e7b0', '5e76601e4b021', '5e76601e4b021', '5e7640ff0797d', 'kks02@gmail.com'),
(218, '5e76601e76ed6', '5e76601e83542', '5e76601e83542', '5e7640ff0797d', 'kks02@gmail.com'),
(219, '5e76601eb640e', '5e76601ebf5c5', '5e76601ebf5c5', '5e7640ff0797d', 'kks02@gmail.com'),
(220, '5e76601ef1582', '5e76601f06569', '5e76601f06569', '5e7640ff0797d', 'kks02@gmail.com'),
(221, '5e76601f4b224', '5e76601f532bc', '5e76601f532bc', '5e7640ff0797d', 'kks02@gmail.com'),
(222, '5e76601f84717', '5e76601f90d66', '5e76601f90d66', '5e7640ff0797d', 'kks02@gmail.com'),
(223, '5e76601fc4e48', '5e76601fd1415', '5e76601fd1415', '5e7640ff0797d', 'kks02@gmail.com'),
(224, '5e766020012c6', '5e7660200d7a8', '5e7660200d7a8', '5e7640ff0797d', 'kks02@gmail.com'),
(225, '5e76602045f57', '5e7660204c3b8', '5e7660204c3b8', '5e7640ff0797d', 'kks02@gmail.com'),
(226, '5e7660207e44f', '5e76602087616', '5e76602087616', '5e7640ff0797d', 'kks02@gmail.com'),
(227, '5e766020b9595', '5e766020bfb49', '5e766020bfb49', '5e7640ff0797d', 'kks02@gmail.com'),
(228, '5e766020f013f', '5e76602105873', '5e76602105873', '5e7640ff0797d', 'kks02@gmail.com'),
(229, '5e766021343ba', '5e7660213de19', '5e7660213de19', '5e7640ff0797d', 'kks02@gmail.com'),
(230, '5e766021b983a', '5e766021bfee0', '5e766021bfee0', '5e7640ff0797d', 'kks02@gmail.com'),
(231, '5e766021ef41e', '5e766022017d2', '5e766022017d2', '5e7640ff0797d', 'kks02@gmail.com'),
(232, '5e7660223712f', '5e76602240b6b', '5e76602240b6b', '5e7640ff0797d', 'kks02@gmail.com'),
(233, '5e76602279287', '5e7660228256c', '5e7660228256c', '5e7640ff0797d', 'kks02@gmail.com'),
(234, '5e766023999e6', '5e766023a2b36', '5e766023a2b36', '5e7640ff0797d', 'kks02@gmail.com'),
(235, '5e766023cc9ce', '5e766023d9d36', '5e766023d9d36', '5e7640ff0797d', 'kks02@gmail.com'),
(236, '5e7660240c85a', '5e7660241605b', '5e7660241605b', '5e7640ff0797d', 'kks02@gmail.com'),
(237, '5e7660243cc01', '5e76602446744', '5e76602446744', '5e7640ff0797d', 'kks02@gmail.com'),
(238, '5e7660246fc3e', '5e7660247973b', '5e7660247973b', '5e7640ff0797d', 'kks02@gmail.com'),
(239, '5e766024a7030', '5e766024ad7f2', '5e766024ad7f2', '5e7640ff0797d', 'kks02@gmail.com'),
(240, '5e766024d7693', '5e766024ddd32', '5e766024ddd32', '5e7640ff0797d', 'kks02@gmail.com'),
(241, '5e76602516372', '5e7660251f61e', '5e7660251f61e', '5e7640ff0797d', 'kks02@gmail.com'),
(242, '5e76602549332', '5e7660254fc8c', '5e7660254fc8c', '5e7640ff0797d', 'kks02@gmail.com'),
(243, '5e76602582519', '5e76602589fa1', '5e76602589fa1', '5e7640ff0797d', 'kks02@gmail.com'),
(244, '5e766025bdbf2', '5e766025c767c', '5e766025c767c', '5e7640ff0797d', 'kks02@gmail.com'),
(245, '5e766025ee1af', '5e76602603946', '5e76602603946', '5e7640ff0797d', 'kks02@gmail.com'),
(246, '5e7660262a402', '5e76602633d07', '5e76602633d07', '5e7640ff0797d', 'kks02@gmail.com'),
(247, '5e7660265a92f', '5e766026618d9', '5e766026618d9', '5e7640ff0797d', 'kks02@gmail.com'),
(248, '5e76602688473', '5e76602691c81', '5e76602691c81', '5e7640ff0797d', 'kks02@gmail.com'),
(249, '5e766026c228a', '5e766026c8c74', '5e766026c8c74', '5e7640ff0797d', 'kks02@gmail.com'),
(250, '5e7660271d008', '5e7660272ec9c', '5e7660272ec9c', '5e7640ff0797d', 'kks02@gmail.com'),
(251, '5e76602754383', '5e7660275adc9', '5e7660275adc9', '5e7640ff0797d', 'kks02@gmail.com'),
(252, '5e76602859f09', '5e76602865b05', '5e76602865b05', '5e7640ff0797d', 'kks02@gmail.com'),
(253, '5e7660289cf6e', '5e766028a7b07', '5e766028a7b07', '5e7640ff0797d', 'kks02@gmail.com'),
(254, '5e7660292ae6c', '5e7660293f0d3', '5e7660293f0d3', '5e7640ff0797d', 'kks02@gmail.com'),
(255, '5e76602a143fa', '5e76602a21358', '5e76602a21358', '5e7640ff0797d', 'kks02@gmail.com'),
(256, '5e76602a5b344', '5e76602a79086', '5e76602a79086', '5e7640ff0797d', 'kks02@gmail.com'),
(257, '5e76602aad339', '5e76602ab3d5e', '5e76602ab3d5e', '5e7640ff0797d', 'kks02@gmail.com'),
(258, '5e76602ae0365', '5e76602ae6ce3', '5e76602ae6ce3', '5e7640ff0797d', 'kks02@gmail.com'),
(259, '5e76602b29db3', '5e76602b307ec', '5e76602b307ec', '5e7640ff0797d', 'kks02@gmail.com'),
(260, '5e76602b5a31b', '5e76602b60b91', '5e76602b60b91', '5e7640ff0797d', 'kks02@gmail.com'),
(261, '5e76602b9aae5', '5e76602ba1282', '5e76602ba1282', '5e7640ff0797d', 'kks02@gmail.com'),
(262, '5e76602bdda1c', '5e76602be446e', '5e76602be446e', '5e7640ff0797d', 'kks02@gmail.com'),
(263, '5e76602c47ace', '5e76602c4e218', '5e76602c4e218', '5e7640ff0797d', 'kks02@gmail.com'),
(264, '5e76602c8d5ed', '5e76602c96b35', '5e76602c96b35', '5e7640ff0797d', 'kks02@gmail.com'),
(265, '5e76602cc5c08', '5e76602ccf0e6', '5e76602ccf0e6', '5e7640ff0797d', 'kks02@gmail.com'),
(266, '5e76602d0ca81', '5e76602d15e78', '5e76602d15e78', '5e7640ff0797d', 'kks02@gmail.com'),
(267, '5e76602d5d235', '5e76602d66878', '5e76602d66878', '5e7640ff0797d', 'kks02@gmail.com'),
(268, '5e76602d9b066', '5e76602da43a6', '5e76602da43a6', '5e7640ff0797d', 'kks02@gmail.com'),
(269, '5e766b71431d3', '5e766b7179625', '5e766b7179625', '5e766b35e60ee', 'kks02@gmail.com'),
(270, '5e766b71cda76', '5e766b71df5ae', '5e766b71df5ae', '5e766b35e60ee', 'kks02@gmail.com'),
(271, '5e76601b8a4fa', '5e76601bab03f', '5e76601bab03f', '5e7640ff0797d', 'princebhargav7@gmail.com'),
(272, '5e76601c23536', '5e76601c37d2c', '5e76601c37d2e', '5e7640ff0797d', 'princebhargav7@gmail.com'),
(274, '5e7740707a5bc', '5e7740707cbbc', '5e7740707cbbc', '5e77405be95c4', 'a@a.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=545;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
