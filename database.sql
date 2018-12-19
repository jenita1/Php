for login

create database User;
	use User;
	CREATE TABLE 'User'{
	'id' int(11) NOT NULL auto_increment,
	'username' varchar(150) NOT NULL,
	'password' varchar(150) NOT NULL,
	PRIMARY KEY ('id')
	};


	for trainee


	create database information;
		use information;
		CREATE TABLE 'information'{
		'id' int(11) NOT NULL auto_increment,
		'Name' varchar(255) NOT NULL,
		'Address' varchar(255) NOT NULL,
		'Salary' varchar(255) NOT NULL,
		'Sex' varchar(10) NOT NULL,
		primary key('id')
		};