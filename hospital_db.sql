-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 09:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `patient_id` varchar(200) NOT NULL,
  `Patient_name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone_no` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Disease_type` varchar(200) NOT NULL,
  `apointment_date` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Ref_doctor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`patient_id`, `Patient_name`, `Email`, `Phone_no`, `Gender`, `Disease_type`, `apointment_date`, `Address`, `Ref_doctor`) VALUES
('', '', '', '', 'male', '', '', '', ''),
('453453', 'hhhhh', 'nahoid@gmail', '983928928938', 'male', 'pain', '2018-07-10', 'ggg', 'Dr. nishat'),
('787899', 'jhjhjhk', 'nahoid@gmail', '983928928938', 'male', 'pain', '2018-07-03', 'fjgfjdsgjfgsdjgfgdsgfhdsgfhgdsgfdshgfdshg', 'Dr. nahid'),
('c-12345', 'nahid', 'nahid@gmail.com', '01872700022', 'male', 'fever', '12-10-18', 'kathalbagan dahka', 'Dr. Nahid '),
('ss111', 'nahid', 'nahoid@gmail', '79809809', 'male', 'pain', '2018-07-25', 'ttt', 'Dr. nahid');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_name` varchar(200) NOT NULL,
  `Phone` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `consultant` varchar(200) NOT NULL,
  `degree` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_name` varchar(200) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dateofbirth` date DEFAULT NULL,
  `disease_type` varchar(200) NOT NULL,
  `Apointment_date` date NOT NULL,
  `messege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_name`, `phone`, `email`, `password`, `dateofbirth`, `disease_type`, `Apointment_date`, `messege`) VALUES
('nahiduddin', 1872700022, 'nahiduddinahammed22@gmail.com', 'asdfghjkl', '0000-00-00', 'fever', '2012-07-18', 'dbkjsdasjddkjaskjdaskjdkjkjnkjnd8uqwndunahygndrndjyrnjnduuernkj'),
('mustafa tanim', 1733456298, 'raju@gmail.com', '123456', '0000-00-00', 'pain', '2012-07-18', 'ftfthffygyjfgjghfhfghfghfghfghfhfghfghfghfhfghfghfhgfghfghfghfghfhfghf'),
('shovu', 183783787, 'shovu@gmail.com', 'qwertyy', '0000-00-00', 'bones', '2008-12-08', 'jkjkjjknjnbvvcgfxfcbv');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `F_name` varchar(200) NOT NULL,
  `L_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`F_name`, `L_name`, `email`, `password`) VALUES
('Nahid', 'Uddin', 'nahid@gmail.com', '123456'),
('tanim', 'uddin', 'tanim@gmail.com', '123456789'),
('tanjir', 'chow', 'tanjir@gmail.com', 'asdf'),
('raju', 'khan', 'raju@gail.com', '1234567890'),
('Nahid', 'Uddin Ahammed', 'nahiduddinahammed22@gmail.com', 'Nahiduddin080898'),
('nishat', 'ara tania', 'nishat@gmail.com', '123456'),
('asa', 'valobasha', 'asa@gmail.com', 'mitufriend'),
('mitu ', 'moushumi', 'mitu_12@gmail.com', 'qazwsxedc'),
('pagol', 'chagol', 'pagol@gmail.com', 'pagolchagol'),
('sahruk ', 'khan', 'khan@gmail.com', 'okmijn'),
('nahid', 'ahammed', 'nahid12@gmail.com', 'qazwsx'),
('Akif ', 'nowshad', 'akif@gmail.com', 'qazwsxedc'),
('mutafa', 'tanim', 'mustafatanim59@gmail.com', '12300'),
('JOGODIS', 'CHANDRO', 'jogdis@gmail.com', 'joy'),
('joy', 'das', 'dasjoy@gmail.com', '12345'),
('joy', 'das', 'joy@gmail.com', '12345'),
('nahid ', 'uddin', 'na@gmail.com', 'qaz'),
('kjnm', 'mm', 'dg@gmai.com', '123'),
('newaz', 'sarif', 'newaz@gmail.com', 'naz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`patient_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
