-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 05:13 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `matrix_number` varchar(255) NOT NULL,
  `complaint_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `complaint`, `matrix_number`, `complaint_status`) VALUES
(1, 'aa', '', '0'),
(2, 'aimuni', '', '0'),
(3, 'alip', '', '0'),
(4, 'ee', '123', '0'),
(5, 'dd', '', '0'),
(6, 'kk', '', '0'),
(7, 'll', '', '0'),
(8, 'oo', '52213220153', '0'),
(9, 'yy', '52213220153', '0'),
(10, 'yy', '52213220153', '0'),
(11, 'text1eq', '52213220153', '0'),
(12, 'text1eq', '52213220153', '0'),
(13, 'text1eq', '52213220153', '0'),
(14, '12345', '52213220153', '0'),
(15, 'student testing', '123456', '0'),
(16, 'student testing', '123456', '0'),
(17, 'student testing', '123456', '0'),
(18, '123123', '123456', '0'),
(19, 'test in progress', '123456', 'In Progress'),
(20, 'test lect matrix', '52213220153', '0'),
(21, 'as', '3123456', 'In Progress');

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE `examiner` (
  `examiner_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lect_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `examiner`
--

INSERT INTO `examiner` (`examiner_id`, `user_id`, `lect_info_id`) VALUES
(1, 3, 1),
(2, 3, 1),
(3, 5, 2),
(4, 5, 2),
(5, 6, 1),
(6, 6, 1),
(7, 5, 1),
(8, 5, 1),
(9, 6, 2),
(10, 6, 2),
(11, 5, 3),
(12, 5, 3),
(13, 5, 3),
(14, 5, 3),
(15, 5, 3),
(16, 5, 1),
(17, 5, 1),
(18, 5, 1),
(19, 5, 1),
(20, 5, 1),
(21, 5, 4),
(22, 5, 3),
(23, 5, 2),
(24, 5, 4),
(25, 5, 4),
(26, 5, 4),
(27, 3, 1),
(28, 3, 1),
(29, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lect_info`
--

CREATE TABLE `lect_info` (
  `lect_id` int(100) NOT NULL,
  `lect_img` varchar(255) NOT NULL,
  `lect_name` varchar(255) NOT NULL,
  `lect_email` varchar(255) NOT NULL,
  `lect_matrixnum` varchar(20) DEFAULT NULL,
  `lect_num` int(15) NOT NULL,
  `lect_spec` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `lect_status` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lect_info`
--

INSERT INTO `lect_info` (`lect_id`, `lect_img`, `lect_name`, `lect_email`, `lect_matrixnum`, `lect_num`, `lect_spec`, `pass`, `role`, `lect_status`) VALUES
(1, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/zurina-scaled-e1609732688908-250x250.jpg', 'Zurina Kasim', 'zkas@uitm.edu.my', '52213220153', 49882825, 'Mathematics', '202cb962ac59075b964b07152d234b70', 1, '1'),
(2, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/abidah-scaled-e1609746988459-250x250.jpg', 'Ts. Dr. Abidah Hj Mat Taib', 'abidah@uitm.edu.my', NULL, 194741290, 'Computer Technology & Networking', '', 1, '1'),
(3, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/jasmani-scaled-e1609732750472-250x250.jpg', 'Jasmani Bidin', 'jasmani@uitm.edu.my', NULL, 49882740, 'Mathematics', '', 1, '1'),
(4, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/noorzila-scaled-e1609732796475-250x250.jpg', 'Noorzila Sharif', 'noorzila@uitm.edu.my', NULL, 49882809, 'Mathematics', '', 1, '1'),
(5, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/ku-azlina-scaled-e1609732877828-250x250.jpg', 'Ku Azlina Ku Akil', 'kuazlina@uitm.edu.my', NULL, 49882621, 'Mathematics', '', 1, '1'),
(6, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/rizauddin-scaled-e1609732956773-250x250.jpg', 'Assoc. Prof. Dr. Rizauddin Saian', 'rizauddin@uitm.edu.my', NULL, 49882770, 'Mathematics', '', 1, '1'),
(7, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/arzami-scaled-e1609745535986-250x250.jpg', 'Nor Arzami Othman', 'arzami@uitm.edu.my', NULL, 49882249, 'Information Technology', '', 1, '1'),
(8, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/zulfikri-scaled-e1609745577324-250x250.jpg', 'Dr. Zulfikri Paidi', 'fikri@uitm.edu.my', NULL, 49882843, 'Computer Technology & Networking', '', 1, '1'),
(9, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/rafiza-scaled-e1609745619789-250x250.jpg', 'Rafiza Ruslan', 'rafiza.ruslan@uitm.edu.my', NULL, 49882681, 'Computer Technology & Networking', '', 1, '1'),
(10, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/yusri-scaled-e1609745662961-250x250.jpg', 'Dr. Ahmad Yusri Dak', 'ahmadyusri@uitm.edu.my', NULL, 49882319, 'Computer Technology & Networking', '', 1, '1'),
(11, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nizam-scaled-e1609745707783-250x250.jpg', 'Mohd Nizam Osman', 'mohdnizam@uitm.edu.my', NULL, 49882613, 'Computer Science', '', 1, '1'),
(12, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/fhahriyah-scaled-e1609733120784-250x250.jpg', 'Sharifah Fhahriyah Syed Abas', 'sfhahriyah@uitm.edu.my', NULL, 49882892, 'Mathematics', '', 1, '1'),
(13, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/khairul-anwar-scaled-e1609745748375-250x250.jpg', 'Dr. Khairul Anwar Sedek', 'khairulanwar@uitm.edu.my', NULL, 194746960, 'Information Technology', '', 1, '1'),
(14, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/Norfiza-scaled-e1609745787661-250x250.jpg', 'Dr. Norfiza Ibrahim', 'norfiza@uitm.edu.my', NULL, 49882293, 'Information Technology', '', 1, '1'),
(15, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2003/02/mahfudzah2-250x250.jpg', 'Mahfudzah Othman', 'fudzah@uitm.edu.my', NULL, 49882262, 'Computer Science', '', 1, '1'),
(16, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/romiza-scaled-e1609746058815-250x250.jpg', 'Romiza Md. Nor', 'romiza@uitm.edu.my', NULL, 49882261, 'Information Technology', '', 1, '1'),
(17, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2004/01/nurzaid2-250x250.jpg', 'Nurzaid Muhd Zain', 'nurzaid@uitm.edu.my', NULL, 49882856, 'Computer Science', '', 1, '1'),
(18, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nadia-scaled-e1609746108928-250x250.jpg', 'Dr. Nadia Abdul Wahab', 'nadiawahab@uitm.edu.my', NULL, 49882265, 'Information Technology', '', 1, '1'),
(19, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/aznoora-scaled-e1609746141331-250x250.jpg', 'Dr. Aznoora Osman', 'aznoora@uitm.edu.my', NULL, 49882321, 'Information Technology', '', 1, '1'),
(20, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/najib-scaled-e1609734259459-250x250.jpg', 'Mohamad Najib Mohamad Fadzil', 'mohamadnajib@uitm.edu.my', NULL, 49882317, 'Mathematics', '', 1, '1'),
(21, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/syukor-scaled-e1609746939338-250x250.jpg', 'Assoc. Prof. Ts. Dr. Shukor Sanim Mohd Fauzi', 'shukorsanim@uitm.edu.my', NULL, 49882870, 'Information Technology', '', 1, '1'),
(22, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/norpah-scaled-e1609734306618-250x250.jpg', 'Norpah Mahat', 'norpah020@uitm.edu.my', NULL, 49882185, 'Mathematics', '', 1, '1'),
(23, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nora-yanti-scaled-e1609735002988-250x250.jpg', 'Nora Yanti Che Jan', 'noray084@uitm.edu.my', NULL, 49882180, 'Computer Science', '', 1, '1'),
(24, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/norhayati-scaled-e1609734402450-250x250.jpg', 'Nor Hayati Shafii', 'norhayatishafii@uitm.edu.my', NULL, 49882777, 'Statistics', '', 1, '1'),
(25, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/siti-zulaiha-scaled-e1609734835593-250x250.jpg', 'Siti Zulaiha', 'sitizulaiha@uitm.edu.my', NULL, 49882838, 'Information Technology', '', 1, '1'),
(26, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2008/02/rashidah2-250x250.jpg', 'Rashidah Ramle', 'rashidahramle@uitm.edu.my', NULL, 49882837, 'Computer Technology & Networking', '', 1, '1'),
(27, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/fazril-scaled-e1609734438827-250x250.jpg', 'Mohd Fazril Izhar Mohd Idris', 'fazrilizhar@uitm.edu.my', NULL, 49882616, 'Mathematics', '', 1, '1'),
(28, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/hafiz-scaled-e1609746211500-250x250.jpg', 'Mohammad Hafiz Ismail', 'mohammadhafiz@uitm.edu.my', NULL, 49882896, 'Information Technology', '', 1, '1'),
(29, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/Hawa-scaled-e1609746244847-250x250.jpg', 'Ts. Hawa Mohd Ekhsan', 'hawame@uitm.edu.my', NULL, 49882768, 'Computer Science', '', 1, '1'),
(30, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/diana-scaled-e1609734470378-250x250.jpg', 'Diana Sirmayunie Mohd Nasir', 'dianasirmayunie@uitm.edu.my', NULL, 49882743, 'Mathematics', '', 1, '1'),
(31, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/shazelin-scaled-e1609733786937-250x250.jpg', 'Wan Nurshazelin Wan Shahidan', 'shazelin804@uitm.edu.my', NULL, 49882263, 'Statistics', '', 1, '1'),
(32, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/arifah-scaled-e1609746278157-250x250.jpg', 'Arifah Fasha Rosmani', 'arifah840@uitm.edu.my', NULL, 49882762, 'Computer Science', '', 1, '1'),
(33, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/iman-scaled-e1609746312475-250x250.jpg', 'Iman Hazwam Abd Halim', 'hazwam688@uitm.edu.my', NULL, 49882102, 'Computer Technology & Networking', '', 1, '1'),
(34, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/jiwa-scaled-e1609746353537-250x250.jpg', 'Jiwa Noris Hamid', 'jiwa_noris@uitm.edu.my', NULL, 49882723, 'Computer Science', '', 1, '1'),
(35, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/arif-scaled-e1609746388499-250x250.jpg', 'Muhamad Arif Hashim', 'muhamadarif487@uitm.edu.my', NULL, 49882732, 'Computer Technology & Networking', '', 1, '1'),
(36, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/azlan-scaled-e1609734129177-250x250.jpg', 'Azlan Abdul Aziz', 'azlan172@uitm.edu.my', NULL, 49882891, 'Statistics', '', 1, '1'),
(37, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nurul-hidayah-raji-scaled-e1609734090438-250x250.jpg', 'Nurul Hidayah Ab. Raji', 'hidayah417@uitm.edu.my', NULL, 49882688, 'Mathematics', '', 1, '1'),
(38, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/raihana-scaled-e1609734051874-250x250.jpg', 'Raihana Zainordin', 'raihana420@uitm.edu.my', NULL, 49882822, 'Statistics', '', 1, '1'),
(39, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/umi-scaled-e1609746422713-250x250.jpg', 'Umi Hanim Mazlan', 'umihanim462@uitm.edu.my', NULL, 49882813, 'Computer Science', '', 1, '1'),
(40, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/hafwati-scaled-e1609734009712-250x250.jpg', 'Siti Hafawati Jamaluddin', 'hafawati832@uitm.edu.my', NULL, 49882326, 'Mathematics', '', 1, '1'),
(41, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/anas-scaled-e1609733508406-250x250.jpg', 'Anas Fathul Ariffin', 'anasfathul@uitm.edu.my', NULL, 49882742, 'Mathematics', '', 1, '1'),
(42, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/azmi-scaled-e1609746453970-250x250.jpg', 'Azmi Abu Seman', 'azmi384@uitm.edu.my', NULL, 49882260, 'Computer Science', '', 1, '1'),
(43, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nor-azriani-scaled-e1609733462171-250x250.jpg', 'Nor Azriani Mohamad Nor', 'norazriani@uitm.edu.my', NULL, 49882857, 'Statistics', '', 1, '1'),
(44, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/suzanawati-scaled-e1609733930522-250x250.jpg', 'Suzanawati Abu Hasan', 'suzan540@uitm.edu.my', NULL, 49882702, 'Mathematics', '', 1, '1'),
(45, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/teoh-scaled-e1609733884679-250x250.jpg', 'Teoh Yeong Kin', 'ykteoh@uitm.edu.my', NULL, 49882507, 'Mathematics', '', 1, '1'),
(46, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/faizal-farid-scaled-e1609746488422-250x250.jpg', 'Ts. Noorfaizalfarid Mohd Noor', 'noorfaizal455@uitm.edu.my', NULL, 49882749, 'Information Technology', '', 1, '1'),
(47, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/siti-fatimah-scaled-e1609733848424-250x250.jpg', 'Siti Fatimah Abd Rahman', 'sitifatimah471@uitm.edu.my', NULL, 49882799, 'Mathematics', '', 1, '1'),
(48, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/hapes-scaled-e1609746523758-250x250.jpg', 'Abdul Hapes Mohammed', 'hapes232@uitm.edu.my', NULL, 163188491, 'Information Technology', '', 1, '1'),
(49, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/tajul-scaled-e1609746559414-250x250.jpg', 'Dr. Tajul Rosli Razak', 'tajulrosli@uitm.edu.my', NULL, 176594200, 'Information Technology', '', 1, '1'),
(50, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/waziah-scaled-e1609734213394-250x250.jpg', 'Norwaziah Mahmud', 'norwaziah@uitm.edu.my', NULL, 49882578, 'Statistics', '', 1, '1'),
(51, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/hanisah-scaled-e1609746590997-250x250.jpg', 'Hanisah Ahmad', 'hanisahahmad@uitm.edu.my', NULL, 49882765, 'Computer Science', '', 1, '1'),
(52, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/alif-scaled-e1609746623882-250x250.jpg', 'Alif Faisal Ibrahim', 'aliffaisal@uitm.edu.my', NULL, 49882170, 'Computer Science', '', 1, '1'),
(53, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/khairu-scaled-e1609733265661-250x250.jpg', 'Khairu Azlan Abd Aziz', 'khairu493@uitm.edu.my\r\n', NULL, 49882693, 'Mathematics', '', 1, '1'),
(54, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nuridawati-scaled-e1609733327577-250x250.jpg', 'Nuridawati Baharom', 'nuridawati@uitm.edu.my', NULL, 49882710, 'Statistics', '', 1, '1'),
(55, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/siti-sarah-raseli-scaled-e1609733369748-250x250.jpg', 'Siti Sarah Raseli', 'sitisarahraseli@uitm.edu.my', NULL, 49882710, 'Mathematics', '', 1, '1'),
(56, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/hasbullah-scaled-e1609733425818-250x250.jpg', 'Mohd Hasbullah Mohd Razali', 'hasbullah782@uitm.edu.my', NULL, 49882360, 'Statistics', '', 1, '1'),
(57, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/balkiah-scaled-e1609733549344-250x250.jpg', 'Balkiah Moktar', 'balkiah@uitm.edu.my', NULL, 49882753, 'Statistics', '', 1, '1'),
(58, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nur-khairani-scaled-e1609746657612-250x250.jpg', 'Nur Khairani Kamarudin', 'nurkhairani@uitm.edu.my', NULL, 49882179, 'Computer Technology & Networking', '', 1, '1'),
(59, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/faris-scaled-e1609746688952-250x250.jpg', 'Mohd Faris Mohd Fuzi', 'farisfuzi@uitm.edu.my', NULL, 49882106, 'Computer Technology & Networking', '', 1, '1'),
(60, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/ros-syamsul-scaled-e1609746724361-250x250.jpg', 'Ros Syamsul Hamid', 'rossyamsul@uitm.edu.my', NULL, 49882156, 'Computer Technology & Networking', '', 1, '1'),
(61, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/Nabil-scaled-e1609746762408-250x250.jpg', 'Muhammad Nabil Fikri Jamaluddin', 'nabilfikri@uitm.edu.my', NULL, 49882247, 'Computer Science', '', 1, '1'),
(62, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/hidayah-zukri-scaled-e1609746793625-250x250.jpg', 'Nurul Hidayah Ahmad Zukri', 'hidayah1278@uitm.edu.my', NULL, 49882150, 'Computer Technology & Networking', '', 1, '1'),
(63, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/izleen-scaled-e1609733587518-250x250.jpg', 'Izleen Ibrahim', 'izleen373@uitm.edu.my', NULL, 49882823, 'Mathematics', '', 1, '1'),
(64, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/nadrah-scaled-e1609733630583-250x250.jpg', 'Siti Nor Nadrah Muhamad', 'nadrahmuhamad@uitm.edu.my', NULL, 49882150, 'Statistics', '', 1, '1'),
(65, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/ray-scaled-e1609746830110-250x250.jpg', 'Ray Adderley Jm. Gining', 'rayadderley@uitm.edu.my', NULL, 49882183, 'Information Technology', '', 1, '1'),
(66, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2022/03/halimi3-250x250.png', 'Mohd Halimi Ab Hamid', 'halimi@uitm.edu.my', NULL, 49882000, 'Mathematics', '', 1, '1'),
(67, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/fathihah-scaled-e1609733672414-250x250.jpg', 'Dr. Nur Fatihah binti Fauzi', 'fatihah@uitm.edu.my', NULL, 49882619, 'Mathematics', '', 1, '1'),
(68, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/siti-sarah-md-alias-scaled-e1609747199585-250x250.jpg', 'Siti Sarah Md Alias', 'sarahilyas@uitm.edu.my', NULL, 49882107, 'Computer Science', '', 1, '1'),
(69, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/huda-scaled-e1609734174727-250x250.jpg', 'Dr. Huda Zuhrah Ab Halim', 'hudazuhrah@uitm.edu.my', NULL, 49882154, 'Mathematics', '', 1, '1'),
(70, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/01/norziana-scaled-e1609746860622-250x250.jpg', 'Ts. Dr. Norziana Yahya', 'norzianayahya@uitm.edu.my', NULL, 49882154, 'Information Technology', '', 1, '1'),
(71, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2020/10/ruzita2-250x250.jpg', 'Dr. Ruzita Ahmad', 'ruzitaahmad@uitm.edu.my', NULL, 49882155, 'Computer Science', '', 1, '1'),
(72, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2020/10/izzati-b-scaled-e1609743992696-250x250.jpg', 'Dr. Nur Izzati Khairudin', 'zatkhairudin@uitm.edu.my', NULL, 49882155, 'Mathematics', '', 1, '1'),
(73, 'https://fskmperlis.uitm.edu.my/wp-content/uploads/2021/02/syarfinaz-250x250.jpeg', 'Dr. Nurizatul Syarfinas Ahmad Bakhtiar', 'nurizatul@uitm.edu.my', NULL, 49882153, 'Mathematics', '', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_content` text NOT NULL,
  `timetsamp` timestamp(6) NOT NULL ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Table structure for table `project_info`
--

CREATE TABLE `project_info` (
  `info_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `lect_info_id` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_approval` varchar(255) NOT NULL,
  `project_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `project_info`
--

INSERT INTO `project_info` (`info_id`, `user_id`, `lect_info_id`, `project_title`, `project_type`, `project_approval`, `project_message`) VALUES
(5, 3, 7, 'dadasdrs', 'Web Application', 'Approve', 'aadfsdfsfdzgg'),
(6, 6, 10, 'project_approval', 'Mobile Application', 'approve', ''),
(7, 5, 1, 'tgf', 'Select here', 'Approve', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `matrix_number` varchar(12) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `matrix_number`, `email`, `password`, `role`) VALUES
(1, 'admin', '123456', 'admin@a.com', '202cb962ac59075b964b07152d234b70', 2),
(2, 'Aimuni Nadhrah Binti Yazit', '52213220153', 'lecturer@l.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'MUHAMAD ALIF SHAHKIMI BIN MD ROZI', '3123456', 'student@s.com', '202cb962ac59075b964b07152d234b70', 0),
(5, 'alif 2', '5123456', 's2@s.com', '202cb962ac59075b964b07152d234b70', 0),
(6, 'alif 4', '6123456', 's4@s.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examiner`
--
ALTER TABLE `examiner`
  ADD PRIMARY KEY (`examiner_id`);

--
-- Indexes for table `lect_info`
--
ALTER TABLE `lect_info`
  ADD PRIMARY KEY (`lect_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_info`
--
ALTER TABLE `project_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `examiner`
--
ALTER TABLE `examiner`
  MODIFY `examiner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `lect_info`
--
ALTER TABLE `lect_info`
  MODIFY `lect_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_info`
--
ALTER TABLE `project_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
