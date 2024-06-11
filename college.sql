/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.7.9 : Database - college
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`college` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `college`;

/*Table structure for table `academicschedule` */

DROP TABLE IF EXISTS `academicschedule`;

CREATE TABLE `academicschedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) DEFAULT NULL,
  `file` varchar(1000) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `academicschedule` */

insert  into `academicschedule`(`schedule_id`,`teacher_id`,`file`,`date`) values 
(1,3,'static/afe9c4a9-c5c4-47d3-ae1a-64765779dd7babc (1).jpg','2023-07-06');

/*Table structure for table `activity` */

DROP TABLE IF EXISTS `activity`;

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int(11) DEFAULT NULL,
  `activity` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `activity` */

insert  into `activity`(`activity_id`,`teacher_id`,`activity`) values 
(1,3,'bca');

/*Table structure for table `assignment` */

DROP TABLE IF EXISTS `assignment`;

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `assignment` varchar(1000) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`assignment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `assignment` */

insert  into `assignment`(`assignment_id`,`student_id`,`assignment`,`date`) values 
(1,1,'static/9eac3450-70b8-49d1-9956-d8347020500cabc.jpg','2023-06-28'),
(2,2,'static/9eac3450-70b8-49d1-9956-d8347020500cabc.jpg','2023-07-04'),
(3,9,'static/9eac3450-70b8-49d1-9956-d8347020500cabc.jpg','2023-07-05');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `complaint` varchar(100) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`complaint_id`,`student_id`,`complaint`,`reply`,`date`) values 
(1,2,'cghh','nowjkwawdka','2023-07-05'),
(2,2,'mzdzzd','pending','2023-07-05');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

insert  into `feedback`(`feedback_id`,`student_id`,`feedback`,`date`) values 
(1,1,'yes','2023-03-21'),
(2,2,'vgf','2023-07-05'),
(3,2,'hai','2023-07-05');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values 
(1,'par','par','parent'),
(2,'admin','admin','admin'),
(6,'se','student','student'),
(12,'te','teacher','teacher');

/*Table structure for table `mark` */

DROP TABLE IF EXISTS `mark`;

CREATE TABLE `mark` (
  `mark_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `mark` varchar(100) DEFAULT NULL,
  `grade` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mark_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `mark` */

insert  into `mark`(`mark_id`,`subject_id`,`student_id`,`teacher_id`,`mark`,`grade`) values 
(1,1,1,3,'20','c'),
(2,1,1,3,'20','c'),
(3,1,1,3,'3','e'),
(4,1,1,3,'40','a'),
(5,1,1,3,'30','4'),
(6,1,1,3,'30','4'),
(7,1,1,3,'40','a'),
(8,1,1,3,'40','a'),
(9,1,1,3,'40','a'),
(10,1,1,3,'40','a');

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

insert  into `notification`(`notification_id`,`notification`,`date`) values 
(1,'nowjkwawdka','2023-07-04');

/*Table structure for table `skillpredict` */

DROP TABLE IF EXISTS `skillpredict`;

CREATE TABLE `skillpredict` (
  `skillpredict_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `file` varchar(1000) DEFAULT NULL,
  `out` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`skillpredict_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `skillpredict` */

insert  into `skillpredict`(`skillpredict_id`,`user_id`,`activity_id`,`file`,`out`,`date`) values 
(1,1,1,'static/uploadscdd88c3b-72c8-4d80-a731-65308c020197abc.jpg','responsible','2023-07-25'),
(2,1,1,'static/uploads4ea38cc8-f2b5-4f60-bde6-c06443ed8abcabc.jpg','responsible','2023-07-25');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`student_id`,`login_id`,`fname`,`lname`,`gender`,`phone`,`email`,`semester`) values 
(1,6,'user1','qwerty1','place1','2345678907','student@gmail.com','3'),
(2,9,'users','23456789074','male','76576587','ghuh','5');

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`subject_id`,`subject_name`) values 
(1,'bca');

/*Table structure for table `teacher` */

DROP TABLE IF EXISTS `teacher`;

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `subject_id` int(10) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `teacher` */

insert  into `teacher`(`teacher_id`,`login_id`,`first_name`,`last_name`,`subject_id`,`phone`,`email`) values 
(1,4,'user','qwerty',1,'2345678907','student@gmail.com'),
(3,12,'user','qwerty',1,'9876738908','renukakamath2@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
