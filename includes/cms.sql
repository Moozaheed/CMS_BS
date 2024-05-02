DROP DATABASE IF EXISTS cms;

create database cms;

use cms;

create table categories(
cat_id int primary key auto_increment,
cat_tittle varchar (255)
);

insert into categories(cat_tittle)
values ("Mozahed 1563"),
("Brain Station 23"),
("PHP Team"),
("2 Mohakhali");

create table author(
author_id int primary key auto_increment,
author_name varchar(255),
author_mail text,
author_mobile varchar(255),
author_password varchar(255)
);

create table posts(
post_id int primary key auto_increment,
post_category_id int,
post_title varchar(255),
post_author_id int,
post_date date,
post_image text,
post_content text,
post_tags varchar(255),
post_comment_count int,
post_status VARCHAR(255) DEFAULT 'Draft',
foreign key (post_id) references categories(cat_id),
foreign key (post_author_id) references author(author_id)
);