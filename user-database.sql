create database user;
use user;

create table userInfo
(
    userInfoId   int auto_increment primary key,
    userInfoName varchar(20) unique not null,
    userInfoPass varchar(255)       not null
);

create table livreOr
(
    id          int auto_increment primary key,
    pseudo      varchar(20) not null,
    message     varchar(50) not null,

    dateMessage varchar(50) not null
)