
CREATE TABLE `usuarios` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`cpf` varchar(11),
	`nome` varchar(80) NOT NULL,
	`email` varchar(255) NOT NULL,
	`telefone` varchar(15) NOT NULL
);

INSERT INTO `usuarios` (`cpf`,`nome`,`email`,`telefone`) VALUES 
  ('1234567','Lukas','kukafernando@hotmail.com','981557716'),('6666666','Christofer','christofer666@diabo.com','981234561');