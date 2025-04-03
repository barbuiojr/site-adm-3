Grid layout

- Maik brito (YT)
- Origamid (site e YT)
https://dontpad.com/senac145/produtos

DER - Diagrama de Entridade de Relacionamento
DML - Data Manipulation Language
Insert
Updade
Delete
Select

DDL - Data Definition Language
Create
Alter
Drop

DQL - Data Query Language
São os comandos de consulta.

DCL - Data Control Language
São os comandos para controlar a parte de segurança do banco de dados.

DTL - Data Transaction Language
São os comandos para controle de transação.

  insert into artigo (titulo, categoria_id, conteudo) values
    ('LOREM',
    (select id from categoria where nome = "Banco de Dados"),
    'LOREM IPSUM'
    );