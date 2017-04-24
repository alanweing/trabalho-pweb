CREATE DATABASE IF NOT EXISTS trabalho_alan;

create table trabalho_alan.products
(
	id int not null auto_increment
		primary key,
	name varchar(45) not null,
	value float not null,
	created_at datetime default CURRENT_TIMESTAMP not null,
	updated_at datetime default CURRENT_TIMESTAMP not null
)
;

INSERT INTO trabalho_alan.products (name, value, created_at, updated_at) VALUES ('Abacate', 2.22, '2017-04-24 11:47:37', '2017-04-24 11:47:37');
INSERT INTO trabalho_alan.products (name, value, created_at, updated_at) VALUES ('MaÃ§a Gala', 1.23, '2017-04-24 12:03:52', '2017-04-24 12:03:52');
INSERT INTO trabalho_alan.products (name, value, created_at, updated_at) VALUES ('Tangerina', 9.87, '2017-04-24 12:04:02', '2017-04-24 12:04:02');
INSERT INTO trabalho_alan.products (name, value, created_at, updated_at) VALUES ('Uva', 2.34, '2017-04-24 12:04:11', '2017-04-24 12:04:11');