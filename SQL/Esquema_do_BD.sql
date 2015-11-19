CREATE TABLE usuario(
email varchar(50) PRIMARY KEY,
nome varchar(20),
sobrenome varchar(20),
cidade varchar(15),
estado varchar(2),
idade varchar(3),
senha varchar(20) NOT NULL
);

CREATE TABLE sensor(
id numeric PRIMARY KEY,
nome_sensor varchar(15),
descricao varchar(25)
);

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

insert into leituras values ('	10/10/2010	05:13:54	', 	123.5	,	2	);
insert into leituras values ('	11/12/2010	14:02:54	', 	128	,	2	);
insert into leituras values ('	11/02/2010	00:31:33	', 	134	,	2	);
insert into leituras values ('	14/04/2010	10:40:21	', 	141.5	,	2	);
insert into leituras values ('	15/06/2010	20:29:49	', 	144.5	,	2	);
insert into leituras values ('	16/08/2011	05:13:54	', 	147.5	,	2	);
insert into leituras values ('	10/10/2011	14:02:54	', 	123.6	,	2	);
insert into leituras values ('	11/12/2011	00:31:33	', 	140	,	2	);
insert into leituras values ('	11/02/2012	10:40:21	', 	146	,	2	);
insert into leituras values ('	14/04/2012	20:29:49	', 	141.6	,	2	);
insert into leituras values ('	15/06/2012	05:13:54	', 	144.6	,	2	);
insert into leituras values ('	10/10/2014	14:02:54	', 	147.6	,	2	);
insert into leituras values ('	11/12/2014	00:31:33	', 	123.7	,	2	);
insert into leituras values ('	11/02/2015	10:40:21	', 	152	,	2	);
insert into leituras values ('	14/04/2015	20:29:49	', 	158	,	2	);
insert into leituras values ('	15/06/2014	05:13:54	', 	141.7	,	2	);
insert into leituras values ('	11/02/2010	14:02:54	', 	144.7	,	2	);
insert into leituras values ('	14/04/2010	00:31:33	', 	147.7	,	2	);
insert into leituras values ('	15/06/2010	10:40:21	', 	123.8	,	2	);
insert into leituras values ('	16/08/2011	20:29:49	', 	164	,	2	);
insert into leituras values ('	10/10/2011	05:13:54	', 	170	,	2	);
insert into leituras values ('	11/12/2011	14:02:54	', 	141.8	,	2	);
insert into leituras values ('	11/02/2012	00:31:33	', 	144.8	,	2	);
insert into leituras values ('	14/04/2012	10:40:21	', 	147.8	,	2	);
insert into leituras values ('	15/06/2012	20:29:49	', 	123.9	,	2	);
insert into leituras values ('	10/10/2014	05:13:54	', 	176	,	2	);
insert into leituras values ('	11/12/2014	14:02:54	', 	182	,	2	);
insert into leituras values ('	11/02/2015	00:31:33	', 	141.9	,	2	);
insert into leituras values ('	14/04/2015	10:40:21	', 	144.9	,	2	);
insert into leituras values ('	15/06/2014	20:29:49	', 	147.9	,	2	);
insert into leituras values ('	11/02/2010	05:13:54	', 	123.10	,	2	);
insert into leituras values ('	14/04/2010	14:02:54	', 	188	,	2	);
insert into leituras values ('	15/06/2010	00:31:33	', 	194	,	2	);
insert into leituras values ('	16/08/2011	10:40:21	', 	141.10	,	2	);
insert into leituras values ('	10/10/2011	20:29:49	', 	144.10	,	2	);
insert into leituras values ('	11/12/2011	05:13:54	', 	147.10	,	2	);
insert into leituras values ('	11/02/2012	14:02:54	', 	123.11	,	2	);
insert into leituras values ('	14/04/2012	00:31:33	', 	200	,	2	);
insert into leituras values ('	15/06/2012	10:40:21	', 	206	,	2	);
insert into leituras values ('	10/10/2014	20:29:49	', 	141.11	,	2	);
insert into leituras values ('	11/12/2014	05:13:54	', 	144.11	,	2	);
insert into leituras values ('	11/02/2015	14:02:54	', 	147.11	,	2	);
insert into leituras values ('	14/04/2015	00:31:33	', 	123.12	,	2	);
insert into leituras values ('	15/06/2014	10:40:21	', 	212	,	2	);
insert into leituras values ('	11/02/2010	20:29:49	', 	218	,	2	);
insert into leituras values ('	14/04/2010	05:13:54	', 	141.12	,	2	);
insert into leituras values ('	15/06/2010	14:02:54	', 	144.12	,	2	);
insert into leituras values ('	16/08/2011	00:31:33	', 	147.12	,	2	);
insert into leituras values ('	10/10/2011	10:40:21	', 	123.13	,	2	);
insert into leituras values ('	11/12/2011	20:29:49	', 	224	,	2	);
insert into leituras values ('	11/02/2012	05:13:54	', 	230	,	2	);
insert into leituras values ('	14/04/2012	14:02:54	', 	141.13	,	2	);
insert into leituras values ('	15/06/2012	00:31:33	', 	144.13	,	2	);
insert into leituras values ('	10/10/2014	10:40:21	', 	147.13	,	2	);
insert into leituras values ('	11/12/2014	20:29:49	', 	123.14	,	2	);
insert into leituras values ('	11/02/2015	05:13:54	', 	236	,	2	);
insert into leituras values ('	14/04/2015	14:02:54	', 	242	,	2	);
insert into leituras values ('	15/06/2014	00:31:33	', 	141.14	,	2	);
insert into leituras values ('	11/02/2010	10:40:21	', 	144.14	,	2	);
insert into leituras values ('	14/04/2010	20:29:49	', 	147.14	,	2	);
insert into leituras values ('	15/06/2010	05:13:54	', 	123.15	,	2	);
insert into leituras values ('	16/08/2011	14:02:54	', 	248	,	2	);
insert into leituras values ('	10/10/2011	00:31:33	', 	254	,	2	);
insert into leituras values ('	11/12/2011	10:40:21	', 	141.15	,	2	);
insert into leituras values ('	11/02/2012	20:29:49	', 	144.15	,	2	);
insert into leituras values ('	14/04/2012	05:13:54	', 	147.15	,	2	);
insert into leituras values ('	15/06/2012	14:02:54	', 	123.16	,	2	);
insert into leituras values ('	10/10/2014	00:31:33	', 	260	,	2	);
insert into leituras values ('	11/12/2014	10:40:21	', 	266	,	2	);

insert into leituras values ('	10/10/2010	05:13:54	', 	33	,	3	);
insert into leituras values ('	11/12/2010	14:02:54	', 	11	,	3	);
insert into leituras values ('	11/02/2010	00:31:33	', 	76	,	3	);
insert into leituras values ('	14/04/2010	10:40:21	', 	22	,	3	);
insert into leituras values ('	15/06/2010	20:29:49	', 	12	,	3	);
insert into leituras values ('	16/08/2011	05:13:54	', 	30	,	3	);
insert into leituras values ('	10/10/2011	14:02:54	', 	44	,	3	);
insert into leituras values ('	11/12/2011	00:31:33	', 	34	,	3	);
insert into leituras values ('	11/02/2012	10:40:21	', 	76	,	3	);
insert into leituras values ('	14/04/2012	20:29:49	', 	22	,	3	);
insert into leituras values ('	15/06/2012	05:13:54	', 	12	,	3	);
insert into leituras values ('	10/10/2014	14:02:54	', 	30	,	3	);
insert into leituras values ('	11/12/2014	00:31:33	', 	32	,	3	);
insert into leituras values ('	11/02/2015	10:40:21	', 	32	,	3	);
insert into leituras values ('	14/04/2015	20:29:49	', 	32	,	3	);
insert into leituras values ('	15/06/2014	05:13:54	', 	32	,	3	);
insert into leituras values ('	11/02/2010	14:02:54	', 	32	,	3	);
insert into leituras values ('	14/04/2010	00:31:33	', 	31	,	3	);
insert into leituras values ('	15/06/2010	10:40:21	', 	31	,	3	);
insert into leituras values ('	16/08/2011	20:29:49	', 	31	,	3	);
insert into leituras values ('	10/10/2011	05:13:54	', 	31	,	3	);
insert into leituras values ('	11/12/2011	14:02:54	', 	31	,	3	);
insert into leituras values ('	11/02/2012	00:31:33	', 	30	,	3	);
insert into leituras values ('	14/04/2012	10:40:21	', 	30	,	3	);
insert into leituras values ('	15/06/2012	20:29:49	', 	30	,	3	);
insert into leituras values ('	10/10/2014	05:13:54	', 	30	,	3	);
insert into leituras values ('	11/12/2014	14:02:54	', 	30	,	3	);
insert into leituras values ('	11/02/2015	00:31:33	', 	29	,	3	);
insert into leituras values ('	14/04/2015	10:40:21	', 	29	,	3	);
insert into leituras values ('	15/06/2014	20:29:49	', 	29	,	3	);
insert into leituras values ('	11/02/2010	05:13:54	', 	29	,	3	);
insert into leituras values ('	14/04/2010	14:02:54	', 	29	,	3	);
insert into leituras values ('	15/06/2010	00:31:33	', 	29	,	3	);
insert into leituras values ('	16/08/2011	10:40:21	', 	28	,	3	);
insert into leituras values ('	10/10/2011	20:29:49	', 	28	,	3	);
insert into leituras values ('	11/12/2011	05:13:54	', 	28	,	3	);
insert into leituras values ('	11/02/2012	14:02:54	', 	28	,	3	);
insert into leituras values ('	14/04/2012	00:31:33	', 	28	,	3	);
insert into leituras values ('	15/06/2012	10:40:21	', 	27	,	3	);
insert into leituras values ('	10/10/2014	20:29:49	', 	27	,	3	);
insert into leituras values ('	11/12/2014	05:13:54	', 	27	,	3	);
insert into leituras values ('	11/02/2015	14:02:54	', 	27	,	3	);
insert into leituras values ('	14/04/2015	00:31:33	', 	27	,	3	);
insert into leituras values ('	15/06/2014	10:40:21	', 	26	,	3	);
insert into leituras values ('	11/02/2010	20:29:49	', 	26	,	3	);
insert into leituras values ('	14/04/2010	05:13:54	', 	26	,	3	);
insert into leituras values ('	15/06/2010	14:02:54	', 	26	,	3	);
insert into leituras values ('	16/08/2011	00:31:33	', 	26	,	3	);
insert into leituras values ('	10/10/2011	10:40:21	', 	26	,	3	);
insert into leituras values ('	11/12/2011	20:29:49	', 	25	,	3	);
insert into leituras values ('	11/02/2012	05:13:54	', 	25	,	3	);
insert into leituras values ('	14/04/2012	14:02:54	', 	25	,	3	);
insert into leituras values ('	15/06/2012	00:31:33	', 	25	,	3	);
insert into leituras values ('	10/10/2014	10:40:21	', 	25	,	3	);
insert into leituras values ('	11/12/2014	20:29:49	', 	24	,	3	);
insert into leituras values ('	11/02/2015	05:13:54	', 	24	,	3	);
insert into leituras values ('	14/04/2015	14:02:54	', 	24	,	3	);
insert into leituras values ('	15/06/2014	00:31:33	', 	24	,	3	);
insert into leituras values ('	11/02/2010	10:40:21	', 	24	,	3	);
insert into leituras values ('	14/04/2010	20:29:49	', 	23	,	3	);
insert into leituras values ('	15/06/2010	05:13:54	', 	23	,	3	);
insert into leituras values ('	16/08/2011	14:02:54	', 	23	,	3	);
insert into leituras values ('	10/10/2011	00:31:33	', 	23	,	3	);
insert into leituras values ('	11/12/2011	10:40:21	', 	23	,	3	);
insert into leituras values ('	11/02/2012	20:29:49	', 	23	,	3	);
insert into leituras values ('	14/04/2012	05:13:54	', 	22	,	3	);
insert into leituras values ('	15/06/2012	14:02:54	', 	22	,	3	);
insert into leituras values ('	10/10/2014	00:31:33	', 	22	,	3	);
insert into leituras values ('	11/12/2014	10:40:21	', 	22	,	3	);

insert into sensor values (1, 'Temperatura', 'XPTO-sensor');
insert into sensor values (2, 'Humidade', 'WET-sensor');
insert into sensor values (3, 'Presenca', 'HI-sensor');

select * from usuario;
select * from leituras;
select * from sensor;