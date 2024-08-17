-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 08:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

CREATE TABLE `owner_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner_details`
--

INSERT INTO `owner_details` (`id`, `full_name`, `dob`, `nic`, `email`, `address`, `phone_number`, `username`, `status`, `password`, `profile_picture`, `created_at`) VALUES
(4, 'Awishka Isuru', '2024-05-01', '2003', 'awishka@gmail.com', 'kegalle', '0772442599', 'awishka', 1, '123', NULL, '2024-05-17 14:18:40'),
(5, 'Tharuka marasingha', '2024-05-10', '146254664327', 'tharuka@gmail.com', 'fhfhafg', '0701224436', 'tharuka', 0, '12345', NULL, '2024-05-17 23:21:29'),
(8, 'avishka dananjaya', '2002-04-12', '200210300500', 'avishka@gmail.com', 'mawana,mawanella', '0712458965', 'avishka', 0, '65412', NULL, '2024-05-21 18:34:26'),
(9, 'vanidu hasaranga', '1993-12-31', '1996235489', 'vanidu@gmail.com', 'no 7,colombo', '0712458966', 'vanidu', 0, '78945', NULL, '2024-05-21 19:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `route_details`
--

CREATE TABLE `route_details` (
  `id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `route_number` varchar(255) NOT NULL,
  `bus_number` varchar(255) NOT NULL,
  `bus_owner_name` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `bus_stops` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `start_venue` varchar(255) NOT NULL,
  `stop_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `route_details`
--

INSERT INTO `route_details` (`id`, `route`, `route_number`, `bus_number`, `bus_owner_name`, `distance`, `bus_stops`, `start_time`, `start_venue`, `stop_time`) VALUES
(12, 'mawanella-kegalle', '100', 'NM-5632', 'Tharuka', '15', 'Kegalle', '06:20', 'Mawanella', '07:10'),
(13, 'kegalle-mawanella', '100', 'VC-8659', 'Tharuka', '15', 'Mawanella', '07:30', 'Kegalle', '08:10'),
(17, 'kegalle-mawanella', '100', 'NM-5632', 'Tharuka', '15', 'Mawanella', '10:00', 'Kegalle', '10:50'),
(18, 'mawanella-kegalle', '100', 'VC-8659', 'Tharuka', '15', 'Kegalle', '15:00', 'Mawanella', '15:50'),
(20, 'kegalle-kandy', '101', 'NK-7894', 'avishka', '42', 'Kandy', '08:00', 'Kegalle', '09:30'),
(21, 'Kandy-kegalle', '101', 'VB-8512', 'avishka', '42', 'Kegalle', '12:00', 'Kandy', '13:30'),
(22, 'kegalle-kandy', '101', 'NK-7894', 'avishka', '42', 'Kandy', '15:00', 'Kegalle', '16:30'),
(25, 'Kandy-kegalle', '101', 'VB-8512', 'avishka', '42', 'Kegalle', '17:00', 'Kandy', '18:30'),
(26, 'Kandy-Colombo', '102', 'AV-5642', 'Tharuka', '120', 'Colombo', '04:00', 'Kandy', '07:00'),
(27, 'colombo-kandy', '102', 'WY-7895', 'Tharuka', '120', 'kandy', '09:00', 'colombo', '12:00'),
(28, 'Kandy-Colombo', '102', 'AV-5642', 'Tharuka', '120', 'Colombo', '13:00', 'Kandy', '15:00'),
(29, 'colombo-kandy', '102', 'WY-7895', 'Tharuka', '120', 'Kandy', '16:00', 'Colombo', '19:00'),
(30, 'kegalle-galigamuva', '103', 'KN-6253', 'avishka', '10', 'Galigamuwa', '07:00', 'Kegalle', '07:45'),
(31, 'kegalle-galigamuva', '103', 'DY-4875', 'avishka', '10', 'Kegalle', '08:00', 'Galigamuwa', '08:45'),
(32, 'kegalle-galigamuva', '103', 'KN-6253', 'avishka', '10', 'Galigamuwa', '14:00', 'Kegalle', '14:45'),
(33, 'kegalle-galigamuva', '103', 'DY-4875', 'avishka', '10', 'Kegalle', '16:00', 'Galigamuwa', '16:45'),
(35, 'kandy-ja-ela', '104', 'IU-7584', 'vanidu', '96', 'Kandy', '04:00', 'Ja-ela', '06:30'),
(36, 'kandy-ja-ela', '104', 'HM-6985', 'vanidu', '96', 'Ja-ela', '08:00', 'Kandy', '10:30'),
(37, 'kandy-ja-ela', '104', 'IU-7584', 'vanidu', '96', 'Kandy', '11:00', 'Ja-ela', '01:30'),
(38, 'Kandy-kegalle', '104', 'HM-6985', 'vanidu', '96', 'Ja-ela', '17:00', 'Kandy', '19:30'),
(39, 'colombo-awissawella', '105', 'LF-6523', 'vanidu', '50', 'Awissawella', '05:00', 'Colombo', '07:00'),
(40, 'colombo-awissawella', '105', 'LO-4512', 'vanidu', '50', 'Colombo', '08:00', 'Awissawella', '10:00'),
(50, 'kegalle-bulathkohupitiya', '106', 'JK-8423', 'Tharuka', '35', 'Bulathkohupitiya', '05:00', 'Kegalle', '06:30'),
(51, 'kegalle-bulathkohupitiya', '106', 'DJ-9435', 'Tharuka', '35', 'Kegalle', '08:00', 'Bulathkohupitiya', '10:00'),
(52, 'Kegalle-Kurunegala', '100', 'NK-7894', 'lasith', '35', 'Kurunagala', '10:22', 'Kegalle', '01:25'),
(53, 'Kegalle-Kurunegala', '100', 'VB-8511', 'Tharuka', '30', 'Kurunagala', '10:29', 'Kegalle', '00:29'),
(54, 'Kegalla-Kurunegala', '100', 'WY-7895', 'Tharuka', '30', 'Kegalle', '00:32', 'Kurunagala', '02:32'),
(55, 'kegalle-kandy', '101', 'NK-7898', 'Tharuka', '40', 'Kandy', '10:35', 'Kegalle', '01:33'),
(56, 'kegalle-kandy', '101', 'VB-8516', 'Tharuka', '40', 'Kegalle', '10:34', 'Kandy', '00:34'),
(57, 'kegalle-colombo', '102', 'AV-5642', 'Tharuka', '33', 'Colombo', '10:36', 'Kegalle', '00:36'),
(58, 'kegalle-colombo', '102', 'AV-5647', 'Tharuka', '33', 'Kegalle', '11:36', 'Colombo', '02:36'),
(59, 'Kegalle-Awissawella', '103', 'WY-7893', 'Tharuka', '34', 'Awissawella', '10:40', 'Kegalle', '00:40'),
(60, 'Kegalle-Awissawella', '104', 'NK-7891', 'Tharuka', '34', 'Kegalle', '11:39', 'Awissawella', '02:39'),
(61, 'kegalle-Negambo', '105', 'NK-7897', 'Tharuka', '29', 'Negombo', '10:42', 'Kegalle', '00:40'),
(62, 'kegalle-Negambo', '105', 'WY-7822', 'Tharuka', '29', 'Kegalle', '11:41', 'Negombo', '02:45'),
(63, 'kegalle-anuradhapura', '107', 'WY-7888', 'Tharuka', '30', 'Anuradhapura', '12:43', 'Kegalle', '14:43'),
(64, 'kegalle-anuradhapura', '107', 'NK-7877', 'Tharuka', '30', 'Kegalle', '10:44', 'Anuradhapura', '13:44'),
(65, 'kandy-kurunegala', '108', 'NK-7866', 'Tharuka', '30', 'Kurunagala', '10:47', 'kandy', '13:47'),
(66, 'kandy-kurunegala', '108', 'VB-8533', 'Tharuka', '30', 'Kandy', '10:47', 'Kurunagala', '12:50'),
(67, 'colombo-kurunegala', '109', 'NK-7833', 'Tharuka', '20', 'Kurunagala', '10:50', 'Colombo', '13:50'),
(68, 'colombo-kurunegala', '109', 'NK-7888', 'Tharuka', '30', 'Colombo', '10:51', 'Kurunagala', '12:54'),
(69, 'Kurunegala-Awissawella', '110', 'VB-8588', 'Tharuka', '30', 'Awissawella', '10:53', 'Kurunagala', '13:57'),
(70, 'Kurunegala-Awissawella', '110', 'WY-7811', 'Tharuka', '30', 'Kurunagala', '11:55', 'Awissawella', '14:56'),
(71, 'Kurunegala-Negambo', '111', 'NK-7822', 'Tharuka', '40', 'Negombo', '11:56', 'Kurunagala', '13:00'),
(72, 'Kurunegala-Negambo', '111', 'WY-7877', 'Tharuka', '40', 'Kurunagala', '06:56', 'Negombo', '09:56'),
(73, 'Kurunegala-Anuradhapura', '112', 'NK-7894', 'Tharuka', '50', 'Anuradhapura', '11:00', 'Kurunagala', '13:00'),
(74, 'Kurunegala-Anuradhapura', '112', 'KN-6258', 'Tharuka', '50', 'Kurunagala', '11:00', 'Anuradhapura', '13:00'),
(75, 'Kandy-Mawanella', '113', 'WY-7895', 'avishka', '35', 'Mawanella', '11:03', 'Kandy', '13:03'),
(76, 'Kandy-Colombo', '113', 'KN-5896', 'avishka', '120', 'Colombo', '04:00', 'Kandy', '08:00'),
(77, 'Colombo-Kandy', '113', 'GH-8974', 'avishka', '120', 'Kandy', '14:00', 'Colombo', '18:00'),
(78, 'Kandy-Mawanella', '114', 'UI-6325', 'avishka', '27', 'Mawanella', '10:00', 'Kandy', '10:44'),
(79, 'Mawanella-Kandy', '114', 'KH-1236', 'avishka', '27', 'Kandy', '07:00', 'Mawanella', '07:45'),
(80, 'Kandy-Awissawella', '115', 'MN-7894', 'avishka', '85', 'Awissawella', '05:00', 'Kandy', ''),
(81, 'Awissawella-Kandy', '115', 'KJ-7845', 'avishka', '85', 'Kandy', '10:00', 'Awissawella', '13:00'),
(82, 'Kandy-Negambo', '116', 'CV-6932', 'avishka', '118', 'Negombo', '04:30', 'Kandy', '07:00'),
(83, 'Negambo-Kandy', '116', 'LJ-6523', 'avishka', '118', 'Kandy', '11:30', 'Negombo', '14:00'),
(84, 'Kandy-Anuradhapura', '117', 'GH-0235', 'avishka', '140', 'Anuradhapura', '04:00', 'Kandy', '08:30'),
(85, 'Anuradhapura-Kandy', '117', 'OJ-9678', 'avishka', '140', 'Kandy', '14:00', 'Anuradhapura', '18:30'),
(86, 'Kandy-Bulathkohupitiya', '118', 'BN-3146', 'avishka', '47', 'Bulathkohupitiya', '11:00', 'Kandy', '14:30'),
(87, 'Bulathkohupitiya-Kandy', '118', 'FD-3278', 'avishka', '47', 'Kandy', '05:00', 'Bulathkohupitiya', '08:30'),
(88, 'Colombo-Mawanella', '119', 'AD-6341', 'vanidu', '96', 'Mawanella', '12:00', 'Colombo', '15:00'),
(89, 'Mawanella-Colombo', '119', 'ZX-7896', 'vanidu', '96', 'Colombo', '08:00', 'Mawanella', '12:00'),
(90, 'Colombo-Awissawella', '120', 'QU-9346', 'vanidu', '78', 'Awissawella', '14:00', 'Colombo', '16:00'),
(91, 'Awissawella-Colombo', '120', 'EM-7946', 'vanidu', '78', 'Colombo', '05:00', 'Awissawella', '07:00'),
(92, 'Colombo-Negambo', '121', 'QA-4796', 'vanidu', '40', 'Negombo', '05:00', 'Colombo', '08:00'),
(93, 'Negambo-Colombo', '121', 'KO-7958', 'vanidu', '40', 'Colombo', '11:00', 'Negombo', '12:00'),
(94, 'Colombo-Anuradhapura', '122', 'AD-9327', 'vanidu', '250', 'Anuradhapura', '04:00', 'Colombo', '12:00'),
(95, 'Anuradhapura-Colombo', '122', 'DF-8624', 'vanidu', '250', 'Colombo', '04:00', 'Anuradhapura', '00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `usersEmail` varchar(255) NOT NULL,
  `usersUid` varchar(32) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `status`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(5, 'ravi', 0, 'ravi@gmail.com', '', '$2y$10$UL0/gkOFxJ9Bp1F0DjSJ3uQsr/xnmHQ9lNy3Aa16hZfNGz40OvQKK'),
(6, 'dila', 0, 'dila@gmail.com', '', '$2y$10$X.zAwiY6wQf4qUXyWuB5DuOdtKnFbF1sk/ZqSGaFsK4BDOkbaszKO'),
(7, 'awishka', 1, 'avi@gmail.com', '', '$2y$10$mDsmTthXMXzhrOrbqGPn0.wQH2C/kDyyg10VuY7fSJ22j/rWXQ6Hi'),
(8, 'laksri', 0, 'laksri@gmail.com', '', '$2y$10$.I1252FrhrAPyQjHWTvYg.hpFjm0x4NlFq31BBL.fduMIgzazv4aW'),
(9, 'isuru', 0, 'isuru@gmail.com', '', '$2y$10$u4sDFUgvMOGOdLOO1k7bjOnpIfc8n/Neo3UUF0EhKfT2b9YgJbJBm'),
(10, 'dimuthx353', 0, 'dimuthx353@gmail.com', '', '$2y$10$jH2xgeRzs3i/IoeFvPZf4u3drEiM4c8ReRJoXbTeE4nAI/XWEhmRK'),
(11, 'Dimuth', 0, 'dimuthmi9@gmail.com', '', '$2y$10$1PXh2JxtmTfD01q8Pgx5nOGfaKKDgLFKkkXSBRZvVqTIW0y0bbhMS'),
(12, 'maduka', 0, 'maduka@gmail.com', '', '$2y$10$Mcwm3XrlgqvyAZEePCEkaevoAhLhBnQpVYnRZYofWHLipzIbGWo4W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner_details`
--
ALTER TABLE `owner_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_details`
--
ALTER TABLE `route_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_details`
--
ALTER TABLE `owner_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `route_details`
--
ALTER TABLE `route_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
