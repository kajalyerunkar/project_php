create table brands(

	br_id int auto_increment primary key,
	br_name varchar(100)

);


create table categories(

	ca_id int auto_increment primary key,
	ca_name varchar(100)

);


create table products(
	pro_id int auto_increment,
	pro_name text, 
	pro_price numeric,
	pro_discount tinyint,
	pro_description longtext,
	pro_caid int,
	pro_brid int,
	pro_time timestamp,
	primary key(pro_id)
);

alter table products add column pro_path text after pro_brid;

insert into products values ('','mens office formal wear',2500.00,20,'mens office formal wear',1,3,'product1.jpg','');
insert into products values ('','Womens Party wear',2000.00,40,'Womens Party wear',2,2,'product6.jpg','');
insert into products values ('','Kids Tshirt wear',1500.00,80,'Kids Tshirt wear',3,4,'product11.jpg','');

create table users(

	us_id int auto_increment primary key,
	us_name varchar(100),
	us_mobile bigint,
	us_email varchar(100),
	us_password varchar(100),
	us_time timestamp

);