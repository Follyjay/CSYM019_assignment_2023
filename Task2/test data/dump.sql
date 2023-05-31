-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: course_work
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `overview` text NOT NULL,
  `highlights` text NOT NULL,
  `details` text NOT NULL,
  `fees` float NOT NULL,
  `faq` text NOT NULL,
  `requirement1` varchar(30) NOT NULL,
  `requirement2` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Business Management BA (Hons)','Our innovative BA (Hons) Business Management Degree, accredited by the Chartered Management Institute (CMI), takes a practical approach to exploring contemporary business practices, contexts and debates.','1. Graduate with a Chartered Management Institute (CMI) Diploma in Leadership and Management*, a respected professional qualification proven to boost earnings potential.\r\n2. Subject pathways at stage two and three allowing you to specialise in your area of interest.','The programme is based on developing your understanding of core business management principles, applied to authentic business contexts. Key themes have been woven into the course design, in consultation with employers and students, to maximise your learning, your employability and your course satisfaction.',9600,'Our Business Management degree is taught through a combination of face to face sessions, self-study, and online learning comprises live sessions and interactive work units.','BCC at A Level or DMM at BTEC ','IELTS 6.0 (or equivalent) with'),(2,'Biological Sciences BSc (Hons)','Our Biological Sciences BSc (Hons) degree enables you to study and investigate the diverse aspects of the biological, environmental and life sciences in order to develop a detailed knowledge and understanding of the interconnection between organisms and the environment.','1. Select the topics that most interests you, designing your degree to your individual interests and career aspirations.\r\n2. Lots of applied, practical laboratory classes in new £330 million Waterside Campus.','A wide and diverse range biological aspects of science are explored throughout this degree programme. This Biological Sciences interdisciplinary degree provides you with the opportunity to develop a broad knowledge base in the first year of study before specialising in topics and disciplines in the second and third year.',9250,'Teaching and learning occurs through a variety of methods, with laboratory practicals, workshops, learning how to use new software, fieldwork, seminars and lectures.','BCC at A Level or DMM at BTEC ','IELTS 6.0 (or equivalent) with'),(3,'Business Computing BSc (Hons)','Business Computing BSc (Hons) approaches computing from a professional perspective and is designed to tackle the application of technology in a commercial context. It explores the design, implementation, and application of technical solutions to industry’s challenges.','1. Coverage of fundamental principles of computer science with plenty of practical applications.\r\n2. A state-of-the-art computer lab for teaching and learning.\r\n3. Progression courses available.','Business Computing BSc (Hons) shares a common first year with other Computing pathways, with flexible progression into the second year. On Business Computing you will have the option to tailor your second and third years to specialise to suit your career aspirations and curiosities.',9250,'You will spend 12 hours per week in class.  Including self-directed study time you will spend 200 hours in total on each 20 credit module.','BCC at A Level or DMM at BTEC ','IELTS 6.0 (or equivalent) with'),(4,'Criminal and Corporate Investigation BA (Hons)','Throughout your criminal investigation degree studies, you will develop the necessary industry standard skills and experience to carry out professional investigations to the highest level within commercial, public or criminal justice settings.','1. Teaching team has experience in the management and investigation of serious and major crimes.\r\n2. HP laptop and software included with this course for eligible student. Eligibility criteria and terms and conditions apply.','It is essential that all investigations are carried out professionally, so our Criminal and Corporate Investigation course will ensure that you gain the essential legal knowledge and ability to conduct professional investigations whilst securing admissible evidence. The combination of practical role-play based activities and classroom teaching ensures that you are confident in your skills and knowledge, allowing you to be valuable asset to any organisation upon graduation with a criminal investigation degree.',9250,'Assessments on the BA (Hons) Criminal and Corporate Investigation course are varied and consist of the following methods:\r\n\r\npresentations, essays, assignments, skills labs, practical exercises, reports, reflective accounts and video presentations, exams and multiple choice tests, Paper based assignments are submitted electronically and are returned within four weeks.','BCC at A Level or DMM at BTEC ','IELTS 6.0 (or equivalent) with'),(5,'Engineering BSc (Hons)','Engineering is an evolving sector that needs engineers with a wide variety of knowledge and skills. Our Engineering BSc (Hons) course will give you the foundations, key principles and professional skills you need in modern engineering and related industries. Our staff have significant industrial experience and use the latest learning and teaching technology.','1. Collaboration with local engineering companies (NETP)\r\n2. Dedicated specialist lab facilities – view our Engineering Teaching Labs Tour\r\n3. Placement opportunities available on the Engineering BSc\r\n4. Progression courses available','During your first year studying Engineering BSc (Hons), you will be introduced to the fundamental principles and concepts of engineering, along with knowledge and understanding of technical requirements and management issues. You will also cover design and analytical principles and materials science.',9250,'We use a variety of innovative study methods to help you address new challenges and theoretical learning complemented by practical classes and lab exercises to enhance your experience and develop your hands-on skills. You will be immersed in the multidisciplinary field of engineering by using computer simulation tools, mechanical and embedded system design.','BCC at A Level or DMM at BTEC ','IELTS 6.0 (or equivalent) with'),(6,'Accounting and Finance MSc','Our MSc Accounting and Finance course provides you with the essential skills needed for pursuing a high level career in finance across all types of organisations; public and private sector, within industry and commerce, both in the UK and abroad.','1. Benefit from the full support of professionally qualified staff\r\n2. Some exemptions from professional examinations are available from main professional bodies','By gaining your Accounting and Finance masters through the University of Northampton, you will gain practical knowledge that can be applied in a work setting, with flexible study that is delivered online. You will also benefit from the full support of professionally qualified staff and engagement with your fellow students.',8010,'On our MSc in Accounting and Finance, you will typically have nine hours (approx.) of contact time with your tutor in the first semester and 11 hours (approx.) in the second semester. Overall you will spend 108 hours per module in self-directed study (reading and research)','BCC at A Level','IELTS 6.0 (or equivalent) with'),(7,'International Business Management MSc','Our MSc in International Business Management is designed for people from a diversity of backgrounds, so you won’t need to have specific work or academic experience in business and management.','1. Assessments that reflect real business situations including undertaking a professional practice in International Business project\r\n2. Staff and students from all over the world with a variety of backgrounds and cultures','The international business management course is relevant to those with or without a business degree, although a minimum of a 2:2 classification is required and will prepare you for managerial roles across this emerging global economy.\r\n\r\nThe master of business management will build upon your existing capabilities from your first discipline and will develop your conceptual and theoretical understanding of business and management issues, problems and opportunities.',8010,'For this international business management MSc, you can expect taught study to be a combination of sessions, seminars and workshops and usually 12 hours per week, we recommend that you spend approximately 20 hours per week in self-directed study time. You will attend sessions, seminars and workshops throughout two taught semesters (14 weeks each). Work on the dissertation normally commences in the second semester and is submitted at the 12 month point.','BCC at A Level','IELTS 6.0 (or equivalent) with'),(8,'Computing MSc','With the computing field evolving rapidly around the world, the need for good quality professionals and specialists is increasing. Our Masters in Computing course has been designed to build on your existing computing skills and take them to the next level. It has a significant programming component and is different from other IT programmes.','1. Tailor degree to your individual needs and interests on our MSc Computing\r\n2. Specialist or broad pathway available\r\n3. Industry Placement Option available.\r\n4. Interactive Teaching with small classroom sizes.','There are two ways to study this Computing MSc course. You can take the general pathway, giving you a rounded computing education and a broad qualification, or you can take the specialist pathways to focus on a defined section of computing and meet your career aspirations with the MSc computing skills. While the pathway option is mostly technical in focus, you will also learn about the business context and develop interpersonal skills that are vital to problem solving in business.',8010,'A Masters in Computing will not only supply you with the sufficient knowledge needed to enter into the IT and Technology sectors, but you will also have the room to develop your existing expertise and practice gained from previous levels of undergraduate study.','BCC at A Level','IELTS 6.0 (or equivalent) with'),(9,'Molecular Medicine MSc','The Molecular Medicine MSc programme supports you to develop your knowledge and understanding and is aimed at individuals with prior knowledge of, or keen interest in, molecular medicine and genetics and genomics.','1. Subject specific modules in molecular medicine to meet your career aspirations.\r\n2. Well-equipped biomedical science laboratories for learning and research.\r\n3. Apply and develop your skills in a practical setting.','In the Molecular Medicine module, you will study interdisciplinary approaches to understanding normal and pathological systems and processes at the molecular level, including novel treatments and drug development. In Genes and Genomics, you will gain in-depth knowledge of both molecular genetics and genomics, including bioinformatics and large data analyses with a focus upon novel technologies.',8010,'Areas of focus include immunological cancers, diagnosis and mechanisms of bacterial infections and antimicrobial resistance, the pathology of neuromuscular disorders, neurological and neurodegenerative disease and the role of bioenergetics in health and disease.','minimum 2.2 class honours degr','IELTS 6.5 (or equivalent) with'),(10,'Advanced Design and Manufacturing MSc','Our Advanced Design and Manufacturing MSc addresses the complete life cycle of a product or process, from conception through to design and manufacture to disposal. This highly applied programme develops students’ knowledge and understanding of the scientific principles underpinning engineering in the field of design and manufacturing, and of the accompanying legal, ethical and professional considerations. There is a strong focus on integrating current research and developments into learning and teaching.','1. The course offers the opportunity to examine emerging concepts such as Digital Manufacturing and industry 4.0\r\n2. Course accredited by IMechE (Institution of Mechanical Engineers)','This Advanced Design and Manufacturing MSc programme has been developed to meet the needs of companies and industry in the UK and overseas. It is specifically designed to increase the employability of its learners in a design and manufacturing context by identifying new service, strategy and product opportunities, and conducting projects in collaboration with industrial partners. This manufacturing design programme covers areas such as digital manufacturing and industry 4.0, 3D printing and artificial intelligence.',8010,'The main assessment methods used within the programme are Assignment (Report, Critical reflection/Journal, etc.), Essay, Presentation (Oral or Poster). However, some modules may expect to take tests, exams or hands-on activity. Students on the MSc programme will have to submit a dissertation as part of their Business Research Project Module.','recognised first or second cla','IELTS 6.5 (or equivalent) with');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `course_title` varchar(50) NOT NULL,
  `module_title` varchar(30) NOT NULL,
  `module_code` varchar(11) NOT NULL,
  `units` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES ('Business Management BA (Hons)','Finance and Financial Systems','ACC1900',20),('Business Management BA (Hons)','Global Business in Context','BUS1900',30),('Business Management BA (Hons)','The Digital Professional','BUS1901',20),('Business Management BA (Hons)','Work, Business and Change','BUSS1902',30),('Business Management BA (Hons)','Consumers, Markets and Entrepr','MKT1900',20),('Biological Sciences BSc (Hons)','Introduction to Ecology','ENV1002',20),('Biological Sciences BSc (Hons)','Life on Earth','ENV1126',20),('Biological Sciences BSc (Hons)','Biochemistry and Cell Biology','SLS1013',20),('Biological Sciences BSc (Hons)','Introduction to Microbiology','SLS1019',20),('Biological Sciences BSc (Hons)','Genetics and Molecular biology','SLS1020',20),('Business Computing BSc (Hons)','Digital Footprint','CSY1030',20),('Business Computing BSc (Hons)','Computer Systems','CSY1061',20),('Business Computing BSc (Hons)','Web Development','CSY1063',20),('Business Computing BSc (Hons)','Software Engineering Fundament','CSY1064',20),('Business Computing BSc (Hons)','Problem Solving & Programming','CSY1020',20),('Criminal and Corporate Investigation BA (Hons)','Law and the Criminal Justice S','CJS1001',20),('Criminal and Corporate Investigation BA (Hons)','Legislation for Policing and I','CJS1004',20),('Criminal and Corporate Investigation BA (Hons)','Theoretical Concepts In Crime ','CJS1007',20),('Criminal and Corporate Investigation BA (Hons)','Introduction to Academic Metho','CJS1013',10),('Criminal and Corporate Investigation BA (Hons)','Introduction to Evidence and P','CJS1015',10),('Engineering BSc (Hons)','Introduction to Engineering De','ENG1004',20),('Engineering BSc (Hons)','Electrical Principles','ENG1005',20),('Engineering BSc (Hons)','Mechanical Principles','ENG1006',20),('Engineering BSc (Hons)','Materials Science','ENG1007',20),('Engineering BSc (Hons)','Analytical Methods for Technol','ENG1047',20),('Accounting and Finance MSc','Global Financial Strategy','FINM009',20),('Accounting and Finance MSc','Financial and Business Strateg','FINM010',20),('Accounting and Finance MSc','Strategic Audit','FINM012',20),('Accounting and Finance MSc','Corporate Social Responsibilit','FINM024',20),('Accounting and Finance MSc','Dissertation and Research Meth','FINM25',60),('International Business Management MSc','International Logistics and Su','BSOM034',20),('International Business Management MSc','Accounting and Finance for Dec','FINM050',20),('International Business Management MSc','Dynamics of Strategy','STRM083',20),('International Business Management MSc','Business Strategy Simulation','STRM086',20),('International Business Management MSc','Professional Practice in Inter','STRM090',60),('Computing MSc','Intelligent Systems','CSYM015',20),('Computing MSc','Databases','CSYM017',20),('Computing MSc','Internet Programming','CSYM019',20),('Computing MSc','Mobile Device Software Develop','CSYM030',20),('Computing MSc','Dissertation','CSYM023',60),('Molecular Medicine MSc','Molecular Medicine','SLSM012',20),('Molecular Medicine MSc','Current topics in Molecular Bi','SLSM015',20),('Molecular Medicine MSc','Genetics and Genomics','SLSM014',20),('Molecular Medicine MSc','Applied Practice','SPOM019',40),('Molecular Medicine MSc','Molecular Bioscience Dissertat','SLSM013',60),('Advanced Design and Manufacturing MSc','Mathematical Modelling','ENGM001',20),('Advanced Design and Manufacturing MSc','Computer-Aided Analysis and Vi','ENGM004',20),('Advanced Design and Manufacturing MSc','Individual Engineering Project','ENGM005',60),('Advanced Design and Manufacturing MSc','Professional Practice for Tech','ENGM009',20),('Advanced Design and Manufacturing MSc','Product Design','ENGM010',20);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-30  6:56:12
