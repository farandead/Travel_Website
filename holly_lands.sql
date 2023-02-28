-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 05:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holly_lands`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_data`
--

CREATE TABLE `booking_data` (
  `booking_id` int(255) NOT NULL,
  `booking_fname` text NOT NULL,
  `booking_lname` text NOT NULL,
  `booking_phone` int(11) NOT NULL,
  `booking_email` text NOT NULL,
  `booking_streetAddress` text NOT NULL,
  `booking_country` text NOT NULL,
  `booking_message` text NOT NULL,
  `booking_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_data`
--

INSERT INTO `booking_data` (`booking_id`, `booking_fname`, `booking_lname`, `booking_phone`, `booking_email`, `booking_streetAddress`, `booking_country`, `booking_message`, `booking_date`) VALUES
(1, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(2, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(3, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(4, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(5, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(6, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(7, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(8, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(9, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'fasdfas', '2023-02-21'),
(10, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'jkasdghjkASKLJDHKLJSDHFASDFASDF', '2023-02-21'),
(11, 'Faran', 'Zafar', 2147483647, 'farandeadz@gmail.com', 'Birmingham', 'United Kingdom', 'jkasdghjkASKLJDHKLJSDHFASDFASDF', '2023-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `package_id` int(11) NOT NULL,
  `package_title` text NOT NULL,
  `package_description` text NOT NULL,
  `package_type` text NOT NULL DEFAULT 'group',
  `package_main_points` text NOT NULL,
  `package_price` int(11) NOT NULL,
  `package_departure_date` date NOT NULL,
  `package_arrival_date` date NOT NULL,
  `package_destination` text NOT NULL,
  `package_main_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`package_id`, `package_title`, `package_description`, `package_type`, `package_main_points`, `package_price`, `package_departure_date`, `package_arrival_date`, `package_destination`, `package_main_img`) VALUES
(1, 'ASHURA FOR THE BELOVED', 'this is the small description of the package that is stored in the database the purpose of this description is to give the user an idea of what this package is about', 'group', 'Syria Visa,Transport Within Syria,Hotels full board,Dedicated Volunteers ', 1820, '2023-02-05', '2023-02-19', 'Makkah', 'package1.jpeg'),
(2, 'SHAM FOR THE BELOVED', '0this is the small description of the package that is stored in the database the purpose of this description is to give the user an idea of what this package is about', 'single', 'Syria Visa,Transport Within Syria,Hotels full board,Dedicated Volunteers ', 1000, '2023-02-09', '2023-02-28', 'Madina', 'package2.jpeg'),
(3, 'MAKKAH FOR THE BELOVED', 'this is the small description of the package that is stored in the database the purpose of this description is to give the user an idea of what this package is about', 'single', 'Syria Visa,Transport Within Syria,Hotels full board,Dedicated Volunteers  ', 1500, '2023-02-09', '2023-02-28', 'MAKKAH', 'package3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `review_name` text NOT NULL,
  `review_email` text NOT NULL,
  `review_feedback` text NOT NULL,
  `review_star_value` int(5) NOT NULL DEFAULT 5,
  `review_status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_name`, `review_email`, `review_feedback`, `review_star_value`, `review_status`) VALUES
(1, 'Faran', 'farandeadz@gmail.com', 'asdfasdfasdf', 5, 1),
(2, 'Faran', 'farandeadz@gmail.com', 'asdfasdfasdf', 5, 1),
(3, 'Faran', 'farandeadz@gmail.com', 'asdfasdfasdf', 5, 1),
(4, 'Ammna', 'farandeadz@gmail.com', 'asdfasdfasdf', 5, 1),
(5, 'Sarah', 'farandeadz@gmail.com', 'asdfasdfasdf', 5, 1),
(6, 'Faran', 'farandeadz@gmail.com', 'Holly Land Travel Agency is a top-notch travel service provider that offers a wide range of travel options for its clients. From flights and hotels to car rentals and travel insurance, they have everything you need to plan the perfect trip.', 5, 1),
(7, 'Faran', 'farandeadz@gmail.com', 'One of the things that sets Holly Land apart from other travel agencies is their customer service. The staff is knowledgeable, friendly, and always available to answer any questions or concerns that you may have. They are always willing to go the extra mile to ensure that their clients have a stress-free and enjoyable travel experience.', 5, 1),
(8, 'Faran', 'farandeadz@gmail.com', 'One of the things that sets Holly Land apart from other travel agencies is their customer service. The staff is knowledgeable, friendly, and always available to answer any questions or concerns that you may have. They are always willing to go the extra mile to ensure that their clients have a stress-free and enjoyable travel experience.', 5, 0),
(9, 'Faran', 'farandeadz@gmail.com', 'One of the things that sets Holly Land apart from other travel agencies is their customer service. The staff is knowledgeable, friendly, and always available to answer any questions or concerns that you may have. They are always willing to go the extra mile to ensure that their clients have a stress-free and enjoyable travel experience.', 5, 1),
(10, 'Faran', 'farandeadz@gmail.com', 'One of the most impressive things about Holly Land is their commitment to sustainability. They offer eco-friendly travel options, such as green hotels and eco-friendly transportation, making it easy for travelers to reduce their carbon footprint while still enjoying all the comforts of a traditional vacation.  Overall, I highly recommend Holly Land Travel Agency to anyone looking to plan a trip. Their exceptional customer service, user-friendly website, and commitment to sustainability make them the perfect choice for your next vacation. Whether you are planning a family vacation, a romantic getaway, or a business trip, Holly Land has got you covered.', 5, 0),
(11, 'Faran', 'farandeadz@gmail.com', 'One of the most impressive things about Holly Land is their commitment to sustainability. They offer eco-friendly travel options, such as green hotels and eco-friendly transportation, making it easy for travelers to reduce their carbon footprint while still enjoying all the comforts of a traditional vacation.  Overall, I highly recommend Holly Land Travel Agency to anyone looking to plan a trip. Their exceptional customer service, user-friendly website, and commitment to sustainability make them the perfect choice for your next vacation. Whether you are planning a family vacation, a romantic getaway, or a business trip, Holly Land has got you covered.', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_data`
--
ALTER TABLE `booking_data`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_data`
--
ALTER TABLE `booking_data`
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
