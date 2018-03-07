-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2018 at 05:52 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Bootstrap'),
(2, 'Javascript'),
(3, 'Java'),
(4, 'PHP'),
(5, 'test3');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(1, 10, 'Samir Kahvedzic', 'samirkafa@gmail.com', 'This is an example', 'approved', '2018-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(2, 2, 'Javascript Course Post', 'Belinda', '2018-01-25', 'javascript.png', 'Wow I was very lucky to participate on this course.', 'javascript, belinda', '', 'draft'),
(4, 4, 'Test 1', 'samir823', '2018-03-07', 'php.png', '                                    This is a first post\r\n                                    ', 'fist post', '4', 'Publish'),
(5, 1, '', '', '2018-03-07', 'image_3.jpg', '', '', '4', ''),
(6, 1, 'asasd', 'sssssssss', '2018-03-07', 'image_5.jpg', '                                                                                                                                                                                                                                                                                                         sadaasdasd123123123                                                               ', 'new tagg', '4', 'new one'),
(7, 2, 'PHP', 'samir', '2018-03-07', 'php.png', '         asd         ', 'php', '4', 'done'),
(9, 5, 'Day 2', 'samir', '2018-03-07', 'image_4.jpg', '         assssssssssssssssssssssssssssssssssssssss', 'asd', '4', 'in'),
(10, 3, 'Example Post', 'samir', '2018-03-07', 'image_5.jpg', 'Java is most used in the world ', 'java', '4', 'qa'),
(11, 5, 'One new', 'samir', '2018-03-07', 'php.png', '\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq         dadasdasdasdqwqqqqqqqqqqqqqqqqqq\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq\r\n         dadasdasdasdqwqqqqqqqqqqqqqqqqqq', 'nn', '4', 'published');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
