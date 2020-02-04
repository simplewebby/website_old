-- create database
DROP DATABASE IF EXISTS final_project;
 CREATE DATABASE final_project;

-- select database
USE final_project;


CREATE TABLE projects
(
project_id       INT         PRIMARY  KEY   NOT NULL,
project_name  VARCHAR(50)   NOT NULL,
project_manager_name  VARCHAR(50),
project_description VARCHAR(50),
project_size INT NOT NULL);





CREATE TABLE insurances
(
insurance_id        INT    PRIMARY  KEY   AUTO_INCREMENT,
insurance_name   VARCHAR(50)  NOT NULL,
order_date        DATE        NOT NULL,
expiration_date      DATE);


-- create tables
CREATE TABLE employees
(
  employee_id           INT       PRIMARY  KEY      AUTO_INCREMENT,
  employee_first_name   VARCHAR(50),
  employee_last_name    VARCHAR(50)     NOT NULL,
  employee_address      VARCHAR(255)    NOT NULL,
  employee_city         VARCHAR(50)     NOT NULL,
  employee_state        CHAR(2)         NOT NULL,
  employee_zip          VARCHAR(20)     NOT NULL,
  employee_phone        VARCHAR(30)     NOT NULL,
  project_id_d   INT             NOT NULL,
  insurance_id_d  INT  NOT NULL,
  CONSTRAINT employees_fk_project
  FOREIGN KEY (project_id_d)
  REFERENCES projects (project_id),

  CONSTRAINT employees_fk_insurances
  FOREIGN KEY (insurance_id_d)
  REFERENCES insurances (insurance_id));





INSERT INTO projects
VALUES
( 10, 'Yonkers', 'Sam', 'Multifamily house' , 509 ),
(20, 'Plaza Station at Aberdeen', 'Jared', 'Stacked', 388),
( 30,'Gateway at Metachen', 'Paulo', 'Commercial', 700),
( 40,'Village Green', 'Christian','Multifamily house' , 301),
(50, 'Animal Hospital', 'Wilson', 'Commercial', 698);



INSERT INTO insurances
VALUES
(1,  'Progressive', '2017-10-23', '2019-10-28'),
(2, 'AllState' ,'2017-11-05','2022-11-05'),
(3, 'Farmers' ,'2017-11-05',  '2020-11-05'),
(4,'Aflac' ,'2017-01-05', '2018-01-19'),
(5,  'State Farm', '2017-12-23', '2019-12-28');


INSERT INTO employees
VALUES
( 1,'Korah', 'Blanca', '1555 W Lane Ave', 'Columbus', 'OH', '43221', '6145554435', 10, 1),
( 2,'Lisa', 'Brown', '15 Lane Street', 'Monroe', 'NJ', '00221', '7325554435', 20, 3 ),
( 3,'Jamie', 'Black', '2 Violet Street', 'Jackson', 'NJ', '08271', '4535444435', 30, 2),
(4,'Irine', 'Holl', '1New Lane ', 'Lakewood', 'OH', '07756', '7546787654' ,40, 4),
(5, 'Alex', 'Garett', '2 Main St', 'Toms River', 'WA', '00987', '9178769090',50, 5),
(6, 'Judy', 'Exelrod', '55 Broad Street', 'Jamesburg', 'AZ', '34233', '7879087764', 40, 5),
(7, 'Blake', 'Shelton', '67 Wood St', 'Westwood', 'CA', '44421', '69088888889',40, 1),
( 8,'Ellen', 'Merke', '3 Liberty Ave', 'Freehold', 'IL', '55555', '56455555555', 20, 2),
(9 ,'Megan', 'Poth', '43 Terrace Ave', 'Moscow', 'HI', '55522', '4533444444', 20,3),
(10, 'Ardian', 'Gomez', '123 Mood St', 'New York', 'NY', '12345', '7189090000',10, 5),
(11, 'Walter', 'Remache', '88 Kimbern Street', 'Rosedalle', 'KS', '33221', '7324567890', 50,3),
(12 ,'Wes', 'Hernandes', '59 Washington Street', 'Boston', 'IL', '48790', '86565656566', 50, 2),
(13, 'Mary', 'Sweet', '19 Alaska St', 'New Haven', 'MA', '43421', '6144444435',30,3),
(14, 'Jacob', 'Bruno', '1544 4th St', 'Harrison', 'DE', '14221', '1235554435',10,3);





use final_project;

-- Create a user named mgs_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO mgs_user@localhost
IDENTIFIED BY 'pa55word';

USE final_project;
  CREATE VIEW all_records AS
  SELECT e.employee_id,employee_first_name, employee_last_name,
    employee_address, employee_city, employee_state, employee_zip, employee_phone,
    p.project_id, project_name, project_manager_name, project_description,project_size,
    i.insurance_id, insurance_name, order_date, expiration_date
FROM insurances i  JOIN employees e
ON i.insurance_id = e.insurance_id_d
JOIN projects p
ON p.project_id = e.project_id_d
ORDER BY employee_id;
