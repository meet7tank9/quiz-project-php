-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 12:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin'),
(3, 'meet', 'meet@gmail.com', 'meettank'),
(5, 'Harshit', 'harshit@gmail.com', 'harshitdeviya');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `added_on`) VALUES
(1, 'meet', 'meet@gmail.com', 1234567899, 'hello world', '2022-09-07 05:28:16'),
(2, 'hello', 'ji@gmail.com', 1234567899, 'hello ji\r\n', '2022-09-10 09:19:47'),
(3, 'dixit', 'dixit@gmail.com', 2147483647, 'testing', '2022-09-21 10:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ques_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` int(5) NOT NULL,
  `ans1` int(11) NOT NULL,
  `ans2` int(11) NOT NULL,
  `ans3` int(11) NOT NULL,
  `ans4` int(11) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ques_id`, `question`, `quiz_id`, `option1`, `option2`, `option3`, `option4`, `answer`, `ans1`, `ans2`, `ans3`, `ans4`, `added_on`) VALUES
(10, 'java is used for', 38, 'develop an application', 'h', 't', 'm', 1, 1, 2, 3, 4, '2022-09-11 05:12:42'),
(11, 'j2ee stands for', 38, 'java edition', 'java', 'java 2 enterprise', 'java  enterprise edition', 4, 1, 2, 3, 4, '2022-09-11 05:13:47'),
(12, 'what is tomcat?', 38, 'jh', 'it is a web container', 'e', 'world', 2, 1, 2, 3, 4, '2022-09-11 05:14:35'),
(16, 'What does HTML stand for?', 45, 'HyperText Markup Language', 'Home Tool Markup Language', 'Hyper Text Language', 'Hyper Text Reference', 1, 1, 2, 3, 4, '2022-09-20 10:19:01'),
(17, 'Choose the correct HTML element for the largest heading:', 45, 'head tag', 'heading tag', 'h1 tag', 'h6 tag', 3, 1, 2, 3, 4, '2022-09-20 10:19:59'),
(18, 'What is the correct HTML element for inserting a line break?', 45, 'br tag', 'break tag', 'lb tag', 'breakline tag', 1, 1, 2, 3, 4, '2022-09-20 10:20:33'),
(19, 'How many sizes of headers are available in HTML by default?', 45, '5', '1', '3', '6', 4, 1, 2, 3, 4, '2022-09-20 10:23:04'),
(20, 'What is the smallest header in HTML by default?', 45, 'h1', 'h4', 'h5', 'h6', 4, 1, 2, 3, 4, '2022-09-20 10:23:23'),
(21, 'What are the types of lists available in HTML?', 45, 'ordered, unordered list', 'bulled, numbered list', 'name, unnamed list', 'none of the above', 1, 1, 2, 3, 4, '2022-09-20 10:24:21'),
(22, 'HTML files are saved by default with the extension?', 45, '.html', '.ht', '.h', 'none of above', 1, 1, 2, 3, 4, '2022-09-20 10:25:29'),
(23, '  The full form of CSS is:', 46, 'Cascading Style Sheets', 'Colored Style Sheets', 'Color and Style Sheets', 'None of the above', 1, 1, 2, 3, 4, '2022-09-20 10:29:39'),
(24, ' How can we change the background color of an element?', 46, 'background-color', 'color', 'Both A and B', 'None of the above', 1, 1, 2, 3, 4, '2022-09-20 10:30:16'),
(25, 'How can we change the text color of an element?', 46, 'backgroung-color', 'color', 'Both A and B', 'none of the above', 2, 1, 2, 3, 4, '2022-09-20 10:30:52'),
(26, 'In how many ways can CSS be written in?', 46, '1', '3', '2', '4', 2, 1, 2, 3, 4, '2022-09-20 10:31:30'),
(27, 'What type of CSS is generally recommended for designing large web pages?', 46, 'inline css', 'external css', 'internal css', 'none of the above', 2, 1, 2, 3, 4, '2022-09-20 10:32:03'),
(28, 'Which of the following keywords is used to define a variable in Javascript?', 47, 'var', 'let', 'both A and B', 'none of the above', 3, 1, 2, 3, 4, '2022-09-20 10:35:17'),
(29, 'Which of the following methods is used to access HTML elements using Javascript?', 47, 'getElementById method', 'getElementByClassName method', 'getElementbyid method', 'getElementbyClassname method', 1, 1, 2, 3, 4, '2022-09-20 10:37:02'),
(30, 'How can a datatype be declared to be a constant type?', 47, 'constant', 'var', 'let', 'const', 4, 1, 2, 3, 4, '2022-09-20 10:37:26'),
(31, '  What keyword is used to check whether a given property is valid or not?', 47, 'is', 'in', 'valid', 'exists', 2, 1, 2, 3, 4, '2022-09-20 10:38:09'),
(32, '  Which of the following are closures in Javascript?', 47, 'Variables', 'Functions', 'Objects', 'All of the above', 4, 1, 2, 3, 4, '2022-09-20 10:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_details`
--

CREATE TABLE `quiz_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_details`
--

INSERT INTO `quiz_details` (`id`, `name`, `category`, `description`, `time`, `added_on`) VALUES
(38, 'java', 'appdev', 'hello world, sdkjfsjkdf ksfbksbdfks lkb lbflkdsblbdk bsldb sdkjfbldksb dslkblskdbjlks bsd g', '10:00:00', '2022-09-13 07:22:20'),
(45, 'HTML', 'html, webdevelopment', 'Questions of basic of HTML will be covered', '10:00:00', '2022-09-20 10:17:44'),
(46, 'CSS', 'css, webdevelopment', 'Questions about basic CSS', '10:00:00', '2022-09-20 10:28:47'),
(47, 'JavaScript', 'javascript', 'Basics of javascript', '10:00:00', '2022-09-20 10:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `temporary_table`
--

CREATE TABLE `temporary_table` (
  `id` int(11) NOT NULL,
  `ans` int(11) NOT NULL,
  `user_ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temporary_table`
--

INSERT INTO `temporary_table` (`id`, `ans`, `user_ans`) VALUES
(83, 1, 0),
(84, 4, 0),
(85, 2, 0),
(86, 3, 0),
(87, 1, 0),
(88, 4, 0),
(89, 2, 0),
(90, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `added_on`) VALUES
(1, 'meet', 'meet@gmail.com', 'meettank', '2022-09-12 08:51:46'),
(3, 'nihar', 'nihar@gmail.com', 'nihartank', '2022-09-12 09:24:45'),
(4, 'deven', 'deven@gmail.com', 'deventank', '2022-09-12 09:39:12'),
(7, 'jkshah', 'jkshah@gmail.com', 'jkshah', '2022-09-12 10:02:18'),
(8, 'hello', 'hello@gmail.com', 'helloworld', '2022-09-12 10:03:09'),
(9, 'world', 'world@gmail.com', 'worldhello', '2022-09-12 10:25:37'),
(10, 'dixit', 'dixit@gmail.com', 'dixitdave', '2022-09-12 10:28:13'),
(11, 'warner', 'warner@gmail.com', 'warnerwarner', '2022-09-12 10:46:01'),
(12, 'harshit', 'harshit@gmail.com', 'harshitdeviya', '2022-09-13 04:53:32'),
(14, 'harsh', 'harsh@gmail.com', 'harshharsh', '2022-09-13 09:07:31'),
(15, 'mitul', 'mitul@gmail.com', 'mitulmitul', '2022-09-17 09:59:50'),
(16, 'nihart', 'nih@gmail.com', 'niharnihar', '2022-09-17 10:07:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `quiz_details`
--
ALTER TABLE `quiz_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary_table`
--
ALTER TABLE `temporary_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `ques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `quiz_details`
--
ALTER TABLE `quiz_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `temporary_table`
--
ALTER TABLE `temporary_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
