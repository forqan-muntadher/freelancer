-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 11, 2023 at 01:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelancer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `A_first_name` varchar(20) NOT NULL,
  `A_last_name` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `role` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`, `email`, `A_first_name`, `A_last_name`, `phone`, `role`, `created_date`, `last_login`) VALUES
(1, 'mahmood', '121212', 'mahmood@s.uokerbala.edu.iq', 'mahmood', 'hashim', '07730303670', 'super_admin', '2023-05-09 00:00:00', '0000-00-00 00:00:00'),
(2, 'mahmood', '121212', 'mahmood@s.uokerbala.edu.iq', 'mahmood', 'hashim', '07730303670', 'super_admin', '2023-05-09 00:00:00', '2023-05-09 05:00:00'),
(3, '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category_tb`
--

CREATE TABLE `category_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_tb`
--

CREATE TABLE `client_tb` (
  `id` int(11) NOT NULL,
  `C_first_name` varchar(45) DEFAULT NULL,
  `C_last_name` varchar(45) DEFAULT NULL,
  `C_email` varchar(45) DEFAULT NULL,
  `C_password` varchar(45) DEFAULT NULL,
  `C_country` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tb`
--

INSERT INTO `client_tb` (`id`, `C_first_name`, `C_last_name`, `C_email`, `C_password`, `C_country`) VALUES
(12, 'akel', 'hashim', 'akel@1.ali123.com', '0000', 'Iraq'),
(13, 'ahmed ', 'ali', 'ahmed@ali225.com', '8520', 'Iran'),
(14, 'ibrahem', 'khalel', 'i2516@s.uobagdad.edu.iq', '1231231', 'Iraq'),
(15, 'jeme', 'jwad', 'mohamed@1.ali123.com', '11111111', 'Iraq'),
(16, 'najeh', 'salih', 'najeh@salih.com', '1111', 'Iraq'),
(17, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '0773030303', 'Iraq'),
(18, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '55555', 'Iraq');

-- --------------------------------------------------------

--
-- Table structure for table `company_tb`
--

CREATE TABLE `company_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `website` varchar(40) NOT NULL,
  `description` longtext NOT NULL,
  `industry` text NOT NULL,
  `company_size` int(11) NOT NULL,
  `company_logo` text NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactus_tb`
--

CREATE TABLE `contactus_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus_tb`
--

INSERT INTO `contactus_tb` (`id`, `name`, `email`, `message`) VALUES
(3, 'mahmood', 'm17202182@s.uokerbala.edu.iq', 'mahmood hashim ali karem alsafar'),
(4, 'mahmood', 'm17202182@s.uokerbala.edu.iq', 'mmm');

-- --------------------------------------------------------

--
-- Table structure for table `employment_contract_tb`
--

CREATE TABLE `employment_contract_tb` (
  `id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_tb`
--

CREATE TABLE `freelancer_tb` (
  `id` int(11) NOT NULL,
  `F_first_name` varchar(45) NOT NULL,
  `F_last_name` varchar(45) NOT NULL,
  `F_email` varchar(45) NOT NULL,
  `F_password` varchar(45) NOT NULL,
  `F_country` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_tb`
--

INSERT INTO `freelancer_tb` (`id`, `F_first_name`, `F_last_name`, `F_email`, `F_password`, `F_country`) VALUES
(14, 'ali', 'jabar', 'm172ali@jabar.edu.iq', '9999999', 'Iran'),
(16, 'mahodi', 'salih', 'mahdi@111.com', '011000', 'Iran'),
(17, 'jon', 'stef', 'jon@1.st2.com', '45632145', 'French'),
(18, 'crizman', 'antoan', 'crdd@antoan.com', '7896541', 'Spanish'),
(19, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '111111', 'Iraq'),
(20, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '4444', 'Iraq'),
(21, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '11115', 'French'),
(22, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '5555', 'French'),
(23, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '23212321', 'French'),
(24, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '5428752', 'Spanish'),
(25, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '77845', 'Spanish'),
(26, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '79865', 'Spanish'),
(27, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '/85', 'Iraq'),
(28, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '85258', 'Iraq'),
(29, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '555', 'Iraq'),
(30, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', 'skpfs854786', 'Iraq'),
(31, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '85427854', 'Iraq'),
(32, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '86452845', 'Iraq'),
(33, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '/78645321', 'Iraq'),
(34, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '07730303000', 'Spanish'),
(35, 'hashim', 'hashim', 'ahmed@1.ali123.com', '55555', 'Iraq'),
(36, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '255555', 'Iraq'),
(37, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '99999999', 'Iraq'),
(38, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '55555555555', 'Iraq'),
(39, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '5555555555', 'Iraq'),
(40, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '5458', 'Iraq'),
(41, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '54555', 'Iraq'),
(42, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '1234567890', 'Russia'),
(43, 'ahmed', 'hashim', 'ahmed@1.ali123.com', '111111111111111111111111', 'India'),
(44, 'joje', 'ahmed', 'ali@mahmood.com', '5556644567412', 'Italy'),
(45, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '0773', 'Italy'),
(46, 'mahmood', 'hashim', 'm17202182@s.uokerbala.edu.iq', '8', 'Iraq');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passwordd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`id`, `email`, `passwordd`) VALUES
(1, 'm17202182@s.uokerbala.edu.iq', '1111'),
(2, 'mahmood@hashim00ali', '12121212'),
(3, 'test@test.com', '121212'),
(4, 'm17202182@s.uokerbala.edu.iq', '123123123'),
(5, 'm17202182@s.uokerbala.edu.iq', '111111111'),
(6, 'm17202182@s.uokerbala.edu.iq', '111'),
(7, 'm17202182@s.uokerbala.edu.iq', '000'),
(8, 'm17202182@s.uokerbala.edu.iq', '0147'),
(9, 'm17202182@s.uokerbala.edu.iq', '78945'),
(10, 'm17202182@s.uokerbala.edu.iq', '00225588'),
(11, 'akel@1.ali123.com', '0000'),
(12, 'ahmed@ali225.com', '8520'),
(13, 'i2516@s.uobagdad.edu.iq', '123123'),
(14, 'mohamed@1.ali123.com', '11111111'),
(15, 'najeh@salih.com', '1111'),
(16, 'm17202182@s.uokerbala.edu.iq', '0773030303'),
(17, 'ali@1.ali123.com', '456789'),
(18, 'mahdi@111.com', '011000'),
(19, 'jon@1.st2.com', '45632145'),
(20, 'crdd@antoan.com', '7896541'),
(21, 'm17202182@s.uokerbala.edu.iq', '111111'),
(22, 'm17202182@s.uokerbala.edu.iq', '4444'),
(23, 'm17202182@s.uokerbala.edu.iq', '11115'),
(24, 'm17202182@s.uokerbala.edu.iq', '5555'),
(25, 'm17202182@s.uokerbala.edu.iq', '23212321'),
(26, 'm17202182@s.uokerbala.edu.iq', '5428752'),
(27, 'm17202182@s.uokerbala.edu.iq', '77845'),
(28, 'm17202182@s.uokerbala.edu.iq', '79865'),
(29, 'm17202182@s.uokerbala.edu.iq', '/85'),
(30, 'm17202182@s.uokerbala.edu.iq', '85258'),
(31, 'm17202182@s.uokerbala.edu.iq', '555'),
(32, 'm17202182@s.uokerbala.edu.iq', 'skpfs854786'),
(33, 'm17202182@s.uokerbala.edu.iq', '85427854'),
(34, 'm17202182@s.uokerbala.edu.iq', '86452845'),
(35, 'm17202182@s.uokerbala.edu.iq', '/78645321'),
(36, 'm17202182@s.uokerbala.edu.iq', '07730303000'),
(37, 'ahmed@1.ali123.com', '55555'),
(38, 'm17202182@s.uokerbala.edu.iq', '255555'),
(39, 'm17202182@s.uokerbala.edu.iq', '99999999'),
(40, 'm17202182@s.uokerbala.edu.iq', '55555555555'),
(41, 'm17202182@s.uokerbala.edu.iq', '5555555555'),
(42, 'm17202182@s.uokerbala.edu.iq', '5458'),
(43, 'm17202182@s.uokerbala.edu.iq', '54555'),
(44, 'm17202182@s.uokerbala.edu.iq', '55555');

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

CREATE TABLE `payment_tb` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  `method` text NOT NULL,
  `transaction_id` text NOT NULL,
  `client_id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_tb`
--

CREATE TABLE `profile_tb` (
  `id` int(11) NOT NULL,
  `namee` varchar(45) DEFAULT NULL,
  `purview` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `addresss` varchar(45) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `languagee` varchar(45) DEFAULT NULL,
  `otherlanguage` varchar(50) DEFAULT NULL,
  `skills` varchar(45) DEFAULT NULL,
  `otherskills` varchar(45) DEFAULT NULL,
  `experiences` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `bio` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `freelancer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_tb`
--

INSERT INTO `profile_tb` (`id`, `namee`, `purview`, `age`, `country`, `city`, `addresss`, `zip`, `languagee`, `otherlanguage`, `skills`, `otherskills`, `experiences`, `rate`, `bio`, `phone`, `freelancer_id`) VALUES
(36, 'ibrahem', 'backend', 20, 'iraq', 'kerbala', 'al-zohor/mahdola', 4549, 'English', 'french', 'IT', 'programing', 10, 10, 'QQQQQQQQQQQQQQ', 2147483647, NULL),
(37, 'jeme', 'backend', 20, 'iraq', 'kerbala', 'al-zohor/mahdola', 4549, 'English', 'french', 'IT', 'programing', 10, 10, 'QQQQQQQQQQQQQQ', 2147483647, NULL),
(38, 'ahmed', 'developer', 20, 'iraq', 'kerbala', 'al-zohor/mahdola', 4549, 'French', 'french', 'IT', 'software', 2, 0, 'yyyyyyyyyyyyyy', 2147483647, NULL),
(39, 'mahamedo2', 'developer', 20, 'iraq', 'kerbala', 'al-zohor/mahdola', 4549, 'English', 'french', 'IT', 'software', 20, 20, 'oooooooooooooooooo', 2147483647, 42),
(40, 'alsafar', 'developer', 20, 'iraq', 'kerbala', 'al-zohor/mahdola', 4549, 'English', 'french', 'IT', 'back_end', 50, 50, 'wwwwwwwwwwwwwwwwwwww', 2147483647, 43),
(41, 'sobhan', 'f', 20, 'f', 'f', 'f', 55, 'English', 'f', 'IT', 'f', 5, 5, '', 555, 45),
(42, 'mahmood', 'developer', 20, 'kerbala', 'real madrid', 'kk', 2546, 'English', 'spain', 'IT', 'back_end', 5, 14, 'IT professional ', 2147483647, 46);

-- --------------------------------------------------------

--
-- Table structure for table `project_tb`
--

CREATE TABLE `project_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `project_budget` float NOT NULL,
  `deadline` datetime NOT NULL,
  `client_id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `srch_data`
-- (See below for the actual view)
--
CREATE TABLE `srch_data` (
`id` int(11)
,`C_first_name` varchar(45)
,`C_last_name` varchar(45)
,`C_email` varchar(45)
,`C_password` varchar(45)
,`C_country` varchar(45)
);

-- --------------------------------------------------------

--
-- Structure for view `srch_data`
--
DROP TABLE IF EXISTS `srch_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `srch_data`  AS  select `client_tb`.`id` AS `id`,`client_tb`.`C_first_name` AS `C_first_name`,`client_tb`.`C_last_name` AS `C_last_name`,`client_tb`.`C_email` AS `C_email`,`client_tb`.`C_password` AS `C_password`,`client_tb`.`C_country` AS `C_country` from `client_tb` union select `freelancer_tb`.`id` AS `id`,`freelancer_tb`.`F_first_name` AS `F_first_name`,`freelancer_tb`.`F_last_name` AS `F_last_name`,`freelancer_tb`.`F_email` AS `F_email`,`freelancer_tb`.`F_password` AS `F_password`,`freelancer_tb`.`F_country` AS `F_country` from `freelancer_tb` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_tb`
--
ALTER TABLE `client_tb`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `company_tb`
--
ALTER TABLE `company_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_to_client_ID` (`client_id`);

--
-- Indexes for table `contactus_tb`
--
ALTER TABLE `contactus_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_contract_tb`
--
ALTER TABLE `employment_contract_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `to_freelancer_ID` (`freelancer_id`);

--
-- Indexes for table `freelancer_tb`
--
ALTER TABLE `freelancer_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_to_client_ID` (`client_id`),
  ADD KEY `payment_to_freelancer_ID` (`freelancer_id`),
  ADD KEY `payment_to_project_ID` (`project_id`);

--
-- Indexes for table `profile_tb`
--
ALTER TABLE `profile_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_to_freelancer_ID` (`freelancer_id`);

--
-- Indexes for table `project_tb`
--
ALTER TABLE `project_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_to_client_ID` (`client_id`),
  ADD KEY `project_to_freelancer_ID` (`freelancer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_tb`
--
ALTER TABLE `client_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company_tb`
--
ALTER TABLE `company_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus_tb`
--
ALTER TABLE `contactus_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employment_contract_tb`
--
ALTER TABLE `employment_contract_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelancer_tb`
--
ALTER TABLE `freelancer_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `payment_tb`
--
ALTER TABLE `payment_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_tb`
--
ALTER TABLE `profile_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `project_tb`
--
ALTER TABLE `project_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_tb`
--
ALTER TABLE `company_tb`
  ADD CONSTRAINT `company_to_client_ID` FOREIGN KEY (`client_id`) REFERENCES `client_tb` (`id`);

--
-- Constraints for table `employment_contract_tb`
--
ALTER TABLE `employment_contract_tb`
  ADD CONSTRAINT `employment_contract_tb_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tb` (`id`),
  ADD CONSTRAINT `to_freelancer_ID` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancer_tb` (`id`);

--
-- Constraints for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD CONSTRAINT `payment_to_client_ID` FOREIGN KEY (`client_id`) REFERENCES `client_tb` (`id`),
  ADD CONSTRAINT `payment_to_freelancer_ID` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancer_tb` (`id`),
  ADD CONSTRAINT `payment_to_project_ID` FOREIGN KEY (`project_id`) REFERENCES `project_tb` (`id`);

--
-- Constraints for table `profile_tb`
--
ALTER TABLE `profile_tb`
  ADD CONSTRAINT `profile_to_freelancer_ID` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancer_tb` (`id`);

--
-- Constraints for table `project_tb`
--
ALTER TABLE `project_tb`
  ADD CONSTRAINT `project_to_client_ID` FOREIGN KEY (`client_id`) REFERENCES `client_tb` (`id`),
  ADD CONSTRAINT `project_to_freelancer_ID` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancer_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
