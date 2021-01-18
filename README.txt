table user creation code:

create table form.User (user_id INT NOT NULL AUTO_INCREMENT,
			email VARCHAR(100) NOT NULL,
			fname VARCHAR(20) NOT NULL,
			pass VARCHAR(200) NOT NULL,
			reg_date VARCHAR(40) NOT NULL,
			UNIQUE KEY(email),
		        PRIMARY KEY (user_id));


/****************************************************************************************************************************/

table departement creation code:

create table form.Departement(id INT NOT NULL AUTO_INCREMENT,
			      dname VARCHAR(24),
			      descr VARCHAR(100),
			      PRIMARY KEY (id));

/****************************************************************************************************************************/

insert in departement code:

INSERT INTO `departement`(`name`, `descr`) VALUES ("marketing","marketing is creative departement");
INSERT INTO `departement`(`name`, `descr`) VALUES ("IT","IT is hard departement");
INSERT INTO `departement`(`name`, `descr`) VALUES ("finance","finance is good departement");

/****************************************************************************************************************************/

please also check:
bounes i've made: -ajax and jquery
 		  -css
		  -encrypted password
		  -email validation

