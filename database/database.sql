use project;
drop table if exists userregs;
use project;
drop table if exists userregs;
create table userregs(
  id int(10) primary key auto_increment,
  first_name varchar(50),
  last_name varchar(50),
  organization varchar(50),
  street varchar(30),
  city varchar(30),
  email varchar(50),
  phone varchar(15),
  passward varchar(30),
  confirm_pass varchar(30),
  license_key varchar(50),
  expire_date date
);
insert into userregs(first_name,last_name,organization,street,city,email,phone,passward,confirm_pass)values('Md.','Shohag','Dpi','48/i','Dhaka','sample@gmail.com','174800000','123','123');