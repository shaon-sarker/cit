-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 04:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `sub_head` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `about_pic` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `sub_head`, `heading`, `description`, `about_pic`, `status`) VALUES
(1, 'Introduction', 'About Shaon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime blanditiis culpa vitae velit. Numquam!', '1.png', 0),
(2, 'Hiiiiiii', 'Lorem Ipum', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected', '2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `baner_images`
--

CREATE TABLE `baner_images` (
  `id` int(11) NOT NULL,
  `baner_pic` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baner_images`
--

INSERT INTO `baner_images` (`id`, `baner_pic`, `status`) VALUES
(1, '1.png', 0),
(2, '2.png', 0),
(4, '4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_contents`
--

CREATE TABLE `banner_contents` (
  `id` int(11) NOT NULL,
  `sub_head` varchar(100) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `button` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_contents`
--

INSERT INTO `banner_contents` (`id`, `sub_head`, `headline`, `description`, `button`, `status`) VALUES
(1, 'Hellow', 'I am Shaon Sarker', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution', 'More Info', 0),
(3, 'Hi', 'I am Lorem Ipum', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.', 'Info Details', 0),
(4, 'hhh', 'hhh', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'info', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `uname`, `email`, `message`) VALUES
(1, 'Charles H. Dasilva', 'Charles@gmail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
(2, 'Noah ', 'Noah@gmail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
(3, 'Melissa', 'Melissa@gmail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
(4, 'ggg', 'ggg@gmail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `repassword` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `uname`, `email`, `password`, `repassword`, `birthday`, `user_image`, `status`, `role`) VALUES
(1, 'admin25', 'admin@gmail.com', '$2y$10$EsAgbm23AQOLS5jTg.jFRe3P0klLElOokzBiflg5jEpSYSFxAbbdS', 'AAPsh12#@', '2021-06-18', '1.png', 0, 'Admin'),
(2, 'Don', 'don@gmail.com', '$2y$10$nmW4nq36ITU9f/VZlP3J3OAFhszKxHW93r21jryF123g0XKPMWe2i', 'AAPsh12#@', '2021-07-06', '2.jpg', 1, 'Moderator'),
(3, 'Von', 'von@gmail.com', '$2y$10$YFY/dQCHtmS1QZHQRlAI1.1VaQLGZIKAEkrmFhWl0UZrsZJpyHGdy', 'AAPsh12#@', '2021-07-09', '3.jpg', 1, 'Editor'),
(4, 'Papiya', 'ratul@gmail.com', '$2y$10$I2VTCqaqLcoyV5UMk3y2gukiQjV.hDZAtksWGAcIrA1dmNd4dEdku', 'AAPsh12#@', '2021-07-04', '4.jpg', 1, 'Author'),
(5, 'Hero', 'hero@gmail.com', '$2y$10$YDVghsG6a6.CMpKIXPlTD.YFj.zQUEbjXnhzE1ZvRiN6/DbRDnPtS', 'AAPsh12#@', '2021-06-29', '5.jpg', 1, '0'),
(6, 'new34', 'new@gmail.com', '$2y$10$kRYX6Xhipg0RbnnzuwgFi.HkNY4k12boEojV6oCNIRvY47VimL4vm', 'AAPsh12#@', '2021-06-30', '6.png', 0, 'admin'),
(7, 'gtgh', 'hdh@gmail.com', '$2y$10$IkgO7R6YAlRwMaNkGDRWdel1FZrrfcsdK2ppungUHK6A2r61tDBrS', 'AAPsh12#@', '2021-07-01', '7.jpg', 1, 'Author'),
(8, 'James78', 'James@gmail.com', '$2y$10$CniKfs3e1KAOwuUkcj8BLuIlPTJibsd2l6Bd4vDjw30mO8XeLuwMi', 'AAPsh12#@', '2021-07-19', '8.jpg', 0, 'Author'),
(9, 'George ', 'George@gmail.com', '$2y$10$h.geszxjpdDoKeMssJ90xuUposg9XFgdR8tMWkgjuSo6xJx5MR.se', 'AAPsh12#@', '2021-07-21', '9.svg', 0, 'Moderator');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `port_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `category`, `title`, `description`, `port_pic`) VALUES
(1, 1, 'Web', 'Web Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution', '1.jpg'),
(2, 1, 'gddgdg', 'dddd', 'ddddddddddddddd', '2.jpg'),
(3, 1, 'Design', 'Graphic Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', '3.jpg'),
(4, 1, 'Marketing', 'Digital Marketing', 'Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software like Aldus PageMaker including versions.', '4.jpg'),
(5, 1, 'Web', 'Web Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.', '5.jpg'),
(6, 1, 'Web', 'Admin Template Design', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_img` varchar(50) NOT NULL,
  `project_no` int(11) NOT NULL,
  `project_head` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_img`, `project_no`, `project_head`) VALUES
(1, '1.svg', 250, 'Feature Item'),
(2, '2.svg', 350, 'Active Products'),
(3, '3.svg', 10, 'Year Experience'),
(4, '4.svg', 5, 'Our Clients');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(50) NOT NULL,
  `service_desp` text NOT NULL,
  `service_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_desp`, `service_img`) VALUES
(1, 'Creative Design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', '1.svg'),
(2, 'Unlimited Features', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', '2.svg'),
(3, 'Ultra Responsive', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', '3.svg'),
(4, 'Creative Ideas', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', '4.svg'),
(5, 'Easy Customization', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust', '5.svg'),
(6, 'Supper Support', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum indust. ', '6.svg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill_title` varchar(50) NOT NULL,
  `skill_desp` text NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_title`, `skill_desp`, `percentage`) VALUES
(1, 'HTML', 'html is a markup language', 80),
(2, 'CSS3', 'css is cascading style sheet', 85),
(3, 'Responsive Web Design', 'HTML Responsive Web Design ... Responsive web design is about creating web pages that look good on all devices! .', 60),
(4, 'PHP', 'php is hypertext peprosessor', 50);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `slide_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_pic`) VALUES
(1, '1.svg'),
(2, '2.svg'),
(3, '3.svg'),
(4, '4.svg'),
(5, '5.svg'),
(6, '6.svg'),
(7, '7.svg');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` int(11) NOT NULL,
  `icon_name` varchar(100) NOT NULL,
  `icon_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `icon_name`, `icon_link`) VALUES
(1, 'fa fa-facebook', 'https://www.facebook.com/'),
(2, 'fa fa-twitter', ''),
(3, 'fa fa-instagram', ''),
(4, 'fa fa-pinterest', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `test_img` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `test_head` varchar(100) NOT NULL,
  `test_subhead` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `test_img`, `description`, `test_head`, `test_subhead`) VALUES
(1, '1.jpg', 'An event is a message sent by an object to signal the occur rence of an action. The action can causd user interaction such as a button click or it can result', 'Tonnoy Jackson', 'Head of web'),
(2, '2.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ', 'Lorem Ipsum', 'Head of Graphic'),
(3, '3.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 'Frank R. Floyd', 'Head of web'),
(4, '4.jpg', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form', 'James T. Cauley', 'Head of wordpress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baner_images`
--
ALTER TABLE `baner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_contents`
--
ALTER TABLE `banner_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `baner_images`
--
ALTER TABLE `baner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner_contents`
--
ALTER TABLE `banner_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
