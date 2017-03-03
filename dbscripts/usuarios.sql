CREATE DATABASE 'usarios_CarChange';
USE 'usarios_CarChange';

CREATE TABLE 'usuarios' (
	'id' int(11) NOT NULL AUTO_INCREMENT,
	'cpf' varchar(11),
	'nome' varchar(80) NOT NULL,
	'email' varchar(255) NOT NULL,
	'telefone' varchar(15) NOT NULL
) ENGINE = InnoDB AUTO_INCREMENT = 11 DEFAULT CHARSET = latin1;