-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 04:06 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hipmi_padang`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `jam` varchar(100) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tgl`, `judul`, `jam`, `lokasi`) VALUES
(1, '2023-11-01', 'Kegitan HIPMI Regional Padang 2022', '03:10', 'Ministage Hall 6, ICE BSD City, Padang Selatan'),
(2, '2023-11-02', 'Kegitan HIPMI Regional Padang 2022', '10:00', 'Online Meeting (ZOOM)'),
(3, '2023-11-03', 'Trade Expo Indonesia 2022', '03:00', 'ICE BSD City, Tangerang Selatan (Booth HIPMI Padang di Hall 6 booth 6-001 A)'),
(4, '2023-11-10', 'Padang Gathering 2022 - Accelerating Business From Networking', '08:21', 'Bengkel Space, SCBD'),
(6, '2023-11-30', 'KONGKOW INTERAKTIF: Pentingnya Digitalisasi Diera 5.0', '15:00', 'Eightea Space'),
(7, '2023-12-05', 'Resmi Dilantik, Wako Hendri Septa Harapkan BPC HIPMI Padang Berkolaborasi Majukan Perekonomian Kota Padang', '08:49', 'Hotel Axana Padang');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `tgl` varchar(50) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tgl`, `id_kategori`, `judul`, `slug`, `isi`, `gambar`) VALUES
(3, '2022-07-22', 1, 'Resmi Dilantik, Wako Hendri Septa Harapkan BPC HIPMI Padang Berkolaborasi Majukan Perekonomian Kota Padang', 'resmi-dilantik-wako-hendri-septa-harapkan-bpc-hipmi-padang-berkolaborasi-majukan-perekonomian-kota-padang', '<p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">PADANG - Wali Kota Padang Hendri Septa menaruh harapan besar kepada Badan Pengurus Cabang (BPC) Himpunan Pengusaha Muda Indonesia (HIPMI) Kota Padang untuk terus berkarya memajukan sektor perekonomian, khususnya di Kota Padang.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">\"Atas nama pribadi dan Pemerintah Kota Padang kita mengucapkan selamat dan sukses kepada Bung Agung Hariyona yang sudah resmi menjadi Ketua Umum BPC HIPMI Kota Padang. Begitu juga kepada seluruh jajaran pengurus BPC HIPMI Kota Padang yang baru saja dilantik hari ini,\" ucap Wako Hendri Septa dalam sambutannya saat menghadiri kegiatan Pelantikan Ketua dan Pengurus BPC HIPMI Kota Padang periode 2022-2025 oleh Ketua Badan Pengurus Daerah (HIPMI) Sumbar Brian Putra Bastara di Hotel Basko Padang, Selasa (5/7/2022) pagi.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">\"Kita tentu berharap HIPMI terus bersinergi dengan Pemko Padang dalam hal apa saja, terutama sekali mendukung visi Kota Padang mewujudkan masyarakat Kota Padang yang madani berbasis pendidikan, perdagangan dan pariwisata unggul serta berdaya saing,\" sambungnya.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">Lebih &nbsp;lanjut orang nomor satu di Kota Padang itu juga berharap dengan adanya sinergitas antara Pemko Padang dengan BPC HIPMI Kota Padang yang diisi oleh generasi muda terus menghasilkan kegiatan-kegiatan yang lebih mengoptimalkan potensi generasi muda dan melahirkan pengusaha baru yang tangguh dan andal.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">\"Mari kita terus berinovasi dan memanfaatkan berbagai potensi yang dimiliki. Insya Allah, saya yakin pengurus baru BPC HIPMI Kota Padang saat ini akan mampu mewujudkan program dan kegiatan HIPMI yang telah direncanakan. Semuanya bermuara kepada peningkatan perekonomian di kota yang kita cintai ini,\" tukas Wako Hendri yang disambut antusias hadirin saat itu.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">Seusai dilantik, Ketua BPC HIPMI Kota Padang Agung Hariyona mengatakan siap melanjutkan program-program unggulan HIPMI sebelumnya, serta membuat program serta terobosan dan inovasi baru untuk kemajuan BPC HIPMI Kota Padang ke depan.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">\"Kita tetap akan menggiatkan program HIPMI terutama memberikan motivasi untuk generasi muda di Kota Padang agar memiliki jiwa bisnis dan mendorong mereka untuk menjadi pengusaha,” terang Agung.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">\"Kita mengharapkan HIPMI bisa terus membantu UMKM dalam menambah jaringan, khususnya dalam memasarkan produknya. Intinya BPC HIPMI Kota Padang siap bersinergi dalam hal apa saja khususnya di sektor peningkatan perekonomian,\" sebut anak muda tersebut bersemangat.</p><p style=\"text-align: justify; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: Poppins, sans-serif; color: rgb(65, 65, 65);\">Dalam kesempatan itu juga hadir unsur Forkopimda Kota Padang serta sejumlah tokoh penting dan sesepuh HIPMI Kota Padang. Juga terlihat Kepala DPMPTSP Kota Padang Corri Saidan dan Kepala Dispora Kota Padang Afriadi serta stakeholder lainnya.(SUMBER : HUMAS PEMKO PADANG)</p>', 'image_default_62c4fd9db664c.jpg'),
(4, '2023-11-26', 1, 'Targetkan 100 Ribu Entrepreneur, Gubernur Mahyeldi Sebut Pemprov Sumbar Butuh Dukungan HIPMI', 'targetkan-100-ribu-entrepreneur-gubernur-mahyeldi-sebut-pemprov-sumbar-butuh-dukungan-hipmi', '<p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Gubernur Sumatera Barat (Sumbar) Mahyeldi menargetkan sebanyak 100 ribu entrepreneur pada Tahun 2024 sebagai salah satu program unggulan pemerintahannya.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Menurutnya butuh kolaborasi pemerintah dan pengusaha untuk mengkapitalisasi semua potensi yang ada.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Hal tersebut bisa menjadi kunci membangkitkan perekonomian bangsa yang terdampak oleh pandemi Covid-19. \"Kolaborasi ini yang kita bangun di Sumbar di antaranya dengan pengusaha muda yang tergabung dalam Himpunan Pengusaha Muda Indonesia (HIPMI),\" kata Gubernur Sumbar Mahyeldi saat menghadiri Pelantikan BPD HIPMI Sumatera Barat 2021 - 2024 di Padang, Selasa (26/10/2021). Sampai sejauh ini menurutnya peran pengusaha kiranya memag terbilang vital dalam perekonomian.&nbsp;</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Dalam arti katanya, semakin banyak pengusaha di daerah semakin tinggi pertumbuhan ekonomi yang pada akhirnya akan mensejahterakan masyarakat.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Karenanya,&nbsp;<a href=\"https://padang.tribunnews.com/tag/pemprov-sumbar\" title=\"Pemprov&nbsp;Sumbar\" aria-label=\"link\" style=\"padding: 0px; margin: 0px; outline: 0px;\">Pemprov&nbsp;Sumbar</a>&nbsp;terus mengupayakan agar jumlah pengusaha di daerah itu bisa ditingkatkan dengan program 100 ribu entrepreneur, yang juga membutuhkan dukungan dari HIPMI.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">\"Kami berharap HIPMI bisa menyebarkan spirit pada generasi muda untuk menjadi pengusaha,\" katanya.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Salah satu peran HIPMI yang sangat dirasakan manfaatnya bagi Sumbar menurutnya adalah bantuan dari Kementrian Investasi untuk pengolahan komoditi gambir. Gambir adalah komoditi unggulan Sumbar, namun tidak terkelola secara baik sehingga nasib petani gambir Sumbar masih belum membaik.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Melalui relasi dan jejaring HIPMI, Sumbar bisa mendapatkan bantuan dari Kementerian Investasi.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Ketua BPD HIPMI Sumbar 2021-2024, Brian Putra Bastara mengatakan pihaknya siap untuk menyebarkan virus enterpreneur pada generasi muda Sumbar dalam mendukung program 100 ribu enterpreneur di daerah itu.</p><p style=\"text-align: justify; padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Menurutnya HIPMI Sumbar telah menyiapkan beberapa program strategis untuk menggerakkan perekonomian daerah bersama-sama dengan pemerintah, salah satunya HIPMI masuk sekolah.</p>', 'lantik-bpdhipmi.jpg'),
(6, '2023-11-27', 7, 'Tumbuhkan Budaya Filantropi, HIPMI Peduli Gandeng Baznas Karawang Bagikan Hewan Kurban', 'tumbuhkan-budaya-filantropi-hipmi-peduli-gandeng-baznas-karawang-bagikan-hewan-kurban', '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">KARAWANG – Himpunan Pengusaha Muda Indonesia (HIPMI) Peduli Karawang menyerahkan hewan kurban kepada Badan Amil Zakat Nasional (BAZNAS) Kabupaten Karawang. Penyerahan ini dilakukan secara simbolis dan diterima langsung oleh Komisioner BAZNAS Kabupaten Karawang A Taufiq di Desa Sukajaya, Cilamaya Kulon, Kabupaten Karawang. Sabtu, (9/7/2022).</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">Ketua Umum HIPMI Peduli Karawang Didin Sirojudin mengatakan, pada Idul Adha tahun 2022 ini HIPMI Peduli Karawang berhasil menghimpun hewan kurban dari anggota dan mitra HIPMI Peduli sebanyak satu ekor sapi dan empat ekor kambing.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">Hewan kurban tersebut, kata Didin, akan didistribusikan bersama BAZNAS Karawang di beberapa titik di Kabupaten Karawang.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">“Penyerahan hewan kurban ini jadi program tahunan dari bidang Corporate Social Responsibility (CSR) sebagai wujud kepedulian nyata dari HIPMI Peduli Karawang terhadap masyarakat dalam membangun solidaritas sosial di hari yang penuh dengan keberkahan,” terangnya.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">Bendahara Umum Persatuan Guru Nahdlatul Ulama (Pergunu) Karawang itu menjelaskan, bahwa makna Idul Adha merupakan momentum yang tepat bagi umat untuk menunjukkan kepedulian kepada sesama, berbagi kebahagiaan dan berbagai rasa. Terlebih lagi di tengah situasi pandemi yang berdampak kepada kesulitan ekonomi masyarakat.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">“Pada hari raya Idul Adha, semua bisa merasakan bahagia, karena mendapatkan kebutuhan gizi dan protein,” pesannya.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">Lanjut Didin, Idul adha ini juga dapat dimaknai sebagai kerelaan memotong ego kita sebagai individu untuk berbagi kepada sesama manusia.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">“Idul adha ini tidak lepas dari kisah Nabi Ibrahim dan anak nya tercinta yaitu Nabi Ismail yang dengan penuh ketaatan kepada Allah S.W.T, atas perintahNya rela mengorbankan anaknya yang sangat dicintainya tersebut,” ujar Didin.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">Lebih lanjut Didin menyampaikan selain berbagai untuk sesama manusia, kurban juga dapat dimaknai keinginan untuk taat dan dekat kepada Allah S.W.T.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">“Kurban berasal dari kata qoroba, yaqrobu, qurban, qurbanan, qirbanan, dan uban wa qurbanan artinya mendekatkan. Dengan penyembelihan hewan kurban untuk dipersembahkan kepada Allah sebagai bentuk keinginan untuk selalu dekat dengan Allah,” imbuh Didin yang juga alumni UIN Jakarta itu.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">Selain itu, pihaknya juga menyebut, HIPMI Peduli akan terus menjalin kolaborasi dengan BAZNAS Karawang, terutama menjadi mitra strategis dalam kegiatan sosial kemasyarakatan.</p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 20px; margin-left: 0px; overflow-wrap: break-word; color: rgb(50, 50, 51); font-family: &quot;Open Sans&quot;, Helvetica, Arial;\">“HIPMI Peduli juga ingin mengambil bagian dari menumbuhkan budaya filantropi di masyarakat, terutama bagi pelaku usaha muda atau UMKM yang menjadi mitra dari HIPMI Peduli,” pungkasnya.</p>', 'CEC56944-D0A6-424D-A5A3-08170B0ACC0D.jpeg'),
(8, '2023-11-30', 8, 'HIPMI Padang x Golfkuy! golfkuy! Monthly Tournament V November Series.', 'hipmi-padang-x-golfkuy-golfkuy-monthly-tournament-v-november-series', '<p>HIPMI Padang dan Golfkuy! kembali menggelar turnamen golf yang dinanti-nanti, yaitu \"Golfkuy! Monthly Tournament V November Series\". Acara ini merupakan kolaborasi antara Himpunan Pengusaha Muda Indonesia (HIPMI) Padang dan Golfkuy!, sebuah platform penyedia layanan untuk para pecinta golf. Turnamen ini diadakan sebagai bagian dari rangkaian kegiatan yang bertujuan untuk mempromosikan olahraga golf dan membangun jejaring antara para pengusaha muda.</p><p><br></p><p>Dalam \"Golfkuy! Monthly Tournament V November Series\", para peserta akan bersaing secara kompetitif dalam berbagai kategori. Acara ini tidak hanya menyediakan kesempatan bagi para golfers untuk mempertajam keterampilan mereka, tetapi juga menjadi ajang untuk membangun hubungan bisnis dan pertemanan. Selain itu, turnamen ini diharapkan dapat memberikan kontribusi positif terhadap pengembangan olahraga golf di kota Padang.</p><p><br></p><p>HIPMI Padang dan Golfkuy! telah bekerja sama erat dalam mengorganisir acara ini, menciptakan pengalaman yang berkesan bagi para peserta. Dengan adanya dukungan dari berbagai pihak, termasuk sponsor dan mitra strategis, turnamen ini diharapkan menjadi sukses dan meninggalkan jejak positif dalam komunitas golf dan pengusaha muda di wilayah tersebut.</p>', 'Screenshot 2023-11-30 070318.png'),
(9, '2023-11-24', 8, '\"Team BPC HIPMI Padang Raih Prestasi Gemilang sebagai Juara 3 dalam Turnamen Futsal HIPMI FAIR PT.UNP\"', 'team-bpc-hipmi-padang-raih-prestasi-gemilang-sebagai-juara-3-dalam-turnamen-futsal-hipmi-fair-ptunp', '<p>Dalam suasana penuh kegembiraan, Team BPC HIPMI Padang meraih prestasi gemilang dengan menjadi Juara 3 dalam Turnamen Futsal HIPMI FAIR yang diselenggarakan oleh HIPMI PT.UNP. Tim yang diwakili oleh Bidang OKK @rayhanilvebrian dan kawan-kawan berhasil menunjukkan performa unggul mereka di lapangan, menghadapi persaingan ketat dari berbagai tim peserta.</p><p>Keberhasilan ini tidak hanya mencerminkan dedikasi dan kerja keras dari setiap anggota tim, tetapi juga menandai kontribusi positif dari BPC HIPMI Padang dalam mendukung dan memajukan kegiatan olahraga di kalangan pengusaha muda. Turnamen Futsal HIPMI FAIR tidak hanya menjadi ajang persaingan yang ketat, tetapi juga menjadi momentum berharga untuk membangun solidaritas dan jaringan antaranggota HIPMI PT.UNP.</p><p>Dukungan yang diberikan oleh HIPMI PT.UNP dalam menyelenggarakan turnamen ini menjadi wujud nyata dari semangat kolaboratif untuk menguatkan hubungan antaranggota dan mendorong semangat sportivitas. Keberhasilan Team BPC HIPMI Padang merupakan bukti bahwa semangat kebersamaan dan kompetisi sehat dapat menciptakan pencapaian gemilang di berbagai bidang, termasuk olahraga.</p><p>Selamat kepada Team BPC HIPMI Padang atas pencapaian luar biasa ini, semoga prestasi yang diraih dapat menjadi inspirasi bagi anggota HIPMI lainnya untuk terus berprestasi dan berkontribusi positif dalam berbagai kegiatan.</p>', 'Screenshot 2023-11-30 084145.png'),
(10, '2023-11-03', 1, '\"Selamat Grand Opening Renjana Warkop, Semoga Sukses Selalu!\"', 'selamat-grand-opening-renjana-warkop-semoga-sukses-selalu', '<p>Dalam momen penuh kebahagiaan, kami mengucapkan selamat atas Grand Opening Renjana Warkop! Semoga peresmian ini menjadi awal yang gemilang untuk perjalanan bisnis kopi ini. Keberhasilan yang diraih pada hari ini hanyalah langkah awal dari banyak pencapaian yang menanti di masa depan.</p><p>Semoga Renjana Warkop selalu diberkahi dengan pelanggan setia, keberlanjutan bisnis yang sukses, dan terus berkembang menjadi tempat yang nyaman dan ramah. Semangat dan dedikasi dalam membuka warkop ini merupakan investasi berharga untuk masa depan yang cerah.</p><p>Kami berharap Renjana Warkop menjadi tempat berkumpul yang hangat, di mana setiap cangkir kopi membawa kebahagiaan dan kenangan indah. Sukses selalu untuk perjalanan yang baru dimulai, semoga bisnis ini tumbuh pesat dan memberikan kontribusi positif bagi komunitas sekitar.</p><p>Selamat Grand Opening Renjana Warkop! Semoga keberhasilan selalu menyertai setiap langkah yang diambil dan membawa kebahagiaan kepada semua yang terlibat.</p>', 'Screenshot 2023-11-30 092923.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama`) VALUES
(1, 'Ketua Umum'),
(2, 'Wakil Ketua Umum'),
(3, 'Bendahara Umum'),
(4, 'Sekretaris Umum'),
(5, 'Wakil Bendahara Umum'),
(6, 'Wakil Sekretaris Umum'),
(7, 'Ketua Bidang 1'),
(8, 'Ketua Bidang 2'),
(9, 'Ketua Bidang 3'),
(10, 'Ketua Bidang 4'),
(11, 'Ketua Bidang 5'),
(12, 'Ketua Bidang 6'),
(13, 'Ketua Bidang 7'),
(14, 'Ketua Bidang 8'),
(15, 'Ketua Bidang 9'),
(16, 'Ketua Bidang 10');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Sosial'),
(7, 'Budaya'),
(8, 'OlahRaga');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `nama_pengurus` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `id_jabatan`, `nama_pengurus`, `foto`) VALUES
(1, 1, 'Agung Hariyona', 'Untitled design (14).png'),
(2, 3, 'Urip Vebrian', 'Untitled design.png'),
(3, 4, 'Wendoky Putra Basko', 'Untitled design (3).png'),
(4, 2, 'Manufer Putra Firdaus', 'Untitled design (4) (1).png'),
(5, 5, 'Regina', 'Untitled design (1) (1).png'),
(6, 6, 'Ine Rosdiana', 'Untitled design (2) (1).png'),
(8, 8, 'Borry Fonanda', 'Untitled design (5).png'),
(9, 9, 'Lailatul Himni', 'Untitled design (6).png'),
(10, 10, 'Firdaus Ardiayanto', 'Untitled design (7).png'),
(11, 11, 'Rio Hartono', 'Untitled design (9).png'),
(12, 12, 'Rifky Satria Jamal', 'Untitled design (8).png'),
(13, 13, 'Redho Rama Putra', 'Untitled design (11).png'),
(14, 14, 'Riandi Suandra', 'Untitled design (10).png'),
(15, 15, 'Devina Purnama', 'Untitled design (12).png'),
(16, 16, 'Ferry Achmad Elfindri', 'Untitled design (13).png');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE `sektor` (
  `id_sektor` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`id_sektor`, `nama`) VALUES
(1, 'Hotel & Pariwisata'),
(4, 'Teknologi'),
(5, 'Kontruksi');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id_usaha` int(11) NOT NULL,
  `id_sektor` int(11) DEFAULT NULL,
  `nama_usaha` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id_usaha`, `id_sektor`, `nama_usaha`, `deskripsi`, `logo`) VALUES
(2, 1, 'Basko Hotel', NULL, 'download (3).jpeg'),
(3, 4, 'Mediatama Web Indonesia', NULL, 'OIP (1).jpeg'),
(4, 5, 'PT. HARIYONA', NULL, 'indokontraktor-150.png'),
(5, 5, 'PT. Semen Padang', NULL, 'OIP (2).jpeg'),
(6, 1, 'PT. Pelabuhan Indonesia II', NULL, 'download (4).jpeg'),
(7, 5, 'PT Bukit Asam Sawahlunto', NULL, 'OIP (3).jpeg'),
(8, 4, 'PT Wilmar Nabati Indonesia Padang', NULL, 'download (5).jpeg'),
(9, 4, 'Argesia', NULL, 'OIP (4).jpeg'),
(10, 4, 'PT Incasi Raya', NULL, 'OIP (5).jpeg'),
(11, 1, 'Ibis Hotel', NULL, 'th.png'),
(12, 1, 'Axana', NULL, 'OIP (6).jpeg'),
(13, 1, 'Mercure', NULL, 'OIP (7).jpeg'),
(14, 5, 'Karasa Pilar', NULL, 'download (6).jpeg'),
(15, 5, 'PT. KHO Kontruksi', NULL, 'download (7).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'admin@gmail.com', '2023-11-27 23:11:48', '$2y$12$LrwDPee2zR3rZDAlGOJtwe0ImkY7hkxwe/A7dl3iijvzXJnhaj2kK', 'hAhxRJUSoGKRYRmBaPMgTuxbmdHz75Z1wx8rmpyLBo5QbdrRIXZpxmfchiKp', '2023-11-27 23:11:48', '2023-11-27 23:11:48'),
(2, 'Fani', 'fani@gmail.com', NULL, '$2y$12$eocgMAg1RJAqDxzAdPZP8OUybb39mPznWcKLoPnoenwU1HD4bUNQ.', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sektor`
--
ALTER TABLE `sektor`
  ADD PRIMARY KEY (`id_sektor`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id_usaha`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sektor`
--
ALTER TABLE `sektor`
  MODIFY `id_sektor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
