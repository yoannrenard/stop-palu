DROP TABLE IF EXISTS contact;
CREATE TABLE contact (
	id tinyint(5) unsigned primary key auto_increment,
	lastname varchar(250),
	firstname varchar(250),
	email varchar(150),
	phone varchar(15),
	object varchar(150),
	msg text,
	status tinyint(1) unsigned,
	last_modify datetime
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

 DROP TABLE IF EXISTS member;
CREATE TABLE member (
	id tinyint(5) unsigned primary key auto_increment,
	mode enum('membre bienfaiteur', 'membre actif') default 'membre bienfaiteur', 
	lastname varchar(250),
	firstname varchar(250),
	email varchar(150),
	phone varchar(15),
	origin varchar(250),
	status tinyint(1) unsigned,
	last_modify datetime
) ENGINE=InnoDB DEFAULT CHARSET=utf8;