-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 11:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stp-task`
--

-- --------------------------------------------------------

--
-- Table structure for table `memember`
--

CREATE TABLE `memember` (
  `NAME` varchar(30) DEFAULT NULL,
  `COMMITTEE` varchar(30) DEFAULT NULL,
  `PHONE` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASWORD` varchar(100) DEFAULT NULL,
  `IMAGE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `memember`
--

INSERT INTO `memember` (`NAME`, `COMMITTEE`, `PHONE`, `EMAIL`, `PASWORD`, `IMAGE`) VALUES
('raghad khaled', 'Freelancing', '01110446420', 'raghad.khadra00@eng-st.cu.edu.eg', '$2y$10$VpqSZldaOzFctpbHQh1FHOXW8MT/URTeaQMht3Ck0ZosUiIvpO6tK', 'pla'),
('raghad khale', 'Software', '01110446420', 'raghad.khadra00@eng-st.cu', '$2y$10$J3pBijTOCDMZQbVcnIG4V.X0v/UEZ0U4dy7.hi.IWS1nTklZfyVCC', ''),
('ragh', 'Software', '01110446420', 'raghad.khadra00@eng-st.com', '$2y$10$QYBMl3sOWat2NJAD5z6EM.8qPpGJGSFqrmg1414aBaI0Gtkj3PJL.', 'hqdefault.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
