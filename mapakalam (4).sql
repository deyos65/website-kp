-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2019 pada 20.57
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mapakalam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `angkatan`
--

CREATE TABLE `angkatan` (
  `id` int(11) NOT NULL,
  `nama_angkatan` varchar(128) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `angkatan`
--

INSERT INTO `angkatan` (`id`, `nama_angkatan`, `tahun`) VALUES
(2, 'Kabut Candra', 2016),
(3, 'lembah halimun', 2017),
(4, 'esa bara', 2012),
(5, 'Rimba Jati', 1979),
(6, 'Buana Giri', 1980),
(7, 'Asta Buana', 2015),
(8, 'Embun Rimba', 2014),
(9, 'Rimba Raya', 1981),
(10, 'Kabut Lembah', 1982),
(11, 'Hujan Kabut', 1983),
(12, 'Angin Kabut', 1984),
(13, 'Chandra Buana', 1986),
(14, 'Tapak Bara', 1987),
(15, 'Wana Bara', 1988),
(16, 'Langlang giri', 1989),
(17, 'Lembah Guntur', 1990),
(18, 'Rawa Rimba', 1991),
(19, 'Banyu Giri', 1992),
(20, 'Kabut Bara', 1993),
(21, 'Tapak Giri', 1994),
(22, 'Lembah Buana', 1995),
(23, 'Kabut Rimba', 1996),
(24, 'Buana Sanggara', 1997),
(25, 'Hujan Lembah', 2000),
(26, 'Kabut Guntur', 1998),
(27, 'Buana Bara', 1999),
(28, 'Hujan Rimba', 2001),
(29, 'Tapak rimba', 2002),
(30, 'Chandra Giri', 2003),
(31, 'Kabut Sanggara', 2004),
(32, 'Rimba Guntur', 2005),
(33, 'Banyu Sanggara', 2007),
(34, 'Rimba Raya', 2008),
(35, 'Bara Rimba', 2009),
(36, 'Badai Rimba', 2010),
(37, 'Bara Senja', 2011),
(38, 'Bara Purnama', 2013),
(39, 'Banyu Purnama', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `waktu_pembuatan` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_inforrmasi`
--

CREATE TABLE `contact_inforrmasi` (
  `id` int(11) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `whatsapp_danus` varchar(20) NOT NULL,
  `contac_informasi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact_inforrmasi`
--

INSERT INTO `contact_inforrmasi` (`id`, `gmail`, `facebook`, `youtube`, `telephone`, `whatsapp`, `whatsapp_danus`, `contac_informasi_id`) VALUES
(1, 'unpas.mapakalam@gmail.com', 'mapak alam unpas', ' mapak alam', '6281220374071', '6281220374071', '6281214370262', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(50) NOT NULL,
  `jenis_kategori` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `jenis_kategori`) VALUES
(5, 'MABIM'),
(7, 'Prestasi'),
(8, 'Program Unggulan'),
(9, 'Program Isidentil'),
(10, 'Program Pembinaan Anggota'),
(11, 'Expedisi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `angkatan_id` int(11) NOT NULL,
  `Jabatan` varchar(128) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `poto_profil` varchar(330) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(50) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT NULL,
  `harga` varchar(30) DEFAULT NULL,
  `contac_informasi_id` int(11) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merchandise`
--

INSERT INTO `merchandise` (`id`, `nama_barang`, `kategori`, `gambar`, `harga`, `contac_informasi_id`, `deskripsi`) VALUES
(1, 'topi', 'Umum', 'a5d63346a45579d52173148454c47db8.jpg', '65.000,00', 1, 'topi modis berbahan canvas membuat topi nyaman dipakai dan keren ketika dipakai           ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `nick_name` varchar(75) NOT NULL,
  `member_number` int(20) NOT NULL,
  `force_name` varchar(50) NOT NULL,
  `place_of_birth` varchar(40) NOT NULL,
  `date_of_birth` date NOT NULL,
  `complate_addres` text NOT NULL,
  `faculty_major` varchar(30) NOT NULL,
  `social_media` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `full_name`, `nick_name`, `member_number`, `force_name`, `place_of_birth`, `date_of_birth`, `complate_addres`, `faculty_major`, `social_media`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `gender`, `phone_number`) VALUES
(12, 'ADMIN', 'MAPAK ALAM', 0, '00000', '', '0000-00-00', '', '', '', 'unpasmapakalam@gmail.com', 'user.png', '$2y$10$GhM.Qz5K/sueCyAkUaqO2ulbnwVChm75Sv0fN69Sta2AKM381/1Xy', 1, 1, 1555374887, 'male', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Public');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administratro'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'edit profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Manajement', 'menu', 'fas fa-fw fa-folder', 1),
(9, 3, 'SubMenu Manajement', 'menu/submenu', 'fas fa-fw fa-folder-plus', 1),
(10, 1, 'Article', 'Admin_article', 'fas fa-fw fa-book-reader', 1),
(12, 1, 'kepengurusan', 'Admin_kepengurusan', 'fas fa fa-sitemap', 1),
(14, 1, 'Table Angkatan', 'Admin_angkatan', 'fas fa-table', 1),
(15, 1, 'Kategori Artikel', 'Admin_kategori', 'fas fa-fw fa-newspaper', 1),
(16, 1, 'Merchandise', 'Admin_merchandise', 'fas fa-fw fa-shopping-bag', 1),
(17, 1, 'contact information', 'admin_contact', 'fas fa-fw fa-address-book', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `contact_inforrmasi`
--
ALTER TABLE `contact_inforrmasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contac_informasi_id` (`contac_informasi_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `angkatan_id` (`angkatan_id`);

--
-- Indeks untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `whatsapp_danus` (`contac_informasi_id`),
  ADD KEY `whatsapp_danus_2` (`contac_informasi_id`),
  ADD KEY `whatsapp_danus_3` (`contac_informasi_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contact_inforrmasi`
--
ALTER TABLE `contact_inforrmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD CONSTRAINT `kepengurusan_ibfk_1` FOREIGN KEY (`angkatan_id`) REFERENCES `angkatan` (`id`);

--
-- Ketidakleluasaan untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  ADD CONSTRAINT `merchandise_ibfk_1` FOREIGN KEY (`contac_informasi_id`) REFERENCES `contact_inforrmasi` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
