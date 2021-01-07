-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2020 at 01:23 AM
-- Server version: 5.7.30
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncetmons_arktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(100) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `des` longtext,
  `aid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `archieve`
--

CREATE TABLE `archieve` (
  `id` int(11) NOT NULL,
  `pbname` varchar(100) DEFAULT NULL,
  `pbdes` longtext,
  `pbauthor` varchar(100) DEFAULT NULL,
  `tc` mediumtext,
  `output` mediumtext,
  `uoutput` mediumtext,
  `tlimit` double(100,2) DEFAULT '3.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archieve`
--

INSERT INTO `archieve` (`id`, `pbname`, `pbdes`, `pbauthor`, `tc`, `output`, `uoutput`, `tlimit`) VALUES
(1, 'Even or Odd', 'Write a C program to find whether the given number is even or odd', 'ARK', '2\r\n15\r\n$\r\n-34\r\n-87\r\n0\r\ng\r\n3.6\r\nA\r\n+', 'Even Number\r\nOdd Number\r\nInvalid Input\r\nEven number\r\nOdd Number\r\nEven number\r\nInvalid Input\r\nNeither Even nor Odd\r\nInvalid Input\r\nInvalid Input', 'Enter a number: 2 is a Even number', 3.00),
(2, 'Greatest no. b/w three', 'Write a C program to find whether the maximum of 3 numbers.\r\n\r\nTake a multidimensional array, and take all the inputs and give the output as per given,\r\n\r\nTestcases:\r\n\r\nINPUT\r\n\r\n1 3 5\r\nc s e\r\n13.9 34.8 21.4\r\na b 2\r\n+ $ %\r\n4 2 4\r\n2 b c\r\n789, 123, 456\r\n\r\nOUTPUT:\r\n\r\n5\r\nInvalid Input\r\n34.8\r\nInvalid Input\r\nInvalid Input\r\n4\r\nInvalid Input\r\n789\r\n', 'ark', '1 3 5\r\nc s e\r\n13.9 34.8 21.4\r\na b 2\r\n+ $ %\r\n4 2 4\r\n2 b c\r\n789, 123, 456', '5\r\nInvalid Input\r\n34.8\r\nInvalid Input\r\nInvalid Input\r\n4\r\nInvalid Input\r\n789\r\n', '', 3.00),
(3, 'Department Meet', 'There are 5 departments which look after discipline in a college namely CSE, ISE, ECE, Civil, and Mech. CSE will look for every 2 days, ISE every 3 days, ECE every 4 days, Civil every 5 days, Mech every 6 days. 5 departments met on inaugural day 01/07/2019 for the first time and starting from that day, they will meet according to the specified schedule till semester ends on 31/12/2019. How many times did all 5 departments meet on same day in terms of monthwise? (Max. month specified is 5(end of December)).\r\n\r\nTestcases\r\n\r\nInput\r\n\r\nAfter how many months: 1\r\nAfter how many months: 2\r\nAfter how many months: 0\r\nAfter how many months: A\r\nAfter how many months: #\r\nAfter how many months: 3\r\nAfter how many months: -7\r\nAfter how many months: 4\r\nAfter how many months: 30\r\nAfter how many months: 5\r\n\r\nOUTPUT\r\n\r\n0\r\n1\r\nInvalid Input\r\nInvalid Input\r\nInvalid Input\r\n1\r\nInvalid Input\r\n2\r\nInvalid Input\r\n2\r\n', 'ARK', 'After how many months: 1\r\nAfter how many months: 2\r\nAfter how many months: 0\r\nAfter how many months: A\r\nAfter how many months: #\r\nAfter how many months: 3\r\nAfter how many months: -7\r\nAfter how many months: 4\r\nAfter how many months: 30\r\nAfter how many months: 5', '0\r\n1\r\nInvalid Input\r\nInvalid Input\r\nInvalid Input\r\n1\r\nInvalid Input\r\n2\r\nInvalid Input\r\n2\r\n', '', 3.00),
(4, 'CGPA into Grade', 'Write a C program to convert given CGPA to appropriate Grade.(use upto 2 decimal values)\r\n\r\n(â€˜Sâ€™ grade between 9.0 to 10, â€˜Aâ€™ grade between 7.5 to 8.99 â€˜Bâ€™ grade between 6.0 to 7.49, â€˜Câ€™ grade between 5.0 to 5.99 â€˜Fâ€™ grade between 0 to 4.99)\r\n\r\nTestcases:\r\n\r\nINPUT\r\n\r\nEnter Name: Priya\r\nEnter CGPA: 9.69\r\n\r\nEnter Name: Abhi\r\nEnter CGPA: 7.36\r\n\r\nEnter Name: Rahim\r\nEnter CGPA: 7.95\r\n\r\nEnter Name: Ram\r\nEnter CGPA: #\r\n\r\nEnter Name: Kevin\r\nEnter CGPA: -8.36\r\n\r\nEnter Name: Robin\r\nEnter CGPA: 9.37\r\n\r\nEnter Name: @Ram\r\nEnter CGPA: 6.76\r\n\r\nEnter Name: Sam$\r\nEnter CGPA: 5.36\r\n\r\nEnter Name: Jenny\r\nEnter CGPA: 4.36\r\n\r\nEnter Name: Radha\r\nEnter CGPA: 10.36\r\n\r\nOUTPUT\r\n\r\nPriya got â€˜Sâ€™ grade\r\n\r\n\r\nAbhi got â€˜Bâ€™ grade\r\n\r\n\r\nRahim got â€˜Aâ€™ grade\r\n\r\n\r\nInvalid CGPA\r\n\r\n\r\nInvalid CGPA\r\n\r\n\r\nRobin got â€˜Sâ€™ grade\r\n\r\n\r\n@Ram got â€˜Bâ€™ grade\r\n\r\n\r\nSam$ got â€˜Câ€™ grade\r\n\r\n\r\nJenny got â€˜Fâ€™ grade\r\n\r\n\r\nInvalid CGPA\r\n\r\n', 'ARK', 'Enter Name: Priya\r\nEnter CGPA: 9.69\r\n\r\nEnter Name: Abhi\r\nEnter CGPA: 7.36\r\n\r\nEnter Name: Rahim\r\nEnter CGPA: 7.95\r\n\r\nEnter Name: Ram\r\nEnter CGPA: #\r\n\r\nEnter Name: Kevin\r\nEnter CGPA: -8.36\r\n\r\nEnter Name: Robin\r\nEnter CGPA: 9.37\r\n\r\nEnter Name: @Ram\r\nEnter CGPA: 6.76\r\n\r\nEnter Name: Sam$\r\nEnter CGPA: 5.36\r\n\r\nEnter Name: Jenny\r\nEnter CGPA: 4.36\r\n\r\nEnter Name: Radha\r\nEnter CGPA: 10.36\r\n\r\n', 'Priya got â€˜Sâ€™ grade\r\n\r\n\r\nAbhi got â€˜Bâ€™ grade\r\n\r\n\r\nRahim got â€˜Aâ€™ grade\r\n\r\n\r\nInvalid CGPA\r\n\r\n\r\nInvalid CGPA\r\n\r\n\r\nRobin got â€˜Sâ€™ grade\r\n\r\n\r\n@Ram got â€˜Bâ€™ grade\r\n\r\n\r\nSam$ got â€˜Câ€™ grade\r\n\r\n\r\nJenny got â€˜Fâ€™ grade\r\n\r\n\r\nInvalid CGPA\r\n\r\n', '', 3.00),
(5, 'CALCI FUN', 'Write a C program to perform operations of a simple calculator using Switch statement. (correct upto 2 decimal values).\r\n\r\nTestcases:\r\n\r\nInput:\r\n\r\nEnter 2 operands: 2.3, 5.2\r\nEnter operator: +\r\n\r\nEnter 2 operands: 4, 9\r\nEnter operator: *\r\n\r\nEnter 2 operands: a, 2\r\nEnter 2 operands: 14,7\r\nEnter operator: $\r\n\r\nEnter 2 operands: 4a, 9\r\nEnter 2 operands: 4.67,\r\n9.72\r\n\r\nOutput:\r\n\r\n2.3 + 5.2 = 7.5\r\n4*9=36\r\nInvalid Operands\r\nInvalid Operator\r\nInvalid Operands\r\n4.67 â€“ 9.72 = -5.05\r\n', 'ARK', 'Enter 2 operands: 2.3, 5.2\r\nEnter operator: +\r\n\r\nEnter 2 operands: 4, 9\r\nEnter operator: *\r\n\r\nEnter 2 operands: a, 2\r\nEnter 2 operands: 14,7\r\nEnter operator: $\r\n\r\nEnter 2 operands: 4a, 9\r\nEnter 2 operands: 4.67,\r\n9.72\r\n\r\n', '2.3 + 5.2 = 7.5\r\n4*9=36\r\nInvalid Operands\r\nInvalid Operator\r\nInvalid Operands\r\n4.67 â€“ 9.72 = -5.05\r\n', '', 2.00);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `submit_name` varchar(100) DEFAULT NULL,
  `source_code` longtext,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `submit_name` varchar(50) DEFAULT NULL,
  `source_code` longtext,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`submit_name`, `source_code`, `id`) VALUES
('ark', '#include <stdio.h>\r\nint main()\r\n{\r\n int n;\r\n printf(\"Enter a number: \");\r\n scanf(\"%d\",&n);\r\n if(n%2==0)\r\n {\r\n printf(\"%d is a Even number\",n);\r\n }\r\n else\r\n {\r\n printf(\"%d is an Odd number\",n);\r\n }\r\n return 0;\r\n }', 1),
('akcoolboy47', '#include <stdio.h>\r\nint main()\r\n{\r\n int n;\r\n printf(\"Enter a number: \");\r\n scanf(\"%d\",&n);\r\n if(n%2==0)\r\n {\r\n printf(\"%d is a Even number\",n);\r\n }\r\n else\r\n {\r\n printf(\"%d is an Odd number\",n);\r\n }\r\n return 0;\r\n }', 2);

-- --------------------------------------------------------

--
-- Table structure for table `element`
--

CREATE TABLE `element` (
  `id` int(11) DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `pbname` varchar(400) DEFAULT NULL,
  `pbdes` longtext,
  `pbauthor` varchar(100) DEFAULT NULL,
  `tc` longtext,
  `output` longtext,
  `uoutput` longtext,
  `pbid` int(12) NOT NULL,
  `tlimit` double(100,2) DEFAULT '3.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rapl_oj_contest`
--

CREATE TABLE `rapl_oj_contest` (
  `id` int(11) NOT NULL,
  `cname` varchar(4000) DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `date_on` date DEFAULT NULL,
  `owner` varchar(100) DEFAULT 'shawon'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `solve`
--

CREATE TABLE `solve` (
  `sname` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `pbname` varchar(100) DEFAULT NULL,
  `solved` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `sid` int(100) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `verdict` varchar(50) DEFAULT NULL,
  `pbname` varchar(100) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `point` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `sid` int(11) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `verdict` varchar(50) DEFAULT NULL,
  `pbname` varchar(500) DEFAULT NULL,
  `time` float(10,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submissions`
--

INSERT INTO `submissions` (`sid`, `sname`, `verdict`, `pbname`, `time`) VALUES
(2, 'akcoolboy47', 'Wrong Answer', 'Even or Odd', 0.01);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(40) NOT NULL DEFAULT '',
  `pass` varchar(40) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'student',
  `email` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`, `status`, `email`) VALUES
('akcoolboy47', '0d8b93021ea26187591091f3ea26779c', 'user', 'akcoolboy47@gmail.com'),
('ark', 'e10adc3949ba59abbe56e057f20f883e', 'Problem Setter', 'ark@gmail.com'),
('ark1', 'e10adc3949ba59abbe56e057f20f883e', 'Developer', 'ark1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `archieve`
--
ALTER TABLE `archieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`pbid`);

--
-- Indexes for table `rapl_oj_contest`
--
ALTER TABLE `rapl_oj_contest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `archieve`
--
ALTER TABLE `archieve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `element`
--
ALTER TABLE `element`
  MODIFY `pbid` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
