

//Table user

CREATE TABLE `user`
 (
 user_id INT(11) AUTO_INCREMENT PRIMARY KEY,
 user_name VARCHAR(45),
 user_password varchar(45)
 );

 // Table address

CREATE TABLE `address`
 (
 address_id INT(11) AUTO_INCREMENT PRIMARY KEY,
 street VARCHAR(45),
 pincode VARCHAR(45),
 country VARCHAR(45),
 state VARCHAR(45),
 phoneno VARCHAR(45)
 )
