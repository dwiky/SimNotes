-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 03:12 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(16) NOT NULL,
  `id_user` int(15) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `negara` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `id_user`, `judul`, `tanggal`, `negara`, `kota`, `content`) VALUES
(7, 1, 'Liburan', '2016-09-07', 'Algeria', 'Djelfa', 'Makanan disini sangat enak, saya bertemu dengan banyak orang dan memperoleh banyak sekali pengalaman. saya berharap bisa kesini lagi suatu saat nanti dan bertemu dengan mereka lagi. :D<br>\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis, libero ut imperdiet sagittis, felis orci blandit diam, id molestie sapien justo a diam. Curabitur purus elit, pretium sed semper et, consectetur sit amet sem. Morbi in dolor sit amet purus commodo congue. Suspendisse nec elit sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, elit quis varius semper, elit libero sagittis libero, semper vehicula tortor risus a felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius tempor ipsum et luctus. In commodo iaculis orci varius mollis. Ut lacinia consequat convallis. Sed eleifend pulvinar ligula, sed pellentesque erat venenatis sit amet. In sagittis nulla ipsum, eget consequat erat finibus non. Praesent sed luctus libero. Proin ultricies porta ligula in blandit. Quisque porta lacinia quam, sit amet interdum lacus bibendum eu. Donec a justo ac elit tempor congue.'),
(9, 1, 'Danau', '1900-12-21', 'Angola', 'Huambo', 'Makanan disini sangat enak, saya bertemu dengan banyak orang dan memperoleh banyak sekali pengalaman. saya berharap bisa kesini lagi suatu saat nanti dan bertemu dengan mereka lagi. \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis, libero ut imperdiet sagittis, felis orci blandit diam, id molestie sapien justo a diam. Curabitur purus elit, pretium sed semper et, consectetur sit amet sem. Morbi in dolor sit amet purus commodo congue. Suspendisse nec elit sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, elit quis varius semper, elit libero sagittis libero, semper vehicula tortor risus a felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius tempor ipsum et luctus. In commodo iaculis orci varius mollis. Ut lacinia consequat convallis. Sed eleifend pulvinar ligula, sed pellentesque erat venenatis sit amet. In sagittis nulla ipsum, eget consequat erat finibus non. Praesent sed luctus libero. Proin ultricies porta ligula in blandit. Quisque porta lacinia quam, sit amet interdum lacus bibendum eu. Donec a justo ac elit tempor congue.'),
(11, 1, 'Kerja', '2016-09-15', '-1', 'Kerja1', 'Makanan disini sangat enak, saya bertemu dengan banyak orang dan memperoleh banyak sekali pengalaman. saya berharap bisa kesini lagi suatu saat nanti dan bertemu dengan mereka lagi. \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis, libero ut imperdiet sagittis, felis orci blandit diam, id molestie sapien justo a diam. Curabitur purus elit, pretium sed semper et, consectetur sit amet sem. Morbi in dolor sit amet purus commodo congue. Suspendisse nec elit sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, elit quis varius semper, elit libero sagittis libero, semper vehicula tortor risus a felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius tempor ipsum et luctus. In commodo iaculis orci varius mollis. Ut lacinia consequat convallis. Sed eleifend pulvinar ligula, sed pellentesque erat venenatis sit amet. In sagittis nulla ipsum, eget consequat erat finibus non. Praesent sed luctus libero. Proin ultricies porta ligula in blandit. Quisque porta lacinia quam, sit amet interdum lacus bibendum eu. Donec a justo ac elit tempor congue.'),
(14, 1, 'Dubai', '2016-09-09', 'Aruba', 'Aruba', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis, libero ut imperdiet sagittis, felis orci blandit diam, id molestie sapien justo a diam. Curabitur purus elit, pretium sed semper et, consectetur sit amet sem. Morbi in dolor sit amet purus commodo congue. Suspendisse nec elit sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, elit quis varius semper, elit libero sagittis libero, semper vehicula tortor risus a felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius tempor ipsum et luctus. In commodo iaculis orci varius mollis. Ut lacinia consequat convallis. Sed eleifend pulvinar ligula, sed pellentesque erat venenatis sit amet. In sagittis nulla ipsum, eget consequat erat finibus non. Praesent sed luctus libero. Proin ultricies porta ligula in blandit. Quisque porta lacinia quam, sit amet interdum lacus bibendum eu. Donec a justo ac elit tempor congue.'),
(16, 1, 'Rumah', '2016-09-21', 'Albania', 'Bulqize', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis, libero ut imperdiet sagittis, felis orci blandit diam, id molestie sapien justo a diam. Curabitur purus elit, pretium sed semper et, consectetur sit amet sem. Morbi in dolor sit amet purus commodo congue. Suspendisse nec elit sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, elit quis varius semper, elit libero sagittis libero, semper vehicula tortor risus a felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius tempor ipsum et luctus. In commodo iaculis orci varius mollis. Ut lacinia consequat convallis. Sed eleifend pulvinar ligula, sed pellentesque erat venenatis sit amet. In sagittis nulla ipsum, eget consequat erat finibus non. Praesent sed luctus libero. Proin ultricies porta ligula in blandit. Quisque porta lacinia quam, sit amet interdum lacus bibendum eu. Donec a justo ac elit tempor congue.'),
(18, 1, 'Hujan', '2016-09-09', 'Albania', 'Berat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis, libero ut imperdiet sagittis, felis orci blandit diam, id molestie sapien justo a diam. Curabitur purus elit, pretium sed semper et, consectetur sit amet sem. Morbi in dolor sit amet purus commodo congue. Suspendisse nec elit sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis, elit quis varius semper, elit libero sagittis libero, semper vehicula tortor risus a felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris varius tempor ipsum et luctus. In commodo iaculis orci varius mollis. Ut lacinia consequat convallis. Sed eleifend pulvinar ligula, sed pellentesque erat venenatis sit amet. In sagittis nulla ipsum, eget consequat erat finibus non. Praesent sed luctus libero. Proin ultricies porta ligula in blandit. Quisque porta lacinia quam, sit amet interdum lacus bibendum eu. Donec a justo ac elit tempor congue.'),
(19, 1, 'My Trip', '2016-09-06', 'Afghanistan', 'Badakhshan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dictum eu diam a pellentesque. Aliquam aliquet leo a leo scelerisque ornare. Vestibulum tincidunt faucibus mauris sit amet faucibus. Suspendisse quis varius libero. Phasellus molestie quam eget maximus sodales. Vestibulum non tristique tellus. Proin venenatis tortor sodales nisl iaculis lobortis.\r\n\r\nMaecenas blandit accumsan laoreet. Curabitur suscipit arcu a suscipit imperdiet. Phasellus blandit ullamcorper metus quis dapibus. Suspendisse malesuada lectus dolor. Praesent in egestas lacus. Nunc faucibus sed ante ut volutpat. Suspendisse at interdum enim. Mauris odio nibh, molestie nec purus sed, efficitur efficitur eros. Cras ac velit lacinia, ullamcorper lacus id, aliquam urna. Maecenas vitae felis sit amet eros placerat commodo. Duis ante ex, iaculis nec nunc id, interdum eleifend tortor. Cras volutpat metus at eros vulputate sodales. Aenean vel facilisis velit. Fusce sed quam at urna placerat luctus.'),
(20, 0, 'Berenang', '2016-09-07', 'Indonesia', 'Jawa Barat', 'Jawa Barat dengan segala keindahan alamnya'),
(21, 0, 'Bermain', '2016-09-01', 'Egypt', 'Aswan', 'Bermain di tengah padang pasir'),
(22, 0, 'Newest', '2016-09-13', 'Afghanistan', 'Badghis', 'yeeeeha');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `img_path`) VALUES
(1, 'Dwikypedia', 'Rudwiky Okta Putra', 'wiky@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'assets/image/user/Dwikypedia.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
