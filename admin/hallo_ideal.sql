-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2020 pada 10.52
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_KATEGORI` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `URL_ARTIKEL` varchar(100) DEFAULT NULL,
  `JUDUL_ARTIKEL` varchar(100) DEFAULT NULL,
  `SAMPUL` varchar(20) DEFAULT NULL,
  `ISI_ARTIKEL` text,
  `TANGGAL_TERBIT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`ID_ARTIKEL`, `ID_KATEGORI`, `USER_ID`, `URL_ARTIKEL`, `JUDUL_ARTIKEL`, `SAMPUL`, `ISI_ARTIKEL`, `TANGGAL_TERBIT`) VALUES
(1, 1, 1, 'kumpulan-protokol-kesehatan-selama-pandemic-covid-19', 'Kumpulan Protokol Kesehatan selama Pandemic Covid-19', 'covid19.jpg', 'Protokol kesehatan menjadi satu hal yang perlu dipahami oleh seluruh lapisan masyarakat selama melakukan aktivitas. Sejumlah tempat usaha/ aktivitas pun mulai dibuka. Namun, bukan berarti kita tidak akan tertular oleh virus corona. Kita semua harus tetap waspada dan wajib melakukan adaptasi kebiasaan baru yang beberapa dijelaskan dalam protokol kesehatan. Berikut beberapa protokol kesehatan yang harus dijalankan : 19', '2020-12-08'),
(2, 2, 2, 'pengaruh-wabah-virus-terhadap-tubuh-manusia', 'Pengaruh Wabah Virus Terhadap Tubuh Manusia', 'cov-l.jpg', 'Virus memiliki berbagai macam jenis yang dapat menyerang immune pada tubuh. Wabah virus yang saat ini sedang berlangsung namanya COVID-19.', '2020-12-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `ID_KATEGORI` int(11) NOT NULL,
  `KATEGORI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`ID_KATEGORI`, `KATEGORI`) VALUES
(1, 'Healthy'),
(2, 'Safety');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `ID_MAKANAN` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `URL_MAKANAN` varchar(200) DEFAULT NULL,
  `NAMA_MAKANAN` varchar(30) DEFAULT NULL,
  `RESEP_MAKANAN` text,
  `KALORI_MAKANAN` varchar(8) DEFAULT NULL,
  `SAMPUL_MAKANAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_makanan`
--

INSERT INTO `tb_makanan` (`ID_MAKANAN`, `USER_ID`, `URL_MAKANAN`, `NAMA_MAKANAN`, `RESEP_MAKANAN`, `KALORI_MAKANAN`, `SAMPUL_MAKANAN`) VALUES
(1, 1, 'resep-nasi-goreng-dengan-kalori-267kal', 'Nasi Goreng', 'Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin atau mentega, biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya, seperti telur, ayam, dan kerupuk. Ada pula nasi goreng jenis lain yang dibuat bersama ikan asin yang juga populer di seluruh Indonesia.\r\nBahan:\r\n- Nasi 600 g\r\n- Telur ayam 1 butir. Kocok\r\n- Daging ayam 125 g. Cincang halus\r\n- Sosis ayam 1 buah\r\n- Bawang putih 3 siung. Iris halus\r\n- Garam sdt\r\n- Penyedap rasa sdt\r\n- Kecap ikan sdm\r\n- Merica sdt\r\n- Daun bawang 1 batang. Iris halus\r\n\r\nCara memasak:\r\na. Tumis bawang putih hingga harum. Tambahkan telur lalu orak-arik.\r\nb. Kemudian tambahkan ayam yang telah dicincang halus dan sosis. Masukkan daun bawang. Tumis lagi.\r\nc. Masukkan nasi lalu aduk hingga rata. Tambahkan garam, merica, kecap ikan, dan penyedap rasa. Aduk rata sampai aroma sedap atau harum tercium.\r\nd. Pindahkan nasi goreng putih pada piring. Taburi bawang merah goreng sebagai tambahan.\r\n', '267 kal', 'nasgor.jfif'),
(2, 1, 'https://brilicious.brilio.net/masak-yuk/13-cara-membuat-rendang-enak-empuk-dan-sederhana-191014y.html', 'Rendang', 'Rendang adalah masakan daging yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak suhu rendah dalam waktu lama menggunakan aneka rempah-rempah dan santan. Proses memasaknya memakan waktu berjam-jam (biasanya sekitar empat jam) hingga yang tinggal hanyalah potongan daging berwarna hitam pekat dan dedak. Dalam suhu ruangan, rendang dapat bertahan hingga berminggu-minggu. Rendang yang dimasak dalam waktu yang lebih singkat dan santannya belum mengering disebut kalio, berwarna cokelat terang keemasan.\r\nBahan:\r\n- 500 gr daging\r\n- 1 batang serai geprek\r\n- 3 lembar daun jeruk\r\n- 2 lembar daun salam\r\n- 1 ruas lengkuas geprek\r\n- 2 cm kayu manis\r\n- 1 sdt gula merah\r\n- 1 sdt kaldu sapi dan garam\r\n- 1/2 sdt jintan bubuk\r\n- 1/2 sdt merica bubuk\r\n- Jeruk nipis\r\n- 500 ml santan dari 1/2 kelapa\r\n\r\nBumbu halus:\r\n- 4 siung bawang putih\r\n- 6 butir bawang merah\r\n- 2 butir kemiri\r\n- 1/2 sdt ketumbar\r\n- 3 cabai merah besar (buang bijinya)\r\n- 2 cm kunyit\r\n- 3 cm jahe\r\n\r\nCara membuat:\r\n- Cuci bersih daging, potong sesuai selera, beri perasan jeruk nipis, lalu cuci lagi\r\n- Haluskan bumbu, lalu tumis bumbu halus dengan serai, daun jeruk, daun salam, kayu manis dan lengkuas sampai matang\r\n- Masukkan daging, aduk rata, lalu masukkan santan. Masak dengan api kecil sambil sesekali diaduk.\r\n- Kemudian masukkan garam, kaldu, jintan, merica dan gula merah, diamkan hingga bumbu meresap dan airnya menyusut.\r\n4) Koreksi rasa, angkat dan hidangkan.', '468 kal', '035685000_1436945386-makanan-2.jpg'),
(3, 1, 'https://brilicious.brilio.net/masak-yuk/10-resep-ayam-geprek-crispy-enak-sederhana-dan-mudah-dibuat-191007r.html', 'Ayam Geprek', 'Ayam Geprek adalah makanan ayam goreng tepung khas Indonesia yang diulek atau dilumatkan bersama sambal bajak. Kini ayam geprek telah menjadi hidangan populer yang dapat ditemukan di hampir semua kota besar di Indonesia, tetapi asal mula ayam geprek berasal dari kota Yogyakarta. Geprek adalah istilah dalam Bahasa Jawa yang berarti \"dipukul\", \"ditekan\", atau \"dilumatkan\", maka ayam geprek berarti \"ayam yang dipukul\". Hidangan ini mirip dengan masakan Jawa tradisional ayam penyet, karena keduanya adalah sama-sama ayam goreng yang dipukul dan ditekan dengan menggunakan ulekan dan dicampur dengan sambal. \r\nBahan:\r\n- 1 kg ayam, potong-potong\r\n- 1 butir Telur utuh\r\n- 500 gram terigu cakra (adonan kering)\r\n- 250 gram terigu segitiga (adonan basah/pencelup)\r\n- 5 sdm maizena\r\n- 6 siung bawang putih cincang halus\r\n- secukupnya jeruk nipis\r\n- 1 sdt baking powder\r\n- 1/4 sdt lada bubuk\r\n- 1/2 sdt penyedap jamur\r\n- 1 sdt garam\r\n- 1 sdm saos tiram\r\n- 1/2 sdt gula (optional)\r\n- secukupnya air es\r\n\r\nBahan sambal:\r\n- 20 butir cabe rawit\r\n- 10 butir cabe merah\r\n- 2 siung bawang putih\r\n- secukupnya minyak sayur\r\n- secukupnya garam, gula, penyedap\r\n\r\nCara memasak:\r\n- Beri potongan ayam dengan jeruk nipis dan garam.\r\n- Lumuri ayam dengan setengah bagian bawang putih yang sudah dicincang halus tadi, tambahkan lada bubuk sedikit, saos tiram, garam, gula dan penyedap jamur. Lalu simpan semalam di kulkas supaya bumbu meresap dan ayam empuk.\r\n- Bahan pencelup: terigu telur dan air es kocok sampai adonan kental jangan encer, beri sdikit garam lalu aduk sampai rata.\r\n- Bahan kering: terigu cakra, maizena, bawang putih cincang, lada bubuk, baking piwder, garam dan penyedap jamur diaduk sampai rata.\r\n- Siapkan ayam yang sudah dibumbui dan disimpan dalam kulkas lalu celup ke dalam adonan kering sampai rata seluruh permukaan ayam tertutup bahan kering.\r\n- Setelah rata semua celupkan ke dalam adonan basah sampai rata, lalu celupkan lagi ke dalam adonan kering, lalu goreng di minyak panas hingga ayam terendam.\r\n- Goreng dengan api kecil selama 15 menit sampai berwarna golden brown dan bunyi berisiknya hilang. Angkat dan sisihkan\r\n- Untuk membuat sambal korek, haluskan semua bahan sambal jangan terlalu halus, sisihkan.\r\n- Panaskan minyak bekas menggoreng ayam sampai benar-benar panas\r\n- Setelah minyak panas siramkan ke atas sambel yang sudah di haluskan tadi sambil terus di aduk rata\r\n- Siapkan ayam di piring, penyet /tekan ayam memakai ulekan kayu sampai remuk lalu siram sambal korek diatasnya\r\n- Ayam goreng geprek crispy siap dihidangkan', '616 kal', 'Ayam-Geprek-1.jpg'),
(4, 1, 'https://brilicious.brilio.net/masak-yuk/24-resep-soto-ayam-yang-paling-menggugah-selera-makan-181107d.html', 'Soto Ayam', 'Soto ayam adalah makanan khas Indonesia yang berupa sejenis sup ayam dengan kuah yang berwarna kekuningan. Warna kuning ini dikarenakan oleh kunyit yang digunakan sebagai bumbu. Soto ayam banyak ditemukan di daerah-daerah di Indonesia dan Singapura. Selain ayam bahan yang digunakan juga meliputi telur rebus, irisan kentang, daun seledri, serta bawang goreng. Terkadang soto juga disajikan dengan lontong atau nasi putih. Selain itu soto ayam juga sering dihidangkan dengan sambal, kerupuk dan koya\r\nBahan:\r\n- 1 ekor ayam\r\n- 1 lembar daun salam\r\n- 1 batang serai yang sudah digeprek\r\n- 1 buah jeruk nipis\r\n- 1 buah tomat yang sudah dipotong\r\n- 2 batang daun bawang yang sudah dipotong\r\n- 1/2 sendok teh bubuk ketumbar\r\n- 1/2 sendok teh bubuk merica\r\n- 1 bungkus kara\r\n- Garam secukupnya\r\n- Gula pasir seperlunya\r\n- Air matang seperlunya\r\n- 6 siung bawang merah\r\n- 4 siung bawang putih\r\n- 1 ruas jahe\r\n- 2 buah kemiri\r\n\r\nCara membuat:\r\na. Pertama, tumislah bumbu halus hingga harum. Masukan daun salam dan serai.\r\nb. Kemudian masukan air, masukan garam, merica, ketumbar, gula dan perasan jeruk nipis seperlunya saja. Aduk semuanya sampai merata dan tunggu hingga mendidih.\r\nc. Kemudian masukan ayam dan tunggu hingga ayam menjadi empuk, baru kemudian masukan santan kara. Aduk kembali hingga merata dan mengental.\r\nd. Campurkan tomat dan daun bawang ke dalamnya. Aduk lagi sampai benar-benar tercampur rata.\r\ne. Jika dirasa ayamnya sudah empuk, matikan kompor dan siap disajikan.\r\nf. Untuk penyajian terserah sesuai selera kamu. Seperti biasa untuk bahan pelengkap taburkan di atasnya.', '395,76 k', '7-cara-membuat-soto-ayam-kuning-lezat-dan-menggiurkan-ala-rumahan.jpg'),
(5, 1, 'https://brilicious.brilio.net/masak-yuk/10-resep-sate-ayam-simpel-mudah-dibuat-dan-menggugah-selera-2006119.html', 'Sate Ayam', 'Sate ayam adalah makanan khas Indonesia. Sate Ayam dibuat dari daging ayam. Pada umumnya sate ayam dimasak dengan cara dipanggang dengan menggunakan arang dan disajikan dengan pilihan bumbu kacang atau bumbu kecap. Sate ini biasanya disajikan bersama dengan lontong atau nasi.\r\nBahan:\r\n- 500 gram dada ayam,, bersihkan lalu potong tipis memanjang\r\n- tusukan sate\r\nBumbu marinasi (haluskan, lalu aduk rata campur jadi 1):\r\n- 5 butir bawang merah\r\n- 2 siung bawang putih\r\n- 1 sdt ketumbar\r\n- 2 butir kemiri\r\n- 2 sdm @saustiramcappanda\r\n- 1 sdm kecap manis\r\n- 1 sdm air jeruk lemon\r\n- 1/4 keping gula merah\r\nBumbu oles:\r\n- 1 sdm saus tiram\r\n- 4 sdm kecap manis\r\n- 1 sdm margarin\r\nCara membuat:\r\n- Setelah di marinasi semalaman, tusuk daging ayam dengan tusukan sate.\r\n- Bakar sate di atas alat pemanggang, atau bisa diatas teflon ambil diolesi bumbu oles, dan bolak-balik sate.\r\n- Panggang hingga matang. Angkat dan sajikan dengan siraman saos kacang dan sambal kecap, perasan jeruk limo dan taburan bawang goreng.', '1 tusuk ', 'sate-ayam.jpg'),
(6, 1, 'https://brilicious.brilio.net/masak-yuk/8-resep-rawon-daging-sapi-enak-sederhana-dan-spesial-2009299.html', 'Rawon', 'Rawon adalah masakan Indonesia berupa sup daging berkuah hitam dengan campuran bumbu khas yang menggunakan kluwek. Rawon, meskipun dikenal sebagai masakan khas Jawa Timur (daerah Arekan), dikenal pula oleh masyarakat Jawa Tengah sebelah timur (daerah Surakarta).\r\nDaging untuk rawon umumnya adalah daging sapi yang dipotong kecil-kecil, utamanya adalah bagian sandung lamur. Bumbu supnya sangat khas Indonesia, yaitu campuran bawang merah, bawang putih, lengkuas (laos), ketumbar, kemiri, serai, kunir, cabai, kluwek, garam, serta minyak nabati. Semua bahan ini dihaluskan, lalu ditumis sampai harum. Campuran bumbu ini kemudian dimasukkan dalam kaldu rebusan daging bersama-sama dengan daging. Warna gelap khas rawon berasal dari kluwek. Di luar negeri, rawon disebut sebagai black soup.\r\nBahan:\r\n- 500 gr daging sandung lamur\r\n- 2 batang serai, memarkan\r\n- 5 lembar daun jeruk\r\n- 1 ruas lengkuas, memarkan\r\n- air secukupnya\r\nBumbu halus:\r\n- 6 siung bawang merah\r\n- 3 siung bawang putih\r\n- 7 buah kluwak, keruk isinya\r\n- 1 sdt ketumbar\r\n- 3 butir kemiri, sangrai\r\n- 1 ruas kunyit, bakar\r\n- garam secukupnya\r\n- gula secukupnya\r\n- kaldu bubuk secukupnya\r\nPelengkap:\r\n- kecambah\r\n- telur asin\r\n- sambel terasi\r\nCara membuat:\r\n1. Tumis bumbu halus, lengkuas, serai dan daun jeruk hingga harum dan matang.\r\n2. Kemudian masukkan daging, aduk rata dan tambahkan tambahkan air.\r\n3. Bumbui dengan garam, gula, dan kaldu bubuk. Aduk-aduk, masak hingga matang dan daging empuk.\r\n4. Tes rasa dan matikan kompor. Sajikan rawon hangat dengan taburan kecambah, telur asin dan sambal.', '680 kal', 'resep-rawon-daging-780x440.jpg'),
(7, 1, 'https://nusadaily.com/food/gudeg-jogja-warisan-leluhur-yang-bikin-kangen-anak-cucu.html', 'Gudeg', 'Gudeg adalah makanan khas Provinsi Yogyakarta dan Jawa Tengah yang terbuat dari nangka muda yang dimasak dengan santan. Perlu waktu berjam-jam untuk membuat masakan ini. Warna coklat biasanya dihasilkan oleh daun jati yang dimasak bersamaan. Gudeg biasanya dimakan dengan nasi dan disajikan dengan kuah santan kental (areh), ayam kampung, telur, tempe, tahu dan sambal goreng krecek.\r\nBahan-bahan\r\n1. Nangka muda, potong kotak sedang â€“ 200 gram\r\n2. Santan pekat dari 1 buah kelapa â€“ 3 gelas\r\n3. Telur ayam, rebus dan kupas kulitnya â€“ 5 butir\r\n4. Daun jati â€“ 5 lembar\r\n5. Daun salam â€“ 5 lembar\r\n6. Lengkuas â€“ 3 cm\r\n7. Gula merah â€“ 2 bulatan\r\n8. Kecap manis â€“ 3 sdm\r\n9. Garam â€“ 1 sdt\r\nBumbu halus\r\n1. Bawang merah â€“ 15 siung\r\n2. Bawang putih â€“ 6 siung\r\n3. Kemiri â€“ 5 buah\r\n4. Ketumbar â€“ 1/2 sdm\r\n5. Merica â€“ 1/4 sdt\r\nCara memasak\r\n1. Panaskan air banyak di dalam panci. Masukkan nangka muda, daun jati, 3 lembar daun salam, dan Â½ bagian lengkuas. Rebus sampai empuk dan berwarna \r\n    kemerahan, kira-kira selama 1 jam.\r\n2. Tiriskan. Bilas sekali dengan air bersih dan matang. Tiriskan kembali.\r\n3. Masak nangka dengan bumbu halus dan separuh santan.\r\n4. Masukkan telur rebus.\r\n5. Masukkan 2 lembar daun salam, sisa lengkuas (geprek), gula merah, kecap, dan garam.\r\n6. Aduk terus hingga santan meresap dan berkurang. Masukkan sisa santan yang separuhnya lagi.\r\n7. Kecilkan api. Tutup pancinya dan biarkan gudeg mengering, kira-kira selama 2 jam.\r\n8. Diamkan gudeg selama satu malam.\r\n9. Panaskan kembali gudeg keesokan harinya sampai benar-benar kering dan berwarna merah kehitaman.\r\n10. Gudeg siap disajikan.', '1027,75 ', 'shutterstock_502495246.jpg'),
(8, 1, 'https://brilicious.brilio.net/masak-yuk/10-cara-membuat-nasi-kuning-spesial-gurih-dan-praktis-1910093.html', 'Nasi Kuning', 'Nasi kuning adalah makanan khas Indonesia. Makanan ini terbuat dari beras yang dimasak bersama dengan kunyit serta santan dan rempah-rempah. Dengan ditambahkannya bumbu-bumbu dan santan, nasi kuning memiliki rasa yang lebih gurih daripada nasi putih. Nasi kuning adalah salah satu variasi dari nasi putih yang sering digunakan sebagai tumpeng. Nasi kuning biasa disajikan dengan bermacam lauk-pauk khas Indonesia.\r\nBahan:\r\n- 1 kg beras\r\n- 5 cm kunyit\r\n- 2 cm lengkuas\r\n- 900 ml santan\r\n- 1 buah kelapa tua\r\n- 2 lembar daun pandan\r\n- 2 batang serai\r\n- 4 lembar daun salam\r\n- 5 cm jahe\r\n- 5 buah bawang merah\r\n- 4 sdt garam\r\n\r\nCara memasak:\r\na. Cuci bersih beras, lalu rendam dengan air.\r\nb. Haluskan kunyit, jahe, lengkuas, bawang merah, dan garam. Masukkan ke dalam santan dan aduk hingga rata.\r\nc. Masak santan sampai mendidih.\r\nd. Buang air rendaman beras, tuang santan ke beras sambil disaring. Masukkan daun salam dan serai.\r\ne. Rebus beras dengan api kecil. Terus aduk hingga air menyusut dan hampir berbentuk nasi. Setelah tingkat kematangan mencapai 3/4, ambil daun salam dan serai dari dalam.\r\nf. Siapkan panci untuk mengukus, rebus air dulu. Masukkan nasi ke dalam panci pengukus. Tambahkan daun pandan.\r\ng. Kukus nasi hingga benar-benar matang atau istilahnya tanak.\r\nh. Tunggu nasi hingga dingin, baru bisa dibentuk.', '100 kkal', 'nasi-kuning.jpg'),
(9, 1, 'https://brilicious.brilio.net/masak-yuk/8-resep-dan-cara-membuat-martabak-telur-enak-sederhana-191024w.html', 'Martabak Telur', 'Martabak telur memiliki cita rasa yang gurih.Berisikan sayur, daging dan bumbu lainnya yang digabung menjadi satu dalam sebuah kulit adonan. Makanan martabak telur ini cukup digemari di Indonesia dan banyak dijual di pinggir jalan. Proses pembuatan martabak telur pun cukup unik. Sebuah kulit adonan padat kemudian ditipiskan secukupnya. Setelah itu adonan tersebut akan diisi oleh sayuran dan daging yang dicampur dengan telur, kemudian digoreng sampai matang.\r\nBahan-bahan:\r\n- 300 gr daging sapi cincang\r\n- 3 siung bawang putih cincang\r\n- 1 buah bawang bombai cincang kasar\r\n- 1-2 sdt bubuk kari\r\n- garam, kaldu jamur, merica bubuk dan sedikit gula\r\n- 3-4 butir telur bebek/ayam\r\n- 3 batang daun bawang iris\r\n- sedikit garam\r\n\r\nBahan kulit:\r\n- 100 gr terigu segitiga\r\n- 2 sdm tepung sagu\r\n- sedikit garam\r\n- 1 butir telur\r\n- 250-280 ml air\r\n- 1 sdm minyak goreng\r\n\r\nCara membuat:\r\nIsian\r\n- Tumis bawang putih sampai wangi, masukkan daging cincang masak sampai berubah warna, beri garam, kaldu, merica, sedikit gula dan bubuk kari, cek rasa. Langkah erakhir masukkan bawang bombai aduk sebentar, angkat sisihkan\r\n\r\nKulit:\r\n- Campur semua bahan kulit jadi satu aduk sampai tidak bergerindil, saring, panaskan teflon ambil adonan sekitar 1 sendok sayur buat dadar tipis lakukan sampai habis\r\n- Kocok telur dengan sedikit garam, tambahkan isian dan daun bawang, ambil isian sekitar 2 sdm letakkan kedalam kulit martabak lalu bungkus/lipat seperti amplop, goreng sampai matang kecoklatan, angkat sajikan dengan acar timun wortel.', '350 kal', 'cara-membuat-martabak-telur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `USER_ID` int(11) NOT NULL,
  `NAMA` varchar(45) DEFAULT NULL,
  `JENIS_KELAMIN` char(3) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`USER_ID`, `NAMA`, `JENIS_KELAMIN`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Randy Rahmawan', 'L', 'randyrahmawan@gmail.com', 'darkness1234'),
(2, 'Dicky Kurnia Ramadhan', 'L', 'dickynakiri@gmail.com', 'dickynakiri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`ID_ARTIKEL`) USING BTREE,
  ADD KEY `FK_MEMASUKKAN` (`USER_ID`) USING BTREE,
  ADD KEY `FK_MEMILIKI` (`ID_KATEGORI`) USING BTREE;

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`) USING BTREE;

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`ID_MAKANAN`) USING BTREE,
  ADD KEY `FK_MENGISI` (`USER_ID`) USING BTREE;

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`USER_ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `ID_ARTIKEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  MODIFY `ID_MAKANAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD CONSTRAINT `FK_MEMASUKKAN` FOREIGN KEY (`USER_ID`) REFERENCES `tb_user` (`USER_ID`),
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `tb_kategori` (`ID_KATEGORI`);

--
-- Ketidakleluasaan untuk tabel `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD CONSTRAINT `FK_MENGISI` FOREIGN KEY (`USER_ID`) REFERENCES `tb_user` (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
