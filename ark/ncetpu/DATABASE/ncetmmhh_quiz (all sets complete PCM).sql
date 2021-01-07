-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2020 at 01:16 PM
-- Server version: 5.6.33-79.0-log
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
(136, '5e77407084d2e', '5e77407086785'),
(398, '5e88dc36528da', '5e88dc36556f2'),
(399, '5e88dc365e803', '5e88dc3660125'),
(400, '5e88dc366872b', '5e88dc366a03b'),
(401, '5e88dc3672a71', '5e88dc36744b0'),
(402, '5e88dc367c661', '5e88dc367ef80'),
(403, '5e88dc3688652', '5e88dc368ab03'),
(404, '5e88dc3693ed8', '5e88dc3695c61'),
(405, '5e88dc369e348', '5e88dc36a0efd'),
(406, '5e88dc36aba82', '5e88dc36ad2a4'),
(407, '5e88dc36b5223', '5e88dc36b6a60'),
(408, '5e88dc36bf992', '5e88dc36c1598'),
(409, '5e88dc36cb699', '5e88dc36cd279'),
(410, '5e88dc36d5c85', '5e88dc36d74d6'),
(411, '5e88dc36df602', '5e88dc36e0fb9'),
(412, '5e88dc36ebd56', '5e88dc36ef7f2'),
(413, '5e88dc3705d62', '5e88dc3707400'),
(414, '5e88dc371293e', '5e88dc371427a'),
(415, '5e88dc371ba6f', '5e88dc371d3a3'),
(416, '5e88dc3725708', '5e88dc372701e'),
(417, '5e88dc372e2e7', '5e88dc372fd1c'),
(418, '5e88dc3737900', '5e88dc37390df'),
(419, '5e88dc3740995', '5e88dc3742601'),
(420, '5e88dc3749a14', '5e88dc374b41b'),
(421, '5e88dc3752d38', '5e88dc3754875'),
(422, '5e88dc375d41d', '5e88dc375ed85'),
(423, '5e88dc37664df', '5e88dc3767b96'),
(424, '5e88dc376e9bf', '5e88dc376fdb6'),
(425, '5e88dc3778491', '5e88dc377a2e6'),
(426, '5e88dc3783414', '5e88dc37852ca'),
(427, '5e88dc37a4f81', '5e88dc37a6b6b'),
(428, '5e88dc37aecec', '5e88dc37b089e'),
(429, '5e88dc37b9f87', '5e88dc37bb7d9'),
(430, '5e88dc37c5355', '5e88dc37c749d'),
(431, '5e88dc37cfdbb', '5e88dc37d1b6b'),
(432, '5e88dc37dbd9f', '5e88dc37dd788'),
(433, '5e88dc37e6500', '5e88dc37e7f30'),
(434, '5e88dc37f0cf7', '5e88dc37f3c6b'),
(435, '5e88dc38077b1', '5e88dc3809576'),
(436, '5e88dc38129ab', '5e88dc38141cb'),
(437, '5e88dc381e466', '5e88dc381fe4b'),
(438, '5e88dc382969e', '5e88dc382b05b'),
(439, '5e88dc3833e6a', '5e88dc3835e73'),
(440, '5e88dc383edbe', '5e88dc38411e8'),
(441, '5e88dc384a8bf', '5e88dc384bede'),
(442, '5e88dc38551b7', '5e88dc38570a4'),
(443, '5e88dc3860ce8', '5e88dc386213c'),
(444, '5e88dc386cc96', '5e88dc386e7df'),
(445, '5e88dc38788fd', '5e88dc387a3ab'),
(446, '5e88dc3883849', '5e88dc3885727'),
(447, '5e88dc388e6b7', '5e88dc38960a4'),
(448, '5e88dc389dcad', '5e88dc389f58d'),
(449, '5e88dc38a69be', '5e88dc38a803d'),
(450, '5e88dc38b325b', '5e88dc38b496b'),
(451, '5e88dc38bb9f4', '5e88dc38be13d'),
(452, '5e88dc38c6db5', '5e88dc38c84ca'),
(453, '5e88dc38d5f45', '5e88dc38d7713'),
(454, '5e88dc38dfb09', '5e88dc38e2aae'),
(455, '5e88dc38ec2f8', '5e88dc38ede6a'),
(456, '5e88dc3904ef4', '5e88dc39069f5'),
(457, '5e88dc390ec4c', '5e88dc3910a88'),
(458, '5e88ffd059853', '5e88ffd05baf1'),
(459, '5e88ffd0640e9', '5e88ffd065b25'),
(460, '5e88ffd06ea73', '5e88ffd070503'),
(461, '5e88ffd077fe1', '5e88ffd0797a0'),
(462, '5e88ffd081d5f', '5e88ffd083b5a'),
(463, '5e88ffd08c487', '5e88ffd08df26'),
(464, '5e88ffd0968ff', '5e88ffd09814d'),
(465, '5e88ffd09f6ac', '5e88ffd0a0e5e'),
(466, '5e88ffd0a8786', '5e88ffd0a9ca1'),
(467, '5e88ffd0b184d', '5e88ffd0b2d1d'),
(468, '5e88ffd0b9d28', '5e88ffd0bb295'),
(469, '5e88ffd0c2d67', '5e88ffd0c433a'),
(470, '5e88ffd0cbcc1', '5e88ffd0cda34'),
(471, '5e88ffd0d5aa2', '5e88ffd0d7714'),
(472, '5e88ffd0e1e87', '5e88ffd0e4e70'),
(473, '5e88ffd0f01af', '5e88ffd0f1697'),
(474, '5e88ffd10523f', '5e88ffd106bd9'),
(475, '5e88ffd1109eb', '5e88ffd1127a4'),
(476, '5e88ffd11b575', '5e88ffd11d7da'),
(477, '5e88ffd126971', '5e88ffd1285bc'),
(478, '5e88ffd1316ef', '5e88ffd1334a7'),
(479, '5e88ffd13c779', '5e88ffd13e682'),
(480, '5e88ffd14771b', '5e88ffd149386'),
(481, '5e88ffd15250b', '5e88ffd154462'),
(482, '5e88ffd15d635', '5e88ffd15f390'),
(483, '5e88ffd168577', '5e88ffd16a907'),
(484, '5e88ffd17370a', '5e88ffd17518c'),
(485, '5e88ffd17e57f', '5e88ffd18076a'),
(486, '5e88ffd189daf', '5e88ffd18b5e3'),
(487, '5e88ffd194730', '5e88ffd1960a1'),
(488, '5e88ffd19fdbe', '5e88ffd1a12c8'),
(489, '5e88ffd1aa693', '5e88ffd1ac1ff'),
(490, '5e88ffd1b54f2', '5e88ffd1b72e7'),
(491, '5e88ffd1c0be5', '5e88ffd1c2047'),
(492, '5e88ffd1cb7fb', '5e88ffd1cd35b'),
(493, '5e88ffd1d66c9', '5e88ffd1d8208'),
(494, '5e88ffd1e1407', '5e88ffd1e338a'),
(495, '5e88ffd1ecf7d', '5e88ffd1eebf8'),
(496, '5e88ffd20438f', '5e88ffd2065ae'),
(497, '5e88ffd20f532', '5e88ffd211a07'),
(498, '5e88ffd21a6c9', '5e88ffd21d226'),
(499, '5e88ffd225be1', '5e88ffd22724e'),
(500, '5e88ffd23075f', '5e88ffd2323dd'),
(501, '5e88ffd23b51f', '5e88ffd23d44c'),
(502, '5e88ffd24669c', '5e88ffd248f13'),
(503, '5e88ffd251da3', '5e88ffd25382d'),
(504, '5e88ffd25cb85', '5e88ffd26023d'),
(505, '5e88ffd2775d4', '5e88ffd278cda'),
(506, '5e88ffd27f99c', '5e88ffd280d4d'),
(507, '5e88ffd2879d9', '5e88ffd289574'),
(508, '5e88ffd290b5c', '5e88ffd291c8e'),
(509, '5e88ffd298ecd', '5e88ffd29a025'),
(510, '5e88ffd2a1e77', '5e88ffd2a3b11'),
(511, '5e88ffd2ad062', '5e88ffd2ae95f'),
(512, '5e88ffd2c9b15', '5e88ffd2cb309'),
(513, '5e88ffd2d47d8', '5e88ffd2d6592'),
(514, '5e88ffd2e1472', '5e88ffd2e2bc2'),
(515, '5e88ffd2ea6b7', '5e88ffd2ed098'),
(516, '5e88ffd301fac', '5e88ffd303cf3'),
(517, '5e88ffd30d428', '5e88ffd30eae0');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`) VALUES
(40, 'venureddy.ncet@gmail.com', '5e7640ff0797d', 19, 60, 19, 41, '2020-04-01 09:27:38', 1585732248, 'finished', 'true'),
(53, 'venureddy.ncet@gmail.com', '5e88d7f6020c2', 0, 0, 0, 0, '2020-04-04 20:13:57', 1586030177, 'finished', 'true');

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
(301, '5e76601d75bec', '<img style=\"max-width: 40px;\r\n  height: auto;\" src=\"image/math/6a.jpg\">', '5e76601d79724'),
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
(321, '5e76601ef1582', '<img  style=\"max-width: 150px;\r\n  height: auto;\" src=\"image/math/11a.jpg\">', '5e76601f0655b'),
(322, '5e76601ef1582', '<img  style=\"max-width: 150px;\r\n  height: auto;\"src=\"image/math/11b.jpg\">', '5e76601f06566'),
(323, '5e76601ef1582', '<img  style=\"max-width: 150px;\r\n  height: auto;\" src=\"image/math/11c.jpg\">', '5e76601f06569'),
(324, '5e76601ef1582', '<img  style=\"max-width: 150px;\r\n  height: auto;\"src=\"image/math/11d.jpg\">', '5e76601f0656b'),
(325, '5e76601f4b224', 'f is everywhere differentiable', '5e76601f532a5'),
(326, '5e76601f4b224', 'f is everywhere continuous but not differentiable at x = nπ, n ∈ Z.', '5e76601f532bc'),
(327, '5e76601f4b224', 'f is everywhere\r\n continuous but not differentiable at  <img style=\"max-width: 150px;\r\n  height: auto;\" src=\"image/math/12c.jpg\">', '5e76601f532c0'),
(328, '5e76601f4b224', 'None of these', '5e76601f532c3'),
(329, '5e76601f84717', 'sin2x', '5e76601f90d58'),
(330, '5e76601f84717', 'tanx', '5e76601f90d63'),
(331, '5e76601f84717', 'cosx', '5e76601f90d66'),
(332, '5e76601f84717', 'cos3x', '5e76601f90d68'),
(333, '5e76601fc4e48', '<img style=\"max-width: 150px;\r\n  height: auto;\" src=\"image/math/14a.jpg\">', '5e76601fd1402'),
(334, '5e76601fc4e48', '<img style=\"max-width: 150px;height: auto;\"src=\"image/math/14bbb.jpg\">\r\n', '5e76601fd1415'),
(335, '5e76601fc4e48', '<img style=\"max-width: 150px;\r\n  height: auto;\"src=\"image/math/14c.jpg\">', '5e76601fd141e'),
(336, '5e76601fc4e48', 'None of these', '5e76601fd1427'),
(337, '5e766020012c6', '<img src=\"image/math/15a.jpg\">', '5e7660200d798'),
(338, '5e766020012c6', '<img src=\"image/math/15b.jpg\">', '5e7660200d7a3'),
(339, '5e766020012c6', '<img src=\"image/math/15c.jpg\">', '5e7660200d7a5'),
(340, '5e766020012c6', '<img src=\"image/math/15d.jpg\">', '5e7660200d7a8'),
(341, '5e76602045f57', '20&pi; sq. units', '5e7660204c3b8'),
(342, '5e76602045f57', '<img style=\"max-width: 150px;\r\n  height: auto;\"src=\"image/math/16b.jpg\">', '5e7660204c3c2'),
(343, '5e76602045f57', '<img style=\"max-width: 150px;\r\n  height: auto;\" src=\"image/math/16c.jpg\">', '5e7660204c3c5'),
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
(495, '5e76602bdda1c', '<img style=\"max-width: 150px;\r\n  height: auto;\" src=\"image/che/54c.jpg\"> ', '5e76602be446b'),
(496, '5e76602bdda1c', '<img style=\"max-width: 150px;\r\n  height: auto;\"src=\"image/che/54d.jpg\"> ', '5e76602be446e'),
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
(544, '5e77407084d2e', 'fdf', '5e77407086788'),
(1589, '5e88dc36528da', '<img style=\"max-width: 100%;   height: auto;\" src=\"image/set3/math/1a.jpg\">', '5e88dc36556ec'),
(1590, '5e88dc36528da', '<img style=\"max-width: 100%;   height: auto;\" src=\"image/set3/math/1b.jpg\">', '5e88dc36556f2'),
(1591, '5e88dc36528da', '<img style=\"max-width: 100%;   height: auto;\" src=\"image/set3/math/1c.jpg\">', '5e88dc36556f4'),
(1592, '5e88dc36528da', '<img style=\"max-width: 100%;   height: auto;\" src=\"image/set3/math/1d.jpg\">', '5e88dc36556f5'),
(1593, '5e88dc365e803', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/2a.jpg\">', '5e88dc366011f'),
(1594, '5e88dc365e803', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/2b.jpg\">', '5e88dc3660125'),
(1595, '5e88dc365e803', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/2c.jpg\">', '5e88dc3660126'),
(1596, '5e88dc365e803', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/2d.jpg\">', '5e88dc3660127'),
(1597, '5e88dc366872b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/3a.jpg\">', '5e88dc366a034'),
(1598, '5e88dc366872b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/3b.jpg\">', '5e88dc366a039'),
(1599, '5e88dc366872b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/3c.jpg\">', '5e88dc366a03a'),
(1600, '5e88dc366872b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/3d.jpg\">', '5e88dc366a03b'),
(1601, '5e88dc3672a71', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set3/math/4a.jpg\">', '5e88dc36744b0'),
(1602, '5e88dc3672a71', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set3/math/4b.jpg\">', '5e88dc36744b5'),
(1603, '5e88dc3672a71', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set3/math/4c.jpg\">', '5e88dc36744b6'),
(1604, '5e88dc3672a71', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/4d.jpg\">', '5e88dc36744b7'),
(1605, '5e88dc367c661', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/5a.jpg\">', '5e88dc367ef7b'),
(1606, '5e88dc367c661', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/5b.jpg\">', '5e88dc367ef80'),
(1607, '5e88dc367c661', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/5c.jpg\">', '5e88dc367ef82'),
(1608, '5e88dc367c661', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/5d.jpg\">', '5e88dc367ef83'),
(1609, '5e88dc3688652', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/6a.jpg\">', '5e88dc368ab03'),
(1610, '5e88dc3688652', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/6b.jpg\">', '5e88dc368ab08'),
(1611, '5e88dc3688652', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/6c.jpg\">', '5e88dc368ab09'),
(1612, '5e88dc3688652', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/6d.jpg\">', '5e88dc368ab0a'),
(1613, '5e88dc3693ed8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/7a.jpg\">', '5e88dc3695c5a'),
(1614, '5e88dc3693ed8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/7b.jpg\">', '5e88dc3695c5e'),
(1615, '5e88dc3693ed8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/7c.jpg\">', '5e88dc3695c5f'),
(1616, '5e88dc3693ed8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/7d.jpg\">', '5e88dc3695c61'),
(1617, '5e88dc369e348', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/8a.jpg\">', '5e88dc36a0ef8'),
(1618, '5e88dc369e348', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/8b.jpg\">', '5e88dc36a0efd'),
(1619, '5e88dc369e348', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/8c.jpg\">', '5e88dc36a0efe'),
(1620, '5e88dc369e348', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/8d.jpg\">', '5e88dc36a0eff'),
(1621, '5e88dc36aba82', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/9a.jpg\">', '5e88dc36ad29b'),
(1622, '5e88dc36aba82', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/9b.jpg\">', '5e88dc36ad2a1'),
(1623, '5e88dc36aba82', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/9c.jpg\">', '5e88dc36ad2a3'),
(1624, '5e88dc36aba82', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/9d.jpg\">', '5e88dc36ad2a4'),
(1625, '5e88dc36b5223', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/10a.jpg\">', '5e88dc36b6a59'),
(1626, '5e88dc36b5223', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/10b.jpg\">', '5e88dc36b6a5e'),
(1627, '5e88dc36b5223', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/10c.jpg\">', '5e88dc36b6a5f'),
(1628, '5e88dc36b5223', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/10d.jpg\">', '5e88dc36b6a60'),
(1629, '5e88dc36bf992', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/11a.jpg\">', '5e88dc36c1586'),
(1630, '5e88dc36bf992', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/11b.jpg\">', '5e88dc36c1596'),
(1631, '5e88dc36bf992', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/11c.jpg\">', '5e88dc36c1598'),
(1632, '5e88dc36bf992', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/11d.jpg\">', '5e88dc36c1599'),
(1633, '5e88dc36cb699', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/12a.jpg\">', '5e88dc36cd272'),
(1634, '5e88dc36cb699', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/12b.jpg\">', '5e88dc36cd277'),
(1635, '5e88dc36cb699', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/12c.jpg\">', '5e88dc36cd278'),
(1636, '5e88dc36cb699', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/12d.jpg\">', '5e88dc36cd279'),
(1637, '5e88dc36d5c85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/13a.jpg\">', '5e88dc36d74d1'),
(1638, '5e88dc36d5c85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/13b.jpg\">', '5e88dc36d74d5'),
(1639, '5e88dc36d5c85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/13c.jpg\">', '5e88dc36d74d6'),
(1640, '5e88dc36d5c85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/13d.jpg\">', '5e88dc36d74d7'),
(1641, '5e88dc36df602', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/14a.jpg\">', '5e88dc36e0fb9'),
(1642, '5e88dc36df602', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/14b.jpg\">', '5e88dc36e0fc0'),
(1643, '5e88dc36df602', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/14c.jpg\">', '5e88dc36e0fc1'),
(1644, '5e88dc36df602', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/14d.jpg\">', '5e88dc36e0fc2'),
(1645, '5e88dc36ebd56', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/15a.jpg\">', '5e88dc36ef7eb'),
(1646, '5e88dc36ebd56', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/15b.jpg\">', '5e88dc36ef7f1'),
(1647, '5e88dc36ebd56', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/15c.jpg\">', '5e88dc36ef7f2'),
(1648, '5e88dc36ebd56', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/15d.jpg\">', '5e88dc36ef7f3'),
(1649, '5e88dc3705d62', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/16a.jpg\">', '5e88dc37073e9'),
(1650, '5e88dc3705d62', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/16b.jpg\">', '5e88dc3707400'),
(1651, '5e88dc3705d62', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/16c.jpg\">', '5e88dc3707401'),
(1652, '5e88dc3705d62', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/16d.jpg\">', '5e88dc3707402'),
(1653, '5e88dc371293e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/17a.jpg\">', '5e88dc3714276'),
(1654, '5e88dc371293e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/17b.jpg\">', '5e88dc371427a'),
(1655, '5e88dc371293e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/17c.jpg\">', '5e88dc371427b'),
(1656, '5e88dc371293e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/17d.jpg\">', '5e88dc371427c'),
(1657, '5e88dc371ba6f', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set3/math/18a.jpg\">', '5e88dc371d39b'),
(1658, '5e88dc371ba6f', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set3/math/18b.jpg\">', '5e88dc371d3a1'),
(1659, '5e88dc371ba6f', '<img style=\"max-width: 800%;  height: auto;\" src=\"image/set3/math/18c.jpg\">', '5e88dc371d3a2'),
(1660, '5e88dc371ba6f', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set3/math/18d.jpg\">', '5e88dc371d3a3'),
(1661, '5e88dc3725708', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/19a.jpg\">', '5e88dc3727019'),
(1662, '5e88dc3725708', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/19b.jpg\">', '5e88dc372701e'),
(1663, '5e88dc3725708', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/19c.jpg\">', '5e88dc372701f'),
(1664, '5e88dc3725708', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/19d.jpg\">', '5e88dc3727020'),
(1665, '5e88dc372e2e7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/20a.jpg\">', '5e88dc372fd18'),
(1666, '5e88dc372e2e7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/20b.jpg\">', '5e88dc372fd1c'),
(1667, '5e88dc372e2e7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/20c.jpg\">', '5e88dc372fd1d'),
(1668, '5e88dc372e2e7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/20d.jpg\">', '5e88dc372fd1e'),
(1669, '5e88dc3737900', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/21a.jpg\">', '5e88dc37390db'),
(1670, '5e88dc3737900', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/21b.jpg\">', '5e88dc37390df'),
(1671, '5e88dc3737900', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/21c.jpg\">', '5e88dc37390e0'),
(1672, '5e88dc3737900', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/21d.jpg\">', '5e88dc37390e1'),
(1673, '5e88dc3740995', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/22a.jpg\">', '5e88dc37425fc'),
(1674, '5e88dc3740995', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/22b.jpg\">', '5e88dc3742600'),
(1675, '5e88dc3740995', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/22c.jpg\">', '5e88dc3742601'),
(1676, '5e88dc3740995', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/22d.jpg\">', '5e88dc3742602'),
(1677, '5e88dc3749a14', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/23a.jpg\">', '5e88dc374b415'),
(1678, '5e88dc3749a14', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/23b.jpg\">', '5e88dc374b419'),
(1679, '5e88dc3749a14', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/23c.jpg\">', '5e88dc374b41a'),
(1680, '5e88dc3749a14', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/23d.jpg\">', '5e88dc374b41b'),
(1681, '5e88dc3752d38', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/24a.jpg\">', '5e88dc375486f'),
(1682, '5e88dc3752d38', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/24b.jpg\">', '5e88dc3754873'),
(1683, '5e88dc3752d38', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/24c.jpg\">', '5e88dc3754874'),
(1684, '5e88dc3752d38', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/24d.jpg\">', '5e88dc3754875'),
(1685, '5e88dc375d41d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/25a.jpg\">', '5e88dc375ed7e'),
(1686, '5e88dc375d41d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/25b.jpg\">', '5e88dc375ed84'),
(1687, '5e88dc375d41d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/25c.jpg\">', '5e88dc375ed85'),
(1688, '5e88dc375d41d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/25d.jpg\">', '5e88dc375ed86'),
(1689, '5e88dc37664df', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/26a.jpg\">', '5e88dc3767b96'),
(1690, '5e88dc37664df', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/26b.jpg\">', '5e88dc3767b9d'),
(1691, '5e88dc37664df', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/26c.jpg\">', '5e88dc3767b9e'),
(1692, '5e88dc37664df', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/26d.jpg\">', '5e88dc3767b9f'),
(1693, '5e88dc376e9bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/27a.jpg\">', '5e88dc376fdb1'),
(1694, '5e88dc376e9bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/27b.jpg\">', '5e88dc376fdb6'),
(1695, '5e88dc376e9bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/27c.jpg\">', '5e88dc376fdb7'),
(1696, '5e88dc376e9bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/27d.jpg\">', '5e88dc376fdb8'),
(1697, '5e88dc3778491', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/28a.jpg\">', '5e88dc377a2dd'),
(1698, '5e88dc3778491', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/28b.jpg\">', '5e88dc377a2e5'),
(1699, '5e88dc3778491', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/28c.jpg\">', '5e88dc377a2e6'),
(1700, '5e88dc3778491', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/28d.jpg\">', '5e88dc377a2e8'),
(1701, '5e88dc3783414', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/29a.jpg\">', '5e88dc37852ca'),
(1702, '5e88dc3783414', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/29b.jpg\">', '5e88dc37852da'),
(1703, '5e88dc3783414', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/29c.jpg\">', '5e88dc37852db'),
(1704, '5e88dc3783414', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/29d.jpg\">', '5e88dc37852dc'),
(1705, '5e88dc37a4f81', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/30a.jpg\">', '5e88dc37a6b66'),
(1706, '5e88dc37a4f81', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/30b.jpg\">', '5e88dc37a6b69'),
(1707, '5e88dc37a4f81', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/30c.jpg\">', '5e88dc37a6b6a'),
(1708, '5e88dc37a4f81', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/30d.jpg\">', '5e88dc37a6b6b'),
(1709, '5e88dc37aecec', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/31a.jpg\">', '5e88dc37b089a'),
(1710, '5e88dc37aecec', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/31b.jpg\">', '5e88dc37b089d'),
(1711, '5e88dc37aecec', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/31c.jpg\">', '5e88dc37b089e'),
(1712, '5e88dc37aecec', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/31d.jpg\">', '5e88dc37b089f'),
(1713, '5e88dc37b9f87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/32a.jpg\">', '5e88dc37bb7d9'),
(1714, '5e88dc37b9f87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/32b.jpg\">', '5e88dc37bb7dc'),
(1715, '5e88dc37b9f87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/32c.jpg\">', '5e88dc37bb7dd'),
(1716, '5e88dc37b9f87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/32d.jpg\">', '5e88dc37bb7de'),
(1717, '5e88dc37c5355', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/33a.jpg\">', '5e88dc37c7495'),
(1718, '5e88dc37c5355', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/33b.jpg\">', '5e88dc37c749b'),
(1719, '5e88dc37c5355', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/33c.jpg\">', '5e88dc37c749c'),
(1720, '5e88dc37c5355', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/33d.jpg\">', '5e88dc37c749d'),
(1721, '5e88dc37cfdbb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/34a.jpg\">', '5e88dc37d1b64'),
(1722, '5e88dc37cfdbb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/34b.jpg\">', '5e88dc37d1b6b'),
(1723, '5e88dc37cfdbb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/34c.jpg\">', '5e88dc37d1b6c'),
(1724, '5e88dc37cfdbb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/34d.jpg\">', '5e88dc37d1b6d'),
(1725, '5e88dc37dbd9f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/35a.jpg\">', '5e88dc37dd782'),
(1726, '5e88dc37dbd9f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/35b.jpg\">', '5e88dc37dd787'),
(1727, '5e88dc37dbd9f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/35c.jpg\">', '5e88dc37dd788'),
(1728, '5e88dc37dbd9f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/35d.jpg\">', '5e88dc37dd789'),
(1729, '5e88dc37e6500', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/36a.jpg\">', '5e88dc37e7f2a'),
(1730, '5e88dc37e6500', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/36b.jpg\">', '5e88dc37e7f2e'),
(1731, '5e88dc37e6500', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/36c.jpg\">', '5e88dc37e7f2f'),
(1732, '5e88dc37e6500', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/36d.jpg\">', '5e88dc37e7f30'),
(1733, '5e88dc37f0cf7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/37a.jpg\">', '5e88dc37f3c64'),
(1734, '5e88dc37f0cf7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/37b.jpg\">', '5e88dc37f3c6a'),
(1735, '5e88dc37f0cf7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/37c.jpg\">', '5e88dc37f3c6b'),
(1736, '5e88dc37f0cf7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/37d.jpg\">', '5e88dc37f3c6c'),
(1737, '5e88dc38077b1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/38a.jpg\">', '5e88dc380956e'),
(1738, '5e88dc38077b1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/38b.jpg\">', '5e88dc3809574'),
(1739, '5e88dc38077b1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/38c.jpg\">', '5e88dc3809575'),
(1740, '5e88dc38077b1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/38d.jpg\">', '5e88dc3809576'),
(1741, '5e88dc38129ab', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/39a.jpg\">', '5e88dc38141cb'),
(1742, '5e88dc38129ab', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/39b.jpg\">', '5e88dc38141d1'),
(1743, '5e88dc38129ab', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/39c.jpg\">', '5e88dc38141d2'),
(1744, '5e88dc38129ab', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/39d.jpg\">', '5e88dc38141d3'),
(1745, '5e88dc381e466', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/40a.jpg\">', '5e88dc381fe4b'),
(1746, '5e88dc381e466', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/40b.jpg\">', '5e88dc381fe4f'),
(1747, '5e88dc381e466', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/40c.jpg\">', '5e88dc381fe50'),
(1748, '5e88dc381e466', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/40d.jpg\">', '5e88dc381fe51'),
(1749, '5e88dc382969e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/41a.jpg\">', '5e88dc382b055'),
(1750, '5e88dc382969e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/41b.jpg\">', '5e88dc382b05a'),
(1751, '5e88dc382969e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/41c.jpg\">', '5e88dc382b05b'),
(1752, '5e88dc382969e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/41d.jpg\">', '5e88dc382b05c'),
(1753, '5e88dc3833e6a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/42a.jpg\">', '5e88dc3835e73'),
(1754, '5e88dc3833e6a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/42b.jpg\">', '5e88dc3835e77'),
(1755, '5e88dc3833e6a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/42c.jpg\">', '5e88dc3835e78'),
(1756, '5e88dc3833e6a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/42d.jpg\">', '5e88dc3835e79'),
(1757, '5e88dc383edbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/43a.jpg\">', '5e88dc38411e2'),
(1758, '5e88dc383edbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/43b.jpg\">', '5e88dc38411e6'),
(1759, '5e88dc383edbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/43c.jpg\">', '5e88dc38411e7'),
(1760, '5e88dc383edbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/43d.jpg\">', '5e88dc38411e8'),
(1761, '5e88dc384a8bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/44a.jpg\">', '5e88dc384beda'),
(1762, '5e88dc384a8bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/44b.jpg\">', '5e88dc384bedd'),
(1763, '5e88dc384a8bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/44c.jpg\">', '5e88dc384bede'),
(1764, '5e88dc384a8bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/44d.jpg\">', '5e88dc384bedf'),
(1765, '5e88dc38551b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/45a.jpg\">', '5e88dc38570a4'),
(1766, '5e88dc38551b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/45b.jpg\">', '5e88dc38570ab'),
(1767, '5e88dc38551b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/45c.jpg\">', '5e88dc38570ac'),
(1768, '5e88dc38551b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/45d.jpg\">', '5e88dc38570ad'),
(1769, '5e88dc3860ce8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/46a.jpg\">', '5e88dc3862137'),
(1770, '5e88dc3860ce8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/46b.jpg\">', '5e88dc386213b'),
(1771, '5e88dc3860ce8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/46c.jpg\">', '5e88dc386213c'),
(1772, '5e88dc3860ce8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/46d.jpg\">', '5e88dc386213d'),
(1773, '5e88dc386cc96', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/47a.jpg\">', '5e88dc386e7df'),
(1774, '5e88dc386cc96', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/47b.jpg\">', '5e88dc386e7e4'),
(1775, '5e88dc386cc96', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/47c.jpg\">', '5e88dc386e7e5'),
(1776, '5e88dc386cc96', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/47d.jpg\">', '5e88dc386e7e6'),
(1777, '5e88dc38788fd', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/48a.jpg\">', '5e88dc387a3ab'),
(1778, '5e88dc38788fd', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/48b.jpg\">', '5e88dc387a3b0'),
(1779, '5e88dc38788fd', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/48c.jpg\">', '5e88dc387a3b1'),
(1780, '5e88dc38788fd', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/48d.jpg\">', '5e88dc387a3b2'),
(1781, '5e88dc3883849', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/49a.jpg\">', '5e88dc3885721'),
(1782, '5e88dc3883849', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/49b.jpg\">', '5e88dc3885725'),
(1783, '5e88dc3883849', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/49c.jpg\">', '5e88dc3885726'),
(1784, '5e88dc3883849', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/49d.jpg\">', '5e88dc3885727'),
(1785, '5e88dc388e6b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/50a.jpg\">', '5e88dc38960a0'),
(1786, '5e88dc388e6b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/50b.jpg\">', '5e88dc38960a4'),
(1787, '5e88dc388e6b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/50c.jpg\">', '5e88dc38960a5'),
(1788, '5e88dc388e6b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/50d.jpg\">', '5e88dc38960a6'),
(1789, '5e88dc389dcad', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/51a.jpg\">', '5e88dc389f58d'),
(1790, '5e88dc389dcad', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/51b.jpg\">', '5e88dc389f591'),
(1791, '5e88dc389dcad', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/51c.jpg\">', '5e88dc389f592'),
(1792, '5e88dc389dcad', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/51d.jpg\">', '5e88dc389f593'),
(1793, '5e88dc38a69be', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/52a.jpg\">', '5e88dc38a8038'),
(1794, '5e88dc38a69be', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/52b.jpg\">', '5e88dc38a803c'),
(1795, '5e88dc38a69be', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/52c.jpg\">', '5e88dc38a803d'),
(1796, '5e88dc38a69be', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/52d.jpg\">', '5e88dc38a804a'),
(1797, '5e88dc38b325b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/53a.jpg\">', '5e88dc38b4966'),
(1798, '5e88dc38b325b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/53b.jpg\">', '5e88dc38b496a'),
(1799, '5e88dc38b325b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/53c.jpg\">', '5e88dc38b496b'),
(1800, '5e88dc38b325b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/53d.jpg\">', '5e88dc38b496c'),
(1801, '5e88dc38bb9f4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/54a.jpg\">', '5e88dc38be137'),
(1802, '5e88dc38bb9f4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/54b.jpg\">', '5e88dc38be13b'),
(1803, '5e88dc38bb9f4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/54c.jpg\">', '5e88dc38be13c'),
(1804, '5e88dc38bb9f4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/54d.jpg\">', '5e88dc38be13d'),
(1805, '5e88dc38c6db5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/55a.jpg\">', '5e88dc38c84c7'),
(1806, '5e88dc38c6db5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/55b.jpg\">', '5e88dc38c84ca'),
(1807, '5e88dc38c6db5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/55c.jpg\">', '5e88dc38c84cb'),
(1808, '5e88dc38c6db5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/55d.jpg\">', '5e88dc38c84cc'),
(1809, '5e88dc38d5f45', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/56a.jpg\">', '5e88dc38d7713'),
(1810, '5e88dc38d5f45', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/56b.jpg\">', '5e88dc38d7717'),
(1811, '5e88dc38d5f45', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/56c.jpg\">', '5e88dc38d7718'),
(1812, '5e88dc38d5f45', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/56d.jpg\">', '5e88dc38d7719'),
(1813, '5e88dc38dfb09', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/57a.jpg\">', '5e88dc38e2aa7'),
(1814, '5e88dc38dfb09', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/57b.jpg\">', '5e88dc38e2aad'),
(1815, '5e88dc38dfb09', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/57c.jpg\">', '5e88dc38e2aae'),
(1816, '5e88dc38dfb09', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/57d.jpg\">', '5e88dc38e2aaf'),
(1817, '5e88dc38ec2f8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/58a.jpg\">', '5e88dc38ede5f'),
(1818, '5e88dc38ec2f8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/58b.jpg\">', '5e88dc38ede69'),
(1819, '5e88dc38ec2f8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/58c.jpg\">', '5e88dc38ede6a'),
(1820, '5e88dc38ec2f8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/58d.jpg\">', '5e88dc38ede6b'),
(1821, '5e88dc3904ef4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/59a.jpg\">', '5e88dc39069ed'),
(1822, '5e88dc3904ef4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/59b.jpg\">', '5e88dc39069f3'),
(1823, '5e88dc3904ef4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/59c.jpg\">', '5e88dc39069f4'),
(1824, '5e88dc3904ef4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/59d.jpg\">', '5e88dc39069f5'),
(1825, '5e88dc390ec4c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/60a.jpg\">', '5e88dc3910a82'),
(1826, '5e88dc390ec4c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/60b.jpg\">', '5e88dc3910a87'),
(1827, '5e88dc390ec4c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/60c.jpg\">', '5e88dc3910a88'),
(1828, '5e88dc390ec4c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/60d.jpg\">', '5e88dc3910a89'),
(1829, '5e88ffd059853', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/1a.jpg\">', '5e88ffd05baee'),
(1830, '5e88ffd059853', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/1b.jpg\">', '5e88ffd05baf1'),
(1831, '5e88ffd059853', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/1c.jpg\">', '5e88ffd05baf2'),
(1832, '5e88ffd059853', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/1d.jpg\">', '5e88ffd05baf3'),
(1833, '5e88ffd0640e9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/2a.jpg\">', '5e88ffd065b21'),
(1834, '5e88ffd0640e9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/2b.jpg\">', '5e88ffd065b25'),
(1835, '5e88ffd0640e9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/2c.jpg\">', '5e88ffd065b26'),
(1836, '5e88ffd0640e9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/2d.jpg\">', '5e88ffd065b27'),
(1837, '5e88ffd06ea73', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/3a.jpg\">', '5e88ffd0704fe'),
(1838, '5e88ffd06ea73', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/3b.jpg\">', '5e88ffd070502'),
(1839, '5e88ffd06ea73', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/3c.jpg\">', '5e88ffd070503'),
(1840, '5e88ffd06ea73', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/3d.jpg\">', '5e88ffd070504'),
(1841, '5e88ffd077fe1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/4a.jpg\">', '5e88ffd07979b'),
(1842, '5e88ffd077fe1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/4b.jpg\">', '5e88ffd07979f'),
(1843, '5e88ffd077fe1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/4c.jpg\">', '5e88ffd0797a0'),
(1844, '5e88ffd077fe1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/4d.jpg\">', '5e88ffd0797a1'),
(1845, '5e88ffd081d5f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/5a.jpg\">', '5e88ffd083b5a'),
(1846, '5e88ffd081d5f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/5b.jpg\">', '5e88ffd083b5e'),
(1847, '5e88ffd081d5f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/5c.jpg\">', '5e88ffd083b5f'),
(1848, '5e88ffd081d5f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/5d.jpg\">', '5e88ffd083b60'),
(1849, '5e88ffd08c487', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/6a.jpg\">', '5e88ffd08df26'),
(1850, '5e88ffd08c487', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/6b.jpg\">', '5e88ffd08df29'),
(1851, '5e88ffd08c487', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/6c.jpg\">', '5e88ffd08df2a'),
(1852, '5e88ffd08c487', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/6d.jpg\">', '5e88ffd08df2b'),
(1853, '5e88ffd0968ff', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/7a.jpg\">', '5e88ffd098149'),
(1854, '5e88ffd0968ff', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/7b.jpg\">', '5e88ffd09814b'),
(1855, '5e88ffd0968ff', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/7c.jpg\">', '5e88ffd09814c'),
(1856, '5e88ffd0968ff', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/7d.jpg\">', '5e88ffd09814d'),
(1857, '5e88ffd09f6ac', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/8a.jpg\">', '5e88ffd0a0e55'),
(1858, '5e88ffd09f6ac', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/8b.jpg\">', '5e88ffd0a0e5c'),
(1859, '5e88ffd09f6ac', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/8c.jpg\">', '5e88ffd0a0e5d'),
(1860, '5e88ffd09f6ac', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/8d.jpg\">', '5e88ffd0a0e5e'),
(1861, '5e88ffd0a8786', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/9a.jpg\">', '5e88ffd0a9c9d'),
(1862, '5e88ffd0a8786', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/9b.jpg\">', '5e88ffd0a9ca0'),
(1863, '5e88ffd0a8786', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/9c.jpg\">', '5e88ffd0a9ca1'),
(1864, '5e88ffd0a8786', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/9d.jpg\">', '5e88ffd0a9ca2'),
(1865, '5e88ffd0b184d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/10a.jpg\">', '5e88ffd0b2d18'),
(1866, '5e88ffd0b184d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/10b.jpg\">', '5e88ffd0b2d1b'),
(1867, '5e88ffd0b184d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/10c.jpg\">', '5e88ffd0b2d1c');
INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(1868, '5e88ffd0b184d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/10d.jpg\">', '5e88ffd0b2d1d'),
(1869, '5e88ffd0b9d28', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/11a.jpg\">', '5e88ffd0bb293'),
(1870, '5e88ffd0b9d28', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/11b.jpg\">', '5e88ffd0bb295'),
(1871, '5e88ffd0b9d28', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/11c.jpg\">', '5e88ffd0bb296'),
(1872, '5e88ffd0b9d28', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/11d.jpg\">', '5e88ffd0bb297'),
(1873, '5e88ffd0c2d67', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/12a.jpg\">', '5e88ffd0c4335'),
(1874, '5e88ffd0c2d67', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/12b.jpg\">', '5e88ffd0c4338'),
(1875, '5e88ffd0c2d67', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/12c.jpg\">', '5e88ffd0c4339'),
(1876, '5e88ffd0c2d67', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/12d.jpg\">', '5e88ffd0c433a'),
(1877, '5e88ffd0cbcc1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/13a.jpg\">', '5e88ffd0cda31'),
(1878, '5e88ffd0cbcc1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/13b.jpg\">', '5e88ffd0cda34'),
(1879, '5e88ffd0cbcc1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/13c.jpg\">', '5e88ffd0cda35'),
(1880, '5e88ffd0cbcc1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/13d.jpg\">', '5e88ffd0cda36'),
(1881, '5e88ffd0d5aa2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/14a.jpg\">', '5e88ffd0d770f'),
(1882, '5e88ffd0d5aa2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/14b.jpg\">', '5e88ffd0d7712'),
(1883, '5e88ffd0d5aa2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/14c.jpg\">', '5e88ffd0d7713'),
(1884, '5e88ffd0d5aa2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/14d.jpg\">', '5e88ffd0d7714'),
(1885, '5e88ffd0e1e87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/15a.jpg\">', '5e88ffd0e4e6a'),
(1886, '5e88ffd0e1e87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/15b.jpg\">', '5e88ffd0e4e6e'),
(1887, '5e88ffd0e1e87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/15c.jpg\">', '5e88ffd0e4e6f'),
(1888, '5e88ffd0e1e87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/15d.jpg\">', '5e88ffd0e4e70'),
(1889, '5e88ffd0f01af', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/16a.jpg\">', '5e88ffd0f1697'),
(1890, '5e88ffd0f01af', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/16b.jpg\">', '5e88ffd0f169a'),
(1891, '5e88ffd0f01af', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/16c.jpg\">', '5e88ffd0f169b'),
(1892, '5e88ffd0f01af', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/16d.jpg\">', '5e88ffd0f169c'),
(1893, '5e88ffd10523f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/17a.jpg\">', '5e88ffd106bd4'),
(1894, '5e88ffd10523f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/17b.jpg\">', '5e88ffd106bd8'),
(1895, '5e88ffd10523f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/17c.jpg\">', '5e88ffd106bd9'),
(1896, '5e88ffd10523f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/17d.jpg\">', '5e88ffd106bda'),
(1897, '5e88ffd1109eb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/18a.jpg\">', '5e88ffd11279c'),
(1898, '5e88ffd1109eb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/18b.jpg\">', '5e88ffd1127a2'),
(1899, '5e88ffd1109eb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/18c.jpg\">', '5e88ffd1127a3'),
(1900, '5e88ffd1109eb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/18d.jpg\">', '5e88ffd1127a4'),
(1901, '5e88ffd11b575', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/19a.jpg\">', '5e88ffd11d7d2'),
(1902, '5e88ffd11b575', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/19b.jpg\">', '5e88ffd11d7d8'),
(1903, '5e88ffd11b575', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/19c.jpg\">', '5e88ffd11d7d9'),
(1904, '5e88ffd11b575', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/19d.jpg\">', '5e88ffd11d7da'),
(1905, '5e88ffd126971', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/20a.jpg\">', '5e88ffd1285b9'),
(1906, '5e88ffd126971', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/20b.jpg\">', '5e88ffd1285bc'),
(1907, '5e88ffd126971', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/20c.jpg\">', '5e88ffd1285bd'),
(1908, '5e88ffd126971', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/20d.jpg\">', '5e88ffd1285be'),
(1909, '5e88ffd1316ef', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/21a.jpg\">', '5e88ffd1334a7'),
(1910, '5e88ffd1316ef', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/21b.jpg\">', '5e88ffd1334ab'),
(1911, '5e88ffd1316ef', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/21c.jpg\">', '5e88ffd1334ac'),
(1912, '5e88ffd1316ef', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/21d.jpg\">', '5e88ffd1334ad'),
(1913, '5e88ffd13c779', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/22a.jpg\">', '5e88ffd13e67b'),
(1914, '5e88ffd13c779', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/22b.jpg\">', '5e88ffd13e680'),
(1915, '5e88ffd13c779', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/22c.jpg\">', '5e88ffd13e682'),
(1916, '5e88ffd13c779', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/22d.jpg\">', '5e88ffd13e683'),
(1917, '5e88ffd14771b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/23a.jpg\">', '5e88ffd149381'),
(1918, '5e88ffd14771b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/23b.jpg\">', '5e88ffd149385'),
(1919, '5e88ffd14771b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/23c.jpg\">', '5e88ffd149386'),
(1920, '5e88ffd14771b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/23d.jpg\">', '5e88ffd149387'),
(1921, '5e88ffd15250b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/24a.jpg\">', '5e88ffd154459'),
(1922, '5e88ffd15250b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/24b.jpg\">', '5e88ffd15445f'),
(1923, '5e88ffd15250b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/24c.jpg\">', '5e88ffd154461'),
(1924, '5e88ffd15250b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/24d.jpg\">', '5e88ffd154462'),
(1925, '5e88ffd15d635', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/25a.jpg\">', '5e88ffd15f390'),
(1926, '5e88ffd15d635', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/25b.jpg\">', '5e88ffd15f394'),
(1927, '5e88ffd15d635', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/25c.jpg\">', '5e88ffd15f395'),
(1928, '5e88ffd15d635', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/25d.jpg\">', '5e88ffd15f396'),
(1929, '5e88ffd168577', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/26a.jpg\">', '5e88ffd16a907'),
(1930, '5e88ffd168577', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/26b.jpg\">', '5e88ffd16a90b'),
(1931, '5e88ffd168577', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/26c.jpg\">', '5e88ffd16a90c'),
(1932, '5e88ffd168577', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/26d.jpg\">', '5e88ffd16a90d'),
(1933, '5e88ffd17370a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/27a.jpg\">', '5e88ffd175187'),
(1934, '5e88ffd17370a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/27b.jpg\">', '5e88ffd17518b'),
(1935, '5e88ffd17370a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/27c.jpg\">', '5e88ffd17518c'),
(1936, '5e88ffd17370a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/27d.jpg\">', '5e88ffd17518d'),
(1937, '5e88ffd17e57f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/28a.jpg\">', '5e88ffd18076a'),
(1938, '5e88ffd17e57f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/28b.jpg\">', '5e88ffd180774'),
(1939, '5e88ffd17e57f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/28c.jpg\">', '5e88ffd180775'),
(1940, '5e88ffd17e57f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/28d.jpg\">', '5e88ffd180776'),
(1941, '5e88ffd189daf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/29a.jpg\">', '5e88ffd18b5dc'),
(1942, '5e88ffd189daf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/29b.jpg\">', '5e88ffd18b5e0'),
(1943, '5e88ffd189daf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/29c.jpg\">', '5e88ffd18b5e2'),
(1944, '5e88ffd189daf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/29d.jpg\">', '5e88ffd18b5e3'),
(1945, '5e88ffd194730', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/30a.jpg\">', '5e88ffd19609a'),
(1946, '5e88ffd194730', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/30b.jpg\">', '5e88ffd19609e'),
(1947, '5e88ffd194730', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/30c.jpg\">', '5e88ffd1960a0'),
(1948, '5e88ffd194730', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/30d.jpg\">', '5e88ffd1960a1'),
(1949, '5e88ffd19fdbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/31a.jpg\">', '5e88ffd1a12c2'),
(1950, '5e88ffd19fdbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/31b.jpg\">', '5e88ffd1a12c6'),
(1951, '5e88ffd19fdbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/31c.jpg\">', '5e88ffd1a12c7'),
(1952, '5e88ffd19fdbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/31d.jpg\">', '5e88ffd1a12c8'),
(1953, '5e88ffd1aa693', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/32a.jpg\">', '5e88ffd1ac1fa'),
(1954, '5e88ffd1aa693', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/32b.jpg\">', '5e88ffd1ac1fd'),
(1955, '5e88ffd1aa693', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/32c.jpg\">', '5e88ffd1ac1fe'),
(1956, '5e88ffd1aa693', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/32d.jpg\">', '5e88ffd1ac1ff'),
(1957, '5e88ffd1b54f2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/33a.jpg\">', '5e88ffd1b72e2'),
(1958, '5e88ffd1b54f2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/33b.jpg\">', '5e88ffd1b72e5'),
(1959, '5e88ffd1b54f2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/33c.jpg\">', '5e88ffd1b72e7'),
(1960, '5e88ffd1b54f2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/33d.jpg\">', '5e88ffd1b72e8'),
(1961, '5e88ffd1c0be5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/34a.jpg\">', '5e88ffd1c2044'),
(1962, '5e88ffd1c0be5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/34b.jpg\">', '5e88ffd1c2047'),
(1963, '5e88ffd1c0be5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/34c.jpg\">', '5e88ffd1c2048'),
(1964, '5e88ffd1c0be5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/34d.jpg\">', '5e88ffd1c2049'),
(1965, '5e88ffd1cb7fb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/35a.jpg\">', '5e88ffd1cd35b'),
(1966, '5e88ffd1cb7fb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/35b.jpg\">', '5e88ffd1cd35d'),
(1967, '5e88ffd1cb7fb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/35c.jpg\">', '5e88ffd1cd35e'),
(1968, '5e88ffd1cb7fb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/35d.jpg\">', '5e88ffd1cd35f'),
(1969, '5e88ffd1d66c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/36a.jpg\">', '5e88ffd1d8203'),
(1970, '5e88ffd1d66c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/36b.jpg\">', '5e88ffd1d8206'),
(1971, '5e88ffd1d66c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/36c.jpg\">', '5e88ffd1d8208'),
(1972, '5e88ffd1d66c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/36a.jpg\">', '5e88ffd1d8209'),
(1973, '5e88ffd1e1407', '1/64', '5e88ffd1e3384'),
(1974, '5e88ffd1e1407', '1/32', '5e88ffd1e3388'),
(1975, '5e88ffd1e1407', '1/256', '5e88ffd1e3389'),
(1976, '5e88ffd1e1407', '1/512', '5e88ffd1e338a'),
(1977, '5e88ffd1ecf7d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/38a.jpg\">', '5e88ffd1eebf3'),
(1978, '5e88ffd1ecf7d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/38b.jpg\">', '5e88ffd1eebf7'),
(1979, '5e88ffd1ecf7d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/38c.jpg\">', '5e88ffd1eebf8'),
(1980, '5e88ffd1ecf7d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/38d.jpg\">', '5e88ffd1eebf9'),
(1981, '5e88ffd20438f', ' Glows more brightly', '5e88ffd2065aa'),
(1982, '5e88ffd20438f', 'gets dimmer', '5e88ffd2065ae'),
(1983, '5e88ffd20438f', 'Glows with the same brightness\r\n', '5e88ffd2065af'),
(1984, '5e88ffd20438f', 'gets momentarily dimmer and then glows more brightly', '5e88ffd2065b0'),
(1985, '5e88ffd20f532', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/40a.jpg\">', '5e88ffd211a07'),
(1986, '5e88ffd20f532', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/40b.jpg\">', '5e88ffd211a0a'),
(1987, '5e88ffd20f532', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/40c.jpg\">', '5e88ffd211a0b'),
(1988, '5e88ffd20f532', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/40d.jpg\">', '5e88ffd211a0c'),
(1989, '5e88ffd21a6c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/41a.jpg\">', '5e88ffd21d1f1'),
(1990, '5e88ffd21a6c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/41b.jpg\">', '5e88ffd21d224'),
(1991, '5e88ffd21a6c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/41c.jpg\">', '5e88ffd21d225'),
(1992, '5e88ffd21a6c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/41d.jpg\">', '5e88ffd21d226'),
(1993, '5e88ffd225be1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/42a.jpg\">', '5e88ffd22724e'),
(1994, '5e88ffd225be1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/42b.jpg\">', '5e88ffd227251'),
(1995, '5e88ffd225be1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/42c.jpg\">', '5e88ffd227252'),
(1996, '5e88ffd225be1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/42d.jpg\">', '5e88ffd227253'),
(1997, '5e88ffd23075f', '<pre>n=3   l=2   m=1   s=0</pre>', '5e88ffd2323d8'),
(1998, '5e88ffd23075f', '<pre>n=3   l=0   m=0  s=-1/2</pre>', '5e88ffd2323db'),
(1999, '5e88ffd23075f', '<pre>n=2   l=2   m=2   s=1/2</pre>', '5e88ffd2323dc'),
(2000, '5e88ffd23075f', '<pre>n=1   l=0   m=1   s=1/2</pre>', '5e88ffd2323dd'),
(2001, '5e88ffd23b51f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/44a.jpg\">', '5e88ffd23d448'),
(2002, '5e88ffd23b51f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/44b.jpg\">', '5e88ffd23d44a'),
(2003, '5e88ffd23b51f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/44c.jpg\">', '5e88ffd23d44b'),
(2004, '5e88ffd23b51f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/44d.jpg\">', '5e88ffd23d44c'),
(2005, '5e88ffd24669c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/45a.jpg\">', '5e88ffd248f0c'),
(2006, '5e88ffd24669c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/45b.jpg\">', '5e88ffd248f11'),
(2007, '5e88ffd24669c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/45c.jpg\">', '5e88ffd248f12'),
(2008, '5e88ffd24669c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/45d.jpg\">', '5e88ffd248f13'),
(2009, '5e88ffd251da3', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/46a.jpg\">', '5e88ffd25382d'),
(2010, '5e88ffd251da3', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/46b.jpg\">', '5e88ffd253831'),
(2011, '5e88ffd251da3', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/46c.jpg\">', '5e88ffd253832'),
(2012, '5e88ffd251da3', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/46d.jpg\">', '5e88ffd253833'),
(2013, '5e88ffd25cb85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/47a.jpg\">', '5e88ffd260238'),
(2014, '5e88ffd25cb85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/47b.jpg\">', '5e88ffd26023c'),
(2015, '5e88ffd25cb85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/47c.jpg\">', '5e88ffd26023d'),
(2016, '5e88ffd25cb85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/47d.jpg\">', '5e88ffd26023e'),
(2017, '5e88ffd2775d4', 'extent of solubility of solute', '5e88ffd278cd5'),
(2018, '5e88ffd2775d4', 'extent of dissolution of solute', '5e88ffd278cd9'),
(2019, '5e88ffd2775d4', 'extent of dissociation of solute', '5e88ffd278cda'),
(2020, '5e88ffd2775d4', ' extent of mobility of solute', '5e88ffd278cdb'),
(2021, '5e88ffd27f99c', 'Rate of a reaction increases with increase in temperature.', '5e88ffd280d4a'),
(2022, '5e88ffd27f99c', ' Rate of a reaction increases with decrease in activation energy', '5e88ffd280d4d'),
(2023, '5e88ffd27f99c', 'Rate constant decreases exponentially with increases in temperature', '5e88ffd280d4e'),
(2024, '5e88ffd27f99c', 'Rate of a reaction does not change with increase in activation energy', '5e88ffd280d4f'),
(2025, '5e88ffd2879d9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/50a.jpg\">', '5e88ffd289574'),
(2026, '5e88ffd2879d9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/50b.jpg\">', '5e88ffd289576'),
(2027, '5e88ffd2879d9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/50c.jpg\">', '5e88ffd289577'),
(2028, '5e88ffd2879d9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/50d.jpg\">', '5e88ffd289578'),
(2029, '5e88ffd290b5c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/51a.jpg\">', '5e88ffd291c8b'),
(2030, '5e88ffd290b5c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/51b.jpg\">', '5e88ffd291c8e'),
(2031, '5e88ffd290b5c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/51c.jpg\">', '5e88ffd291c8f'),
(2032, '5e88ffd290b5c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/51d.jpg\">', '5e88ffd291c90'),
(2033, '5e88ffd298ecd', ' Ln(III) compounds are generally colourless\r\n', '5e88ffd29a025'),
(2034, '5e88ffd298ecd', 'Ln(III) compounds are predominantly ionic in character', '5e88ffd29a028'),
(2035, '5e88ffd298ecd', 'the ionic size of Ln(III) ions decreases with increasing atomic number', '5e88ffd29a029'),
(2036, '5e88ffd298ecd', 'Ln(III) hydroxides are mainly basic in nature', '5e88ffd29a02a'),
(2037, '5e88ffd2a1e77', ' Electrophilic elimination reaction', '5e88ffd2a3b0e'),
(2038, '5e88ffd2a1e77', ' Electrophilic substitution reaction', '5e88ffd2a3b11'),
(2039, '5e88ffd2a1e77', ' Free radical addition reaction', '5e88ffd2a3b12'),
(2040, '5e88ffd2a1e77', 'Nucleophilic substitution reaction', '5e88ffd2a3b13'),
(2041, '5e88ffd2ad062', '3', '5e88ffd2ae95a'),
(2042, '5e88ffd2ad062', '4', '5e88ffd2ae95e'),
(2043, '5e88ffd2ad062', '5', '5e88ffd2ae95f'),
(2044, '5e88ffd2ad062', '6', '5e88ffd2ae960'),
(2045, '5e88ffd2c9b15', ' It is a typical reaction of aliphatic aldehydes', '5e88ffd2cb300'),
(2046, '5e88ffd2c9b15', ' It is a reaction answered only by aromatic aldehyde', '5e88ffd2cb307'),
(2047, '5e88ffd2c9b15', ' It is a reaction answered by all aldehydes\r\n', '5e88ffd2cb308'),
(2048, '5e88ffd2c9b15', ' It is a reaction answered by only aldehydes containing alpha hydrogen', '5e88ffd2cb309'),
(2049, '5e88ffd2d47d8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/56a.jpg\">', '5e88ffd2d658a'),
(2050, '5e88ffd2d47d8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/56b.jpg\">', '5e88ffd2d6591'),
(2051, '5e88ffd2d47d8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/56c.jpg\">', '5e88ffd2d6592'),
(2052, '5e88ffd2d47d8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/56d.jpg\">', '5e88ffd2d6593'),
(2053, '5e88ffd2e1472', '1', '5e88ffd2e2bc2'),
(2054, '5e88ffd2e1472', '2', '5e88ffd2e2bc7'),
(2055, '5e88ffd2e1472', '4', '5e88ffd2e2bc8'),
(2056, '5e88ffd2e1472', '3', '5e88ffd2e2bc9'),
(2057, '5e88ffd2ea6b7', 'simple cube', '5e88ffd2ed090'),
(2058, '5e88ffd2ea6b7', 'bcc', '5e88ffd2ed096'),
(2059, '5e88ffd2ea6b7', 'fcc', '5e88ffd2ed097'),
(2060, '5e88ffd2ea6b7', 'hcp', '5e88ffd2ed098'),
(2061, '5e88ffd301fac', 'Constant boiling mixtures', '5e88ffd303cf3'),
(2062, '5e88ffd301fac', ' Those which boil at different temperatures', '5e88ffd303cf9'),
(2063, '5e88ffd301fac', 'Mixture of two solids', '5e88ffd303cfa'),
(2064, '5e88ffd301fac', ' None of these', '5e88ffd303cfb'),
(2065, '5e88ffd30d428', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set1/che/60a.jpg\">', '5e88ffd30eada'),
(2066, '5e88ffd30d428', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set1/che/60b.jpg\">', '5e88ffd30eadf'),
(2067, '5e88ffd30d428', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set1/che/60c.jpg\">', '5e88ffd30eae0'),
(2068, '5e88ffd30d428', '<img style=\"max-width: 80%;  height: auto;\" src=\"image/set1/che/60d.jpg\">', '5e88ffd30eae1');

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
(71, '5e7640ff0797d', '5e76601b8a4fa', 'Domain of <img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/1.jpg\">', 4, 1),
(72, '5e7640ff0797d', '5e76601bdc4b6', 'If <img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/2.jpg\">then', 4, 2),
(73, '5e7640ff0797d', '5e76601c23536', 'The number of triangles that are formed by choosing the vertices from a set of 12 points, seven of which lie on the same line is ', 4, 3),
(74, '5e7640ff0797d', '5e76601cc9cc5', 'If the line   <img  style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/4.jpg\">    passes through the points (2, -3) and (4, -5) , then (a, b) is', 4, 4),
(75, '5e7640ff0797d', '5e76601d33964', 'The eccentricity of the hyperbola whose latus rectum is 8 and conjugate axis is equal to half of the distance between the foci is', 4, 5),
(76, '5e7640ff0797d', '5e76601d75bec', 'If <img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/6.jpg\">', 4, 6),
(77, '5e7640ff0797d', '5e76601df4077', 'A single letter is selected at random from the word \'PROBABILITY\'. The probability that it is a vowel, is', 4, 7),
(78, '5e7640ff0797d', '5e76601e3e7b0', 'Let A = {1, 2, 3, ... n} and B = {a, b} . Then the number of surjections from A into B is', 4, 8),
(79, '5e7640ff0797d', '5e76601e76ed6', 'If <img src=\"image/math/9.jpg\" style=\"max-width:100%; height:auto; \"> equals', 4, 9),
(80, '5e7640ff0797d', '5e76601eb640e', 'If A is a square matrix such that   <img  style=\"max-width: 100%;\r\n  height: auto;\"src=\"image/math/10.jpg\">  is equal to ', 4, 10),
(81, '5e7640ff0797d', '5e76601ef1582', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/11.jpg\"> is equal to', 4, 11),
(82, '5e7640ff0797d', '5e76601f4b224', 'Let  f(x) = |sinx|. Then', 4, 12),
(83, '5e7640ff0797d', '5e76601f84717', 'Which of the following function is decreasing on   <img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/13.jpg\">', 4, 13),
(84, '5e7640ff0797d', '5e76601fc4e48', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/14.jpg\">', 4, 14),
(85, '5e7640ff0797d', '5e766020012c6', 'Evaluate <img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/15.jpg\">', 4, 15),
(86, '5e7640ff0797d', '5e76602045f57', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/16.jpg\"> ', 4, 16),
(87, '5e7640ff0797d', '5e7660207e44f', ' <img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/17.jpg\">', 4, 17),
(88, '5e7640ff0797d', '5e766020b9595', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/18.jpg\">', 4, 18),
(89, '5e7640ff0797d', '5e766020f013f', '<img  style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/math/19.jpg\">2x - 2y + z = 5 is', 4, 19),
(90, '5e7640ff0797d', '5e766021343ba', '<p>A and B are events such that P(A) = 0.4, P(B) = 0.3 and P(A U B) = 0.5. Then P(B\' &cap; A) equals</p>', 4, 20),
(91, '5e7640ff0797d', '5e766021b983a', 'A player caught a cricket ball of mass 150 g moving at a rate of 20 m/s. If the catching process is completed in 0.1 s, the force of the blow exerted by the ball on the hand of the player is equal to', 4, 21),
(92, '5e7640ff0797d', '5e766021ef41e', 'If the linear momentum is increased by 50%, then kinetic energy will be increased by', 4, 22),
(93, '5e7640ff0797d', '5e7660223712f', 'The moment of inertia of a flywheel having kinetic energy 360 J and angular speed of 20 rad/s is', 4, 23),
(94, '5e7640ff0797d', '5e76602279287', 'The escape velocity for a body projected vertically upwards form the surface of earth is 11 km/sec. If the body is projected at an angle of 45&deg; with the vertical, the escape velocity will be', 4, 24),
(95, '5e7640ff0797d', '5e766023999e6', 'Four wires of the same material are stretched by the same load. The dimensions are given below. Which of them will elongate the most?', 4, 25),
(96, '5e7640ff0797d', '5e766023cc9ce', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/phy/26.jpg\">   \r\nCurrent from A to B in the straight wire is decreasing. The direction of induced current in the loop, is', 4, 26),
(97, '5e7640ff0797d', '5e7660240c85a', 'A 0.1m long conductor carrying a current of 50A is held perpendicular to a magnetic field of 1.25mT. the mechanical power required to move the conductor with a speed of 1m/sec is', 4, 27),
(98, '5e7640ff0797d', '5e7660243cc01', '<p>Two point charges are 3 m apart their combined charge is 8 &mu;c. The force between them is 0.012 N. Charges are</p>', 4, 28),
(99, '5e7640ff0797d', '5e7660246fc3e', 'The total electric flux through a cube when a charge 8 q is placed at one corner of the cube is', 4, 29),
(100, '5e7640ff0797d', '5e766024a7030', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/phy/30.jpg\">   \r\nFour metallic plates each having area A are placed as shown with the distance between the consecutive plates d. The effective capacity between M and N is', 4, 30),
(101, '5e7640ff0797d', '5e766024d7693', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/phy/31.jpg\">   \r\nThe equivalent capacitance of the infinite ladder shown in the following diagram between A and B (each capacitor is of capacitance equal to 1 &mu;F) is', 4, 31),
(102, '5e7640ff0797d', '5e76602516372', 'The charge of   <img src=\"image/phy/32.jpg\">    are placed at each of the four corners of square of side 8cm. The potential at the intersection of the diagonals is', 4, 32),
(103, '5e7640ff0797d', '5e76602549332', 'Charges 2q, q and q are placed at the corners A, B and C of an equilateral triangle ABC. If E is the electric field at the circum centre O of the triangle , due to the charge q , then the magnitude and direction of the resultant electric field at O is', 4, 33),
(104, '5e7640ff0797d', '5e76602582519', 'Two wires made of same material have their electrical resistances in the ratio 1:4. If their lengths are in the ratio 1:2, the ratio of their masses is', 4, 34),
(105, '5e7640ff0797d', '5e766025bdbf2', '<img src=\"image/phy/35.jpg\">   \r\n<p>I - V curves are shown for a metallic conductor at two different temperatures T<sub>1</sub> and T<sub>2</sub> in the figure. The correct relation between T<sub>1</sub> and T<sub>2</sub> is</p>', 4, 35),
(106, '5e7640ff0797d', '5e766025ee1af', '<img src=\"image/phy/36.jpg\">    \r\nIn the circuit shown in figure the total current supplied by the battery is', 4, 36),
(107, '5e7640ff0797d', '5e7660262a402', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/phy/37.jpg\">   \r\n<p>The potential difference (V<sub>A</sub> - V<sub>B</sub>) between the points A and B in the given figure is</p>', 4, 37),
(108, '5e7640ff0797d', '5e7660265a92f', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/phy/38.jpg\">    \r\nThree electric bulbs of 200 W, 200 W and 400 W are shown in figure. The resultant power of the combination is', 4, 38),
(109, '5e7640ff0797d', '5e76602688473', 'The instantaneous magnitudes of the electric field (E) and the magnetic field (B) vectors in an electromagnetic wave propagating in vacuum are related as', 4, 39),
(110, '5e7640ff0797d', '5e766026c228a', 'The FM Radio broad casting band is', 4, 40),
(111, '5e7640ff0797d', '5e7660271d008', '<p>A sample of gas has a volume of 0.2 litre measured at 1 atm pressure and 0&degC . At the same pressure, the volume of a gas at 273&degC</p>', 4, 41),
(112, '5e7640ff0797d', '5e76602754383', 'If a system absorbs 600 J of heat and performs 350J of work, the increase in the internal energy of the system is', 4, 42),
(113, '5e7640ff0797d', '5e766027f3d71', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/che/43.jpg\"> ', 4, 43),
(114, '5e7640ff0797d', '5e76602859f09', '<img  style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/che/44.jpg\"> ', 4, 44),
(115, '5e7640ff0797d', '5e7660289cf6e', '<p>How much water should be added to 10 ml of 0.05 M H<sub>2</sub>SO<sub>4</sub> to increase its pH by 2 units?</p>', 4, 45),
(116, '5e7640ff0797d', '5e7660292ae6c', 'Physical adsorption', 4, 46),
(117, '5e7640ff0797d', '5e76602a143fa', 'Which of the following metals is leached by cyanide process?', 4, 47),
(118, '5e7640ff0797d', '5e76602a5b344', 'Mond&#39;s process is used for extraction of', 4, 48),
(119, '5e7640ff0797d', '5e76602aad339', 'Which of the following is tribasic acid?', 4, 49),
(120, '5e7640ff0797d', '5e76602ae0365', 'Which of the following is thermally most stable?', 4, 50),
(121, '5e7640ff0797d', '5e76602b29db3', '<img src=\"image/che/51.jpg\"> ', 4, 51),
(122, '5e7640ff0797d', '5e76602b5a31b', 'Which of the following shows only negative oxidation state in compounds?', 4, 52),
(123, '5e7640ff0797d', '5e76602b9aae5', 'Which shows the maximum magnetic moment?', 4, 53),
(124, '5e7640ff0797d', '5e76602bdda1c', '<img style=\"max-width: 100%;\r\n  height: auto;\"src=\"image/che/54.jpg\"> ', 4, 54),
(125, '5e7640ff0797d', '5e76602c47ace', 'Identify the cationic complex', 4, 55),
(126, '5e7640ff0797d', '5e76602c8d5ed', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/che/56.jpg\"> ', 4, 56),
(127, '5e7640ff0797d', '5e76602cc5c08', 'When 9.65 coulombs of electricity is passed through a solution of silver nitrate (at . mass of Ag = 108) the amount of silver deposited is', 4, 57),
(128, '5e7640ff0797d', '5e76602d0ca81', 'The unit of rate constant for a zero order reaction is', 4, 58),
(129, '5e7640ff0797d', '5e76602d5d235', 'For a chemical reaction A &rarr; B it is found that the rate of reaction doubles, when the concentration of A is increased four times. The order of a reaction is', 4, 59),
(130, '5e7640ff0797d', '5e76602d9b066', 'Which of the following molecules is linear?', 4, 60),
(398, '5e88d7f6020c2', '5e88dc36528da', '<img style=\"max-width: 100%;\r\n  height: auto;\" src=\"image/set3/math/1.jpg\">', 4, 1),
(399, '5e88d7f6020c2', '5e88dc365e803', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/2.jpg\">', 4, 2),
(400, '5e88d7f6020c2', '5e88dc366872b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/3.jpg\">', 4, 3),
(401, '5e88d7f6020c2', '5e88dc3672a71', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/4.jpg\">', 4, 4),
(402, '5e88d7f6020c2', '5e88dc367c661', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/5.jpg\">', 4, 5),
(403, '5e88d7f6020c2', '5e88dc3688652', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/6.jpg\">', 4, 6),
(404, '5e88d7f6020c2', '5e88dc3693ed8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/7.jpg\">', 4, 7),
(405, '5e88d7f6020c2', '5e88dc369e348', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/8.jpg\">', 4, 8),
(406, '5e88d7f6020c2', '5e88dc36aba82', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/9.jpg\">', 4, 9),
(407, '5e88d7f6020c2', '5e88dc36b5223', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/10.jpg\">', 4, 10),
(408, '5e88d7f6020c2', '5e88dc36bf992', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/11.jpg\">', 4, 11),
(409, '5e88d7f6020c2', '5e88dc36cb699', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/12.jpg\">', 4, 12),
(410, '5e88d7f6020c2', '5e88dc36d5c85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/13.jpg\">', 4, 13),
(411, '5e88d7f6020c2', '5e88dc36df602', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/14.jpg\">', 4, 14),
(412, '5e88d7f6020c2', '5e88dc36ebd56', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/15.jpg\">', 4, 15),
(413, '5e88d7f6020c2', '5e88dc3705d62', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/16.jpg\">', 4, 16),
(414, '5e88d7f6020c2', '5e88dc371293e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/17.jpg\">', 4, 17),
(415, '5e88d7f6020c2', '5e88dc371ba6f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/18.jpg\">', 4, 18),
(416, '5e88d7f6020c2', '5e88dc3725708', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/19.jpg\">', 4, 19),
(417, '5e88d7f6020c2', '5e88dc372e2e7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/math/20.jpg\">', 4, 20),
(418, '5e88d7f6020c2', '5e88dc3737900', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/21.jpg\">', 4, 21),
(419, '5e88d7f6020c2', '5e88dc3740995', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/22.jpg\">', 4, 22),
(420, '5e88d7f6020c2', '5e88dc3749a14', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/23.jpg\">', 4, 23),
(421, '5e88d7f6020c2', '5e88dc3752d38', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/24.jpg\">', 4, 24),
(422, '5e88d7f6020c2', '5e88dc375d41d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/25.jpg\">', 4, 25),
(423, '5e88d7f6020c2', '5e88dc37664df', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/26.jpg\">', 4, 26),
(424, '5e88d7f6020c2', '5e88dc376e9bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/27.jpg\">', 4, 27),
(425, '5e88d7f6020c2', '5e88dc3778491', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/28.jpg\">', 4, 28),
(426, '5e88d7f6020c2', '5e88dc3783414', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/29.jpg\">', 4, 29),
(427, '5e88d7f6020c2', '5e88dc37a4f81', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/30.jpg\">', 4, 30),
(428, '5e88d7f6020c2', '5e88dc37aecec', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/31.jpg\">', 4, 31),
(429, '5e88d7f6020c2', '5e88dc37b9f87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/32.jpg\">', 4, 32),
(430, '5e88d7f6020c2', '5e88dc37c5355', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/33.jpg\">', 4, 33),
(431, '5e88d7f6020c2', '5e88dc37cfdbb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/34.jpg\">', 4, 34),
(432, '5e88d7f6020c2', '5e88dc37dbd9f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/35.jpg\">', 4, 35),
(433, '5e88d7f6020c2', '5e88dc37e6500', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/36.jpg\">\r\n<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/36f.jpg\">', 4, 36),
(434, '5e88d7f6020c2', '5e88dc37f0cf7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/37.jpg\">', 4, 37),
(435, '5e88d7f6020c2', '5e88dc38077b1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/38.jpg\">\r\n<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/38f.jpg\">', 4, 38),
(436, '5e88d7f6020c2', '5e88dc38129ab', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/39.jpg\">', 4, 39),
(437, '5e88d7f6020c2', '5e88dc381e466', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/phy/40.jpg\">', 4, 40),
(438, '5e88d7f6020c2', '5e88dc382969e', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/41.jpg\">', 4, 41),
(439, '5e88d7f6020c2', '5e88dc3833e6a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/42.jpg\">', 4, 42),
(440, '5e88d7f6020c2', '5e88dc383edbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/43.jpg\">', 4, 43),
(441, '5e88d7f6020c2', '5e88dc384a8bf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/44.jpg\">', 4, 44),
(442, '5e88d7f6020c2', '5e88dc38551b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/45.jpg\">', 4, 45),
(443, '5e88d7f6020c2', '5e88dc3860ce8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/46.jpg\">', 4, 46),
(444, '5e88d7f6020c2', '5e88dc386cc96', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/47.jpg\">', 4, 47),
(445, '5e88d7f6020c2', '5e88dc38788fd', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/48.jpg\">', 4, 48),
(446, '5e88d7f6020c2', '5e88dc3883849', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/49.jpg\">', 4, 49),
(447, '5e88d7f6020c2', '5e88dc388e6b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/50.jpg\">', 4, 50),
(448, '5e88d7f6020c2', '5e88dc389dcad', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/51.jpg\">', 4, 51),
(449, '5e88d7f6020c2', '5e88dc38a69be', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/52.jpg\">', 4, 52),
(450, '5e88d7f6020c2', '5e88dc38b325b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/53.jpg\">', 4, 53),
(451, '5e88d7f6020c2', '5e88dc38bb9f4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/54.jpg\">', 4, 54),
(452, '5e88d7f6020c2', '5e88dc38c6db5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/55.jpg\">', 4, 55),
(453, '5e88d7f6020c2', '5e88dc38d5f45', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/56.jpg\">', 4, 56),
(454, '5e88d7f6020c2', '5e88dc38dfb09', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/57.jpg\">', 4, 57),
(455, '5e88d7f6020c2', '5e88dc38ec2f8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/58.jpg\">', 4, 58),
(456, '5e88d7f6020c2', '5e88dc3904ef4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/59.jpg\">', 4, 59),
(457, '5e88d7f6020c2', '5e88dc390ec4c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set3/che/60.jpg\">', 4, 60),
(458, '5e88fd468ceef', '5e88ffd059853', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/1.jpg\">', 4, 1),
(459, '5e88fd468ceef', '5e88ffd0640e9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/2.jpg\">', 4, 2),
(460, '5e88fd468ceef', '5e88ffd06ea73', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/3.jpg\">', 4, 3),
(461, '5e88fd468ceef', '5e88ffd077fe1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/4.jpg\">', 4, 4),
(462, '5e88fd468ceef', '5e88ffd081d5f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/5.jpg\">', 4, 5),
(463, '5e88fd468ceef', '5e88ffd08c487', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/6.jpg\">', 4, 6),
(464, '5e88fd468ceef', '5e88ffd0968ff', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/7.jpg\">', 4, 7),
(465, '5e88fd468ceef', '5e88ffd09f6ac', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/8.jpg\">', 4, 8),
(466, '5e88fd468ceef', '5e88ffd0a8786', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/9.jpg\">', 4, 9),
(467, '5e88fd468ceef', '5e88ffd0b184d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/10.jpg\">', 4, 10),
(468, '5e88fd468ceef', '5e88ffd0b9d28', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/11.jpg\">', 4, 11),
(469, '5e88fd468ceef', '5e88ffd0c2d67', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/12.jpg\">', 4, 12),
(470, '5e88fd468ceef', '5e88ffd0cbcc1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/13.jpg\">', 4, 13),
(471, '5e88fd468ceef', '5e88ffd0d5aa2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/14.jpg\">', 4, 14),
(472, '5e88fd468ceef', '5e88ffd0e1e87', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/15.jpg\">', 4, 15),
(473, '5e88fd468ceef', '5e88ffd0f01af', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/16.jpg\">', 4, 16),
(474, '5e88fd468ceef', '5e88ffd10523f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/17.jpg\">', 4, 17),
(475, '5e88fd468ceef', '5e88ffd1109eb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/18.jpg\">', 4, 18),
(476, '5e88fd468ceef', '5e88ffd11b575', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/19.jpg\">', 4, 19),
(477, '5e88fd468ceef', '5e88ffd126971', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/math/20.jpg\">', 4, 20),
(478, '5e88fd468ceef', '5e88ffd1316ef', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/21.jpg\">', 4, 21),
(479, '5e88fd468ceef', '5e88ffd13c779', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/22.jpg\">', 4, 22),
(480, '5e88fd468ceef', '5e88ffd14771b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/23.jpg\">', 4, 23),
(481, '5e88fd468ceef', '5e88ffd15250b', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/24.jpg\">', 4, 24),
(482, '5e88fd468ceef', '5e88ffd15d635', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/25.jpg\">', 4, 25),
(483, '5e88fd468ceef', '5e88ffd168577', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/26.jpg\">\r\n<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/26f.jpg\">', 4, 26),
(484, '5e88fd468ceef', '5e88ffd17370a', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/27.jpg\">\r\n<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/27f.jpg\">', 4, 27),
(485, '5e88fd468ceef', '5e88ffd17e57f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/28.jpg\">', 4, 28),
(486, '5e88fd468ceef', '5e88ffd189daf', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/29.jpg\">', 4, 29),
(487, '5e88fd468ceef', '5e88ffd194730', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/30.jpg\">', 4, 30),
(488, '5e88fd468ceef', '5e88ffd19fdbe', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/31.jpg\">\r\n<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/31f.jpg\">', 4, 31),
(489, '5e88fd468ceef', '5e88ffd1aa693', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/32.jpg\">', 4, 32),
(490, '5e88fd468ceef', '5e88ffd1b54f2', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/33.jpg\">', 4, 33),
(491, '5e88fd468ceef', '5e88ffd1c0be5', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/34.jpg\">', 4, 34),
(492, '5e88fd468ceef', '5e88ffd1cb7fb', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/35.jpg\">', 4, 35),
(493, '5e88fd468ceef', '5e88ffd1d66c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/36.jpg\">', 4, 36),
(494, '5e88fd468ceef', '5e88ffd1e1407', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/37.jpg\">', 4, 37),
(495, '5e88fd468ceef', '5e88ffd1ecf7d', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/38.jpg\">', 4, 38),
(496, '5e88fd468ceef', '5e88ffd20438f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/39.jpg\">\r\n<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/39f.jpg\">', 4, 39),
(497, '5e88fd468ceef', '5e88ffd20f532', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/phy/40.jpg\">', 4, 40),
(498, '5e88fd468ceef', '5e88ffd21a6c9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/41.jpg\">', 4, 41),
(499, '5e88fd468ceef', '5e88ffd225be1', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/42.jpg\">', 4, 42),
(500, '5e88fd468ceef', '5e88ffd23075f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/43.jpg\">', 4, 43),
(501, '5e88fd468ceef', '5e88ffd23b51f', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/44.jpg\">', 4, 44),
(502, '5e88fd468ceef', '5e88ffd24669c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/45.jpg\">', 4, 45),
(503, '5e88fd468ceef', '5e88ffd251da3', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/46.jpg\">', 4, 46),
(504, '5e88fd468ceef', '5e88ffd25cb85', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/47.jpg\">', 4, 47),
(505, '5e88fd468ceef', '5e88ffd2775d4', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/48.jpg\">', 4, 48),
(506, '5e88fd468ceef', '5e88ffd27f99c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/49.jpg\">', 4, 49),
(507, '5e88fd468ceef', '5e88ffd2879d9', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/50.jpg\">', 4, 50),
(508, '5e88fd468ceef', '5e88ffd290b5c', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/51.jpg\">', 4, 51),
(509, '5e88fd468ceef', '5e88ffd298ecd', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/52.jpg\">', 4, 52),
(510, '5e88fd468ceef', '5e88ffd2a1e77', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/53.jpg\">', 4, 53),
(511, '5e88fd468ceef', '5e88ffd2ad062', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/54.jpg\">', 4, 54),
(512, '5e88fd468ceef', '5e88ffd2c9b15', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/55.jpg\">', 4, 55),
(513, '5e88fd468ceef', '5e88ffd2d47d8', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/56.jpg\">', 4, 56),
(514, '5e88fd468ceef', '5e88ffd2e1472', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/57.jpg\">', 4, 57),
(515, '5e88fd468ceef', '5e88ffd2ea6b7', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/58.jpg\">', 4, 58),
(516, '5e88fd468ceef', '5e88ffd301fac', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/59.jpg\">', 4, 59),
(517, '5e88fd468ceef', '5e88ffd30d428', '<img style=\"max-width: 100%;  height: auto;\" src=\"image/set1/che/60.jpg\">', 4, 60);

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(7, '5e7640ff0797d', 'NCET Entrance\r\nExam 2020 set-2', 1, 0, 60, 60, '2020-04-05 13:11:46', 'enabled'),
(24, '5e88d7f6020c2', 'NCET Entrance\r\nExam 2020 set-3', 1, 0, 60, 60, '2020-04-05 13:11:45', 'enabled'),
(27, '5e88fd468ceef', 'NCET Entrance\r\nExam 2020 set-1', 1, 0, 60, 60, '2020-04-05 13:11:44', 'enabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `username`, `score`, `time`) VALUES
(25, 'venureddy.ncet@gmail.com', 19, '2020-04-04 20:13:57');

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
(54, 'N Venugopal Reddy', 'N KASI REDDY', 'PCM', 'M', 'venureddy.ncet@gmail.com', 9949166771, 9949166771, 'Chaitanya junior college, kurnool', 'Mahesh sir', '65771');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=518;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2069;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=518;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
