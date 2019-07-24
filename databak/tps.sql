-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 11:41 AM
-- Server version: 10.3.16-MariaDB
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
-- Database: `tps`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `u_id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`u_id`, `FirstName`, `LastName`, `u_email`, `password`) VALUES
(2, 'Aakash ', 'Maharjan', 'aakash@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'bilmola', 'bilmola', 'bilmola@gmail.com', '90823ee4ebf096975925e882df86bf25');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `Hotel_NAME` varchar(255) NOT NULL,
  `Hote_contact` varchar(255) NOT NULL,
  `Hotel_address` varchar(255) NOT NULL,
  `HotelPrice` varchar(255) NOT NULL,
  `Hotel_insight` varchar(255) NOT NULL,
  `Hotel_CITY` varchar(255) NOT NULL,
  `hotellink` varchar(255) NOT NULL,
  `picupload` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `Hotel_NAME`, `Hote_contact`, `Hotel_address`, `HotelPrice`, `Hotel_insight`, `Hotel_CITY`, `hotellink`, `picupload`) VALUES
(1, 'Landmark Pokhara', '12345678', 'lakeside', '1000', 'Left from the statue of Gautam Buddha', 'Pokhara', 'https://www.landmarkpokhara.com/', 'images/hotel-6.jpg'),
(3, 'Marriott', '12345', 'kamalpokhari', '1500', 'Near kamalpokhari', 'Kathmandu', 'https://www.marriott.com/hotels/travel/ktmmc-kathmandu-marriott-hotel/', 'images/hotel-3.jpg'),
(5, 'Radison', '5658955', 'Lazimpat', '2000', 'left from tabletennis court', 'Lalitpur', 'https://www.radisson.com/kathmandu-hotel-np/nepkathm', 'images/hotel-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
