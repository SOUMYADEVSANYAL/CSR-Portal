-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 05:57 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interstellar`
--
CREATE DATABASE IF NOT EXISTS `interstellar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `interstellar`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `Content` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Content`, `user_id`, `post_id`) VALUES
(1, 'I commented on it.', 4, 12),
(2, 'I commented on it.', 4, 12),
(3, 'i do not like it', 4, 11),
(4, 'I commented on it.', 16, 11),
(5, 'I will comment on it', 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` int(255) NOT NULL,
  `friend_id` int(255) NOT NULL,
  `follower_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `friend_id`, `follower_id`) VALUES
(16, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `type`) VALUES
(2, 16, 12, 0),
(7, 5, 12, 0),
(8, 6, 12, 0),
(9, 10, 12, 0),
(10, 14, 12, 0),
(13, 4, 10, 0),
(15, 4, 13, 0),
(59, 4, 4, 0),
(63, 4, 0, 0),
(64, 16, 14, 0),
(65, 16, 15, 0),
(67, 10, 15, 0),
(68, 5, 15, 0),
(69, 4, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `Content` text NOT NULL,
  `like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Name`, `user_id`, `Content`, `like`) VALUES
(4, 'Post 4', 6, 'ABCD', 0),
(7, 'asdf', 4, 'asdfgh', 0),
(8, 'asdfghn', 4, 'asdfghnj', 0),
(9, 'asdfgh', 5, 'asdfghj', 0),
(10, 'Test', 5, 'I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. I am good. ', 0),
(11, 'Posting Test', 16, 'Posting Test', 0),
(12, 'Another test', 10, 'Here is the content of the post.', 0),
(13, 'Last post', 4, 'The content is not important.', 0),
(14, 'Latest Post', 16, 'Here is the content of the post.', 0),
(15, 'Short term memory loss', 17, 'The film Memento is directed by Christopher Nolan.', 0),
(16, 'Another test', 4, 'It is going high and high in India.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`) VALUES
(4, 'Interstellar', 'interstellarnew@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(5, 'Avengers', 'avengers@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(6, 'Justice League', 'justiceleague@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(10, 'Fantastic Four', 'fantasticfour@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(14, 'beTogether', 'betogether@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(16, 'Soumyadev Sanyal', 'soumya.sp35@gmail.com', 'e42a3fa2b962a5f2be89fbf82eb3196d'),
(17, 'Memento', 'memento@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
