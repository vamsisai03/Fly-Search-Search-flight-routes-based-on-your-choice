-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 07:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `password`, `fullname`, `email`, `phoneno`, `gender`) VALUES
('aditya', 'Welcome@1', 'Aditya ', 'ddadasd@gmail.com', '9671961462', 'male'),
('Vamsi', 'Vamsi@03', 'Vamsi Sai', 'vamsisaibommisetty@gmail.com', '9731961462', 'male'),
('Chandan', 'Chandan@02', 'Naga Chandan', 'naga@gmail.com', '7890123457', 'male'),
('Tarun', 'Tarun123', 'KANAKALA TARUN KUMAR', 'kanakalatarunkumar0212@gmail.com', '8688679435', 'male'),
('Ram', 'Ram@1234', 'Ram Charan', 'ram@gmail.com', '8686868667', 'male'),
('Rishik', 'Rishik@12', 'Rishik Kumar', 'rishik@gmail.com', '6576555575', 'male'),
('Sai', 'Vishnu@02', 'Sai', 'Sai@gmail.com', '9656565651', 'male'),
('Vishnu', 'Vishnu@03', 'Vishnu', 'vishnu@gmail.com', '9731682312', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
