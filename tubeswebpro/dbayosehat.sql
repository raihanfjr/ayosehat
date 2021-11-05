-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 01:23 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbayosehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id_artikel` int(11) NOT NULL,
  `id_dr` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id_artikel`, `id_dr`, `photo`, `title`, `body`) VALUES
(6, 5, 'asal muasal corona virus.png', 'Asal Muasal Corona Virus', 'Beberapa waktu lalu, muncul berbagai teori mengenai asal usul virus corona baru yang menyebabkan penyakit Covid-19. Ada yang menyatakan jika virus corona berasal dari kebocoran lab Wuhan, dari meteor yang meledak di Tiongkok, atau berkaitan dengan uji coba 5G. \r\n\r\nBanyak teori-teori konspirasi yang berseliweran di jagat dunia maya mengenai virus corona ini. Salah satu yang cukup viral adalah bahwa virus corona sudah diprediksi akan muncul pada tahun 2020 di Wuhan melalui sebuah buku fiksi berjudul The Eyes of Darkness yang diterbitkan pada tahun 1981. Namun, benarkah demikian?\r\n\r\nVirus corona berasal dari mana?\r\nSebagian infeksi akibat virus corona, termasuk MERS dan SARS berasal dari kelelawar. Pada kasus infeksi MERS-CoV, ketika air liur atau urine kelelawar yang membawa virus termakan unta, maka unta akan terinfeksi dan menjadi perantara. \r\n\r\nSelanjutnya, unta pun menulari manusia melalui kontak langsung dengan susu, urine atau dagingnya. Lalu, manusia yang telah terinfeksi akan menulari manusia lainnya melalui tetesan air liur saat batuk atau bersin. Sementara pada kasus SARS, yang menjadi hewan perantara yaitu musang dan rakun. Karena virus SARS-CoV-2 masih baru, maka terdapat beberapa kemungkinan mengenai asal muasal virus ini, yaitu:\r\n\r\nKelelawar\r\nSama halnya dengan MERS dan SARS, virus corona SARS CoV-2 pun dipercaya berasal dari kelelawar. Sebuah penelitian yang diterbitkan pada 30 Januari lalu menemukan bukti bahwa kelelawar-lah yang sebenarnya menjadi asal dari infeksi ini. Melalui analisis filogenetik, menunjukkan bahwa virus SARS CoV-2 memiliki kemiripan dengan dua virus corona yang menyerupai SARS dari kelelawar.\r\n\r\nAkan tetapi, meski analisis filogenetik menunjukkan hal tersebut, namun bagaimana virus ini berpindah dari populasi hewan ke manusia belum ditemukan. Sebelumnya, hewan yang dijual di pasar makanan laut Wuhan digadang-gadang menjadi inang perantara yang memfasilitasi kemunculan virus SARS-CoV-2 pada manusia. Namun, pada 5 dari 7 kasus Covid-19 yang pertama tidak memiliki keterkaitan dengan pasar makanan laut Wuhan tersebut.\r\n\r\nPangolin atau trenggiling\r\nSelain kelelawar, trenggiling juga dipercaya menjadi pembawa virus SARS-CoV-2. Para peneliti di South China Agricultural University menganalisis lebih dari seribu sampel metagenome hewan liar. Mereka menemukan bahwa pangolin atau trenggiling lah yang paling mungkin menjadi inang perantara virus tersebut. Sebab, urutan strain coronavirus yang dikumpulkan dari metagenome trenggiling 99% identik dengan pasien virus corona.\r\n\r\nUlar\r\nDi pasar Huanan di Wuhan, ular adalah reptil yang sangat diminati sehingga para peneliti pun curiga apakah ular menjadi awal penyebaran virus corona. Lalu, peneliti melakukan analisis kode protein terhadap ular apakah memiliki kode yang sama dengan virus corona. Hasilnya, ditemukan kemiripan kode protein. Karena hasil tersebut, ular diduga menjadi asal pembawa virus corona baru.\r\n\r\nSeorang profesor yang menjadi tim peneliti tersebut juga menyatakan, meski penelitian sebelumnya menemukan bahwa  virus corona baru ini berasal dari kelelawar namun hewan tersebut tidur di musim dingin sehingga tak mungkin menyebabkan wabah. Meski begitu, penelitian ini belum dipublikasikan dan masih sebatas siaran pers.'),
(7, 5, 'mencegah corona.png', 'Intip Cara Mencegah Corona', 'Virus corona menyebar saat orang terinfeksi batuk dan menyebarkan percikan atau cipratan yang mengandung virus ke udara.\r\n\r\nIni bisa terhirup masuk atau menyebabkan infeksi jika anda menyentuh mata, hidung atau mulut dengan tangan yang menyentuh permukaan tempat virus jatuh.\r\n\r\nMenurut Organisasi Kesehatan Dunia, WHO, hal yang paling penting mencegah penularan adalah menjaga kebersihan.\r\n\r\nSering cuci tangan dengan sabun dan air atau dengan gel pembersih. Langkah ini dapat membunuh virus di tangan.\r\nJangan menyentuh mata, hidung, mulut. Tangan yang menyentuh banyak permukaan dapat membawa virus. Dari situ, virus masuk ke tubuh bila Anda menyentuh wajah.\r\nBagaimana kita ikut mencegah penyebaran?\r\nTutup mulut bila batuk dan bersin.\r\nTidak menyentuh muka dengan tangan dan hindari kotak langsung dengan orang yang terinfeksi.\r\nBuang tisu bekas bersin segera. Ini untuk menghindari air liur yang mengandung virus menyebar ke orang lain\r\nOrang diminta menjaga jarak paling tidak dua meter, kira-kira dua kali bentangan tangan satu sama lain.\r\nBila kita di luar, WHO mengatakan penting untuk menghindari berjabat tangan dan \"menyapa dengan aman\" seperti melambaikan tangan atau mengangguk.\r\n'),
(8, 5, 'olahraga.png', 'Tips Olahraga Di Rumah Untuk Mengisi Waktu Luang', 'Beraktivitas dari rumah, baik bekerja atau belajar selama pandemi virus corona ini, tetap harus diiringi dengan olahraga agar tubuh tetap bugar. Anda dapat berolahraga ringan sembari beraktivitas dari rumah bersama dengan keluarga.\r\n\r\nTubuh yang bugar dan rajin berolahraga memiliki sistem imun yang kuat yang dapat menangkal kuman, bakteri dan virus. Bertepatan dengan peringatan Hari Kesehatan Dunia atau World Health Day setiap 7 April, Greenfields membagikan tips berolahraga ringan di sela-sela aktivitas di rumah.\r\n\r\nBerikut tips olahraga ringan saat beraktivitas di rumah.\r\n\r\n1. Menari\r\nPada pagi hari sebelum memulai aktivitas, pasang lagu favorit dengan tempo upbeat lalu menarilah dengan intensif. Gerakan pagi hari ini dapat memompa semangat sepanjang hari. Ajak anak dan seluruh anggota keluarga untuk menari bersama.\r\n\r\nAnda juga bisa mencoba tantangan TikTok untuk menari bersama.\r\n\r\n2. Plank\r\nLakukan gerakan plank atau menumpu badan pada siku setiap kali menunggu air mendidih saat menyeduh kopi atau teh.\r\n\r\nPlank bermanfaat untuk membuat perut tetap ramping.\r\n\r\n3. Squat\r\nCoba lakukan gerakan squat setiap kali iklan di TV muncul atau ketika jeda episode drama yang sedang ditonton. Gerakan ini dapat mengaktifkan otot-otot di tubuh.\r\n\r\n4. Peregangan\r\nPeregangan dapat dilakukan setiap kali menyelesaikan tugas kantor. Bisa juga setiap kali Anda selesai menelepon atau video call dengan rekan kantor.\r\n\r\n5. Wood Chop\r\nAnda juga bisa mencoba gerakan wood chop saat sedang ngemil. Wood chop bisa dilakukan dengan mengangkat toples makanan.\r\n\r\n6. Bicep curl\r\nLatihan otot bisep juga bisa dilakukan dengan mengangkat beban. Carilah benda yang mudah dipegang seperti galon kecil. Anda juga bisa memulai dari botol minum besar yang berisi air.\r\n\r\nLakukan olahraga ringan ini saat beraktivitas agar tubuh tetap bugar. ');

-- --------------------------------------------------------

--
-- Table structure for table `d_users`
--

CREATE TABLE `d_users` (
  `id` int(11) NOT NULL,
  `id_rs` int(11) NOT NULL,
  `jenis_dokter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_users`
--

INSERT INTO `d_users` (`id`, `id_rs`, `jenis_dokter`) VALUES
(5, 3, 'Dokter Spesialis Jantung'),
(6, 3, 'Dokter Spesialis Kecantikan'),
(7, 1, 'Dokter Umum'),
(8, 4, 'Dokter Spesialis Anak'),
(9, 2, 'Dokter Spesialis Kulit'),
(10, 2, 'Dokter Spesialis Jantung'),
(11, 1, 'Dokter Spesialis Kecantikan');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospitals_id` int(11) NOT NULL,
  `hospitals_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospitals_id`, `hospitals_name`, `address`) VALUES
(1, 'Rumah Sakit Permata Cibubur', 'Jl. Alternatif Cibubur No.6A, RT.001/RW.002, Jatikarya, Kec. Jatisampurna, Kota Bks, Jawa Barat 17435'),
(2, 'Rumah Sakit Hassan Sadikin', 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161'),
(3, 'Rumah Sakit Persahabatan', 'Jl. Persahabatan Raya No.1 Jakarta Timur 13230'),
(4, 'Rumah Sakit Permata Depok', 'Jl. Raya Muchtar No.22, Sawangan Baru, Kec. Sawangan, Kota Depok, Jawa Barat 16511');

-- --------------------------------------------------------

--
-- Table structure for table `keluhans`
--

CREATE TABLE `keluhans` (
  `konsultasi_id` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_dr` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `dr_name` varchar(100) NOT NULL,
  `hospitals_name` varchar(100) NOT NULL,
  `konsultasi_date` date NOT NULL,
  `keluhan` text NOT NULL,
  `kondisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluhans`
--

INSERT INTO `keluhans` (`konsultasi_id`, `id_akun`, `id_dr`, `name`, `email`, `birth_date`, `jenis_kelamin`, `dr_name`, `hospitals_name`, `konsultasi_date`, `keluhan`, `kondisi`) VALUES
(3, 1, 6, 'Muhammad Raihan Fijar Awalivian', 'fijarraihan1@gmail.com', '2020-04-25', 'Pria', 'Rahma Ainun Nisa', 'Rumah Sakit Persahabatan', '2020-04-26', 'Tugas ga kelar kelar, ga kuat bu dokter', 'Diproses'),
(4, 1, 5, 'Muhammad Raihan Fijar Awalivian', 'fijarraihan1@gmail.com', '2020-04-25', 'Pria', 'Muhammad Raihan Fijar Awalivian', 'Rumah Sakit Permata Cibubur', '2020-04-15', 'Rank saya kalah terus pak dokter, Pusing jadinya', 'Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `birth_date`, `jenis_kelamin`, `role_id`, `date_created`) VALUES
(1, 'Muhammad Raihan Fijar Awalivian', 'fijarraihan1@gmail.com', 'default.jpg', '$2y$10$ryAgSE.FgwhFkhbEDDkyGeQkPubY7utT4qvONjaQChbgAqAUc3LoW', '2020-04-25', 'Pria', 2, 1587774970),
(2, 'Muhammad Zulkarnaen Yudha Bahari', 'zulkarnaenyudha@gmail.com', 'default.jpg', '$2y$10$NF.v8VkcgpgEq0kTsWEv7ut.xqKem.qF70nuqyd2L8j5r0cvu/fDm', '2000-03-15', 'Pria', 2, 1587775497),
(5, 'Muhammad Raihan Fijar Awalivian', 'fijarraihan@gmail.com', 'default.jpg', '$2y$10$mDOhF.n.I.Uzhpeg01yY6.TlguTLieJ/ING83yGov7DM0CE8oWsPi', '2020-04-01', 'Pria', 1, 1587806769),
(6, 'Rahma Ainun Nisa', 'rahmaainisa@gmail.com', 'default.jpg', '$2y$10$e6D3YTpS1KGUGVUqPKyYIe8mJbKsIe9Nv2GcjiOeTKIyus25S2GRK', '2020-04-24', 'Wanita', 1, 1587808569),
(7, 'Muhamad Zulkarnaen Yudha Bahari', 'yudhazulkarnaen@gmail.com', 'default.jpg', '$2y$10$MAsbqGuO/yCwVbplP7P1uOMBcTNmAG0U2.UzCezm0xZvKnOkanGnS', '2020-04-30', 'Pria', 1, 1588004070),
(8, 'Gita Safitri', 'gitasafitri@gmail.com', 'default.jpg', '$2y$10$w4mqJMTcfAK9CInp2SwWL.umVZZ3niQXzIa2YwV8GWXpKTsTgf682', '2020-04-22', 'Wanita', 1, 1588004749),
(9, 'Rochi Eko Pambudi', 'rochieko@gmail.com', 'default.jpg', '$2y$10$J0mfJ5MdyC84ScaazoQRgOa.ZXRgkO.MZwfHu.VaqBU/yXU/XELEa', '2020-04-16', 'Pria', 1, 1588004819),
(10, 'Putu Harry Gunawan', 'putuharry@gmail.com', 'default.jpg', '$2y$10$LBTgjwmLGzJKbdvlAK00KONCX8goOnthWmbICS4oLjfk22wfx8QPK', '2020-04-09', 'Pria', 1, 1588005048),
(11, 'Aditya Ramadhan', 'adityaramadhan@gmail.com', 'default.jpg', '$2y$10$gveS5lDBBVGpZUyf09kIpeLXMEB7TvFUGJZdQqC7QV7zFDW.PT0Ma', '2020-04-25', 'Pria', 1, 1588005123);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Dokter'),
(2, 'Pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `d_users`
--
ALTER TABLE `d_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hospitals_id`);

--
-- Indexes for table `keluhans`
--
ALTER TABLE `keluhans`
  ADD PRIMARY KEY (`konsultasi_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `d_users`
--
ALTER TABLE `d_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hospitals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keluhans`
--
ALTER TABLE `keluhans`
  MODIFY `konsultasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
