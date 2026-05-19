CREATE DATABASE University_Result_Management;
USE University_Result_Management;

CREATE TABLE student (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(20) UNIQUE,
    name VARCHAR(100),
    department VARCHAR(50),
    semester VARCHAR(20)
);

CREATE TABLE course (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_code VARCHAR(20) UNIQUE,
    course_name VARCHAR(100),
    credit DOUBLE
);

CREATE TABLE marks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(20),
    course_code VARCHAR(20),
    marks DOUBLE,
    grade VARCHAR(5),
    gpa DOUBLE
);

ALTER TABLE marks

ADD CONSTRAINT fk_student
FOREIGN KEY (student_id)
REFERENCES student(student_id),

ADD CONSTRAINT fk_course
FOREIGN KEY (course_code)
REFERENCES course(course_code);

CREATE TABLE teacher(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(100)
);


INSERT INTO student (student_id, name, department, semester)
VALUES
('CSE101','Tawhid Islam','CSE','Spring 2026'),
('CSE102','Rahim Ahmed','CSE','Spring 2026'),
('CSE103','Karim Hasan','CSE','Spring 2026'),
('CSE104','Nusrat Jahan','CSE','Spring 2026'),
('CSE105','Sadia Akter','CSE','Spring 2026'),
('CSE106','Fahim Hasan','CSE','Spring 2026'),
('CSE107','Jannat Mim','CSE','Spring 2026'),
('CSE108','Rakib Hossain','CSE','Spring 2026'),
('CSE109','Sakib Ahmed','CSE','Spring 2026'),
('CSE110','Tanvir Islam','CSE','Spring 2026'),
('CSE111','Afsana Noor','CSE','Spring 2026'),
('CSE112','Mithila Akter','CSE','Spring 2026'),
('CSE113','Nayeem Hasan','CSE','Spring 2026'),
('CSE114','Rifat Ahmed','CSE','Spring 2026'),
('CSE115','Mahin Chowdhury','CSE','Spring 2026'),
('CSE116','Samiul Islam','CSE','Spring 2026'),
('CSE117','Farzana Yasmin','CSE','Spring 2026'),
('CSE118','Jubayer Hossain','CSE','Spring 2026'),
('CSE119','Adiba Noor','CSE','Spring 2026'),
('CSE120','Sohan Ahmed','CSE','Spring 2026'),
('CSE121','Nabil Hasan','CSE','Spring 2026'),
('CSE122','Raisa Akter','CSE','Spring 2026'),
('CSE123','Tamim Hossain','CSE','Spring 2026'),
('CSE124','Shuvo Ahmed','CSE','Spring 2026'),
('CSE125','Mariam Islam','CSE','Spring 2026'),
('CSE126','Arif Hasan','CSE','Spring 2026'),
('CSE127','Anika Noor','CSE','Spring 2026'),
('CSE128','Fardin Ahmed','CSE','Spring 2026'),
('CSE129','Tania Akter','CSE','Spring 2026'),
('CSE130','Rony Hossain','CSE','Spring 2026'),
('CSE131','Mim Akter','CSE','Spring 2026'),
('CSE132','Shakil Ahmed','CSE','Spring 2026'),
('CSE133','Arafat Hasan','CSE','Spring 2026'),
('CSE134','Labiba Noor','CSE','Spring 2026'),
('CSE135','Fahad Islam','CSE','Spring 2026'),
('CSE136','Sajid Ahmed','CSE','Spring 2026'),
('CSE137','Rimsha Akter','CSE','Spring 2026'),
('CSE138','Nadim Hasan','CSE','Spring 2026'),
('CSE139','Muntasir Ahmed','CSE','Spring 2026'),
('CSE140','Sadia Noor','CSE','Spring 2026'),
('CSE141','Jahid Hasan','CSE','Spring 2026'),
('CSE142','Mahmud Islam','CSE','Spring 2026'),
('CSE143','Fariha Akter','CSE','Spring 2026'),
('CSE144','Tahmid Ahmed','CSE','Spring 2026'),
('CSE145','Rashed Hasan','CSE','Spring 2026'),
('CSE146','Tanjina Noor','CSE','Spring 2026'),
('CSE147','Nafis Ahmed','CSE','Spring 2026'),
('CSE148','Ruba Akter','CSE','Spring 2026'),
('CSE149','Mahir Hasan','CSE','Spring 2026'),
('CSE150','Raihan Islam','CSE','Spring 2026');



INSERT INTO course (course_code, course_name, credit)
VALUES
('CSE111','Introduction to Programming',3.0),
('CSE221','Database Management System',3.0),
('CSE231','Data Structures',3.0),
('CSE241','Algorithms',3.0),
('CSE251','Web Development',3.0),
('MAT121','Mathematics',3.0),
('ENG101','English',2.0),
('EEE110','Basic Electronics',3.0),
('STA101','Statistics',3.0),
('PHY101','Physics',3.0);



INSERT INTO marks (student_id, course_code, marks, grade, gpa)
VALUES

('CSE101','CSE111',85,'A+',4.00),
('CSE101','MAT121',77,'A',3.75),
('CSE101','ENG101',72,'A-',3.50),

('CSE102','CSE111',68,'B+',3.25),
('CSE102','CSE221',61,'B',3.00),
('CSE102','ENG101',56,'B-',2.75),

('CSE103','CSE231',52,'C+',2.50),
('CSE103','MAT121',47,'C',2.25),
('CSE103','ENG101',42,'D',2.00),

('CSE104','EEE110',35,'F',0.00),
('CSE104','MAT121',88,'A+',4.00),
('CSE104','ENG101',74,'A-',3.50),

('CSE105','CSE111',79,'A',3.75),
('CSE105','STA101',66,'B+',3.25),
('CSE105','PHY101',58,'B-',2.75),

('CSE106','CSE221',91,'A+',4.00),
('CSE106','MAT121',83,'A+',4.00),
('CSE106','ENG101',64,'B',3.00),

('CSE107','EEE110',73,'A-',3.50),
('CSE107','STA101',55,'B-',2.75),
('CSE107','PHY101',45,'C',2.25),

('CSE108','CSE251',82,'A+',4.00),
('CSE108','ENG101',76,'A',3.75),
('CSE108','MAT121',62,'B',3.00),

('CSE109','STA101',51,'C+',2.50),
('CSE109','PHY101',43,'D',2.00),
('CSE109','ENG101',38,'F',0.00),

('CSE110','CSE221',87,'A+',4.00),
('CSE110','MAT121',71,'A-',3.50),
('CSE110','ENG101',67,'B+',3.25),

('CSE111','EEE110',63,'B',3.00),
('CSE111','STA101',57,'B-',2.75),
('CSE111','PHY101',49,'C',2.25),

('CSE112','CSE231',92,'A+',4.00),
('CSE112','ENG101',78,'A',3.75),
('CSE112','MAT121',69,'B+',3.25),

('CSE113','STA101',54,'C+',2.50),
('CSE113','PHY101',44,'D',2.00),
('CSE113','ENG101',33,'F',0.00),

('CSE114','CSE241',89,'A+',4.00),
('CSE114','MAT121',81,'A+',4.00),
('CSE114','ENG101',74,'A-',3.50),

('CSE115','EEE110',65,'B+',3.25),
('CSE115','STA101',59,'B-',2.75),
('CSE115','PHY101',46,'C',2.25),

('CSE116','CSE251',84,'A+',4.00),
('CSE116','ENG101',75,'A',3.75),
('CSE116','MAT121',63,'B',3.00),

('CSE117','STA101',53,'C+',2.50),
('CSE117','PHY101',41,'D',2.00),
('CSE117','ENG101',37,'F',0.00),

('CSE118','CSE111',86,'A+',4.00),
('CSE118','CSE221',77,'A',3.75),
('CSE118','MAT121',72,'A-',3.50),

('CSE119','EEE110',69,'B+',3.25),
('CSE119','STA101',60,'B',3.00),
('CSE119','PHY101',55,'B-',2.75),

('CSE120','CSE231',88,'A+',4.00),
('CSE120','ENG101',73,'A-',3.50),
('CSE120','MAT121',64,'B',3.00),

('CSE121','CSE111',50,'C+',2.50),
('CSE121','ENG101',47,'C',2.25),
('CSE121','PHY101',42,'D',2.00),

('CSE122','CSE221',39,'F',0.00),
('CSE122','MAT121',82,'A+',4.00),
('CSE122','ENG101',76,'A',3.75),

('CSE123','EEE110',71,'A-',3.50),
('CSE123','STA101',68,'B+',3.25),
('CSE123','PHY101',57,'B-',2.75),

('CSE124','CSE241',52,'C+',2.50),
('CSE124','MAT121',45,'C',2.25),
('CSE124','ENG101',40,'D',2.00),

('CSE125','CSE251',36,'F',0.00),
('CSE125','ENG101',91,'A+',4.00),
('CSE125','MAT121',79,'A',3.75);



INSERT INTO teacher(name,email,password) VALUES
('Rahim Ali','rahim.cse@metrouni.edu','rahim123'),
('Karim Khan','karim.cse@metrouni.edu','karim123'),
('Nusrat Jahan','nusrat.cse@metrouni.edu','nusrat123'),
('Fahim Ahmed','fahim.cse@metrouni.edu','fahim123'),
('Jannat Mou','jannat.cse@metrouni.edu','jannat123');