-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mar 2017 pada 13.47
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soal_ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_pilihan`
--

CREATE TABLE `soal_pilihan` (
  `nomor` int(11) NOT NULL,
  `pertanyaan` varchar(600) NOT NULL,
  `jawab_a` varchar(250) NOT NULL,
  `jawab_b` varchar(250) NOT NULL,
  `jawab_c` varchar(250) NOT NULL,
  `jawab_d` varchar(250) NOT NULL,
  `jawaban` enum('a','b','c','d','e') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal_pilihan`
--

INSERT INTO `soal_pilihan` (`nomor`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `jawaban`) VALUES
(1, 'Apa arti rambu berikut?', 'Penyempitan jalan', 'Perbaikan jalan', 'Jalan satu jurusan', 'Jalan rusak', 'a'),
(2, 'Apa arti rambu berikut?', 'Wajib berjalan lurus ke depan', 'Jalan satu arah lurus', 'Awal berlakunya rambu sesuai arah panah lalu lintas ke depan', 'Ada jalan menuju ke atas', 'a'),
(3, 'Apa arti rambu berikut?', 'Semua kendaraan dilarang masuk', 'Semua pemakai jalan dilarang masuk', 'Semua kendaraan bermotor dilarang masuk', 'Semua mobil dilarang masuk', 'a'),
(4, 'Apa arti rambu berikut?', 'Rambu petunjuk tempat berbalik arah', 'Tikungan tajam ke kanan', 'Wajib mengikuti arah yang ditentukan pada bundaran', 'Disarankan untuk berputar arah', 'a'),
(5, 'Manakah yang tidak termasuk dalam peralatan pendukung kendaraan beroda dua?', 'Helm yang berstandar SNI', 'Rompi pemantul cahaya', 'Sepatu yang menutup tumit', 'Kacamata Hitam', 'd'),
(6, 'Lampu rem pada kendaraan bermotor sesuai ketentuan adalah?', 'Kuning tua dan menyala berkelip-kelip', 'Hijau dan menyala tidak berkelip', 'Merah dan menyala tidak berkelip', 'Merah dan menyala berkelip-kelip', 'c'),
(7, 'Golongan SIM pakah yang diperlukan jika anda hendak mengendarai motor 250cc?', 'Golongan SIM C', 'Golongan SIM C I', 'Golongan SIM C II', 'Golongan SIM C I dan C II benar', 'd'),
(8, 'Berapa kali batasan maksimal seseorang untuk mengikuti tes mendapatkan SIM (Surat Izin Mengemudi)', '3 kali', '1 kali', '5 kali', 'Tidak ada batasan yaang penting memenuhi persyaratan yang berlaku', 'd'),
(9, 'Anda berjalan dengan kecepatan kurang lebih 30 km per jam mendekati persimpangan yang diatur oleh lampu lalu lintas. Ketika lampu berubah dari warna hijau ke kuning, apa yang anda lakukan?', 'Berhenti', 'Jalan terus', 'Bersiap-siap berhenti karena belum melewati garis berhenti', 'Melihat keadaan, jika aman jalan terus', 'c'),
(10, 'Apabila anda ingin berpindah jalur dengan aman, maka Anda harus', 'Memberikan isyarat secara jelas dan tepat waktunya dengan menggunakan petunjuk arah', 'Yakin bahwa tidak membahayakan pemakai jalan lain', 'Langsung berpindah jalur tanpa melihat pemakai jalan lain', 'Jawaban A dan B benar', 'd'),
(11, 'Pengemudi diharuskan memberikan isyarat dengan petunjuk arah yang berkedip pada waktu', 'Akan berjalan atau akan mengubah arah ke kanan', 'Akan berjalan atau mengubah arah ke kiri', 'Akan berjalan atau akan berhenti', 'Akan merubah arah ke kiri atau ke kanan', 'd'),
(12, 'Teknik mengemudikan sepeda motor yang baik pada saat gerakan membelok adalah', 'Menambah kecepatan pada jarak pendek sebelum mencapai tikungan', 'Memiringkan sepeda motor dan pengemudi kearah pusat tikungan yang sesuai dengan kecepatan dan ketajaman tikungan', 'Memiringkan sepeda motor kearah pusat tikungan dan tetap dalam posisi tegak', 'Memiringkan sepeda motor saat tikungan seperti pembalap', 'b'),
(13, 'Apa kegunaan bahu jalan?', 'Untuk pejalan kaki', 'Untuk berhenti dan parkir', 'Untuk berhenti dalam keadaan darurat', 'Untuk mendahului kendaraan', 'b'),
(14, 'Apa kegunaan helm?', 'Untuk melindungi pandangan pengendara, melindungi pengendara dari panas dan hujan', 'Untuk melindungi kepala dari benturan atau gesekan yang mengakibatkan luka di kepala', 'Untuk menambah penampilan pengendara dan merupakan kelengkapan bagi sepeda motor', 'Untuk penutup dari debu, kotoran dan polusi', 'b'),
(15, 'Kendaraan yang digerakkan oleh peralatan teknik yang berada pada kendaraan itu, disebut?', 'Sepeda Motor', 'Kendaraan bermotor', 'Motor Besar', 'Motor', 'b'),
(16, 'Surat Izin Mengemudi golongan C digunakan untuk:', 'Mengemudikan sepeda motor yang dirancang mampu mencapai kecepatan lebih dari 40 Km per jam', 'Mengemudikan sepeda motor yang diirancang mampu mencapai kecepatan tidak lebih dari 40 Km per jam', 'Mengemudikan sepeda motor dengan kereta samping', 'Pilihan A, B dan C salah', 'a'),
(17, 'Menghadapi lampu kuning yang berkedip-kedip, maka tindakan yang benar adalah:', 'Berjalan terus, kendaraan lain yang harus berhati-hati', 'Setidak-tidaknya berhenti dan beri jalan', 'Mendekati dengan hati hati, mengurangi kecepatan jika perlu berhenti dan beri jalan', 'Berjalan terus', 'c'),
(18, 'Dilarang mendahului kendaraan lain yang sedang berjalan walaupun tidak ada rambu-rambu yang melarangnya pada:', 'Jalan yang menurun', 'Jalan yang berlubang-lubang', 'Jalan tikungan', 'Jalan yang sedang ada pekerjaan', 'c'),
(19, 'Pengemudi dilarang berhenti:', 'Pada belokan, persimpangan dan jembatan', 'Tanpa terpaksa pada belokan, persimpangan, jembatan dan pada jalan-jalan yang ada rambu larangan berhenti', 'Tanpa terpaksa, berhenti pada jalan belokan, persimpangan, jembatan dan pada jalan-jalan yang ada rambu larangan parkir', 'Tidak dalam keadaaan darurat', 'b'),
(20, 'Dilarang parkir kendaraaan:', 'Di belokan/ persimpangan jalan milik perkebunan yang tidak ada tanda larangan berhenti', 'Pada jalan naik/turun', 'Di belokan, persimpangan-persimpangan jalan, jembatan dan tempat lain yang ada rambu larangan parkir', 'Di persimpangan jalan', 'c'),
(21, 'Pada suatu ruas jalan ada 2(dua) macam marka jalan berupa tanda garis membujur berwarna putih yang satu utuh dan yang disebelahnya lagi putus-putus, tanda garis mana yang harus dipatuhi oleh pengemudi:', 'Yang terdekat', 'Yang terjauh', 'Kedua-duanya', 'Terserah pengemudi', 'a'),
(22, 'SIM apakah yang perlu dimiliki, bila anda akan mengemudikan sepeda motor 300cc dengan kereta samping', 'SIM C', 'SIM A', 'SIM D', 'SIM B', 'a'),
(23, 'Pengemudi kendaraan bermotor yang terbukti beberapa kali melakukan pelanggaran lalu lintas atau pengemudi kendaraan bermotor yang terlibat sebagai tersangka dalam kasus kecelakaan lalu lintas dengan korban luka berat atau meninggal dunia, maka Polri berwenang untuk:', 'Membatalkan SIMnya', 'Melakukan uji ulang', 'Mencabut SIMnya', 'Pemblokiran SIM', 'b'),
(24, 'Apabila petugas mengatur lalu lintas dengan semprita, tiupan panjang satu kali, berarti:', 'Jalan ', 'Berhenti', 'Meminta perhatian pemakai jalan', 'Meminta uang receh', 'b'),
(25, 'Tanda kendaraan bermotor dianggap sah apabila:', 'Dibuat sendiri oleh pemilik kendaraan bermotor, asalkan sesuai dengan persyaratan undang-undang', 'Dibuat sendiri sambil menunggu pelat nomor asli dari Polri', 'Diperoleh dari Polisi Lalu Lintas yang mengeluarkan STNK dan Pelat nomor', 'Menggunakan Biro Jasa', 'c'),
(26, 'Apa yang harus anda lakukan bila Anda melihat pejalan kaki menunggu untuk menyebrang di tempat Zebra cross', 'Dekati tempat penyebrangan pejalan kaki dengan kecepatan yang sedemikian rupa, sehingga bila perlu dapat dihentikan', 'Lewati tempat penyebrangan secepat mungkin', 'Jangan berhenti anda berhak melintas lebih dulu', 'Kendaraan sangat diprioritaskan', 'a'),
(27, 'STNK selalu terkait dengan:', 'Kendaraan bermotor, orang tertentu, dan daerah kendaraan itu menetap', 'Seorang dan kendaraan bermotor', 'Orang tertentu dan daerah tempat kendaraan itu menetap', 'Ciri-ciri fisik motor saja', 'a'),
(28, 'Perubahan yang tidak boleh dilakukan pada sepeda motor yang dapat menyebabkan STNK tidak sah lagi, adalah:', 'Memasang dan mengganti mesin dengan kemampuan lebih besar', 'Mengganti kaca spion dan tempat duduk', 'Mengadakan perubahan terdapat sistem pembuangan(modifikasi knalpot)', 'Mengganti ban luar', 'a'),
(29, 'Apa arti rambu berikut?', 'Lajur atau bagian jalan yang wajib adalah sebelah kiri rambu ini', 'Satu satunya arah yang boleh ditempuh ialah ke kiri', 'Dilarang berjalan lurus ke kanan', 'Disarankan untuk menempuh ke arah kiri', 'b'),
(30, 'Apa arti rambu berikut?', 'Wajib mengikuti salah satu lajur yang ditunjuk', 'Wajib mengikuti salah satu arah yang ditunjuk', 'Wajib berjalan lurus ke depan', 'Harus berjalan kedua arah itu', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soal_pilihan`
--
ALTER TABLE `soal_pilihan`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soal_pilihan`
--
ALTER TABLE `soal_pilihan`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
