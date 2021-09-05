-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 05:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanic_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'Ernest Brooks', 'ernest@yahoo.com', '01256477892', ' Hey, can you please include a slider for all the reviews?'),
(3, 'Laura Martinez', 'laura@gmail.com', '01546889795', 'The account of \"Luxe Cars\" looks a bit fishy to me. Can you please have a look? Thank you.'),
(4, 'Patrick Rivera', 'patrick@gmail.com', '01986575643', 'How you guys doing?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`) VALUES
(2, 'Ernest Brooks', 'Great service. Really helps to find good mechanics.'),
(3, 'David Nelson', 'This is certainly a good beginning. Needs a lot of work to be done.'),
(4, 'Cheryl James', 'Good going guys.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'admin', 'admin@admin.com', 'Admin@123', 'admin'),
(8, 'Ernest Brooks', 'ernest@yahoo.com', 'Ernest@123', ''),
(9, 'Cheryl James', 'james@hotmail.com', 'James@231', ''),
(10, 'David Nelson', 'david@gmail.com', 'David@435', ''),
(11, 'Laura Martinez', 'laura@gmail.com', 'Martinez!123', ''),
(12, 'Patrick Rivera', 'patrick@gmail.com', 'Patrick@987', ''),
(13, 'Wanda Gonzalez', 'wanda@gmail.com', 'Wanda@876', '');

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE `mechanics` (
  `id` int(11) NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `garageName` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `operatingHours` varchar(20) NOT NULL,
  `speciality` varchar(500) NOT NULL,
  `home_services` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanics`
--

INSERT INTO `mechanics` (`id`, `ownerName`, `garageName`, `email`, `phone`, `address`, `operatingHours`, `speciality`, `home_services`) VALUES
(9, 'Ernest Brooks', 'Brand New Auto', 'ernest@yahoo.com', '01235698756', 'Mirpur-1', '9 AM to 7 PM', 'oil change, oil filter change, battery change and brake service.', 'oil change, oil filter change, battery change and brake service.'),
(10, 'Adam Lee', 'Under the Hood', 'adam@gmail.com', '01789564461', 'Uttara', '9 AM to 11 PM', 'Engine and transmission repair and replacement, ECU flash, read codes and fixes them.', 'ECU flash, read codes'),
(11, 'Alan Parker', 'Quick Fix Garage', 'alan@gmail.com', '01566448485', 'Badda', '8 AM to 9 PM', 'All types of basic servicing.', 'We are not offering any home service as of yet. But stay tuned!'),
(12, 'Jeremy Rodriguez', 'The VIP Garage Treatment', 'jeremy@gmail.com', '01478945565', 'Bashundhara', '10 AM to 6 PM', 'All types of services for luxury and imported cars. Dent repair, oil change, painting, etc.. To more, please contact us.', 'Basic servicing like brake servicing, oil change, filter change.'),
(13, 'Renaldo Finley', 'Collision Erasers', 'finley@yahoo.com', '01235545645', 'Motijheel', '8 AM to 9 PM', 'Dent repair, body panel replacement, painting, buffing.', 'Buffing');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `shopName` varchar(500) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `rating` int(2) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `shopName`, `experience`, `rating`, `author`) VALUES
(9, 'Brand New Auto', 'Their service was really good but, there is room for improvement', 8, 'ernest@yahoo.com'),
(10, 'Under the Hood', 'Average. Most of the times, they don\'t even know what they are doing.', 6, 'james@hotmail.com'),
(11, 'The VIP Garage Treatment', 'Would highly recommend this auto shop! He was very professional, very helpful & had great prices. Will definitely come back', 9, 'david@gmail.com'),
(12, 'Collision Erasers', 'I\'ve been using this mechanic shop for over 8 years. He is very knowledgeable, trustworthy, fair, and clear. He has experience in many makes. Highly recommend without reservation.', 10, 'laura@gmail.com'),
(13, 'Brand New Auto', 'My car needed a new fuel pump. Took my car in and had the repairs done in the same day. Didn’t have issues and the car has been working fine.', 9, 'wanda@gmail.com'),
(14, 'Collision Erasers', 'Solid service. These guys are knowledgeable and professional. I will definitely come back with my Highlander', 10, 'patrick@gmail.com'),
(15, 'Under the Hood', 'Very professional , quick, and took care of my car needs, prices are also reasonable.', 9, 'david@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mechanics`
--
ALTER TABLE `mechanics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
