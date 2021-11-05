-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 08:36 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallo_ideal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(4) NOT NULL,
  `url_artikel` varchar(255) DEFAULT NULL,
  `sampul_artikel` varchar(255) DEFAULT NULL,
  `judul_artikel` varchar(60) DEFAULT NULL,
  `isi_artikel` text,
  `tanggal` date DEFAULT NULL,
  `id_kategori` int(2) DEFAULT NULL,
  `id_user` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `url_artikel`, `sampul_artikel`, `judul_artikel`, `isi_artikel`, `tanggal`, `id_kategori`, `id_user`) VALUES
(2, 'kumpulan-protokol-kesehatan-selama-pandemic-covid-19', 'covid19.jpg', 'Kumpulan Protokol Kesehatan selama Pandemic Covid-19', '<p>Protokol kesehatan menjadi satu hal yang perlu dipahami oleh seluruh lapisan masyarakat selama melakukan aktivitas. Sejumlah tempat usaha/ aktivitas pun mulai dibuka. Namun, bukan berarti kita tidak akan tertular oleh virus corona. Kita semua harus tetap waspada dan wajib melakukan adaptasi kebiasaan baru yang beberapa dijelaskan dalam protokol kesehatan. Berikut beberapa protokol kesehatan yang harus dijalankan : 19</p>\r\n', '2020-12-19', 1, 1),
(3, 'cara-menurunkan-berat-badan-dalam-seminggu', 'diet.jpeg', 'Cara Menurunkan Berat Badan dalam Seminggu', '<p>Cara menurunkan berat badan dalam 1 minggu tanpa obat atau operasi ada bermacam-macam. Cara-cara ini mungkin berguna untuk orang-orang yang sedang dalam situasi &ldquo;genting&rdquo;, misalnya untuk calon pengantin yang harus menurunkan berat badan agar bisa muat di baju pernikahannya minggu depan.</p>\r\n\r\n<p><img alt=\"Cara Menurunkan Berat Badan Dalam 1 Minggu Secara Alami - Alodokter\" src=\"https://res.cloudinary.com/dk0z4ums3/image/upload/v1595216363/attached_image/cara-menurunkan-berat-badan-dalam-1-minggu-secara-alami-0-alodokter.jpg\" style=\"height:434px; width:650px\" /></p>\r\n\r\n<p>Selain itu, ada pula diet yang diklaim dapat menurunkan berat badan dalam waktu 2 minggu, yaitu&nbsp;<a href=\"https://www.alodokter.com/serba-serbi-diet-gm-metode-cepat-turunkan-berat-badan-dalam-7-hari\" target=\"_blank\">diet GM</a>.</p>\r\n\r\n<h3><strong>Beragam Cara Menurunkan Berat Badan Dalam 1 Minggu</strong></h3>\r\n\r\n<p>Ada beberapa&nbsp;<a href=\"https://www.alodokter.com/menurunkan-berat-badan-pun-ada-aturannya\" target=\"_blank\">cara alami</a>&nbsp;yang bisa Anda lakukan untuk menurunkan berat badan dalam waktu 1 minggu, di antaranya adalah:</p>\r\n\r\n<h4><strong>1. Kurangi asupan kalori</strong></h4>\r\n\r\n<p>Mengurangi asupan&nbsp;<a href=\"https://www.alodokter.com/kalori-kunci-berat-badan-sehat\" target=\"_blank\">kalori</a>&nbsp;atau porsi makan terbukti efektif untuk mengurangi berat badan dalam waktu singkat. Jumlah kalori yang perlu Anda makan per hari untuk menurunkan berat badan tergantung pada kebutuhan kalori per hari. Jadi&nbsp;<a href=\"https://www.alodokter.com/begini-cara-menghitung-kebutuhan-kalori-per-hari\" target=\"_blank\">hitung</a>&nbsp;dulu kebutuhan Anda, kemudian tentukan pengurangan asupan kalori Anda.</p>\r\n\r\n<p>Untuk mempermudah Anda mengurangi asupan kalori dan memaksimalkan efek diet, hindari konsumsi camilan dan penggunaan bumbu penyedap, serta perbanyak konsumsi sayur-sayuran dan protein tanpa lemak.</p>\r\n\r\n<h4><strong>2. Kurangi asupan karbohidrat</strong></h4>\r\n\r\n<p>Menerapkan&nbsp;<a href=\"https://www.alodokter.com/manfaat-diet-karbohidrat-dan-cara-melakukannya\" target=\"_blank\">diet karbo</a>&nbsp;atau mengurangi konsumsi karbohidrat, seperti nasi, pasta, dan roti, dinilai efektif dalam menurunkan berat badan sekaligus meningkatkan kesehatan.</p>\r\n\r\n<p>Sebagai ganti karbohidrat, Anda bisa memperbanyak konsumsi sayuran rendah karbohidrat, seperti bayam dan&nbsp;<a href=\"https://www.alodokter.com/ketahui-manfaat-pakcoy-untuk-kesehatan-tubuh\" target=\"_blank\">pakcoy</a>,<strong>&nbsp;</strong>mengonsumsi telur, daging tanpa lemak, serta ikan. Protein juga bisa membantu meningkatkan metabolisme dalam tubuh Anda.</p>\r\n\r\n<h4><strong>3. Hindari makanan siap saji</strong></h4>\r\n\r\n<p>Selain mengurangi asupan kalori, menghindari&nbsp;<a href=\"https://www.alodokter.com/ini-bahaya-makanan-siap-saji-yang-bisa-mengintai-anda\" target=\"_blank\">makanan siap saji</a>&nbsp;juga akan membantu Anda menurunkan berat badan, terutama jika sebelumnya Anda tergolong sering mengonsumsi makanan yang memanjakan lidah namun tinggi kalori ini.</p>\r\n\r\n<p>Sebagai ganti makanan siap saji, Anda bisa memilih makanan yang mengandung protein tinggi, seperti ikan dan ayam, serta sayuran rendah karbohidrat. Dengan begitu, Anda tetap bisa merasa kenyang tanpa memakan banyak kalori. Sertakan bumbu dan rempah yang menggugah rasa agar Anda tidak merindukan makanan siap saji.</p>\r\n\r\n<h4><strong>4. Perbanyak olahraga dan aktivitas fisik</strong></h4>\r\n\r\n<p>Memperbanyak&nbsp;<a href=\"https://www.alodokter.com/ragam-olahraga-untuk-diet-yang-maksimal\" target=\"_blank\">olahraga</a>&nbsp;dan aktivitas fisik yang membakar kalori juga merupakan cara menurunkan berat badan dalam 1 minggu yang efektif. Teorinya, semakin banyak kalori yang terbakar, berat badan pun akan semakin cepat berkurang.</p>\r\n\r\n<p>Maka dari itu, mulailah memperbanyak olahraga dan aktivitas fisik, seperti mengangkat beban atau senam aerobik, untuk meningkatkan massa otot dan metabolisme tubuh sekaligus mengurangi endapan karbohidrat.</p>\r\n\r\n<h4><strong>5. Cobalah berpuasa</strong></h4>\r\n\r\n<p><a href=\"https://www.alodokter.com/manfaat-diet-puasa-untuk-menurunkan-berat-badan\" target=\"_blank\">Diet puasa</a>&nbsp;yang dilakukan secara rutin juga bisa membantu Anda menurunkan berat badan. Secara tidak langsung, waktu Anda untuk mengonsumsi sesuatu yang berkalori menjadi berkurang dengan berpuasa. Akhirnya, kalori yang masuk ke dalam tubuh Anda jadi lebih sedikit.</p>\r\n\r\n<h4><strong>6. Cukupi waktu tidur dan k</strong><strong>urangi begadang</strong></h4>\r\n\r\n<p>Sebuah studi mengatakan bahwa orang yang kurang tidur atau sering&nbsp;<a href=\"https://www.alodokter.com/banyak-kondisi-buruk-menanti-anda-karena-efek-begadang\" target=\"_blank\">begadang</a>&nbsp;cenderung lebih banyak makan camilan di malam hari. Ini tentunya akan memicu peningkatan berat badan. Selain itu, mencukupi waktu tidur juga bisa mengefektifkan pembakaran lemak.</p>\r\n\r\n<p>Guna mendapatkan hasil terbaik, usahakan untuk tetap mengutamakan kesehatan Anda selama menerapkan cara-cara di atas. Jangan sampai berat badan Anda turun drastis, tapi kondisi kesehatan Anda justru terganggu.</p>\r\n\r\n<p>Perlu diketahui juga bahwa cara menurunkan berat badan dalam 1 minggu biasanya efektif untuk jangka pendek saja. Secara teori, seseorang memang bisa&nbsp;menurunkan berat badan&nbsp;hingga 4,5 kg dalam 1 minggu. Namun idealnya, penurunan berat badan yang sehat adalah 0,5&ndash;1 kg per minggunya.</p>\r\n\r\n<p>Penurunan berat badan yang terlampau cepat bisa menyebabkan metabolisme tubuh menjadi kacau. Akhirnya saat program diet berakhir, berat badan Anda bisa bertambah kembali menjadi seperti semula atau bahkan lebih berat.</p>\r\n\r\n<p>Diet sebaiknya dilakukan secara bertahap. Namun, jika Anda sangat membutuhkan penurunan berat badan dalam waktu yang cepat dan ingin menerapkan cara menurunkan berat badan dalam 1 minggu seperti yang telah dijelaskan di atas, berkonsultasilah dulu ke dokter&nbsp;untuk mendapatkan saran yang tepat dan aman.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>SUMBER :&nbsp;<a href=\"https://www.alodokter.com/\">ALODOKTER</a></strong></p>\r\n', '2021-01-24', 1, 2),
(4, '9-cara-memperbaiki-pola-tidur-yang-berantakan', 'pola.jpg', '9 Cara Memperbaiki Pola Tidur yang Berantakan', '<p style=\"text-align:justify\"><a href=\"https://hellosehat.com/perubahan-jadwal-tidur-adakah-efeknya-bagi-kesehatan/\">Pola tidur</a>, atau kebiasaan kita dalam hal tidur, sangat dipengaruhi jam biologis yang mengatur kita terjaga dan tidur selama 24 jam. Perubahan pola tidur biasanya terjadi karena begadang atau terjaga lebih lama. Hal ini menyebabkan perubahan kebiasaan tidur dan pergeseran jam biologis sehingga menyebabkan kita tertidur pada waktu yang abnormal.</p>\r\n\r\n<p style=\"text-align:justify\">Faktor usia dan kesibukan menyebabkan rutinitas tidur dapat berubah dengan mudah. Kurangnya waktu tidur malam dan digantikan dengan tidur di siang hari adalah salah satu contoh perubahan pola tidur, dan hal ini dapat menyebabkan tubuh tidak bekerja secara optimal. Pola tidur normal adalah waktu tidur 7 hingga 8 jam pada waktu malam hari, dan sisanya dihabiskan dengan terjaga.</p>\r\n\r\n<p style=\"text-align:justify\">Berikut beberapa tips memperbaiki pola tidur menjadi normal kembali:</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>SUMBER :&nbsp;<a href=\"https://hellosehat.com/\">HELLOSEHAT</a></strong></p>\r\n\r\n<h3 style=\"text-align:justify\">1. Buatlah rutinitas tidur</h3>\r\n\r\n<p style=\"text-align:justify\">Pola tidur 7-8 jam di malam hari mungkin terlalu sulit untuk diikuti bagi beberapa orang. Namun hal yang perlu diperhatikan dalam membentuk rutinitas tidur adalah membuat diri Anda senyaman mungkin. Kenali dan atasi faktor yang dapat mengganggu Anda saat beristirahat.</p>\r\n\r\n<p style=\"text-align:justify\">Anda mungkin kesulitan untuk mengatur siklus tidur saat malam hari dengan tertidur pada jam yang sama. Namun, Anda bisa berusaha menjaga siklus terjaga dengan bangun tidur pada jam yang sama di pagi hari. Lakukanlah ini dengan bertahap dengan bangun pada pagi hari 5 hingga 15 menit lebih awal sampai Anda terbiasa dengan waktu untuk terbangun tersebut.</p>\r\n\r\n<h3 style=\"text-align:justify\">2. Cobalah konsisten dengan rutinitas tidur selama satu minggu</h3>\r\n\r\n<p style=\"text-align:justify\">Konsistensi adalah kunci utama jika Anda ingin memperbaiki waktu tidur. Itu artinya Anda harus membentuk kebiasaan durasi tertidur, serta waktu untuk mulai tidur dan terbangun pada jam yang sama. Hal ini harus dilakukan selama satu minggu termasuk akhir pekan.</p>\r\n\r\n<h3 style=\"text-align:justify\">3. Hindari memencet&nbsp;<a href=\"https://hellosehat.com/hidup-sehat/tips-sehat/stop-snooze-saat-alarm-bunyi/\">tombol&nbsp;<em>snooze</em></a>&nbsp;pada pagi hari</h3>\r\n\r\n<p style=\"text-align:justify\">Dengan menambah waktu tidur pada pagi hari (dengan menekan tombol&nbsp;<em>snooze</em>) maka rutinitas tidur Anda akan mengalami perubahan kembali. Dengan kata lain, siklus terjaga akan berubah dan seiring dengan berjalannya waktu dapat terjadi pergeseran waktu tidur. Jika Anda sedang mengusahakan perbaikan waktu tidur, menunda bangun saat alarm sudah berbunyi dapat membuat usaha Anda menjadi kurang efektif.</p>\r\n\r\n<h3 style=\"text-align:justify\">4. Perhatikan pola konsumsi makanan dan minuman</h3>\r\n\r\n<p style=\"text-align:justify\">Berikut beberapa poin penting dalam ngatur pola konsumsi sebelum tidur:</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Hindari konsumsi kafein (baik dari kopi, teh, atau sumber lainnya) lebih dari 12 jam sebelum waktu tidur Anda.</li>\r\n	<li style=\"text-align:justify\">Hindari meminum terlalu banyak cairan sebelum tidur agar Anda tidak perlu terbangun di tengah malam untuk ke toilet.</li>\r\n	<li style=\"text-align:justify\">Hindari konsumsi alkohol sebelum tidur karena akan mengganggu proses tubuh untuk terlelap.</li>\r\n	<li style=\"text-align:justify\">Hindari konsumsi makanan asam dan pedas sebelum tidur.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Jika Anda merasa lapar pada malam hari, cobalah memakan makanan yang menyehatkan dan tidak menimbulkan kesulitan untuk terlelap, seperti camilan dari gandum utuh, sereal rendah gula, dan pisang.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">5. Ciptakan lingkungan ruang tidur yang nyaman</h3>\r\n\r\n<p style=\"text-align:justify\">Berikut beberapa cara agar ruang tidur terasa lebih nyaman untuk beristirahat</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Kurangi atau hilangkan kebisingan baik dari dalam maupun luar lingkungan rumah. Hindari suara berulang seperti suara mesin dari kipas angin. Jika tidak dapat meminimalisir sumber kebisingan, gunakanlah alat bantu seperti earplug</li>\r\n	<li style=\"text-align:justify\">Pertahankah suhu ruangan sejuk &ndash; terlalu panas atau terlalu dingin akan mempengaruhi kualitas tidur anda, usahakan suhu ruangan tidur sekitar 18oC.</li>\r\n	<li style=\"text-align:justify\">Pastikan Anda tertidur dengan posisi yang nyaman.</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\">6. Buatlah kamar tidur gelap pada malam hari dan terang pada siang hari</h3>\r\n\r\n<p style=\"text-align:justify\">Jam biologis tubuh mudah terpengaruh dengan stimulus cahaya. Jika Anda ingin memperbaiki waktu tidur saat malam hari, cobalah kurangi paparan cahaya pada malam hari yang berasal dari lampu maupun monitor komputer. Di pagi hari, buatlah kamar Anda terisi dengan cahaya baik cahaya matahari maupun cahaya lampu. Kamar yang terang akan memudahkan seseorang untuk terbangun.</p>\r\n\r\n<h3 style=\"text-align:justify\">7. Jangan hanya berbaring di tempat tidur saat mengalami sulit tidur di malam hari</h3>\r\n\r\n<p style=\"text-align:justify\">Kesulitan tertidur pada malam hari biasanya dipengaruhi stress dan terlalu banyak pikiran akibat&nbsp;<em>brainstorming</em>&nbsp;sebelum tidur. Tentu saja hal ini akan menimbulkan kesulitan tertidur karena di samping memiliki banyak pikiran, tubuh berusaha untuk beristirahat. Jika hal ini terjadi, bangunlah dari tempat tidur, lakukan aktivitas yang membuat Anda rileks, dan pahami apa yang mengganggu pikiran. Utamakanlah untuk pikiran dan tubuh Anda untuk rileks terlebih dahulu sebelum Anda mencoba untuk tertidur.</p>\r\n\r\n<h3 style=\"text-align:justify\">8. Atur jadwal yang tepat untuk aktivitas fisik</h3>\r\n\r\n<p style=\"text-align:justify\">Aktivitas fisik secara teratur dapat membantu Anda untuk tertidur lebih cepat dan meningkatkan kualitas tidur. Apabila Anda memiliki kebiasaan berolah raga, lakukanlah aktivitas tersebut secara teratur dan usahakan pada pagi hari. Jika tidak dilakukan pada&nbsp;<a href=\"https://hellosehat.com/olahraga-pagi-perlukah-sarapan-dulu/\">pagi hari</a>, sebaiknya dilakukan sekitar empat hingga lima jam sebelum Anda tertidur dan berikan waktu sekitar satu jam untuk relaksasi dari aktivitas fisik sebelum waktu tidur.</p>\r\n\r\n<h3 style=\"text-align:justify\">9. Hindari tertidur saat waktu yang biasanya Anda terjaga</h3>\r\n\r\n<p style=\"text-align:justify\">Untuk mengurangi kesulitan tidur di malam hari, sebaiknya hindari tertidur pada waktu biasanya anda beraktivitas dan waktu yang berdekatan dengan jam tidur, misalnya pada sore hari. Usahakan untuk tidak tertidur saat Anda merasa bosan atau mengantuk setelah makan. Biarkan tubuh benar-benar tertidur saat Anda merasa lelah dan membutuhkan tidur. Jika Anda benar-benar lelah dan membutuhkan tidur pada siang hari, usahakan tidak terlalu lama atau sekitar 20 menit saja</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>SUMBER :&nbsp;<a href=\"https://hellosehat.com/\">HELLOSEHAT</a></strong></p>\r\n', '2021-01-24', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(2) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Healthy'),
(2, 'Safety');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(2) NOT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Penulis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `id_makanan` int(4) NOT NULL,
  `url_makanan` varchar(255) DEFAULT NULL,
  `sampul_makanan` varchar(255) DEFAULT NULL,
  `nama_makanan` varchar(60) DEFAULT NULL,
  `kalori` int(10) DEFAULT NULL,
  `resep` text,
  `id_user` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_makanan`
--

INSERT INTO `tb_makanan` (`id_makanan`, `url_makanan`, `sampul_makanan`, `nama_makanan`, `kalori`, `resep`, `id_user`) VALUES
(1, 'telur-orak-arik', '020248000_1583829223-resep-makan-diet-karbo.jpg', 'Telur Orak Arik', 148, '<p>Telur Orak Arik adalah makanan yang terbuat dari&nbsp;<a href=\"https://id.wikipedia.org/wiki/Telur_(makanan)\" title=\"Telur (makanan)\">telur</a>&nbsp;(biasanya telur ayam) diaduk atau dikocok bersama dalam wajan atau penggorengan saat dipanaskan dengan lembut, biasanya ditambahkan garam, mentega, dan bahan lainnya yang bervariasi.&nbsp;Kamu sudah bisa menerapkan resep makanan sehat untuk diet ini hanya dengan menyiapkan telur dan beberapa sayuran. Agar lebih sehat, gunakanlah minyak alami seperti minyak kelapa dalam memasaknya.</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<p>- Minyak Kelapa</p>\r\n\r\n<p>-&nbsp;Sayuran (wortel, kembang kol, brokoli, kacang panjang, buncis, dsb) sesuai dengan selera.</p>\r\n\r\n<p>-&nbsp;Telur ayam</p>\r\n\r\n<p>-&nbsp;Rempah-rempah (merica, pala, kayu manis)</p>\r\n\r\n<p>-&nbsp;Garam</p>\r\n\r\n<p>-&nbsp;Bayam (opsional)</p>\r\n\r\n<p><strong>Cara membuatnya:</strong></p>\r\n\r\n<p>-&nbsp;Pertama, panaskan minyak kelapa di atas wajan dengan api keci.</p>\r\n\r\n<p>-&nbsp;Cuci bersih semua sayuran, dan potong dengan ukuran sedang, sesuai dengan selera.</p>\r\n\r\n<p>-&nbsp;Setelah itu, tumis sayuran ke dalam minyak kelapa yang sudah panas.</p>\r\n\r\n<p>-&nbsp;Aduk sayuran sebentar, kemudian masukkan telur sesuai dengan selera, bisa 204 telur.</p>\r\n\r\n<p>-&nbsp;Tambahkan sedikit garam, merica, bubuk pada, dan bubuk kayu manis.</p>\r\n\r\n<p>-&nbsp;Aduk hingga merata, tambahkan bayam jika ingin tambahan sayur.</p>\r\n\r\n<p>-&nbsp;Setelah itu, Telur Sayuran Goreng siap disajikan.</p>\r\n', 1),
(2, 'dada-ayam-goreng', '022353400_1583829223-1.jpg', 'Dada Ayam Goreng', 284, '<p>Kamu bisa mengonsumsi dada ayam goreng yang saht ini. Dada ayam memang terkenal baik dijadikan bahan untuk membuat resep makanan sehat untuk diet. Selain itu, dada ayam juga baik dikonsumsi untuk membentuk otot tubuh.</p>\r\n\r\n<p>Berikut bahan-bahan dan cara membuat dada ayam goreng sehat sebagai resep makanan sehat untuk diet:</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<p>-&nbsp;Dada ayam</p>\r\n\r\n<p>-&nbsp;Mentega rendah lemak</p>\r\n\r\n<p>-&nbsp;Garam</p>\r\n\r\n<p>-&nbsp;Lada</p>\r\n\r\n<p>-&nbsp;Kari</p>\r\n\r\n<p>-&nbsp;Bubuk bawang putih</p>\r\n\r\n<p>-&nbsp;Sayuran hijau (bayam, brokoli, kol, dsb) bisa pilih salah satu.</p>\r\n\r\n<p><strong>Cara membuatnya:</strong></p>\r\n\r\n<p>-&nbsp;Potong dada ayam menjadi potongan kecil, atau bisa juga memanjang.</p>\r\n\r\n<p>-&nbsp;Setelah itu, panaskan wajah dan oleskan mentega di atasnya.</p>\r\n\r\n<p>-&nbsp;Tumis potongan ayam dan tambahkan lada, kari, garam, dan bubuk bawang putih.</p>\r\n\r\n<p>-&nbsp;Tumis hingga ayam berubah warna menjadi kecoklatan.</p>\r\n\r\n<p>-&nbsp;Siapkan sayuran hijau yang sudah dicuci, lalu tumis bersama dada ayam.</p>\r\n\r\n<p>-&nbsp;Tunggu sampai matang.</p>\r\n', 1),
(3, 'telur-kukus', '0be0fa4c-9a5d-4150-8c57-359def74c295.jpeg', 'Telur Kukus', 77, '<p>Jika biasanya di rebus atau di goreng kali ini kamu bisa mengolah telur dengan cara di kukus. Apalagi banyak sekali nutrisi penting yang terdapat pada telur dan bisa memberikan banyak manfaat kesehatan terutama saat menjalani program diet.</p>\r\n\r\n<p>Berikut bahan-bahan dan cara membuat telur kukus sebagai resep makanan sehat untuk diet:</p>\r\n\r\n<p><strong>Bahan-Bahan:</strong></p>\r\n\r\n<p>- 1/2 wortel potong cincang</p>\r\n\r\n<p>- 2 telur ayam</p>\r\n\r\n<p>- 4 cabai&nbsp;</p>\r\n\r\n<p>- 1/2 tomat</p>\r\n\r\n<p>- Bawang daun</p>\r\n\r\n<p>- Seledri secukupnya</p>\r\n\r\n<p>- Merica secukupnya</p>\r\n\r\n<p>- Garam secukupnya</p>\r\n\r\n<p>- 1/2 Bumbu penyedap</p>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<p>- Masukan aneka sayuran seperti wortel, daun bawang, telur, tomat, seledri ke dalam mangkuk.</p>\r\n\r\n<p>- Aduk hingga merata dengan semua bahan, kemudian masukan merica, bumbu penyedap, garam.</p>\r\n\r\n<p>- Setelah semua bahan sudah tercampur, saatnya kukus adonan hingga matang selama 10 - 20 menit.</p>\r\n\r\n<p>- Menu telur kukus tidak hanya praktis tapi juga bebas kalori sehingga bisa membantu program diet mu.</p>\r\n', 1),
(4, 'telur-bacon-daging-sapi', '024379600_1583829223-12.jpg', 'Telur Bacon Daging Sapi', 272, '<p>Walaupun bacon daging sapi merupakan daging olahan yang kurang sehat, makanan ini mengandung karbohidrat yang rendah dan cocok untuk jadi selingan kala bingung dengan menu makanan diet yang itu-itu saja.</p>\r\n\r\n<p>Walaupun mudah dibuat, telur bacon daging sapi ini tidak boleh terlalu sering dikonsumsi saat diet. Jangan sampai mengonsumsinya lebih dari dua kali selama seminggu.</p>\r\n\r\n<p>Berikut bahan-bahan dan cara membuat telur bacon daging sapi sebagai resep makanan sehat untuk diet:</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<p>- Bacon</p>\r\n\r\n<p>- Minyak Zaitun</p>\r\n\r\n<p>- Telur</p>\r\n\r\n<p>- Rempah-rempah (merica, pala, kayu manis, atau bahan lain sesuai selera)</p>\r\n\r\n<p><strong>Cara membuatnya:</strong></p>\r\n\r\n<p>- Siapkan wajan panas dengan minyak zaitun, kemudian tambahkan Bacon.</p>\r\n\r\n<p>- Goreng Bacon hingga matang.</p>\r\n\r\n<p>- Kemudian goreng 2-3 telur ayam, sesuaikan kematangan dengan selera masing-masing.</p>\r\n\r\n<p>- Untuk menambahkan rasa, ketika menggoreng telur, Sahabat Dream bisa menggunakan bubuk bawang putih, atau bawang Bombay.</p>\r\n\r\n<p>- Letakkan telur dan bacon goreng pada piring, dan Telur Bacon siap disantap</p>\r\n', 1),
(5, 'burger-keju-sehat', '026841800_1583829223-34.jpg', 'Burger Keju Sehat', 303, '<p>Jika kamu kangen makan burger, kamu juga bisa membuat burger keju kreasi sendiri di rumah. Berikut bahan-bahan dan cara membuat burger keju sebagai resep makanan sehat untuk diet:</p>\r\n\r\n<p>Bahan-bahan:</p>\r\n\r\n<p>- Mentega nabati</p>\r\n\r\n<p>-&nbsp;&nbsp; &nbsp;Roti rendah lemak dan rendah karbohidrat</p>\r\n\r\n<p>-&nbsp;&nbsp; &nbsp;Keju Cheddar</p>\r\n\r\n<p>-&nbsp;&nbsp; &nbsp;Keju krim</p>\r\n\r\n<p>-&nbsp;&nbsp; &nbsp;Bayam</p>\r\n\r\n<p>-&nbsp;&nbsp; &nbsp;Rempah-rempah</p>\r\n\r\n<p><strong>Cara membuatnya:</strong></p>\r\n\r\n<p>- Pertama, panaskan wajan dan tambahkan mentega.</p>\r\n\r\n<p>- Panaskan roti dan beri taburan rempah, seperti bubuk kayu manis dan merica.</p>\r\n\r\n<p>- Balik roti sampai kematangan yang diinginkan.</p>\r\n\r\n<p>- Setelah matang, tambahkan irisan keju cheddar dan beberapa sendok keju krim.</p>\r\n\r\n<p>- Tutup wajan sampai keju meleleh.</p>\r\n\r\n<p>- Setelah itu, tambahkan bayam yang sudah dicuci (bisa mentah atau direbus terlebih dahulu)</p>\r\n\r\n<p>- Tambahkan salsa, saus khusus burger.</p>\r\n\r\n<p>- Burger keju sehat siap untuk disantap.</p>\r\n', 1),
(6, 'tumis-ayam-brokoli', '041938700_1450786228-selerasa.jpg', 'Tumis Ayam Brokoli', 257, '<p>Kamu juga bisa mengonsumsi menu yang mudah dicerna dan bebas kalori seperti tumis ayam brokoli ini. Jika kamu memasaknya dengan benar, nilai gizi yang terkandung dalam sayur dan daging ayam ini akan membantu program dietmu.</p>\r\n\r\n<p>Berikut bahan-bahan dan cara membuat tumis ayam brokoli sebagai resep makanan sehat untuk diet:</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<p>- 1 buah dada ayam, fillet lalu potong-potong</p>\r\n\r\n<p>- 250 mg brokoli, bisa di tambah jika suka</p>\r\n\r\n<p>- 2 buah bawang putih, cincang</p>\r\n\r\n<p>- 1 buah daun bawang potong ukuran sedang</p>\r\n\r\n<p>- 2 sdm minyak zaitun</p>\r\n\r\n<p>- 1 sdm saos tiram</p>\r\n\r\n<p>- garam, merica, kaldu jamur secukupnya</p>\r\n\r\n<p><strong>Cara membuat:</strong></p>\r\n\r\n<p>- Balur ayam yang sudah di potong dengan garam, merica kemudian diamkan sebentar.</p>\r\n\r\n<p>- Panaskan minyak zaitun kemudian masukan bawang bombay, tumis hingga layu,</p>\r\n\r\n<p>- Selanjutnya masukan bawang putih dan tumis hingga harum.</p>\r\n\r\n<p>- Masukan dada ayam, setelah matang masukan brokoli dan aduk-aduk kembali.</p>\r\n\r\n<p>- Jangan lupa tambahkan sedikit air, masukan saos tiram, sedikit garam dan gula, kaldu serta merica sedikit saja.</p>\r\n\r\n<p>- Agar kandungan gizi tidak hilang sebaiknya gunakan garam sedikit saja atau tidak sama sekali.</p>\r\n', 1),
(7, 'meatza', '029351200_1583829223-65.jpg', 'Meatza', 833, '<p>Meatza merupakan singkatan dari Meat (daging) dan Za (dari Pizza). Hampir sama seperti burger, jenis makanan seperti pizza dikategorikan dalam menu makanan yang tidak sehat. Namun, masih bisa kamu konsumsi dengan membuat resep pizza yang lebih sehat.</p>\r\n\r\n<p>Berikut bahan-bahan dan cara membuat Meatza sebagai resep makanan sehat untuk diet:</p>\r\n\r\n<p><strong>Bahan-bahan:</strong></p>\r\n\r\n<p>- Bawang</p>\r\n\r\n<p>- Daging sapi giling</p>\r\n\r\n<p>- Saus salsa</p>\r\n\r\n<p>- Rempah</p>\r\n\r\n<p>- Bubuk bawang putih</p>\r\n\r\n<p>- Keju parut</p>\r\n\r\n<p><strong>Cara membuatnya:</strong></p>\r\n\r\n<p>- Cincang halus bawang Bombay</p>\r\n\r\n<p>- Campur daging sapi dengan salsa, bawang, rempah, dan bubuk bawang putih di dalam Loyang.</p>\r\n\r\n<p>- Tambahkan keju parut di atasnya, dan tutup dengan irisan bacon.</p>\r\n\r\n<p>- Masukkan dalam oven dan panaskan pada suhu 180-200 derajat Celsius selama 30-40 menit.</p>\r\n\r\n<p>- Setelah itu, dinginkan.</p>\r\n', 1),
(8, 'sup-kacang-merah', 'Brenebon_1.JPG', 'Sup Kacang Merah', 215, '<p>Hidangan sup ini dibuat dari kacang merah dan sayuran yang disajikan dalam kuah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kaldu\" title=\"Kaldu\">kaldu</a>&nbsp;daging, dengan campuran bumbu sup pada umumnya seperti&nbsp;<a href=\"https://id.wikipedia.org/wiki/Bawang_putih\" title=\"Bawang putih\">bawang putih</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Merica\" title=\"Merica\">merica</a>&nbsp;dan bumbu-bumbu lain.</p>\r\n\r\n<p><strong>Bahan-bahan:</strong><br />\r\n- 500 gram kacang merah<br />\r\n- 300 gram daging sapi<br />\r\n- 2 batang daun bawang<br />\r\n- 2 batang seledri<br />\r\n- 1 buah tomat<br />\r\n- 1 buah kentang</p>\r\n\r\n<p><strong>Bumbu yang dihaluskan:</strong><br />\r\n- 6 siung bawang putih<br />\r\n- 1 ruas jahe<br />\r\n- 1/4 bagian pala<br />\r\n- Garam dan merica secukupnya</p>\r\n\r\n<p><strong>Cara membuat:</strong><br />\r\n1. Rebus daging sampai empuk, potong dadu.<br />\r\n2. Cuci bersih kacang, masukkan ke dalam air kaldu daging.<br />\r\n3. Masukkan bumbu halus, irisan kentang, dan daging sapi ke dalam rebusan kacang merah. Masak hingga kacang empuk.<br />\r\n4. Masukkan irisan daun bawang dan tomat. Aduk sebentar. Sajikan.</p>\r\n', 1),
(9, 'salad-kubis-manis', '80df987016abdb646479d4ceaa45c540.jpg', 'Salad Kubis Manis', 134, '<p><strong>Salad</strong>&nbsp;adalah hidangan yang dibuat dari sayuran mentah, setengah masak atau masak dan dicampur dengan semacam saus ( dressing ). Suatu salad dapat disajikan dingin-dingin (setelah didinginkan terlebih dahulu dalam&nbsp;<a href=\"http://id.wikipedia.org/w/index.php?title=Lemari_pendingin&amp;action=edit&amp;redlink=1\" title=\"Lemari pendingin (halaman belum tersedia)\">lemari pendingin</a>&nbsp;) atau disajikan dalam&nbsp;<a href=\"http://id.wikipedia.org/w/index.php?title=Temperatur_ruang&amp;action=edit&amp;redlink=1\" title=\"Temperatur ruang (halaman belum tersedia)\">temperatur ruang</a>, dan dapat juga menjadi isi dari&nbsp;<a href=\"http://id.wikipedia.org/w/index.php?title=Roti_sandwich&amp;action=edit&amp;redlink=1\" title=\"Roti sandwich (halaman belum tersedia)\">roti sandwich</a>. Walaupun dapat dibuat atau terdiri dari bahan&nbsp;<a href=\"http://id.wikipedia.org/wiki/Daging\" title=\"Daging\">daging</a>&nbsp;<a href=\"http://id.wikipedia.org/w/index.php?title=Matang&amp;action=edit&amp;redlink=1\" title=\"Matang (halaman belum tersedia)\">matang</a>&nbsp;atau&nbsp;<a href=\"http://id.wikipedia.org/wiki/Telur\" title=\"Telur\">telur</a>&nbsp;(<a href=\"http://id.wikipedia.org/w/index.php?title=Rebus&amp;action=edit&amp;redlink=1\" title=\"Rebus (halaman belum tersedia)\">rebus</a>&nbsp;atau&nbsp;<a href=\"http://id.wikipedia.org/wiki/Goreng\" title=\"Goreng\">goreng</a>), umumnya jenis makanan ini terdiri dari setidaknya satu jenis&nbsp;<a href=\"http://id.wikipedia.org/w/index.php?title=Sayuran_mentah&amp;action=edit&amp;redlink=1\" title=\"Sayuran mentah (halaman belum tersedia)\">sayuran mentah</a>&nbsp;(<a href=\"http://id.wikipedia.org/wiki/Lalapan\" title=\"Lalapan\">lalapan</a>) atau&nbsp;<a href=\"http://id.wikipedia.org/wiki/Buah-buahan\" title=\"Buah-buahan\">buah-buahan</a>, umumnya digunakan&nbsp;<a href=\"http://id.wikipedia.org/wiki/Selada\" title=\"Selada\">selada</a>.</p>\r\n\r\n<p><strong>Bahan-bahan:</strong><br />\r\n- 6 cup kubis ungu yang sudah dipotong sesuai selera<br />\r\n- 1 cup wortel yang sudah diserut<br />\r\n- 1 cup paprika hijau yang sudah dipotong<br />\r\n- 1/2 cup bawang bombai<br />\r\n- 1/2 cup gula<br />\r\n- 1/2 cup cuka anggur putih<br />\r\n- 2 sendok makan minyak zaitun<br />\r\n- 1 sendok teh mustard kering<br />\r\n- 1/2 sendok teh biji seledri<br />\r\n- 1/2 sendok teh garam</p>\r\n\r\n<p><strong>Cara membuat:</strong><br />\r\n1. Siapkan satu mangkuk ukuran sedang yang bisa memuat semua bahan.<br />\r\n2. Setelah itu, campurkan 4 bahan sayuran utama dan aduk rata. Kemudian, siapkan mangkuk kecil lain untuk membuat saus salad.<br />\r\n3. Masukkan bahan saus, minyak zaitun, gula, cuka, dan bahan lain dalam mangkuk kecil, lalu aduk bahan hingga rata.<br />\r\n4. Tuangkan saus ke mangkuk besar berisi sayuran.<br />\r\n5. Aduk rata dan biarkan selama kurang lebih 1 jam.<br />\r\n6. Salad kubis manis siap disajikan.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(2) NOT NULL,
  `foto` varchar(225) DEFAULT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kelamin` varchar(20) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `id_level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `foto`, `nama`, `alamat`, `kelamin`, `nohp`, `password`, `email`, `id_level`) VALUES
(1, 'yato_tumblr_by_evil_usagi-d9lkece.jpg', 'Randy Rahmawan', 'Jember', 'L', '08123456789', 'darkness1234', 'randyrahmawan@gmail.com', 1),
(2, 'download.jpg', 'Firman Wahyudi', 'Situbondo', 'Kelamin', '085231481241', 'firman123', 'firmangetrich50@gmail.com', 1),
(3, 'yato_by_sidusrie-d7y4633.jpg', 'Monkey D Luffy', 'East Blue', 'L', '0999999', 'monkey', 'monkeydluffy@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`) USING BTREE,
  ADD KEY `userid` (`id_user`),
  ADD KEY `kategori` (`id_kategori`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`) USING BTREE;

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`) USING BTREE;

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`id_makanan`) USING BTREE,
  ADD KEY `user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `id_makanan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `userid` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `id_level` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
