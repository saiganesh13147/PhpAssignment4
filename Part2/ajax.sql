CREATE DATABASE Message_Board_SaiGanesh;

USE Message_Board_SaiGanesh;

CREATE TABLE Messages (
userid int NOT NULL auto_increment PRIMARY KEY,
username varchar(30) ,
message varchar(50)
);



