-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2017 at 09:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rksir`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `ach_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `achie_slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `ach_date` varchar(50) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`ach_id`, `title`, `achie_slug`, `content`, `ach_date`, `image_url`, `created_at`, `updated_at`) VALUES
(29, 'new data  to check updated_at', 'new-data-to-check-updated-at', '27 sept data added for 27 ', '1477872000', '', '2016-09-20 18:28:38', '2016-10-02 15:34:23'),
(30, 'new data to check success', 'new-data-to-check-success', '29 oct njksnanlnx;', '1475107200', '', '2016-09-20 18:42:03', '2016-09-20 18:42:03'),
(33, 'success data show', 'success-data-show', '16 sept success', '1473984000', '', '2016-09-20 19:12:09', '2016-09-20 19:12:09'),
(37, 'nnlnlzxk;mqlwf', 'nnlnlzxkmqlwf', 'lkk''lsa;lk;lkl;sxkl; k;k;ll;ds', '1477872000', '', '2016-09-20 19:23:08', '2016-10-02 15:35:01'),
(38, 'kjkwefakiohkwekfnklnklndkl', 'kjkwefakiohkwekfnklnklndkl', 'jejpafjpj;fvm;jjewjklndklnkdl', '1476835200', '', '2016-10-05 17:37:04', '2016-10-05 17:37:04'),
(39, 'kjjksa;jkwbjk', 'kjjksajkwbjk', 'hhlbl ;jlklknl nnkjkjkjsdb njkjkjbewk', '1479859200', '', '2016-11-02 11:00:38', '2016-11-02 11:00:38'),
(40, 'hgfhgghhj kkjkjwdb', 'hgfhgghhj-kkjkjwdb', ',kgkasbkjb ihqwhlqwknl', '1480464000', '', '2016-11-02 11:00:50', '2016-11-02 11:00:50'),
(41, 'hggkhvws', 'hggkhvws', 'kjbkj;b;kjbkjb kjbkjjkwejkbkwe', '892512000', '', '2016-11-02 11:01:59', '2016-11-02 11:01:59'),
(42, 'kjkjbkjw', 'kjkjbkjw', 'jkgkqw;kl;jbkjwb;', '1480464000', '', '2016-11-02 11:04:57', '2016-11-02 11:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(2) NOT NULL,
  `user_type` int(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `name`, `email`, `password`, `address`, `mobile`, `dob`, `image`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
(2, 'Pawan Kumar Pawan Kumar', 'rj12345@gmail.com', '$2y$10$NfOLdgK8MkXwr9uADkJZf.99sBQpdi4mhGm/FI298k9', '', '4123654789', '', '', 1, 2, '2016-09-29 17:08:07', '2016-09-29 17:08:07'),
(3, 'Pawan Kumar singh', 'rjsnh1522123@gmail.com', '$2y$10$o3g8bgJYlQyIFJ8QHLhveOxhFrLLuvvpGmSAOEJxFW9', '', '7896325412', '', '', 0, 3, '2016-09-29 17:09:27', '2016-09-29 17:09:27'),
(4, 'super admin', 'rjsnh1522@gmail.com', '$2y$10$NfOLdgK8MkXwr9uADkJZf.99sBQpdi4mhGm/FI298k9', '', '1234569877', '', '1480691237.jpg', 1, 1, '2016-09-29 17:08:07', '2016-09-29 17:08:07'),
(6, 'hhhh', 'rvcc@gm.com', '$2y$10$UM.RUBu0cWl91oP3uVLlIOrtQBCrCeFiAGg9/mbVizs', '', '', '', '', 0, 3, '2016-09-29 19:50:53', '2016-09-29 19:50:53'),
(7, 'new admin', 'newadmin@gmail.com', '$2y$10$gx8rzd/UmITEiSqTP5pG3ekZPVOz/hwSi4GSTiHMRF5', '', '', '', '', 1, 3, '2016-09-30 17:01:54', '2016-09-30 17:01:54'),
(8, 'sm rj ', 'smrj@gmail.com', '', 'Dhanbad Dhanbad', '7737295416', '16 December, 1993', '1483288262.png', 1, 0, '2017-01-01 15:42:22', '2017-01-01 16:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `batch_id` int(100) NOT NULL,
  `batch_name` varchar(100) NOT NULL,
  `has_physics` varchar(100) NOT NULL,
  `has_chemistry` varchar(100) NOT NULL,
  `has_maths` varchar(100) NOT NULL,
  `has_bio` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Pawan Kumar', 'rjsnh1522@gmail.com', '7737295416', 'ACHIEVEMENTS\r\nWE IN NEWS\r\nCONTACT\r\nWE WANNA HEAR FROM YOU\r\nHome Contact\r\nQuick Contact\r\n\r\nFirst Name\r\n\r\nLast Name\r\n\r\nMobile\r\n\r\nEmail\r\n\r\nlorem\r\nSend Message\r\nContact Information :\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique.\r\n\r\n- 7oroof@7oroof.com\r\n- 002 01065370701\r\nBusiness Hours :\r\n\r\nMonday – Friday : 9am to 20 pm\r\nSaturday : 9am to 17 pm\r\nSunday : day off', '2016-10-17 16:25:05', '2016-10-17 16:25:05'),
(5, 'Pawan Kumar', 'rjsnh1522@gmail.com', '7737295416', 'new message', '2016-11-02 10:13:37', '2016-11-02 10:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `meta_data`
--

CREATE TABLE `meta_data` (
  `meta_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `canonical` varchar(100) NOT NULL,
  `popUp` int(10) NOT NULL COMMENT '1 to show popup 0 for not',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_data`
--

INSERT INTO `meta_data` (`meta_id`, `title`, `page_name`, `keywords`, `description`, `canonical`, `popUp`, `created_at`, `updated_at`) VALUES
(1, 'Sirvastava Classes | Institute | Dhanbad', 'homePage', 'Sirvastava Classes, Institute, Coaching, Dhanbad, 12th, 11th, Target, Engineering, Medical', 'Best IIT-JEE Medical preparation Institute ', 'srivastavaclasses.org', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Srivastava Classes | Dhanbad | About-us', 'aboutPage', 'Sirvastava Classes, Institute, Coaching, Dhanbad, 12th, 11th, Target, Engineering, Medical', 'Best IIT-JEE Medical preparation Institute ', 'srivastavaclasses.org/about', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Srivastava Classes | Dhanbad | Results so Far', 'resultsPage', 'Sirvastava Classes, Institute, Coaching, Dhanbad, 12th, 11th, Target, Engineering, Medical', 'Best IIT-JEE Medical preparation Institute ', 'srivastavaclasses.org/results', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Srivastava Classes | Dhanbad | We In News', 'weInNewsPage', 'Sirvastava Classes, Institute, Coaching, Dhanbad, 12th, 11th, Target, Engineering, Medical', 'Best IIT-JEE Medical preparation Institute , We Featured In Daily News Paper', 'srivastavaclasses.org/we-in-news', 1, '2016-10-13 00:00:00', '2016-10-13 00:00:00'),
(5, 'Srivastava Classes | Dhanbad | Contact Us', 'contactUs', 'Sirvastava Classes, Institute, Coaching, Dhanbad, 12th, 11th, Target teaching, Engineering, Medical', 'Best IIT-JEE Medical preparation Institute , Contact us', 'srivastavaclasses.org/contact', 1, '2016-10-16 00:00:00', '2016-10-16 00:00:00'),
(6, 'Srivastava Classes | Dhanbad | Our achievements ', 'achievementsPage', 'Sirvastava Classes, Institute, Coaching, Dhanbad, 12th, 11th, Target teaching, Engineering, Medical', 'Best IIT-JEE Medical preparation Institute , Achievements', 'srivastavaclasses.org/our-achievements', 1, '2016-10-17 00:00:00', '2016-10-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_slug` varchar(200) NOT NULL,
  `which_paper` varchar(100) NOT NULL,
  `news_date` varchar(200) NOT NULL,
  `news_image_name` varchar(200) NOT NULL,
  `news_image_url` varchar(200) NOT NULL,
  `news_content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_slug`, `which_paper`, `news_date`, `news_image_name`, `news_image_url`, `news_content`, `created_at`, `updated_at`) VALUES
(1, 'lllkdnl', 'lllkdnl', 'lkjlkskl', '1475193600', '1475162332.jpg', '/resources/assets/images/news/', 'image he image ghanta', '2016-09-29 15:18:52', '2016-10-12 16:14:33'),
(2, 'one more news', 'one-more-news', 'dainik bhaskar', '1476748800', '1476290397.jpg', '/resources/assets/images/news/', 'news content', '2016-10-12 16:39:57', '2016-10-12 16:39:57'),
(3, 'daily news', 'daily-news', 'daily paper', '1477353600', '1476388837.png', '/resources/assets/images/news/', 'new content news paper', '2016-10-13 20:00:37', '2016-10-13 20:00:37'),
(4, 'one more newws', 'one-more-newws', 'onew more', '1477440000', '1476627764.jpg', '/resources/assets/images/news/', 'ihiewhip''', '2016-10-16 14:22:44', '2016-10-16 14:22:44'),
(5, 'jknksl', 'jknksl', 'llnkll', '1477699200', '1476627792.jpg', '/resources/assets/images/news/', 'nlbblkasXBL NLKNAS''N', '2016-10-16 14:23:12', '2016-10-16 14:23:12'),
(6, 'news in dainik bhaskar', 'news-in-dainik-bhaskar', 'dainik bhaskar', '1137628800', '1476631765.png', '/resources/assets/images/news/', 'some news is heree', '2016-10-16 15:29:25', '2016-10-16 15:29:25'),
(7, '7th news', '7th-news', 'inheaven', '1235692800', '1476631847.jpg', '/resources/assets/images/news/', 'some thing heree', '2016-10-16 15:30:47', '2016-10-16 15:30:47'),
(8, '6th news of the year', '6th-news-of-the-year', 'news he news', '1323993600', '1476631896.jpg', '/resources/assets/images/news/', 'one more news heree', '2016-10-16 15:31:36', '2016-10-16 15:31:36'),
(9, '9th news ', '9th-news', 'next will be 10th news', '1450224000', '1476631949.jpg', '/resources/assets/images/news/', 'me with me', '2016-10-16 15:32:29', '2016-10-16 15:32:29'),
(10, '10th image', '10th-image', 'tesitngthe 10th imaeg', '1477526400', '1476632015.jpg', '/resources/assets/images/news/', 'joker arkham night', '2016-10-16 15:33:35', '2016-10-16 15:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `popup`
--

CREATE TABLE `popup` (
  `popup_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `popup_slug` varchar(100) NOT NULL,
  `img_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL COMMENT '1 enable 0 disable',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `popup`
--

INSERT INTO `popup` (`popup_id`, `name`, `popup_slug`, `img_name`, `status`, `created_at`, `updated_at`) VALUES
(12, 'jjhvkhb klbe', 'jjhvkhb-klbe', '1478169599.png', '1', '2016-11-03 10:39:59', '2016-11-03 10:39:59'),
(16, 'kkkwdbklj ', 'kkkwdbklj', '1478169695.jpg', '0', '2016-11-03 10:41:35', '2017-01-01 19:04:47'),
(17, 'bbklbklsbk kbkbkbsl ', 'bbklbklsbk-kbkbkbsl', '1478169705.png', '0', '2016-11-03 10:41:45', '2016-11-03 10:41:45'),
(18, 'sgksbk;jbk lllslndskl ', 'sgksbkjbk-lllslndskl', '1478169714.jpg', '0', '2016-11-03 10:41:54', '2016-11-03 10:41:54'),
(19, 'sggk bkkhkjwkjkj ', 'sggk-bkkhkjwkjkj', '1478169725.jpg', '0', '2016-11-03 10:42:05', '2016-11-03 10:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_name_slug` varchar(100) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `rank` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `stream` varchar(200) NOT NULL,
  `img_name` varchar(200) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `student_name`, `student_name_slug`, `exam_name`, `rank`, `year`, `stream`, `img_name`, `img_url`, `created_at`, `updated_at`) VALUES
(2, 'pawan chaurasia', 'pawan-chaurasia', 'aieee', '250504', '2015', 'Engineering', '1476286249.jpg', '/resources/assets/images/results/', '2016-10-12 15:30:49', '2016-10-12 16:34:31'),
(3, 'one more edit check', 'one-more-edit-check', 'edit one more', 'air 2', '2016', 'Engineering', '1476286276.jpg', '/resources/assets/images/results/', '2016-10-12 15:31:16', '2016-10-12 15:31:16'),
(4, 'thired student', 'thired-student', 'third', 'obc 12', '2014', 'Medical', '1476286311.jpg', '/resources/assets/images/results/', '2016-10-12 15:31:51', '2016-10-12 15:31:51'),
(5, 'pawan', 'pawan', 'iit jee', 'new rank', 'Before 2014', 'Engineering', '1476377726.jpg', '/resources/assets/images/results/', '2016-10-13 16:55:26', '2016-10-13 16:55:26'),
(6, 'jkjkbjkbjk ', 'jkjkbjkbjk', 'll''''bsla', '155', 'Before 2014', 'Medical', '1476378663.png', '/resources/assets/images/results/', '2016-10-13 17:11:04', '2016-10-13 17:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `accepted_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_id`, `name`, `email`, `mobile`, `image`, `accepted_by`, `created_at`, `updated_at`) VALUES
(6, 0, 'Pawan Chaurasia', 'student@gmail.com', '9798521744', '1483299218.jpg', 'super admin', '2017-01-01 19:32:09', '2017-01-01 19:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `user_info_id` int(10) NOT NULL,
  `student_info_id` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `g_contact` varchar(100) NOT NULL,
  `school_college` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`user_info_id`, `student_info_id`, `name`, `email`, `address`, `dob`, `f_name`, `m_name`, `g_contact`, `school_college`, `image`, `created_at`, `updated_at`) VALUES
(4, '', NULL, 'student@gmail.com', 'Dhanbad', '19 March, 1993', 'lala prasad chaurasia', 'Rina devi', '7737295416', 'Rsvm', NULL, '2017-01-01 19:32:09', '2017-01-01 19:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_has_batches`
--

CREATE TABLE `student_has_batches` (
  `student_has_batch_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `batch_id` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_has_batches`
--

INSERT INTO `student_has_batches` (`student_has_batch_id`, `email`, `student_id`, `batch_id`, `created_at`, `updated_at`) VALUES
(2, 'student@gmail.com', '', '', '2017-01-01 19:32:09', '2017-01-01 19:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `schedule_id` int(11) NOT NULL,
  `batch_year_name` varchar(200) NOT NULL,
  `batch_year` varchar(200) NOT NULL,
  `batch_name` varchar(200) NOT NULL,
  `time_table_slug` varchar(200) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `day_one` varchar(100) NOT NULL,
  `day_one_time` varchar(100) NOT NULL,
  `day_two` varchar(100) NOT NULL,
  `day_two_time` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`schedule_id`, `batch_year_name`, `batch_year`, `batch_name`, `time_table_slug`, `class`, `subject`, `faculty`, `day_one`, `day_one_time`, `day_two`, `day_two_time`, `created_at`, `updated_at`) VALUES
(14, 'session 2017 2018 new batch', '2017-2018', 'new batch', 'new-batch', 'Eleven', 'Physics', 'Rakesh Sir', 'Tuesday', '04:25PM', 'Tuesday', '10:30PM', '2017-01-01 19:00:44', '2017-01-01 19:00:44'),
(15, 'session 2017 2018 new batch', '2017-2018', 'batch 2', 'batch-2', 'Eleven', 'Physics', 'Rakesh Sir', 'Monday', '07:31PM', 'Tuesday', '08:30PM', '2017-01-01 19:01:20', '2017-01-01 19:01:20'),
(16, 'session 2017 2018 new batch', '2017-2018', 'new batch a=to add', 'new-batch-ato-add', 'Eleven', 'Mathematics', 'Jitesh Sir', 'Tuesday', '06:49PM', 'Wednesday', '08:49PM', '2017-01-01 19:19:37', '2017-01-01 19:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `time_table_year`
--

CREATE TABLE `time_table_year` (
  `time_table_year_id` int(11) NOT NULL,
  `batch_year` varchar(100) NOT NULL,
  `batch_year_name` varchar(200) NOT NULL,
  `batch_year_name_slug` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table_year`
--

INSERT INTO `time_table_year` (`time_table_year_id`, `batch_year`, `batch_year_name`, `batch_year_name_slug`, `created_at`, `updated_at`) VALUES
(5, '2017-2018', 'session 2017 2018 new batch', 'session-2017-2018-new-batch', '2017-01-01 18:59:48', '2017-01-01 18:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `remember_token` varchar(250) NOT NULL,
  `mobile` varchar(128) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL COMMENT '1 me 2 sir 3 admin 4 student',
  `status` varchar(5) DEFAULT NULL COMMENT '1 for allow 2 for not allowed',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `mobile`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rjsnh1522@gmail.com', '$2y$10$Bh2KHUH88KTnRmBYdIUS/e2oU.wpbZXf0ErSIjegCBQ.Ye.DEQaLO', '', '7737295416', '1', '1', '2016-09-25 18:48:44', '2016-09-25 18:48:44'),
(2, 'pawanpiet12@poornima.org', '$2y$10$Bh2KHUH88KTnRmBYdIUS/e2oU.wpbZXf0ErSIjegCBQ.Ye.DEQaLO', '', '7737295416', '2', '2', '2016-09-25 18:56:06', '2016-09-25 18:56:06'),
(3, 'newadmin@gmail.com', '$2y$10$Bh2KHUH88KTnRmBYdIUS/e2oU.wpbZXf0ErSIjegCBQ.Ye.DEQaLO', '', '', '1', '1', '2016-09-30 17:01:54', '2016-09-30 17:01:54'),
(5, 'smrj@gmail.com', '$2y$10$xda5JQz9elhwRYUQOneMIuy2QRbVhkv0QYNJ.EPVP/Z9CoLa41WuO', 'UJROubGHHaTOIyo98ksV2Z75t5ylukYvF7ffvnxnqkdPIZ0R2bTyEhTuDxeQ', '7737295416', '3', '1', '2017-01-01 15:42:22', '2017-01-01 16:36:13'),
(9, 'student@gmail.com', '$2y$10$OJvDXcECbgtjRp0rTqrytuThNCKZscOOmvLnkgQ..bIx8HlT7FXGq', '', '9798521744', '4', '1', '2017-01-01 19:31:19', '2017-01-01 19:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `user_type_id` int(10) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `value` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_type_id`, `role`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Boss of the Web', 1, '2016-09-09 00:00:00', '2016-09-09 00:00:00'),
(2, 'Super Admin', 2, '2016-09-09 00:00:00', '2016-09-09 00:00:00'),
(3, 'Admin', 3, '2016-09-09 00:00:00', '2016-09-09 00:00:00'),
(4, 'Student', 4, '2016-09-25 00:00:00', '2016-09-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`ach_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`batch_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `meta_data`
--
ALTER TABLE `meta_data`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `popup`
--
ALTER TABLE `popup`
  ADD PRIMARY KEY (`popup_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`user_info_id`);

--
-- Indexes for table `student_has_batches`
--
ALTER TABLE `student_has_batches`
  ADD PRIMARY KEY (`student_has_batch_id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `time_table_year`
--
ALTER TABLE `time_table_year`
  ADD PRIMARY KEY (`time_table_year_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `ach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `batch_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `meta_data`
--
ALTER TABLE `meta_data`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `popup`
--
ALTER TABLE `popup`
  MODIFY `popup_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `user_info_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_has_batches`
--
ALTER TABLE `student_has_batches`
  MODIFY `student_has_batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `time_table_year`
--
ALTER TABLE `time_table_year`
  MODIFY `time_table_year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
