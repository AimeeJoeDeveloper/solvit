CREATE database students;

CREATE TABLE student_info( studentid int IDENTITY(1,1) NOT NULL, 
firstname varchar (200) , lastname varchar (200) , email varchar (100) );

Insert into student_info(studentid,firstname,lastname, email) 
Values(1,'Aimee','Joseph', 'aimeejoe@solvitafrica.com');


