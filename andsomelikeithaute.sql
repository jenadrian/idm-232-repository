-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 16, 2017 at 11:13 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andsomelikeithaute`
--

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(120) NOT NULL,
  `image` varchar(80) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `type`, `category`, `date`, `title`, `image`, `alt`, `body`) VALUES
(1, 'article', 'fashion', '0000-00-00', 'This is the Right Way to Appreciate, Not Appropriate Other Cultures Through Fashion', '../photos/id-1-sm.jpg', 'this is a filler image', 'This is currently placeholder text.'),
(2, 'article', 'fashion', '0000-00-00', 'Statement Pieces are Never Going Out of Style', '../photos/id-2-sm.jpg', 'this is a filler image', 'Statement pieces are one of my favorite ways to add personality to an outfit. So, when I saw this look on campus, I just knew I had to cover statement pieces for my street style breakdown on my blog.\r\n\r\nMy absolute favorite part of this  outfit is the suede duster jacket. I don\'t have anything against all-black looks, but I love how the gold hardware and pink hue work together to soften the intensity of her otherwise all-black ensemble.\r\n\r\nSometimes, one statement piece just isn\'t enough! She stepped up her look by adding a cropped graphic T-shirt and pairing it with high-waist black jeans. Choosing a graphic top with a witty quote is a great way to show the world you don\'t take yourself too seriously!\r\n\r\nFinally, she tied her whole look together by stacking a black and silver choker and a gold cornicello pendant. By selecting mixed-metallic jewelry pieces to go with this look, she created cohesion in her outfit and tied together the warm tones of her jacket and the cool tones of her black jeans and T-shirt.\r\n\r\nNot everyone would combine multiple statement pieces in one outfit (especially just for classes) but this look was a great example of how to do it right. '),
(3, 'article', 'life', '0000-00-00', 'Why You Need to Try Bullet Journaling Now', '../photos/id-3-sm.jpg', 'this is a filler image', 'This is currently placeholder text.');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`) VALUES
(1, 'Home'),
(2, 'Apartment Style'),
(3, 'Beauty'),
(4, 'Health'),
(5, 'Life'),
(6, 'Style'),
(7, 'About Me');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
