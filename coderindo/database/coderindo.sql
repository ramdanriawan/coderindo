-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 04:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coderindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `dibuat` date NOT NULL,
  `diupdate` date DEFAULT NULL,
  `judul` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `dilihat` int(100) DEFAULT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`dibuat`, `diupdate`, `judul`, `penulis`, `isi`, `tag`, `dilihat`, `id`) VALUES
('2017-04-01', NULL, 'file html pertama saya', 'ramdan riawan', 'hallo sya adalah file html pertama', 'html', 10, 1),
('2017-04-02', NULL, 'hallo saya adalah file html kedua', 'ramdan riawan', 'hallo saya adalh file html kedua', 'html', 11, 2),
('2017-04-05', NULL, 'hallo saya adalah text html ketiga', 'rAMDANRIAWAN', 'HAI HAI  HALLO', 'HTML', 12, 3),
('2017-04-12', NULL, 'sddffffffffffffffffffff', 'andi saputra', 'hahjalalal', 'html', 13, 4),
('2017-04-19', NULL, 'jdldl', 'ramdan riawan', 'hahahah', 'html', 14, 5),
('2017-04-08', NULL, 'sdfsdf', 'sdfsf', 'dsfsfsf', 'html', 14, 6),
('2017-04-22', NULL, 'kkkk k k k k k lslfcsadald', 'joni', 'dsfsfsfsfs', 'html', 16, 7),
('2017-04-19', NULL, 'saddad sdadad sdadad', 'jono', 'sfsdfsf sdadsa', 'php', 17, 8),
('2017-04-13', NULL, 'dfsfds fddsfsfsd dfsfdsf sdfsfdsf', 'ramdan riawan', 'ini adalah text php pertama saya', 'php', 15, 9),
('2017-12-09', NULL, 'text php pertama saya', 'ramdan riawan', 'hai hai hallo saya adalah text php pertama', 'php', NULL, 10),
('2017-12-09', NULL, 'text php pertama saya', 'ramdan riawan', 'hai hai hallo saya adalah text php pertama', 'php', NULL, 11),
('2017-12-09', NULL, '	text php pertama saya', 'ramdan riawan', 'hai hai hallo saya adalah text php pertama', 'php', NULL, 12),
('0000-00-00', NULL, '', '', '', '', NULL, 13),
('0000-00-00', NULL, '', '', '', '', NULL, 14),
('0000-00-00', NULL, '', '', '', '', NULL, 15),
('0000-00-00', NULL, '', '', '', '', NULL, 16),
('0000-00-00', NULL, '', '', '', '', NULL, 17),
('0000-00-00', NULL, '', '', '<p>$isi</p>', '', NULL, 18),
('0000-00-00', NULL, '', '', '<p>$isi</p>', '', NULL, 19),
('0000-00-00', NULL, '', '', '<pre><code>&lt;?php echo "string"; ?&gt;</code></pre>', '', NULL, 20),
('0000-00-00', NULL, '', '', '<pre><code>&lt;?php echo "string"; ?&gt;</code></pre>', '', NULL, 21),
('0000-00-00', NULL, 'phpphp', 'ramdan riawan', '<pre><code class=php>&lt;?php echo "string"; ?&gt;</code></pre>', 'php', NULL, 22),
('0000-00-00', NULL, 'phpphp', 'ramdan riawan', '<pre><code>&lt;?php echo "string"; ?&gt;</code></pre>', 'php', NULL, 23),
('0000-00-00', NULL, 'phpphp', 'ramdan riawan', '<pre><code>&lt;?php echo "stringssdfsf"; ?&gt;</code></pre>', 'php', NULL, 24),
('0000-00-00', NULL, 'phpphp2', 'ramdan riawan', 'jadi ini adalah code sederhana untuk menampilkan kata atau kalimat ke browser <pre><code>&lt;?php echo "stringssdfsf"; ?&gt;</code></pre>', 'php', NULL, 25),
('0000-00-00', NULL, 'perintah php pertama', 'ramdan riawan', '<pre><code>&lt;?php \n    echo "kata"; \n    echo 1; ?&gt;</code></pre>', 'php', NULL, 26),
('0000-00-00', NULL, 'werrrerer', 'erwr', '<p>ewr</p>', 'er', NULL, 27),
('0000-00-00', NULL, 'dfsfdsfsf', 'dsfsfs', '<p>dsfsfdsf</p>', 'dsfsf', NULL, 28),
('0000-00-00', NULL, '', '', '', '', NULL, 29);

-- --------------------------------------------------------

--
-- Table structure for table `upload_foto`
--

CREATE TABLE `upload_foto` (
  `id` int(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `di_upload` date NOT NULL,
  `url` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_foto`
--

INSERT INTO `upload_foto` (`id`, `nama_file`, `di_upload`, `url`, `alt`, `title`, `tag`) VALUES
(1, 'coderindo.png', '2017-05-04', '/gambar/tag/judul_artikel/coderindo.png', 'coderindo', 'coderindo', 'html'),
(2, 'll.png', '2017-05-11', '/gambar/tag/judul_artikel/ll.png', 'll', 'll', 'html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_foto`
--
ALTER TABLE `upload_foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `upload_foto`
--
ALTER TABLE `upload_foto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
