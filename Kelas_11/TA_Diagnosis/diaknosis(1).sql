-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Nov 2015 pada 04.17
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diaknosis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `kode` int(3) NOT NULL,
  `username` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`kode`, `username`, `password`) VALUES
(23, 'mei', '1999');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE IF NOT EXISTS `tb_artikel` (
  `no` int(2) NOT NULL AUTO_INCREMENT,
  `judul` varchar(150) NOT NULL,
  `artikel` varchar(5000) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `tb_artikel`
--

INSERT INTO `tb_artikel` (`no`, `judul`, `artikel`, `kategori`) VALUES
(1, 'Penyakit otot jantung', 'Penyakit otot jantung atau karmodiomiopati disebabkan karena penurunan fungsi miokardium atau otot jantung. Gejalanya mencakup sesak nafas, jantung berdebar-debar, pusing, mudah lelah, irama jantung yang tidak normal, pembengkakan pada kaki, aritmia.', 'sesak nafas , Pusing , Mudah Lelah, Denyut Jantung Tidak Teratur, pembengkakan pada kaki'),
(2, 'Kardiovaskular', 'Penyakit jantung yang merujuk pada penyakit tertentu yang mempengaruhi sistem pembuluh darah yang kompleks. Penelitian mengungkapkan bahwa sementara sebagian besar wanita menderita penyakit jantung yang mempengaruhi sistem pembuluh darah, sedangkan pria menderita implikasi dalam otot jantung. Gejala berupa nyeri pada bagian dada tengah, nyeri pada bahu atau lengan, berkeringat, mual, tiba-tiba kehilangan penglihatan, sakit kepala parah.', 'nyeri pada bagian dada tengah, berkeringat, sakit kepala parah'),
(3, 'Penyakit jantung iskemik', 'Penyakit ini dikarenakan pasokan oksigen yang kurang. Tanda-tanda dan gejalanya termasuk nyeri di daerah dada tengah dan lengan kiri, dada mengencang, berkeringat dan penebalan tendon achiles.', 'nyeri di daerah dada tengah, berkeringat, aritmia, nafas yang pendek'),
(4, 'Bradikardi', 'Merupakan istilah medis dari denyut jantung yang mengalami keterlambatan. Kondisi ini bisa saja terjadi disaat otot-otot jantung seseorang berada dalam kondisi kelelahan. Alat pacu jantung yang sengaja dipasang di organ jantung bisa saja kembali memacu denyut jantung yang terlalu lemah. Gejalanya adalah mudah lelah, denyut jantung tidak normal, pusing, sesak nafas.', 'mudah lelah, jantung berdebar-debar, pusing, nafas yang pendek'),
(5, 'Gagal jantung', 'Kondisi ini seringkali terjadi disaat jantung seseorang tidak mampu untuk melakukan tugasnya dengan baik atau bahkan berhenti bekerja. Kondisi bisa terjadi disaat seseorang kehilangan banyak darahnya, adanya gangguan paru-paru bahkan karena terkejut. Gagal jantung bisa berupa sistolik atau diastolik. Gejalanya meliputi sesak nafas, pembengkakan pada jantung dan kelainan dalam fungsi jantung.', 'sesak nafas, pembengkakan pada jantung dan kelainan dalam fungsi jantung.'),
(6, 'Angina', 'Kondisi ini juga dikenal dengan istilah angin duduk di Indonesia. Angina adalah sakit dada yang timbul karena berkurangnya suplai darah ke otot jantung akibat penyempitan pembuluh darah. Seseorang yang menderita angina berisiko lebih tinggi untuk mengalami serangan jantung dibandingkan mereka yang tidak menderita angina.\r\nSerangan ini biasanya berlangsung beberapa menit dan dipicu oleh aktivitas fisik atau stres. Jenis sakitnya pun bermacam-macam. Ada yang terasa menyebar di sekitar dada, berat seperti tertindih, atau sesak nafas. Selain sakit dada, seseorang juga bisa merasa sesak napas, mual, lelah, pusing dan gelisah saat angina menyerang.\r\nAngina dapat dikelompokkan ke dalam dua jenis, yaitu angina stabil dan angina tidak stabil.\r\nAngina stabil adalah jenis serangan angina yang terjadi ketika jantung dituntut untuk bekerja lebih keras, misalnya saat melakukan aktivitas berat. Serangan ini dapat diatasi dengan obat dan istirahat. Serangan angina stabil tidak mengancam jiwa, tapi harus tetap diwaspadai.\r\nSedangkan angina tidak stabil adalah serangan angina yang menyerang secara tiba-tiba dan tanpa sebab yang jelas. Serangan ini dapat berlangsung walau penderita sedang santai atau beristirahat dan tidak selalu bisa ditangani dengan obat.\r\nSerangan angina tidak stabil membutuhkan penanganan medis darurat karena menandakan bahwa penderita mengalami fungsi jantung yang menurun drastis. Jika setelah dosis obat angina kedua dada masih terasa sakit, segera pergi ke rumah sakit terdekat.\r\nObat-obatan untuk Menangani Angina yaitu Beta-blockers, Calcium channel blockers, Obat nitrat, Ivabradine, Nicorandil, Ranolazine.\r\n', 'sesak nafas, mual, mudah lelah, pembakaran dalam rongga dada'),
(7, 'Penyakit jantung rematik', 'Macam-macam penyakit jantung yang sebaiknya juga Anda ketahui adalah penyakit jantung rematik. Sejenis penyakit jantung yang disebabkan oleh infeksi bakteri sewaktu kecil yang mampu memengaruhi sendi serta katup jantung. Permasalahan jantung ini akan muncul disaat seseorang dewasa. Satu-satunya jalan yang bisa mengatasi gangguan kesehatan ini adalah dengan seringkali mengganti katup jantung dengan melakukan operasi yang diperlukan untuk memperbaiki kondisi yang tidak semestinya. Gejalanya adalah sesak nafas, adanya bercak warna merah pada tubuh, nyeri pada perut, demam, mudah lelah', 'sesak nafas, mudah lelah, keringat dingin'),
(8, 'Penyakit Kelainan katup jantung', 'Katup jantung adalah salah satu bagian jantung yang mengontrol aliran darah ke jantung atau yang keluar dari jantung. Pada saat katup pada jantung anda mengalami kelainan, entah bocor atau katup tidak bisa menutup dengan sempurna, maka kerja jantung anda bisa terganggu.\r\nKebanyakan, orang yang menderita kelainan katup jantung dikarenakan penderita sering mengkonsumsi obat-obatan kimia. Atau, bisa jadi kelainan katup jantung tersebut sudah dibawa sejak ia lahir. Gejala yang biasanya akan anda rasakan adalah denyut jantung yang tidak teratur, nyeri pada jantung, kelelahan, batuk, sesak nafas dan kaki bengkak.\r\n', 'denyut jantung tidak teratur, bagian jantung kebiru-biruan, sakit kepala parah, sesak nafas, pembeng'),
(9, 'Gagal Jantung', 'Ketika jantung anda mengalami kegagalan, maka organ vital tersebut tidak dapat memompa darah dengan optimal ke seluruh tubuh. Jantung masih tetap bisa bekerja, tetapi makin hari kerja jantung akan melemah dan bisa saja akan menimbulkan kematian bagi penderitanya. Gejalanya yang mungkin akan anda rasakan, nyeri pada jantung, terasa lemas, detakan jantung yang tidak teratur, dan lain sebagainya. Gagal jantung biasanya disebabkan oleh pola hidup anda yang tidak sehat, sering merokok, sering makan makanan yang berlemak dan masih banyak lagi.', 'nyeri pada bagian dada sebelah kiri, keringat dingin, mudah lelah'),
(10, 'Otot Jantung Melemah', 'Melemahnya otot jantung yakni suatu kondisi dimana berbagai otot dan rongga dalam jantung tidak mempunyai kekuatan seperti jantung normal lainnya. Penderita penyakit ini biasanya tidak dapat melakukan berbagai aktifitas yang terlalu berlebihan, sebab aktifitas yang terlalu berat pada jantung mampu menimbulkan rasa sakit pada dada bahkan terkadang salah satu dari macam-macam penyakit jantung dan gejalanya yang memberikan rasa sakit pada dada tersebut mampu menjadikan tubuh tampak kebiru-biruan. Penyebab dari penyakit ini biasanya sudah bawaan semenjak orang tersebut lahir sehingga sedikit sulit untuk dilakukan pengobatan.', 'Bagian Tubuh Kebiru-biruan, Nyeri Pada Bagian Dada Sebelah Kiri, mudah lelah'),
(11, 'Celah Antar Serambi', 'Jantung yang normal dan sehat biasanya mempunyai saluran yang kuat dan tertutup tanpa celah. Pada kasus penyakit ini yakni terdapat celah antara bagian serambi kanan dan bagian serambi kiri yang menyebabkan tercampurnya darah bersih dan darah kotor sehingga tidak terjadi penyaringan untuk memberikan darah yang bersih bagi anggota tubuh.\r\nPenyakit ini biasanya terjadi karena ketidak sempurnanya proses pembetukan lapisan yang telah memisahkan antar serambi pada saat masih berada di dalam kandungan. Seseorang yang menderita penyakit ini biasanya tidak bisa melakukan aktifitas yang terasa berat karena mampu menjadikan tubuh yang mengidap penyakit ini berubah menjadi agak kebiru-biruan dan merasakan sesak nafas meskipun tidak menimbulkan rasa nyeri pada dada.\r\n', 'mudah lelah, Bagian Tubuh Kebiru-biruan, sesak nafas'),
(12, 'Serangan Jantung', 'Penyakit yang biasa menyerang masyarakat dan menjadi penyebab utama kematian adalah serangan jantung yang menyebabkan stroke. Serangan jantung merupakan kondisi dimana jantung tidak dapat berfungsi sama sekali yang disebabkan oleh terhambatnya proses suplai darah kedalam jaringan otot-otot jantung karena terjadi sumbatan pada pembuluh darah ataupun pembuluh darah yang mengeras yang dapat disebabkan oleh banyaknya kolesterol, lemak ataupun kadar zat kimia dari obat-obatan yang terlalu banyak.\r\nPenyebab utamanya adalah terjadinya gumpalan darah atau trombosis. Penanganan medis dalam hitungan menit diperlukan karena serangan ini dapat merusak otot jantung secara permanen.\r\nBeberapa gejala serangan jantung adalah sakit dada yang parah, kesulitan bernapas/sesak nafas, merasa lemas, pusing, serta panik. Sakit dada itu juga bisa menyebar ke leher hingga rahang, ke lengan kiri, dan ke punggung.\r\nTetapi perlu diingat bahwa tidak semua penderita serangan jantung mengalami sakit dada yang parah. Indikasi serangan jantung bukan ditentukan oleh tingkat keparahan sakit dada, melainkan dari kombinasi gejala yang dirasakan.\r\nPenyakit jantung yang tidak ditangani akan berujung pada komplikasi mematikan. Ketika tidak menerima suplai darah hingga terlalu lemah untuk memompa darah, kinerja jantung akan menurun. Kondisi ini disebut gagal jantung. Komplikasi ini dapat terjadi secara tiba-tiba maupun bertahap. Dengan adanya kondisi gagal jantung, organ-organ lain seperti ginjal dan paru-paru juga akan terpengaruh.', 'pusing, berkeringat, nafas yang pendek, aritmia'),
(13, 'Jantung Koroner', 'Jantung koroner atau artherosklerosis adalah penyakit jantung dimana terjadi penyempitan pada pembuluh kecil yang bertugas mengalirkan darah dan oksigen ke jantung. Penyakit ini disebabkan oleh pembentukan plak pada dinding arteri atau pengerasan arteri yang dapat disebabkan oleh genitas atau pola hidup yang tidak sehat. Penyebab lain yang turut mempengaruhi terjadinya penyakit ini adalah kadar kolesterol yang tinggi, kebiasaan merokok serta penyalahgunaan substansi dan masalah berat badan dalam artian lain pola diet yang terlalu ketat.\r\nGejala awal ialah nyeri dada yang khas di dada sebelah kiri yang dapat menjalar ke lengan kiri atau ke leher atau ke punggung, merasa ada yang berbeda. Nyeri dada ini bersifat sangat subjektif, ada yang merasa seperti ditekan benda berat, panas seperti terbakar, sakit seperti tertusuk jarum, rasa tidak enak di dada dan ada yang mengatakan seperti masuk angin. Lokasinya bisa juga terjadi di pertengahan dada, di leher saja, punggung, dada kanan, dan bisa juga di ulu ati seperti sakit maag. ', 'Nyeri Pada Bagian Dada Sebelah Kiri, Pembakaran Dalam Rongga Dada, sesak nafas, mudah lelah, Denyut '),
(14, 'Penyakit jantung lemah', 'Salah satu tanda tanda penyakit jantung lemah ini seringkali dianggap sebagai tanda-tanda penyakit ringan karena terlalu banyak bekerja dan kurang istirahat, padahal kelelahan dan juga berkeringat secara berlebihan merupakan tanda tanda jika kondisi jantung Anda sedang berada dalam kondisi yang tidak baik. Wanita yang menderita penyakit jantung seringkali mengeluhkan rasa lelah yang pada akhirnya membuat mereka tidak sanggup untuk bangun dan melakukan pekerjaan sehari-hari', 'mudah lelah, berkeringat, keringat dingin, sesak nafas, sakit kepala parah'),
(15, 'Jantung Bengkak', 'Pembengkakan atau pembesaran yang terjadi pada organ jantung menunjukkan jika ada gangguan kesehatan pada jantung Anda. Pembesaran jantung merupakan kondisi yang ditandai dengan pembesaran ukuran organ jantung yang bisa dilihat dari pemeriksaan kesehatan, tepatnya pemeriksaan X-ray.\r\nCukup banyak hal yang bisa menyebabkan jantung mengalami pembengkakan, entah itu kehamilan, stres atau lemah otot jantung, adanya masalah pada katup jantung, penyakit arteri koroner dan detak jantung yang tidak normal, faktor keturunan, penurunan fungsi pada otot jantung, diabetes. Hal ini umumnya terjadi pada mereka yang sudah lanjut usia, karena semakin bertambahnya usia, kemampuan otot jantung semakin mengalami penurunan sehingga tidak mampu untuk melakukan tugasnya dengan baik maka jantung akan melakukan pekerjaan yang jauh lebih berat untuk melakukan tugasnya.\r\nSalah satu gejala dari jantung bengkak adalah sulit bernapas. Karena masalah terjadi pada organ jantung yang dekat dengan paru-paru maka kemungkinan ini bisa saja terjadi atau karena jantung tidak bisa melakukan tugasnya dengan baik. Anda yang seringkali merasa kelelahan meskipun tidak sedang melakukan pekerjaan yang memberatkan jantung.\r\nPasien yang didiagnosa positive menderita pembengkakan jantung akan mengalami beberapa gejala, tidak terkecuali dengan pembengkak pada kaki atau pergelangan kaki, mengalami rasa nyeri pada dada, sulit bernapas bahkan yang sudah parah bisa sampai pingsan.\r\nResiko dari komplikasi pembengkakan jantung tergantung dari area mana yang tengah mengalami pembengkakan jantung serta apa penyebab utama mengapa jantung bisa sampai mengalami pembengkakan. Komplikasi yang timbul, antara lain gagal jantung, serangan jantung, pembekuan darah bahkan menyebabkan kematian mendadak.\r\n', 'Pembengkakan pada Kaki, sesak nafas, Nyeri Pada Bagian Dada Sebelah Kiri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel_penyakit`
--

CREATE TABLE IF NOT EXISTS `tb_artikel_penyakit` (
  `no` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `artikel` varchar(1000) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_artikel_penyakit`
--

INSERT INTO `tb_artikel_penyakit` (`no`, `judul`, `artikel`) VALUES
(1, 'Jantung', 'Jantung adalah organ tubuh yang terdiri dari kumpulan otot yang berfungsi memompa darah ke seluruh tubuh.\r\n			Secara rata-rata, jantung manusia berdenyut 72 kali per menit dalam status beristirahat dan memompa 4 hingga 7 liter darah pada tiap menitnya.\r\n			Secara umum fungsi jantung yang utama adalah memompa darah ke seluruh tubuh dan menampungnya kembali setelah dibersihkan organ paru-paru.\r\n			Hal ini berarti bahwa fungsi jantung manusia adalah sebagai alat atau organ pemompa darah pada manusia.\r\n			Pada saat itu jantung menyediakan oksigen darah yang cukup dan dialirkan ke seluruh tubuh, serta membersihkan tubuh darih hasil metabolisme (karbondioksida).\r\n			Penyakit jantung atau sakit jantung merupakan salahsatu penyakit yang perlu kita waspadai, banyak kasus orang terkena sakit jantung secara tiba-tiba.\r\n			Kolesterol serta lemak berlebih dalam tubuh dihubungkan sebagai factor penyebab masalah jantung.\r\n			Sayang, banyak dari kita yang tetap meremehkan pola makan sehat walau penyak'),
(2, 'Faktor yang mempengaruhi penyakit jantung', 'Faktor yang dapat mempengaruhi penyakit jantung yaitu \r\n				Hipertensi, Merokok, Obesitas, Stres, Tekanan darah, Pola makan yang buruk, \r\n				Kadar kolesterol tinggi, Jarang berolahraga, Umur, Gender, dan Genetik.'),
(3, 'Makanan yang tidak dianjurkan', 'Makanan yang tidak dianjurkan dikonsumsi bagi pengidap penyakit jantung yaitu \r\n				Ubi singkong, Tape, Tape ketan, Daging sapi dan ayam yang berlemak, keju, susu penuh,\r\n				kacang yang mengandung lemak, Kol, Lobak, Sawi, Nangka, Durian, Teh/kopi kental.'),
(4, 'Bagian-bagian jantung', 'Jantung terdiri dari Atria, Ventrikel, Septum, Katup, Peredaran darah sisi kanan, \r\n				Peredaran darah sisi kiri, Sistem kardiovaskuler.'),
(5, 'Tips menjaga jantung', 'Melakukan pola hidup sehat, Stop Merokok, Olahraga secara rutin, Istirahat yang cukup, \r\n				Batasi Konsumsi Garam, Seringlah Tertawa Dan Tersenyum, Luangkan Waktu Untuk Rekreasi, Stop Dari Alkohol, \r\n				Makan buah dan sayur yang mengandung vitamin yang dibutuhkan jantung.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tb_diagnosis` (
  `no` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(3) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `gejala` varchar(300) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data untuk tabel `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`no`, `nama`, `alamat`, `umur`, `jk`, `gejala`) VALUES
(36, 'Robnad', 'ksdbnskmbdj', 1, 'Lakilaki', 'J'),
(37, 'lo', 'lo', 12, 'Lakilaki', 'S'),
(38, 'WERWQ', 'WRQ', 12, 'Lakilaki', 'N'),
(39, 'EFDC', 'DS', 1, 'Lakilaki', 'S'),
(40, 'SD', 'SCZ', 1, 'Lakilaki', 'Denyut jantung tidak teratur'),
(41, 'SWD', 'SZ', 0, 'Lakilaki', 'K'),
(42, '12', 'SAD', 0, 'Lakilaki', 'Nyeri pada bagian dada sebelah kiri , Sakit Kepala Parah'),
(43, '12', 'SAD', 0, 'Lakilaki', 'Nyeri pada bagian dada sebelah kiri , Sakit Kepala Parah'),
(44, '12', 'SAD', 0, 'Lakilaki', 'Nyeri pada bagian dada sebelah kiri , Sakit Kepala Parah'),
(45, 'edas', 'S', 2, 'Lakilaki', 'Pusing , Aritmia'),
(46, 'edas', 'S', 2, 'Lakilaki', 'Pusing , Aritmia'),
(47, 'edas', 'S', 2, 'Lakilaki', 'Pusing , Aritmia'),
(48, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(49, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(50, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(51, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(52, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(53, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(54, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(55, 'ZX', 'sf', 12, 'Lakilaki', 'Nafas yang pendek'),
(56, 'ROLS', 'xfcsd', 12, 'Lakilaki', 'Bagian Tubuh Kebiru-biruan , Pembakaran Dalam Rongga Dada'),
(57, 'df', 'SFFWS', 3, 'Lakilaki', 'Sesak Nafas , Pembakaran Dalam Rongga Dada'),
(58, 'sad', 'dsa', 132, 'Lakilaki', 'Denyut jantung tidak teratur'),
(59, 'q', 'wq', 1, 'Lakilaki', 'Keringat Dingin'),
(60, 'q', 'wq', 1, 'Lakilaki', 'Keringat Dingin'),
(61, 'q', 'wq', 1, 'Lakilaki', 'Keringat Dingin'),
(62, '123', 'cdva', 0, 'Lakilaki', 'Sesak Nafas , Bagian Tubuh Kebiru-biruan'),
(63, '123', 'cdva', 0, 'Lakilaki', 'Sesak Nafas , Bagian Tubuh Kebiru-biruan'),
(64, 'q', 'wdqeas', 0, 'Lakilaki', 'Pembakaran Dalam Rongga Dada , Mudah Lelah'),
(65, 'q', 'wdqeas', 0, 'Lakilaki', 'Pembakaran Dalam Rongga Dada , Mudah Lelah'),
(66, 'q', 'wdqeas', 0, 'Lakilaki', 'Pembakaran Dalam Rongga Dada , Mudah Lelah'),
(67, 'kjvjh', 'jvn', 5, 'Lakilaki', 'N'),
(68, 'kjvjh', 'jvn', 5, 'Lakilaki', 'N'),
(69, 'kjvjh', 'jvn', 5, 'Lakilaki', 'N'),
(70, 'kjvjh', 'jvn', 5, 'Lakilaki', 'N'),
(71, 'rPODSKLHIU', 'LKSHCFK', 12, 'Lakilaki', 'Pembengkakan pada Kaki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`email`, `password`) VALUES
('ival@elek', 'elek'),
('mei@welek', 'welek');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
