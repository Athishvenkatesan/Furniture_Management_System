-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2024 at 02:34 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `product_id` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `add1` varchar(500) NOT NULL,
  `add2` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `district` varchar(500) NOT NULL,
  `pincode` int(9) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `brand_name` varchar(500) NOT NULL,
  `prod_name` varchar(500) NOT NULL,
  `amount` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`product_id`, `name`, `gender`, `add1`, `add2`, `state`, `district`, `pincode`, `ph_no`, `mail`, `brand_name`, `prod_name`, `amount`) VALUES
('Z01', 'Rakul', 'Male', 'NO 52 MANJANAKARA STREET', 'MUTHAIAH PILLAI STREET', 'TAMILNADU', 'Madurai', 625001, '634219585', 'rakul@gmail.com', 'Zuari', 'Zuari furiniture', 55000),
('Z01', 'sudhan', 'Male', 'hbgdvfs', 'MAhal', 'TAMILNADU', 'Madurai', 625005, '987654327', 'sudhan@gmail.com', 'Zuari', 'Zuari furiniture', 55000),
('Z01', 'varsha', 'Female', 'NO 52 MANJANAKARA STREET', 'MUTHAIAH PILLAI STREET', 'TAMILNADU', 'Madurai', 625001, '9876543149', 'varsha@gmail.com', 'Zuari', 'Zuari furiniture', 55000),
('Z01', 'Venkat', 'Male', 'NO 52 MANJANAKARA STREET', 'MUTHAIAH PILLAI STREET', 'TAMILNADU', 'Madurai', 625001, '9585991686', 'venkat@gmail.com', 'Zuari', 'Zuari furiniture', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `conbook`
--

CREATE TABLE `conbook` (
  `product_id` varchar(500) NOT NULL,
  `cname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `add1` varchar(500) NOT NULL,
  `add2` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `district` varchar(500) NOT NULL,
  `pincode` int(9) NOT NULL,
  `ph_no` varchar(10) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `brand_name` varchar(500) NOT NULL,
  `prod_name` varchar(500) NOT NULL,
  `amount` varchar(9) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conbook`
--

INSERT INTO `conbook` (`product_id`, `cname`, `gender`, `add1`, `add2`, `state`, `district`, `pincode`, `ph_no`, `mail`, `brand_name`, `prod_name`, `amount`, `status`) VALUES
('Z01', 'Athish', 'Male', 'NO 52 MANJANAKARA STREET', 'MUTHAIAH PILLAI STREET', 'TAMILNADU', 'Madurai', 625001, '987654325', 'athish@gmail.com', 'Zuari', 'Zuari furiniture', '55000', 'confirmed'),
('Z01', 'sudhan', 'Male', 'hbgdvfs', 'MAhal', 'TAMILNADU', 'Madurai', 625005, '987654327', 'sudhan@gmail.com', 'Zuari', 'Zuari furiniture', '55000', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `brand_name` varchar(1000) NOT NULL,
  `product_id` varchar(1000) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `product_image` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`brand_name`, `product_id`, `product_name`, `product_image`, `url`, `price`) VALUES
('Zuari', 'Z01', 'Zuari furiniture', 'Zuari01.jpg', 'uploads/Zuari01.jpg', '55000');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(1000) NOT NULL,
  `staff_name` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `qualification` varchar(1000) NOT NULL,
  `salary` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `pass`, `qualification`, `salary`) VALUES
('COMB01', 'Rakul', '1234', 'B.sc Computer Science', '20000'),
('MDU01', 'Athish', '1234', 'B.sc Computer Science', '15000'),
('MDU02', 'Varsha', '1234', 'B.sc Computer Science', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(500) NOT NULL,
  `mail` varchar(1000) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `confirmpass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `ph_no` (`ph_no`);

--
-- Indexes for table `conbook`
--
ALTER TABLE `conbook`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
