-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 12:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `judul_blog` varchar(100) NOT NULL,
  `tanggal_blog` date NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `sumber` varchar(200) NOT NULL,
  `penulis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul_blog`, `tanggal_blog`, `content`, `image`, `penerbit`, `sumber`, `penulis`) VALUES
(1, 'Adobe Photoshop', '2018-04-02', 'Adobe Photoshop, atau biasa disebut Photoshop, adalah perangkat lunak editor citra buatan Adobe Systems yang dikhususkan untuk pengeditan foto/gambar dan pembuatan efek. Perangkat lunak ini banyak digunakan oleh fotografer digital dan perusahaan iklan sehingga dianggap sebagai pemimpin pasar (market leader) untuk perangkat lunak pengolah gambar/foto, dan, bersama Adobe Acrobat, dianggap sebagai produk terbaik yang pernah diproduksi oleh Adobe Systems. Versi kedelapan aplikasi ini disebut dengan nama Photoshop CS (Creative Suite), versi sembilan disebut Adobe Photoshop CS2, versi sepuluh disebut Adobe Photoshop CS3 , versi kesebelas adalah Adobe Photoshop CS4 , versi keduabelas adalah Adobe Photoshop CS5 , dan versi terbaru adalah Adobe Photoshop CC.Photoshop tersedia untuk Microsoft Windows, Mac OS X, dan Mac OS; versi 9 ke atas juga dapat digunakan oleh sistem operasi lain seperti Linux dengan bantuan perangkat lunak tertentu seperti CrossOver.', 'photoshop.png', 'Adobe Photoshop', 'Google', 'Adobe Photoshop'),
(2, 'Corel Draw', '2018-04-02', 'Suatu program yang baik tentu saja memiliki keunggulan yang signifikan. Beberapa keunggulan program Corel Draw antara lain adalah:\r\n\r\nGambar yang dihasilkan dengan vektor atau berbasis vektor bisa ditekan pada tingkat yang paling rendah namun hasilnya tidak kalah dengan gambar yang berbasis bitmap atau raster.\r\nPenggunaan Corel Draw, terutama pada tool-tool yang ada di dalamnya sangat mudah dipahami oleh penggunanya, bahkan oleh orang yang baru pertama menggunakannya.\r\nCorel Draw sangag baik untuk mengkolaborasikan antara tulisan dengan gambar, seperti layaknya Adobe Potoshop.\r\nBanyaknya pengguna Corel Draw, membuat adanya komunitas dengan jumlah anggota yang besar. Hal ini akan membuat kita tidak kesulitan jika ingin mempelajari Corel Draw lebih mendalam karena banyak ditemukan tutorial, tips dan trik yang diproduksi oleh pengguna lain.', 'corel.png', 'Corel Draw', 'Google', 'Corel Draw'),
(9, 'bngf', '2018-02-06', 'ghgf', '1_(6).jpg', '', '', ''),
(11, 'pemandangan', '0000-00-00', 'gunung', '1_(6)1.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
