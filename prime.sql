-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 07:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prime`
--

-- --------------------------------------------------------

--
-- Table structure for table `prime_login`
--

CREATE TABLE `prime_login` (
  `id` int(11) NOT NULL,
  `uuid` varchar(150) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_role` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prime_login`
--

INSERT INTO `prime_login` (`id`, `uuid`, `user_name`, `password`, `user_role`, `status`) VALUES
(1, '3f20980d-67be-11ec-9512-3c7c3f5b04d2', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attachment`
--

CREATE TABLE `tbl_attachment` (
  `attach_uid` varchar(250) NOT NULL,
  `attach_name` text NOT NULL,
  `attach_status` int(11) NOT NULL,
  `attach_size` int(11) NOT NULL,
  `attach_type` varchar(50) NOT NULL,
  `attach_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attachment`
--

INSERT INTO `tbl_attachment` (`attach_uid`, `attach_name`, `attach_status`, `attach_size`, `attach_type`, `attach_id`) VALUES
('d8f49eae-67c8-11ec-9512-3c7c3f5b04d2', 'avatar-1.jpg', 0, 0, '', 1),
('f9c311b7-736b-11ec-96ee-3c7c3f5b04d2', 'avatar-2.jpg', 0, 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE `tbl_batch` (
  `bt_id` int(11) NOT NULL,
  `bt_uuid` varchar(250) NOT NULL,
  `bt_name` varchar(100) NOT NULL,
  `bt_created_by` varchar(250) NOT NULL,
  `bt_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `bt_status` int(11) NOT NULL DEFAULT 1,
  `bt_course_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`bt_id`, `bt_uuid`, `bt_name`, `bt_created_by`, `bt_created_date`, `bt_status`, `bt_course_id`) VALUES
(1, 'e8e5c98b-21f5-11ed-b355-3c7c3f5b04d2', 'Beginners', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', '2022-08-22 14:09:17', 1, 'e03db0d5-21f5-11ed-b355-3c7c3f5b04d2'),
(2, '05507c7d-21f6-11ed-b355-3c7c3f5b04d2', 'Fighters', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', '2022-08-22 14:10:05', 1, 'e03db0d5-21f5-11ed-b355-3c7c3f5b04d2'),
(3, '0a8d4033-21f6-11ed-b355-3c7c3f5b04d2', 'Achievers', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', '2022-08-22 14:10:14', 1, 'e03db0d5-21f5-11ed-b355-3c7c3f5b04d2'),
(4, '1469edc2-21f6-11ed-b355-3c7c3f5b04d2', 'Orientation', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', '2022-08-22 14:10:30', 1, 'f350510f-21f5-11ed-b355-3c7c3f5b04d2'),
(5, '193f1be6-21f6-11ed-b355-3c7c3f5b04d2', 'practice', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', '2022-08-22 14:10:38', 1, 'f350510f-21f5-11ed-b355-3c7c3f5b04d2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courses`
--

CREATE TABLE `tbl_courses` (
  `cr_id` int(11) NOT NULL,
  `cr_uuid` varchar(250) NOT NULL,
  `cr_name` varchar(150) NOT NULL,
  `cr_type` varchar(50) NOT NULL,
  `cr_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cr_created_by` varchar(250) NOT NULL,
  `cr_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_courses`
--

INSERT INTO `tbl_courses` (`cr_id`, `cr_uuid`, `cr_name`, `cr_type`, `cr_date`, `cr_created_by`, `cr_status`) VALUES
(1, 'e03db0d5-21f5-11ed-b355-3c7c3f5b04d2', 'IELTS', 'Offline', '2022-08-22 14:09:03', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', 1),
(2, 'f350510f-21f5-11ed-b355-3c7c3f5b04d2', 'PTE', 'Online', '2022-08-22 14:09:35', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_select`
--

CREATE TABLE `tbl_course_select` (
  `cs_id` int(11) NOT NULL,
  `cs_uuid` varchar(250) NOT NULL,
  `cs_stu_id` varchar(250) NOT NULL,
  `cs_course_id` varchar(250) NOT NULL,
  `cs_batch` varchar(250) NOT NULL,
  `cs_duration` varchar(250) NOT NULL,
  `cs_created_by` varchar(250) NOT NULL,
  `cs_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cs_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_duration`
--

CREATE TABLE `tbl_duration` (
  `due_id` int(11) NOT NULL,
  `due_uuid` varchar(250) NOT NULL,
  `due_name` varchar(150) NOT NULL,
  `due_batch` varchar(250) NOT NULL,
  `due_fee` float NOT NULL,
  `due_date` datetime NOT NULL DEFAULT current_timestamp(),
  `due_created_by` varchar(250) NOT NULL,
  `due_status` int(11) NOT NULL DEFAULT 1,
  `due_day` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `eq_id` int(11) NOT NULL,
  `eq_uuid` varchar(250) NOT NULL,
  `eq_stu` varchar(250) NOT NULL,
  `eq_date` datetime NOT NULL DEFAULT current_timestamp(),
  `eq_status` int(11) NOT NULL,
  `eq_note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrollment`
--

CREATE TABLE `tbl_enrollment` (
  `en_id` int(11) NOT NULL,
  `en_uuid` varchar(250) NOT NULL,
  `en_stu_uuid` varchar(250) NOT NULL,
  `en_course` varchar(250) NOT NULL,
  `en_batch` varchar(250) NOT NULL,
  `en_duration` varchar(250) NOT NULL,
  `en_class_id` varchar(250) NOT NULL,
  `en_total_fee` float NOT NULL,
  `en_paid` float NOT NULL,
  `en_payment_type` int(11) NOT NULL,
  `en_issued` text NOT NULL,
  `en_assign_class` int(11) NOT NULL,
  `en_created_by` varchar(250) NOT NULL,
  `en_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `en_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE `tbl_fee` (
  `fee_uuid` varchar(250) NOT NULL,
  `fee_dur` varchar(250) NOT NULL,
  `fee_fees` varchar(250) NOT NULL,
  `fee_date` datetime NOT NULL,
  `fee_created_by` varchar(250) NOT NULL,
  `fee_status` int(11) NOT NULL,
  `fee_stu_id` varchar(250) NOT NULL,
  `fee_enroll` varchar(250) NOT NULL,
  `fee_mode` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_log`
--

CREATE TABLE `tbl_fee_log` (
  `flog_uid` varchar(250) NOT NULL,
  `flog_fee_id` float NOT NULL,
  `flog_id` varchar(20) NOT NULL,
  `flog_stu_id` varchar(20) NOT NULL,
  `flog_created_by` datetime NOT NULL,
  `flog_mode` int(11) NOT NULL,
  `flog_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logbook`
--

CREATE TABLE `tbl_logbook` (
  `log_id` int(11) NOT NULL,
  `log_uuid` varchar(250) NOT NULL,
  `log_item_id` varchar(250) NOT NULL,
  `log_credit` int(150) NOT NULL,
  `log_debit` int(150) NOT NULL,
  `log_created_by` varchar(250) NOT NULL,
  `log_date` datetime NOT NULL DEFAULT current_timestamp(),
  `log_issue_to` varchar(250) NOT NULL,
  `log_user_type` varchar(15) NOT NULL,
  `log_qty` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `noti_uuid` varchar(250) NOT NULL,
  `noti_title` varchar(150) NOT NULL,
  `noti_msg` varchar(150) NOT NULL,
  `noti_url` text NOT NULL,
  `noti_date` datetime NOT NULL,
  `noti_created_for` varchar(250) NOT NULL,
  `noti_created_by` varchar(250) NOT NULL,
  `noti_status` int(11) NOT NULL,
  `noti_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`noti_uuid`, `noti_title`, `noti_msg`, `noti_url`, `noti_date`, `noti_created_for`, `noti_created_by`, `noti_status`, `noti_id`) VALUES
('f65aa818-2239-11ed-b355-3c7c3f5b04d2', 'Kawaljit&nbsp;singh', 'New Walkin added', 'walkins_list', '0000-00-00 00:00:00', '', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `sch_id` int(11) NOT NULL,
  `sch_uuid` varchar(250) NOT NULL,
  `sch_course_id` varchar(100) NOT NULL,
  `sch_strt_time` varchar(100) NOT NULL,
  `sch_lst_time` varchar(100) NOT NULL,
  `sh_day` varchar(50) NOT NULL,
  `sch_created_by` varchar(250) NOT NULL,
  `sch_status` int(11) NOT NULL DEFAULT 1,
  `sch_date` datetime NOT NULL DEFAULT current_timestamp(),
  `sch_class_name` varchar(50) NOT NULL,
  `sh_left_stu` int(11) NOT NULL,
  `sch_student_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_uid` varchar(250) NOT NULL,
  `s_first_name` varchar(50) NOT NULL,
  `s_last_name` varchar(50) NOT NULL,
  `s_email` varchar(150) NOT NULL,
  `s_phone` int(11) NOT NULL,
  `s_doj` datetime NOT NULL,
  `s_dob` datetime NOT NULL,
  `s_designation` varchar(50) NOT NULL,
  `s_holiday` int(11) NOT NULL,
  `s_salary` float NOT NULL,
  `s_security` text NOT NULL,
  `s_address` text NOT NULL,
  `s_city` text NOT NULL,
  `s_zip` int(11) NOT NULL,
  `s_date` datetime NOT NULL,
  `created_by` varchar(250) NOT NULL,
  `s_status` int(11) NOT NULL,
  `attachment_id` varchar(250) NOT NULL,
  `s_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `staff_uid`, `s_first_name`, `s_last_name`, `s_email`, `s_phone`, `s_doj`, `s_dob`, `s_designation`, `s_holiday`, `s_salary`, `s_security`, `s_address`, `s_city`, `s_zip`, `s_date`, `created_by`, `s_status`, `attachment_id`, `s_info`) VALUES
(1, '3f20980d-67be-11ec-9512-3c7c3f5b04d2', 'kawal', 'singh', 'kawaljit2191@gmail.com', 1234567890, '2021-12-28 10:24:16', '2021-12-28 10:24:16', '2', 6, 35000, '', '', '', 0, '0000-00-00 00:00:00', '', 0, 'f9c311b7-736b-11ec-96ee-3c7c3f5b04d2', ''),
(2, '828b15da-fb86-11ec-b68b-3c7c3f5b04d2', 'Rohit', 'saini', 'rohit@gmail.com', 1234567890, '2022-08-05 00:00:00', '1996-06-05 00:00:00', '1', 5, 50000, 'NO', 'ASR,punjab', 'ASR', 1430, '0000-00-00 00:00:00', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `st_id` int(11) NOT NULL,
  `st_uid` varchar(250) NOT NULL,
  `st_item` varchar(150) NOT NULL,
  `st_quantity` int(11) NOT NULL,
  `st_created_by` varchar(250) NOT NULL,
  `st_active` int(11) NOT NULL DEFAULT 1,
  `st_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stu_uid` varchar(150) NOT NULL,
  `stu_fname` varchar(50) NOT NULL,
  `stu_lname` varchar(50) NOT NULL,
  `stu_email` varchar(250) NOT NULL,
  `stu_phone_a` varchar(15) NOT NULL,
  `stu_phone_b` varchar(11) NOT NULL,
  `stu_quali` varchar(150) NOT NULL,
  `stu_study` varchar(150) NOT NULL,
  `stu_gender` varchar(11) NOT NULL,
  `stu_DOB` date NOT NULL,
  `stu_interest` int(11) NOT NULL,
  `stu_assign_to` varchar(250) NOT NULL,
  `stu_city` varchar(250) NOT NULL,
  `stu_state` varchar(250) NOT NULL,
  `stu_zip` int(11) NOT NULL,
  `stu_address` text NOT NULL,
  `stu_create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `stu_created_by` varchar(250) NOT NULL,
  `stu_status` int(11) NOT NULL DEFAULT 1,
  `stu_notif` varchar(250) NOT NULL,
  `attachment_id` varchar(250) NOT NULL DEFAULT 'd8f49eae-67c8-11ec-9512-3c7c3f5b04d2',
  `stu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stu_uid`, `stu_fname`, `stu_lname`, `stu_email`, `stu_phone_a`, `stu_phone_b`, `stu_quali`, `stu_study`, `stu_gender`, `stu_DOB`, `stu_interest`, `stu_assign_to`, `stu_city`, `stu_state`, `stu_zip`, `stu_address`, `stu_create_date`, `stu_created_by`, `stu_status`, `stu_notif`, `attachment_id`, `stu_id`) VALUES
('f6541ef0-2239-11ed-b355-3c7c3f5b04d2', 'Kawaljit', 'singh', 'kawal@gmail.com', '123456789', '9876543210', '10', 'btech', 'Male', '1991-09-23', 3, '828b15da-fb86-11ec-b68b-3c7c3f5b04d2', 'asr', '...', 143001, 'Address', '2022-08-22 22:16:25', '3f20980d-67be-11ec-9512-3c7c3f5b04d2', 0, '', 'd8f49eae-67c8-11ec-9512-3c7c3f5b04d2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_system_config`
--

CREATE TABLE `tbl_system_config` (
  `sc_id` int(11) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `sc_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_system_config`
--

INSERT INTO `tbl_system_config` (`sc_id`, `sc_name`, `sc_type`) VALUES
(1, 'Teacher', 1),
(2, 'Counselor', 1),
(3, 'Course', 2),
(4, 'Study Visa', 2),
(5, 'One', 3),
(6, 'Two', 3),
(7, 'Three', 3),
(8, 'Four', 3),
(9, '10th', 4),
(10, '12th', 4),
(11, 'Diploma', 4),
(12, 'Graduation', 4),
(13, 'Post Graduation', 4),
(14, 'Mon', 5),
(15, 'Tue', 5),
(16, 'wed', 5),
(17, 'thur', 5),
(18, 'fri', 5),
(19, 'sat', 5),
(20, 'Cash', 7),
(21, 'UPI', 7),
(22, 'Cheque', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visa`
--

CREATE TABLE `tbl_visa` (
  `visa_uuid` varchar(250) NOT NULL,
  `visa_stu_uid` varchar(250) NOT NULL,
  `visa_int` varchar(50) NOT NULL,
  `visa_city` varchar(200) NOT NULL,
  `visa_study` varchar(250) NOT NULL,
  `visa_created_by` varchar(250) NOT NULL,
  `visa_date` datetime NOT NULL DEFAULT current_timestamp(),
  `visa_status` int(11) NOT NULL DEFAULT 1,
  `visa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prime_login`
--
ALTER TABLE `prime_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  ADD PRIMARY KEY (`attach_id`);

--
-- Indexes for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  ADD PRIMARY KEY (`bt_id`);

--
-- Indexes for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `tbl_course_select`
--
ALTER TABLE `tbl_course_select`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  ADD PRIMARY KEY (`due_id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`eq_id`);

--
-- Indexes for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `tbl_logbook`
--
ALTER TABLE `tbl_logbook`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`noti_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `tbl_system_config`
--
ALTER TABLE `tbl_system_config`
  ADD UNIQUE KEY `sc_id` (`sc_id`);

--
-- Indexes for table `tbl_visa`
--
ALTER TABLE `tbl_visa`
  ADD PRIMARY KEY (`visa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attachment`
--
ALTER TABLE `tbl_attachment`
  MODIFY `attach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_batch`
--
ALTER TABLE `tbl_batch`
  MODIFY `bt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_courses`
--
ALTER TABLE `tbl_courses`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_duration`
--
ALTER TABLE `tbl_duration`
  MODIFY `due_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_enrollment`
--
ALTER TABLE `tbl_enrollment`
  MODIFY `en_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_logbook`
--
ALTER TABLE `tbl_logbook`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `sch_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_system_config`
--
ALTER TABLE `tbl_system_config`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_visa`
--
ALTER TABLE `tbl_visa`
  MODIFY `visa_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
