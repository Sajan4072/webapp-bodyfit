-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 03:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `body`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `image`) VALUES
(3, 'jit2', '202cb962ac59075b964b07152d234b70', 'images/im.jpg'),
(1, 'jit', 'ceb6c970658f31504a901b89dcd3e461', 'images/Capture.png'),
(4, 'Sajan', 'ceb6c970658f31504a901b89dcd3e461', 'images/Sajan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `postedby` varchar(255) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`name`, `location`, `website`, `price`, `description`, `image1`, `image2`, `image3`, `postedby`, `dates`, `aid`, `image4`, `tel`) VALUES
('web fitness center', 'sallaghari', 'webcenter@gmail.com', 1200, 'sssssssssssssssssssssssssssssssssswq', 'gym.jpg', 'gym.jpg', 'gym.jpg', 'jit', '2019-11-20', 2, 'gym.jpg', NULL),
('universal fitness center', 'sallaghari', 'website@gmail.com', 1500, '<br>', 'exercise-86200_1280.jpg', 'exercise-86200_1280.jpg', 'exercise-86200_1280.jpg', 'jit', '2019-11-20', 9, 'exercise-86200_1280.jpg', '9807590188'),
('Madhyapur Physical Fitness Club', 'thimi', 'website@gmail.com', 1500, 'aaaaaaaaaaa', 'cx.jpg', 'c (2).jpg', 'f.jpg', 'jit', '2019-11-20', 10, 'ss.jpg', '9807545188'),
('Indreni Fitness Center', 'baneshor', 'indreni@gmail.com', 1200, 'ssa', 'g (2).jpg', 'x (2).jpg', 'f.jpg', 'jit', '2019-11-20', 11, 'ss.jpg', '980157920'),
('Suasha Fitness Center', 'sallaghari', 'website@gmail.com', 1500, '<span style=\"color: rgba(0, 0, 0, 0.84); font-family: &quot;Minion Pro&quot;, serif; font-size: 22px; letter-spacing: -0.286px; text-align: justify;\">The first thing about where fitness starts is food. We should take nutritious food. Food rich in protein, vitamins, minerals, and carbohydrates is very essential. Protein is necessary for body growth. Carbohydrates provide the required energy in performing various tasks. Vitamin and minerals help in building bones and boosting our immune system.</span><br>', 'dumbbell-press-bench-man-workout-1109.jpg', 'young-adult-man-swinging-ropes-while-fitness-royalty-free-image-952755662-1566586488.jpg', 'download.jpg', 'jit', '2019-11-20', 13, 'Banner-Gym-Floor.jpg', '9807590188'),
('Devine Supernatural Power Fitness', 'kathmandu', 'devine@gmail.com', 1500, '<a class=\"C8TUKc itM3WU992dzI-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"itM3WU992dzI\" jsl=\"$x 2;\" data-cid=\"9893611144228932862\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMIvgEwDQ\" style=\"cursor: pointer; display: block; overflow: hidden; z-index: 2; color: rgba(0, 0, 0, 0.54); font-family: arial, sans-serif; background-color: rgb(250, 250, 250); padding-right: 0px;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;\">Devine Supernatural&nbsp;<wbr>Power Fitness</div></div></a>', '6180_55731_fitness-first-castle-hill-gym-fitness-our-castle-hill-gym-team-can-challenge-you-with-a-hiit_l.jpg', 'Correct-Small-Group-145094.jpg', 'GymWeights1.jpg', 'jit', '2019-11-20', 14, 'personal-training-768x512.jpg', '980157920'),
('Aryans fitness club', 'bhaktapur', 'webseb@gmail.com', 1800, '<a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"cursor: pointer; display: block; overflow: hidden; z-index: 2; color: rgba(0, 0, 0, 0.54); font-family: arial, sans-serif; background-color: rgb(250, 250, 250); padding-right: 0px;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;\">Aryans fitness club<a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a><a class=\"C8TUKc i01HPE1fowMc-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"i01HPE1fowMc\" jsl=\"$x 2;\" data-cid=\"6722394358299857989\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI1AEwDw\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Aryans fitness club</div></div></a></div></div></a>', 'young-adult-man-swinging-ropes-while-fitness-royalty-free-image-952755662-1566586488.jpg', 'rBVaVlwOaoqANt0bAANFfyHlgZ8137.jpg', 'personal-training-768x512.jpg', 'jit', '2019-11-20', 15, '180712-6-2000-fac-saigon-hotel.jpg.thumb.768.768.jpg', '9807590188'),
('Europa Fitness Center', 'dhulikhel', 'europa123@gmail.com', 1900, '<a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"cursor: pointer; display: block; overflow: hidden; z-index: 2; color: rgba(0, 0, 0, 0.54); font-family: arial, sans-serif; background-color: rgb(250, 250, 250); padding-right: 0px;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; text-decoration-line: underline;\">Europa Fitness Center<a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a><a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a><a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a><a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a><a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a><a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a><a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a><a class=\"C8TUKc ihlbB3Wn0uU4-6WH35iSZ2V0 rllt__link a-no-hover-decoration\" role=\"link\" tabindex=\"0\" jsaction=\"r.UQJvbqFUibg;\" data-rtid=\"ihlbB3Wn0uU4\" jsl=\"$x 2;\" data-cid=\"7787150984579133531\" data-ved=\"0ahUKEwi6lP2YrvnlAhXB7nMBHaYWA2EQyTMI3AEwEA\" style=\"color: rgba(0, 0, 0, 0.54); font-size: 13px; cursor: pointer; overflow: hidden; z-index: 2; padding-right: 0px; display: inline !important;\"><div class=\"cXedhc\" style=\"padding: 13px 0px 0px 16px; margin-left: -2px; margin-bottom: 13px; display: inline !important;\"><div class=\"dbg0pd\" aria-level=\"3\" role=\"heading\" style=\"color: rgb(34, 34, 34); font-size: 16px; padding-bottom: 1px; line-height: 20px; margin-bottom: -1px; overflow: hidden; text-overflow: ellipsis; display: inline !important;\">Europa Fitness Center</div></div></a></div></div></a>', 'GymWeights1.jpg', 'IMG_4901.jpg', 'close-up-kettlebells-with-woman-exercise-workout-gym-fitness-breaking-relax-after-sport_10307-971.jpg', 'jit', '2019-11-20', 16, 'Correct-Small-Group-145094.jpg', '985012647'),
('Aryan fitness center', 'baneshor', 'website@gmail.com', 1500, 'aryanfitness', 'photo-of-woman-in-boxing-gloves-1608099.jpg', 'c (2).jpg', 'flow.png', 'jit', '2019-11-21', 17, 'flow (5).jpg', '9807590188');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `category` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `pid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `orderby` varchar(255) DEFAULT NULL,
  `oid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`pid`, `name`, `image`, `price`, `orderby`, `oid`) VALUES
(16, 'barbel', 'barbell.jpg', 5000, 'jitbdrrana8@gmail.com', 1),
(7, 'kettelbelt', 'Kettlebell.jpg', 5000, 'jitbdrrana8@gmail.com', 2),
(7, 'kettelbelt', 'Kettlebell.jpg', 5000, 'jitbdrrana8@gmail.com', 3),
(18, 'dumbell', 'dumbell.jpg', 7000, 'jitbdrrana8@gmail.com', 4),
(16, 'barbel', 'barbell.jpg', 5000, 'jitbdrrana8@gmail.com', 5),
(23, 'vervor', 'vervor.jpg', 5000, 'jitbdrrana8@gmail.com', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders1`
--

CREATE TABLE `orders1` (
  `oid` int(11) NOT NULL,
  `orderby` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders1`
--

INSERT INTO `orders1` (`oid`, `orderby`, `pid`, `price`, `name`, `image`, `dates`) VALUES
(1, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', NULL),
(2, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', NULL),
(3, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', NULL),
(4, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(5, 'jitbdrrana8@gmail.com', 4, 2000, 'rope', 'rope.jpg', '2019-11-19'),
(6, 'jitbdrrana8@gmail.com', 5, 8000, 'incline bench press', 'inclinebenchpress.jpg', '2019-11-19'),
(7, 'jitbdrrana8@gmail.com', 5, 8000, 'incline bench press', 'inclinebenchpress.jpg', '2019-11-19'),
(8, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(9, 'jitbdrrana8@gmail.com', 1, 5000, 'dumbell', 'dumbel.jpg', '2019-11-19'),
(10, 'jitbdrrana8@gmail.com', 4, 2000, 'rope', 'rope.jpg', '2019-11-19'),
(11, 'jitbdrrana8@gmail.com', 4, 2000, 'rope', 'rope.jpg', '2019-11-19'),
(12, 'jitbdrrana8@gmail.com', 6, 15000, 'triceps rope', 'barbell.jpg', '2019-11-19'),
(14, 'jitbdrrana8@gmail.com', 5, 8000, 'incline bench press', 'inclinebenchpress.jpg', '2019-11-19'),
(15, 'jitbdrrana8@gmail.com', 5, 8000, 'incline bench press', 'inclinebenchpress.jpg', '2019-11-19'),
(16, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', NULL),
(17, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', NULL),
(18, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(19, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(20, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(21, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(22, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(23, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', NULL),
(24, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(25, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(26, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(27, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(28, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(29, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(30, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(31, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(32, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', NULL),
(33, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-19'),
(34, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-19'),
(35, 'jitbdrrana8@gmail.com', 4, 2000, 'rope', 'rope.jpg', '2019-11-19'),
(36, 'jitbdrrana8@gmail.com', 4, 2000, 'rope', 'rope.jpg', '2019-11-19'),
(37, 'jitbdrrana8@gmail.com', 4, 2000, 'rope', 'rope.jpg', '2019-11-19'),
(38, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(39, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(40, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(41, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(42, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(43, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(44, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(45, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(46, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(47, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(48, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(49, 'jitbdrrana8@gmail.com', 3, 7000, 'barbel', 'barbel.jpg', '2019-11-19'),
(50, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(51, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(52, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(53, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(54, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(55, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-19'),
(56, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(57, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(58, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(59, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(60, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(61, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(62, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(63, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(64, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(65, 'jitbdrrana8@gmail.com', 2, 15000, 'benchpress', 'benchpress.jpg', '2019-11-19'),
(66, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-21'),
(67, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-21'),
(68, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-21'),
(69, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-21'),
(70, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-21'),
(71, 'jitbdrrana8@gmail.com', 5, 8000, 'incline bench press', 'inclinebenchpress.jpg', '2019-11-21'),
(72, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-21'),
(73, 'jitbdrrana8@gmail.com', 7, 5000, 'kettelbelt', 'Kettlebell.jpg', '2019-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `productprice` int(11) NOT NULL,
  `productDescription` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `productcompany` varchar(255) NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `productavilability` varchar(255) DEFAULT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `productprice`, `productDescription`, `image`, `productcompany`, `admin`, `productavilability`, `dates`) VALUES
(5, 'incline bench press', 8000, 'brought from newroad', 'inclinebenchpress.jpg', 'abc', 'jit', 'In Stock', '2019-11-15'),
(7, 'kettelbelt', 5000, 'sasa', 'Kettlebell.jpg', 'abc', 'jit', 'In Stock', '2019-11-18'),
(16, 'barbel', 5000, 'brought from market', 'barbell.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(17, 'Cycling', 10000, 'brought from india', 'cycling.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(18, 'dumbell', 7000, 'brought from newroad kathmandu', 'dumbell.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(19, 'cycling', 15000, 'brought from newroad kathmandu<br>', 'download.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(20, 'pulldown', 5000, 'brought from newroad kathmandu', 'pulldown.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(21, 'maxiclimber', 15000, 'brought from newroad kathmandu', 'maxiclimber.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(22, 'triceps rope', 2000, 'brought from newroad kathmandu<br>', 'tricep-rope.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(23, 'vervor', 5000, 'brought from newroad kathmandu<br>', 'vervor.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(24, 'abdomin crunch', 5000, 'brought from newroad kathmandu<br>', 'abdominal-crunch-01.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(25, 'incline bench press', 5000, 'brought from newroad kathmandu<br>', 'incline bench press.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(26, 'kettelbelt', 5000, 'brought from newroad kathmandu<br>', 'kettle bell.jpeg', 'ddd', 'jit', 'In Stock', '2019-11-20'),
(27, 'treadmills', 15000, 'brought from newroad kathmandu<br>', 'tread mills.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(28, 'dumbel garage', 5000, 'brought from newroad kathmandu<br>', 'York_Fitness_Rubber_Hex_Dumbbell_Garage_Set.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(29, 'stack calf', 5000, 'brought from newroad kathmandu<br>', 'standing-single-stack-calf-raise-01.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(30, 'minidumbel', 5000, 'brought from newroad kathmandu<br>', 'minidumbel.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(31, 'protien', 15000, 'brought from newroad kathmandu<br>', 'proten.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(32, 'benchpress', 15000, 'brought from newroad kathmandu<br>', 'benchcline.jpg', 'abc', 'jit', 'In Stock', '2019-11-20'),
(33, 'pulldown', 15000, 'brought from newroad kathmandu<br>', 'pulldown.jpg', 'abc', 'jit', 'In Stock', '2019-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `s`
--

CREATE TABLE `s` (
  `pid` int(11) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s`
--

INSERT INTO `s` (`pid`, `user`) VALUES
(1, 'jitbdrrana8@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phon` int(11) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `Fname`, `email`, `phon`, `passwords`, `Lname`, `dates`) VALUES
(2, 'jitu', 'jitbdrrana8@gmail.com', 2147483647, 'ceb6c970658f31504a901b89dcd3e461', 'rana', '2019-11-17'),
(3, 'jeetu', 'jitbdrrana9@gmail.com', 2147483647, '87de1ffbece0e58a3d6ae9d0c454187a', 'rana', '2019-11-19'),
(4, 'BANGUR', 'UUU@GMAIL.COM', 2147483647, '955f6ca4bc3e78b31d5f97169c84cd81', 'RAI', '2019-11-21'),
(5, 'Sajan ', 'admin@aryan.com', 2147483647, '5f4dcc3b5aa765d61d8327deb882cf99', 'Rai', '2020-03-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders1`
--
ALTER TABLE `orders1`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders1`
--
ALTER TABLE `orders1`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
