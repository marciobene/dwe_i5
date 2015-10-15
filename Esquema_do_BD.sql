CREATE TABLE usuario(
user varchar(15) PRIMARY KEY,
nome varchar(30),
cidade varchar(15),
estado varchar(15),
idade numeric,
senha varchar(20),
admin boolean,
sensor1 boolean,
sensor2 boolean,
sensor3 boolean
);

CREATE TABLE log(
user varchar(15),
data_acesso timestamp,
acao varchar(20),
sensor varchar(8),
FOREIGN KEY (user) REFERENCES usuario(user)
);

CREATE TABLE sensor(
id numeric PRIMARY KEY,
nome_sensor varchar(15),
descricao varchar(25),
);

CREATE TABLE leituras(
id numeric,
data_leitura timestamp,
valor float,
FOREIGN KEY (id) REFERENCES sensor(id)
);