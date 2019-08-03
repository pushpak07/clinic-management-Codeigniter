-- --------------------------------------------------------

--
-- Table structure for table `advice_prescriptiion`
--

CREATE TABLE `advice_prescriptiion` (
  `advice_prescription_id` int(11) UNSIGNED NOT NULL,
  `advice_id` int(11) DEFAULT NULL,
  `prescription_id` int(11) NOT NULL,
  `appointment_id` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advice_prescriptiion`
--

INSERT INTO `advice_prescriptiion` (`advice_prescription_id`, `advice_id`, `prescription_id`, `appointment_id`, `status`) VALUES
(1, 10, 1, 'A17ZUC7', 0),
(2, 11, 1, 'A17ZUC7', 0),
(5, 10, 4, 'A17EV6W', 0),
(6, 10, 4, 'A17EV6W', 0),
(10, 10, 6, 'A170HJI', 0),
(11, 11, 6, 'A170HJI', 0),
(12, 11, 6, 'A170HJI', 0),
(15, 10, 8, 'A170QID', 0),
(16, 11, 8, 'A170QID', 0),
(19, 11, 10, 'A174Z4O1', 0),
(20, 31, 10, 'A174Z4O1', 0),
(21, 11, 11, 'A170AB1E', 0),
(22, 32, 11, 'A170AB1E', 0),
(25, 11, 13, 'A179RAZ7', 0),
(26, 33, 13, 'A179RAZ7', 0),
(27, 11, 13, 'A179RAZ7', 0),
(28, 10, 14, 'A178ATZ', 0),
(29, 11, 14, 'A178ATZ', 0),
(34, 10, 17, 'A17J5Q9', 0),
(35, 11, 17, 'A17J5Q9', 0),
(37, 35, 19, 'A17NM0G', 0),
(38, 36, 20, 'A178SF7', 0),
(39, 34, 21, 'A17VJHU', 0),
(40, 37, 22, 'A17HCFE9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `id` int(11) UNSIGNED NOT NULL,
  `appointment_id` varchar(250) NOT NULL,
  `patient_id` varchar(250) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `schedul_id` int(11) NOT NULL,
  `sequence` varchar(100) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `get_date_time` datetime NOT NULL,
  `get_by` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_tbl`
--

INSERT INTO `appointment_tbl` (`id`, `appointment_id`, `patient_id`, `venue_id`, `doctor_id`, `schedul_id`, `sequence`, `problem`, `get_date_time`, `get_by`, `date`, `status`) VALUES
(23, 'A17VA8KU', '123', 1, 1, 7, '10:00 AM', 'tuh                                     ', '2017-04-20 12:07:44', 1, '2017-04-20', 1),
(24, 'A17SYFNL', 'hanan123', 1, 1, 7, '11:00 AM', '                          ee           ', '2017-04-20 12:09:30', 1, '2017-04-20', 1),
(25, 'A17KEMZ9', 'Tanzil1', 1, 1, 7, '03:30 PM', '                            tes         ', '2017-04-20 12:13:46', 1, '2017-04-20', 1),
(26, 'A17I0ZWW', '123', 1, 1, 7, '1', 'Problem', '2017-04-22 08:25:16', 0, '2017-04-22', 1),
(27, 'A17QI9NP', '123', 1, 1, 7, '10:00 AM', '           test                          ', '2017-04-22 11:18:29', 1, '2017-04-23', 1),
(28, 'A17YMRV8', 'tss', 1, 1, 7, '1', '            test                             ', '2017-04-26 10:43:33', 1, '2017-04-27', 1),
(29, 'A174Z4O1', 'tss', 1, 1, 7, '11:30 AM', '       test                              ', '2017-04-26 10:44:53', 1, '2017-04-28', 1),
(30, 'A17A3TBE', 'tanzil1', 1, 1, 7, '1', 'teszt', '2017-04-27 01:36:59', 0, '2017-04-27', 1),
(31, 'A170AB1E', 'tuhin123', 1, 1, 7, '10:00 AM', '            esss                         ', '2017-04-30 07:47:55', 2, '2017-05-01', 1),
(32, 'A179RAZ7', 'masud', 1, 1, 7, '2', 'test             ', '2017-04-30 07:56:38', 2, '2017-05-01', 1),
(33, 'A17J7Y8U', 'hamid', 1, 1, 7, '10:00 AM', 'Problems', '2017-05-02 08:09:18', 0, '2017-05-03', 1),
(34, 'A17PBQTS', 'masud', 1, 1, 7, '10:30 AM', '      tes                               ', '2017-05-02 08:39:32', 1, '2017-05-03', 1),
(35, 'A17QKUT1', 'Mss', 1, 1, 7, '03:30 PM', 'Problems', '2017-05-02 08:54:15', 0, '2017-05-03', 1),
(36, 'A17LZQJM', 'mes', 1, 1, 7, '10', 'Problems                      ', '2017-05-02 08:57:32', 1, '2017-05-03', 1),
(37, 'A17HCFE9', 'mmm', 1, 1, 7, '12:00 PM', 'Problems                ', '2017-05-02 10:03:10', 2, '2017-05-03', 1),
(38, 'A17ZYDWI', 'tuhin123', 1, 1, 7, '12:00 PM', '                                     gfghdtydth', '2017-05-02 10:27:47', 1, '2017-05-10', 1),
(39, 'A17RUXND', 'naeem123', 1, 1, 7, '10:30 AM', '                                         dsfsdfasdfas', '2017-05-02 10:34:58', 1, '2017-05-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `app_setting`
--

CREATE TABLE `app_setting` (
  `id` int(11) NOT NULL,
  `language` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_setting`
--

INSERT INTO `app_setting` (`id`, `language`) VALUES
(1, 'english');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `post_by` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `post_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`id`, `title`, `details`, `picture`, `post_by`, `post_date`, `post_category`) VALUES
(4, 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/blog/com.png', 1, '2016-10-08', 2),
(5, 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/blog/commen.jpg', 1, '2016-10-08', 2),
(6, 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis ', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/blog/blog_1.jpg', 1, '2016-10-08', 1),
(7, 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis ', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/blog/blog-d.jpg', 1, '2016-10-08', 1),
(8, 'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis ', '<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh.</p>', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/blog/blog_3.jpg', 1, '2016-10-08', 1),
(9, 'Demo bdtask Hospital Limited', '<p xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div>', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/blog/blog_2.jpg', 1, '2017-05-02', 1),
(10, 'This is demo text Title', '<p xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/blog/doctor.png', 1, '2017-05-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `custom_sms_info`
--

CREATE TABLE `custom_sms_info` (
  `custom_sms_id` int(11) NOT NULL,
  `reciver` varchar(100) NOT NULL,
  `gateway` text NOT NULL,
  `message` text NOT NULL,
  `sms_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_sms_info`
--

INSERT INTO `custom_sms_info` (`custom_sms_id`, `reciver`, `gateway`, `message`, `sms_date_time`) VALUES
(5, '01751194212', 'default', 'Dr.John day. Hello, Tuhin. Your ID: tuhin123, Appointment ID: A170AB1E, Serial: 02:30 PM and Appointment Date: 01 May 2017. Thank you for the Appointment.', '2017-04-30 02:35:36'),
(6, '01751194212', 'default', 'Dr.John day. Hello, Tuhin. Your ID: tuhin123, Appointment ID: A170AB1E, Serial: 02:30 PM and Appointment Date: 01 May 2017. Thank you for the Appointment.', '2017-04-30 02:37:37'),
(7, '01751194212', 'default', 'Dr.John day. Hello, Tuhin. Your ID: tuhin123, Appointment ID: A170AB1E, Serial: 02:30 PM and Appointment Date: 01 May 2017. Thank you for the Appointment.', '2017-05-02 07:52:43'),
(8, '01751194212', 'default', 'Dr.John day. Hello, Tuhin. Your ID: tuhin123, Appointment ID: A170AB1E, Serial: 02:30 PM and Appointment Date: 01 May 2017. Thank you for the Appointment.', '2017-05-02 07:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_advice`
--

CREATE TABLE `doctor_advice` (
  `advice_id` int(11) UNSIGNED NOT NULL,
  `create_by` int(11) NOT NULL,
  `advice_status` int(11) NOT NULL DEFAULT '1',
  `advice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_advice`
--

INSERT INTO `doctor_advice` (`advice_id`, `create_by`, `advice_status`, `advice`) VALUES
(10, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(11, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(12, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(13, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(14, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(15, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(18, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(20, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(23, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(27, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(28, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(29, 1, 1, 'atests'),
(30, 1, 1, 'ta'),
(31, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(32, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(33, 1, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(34, 1, 1, 'dfdsfdsg'),
(35, 1, 1, 'dfgdsfg'),
(36, 1, 1, 'sdfsdfs'),
(37, 1, 1, 'sfsdfsdf'),
(38, 1, 1, 'testing advice');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `doctor_details_id` int(11) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `doctor_short_bio` text,
  `doctor_details_bio` text,
  `academic_info` text,
  `work_experience` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_tbl`
--

CREATE TABLE `doctor_tbl` (
  `doctor_id` int(11) UNSIGNED NOT NULL,
  `log_id` int(11) NOT NULL,
  `doctor_name` varchar(120) NOT NULL,
  `department` text NOT NULL,
  `designation` varchar(120) NOT NULL,
  `degrees` text NOT NULL,
  `specialist` varchar(250) NOT NULL,
  `doctor_exp` text,
  `birth_date` date NOT NULL,
  `sex` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `doctor_phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `service_place` text,
  `about_me` text,
  `picture` varchar(100) DEFAULT NULL,
  `doctor_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor_tbl`
--

INSERT INTO `doctor_tbl` (`doctor_id`, `log_id`, `doctor_name`, `department`, `designation`, `degrees`, `specialist`, `doctor_exp`, `birth_date`, `sex`, `blood_group`, `doctor_phone`, `address`, `service_place`, `about_me`, `picture`, `doctor_status`) VALUES
(1, 1, 'Dr.John day', 'Skin & Allergy ', 'Assistant Professor', 'MBBS, DDB, FRSH', 'Skin , Allergy & V.D Specialist', 'CONSULTANT GYNEA & OBS OTS MBS BSMMU (P.G HOSPITAL) BANGLADESH LASER HOSPITAL IN DHAKA', '1985-05-30', 'Female', 'A-', '0175127543', '                                                                                                                                                                                                                            <p>176 Ellis Avenue, Main Road | Na', '196 Ellis Avenue, Main Road | Banasree Dhaka -1215', '                                                                                                                                                                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n                                                                                                                                                                                                             ', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/doctor/c.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_config`
--

CREATE TABLE `email_config` (
  `email_config_id` int(11) NOT NULL,
  `at_appointment` int(11) NOT NULL,
  `at_registration` int(11) NOT NULL,
  `reminder` int(11) NOT NULL,
  `protocol` text NOT NULL,
  `mailpath` text NOT NULL,
  `mailtype` text NOT NULL,
  `sender` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_config`
--

INSERT INTO `email_config` (`email_config_id`, `at_appointment`, `at_registration`, `reminder`, `protocol`, `mailpath`, `mailtype`, `sender`, `status`) VALUES
(1, 1, 1, 1, 'sendmail', '/usr/sbin/sendmail', 'html', 'doctorss@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_delivery`
--

CREATE TABLE `email_delivery` (
  `email_delivery_id` int(11) NOT NULL,
  `email_ss_id` int(11) DEFAULT NULL,
  `reciver_email` varchar(120) NOT NULL,
  `delivery_date_time` datetime NOT NULL,
  `email_info_id` int(11) DEFAULT NULL,
  `message` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_delivery`
--

INSERT INTO `email_delivery` (`email_delivery_id`, `email_ss_id`, `reciver_email`, `delivery_date_time`, `email_info_id`, `message`) VALUES
(1, NULL, 'text1@gmail.com', '2017-04-22 08:09:16', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! text1</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : text1</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : 1234, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-04-22 08:09:16. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n'),
(2, NULL, 'admin@gmail.com', '2017-04-22 08:25:16', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Test User</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Test User</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : 123, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17I0ZWW, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 1 </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 22 April 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(3, NULL, 'admin@gmail.com', '2017-04-22 11:18:30', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Test User</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Test User</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : 123, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17QI9NP, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 10:00 AM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 23 April 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(4, NULL, 'Naeem@gmail.com', '2017-04-26 08:05:33', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Naeem</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Naeem</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : Naeem, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-04-26 08:05:32. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n'),
(5, NULL, 'Naeem12@gmail.com', '2017-04-26 10:43:12', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Naeem12</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Naeem12</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : tss, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-04-26 10:43:12. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n');
INSERT INTO `email_delivery` (`email_delivery_id`, `email_ss_id`, `reciver_email`, `delivery_date_time`, `email_info_id`, `message`) VALUES
(6, NULL, 'Naeem12@gmail.com', '2017-04-26 10:43:34', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Naeem12</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Naeem12</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : tss, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17YMRV8, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 1 </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 27 April 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(7, NULL, 'Naeem12@gmail.com', '2017-04-26 10:44:54', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Naeem12</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Naeem12</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : tss, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A174Z4O1, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 11:30 AM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 28 April 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(8, NULL, 'tanzil@gmail.com', '2017-04-27 01:36:59', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Md Tanzil</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Md Tanzil</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : Tanzil1, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17A3TBE, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 1 </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 27 April 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(9, NULL, 'tuhin12@gmail.com', '2017-04-30 07:47:55', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Tuhin</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Tuhin</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : tuhin123, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A170AB1E, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 10:00 AM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 01 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(10, NULL, 'masud@gmail.com', '2017-04-30 07:55:40', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Md Masud</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Md Masud</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : masud, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-04-30 07:55:40. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n');
INSERT INTO `email_delivery` (`email_delivery_id`, `email_ss_id`, `reciver_email`, `delivery_date_time`, `email_info_id`, `message`) VALUES
(11, NULL, 'masud@gmail.com', '2017-04-30 07:56:38', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Md Masud</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Md Masud</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : masud, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A179RAZ7, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 2 </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 01 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(12, NULL, 'hamid@gmail.com', '2017-05-02 08:08:52', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Md Hamid Khan</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Md Hamid Khan</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : hamid, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-05-02 08:08:52. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n'),
(13, NULL, 'hamid@gmail.com', '2017-05-02 08:09:18', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Md Hamid Khan</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Md Hamid Khan</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : hamid, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17J7Y8U, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 10:00 AM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 03 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(14, NULL, 'masud@gmail.com', '2017-05-02 08:39:32', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Md Masud</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Md Masud</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : masud, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17PBQTS, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 10:30 AM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 03 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(15, NULL, 'mss@gmail.com', '2017-05-02 06:53:44', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Ms Tithi</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Ms Tithi</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : Mss, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-05-02 06:53:44. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n');
INSERT INTO `email_delivery` (`email_delivery_id`, `email_ss_id`, `reciver_email`, `delivery_date_time`, `email_info_id`, `message`) VALUES
(16, NULL, 'mss@gmail.com', '2017-05-02 08:54:16', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Ms Tithi</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Ms Tithi</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : Mss, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17QKUT1, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 03:30 PM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 03 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(17, NULL, 'mse@gmail.com', '2017-05-02 06:57:04', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Ms Meeeee</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Ms Meeeee</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : mes, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-05-02 06:57:04. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n'),
(18, NULL, 'mse@gmail.com', '2017-05-02 08:57:32', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Ms Meeeee</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Ms Meeeee</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : mes, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17LZQJM, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 10 </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 03 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(19, NULL, 'tuhin12@gmail.com', '2017-05-02 10:27:47', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Tuhin</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Tuhin</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : tuhin123, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17ZYDWI, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 12:00 PM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 10 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(20, NULL, 'naeem@gmail.com', '2017-05-02 08:34:26', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Naeem Khan</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Naeem Khan</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : naeem123, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-05-02 08:34:26. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n');
INSERT INTO `email_delivery` (`email_delivery_id`, `email_ss_id`, `reciver_email`, `delivery_date_time`, `email_info_id`, `message`) VALUES
(21, NULL, 'naeem@gmail.com', '2017-05-02 10:34:58', NULL, '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Naeem Khan</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr.John day .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Naeem Khan</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : naeem123, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : A17RUXND, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : 10:30 AM </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : 04 May 2017. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>'),
(22, NULL, 'tanzil4091@gmail.com', '2017-05-02 12:37:08', NULL, '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! Tanzil Ahmad</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : Tanzil Ahmad</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : dsfsdf, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : 2017-05-02 12:37:08. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n');

-- --------------------------------------------------------

--
-- Table structure for table `email_info`
--

CREATE TABLE `email_info` (
  `email_info_id` int(11) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_phone` varchar(111) NOT NULL,
  `patient_email` varchar(111) DEFAULT NULL,
  `appointment_date` datetime NOT NULL,
  `appointment_id` varchar(111) NOT NULL,
  `status` int(11) DEFAULT '0',
  `email_counter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_info`
--

INSERT INTO `email_info` (`email_info_id`, `patient_id`, `doctor_id`, `patient_phone`, `patient_email`, `appointment_date`, `appointment_id`, `status`, `email_counter`) VALUES
(1, '123', 1, '01751194212', 'admin@gmail.com', '2017-04-22 10:00:00', 'A17I0ZWW', 0, 0),
(2, '123', 1, '01751194212', 'admin@gmail.com', '2017-04-23 10:00:00', 'A17QI9NP', 0, 0),
(3, 'tss', 1, '1234567890', 'Naeem12@gmail.com', '2017-04-27 10:00:00', 'A17YMRV8', 0, 0),
(4, 'tss', 1, '1234567890', 'Naeem12@gmail.com', '2017-04-28 10:00:00', 'A174Z4O1', 0, 0),
(5, 'Tanzil1', 1, '01922296392', 'tanzil@gmail.com', '2017-04-27 10:00:00', 'A17A3TBE', 0, 0),
(6, 'tuhin123', 1, '01751194212', 'tuhin12@gmail.com', '2017-05-01 10:00:00', 'A170AB1E', 0, 0),
(7, 'masud', 1, '01751194212', 'masud@gmail.com', '2017-05-01 10:00:00', 'A179RAZ7', 0, 0),
(8, 'hamid', 1, '01751194212', 'hamid@gmail.com', '2017-05-03 10:00:00', 'A17J7Y8U', 0, 0),
(9, 'masud', 1, '01751194212', 'masud@gmail.com', '2017-05-03 10:00:00', 'A17PBQTS', 0, 0),
(10, 'Mss', 1, '01751194212', 'mss@gmail.com', '2017-05-03 10:00:00', 'A17QKUT1', 0, 0),
(11, 'mes', 1, '01751194212', 'mse@gmail.com', '2017-05-03 10:00:00', 'A17LZQJM', 0, 0),
(12, 'MMM', 1, '234234234', NULL, '2017-05-03 10:00:00', 'A17HCFE9', 0, 0),
(13, 'tuhin123', 1, '01751194212', 'tuhin12@gmail.com', '2017-05-10 10:00:00', 'A17ZYDWI', 0, 0),
(14, 'naeem123', 1, '54345325324', 'naeem@gmail.com', '2017-05-04 10:00:00', 'A17RUXND', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `email_schedule`
--

CREATE TABLE `email_schedule` (
  `email_ss_id` int(11) NOT NULL,
  `email_temp_id` int(11) NOT NULL,
  `email_ss_name` text NOT NULL,
  `email_schedule` varchar(100) NOT NULL,
  `email_ss_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_schedule`
--

INSERT INTO `email_schedule` (`email_ss_id`, `email_temp_id`, `email_ss_name`, `email_schedule`, `email_ss_status`) VALUES
(2, 7, 'Schedule One', '2:0:0', 1),
(3, 7, 'Schedule Two', '1:2:3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `email_temp_id` int(11) NOT NULL,
  `email_temp_name` text NOT NULL,
  `email_template` longtext NOT NULL,
  `email_temp_status` int(11) DEFAULT '1',
  `default_status` int(11) NOT NULL DEFAULT '0',
  `template_type` int(11) NOT NULL DEFAULT '0',
  `set_default` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`email_temp_id`, `email_temp_name`, `email_template`, `email_temp_status`, `default_status`, `template_type`, `set_default`) VALUES
(2, 'Template One', '                                                                          \r\n  \r\n  \r\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Doctoress</title>\r\n\r\n    <style type=\"text/css\">\r\n\r\n\r\n     @media only screen and (max-width: 680px){\r\n        body{width:100% !important; min-width:100% !important;} \r\n        \r\n        table[id=\"emailBody\"],\r\n        table[class=\"flexibleContainer\"],\r\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\r\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\r\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\r\n  \r\n      }\r\n   </style>\r\n\r\n\r\n  \r\n\r\n\r\n  \r\n\r\n    <center style=\"background-color:#E1E1E1;\">\r\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" height=\"100%\">\r\n       <tbody><tr>\r\n         <td align=\"center\" valign=\"top\">\r\n\r\n\r\n            <table id=\"emailBody\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n\r\n             <tbody><tr>\r\n               <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\r\n                                   Hi! %patient_name%</h1>\r\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\r\n                                    Your Appointment Information</h2>\r\n                                 </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n\r\n             <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#000;line-height:135%;\">\r\n                                      Thnks for your appointment request to %doctor_name% .\r\n                                     This is an automatic system generated email as with na\r\n                                      appointment.\r\n                                      Your appointment details as below...\r\n                                    </p>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n         \r\n              <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n                  <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                   <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"700\">\r\n                         <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" width=\"700\" valign=\"top\">\r\n\r\n                             <table align=\"left\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"flexibleContainerBox\" align=\"left\" valign=\"middle\">\r\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                                      <tbody><tr>\r\n                                       <td style=\"margin-left: 1em;\">\r\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\r\n                                            Your name : %patient_name%</h3>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            Your ID : %patient_id%, </div>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            Appointment ID : %appointment_id%, </div>\r\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            Serial : %sequence% </div>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            and Appointment Date : %appointment_date%. \r\n                                          </div>\r\n                                        </td>\r\n                                     </tr>\r\n                                   </tbody></table>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n\r\n             <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    \r\n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\r\n                                      Thank you for the Appointment\r\n                                    </div>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n         \r\n        \r\n      </tbody></table>\r\n    \r\n  \r\n\r\n</td></tr></tbody></table></center>                                                                  ', 1, 0, 0, 0),
(4, 'Default Template', '\n \n  \n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  \n\n\n  \n\n    <center style=\"background-color:#E1E1E1;\">\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" width=\"100%\" height=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n       <tbody><tr>\n         <td valign=\"top\" align=\"center\">\n\n\n            <table id=\"emailBody\" width=\"700\" bgcolor=\"#FFFFFF\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n\n             <tbody><tr>\n               <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! %patient_name%</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Appointment Information</h2>\n                                 </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to %doctor_name% .\n                                     This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td valign=\"top\" align=\"center\">\n                  <table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                   <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                         <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\">\n\n                             <table width=\"100%\" align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"flexibleContainerBox\" valign=\"middle\" align=\"left\">\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                                      <tbody><tr>\n                                       <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : %patient_name%</h3>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Your ID : %patient_id%, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Appointment ID : %appointment_id%, </div>\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            Serial : %sequence% </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Appointment Date : %appointment_date%. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </tbody></table>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n                            </td>\n                         </tr>\n                       </tbody></table>\n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td valign=\"top\" align=\"center\">\n\n                  <table style=\"color:#FFFFFF;\" width=\"100%\" bgcolor=\"#3498db\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                    <tbody><tr>\n                     <td valign=\"top\" align=\"center\">\n\n                        <table class=\"flexibleContainer\" width=\"700\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n                          <tbody><tr>\n                           <td class=\"flexibleContainerCell\" valign=\"top\" width=\"700\" align=\"center\">\n\n                            \n                              <table width=\"100%\" border=\"0\" cellpadding=\"30\" cellspacing=\"0\">\n                                <tbody><tr>\n                                 <td class=\"textContent\" valign=\"top\" align=\"center\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </tbody></table>\n\n                            </td>\n                         </tr>\n                       </tbody></table>\n                        \n                      </td>\n                   </tr>\n                 </tbody></table>\n                </td>\n             </tr>\n\n         \n        \n      </tbody></table>\n    \n  \n\n</td></tr></tbody></table></center>', 1, 1, 0, 1),
(5, 'Template One', '                                                                                                                                                    \r\n \r\n  \r\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Doctoress</title>\r\n\r\n    <style type=\"text/css\">\r\n\r\n\r\n     @media only screen and (max-width: 680px){\r\n        body{width:100% !important; min-width:100% !important;} \r\n        \r\n        table[id=\"emailBody\"],\r\n        table[class=\"flexibleContainer\"],\r\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\r\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\r\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\r\n  \r\n      }\r\n   </style>\r\n\r\n\r\n  \r\n\r\n\r\n \r\n\r\n   <center style=\"background-color:#E1E1E1;\">\r\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" height=\"100%\">\r\n       <tbody><tr>\r\n          <td align=\"center\" valign=\"top\">\r\n\r\n\r\n           <table id=\"emailBody\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n\r\n              <tbody><tr>\r\n                <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                      <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                            <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                  <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\r\n                                   Hi! %patient_name%</h1>\r\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\r\n                                   Your Registration Information</h2>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n\r\n             <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                      <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                            <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                  <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#000;line-height:135%;\">\r\n                                      Thnks for your appointment request to Dr. Doctor name .\r\n                                      This is an automatic system generated email as with na\r\n                                      appointment.\r\n                                      Your appointment details as below...\r\n                                    </p>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n         \r\n              <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n                  <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                   <tbody><tr>\r\n                      <td align=\"center\" valign=\"top\">\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"700\">\r\n                         <tbody><tr>\r\n                            <td class=\"flexibleContainerCell\" width=\"700\" valign=\"top\">\r\n\r\n                             <table align=\"left\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                  <td class=\"flexibleContainerBox\" align=\"left\" valign=\"middle\">\r\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                                      <tbody><tr>\r\n                                        <td style=\"margin-left: 1em;\">\r\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\r\n                                            Your name : %patient_name%</h3>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                             Your ID : %patient_id%, </div>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            and Date : %date%. \r\n                                          </div>\r\n                                        </td>\r\n                                     </tr>\r\n                                   </tbody></table>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n\r\n             <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                      <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                            <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                  <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    \r\n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\r\n                                      Thank you for the Appointment\r\n                                    </div>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n         \r\n       \r\n     </tbody></table>\r\n    \r\n \r\n\r\n                                                                  </td></tr></tbody></table></center>                                                                  ', 1, 0, 1, 0),
(6, 'Default Template', '<!DOCTYPE html\">\n <html>\n  <head>\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    <title>Doctoress</title>\n\n    <style type=\"text/css\">\n\n\n     @media only screen and (max-width: 680px){\n        body{width:100% !important; min-width:100% !important;} \n        \n        table[id=\"emailBody\"],\n        table[class=\"flexibleContainer\"],\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\n  \n      }\n   </style>\n\n\n  </head>\n\n\n <body bgcolor=\"#E1E1E1\" leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">\n\n   <center style=\"background-color:#E1E1E1;\">\n      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\">\n       <tr>\n          <td align=\"center\" valign=\"top\" >\n\n\n           <table bgcolor=\"#FFFFFF\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" id=\"emailBody\">\n\n              <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <h1 style=\"color:#FFFFFF;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\n                                   Hi! %patient_name%</h1>\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\n                                    Your Registration Information</h2>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#fff;line-height:135%;\">\n                                      Thnks for your appointment request to Dr. Jhon Dev .\n                                      This is an automatic system generated email as with na\n                                      appointment.\n                                      Your appointment details as below...\n                                    </p>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n         \n              <tr>\n                <td align=\"center\" valign=\"top\">\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                   <tr>\n                      <td align=\"center\" valign=\"top\">\n                        <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                         <tr>\n                            <td valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                             <table align=\"left\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"left\" valign=\"middle\" class=\"flexibleContainerBox\">\n                                    <table class=\"flexibleContainerBoxNext\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" style=\"max-width: 100%;\">\n                                      <tr>\n                                        <td style=\"margin-left: 1em;\">\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\n                                            Your name : %patient_name%</h3>\n                                         <div  style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                             Your ID : %patient_id%, </div>\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\n                                            and Date : %date%. \n                                          </div>\n                                        </td>\n                                     </tr>\n                                   </table>\n                                  </td>\n                               </tr>\n                             </table>\n                            </td>\n                         </tr>\n                       </table>\n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n\n             <tr>\n                <td align=\"center\" valign=\"top\">\n\n                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"color:#FFFFFF;\" bgcolor=\"#3498db\">\n                    <tr>\n                      <td align=\"center\" valign=\"top\">\n\n                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"700\" class=\"flexibleContainer\">\n                          <tr>\n                            <td align=\"center\" valign=\"top\" width=\"700\" class=\"flexibleContainerCell\">\n\n                            \n                              <table border=\"0\" cellpadding=\"30\" cellspacing=\"0\" width=\"100%\">\n                                <tr>\n                                  <td align=\"center\" valign=\"top\" class=\"textContent\">\n                                    \n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\n                                      Thank you for the Appointment\n                                    </div>\n                                  </td>\n                               </tr>\n                             </table>\n\n                            </td>\n                         </tr>\n                       </table>\n                        \n                      </td>\n                   </tr>\n                 </table>\n                </td>\n             </tr>\n\n         </td>\n       </tr>\n     </table>\n    </center>\n </body>\n</html>\n', 1, 1, 1, 1),
(7, 'Template Two', '                                                                                                               \r\n  \r\n  \r\n    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Doctoress</title>\r\n\r\n    <style type=\"text/css\">\r\n\r\n\r\n     @media only screen and (max-width: 680px){\r\n        body{width:100% !important; min-width:100% !important;} \r\n        \r\n        table[id=\"emailBody\"],\r\n        table[class=\"flexibleContainer\"],\r\n       td[class=\"flexibleContainerCell\"] {width:100% !important;}\r\n        td[class=\"flexibleContainerBox\"], td[class=\"flexibleContainerBox\"] table {display: block;width: 100%;text-align: left;}\r\n       table[class=\"flexibleContainerBoxNext\"]{padding-top: 10px !important;}\r\n  \r\n      }\r\n   </style>\r\n\r\n\r\n  \r\n\r\n\r\n  \r\n\r\n    <center style=\"background-color:#E1E1E1;\">\r\n      <table id=\"bodyTable\" style=\"table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" height=\"100%\">\r\n       <tbody><tr>\r\n         <td align=\"center\" valign=\"top\">\r\n\r\n\r\n            <table id=\"emailBody\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n\r\n             <tbody><tr>\r\n               <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    <h1 style=\"color:#fff;line-height:100%;font-family:Helvetica,Arial,sans-serif;font-size:35px;font-weight:normal;margin-bottom:5px;text-align:center;\">\r\n                                   Hi! %patient_name%</h1>\r\n                                   <h2 style=\"text-align:center;font-weight:normal;font-family:Helvetica,Arial,sans-serif;font-size:23px;margin-bottom:10px;color:#205478;line-height:135%;\">\r\n                                    Your Appointment Information</h2>\r\n                                 </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n\r\n             <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    <p style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#000;line-height:135%;\">\r\n                                      Thnks for your appointment request to %doctor_name% .\r\n                                     This is an automatic system generated email as with na\r\n                                      appointment.\r\n                                      Your appointment details as below...\r\n                                    </p>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n         \r\n              <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n                  <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                   <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"700\">\r\n                         <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" width=\"700\" valign=\"top\">\r\n\r\n                             <table align=\"left\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"flexibleContainerBox\" align=\"left\" valign=\"middle\">\r\n                                    <table class=\"flexibleContainerBoxNext\" style=\"max-width: 100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                                      <tbody><tr>\r\n                                       <td style=\"margin-left: 1em;\">\r\n                                          <h3 style=\"color:#5F5F5F;line-height:125%;font-family:Helvetica,Arial,sans-serif;font-size:20px;font-weight:normal;margin-top:0;margin-bottom:3px;text-align:left;\">\r\n                                            Your name : %patient_name%</h3>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            Your ID : %patient_id%, </div>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            Appointment ID : %appointment_id%, </div>\r\n                                          <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            Serial : %sequence% </div>\r\n                                         <div style=\"text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#5F5F5F;line-height:135%;\">\r\n                                            and Appointment Date : %appointment_date%. \r\n                                          </div>\r\n                                        </td>\r\n                                     </tr>\r\n                                   </tbody></table>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n\r\n             <tr>\r\n                <td align=\"center\" valign=\"top\">\r\n\r\n                  <table style=\"color:#FFFFFF;\" bgcolor=\"#3498db\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n                    <tbody><tr>\r\n                     <td align=\"center\" valign=\"top\">\r\n\r\n                        <table class=\"flexibleContainer\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"700\">\r\n                          <tbody><tr>\r\n                           <td class=\"flexibleContainerCell\" align=\"center\" width=\"700\" valign=\"top\">\r\n\r\n                            \r\n                              <table cellspacing=\"0\" cellpadding=\"30\" border=\"0\" width=\"100%\">\r\n                                <tbody><tr>\r\n                                 <td class=\"textContent\" align=\"center\" valign=\"top\">\r\n                                    \r\n                                    <div style=\"text-align:center;font-family:Helvetica,Arial,sans-serif;font-size:15px;margin-bottom:0;color:#FFFFFF;line-height:135%;\">\r\n                                      Thank you for the Appointment\r\n                                    </div>\r\n                                  </td>\r\n                               </tr>\r\n                             </tbody></table>\r\n\r\n                            </td>\r\n                         </tr>\r\n                       </tbody></table>\r\n                        \r\n                      </td>\r\n                   </tr>\r\n                 </tbody></table>\r\n                </td>\r\n             </tr>\r\n\r\n         \r\n        \r\n      </tbody></table>\r\n    \r\n  \r\n\r\n</td></tr></tbody></table></center>                                                                                                   ', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `emergency_stop_tbl`
--

CREATE TABLE `emergency_stop_tbl` (
  `stop_id` int(11) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `stop_date` date NOT NULL,
  `schedul_date` date NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emergency_stop_tbl`
--

INSERT INTO `emergency_stop_tbl` (`stop_id`, `doctor_id`, `stop_date`, `schedul_date`, `message`) VALUES
(1, 1, '2017-05-03', '2017-05-10', 'fhgfhg');

-- --------------------------------------------------------

--
-- Table structure for table `generic_tbl`
--

CREATE TABLE `generic_tbl` (
  `generic_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `appointment_id` varchar(120) NOT NULL,
  `group_id` int(11) NOT NULL,
  `mg` varchar(100) NOT NULL,
  `dose` varchar(50) NOT NULL,
  `day` varchar(33) NOT NULL,
  `medicine_type` text NOT NULL,
  `medicine_com` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generic_tbl`
--

INSERT INTO `generic_tbl` (`generic_id`, `prescription_id`, `appointment_id`, `group_id`, `mg`, `dose`, `day`, `medicine_type`, `medicine_com`) VALUES
(1, 1, 'A17ZUC7', 10, '500', '1', '1', 'tab', 'comment'),
(4, 4, 'A17EV6W', 9, '34', '3', '3', 'tab', 'comment'),
(5, 4, 'A17EV6W', 15, '34', '3', '3', 'tab', 'comment'),
(6, 4, 'A17EV6W', 7, '34', '3', '2', 'tab', 'comment'),
(10, 6, 'A170HJI', 10, '500', '1', '1', 'tab', 'comment'),
(11, 6, 'A170HJI', 7, '500', '2', '2', 'tab', 'comment'),
(12, 6, 'A170HJI', 15, '500', '3', '3', 'tab', 'comment'),
(13, 6, 'A170HJI', 8, '500', '2', '2', 'tab', 'comment'),
(18, 17, 'A17J5Q9', 10, '500', '3', '3', 'tab', 'comment'),
(19, 17, 'A17J5Q9', 7, '500', '2', '2', 'tab', 'comment'),
(20, 17, 'A17J5Q9', 9, '500', '1', '1', '', 'comment'),
(21, 19, 'A17NM0G', 10, '500', '1+1+1', '5', 'tab', 'bfsdfsd'),
(22, 20, 'A178SF7', 10, '500', '1+1+1', '5', 'tab', 'afdfgdsfg');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) UNSIGNED NOT NULL,
  `phrase` text NOT NULL,
  `english` text,
  `test` text,
  `spanish` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `phrase`, `english`, `test`, `spanish`) VALUES
(1, 'deashbord', 'Dashboard', NULL, NULL),
(2, 'prescription', 'Prescription', NULL, NULL),
(3, 'appointment', 'Appointment', NULL, NULL),
(4, 'create_trade', 'Create (Trade)', NULL, NULL),
(5, 'create_generic', 'Create (Generic)', NULL, NULL),
(6, 'create_appointment', 'Create Appointment', NULL, NULL),
(7, 'appointment_list', 'Appointment List', NULL, NULL),
(8, 'patient', 'Patient', NULL, NULL),
(9, 'add_new_patient', 'Add New Patient', NULL, NULL),
(10, 'patient_list', 'Patient List', NULL, NULL),
(11, 'schedule', 'Schedule', NULL, NULL),
(12, 'add_schedule', 'Add Schedule', NULL, NULL),
(13, 'schedule_list', 'Schedule List', NULL, NULL),
(14, 'emergency_stop', 'Emergency Stop', NULL, NULL),
(15, 'stop', 'Stop', NULL, NULL),
(16, 'emergency_stop_list', 'Emergency Stop List', NULL, NULL),
(17, 'venue', 'Venue', NULL, NULL),
(18, 'create_venue', 'Create Venue', NULL, NULL),
(19, 'venue_list', 'Venue List', NULL, NULL),
(20, 'setup_data', 'Setup Data', NULL, NULL),
(21, 'add_medicine', 'Add New Medicine', NULL, NULL),
(22, 'medicine_list', 'Medicine List', NULL, NULL),
(23, 'add_company', 'Add Company', NULL, NULL),
(24, 'add_group', 'Add Group', NULL, NULL),
(25, 'add_advice', 'Add Advice', NULL, NULL),
(26, 'add_test_name', 'Add Test Name', NULL, NULL),
(27, 'test_list', 'Test List', NULL, NULL),
(28, 'users', 'Users', NULL, NULL),
(29, 'web_site', 'Web Site', NULL, NULL),
(30, 'language_setting', 'Language Setting', NULL, NULL),
(31, 'web_setting', 'Web Settiing', NULL, NULL),
(32, 'header_setup', 'Header Setup', NULL, NULL),
(33, 'profile', 'Profile', NULL, NULL),
(34, 'slider', 'Slider setup', NULL, NULL),
(35, 'blog', 'Blog', NULL, NULL),
(36, 'add_new_post', 'Add New Post', NULL, NULL),
(37, 'post_list', 'Post List', NULL, NULL),
(38, 'gateway', 'Gateway Setup', NULL, NULL),
(39, 'sms_template', 'Template', NULL, NULL),
(40, 'send_custom_sms', 'Send Cutom Sms', NULL, NULL),
(41, 'sms_setup', 'SMS', NULL, NULL),
(42, 'sms_schedule', 'Sms Schedule', NULL, NULL),
(43, 'sms_report', 'Sms Report', NULL, NULL),
(44, 'custom_sms_report', 'Custom SMS Report', NULL, NULL),
(45, 'auto_sms_report', 'Auto SMS Report', NULL, NULL),
(46, 'email_setup', 'Email Setup', NULL, NULL),
(47, 'email_configaretion', 'Email Configaretion', NULL, NULL),
(48, 'email_template', 'Email Template', NULL, NULL),
(49, 'email_template_list', 'Email Template List', NULL, NULL),
(50, 'email_schedule_setup', 'Email Schedule Setup', NULL, NULL),
(51, 'emergency_stop_setup', 'Emergency Stop Setup', NULL, NULL),
(52, 'add_new_user', 'Add New User', NULL, NULL),
(53, 'user_list', 'user List', NULL, NULL),
(54, 'send_custom_email', 'Send Cutom Email', NULL, NULL),
(55, 'email_list', 'Email List', NULL, NULL),
(56, 'prescription_list', 'Prescription List', NULL, NULL),
(57, 'total_patient', 'Total Patient', NULL, NULL),
(58, 'today_patient', 'Today Patient', NULL, NULL),
(59, 'today_appointment', 'Today Appointment', NULL, NULL),
(60, 'new_appointment', 'New Appointment', NULL, NULL),
(61, 'total_appointment', 'Total Appointment', NULL, NULL),
(62, 'today_prescription', 'Today Prescription', NULL, NULL),
(63, 'total_prescription', 'Total Prescription', NULL, NULL),
(64, 'total_sms', 'Total SMS', NULL, NULL),
(65, 'today_sms', 'Today SMS', NULL, NULL),
(66, 'custom_sms', 'Custom SMS', NULL, NULL),
(67, 'auto_sms', 'Auto SMS', NULL, NULL),
(68, 'total_send_email', 'Total Send Email', NULL, NULL),
(69, 'line_chart', 'Line Chart', NULL, NULL),
(70, 'appointment_chart', 'Appointment Chart', NULL, NULL),
(71, 'patient_chart', 'Patient Chart', NULL, NULL),
(72, 'chart_shows_total_report', 'This chart shows total report', NULL, NULL),
(73, 'appointment_progress', 'This chart shows total appointment progress', NULL, NULL),
(74, 'patient_progress', 'This chart shows total patient progress', NULL, NULL),
(75, 'send_total_email', 'Send Total Email', NULL, NULL),
(76, 'patient_name', 'Patient Name', NULL, NULL),
(77, 'phone_number', 'Phone Number', NULL, NULL),
(78, 'birth_date', 'Birth date', NULL, NULL),
(79, 'age', 'Age', NULL, NULL),
(80, 'male', 'Male', NULL, NULL),
(81, 'female', 'Female', NULL, NULL),
(82, 'others', 'Others', NULL, NULL),
(83, 'patient_id', 'Patient Id', NULL, NULL),
(84, 'patient_cc', 'Patient CC', NULL, NULL),
(85, 'patient_weight', 'Patient Weight', NULL, NULL),
(86, 'patient_bp', 'Patient BP', NULL, NULL),
(87, 'oex', 'O/Ex', NULL, NULL),
(88, 'pd', 'PD', NULL, NULL),
(89, 'medicine', 'Medicine', NULL, NULL),
(90, 'type', 'Type', NULL, NULL),
(91, 'medicine_name', 'Medicine Name', NULL, NULL),
(92, 'mgml', 'Mg/Ml', NULL, NULL),
(93, 'dose', 'Dose', NULL, NULL),
(94, 'day', 'Day', NULL, NULL),
(95, 'medicine_comment', 'Comments', NULL, NULL),
(96, 'overal_comment', 'Overall Comment', NULL, NULL),
(97, 'test', 'Test', NULL, NULL),
(98, 'add', 'Add', NULL, NULL),
(99, 'advice', 'Advice', NULL, NULL),
(100, 'test_name', 'Test Name', NULL, NULL),
(101, 'submit', 'Submit', NULL, NULL),
(102, 'reset', 'Reset', NULL, NULL),
(103, 'description', 'Description', NULL, NULL),
(104, 'generic_name', 'Generic Name', NULL, NULL),
(105, 'picture', 'Picture', NULL, NULL),
(106, 'sex', 'Gender', NULL, NULL),
(107, 'action', 'Action', NULL, NULL),
(108, 'appointment_id', 'Appointment Id', NULL, NULL),
(109, 'date', 'Date', NULL, NULL),
(110, 'choose_serial', 'Choose Serial', NULL, NULL),
(111, 'date_placeholder', 'yyyy-mm-dd', NULL, NULL),
(112, 'sequence', 'Appointment Time', NULL, NULL),
(113, 'sms', 'Send SMS', NULL, NULL),
(114, 'sms_gateway', 'SMS Gateway', NULL, NULL),
(115, 'send', 'Send', NULL, NULL),
(116, 'sms_message', 'SMS Send Successfully!', NULL, NULL),
(117, 'name', 'Full Name', NULL, NULL),
(118, 'email', 'Email Address', NULL, NULL),
(119, 'blood_group', 'Blood Group', NULL, NULL),
(120, 'address', 'Address', NULL, NULL),
(121, 'edit_patient', 'Edit Patient', NULL, NULL),
(122, 'update', 'Update', NULL, NULL),
(123, 'visibility', 'Visibility', NULL, NULL),
(124, 'yes', 'Yes', NULL, NULL),
(125, 'no', 'No', NULL, NULL),
(126, 'set_time_msg', 'You can set only minute', NULL, NULL),
(127, 'set_per_patient_time', 'Per Patient Time', NULL, NULL),
(128, 'end_time', 'End Time', NULL, NULL),
(129, 'start_time', 'Start Time', NULL, NULL),
(130, 'set_time', 'Set Time', NULL, NULL),
(131, 'saturday', 'Saturday', NULL, NULL),
(132, 'sunday', 'Sunday', NULL, NULL),
(133, 'monday', 'Monday', NULL, NULL),
(134, 'tuesday', 'Tuesday', NULL, NULL),
(135, 'wednesday', 'Wednesday', NULL, NULL),
(136, 'thusday', 'Thursday', NULL, NULL),
(137, 'friday', 'Friday', NULL, NULL),
(138, 'edit_schedule', 'Edit Schedule', NULL, NULL),
(139, 'stop_date', 'Stop Date', NULL, NULL),
(140, 'schedule_date', 'Schedule Date', NULL, NULL),
(141, 'message', 'Message', NULL, NULL),
(142, 'specialist', 'Specialist', NULL, NULL),
(143, 'edit_emergency_stop', 'Edit Emergency Stop', NULL, NULL),
(144, 'venue_name', 'Venue Name', NULL, NULL),
(145, 'venue_contact', 'Venue Contact', NULL, NULL),
(146, 'venue_address', 'Venue Address', NULL, NULL),
(147, 'venue_map', 'Venue Map', NULL, NULL),
(148, 'edot_venue', 'Edit Venue', NULL, NULL),
(149, 'company_name', 'Company Name', NULL, NULL),
(150, 'group_name', 'Group Name', NULL, NULL),
(151, 'medicine_description', 'Medicine Description', NULL, NULL),
(152, 'edit_medicine', 'Edit Medicine', NULL, NULL),
(153, 'web_site_enable_disable', 'Web site Enable Or Disable', NULL, NULL),
(154, 'html_code_title', 'Html Code Sample', NULL, NULL),
(155, 'js_code_title', 'Js Code Sample ', NULL, NULL),
(156, 'use_thirt_parti_api', 'Use third party Api ', NULL, NULL),
(157, 'therd_parti_api_preview', 'Third party Api preview', NULL, NULL),
(158, 'website_enable', 'Website Enable', NULL, NULL),
(159, 'website_desable', 'website Desable', NULL, NULL),
(160, 'website_enable_msg', 'If you don\'t want to Show The website, Click the button', NULL, NULL),
(161, 'website_desable_msg', 'If you want to Show The website, Click the button', NULL, NULL),
(162, 'html_code_description', 'Html Code Sample Place this code wherever you want the plugin to appear on your page.', NULL, NULL),
(163, 'js_code_description', 'Place this code wherever you want the plugin to appear on your page.', NULL, NULL),
(164, 'facebook_link', 'facebook Link', NULL, NULL),
(165, 'twitter_link', 'twitter Link', NULL, NULL),
(166, 'youtube_link', 'Youtube Link', NULL, NULL),
(167, 'linkedin_link', 'Linkedin Link', NULL, NULL),
(168, 'google_link', 'Google Linlk', NULL, NULL),
(169, 'working_description', 'Working Description', NULL, NULL),
(170, 'hotline', 'Hotline', NULL, NULL),
(171, 'copy_right', 'Copy Right', NULL, NULL),
(172, 'logo', 'Logo', NULL, NULL),
(173, 'favicon', 'Favicon', NULL, NULL),
(174, 'appointment_image', 'Appointment Image', NULL, NULL),
(175, 'about_image', 'About Image', NULL, NULL),
(176, 'total_appointment_details', 'Total Appointment details', NULL, NULL),
(177, 'today_appointment_details', 'Today Appointment Details', NULL, NULL),
(178, 'total_patient_details', 'Total Patient Details', NULL, NULL),
(179, 'twitter_post', 'Twitter Post', NULL, NULL),
(180, 'google_map', 'Google Map', NULL, NULL),
(181, 'doctor_name', 'Doctor Name', NULL, NULL),
(182, 'designation', 'Designation', NULL, NULL),
(183, 'degrees', 'Degrees', NULL, NULL),
(184, 'department', 'Department', NULL, NULL),
(185, 'service_place', 'Service Place', NULL, NULL),
(186, 'about_me', 'About Me', NULL, NULL),
(187, 'slider_list', 'Slider List', NULL, NULL),
(188, 'heading', 'Heading', NULL, NULL),
(189, 'details', 'Details', NULL, NULL),
(190, 'select_category', 'Select Category', NULL, NULL),
(191, 'title', 'Title', NULL, NULL),
(192, 'edit_post', 'Edit Post', NULL, NULL),
(193, 'edit_slider', 'Edit Slider', NULL, NULL),
(194, 'category', 'Select Category', NULL, NULL),
(195, 'category_name', 'Category Name', NULL, NULL),
(196, 'status', 'Status', NULL, NULL),
(197, 'provider', 'Provider', NULL, NULL),
(198, 'user_name', 'User Name', NULL, NULL),
(199, 'password', 'password', NULL, NULL),
(200, 'sender', 'Sender', NULL, NULL),
(201, 'sms_template_list', 'SMS Template List', NULL, NULL),
(202, 'sms_template_setup', 'SMS Template Setup', NULL, NULL),
(203, 'template_name', 'Template Name', NULL, NULL),
(204, 'set_default', 'Set Default', NULL, NULL),
(205, 'schedule_name', 'Schedule Name', NULL, NULL),
(206, 'time', 'Time', NULL, NULL),
(207, 'sms_cronjob_des', 'You can use above link for cron job. Copy and paste at cron job Command box', NULL, NULL),
(208, 'sms_schedule_list', 'SMS Schedule List', NULL, NULL),
(209, 'reciver', 'Reciver', NULL, NULL),
(210, 'from_date', 'From Date', NULL, NULL),
(211, 'to_date', 'To Date', NULL, NULL),
(212, 'date_time', 'Date Time', NULL, NULL),
(213, 'search', 'Search', NULL, NULL),
(214, 'send_at_appointment', 'Email Send At Appointment Time. ', NULL, NULL),
(215, 'send_at_registration', 'Email Send At Patient Registretion.', NULL, NULL),
(216, 'send_by_reminder', 'Email Send By Reminder.', NULL, NULL),
(217, 'protocol', 'Protocol', NULL, NULL),
(218, 'mailepath', 'MailPath', NULL, NULL),
(219, 'mailtype', 'MailType', NULL, NULL),
(220, 'sender_email', 'Sender Email', NULL, NULL),
(221, 'email_template_list_of_app', 'Email Templ list For Registration', NULL, NULL),
(222, 'email_template_list_of_reg', 'Email Templ list For Appointment', NULL, NULL),
(223, 'active', 'Active', NULL, NULL),
(224, 'reciver_email', 'Reciver Email', NULL, NULL),
(225, 'subject', 'Subject', NULL, NULL),
(226, 'edit_email_template', 'Edit Email Template', NULL, NULL),
(227, 'email_schedule_stup', 'Email Schedule Setup', NULL, NULL),
(228, 'email_schedule_stup_list', 'Email Schedule Setup List', NULL, NULL),
(229, 'email_cronjob_msg', 'You can use above link for cron job. Copy and paste at cron job Command box.', NULL, NULL),
(230, 'appointment_info', 'Appointment Information', NULL, NULL),
(231, 'appointment_footer_msg', 'Kindly Report to Reception 30 minutes Earlier then your appointment', NULL, NULL),
(232, 'patient_history', ' History', NULL, NULL),
(233, 'signature', 'Signature', NULL, NULL),
(234, 'chamber_time', 'CHAMBER TIME', NULL, NULL),
(235, 'prescription_empty_msg', 'You have no prescription......................', NULL, NULL),
(236, 'social_link', 'Social Link', NULL, NULL),
(237, 'recent_news', 'Recent News', NULL, NULL),
(238, 'latest_twitter', 'Latest Twitter', NULL, NULL),
(239, 'register', 'REGISTER', NULL, NULL),
(240, 'doctor_spciality', 'Doctor Spciality', NULL, NULL),
(241, 'doctor_degrees', 'Doctor Degrees', NULL, NULL),
(242, 'doctor_experience', 'Doctor Experience', NULL, NULL),
(243, 'website_title', 'Website Title', NULL, NULL),
(244, 'home', 'HOME', NULL, NULL),
(245, 'working_hour', 'WORKING HOURS', NULL, NULL),
(246, 'testimonial', 'TESTIMONIAL', NULL, NULL),
(247, 'contact', 'CONTACT', NULL, NULL),
(248, 'latest_news', 'Latest News', NULL, NULL),
(249, 'larnmore', 'Larn More', NULL, NULL),
(250, 'close', 'Close', NULL, NULL),
(251, 'login', 'Login', NULL, NULL),
(252, 'doctor', 'Doctor', NULL, NULL),
(253, 'assistant', 'Assistant', NULL, NULL),
(254, 'login_title', 'Please Login', NULL, NULL),
(255, 'login_msg', 'UserEmail or Password are Invalid.', NULL, NULL),
(256, 'image_upload_msg', 'Image dosn\'t upload!. Image size to large.', NULL, NULL),
(257, 'website_setup_msg', 'Setup Successgully.', NULL, NULL),
(258, 'delete_msg', 'Delete Successfull.', NULL, NULL),
(259, 'edit_msg', 'Edit Successfully.', NULL, NULL),
(260, 'slider_ste_msg', 'Slider set Successful..', NULL, NULL),
(261, 'update_msg', 'Update Successfully.', NULL, NULL),
(262, 'venue_add_msg', 'Venue Added successfully', NULL, NULL),
(263, 'exist_error_msg', 'It\'s Allrady Exist', NULL, NULL),
(264, 'register_msg', 'Registeration Successfully.', NULL, NULL),
(265, 'post_add_msg', 'Add New Post Successfully..', NULL, NULL),
(266, 'sms_send_msg', 'SMS Send Successfully!', NULL, NULL),
(267, 'emal_send_msg', 'Email Send Successfully.', NULL, NULL),
(268, 'schedule_add_msg', 'Schedule Add Successfully.', NULL, NULL),
(269, 'template_add_msg', 'Add Template Successfully.', NULL, NULL),
(270, 'gorup_add_msg', 'Group inserted Successful', NULL, NULL),
(271, 'medicine_add_msg', 'Mdicine inserted Successful', NULL, NULL),
(272, 'advice_add_msg', 'Advice inserted Successful', NULL, NULL),
(273, 'test_add_msg', 'Test inserted Successful', NULL, NULL),
(274, 'company_add_msg', 'Company inserted Successful', NULL, NULL),
(275, 'password_change_msg', 'Password Change Successfull', NULL, NULL),
(276, 'password_change_error_msg', 'Your Old Password Dos Not Mathch', NULL, NULL),
(277, 'schedule_error_msg', 'Already set up scheduled on this day, please select others one day.', NULL, NULL),
(278, 'emergency_stop_msg', 'Emergency Stop Successfully.', NULL, NULL),
(279, 'appointment_error_msg', 'Sorry You already get apointment in this date', NULL, NULL),
(280, 'get', '', NULL, NULL),
(281, 'get_appointment_msg', 'You Got this appointment Successful..', NULL, NULL),
(282, 'patient_id_exist_msg', 'This id Is allredy exist, Please try again', NULL, NULL),
(283, 'venue_empty_msg', 'Sorry there have no assign venue.', NULL, NULL),
(284, 'email_setup_msg', 'Email Configaretion Successfully.', NULL, NULL),
(285, 'email_template_add_msg', 'Email Template Add Successfully.', NULL, NULL),
(286, 'about_menu', 'ABOUT', NULL, NULL),
(287, 'font_appointment', 'APPOINTMENT', NULL, NULL),
(288, 'change_password', 'Change Password', NULL, NULL),
(289, 'logout', 'Logout', NULL, NULL),
(290, 'register_information', 'Registration Information.', NULL, NULL),
(291, 'sl', 'SL', NULL, NULL),
(292, 'pad_print', 'Pad Print', NULL, NULL),
(293, 'default_print', 'Default Print', NULL, NULL),
(294, 'history', 'History', NULL, NULL),
(295, 'temperature', 'Temperature', NULL, NULL),
(296, 'print_pattern', 'Print Pattern', NULL, NULL),
(297, 'setup_pattern', 'Setup Print Pattern', NULL, NULL),
(298, 'pattern_list', 'Setup Pattern List', NULL, NULL),
(299, 'header_blank', 'Header Blank', NULL, NULL),
(300, 'footer_blank', 'Footer Blank', NULL, NULL),
(301, 'side_content', 'Side Content', NULL, NULL),
(302, 'content_blank', 'Content Blank', NULL, NULL),
(303, 'height', 'Height', NULL, NULL),
(304, 'width', 'Width', NULL, NULL),
(305, 'edit_print_pattern', 'Edit Print Pattern', NULL, NULL),
(306, 'footer_logo', 'Footer Logo', NULL, NULL),
(307, 'payment', 'Payment', NULL, NULL),
(308, 'setup_payment_method', 'Setup Payment Method', NULL, NULL),
(309, 'paypal_business_email', 'Paypal Business Email', NULL, NULL),
(310, 'amount', 'Amount', NULL, NULL),
(311, 'pyment_list', 'Pyment List', NULL, NULL),
(312, 'pyment_setup', 'Pyment Setup', NULL, NULL),
(313, 'payment_setup', 'Payment Setup', NULL, NULL),
(314, 'payment_list', 'Payment List', NULL, NULL),
(315, 'notes', 'Notes', NULL, NULL),
(316, 'doctoress_dashboard', 'Doctoress Dashboard', NULL, NULL),
(317, 'site_view', 'Site View', NULL, NULL),
(318, 'edit_prescription', 'Edit Prescription', NULL, NULL),
(319, 'select_message', 'Please Select any one Number', NULL, NULL),
(320, 'schedule_msg', '<strong>MESSAGGIO DI ERRORE!</strong>                       <p>There have no time schedule setup! Please Try Again.</p>', NULL, NULL),
(321, 'schedule_date_msg', '<strong>ERROR MESSAGE!</strong>  <h4>Doctor do not seat In this date!</h4>', NULL, NULL),
(322, 'book_sequence', 'You Selected', NULL, NULL),
(323, 'patient_id_msg', 'Your id is available', NULL, NULL),
(324, 'patient_name_load_msg', 'Didn\'t match. Please Enter Your Valid Id.', NULL, NULL),
(325, 'remember_me', 'Remember me', NULL, NULL),
(326, 'edit_generic', 'Edit(Generic)', NULL, NULL),
(327, 'sms_list', 'SMS List', NULL, NULL),
(328, 'time_zone_setup', 'Time Zone Setup', NULL, NULL),
(329, 'time_setup', 'Select Time Zone', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE `log_info` (
  `log_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `logout_time` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_info`
--

INSERT INTO `log_info` (`log_id`, `email`, `password`, `user_type`, `active_status`, `logout_time`) VALUES
(1, 'doctor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, ''),
(2, 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, ''),
(3, 't@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, ''),
(4, 'mduser@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, ''),
(5, 'mdusers@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, ''),
(7, 'madddd@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, ''),
(8, 'mmmmmm@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `medecine_info`
--

CREATE TABLE `medecine_info` (
  `medicine_id` int(11) UNSIGNED NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `med_group_id` int(11) DEFAULT NULL,
  `med_description` text,
  `med_company_id` int(11) NOT NULL,
  `medicine_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medecine_info`
--

INSERT INTO `medecine_info` (`medicine_id`, `medicine_name`, `med_group_id`, `med_description`, `med_company_id`, `medicine_status`) VALUES
(1, 'Napa-ex', 1, '<p>Lorem IpsumÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â is simply dummy textÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â </p>\r\n', 1, 0),
(20, 'ALOTRIKA', 20, '<p>98 Green Road, Farmgate, ssDhaka</p>\r\n', 10, 0),
(21, 'tess', 7, 'asdfasdf', 1, 0),
(22, 'Aromix', 21, 'This is Medical Description', 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_company_info`
--

CREATE TABLE `medicine_company_info` (
  `company_id` int(11) UNSIGNED NOT NULL,
  `company_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_company_info`
--

INSERT INTO `medicine_company_info` (`company_id`, `company_name`) VALUES
(1, 'Medicines Company1'),
(2, 'Medicines Company12'),
(3, 'Medicines Company13'),
(4, 'Medicines Company14'),
(5, 'Medicines Company2'),
(6, 'Medicines Company3'),
(7, 'Medicines Company4'),
(8, 'ORAKIA'),
(10, 'AMOKLA'),
(13, 'bdtask');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_group_tbl`
--

CREATE TABLE `medicine_group_tbl` (
  `med_group_id` int(11) UNSIGNED NOT NULL,
  `group_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_group_tbl`
--

INSERT INTO `medicine_group_tbl` (`med_group_id`, `group_name`) VALUES
(7, 'XTROMA '),
(8, 'ALOMATA'),
(9, 'ORTIXA'),
(10, 'IBNESINA'),
(12, 'ETROMIKA'),
(13, 'DETROLA'),
(14, 'TOAKATA'),
(15, 'GONITA'),
(16, 'ORAKIA'),
(17, 'ASOLAKA'),
(18, 'ATOKILA'),
(20, 'THKILA'),
(21, 'Home Bound');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_prescription`
--

CREATE TABLE `medicine_prescription` (
  `med_pres_id` int(11) UNSIGNED NOT NULL,
  `appointment_id` varchar(100) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `medicine_type` text,
  `mg` varchar(20) NOT NULL,
  `dose` varchar(100) NOT NULL,
  `day` int(11) NOT NULL,
  `medicine_com` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_prescription`
--

INSERT INTO `medicine_prescription` (`med_pres_id`, `appointment_id`, `prescription_id`, `medicine_id`, `medicine_type`, `mg`, `dose`, `day`, `medicine_com`) VALUES
(3, 'A170QID', 8, 1, 'tab', '500', '3', 3, 'comment'),
(4, 'A170QID', 8, 20, 'tab', '34', '3', 2, 'comment'),
(5, 'A170QID', 8, 21, 'tab', '500', '3', 3, 'comment'),
(8, 'A174Z4O1', 10, 1, 'tab', '500', '3', 3, 'comment'),
(9, 'A174Z4O1', 10, 20, 'tab', '500', '2', 2, 'comment'),
(10, 'A174Z4O1', 10, 1, 'tab', '500', '1', 1, 'comment'),
(11, 'A170AB1E', 11, 1, 'tab', '500', '3', 3, 'comment'),
(12, 'A170AB1E', 11, 20, 'tab', '500', '2', 2, 'comment'),
(15, 'A179RAZ7', 13, 1, 'tab', '500', '3', 3, 'comment'),
(16, 'A179RAZ7', 13, 20, 'tab', '500', '2', 2, 'comment'),
(17, 'A179RAZ7', 13, 21, 'tab', '23', '1', 1, 'comment'),
(18, 'A178ATZ', 14, 1, 'tab', '500', '3', 3, 'comment'),
(19, 'A178ATZ', 14, 20, 'tab', '500', '2', 2, 'comment'),
(21, 'A17VJHU', 21, 1, 'tab', '500', '1+1+1', 5, 'afdfgdsfg'),
(22, 'A17VJHU', 21, 1, 'tab', '500', '1+1+1', 5, 'bfsdfsd'),
(23, 'A17HCFE9', 22, 1, 'tab', '500', '1+1+1', 5, 'afdfgdsfg');

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE `patient_tbl` (
  `patient_id` varchar(250) NOT NULL,
  `patient_name` text NOT NULL,
  `patient_email` varchar(120) DEFAULT NULL,
  `patient_phone` varchar(15) DEFAULT NULL,
  `address` text,
  `sex` varchar(120) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `blood_group` varchar(250) NOT NULL,
  `picture` varchar(250) DEFAULT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_tbl`
--

INSERT INTO `patient_tbl` (`patient_id`, `patient_name`, `patient_email`, `patient_phone`, `address`, `sex`, `birth_date`, `blood_group`, `picture`, `create_date`) VALUES
('123', 'Test User', 'admin@gmail.com', '01751194212', '                                            asdf                                         ', 'Male', '2017-03-02', 'A+', 'http://localhost/DOCTOR-VS1.5/./assets/uploads/patient/t.jpg', '2017-03-01 09:01:05'),
('1234', 'text1', 'text1@gmail.com', '123456789', 'test', 'Male', '2017-03-28', 'A-', '', '2017-04-22 08:09:16'),
('dfas', 'dsfsd', NULL, '452345', NULL, 'Male', '1972-05-02', '', NULL, '0000-00-00 00:00:00'),
('dsfsdf', 'Tanzil Ahmad', 'tanzil4091@gmail.com', '1922296392', '98 Green Road, Farmgate, Dhaka-1215', 'Male', '2017-05-01', 'B-', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/patient/commen.jpg', '2017-05-02 12:37:08'),
('hanan123', 'Md Hanan', 'hanan@gmail.com', '01922296392', '                                            <p>test</p>\r\n                                         ', 'Male', '1996-01-09', 'A+', '', '2017-01-09 10:29:45'),
('kiokj', 'ggdgfdgf', NULL, '3535', NULL, 'Male', '1972-05-02', '', NULL, '0000-00-00 00:00:00'),
('M1', 'Manik', NULL, '12345678901', NULL, 'Male', '1997-05-02', '', NULL, '0000-00-00 00:00:00'),
('mes', 'Ms Meeeee', 'mse@gmail.com', '01751194212', 'tttttttttt', 'Female', '1983-05-02', 'A+', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/patient/user3.png', '2017-05-02 06:57:04'),
('MMM', 'MMM', NULL, '234234234', NULL, 'Male', '1974-05-02', '', NULL, '0000-00-00 00:00:00'),
('MMMD', 'Ms Taaa', NULL, '01751194212', NULL, 'Male', '1994-05-02', '', NULL, '0000-00-00 00:00:00'),
('momin1', 'Md Momin ali', 'momin@gmail.com', '012351194212', '<p>Test address</p>\r\n', 'Male', '1994-01-10', 'B-', '', '2017-01-10 04:34:23'),
('Mss', 'Ms Tithi', 'mss@gmail.com', '01751194212', 'Address', 'Female', '2017-05-02', 'A+', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/patient/user2.png', '2017-05-02 06:53:44'),
('Naeem', 'Naeem', 'Naeem@gmail.com', '1234567890', 'Naeem                                    ', 'Male', '1984-04-26', 'A+', '', '2017-04-26 08:05:32'),
('naeem123', 'Naeem Khan', 'naeem@gmail.com', '54345325324', 'dsafsafsdafsadfsa', 'Male', '1974-05-02', 'A+', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/patient/doctor.png', '2017-05-02 08:34:26'),
('Nazmul1', 'Md Nazmul', 'tess@gmail.com', '01688553591', '<p>asdf</p>\r\n', 'Male', '2004-01-01', 'A+', '', '2017-01-01 09:24:56'),
('sadasdasd', 'dgdfgd', NULL, '35345', NULL, 'Male', '1985-05-02', '', NULL, '0000-00-00 00:00:00'),
('Tanzil1', 'Md Tanzil', 'tanzil@gmail.com', '01922296392', 'Dhaka, Bangladesh', 'Male', '1989-12-06', 'A-', '', '2017-01-08 08:01:50'),
('Tarek1', 'Md Tarek', 'tarek@gmail.com', '01817584639', '<p>Dhaka, Bangladesh.</p>\r\n', 'Male', '1982-01-08', 'A+', '', '2017-01-08 08:03:48'),
('test2q', 'Tusss', NULL, '2134234', NULL, 'Male', '1985-04-29', '', NULL, '0000-00-00 00:00:00'),
('tests1111', 'ttttt', NULL, '235235', NULL, NULL, '1985-04-30', '', NULL, '0000-00-00 00:00:00'),
('tss', 'Naeem12', 'Naeem12@gmail.com', '1234567890', 'sdt', 'Male', '1985-04-26', 'A-', '', '2017-04-26 10:43:12'),
('tuhin123', 'Tuhin', 'tuhin12@gmail.com', '01751194212', '<p>asdfs</p>\r\n', 'Male', '1992-01-01', 'A+', '', '2017-01-01 08:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `payment_account_setup`
--

CREATE TABLE `payment_account_setup` (
  `set_up_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `paypal_email` varchar(200) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_account_setup`
--

INSERT INTO `payment_account_setup` (`set_up_id`, `doctor_id`, `paypal_email`, `amount`) VALUES
(1, 1, 'info@bdtask.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment_table`
--

CREATE TABLE `payment_table` (
  `payment_id` int(11) NOT NULL,
  `appointment_id` varchar(200) NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `payer_email` varchar(200) NOT NULL,
  `date_time` datetime NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '1',
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_table`
--

INSERT INTO `payment_table` (`payment_id`, `appointment_id`, `patient_id`, `doctor_id`, `amount`, `payer_email`, `date_time`, `payment_status`, `notes`) VALUES
(1, 'A17I0ZWW', '123', 1, 300, 'tuhin@gmail.com', '2017-04-22 14:12:07', 1, 'test note');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) UNSIGNED NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `appointment_id` varchar(200) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `pres_comments` varchar(255) NOT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `pressure` varchar(20) DEFAULT NULL,
  `problem` varchar(100) NOT NULL,
  `oex` text,
  `pd` text,
  `history` text,
  `temperature` varchar(100) DEFAULT NULL,
  `create_date_time` datetime NOT NULL,
  `prescription_status` int(11) NOT NULL DEFAULT '1',
  `prescription_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `patient_id`, `appointment_id`, `doctor_id`, `venue_id`, `pres_comments`, `weight`, `pressure`, `problem`, `oex`, `pd`, `history`, `temperature`, `create_date_time`, `prescription_status`, `prescription_type`) VALUES
(1, 'tuhin123', 'A17ZUC7', 1, 1, 'ocment', '56', '120/80', 'Problems', 'O/Ex', 'PD', 'History', '20', '2017-05-02 07:17:36', 1, 2),
(4, 'tuhin123', 'A17EV6W', 1, 1, 'tea', '56', '120/80', 'Problems', 'O/Ex', 'PD', 'History', '20', '2017-05-02 07:39:33', 1, 2),
(6, 'tuhin123', 'A170HJI', 1, 2, 'teststaaa', '56', '120/80', 'Problems', 'O/Ex', 'PD', 'History', '20', '2017-05-02 07:48:08', 1, 2),
(8, 'M1', 'A170QID', 1, 1, ' test', '56', '120/80', 'Problems', 'O/Ex', 'PD', 'History', '20', '2017-05-02 07:51:29', 1, 1),
(10, 'tss', 'A174Z4O1', 1, 1, ' ', '56', '120/80', '        test                              ', 'O/Ex', 'PD', 'History', '20', '2017-05-02 07:54:25', 1, 1),
(11, 'tuhin123', 'A170AB1E', 1, 1, 'tttttttttt', '56', '120/80', '             esss                         ', 'O/Ex', 'PD', 'History', '20', '2017-05-02 07:59:21', 1, 1),
(13, 'masud', 'A179RAZ7', 1, 1, ' ttttt', '56', '120/80', ' test             ', 'O/Ex', 'PD', 'History', '20', '2017-05-02 08:42:38', 1, 1),
(14, 'MMM', 'A178ATZ', 1, 1, 'tttttttttttttttttttt', '56', '120/80', 'Problems', 'O/Ex', 'PD', 'History', '20', '2017-05-02 08:44:40', 1, 1),
(17, 'MMMD', 'A17J5Q9', 1, 2, 'testa', '56', '120/80', 'Problems', 'O/Ex', 'PD', 'History', '20', '2017-05-02 08:51:47', 1, 2),
(19, 'sadasdasd', 'A17NM0G', 1, 2, 'dsfgdsdsfgdsfg', '45', '32', 'fgdfgdfg', 'dgdfgd', 'dfgdfgd', 'dgdfgdfg', '34', '2017-05-02 10:18:02', 1, 2),
(20, 'dfas', 'A178SF7', 1, 1, '', '45', '32', 'fsdf', '', '', 'fgsdfgsd', '34', '2017-05-02 10:23:18', 1, 2),
(21, 'kiokj', 'A17VJHU', 1, 1, ' dsfasdfsdf', '89', '43', 'fgdsfgdsfgdsgdgdsfgd', 'dfghdfgh', 'ghdfhdf', 'gdfgfdg', '34', '2017-05-02 10:25:39', 1, 1),
(22, 'MMM', 'A17HCFE9', 1, 1, 'sdfsdfsdf', '34', '23', ' Problems                ', 'sdfsdfsd', 'sdfsa', 'vdsfsdfs', '34', '2017-05-02 10:32:20', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `print_pattern`
--

CREATE TABLE `print_pattern` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `pattern_no` text NOT NULL,
  `header_height` int(11) DEFAULT NULL,
  `header_width` int(11) DEFAULT NULL,
  `footer_height` int(11) DEFAULT NULL,
  `footer_width` int(11) DEFAULT NULL,
  `content_height_1` int(11) DEFAULT NULL,
  `content_width_1` int(11) DEFAULT NULL,
  `content_height_2` int(11) DEFAULT NULL,
  `content_width_2` int(11) DEFAULT NULL,
  `pattern_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `print_pattern`
--

INSERT INTO `print_pattern` (`id`, `doctor_id`, `venue_id`, `pattern_no`, `header_height`, `header_width`, `footer_height`, `footer_width`, `content_height_1`, `content_width_1`, `content_height_2`, `content_width_2`, `pattern_status`) VALUES
(2, 1, 1, 'pattern_one', 250, 800, 200, 800, 300, 270, 300, 520, 1),
(3, 1, 3, 'pattern_one', 250, 800, 200, 800, 300, 270, 300, 520, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedul_setup_tbl`
--

CREATE TABLE `schedul_setup_tbl` (
  `schedul_id` int(11) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `day` int(11) NOT NULL,
  `per_patient_time` int(11) NOT NULL,
  `visibility` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedul_setup_tbl`
--

INSERT INTO `schedul_setup_tbl` (`schedul_id`, `doctor_id`, `venue_id`, `start_time`, `end_time`, `day`, `per_patient_time`, `visibility`, `status`) VALUES
(6, 1, 1, '10:00:00', '16:00:00', 6, 30, 1, 1),
(7, 1, 1, '10:00:00', '16:00:00', 7, 30, 1, 1),
(9, 1, 2, '03:00:00', '10:00:00', 5, 22, 1, 1),
(11, 1, 2, '10:00:00', '16:00:00', 4, 20, 1, 1),
(13, 1, 3, '04:33:00', '11:00:00', 3, 20, 1, 1),
(14, 1, 3, '04:33:00', '11:00:00', 4, 20, 1, 1),
(15, 1, 3, '04:33:00', '11:00:00', 2, 20, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) UNSIGNED NOT NULL,
  `heading` text,
  `details` text,
  `sequence` int(11) DEFAULT NULL,
  `picture` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `heading`, `details`, `sequence`, `picture`, `status`) VALUES
(1, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 3, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/blog-d.jpg', 1),
(2, 'MEDICLE  DOCTORss Two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 1, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/slider1.jpg', 1),
(3, 'MEDICLE  DOCTOR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ', 2, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/slider2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_delivery`
--

CREATE TABLE `sms_delivery` (
  `sms_delivery_id` int(11) NOT NULL,
  `ss_id` int(11) NOT NULL,
  `delivery_date_time` datetime NOT NULL,
  `sms_info_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sms_gateway`
--

CREATE TABLE `sms_gateway` (
  `gateway_id` int(11) NOT NULL,
  `provider_name` text NOT NULL,
  `user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `authentication` text NOT NULL,
  `link` text NOT NULL,
  `default_status` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_gateway`
--

INSERT INTO `sms_gateway` (`gateway_id`, `provider_name`, `user`, `password`, `authentication`, `link`, `default_status`, `status`) VALUES
(1, 'nexmo', 'eadf274012', '6648b2ea3eba913f', 'Doctoress', 'https://www.nexmo.com/', 1, 1),
(2, 'clickatell', 'clickatell', '9d2e2d3aa558ddcb', 'Doctoress', 'https://www.clickatell.com/', 0, 1),
(3, 'default', 'default', '02641f076b0cc3a17', 'Doctoress', 'https://www.default.com/', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_info`
--

CREATE TABLE `sms_info` (
  `sms_info_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` varchar(100) NOT NULL,
  `phone_no` varchar(250) NOT NULL,
  `appointment_date` datetime NOT NULL,
  `appointment_id` varchar(250) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `sms_counter` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_info`
--

INSERT INTO `sms_info` (`sms_info_id`, `doctor_id`, `patient_id`, `phone_no`, `appointment_date`, `appointment_id`, `status`, `sms_counter`) VALUES
(1, 1, '123', '01751194212', '2017-04-22 10:00:00', 'A17I0ZWW', 0, 0),
(2, 1, '123', '01751194212', '2017-04-23 10:00:00', 'A17QI9NP', 0, 0),
(3, 1, 'tss', '1234567890', '2017-04-27 10:00:00', 'A17YMRV8', 0, 0),
(4, 1, 'tss', '1234567890', '2017-04-28 10:00:00', 'A174Z4O1', 0, 0),
(5, 1, 'Tanzil1', '01922296392', '2017-04-27 10:00:00', 'A17A3TBE', 0, 0),
(6, 1, 'tuhin123', '01751194212', '2017-05-01 10:00:00', 'A170AB1E', 0, 0),
(7, 1, 'masud', '01751194212', '2017-05-01 10:00:00', 'A179RAZ7', 0, 0),
(8, 1, 'hamid', '01751194212', '2017-05-03 10:00:00', 'A17J7Y8U', 0, 0),
(9, 1, 'masud', '01751194212', '2017-05-03 10:00:00', 'A17PBQTS', 0, 0),
(10, 1, 'Mss', '01751194212', '2017-05-03 10:00:00', 'A17QKUT1', 0, 0),
(11, 1, 'mes', '01751194212', '2017-05-03 10:00:00', 'A17LZQJM', 0, 0),
(12, 1, 'MMM', '234234234', '2017-05-03 10:00:00', 'A17HCFE9', 0, 0),
(13, 1, 'tuhin123', '01751194212', '2017-05-10 10:00:00', 'A17ZYDWI', 0, 0),
(14, 1, 'naeem123', '54345325324', '2017-05-04 10:00:00', 'A17RUXND', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sms_schedule`
--

CREATE TABLE `sms_schedule` (
  `ss_id` int(11) NOT NULL,
  `ss_teamplate_id` int(11) NOT NULL,
  `ss_name` text NOT NULL,
  `ss_schedule` varchar(100) NOT NULL,
  `ss_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_schedule`
--

INSERT INTO `sms_schedule` (`ss_id`, `ss_teamplate_id`, `ss_name`, `ss_schedule`, `ss_status`) VALUES
(3, 2, 'One', '1:1:1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_teamplate`
--

CREATE TABLE `sms_teamplate` (
  `teamplate_id` int(11) NOT NULL,
  `teamplate_name` text,
  `teamplate` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `default_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_teamplate`
--

INSERT INTO `sms_teamplate` (`teamplate_id`, `teamplate_name`, `teamplate`, `status`, `default_status`) VALUES
(2, 'Teamplate One', '%doctor_name%. Hello, %patient_name%. Your ID: %patient_id%, Appointment ID: %appointment_id%, Serial: %sequence% and Appointment Date: %appointment_date%. Thank you for the Appointment.', 1, 0),
(4, 'Teamplate Two', '%doctor_name%. Hello, %patient_name%. Your ID: %patient_id%, Appointment ID: %appointment_id%, Serial: %sequence% and Appointment Date: %appointment_date%. Thank you for the Appointment.', 1, 0),
(5, 'Default Template', '%doctor_name%. Hello, %patient_name%. Your ID: %patient_id%, Appointment ID: %appointment_id%, Serial: %sequence% and Appointment Date: %appointment_date%. Thank you for the Appointment.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test_assign_for_patine`
--

CREATE TABLE `test_assign_for_patine` (
  `test_ass_id` int(11) UNSIGNED NOT NULL,
  `prescription_id` varchar(200) NOT NULL,
  `appointment_id` varchar(100) NOT NULL,
  `test_id` int(11) NOT NULL,
  `test_assign_description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_assign_for_patine`
--

INSERT INTO `test_assign_for_patine` (`test_ass_id`, `prescription_id`, `appointment_id`, `test_id`, `test_assign_description`) VALUES
(1, '1', 'A17ZUC7', 9, 'sssss'),
(2, '1', 'A17ZUC7', 15, 'aaaaaa'),
(5, '4', 'A17EV6W', 12, 'aaaaaaa'),
(6, '4', 'A17EV6W', 15, 'aaaaaaa'),
(10, '6', 'A170HJI', 12, 'aaaaaaa'),
(11, '6', 'A170HJI', 13, 'aaaaaaa'),
(12, '6', 'A170HJI', 19, 'aaaaaaa'),
(15, '8', 'A170QID', 12, 'aaaaaaa'),
(16, '8', 'A170QID', 15, 'aaaaaaa'),
(19, '10', 'A174Z4O1', 9, 'aaaaaa'),
(20, '10', 'A174Z4O1', 13, 'aaaaaaa'),
(21, '11', 'A170AB1E', 9, 'aaaaaaa'),
(22, '11', 'A170AB1E', 12, 'aaaaaaa'),
(25, '13', 'A179RAZ7', 12, 'aaaaaaaa'),
(26, '13', 'A179RAZ7', 15, 'aaaaaaaa'),
(27, '13', 'A179RAZ7', 19, ''),
(28, '14', 'A178ATZ', 12, 'aaaaaaaa'),
(29, '14', 'A178ATZ', 15, ''),
(34, '17', 'A17J5Q9', 9, 'aaaaaaa'),
(35, '17', 'A17J5Q9', 15, 'aaaaaaa'),
(38, '19', 'A17NM0G', 23, 'dsgdsfgds'),
(39, '20', 'A178SF7', 24, 'sfsfd'),
(40, '21', 'A17VJHU', 21, 'fsfsd'),
(41, '21', 'A17VJHU', 22, 'dsfdsf'),
(42, '22', 'A17HCFE9', 9, 'sdfs');

-- --------------------------------------------------------

--
-- Table structure for table `test_name_tbl`
--

CREATE TABLE `test_name_tbl` (
  `test_id` int(11) UNSIGNED NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `test_description` varchar(250) NOT NULL,
  `test_type` varchar(20) DEFAULT NULL,
  `t_n_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test_name_tbl`
--

INSERT INTO `test_name_tbl` (`test_id`, `test_name`, `test_description`, `test_type`, `t_n_status`) VALUES
(6, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, 1),
(7, 'Lorem Ipsum is ', 'simply dummy text of the printing and typesetting industry.', NULL, 1),
(9, ' took a galley of type ', 'unknown printer took a galley of type and scrambled', NULL, 1),
(12, 'It is a long established', 'It is a long established fact that a reader will be distracted ', NULL, 1),
(13, 'the readable content', 'the readable content of a page when looking', NULL, 1),
(15, 'making it look', 'making it look like readable English', NULL, 1),
(16, 'Many desktop publishing', 'Many desktop publishing packages and web page editors now ', NULL, 1),
(17, 'Various versions', 'Various versions have evolved over the years', NULL, 1),
(18, 'Letraset sheets ', 'Letraset sheets containing Lorem Ipsum passages', NULL, 1),
(19, ' It has survived', ' It has survived not only five centuries', NULL, 1),
(20, 'x- ry', 'doctor', NULL, 1),
(21, 'fsdf', 'doctor', NULL, 1),
(22, 'sdafsad', 'doctor', NULL, 1),
(23, 'dsdfg', 'doctor', NULL, 1),
(24, 'dsfg', 'doctor', NULL, 1),
(25, 'This is Test Name', 'This is Test Description', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `log_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `birth_date` varchar(55) DEFAULT NULL,
  `sex` varchar(55) DEFAULT NULL,
  `blood_group` varchar(12) DEFAULT NULL,
  `address` text,
  `picture` varchar(100) DEFAULT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `log_id`, `full_name`, `user_email`, `user_phone`, `birth_date`, `sex`, `blood_group`, `address`, `picture`, `create_date`) VALUES
(4, 2, 'Test User', 'user@gmail.com', '01751194212', '1994-12-29', 'Female', 'A+', '                                            <p>Address</p>\r\n                                         ', 'http://localhost/DOCTOR-VS1.6/./assets/uploads/users/user.png', '2017-04-30 08:22:23'),
(5, 3, 'Tuhin', 't@gmail.com', '2134234234', '1993-04-29', 'Male', 'A+', 'test', '', '2017-04-29 06:47:25'),
(6, 4, 'Md User ', 'mduser@gmail.com', '01751194212', '1992-05-02', 'Male', 'A+', 'tea', 'http://localhost/DOCTOR-VS1.6/./assets/uploads/users/user1.png', '2017-05-02 08:06:22'),
(7, 5, 'Md TestUser', 'mdusers@gmail.com', '01751194212', '1983-05-02', 'Male', 'A-', 'aaaaaaaaaa', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/users/user3.png', '2017-05-02 06:38:07'),
(9, 7, 'Madddd', 'madddd@gmail.com', '01751194212', '1985-05-02', 'Male', 'A-', 'asdf', '', '2017-05-02 11:13:53'),
(10, 8, 'Mtest', 'mmmmmm@gmail.com', '01751194212', '1974-05-02', 'Male', 'A+', 'testaa', 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/users/Man.png', '2017-05-02 11:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `venue_tbl`
--

CREATE TABLE `venue_tbl` (
  `venue_id` int(11) UNSIGNED NOT NULL,
  `venue_name` text NOT NULL,
  `venue_contact` varchar(100) NOT NULL,
  `venue_address` text NOT NULL,
  `venue_map` text,
  `create_id` int(11) NOT NULL,
  `venue_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `venue_tbl`
--

INSERT INTO `venue_tbl` (`venue_id`, `venue_name`, `venue_contact`, `venue_address`, `venue_map`, `create_id`, `venue_status`) VALUES
(1, 'Dhaka Medical Hospital', '01751194212', '<p>1911 Clement , GA 30303 , Dhaka -1220</p>', '                                                                                                                                                                                                                                                                                                                                                                \r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7420520779456!2d90.38769321527363!3d23.756576184586272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a3e16f549d%3A0x4935ab03b407e1cf!2sHotel+Farmgate!5e0!3m2!1sen!2sbd!4v1475670374909\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>                                                                                                                                                                                                                                                                                                                                        ', 1, 1),
(2, 'Venue Name Test', '01751194212', '<p>Venue Address, Green Road 98, Farmgate, Dhaka-1216</p>', '                                                                                                                                                                                \r\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7420520779456!2d90.38769321527363!3d23.756576184586272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a3e16f549d%3A0x4935ab03b407e1cf!2sHotel+Farmgate!5e0!3m2!1sen!2sbd!4v1475670374909\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>                                                                                                                                                                    ', 1, 1),
(3, 'Green Road', '01888237267', '98 Green Road', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_pages_tbl`
--

CREATE TABLE `web_pages_tbl` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text,
  `details` text,
  `sequence` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `icon` text,
  `picture` varchar(250) DEFAULT NULL,
  `head_line` text,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_pages_tbl`
--

INSERT INTO `web_pages_tbl` (`id`, `name`, `details`, `sequence`, `date`, `icon`, `picture`, `head_line`, `status`) VALUES
(1, 'phone', '+880 1922-279405', NULL, NULL, NULL, NULL, NULL, 1),
(2, 'email', 'hotline@gmail.com', NULL, NULL, NULL, NULL, NULL, 1),
(3, 'facebook', 'https://www.facebook.com/', NULL, NULL, NULL, NULL, NULL, 1),
(4, 'twitter', 'https://twitter.com/?lang=en', NULL, NULL, NULL, NULL, NULL, 1),
(5, 'linkedin', 'https://www.linkedin.com/', NULL, NULL, NULL, NULL, NULL, 1),
(6, 'youtube', 'https://twitter.com/?lang=en', NULL, NULL, NULL, NULL, NULL, 1),
(7, 'google', 'https://plus.google.com/', NULL, NULL, NULL, NULL, NULL, 1),
(8, 'hotline', '+88 10751-194212', NULL, NULL, NULL, NULL, NULL, 1),
(9, 'working_des', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <p>Substract, allowing the most important elements to come forward. This results in simple yet sophisticated user experience and designs that we, and our clients, are ver Substract, allowing the most important elements to come forward. This results in simple yet sophisticated user experience and designs that we, and our clients, are ver</p>\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', NULL, NULL, NULL, NULL, NULL, 1),
(11, 'logo', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/2.png', NULL, 1),
(12, 'about_img', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/doctor.png', NULL, 1),
(13, 'about_img', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/doctor.png', NULL, 1),
(14, 'about_img', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/doctor.png', NULL, 1),
(15, 'app_image', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/appoin1.png', NULL, 1),
(16, 'google_map', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7420520779456!2d90.38769321527363!3d23.756576184586272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a3e16f549d%3A0x4935ab03b407e1cf!2sHotel+Farmgate!5e0!3m2!1sen!2sbd!4v1475670374909\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ', NULL, NULL, NULL, NULL, NULL, 1),
(17, 'total_appointment_details', 'Lorem Ipsum is simply dummy text ofthe industry\'s standard ', NULL, NULL, NULL, NULL, NULL, 1),
(18, 'today_appointment_details', 'Text Area  text ofthe industry\'s standard  Lorem Ipsum is simply', NULL, NULL, NULL, NULL, NULL, 1),
(19, 'total_patient_details', 'Ipsum is simply dummy text ofthe industry\'s standard ', NULL, NULL, NULL, NULL, NULL, 1),
(20, 'address', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      98 Green road, Farmgate, Dhaka-1215                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', NULL, NULL, NULL, NULL, NULL, 1),
(21, 'twitter_post', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <a class=\"twitter-timeline\" data-height=\"260\" data-dnt=\"true\" href=\"https://twitter.com/TwitterDev\">Tweets by TwitterDev</a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ', NULL, NULL, NULL, NULL, NULL, 1),
(22, 'footer_picture', NULL, NULL, NULL, NULL, 'http://localhost/DOCTOR-VS1.5/./assets/uploads/images/doctor2.png', NULL, 1),
(23, 'website_on_off', 'on', NULL, NULL, NULL, NULL, NULL, 1),
(24, 'third_party_api', '', NULL, NULL, NULL, NULL, NULL, 1),
(25, 'copy_right', '<p>Developed By <a href=\"http://bdtask.com/\">BDtask</a></p>', NULL, NULL, NULL, NULL, NULL, 1),
(26, 'website_title', 'DoctoreSs', NULL, NULL, NULL, NULL, NULL, 1),
(27, 'footer_picture', NULL, NULL, NULL, NULL, 'http://localhost/DOCTOR-VS1.5/./assets/uploads/images/doctor1.png', NULL, 1),
(28, 'footer_picture', NULL, NULL, NULL, NULL, 'http://localhost/DOCTOR-VS1.6/./assets/uploads/images/logo35.png', NULL, 1),
(29, 'footer_picture', NULL, NULL, NULL, NULL, 'http://localhost/DOCTOR-VS1.6/./assets/uploads/images/logo1.png', NULL, 1),
(30, 'footer_picture', NULL, NULL, NULL, NULL, 'http://localhost/DOCTOR-VS1.6/./assets/uploads/images/logo1.png', NULL, 1),
(31, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(32, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(33, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(34, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(35, 'timezone', 'Asia/Dhaka', NULL, NULL, NULL, NULL, NULL, 1),
(36, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(37, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(38, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(39, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(40, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(41, 'footer_picture', NULL, NULL, NULL, NULL, 'http://softest1.bdtask.com/doctor-vs1.6/./assets/uploads/images/logo11.png', NULL, 1),
(42, 'fabicon', NULL, NULL, NULL, NULL, 'http://demohospital.bdtask.com/MainDoctorFile/./assets/uploads/images/dr-fav2.png', NULL, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `action_serial`
-- (See below for the actual view)
--
CREATE TABLE `action_serial` (
`id` int(11) unsigned
,`appointment_id` varchar(250)
,`patient_id` varchar(250)
,`schedul_id` int(11)
,`date` date
,`sequence` varchar(100)
,`venue_id` int(11)
,`doctor_id` int(11)
,`problem` varchar(255)
,`get_date_time` datetime
,`get_by` int(11)
,`status` int(11)
,`day` int(11)
,`start_time` time
,`end_time` time
,`per_patient_time` int(11)
,`visibility` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `action_serial`
--
DROP TABLE IF EXISTS `action_serial`;

CREATE SQL SECURITY DEFINER VIEW `action_serial`  AS  select `appointment_tbl`.`id` AS `id`,`appointment_tbl`.`appointment_id` AS `appointment_id`,`appointment_tbl`.`patient_id` AS `patient_id`,`appointment_tbl`.`schedul_id` AS `schedul_id`,`appointment_tbl`.`date` AS `date`,`appointment_tbl`.`sequence` AS `sequence`,`appointment_tbl`.`venue_id` AS `venue_id`,`appointment_tbl`.`doctor_id` AS `doctor_id`,`appointment_tbl`.`problem` AS `problem`,`appointment_tbl`.`get_date_time` AS `get_date_time`,`appointment_tbl`.`get_by` AS `get_by`,`appointment_tbl`.`status` AS `status`,`schedul_setup_tbl`.`day` AS `day`,`schedul_setup_tbl`.`start_time` AS `start_time`,`schedul_setup_tbl`.`end_time` AS `end_time`,`schedul_setup_tbl`.`per_patient_time` AS `per_patient_time`,`schedul_setup_tbl`.`visibility` AS `visibility` from (`appointment_tbl` join `schedul_setup_tbl`) where ((`appointment_tbl`.`schedul_id` = `schedul_setup_tbl`.`schedul_id`) and (`schedul_setup_tbl`.`status` = '1')) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advice_prescriptiion`
--
ALTER TABLE `advice_prescriptiion`
  ADD PRIMARY KEY (`advice_prescription_id`);

--
-- Indexes for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_setting`
--
ALTER TABLE `app_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_sms_info`
--
ALTER TABLE `custom_sms_info`
  ADD PRIMARY KEY (`custom_sms_id`);

--
-- Indexes for table `doctor_advice`
--
ALTER TABLE `doctor_advice`
  ADD PRIMARY KEY (`advice_id`);

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`doctor_details_id`);

--
-- Indexes for table `doctor_tbl`
--
ALTER TABLE `doctor_tbl`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `email_config`
--
ALTER TABLE `email_config`
  ADD PRIMARY KEY (`email_config_id`);

--
-- Indexes for table `email_delivery`
--
ALTER TABLE `email_delivery`
  ADD PRIMARY KEY (`email_delivery_id`);

--
-- Indexes for table `email_info`
--
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_info_id`);

--
-- Indexes for table `email_schedule`
--
ALTER TABLE `email_schedule`
  ADD PRIMARY KEY (`email_ss_id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`email_temp_id`);

--
-- Indexes for table `emergency_stop_tbl`
--
ALTER TABLE `emergency_stop_tbl`
  ADD PRIMARY KEY (`stop_id`);

--
-- Indexes for table `generic_tbl`
--
ALTER TABLE `generic_tbl`
  ADD PRIMARY KEY (`generic_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_info`
--
ALTER TABLE `log_info`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `medecine_info`
--
ALTER TABLE `medecine_info`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `medicine_company_info`
--
ALTER TABLE `medicine_company_info`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `medicine_group_tbl`
--
ALTER TABLE `medicine_group_tbl`
  ADD PRIMARY KEY (`med_group_id`);

--
-- Indexes for table `medicine_prescription`
--
ALTER TABLE `medicine_prescription`
  ADD PRIMARY KEY (`med_pres_id`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `payment_account_setup`
--
ALTER TABLE `payment_account_setup`
  ADD PRIMARY KEY (`set_up_id`);

--
-- Indexes for table `payment_table`
--
ALTER TABLE `payment_table`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `print_pattern`
--
ALTER TABLE `print_pattern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedul_setup_tbl`
--
ALTER TABLE `schedul_setup_tbl`
  ADD PRIMARY KEY (`schedul_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_delivery`
--
ALTER TABLE `sms_delivery`
  ADD PRIMARY KEY (`sms_delivery_id`);

--
-- Indexes for table `sms_gateway`
--
ALTER TABLE `sms_gateway`
  ADD PRIMARY KEY (`gateway_id`);

--
-- Indexes for table `sms_info`
--
ALTER TABLE `sms_info`
  ADD PRIMARY KEY (`sms_info_id`);

--
-- Indexes for table `sms_schedule`
--
ALTER TABLE `sms_schedule`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `sms_teamplate`
--
ALTER TABLE `sms_teamplate`
  ADD PRIMARY KEY (`teamplate_id`);

--
-- Indexes for table `test_assign_for_patine`
--
ALTER TABLE `test_assign_for_patine`
  ADD PRIMARY KEY (`test_ass_id`);

--
-- Indexes for table `test_name_tbl`
--
ALTER TABLE `test_name_tbl`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `venue_tbl`
--
ALTER TABLE `venue_tbl`
  ADD PRIMARY KEY (`venue_id`);

--
-- Indexes for table `web_pages_tbl`
--
ALTER TABLE `web_pages_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advice_prescriptiion`
--
ALTER TABLE `advice_prescriptiion`
  MODIFY `advice_prescription_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `app_setting`
--
ALTER TABLE `app_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `custom_sms_info`
--
ALTER TABLE `custom_sms_info`
  MODIFY `custom_sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `doctor_advice`
--
ALTER TABLE `doctor_advice`
  MODIFY `advice_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `doctor_details`
--
ALTER TABLE `doctor_details`
  MODIFY `doctor_details_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctor_tbl`
--
ALTER TABLE `doctor_tbl`
  MODIFY `doctor_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email_config`
--
ALTER TABLE `email_config`
  MODIFY `email_config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email_delivery`
--
ALTER TABLE `email_delivery`
  MODIFY `email_delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `email_info`
--
ALTER TABLE `email_info`
  MODIFY `email_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `email_schedule`
--
ALTER TABLE `email_schedule`
  MODIFY `email_ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `email_temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `emergency_stop_tbl`
--
ALTER TABLE `emergency_stop_tbl`
  MODIFY `stop_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `generic_tbl`
--
ALTER TABLE `generic_tbl`
  MODIFY `generic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;
--
-- AUTO_INCREMENT for table `log_info`
--
ALTER TABLE `log_info`
  MODIFY `log_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `medecine_info`
--
ALTER TABLE `medecine_info`
  MODIFY `medicine_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `medicine_company_info`
--
ALTER TABLE `medicine_company_info`
  MODIFY `company_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `medicine_group_tbl`
--
ALTER TABLE `medicine_group_tbl`
  MODIFY `med_group_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `medicine_prescription`
--
ALTER TABLE `medicine_prescription`
  MODIFY `med_pres_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `payment_account_setup`
--
ALTER TABLE `payment_account_setup`
  MODIFY `set_up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment_table`
--
ALTER TABLE `payment_table`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `print_pattern`
--
ALTER TABLE `print_pattern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `schedul_setup_tbl`
--
ALTER TABLE `schedul_setup_tbl`
  MODIFY `schedul_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sms_delivery`
--
ALTER TABLE `sms_delivery`
  MODIFY `sms_delivery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sms_gateway`
--
ALTER TABLE `sms_gateway`
  MODIFY `gateway_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sms_info`
--
ALTER TABLE `sms_info`
  MODIFY `sms_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sms_schedule`
--
ALTER TABLE `sms_schedule`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sms_teamplate`
--
ALTER TABLE `sms_teamplate`
  MODIFY `teamplate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `test_assign_for_patine`
--
ALTER TABLE `test_assign_for_patine`
  MODIFY `test_ass_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `test_name_tbl`
--
ALTER TABLE `test_name_tbl`
  MODIFY `test_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `venue_tbl`
--
ALTER TABLE `venue_tbl`
  MODIFY `venue_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `web_pages_tbl`
--
ALTER TABLE `web_pages_tbl`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
