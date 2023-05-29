Create DATABASE hw1;
USE hw1:

CREATE TABLE users (
    id integer primary key auto_increment,
    username varchar(16) not null unique,
    password varchar(255) not null,
    email varchar(255) not null unique,
    name varchar(255) not null,
    surname varchar(255) not null,
    propic varchar(255)
) Engine = InnoDB;

CREATE TABLE books (
    id integer primary key auto_increment,
    user integer not null,
    content json
) Engine = InnoDB;