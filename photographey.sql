-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 09:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photographey`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `email_about` varchar(255) NOT NULL,
  `name_about` varchar(255) NOT NULL,
  `department_about` varchar(255) NOT NULL,
  `major_about` varchar(255) NOT NULL,
  `experience_about` varchar(100) NOT NULL,
  `description_about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `email_about`, `name_about`, `department_about`, `major_about`, `experience_about`, `description_about`) VALUES
(1, 'hire@colorlib.com', 'SALVADOR DALI', 'Digital Artisit', 'DIGITAL', '05', 'You can’t use up creativity. The more you use, the more you have in your signifant mind.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `address_contact` varchar(250) NOT NULL,
  `email_contact` varchar(250) NOT NULL,
  `phone_contact` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `address_contact`, `email_contact`, `phone_contact`) VALUES
(1, 'Buttonwood, California.', 'support@colorlib.com', '+1 253 565 2365');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `img_feedback` text NOT NULL,
  `name_feedback` varchar(200) NOT NULL,
  `department_feedback` varchar(200) NOT NULL,
  `description_feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `img_feedback`, `name_feedback`, `department_feedback`, `description_feedback`) VALUES
(2, 'Homepage_testi.png', 'Jessya Inn', 'Chif Photographer', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas.'),
(3, 'comment_1.png', 'Jessya Inn', 'Chif Photographer', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas.'),
(4, 'comment_2.png', 'Jessya Inn', 'Chif Photographer', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas.'),
(5, 'comment_3.png', 'Jessya Inn', 'Chif Photographer', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas.'),
(6, 'author.png', 'Jessya Inn', 'Chif Photographer', 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas.');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `img_footer` text NOT NULL,
  `title_footer` varchar(500) NOT NULL,
  `facebook_footer` varchar(500) NOT NULL,
  `twitter_footer` varchar(500) NOT NULL,
  `globe_footer` varchar(500) NOT NULL,
  `instagram_footer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `img_footer`, `title_footer`, `facebook_footer`, `twitter_footer`, `globe_footer`, `instagram_footer`) VALUES
(1, 'logo2_footer.png', 'Grabbing the concsumer’s attention isn’t enough you have to keep that attention for at least.', 'https://www.facebook.com/ClevermindICT/', 'https://twitter.com/search?q=cleverMindICT', 'https://globe.com', 'https://www.instagram.com/clevermindpob/');

-- --------------------------------------------------------

--
-- Table structure for table `form_contact`
--

CREATE TABLE `form_contact` (
  `id_form_contact` int(11) NOT NULL,
  `name_form` varchar(250) NOT NULL,
  `email_form` varchar(250) NOT NULL,
  `subject_form` varchar(255) NOT NULL,
  `message_form` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_contact`
--

INSERT INTO `form_contact` (`id_form_contact`, `name_form`, `email_form`, `subject_form`, `message_form`) VALUES
(2, 'Ali', 'ali@gmail.com', 'eos pariatur cumque', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus facilis, quo error iste ipsa hic dolor necessitatibus, magnam earum illum eos pariatur cumque maxime ratione consectetur  consequuntur voluptates repudiandae.'),
(4, 'khalid', 'khalid@gmail.com', 'eos pariatur cumque', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem temporibus facilis, \r\nquo error iste ipsa hic dolor necessitatibus, magnam earum illum eos pariatur cumque maxime ratione consectetur \r\nconsequuntur voluptates repudiandae.');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id_gallary` int(11) NOT NULL,
  `title_gallary` varchar(200) NOT NULL,
  `sub_title_gallary` varchar(255) NOT NULL,
  `img_gallary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id_gallary`, `title_gallary`, `sub_title_gallary`, `img_gallary`) VALUES
(2, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery1.png'),
(3, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery2.png'),
(4, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery3.png'),
(5, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery4.png'),
(6, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery5.png'),
(7, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery6.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallary_inner`
--

CREATE TABLE `gallary_inner` (
  `id_gallary_inner` int(11) NOT NULL,
  `title_gallary_inner` varchar(250) NOT NULL,
  `sub_title_gallary_inner` varchar(255) NOT NULL,
  `img_gallary_inner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallary_inner`
--

INSERT INTO `gallary_inner` (`id_gallary_inner`, `title_gallary_inner`, `sub_title_gallary_inner`, `img_gallary_inner`) VALUES
(2, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery1.png'),
(3, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery2.png'),
(4, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery3.png'),
(5, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery4.png'),
(6, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery5.png'),
(7, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery6.png'),
(8, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery1.png'),
(9, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery2.png'),
(10, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery3.png'),
(11, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery4.png'),
(12, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery5.png'),
(14, 'The Last man', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'gallery6.png');

-- --------------------------------------------------------

--
-- Table structure for table `grid_imgs`
--

CREATE TABLE `grid_imgs` (
  `id_grid_imgs` int(11) NOT NULL,
  `img_grid_imgs1` text NOT NULL,
  `title_grid_imgs1` varchar(250) NOT NULL,
  `sub_title_grid_imgs1` varchar(255) NOT NULL,
  `img_grid_imgs2` text NOT NULL,
  `title_grid_imgs2` varchar(250) NOT NULL,
  `sub_title_grid_imgs2` varchar(255) NOT NULL,
  `img_grid_imgs3` text NOT NULL,
  `title_grid_imgs3` varchar(250) NOT NULL,
  `sub_title_grid_imgs3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grid_imgs`
--

INSERT INTO `grid_imgs` (`id_grid_imgs`, `img_grid_imgs1`, `title_grid_imgs1`, `sub_title_grid_imgs1`, `img_grid_imgs2`, `title_grid_imgs2`, `sub_title_grid_imgs2`, `img_grid_imgs3`, `title_grid_imgs3`, `sub_title_grid_imgs3`) VALUES
(1, 'blog01.png', 'Creative Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog02.png', 'Wedding Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog3.png', 'Nature Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `name_tab` varchar(250) NOT NULL,
  `img_tab` text NOT NULL,
  `img_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `name_tab`, `img_tab`, `img_logo`) VALUES
(1, 'photography', 'favicon.ico', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `sub_title_image` varchar(255) NOT NULL,
  `title_image` varchar(255) NOT NULL,
  `img_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id_image`, `sub_title_image`, `title_image`, `img_image`) VALUES
(1, 'Photography Make us happy Take a shot.', 'Creative Photographey', 'hero_man1.png');

-- --------------------------------------------------------

--
-- Table structure for table `look_imgs`
--

CREATE TABLE `look_imgs` (
  `id_look_imgs` int(11) NOT NULL,
  `img_look_imgs` text NOT NULL,
  `title_look_imgs` varchar(255) NOT NULL,
  `year_prize` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `look_imgs`
--

INSERT INTO `look_imgs` (`id_look_imgs`, `img_look_imgs`, `title_look_imgs`, `year_prize`) VALUES
(2, 'brand1.png', 'BEHANCE AWARD', '2019'),
(3, 'brand02.png', 'BEHANCE AWARD', '2019'),
(4, 'brand2.png', 'BEHANCE AWARD', '2019'),
(5, 'brand3.png', 'BEHANCE AWARD', '2019'),
(6, 'brand1.png', 'BEHANCE AWARD', '2019'),
(7, 'brand4.png', 'BEHANCE AWARD', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `look_txt`
--

CREATE TABLE `look_txt` (
  `id_look_txt` int(11) NOT NULL,
  `title_look_txt` varchar(200) NOT NULL,
  `sub_title_look_txt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `look_txt`
--

INSERT INTO `look_txt` (`id_look_txt`, `title_look_txt`, `sub_title_look_txt`) VALUES
(1, 'TAKE A LOOK AT OUR ACHIVMENT', 'Excepteur sint occaecat cupidatat. irure dolor in.');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id_mission` int(11) NOT NULL,
  `img_mission` text NOT NULL,
  `title_mission1` varchar(200) NOT NULL,
  `description_mission1` varchar(500) NOT NULL,
  `title_mission2` varchar(200) NOT NULL,
  `description_mission2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id_mission`, `img_mission`, `title_mission1`, `description_mission1`, `title_mission2`, `description_mission2`) VALUES
(1, 'about2.png', 'Our Mission', 'Brook presents your services with flexible nienti and multipurpose layouts. You can select vorite layouts & elements for particular projects with unlimited mizationi possibilities.', 'Our Mission', 'Brook presents your services with flexible nienti and multipurpose layouts. You can select vorite layouts & elements for particular projects with unlimited mizationi possibilities.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `title_service` varchar(230) NOT NULL,
  `sub_title_service` varchar(255) NOT NULL,
  `img_service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `title_service`, `sub_title_service`, `img_service`) VALUES
(2, 'Nature Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog01.png'),
(3, 'Wedding Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog02.png'),
(4, 'Creative Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog03.png'),
(5, 'Creative Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog1.png'),
(6, 'Nature Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog2.png'),
(8, 'Wedding Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'blog3.png'),
(9, 'Creative Photography', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'about2.png');

-- --------------------------------------------------------

--
-- Table structure for table `under_image`
--

CREATE TABLE `under_image` (
  `id_under_img` int(11) NOT NULL,
  `email_under_img` varchar(255) NOT NULL,
  `name_under_img` varchar(255) NOT NULL,
  `department_under_img` varchar(200) NOT NULL,
  `major_under_img` varchar(200) NOT NULL,
  `experience_under_img` varchar(100) NOT NULL,
  `description_under_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `under_image`
--

INSERT INTO `under_image` (`id_under_img`, `email_under_img`, `name_under_img`, `department_under_img`, `major_under_img`, `experience_under_img`, `description_under_img`) VALUES
(1, 'hire@colorlib.com', 'SALVADOR DALI', 'Digital Artisit', 'DIGITAL', '05', 'You can’t use up creativity. The more you use, the more you have in your signifant mind.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `form_contact`
--
ALTER TABLE `form_contact`
  ADD PRIMARY KEY (`id_form_contact`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id_gallary`);

--
-- Indexes for table `gallary_inner`
--
ALTER TABLE `gallary_inner`
  ADD PRIMARY KEY (`id_gallary_inner`);

--
-- Indexes for table `grid_imgs`
--
ALTER TABLE `grid_imgs`
  ADD PRIMARY KEY (`id_grid_imgs`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `look_imgs`
--
ALTER TABLE `look_imgs`
  ADD PRIMARY KEY (`id_look_imgs`);

--
-- Indexes for table `look_txt`
--
ALTER TABLE `look_txt`
  ADD PRIMARY KEY (`id_look_txt`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id_mission`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `under_image`
--
ALTER TABLE `under_image`
  ADD PRIMARY KEY (`id_under_img`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_contact`
--
ALTER TABLE `form_contact`
  MODIFY `id_form_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id_gallary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallary_inner`
--
ALTER TABLE `gallary_inner`
  MODIFY `id_gallary_inner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `grid_imgs`
--
ALTER TABLE `grid_imgs`
  MODIFY `id_grid_imgs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `look_imgs`
--
ALTER TABLE `look_imgs`
  MODIFY `id_look_imgs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `look_txt`
--
ALTER TABLE `look_txt`
  MODIFY `id_look_txt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id_mission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `under_image`
--
ALTER TABLE `under_image`
  MODIFY `id_under_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
