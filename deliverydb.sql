//CREATE TABLE

CREATE TABLE users (
    userID int(15) Primary Key,
    fullname varchar(255),
    username varchar(255) unique,
    email varchar(255),
    contactno varchar(11),
    address varchar(255),
    birthdate date,
    password varchar(255),
    status int(11)
);

//
