SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `developers`
--
CREATE DATABASE IF NOT EXISTS `developers` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `developers`;

-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(10, 'About Our Company', '<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">Westlands Tech Solutions is a web design and development company dedicated to providing web-based solutions to all types of businesses. Located in Westlands, Nairobi (Kenya).</p>\r\n<p class=\"text_all_p_tag_css\">Westlands Tech Solutions is your one-stop solution for all your IT needs. We provide full-featured innovative and high-quality cost-effective IT web designing solutions ranging from customized web development, PHP web development, ASP.NET, and all kinds of programming to complete web solutions including web design, web development in PHP, eCommerce solutions, multimedia, and print publication solutions, CSS/XHTML web design, content management, SEO (web promotion), domain registration, and web hosting to businesses throughout Kenya.</p>\r\n<div id=\"pgc-w5d0dcc3394ac1-0-0\" class=\"panel-grid-cell\">\r\n<div id=\"panel-w5d0dcc3394ac1-0-0-0\" class=\"so-panel widget widget_sow-editor panel-first-child panel-last-child\" data-index=\"0\">\r\n<div class=\"so-widget-sow-editor so-widget-sow-editor-base\">\r\n<div class=\"siteorigin-widget-tinymce textwidget\">\r\n<p class=\"text_all_p_tag_css\">Westlands Tech Solutions is a web design and development company dedicated to providing web-based solutions to all types of businesses. Located in Westlands, Nairobi (Kenya).</p>\r\n<p class=\"text_all_p_tag_css\">Westlands Tech Solutions is your one-stop solution for all your IT needs. We provide full-featured innovative and high-quality cost-effective IT web designing solutions ranging from customized web development, PHP web development, ASP.NET, and all kinds of programming to complete web solutions including web design, web development in PHP, eCommerce solutions, multimedia, and print publication solutions, CSS/XHTML web design, content management, SEO (web promotion), domain registration, and web hosting to businesses throughout Kenya.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '
condos-pool.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(2, 'Juma Mwangi', 'juma.mwangi@gmail.com', 'juma2024', '1990-03-15', '254712345678'),
(6, 'Amani Njeri', 'amani.njeri@gmail.com', 'amani2024', '1985-07-22', '254798765432'),
(7, 'Wanjiru Mbugua', 'wanjiru.mbugua@gmail.com', 'wanjiru2024', '1988-11-10', '254712398765'),
(8, 'David Otieno', 'david.otieno@gmail.com', 'david2024', '1992-05-05', '254733456789'),
(9, 'Lilian Achieng', 'lilian.achieng@gmail.com', 'lilian2024', '1995-09-30', '254701234567');


-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `sid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`, `sid`) VALUES
(9, 'Nairobi', 1),
(10, 'Mombasa', 2),
(11, 'Kisumu', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `cid` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(2, 'John Mwangi', 'johnmwangi@gmail.com', '0712345678', 'Inquiry', 'I would like to know more about your services.'),
(4, 'Aisha Abdi', 'aishaabdi@gmail.com', '0723456789', 'Feedback', 'Great service, keep it up!'),
(5, 'David Otieno', 'davidotieno@gmail.com', '0734567890', 'Support', 'I need assistance with my account.'),
(6, 'Mary Wanjiru', 'marywanjiru@gmail.com', '0745678901', 'Question', 'What properties do you have available?');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `fid` int(50) NOT NULL,
  `uid` int(50) NOT NULL,
  `fdescription` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--
INSERT INTO `feedback` (`fid`, `uid`, `fdescription`, `status`, `date`) VALUES
(2, 15, 'Finding a house in Nairobi can be challenging, but this platform made it a breeze! I was able to find a lovely 2-bedroom apartment in Kilimani. Thank you for your user-friendly interface and helpful customer support.', 1, '2024-10-25'),
(3, 18, 'As a young professional, I was able to shortlist several properties in Westlands that fit my budget perfectly. The site provided great insights into the amenities and pricing of different areas.', 1, '2024-10-26'),
(4, 21, 'I had been searching for a place in Karen for months, and this website finally helped me find my dream home. The reviews and area information were incredibly helpful. Highly recommend!', 1, '2024-10-27'),
(5, 23, 'The team was incredibly proactive! They visited my property to take photos and listed it quickly, which helped me find a tenant in no time. Great job!', 1, '2024-10-28'),
(6, 24, 'I recently moved to Nairobi from Mombasa and needed an apartment close to my new office in Upper Hill. This site provided a variety of options and made my transition smooth. Thank you!', 0, '2024-10-29');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
  `pid` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `pcontent` longtext NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(50) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `bedroom` int(50) NOT NULL,
  `bathroom` int(50) NOT NULL,
  `balcony` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `hall` int(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `location` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `feature` longtext NOT NULL,
  `pimage` varchar(300) NOT NULL,
  `pimage1` varchar(300) NOT NULL,
  `pimage2` varchar(300) NOT NULL,
  `pimage3` varchar(300) NOT NULL,
  `pimage4` varchar(300) NOT NULL,
  `uid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `mapimage` varchar(300) NOT NULL,
  `topmapimage` varchar(300) NOT NULL,
  `groundmapimage` varchar(300) NOT NULL,
  `totalfloor` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--
INSERT INTO `property` (
    `pid`, `title`, `pcontent`, `type`, `bhk`, `stype`, 
    `bedroom`, `bathroom`, `balcony`, `kitchen`, `hall`, 
    `floor`, `size`, `price`, `location`, `city`, `state`, 
    `feature`, `pimage`, `pimage1`, `pimage2`, `pimage3`, 
    `pimage4`, `uid`, `status`, `mapimage`, `topmapimage`, 
    `groundmapimage`, `totalfloor`, `date`
) VALUES
(11, 
 'Nairobi Office Space', 
 '<p>Welcome to this prime office space located in the bustling city of Nairobi, Kenya. This property is designed to meet the needs of modern businesses.</p>', 
 'office', '2 BHK', 'sale', 
 1, 2, 3, 4, 5, 
 '3rd Floor', 4321, 897898, 
 'Mombasa Road, Near Nairobi National Park', 
 'Nairobi', 'Nairobi County', 
 '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swimming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Office</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Municipal Supply</li>\r\n</ul>\r\n</div>', 
 '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', 
 15, 'sold out', '', '', '', '', 
 '2020-04-03 00:28:14'),

(13, 
 'Nairobi Bungalow', 
 '<p>Welcome to this beautiful bungalow located in the vibrant city of Nairobi, Kenya. This property is perfect for families looking for comfort and convenience.</p>', 
 'bungalow', '2 BHK', 'sale', 
 3, 2, 2, 1, 1, 
 '4th Floor', 321, 987898, 
 'Main Road, Near Nairobi National Park', 
 'Nairobi', 'Nairobi County', 
 '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swimming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Bungalow</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>10 People</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Municipal Supply</li>\r\n</ul>\r\n</div>', 
 '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', 
 16, 'available', '', '', '', '', 
 '2020-04-03 00:28:14'),

(14, 
 'Nairobi Heights', 
 '<p>Nairobi Heights offers a stunning view of the city skyline and is perfect for modern living in Nairobi. Ideal for both families and young professionals.</p>', 
 'apartment', '3 BHK', 'rent', 
 3, 2, 1, 1, 1, 
 '3rd Floor', 4500, 12345678, 
 'Ngong Road, Near Prestige Mall', 
 'Nairobi', 'Nairobi', 
 '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>5 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swimming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>8 People</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Municipal</li>\r\n</ul>\r\n</div>', 
 'nairobi1.jpg', 'nairobi2.jpg', 'nairobi3.jpg', 'nairobi4.jpg', 'nairobi5.jpg', 
 15, 'available', '', '', '', '', 
 '2024-01-01 00:00:00'),

(15, 
 'Mombasa Beachfront', 
 '<p>Experience luxury living right on the shores of Mombasa. Mombasa Beachfront is designed for those who seek tranquility and the beauty of nature.</p>', 
 'villa', '4 BHK', 'rent', 
 4, 3, 2, 2, 1, 
 'Ground Floor', 8500, 23456789, 
 'Nyali Beach, Mombasa', 
 'Mombasa', 'Coast', 
 '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swimming Pool : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Villa</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>12 People</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Borehole</li>\r\n</ul>\r\n</div>', 
 'mombasa1.jpg', 'mombasa2.jpg', 'mombasa3.jpg', 'mombasa4.jpg', 'mombasa5.jpg', 
 20, 'available', '', '', '', '', 
 '2024-01-02 00:00:00'),

(16, 
 'Kisumu Lakeview', 
 '<p>Kisumu Lakeview provides stunning views of Lake Victoria and a serene environment. Perfect for those looking for peace and natural beauty.</p>', 
 'house', '2 BHK', 'rent', 
 2, 1, 1, 1, 1, 
 '1st Floor', 4000, 34567890, 
 'Kisumu Road, Kisumu', 
 'Kisumu', 'Nyanza', 
 '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>3 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Swimming Pool : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>House</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Dining Capacity : </span>6 People</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Municipal</li>\r\n</ul>\r\n</div>', 
 'kisumu1.jpg', 'kisumu2.jpg', 'kisumu3.jpg', 'kisumu4.jpg', 'kisumu5.jpg', 
 10, 'available', '', '', '', '', 
 '2024-01-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE `state` (
  `sid` int(50) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(2, 'Nairobi'),
(3, 'Mombasa'),
(4, 'Kisumu'),
(7, 'Nakuru'),
(9, 'Eldoret'),
(10, 'Meru'),
(15, 'Uasin Gishu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `uimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`, `utype`, `uimage`) VALUES
(14, 'Kwame', 'kwame@gmail.com', '0712345678', 'kwame', 'user', '3.jpg'),
(15, 'Amina', 'amina@gmail.com', '0723456789', 'amina', 'agent', '2.jpg'),
(16, 'Thabo', 'thabo@gmail.com', '0734567890', 'thabo', 'user', '1.jpg'),
(21, 'Fatou', 'fatou@gmail.com', '0745678901', 'fatou', 'agent', '2.jpg'),
(22, 'Chike', 'chike@gmail.com', '0756789012', 'chike', 'agent', '1.jpg'),
(23, 'Zuri', 'zuri@gmail.com', '0767890123', 'zuri', 'builder', '1.jpg'),
(24, 'Nia', 'nia@gmail.com', '0778901234', 'nia', 'builder', '3.jpg'),
(25, 'Tendai', 'tendai@gmail.com', '0789012345', 'tendai', 'builder', 'avatar-3.jpg');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
