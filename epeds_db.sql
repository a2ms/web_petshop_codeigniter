-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 11:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epeds_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aksesoris`
--

CREATE TABLE `tbl_aksesoris` (
  `id_aksesoris` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `kategori_hewan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `foto` text NOT NULL,
  `verifikasi` tinyint(1) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aksesoris`
--

INSERT INTO `tbl_aksesoris` (`id_aksesoris`, `judul`, `harga`, `kategori_hewan`, `deskripsi`, `tanggal`, `foto`, `verifikasi`, `id_pengguna`) VALUES
(1, 'Baju Anjing', '$100.00', 'Anjing', 'Baju Anjing berfungsi melindungi Anjing dari panas terik Matahari', '2017-05-11 00:00:00', 'acc1.jpg', 0, 0),
(2, 'Kandang Hewan', '$200.00', 'Anjing', 'Kandang Hewan bisa digunakan kucing atau anjing agar kucing dan anjing tidak kawin untuk menghindari perkembangan populasi kucing dan anjing', '2017-05-10 00:00:00', 'acc4.jpg', 0, 0),
(3, 'Makanan Anjing', '$50.00', 'Anjing', 'Makanan anjing untuk memperlancar reproduksi anjing dan menstabilkan metabolisme tubuh anjing agar dapat menghasilkan anak banyak', '2017-05-09 00:00:00', 'food1.jpg', 0, 0),
(4, 'Rumah Anjing', '$300.00', 'Anjing', 'Rumah Anjing untuk menjaga anjing tidak melakukan pelecehan seksual diluar rumah. Monggo bagi yang minat untuk menghubungi contact person kami.', '2017-05-23 00:00:00', 'acc3.jpg', 0, 0),
(5, 'Food Class 1', '$25.00', 'Kucing', 'Makanan kucing yang membuat kucing kenyang dan tidak akan pernah merasa lapar lagi.', '2017-05-19 00:00:00', 'food2.jpg', 0, 0),
(6, 'Makanan Kucing', '$60.00', 'Kucing', 'Makanan Kucing yang dapat membuat seekor kucing lupa diri seperti kacang lupa kulitnya.', '0000-00-00 00:00:00', 'food4.jpg', 0, 0),
(7, 'Makanan Anjing Class 10', ' $53.00 ', 'Anjing', 'Makanan Anjing kelas 10 adalah jenis Makanan anjing yang bisa membuat semua anjing wanita jatuh hati.', '2017-05-19 00:00:00', 'food3.jpg', 0, 0),
(8, 'Makanan Anjing Murah', '$43.00', 'Anjing', 'Makanan anjing murah yang disediakan untuk anjing yang kurang mampu dan berpenyakitan, tujuannya adalah untuk membuat kucing miskin mampu membeli makanannya sendiri.', '2017-05-02 00:00:00', 'food1.jpg', 0, 0),
(26, 'jenis-ikan-guppy', '29000', 'Ikan', 'Ikan Guppy merupakan ikan yang bisa berenang bebas tanpa hambatan', '2017-12-29 00:00:00', 'jenis-ikan-guppy.jpg', 0, 0),
(27, 'Ocellaris clownfish', '56000', 'Ikan', 'Ikan berwarna putih orange', '2017-12-29 00:00:00', 'Ocellaris clownfish.jpg', 0, 0),
(28, 'sidat_ikan_air_tawar.jpg', '14500', 'Ikan', 'Ocellaris clownfish merupakan ikan yang menyerupai belut', '2017-12-30 00:00:00', 'sidat_ikan_air_tawar.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `berita` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `verifikasi` tinyint(1) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul`, `berita`, `foto`, `tanggal`, `longitude`, `latitude`, `verifikasi`, `id_pengguna`) VALUES
(1, 'Jelaskan Ini pada Anak Saat Hewan Peliharaan Mati', '\r\nSaat hewan peliharaan mati, rasa kehilangan merupakan hal yang wajar. Hewan peliharaan bukan hanya sekadar teman terdekat melainkan bagian dari keluarga. Untuk anak-anak, rasa kehilangan terhadap hewan peliharaan ini merupakan pengalaman pertama terhadap kematian. \r\n\r\n \r\n\r\nApa yang harus dilakukan oleh orangtua pada saat seperti ini? "Anak-anak butuh proses untuk mengucapkan selamat tinggal," ujar Abigail McNamee, PhD dari Departement of Early Childhood Education.\r\n\r\n \r\n\r\nMelansir WebMd, Kamis (3/5/2017), Abigail mengatakan, yang perlu kita lakukan adalah memberikan perhatian terhadap hal yang ingin anak lakukan, sebagai proses untuk berduka cita.\r\n\r\n"Upaya yang bisa Anda lakukan ialah menggambar hewan peliharaan bersama misalnya, atau menanam sebuah pohon di pekarangan rumah untuk menghormati hewan peliharaan yang telah mati,"kata McNamee.\r\n\r\nWalaupun biasanya anak-anak cepat lupa akan perasaan tersebut, tapi beberapa hal seperti tayangan televisi atau buku dapat memicu rasa sedih mereka untuk kembali. \r\n\r\n"Hal yang perlu diperhatikan adalah ketika anak merasa sedih tapi tidak bisa dikeluarkan. Rasa sedih berkepanjangan sampai lebih dari sebulan, kemudian anak pendapat masalah sulit tidur," kata McNamee. \r\n \r\nUntuk itu hal yang perlu diketahui orangtua adalah anak harus mengungkapkan rasa sedihnya. Orangtua bisa mengajarkan bahwa rasa sedih dan marah dalam situasi ini adalah hal yang wajar. \r\n\r\nOrangtua juga bisa mengajarkan kepada anak, bagaimana cara menghormati orang yang sudah tiada, dengan proses pemakaman. McNamee juga mengusulkan sebaiknya untuk memberikan hewan baru setelah enam bulan. Tujuannya agar memberikan anak waktu dan pengertian. (Aida Tifani)', 'images1.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(2, 'Mengungkap Sinyal Komunikasi Rahasia Hewan Peliharaan', 'Tentu saja mengerti apa yang dikatakan oleh hewan peliharaan merupakan hal yang menyenangkan. Selain itu, mempunyai hewan peliharaan yang sangat akrab dengan majikannya tentu adalah hal yang diinginkan banyak orang.\r\n\r\nKucing dan anjing merupakan dua hewan yang kerap dipelihara dan dijadikan teman untuk manusia. Biasanya kedua hewan ini kerap ingin bercakap-cakap dengan kita dengan tingkah-tingkah mereka yang lucu. Namun terkadang kita tidak tau apa sebenarnya maksud mereka.\r\n\r\nMau mengerti apa makna sinyal yang dikirim hewan peliharaan Anda? Berikut, temuan terbaru periset terkemuka dunia.\r\n\r\nKucing\r\n\r\nMenggerakkan Anda dengan Bunyi Khusus \r\n\r\nJika mengeluarkan lengkingan tinggi seperti tangisan bayi dicampur dengan suara meong, kucing Anda memberitahu Anda bahwa dia lapar dan ingin diberi makan sekarang, ungkap sebuah studi baru. \r\n\r\nSelain itu, meong unik ini adalah pertanda pasti cintanya kepada Anda. Kucing hanya menggunakan bunyi ini di dekat orang yang disukainya.\r\n\r\nUngkap Perasaannya dengan Ekornya\r\n\r\nKucing Anda mengangkat tinggi ekornya dengan ujung ekor dilengkungkan sedikit ? Menurut Jean Craighead George dalam buku.', 'images2.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(3, 'Hewan peliharaan, menemani saat sepi dan hasilkan uang', 'Banyak orang yang gemar binatang memutuskan untuk memelihara hewan, namun ternyata hewan juga dapat menjadi bisnis yang menguntungkan.\r\n\r\n\r\n\r\n\r\nMicel Jonson sudah 20 tahun menjual hewan peliharaan mulai dari ayam, kucing, kelinci, kura-kura, monyet, burung, ular dan masih banyak lagi.\r\n\r\nDia mengaku berjualan dari satu pameran ke pameran lain dan melalui toko online. Saya bertemu dirinya dalam pameran flora dan fauna di lapangan Banteng, Jakarta pusat, Senin (28/09).\r\n\r\nUntuk memulai usaha  hewan peliharaan dibutuhkan modal sekitar Rp50 juta, kata Michel.\r\n\r\nHewan-hewan yang ia jual harganya bervariasi mulai dari Rp20.000 untuk kura-kura dan kelinci hingga jutaan untuk kucing Anggora atau ayam Ketawa yang jika berbunyi seperti sedang tertawa.\r\n"Suara ayam ketawa sangat khas contohnya. Banyak macamnya, ada rocker, ada suara macam dangdut. Jadi kelas-kelas orang yang paham ayam yang menamai.\r\n\r\n"Semakin panjang suaranya, semakin mahal harganya, jelas Micel.\r\n\r\nTapi menjual binatang tidak selalu mudah, terutama saat ini.\r\n\r\nMicel menduga, akibat pelemahan ekonomi daya beli masyarakat menurun yang berdampak pada penjualannya.\r\nAgar tetap dapat meraih untung sedikitnya sekitar Rp10 juta per bulan Micel berusaha menjual lebih banyak hewan yang sedang digemari dan tak banyak menjual hewan yang kurang dicari. \r\n\r\nTergantung musim\r\n\r\n"Contohnya ketika musim burung. Kalau burungnya turun, lakunya kurang, saya langsung ganti. Misal banyak jual reptil," ungkap Micel.\r\n\r\nCara lain untuk tetap meraup laba menurutnya adalah dengan tidak memiliki toko, melainkan hanya berjualan di pameran atau melalui toko online.\r\n\r\n"Karena kalau kita buka toko, kalau kita gak punya tempat yang strategis, gak akan bisa maju," tutur Micel.\r\n', 'images3.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(4, 'Tahukah Anda Anjing Bisa Menangis Jika Ditinggal Sendirian di Rumah', 'Ketika Anda pulang ke rumah dan disambut oleh anjing peliharaan dengan suka cita pastinya membuat Anda merasa gembira. Namun ketika Anda tinggal, tak jarang anjing akan merasa kesepian bahkan bisa sampai menangis lho.\r\n\r\nMemang menyenangkan ketika disambut anjing peliharaan dengan heboh dan sukacita, namun ternyata momen tersebut bukanlah momen ideal seekor anjing menunjukkan kasih sayangnya.\r\n\r\nJustru momen tersebut menggambarkan pemilik belum mendidik anjing mereka menjadi percaya diri. Namun seringnya para pemilik anjing justru kurang suka bila anjing mereka kalem saat bertemu. Padahal sikap anjing yang menyambut pemilik tanpa berlebihan merupakan tanda Anda berhasil mendidiknya.\r\n\r\nPerubahan perilaku anjing saat sang pemilik ada dan tidak ada di sekitarnya menunjukkan gejala kecemasan pada anjing. Mengarah ke ketakutan, kebosanan, hingga bisa mencapai agresivitas. Anjing juga dapat menyakiti dirinya sendiri.\r\n', 'images4.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(5, 'Uniknya Salon Hewan Peliharaan', 'Pada umumnya salon menjadi salah satu tempat bagi manusia untuk menata rambut sesuai keinginan.\r\n\r\nNamun berbeda dengan salon yang berada di Taiwan. Bukan manusia yang menjadi pasien salon, melainkan hewan peliharaan.\r\n\r\nOu Shih-jou merupakan sang pemilik salon. Dia mempekerjakan Lee Mai-chen yang memiliki pengalaman menyalon hewan peliharaan. Ada banyak hewan yang disalon dengan hasil yang sangat bagus, termasuk anjing dan kucing.\r\n\r\nBulu masing-masing hewan itu biasanya dicukur dan dibentuk sesuai keinginan pemiliknya.\r\n\r\nMisalnya Kuo Yu-lan, pemilik hewan peliharaan yang ingin agar bulu anjingnya dibentuk lebih indah atau diberi gambar. Lee Mai pun langsung beraksi dengan membuat punggung anjing bergambar beruang. Ada juga hewan yang dibentuk seolah berkepala singa, boneka hello kitty dan lain-lain.\r\n\r\nTidak hanya anjing, dia juga mempermak kucing dengan desain dinosaurus kecil. Dalam proses kerjanya, Lee Mai hanya butuh waktu tiga jam untuk mencukur bulu-bulu hewan peliharaan dan membentuknya sesuai selera sang pemilik.\r\n\r\n"Saya melihat proses dan hasil kerjanya. Saya sangat terkejut dan senang setelah melihat peliharaan saya dibentuk dengan baik dan indah. Menakjubkan dan ajaib," kata Kuo Yu-lan, dilansir dari Reuters, Minggu (26/6).\r\n\r\nSalon hewan itu dibuka sejak bulan September tahun lalu dan sudah banyak orang yang menggemarinya.\r\n\r\nApalagi jika musim panas tiba. Pemilik hewan akan berbondong-bondong datang untuk menghias peliharaan mereka.', 'images5.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(6, '7 Alasan Mengapa Anda Sebaiknya Memilih Burung Sebagai Hewan Peliharaan ', '1.Tidak Terlalu Berantakkan\r\n\r\nAnda hanya perlu membersihkan kandang burung seminggu sekali atau 4 hari sekali. Karena burung dapat menjaga kebersihannya sendiri, Anda tidak perlu memandikannya untuk membuatnya tetap bersih.\r\n\r\n \r\n2.Lucu\r\n\r\n\r\nBurung merupakan hewan yang lucu. Seperti halnya anjing atau kucing, burung pun akan merasa senang bila Anda membelai-belai bagian belakang lehernya. Setiap burung memiliki caranya sendiri untuk menunjukkan bahwa ia menyukai apa yang Anda lakukan.\r\n\r\n \r\n3.\r\nMudah Dirawat\r\n\r\n\r\nSelain tidak terlalu berantakkan, burung juga merupakan hewan yang mudah dirawat. Anda hanya perlu memberinya cukup makan dan minum. Anda mungkin hanya kesulitan mengenali bahwa burung Anda sedang sakit karena burung seringkali menyembunyikan gejalanya. Akan tetapi, bila Anda telah cukup lama memelihara burung maka Anda pun akan mengetahui ada sesuatu yang tidak beres pada burung peliharaan Anda bila ia sedang sakit.\r\n\r\n \r\n4.Setia\r\n\r\n\r\nWalaupun banyak orang mengira bahwa anjing adalah hewan yang paling setia, ternyata burung pun tidak kalah. Burung peliharaan Anda pun sangat menyukai saat Anda membelai-belai kepalanya atau menghabiskan waktu Anda bersamanya seperti halnya seekor anjing atau kucing.\r\n\r\n \r\n5.Tidak Memerlukan Banyak Ruang\r\n\r\n\r\nBurung tidak memerlukan ruang yang luas untuk tempat tinggalnya. Anda hanya memerlukan tempat kosong sebesar kandangnya saja.\r\n\r\n \r\n6.Murah\r\n\r\n\r\nBurung merupakan hewan yang cukup murah, Anda tidak perlu mengeluarkan banyak uang untuk membelinya kecuali untuk beberapa jenis tertentu. Makanan burung pun tidak terlalu mahal. Jadi Anda dapat memiliki hewan peliharaan tanpa perlu mengeluarkan banyak uang.\r\n \r\n7.Pintar\r\n\r\nBurung merupakan hewan yang pintar. Anda dapat melatih burung Anda untuk meniru suatu gerakan, bersiul, atau bahkan melakukan suatu trik tertentu. Burung merupakan hewan yang senang mempelajari hal-hal baru dan dapat belajar dengan cukup cepat.\r\n', 'images6.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(7, 'Alasan Mengapa Harus Memiliki Hewan Peliharaan ', 'Berikut adalah manfaat kesehatan dari memeilihara hewan.\r\n\r\n– Meningkatkan Kesehatan Jantung\r\n Sebuah penelitian menunjukan bahwa orang yang memiliki hewan peliharaan sendiri akan menurunkan tingkat tekanan darah serta trigliserida. Kedua hal tersebut bermanfaat untuk meningkatkan tingkat kolesterol sehingga mereka dapat terhindar dari penyakit jantung dibandingkan dengan mereka yang tidak memiliki hewan peliharaan.\r\n\r\n– Menurunkan Resiko Depresi\r\n Tanpa disadari, melihat tingkah laku serta berkomunikasi dengan hewan mampu membuat segala macam tekanan didalam pikiran anda berangsur menghilang. Hewan juga mampu meberikan pemiliknya rasa cinta dan kasih tanpa syarat. Sehingga kalian pun akan lebih merasa terdukung secara psikologi dan resiko depresi pun akan hilang.\r\n\r\n– Mencegah Alergi\r\n Ini mungkin mengejutkan, karena banyak yang berpendapat bahwa hewan peliharaan dapat memicu munculnya alergi dan gangguan pernapasan seperti asma. Namun sebenarnya anak-anak yang tumbuh dirumah dengan hewan peliharaan berbulu seperti kucing dan anjing justru cenderung mengembangkan resistensi dalam tubuh terhadap alergi dan asma di usia dini.\r\n\r\n– Menurunkan Tingkat Stres\r\n Memelihara hewan sendiri dapat menurunkan tingkat stres. Salah satu alasannya adalah ketika kamu membelai hewan peliharaan, maka tingkat sensorimu naik dan stres pasti akan menghindar.\r\n\r\n– Meningkatkan Kemampuan Untuk Bersosialisasi\r\n Hewan peliharaan dapat berfungsi sebagai ice breaker atau pemecah keheningan ketika kamu sedang mencoba bersosialisasi dengan orang yang baru kenal. Selain itu tanpa disadari, dengan membawa hewan peliharaan berjalan-jalan keliling lingkungan rumah, maka kamu bisa berkenalan dengan orang baru.\r\n\r\n– Membuat Kamu Bahagia\r\n Bermain dengan hewan peliharaan dapat meningkatkan produksi hormonserotonim dan dopamine di dalam otak. Kedua hormon ini dikenal dapat membuat kamu merasa bahagia, tenang, dan lebih santai.\r\n', 'images7.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(8, 'Ganja untuk Hewan Peliharaan', 'OLYMPIA, WA —  \r\nSetelah pemilu Amerika bulan November lalu, lebih dari separuh negara bagian AS mengesahkan ganja untuk keperluan medis dan delapan dari negara bagian juga memperbolehkan ganja untuk rekreasi. Jadi jika ganja membantu sebagian orang merasa lebih nyaman, bagaimana dengan binatang peliharaan sebagai teman manusia? Para dokter hewan ditanyai tentang ganja untuk hewan peliharaan dan secara hukum mereka sulit menjawabnya.\r\n\r\n"Hello, siapa ini?" tanya reporter VOA.\r\n\r\n"Ini Willy. Anjing jenis Lhasa Shih Tzu... berumur 16 tahun," jawab Michelle Batten, pemilik Willy.\r\n\r\nAnjing kecil berwarna krem itu milik Michelle Batten dari Portland. Dia mengatakan, Willy punya berbagai masalah kesehatan yang berkaitan dengan usia, termasuk rematik dan kecemasan akibat kehilangan penglihatan. Obat penghilang rasa sakit yang biasa membuatnya lamban.\r\n\r\n"Jadi kami menggunakan kapsul cannabinoid,’ ujar Michelle Batten.\r\n\r\nCannabinoid dalam kapsul ini berasal dari rami, sejenis tanaman ganja yang tidak mengakibatkan halusinasi.\r\n\r\n“Saya sangat senang dengan apa yang saya lihat. Dia jauh lebih tenang. Dia tidur lebih baik. Dia tidak sakit dan tidak cemas," ujar Michelle Batten.\r\n\r\n"Apakah ia tampak seperti hewan yang sedang mabuk?" tanya reporter VOA.\r\n\r\n"Tidak, tidak sama sekali. Hanya lebih tenang,” jawab Michelle Batten.\r\n\r\nBatten membawa Willy dan anjing lain yang berumur 14-tahun ke Klinik Hewan Hawthorne, yang mengiklankan perawatan holistik untuk hewan peliharaan. Pemilik klinik, Dr. Cornelia Wagner mengatakan, pemilik hewan peliharaan beralih ke pengobatan dengan ganja atau mariyuana untuk berbagai masalah yang dihadapi manusia sekarang ini, termasuk gejala kanker, nyeri, peradangan, kejang, mual, alergi kulit kronis dan kehilangan nafsu makan.\r\n\r\n“Lima tahun yang lalu ketika saya mulai bekerja di sini, belum ada ganja jenis hemp atau cannabis. Sekarang kita banyak membicarakan tentang itu," ujar Dr. Wagner.\r\n\r\nDr. Wagner mengatakan kepada pemilik anjing bahwa hewan mereka jauh lebih peka terhadap efek ganja daripada manusia. Kliniknya hanya menyediakan beberapa obat tanpa resep, vitamin non-psikoaktif yang mengandung ganja jenis hemp, seperti pil yang ditelan oleh si anjing Willy, dua kali sehari.\r\n\r\n"Kami punya yang berbentuk kapsul..." papar Dr. Wagner.\r\n\r\nGanja jenis hemp untuk binatang peliharaan pada umumnya tidak dilarang, beda dengan marijuana.\r\n\r\n“Secara hukum, kita harus berhati-hati tentang hal itu. Meskipun penggunaan ganja untuk rekreasi sekarang diperbolehkan di Oregon, sebagai dokter hewan kami tidak boleh memberi resep. Jadi kita harus berhati-hati dalam memberi rekomendasi," imbuh Dr. Wagner.\r\n\r\nBadan Obat-obatan dan Makanan Amerika atau FDA memperingatkan jangan memberikan produk ganja untuk hewan peliharaan. FDA mengatakan keamanan dan kemanjurannya belum diketahui dan perlu penelitian lebih lanjut.\r\n\r\nAspek hukum tentang hal itu semakin suram pada bulan Desember, ketika Drug Enforcement Administration AS mengumumkan, semua ekstrak tanaman ganja termasuk bahan-bahan yang diawasi, termasuk segala sesuatu yang dibuat dari tanaman rami. Perkumpulan Dokter Hewan di negara bagian Oregon dan Washington memasang peringatan tentang hal itu dalam websitre mereka. Dokter hewan di Olympia, ibukota negara bagian Washington, Dr. Lisa Parshley mengatakan, dia ragu tentang produk ganja bukan hanya karena alasan hukum, tetapi karena banyak dampak ilmiahnya yang belum diketahui.\r\n\r\n“Saya hanya merasa seperti semua orang mencari jalan pintas dan menggunakan bahan ini tanpa proses penelitian di laboratorium, dan di klinik, untuk mendapat produk yang benar-benar baik dan aman serta benar-benar manjur," ujar Dr. Lisa Parshley.\r\n\r\nDr. Lisa Parshley mengatakan, peneliti perlu membuktikan klaim-klaim tentang kemanjuran obat-obatan itu dan menjelaskan, risiko serta dosis dan cara penggunaannya yang tepat.\r\n\r\nPengusaha di negara-negara bagian barat Amerika yang menyetujui ganja tidak perlu menunggu peraturan yang jelas untuk memenuhi permintaan konsumen. Pemula bisnis ganja menjual berbagai produk ganja untuk hewan peliharaan, dalam bentuk kapsul, minyak, mentega dan tincture (larutan obat dalam alkohol) sampai mainan yang dikunyah untuk menyenangkan anjing. \r\n', 'images8.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(9, 'Jelaskan Ini pada Anak Saat Hewan Peliharaan Mati', '\r\nSaat hewan peliharaan mati, rasa kehilangan merupakan hal yang wajar. Hewan peliharaan bukan hanya sekadar teman terdekat melainkan bagian dari keluarga. Untuk anak-anak, rasa kehilangan terhadap hewan peliharaan ini merupakan pengalaman pertama terhadap kematian. \r\n\r\n \r\n\r\nApa yang harus dilakukan oleh orangtua pada saat seperti ini? "Anak-anak butuh proses untuk mengucapkan selamat tinggal," ujar Abigail McNamee, PhD dari Departement of Early Childhood Education.\r\n\r\n \r\n\r\nMelansir WebMd, Kamis (3/5/2017), Abigail mengatakan, yang perlu kita lakukan adalah memberikan perhatian terhadap hal yang ingin anak lakukan, sebagai proses untuk berduka cita.\r\n\r\n"Upaya yang bisa Anda lakukan ialah menggambar hewan peliharaan bersama misalnya, atau menanam sebuah pohon di pekarangan rumah untuk menghormati hewan peliharaan yang telah mati,"kata McNamee.\r\n\r\nWalaupun biasanya anak-anak cepat lupa akan perasaan tersebut, tapi beberapa hal seperti tayangan televisi atau buku dapat memicu rasa sedih mereka untuk kembali. \r\n\r\n"Hal yang perlu diperhatikan adalah ketika anak merasa sedih tapi tidak bisa dikeluarkan. Rasa sedih berkepanjangan sampai lebih dari sebulan, kemudian anak pendapat masalah sulit tidur," kata McNamee. \r\n \r\nUntuk itu hal yang perlu diketahui orangtua adalah anak harus mengungkapkan rasa sedihnya. Orangtua bisa mengajarkan bahwa rasa sedih dan marah dalam situasi ini adalah hal yang wajar. \r\n\r\nOrangtua juga bisa mengajarkan kepada anak, bagaimana cara menghormati orang yang sudah tiada, dengan proses pemakaman. McNamee juga mengusulkan sebaiknya untuk memberikan hewan baru setelah enam bulan. Tujuannya agar memberikan anak waktu dan pengertian. (Aida Tifani)', 'images1.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(10, 'Mengungkap Sinyal Komunikasi Rahasia Hewan Peliharaan', 'Tentu saja mengerti apa yang dikatakan oleh hewan peliharaan merupakan hal yang menyenangkan. Selain itu, mempunyai hewan peliharaan yang sangat akrab dengan majikannya tentu adalah hal yang diinginkan banyak orang.\r\n\r\nKucing dan anjing merupakan dua hewan yang kerap dipelihara dan dijadikan teman untuk manusia. Biasanya kedua hewan ini kerap ingin bercakap-cakap dengan kita dengan tingkah-tingkah mereka yang lucu. Namun terkadang kita tidak tau apa sebenarnya maksud mereka.\r\n\r\nMau mengerti apa makna sinyal yang dikirim hewan peliharaan Anda? Berikut, temuan terbaru periset terkemuka dunia.\r\n\r\nKucing\r\n\r\nMenggerakkan Anda dengan Bunyi Khusus \r\n\r\nJika mengeluarkan lengkingan tinggi seperti tangisan bayi dicampur dengan suara meong, kucing Anda memberitahu Anda bahwa dia lapar dan ingin diberi makan sekarang, ungkap sebuah studi baru. \r\n\r\nSelain itu, meong unik ini adalah pertanda pasti cintanya kepada Anda. Kucing hanya menggunakan bunyi ini di dekat orang yang disukainya.\r\n\r\nUngkap Perasaannya dengan Ekornya\r\n\r\nKucing Anda mengangkat tinggi ekornya dengan ujung ekor dilengkungkan sedikit ? Menurut Jean Craighead George dalam buku.', 'images2.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(11, 'Hewan peliharaan, menemani saat sepi dan hasilkan uang', 'Banyak orang yang gemar binatang memutuskan untuk memelihara hewan, namun ternyata hewan juga dapat menjadi bisnis yang menguntungkan.\r\n\r\n\r\n\r\n\r\nMicel Jonson sudah 20 tahun menjual hewan peliharaan mulai dari ayam, kucing, kelinci, kura-kura, monyet, burung, ular dan masih banyak lagi.\r\n\r\nDia mengaku berjualan dari satu pameran ke pameran lain dan melalui toko online. Saya bertemu dirinya dalam pameran flora dan fauna di lapangan Banteng, Jakarta pusat, Senin (28/09).\r\n\r\nUntuk memulai usaha  hewan peliharaan dibutuhkan modal sekitar Rp50 juta, kata Michel.\r\n\r\nHewan-hewan yang ia jual harganya bervariasi mulai dari Rp20.000 untuk kura-kura dan kelinci hingga jutaan untuk kucing Anggora atau ayam Ketawa yang jika berbunyi seperti sedang tertawa.\r\n"Suara ayam ketawa sangat khas contohnya. Banyak macamnya, ada rocker, ada suara macam dangdut. Jadi kelas-kelas orang yang paham ayam yang menamai.\r\n\r\n"Semakin panjang suaranya, semakin mahal harganya, jelas Micel.\r\n\r\nTapi menjual binatang tidak selalu mudah, terutama saat ini.\r\n\r\nMicel menduga, akibat pelemahan ekonomi daya beli masyarakat menurun yang berdampak pada penjualannya.\r\nAgar tetap dapat meraih untung sedikitnya sekitar Rp10 juta per bulan Micel berusaha menjual lebih banyak hewan yang sedang digemari dan tak banyak menjual hewan yang kurang dicari. \r\n\r\nTergantung musim\r\n\r\n"Contohnya ketika musim burung. Kalau burungnya turun, lakunya kurang, saya langsung ganti. Misal banyak jual reptil," ungkap Micel.\r\n\r\nCara lain untuk tetap meraup laba menurutnya adalah dengan tidak memiliki toko, melainkan hanya berjualan di pameran atau melalui toko online.\r\n\r\n"Karena kalau kita buka toko, kalau kita gak punya tempat yang strategis, gak akan bisa maju," tutur Micel.\r\n', 'images3.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(12, 'Tahukah Anda Anjing Bisa Menangis Jika Ditinggal Sendirian di Rumah', 'Ketika Anda pulang ke rumah dan disambut oleh anjing peliharaan dengan suka cita pastinya membuat Anda merasa gembira. Namun ketika Anda tinggal, tak jarang anjing akan merasa kesepian bahkan bisa sampai menangis lho.\r\n\r\nMemang menyenangkan ketika disambut anjing peliharaan dengan heboh dan sukacita, namun ternyata momen tersebut bukanlah momen ideal seekor anjing menunjukkan kasih sayangnya.\r\n\r\nJustru momen tersebut menggambarkan pemilik belum mendidik anjing mereka menjadi percaya diri. Namun seringnya para pemilik anjing justru kurang suka bila anjing mereka kalem saat bertemu. Padahal sikap anjing yang menyambut pemilik tanpa berlebihan merupakan tanda Anda berhasil mendidiknya.\r\n\r\nPerubahan perilaku anjing saat sang pemilik ada dan tidak ada di sekitarnya menunjukkan gejala kecemasan pada anjing. Mengarah ke ketakutan, kebosanan, hingga bisa mencapai agresivitas. Anjing juga dapat menyakiti dirinya sendiri.\r\n', 'images4.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(13, 'Uniknya Salon Hewan Peliharaan', 'Pada umumnya salon menjadi salah satu tempat bagi manusia untuk menata rambut sesuai keinginan.\r\n\r\nNamun berbeda dengan salon yang berada di Taiwan. Bukan manusia yang menjadi pasien salon, melainkan hewan peliharaan.\r\n\r\nOu Shih-jou merupakan sang pemilik salon. Dia mempekerjakan Lee Mai-chen yang memiliki pengalaman menyalon hewan peliharaan. Ada banyak hewan yang disalon dengan hasil yang sangat bagus, termasuk anjing dan kucing.\r\n\r\nBulu masing-masing hewan itu biasanya dicukur dan dibentuk sesuai keinginan pemiliknya.\r\n\r\nMisalnya Kuo Yu-lan, pemilik hewan peliharaan yang ingin agar bulu anjingnya dibentuk lebih indah atau diberi gambar. Lee Mai pun langsung beraksi dengan membuat punggung anjing bergambar beruang. Ada juga hewan yang dibentuk seolah berkepala singa, boneka hello kitty dan lain-lain.\r\n\r\nTidak hanya anjing, dia juga mempermak kucing dengan desain dinosaurus kecil. Dalam proses kerjanya, Lee Mai hanya butuh waktu tiga jam untuk mencukur bulu-bulu hewan peliharaan dan membentuknya sesuai selera sang pemilik.\r\n\r\n"Saya melihat proses dan hasil kerjanya. Saya sangat terkejut dan senang setelah melihat peliharaan saya dibentuk dengan baik dan indah. Menakjubkan dan ajaib," kata Kuo Yu-lan, dilansir dari Reuters, Minggu (26/6).\r\n\r\nSalon hewan itu dibuka sejak bulan September tahun lalu dan sudah banyak orang yang menggemarinya.\r\n\r\nApalagi jika musim panas tiba. Pemilik hewan akan berbondong-bondong datang untuk menghias peliharaan mereka.', 'images5.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(14, '7 Alasan Mengapa Anda Sebaiknya Memilih Burung Sebagai Hewan Peliharaan ', '1.Tidak Terlalu Berantakkan\r\n\r\nAnda hanya perlu membersihkan kandang burung seminggu sekali atau 4 hari sekali. Karena burung dapat menjaga kebersihannya sendiri, Anda tidak perlu memandikannya untuk membuatnya tetap bersih.\r\n\r\n \r\n2.Lucu\r\n\r\n\r\nBurung merupakan hewan yang lucu. Seperti halnya anjing atau kucing, burung pun akan merasa senang bila Anda membelai-belai bagian belakang lehernya. Setiap burung memiliki caranya sendiri untuk menunjukkan bahwa ia menyukai apa yang Anda lakukan.\r\n\r\n \r\n3.\r\nMudah Dirawat\r\n\r\n\r\nSelain tidak terlalu berantakkan, burung juga merupakan hewan yang mudah dirawat. Anda hanya perlu memberinya cukup makan dan minum. Anda mungkin hanya kesulitan mengenali bahwa burung Anda sedang sakit karena burung seringkali menyembunyikan gejalanya. Akan tetapi, bila Anda telah cukup lama memelihara burung maka Anda pun akan mengetahui ada sesuatu yang tidak beres pada burung peliharaan Anda bila ia sedang sakit.\r\n\r\n \r\n4.Setia\r\n\r\n\r\nWalaupun banyak orang mengira bahwa anjing adalah hewan yang paling setia, ternyata burung pun tidak kalah. Burung peliharaan Anda pun sangat menyukai saat Anda membelai-belai kepalanya atau menghabiskan waktu Anda bersamanya seperti halnya seekor anjing atau kucing.\r\n\r\n \r\n5.Tidak Memerlukan Banyak Ruang\r\n\r\n\r\nBurung tidak memerlukan ruang yang luas untuk tempat tinggalnya. Anda hanya memerlukan tempat kosong sebesar kandangnya saja.\r\n\r\n \r\n6.Murah\r\n\r\n\r\nBurung merupakan hewan yang cukup murah, Anda tidak perlu mengeluarkan banyak uang untuk membelinya kecuali untuk beberapa jenis tertentu. Makanan burung pun tidak terlalu mahal. Jadi Anda dapat memiliki hewan peliharaan tanpa perlu mengeluarkan banyak uang.\r\n \r\n7.Pintar\r\n\r\nBurung merupakan hewan yang pintar. Anda dapat melatih burung Anda untuk meniru suatu gerakan, bersiul, atau bahkan melakukan suatu trik tertentu. Burung merupakan hewan yang senang mempelajari hal-hal baru dan dapat belajar dengan cukup cepat.\r\n', 'images6.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(15, 'Alasan Mengapa Harus Memiliki Hewan Peliharaan ', 'Berikut adalah manfaat kesehatan dari memeilihara hewan.\r\n\r\n– Meningkatkan Kesehatan Jantung\r\n Sebuah penelitian menunjukan bahwa orang yang memiliki hewan peliharaan sendiri akan menurunkan tingkat tekanan darah serta trigliserida. Kedua hal tersebut bermanfaat untuk meningkatkan tingkat kolesterol sehingga mereka dapat terhindar dari penyakit jantung dibandingkan dengan mereka yang tidak memiliki hewan peliharaan.\r\n\r\n– Menurunkan Resiko Depresi\r\n Tanpa disadari, melihat tingkah laku serta berkomunikasi dengan hewan mampu membuat segala macam tekanan didalam pikiran anda berangsur menghilang. Hewan juga mampu meberikan pemiliknya rasa cinta dan kasih tanpa syarat. Sehingga kalian pun akan lebih merasa terdukung secara psikologi dan resiko depresi pun akan hilang.\r\n\r\n– Mencegah Alergi\r\n Ini mungkin mengejutkan, karena banyak yang berpendapat bahwa hewan peliharaan dapat memicu munculnya alergi dan gangguan pernapasan seperti asma. Namun sebenarnya anak-anak yang tumbuh dirumah dengan hewan peliharaan berbulu seperti kucing dan anjing justru cenderung mengembangkan resistensi dalam tubuh terhadap alergi dan asma di usia dini.\r\n\r\n– Menurunkan Tingkat Stres\r\n Memelihara hewan sendiri dapat menurunkan tingkat stres. Salah satu alasannya adalah ketika kamu membelai hewan peliharaan, maka tingkat sensorimu naik dan stres pasti akan menghindar.\r\n\r\n– Meningkatkan Kemampuan Untuk Bersosialisasi\r\n Hewan peliharaan dapat berfungsi sebagai ice breaker atau pemecah keheningan ketika kamu sedang mencoba bersosialisasi dengan orang yang baru kenal. Selain itu tanpa disadari, dengan membawa hewan peliharaan berjalan-jalan keliling lingkungan rumah, maka kamu bisa berkenalan dengan orang baru.\r\n\r\n– Membuat Kamu Bahagia\r\n Bermain dengan hewan peliharaan dapat meningkatkan produksi hormonserotonim dan dopamine di dalam otak. Kedua hormon ini dikenal dapat membuat kamu merasa bahagia, tenang, dan lebih santai.\r\n', 'images7.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0),
(16, 'Ganja untuk Hewan Peliharaan', 'OLYMPIA, WA —  \r\nSetelah pemilu Amerika bulan November lalu, lebih dari separuh negara bagian AS mengesahkan ganja untuk keperluan medis dan delapan dari negara bagian juga memperbolehkan ganja untuk rekreasi. Jadi jika ganja membantu sebagian orang merasa lebih nyaman, bagaimana dengan binatang peliharaan sebagai teman manusia? Para dokter hewan ditanyai tentang ganja untuk hewan peliharaan dan secara hukum mereka sulit menjawabnya.\r\n\r\n"Hello, siapa ini?" tanya reporter VOA.\r\n\r\n"Ini Willy. Anjing jenis Lhasa Shih Tzu... berumur 16 tahun," jawab Michelle Batten, pemilik Willy.\r\n\r\nAnjing kecil berwarna krem itu milik Michelle Batten dari Portland. Dia mengatakan, Willy punya berbagai masalah kesehatan yang berkaitan dengan usia, termasuk rematik dan kecemasan akibat kehilangan penglihatan. Obat penghilang rasa sakit yang biasa membuatnya lamban.\r\n\r\n"Jadi kami menggunakan kapsul cannabinoid,’ ujar Michelle Batten.\r\n\r\nCannabinoid dalam kapsul ini berasal dari rami, sejenis tanaman ganja yang tidak mengakibatkan halusinasi.\r\n\r\n“Saya sangat senang dengan apa yang saya lihat. Dia jauh lebih tenang. Dia tidur lebih baik. Dia tidak sakit dan tidak cemas," ujar Michelle Batten.\r\n\r\n"Apakah ia tampak seperti hewan yang sedang mabuk?" tanya reporter VOA.\r\n\r\n"Tidak, tidak sama sekali. Hanya lebih tenang,” jawab Michelle Batten.\r\n\r\nBatten membawa Willy dan anjing lain yang berumur 14-tahun ke Klinik Hewan Hawthorne, yang mengiklankan perawatan holistik untuk hewan peliharaan. Pemilik klinik, Dr. Cornelia Wagner mengatakan, pemilik hewan peliharaan beralih ke pengobatan dengan ganja atau mariyuana untuk berbagai masalah yang dihadapi manusia sekarang ini, termasuk gejala kanker, nyeri, peradangan, kejang, mual, alergi kulit kronis dan kehilangan nafsu makan.\r\n\r\n“Lima tahun yang lalu ketika saya mulai bekerja di sini, belum ada ganja jenis hemp atau cannabis. Sekarang kita banyak membicarakan tentang itu," ujar Dr. Wagner.\r\n\r\nDr. Wagner mengatakan kepada pemilik anjing bahwa hewan mereka jauh lebih peka terhadap efek ganja daripada manusia. Kliniknya hanya menyediakan beberapa obat tanpa resep, vitamin non-psikoaktif yang mengandung ganja jenis hemp, seperti pil yang ditelan oleh si anjing Willy, dua kali sehari.\r\n\r\n"Kami punya yang berbentuk kapsul..." papar Dr. Wagner.\r\n\r\nGanja jenis hemp untuk binatang peliharaan pada umumnya tidak dilarang, beda dengan marijuana.\r\n\r\n“Secara hukum, kita harus berhati-hati tentang hal itu. Meskipun penggunaan ganja untuk rekreasi sekarang diperbolehkan di Oregon, sebagai dokter hewan kami tidak boleh memberi resep. Jadi kita harus berhati-hati dalam memberi rekomendasi," imbuh Dr. Wagner.\r\n\r\nBadan Obat-obatan dan Makanan Amerika atau FDA memperingatkan jangan memberikan produk ganja untuk hewan peliharaan. FDA mengatakan keamanan dan kemanjurannya belum diketahui dan perlu penelitian lebih lanjut.\r\n\r\nAspek hukum tentang hal itu semakin suram pada bulan Desember, ketika Drug Enforcement Administration AS mengumumkan, semua ekstrak tanaman ganja termasuk bahan-bahan yang diawasi, termasuk segala sesuatu yang dibuat dari tanaman rami. Perkumpulan Dokter Hewan di negara bagian Oregon dan Washington memasang peringatan tentang hal itu dalam websitre mereka. Dokter hewan di Olympia, ibukota negara bagian Washington, Dr. Lisa Parshley mengatakan, dia ragu tentang produk ganja bukan hanya karena alasan hukum, tetapi karena banyak dampak ilmiahnya yang belum diketahui.\r\n\r\n“Saya hanya merasa seperti semua orang mencari jalan pintas dan menggunakan bahan ini tanpa proses penelitian di laboratorium, dan di klinik, untuk mendapat produk yang benar-benar baik dan aman serta benar-benar manjur," ujar Dr. Lisa Parshley.\r\n\r\nDr. Lisa Parshley mengatakan, peneliti perlu membuktikan klaim-klaim tentang kemanjuran obat-obatan itu dan menjelaskan, risiko serta dosis dan cara penggunaannya yang tepat.\r\n\r\nPengusaha di negara-negara bagian barat Amerika yang menyetujui ganja tidak perlu menunggu peraturan yang jelas untuk memenuhi permintaan konsumen. Pemula bisnis ganja menjual berbagai produk ganja untuk hewan peliharaan, dalam bentuk kapsul, minyak, mentega dan tincture (larutan obat dalam alkohol) sampai mainan yang dikunyah untuk menyenangkan anjing. \r\n', 'images8.jpg', '2017-05-10 00:00:00', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hewan`
--

CREATE TABLE `tbl_hewan` (
  `id_hewan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `kategori_hewan` varchar(100) NOT NULL,
  `jenis_hewan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `foto` text NOT NULL,
  `Recomended` varchar(30) NOT NULL,
  `verifikasi` tinyint(1) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hewan`
--

INSERT INTO `tbl_hewan` (`id_hewan`, `judul`, `harga`, `kategori_hewan`, `jenis_hewan`, `deskripsi`, `tanggal`, `foto`, `Recomended`, `verifikasi`, `id_pengguna`) VALUES
(2, 'Kucing Ras Bantul', '$700.00', 'Kucing', 'Kucing Ras', 'Kucing Ras Bantul, diadopsi oleh majikan penyayang kucing, sebulan sekali harus dibawa salon dan sudah bisa dibawa kontes', '2017-05-02 00:00:00', 'cat', '', 0, 0),
(3, 'Anjing ras Depok ', '$400.00', 'Anjing', 'Anjing Ras', 'Anjing Ras Depok, kepimilikan berada di Depok, ciri-ciri anjing K3T: Kuat, Tabah, Tegar, dan Tulus', '2017-05-04 00:00:00', 'dog2', '', 0, 0),
(4, 'Anjing Ras Jakal', '$500.00', 'Anjing', 'Anjing Ras', 'Anjing Ras Jakal yang Nakal tapi tidak meresahkan warga. Monggo sedulur2 di Yogyakarta merapat', '2017-05-05 00:00:00', 'dog3', '', 0, 0),
(5, 'Ikan Lohan', '$90.00', 'Small Pet', 'Ikan', 'Ikan Lohan Peranakan Belanda, 3 hari berada didarat tidak mengalami sesak nafas, Termasuk salah satu ikan yang ikut bertarung di perang dunia kedua.', '2017-05-08 00:00:00', 'ikan1', '', 0, 0),
(6, 'Ikan cupang', '$5.00', 'Small Pet', 'Ikan', 'Ikan Cupang peranakan Jerman, sudah pernah ditembak menggunakan Senapan Laras Panjang cuma kehilangan satu mata.', '2017-05-10 00:00:00', 'ikan2', '', 0, 0),
(7, 'Kelinci', '$50.00', 'Small Pet', 'Kelinci', 'Kelinci Tahan banting, sudang 5 kali dibacok pakai sapu tapi tetap masih tetap segar bugar. Monggo COD-an', '2017-05-26 00:00:00', 'kelinci1', '', 0, 0),
(8, 'Love Bird', '$53.00', 'Small Pet', 'Burung', 'Burung Cinta, membuat pemilik semakin bergairah dan semakin sayang pasangan, karena itu diberikan nama LOVE BIRD(BURUNG CINTA). MOnggo semuanya dipesan.', '2017-05-09 00:00:00', 'burung1', '', 0, 0),
(9, 'Lohan', '10000', 'Small Pet', 'Ikan', 'Ikan lohan tangan pertama yang belum pernah dipelihara oleh oranglain. Monggo dihubungin gan.', '2017-06-11 00:00:00', 'lohan', '', 0, 0),
(10, 'Mas Koki', '12500', 'Small Pet', 'Ikan', 'Ikan Mas Koki peranakan Sumedang yang tahan hidup didarat.', '2017-09-11 00:00:00', 'ikanmas', '', 0, 0),
(11, 'Mas Koki', '12500', 'Small Pet', 'Ikan', 'Ikan Mas Koki peranakan Sumedang yang tahan hidup didarat.', '2017-09-11 00:00:00', 'ikanmas', '', 0, 0),
(12, 'Mas Koki', '12500', 'Small Pet', 'Ikan', 'Ikan Mas Koki peranakan Sumedang yang tahan hidup didarat.', '2017-09-11 00:00:00', 'ikanmas', '', 0, 0),
(13, 'Putri Duyung', '15000', 'Small Pet', 'Ikan', 'Salah satu hewan yang mampu berenang dikedalaman beberapa ratus meter tanpa bernafas', '2017-01-11 00:00:00', 'ikan hias', '', 0, 0),
(14, 'Ikan arwana', '12500', 'Small Pet', 'Ikan', 'Ikan Arwana yang mampu membuat memisahkan diri untuk mengelabui musuh.', '2017-02-11 00:00:00', 'ikan-arwana', '', 0, 0),
(15, 'Putri Duyung', '15000', 'Small Pet', 'Ikan', 'Salah satu hewan yang mampu berenang dikedalaman beberapa ratus meter tanpa bernafas', '2017-01-11 00:00:00', 'ikan hias', '', 0, 0),
(16, 'Ikan arwana', '12500', 'Small Pet', 'Ikan', 'Ikan Arwana yang mampu membuat memisahkan diri untuk mengelabui musuh.', '2017-02-11 00:00:00', 'ikan-arwana', '', 0, 0),
(17, 'Ikan Sirip berwarna', '11500', 'Small Pet', 'Ikan', 'Ikan sirip berwarna yang memiliki kecantikan yang luar biasa. Ikan sirip berwarna ini mampu membuat hati tenang', '2017-03-11 00:00:00', 'ikan sirip', '', 0, 0),
(18, 'Ikan Gurame', '19000', 'Small Pet', 'Ikan', 'Ikan Gurame ini mampu membuat majikannya selalu tersenyum dan bahagia, dan membuat majikannya awet muda', '2017-12-11 00:00:00', 'ikangurame', '', 0, 0),
(19, 'Ikan Sirip Panjang', '17500', 'Small Pet', 'Ikan', 'Ikan sirip panjang yang dimana siripnya berguna untuk obat dan tetap merona. Monggo gan', '2017-12-16 00:00:00', 'ikansirippanjang', '', 0, 0),
(21, 'Ikan hias berwarna', '4000', 'Small Pet', 'Ikan', 'Ikan hias berwarna ini dapat berubah-ubah warna secara otomatis', '2017-12-20 00:00:00', 'ikannhiaswarna', '', 0, 0),
(22, 'Ikan Sirip berwarna', '11500', 'Small Pet', 'Ikan', 'Ikan sirip berwarna yang memiliki kecantikan yang luar biasa. Ikan sirip berwarna ini mampu membuat hati tenang', '2017-03-11 00:00:00', 'ikan sirip', '', 0, 0),
(23, 'Ikan Gurame', '19000', 'Small Pet', 'Ikan', 'Ikan Gurame ini mampu membuat majikannya selalu tersenyum dan bahagia, dan membuat majikannya awet muda', '2017-12-11 00:00:00', 'ikangurame', '', 0, 0),
(24, 'Ikan Sirip Panjang', '17500', 'Small Pet', 'Ikan', 'Ikan sirip panjang yang dimana siripnya berguna untuk obat dan tetap merona. Monggo gan', '2017-12-16 00:00:00', 'ikansirippanjang', '', 0, 0),
(25, 'Ikan Cupang Betina', '25000', 'Small Pet', 'Ikan', 'Ikan Cupang betina ini sudah pernah dirampok orang, tetapi ikan ini mampu menyelamatkan diri dan kembali dengan selamat.', '2017-12-19 00:00:00', 'ikan-cupang-betina', '', 0, 0),
(26, 'Ikan hias berwarna', '4000', 'Small Pet', 'Ikan', 'Ikan hias berwarna ini dapat berubah-ubah warna secara otomatis', '2017-12-20 00:00:00', 'ikannhiaswarna', '', 0, 0),
(27, 'Anjing MiripManusia', '1000000', 'Anjing', 'Manusia', 'Anjing Peranakan Manusia yang sudah banyak beredar di internet. Dijamin Penurut, sudah berumur 10 tahun', '2017-05-16 00:00:00', 'file_1495098510', '', 0, 30),
(28, 'Dijual Anjing Serigala', '12500', 'Anjing', 'Anjing Peranakan', 'Anjing Peranakan Serigala asli dari hutan, gonggongan membuat kampung bergetarr.', '2017-05-23 00:00:00', 'anjingserigala', '', 0, 0),
(29, 'Anjing Peranakan Manusia', '45000000', 'Anjing', 'Anjing Peranakan', 'Anjing Peranakan Manusia yang sudah banyak beredar di internet. Dijamin Penurut, sudah berumur 2,5tahun', '2017-05-16 00:00:00', 'anjing1', '', 0, 0),
(30, 'Dijual Anjing Serigala', '12500', 'Anjing', 'Anjing Peranakan', 'Anjing Peranakan Serigala asli dari hutan, gonggongan membuat kampung bergetarr.', '2017-05-23 00:00:00', 'anjingserigala', '', 0, 0),
(31, 'Dijual Anjing Cihuahua', '35000', 'Anjing', 'Anjing Ras', 'Anjing Cihuahua ini sudah memiliki sertifikat anjing yang diakui dunia.', '2017-05-18 00:00:00', 'anjingcihuahua', '', 0, 0),
(32, 'Dijual Anjing Jelek', '45000', 'anjingjelek.jpg', 'Anjing', 'Anjin', '0000-00-00 00:00:00', 'Anjing ini sekalipun jelek tapi unik, banyak peminat yang sudah menanyakannya kepada kami. Monggo gan di angkut', '', 0, 0),
(33, 'Dijual Anjing Cihuahua', '35000', 'Anjing', 'Anjing Ras', 'Anjing Cihuahua ini sudah memiliki sertifikat anjing yang diakui dunia.', '2017-05-18 00:00:00', 'anjingcihuahua', '', 0, 0),
(34, 'Dijual Anjing Jelek', '45000', 'anjingjelek.jpg', 'Anjing', 'Anjin', '0000-00-00 00:00:00', 'Anjing ini sekalipun jelek tapi unik, banyak peminat yang sudah menanyakannya kepada kami. Monggo gan di angkut', '', 0, 0),
(35, 'Dijual Kucing Mata Biru', '13500', 'Kucing', 'Kucing Ras', 'Kucing Mata biru ini adalah kucing ras bandung yang tinggal didaerah dingin. ', '2017-05-22 00:00:00', 'kucingmatabiru', '', 0, 0),
(36, 'Kucing tanpa bulu', '15000', 'Kucing', 'Kucing Ras', 'Kucing tanpa bulu ini banyak dimiliki oleh artis-artis indonesia. Silahkan diangkut gan.', '2017-05-25 00:00:00', 'kucingtanpabulu', '', 0, 0),
(37, 'Dijual Kucing Mata Biru', '13500', 'Kucing', 'Kucing Ras', 'Kucing Mata biru ini adalah kucing ras bandung yang tinggal didaerah dingin. ', '2017-05-22 00:00:00', 'kucingmatabiru', '', 0, 0),
(38, 'Kucing tanpa bulu', '15000', 'Kucing', 'Kucing Ras', 'Kucing tanpa bulu ini banyak dimiliki oleh artis-artis indonesia. Silahkan diangkut gan.', '2017-05-25 00:00:00', 'kucingtanpabulu', '', 0, 0),
(40, 'Kucing Satu', '25000', 'Kucing', 'Kucing Peranakan', 'Kucing ini banyak diminati orang indonesia. monggo dibeli', '2017-05-31 00:00:00', 'anjingsukakawin', '', 0, 0),
(41, 'Kucing Mata Kuning', '15000', 'Kucing', 'Kucing Peranakan', 'Kucing mata kuning ini juga sudah memiliki surat-surat sertifikat', '2017-05-30 00:00:00', 'kucingmatakuning', '', 0, 0),
(42, 'Kucing Satu', '25000', 'Kucing', 'Kucing Peranakan', 'Kucing ini banyak diminati orang indonesia. monggo dibeli', '2017-05-31 00:00:00', 'anjingsukakawin', '', 0, 0),
(43, 'anjing dijual', '1000000', 'anjing', 'buldog', 'anjing ini dijual dan rasnya buldog', '0000-00-00 00:00:00', 'file_1495099465', '', 0, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `katasandi` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `peran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `email`, `katasandi`, `nama_lengkap`, `alamat`, `foto`, `status`, `peran`) VALUES
(30, 'nicolasjuniar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'nicolas juniar', 'barbarsari', 'file_1494665891', 'aktif', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id_request` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori_hewan` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tips`
--

CREATE TABLE `tbl_tips` (
  `id_tips` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  `verifikasi` tinyint(1) NOT NULL,
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aksesoris`
--
ALTER TABLE `tbl_aksesoris`
  ADD PRIMARY KEY (`id_aksesoris`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  ADD PRIMARY KEY (`id_tips`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aksesoris`
--
ALTER TABLE `tbl_aksesoris`
  MODIFY `id_aksesoris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_hewan`
--
ALTER TABLE `tbl_hewan`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tips`
--
ALTER TABLE `tbl_tips`
  MODIFY `id_tips` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
