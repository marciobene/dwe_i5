CREATE TABLE usuario(
email varchar(50) PRIMARY KEY,
nome varchar(20),
sobrenome varchar(20),
cidade varchar(15),
estado varchar(2),
idade varchar(3),
senha varchar(20) NOT NULL,
admin boolean
);

insert into usuario values ('admin', 'a', 'a', 'a', 'a', '20', 'admin', true);

CREATE TABLE log(
email varchar(50),
data timestamp
);


CREATE TABLE sensor(
id numeric PRIMARY KEY,
nome_sensor varchar(15),
descricao varchar(25)
);

insert into sensor values (1, 'Temperatura', 'LM35');

CREATE TABLE leituras(
data_leitura timestamp,
valor float,
id numeric,
FOREIGN KEY (id) REFERENCES sensor(id)
);

insert into leituras values ('	10/10/2010	05:13:54	', 	50	,	1	);
insert into leituras values ('	11/12/2010	15:02:54	', 	32	,	1	);
insert into leituras values ('	11/02/2010	00:51:54	', 	65	,	1	);
insert into leituras values ('	14/04/2010	10:40:54	', 	44	,	1	);
insert into leituras values ('	15/06/2010	20:29:54	', 	51.5	,	1	);
insert into leituras values ('	16/08/2011	06:18:54	', 	53	,	1	);
insert into leituras values ('	10/10/2011	16:07:54	', 	54.5	,	1	);
insert into leituras values ('	11/12/2011	01:56:54	', 	56	,	1	);
insert into leituras values ('	11/02/2012	11:45:54	', 	57.5	,	1	);
insert into leituras values ('	14/04/2012	21:34:54	', 	59	,	1	);
insert into leituras values ('	15/06/2012	07:23:54	', 	60.5	,	1	);
insert into leituras values ('	10/10/2010	17:12:54	', 	62	,	1	);
insert into leituras values ('	11/12/2010	03:01:54	', 	63.5	,	1	);
insert into leituras values ('	11/02/2010	12:50:54	', 	65	,	1	);
insert into leituras values ('	14/04/2010	22:39:54	', 	66.5	,	1	);
insert into leituras values ('	15/06/2010	08:28:54	', 	68	,	1	);
insert into leituras values ('	16/08/2011	18:17:54	', 	69.5	,	1	);
insert into leituras values ('	10/10/2011	04:06:54	', 	71	,	1	);
insert into leituras values ('	11/12/2011	13:55:54	', 	72.5	,	1	);
insert into leituras values ('	11/02/2012	23:44:54	', 	74	,	1	);
insert into leituras values ('	14/04/2012	09:33:54	', 	75.5	,	1	);
insert into leituras values ('	15/06/2012	19:22:54	', 	77	,	1	);
insert into leituras values ('	10/10/2010	05:11:54	', 	78.5	,	1	);
insert into leituras values ('	11/12/2010	15:00:54	', 	80	,	1	);
insert into leituras values ('	11/02/2010	00:49:54	', 	81.5	,	1	);
insert into leituras values ('	14/04/2010	10:38:54	', 	83	,	1	);
insert into leituras values ('	15/06/2010	20:27:54	', 	84.5	,	1	);
insert into leituras values ('	16/08/2011	06:16:54	', 	86	,	1	);
insert into leituras values ('	10/10/2011	16:05:54	', 	87.5	,	1	);
insert into leituras values ('	11/12/2011	01:54:54	', 	89	,	1	);
insert into leituras values ('	11/02/2012	11:43:54	', 	90.5	,	1	);
insert into leituras values ('	14/04/2012	21:32:54	', 	92	,	1	);
insert into leituras values ('	15/06/2012	07:21:54	', 	93.5	,	1	);
insert into leituras values ('	10/10/2010	17:10:54	', 	95	,	1	);
insert into leituras values ('	11/12/2010	02:59:54	', 	96.5	,	1	);
insert into leituras values ('	11/02/2010	12:48:54	', 	98	,	1	);
insert into leituras values ('	14/04/2010	22:37:54	', 	99.5	,	1	);
insert into leituras values ('	15/06/2010	08:26:54	', 	101	,	1	);
insert into leituras values ('	16/08/2011	18:15:54	', 	102.5	,	1	);
insert into leituras values ('	10/10/2011	04:04:54	', 	104	,	1	);
insert into leituras values ('	11/12/2011	13:53:54	', 	105.5	,	1	);
insert into leituras values ('	10/10/2010	23:42:54	', 	107	,	1	);
insert into leituras values ('	11/12/2010	09:31:54	', 	108.5	,	1	);
insert into leituras values ('	11/02/2010	19:20:54	', 	110	,	1	);
insert into leituras values ('	14/04/2010	05:09:54	', 	111.5	,	1	);
insert into leituras values ('	15/06/2010	14:58:54	', 	113	,	1	);
insert into leituras values ('	16/08/2011	00:47:54	', 	114.5	,	1	);
insert into leituras values ('	10/10/2011	10:36:54	', 	116	,	1	);
insert into leituras values ('	11/12/2011	20:25:54	', 	117.5	,	1	);
insert into leituras values ('	11/02/2012	06:14:54	', 	119	,	1	);
insert into leituras values ('	14/04/2012	16:03:54	', 	120.5	,	1	);
insert into leituras values ('	15/06/2012	01:52:54	', 	122	,	1	);
insert into leituras values ('	10/10/2010	11:41:54	', 	123.5	,	1	);
insert into leituras values ('	11/12/2010	21:30:54	', 	125	,	1	);
insert into leituras values ('	11/02/2010	07:19:54	', 	126.5	,	1	);
insert into leituras values ('	14/04/2010	17:08:54	', 	128	,	1	);
insert into leituras values ('	15/06/2010	02:57:54	', 	129.5	,	1	);
insert into leituras values ('	16/08/2011	12:46:54	', 	131	,	1	);
insert into leituras values ('	10/10/2011	22:35:54	', 	132.5	,	1	);
insert into leituras values ('	11/12/2011	08:24:54	', 	134	,	1	);
insert into leituras values ('	11/02/2012	18:13:54	', 	135.5	,	1	);
insert into leituras values ('	14/04/2012	04:02:54	', 	137	,	1	);
insert into leituras values ('	15/06/2012	13:51:54	', 	138.5	,	1	);
insert into leituras values ('	10/10/2010	23:40:54	', 	140	,	1	);
insert into leituras values ('	11/12/2010	09:29:54	', 	141.5	,	1	);
insert into leituras values ('	11/02/2010	19:18:54	', 	143	,	1	);
insert into leituras values ('	14/04/2010	05:07:54	', 	144.5	,	1	);
insert into leituras values ('	15/06/2010	14:56:54	', 	146	,	1	);
insert into leituras values ('	16/08/2011	00:45:54	', 	147.5	,	1	);

select * from usuario;
select * from leituras;
select * from sensor;
select * from log;