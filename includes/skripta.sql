drop database if exists logindb;
create database logindb character set utf8 collate utf8_general_ci;
use logindb;

create  table users(
sifra int not null primary key auto_increment,
username varchar(50) not null,
pasword varchar(50)not null,
email varchar(50) not null,
datumprijave TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)engine=innodb CHARACTER SET utf8 COLLATE utf8_general_ci;

insert into users (sifra, username, pasword, email) values (1, 'Jure12321', 'asdjč23iheds', 'jure3@dwa.com');
insert into users (sifra, username, pasword, email) values (2, 'ddase12321', 'wq23dsheds', 'jdasv@dwa.com');

select * from users; 