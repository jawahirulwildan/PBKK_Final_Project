-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 18, 2023 at 03:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_sepeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `bicycle_id` int(11) NOT NULL,
  `cf_name` varchar(100) NOT NULL,
  `cl_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `nid` varchar(100) DEFAULT NULL,
  `w_start` date NOT NULL,
  `w_end` date NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `invoice_id` varchar(100) DEFAULT NULL,
  `c_address` varchar(400) DEFAULT NULL,
  `c_pass` varchar(30) NOT NULL,
  `extra` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `bicycle_id`, `cf_name`, `cl_name`, `c_email`, `c_mobile`, `nid`, `w_start`, `w_end`, `payment_type`, `invoice_id`, `c_address`, `c_pass`, `extra`) VALUES
(1, 5, 'Doni', 'William', 'doniwilliam@gmail.com', '0812345678', NULL, '2021-05-04', '2023-05-04', 'Cash', NULL, NULL, '1234', NULL),
(2, 7, 'Toni', 'Siregar', 'tonisire@gmail.com', '0812456789', NULL, '2021-05-04', '2023-05-04', 'Cash', NULL, NULL, '1234', NULL),
(3, 2, 'Prima', 'Regi', 'regiprima@gmail.com', '0812323278', NULL, '2021-05-04', '2023-05-09', 'Debit', NULL, NULL, '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `manufacturer_name` varchar(255) NOT NULL,
  `manufacturer_logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `manufacturer_name`, `manufacturer_logo`) VALUES
(1, 'Element', ''),
(2, 'Marin', ''),
(3, 'Pacific', ''),
(4, 'Polygon', ''),
(5, 'United', ''),
(6, 'Wimcycle', ''),
(7, 'Tsunami', ''),
(8, 'Police', '');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `model_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `manufacturer_id`, `model_name`, `model_description`) VALUES
(1, 2, 'Marin Sepeda Gunung Bobcat Trail 4', 'Memuaskan hobi tidak selalu mudah dengan harga yang terjangkau, Marin Bobcat Trail 4 Mountain Bike hadir sebagai terobosan untuk menjawab kekhawatiran Anda. Sepeda Trail ini dirancang untuk pengendara sepeda motor yang suka merasakan petualangan rekreasi lintas alam yang tak terlupakan. Anggaran atau keterampilan merupakan hal penting untuk memiliki seorang pengendara sepeda gunung yang mumpuni. Dibuat dengan desain geometri trail modern, Bobcat Trail 4 adalah pilihan sempurna untuk pengalaman berkendara singletrack jangka pendek atau jangka panjang dengan harga terjangkau.'),
(2, 2, 'Marin Sepeda Gunung Bobcat Trail 5', 'Memuaskan hobi tidak selalu mudah dengan harga yang terjangkau, Marin Bobcat Trail 5 Mountain Bike hadir sebagai terobosan untuk menjawab kekhawatiran Anda. Sepeda Trail ini dirancang untuk pengendara sepeda motor yang suka merasakan petualangan rekreasi lintas alam yang tak terlupakan. Anggaran atau keterampilan merupakan hal penting untuk memiliki seorang pengendara sepeda gunung yang mumpuni. Dibuat dengan desain geometri trail modern, Bobcat Trail 5 adalah pilihan sempurna untuk pengalaman berkendara singletrack jangka pendek atau jangka panjang dengan harga terjangkau.'),
(3, 5, 'United Detroit 1.00', 'United Detroit 1.00 menggunakan frame yang terbuat dari material alloy, yang sudah disematkan teknologi internal cable route (jalur kabel masuk ke dalam rangka) sehingga lebih rapi. Difasilitasi dengan 3 x 8 pilihan kecepatan (operan gigi), sehingga memberikan fleksibilitas dalam mengatur kecepatan saat berkendara. Dibekali dengan rem cakram mekanik yang pakem. Roda dapat dilepas pasang dengan mudah dan cepat tanpa menggunakan alat.'),
(4, 5, 'United Monanza 4.00', 'United Monanza 4.00 menggunakan frame yang terbuat dari material alloy, yang sudah disematkan teknologi internal cable route (jalur kabel masuk ke dalam rangka) sehingga lebih rapi. Menggunakan fork Breach T120mm lockout. Difasilitasi dengan 3 x 8 pilihan kecepatan (operan gigi), sehingga memberikan fleksibilitas dalam mengatur kecepatan saat berkendara. Ban berukuran 27.5 inci, sehingga memberikan keseimbangan antara kecepatan dan manuverabilitas. Dibekali dengan rem cakram mekanik yang pakem. Roda dapat dilepas pasang dengan mudah dan cepat tanpa menggunakan alat.'),
(5, 1, 'Element Troy X 10s UV 16', 'Element Troy X 10s UV menggunakan frame yang terbuat dari material chromoly. Ban berukuran 16 inci. Difasilitasi dengan 10 pilihan kecepatan. Rem cakram yang sangat pakem tanpa mengandalkan cengkeraman jari pada saat mengerem mendadak atau saat turunan tajam. Memakai teknologi hydraulic yang sama dengan pengereman kendaraan bermotor. Dapat dilipat pada bagian rangka, handle post, dan pedal, sehingga menjadi lebih ringkas dan mudah disimpan, juga sangat praktis untuk dibawa ke tempat-tempat tertentu atau disimpan di ruang yang terbatas.'),
(6, 8, 'Police Texas 8 20', 'Police Texas 8 Speed Bike to Work menggunakan frame yang terbuat dari material alloy, sepeda ini menjadi lebih ringan dan tahan karat. Ban berukuran 20 inci. Difasilitasi dengan 8 pilihan kecepatan. Dibekali dengan rem cakram mekanik yang pakem.Dilengkapi dengan tas depan belakang, standar samping, bagasi belakang dan front block (untuk meletakkan tas depan pada sepeda lipat). Dapat dilipat pada bagian rangka, handle post, dan pedal, sehingga menjadi lebih ringkas dan mudah disimpan, juga sangat praktis untuk dibawa ke tempat-tempat tertentu atau disimpan di ruang yang terbatas.'),
(7, 3, 'Pacific Astina 5.0 18', 'Sepeda Pacific Astina 5.0 18 Inci merupakan produk sepeda anak dari pabrikan sepeda Pacific. Sepeda Pacific Astina 5.0 18 inci ini dapat menjadi pilihan yang baik untuk anak-anak yang ingin belajar bersepeda dengan nyaman dan aman. Pastikan untuk selalu mengawasi anak saat menggunakan sepeda, dan memastikan anak-anak memakai perlindungan yang sesuai seperti helm dan pelindung siku dan lutut. '),
(8, 4, 'Polygon Alice 16', 'Sepeda Polygon Alice 16 Inci merupakan produk sepeda anak dari pabrikan sepeda Polygon. Sepeda Polygon Alice 16 inci ini dapat menjadi pilihan yang baik untuk anak-anak yang ingin belajar bersepeda dengan nyaman dan aman. Pastikan untuk selalu mengawasi anak saat menggunakan sepeda, dan memastikan anak-anak memakai perlindungan yang sesuai seperti helm dan pelindung siku dan lutut. '),
(9, 6, 'Wimcycle Big Foot 20', 'Kini pabrikan Wimcycle kembali mengembangkan sepeda kategori BMX terbarunya, yaitu Sepeda Wimcycle Big Foot. Dilengkapi dengan frame berbahan steel yang kuat dan tahan banting. Sepeda ini didesain dengan pilihan warna yang cerah sehingga terlihat lebih ceria dan sporty. Wimcycle Big Foot ini adalah salah satu rekomendasi sepeda BMX dari kami, dimana sepeda ini cocok untuk mereka pecinta sepeda BMX. Sistem pengereman sederhana, lebih hemat biaya perawatan. Bentuk rangka yang stylish dan trendy juga menjadi daya tarik untuk sepeda ini sendiri.'),
(10, 7, 'Tsunami SNM100 700c Bulhorn', 'Fixie Tsunami SNM100 700c Bulhorn ini merupakan sepeda custom dengan frame dari pabrikan Tsunami, kami menghadirkan pilihan yang menarik bagi para pecinta sepeda Fixie. Cocok digunakan di medan jalan raya / onroad ini, dan memiliki desain yang sporty dan mewah.\n Rangka Aluminum alloy T6061. Rem Doltrap. Stang Bullhorn. Tersedia pilihan ukuran frame (52) untuk tinggi badan mulai dari 162cm, dan bobot maksimal 115kg. Ini memastikan bahwa sepeda dapat disesuaikan dengan ukuran pengendara.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `su` int(11) DEFAULT 0,
  `type` varchar(15) NOT NULL,
  `position` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthday` date NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `su`, `type`, `position`, `email`, `password`, `first_name`, `last_name`, `gender`, `birthday`, `mobile`, `address`) VALUES
(0, 1, 'admin', 'Super Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', '1985-10-15', '00000000', 'admin'),
(0, 1, 'employee', 'Finance', 'fatin@gmail.com', 'fa5473530e4d1a5a1e1eb53d2fedb10c', 'Fatin', 'Rosa', 'female', '1988-04-01', '081212512', 'Jalan Kunta no 5'),
(0, 1, 'employee', 'Sales', 'dimasss@gmail.com', 'fa5473530e4d1a5a1e1eb53d2fedb10c', 'Dimas', 'Alhadi', 'male', '1988-08-31', '081245892', 'Jalan Sukarno Hatta no 10'),
(0, 0, 'employee', 'Customer Service', 'putra_alvin@gmail.com', 'fa5473530e4d1a5a1e1eb53d2fedb10c', 'Alvin', 'Putra', 'male', '1992-02-14', '081287461', 'Jalan Mawar no 9');

-- --------------------------------------------------------

--
-- Table structure for table `bicycle`
--

CREATE TABLE `bicycle` (
  `bicycle_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `buying_price` double NOT NULL,
  `selling_price` double DEFAULT NULL,
  `Wheel_size` int(11) NOT NULL,
  `color` varchar(15) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `sold_date` datetime DEFAULT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'available',
  `registration_year` int(4) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `featured` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bicycle`
--

INSERT INTO `bicycle` (`bicycle_id`, `manufacturer_id`, `model_id`, `category`, `buying_price`, `selling_price`, `Wheel_size`, `color`, `add_date`, `sold_date`, `status`, `registration_year`, `user_id`, `image`, `featured`) VALUES
(1, 2, 1, 'Mountain Bike', 4800000, NULL, 29, 'Red', '2023-12-17 17:48:44', NULL, 'available', 2020, 6, 'marin-bobcat.jpg', 1),
(2, 2, 2, 'Mountain Bike', 6800000, 7200000, 29, 'Grey', '2023-12-17 17:48:44', '2023-12-18 07:30:00', 'sold', 2020, 6, 'marin-bobcat-5.jpg', 1),
(3, 5, 3, 'Mountain Bike', 1750000, NULL, 27, 'Red', '2023-12-17 17:48:44', NULL, 'available', 2023, 6, 'united-detroit-1.jpg', 1),
(4, 5, 4, 'Mountain Bike', 2750000, NULL, 27, 'Blue', '2023-12-17 17:48:44', NULL, 'available', 2023, 6, 'united-monanza-4.jpg', 1),
(5, 1, 5, 'Folding Bike', 3500000, 3850000, 16, 'Dark Gold', '2023-12-17 17:48:44', '2023-12-18 07:15:00', 'sold', 2023, 6, 'element-troy-x.jpg', 1),
(6, 8, 6, 'Folding Bike', 2010000, NULL, 20, 'Black Yellow', '2023-12-17 17:48:44', NULL, 'available', 2023, 6, 'police-texas-8.jpg', 1),
(7, 3, 7, 'Kids Bike', 1300000, 1500000, 18, 'Purple', '2023-12-17 17:48:44', '2023-12-18 08:15:00', 'sold', 2023, 6, 'pacific-astina-16.jpg', 1),
(8, 4, 8, 'Kids Bike', 1750000, NULL, 16, 'Pink', '2023-12-17 17:48:44', NULL, 'available', 2022, 6, 'polygon-alice-16.jpg', 1),
(9, 6, 9, 'BMX', 1525000, NULL, 20, 'Silver', '2023-12-17 17:48:44', NULL, 'available', 2022, 6, 'wimcycle-20-big-foot-2.jpg', 1),
(10, 7, 10, 'Fixie', 6300000, NULL, 29, 'Black', '2023-12-17 17:48:44', NULL, 'available', 2023, 6, 'sepeda-fixie-tsunami-snm1.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `b_id_2` (`bicycle_id`),
  ADD UNIQUE KEY `c_id` (`c_id`),
  ADD UNIQUE KEY `invoice_id` (`invoice_id`),
  ADD KEY `b_id` (`bicycle_id`),
  ADD KEY `c_id_2` (`c_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
