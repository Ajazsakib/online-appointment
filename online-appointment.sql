-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2020 at 02:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `admi_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_dept` varchar(255) NOT NULL,
  `admin_dob` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admi_name`, `admin_username`, `admin_contact`, `admin_dept`, `admin_dob`, `admin_password`) VALUES
(500, 'admin', 'admin', '9044708056', 'All', '01-01-1990', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_registration`
--

CREATE TABLE `doctor_registration` (
  `doctor_name` varchar(255) NOT NULL,
  `doctor_username` varchar(255) NOT NULL,
  `doctor_contact` varchar(255) NOT NULL,
  `doctor_dob` varchar(255) NOT NULL,
  `doctor_dept` varchar(255) NOT NULL,
  `docto_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_registration`
--

INSERT INTO `doctor_registration` (`doctor_name`, `doctor_username`, `doctor_contact`, `doctor_dob`, `doctor_dept`, `docto_password`) VALUES
('Saquib Ajaz', 'saquib', '9876543210', '19-12-1994', 'Ortho', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointment`
--

CREATE TABLE `patient_appointment` (
  `id` int(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointment1`
--

CREATE TABLE `patient_appointment1` (
  `id` int(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_contact` varchar(255) NOT NULL,
  `patient_dob` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `appointment_time` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_appointment1`
--

INSERT INTO `patient_appointment1` (`id`, `patient_name`, `patient_contact`, `patient_dob`, `department_name`, `doctor_name`, `appointment_date`, `appointment_time`, `status`) VALUES
(1000, 'Saquib Ajaz', '9911283141', '2020-02-05', 'eye', 'dr.eye', '2020-02-13', '16:00', 'Confirm'),
(1001, 'Shivesh pandey', '1234567890', '2020-02-18', 'eye', 'dr.eye', '2020-02-08', '15:00', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `patient_id` int(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `patient_password` varchar(255) NOT NULL,
  `patient_email` varchar(255) NOT NULL,
  `patient_dob` date NOT NULL,
  `patient_address` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `patient_contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`patient_id`, `patient_name`, `patient_password`, `patient_email`, `patient_dob`, `patient_address`, `username`, `patient_contact`) VALUES
(7, 'Saquib Ajaz', '12345', 'saquib@dkinfosolution.com', '2020-02-06', 'Lucknow', 'Saquib', '9911283141'),
(8, 'Shivesh pandey', '54321', 'saquib@dkinfosolution.com', '2005-02-08', 'Kanpur', 'shivesh', '1234567890'),
(9, 'shan mohammad', '', 'shan', '0000-00-00', '1222-12-12', 'agra', '9540353511'),
(10, 'Rashid', 'rashid', 'kamal', '0000-00-00', '2004-02-02', 'mau', '8687716600'),
(11, 'arman`', 'arman', 'arman', '0000-00-00', '1111-11-11', 'mumbai', '9044798056'),
(12, 'haris', 'haris', 'haris', '0000-00-00', '1994-12-19', 'mau', '9889763496');

-- --------------------------------------------------------

--
-- Table structure for table `user-details`
--

CREATE TABLE `user-details` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_appointment1`
--
ALTER TABLE `patient_appointment1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `user-details`
--
ALTER TABLE `user-details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_appointment1`
--
ALTER TABLE `patient_appointment1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `patient_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user-details`
--
ALTER TABLE `user-details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
