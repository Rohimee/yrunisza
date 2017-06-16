-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 06:55 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yru_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `major_tbl`
--

CREATE TABLE `major_tbl` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major_tbl`
--

INSERT INTO `major_tbl` (`m_id`, `m_name`, `u_id`) VALUES
(1, 'com-sci', 1),
(2, 'com-edu', 1),
(3, 'com-sci', 2),
(4, 'computer education', 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE `subject_tbl` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_explanation_th` text NOT NULL,
  `s_explanation_en` text NOT NULL,
  `m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`s_id`, `s_name`, `s_explanation_th`, `s_explanation_en`, `m_id`) VALUES
(1, 'โครงงานวิทยาการคอมพิวเตอร์ 3', ' การทดลองหรือพัฒนาโครงงานตามสมมุติฐาน ทบทวนการวิเคราะห์และออกแบบระบบตามความต้องการที่เปลี่ยนไป การพัฒนาระบบ การทดสอบระบบย่อย การทดสอบระบบ การตรวจสอบความสมเหตุสมผลและการทวนสอบ แก้จุดบกพร่อง การวิเคราะห์ผลลัพธ์และสรุปผล จัดทำเอกสารระบบ นำเสนอผลการดำเนินโครงงาน', ' Experiment or develop project follows to the hypothesis, reconsider to system analysis and design as requirement change, project development, unit test, system test, validation and verification, debug, result analysis and conclusion, documentation and project presentation', 1),
(2, 'เทคโนโลยีสื่อสารไร้สาย', 'การสื่อสารไร้สายยุค 2.5G ได้รับการพัฒนาต่อยอดมาจากเทคโนโลยีในระดับ 2G แต่มีประสิทธิ-ภาพด้อยกว่ามาตรฐานการสื่อสารไร้สายยุค 3G', '2.5G wireless communications have evolved from 2G technology, but are inferior to the 3G wireless standard.', 1),
(3, 'ประมวลผลภาพ', 'วิชาการประมวลผลภาพ  เป็นวิชาที่ว่าด้วยการประมวลผลภาพที่อยู่ในรูปแบบสัญญาณดิจิตอล  และเป็นวิชาที่มีความสัมพันธ์กับศาสตร์แขนงอื่น ๆ อีกหลายแขนง  การที่จะเข้าใจได้หลักการประมวลผลภาพได้อย่างลึกซึ้ง  ผู้เรียนจะต้องมีความรู้พื้นฐานทางด้านคณิตศาสตร์  คอมพิวเตอร์  การประมวลผลสัญญาณดิจิตอลอยู่พอสมควร  เนื่องจากรายวิชานี้มีหัวข้อที่จะต้องกล่าวถึงเป็นจำนวนมาก  ซึ่งแต่ละหัวข้อมีความยากง่ายแตกต่างกันไป   การรวบรวมหัวข้อทั้งหมดเพื่อบรรยายในหนึ่งวิชาจึงไม่สามารถทำได้  ดังนั้นในรายวิชานี้จะเป็นเพียงการแนะนำความรู้เกี่ยวกับการประมวลผลภาพเบื้องต้นเพื่อเป็นพื้นฐานในการศึกษาระดับสูงต่อไป   หัวข้อหลักที่จะมีการเรียนการสอนในรายวิชานี้คือ วิธีการเก็บและแสดงข้อมูลภาพดิจิตอลด้วยวิธีการต่าง ๆ  วิธีการปรับปรุงข้อมูลภาพ เพื่อให้ได้ข้อมูลที่มีคุณภาพ  และศึกษาวิธีการวิเคราะห์ข้อมูลภาพ เพื่อให้สามารถเข้าใจความหมายของข้อมูลเหล่านั้น', 'Image processing It is the subject of image processing in the form of digital signals. And it is a subject that is related to many other branches of science to understand the principle of image processing profoundly. Students must have basic knowledge in computer mathematics, digital signal processing. This course has many topics to address. Each topic is difficult to different. All topics can not be gathered in one subject. Therefore, this course will only introduce knowledge about basic image processing as a basis for further study. The main topics to be taught in this course are: How to store and display digital images in various ways. To get quality information. And study the data analysis method. To be able to understand the meaning of those data.', 1),
(4, 'โปรแกรมประยุกต์เพื่อการศึกษา (Application Programs for Education)', 'งาน  อีกทั้งยังเป็นพื้นฐานในการศึกษาต่อและการประกอบอาชีพ  รวมทั้งพัฒนาผู้เรียนให้มีความรับผิดชอบ  มีวินัย  ใฝ่เรียนรู้และมีความมุ่งมั่นในการทำงาน', 'The work is also fundamental to continuing education and careers. Including developing learners with responsibility, discipline, learning, and commitment to work.', 2),
(5, 'เทคโนโลยีอินเทอร์เน็ต', 'ศึกษาและปฏิบัติเกี่ยวกับระบบการทำงานของอินเทอร์เน็ต ระบบเครือข่าย Protocol TCP/IP,Client – Server , DNS , SUBNet , FTP , Telnet , E – mail , WWW การติดตั้งระบบ อินเทอร์เน็ตส่วนบุคคล ปฏิบัติการใช้บริการต่าง ๆ ในอินเทอร์เน็ต การเลือกผู้ให้บริการ อินเทอร์เน็ต (ISP) ปฏิบัติการใช้อินเทอร์', 'Study and practice the Internet. Networking Protocol TCP / IP, Client-Server, DNS, SUBNET, FTP, Telnet, E-mail, WWW system installation. Personal internet Practical use of various services on the Internet. Choosing an Internet Service Provider (ISP)', 2),
(6, 'ระบบฐานข้อมูลทางการศึกษา', 'ฐานข้อมูลทรัพย์กรสารสนเทศสำนักวิทยบริการและเทคโนโลยีสารสนเทศ เป็นฐานข้อมูลรายการทรัพยากรสารสนเทศของสำนักวิทยบริการ ฯ ได้แก่ รายการบรรณานุกรมของหนังสือสารคดี บันเทิงคดี วิชาการ หนังสืออ้างอิงโครงงานปริญญาตรี วิทยานิพนธ์ รายงานการวิจัย รายชื่อวารสาร ดรรชนีบทความวารสาร', 'The Information Resource Center, Information Technology and Information Technology Center A database of information resources of the Academic Resource Center, including the bibliography of the documentary, the fiction, the academic literature, the reference book, the thesis, the thesis, the research report. List of journals Index articles journal', 2),
(7, 'การวิเคราะห์และออกแบบเชิงอ็อบเจกต์', 'หนังสือเล่มนี้เป็นตำราที่ใช้ประกอบการเรียนการสอนในวิชา2603472   การวิเคราะห์และการออกแบบเชิงวัตถุสำหรับนิสิตชั้นปีที่ 4   สาขาวิชาเทคโนโลยีสารสนเทศเพื่อธุรกิจ   ภาควิชาสถิติ   คณะพาณิชยศาสตร์และการบัญชี จุฬา   โดยผู้เขียนตั้งใจให้มีความแตกต่างจากหนังสือในเรื่องที่คล้ายคลึงกัน   ซึ่งส่วนใหญ่แล้วอธิบายวิธีการวาดแผนภาพ   UML   หรืออธิบายขบวนการพัฒนาระบบทั่วไป   หรืออธิบายการโปรแกรมในภาษาจาวา   หรือ C#   แต่ในตำราเล่มนี้', 'This book is a textbook used in instruction in 2603472. Object-Oriented Analysis and Design for Fourth-Year Students in Business Information Technology, Department of Statistics, Faculty of Commerce and Accountancy, Chulalongkorn University The authors intend to differentiate themselves from books on similar subjects. Mostly describe how to draw a UML diagram or describe a typical system development process. Or describe the program in Java or C #, but in this textbook.', 3),
(8, 'ประมวลผลภาพ', 'วิชาการประมวลผลภาพ  อยู่ในรูปแบบสัญญาณดิจิตอล  และเป็นวิชาที่มีความสัมพันธ์กับศาสตร์แขนงอื่น ๆ อีกหลายแขนง  การที่จะเข้าใจได้หลักการประมวลผลภาพได้อย่างลึกซึ้ง  ผู้เรียนจะต้องมีความรู้พื้นฐานทางด้านคณิตศาสตร์  คอมพิวเตอร์  การประมวลผลสัญญาณดิจิตอลอยู่พอสมควร  เนื่องจากรายวิชานี้มีหัวข้อที่จะต้องกล่าวถึงเป็นจำนวนมาก  ซึ่งแต่ละหัวข้อมีความยากง่ายแตกต่างกันไป   การรวบรวมหัวข้อทั้งหมดเพื่อบรรยายในหนึ่งวิชาจึงไม่สามารถทำได้  ดังนั้นในรายวิชานี้จะเป็นเพียงการแนะนำความรู้เกี่ยวกับการประมวลผลภาพเบื้องต้นเพื่อเป็นพื้นฐานในการศึกษาระดับสูงต่อไป   หัวข้อหลักที่จะมีการเรียนการสอนในรายวิชานี้คือ วิธีการเก็บและแสดงข้อมูลภาพดิจิตอลด้วยวิธีการต่าง ๆ  วิธีการปรับปรุงข้อมูลภาพ เพื่อให้ได้ข้อมูลที่มีคุณภาพ  และศึกษาวิธีการวิเคราะห์ข้อมูลภาพ เพื่อให้สามารถเข้าใจความหมายของข้อมูลเหล่านั้น', 'Image processing It is the subject of image processing in the form of digital signals. And it is a subject that is related to many other branches of science to understand the principle of image processing profoundly. Students must have basic knowledge in computer mathematics, digital signal processing. This course has many topics to address. Each topic is difficult to different. All topics can not be gathered in one subject. Therefore, this course will only introduce knowledge about basic image processing as a basis for further study. The main topics to be taught in this course are: How to store and display digital images in various ways. To get quality information. And study the data analysis method. To be able to understand the meaning of those data.', 3),
(9, 'เทคโนโลยีสื่อสารไร้สาย', 'การสื่อสารไร้สายยุค 2.5G ได้รับการพัฒนาต่อยอดมาจากเทคโนโลยีในระดับ 2G แต่มีประสิทธิ-ภาพด้อยกว่ามาตรฐานการสื่อสาร', '2.5G wireless communications have evolved from 2G technology, but are inferior to the 3G wireless.', 3),
(10, 'โครงงานวิจัยทางชีววิทยา 2 Research Project in Biology ', 'โครงการวิจัย เป็นส่วนหนึ่งของการศึกษาตามเกณฑ์ของแต่ละหลักสูตร โดยศึกษาปัญหาที่นักศึกษาสนใจเพื่อพัฒนาเป็นโครงร่างงานวิจัย นักศึกษาจะต้องศึกษาอย่างละเอียดลึกซึ้งและใช้เวลาพอสมควร จนเกิดความรู้ความเข้าใจในปัญหานั้นๆ อย่างถ่องแท้ ทั้งนี้โดยการแนะนาของอาจารย์ที่ปรึกษางานวิจัย', 'The research program is part of the study of each course. Study the problems that students are interested in to develop a research framework. Students are required to study thoroughly and take a reasonable amount of time. Until the knowledge of the problem is thoroughly understood by the advice of research advisors.', 4),
(11, 'ระบบฐานข้อมูลทางการศึกษา', 'ฐานข้อมูลทรัพย์กรสารสนเทศสำนักวิทยบริการและเทคโนโลยีสารสนเทศ เป็นฐานข้อมูลรายการทรัพยากรสารสนเทศของสำนักวิทยบริการ ฯ ได้แก่ รายการบรรณานุกรมของหนังสือสารคดี บันเทิงคดี วิชาการ หนังสืออ้างอิงโครงงานปริญญาตรี วิทยานิพนธ์ รายงานการวิจัย รายชื่อวารสาร ดรรชนีบทความวารสาร', 'The Information Resource Center, Information Technology and Information Technology Center A database of information resources of the Academic Resource Center, including the bibliography of the documentary, the fiction, the academic literature, the reference book, the thesis, the thesis, the research report. List of journals Index articles journal', 4),
(12, 'โปรแกรมประยุกต์เพื่อการศึกษา (Application Programs for Education)', 'งาน  อีกทั้งยังเป็นพื้นฐานในการศึกษาต่อและการประกอบอาชีพ   มีวินัย  ใฝ่มุ่งมั่นในการทำงาน', 'The work is also fundamental to continuing education and careers. Including developing learners with responsibility, discipline, learning, and commitment to work.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `university_tbl`
--

CREATE TABLE `university_tbl` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university_tbl`
--

INSERT INTO `university_tbl` (`u_id`, `u_name`) VALUES
(1, 'YRU'),
(2, 'UNISZA'),
(4, 'PSU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `major_tbl`
--
ALTER TABLE `major_tbl`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `university_tbl`
--
ALTER TABLE `university_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `major_tbl`
--
ALTER TABLE `major_tbl`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `university_tbl`
--
ALTER TABLE `university_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `major_tbl`
--
ALTER TABLE `major_tbl`
  ADD CONSTRAINT `major_tbl_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `university_tbl` (`u_id`);

--
-- Constraints for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD CONSTRAINT `subject_tbl_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `major_tbl` (`m_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
