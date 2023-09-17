CREATE DATABASE project;

USE project;

create TABLE `category`(
	categoryID INT AUTO_INCREMENT PRIMARY KEY NOT NULL, 
	`name` VARCHAR(255) NOT NULL
);


CREATE TABLE product(
	productID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	categoryID INT ,	
	`name` VARCHAR(255) NOT NULL,
	detail TEXT NOT NULL,
	price DOUBLE NOT NULL,
	picture VARCHAR(500),
	FOREIGN KEY (categoryID) REFERENCES category(categoryID)
);


create table admin(
	username varchar(255) primary KEY not NULL ,
	password char(40) not null,
	fullname varchar(255) not null,
	phone char(11) not null,
	email varchar(255) not NULL,
	pass VARCHAR(255) NOT NULL
);


INSERT INTO admin(username, password) VALUES('nhi', '123456');

UPDATE admin SET password = SHA('123456') WHERE username = 'nhi';
