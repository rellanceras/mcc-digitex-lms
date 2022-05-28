-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 03:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcc_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` int(30) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acad_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `archived` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `name`, `acad_year`, `semester`, `active`, `archived`) VALUES
(2, '2029-2030 1st Semester', '2029-2030', '1st Semester', 0, 0),
(3, '2022-20234 Inter-Semester', '2022-20234', '1st Semester', 0, 1),
(4, '2022-202345 Inter-Semester', '2022-20235', '2nd Semester', 0, 1),
(5, '2022-2024 Inter-Semester', '2022-2024', '1st Semester', 0, 0),
(6, '2022-2025 Inter-Semester', '2022-2025', '1st Semester', 1, 0),
(8, '2023-2024 1st Semester', '2023-2024', '1st Semester', 0, 0),
(9, '2022-2027 2nd Semester', '2022-2027', '2nd Semester', 0, 0),
(10, '2022-2023 2nd Semester', '2022-2023', '2nd Semester', 0, 0),
(11, '2024-2025 Inter-Semester', '2024-2025', 'Inter-Semester', 0, 0),
(12, '2026-2027 Inter-Semester', '2026-2027', 'Inter-Semester', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(20) NOT NULL,
  `dept_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abbreviation` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `abbreviation`) VALUES
(10, 'School of Computer Science and Technology', 'SCST'),
(11, 'School of Engineering and Architecture', 'SEA'),
(12, 'School of Tourism and Hospitality Management', 'STHM'),
(15, 'School of Business Management and Accountancy', 'SBMA'),
(17, 'Junior High School', 'JHS'),
(18, 'Senior High School', 'SHS'),
(19, 'Elementary', 'Elem'),
(20, 'Pre-Elementary', 'Prep');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(20) NOT NULL,
  `section_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `acad_year_id` int(20) NOT NULL,
  `dept_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(20) NOT NULL,
  `subject_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `acad_year_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_code`, `subject_name`, `department`, `subject_description`, `acad_year_id`) VALUES
(4, 'EQ019', ' Programmings', 'SCST', 'sample2', 2022),
(11, 'GEX123', 'Math', 'STHM', 'sample', 0),
(12, 'EQ019', 'Programming', 'SCST', 'sample', 0),
(17, 'HIS010', 'History', 'JHS', 'JHS History', 0),
(18, 'PE123', 'Physical Education', 'SHS', 'PE SHS 1', 0),
(19, 'Sci092', 'Science', 'Elem', 'Elem Science', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `middle_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NULL',
  `address` text COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NULL',
  `role` int(11) NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `school_id`, `first_name`, `middle_name`, `last_name`, `birthday`, `address`, `role`, `department`, `email`, `password`) VALUES
(1, 3181111, 'Admin', NULL, 'lms', '09-09-09', 'laguna', 1, 'SCST', 'adminlms@gmail.com', 'learning'),
(20, 2344233, 'J', '', 'Antonio', '2022-05-06', 'Laguna', 3, 'SEA', 'ja@test.com', '$2y$10$PqbExCpz/dYoGmT1zQQjA.tmE3v4utCdBqJ9fP2DIM5r2xke4CKS2'),
(21, 3186123, 'test', 'mid', 'hello', '2022-05-25', 'Dyansatabi', 2, 'JHS', 'hellotest@gmail.com', '$2y$10$ijlDCFc7t592eM4j4sixB.ne1my/9Xnz0qzzw0vaFhQLLlPnENcE6'),
(22, 3127612, 'Keefe', 'Barbara', 'Mullen', '1979-10-13', 'Qui odio at vel minu', 3, 'Elem', 'jawosize@mailinator.com', '$2y$10$mLZeyXcIsnozPg0vkFdaXuvF5AcWZPl.yQs0X9LXliwBWPfX/TAxm'),
(23, 3123564, 'Colleen', 'Madaline Rich', 'Parsons', '1985-05-15', 'Sunt consectetur ve', 3, 'STHM', 'pevifin@mailinator.com', '$2y$10$eyetNaYU.LFClLM5JnYK9eNn8.ICoo/m37c4oaqdetqK7gLTaY2gO'),
(24, 1233241, 'Kerry', 'Emma Bowman', 'Bolton', '2010-04-25', 'In cupidatat ut est ', 2, 'SHS', 'bify@mailinator.com', '$2y$10$L/m/uMvXkbuTu0SsyuDsWuy/9LEOKjiXY1hQ5uJRb2I2V.3P95xbi'),
(25, 75, 'Erin', 'April Garrett', 'Berger', '2016-08-17', 'Enim atque ut voluptas excepteur soluta quam qui nisi atque tempor quam omnis cupiditate minima nesciunt repellendus', 2, 'SBMA', 'mihek@mailinator.com', '$2y$10$I6F7/e1K7UoNCBLB58MyPOFlsIjcybWUZ35tArVHb8nP.6KaBH2se'),
(26, 78, 'Myra', 'Bruce Meyer', 'Ford', '2012-05-25', 'Id minus tempora optio laborum quis molestiae enim accusamus doloribus beatae', 3, 'Elem', 'kewyzuwaf@mailinator.com', '$2y$10$mpsFSEH6PZV6P2/KfZKrEuXY901O8fnTwA9dycAcV.l2VhrsbUfga'),
(27, 69, 'Jenette', 'Caleb Lloyd', 'Stanley', '1985-12-09', 'Rerum aut sint consectetur consequuntur saepe officia velit deserunt id ab incididunt rerum adipisicing excepteur et', 2, 'Prep', 'xomy@mailinator.com', '$2y$10$I5HWiUiogpZnXUaAwCCHs.P1scvg1EKPPnmXBfiRaj3pDsvxAj13e');

-- --------------------------------------------------------

--
-- Table structure for table `user_instances`
--

CREATE TABLE `user_instances` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `academic_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_instance_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'teacher'),
(3, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_instances`
--
ALTER TABLE `user_instances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_instances`
--
ALTER TABLE `user_instances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
