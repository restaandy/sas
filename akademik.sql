/*
SQLyog Professional v12.4.1 (64 bit)
MySQL - 5.7.14 : Database - akademik
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`akademik` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `akademik`;

/*Table structure for table `data_alumni` */

DROP TABLE IF EXISTS `data_alumni`;

CREATE TABLE `data_alumni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instantsi` int(11) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `tmp_lhr` varchar(20) DEFAULT NULL,
  `prov_id` int(3) DEFAULT NULL,
  `kab_id` int(7) DEFAULT NULL,
  `kec_id` int(9) DEFAULT NULL,
  `desa_id` int(9) DEFAULT NULL,
  `alamat` text,
  `jenkel` enum('L','P') DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_lulus` date DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastinput` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `data_alumni` */

/*Table structure for table `data_guru` */

DROP TABLE IF EXISTS `data_guru`;

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `tmp_lhr` varchar(20) DEFAULT NULL,
  `prov_id` int(3) DEFAULT NULL,
  `kab_id` int(7) DEFAULT NULL,
  `kec_id` int(9) DEFAULT NULL,
  `desa_id` int(9) DEFAULT NULL,
  `alamat` text,
  `status_guru` enum('PNS','TETAP','KONTRAK','HONORER','LAIN-LAIN') DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `data_guru` */

/*Table structure for table `data_instansi` */

DROP TABLE IF EXISTS `data_instansi`;

CREATE TABLE `data_instansi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(100) NOT NULL,
  `jenis_instansi` enum('SD','SMP','SMA','MA','MI','MTS','PONDOK PESANTREN','STM','SMK','COURSE') NOT NULL,
  `tahun_berdiri` year(4) DEFAULT NULL,
  `prov_id` int(11) DEFAULT NULL,
  `kab_id` int(11) DEFAULT NULL,
  `kec_id` int(11) DEFAULT NULL,
  `desa_id` int(11) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `data_instansi` */

/*Table structure for table `data_ortu` */

DROP TABLE IF EXISTS `data_ortu`;

CREATE TABLE `data_ortu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` varchar(30) NOT NULL,
  `nama_ortu` varchar(30) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `tmp_lhr` varchar(20) DEFAULT NULL,
  `prov_id` int(3) DEFAULT NULL,
  `kab_id` int(7) DEFAULT NULL,
  `kec_id` int(9) DEFAULT NULL,
  `desa_id` int(9) DEFAULT NULL,
  `alamat` text,
  `status_ortu` enum('Ayah','Ibu') DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `data_ortu` */

/*Table structure for table `data_siswa` */

DROP TABLE IF EXISTS `data_siswa`;

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instantsi` int(11) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `tmp_lhr` varchar(20) DEFAULT NULL,
  `prov_id` int(3) DEFAULT NULL,
  `kab_id` int(7) DEFAULT NULL,
  `kec_id` int(9) DEFAULT NULL,
  `desa_id` int(9) DEFAULT NULL,
  `alamat` text,
  `nohp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jenkel` enum('L','P') DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL,
  `status_siswa` enum('Aktif','Lulus') DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `data_siswa` */

/*Table structure for table `rel_pertemuan` */

DROP TABLE IF EXISTS `rel_pertemuan`;

CREATE TABLE `rel_pertemuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `rel_pertemuan` */

/*Table structure for table `rel_perwalian` */

DROP TABLE IF EXISTS `rel_perwalian`;

CREATE TABLE `rel_perwalian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ortu` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `rel_perwalian` */

/*Table structure for table `sch_jadwal` */

DROP TABLE IF EXISTS `sch_jadwal`;

CREATE TABLE `sch_jadwal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) NOT NULL,
  `hari` enum('SENIN','SELASA','RABU','KAMIS','JUMAT','SABTU','MINGGU') NOT NULL,
  `waktu_mulai` time NOT NULL DEFAULT '00:00:00',
  `waktu_selesai` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `sch_jadwal` */

/*Table structure for table `sch_kelas` */

DROP TABLE IF EXISTS `sch_kelas`;

CREATE TABLE `sch_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) DEFAULT NULL,
  `nama_kelas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `sch_kelas` */

/*Table structure for table `sch_pelajaran` */

DROP TABLE IF EXISTS `sch_pelajaran`;

CREATE TABLE `sch_pelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) NOT NULL,
  `nama_pelajaran` varchar(30) NOT NULL,
  `status` enum('TEORI','PRAKTEK','LAIN-LAIN') DEFAULT NULL,
  `bobot` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `sch_pelajaran` */

/*Table structure for table `sch_standar_kompetensi` */

DROP TABLE IF EXISTS `sch_standar_kompetensi`;

CREATE TABLE `sch_standar_kompetensi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `nama_sk` varchar(70) NOT NULL,
  `bobot` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `sch_standar_kompetensi` */

/*Table structure for table `sch_tahun_ajaran` */

DROP TABLE IF EXISTS `sch_tahun_ajaran`;

CREATE TABLE `sch_tahun_ajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) DEFAULT NULL,
  `tahun` year(4) NOT NULL,
  `status` enum('Genap','Ganjil') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `sch_tahun_ajaran` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
